<?php

if(isset($_POST['submit'])){
    $aprovados = array();
    $reprovados = array();
    foreach ($_POST['alunos'] as $aluno) {
      $nome = $aluno['nome'];
      $nota1 = $aluno['n1'];
      $nota2 = $aluno['n2'];
      $media = ($nota1 + $nota2) / 2;
      $aluno['media'] = $media;
      if ($media >= 6) {
        $aprovados[] = $aluno;
      } else {
        $reprovados[] = $aluno;
      }
    }
    echo "Aprovados: ";
    foreach ($aprovados as $aluno) {
      echo "Aluno: ", $aluno['nome'], " - Média: ", $aluno['media'];
    }
    
    echo "Reprovados: ";
    
    foreach ($reprovados as $aluno) {
      echo "Aluno: ", $aluno['nome'];
    }

  }
?>