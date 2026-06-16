<?php
class Aluno {
   private int $id;
   private string $nome;
   private string $nascimento;
   private string $curso;

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
function getNascimento() : string{
return $this->nascimento;
 }
function setNascimento($arg){
 $this->nascimento=$arg;
 }
function getCurso() : string{
return $this->curso;
 }
function setCurso($arg){
 $this->curso=$arg;
 }

function __toString(){
return  "nome :".$this->nome."<br>".
 "nascimento :".$this->nascimento."<br>".
 "curso :".$this->curso."<br>";
}
}