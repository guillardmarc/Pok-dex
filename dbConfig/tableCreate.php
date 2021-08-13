<?php
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=pokedex;port=3306','root','',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
        //Création de la table "trainer"
        $req1 = "CREATE TABLE IF NOT EXISTS pokedex.trainer(
            idTrainer INT NOT NULL AUTO_INCREMENT,
            pseudoTrainer VARCHAR(255),
            emailTrainer VARCHAR(255),
            passwordTrainer VARCHAR(255),
            typeTrainer VARCHAR(255),
            dateCreateTrainer TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY(idTrainer));";
        $pdo->exec($req1);

        //Création de la table "types"
        $req2 = "CREATE TABLE IF NOT EXISTS pokedex.types(
            idType INT NOT NULL AUTO_INCREMENT,
            nameType VARCHAR(255),
            imgType VARCHAR(255),
            dateType TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY(idType));";
        $pdo->exec($req2);

        //Création de la table "charged_attacks"
        $req3 = "CREATE TABLE IF NOT EXISTS pokedex.charged_attacks(
            idChargedAttacks INT NOT NULL AUTO_INCREMENT,
            nameChargedAttacks VARCHAR(255),
            datecreateChargedAttacks TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY(idChargedAttacks));";
        $pdo->exec($req3);

        //Création de la table "immediate_attacks"
        $req4 = "CREATE TABLE IF NOT EXISTS pokedex.immediate_attacks(
            idImmediateAttacks INT NOT NULL AUTO_INCREMENT,
            nameImmediateAttacks VARCHAR(255),
            datecreateImmediateAttacks TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY(idImmediateAttacks));";
        $pdo->exec($req4);

        //Création de la table "sex"
        $req5 = "CREATE TABLE IF NOT EXISTS pokedex.sex(
            idSex INT NOT NULL AUTO_INCREMENT,
            nameSex VARCHAR(255),
            datecreateSex TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY(idSex));";
        $pdo->exec($req5);

        //Création de la table "evolution"
        $req6 = "CREATE TABLE IF NOT EXISTS pokedex.evolutions(
            idEvolutions INT NOT NULL AUTO_INCREMENT,
            level1Evolutions VARCHAR(255),
            level2Evolutions VARCHAR(255),
            level3Evolutions VARCHAR(255),
            datecreateEvolutions TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY(idEvolutions));";
        $pdo->exec($req6);

        //Création de la table "pokemon"
        $req7 = "CREATE TABLE IF NOT EXISTS pokedex.pokemons(
            idPokemons INT NOT NULL AUTO_INCREMENT,
            numberPokemons INT,
            namePokemons VARCHAR(50),
            descriptionPokemons TEXT,
            maxweightPokemons FLOAT,
            maxsizePokemons FLOAT,
            levelevolutionsPokemons VARCHAR(50),
            imgPokemons VARCHAR(50),
            datecreatedPokemons TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            idImmediateAttacks INT,
            idChargedAttacks VARCHAR(50),
            idTypes VARCHAR(50) NOT NULL,
            PRIMARY KEY(idPokemons)
            -- FOREIGN KEY(idImmediateAttacks) REFERENCES immediate_attacks(idImmediateAttacks),
            -- FOREIGN KEY(idChargedAttacks) REFERENCES charged_attacks(idChargedAttacks),
            -- FOREIGN KEY(idTypes) REFERENCES type(idTypes)
            );";
        $pdo->exec($req7);

        //Création de la table "pokemon"
        $req8 = "CREATE TABLE IF NOT EXISTS pokedex.pokemon_caught(
            idPokemonCaught INT NOT NULL AUTO_INCREMENT,
            weightPokemonCaught INT,
            sizePokemonCaught DECIMAL(15,2),
            datecreatedPokemonCaught DATETIME,
            idSexe VARCHAR(50) NOT NULL,
            idPokemon VARCHAR(50) NOT NULL,
            idDressseur VARCHAR(50) NOT NULL,
            PRIMARY KEY(idPokemonCaught)
            -- FOREIGN KEY(idSexe) REFERENCES sexe(idSexe),
            -- FOREIGN KEY(idPokemon) REFERENCES pokemon(idPokemon),
            -- FOREIGN KEY(idDressseur) REFERENCES dresseur(idDressseur)
            );";
        $pdo->exec($req8);
    }

    
    catch (PDOException $e){
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
    }