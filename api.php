<?php

$con = mysqli_connect('localhost', 'root', '','form');
$sql = "SELECT * FROM `formulario`;";
$rs = mysqli_query($con,$sql);
if($rs){
    if(mysqli_num_rows($rs) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>NOME</th>";
                echo "<th>CPF</th>";
                echo "<th>EMAIL</th>";
                echo "<th>DATA DE NASCIMENTO</th>";
                echo "<th>LOCAL DE NASCIMENTO</th>";
                echo "<th>PROFISSÃO</th>";
                echo "<th>RG</th>";
                echo "<th>CARGO</th>";
                echo "<th>REGISTRO PROFISSIONAL</th>";
                echo "<th>FORMAÇÃO ACADÊMICA</th>";
                echo "<th>CEP</th>";
                echo "<th>ENDEREÇO</th>";
                echo "<th>NÚMERO DA RESIDENCIA</th>";
                echo "<th>BAIRRO</th>";
                echo "<th>CIDADE</th>";
                echo "<th>ESTADO</th>";
                echo "<th>TELEFONE</th>";
                echo "<th>CELULAR</th>";
                echo "<th>FUNÇÃO</th>";
                echo "<th>WEBSITE</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($rs)){
            echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['NOME'] . "</td>";
                echo "<td>" . $row['CPF'] . "</td>";
                echo "<td>" . $row['EMAIL'] . "</td>";
                echo "<td>" . $row['D_NASCIMENTO'] . "</td>";
                echo "<td>" . $row['L_NASCIMENTO'] . "</td>";
                echo "<td>" . $row['PROFISSAO'] . "</td>";
                echo "<td>" . $row['RG'] . "</td>";
                echo "<td>" . $row['CARGO'] . "</td>";
                echo "<td>" . $row['REGISTRO'] . "</td>";
                echo "<td>" . $row['FORMACAO'] . "</td>";
                echo "<td>" . $row['CEP'] . "</td>";
                echo "<td>" . $row['ENDERECO'] . "</td>";
                echo "<td>" . $row['N_ENDERECO'] . "</td>";
                echo "<td>" . $row['BAIRRO'] . "</td>";
                echo "<td>" . $row['CIDADE'] . "</td>";
                echo "<td>" . $row['ESTADO'] . "</td>";
                echo "<td>" . $row['TELEFONE'] . "</td>";
                echo "<td>" . $row['CELULAR'] . "</td>";
                echo "<td>" . $row['FUNCAO'] . "</td>";
                echo "<td>" . $row['WEBSITE'] . "</td>";             
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($rs);
    }
}
?>