<?php include 'processaindex.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>30 Questões de Estequiometria para Prática</title>
    <style>
        /* Estilos Gerais */
        body { font-family: Arial, sans-serif; line-height: 1.6; padding: 10px; margin: 0; }
        h1, h2 { color: #2C3E50; }
        ol { list-style-type: decimal; padding-left: 20px; }
        li { margin-bottom: 20px; border-left: 3px solid #3498DB; padding-left: 10px; }
        b { color: #E74C3C; }
        .options { list-style-type: upper-alpha; margin-top: 10px; }
        .options li { border-left: none; margin-bottom: 5px; padding-left: 0; }
        
        /* Estilos do Formulário Gabarito */
        #gabarito-form {
            border: 2px solid #2C3E50;
            padding: 15px; 
            margin-top: 30px; 
            background-color: #ECF0F1;
            border-radius: 8px;
        }
        #gabarito-form h2 {
            text-align: center;
            color: #2C3E50;
            margin-top: 0;
            border-bottom: 2px dashed #BDC3C7;
            padding-bottom: 10px;
        }
        
        /* Contêiner Flexível para os grupos de questão */
        .gabarito-container {
            display: flex; /* Habilita o Flexbox */
            flex-wrap: wrap; /* Permite que os itens quebrem a linha */
            justify-content: center; /* Centraliza os grupos */
        }
        
        .question-group {
            width: 150px; /* Largura padrão para desktop */
            margin: 5px;
            padding: 5px;
            border: 1px solid #BDC3C7;
            border-radius: 4px;
            background-color: white;
            box-sizing: border-box; /* Garante que padding e borda não aumentem a largura */
        }
        .question-group p {
            font-weight: bold;
            margin-top: 0;
            margin-bottom: 5px;
            color: #3498DB;
            font-size: 0.9em;
        }
        .question-group label {
            margin-right: 5px;
            cursor: pointer;
            display: inline-block;
        }
        .submit-btn {
            display: block;
            width: 80%; 
            max-width: 300px;
            margin: 20px auto 0;
            padding: 10px;
            background-color: #2ECC71;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #27AE60;
        }

        /* ------------------------------------------- */
        /* RESPONSIVIDADE (Media Queries) */
        /* ------------------------------------------- */

        /* Para telas menores que 600px (smartphones) */
        @media (max-width: 600px) {
            body {
                padding: 10px;
            }
            
            #gabarito-form {
                padding: 10px 5px;
            }

            /* Força 2 grupos por linha */
            .question-group {
                width: 47%; 
                margin: 5px 1%;
                padding: 8px 5px;
            }
            
            .question-group label {
                margin-right: 10px;
            }
            
            .question-group p {
                font-size: 0.85em;
            }
        }

        /* Para telas muito pequenas (até 350px) - força 1 questão por linha */
        @media (max-width: 350px) {
            .question-group {
                width: 98%;
                margin: 5px 1%;
            }
        }
    </style>
</head>
<body>

    <h1>📝 30 Questões de Estequiometria para Prática</h1>
    <p>Abaixo estão as questões de estequiometria, separadas por nível de dificuldade (Nota que foi o Gemini que fez as perguntas e as respostas )</p>
    <p>gabarito esta ao final da pagina , ao terminar aperte em enviar</p>

    <h2>1. 15 Questões Fáceis (Estequiometria Básica)</h2>
    <ol start="1">
        <li>
            <p><b>1. Massa Molar:</b> Qual a <b>massa molar</b> do dióxido de carbono (CO<sub>2</sub>)? (Massas Atômicas: C = 12,0 g/mol, O = 16,0 g/mol).</p>
            <ul class="options">
                <li>A) 28,0 g/mol</li>
                <li>B) 44,0 g/mol</li>
                <li>C) 32,0 g/mol</li>
                <li>D) 48,0 g/mol</li>
            </ul>
        </li>
        <li>
            <p><b>2. Mols para Gramas:</b> Quantos <b>gramas</b> correspondem a 0,50 mol de água (H<sub>2</sub>O)? (Massas Atômicas: H = 1,0 g/mol, O = 16,0 g/mol).</p>
            <ul class="options">
                <li>A) 9,0 g</li>
                <li>B) 18,0 g</li>
                <li>C) 0,50 g</li>
                <li>D) 36,0 g</li>
            </ul>
        </li>
        <li>
            <p><b>3. Gramas para Mols:</b> Quantos <b>mols</b> de cloreto de sódio (NaCl) estão presentes em 117,0 g dessa substância? (Massas Atômicas: Na = 23,0 g/mol, Cl = 35,5 g/mol).</p>
            <ul class="options">
                <li>A) 1,0 mol</li>
                <li>B) 1,5 mol</li>
                <li>C) 2,0 mol</li>
                <li>D) 3,0 mol</li>
            </ul>
        </li>
        <li>
            <p><b>4. Mol-Mol:</b> Na reação balanceada 2H<sub>2</sub> + O<sub>2</sub> &rarr; 2H<sub>2</sub>O, quantos <b>mols</b> de água são produzidos a partir de 4,0 mol de hidrogênio (H<sub>2</sub>)?</p>
            <ul class="options">
                <li>A) 2,0 mol</li>
                <li>B) 4,0 mol</li>
                <li>C) 8,0 mol</li>
                <li>D) 1,0 mol</li>
            </ul>
        </li>
        <li>
            <p><b>5. Mol-Mol (2):</b> Na decomposição 2KClO<sub>3</sub> &rarr; 2KCl + 3O<sub>2</sub>, quantos <b>mols</b> de gás oxigênio (O<sub>2</sub>) são formados a partir de 1,0 mol de clorato de potássio (KClO<sub>3</sub>)?</p>
            <ul class="options">
                <li>A) 1,0 mol</li>
                <li>B) 1,5 mol</li>
                <li>C) 2,0 mol</li>
                <li>D) 3,0 mol</li>
            </ul>
        </li>
        <li>
            <p><b>6. Volume (CNTP):</b> Qual o <b>volume</b> ocupado por 2,0 mol de gás nitrogênio (N<sub>2</sub>) nas Condições Normais de Temperatura e Pressão (CNTP)? (Volume Molar CNTP = 22,4 L/mol).</p>
            <ul class="options">
                <li>A) 11,2 L</li>
                <li>B) 22,4 L</li>
                <li>C) 44,8 L</li>
                <li>D) 4,48 L</li>
            </ul>
        </li>
        <li>
            <p><b>7. Moléculas:</b> Quantas <b>moléculas</b> estão presentes em 0,25 mol de gás metano (CH<sub>4</sub>)? (Use N<sub>A</sub> = 6,02 &times; 10<sup>23</sup> moléculas/mol).</p>
            <ul class="options">
                <li>A) 6,02 &times; 10<sup>23</sup></li>
                <li>B) 1,505 &times; 10<sup>23</sup></li>
                <li>C) 3,01 &times; 10<sup>23</sup></li>
                <li>D) 1,204 &times; 10<sup>24</sup></li>
            </ul>
        </li>
        <li>
            <p><b>8. Massa-Massa:</b> O magnésio reage com o oxigênio para formar óxido de magnésio (2Mg + O<sub>2</sub> &rarr; 2MgO). Se 48 g de magnésio (Mg) reagem, qual a <b>massa</b> de óxido de magnésio (MgO) formada? (Massas Molares: Mg = 24 g/mol, MgO = 40 g/mol).</p>
            <ul class="options">
                <li>A) 40 g</li>
                <li>B) 64 g</li>
                <li>C) 80 g</li>
                <li>D) 160 g</li>
            </ul>
        </li>
        <li>
            <p><b>9. Massa-Massa (2):</b> Na produção de amônia (N<sub>2</sub> + 3H<sub>2</sub> &rarr; 2NH<sub>3</sub>), que <b>massa</b> de amônia (NH<sub>3</sub>) é produzida a partir de 28 g de gás nitrogênio (N<sub>2</sub>)? (Massas Molares: N<sub>2</sub> = 28 g/mol, NH<sub>3</sub> = 17 g/mol).</p>
            <ul class="options">
                <li>A) 17 g</li>
                <li>B) 34 g</li>
                <li>C) 28 g</li>
                <li>D) 51 g</li>
            </ul>
        </li>
        <li>
            <p><b>10. Volume-Volume:</b> A reação de combustão do propano é C<sub>3</sub>H<sub>8</sub> + 5O<sub>2</sub> &rarr; 3CO<sub>2</sub> + 4H<sub>2</sub>O. Qual o <b>volume</b> de gás carbônico (CO<sub>2</sub>) produzido pela combustão completa de 10 L de propano (C<sub>3</sub>H<sub>8</sub>) nas mesmas condições de T e P?</p>
            <ul class="options">
                <li>A) 10 L</li>
                <li>B) 20 L</li>
                <li>C) 30 L</li>
                <li>D) 40 L</li>
            </ul>
        </li>
        <li>
            <p><b>11. Massa para Moléculas:</b> Qual o número de <b>moléculas</b> de H<sub>2</sub>O presentes em 36 g de água? (Massa Molar H<sub>2</sub>O = 18 g/mol, N<sub>A</sub> = 6,02 &times; 10<sup>23</sup> moléculas/mol).</p>
            <ul class="options">
                <li>A) 1,204 &times; 10<sup>24</sup></li>
                <li>B) 6,02 &times; 10<sup>23</sup></li>
                <li>C) 3,01 &times; 10<sup>23</sup></li>
                <li>D) 1,806 &times; 10<sup>24</sup></li>
            </ul>
        </li>
        <li>
            <p><b>12. Mols para Volume (CNTP):</b> Qual o <b>volume</b> em L de 0,5 mol de gás carbônico (CO<sub>2</sub>) nas CNTP?</p>
            <ul class="options">
                <li>A) 22,4 L</li>
                <li>B) 11,2 L</li>
                <li>C) 5,6 L</li>
                <li>D) 44,8 L</li>
            </ul>
        </li>
        <li>
            <p><b>13. Massa Molar (2):</b> Calcule a <b>massa molar</b> do hidróxido de sódio (NaOH). (Massas Atômicas: Na = 23,0 g/mol, O = 16,0 g/mol, H = 1,0 g/mol).</p>
            <ul class="options">
                <li>A) 39,0 g/mol</li>
                <li>B) 40,0 g/mol</li>
                <li>C) 46,0 g/mol</li>
                <li>D) 50,0 g/mol</li>
            </ul>
        </li>
        <li>
            <p><b>14. Mol-Massa:</b> Qual a <b>massa</b> de cloreto de hidrogênio (HCl) necessária para reagir completamente com 0,5 mol de Zn na reação Zn + 2HCl &rarr; ZnCl<sub>2</sub> + H<sub>2</sub>? (Massa Molar HCl = 36,5 g/mol).</p>
            <ul class="options">
                <li>A) 18,25 g</li>
                <li>B) 36,5 g</li>
                <li>C) 73,0 g</li>
                <li>D) 54,75 g</li>
            </ul>
        </li>
        <li>
            <p><b>15. Volume-Mols:</b> Quantos <b>mols</b> de gás oxigênio (O<sub>2</sub>) estão contidos em 11,2 L nas CNTP?</p>
            <ul class="options">
                <li>A) 0,25 mol</li>
                <li>B) 0,5 mol</li>
                <li>C) 1,0 mol</li>
                <li>D) 2,0 mol</li>
            </ul>
        </li>
    </ol>

    <hr>
    
    <h2>2. 10 Questões Médias (Reagente Limitante, Rendimento e Pureza Simples)</h2>
    <ol start="16">
        <li>
            <p><b>16. Reagente Limitante (Mols):</b> Na reação 2Al + 3Cl<sub>2</sub> &rarr; 2AlCl<sub>3</sub>, se reagirmos 4,0 mol de alumínio (Al) com 4,5 mol de gás cloro (Cl<sub>2</sub>), qual é o <b>reagente limitante</b>?</p>
            <ul class="options">
                <li>A) Al</li>
                <li>B) Cl<sub>2</sub></li>
                <li>C) Ambos reagem completamente</li>
                <li>D) O produto AlCl<sub>3</sub></li>
            </ul>
        </li>
        <li>
            <p><b>17. Reagente Limitante (Massa):</b> A reação é Fe + S &rarr; FeS. Se 56 g de ferro (Fe) e 64 g de enxofre (S) reagirem, qual a <b>massa</b> máxima de sulfeto de ferro (FeS) que pode ser formada? (Massas Molares: Fe = 56 g/mol, S = 32 g/mol, FeS = 88 g/mol).</p>
            <ul class="options">
                <li>A) 88 g</li>
                <li>B) 120 g</li>
                <li>C) 160 g</li>
                <li>D) 128 g</li>
            </ul>
        </li>
        <li>
            <p><b>18. Pureza:</b> Uma amostra de calcário de 200 g contendo 80% de carbonato de cálcio (CaCO<sub>3</sub>) é aquecida para decomposição (CaCO<sub>3</sub> &rarr; CaO + CO<sub>2</sub>). Qual a <b>massa</b> real de CaCO<sub>3</sub> que irá reagir?</p>
            <ul class="options">
                <li>A) 200 g</li>
                <li>B) 160 g</li>
                <li>C) 120 g</li>
                <li>D) 40 g</li>
            </ul>
        </li>
        <li>
            <p><b>19. Rendimento:</b> Na reação C<sub>2</sub>H<sub>4</sub> + H<sub>2</sub>O &rarr; C<sub>2</sub>H<sub>5</sub>OH, se 56 g de etileno (C<sub>2</sub>H<sub>4</sub>) fossem produzir teoricamente 92 g de etanol (C<sub>2</sub>H<sub>5</sub>OH), mas o rendimento da reação é de 75%, qual a <b>massa real</b> de etanol produzida?</p>
            <ul class="options">
                <li>A) 92 g</li>
                <li>B) 69 g</li>
                <li>C) 46 g</li>
                <li>D) 115 g</li>
            </ul>
        </li>
        <li>
            <p><b>20. Massa-Volume (Não CNTP):</b> Que <b>volume</b> de gás hidrogênio (H<sub>2</sub>) a 27&deg;C e 1 atm pode ser produzido a partir da reação de 13 g de zinco (Zn) com excesso de HCl? (Zn + 2HCl &rarr; ZnCl<sub>2</sub> + H<sub>2</sub>). (Massa Molar Zn = 65 g/mol. Use R = 0,082 atm &middot; L / (mol &middot; K)).</p>
            <ul class="options">
                <li>A) 0,246 L</li>
                <li>B) 4,92 L</li>
                <li>C) 2,46 L</li>
                <li>D) 22,4 L</li>
            </ul>
        </li>
        <li>
            <p><b>21. Massa-Volume-Pureza:</b> Uma amostra de 250 g de óxido de cálcio impuro (CaO) com 90% de pureza reage com água (CaO + H<sub>2</sub>O &rarr; Ca(OH)<sub>2</sub>). Qual a <b>massa</b> real de CaO que irá reagir?</p>
            <ul class="options">
                <li>A) 250 g</li>
                <li>B) 225 g</li>
                <li>C) 200 g</li>
                <li>D) 180 g</li>
            </ul>
        </li>
        <li>
            <p><b>22. Pureza e Massa:</b> O alumínio é obtido a partir da bauxita, que contém 60% de óxido de alumínio (Al<sub>2</sub>O<sub>3</sub>). Qual a <b>massa</b> de bauxita necessária para obter 5,4 kg de Al? (Reação global: 2Al<sub>2</sub>O<sub>3</sub> &rarr; 4Al + 3O<sub>2</sub>. Massas Molares: Al<sub>2</sub>O<sub>3</sub> = 102 g/mol, Al = 27 g/mol).</p>
            <ul class="options">
                <li>A) 5,1 kg</li>
                <li>B) 10,2 kg</li>
                <li>C) 17 kg</li>
                <li>D) 8,5 kg</li>
            </ul>
        </li>
        <li>
            <p><b>23. Rendimento e Mols:</b> A reação 4NH<sub>3</sub> + 5O<sub>2</sub> &rarr; 4NO + 6H<sub>2</sub>O tem um rendimento de 80%. Se usarmos 10 mol de NH<sub>3</sub>, quantos <b>mols</b> de NO serão produzidos?</p>
            <ul class="options">
                <li>A) 10 mol</li>
                <li>B) 8 mol</li>
                <li>C) 6 mol</li>
                <li>D) 4 mol</li>
            </ul>
        </li>
        <li>
            <p><b>24. Lei de Avogadro:</b> 20 L de gás propano (C<sub>3</sub>H<sub>8</sub>) reagem com 100 L de gás oxigênio (O<sub>2</sub>) em condições de T e P constantes. Para a combustão C<sub>3</sub>H<sub>8</sub> + 5O<sub>2</sub> &rarr; 3CO<sub>2</sub> + 4H<sub>2</sub>O, qual o <b>volume</b> de gás carbônico (CO<sub>2</sub>) produzido?</p>
            <ul class="options">
                <li>A) 20 L</li>
                <li>B) 40 L</li>
                <li>C) 60 L</li>
                <li>D) 80 L</li>
            </ul>
        </li>
        <li>
            <p><b>25. Reagente Limitante e Mols:</b> Na reação P<sub>4</sub> + 6Cl<sub>2</sub> &rarr; 4PCl<sub>3</sub>, se misturarmos 2,0 mol de P<sub>4</sub> com 15,0 mol de Cl<sub>2</sub>, quantos <b>mols</b> de PCl<sub>3</sub> serão formados?</p>
            <ul class="options">
                <li>A) 8,0 mol</li>
                <li>B) 10,0 mol</li>
                <li>C) 15,0 mol</li>
                <li>D) 4,0 mol</li>
            </ul>
        </li>
    </ol>

    <hr>

    <h2>3. 5 Questões Difíceis (Reações Sequenciais, Estequiometria Avançada)</h2>
    <ol start="26">
        <li>
            <p><b>26. Reações Sequenciais (Acopladas):</b> O dióxido de enxofre (SO<sub>2</sub>) é oxidado a trióxido de enxofre (SO<sub>3</sub>) na primeira etapa (2SO<sub>2</sub> + O<sub>2</sub> &rarr; 2SO<sub>3</sub>). Em seguida, o SO<sub>3</sub> reage com água para formar ácido sulfúrico (SO<sub>3</sub> + H<sub>2</sub>O &rarr; H<sub>2</sub>SO<sub>4</sub>). Partindo de 32 g de SO<sub>2</sub>, qual a <b>massa</b> máxima de ácido sulfúrico (H<sub>2</sub>SO<sub>4</sub>) que pode ser formada? (Massas Molares: SO<sub>2</sub> = 64 g/mol, H<sub>2</sub>SO<sub>4</sub> = 98 g/mol).</p>
            <ul class="options">
                <li>A) 49 g</li>
                <li>B) 32 g</li>
                <li>C) 98 g</li>
                <li>D) 64 g</li>
            </ul>
        </li>
        <li>
            <p><b>27. Reagente em Excesso e Rendimento:</b> 120 g de magnésio (Mg) reagem com 120 g de oxigênio (O<sub>2</sub>) para formar óxido de magnésio (2Mg + O<sub>2</sub> &rarr; 2MgO). Se a reação tem 80% de rendimento, qual a <b>massa</b> de MgO realmente produzida? (Massas Molares: Mg = 24 g/mol, O<sub>2</sub> = 32 g/mol, MgO = 40 g/mol).</p>
            <ul class="options">
                <li>A) 200 g</li>
                <li>B) 160 g</li>
                <li>C) 120 g</li>
                <li>D) 192 g</li>
            </ul>
        </li>
        <li>
            <p><b>28. Análise Elementar e Estequiometria:</b> A combustão completa de 18 g de um hidrocarboneto desconhecido (C<sub>x</sub>H<sub>y</sub>) produz 54 g de água (H<sub>2</sub>O) e 44,8 L de dióxido de carbono (CO<sub>2</sub>) nas CNTP. Qual a <b>fórmula molecular</b> do hidrocarboneto?</p>
            <ul class="options">
                <li>A) C<sub>2</sub>H<sub>4</sub></li>
                <li>B) C<sub>3</sub>H<sub>6</sub></li>
                <li>C) C<sub>4</sub>H<sub>8</sub></li>
                <li>D) C<sub>4</sub>H<sub>10</sub></li>
            </ul>
        </li>
        <li>
            <p><b>29. Lei dos Gases Ideais e Estequiometria:</b> Em um processo industrial, 100 L de gás metano (CH<sub>4</sub>) a 27&deg;C e 2 atm são queimados. Se a reação é CH<sub>4</sub> + 2O<sub>2</sub> &rarr; CO<sub>2</sub> + 2H<sub>2</sub>O, qual a <b>massa</b> de água (H<sub>2</sub>O) produzida? (Massa Molar H<sub>2</sub>O = 18 g/mol. Use R = 0,082 atm &middot; L / (mol &middot; K)).</p>
            <ul class="options">
                <li>A) 128,9 g</li>
                <li>B) 146,3 g</li>
                <li>C) 160,0 g</li>
                <li>D) 192,5 g</li>
            </ul>
        </li>
        <li>
            <p><b>30. Pureza, Rendimento e Reagente Limitante:</b> 100 g de um minério com 60% de Fe<sub>2</sub>O<sub>3</sub> puro são usados para obter ferro por redução com monóxido de carbono (Fe<sub>2</sub>O<sub>3</sub> + 3CO &rarr; 2Fe + 3CO<sub>2</sub>). Se o rendimento do processo é de 90%, qual a <b>massa</b> de ferro (Fe) obtida? (Massas Molares: Fe<sub>2</sub>O<sub>3</sub> = 160 g/mol, Fe = 56 g/mol).</p>
            <ul class="options">
                <li>A) 37,8 g</li>
                <li>B) 33,6 g</li>
                <li>C) 42,0 g</li>
                <li>D) 50,4 g</li>
            </ul>
        </li>
    </ol>

    <hr>

    <form id="gabarito-form" action="processaQuestao.php" method="POST">
        <h2>✅ Meu Gabarito</h2>
        <p>Marque suas respostas abaixo e clique em "Enviar" para processá-las.</p>
        
        <div class="gabarito-container">
            
            <?php
            // Array de opções (A, B, C, D)
            $options = ['A', 'B', 'C', 'D'];
            
            for ($i = 1; $i <= 30; $i++) {
                echo '<div class="question-group">';
                echo '<p>Q' . $i . '</p>'; // Reduzido Q para caber melhor
                foreach ($options as $option) {
                    // O "name" deve ser único para cada questão (q1, q2, ...)
                    // O "value" é a opção marcada (A, B, C, D)
                    echo '<label>';
                    echo '<input type="radio" name="q' . $i . '" value="' . $option . '" required >';
                    echo $option;
                    echo '</label>';
                }
                echo '</div>';
            }
            ?>
        </div>
        
        <input type="submit" class="submit-btn" value="Enviar Gabarito para Correção">
    </form>
    </body>
</html>