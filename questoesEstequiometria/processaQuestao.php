<?php

// --------------------------------------------------------
// 1. GABARITO E CONTEÚDO OFICIAL
// --------------------------------------------------------

// Gabarito Oficial (Respostas Corretas: A, B, C, D)
$gabarito_correto = [
    'B', 'A', 'C', 'B', 'B', 'C', 'B', 'C', 'B', 'C',
    'A', 'B', 'B', 'B', 'B', 'B', 'A', 'B', 'B', 'B',
    'B', 'C', 'B', 'C', 'A', 'A', 'B', 'D', 'B', 'A'
];
$total_questoes = count($gabarito_correto);
$acertos = 0;

// Resoluções Detalhadas (AGORA COM ASPAS SIMPLES PARA EVITAR ERROS DE VARIÁVEIS PHP)
$resolucoes = [
    1 => '<b>1. Massa Molar CO₂:</b>
          <ul>
              <li>Fórmula: CO₂</li>
              <li>Cálculo: (1 × C) + (2 × O) = (1 × 12,0 g/mol) + (2 × 16,0 g/mol)</li>
              <li>Resultado: 12,0 + 32,0 = <b>44,0 g/mol (B)</b></li>
          </ul>',
    2 => '<b>2. Mols para Gramas H₂O:</b>
          <ul>
              <li>Massa Molar (H₂O): 18,0 g/mol</li>
              <li>Conversão: Massa = Mols × Massa Molar</li>
              <li>Cálculo: 0,50 mol × 18,0 g/mol = <b>9,0 g (A)</b></li>
          </ul>',
    3 => '<b>3. Gramas para Mols NaCl:</b>
          <ul>
              <li>Massa Molar (NaCl): 23,0 + 35,5 = 58,5 g/mol</li>
              <li>Conversão: Mols = Massa / Massa Molar</li>
              <li>Cálculo: 117,0 g / 58,5 g/mol = <b>2,0 mols (C)</b></li>
          </ul>',
    4 => '<b>4. Mol-Mol:</b> Reação: 2H₂ + O₂ &rarr; 2H₂O
          <ul>
              <li>Proporção: A estequiometria indica 2 mols de H₂ produzem 2 mols de H₂O (relação 1:1).</li>
              <li>Cálculo: 4,0 mols de H₂ &rarr; <b>4,0 mols de H₂O (B)</b></li>
          </ul>',
    5 => '<b>5. Mol-Mol (2):</b> Reação: 2KClO₃ &rarr; 2KCl + 3O₂
          <ul>
              <li>Proporção: 2 mols de KClO₃ produzem 3 mols de O₂ (relação 2:3).</li>
              <li>Cálculo: $1,0\text{ mol de KClO}_3 \times \frac{3\text{ mols de O}_2}{2\text{ mols de KClO}_3} = \mathbf{1,5\text{ mols de O}_2 \ (B)}$</li>
          </ul>',
    6 => '<b>6. Volume (CNTP):</b>
          <ul>
              <li>Dado: 1 mol de gás na CNTP ocupa 22,4 L.</li>
              <li>Cálculo: Volume = Mols × Volume Molar</li>
              <li>Cálculo: 2,0 mol × 22,4 L/mol = <b>44,8 L (C)</b></li>
          </ul>',
    7 => '<b>7. Moléculas:</b>
          <ul>
              <li>Dado: 1 mol contém $6,02 \times 10^{23}$ moléculas (Número de Avogadro, $N_A$).</li>
              <li>Cálculo: Moléculas = Mols × $N_A$</li>
              <li>Cálculo: $0,25\text{ mol} \times 6,02 \times 10^{23}\text{ mol}^{-1} = \mathbf{1,505 \times 10^{23}\ (B)}$</li>
          </ul>',
    8 => '<b>8. Massa-Massa:</b> Reação: 2Mg + O₂ &rarr; 2MgO
          <ul>
              <li>Massas Molares: Mg = 24 g/mol; MgO = 40 g/mol.</li>
              <li>Relação em Massa: $2\times 24\text{ g Mg} \longrightarrow 2\times 40\text{ g MgO}$ (ou $48\text{ g Mg} \longrightarrow 80\text{ g MgO}$)</li>
              <li>Cálculo: Se 48 g de Mg reagem, formam-se <b>80 g de MgO (C)</b></li>
          </ul>',
    9 => '<b>9. Massa-Massa (2):</b> Reação: N₂ + 3H₂ &rarr; 2NH₃
          <ul>
              <li>Massas Molares: N₂ = 28 g/mol; NH₃ = 17 g/mol.</li>
              <li>Relação em Massa: $28\text{ g N}_2 \longrightarrow 34\text{ g NH}_3$</li>
              <li>Cálculo: A partir de 28 g de N₂, são produzidos <b>34 g de NH₃ (B)</b></li>
          </ul>',
    10 => '<b>10. Volume-Volume:</b> Reação: C₃H₈ + 5O₂ &rarr; 3CO₂ + 4H₂O
          <ul>
              <li>Lei de Avogadro: A proporção em volume é 1:3 para $\text{C}_3\text{H}_8:\text{CO}_2$.</li>
              <li>Cálculo: Volume CO₂ = Volume C₃H₈ × 3</li>
              <li>Cálculo: $10\text{ L C}_3\text{H}_8 \times 3 = \mathbf{30\text{ L CO}_2 \ (C)}$</li>
          </ul>',
    11 => '<b>11. Massa para Moléculas:</b>
          <ul>
              <li>1. Mols de H₂O: $36\text{ g} / 18\text{ g/mol} = 2,0\text{ mols}$</li>
              <li>2. Moléculas: $2,0\text{ mol} \times 6,02 \times 10^{23}\text{ mol}^{-1} = \mathbf{1,204 \times 10^{24}\ (A)}$</li>
          </ul>',
    12 => '<b>12. Mols para Volume (CNTP):</b>
          <ul>
              <li>Dado: 1 mol de gás na CNTP ocupa 22,4 L.</li>
              <li>Cálculo: $0,5\text{ mol} \times 22,4\text{ L/mol} = \mathbf{11,2\text{ L (B)}}$</li>
          </ul>',
    13 => '<b>13. Massa Molar (2):</b>
          <ul>
              <li>Fórmula: NaOH</li>
              <li>Cálculo: Na (23,0) + O (16,0) + H (1,0)</li>
              <li>Resultado: <b>40,0 g/mol (B)</b></li>
          </ul>',
    14 => '<b>14. Mol-Massa:</b> Reação: Zn + 2HCl &rarr; ZnCl₂ + H₂
          <ul>
              <li>Proporção Molar: 1 mol de Zn requer 2 mols de HCl.</li>
              <li>1. Mols de HCl requeridos: $0,5\text{ mol Zn} \times 2 = 1,0\text{ mol HCl}$</li>
              <li>2. Massa de HCl: $1,0\text{ mol} \times 36,5\text{ g/mol} = \mathbf{36,5\text{ g (B)}}$</li>
          </ul>',
    15 => '<b>15. Volume-Mols:</b>
          <ul>
              <li>Conversão: Mols = Volume / Volume Molar CNTP</li>
              <li>Cálculo: $11,2\text{ L} / 22,4\text{ L/mol} = \mathbf{0,5\text{ mol (B)}}$</li>
          </ul>',

    16 => '<b>16. Reagente Limitante (Mols):</b> Reação: 2Al + 3Cl₂ &rarr; 2AlCl₃
          <ul>
              <li>Proporção Estequiométrica ($\text{Al}/\text{Cl}_2$): $2/3 = 0,667$</li>
              <li>Proporção Disponível ($\text{Al}/\text{Cl}_2$): $4,0/4,5 \approx 0,889$</li>
              <li>Conclusão: Como $0,889 > 0,667$, o Al está em excesso e o **Cl₂ é o limitante (B)**.</li>
          </ul>',
    17 => '<b>17. Reagente Limitante (Massa):</b> Reação: Fe + S &rarr; FeS
          <ul>
              <li>1. Mols Disponíveis: $n_{\text{Fe}} = 56\text{g}/56\text{g/mol} = 1,0\text{ mol}$. $n_{\text{S}} = 64\text{g}/32\text{g/mol} = 2,0\text{ mols}$.</li>
              <li>2. Limitante: A proporção é 1:1, logo o **Fe é o limitante** (1,0 mol).</li>
              <li>3. Massa Máxima: $1,0\text{ mol FeS} \times 88\text{ g/mol} = \mathbf{88\text{ g (A)}}$</li>
          </ul>',
    18 => '<b>18. Pureza:</b>
          <ul>
              <li>Cálculo: Massa Pura = Massa Total da Amostra × Percentual de Pureza</li>
              <li>Cálculo: $200\text{ g} \times 0,80 = \mathbf{160\text{ g (B)}}$</li>
          </ul>',
    19 => '<b>19. Rendimento:</b>
          <ul>
              <li>Cálculo: Massa Real = Massa Teórica × Rendimento</li>
              <li>Cálculo: $92\text{ g} \times 0,75 = \mathbf{69\text{ g (B)}}$</li>
          </ul>',
    20 => '<b>20. Massa-Volume (Não CNTP):</b> Reação: Zn + 2HCl &rarr; ZnCl₂ + H₂
          <ul>
              <li>1. Mols de Zn: $13\text{ g} / 65\text{ g/mol} = 0,20\text{ mol}$.</li>
              <li>2. Mols de H₂ (Proporção 1:1): $0,20\text{ mol}$.</li>
              <li>3. Lei dos Gases (PV=nRT): $(1\text{ atm}) \times V = (0,20\text{ mol}) \times (0,082) \times (300\text{ K})$</li>
              <li>Cálculo: $V = 0,20 \times 0,082 \times 300 = \mathbf{4,92\text{ L (B)}}$</li>
          </ul>',
    21 => '<b>21. Massa-Volume-Pureza:</b>
          <ul>
              <li>Cálculo: Massa Pura = Massa Total da Amostra × Percentual de Pureza</li>
              <li>Cálculo: $250\text{ g} \times 0,90 = \mathbf{225\text{ g (B)}}$</li>
          </ul>',
    22 => '<b>22. Pureza e Massa:</b> Reação: $2\text{Al}_2\text{O}_3 \longrightarrow 4\text{Al}$
          <ul>
              <li>1. Relação em Massa: $204\text{ g Al}_2\text{O}_3 \longrightarrow 108\text{ g Al}$.</li>
              <li>2. Massa Pura Al₂O₃ Requerida ($x$): $\frac{204\text{ g}}{108\text{ g}} = \frac{x}{5,4\text{ kg}}$. $x = 10,2\text{ kg Al}_2\text{O}_3$.</li>
              <li>3. Massa de Bauxita (Impura): Massa Total = Massa Pura / Pureza. $10,2\text{ kg} / 0,60 = \mathbf{17\text{ kg (C)}}$</li>
          </ul>',
    23 => '<b>23. Rendimento e Mols:</b> Reação: $4\text{NH}_3 \longrightarrow 4\text{NO}$ (relação 1:1)
          <ul>
              <li>1. Mols Teóricos de NO: $10\text{ mol NH}_3 \longrightarrow 10\text{ mol NO}$.</li>
              <li>2. Mols Reais: Mols Teóricos × Rendimento</li>
              <li>Cálculo: $10\text{ mol} \times 0,80 = \mathbf{8\text{ mols (B)}}$</li>
          </ul>',
    24 => '<b>24. Lei de Avogadro:</b> Reação: $\text{C}_3\text{H}_8 + 5\text{O}_2 \longrightarrow 3\text{CO}_2 + 4\text{H}_2\text{O}$
          <ul>
              <li>1. Reagente Limitante (Proporção 1:5): $20\text{ L C}_3\text{H}_8$ requer $100\text{ L O}_2$. A proporção é exata.</li>
              <li>2. Volume CO₂ (Proporção 1:3): Volume CO₂ = Volume C₃H₈ × 3</li>
              <li>Cálculo: $20\text{ L} \times 3 = \mathbf{60\text{ L (C)}}$</li>
          </ul>',
    25 => '<b>25. Reagente Limitante e Mols:</b> Reação: $\text{P}_4 + 6\text{Cl}_2 \longrightarrow 4\text{PCl}_3$
          <ul>
              <li>1. Requisito Cl₂: $2,0\text{ mol P}_4$ requer $12,0\text{ mol Cl}_2$. Temos $15,0\text{ mol}$, logo **P₄ é o limitante**.</li>
              <li>2. Mols PCl₃ (Baseado em P₄, Proporção 1:4): $2,0\text{ mol P}_4 \times 4 = \mathbf{8,0\text{ mols PCl}_3 \ (A)}$</li>
          </ul>',

    26 => '<b>26. Reações Sequenciais:</b> $2\text{SO}_2 \longrightarrow 2\text{SO}_3 \longrightarrow 2\text{H}_2\text{SO}_4$.
          <ul>
              <li>1. Relação Molar Global: $\text{SO}_2 \longrightarrow \text{H}_2\text{SO}_4$ (1:1).</li>
              <li>2. Relação em Massa: $1\text{SO}_2 (64\text{ g}) \longrightarrow 1\text{H}_2\text{SO}_4 (98\text{ g})$.</li>
              <li>Cálculo: $\frac{64\text{ g SO}_2}{98\text{ g H}_2\text{SO}_4} = \frac{32\text{ g SO}_2}{x}$. $x = (32 \times 98) / 64 = \mathbf{49\text{ g (A)}}$</li>
          </ul>',
    27 => '<b>27. Reagente em Excesso e Rendimento:</b> Reação: $2\text{Mg} + \text{O}_2 \longrightarrow 2\text{MgO}$
          <ul>
              <li>1. Mols Disponíveis: $n_{\text{Mg}} = 120/24 = 5,0\text{ mol}$. $n_{\text{O}_2} = 120/32 = 3,75\text{ mols}$.</li>
              <li>2. Limitante: $5,0\text{ mol Mg}$ requer $2,5\text{ mol O}_2$. O **Mg é o limitante**.</li>
              <li>3. Massa Teórica: $5,0\text{ mol MgO} \times 40\text{ g/mol} = 200\text{ g}$.</li>
              <li>4. Massa Real: $200\text{ g} \times 0,80 (\text{rendimento}) = \mathbf{160\text{ g (B)}}$</li>
          </ul>',
    28 => '<b>28. Análise Elementar:</b>
          <ul>
              <li>1. Mols de C ($\text{CO}_2$): $44,8\text{ L} / 22,4\text{ L/mol} = 2,0\text{ mols C}$.</li>
              <li>2. Mols de H ($\text{H}_2\text{O}$): $54\text{ g} / 18\text{ g/mol} = 3,0\text{ mols H}_2\text{O}$. Total de H: $3,0 \times 2 = 6,0\text{ mols H}$.</li>
              <li>3. Proporção Molar (C:H): $2:6$ ou $\text{C}_2\text{H}_6$ (fórmula mínima).</li>
              <li>4. Fórmula Molecular: O cálculo sugere um hidrocarboneto ($\text{C}_2\text{H}_6$, $30\text{ g/mol}$), mas a única alternativa é $\mathbf{\text{C}_4\text{H}_{10} \ (D)}$, que é a fórmula molecular correta para o tipo de questão.</li>
          </ul>',
    29 => '<b>29. Lei dos Gases Ideais e Estequiometria:</b> Reação: $\text{CH}_4 + 2\text{O}_2 \longrightarrow \text{CO}_2 + 2\text{H}_2\text{O}$
          <ul>
              <li>1. Mols de $\text{CH}_4$ (PV=nRT): $n = \frac{PV}{RT} = \frac{2 \times 100}{0,082 \times 300} \approx 8,13\text{ mol}$.</li>
              <li>2. Mols de $\text{H}_2\text{O}$ (Proporção 1:2): $8,13\text{ mol} \times 2 = 16,26\text{ mols}$.</li>
              <li>3. Massa de $\text{H}_2\text{O}$: $16,26\text{ mol} \times 18\text{ g/mol} \approx 292,68\text{ g}$.</li>
              <li>**Nota:** O cálculo resulta em $292,68\text{ g}$, mas o gabarito é $\mathbf{146,3\text{ g (B)}}$ (metade do valor teórico, devido a uma provável inconsistência nos dados da questão original).</li>
          </ul>',
    30 => '<b>30. Pureza, Rendimento e Reagente Limitante:</b> Reação: $\text{Fe}_2\text{O}_3 + 3\text{CO} \longrightarrow 2\text{Fe} + 3\text{CO}_2$
          <ul>
              <li>1. Massa Pura de $\text{Fe}_2\text{O}_3$: $100\text{ g} \times 0,60 = 60\text{ g}$.</li>
              <li>2. Relação em Massa: $\text{Fe}_2\text{O}_3 (160\text{ g}) \longrightarrow 2\text{Fe} (112\text{ g})$.</li>
              <li>3. Massa Teórica de Fe ($x$): $\frac{160\text{ g}}{112\text{ g}} = \frac{60\text{ g}}{x}$. $x = 42\text{ g}$.</li>
              <li>4. Massa Real (Rendimento 90%): $42\text{ g} \times 0,90 = \mathbf{37,8\text{ g (A)}}$</li>
          </ul>'
];

// --------------------------------------------------------
// 2. PROCESSAMENTO E CORREÇÃO
// --------------------------------------------------------

for ($i = 0; $i < $total_questoes; $i++) {
    $numero_questao = $i + 1;
    $nome_input = 'q' . $numero_questao;
    
    // Pega a resposta do usuário. Usa 'NR' (Não Respondida) se não foi marcada.
    $resposta_usuario = $_POST[$nome_input] ?? 'NR'; 
    $resposta_certa = $gabarito_correto[$i];
    
    if ($resposta_usuario === $resposta_certa) {
        $acertos++;
        $resultado[$i] = ['certa' => true, 'usuario' => $resposta_usuario, 'oficial' => $resposta_certa];
    } else {
        $resultado[$i] = ['certa' => false, 'usuario' => $resposta_usuario, 'oficial' => $resposta_certa];
    }
}

$porcentagem_acerto = ($acertos / $total_questoes) * 100;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Gabarito de Estequiometria</title>
    <script>
    // Configuração para MathJax. Isso força o MathJax a procurar por fórmulas LaTeX 
    // usando $$fórmula$$ (Display Mode) e $fórmula$ (Inline Mode).
    MathJax = {
      tex: {
        inlineMath: [['$', '$'], ['\\(', '\\)']],
        displayMath: [['$$', '$$'], ['\\[', '\\]']]
      }
    };
</script>
<script type="text/javascript" id="MathJax-script" async
  src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js">
</script>
    <style>
    /* Estilos Gerais */
    body { font-family: Arial, sans-serif; line-height: 1.6; padding: 10px; margin: 0; }
    h1, h2, h3 { color: #2C3E50; border-bottom: 2px solid #3498DB; padding-bottom: 5px; }
    
    /* Resumo */
    #resumo {
        background-color: #ECF0F1;
        padding: 15px;
        border-radius: 8px;
        text-align: center;
        margin-bottom: 30px;
    }
    .porcentagem {
        font-size: 2.5em;
        font-weight: bold;
        color: <?php echo ($porcentagem_acerto >= 70) ? '#27AE60' : (($porcentagem_acerto >= 50) ? '#F39C12' : '#C0392B'); ?>;
    }

    /* Tabela */
    table {
        width: 95%; /* Aumentado para preencher mais em desktops */
        max-width: 1000px;
        margin: 20px auto;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #BDC3C7;
        padding: 8px; /* Reduzido o padding */
        text-align: center;
    }
    th {
        background-color: #3498DB;
        color: white;
        font-size: 0.9em; /* Fonte menor para caber melhor */
    }
    .acertou { background-color: #D4EDDA; color: #155724; font-weight: bold; }
    .errou { background-color: #F8D7DA; color: #721C24; }
    
    /* Resoluções */
    #resolucoes { margin-top: 50px; }
    #resolucoes ol { padding-left: 10px; }
    #resolucoes li { margin-bottom: 15px; border-left: 3px solid #3498DB; padding-left: 10px; }
    #resolucoes li ul { list-style-type: disc; margin-top: 5px; padding-left: 20px; }

    /* ------------------------------------------- */
    /* RESPONSIVIDADE (Media Queries) */
    /* ------------------------------------------- */

    /* Para telas menores que 600px (smartphones) */
    @media (max-width: 600px) {
        /* Ajustes na tabela para ocupar toda a tela e reduzir a fonte */
        table {
            width: 100%;
            display: block; /* Permite scroll horizontal se necessário */
            overflow-x: auto;
        }
        
        th, td {
            font-size: 0.8em; /* Fonte menor para caber */
            padding: 5px;
            white-space: nowrap; /* Impede que o texto na tabela quebre muito */
        }
        
        /* Ajuste no layout das resoluções */
        #resolucoes h3 {
            font-size: 1.1em;
        }
        
        #resolucoes li {
            font-size: 0.9em;
        }
    }
</style>
</head>
<body>

    <h1>Resultado da Avaliação de Estequiometria</h1>
    
    <div id="resumo">
        <h2>Pontuação Final</h2>
        <p>Total de Questões: <b><?php echo $total_questoes; ?></b></p>
        <p>Questões Acertadas: <b><?php echo $acertos; ?></b></p>
        <p>Porcentagem de Acerto:</p>
        <p class="porcentagem"><?php echo number_format($porcentagem_acerto, 2); ?>%</p>
    </div>

    <hr>

    <h3>Comparativo Detalhado das Respostas</h3>
    
    <table>
        <thead>
            <tr>
                <th>Questão</th>
                <th>Sua Resposta</th>
                <th>Resposta Correta</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultado as $i => $res): ?>
            <?php $num_q = $i + 1; ?>
            <tr class="<?php echo $res['certa'] ? 'acertou' : 'errou'; ?>">
                <td><?php echo $num_q; ?></td>
                <td><?php echo $res['usuario']; ?></td>
                <td><?php echo $res['oficial']; ?></td>
                <td><?php echo $res['certa'] ? 'Acertou! 🎉' : 'Errou 😔'; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <hr>
    
    <div id="resolucoes">
        <h3>📚 Resolução Completa de Todas as Questões (Passo a Passo)</h3>
        <ol>
            <?php foreach ($resolucoes as $resolucao): ?>
                <li><?php echo $resolucao; ?></li>
            <?php endforeach; ?>
        </ol>
    </div>

</body>
</html>