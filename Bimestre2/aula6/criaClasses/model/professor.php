<?php
class Professor {
   private int $id;
   private string $nome;
   private string $titulacao;

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
function getTitulacao() : string{
return $this->titulacao;
 }
function setTitulacao($arg){
 $this->titulacao=$arg;
 }

function __toString(){
return  "nome :".$this->nome."<br>".
 "titulacao :".$this->titulacao."<br>";
}
}