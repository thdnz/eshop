<?php

class Config
{

    //Informacoes Basicas do Site
    const SITE_URL = "http://localhost";
    const SITE_PASTA = "eshop";
    const SITE_NOME = "ESHOP - PHP 7 e Mysqli";
    const SITE_EMAIL_ADM = "eshop@gmail.com";

    //Informações do banco de dados
    const BD_HOST = "localhost",
        BD_USER = "root",
        BD_SENHA = "",
        BD_BANCO = "eshop",  
        BD_PREFIX = "";

    //Informaçoes para PHP Mailler
    const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_USER = "eshop@gmail.com";
    const EMAIL_NOME = "Contato Eshop";
    const EMAIL_SENHA = "123456";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "tls";
    const EMAIL_COPIA = "eshop@gmail.com";
}
