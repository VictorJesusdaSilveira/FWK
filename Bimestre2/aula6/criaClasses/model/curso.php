<?php
class Curso {
   private int $id;
   private string $nome;
   private int $duracao;

function getId() : int{
return $this->id;
 }
function setId($arg){
 $this->id=$arg;
 }
function getNome() : string{
return $this->nome;
 }
function setNome($arg){
 $this->nome=$arg;
 }
function getDuracao() : int{
return $this->duracao;
 }
function setDuracao($arg){
 $this->duracao=$arg;
 }

function __toString(){
return  "nome :".$this->nome."<br>".
 "duracao :".$this->duracao."<br>";
}
}