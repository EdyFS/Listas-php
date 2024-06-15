<?php

function conectar(){
    $conexao = new PDO("mysql:host=localhost; dbname=projeto_hotel", "root","");
    return $conexao;

}

function inserirHospede($nome, $fone, $checkin){
    try{
        $sql = "INSERT INTO Hospede (nome_hospede, telefone, data_checkin) VALUES (:nome_hospede, :telefone, :data_checkin)";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome_hospede", $nome);
        $stmt->bindValue(":telefone", $fone);
        $stmt->bindValue(":data_checkin", $checkin);
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
        $sql = "UPDATE Hospede SET nome_hospede = :nome_hospede, telefone = :telefone, data_checkin = :data_checkin WHERE id_hospede = :id_hospede";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome_hospede", $nome);
        $stmt->bindValue(":telefone", $fone);
        $stmt->bindValue(":data_checkin", $checkin);
        $stmt->bindValue(":id_hospede", $id);
        return $stmt->execute();
    }
    catch(Exception $e){
        echo($e->getMessage());
        return 0; 
    }
}

function excluirHospede($id){
    try{
        $sql = "DELETE FROM Hospede WHERE id_hospede = :id_hospede";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id_hospede", $id);
        return $stmt->execute();
    }
    catch(Exception $e){
        return 0; 
    }
}

function inserirQuarto($numero, $tipo, $preco){
    try{
        $sql = "INSERT INTO Quartos (numero_quarto, tipo, preco_por_noite) VALUES (:numero_quarto, :tipo, :preco_por_noite)";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":numero_quarto", $numero);
        $stmt->bindValue(":tipo", $tipo);
        $stmt->bindValue(":preco_por_noite", $preco);
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
        $sql = "SELECT * FROM Quartos WHERE id_quarto = :id_quarto";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id_quarto", $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    catch (Exception $e){

    }
}

function alterarQuarto($numero, $tipo, $preco, $id){
    try{
        $sql = "UPDATE Quartos SET numero_quarto = :numero_quarto, tipo = :tipo, preco_por_noite = :preco_por_noite WHERE id_quarto = :id_quarto";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":numero_quarto", $numero);
        $stmt->bindValue(":tipo", $tipo);
        $stmt->bindValue(":preco_por_noite", $preco);
        $stmt->bindValue(":id_quarto", $id);
        return $stmt->execute();
    }
    catch(Exception $e){
        return 0;
    }
}

function excluirQuarto($id){
    try{
        $sql = "DELETE FROM Quartos WHERE id_quarto = :id_quarto";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id_quarto", $id);
        return $stmt->execute();
    }
    catch(Exception $e){
        return 0;
    }
}

function inserirReserva($datareserva, $hospede, $quarto){
    try{
        $sql = "INSERT INTO Reserva (data_reserva, hospede, quarto) VALUES (:data_reserva, :hospede, :quarto)";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":data_reserva", $datareserva);
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
        $sql = "SELECT * FROM Reserva WHERE id_reserva = :id_reserva";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id_reserva", $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    catch (Exception $e){

    }
}

function alterarReserva($datareserva, $hospede, $quarto,$id){
    try{
        $sql = "UPDATE Reserva SET data_reserva = :data_reserva, id_hospede = :id_hospede, id_quarto = :id_quarto WHERE id_reserva = :id_reserva";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":data_reserva", $datareserva);
        $stmt->bindValue(":id_hospede", $hospede);
        $stmt->bindValue(":id_quarto", $quarto);
        $stmt->bindValue(":id_reserva", $id);
        return $stmt->execute();
    }
    catch(Exception $e){
        return 0;
    }
}


function excluirReserva($id){
    try{
        $sql = "DELETE FROM Reserva WHERE id_reserva = :id_reserva";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id_reserva", $id);
        return $stmt->execute();
    }
    catch(Exception $e){
        return 0;
    }
}
function inserirServico($servico, $custo, $reserva){
    try{
        $sql = "INSERT INTO Servicos (nome_servico, custo, reserva) VALUES (:nome_servico, :custo, :reserva)";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome_servico", $servico);
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
        $sql = "SELECT * FROM Servico WHERE id_servico = :id_servico";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id_servico", $id);
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
        $sql = "UPDATE Servicos SET nome_servico = :nome_servico, custo = :custo, id_reserva = :id_reserva WHERE id_servico = :id_servico";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome_servico", $servico);
        $stmt->bindValue(":custo", $custo);
        $stmt->bindValue(":reserva", $reserva);
        $stmt->bindValue(":id_servico", $id);
        return $stmt->execute();
    }
    catch(Exception $e){
        return 0;
    }
}

function excluirServico($id){
    try{
        $sql = "DELETE FROM Servicos WHERE id_servico = :id_servico";
        $conexao = conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id_servico", $id);
        return $stmt->execute();
    }
    catch(Exception $e){
        return 0; 
    }
}