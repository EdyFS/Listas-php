<?php

function conectar(){
    $conexao = new PDO("mysql:host=localhost; dbname=projeto_hotel", "root","");
    return $conexao;

}

function inserirHospede($nome, $fone, $checkin){
    try{
        $sql = "INSERT INTO Hospede (nome_hospede, telefone, data_checkin) VALUES (:nome, :fone, :checkin)";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":fone", $fone);
        $stmt->bindValue(":checkin", $checkin);
        return $stmt->execute();
    }
    catch(Exception $e){
        return 0;
    }
}

function mostrarHospedes(){
    try {
        $sql = "SELECT * FROM Hospede h";
        $conexao = conectar();
        return $conexao->query($sql);
    } catch (Exception $e) {
        return 0;
    }
}

function consultarHospedeId($id){
    try{
        $sql = "SELECT * FROM Hospede WHERE id_hospede = :id";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    catch (Exception $e){

    }
}

function alterarHospede($nome, $fone, $checkin, $id){
    try{
        $sql = "UPDATE Hospede SET nome_hospede = :nome, telefone = :fone, data_checkin = :checkin WHERE id_hospede = :id";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":fone", $fone);
        $stmt->bindValue(":checkin", $checkin);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    }
    catch(Exception $e){
        echo($e->getMessage());
        return 0; 
    }
}

function excluirHospede($id){
    try{
        $sql = "DELETE FROM Hospede WHERE id_hospede = :id";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    }
    catch(Exception $e){
        return 0; 
    }
}

function inserirQuarto($numero, $tipo, $preco){
    try{
        $sql = "INSERT INTO Quartos (numero_quarto, tipo, preco_por_noite) VALUES (:numero, :tipo, :preco)";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":numero", $numero);
        $stmt->bindValue(":tipo", $tipo);
        $stmt->bindValue(":preco", $preco);
        return $stmt->execute();
    }
    catch(Exception $e){
        return 0;
    }
}

function mostrarQuartos(){
    try {
        $sql = "SELECT * FROM Quartos q";
        $conexao = conectar();
        return $conexao->query($sql);
    } catch (Exception $e) {
        return 0;
    }
}

function consultarQuartoId($id){
    try{
        $sql = "SELECT * FROM Quartos WHERE id_quarto = :id";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    catch (Exception $e){

    }
}

function alterarQuarto($numero, $tipo, $preco, $id){
    try{
        $sql = "UPDATE Quartos SET numero_quarto = :numero, tipo = :tipo, preco_por_noite = :preco WHERE id_quarto = :id";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":numero", $numero);
        $stmt->bindValue(":tipo", $tipo);
        $stmt->bindValue(":preco", $preco);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    }
    catch(Exception $e){
        return 0;
    }
}

function excluirQuarto($id){
    try{
        $sql = "DELETE FROM Quartos WHERE id_quarto = :id";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    }
    catch(Exception $e){
        return 0;
    }
}

function inserirReserva($datareserva, $hospede, $quarto){
    try{
        $sql = "INSERT INTO Reserva (data_reserva, hospede, quarto) VALUES (:datareserva, :hospede, :quarto)";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":datareserva", $datareserva);
        $stmt->bindValue(":hospede", $hospede);
        $stmt->bindValue(":quarto", $quarto);
        return $stmt->execute();
    }
    catch(Exception $e){
        return 0;
    }
}

function mostrarReservas(){
    try {
        $sql = "SELECT id_reserva, data_reserva, hospede, quarto, nome_hospede, numero_quarto FROM Reserva r INNER JOIN Hospede h ON r.hospede = h.id_hospede INNER JOIN QUartos q ON r.quarto = q.id_quarto";
        $conexao = conectar();
        return $conexao->query($sql);
    } catch (Exception $e) {
        return 0;
    }
}

function consultarReservaId($id){
    try{
        $sql = "SELECT * FROM Reserva WHERE id_reserva = :id";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    catch (Exception $e){

    }
}

function alterarReserva($datareserva, $hospede, $quarto,$id){
    try{
        $sql = "UPDATE Reserva SET data_reserva = :datareserva, id_hospede = :hospede, id_quarto = :quarto WHERE id_reserva = :id";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":datareserva", $datareserva);
        $stmt->bindValue(":hospede", $hospede);
        $stmt->bindValue(":quarto", $quarto);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    }
    catch(Exception $e){
        return 0;
    }
}


function excluirReserva($id){
    try{
        $sql = "DELETE FROM Reserva WHERE id_reserva = :id";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    }
    catch(Exception $e){
        return 0;
    }
}
function inserirServico($servico, $custo, $reserva){
    try{
        $sql = "INSERT INTO Servicos (nome_servico, custo, reserva) VALUES (:servico, :custo, :reserva)";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":servico", $servico);
        $stmt->bindValue(":custo", $custo);
        $stmt->bindValue(":reserva", $reserva);
        return $stmt->execute();
    }
    catch(Exception $e){
        return 0;
    }
}

function consultarServicoId($id){
    try{
        $sql = "SELECT * FROM Servico WHERE id_servico = :id";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    catch (Exception $e){

    }
}
function mostrarServicos(){
    try {
        $sql = "SELECT id_servico, nome_servico, custo, reserva FROM Servicos s INNER JOIN Reserva r ON s.reserva = r.id_reserva";
        $conexao = conectar();
        return $conexao->query($sql);
    } catch (Exception $e) {
        return 0;
    }
}

function alterarServico($servico, $custo, $reserva, $id){
    try{
        $sql = "UPDATE Servicos SET nome_servico = :servico, custo = :custo, id_reserva = :reserva WHERE id_servico = :id";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":servico", $servico);
        $stmt->bindValue(":custo", $custo);
        $stmt->bindValue(":reserva", $reserva);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    }
    catch(Exception $e){
        return 0;
    }
}

function excluirServico($id){
    try{
        $sql = "DELETE FROM Servicos WHERE id_servico = :id";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    }
    catch(Exception $e){
        return 0; 
    }
}