-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 02 mars 2022 à 16:14
-- Version du serveur :  5.5.50-log
-- Version de PHP :  5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `matx_mpe_ma_schema_generation`
--

-- --------------------------------------------------------

--
-- Structure de la table `AcheteurPublic`
--

CREATE TABLE `AcheteurPublic` (
  `id` int(22) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `denomination` varchar(100) NOT NULL DEFAULT '',
  `prm` varchar(100) NOT NULL DEFAULT '',
  `adresse` varchar(100) NOT NULL DEFAULT '',
  `cp` varchar(5) NOT NULL DEFAULT '',
  `ville` varchar(100) NOT NULL DEFAULT '',
  `dept` char(3) NOT NULL DEFAULT '',
  `type_org` char(1) NOT NULL DEFAULT '',
  `telephone` varchar(100) NOT NULL DEFAULT '',
  `fax` varchar(100) NOT NULL DEFAULT '',
  `mail` varchar(100) NOT NULL DEFAULT '',
  `url` varchar(100) NOT NULL DEFAULT '',
  `url_acheteur` varchar(100) DEFAULT NULL,
  `facture_numero` varchar(100) NOT NULL DEFAULT '',
  `facture_code` varchar(100) NOT NULL DEFAULT '',
  `facture_denomination` varchar(100) NOT NULL DEFAULT '',
  `facturation_service` varchar(100) DEFAULT NULL,
  `facture_adresse` varchar(255) NOT NULL DEFAULT '',
  `facture_cp` varchar(10) NOT NULL DEFAULT '',
  `facture_ville` varchar(100) NOT NULL DEFAULT '',
  `facture_pays` varchar(100) NOT NULL DEFAULT '',
  `id_aapc` int(22) NOT NULL DEFAULT '0',
  `boamp_login` varchar(100) NOT NULL DEFAULT '',
  `boamp_password` varchar(100) NOT NULL DEFAULT '',
  `boamp_mail` varchar(100) NOT NULL DEFAULT '',
  `boamp_target` char(1) NOT NULL DEFAULT '0',
  `default_form_values` longtext NOT NULL,
  `defaut_form_am_boamp` longtext NOT NULL,
  `defaut_form_am_boamp_joue` longtext NOT NULL,
  `defaut_form_mapa_boamp` longtext NOT NULL,
  `defaut_form_aconcours` longtext NOT NULL,
  `defaut_form_as_boamp_joue` longtext NOT NULL,
  `defaut_form_aa_boamp` longtext NOT NULL,
  `defaut_form_ar_mapa_boamp` longtext NOT NULL,
  `defaut_form_05_boamp` longtext NOT NULL,
  `defaut_form_rect` longtext NOT NULL,
  `defaut_form_aa_boamp_joue` longtext NOT NULL,
  `id_service` int(11) NOT NULL DEFAULT '0',
  `livraison_service` varchar(100) DEFAULT NULL,
  `livraison_adresse` varchar(100) DEFAULT NULL,
  `livraison_code_postal` varchar(5) DEFAULT NULL,
  `livraison_ville` varchar(100) DEFAULT NULL,
  `livraison_pays` varchar(100) DEFAULT NULL,
  `type_pouvoir_activite` text,
  `code_nuts` text,
  `modalites_financement` text,
  `moniteur_provenance` int(11) NOT NULL DEFAULT '90' COMMENT 'Contient la valeur de la valise code_prov dans le fichier xml ''content'' du MOL',
  `code_acces_logiciel` varchar(255) NOT NULL DEFAULT 'Y8YG-69WD-4421-4G28' COMMENT 'Contient le code BOAMP du logiciel'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Administrateur`
--

CREATE TABLE `Administrateur` (
  `id` int(11) NOT NULL,
  `original_login` varchar(100) NOT NULL DEFAULT '',
  `login` varchar(100) NOT NULL DEFAULT '',
  `certificat` text,
  `mdp` varchar(40) NOT NULL DEFAULT '',
  `nom` varchar(100) NOT NULL DEFAULT '',
  `prenom` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `organisme` varchar(30) DEFAULT NULL,
  `admin_general` char(1) NOT NULL DEFAULT '0',
  `tentatives_mdp` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Admissibilite_Analyse`
--

CREATE TABLE `Admissibilite_Analyse` (
  `id` int(11) NOT NULL,
  `id_offre` int(22) NOT NULL DEFAULT '0',
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `sous_pli` int(3) NOT NULL DEFAULT '0',
  `admissibilite` int(1) NOT NULL DEFAULT '0',
  `commentaire` text,
  `type_depot` enum('electronique','papier') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Admissibilite_Enveloppe_Lot`
--

CREATE TABLE `Admissibilite_Enveloppe_Lot` (
  `id_Offre` int(22) NOT NULL DEFAULT '0',
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `sous_pli` int(3) NOT NULL DEFAULT '0',
  `admissibilite` int(1) NOT NULL DEFAULT '0',
  `commentaire` text,
  `type_enveloppe` int(1) NOT NULL DEFAULT '2',
  `sous_reserve` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Admissibilite_Enveloppe_papier_Lot`
--

CREATE TABLE `Admissibilite_Enveloppe_papier_Lot` (
  `id_offre_papier` int(22) NOT NULL DEFAULT '0',
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `sous_pli` int(3) NOT NULL DEFAULT '0',
  `admissibilite` int(1) NOT NULL DEFAULT '0',
  `commentaire` text,
  `type_enveloppe` int(1) NOT NULL DEFAULT '2',
  `sous_reserve` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `AdresseFacturationJal`
--

CREATE TABLE `AdresseFacturationJal` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_service` int(11) NOT NULL DEFAULT '0',
  `email_ar` varchar(100) NOT NULL,
  `telecopie` varchar(20) NOT NULL,
  `information_facturation` text NOT NULL,
  `facturation_sip` enum('0','1') NOT NULL DEFAULT '0',
  `id_blob_logo` int(11) DEFAULT NULL COMMENT 'Permet de stocker l''identifiant du blob correspondant au logo joint ? l''adresse de facturation',
  `nom_fichier` varchar(255) DEFAULT NULL COMMENT 'Permet de stocker le nom du fichier logo joint ? l''adresse de facturation'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `AffiliationService`
--

CREATE TABLE `AffiliationService` (
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `id_pole` int(11) NOT NULL DEFAULT '0',
  `id_service` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Agent`
--

CREATE TABLE `Agent` (
  `id` int(11) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL DEFAULT '',
  `mdp` varchar(40) NOT NULL DEFAULT '',
  `certificat` text,
  `nom` varchar(100) NOT NULL DEFAULT '',
  `prenom` varchar(100) NOT NULL DEFAULT '',
  `tentatives_mdp` int(1) NOT NULL DEFAULT '0',
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `service_id` int(11) NOT NULL DEFAULT '0',
  `RECEVOIR_MAIL` enum('0','1') NOT NULL DEFAULT '0',
  `elu` char(1) NOT NULL DEFAULT '0',
  `nom_fonction` varchar(100) NOT NULL DEFAULT '',
  `num_tel` varchar(20) DEFAULT NULL,
  `num_fax` varchar(20) DEFAULT NULL,
  `type_comm` char(1) NOT NULL DEFAULT '2',
  `adr_postale` varchar(255) NOT NULL DEFAULT '',
  `civilite` varchar(255) NOT NULL DEFAULT '',
  `alerte_reponse_electronique` enum('0','1') NOT NULL DEFAULT '0',
  `alerte_reception_mainlevee` enum('0','1') NOT NULL DEFAULT '0',
  `alerte_cloture_consultation` enum('0','1') NOT NULL DEFAULT '0',
  `alerte_reception_message` enum('0','1') NOT NULL DEFAULT '0',
  `alerte_publication_boamp` enum('0','1') NOT NULL DEFAULT '0',
  `alerte_echec_publication_boamp` enum('0','1') NOT NULL DEFAULT '0',
  `alerte_creation_modification_agent` enum('0','1') NOT NULL DEFAULT '0',
  `date_creation` varchar(20) DEFAULT NULL,
  `date_modification` varchar(20) DEFAULT NULL,
  `id_initial` int(11) NOT NULL DEFAULT '0',
  `id_profil_socle_externe` int(11) NOT NULL,
  `lieu_execution` text,
  `alerte_question_entreprise` enum('0','1') NOT NULL DEFAULT '0',
  `actif` enum('0','1') NOT NULL DEFAULT '1',
  `codes_nuts` text COMMENT 'Contient les codes nuts, pour l''utilisation d''un r?f?rentiel externe',
  `num_certificat` varchar(64) DEFAULT '',
  `alerte_validation_consultation` enum('0','1') NOT NULL DEFAULT '0',
  `alerte_chorus` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet ? l''acheteur de s''abonner ? l''ensemble des alertes chorus ? chaque reception d''un flux Chorus par la PMI.',
  `password` varchar(40) NOT NULL,
  `code_theme` varchar(255) DEFAULT '0' COMMENT 'd?finit le th?me qui sera utiliser par l''agent'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `agent_banquier`
--

CREATE TABLE `agent_banquier` (
  `id` int(11) NOT NULL,
  `username` varchar(180) NOT NULL,
  `username_canonical` varchar(180) NOT NULL,
  `email` varchar(180) NOT NULL,
  `email_canonical` varchar(180) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:array)',
  `id_banque` int(11) NOT NULL,
  `id_profil` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `code_ville` varchar(255) NOT NULL,
  `code_agence` varchar(255) NOT NULL,
  `id_ref_ville` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `notification` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Agent_Service_Metier`
--

CREATE TABLE `Agent_Service_Metier` (
  `id_agent` int(11) NOT NULL DEFAULT '0',
  `id_service_metier` int(11) NOT NULL DEFAULT '0',
  `id_profil_service` int(11) NOT NULL DEFAULT '0',
  `date_creation` varchar(20) DEFAULT NULL,
  `date_modification` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Agrement`
--

CREATE TABLE `Agrement` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `libelle_ar` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `libelle_fr` varchar(255) DEFAULT NULL,
  `libelle_en` varchar(255) DEFAULT NULL,
  `libelle_es` varchar(255) DEFAULT NULL,
  `libelle_su` varchar(255) DEFAULT NULL,
  `libelle_du` varchar(255) DEFAULT NULL,
  `libelle_cz` varchar(255) DEFAULT NULL,
  `libelle_it` varchar(255) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Alerte`
--

CREATE TABLE `Alerte` (
  `id` int(11) NOT NULL,
  `id_inscrit` int(11) NOT NULL DEFAULT '0',
  `denomination` varchar(200) NOT NULL DEFAULT '',
  `periodicite` char(1) NOT NULL DEFAULT '',
  `xmlCriteria` text,
  `categorie` varchar(30) DEFAULT NULL,
  `id_initial` int(11) NOT NULL DEFAULT '0',
  `format` varchar(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `alerte_metier`
--

CREATE TABLE `alerte_metier` (
  `id` int(11) NOT NULL,
  `id_alerte` int(11) NOT NULL,
  `date_creation` datetime DEFAULT NULL,
  `date_cloture` datetime DEFAULT NULL,
  `organisme` varchar(30) DEFAULT NULL,
  `reference_cons` int(11) DEFAULT NULL,
  `lot` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `cloturee` enum('0','1','2') NOT NULL DEFAULT '2',
  `message` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Annonce`
--

CREATE TABLE `Annonce` (
  `id_boamp` int(11) NOT NULL DEFAULT '0',
  `organisme` varchar(100) NOT NULL DEFAULT '',
  `envoi_boamp` int(11) NOT NULL DEFAULT '0',
  `date_envoi` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `datepub` varchar(10) NOT NULL DEFAULT '0000-00-00',
  `consultation_ref` int(11) NOT NULL,
  `nom_fichier_xml` varchar(255) NOT NULL DEFAULT '',
  `envoi_joue` enum('0','1') NOT NULL DEFAULT '0',
  `mapa` enum('0','1') NOT NULL DEFAULT '0',
  `implique_SAD` enum('0','1') NOT NULL DEFAULT '0',
  `date_maj` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `AnnonceBoamp`
--

CREATE TABLE `AnnonceBoamp` (
  `id_boamp` int(22) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `consultation_ref` int(11) NOT NULL DEFAULT '0',
  `envoi_boamp` int(22) NOT NULL DEFAULT '0',
  `date_envoi` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ann_xml` longblob NOT NULL,
  `ann_pdf` longblob NOT NULL,
  `ann_form_values` longblob NOT NULL,
  `ann_error` longtext NOT NULL,
  `type_boamp` text NOT NULL,
  `type_ann` int(11) NOT NULL DEFAULT '0',
  `datepub` varchar(10) NOT NULL DEFAULT '0000-00-00',
  `num_ann` int(11) NOT NULL DEFAULT '0',
  `parution` text NOT NULL,
  `id_jo` varchar(255) NOT NULL DEFAULT '',
  `erreurs` text NOT NULL,
  `nom_fichier_xml` varchar(255) NOT NULL DEFAULT '',
  `envoi_joue` enum('0','1') NOT NULL DEFAULT '0',
  `mapa` enum('0','1') NOT NULL DEFAULT '0',
  `implique_SAD` enum('0','1') NOT NULL DEFAULT '0',
  `date_maj` datetime DEFAULT NULL,
  `id_destination_form_xml` int(11) NOT NULL DEFAULT '0',
  `id_form_xml` int(11) NOT NULL DEFAULT '0',
  `id_type_xml` int(11) NOT NULL DEFAULT '0',
  `statut_destinataire` char(10) NOT NULL,
  `accuse_reception` char(1) NOT NULL DEFAULT '',
  `lien` varchar(50) NOT NULL DEFAULT '',
  `lien_boamp` text,
  `lien_pdf` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `AnnonceJAL`
--

CREATE TABLE `AnnonceJAL` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `libelle_type` varchar(250) NOT NULL DEFAULT '',
  `date_creation` varchar(20) NOT NULL,
  `objet` varchar(255) DEFAULT NULL,
  `texte` text,
  `consultation_ref` int(11) NOT NULL DEFAULT '0',
  `option_envoi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `AnnonceJALPieceJointe`
--

CREATE TABLE `AnnonceJALPieceJointe` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_annonce_jal` int(11) NOT NULL DEFAULT '0',
  `nom_fichier` varchar(100) NOT NULL DEFAULT '',
  `piece` int(11) NOT NULL DEFAULT '0',
  `horodatage` longblob NOT NULL,
  `untrusteddate` varchar(25) NOT NULL DEFAULT '',
  `taille` varchar(25) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `AnnonceMoniteur`
--

CREATE TABLE `AnnonceMoniteur` (
  `id` int(22) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `date_envoi` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type_moniteur` text NOT NULL,
  `statut_xml` varchar(4) NOT NULL DEFAULT '0',
  `date_creation` date NOT NULL DEFAULT '0000-00-00',
  `statut_web` enum('0','1','2','3','4','5') NOT NULL DEFAULT '0',
  `statut_arg` enum('0','1','2','3','4','5') NOT NULL DEFAULT '0',
  `statut_usn` enum('0','1','2','3','4','5') NOT NULL DEFAULT '0',
  `statut_01i` enum('0','1','2','3','4','5') NOT NULL DEFAULT '0',
  `datepub` varchar(10) DEFAULT NULL,
  `num_annonce` int(11) NOT NULL DEFAULT '0',
  `message_error` text NOT NULL,
  `timestamp` blob NOT NULL,
  `nom_timestamp` varchar(100) NOT NULL DEFAULT '',
  `xml_moniteur` text NOT NULL,
  `id_annonce_boamp` int(22) NOT NULL DEFAULT '0',
  `date_maj` varchar(20) DEFAULT '0000-00-00 00:00:00',
  `id_form_xml` int(11) NOT NULL,
  `accuse_reception` char(1) NOT NULL,
  `id_destination_form_xml` int(11) NOT NULL,
  `statut_destinataire` varchar(10) DEFAULT NULL,
  `commentaire` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Annonce_Press`
--

CREATE TABLE `Annonce_Press` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `libelle_type` varchar(250) NOT NULL DEFAULT '',
  `date_creation` varchar(20) NOT NULL,
  `objet` varchar(255) DEFAULT NULL,
  `texte` text,
  `consultation_ref` int(11) NOT NULL DEFAULT '0',
  `option_envoi` int(11) DEFAULT NULL,
  `id_Dest_Press` int(11) DEFAULT NULL COMMENT 'pointe sur id_dest',
  `id_adresse_facturation` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Annonce_Press_PieceJointe`
--

CREATE TABLE `Annonce_Press_PieceJointe` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_annonce_press` int(11) NOT NULL DEFAULT '0',
  `nom_fichier` varchar(100) NOT NULL DEFAULT '',
  `piece` int(11) NOT NULL DEFAULT '0',
  `horodatage` longblob NOT NULL,
  `untrusteddate` varchar(25) NOT NULL DEFAULT '',
  `taille` varchar(25) NOT NULL DEFAULT '0',
  `fichier_genere` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de renseigner si la piece jointe est g?n?r?e et joint automatiquement ou joint manuellement'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Articles`
--

CREATE TABLE `Articles` (
  `id` int(11) NOT NULL,
  `id_type_procedure` int(11) NOT NULL,
  `mode_passation` varchar(1) DEFAULT NULL,
  `libelle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `article_catalogue`
--

CREATE TABLE `article_catalogue` (
  `id` int(11) NOT NULL,
  `reference` varchar(40) NOT NULL,
  `description` varchar(250) NOT NULL,
  `prix_unitaire` double NOT NULL,
  `delai_livraison` int(11) NOT NULL,
  `type_categorie` int(11) NOT NULL,
  `id_marque` int(11) NOT NULL,
  `id_fabriquant` int(11) NOT NULL,
  `id_blob` int(11) NOT NULL,
  `unite_delai_livraison` int(11) NOT NULL,
  `id_catalogue` int(11) NOT NULL,
  `actif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Autres_Pieces_Mise_Disposition`
--

CREATE TABLE `Autres_Pieces_Mise_Disposition` (
  `id` int(11) NOT NULL,
  `id_decision_enveloppe` int(11) NOT NULL,
  `org` varchar(30) NOT NULL,
  `id_destinataire` int(11) NOT NULL,
  `id_blob` int(11) NOT NULL,
  `nom_fichier` varchar(250) DEFAULT NULL,
  `taille_fichier` varchar(10) DEFAULT NULL,
  `date_creation` varchar(20) DEFAULT NULL,
  `horodatage` longblob NOT NULL,
  `untrusteddate` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `agent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Avenant`
--

CREATE TABLE `Avenant` (
  `id_avenant` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_contrat` int(11) NOT NULL,
  `numero_avenant` varchar(20) DEFAULT NULL,
  `type_avenant` int(5) DEFAULT NULL,
  `objet_avenant` varchar(100) DEFAULT NULL,
  `montant_avenant_ht` varchar(30) DEFAULT NULL,
  `montant_avenant_ttc` varchar(30) DEFAULT NULL,
  `pourcentage_augmentation_marche_initial` char(5) DEFAULT NULL,
  `pourcentage_augmentation_cumule` char(5) DEFAULT NULL,
  `montant_total_marche_tout_avenant_cumule` varchar(30) DEFAULT NULL,
  `date_reception_projet_par_secretaire_cao` varchar(10) DEFAULT NULL,
  `date_reception_projet_par_charge_etude` varchar(10) DEFAULT NULL,
  `date_observation_par_sv` varchar(10) DEFAULT NULL,
  `date_retour_projet` varchar(10) DEFAULT NULL,
  `date_validation_projet` varchar(10) DEFAULT NULL,
  `date_validation_projet_vu_par` int(5) DEFAULT NULL,
  `date_cao` varchar(10) DEFAULT NULL,
  `avis_cao` int(5) DEFAULT NULL,
  `date_cp` varchar(10) DEFAULT NULL,
  `date_signature_avenant` varchar(10) DEFAULT NULL,
  `date_reception_dossier` varchar(10) DEFAULT NULL,
  `date_formulation_observation_par_sv_sur_sdossier` varchar(10) DEFAULT NULL,
  `date_retour_dossier_finalise` varchar(10) DEFAULT NULL,
  `date_validation_dossier_finalise` varchar(10) NOT NULL,
  `date_transmission_prefecture` varchar(10) DEFAULT NULL,
  `date_notification` varchar(10) DEFAULT NULL,
  `operation_validation_vues_par` int(5) DEFAULT NULL,
  `commentaires` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `AVIS`
--

CREATE TABLE `AVIS` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `consultation_ref` int(11) NOT NULL,
  `avis` int(11) NOT NULL DEFAULT '0',
  `intitule_avis` int(2) NOT NULL DEFAULT '0',
  `nom_avis` varchar(200) NOT NULL,
  `statut` char(1) NOT NULL DEFAULT '0',
  `nom_fichier` varchar(200) NOT NULL,
  `horodatage` longblob NOT NULL,
  `untrusteddate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `agent_id` int(11) NOT NULL DEFAULT '0',
  `avis_telechargeable` int(11) NOT NULL DEFAULT '0',
  `url` text,
  `type` char(1) DEFAULT '0',
  `date_creation` varchar(20) NOT NULL,
  `date_pub` varchar(20) DEFAULT NULL,
  `type_doc_genere` int(11) NOT NULL DEFAULT '0',
  `langue` varchar(10) NOT NULL,
  `type_avis_pub` int(5) DEFAULT NULL COMMENT 'Point vers le champ type_avis de la table Avis_Pub'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `AvisCao`
--

CREATE TABLE `AvisCao` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) DEFAULT NULL,
  `libelle_fr` varchar(100) DEFAULT NULL,
  `libelle_en` varchar(100) DEFAULT NULL,
  `libelle_es` varchar(100) DEFAULT NULL,
  `libelle_su` varchar(100) DEFAULT NULL,
  `libelle_du` varchar(100) DEFAULT NULL,
  `libelle_cz` varchar(100) DEFAULT NULL,
  `libelle_ar` varchar(100) DEFAULT NULL,
  `libelle_it` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Avis_Membres_CAO`
--

CREATE TABLE `Avis_Membres_CAO` (
  `id` int(11) NOT NULL,
  `id_agent` int(11) NOT NULL,
  `id_enveloppe` int(22) NOT NULL,
  `nom_agent` varchar(100) NOT NULL,
  `prenom_agent` varchar(100) NOT NULL,
  `date_action` varchar(20) NOT NULL,
  `admissibilite` int(1) NOT NULL DEFAULT '0',
  `commentaire` text,
  `sous_pli` int(3) NOT NULL DEFAULT '0',
  `type_depot_reponse` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Avis_Pub`
--

CREATE TABLE `Avis_Pub` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `consultation_ref` int(11) NOT NULL,
  `statut` char(1) NOT NULL DEFAULT '0',
  `id_agent` int(11) NOT NULL,
  `id_agent_validateur` int(10) DEFAULT NULL COMMENT 'Permet de stocker l''id de l''agent validateur de l''avis',
  `id_agent_validateur_eco` int(10) DEFAULT NULL COMMENT 'Permet de stocker l''id de l''agent validateur de l''avis par l''entit?e coordinatrice',
  `id_agent_validateur_sip` int(10) DEFAULT NULL COMMENT 'Permet de stocker l''identifiant de l''agent validateur SIP',
  `date_creation` varchar(20) NOT NULL,
  `date_envoi` varchar(20) DEFAULT NULL,
  `type_avis` int(11) NOT NULL,
  `date_publication` varchar(20) DEFAULT NULL,
  `date_validation` varchar(20) DEFAULT NULL,
  `Sip` varchar(5) DEFAULT NULL COMMENT 'Permet de pr?ciser si l''avis est ?ligible SIP ou non',
  `id_avis_portail` int(5) DEFAULT NULL COMMENT 'Permet de stocker l''identifiant de l''avis joint au portail',
  `id_avis_presse` int(5) DEFAULT NULL COMMENT 'Permet de stocker l''id de l''avis envoy?e ? envoyer ? la presse',
  `id_avis_pdf_opoce` int(5) DEFAULT NULL COMMENT 'Permet de stocker l''identifiant de l''avis pdf recuper? depuis Opoce via le web service',
  `id_blob_logo` int(11) DEFAULT NULL COMMENT 'Permet de stocker l''id du blob du logo ? joindre au mail ? envoyer ? la presse'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `backup_Agent_Commission`
--

CREATE TABLE `backup_Agent_Commission` (
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `id_commission` int(11) NOT NULL DEFAULT '0',
  `id_agent` int(11) NOT NULL DEFAULT '0',
  `convocation` longblob,
  `convoc_send` char(1) NOT NULL DEFAULT '0',
  `nom_convoc` varchar(255) DEFAULT NULL,
  `contenu_envoi` text,
  `fichier_envoye` longblob,
  `nom_fichier_envoye` varchar(255) DEFAULT NULL,
  `date_envoi` datetime DEFAULT NULL,
  `type_voix` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `backup_Commission`
--

CREATE TABLE `backup_Commission` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lieu` varchar(200) NOT NULL DEFAULT '',
  `salle` varchar(100) NOT NULL DEFAULT '',
  `type` varchar(200) NOT NULL DEFAULT '',
  `libelle` varchar(250) DEFAULT NULL,
  `ordre_du_jour` longblob,
  `invitations_zip` longblob,
  `status_cao` char(2) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `backup_Etape_CAO`
--

CREATE TABLE `backup_Etape_CAO` (
  `id_etape_cao` int(11) NOT NULL,
  `intitule_etape_cao` varchar(250) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `backup_Intervenant_Externe`
--

CREATE TABLE `backup_Intervenant_Externe` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL DEFAULT '',
  `prenom` varchar(30) NOT NULL DEFAULT '',
  `organisation` varchar(30) NOT NULL DEFAULT '',
  `fonction` varchar(200) NOT NULL DEFAULT '',
  `adresse` varchar(255) NOT NULL DEFAULT '',
  `code_postal` varchar(50) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `mail` varchar(100) NOT NULL DEFAULT '',
  `type_invitation` int(1) NOT NULL DEFAULT '1',
  `civilite` varchar(255) DEFAULT '',
  `type_voix` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `backup_Intervenant_Externe_Commission`
--

CREATE TABLE `backup_Intervenant_Externe_Commission` (
  `organisme` varchar(30) NOT NULL,
  `id_commission` int(11) NOT NULL DEFAULT '0',
  `id_intervenant_externe` int(11) NOT NULL DEFAULT '0',
  `convocation` longblob,
  `convoc_send` char(1) NOT NULL DEFAULT '0',
  `nom_convoc` varchar(255) DEFAULT NULL,
  `contenu_envoi` text,
  `nom_fichier_envoye` varchar(255) DEFAULT NULL,
  `fichier_envoye` longblob,
  `date_envoi` datetime DEFAULT NULL,
  `type_voix` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `backup_Intervenant_Ordre_Du_Jour`
--

CREATE TABLE `backup_Intervenant_Ordre_Du_Jour` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_ordre_du_jour` int(11) NOT NULL DEFAULT '0',
  `id_intervenant` int(11) NOT NULL DEFAULT '0',
  `id_agent` int(11) NOT NULL DEFAULT '0',
  `convocation` longblob,
  `convoc_send` char(1) NOT NULL DEFAULT '0',
  `nom_convoc` varchar(255) DEFAULT NULL,
  `contenu_envoi` text,
  `nom_fichier_envoye` varchar(255) DEFAULT NULL,
  `fichier_envoye` longblob,
  `date_envoi` datetime DEFAULT NULL,
  `type_voix` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `backup_Ordre_Du_Jour`
--

CREATE TABLE `backup_Ordre_Du_Jour` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_commission` int(11) NOT NULL DEFAULT '0',
  `ref_consultation` varchar(255) DEFAULT NULL,
  `ref_libre` varchar(50) DEFAULT NULL,
  `id_etape` int(11) NOT NULL,
  `intitule_ordre_du_jour` longtext,
  `lots_odj_libre` varchar(100) DEFAULT NULL,
  `id_type_procedure` int(11) DEFAULT NULL,
  `type_procedure_libre` varchar(255) DEFAULT NULL,
  `date_cloture` datetime DEFAULT NULL,
  `type_env` int(1) DEFAULT NULL,
  `sous_pli` int(2) DEFAULT NULL,
  `heure` varchar(5) NOT NULL DEFAULT '00',
  `etape_consultation` varchar(200) NOT NULL DEFAULT '',
  `type_consultation` varchar(200) NOT NULL DEFAULT '',
  `minutes` char(2) NOT NULL DEFAULT '',
  `service` varchar(255) DEFAULT NULL,
  `id_service` int(10) DEFAULT NULL,
  `date_debut` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `backup_Ordre_Du_Jour_2`
--

CREATE TABLE `backup_Ordre_Du_Jour_2` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_seance` int(11) NOT NULL DEFAULT '0',
  `ref_consultation` varchar(255) DEFAULT NULL,
  `ref_libre` varchar(50) DEFAULT NULL,
  `id_etape` int(11) NOT NULL,
  `intitule_ordre_du_jour` longtext,
  `lots_odj_libre` varchar(100) DEFAULT NULL,
  `id_type_procedure` int(11) DEFAULT NULL,
  `type_procedure_libre` varchar(255) DEFAULT NULL,
  `date_cloture` datetime DEFAULT NULL,
  `type_env` int(1) DEFAULT NULL,
  `sous_pli` int(2) DEFAULT NULL,
  `heure` varchar(5) NOT NULL DEFAULT '00',
  `etape_consultation` varchar(200) NOT NULL DEFAULT '',
  `type_consultation` varchar(200) NOT NULL DEFAULT '',
  `minutes` char(2) NOT NULL DEFAULT '',
  `service` varchar(255) DEFAULT NULL,
  `id_service` int(10) DEFAULT NULL,
  `date_debut` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `blob`
--

CREATE TABLE `blob` (
  `id` int(11) NOT NULL,
  `revision` int(11) NOT NULL DEFAULT '0',
  `date_ajout` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `blobOrganisme`
--

CREATE TABLE `blobOrganisme` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `revision` int(11) NOT NULL DEFAULT '0',
  `date_ajout` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `blobOrganisme_file`
--

CREATE TABLE `blobOrganisme_file` (
  `id` int(11) NOT NULL DEFAULT '0',
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `revision` int(11) NOT NULL DEFAULT '0',
  `name` text NOT NULL,
  `deletion_datetime` datetime DEFAULT NULL,
  `date_ajout` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `blob_file`
--

CREATE TABLE `blob_file` (
  `id` int(11) NOT NULL DEFAULT '0',
  `revision` int(11) NOT NULL DEFAULT '0',
  `name` text NOT NULL,
  `deletion_datetime` datetime DEFAULT NULL,
  `date_ajout` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `blocFichierEnveloppe`
--

CREATE TABLE `blocFichierEnveloppe` (
  `id_bloc_fichier` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `id_fichier` int(11) NOT NULL DEFAULT '0',
  `numero_ordre_bloc` int(5) NOT NULL DEFAULT '0',
  `id_blob_chiffre` int(11) NOT NULL DEFAULT '0',
  `id_blob_dechiffre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `blocFichierEnveloppeTemporaire`
--

CREATE TABLE `blocFichierEnveloppeTemporaire` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `uid` varchar(50) NOT NULL DEFAULT '',
  `type_env` int(1) NOT NULL DEFAULT '0',
  `sous_pli` int(3) NOT NULL DEFAULT '0',
  `type_fichier` char(3) NOT NULL DEFAULT '',
  `numero_ordre_fichier` int(5) NOT NULL DEFAULT '0',
  `numero_ordre_bloc` int(5) NOT NULL DEFAULT '0',
  `id_blob` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `bon_commande_par_catalogue`
--

CREATE TABLE `bon_commande_par_catalogue` (
  `id` int(11) NOT NULL,
  `reference` varchar(250) NOT NULL,
  `id_demande` int(11) NOT NULL,
  `id_entreprise` int(11) NOT NULL,
  `date_creation` date NOT NULL,
  `date_validation` date DEFAULT NULL,
  `statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `catalogues`
--

CREATE TABLE `catalogues` (
  `id` int(11) NOT NULL,
  `libelle` varchar(40) NOT NULL,
  `date_expiration` date NOT NULL,
  `id_entreprise` int(11) NOT NULL,
  `actif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CategorieConsultation`
--

CREATE TABLE `CategorieConsultation` (
  `id` varchar(30) NOT NULL DEFAULT '',
  `libelle` varchar(100) NOT NULL DEFAULT '',
  `libelle_fr` varchar(100) DEFAULT '',
  `libelle_en` varchar(100) DEFAULT '',
  `libelle_es` varchar(100) DEFAULT '',
  `libelle_su` varchar(100) DEFAULT '',
  `libelle_du` varchar(100) DEFAULT '',
  `libelle_cz` varchar(100) DEFAULT '',
  `libelle_ar` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_categorie_ANM` varchar(11) NOT NULL DEFAULT '0',
  `libelle_it` varchar(100) DEFAULT '',
  `code` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CategorieINSEE`
--

CREATE TABLE `CategorieINSEE` (
  `id` varchar(20) NOT NULL DEFAULT '',
  `libelle` varchar(100) NOT NULL DEFAULT '',
  `libelle_fr` varchar(100) NOT NULL DEFAULT '',
  `libelle_en` varchar(100) NOT NULL DEFAULT '',
  `libelle_es` varchar(100) NOT NULL DEFAULT '',
  `libelle_su` varchar(100) NOT NULL DEFAULT '',
  `libelle_du` varchar(100) NOT NULL DEFAULT '',
  `libelle_cz` varchar(100) NOT NULL DEFAULT '',
  `libelle_ar` varchar(100) NOT NULL DEFAULT '',
  `libelle_it` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CategorieLot`
--

CREATE TABLE `CategorieLot` (
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `consultation_ref` int(11) NOT NULL,
  `lot` int(11) NOT NULL DEFAULT '0',
  `description` varchar(1000) NOT NULL DEFAULT '',
  `id_tr_description` int(11) DEFAULT NULL COMMENT 'Identifiant de la traduction du champ "description"',
  `categorie` varchar(30) NOT NULL DEFAULT '',
  `description_detail` varchar(1000) NOT NULL DEFAULT '',
  `id_tr_description_detail` int(11) DEFAULT NULL COMMENT 'Identifiant de la traduction du champ "description_detail"',
  `code_cpv_1` varchar(8) DEFAULT NULL,
  `code_cpv_2` varchar(255) DEFAULT NULL,
  `description_fr` varchar(1000) NOT NULL DEFAULT '',
  `description_en` varchar(255) NOT NULL DEFAULT '',
  `description_es` varchar(255) NOT NULL DEFAULT '',
  `description_su` varchar(255) NOT NULL DEFAULT '',
  `description_du` varchar(255) NOT NULL DEFAULT '',
  `description_cz` varchar(255) NOT NULL DEFAULT '',
  `description_ar` longtext,
  `description_detail_fr` varchar(1000) NOT NULL DEFAULT '',
  `description_detail_en` varchar(255) DEFAULT NULL,
  `description_detail_es` varchar(255) DEFAULT NULL,
  `description_detail_su` varchar(255) DEFAULT NULL,
  `description_detail_du` varchar(255) DEFAULT NULL,
  `description_detail_cz` varchar(255) DEFAULT NULL,
  `description_detail_ar` longtext,
  `id_lot_externe` int(11) DEFAULT NULL,
  `caution_provisoire` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `agrements` varchar(255) DEFAULT NULL,
  `add_echantillion` varchar(255) DEFAULT NULL,
  `date_limite_echantillion` varchar(50) DEFAULT NULL,
  `add_reunion` varchar(255) DEFAULT NULL,
  `date_reunion` varchar(50) DEFAULT NULL,
  `variantes` char(1) DEFAULT NULL,
  `echantillon` enum('0','1') NOT NULL DEFAULT '0',
  `reunion` enum('0','1') NOT NULL DEFAULT '0',
  `visites_lieux` enum('0','1') NOT NULL DEFAULT '0',
  `add_echantillion_fr` varchar(255) DEFAULT NULL,
  `add_echantillion_en` varchar(255) DEFAULT NULL,
  `add_echantillion_es` varchar(255) DEFAULT NULL,
  `add_echantillion_su` varchar(255) DEFAULT NULL,
  `add_echantillion_du` varchar(255) DEFAULT NULL,
  `add_echantillion_cz` varchar(255) DEFAULT NULL,
  `add_echantillion_ar` varchar(255) DEFAULT NULL,
  `add_reunion_fr` varchar(255) DEFAULT NULL,
  `add_reunion_en` varchar(255) DEFAULT NULL,
  `add_reunion_es` varchar(255) DEFAULT NULL,
  `add_reunion_su` varchar(255) DEFAULT NULL,
  `add_reunion_du` varchar(255) DEFAULT NULL,
  `add_reunion_cz` varchar(255) DEFAULT NULL,
  `add_reunion_ar` varchar(255) DEFAULT NULL,
  `description_detail_it` longtext,
  `description_it` longtext,
  `add_echantillion_it` varchar(255) DEFAULT '',
  `add_reunion_it` varchar(255) DEFAULT '',
  `clause_sociale` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '0 : Non renseign?, 1: oui, 2 : non',
  `clause_environnementale` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '0 : Non renseign?, 1: oui, 2 : non',
  `decision` enum('0','1') NOT NULL DEFAULT '0',
  `clause_sociale_condition_execution` varchar(10) DEFAULT '0' COMMENT 'Le march? comprend des clauses sociales d''insertion comme condition d''ex?cution (article 14 du Code des march?s publics)',
  `clause_sociale_insertion` varchar(10) DEFAULT '0' COMMENT 'Pr?sence parmi les crit?res d''attribution d''un crit?re relatif ? l''insertion (article 53 du code des march?s publics)',
  `clause_sociale_ateliers_proteges` varchar(10) DEFAULT '0' COMMENT 'Le march? est r?serv? ? des ateliers prot?g?s (article 15 du code des march?s publics)',
  `clause_env_specs_techniques` varchar(10) DEFAULT '0' COMMENT 'p?cifications techniques (article 6 du code des march?s publics)',
  `clause_env_cond_execution` varchar(10) DEFAULT '0' COMMENT 'Conditions d''ex?cution (article 14 du code des march?s publics)',
  `clause_env_criteres_select` varchar(10) DEFAULT '0' COMMENT 'Crit?re de s?lection (article 53.1 du code des march?s publics)',
  `id_donnee_complementaire` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `caution_demande`
--

CREATE TABLE `caution_demande` (
  `ID` int(11) NOT NULL,
  `REF_CONSULTATION` int(11) NOT NULL,
  `ID_ENTREPRISE` int(11) NOT NULL,
  `ID_INSCRIT` int(11) NOT NULL,
  `ACRONYME` varchar(10) NOT NULL,
  `INTITULE` varchar(100) NOT NULL,
  `LOT` int(11) DEFAULT NULL,
  `OBJET_LOT` varchar(250) DEFAULT NULL,
  `RAISON_SOCIALE` varchar(100) NOT NULL,
  `MONTANT` double NOT NULL,
  `DATE_DEMANDE` datetime NOT NULL,
  `DATE_LIMITE_REMISE_PLIS` datetime NOT NULL,
  `ID_STATUT_CAUTION` int(11) NOT NULL,
  `ID_COMPTE_BANCAIRE` int(11) NOT NULL,
  `ID_BLOB_DEMANDE` int(11) DEFAULT NULL,
  `NOM_DOC_DEMANDE` varchar(250) NOT NULL,
  `ID_BLOB_CAUTION` int(11) DEFAULT NULL,
  `NOM_DOC_CAUTION` varchar(250) DEFAULT NULL,
  `ID_INSCRIT_CREA` int(11) DEFAULT NULL,
  `DATE_CREA` datetime DEFAULT NULL,
  `ID_INSCRIT_MODIF` int(11) DEFAULT NULL,
  `DATE_MODIF` datetime DEFAULT NULL,
  `IDENTIFIANT_BANCAIRE` varchar(100) NOT NULL,
  `ID_VILLE` int(11) NOT NULL,
  `ACHETEUR_PUBLIC` varchar(200) NOT NULL,
  `DATE_VALIDATION` datetime DEFAULT NULL,
  `DATE_REJET` datetime DEFAULT NULL,
  `MOTIF_REJET` varchar(255) DEFAULT NULL,
  `ID_AGENT_BANQUIER_VALIDATION` int(11) DEFAULT NULL,
  `ID_AGENT_BANQUIER_REJET` int(11) DEFAULT NULL,
  `REFERENCE_MODELE` varchar(255) DEFAULT NULL,
  `DATE_PRISE_EN_CHARGE` datetime DEFAULT NULL,
  `ID_AGENT_PRISE_EN_CHARGE` int(11) DEFAULT NULL,
  `TAGUEE` enum('0','1') NOT NULL DEFAULT '0',
  `UTILISEE` enum('0','1') NOT NULL DEFAULT '0',
  `MISE_A_DISPO` enum('0','1') NOT NULL DEFAULT '0',
  `ID_SIGNATAIRE1` int(11) DEFAULT NULL,
  `DATE_SIGNATURE1` datetime DEFAULT NULL,
  `ID_SIGNATAIRE2` int(11) DEFAULT NULL,
  `DATE_SIGNATURE2` datetime DEFAULT NULL,
  `GROUPEMENT` enum('0','1') NOT NULL DEFAULT '0',
  `ID_GROUPEMENT` int(11) DEFAULT NULL,
  `CODE_AGENCE` varchar(11) DEFAULT NULL,
  `CODE_VILLE` varchar(11) DEFAULT NULL,
  `REFERENCE_INTERNE` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `caution_historique`
--

CREATE TABLE `caution_historique` (
  `id` int(11) NOT NULL,
  `id_caution` int(11) NOT NULL,
  `detail_action` varchar(250) NOT NULL,
  `acteur` varchar(250) NOT NULL,
  `date_action` datetime NOT NULL,
  `infos` longtext,
  `user_type` enum('entreprise','banque','agent') NOT NULL DEFAULT 'entreprise'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `caution_referentiel`
--

CREATE TABLE `caution_referentiel` (
  `id` int(11) NOT NULL,
  `referentiel` int(11) NOT NULL,
  `libelle_fr` varchar(250) DEFAULT NULL,
  `libelle_ar` varchar(250) DEFAULT NULL,
  `code` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `caution_restitution`
--

CREATE TABLE `caution_restitution` (
  `ID` int(11) NOT NULL,
  `ID_CAUTION_DEMANDE` int(11) NOT NULL,
  `ID_ENTREPRISE` int(11) NOT NULL,
  `ID_INSCRIT` int(11) NOT NULL,
  `RAISON_SOCIALE` varchar(255) DEFAULT NULL,
  `REF_CONSULTATION` int(11) NOT NULL,
  `ACRONYME_ORG` varchar(10) NOT NULL,
  `ID_ACHETEUR_SERVICE` int(11) DEFAULT NULL,
  `ID_STATUT` int(11) NOT NULL,
  `TYPE_ANNULATION` enum('1','2') NOT NULL COMMENT '1=>restitution, 2=> main levée',
  `NUM_COMPTE_VIREMENT` varchar(100) DEFAULT NULL,
  `ID_BLOB_DEMANDE` int(11) DEFAULT NULL,
  `NOM_DOC_DEMANDE` varchar(250) NOT NULL,
  `ID_BLOB_MAINLEVEE` int(11) DEFAULT NULL,
  `NOM_DOC_MAINLEVEE` varchar(250) DEFAULT NULL,
  `DATE_CREA` datetime DEFAULT NULL,
  `DATE_MODIF` datetime DEFAULT NULL,
  `DATE_DEPOT` datetime DEFAULT NULL,
  `MOTIF_REJET_ACHETEUR` varchar(255) DEFAULT NULL,
  `ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE` int(11) DEFAULT NULL,
  `ID_AGENT_ACHETEUR_SIGNATAIRE` int(11) DEFAULT NULL,
  `ID_AGENT_ACHETEUR_VALIDATION` int(11) DEFAULT NULL,
  `ID_AGENT_ACHETEUR_REJET` int(11) DEFAULT NULL,
  `DATE_GENERATION_MAINLEVEE` datetime DEFAULT NULL,
  `DATE_SIGNATURE` datetime DEFAULT NULL,
  `DATE_VALIDATION_ACHETEUR` datetime DEFAULT NULL,
  `DATE_REJET_ACHETEUR` datetime DEFAULT NULL,
  `DATE_PRISE_EN_CHARGE_BANQUE` datetime DEFAULT NULL,
  `DATE_VALIDATION_BANQUE` datetime DEFAULT NULL,
  `DATE_REJET_BANQUE` datetime DEFAULT NULL,
  `ID_AGENT_BANQUIER_PRISE_EN_CHARGE` int(11) DEFAULT NULL,
  `ID_AGENT_BANQUIER_VALIDATION` int(11) DEFAULT NULL,
  `ID_AGENT_BANQUIER_REJET` int(11) DEFAULT NULL,
  `MOTIF_REJET_BANQUIER` varchar(255) DEFAULT NULL,
  `ID_VILLE` int(11) DEFAULT NULL,
  `CODE_AGENCE` varchar(11) DEFAULT NULL,
  `CODE_VILLE` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `caution_signataire_demande`
--

CREATE TABLE `caution_signataire_demande` (
  `id` int(11) NOT NULL,
  `id_demande` int(11) NOT NULL,
  `id_signataire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `caution_signature`
--

CREATE TABLE `caution_signature` (
  `ID` int(11) NOT NULL,
  `ID_BLOB` int(11) NOT NULL,
  `ID_DEMANDE` int(11) NOT NULL,
  `ID_AGENT_SIGNATAIRE` int(11) NOT NULL,
  `REVISION` int(11) NOT NULL,
  `TYPE_DOCUMENT` enum('0','1') NOT NULL DEFAULT '0' COMMENT '''0'': demande ''1'' : caution',
  `DATE_SIGNATURE` datetime NOT NULL,
  `EMETTEUR` varchar(255) NOT NULL,
  `DETAIL_EMETTEUR` varchar(250) DEFAULT NULL,
  `SIGNATAIRE` varchar(255) NOT NULL,
  `DETAIL_SIGNATAIRE` varchar(250) DEFAULT NULL,
  `REVOQUE` enum('0','1') NOT NULL,
  `NON_REPUDIATION` enum('0','1') NOT NULL DEFAULT '0',
  `CHAINE_VALIDE` enum('0','1') NOT NULL,
  `DATE_DEB_PERIODE_VALIDITE` datetime NOT NULL,
  `DATE_FIN_PERIODE_VALIDITE` datetime NOT NULL,
  `PERIODE_VALIDITE` enum('0','1') NOT NULL DEFAULT '0',
  `SIGNATURE_VALIDE` enum('0','1') NOT NULL,
  `TYPE_SIGNATURE` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1 : XADES , 2 : PADES',
  `XML_SIGNATURE` text NOT NULL,
  `NOM_FICHIER` varchar(255) NOT NULL,
  `HASH` varchar(255) DEFAULT NULL,
  `ALGORITHME_HASH` varchar(50) DEFAULT NULL,
  `DATE_DERNIERE_VERIFICATION` datetime DEFAULT NULL COMMENT 'Date de la dernière vérification d''intégrité de la signature',
  `SIGNATURE_ARCHIVEE` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `caution_signature_restitution`
--

CREATE TABLE `caution_signature_restitution` (
  `ID` int(11) NOT NULL,
  `ID_BLOB` int(11) NOT NULL,
  `ID_MAINLEVEE` int(11) NOT NULL,
  `ID_AGENT_SIGNATAIRE` int(11) NOT NULL,
  `REVISION` int(11) NOT NULL,
  `TYPE_DOCUMENT` enum('0','1') NOT NULL DEFAULT '0' COMMENT '''0'': demande entreprise ''1'' : mainlevee',
  `DATE_SIGNATURE` datetime NOT NULL,
  `EMETTEUR` varchar(255) NOT NULL,
  `DETAIL_EMETTEUR` varchar(250) DEFAULT NULL,
  `SIGNATAIRE` varchar(255) NOT NULL,
  `DETAIL_SIGNATAIRE` varchar(250) DEFAULT NULL,
  `REVOQUE` enum('0','1') NOT NULL,
  `NON_REPUDIATION` enum('0','1') NOT NULL DEFAULT '0',
  `CHAINE_VALIDE` enum('0','1') NOT NULL,
  `DATE_DEB_PERIODE_VALIDITE` datetime NOT NULL,
  `DATE_FIN_PERIODE_VALIDITE` datetime NOT NULL,
  `PERIODE_VALIDITE` enum('0','1') NOT NULL DEFAULT '0',
  `SIGNATURE_VALIDE` enum('0','1') NOT NULL,
  `TYPE_SIGNATURE` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1 : XADES , 2 : PADES',
  `XML_SIGNATURE` text NOT NULL,
  `NOM_FICHIER` varchar(255) NOT NULL,
  `HASH` varchar(255) DEFAULT NULL,
  `ALGORITHME_HASH` varchar(50) DEFAULT NULL,
  `DATE_DERNIERE_VERIFICATION` datetime DEFAULT NULL COMMENT 'Date de la dernière vérification d''intégrité de la signature',
  `SIGNATURE_ARCHIVEE` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ccag_applicable`
--

CREATE TABLE `ccag_applicable` (
  `id_auto` int(11) UNSIGNED NOT NULL,
  `id` int(11) NOT NULL DEFAULT '0',
  `organisme` varchar(5) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Centrale_publication`
--

CREATE TABLE `Centrale_publication` (
  `id` int(20) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `nom` varchar(200) DEFAULT NULL,
  `mail` varchar(200) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `information` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CertificatChiffrement`
--

CREATE TABLE `CertificatChiffrement` (
  `consultation_ref` int(11) NOT NULL DEFAULT '0',
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `type_env` int(1) NOT NULL DEFAULT '0',
  `sous_pli` int(3) NOT NULL DEFAULT '0',
  `index_certificat` int(3) NOT NULL DEFAULT '1',
  `certificat` mediumtext NOT NULL,
  `visible` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CertificatPermanent`
--

CREATE TABLE `CertificatPermanent` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `Titre` varchar(100) NOT NULL DEFAULT '',
  `Prenom` varchar(100) NOT NULL DEFAULT '',
  `Nom` varchar(100) NOT NULL DEFAULT '',
  `EMail` varchar(100) NOT NULL DEFAULT '',
  `Certificat` mediumtext NOT NULL,
  `service_id` int(11) NOT NULL DEFAULT '-1',
  `master_key` enum('0','1') NOT NULL DEFAULT '0',
  `id_agent` int(11) DEFAULT '0',
  `CSP` varchar(200) DEFAULT '',
  `date_modification` varchar(200) DEFAULT '',
  `certificat_universelle` enum('0','1') NOT NULL DEFAULT '0',
  `visible` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Certificats_Entreprises`
--

CREATE TABLE `Certificats_Entreprises` (
  `id` int(50) NOT NULL,
  `certificat` text NOT NULL,
  `date_debut` varchar(20) NOT NULL,
  `date_fin` varchar(20) NOT NULL,
  `id_inscrit` int(20) NOT NULL,
  `nom_inscrit` varchar(200) NOT NULL,
  `prenom_inscrit` varchar(200) NOT NULL,
  `id_entreprise` int(20) NOT NULL,
  `statut_revoque` varchar(20) NOT NULL,
  `date_revoquation` varchar(20) NOT NULL,
  `mail_inscrit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Certificat_Agent`
--

CREATE TABLE `Certificat_Agent` (
  `id` int(50) NOT NULL,
  `certificat` text NOT NULL,
  `date_debut` varchar(20) NOT NULL DEFAULT '',
  `date_fin` varchar(20) NOT NULL DEFAULT '',
  `id_agent` int(20) DEFAULT NULL,
  `nom_agent` varchar(200) NOT NULL DEFAULT '',
  `prenom_agent` varchar(200) NOT NULL DEFAULT '',
  `id_service` int(20) DEFAULT NULL,
  `statut_revoque` varchar(20) NOT NULL DEFAULT '',
  `date_revoquation` varchar(20) NOT NULL DEFAULT '',
  `mail_agent` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CG76_Domaine`
--

CREATE TABLE `CG76_Domaine` (
  `Id` int(11) NOT NULL,
  `libelle` varchar(150) NOT NULL,
  `Parent` smallint(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CG76_Donnee_Complementaire_Domaine`
--

CREATE TABLE `CG76_Donnee_Complementaire_Domaine` (
  `Id` int(11) NOT NULL,
  `IdDonneeComlementaire` int(11) NOT NULL,
  `IdDomaine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CG76_Donnee_Complementaire_entreprise`
--

CREATE TABLE `CG76_Donnee_Complementaire_entreprise` (
  `Ref` smallint(6) NOT NULL,
  `idInscrit` smallint(5) NOT NULL DEFAULT '0',
  `IdEntreprise` int(11) NOT NULL DEFAULT '0',
  `type_formation` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `cout_moyen_journee` varchar(10) DEFAULT NULL,
  `collaboration_fpt` int(1) NOT NULL DEFAULT '0',
  `collaboration_fpe` int(1) NOT NULL DEFAULT '0',
  `centre_documentation` int(1) NOT NULL DEFAULT '0',
  `service_reprographie` int(1) NOT NULL DEFAULT '0',
  `salle_info` int(1) NOT NULL DEFAULT '0',
  `salle_cours` int(1) NOT NULL DEFAULT '0',
  `aire_geo_inter` varchar(255) DEFAULT NULL,
  `commentaire` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CG76_PieceJointe`
--

CREATE TABLE `CG76_PieceJointe` (
  `Ref` int(11) NOT NULL,
  `IdPJ` int(11) NOT NULL DEFAULT '0',
  `idEntreprise` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `changement_heure`
--

CREATE TABLE `changement_heure` (
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `date_debut_zone` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_fin_zone` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `decalage` char(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Chorus_acte_juridique`
--

CREATE TABLE `Chorus_acte_juridique` (
  `id` int(10) NOT NULL DEFAULT '0',
  `libelle` varchar(200) NOT NULL DEFAULT '',
  `code` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Chorus_Code_Calcul_Interets`
--

CREATE TABLE `Chorus_Code_Calcul_Interets` (
  `id` int(50) NOT NULL,
  `libelle` varchar(200) NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Chorus_conditions_paiements`
--

CREATE TABLE `Chorus_conditions_paiements` (
  `id` int(50) NOT NULL,
  `libelle` varchar(200) NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Chorus_echange`
--

CREATE TABLE `Chorus_echange` (
  `id` int(20) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `id_decision` int(20) DEFAULT NULL,
  `num_ordre` varchar(20) DEFAULT NULL,
  `nom_createur` varchar(200) DEFAULT NULL,
  `prenom_createur` varchar(200) DEFAULT NULL,
  `id_createur` int(20) DEFAULT NULL,
  `statutEchange` varchar(20) DEFAULT NULL,
  `date_creation` varchar(20) DEFAULT NULL,
  `date_envoi` varchar(20) DEFAULT NULL,
  `retour_chorus` varchar(20) DEFAULT NULL,
  `id_ej_appli_ext` varchar(20) NOT NULL DEFAULT '',
  `id_oa` int(20) DEFAULT NULL,
  `id_ga` int(20) DEFAULT NULL,
  `id_type_marche` int(20) DEFAULT NULL,
  `id_type_groupement` varchar(255) DEFAULT NULL COMMENT 'Type de groupement',
  `id_regroupement_comptable` varchar(255) DEFAULT NULL COMMENT 'Regroupement comptable',
  `dce_items` varchar(200) DEFAULT NULL,
  `ids_env_ae` varchar(200) DEFAULT NULL,
  `ids_env_items` varchar(200) DEFAULT NULL,
  `ids_pieces_externes` varchar(200) DEFAULT NULL,
  `id_agent_envoi` int(200) DEFAULT NULL,
  `nom_agent` varchar(200) DEFAULT NULL,
  `prenom_agent` varchar(200) DEFAULT NULL,
  `signACE` enum('0','1') NOT NULL DEFAULT '0',
  `siren` varchar(9) DEFAULT NULL,
  `siret` varchar(5) DEFAULT NULL,
  `date_notification` varchar(20) DEFAULT NULL,
  `date_fin_marche` varchar(20) DEFAULT NULL,
  `id_acte_juridique` char(1) DEFAULT NULL,
  `cpv_1` varchar(20) DEFAULT NULL,
  `cpv_2` text,
  `cpv_3` varchar(20) DEFAULT NULL,
  `cpv_4` varchar(20) DEFAULT NULL,
  `id_type_procedure` int(20) DEFAULT NULL,
  `id_forme_prix` char(1) DEFAULT NULL,
  `Nbr_entreprises_cotraitantes` varchar(20) DEFAULT NULL,
  `sous_traitance_declaree` char(1) DEFAULT NULL,
  `carte_achat` char(1) DEFAULT NULL,
  `clause_sociale` char(1) DEFAULT NULL,
  `clause_environnementale` char(1) DEFAULT NULL,
  `Nbr_proposition_recues` varchar(20) DEFAULT NULL,
  `Nbr_proposition_dematerialisees` varchar(20) DEFAULT NULL,
  `nom_fichier` varchar(200) DEFAULT NULL,
  `erreur_rejet` text,
  `code_cpv_libelle1` varchar(250) DEFAULT NULL,
  `code_cpv_libelle2` varchar(250) DEFAULT NULL,
  `code_cpv_libelle3` varchar(250) DEFAULT NULL,
  `code_cpv_libelle4` varchar(250) DEFAULT NULL,
  `pieces_notif_items` varchar(200) DEFAULT NULL COMMENT 'Permet de stocker les items des pieces de notification',
  `ids_blob_env` varchar(225) NOT NULL DEFAULT '' COMMENT 'Permet de stocker les idBLob des fichiers enveloppes reponses',
  `ids_env_sign_items` varchar(255) DEFAULT NULL COMMENT 'Permet de stocker les identifiants des blocs des fichiers reponses signatures (pour les autres fichiers hors actes d''engagement)',
  `ids_blob_sign_env` varchar(255) DEFAULT NULL COMMENT 'Permet de stocker les identifiants blob des fichiers de signatures',
  `montant_ht` varchar(255) DEFAULT NULL COMMENT 'Permet de stocker le montant hors taxe',
  `code_pays_titulaire` varchar(255) DEFAULT NULL COMMENT 'Code pays titulaire',
  `numero_siret_titulaire` varchar(255) DEFAULT NULL COMMENT 'num?ro de siret titulaire ou mandataire',
  `numero_siren_titulaire` varchar(255) DEFAULT NULL COMMENT 'Numero de siren titulaire',
  `Codes_pays_co_titulaire` varchar(255) DEFAULT NULL COMMENT 'Codes pays co-titulaires',
  `numero_siret_co_titulaire` varchar(255) DEFAULT NULL COMMENT 'Num?ro de siret des co-titulaires',
  `numero_siren_co_titulaire` varchar(255) DEFAULT NULL COMMENT 'Numero de siren titulaire des co-titulaires',
  `CCAG_reference` varchar(255) DEFAULT NULL COMMENT 'CCAG de rattachement',
  `pourcentage_avance` varchar(255) DEFAULT NULL COMMENT 'Pourcentage de l''avance',
  `type_avance` varchar(255) DEFAULT NULL COMMENT 'Type d''avance',
  `conditions_paiement` varchar(255) DEFAULT NULL COMMENT 'Conditions de paiement',
  `identifiant_accord_cadre` varchar(255) DEFAULT NULL COMMENT 'Identifiant de l''accord cadre',
  `date_notification_reelle` varchar(20) DEFAULT NULL,
  `date_fin_marche_reelle` varchar(20) DEFAULT NULL,
  `ids_rapport_signature` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Chorus_Fiche_Navette`
--

CREATE TABLE `Chorus_Fiche_Navette` (
  `id` int(11) NOT NULL,
  `organisme` varchar(10) NOT NULL,
  `id_chorus_echange` varchar(255) NOT NULL DEFAULT '0' COMMENT 'Pointe vers la table Chorus_echange',
  `rpa` varchar(255) DEFAULT NULL COMMENT 'Repr?sentant du pouvoir adjudicateur',
  `objet` text COMMENT 'Objet du march?',
  `fiche_immobilisation` enum('0','1') DEFAULT NULL COMMENT 'Fiche immobilisation',
  `attente_pj` enum('0','1') DEFAULT NULL COMMENT 'En attente de PJ',
  `marche_partage` enum('0','1') DEFAULT NULL COMMENT 'March? partag?',
  `id_accord_cadre` varchar(255) DEFAULT NULL COMMENT 'Identifiant accord cadre',
  `lib_accord_cadre` varchar(255) DEFAULT NULL COMMENT 'Libell? accord cadre',
  `annee_creation_accord_cadre` varchar(255) DEFAULT NULL COMMENT 'Ann?e de cr?ation de l''accord',
  `montant_ht` varchar(255) DEFAULT NULL COMMENT 'Montant HT',
  `reconductible` enum('0','1') DEFAULT NULL COMMENT 'Reconductible',
  `visa_accf` enum('0','1') DEFAULT NULL COMMENT 'Visa ACCF',
  `visa_prefet` enum('0','1') DEFAULT NULL COMMENT 'Visa pr?fet',
  `retenue_garantie` enum('0','1') DEFAULT NULL COMMENT 'Retenue de garantie',
  `montant_mini` varchar(255) DEFAULT NULL COMMENT 'Montant mini',
  `montant_maxi` varchar(255) DEFAULT NULL COMMENT 'Montant maxi',
  `montant_forfaitaire` varchar(255) DEFAULT NULL COMMENT 'Montant partie forfaitaire',
  `montant_bc` varchar(255) DEFAULT NULL COMMENT 'Montant partie ? BC',
  `taux_tva` varchar(255) DEFAULT NULL COMMENT 'Taux TVA',
  `centre_cout` varchar(255) DEFAULT NULL COMMENT 'Centre de co?t (si unique)',
  `centre_financier` varchar(255) DEFAULT NULL COMMENT 'Centre financier (si unique',
  `activite` varchar(255) DEFAULT NULL COMMENT 'Activit? (si unique)',
  `domaine_fonctionnel` varchar(255) DEFAULT NULL COMMENT 'Domaine fonctionnel (si unique)',
  `fond` varchar(255) DEFAULT NULL COMMENT 'Fond (si unique)',
  `localisation_interministerielle` varchar(255) DEFAULT NULL COMMENT 'Localisation interminist?rielle (si unique)',
  `nature` varchar(255) DEFAULT NULL COMMENT 'Nature (si unique)',
  `axe_ministeriel1` varchar(255) DEFAULT NULL COMMENT 'Axe minist?riel 1 (si unique)',
  `projet_analytique` varchar(255) DEFAULT NULL COMMENT 'Projet analytique (si unique)',
  `localisation_ministerielle` varchar(255) DEFAULT NULL COMMENT 'Localisation minist?rielle (si unique)',
  `axe_ministeriel2` varchar(255) DEFAULT NULL COMMENT 'Axe minist?riel 2 (si unique)',
  `remarques` text COMMENT 'Remarques',
  `id_document` int(11) DEFAULT NULL COMMENT 'Permet de stocker l''identifiant du blob du document de la fiche navette',
  `nom_document` varchar(255) DEFAULT NULL COMMENT 'Le nom du document de la fiche de navette'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Chorus_forme_prix`
--

CREATE TABLE `Chorus_forme_prix` (
  `id` int(20) NOT NULL DEFAULT '0',
  `libelle` varchar(200) NOT NULL DEFAULT '',
  `code` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Chorus_groupement_achat`
--

CREATE TABLE `Chorus_groupement_achat` (
  `id` int(20) NOT NULL,
  `organisme` varchar(10) NOT NULL,
  `id_oa` int(20) NOT NULL DEFAULT '0',
  `libelle` varchar(250) NOT NULL DEFAULT '',
  `code` varchar(50) NOT NULL DEFAULT '',
  `actif` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `chorus_noms_fichiers`
--

CREATE TABLE `chorus_noms_fichiers` (
  `id_echange` int(11) NOT NULL,
  `nom_fichier` varchar(200) NOT NULL,
  `acronyme_organisme` varchar(200) NOT NULL,
  `type_fichier` char(3) NOT NULL DEFAULT 'FEN',
  `date_ajout` varchar(20) DEFAULT NULL COMMENT 'Renseigne la date d''ajout d''un nouveau fichier'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `chorus_numeros_marches`
--

CREATE TABLE `chorus_numeros_marches` (
  `numero_marche` varchar(250) NOT NULL DEFAULT '',
  `acronyme_organisme` varchar(100) NOT NULL DEFAULT '',
  `id_decision` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Chorus_numero_sequence`
--

CREATE TABLE `Chorus_numero_sequence` (
  `id` int(50) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `type_fichier` varchar(20) DEFAULT 'FEN'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Chorus_organisation_achat`
--

CREATE TABLE `Chorus_organisation_achat` (
  `id` int(20) NOT NULL,
  `organisme` varchar(10) NOT NULL,
  `libelle` varchar(250) NOT NULL DEFAULT '',
  `code` varchar(50) NOT NULL DEFAULT '',
  `actif` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Chorus_pj`
--

CREATE TABLE `Chorus_pj` (
  `id` int(20) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `id_echange` int(20) NOT NULL DEFAULT '0',
  `nom_fichier` varchar(300) NOT NULL DEFAULT '',
  `fichier` varchar(20) NOT NULL DEFAULT '',
  `horodatage` longblob NOT NULL,
  `untrusteddate` varchar(20) NOT NULL DEFAULT '',
  `taille` int(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Chorus_Regroupement_Comptable`
--

CREATE TABLE `Chorus_Regroupement_Comptable` (
  `id` int(11) NOT NULL,
  `organisme` varchar(20) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Chorus_Type_Groupement`
--

CREATE TABLE `Chorus_Type_Groupement` (
  `id` int(11) NOT NULL,
  `organisme` varchar(20) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Chorus_type_marche`
--

CREATE TABLE `Chorus_type_marche` (
  `id` int(20) NOT NULL,
  `libelle` varchar(250) NOT NULL DEFAULT '',
  `code` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Chorus_type_procedure`
--

CREATE TABLE `Chorus_type_procedure` (
  `id` int(50) NOT NULL,
  `libelle` varchar(200) NOT NULL DEFAULT '',
  `code` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Complement`
--

CREATE TABLE `Complement` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `consultation_ref` int(11) NOT NULL DEFAULT '0',
  `complement` int(11) NOT NULL DEFAULT '0',
  `nom_fichier` varchar(80) NOT NULL DEFAULT '',
  `statut` char(1) NOT NULL DEFAULT '1',
  `horodatage` longblob NOT NULL,
  `untrusteddate` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `agent_id` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CompteMoniteur`
--

CREATE TABLE `CompteMoniteur` (
  `id` int(22) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `moniteur_login` varchar(100) NOT NULL DEFAULT '',
  `moniteur_password` varchar(100) NOT NULL DEFAULT '',
  `moniteur_mail` varchar(100) NOT NULL DEFAULT '',
  `moniteur_target` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `comptes_agents_associes`
--

CREATE TABLE `comptes_agents_associes` (
  `compte_principal` int(11) NOT NULL COMMENT 'ID du compte agent principal',
  `compte_secondaire` int(11) NOT NULL COMMENT 'ID du compte agent secondaire',
  `statut_activation_compte_secondaire` enum('0','1') NOT NULL COMMENT '"0" = En attente d''approbation  ,"1" = Approuv? (l''association a ?t? confirm?e)',
  `UID_ECHANGE` varchar(32) DEFAULT NULL COMMENT 'ID utilis? durant l''?change pour la confirmation de l''association'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `compte_centrale`
--

CREATE TABLE `compte_centrale` (
  `ID_COMPTE` int(20) NOT NULL,
  `ORGANISME` varchar(30) NOT NULL,
  `ID_CENTRALE` int(20) DEFAULT NULL,
  `MAIL` varchar(200) DEFAULT NULL,
  `FAX` varchar(20) DEFAULT NULL,
  `INFO_CIMPLEMENTAIRE` text,
  `ID_SERVICE` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `configuration_alerte`
--

CREATE TABLE `configuration_alerte` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `operation` varchar(255) DEFAULT NULL,
  `bloquant` enum('0','1') DEFAULT '0',
  `active` enum('0','1') DEFAULT NULL,
  `xml` longtext,
  `message` longtext,
  `type_objet` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `configuration_organisme`
--

CREATE TABLE `configuration_organisme` (
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `encheres` enum('0','1') NOT NULL DEFAULT '0',
  `consultation_pj_autres_pieces_telechargeables` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Permet ? l''acheteur public d''afficher le bloc ''Autres pi?ces t?l?chargeables par les entreprises'' et de pouvoir joindre une pi?ce lors de la cr?ation de la consultation. Ce module s''active par organisme.',
  `no_activex` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_mapa` enum('0','1') NOT NULL DEFAULT '1',
  `article_133_upload_fichier` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Permet pour un organisme de g?rer la visibilit? du lien ''''liste des march?s (articles 133)''''dans le menu gauche cot? agent: fonction d''import de la liste des march?s ? partir de fichier.',
  `centrale_publication` enum('0','1') NOT NULL DEFAULT '0',
  `organisation_centralisee` enum('0','1') NOT NULL DEFAULT '1',
  `presence_elu` enum('0','1') NOT NULL DEFAULT '0',
  `traduire_consultation` enum('0','1') NOT NULL DEFAULT '0',
  `suivi_passation` enum('0','1') NOT NULL DEFAULT '0',
  `numerotation_ref_cons` enum('0','1') NOT NULL DEFAULT '0',
  `pmi_lien_portail_defense_agent` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''activer pour l''organisme le lien d''acc?s aux portails de la d?fense. Fonctionnalit? accessible dans la page d''accueil des acheteurs publics.',
  `interface_archive_arcade_pmi` enum('0','1') NOT NULL DEFAULT '0',
  `desarchivage_consultation` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''activer la fonction de desarchivage d''une consultation',
  `alimentation_automatique_liste_invites` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Alimentation automatique de la liste des invit?s d''une consultation par la d?signation du service associ?',
  `interface_chorus_pmi` enum('0','1') NOT NULL DEFAULT '0',
  `archivage_consultation_sur_pf` enum('0','1') NOT NULL DEFAULT '0',
  `autoriser_modification_apres_phase_consultation` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Emp?che la modification d''une consultation apr?s phase ''consultation''',
  `importer_enveloppe` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Ce module agent est activable par organisme. Il permet d''acc?der ? la fonction "importer une enveloppe" en phase d?cision s''il est actif et si l''agent dispose de l''habilitation',
  `export_marches_notifies` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet ? un agent d''un organisme ou d''un service d''acc?der ? la page de recherche avanc?e et d''export des march?s notifi?s.',
  `acces_agents_cfe_bd_fournisseur` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Ce module lorsqu''il est activ? permet d''avoir acc?s aux documents rendus visibles du coffre fort entreprise ? partir de la fonction visualiser les entreprises.',
  `acces_agents_cfe_ouverture_analyse` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'ce module permet ? l''agent d''acc?der aux documents rendus visibles du coffre fort entreprise ? partir de la page ouverture et analyse',
  `utiliser_parametrage_encheres` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''utiliser le module ench?res parametr?es par d?faut sur une ench?re invers?e.',
  `gestion_mandataire` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de g?rer les mandataires.',
  `verifier_compte_boamp` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''activer la validation du compte BOAMP lors de sa cr?ation',
  `four_eyes` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'module permetant la gestion de l''ouverture en deux temps des offres ?lectroniques',
  `interface_module_rsem` enum('0','1') NOT NULL DEFAULT '0',
  `archivage_consultation_sae_externe_envoi_archive` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet d''envoyer les archives au syst?me d''archivage externe de la plate-forme',
  `archivage_consultation_sae_externe_telechargement_archive` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet ? un agent de t?l?charger une archive (DAC pas le DIC) depuis syst?me d''archivage externe de la plate-forme',
  `agent_verification_certificat_peppol` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'ce module permet de pr?senter ? l''agent dans la page de d?tail de pli la fonction v?rifier le certificat de signature avec PEPPOL',
  `fuseau_horaire` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de d?finir le lieu de r?sidence ainsi que le fuseau horaire par rapport ? l''heure GMT. Ces informations seront exploit?es sur la plateforme',
  `fiche_weka` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''integrer les informations weka au niveau de MPE',
  `mise_disposition_pieces_marche` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Mise ? disposition des pi?ces de march?s',
  `base_dce` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet de gerer la fonctionnalite BASE_DCE',
  `avis_membres_commision` enum('0','1') NOT NULL DEFAULT '0',
  `Donnees_Redac` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'gestion des menus et habilitations REDAC  sous MPE',
  `Personnaliser_Affichage_Theme_Et_Illustration` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'gestion d''affichage personnaliser pour les agents ( choix de th?me et l''illustration de fond)',
  `type_contrat` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de g?rer la visibilit? du type de contrat sur le formulaire consultation',
  `entite_adjudicatrice` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de g?rer la visibilit? du champ "Consultation pass?e en tant qu''Entit? adjudicatrice"',
  `gestion_operations` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de g?rer les op?rations',
  `calendrier_de_la_consultation` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Afficher ou masquer le calendrier previsionnel et reel',
  `donnees_complementaires` enum('0','1') NOT NULL DEFAULT '0',
  `espace_collaboratif` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet de gerer la fonctionnalit?s des espaces collaboratifs',
  `historique_navigation_inscrits` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Permettre a un agent habilite d acceder a l historique de navigation des inscrits sur une consultation donnee.',
  `Identification_contrat` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet de gerer le format de l''identifiant du contrat ',
  `extraction_accords_cadres` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'gere la possibilit? de telecharger la liste des accord-cadres',
  `extraction_siret_acheteur` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de g?rer la liste des Siret Acheteurs',
  `marche_public_simplifie` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de g?rer la visibilit? du champ "Marche Public Simplifie dans la creation de la consultation"',
  `consultation_demande_achat` enum('0','1') NOT NULL,
  `authenticate_agent_by_ldap` enum('0','1') NOT NULL,
  `consultation_via_import` enum('0','1') DEFAULT NULL,
  `EXPRESSION_REG_REFERENCE` varchar(100) DEFAULT NULL,
  `visioconference_cao` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `configuration_plateforme`
--

CREATE TABLE `configuration_plateforme` (
  `id_auto` int(11) UNSIGNED NOT NULL,
  `code_cpv` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Rend obligatoire la saisie du code cpv ? la cr?ation de la consultation pour le bloc principal et les lots. 1=saisie cpv obligatoire',
  `multi_linguisme_entreprise` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Rend l''application MPE multilingue du c?t? entreprise. L''activation de ce module se fait en parall?le du param?trage de la table Langue dans la base commune',
  `gestion_fournisseurs_docs_mes_sous_services` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Donne la possibilit? ? un administrateur ayant l''habilitation de g?rer les fournisseurs de documents, de g?rer les fournisseurs de documents de ses sous services.',
  `authenticate_inscrit_by_cert` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Rend visible le bloc authentification par certificat du c?t? entreprise et active de cette mani?re la fonction d''authentification par certificat',
  `authenticate_inscrit_by_login` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Rend visible le bloc authentification par identifiant / mot de passe du c?t? entreprise et active de cette mani?re la fonction d''authentification par identifiant',
  `base_qualifiee_entreprise_insee` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de pr?-remplir les informations d''une entreprise lors de l''inscription ? partir de la base INSEE. L''interconnexion avec la base INSEE se faisant par Web Services. Ce module est utilisable uniquement en France.',
  `gestion_boamp_mes_sous_services` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Donne la possibilit? ? un administrateur ayant l''habilitation de g?rer les comptes BOAMP, de g?rer les comptes BOAMP de ses sous services.',
  `gestion_bi_cle_mes_sous_services` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Donne la possibilit? ? un administrateur ayant l''habilitation de g?rer les cl?s de chiffrement, de g?rer les cl?s de chiffrements de ses sous services.',
  `nom_entreprise_toujours_visible` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''afficher le nom de l''entreprise dans la phase d''ouverture et d''analyse au niveau du tableau de r?ponses et de la page de t?l?chargement des plis chiffr?s',
  `gestion_jal_mes_sous_services` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Donne la possibilit? ? un administrateur ayant l''habilitation de g?rer les JAL, de g?rer les JAL de ses sous services',
  `choix_langue_affichage_consultation` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''afficher dans la page de r?sultat de recherche des consultations du c?t? entreprise, les informations relatives ? la consultation dans les autres langues. Ce module s''utilise avec le module organisme traduire_consultation.',
  `compte_entreprise_donnees_complementaires` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Donne acc?s ? un lien ''Donn?es compl?mentaires - Organisme de formation'' dans le compte d''une entreprise. Ce lien redirige vers une page qui permet ? l''entreprise de pr?ciser son activit? dans le domaine de la formation.',
  `annuaire_entites_achat_visible_par_entreprise` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Permet d''activer le lien ''Visualiser les services'' c?t? entreprise. C''est l''annuaire des entit?s d''achat de la plate-forme. Les organismes qui apparaissent dans la liste d?roulante sont celles qui ont active et affichage_entite=1 dans la table organisme.',
  `affichage_recherche_avancee_agent_ac_sad_transversaux` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''acc?der aux Accords-cadres et Syst?mes d''acquisition dynamique transversaux, en vue de passer un march? subs?quent ou sp?cifique dans le moteur de recherche avanc? c?t? agent.',
  `encheres_entreprise` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''activer le module ench?re c?t? entreprise. Ce module s''utilise avec le module encheres de la table ModuleOrganisme.',
  `socle_interne` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de transformer l''application MPE comme un socle de portail d''administration ?lectronique du c?t? des agents. Le socle interne est ? activer quand une application diff?rente de MPE est int?gr?e en sus au portail (ex: parapheur).',
  `module_certificat` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''activer un lien dans le menu gauche agent dans l''aide>outils informatique qui affiche une page permettant de t?l?charger le certificat racine de la plate-forme afin de pouvoir utiliser les outils de v?rifications de jeton d''horodatage.',
  `socle_externe_agent` enum('0','1') NOT NULL DEFAULT '0',
  `afficher_image_organisme` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de g?rer un logo par organisme qui s''affichera dans le bandeau ? droite de la plate-forme quand on y acc?de avec l''acronyme et dans les r?sultats du moteur de recherche c?t? entreprise. L''administration du logo se fait dans /administration.',
  `socle_externe_entreprise` enum('0','1') NOT NULL DEFAULT '0',
  `portail_defense_entreprise` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Pemet l''Int?gration de la gestion de l''inscription des entreprises sur les portails du MINDEF ainsi que le sso en provenance des portails MINDEF.',
  `compte_entreprise_province` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''afficher le champ province dans le formulaire de creation des entreprises, la liste est aliment?e ? partir de la table GeolocalisationN2',
  `compte_entreprise_telephone3` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''afficher le champ telephone 3 dans le formulaire de creation des entreprises''',
  `compte_entreprise_tax_prof` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''afficher le champ numero de la taxe professionnelle dans le formulaire de creation des entreprises''',
  `compte_entreprise_rcville` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''afficher la ville associ?e au champ du numero du registe du commerce dans le formulaire de creation des entreprises''',
  `compte_entreprise_declaration_honneur` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''afficher le champ declaration sur l''''honneur dans le formulaire de creation des entreprises'' que l''inscrit coche lors de l''enregistrement.',
  `compte_entreprise_qualification` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''activer le module qui g?re la classification des entreprises en fonction de leur qualification qui sont organis?es hi?rarchiquement. Ce module utilise la table Qualification de la base commune.',
  `compte_entreprise_moyens_techniques` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''afficher le champ moyen techniques dans lequel seront saisies les informations au niveau du compte entreprise. Ces informations sont visible dans la page detail entreprise du c?t? Agent',
  `compte_entreprise_prestations_realisees` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''afficher le champ prestations r?alis?s dans lequel seront saisies les informations au niveau du compte entreprise. Ces informations sont visible dans la page detail entreprise du c?t? Agent',
  `compte_entreprise_chiffre_affaire_production_biens_services` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Permet d''afficher le tableau relatif aux donnees financieres de l''entreprise relativement ? la vente de marchandises, ? la production et aux services sur les 3 dernieres ann?es',
  `enveloppe_offre_technique` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''associer une enveloppe d''offre technique',
  `compte_inscrit_choix_profil` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''afficher lors de la cr?ation d''un compte inscrit le choix du type de compte utilisateur ou administrateur dans le formulaire',
  `procedure_adaptee` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Permet de g?rer la visibilit? des MAPA dans la plate-forme: acc?s aux fonctions relatives ? la gestion des MAPA, aux statistiques MAPA et les habilitations',
  `compte_entreprise_siren` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Permet d''afficher le champ siren et siret dans le formulaire de creation des entreprises',
  `compte_entreprise_activation_inscription_par_agent` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''enregistrer les demandes d''inscription des entreprises sans activer le compte au moment de l''enregistrement. L''activation se faisant par un agent habilit?.',
  `menu_entreprise_consultations_en_cours` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'affiche le lien ''consultations en cours'' dans le menu gauche entreprise',
  `compte_entreprise_capital_social` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Module pour activer le compte entreprise pour qu''il affiche le champs capital social ',
  `mail_activation_compte_inscrit_entreprise` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de g?rer l''envoi d''un mail sp?cifique lors de l''inscription d''un compte inscrit avec des informations sur le compte entreprise et la procedure pour activer le compte.',
  `decision_date_notification` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Module pour afficher la date de notification dans la decision attributaire',
  `decision_pmi_pme` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Module pour afficher le champ pmi /pme dans la decision attributaire',
  `decision_nature_prestations` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Module pour afficher la nature de Prestations dans la decision attributaire',
  `decision_objet_marche` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Module pour afficher objet marche dans la decision attributaire',
  `decision_note` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Module pour afficherla note dans la decision attributaire',
  `decision_fiche_recensement` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Module pour afficher le lien pour telecharger la fiche de recensement dans la decision attributaire',
  `registre_papier_mail_obligatoire` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de rendre obligatoire l''adresse ?lectronique lors de l''ajout d''un d?p?t papier par l''acheteur public au niveau des registres.',
  `menu_entreprise_indicateurs_cles` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Affiche les ''indicateurs cl?s'' dans le menu de gauche sur la plateforme des entreprises.',
  `ajout_rpa_champ_email` enum('0','1') NOT NULL DEFAULT '0',
  `ajout_rpa_champ_telephone` enum('0','1') NOT NULL DEFAULT '0',
  `ajout_rpa_champ_fax` enum('0','1') NOT NULL DEFAULT '0',
  `entreprise_poser_question_sans_pj` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Permet de masquer le bloc d''ajout de fichier joint lorsque l''inscrit de l''entreprise pose une question. Module actif ? 1.',
  `url_demarche_agent` enum('0','1') NOT NULL DEFAULT '0',
  `url_demarche_entreprise` enum('0','1') NOT NULL DEFAULT '0',
  `siret_detail_entite_achat` enum('0','1') NOT NULL DEFAULT '1',
  `presence_elu` enum('0','1') NOT NULL DEFAULT '1',
  `gerer_mon_service` enum('0','1') NOT NULL DEFAULT '0',
  `depouillement_enveloppe_depend_RAT_enveloppe_precedente` enum('0','1') NOT NULL DEFAULT '0',
  `consultation_adresse_retrais_dossiers` enum('0','1') NOT NULL DEFAULT '0',
  `consultation_adresse_depot_offres` enum('0','1') NOT NULL DEFAULT '0',
  `consultation_caution_provisoire` enum('0','1') NOT NULL DEFAULT '0',
  `consultation_lieu_ouverture_plis` enum('0','1') NOT NULL DEFAULT '0',
  `consultation_qualification` enum('0','1') NOT NULL DEFAULT '0',
  `consultation_agrement` enum('0','1') NOT NULL DEFAULT '0',
  `consultation_echantillons_demandes` enum('0','1') NOT NULL DEFAULT '0',
  `consultation_reunion` enum('0','1') NOT NULL DEFAULT '0',
  `consultation_visite_des_lieux` enum('0','1') NOT NULL DEFAULT '0',
  `consultation_prix_acquisition` enum('0','1') NOT NULL DEFAULT '0',
  `resultat_analyse_avant_decision` enum('0','1') NOT NULL DEFAULT '0',
  `creation_inscrit_par_ates` enum('0','1') NOT NULL DEFAULT '0',
  `consultation_variantes_autorisees` enum('0','1') NOT NULL DEFAULT '0',
  `recherche_avancee_par_type_org` enum('0','1') NOT NULL DEFAULT '0',
  `menu_agent_societes_exclues` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Donne acc?s ? la fonctionnalit? qui permet d''exclure une ou des soci?t?s ? des consultations pour divers motifs sur la plateforme. Acc?s ? partir du menu de gauche.',
  `recherche_avancee_par_domaines_activite` enum('0','1') NOT NULL DEFAULT '0',
  `recherche_avancee_par_qualification` enum('0','1') NOT NULL DEFAULT '0',
  `recherche_avancee_par_agrement` enum('0','1') NOT NULL DEFAULT '0',
  `contact_administratif_dans_detail_consultation_cote_entreprise` enum('0','1') NOT NULL DEFAULT '0',
  `consultation_pieces_dossiers` enum('0','1') NOT NULL DEFAULT '0',
  `gerer_adresses_service` enum('0','1') NOT NULL DEFAULT '0',
  `traduire_annonces` enum('0','1') NOT NULL DEFAULT '0',
  `afficher_bloc_actions_dans_details_annonces` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''afficher le bloc ''Mes actions'' dans les d?tails des annonces de types autres que consultations sur la plateforme des acheteurs publics.',
  `autoriser_une_seule_reponse_principale_par_entreprise` enum('0','1') NOT NULL DEFAULT '0',
  `generation_avis` enum('0','1') NOT NULL DEFAULT '0',
  `passation_appliquer_donnees_ensemble_lots` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de reprendre automatiquement pour tous les lots de la consultation, les donn?es sp?cifiques saisies pour un lot, dans les donn?es compl?mentaires de passation.',
  `autre_annonce_extrait_pv` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Pour la gestion du type d''annonce "Extrait de PV"',
  `autre_annonce_rapport_achevement` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Pour la gestion du type d''annonce "Rapport d''achevement"',
  `ajout_fichier_joint_autre_annonce` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Pour l''ajout des pi?ces jointes dans les autres annonces',
  `consultation_mode_passation` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'afficher les choix de mode passation au rabais et sur offre de prix',
  `compte_entreprise_identifiant_unique` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Autorise les entreprises ? s''inscrire avec un identifiant unique national rattach? ? une ville d''enregistrement au registre de commerce. L''activation de ce module cache l''inscription avec SIREN/SIRET. Il impacte ?galement les fonctions de recherche des en',
  `gerer_certificats_agent` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'gestion des certificats pour les agents',
  `autre_annonce_programme_previsionnel` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Creer autre type annonce programme previsionnel',
  `annuler_consultation` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'annuler une consultation',
  `cfe_entreprise_accessible_par_agent` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Ce module permet de rendre les documents du Coffre Fort des entreprises visibles par les agents. Il faut que le module agent acces_agents_cfe soit actif ?galement.',
  `compte_entreprise_code_nace_referentiel` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''afficher le champ code NACE dans le formulaire de cr?ation des entreprises et dans la base de donn?es fournisseurs, en passant par un r?f?rentiel externe',
  `code_nut_lt_referentiel` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''afficher le champ ''code nut'' dans le formulaire de cr?ation et de recherche avanc?e des consultations. Ce module fait appel ? un referentiel externe',
  `lieux_execution` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Permet d''afficher les lieux d''ex?cution d''une consultation en utilisant la nomenclature classique.',
  `compte_entreprise_domaine_activite_lt_referentiel` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''activer le module qui g?re la classification des entreprises en fonction de domaines d''activit?s qui sont organis?es hi?rarchiquement. Ce module utilise un r?f?rentiel externe.',
  `consultation_domaines_activites_lt_referentiel` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''afficher les domaines d''activit?s lors de la cr?ation de la consultation en utilisant LT-R?f?rentiel',
  `compte_entreprise_agrement_lt_referentiel` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''activer le module qui g?re la classification des entreprises en fonction de leur certification qui sont organis?es hi?rarchiquement. Ce module utilise un r?f?rentiel externe.',
  `compte_entreprise_qualification_lt_referentiel` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''activer le module qui g?re la classification des entreprises en fonction de leur qualification qui sont organis?es hi?rarchiquement. Ce module utilise un r?f?rentiel externe.',
  `reponse_pas_a_pas` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0004961: PMI : ?volution cin?matique de signature et de r?ponse',
  `agent_controle_format_mot_de_passe` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'ce module permet de controler le format du mot de passe saisit par l''agent, 8 caract?res minimum pris dans au moins 3 types de caract?res parmi les 4 suivants : Minuscules, Majuscules, Chiffres, Caract?res sp?ciaux.',
  `entreprise_validation_email_inscription` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'ce module permet de valider l''adresse email saisie par l''entreprise lors de la cr?ation du compte.A la cr?ation du compte, un mail est automatiquement envoy? par la plateforme ? l''entreprise. Ce mail permet de valider l''adresse mail de l''entreprise.',
  `telecharger_dce_avec_authentification` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Ce module implique que le t?l?chargement des DCE doit ?tre fait en ?tant ?tre inscrit et authentifi?.',
  `authentification_basic` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'ce module permet d''utiliser l''authentification basic de la norme RFC2617',
  `reglement_consultation` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Ce module permet d''ajouter le R?glement de la consultation ? la cr?ation consultation.',
  `annonces_marches` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de transformer la plate-forme MPE comme un portail d''annonces regroupant les consultations en provenance de plusieurs sources. Si ce module est activ?, certaines fonctions du c?t? entreprise sont adapat?es par rapport ? une PF MPE classique.',
  `cfe_date_fin_validite_obligatoire` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Champ date de fin de validit? est obligatoire quand on ajoute un document dans le coffre-fort',
  `associer_documents_cfe_consultation` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''''associer les documents du coffre fort ?lectronique ? une consultation, dans ce cas le document est visible par l''agent pendant la phase d''analyse des offres et dans l''archive.',
  `compte_entreprise_region` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''afficher le champ r?gion dans le formulaire de cr?ation des entreprises, la liste est aliment?e ? partir de la table GeolocalisationN1',
  `compte_entreprise_telephone2` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''afficher le champ telephone 2 dans le formulaire de creation des entreprises''',
  `compte_entreprise_cnss` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''afficher le champ numero du cnss dans le formulaire de creation des entreprises''',
  `compte_entreprise_rcnum` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''afficher le champ du numero du registe du commerce dans le formulaire de creation des entreprises''',
  `compte_entreprise_domaine_activite` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''activer le module qui g?re la classification des entreprises en fonction de domaines d''activit?s qui sont organis?es hi?rarchiquement. Ce module utilise la table Category, SousCategory de la base commune.',
  `compte_inscrit_code_nic` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Permet d''afficher le champ code nic dans le formulaire de creation du compte d''un inscrit',
  `compte_entreprise_code_ape` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Permet d''afficher le champ code ape dans le formulaire de creation des entreprises''',
  `compte_entreprise_documents_commerciaux` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''afficher le champ ajout de documents commerciaux dans la page du compte entreprise et leur t?l?chargement dans la page d?tail entreprise du c?t? Agent',
  `compte_entreprise_agrement` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''activer le module qui g?re la classification des entreprises en fonction de leur agr?ement qui sont organis?es hi?rarchiquement. Ce module utilise la table Agrement de la base commune.',
  `compte_entreprise_moyens_humains` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''afficher le champ moyen humains dans lequel seront saisies les informations au niveau du compte entreprise. Ces informations sont visible dans la page detail entreprise du c?t? Agent',
  `compte_entreprise_activite_domaine_defense` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Permet d''afficher le champ description activit?s domaine d?fense dans lequel seront saisies les informations au niveau du compte entreprise. Ces informations sont visible dans la page detail entreprise du c?t? Agent',
  `compte_entreprise_donnees_financieres` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''afficher le tableau relatif aux donnees financieres de l''entreprise relativement au CA, au besoin de financemet, au cash flow et ? la capacite d\\''endettement'' sur les 3 dernieres ann?es',
  `enveloppe_anonymat` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Permet d''associer une enveloppe d''anonymat',
  `publicite_format_xml` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Permet de gerer la visibilite de la publicite au format xml dans le menu gauche agent ainsi que les fonctions associ?es (gestion compte boamp, moniteur, statistiques avis publi?s, typologie de mise en ligne de la consultation, habilitations, alertes agent',
  `article_133_generation_pf` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Permet de g?rer la visibilite du lien ''''liste des march?s (articles 133)''''dans le menu gauche cot? agent: fonction de g?n?ration de la liste des march?s ? partir de la plate-forme',
  `entreprise_repondre_consultation_apres_cloture` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Permet ? une entreprise de r?pondre ? la consultation pendant l''affichage prolong?, si l''affichage prolong? a ?t? param?tr? pour la consultation',
  `telechargement_outil_verif_horodatage` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Affiche un lien permettant de t?l?charger l''outil de v?rification des jetons d''horodatages ? partir de la page Autres Outils Informatique',
  `affichage_code_cpv` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Permet l''utilisation du module Code CPV dans MPE',
  `consultation_domaines_activites` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''activer le module qui g?re la classification d''une consultation en fonction de domaines d''activit?s qui sont organis?es hi?rarchiquement. Ce module utilise la table Category, SousCategory de la base commune.',
  `statistiques_mesure_demat` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Permet de g?rer la visibilit? de la fonction Mesure Avancement Dematerialisation dans la plate-forme',
  `publication_procure` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'G?re la visibilit? du module ''''Rendre accessible cette consultation dans toutes les langues au portail europ?en PROCURE"',
  `menu_entreprise_toutes_les_consultations` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'affiche le lien ''toutes les consultations'' dans le menu gauche entreprise',
  `compte_entreprise_cp_obligatoire` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Module pour activer le compte entreprise pour qu''il affiche le champs code postal n''est pas obligatoire ',
  `annuler_depot` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''activer la fonctionnalit? d''annulation de d?p?t ?lectronique par l''inscrit de l''entreprise dans "mon compte? Mes r?ponses" et de d?p?t papier par l''acheteur public dans les registres de d?p?t de la consultation.',
  `traduire_entite_achat_arabe` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Module pour activer la visibilit? des champs ? traduire en arabe (c?t? agent et administration, gestion de l''organisme)',
  `traduire_organisme_arabe` enum('0','1') DEFAULT '0',
  `decision_cp` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Module pour afficher le code postal dans la decision attributaire',
  `decision_tranche_budgetaire` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Module pour afficher la tranche budgetaire dans la decision attributaire',
  `decision_classement` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Module pour afficher le classement dans la decision attributaire',
  `decision_afficher_detail_candidat_par_defaut` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Ce module permet d''afficher le d?tail du candidat sans avoir ? cliquer sur la case ? cocher ''attributaire''',
  `article_133_upload_fichier` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de g?rer la visibilite du lien ''''liste des march?s (articles 133)''''dans le menu gauche cot? agent: fonction d''import de la liste des march?s ? partir de fichier',
  `multi_linguisme_agent` enum('0','1') NOT NULL DEFAULT '0',
  `compte_entreprise_ifu` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_organisme_par_agent` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet ? l Hyper admin de g?rer les services par organismes. A besoin de mettre habilitation HyperAdmin ? 1',
  `utiliser_lucene` enum('0','1') NOT NULL DEFAULT '1' COMMENT '? 1 pour utiliser luc?ne, ? 0 pour ne pas utilliser luc?ne',
  `utiliser_page_html_lieux_execution` enum('0','1') NOT NULL DEFAULT '1' COMMENT '? 1 pour utiliser la page .html des lieux executions, ? 0 pour utiliser la page commun.LieuxExecution',
  `prado_validateur_format_date` enum('0','1') NOT NULL DEFAULT '1' COMMENT '? 1 pour garder actifs les validateurs prado, ? 0 sinon',
  `prado_validateur_format_email` enum('0','1') NOT NULL DEFAULT '1' COMMENT '? 1 pour garder actifs les validateur email, ? 0 sinon',
  `socle_externe_ppp` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Socle externe PPP de e-bourgogne',
  `validation_format_champs_stricte` enum('0','1') NOT NULL DEFAULT '0',
  `poser_question_necessite_authentification` enum('0','1') NOT NULL DEFAULT '0',
  `autoriser_modif_profil_inscrit_ates` enum('0','1') DEFAULT '0' COMMENT 'Ce module permet ? l''entreprise qui s''enregistre de choisir son profil (Utilisateur Simple ou Administrateur). Si 0 alors pas de choix possible, le premier inscrit est Administrateur et les autres US.',
  `unicite_reference_consultation` enum('0','1') NOT NULL DEFAULT '0',
  `registre_papier_rcnum_rcville_obligatoires` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de rendre obligatoire la saisie de la ville et du num?ro du registre de commerce. Ce module n?cessite l''activation des modules ''compte_entreprise_rcnum'' et ''compte_entreprise_rcville''.',
  `registre_papier_adresse_cp_ville_obligatoires` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de rendre obligatoire l''adresse, le code postal et la ville lors d''un d?p?t papier au niveau des registres. Module actif ? 1.',
  `telecharger_dce_sans_identification` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'possiblit? de t?l?charger le DCE anonymement',
  `gestion_entreprise_par_agent` enum('0','1') NOT NULL DEFAULT '0',
  `autoriser_caracteres_speciaux_dans_reference` enum('0','1') NOT NULL DEFAULT '0',
  `inscription_libre_entreprise` enum('0','1') NOT NULL DEFAULT '1',
  `afficher_code_service` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'ce module permet d''afficher le code service/entit? achat. la valeur est enregistrer dans le champs siren',
  `authenticate_agent_by_login` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Rend visible le bloc authentification par identifiant / mot de passe du c?t? agent et active de cette mani?re la fonction d''authentification par identifiant',
  `authenticate_agent_by_cert` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'ce module permet l''authentification par certificat c?t? agent',
  `generer_acte_dengagement` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Ce module permet d''activer la g?n?ration de l''acte d''engagement lors de l''envoi de la r?ponse',
  `entreprise_controle_format_mot_de_passe` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'ce module permet de controler le format du mot de passe saisit par l''entreprise, 8 caract?res minimum pris dans au moins 3 types de caract?res parmi les 4 suivants : Minuscules, Majuscules, Chiffres, Caract?res sp?ciaux.',
  `autre_annonce_information` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Permet de cr?er et g?rer les annonces de type ''Information'' sur la plateforme. Fonctionnalit? accessible dans le menu de gauche, les d?tails des annonces et la recherche avanc?e.',
  `creer_autre_annonce` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Permet de cr?er une nouvelle annonce autre que consultation dans le menu de gauche des agents.',
  `consultation_clause` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'ce module permet de renseigner les clauses de la consultation',
  `panier_entreprise` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''activer sur la plateforme la fonctionnalit? de gestion des paniers des entreprises.',
  `parametrage_publicite_par_type_procedure` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Ce module permet de gerer la publcite d''une consultation ',
  `export_decision` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Ce module permet de gerer l''export de la decision d''une consultation',
  `lieu_ouverture_plis_obligatoire` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet de determiner si ''lieuOuverturePlis'' est obligatoire ou pas',
  `regle_mise_en_ligne_par_entite_coordinatrice` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Ce module permet d''''indiquer si la gestion des publicites se fait par une entit? type boamp',
  `gestion_newsletter` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet de gérer les newsletter',
  `publicite_opoce` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_modeles_formulaire` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet de gerer les modeles de formulaires',
  `gestion_adresses_facturation_JAL` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Ce module permet de gerer les facturations JAL',
  `publicite_marches_en_ligne` enum('0','1') NOT NULL DEFAULT '1',
  `dossier_additif` enum('0','1') NOT NULL DEFAULT '0',
  `type_marche` enum('0','1') NOT NULL DEFAULT '0',
  `type_prestation` enum('0','1') NOT NULL DEFAULT '0',
  `afficher_tjr_bloc_caracteristique_reponse` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet d''afficher tjr le bloque des caract?ristiques de la reponse m?me si la r?ponse electronique n''est pas autoris?',
  `alerte_metier` enum('0','1') NOT NULL DEFAULT '0',
  `bourse_a_la_sous_traitance` enum('0','1') NOT NULL DEFAULT '0',
  `publier_guides` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet de gerer la publication des guide MPE',
  `recherche_auto_completion` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Dans la recherche des consultations permettre la s?lection de la d?nomination de l''organisme par un champ auto compl?tion au lieu d''une liste pr? rempli ',
  `statut_compte_entreprise` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de pr?ciser le statut de l''entreprise par exemple (Entreprise Adapt?e,Service d''Aide par le Travail..etc)',
  `gestion_organismes` enum('0','1') NOT NULL DEFAULT '0',
  `accueil_entreprise_personnalise` enum('0','1') NOT NULL DEFAULT '0',
  `interface_module_sub` enum('0','1') NOT NULL DEFAULT '0',
  `authentification_agent_multi_organismes` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Module a pour but de permettre ? un agent d''associer deux comptes l''un ? l''autre, l''un ?tant d?sign? comme ?tant le compte principal, l''autre comme ?tant le compte secondaire.',
  `partager_consultation` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de partager la consultation sur des r?seaux sociaux',
  `annuaire_acheteurs_publics` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet de gerer l''annuaire des acheteurs publics ',
  `entreprise_actions_groupees` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet de gerer les actoins groupees pour les entreprises',
  `lieux_execution_carte` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'permet de gerer l''affichage de la carte pour le choix des lieux d''execution',
  `surcharge_referentiels` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Permet de d?finir si on va prendre en compte la validit? du r?ferentiel de certificat pour afficher le r?sultat du contr?le "Cha?ne de certification".',
  `Mode_Restriction_RGS` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'ce module permet d''activer le modeRestrictionRGS de l''applet',
  `autre_annonce_decision_resiliation` enum('0','1') NOT NULL DEFAULT '0',
  `autre_annonce_synthese_rapport_audit` enum('0','1') NOT NULL DEFAULT '0',
  `fiche_weka` enum('0','1') NOT NULL DEFAULT '0',
  `generation_automatique_mdp_agent` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=> le pwd est saisie manuelement par l''administrateur.1=> le pwd est gener? automatiquement ?l''enregistrement',
  `generation_automatique_mdp_inscrit` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=> le pwd est saisie manuelement par l''''administrateur.1=> le pwd est gener? automatiquement ?l''''enregistrement',
  `liste_ac_rgs` enum('0','1') NOT NULL DEFAULT '0',
  `liste_cons_org` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet de gerer l''affichage du frame de la liste des consultation d''un organisme',
  `marche_public_simplifie_entreprise` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de g?rer la visibilit? du champ "Marche Public Simplifie cot? entreprise"',
  `demande_validation_controleur` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet d envoyer une demande de validation du dce au controleur de l etat ',
  `acces_exec_contrats` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet au fournisseurs d acceder au suivi des contrats dans la PF lt_execution_ma et d ajouter des factures',
  `forme_juridique_groupement_attributaire` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'permet d afficher la rubrique forme juridique du groupement attributaire des donnees complementaires',
  `date_limite_remise_plis_obligatoire` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'permet de gerer l obligation de saisir la date limite de remise des plis',
  `modif_type_procedure` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet de modifier le type procedure lors de la modification de la consultation',
  `donnees_complementaires_procedure` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'permet d afficher des infos de la rubrique procedure de l onglet donnees complementaire lors de la creation / modification de la consultation',
  `forme_marche_forme_prix` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'permet d afficher la rubrique forme marché et forme des prix des donnees complementaires',
  `controle_unicite_num_marche` enum('0','1') NOT NULL DEFAULT '0',
  `affichage_num_marche` enum('0','1') NOT NULL DEFAULT '1',
  `affichage_date_fin_marche` enum('0','1') NOT NULL DEFAULT '1',
  `affichage_ice` enum('0','1') DEFAULT '0',
  `blocage_depot_hors_delai` enum('0','1') NOT NULL DEFAULT '0',
  `activer_suivi_pv` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'avoir le droit de gérer l admissibilité pour l enveloppe offre financière pour l agent et l extrait de PV pour entreprise',
  `captcha_validateur` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Activer le module captcha',
  `decision_depuis_resultat_analyse` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'decision des entreprises attribués depuis la page résultat analyse',
  `module_facture` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'avoir le droit dacceder au module facture',
  `validation_entreprise_facturation` enum('0','1') NOT NULL,
  `bloquer_depot_si_env_non_depose` enum('0','1') NOT NULL DEFAULT '0',
  `bloquer_depot_signature_invalide` enum('0','1') NOT NULL DEFAULT '0',
  `consultation_import_lots` enum('0','1') NOT NULL DEFAULT '0',
  `depot_selection_lots` enum('0','1') NOT NULL DEFAULT '0',
  `modification_lots_apres_mise_en_ligne` enum('0','1') NOT NULL DEFAULT '0',
  `filtre_bdf_entreprise_valide` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'filtre permet d activer les entreprise'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

CREATE TABLE `consultation` (
  `reference` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `reference_utilisateur` varchar(255) NOT NULL DEFAULT '',
  `categorie` varchar(30) NOT NULL DEFAULT '0',
  `titre` longtext,
  `resume` longtext,
  `datedebut` date NOT NULL DEFAULT '0000-00-00',
  `datefin` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `datevalidation` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type_procedure` char(1) NOT NULL DEFAULT '',
  `code_procedure` varchar(15) DEFAULT NULL,
  `reponse_electronique` char(1) NOT NULL DEFAULT '1',
  `num_procedure` int(1) NOT NULL DEFAULT '0',
  `id_type_procedure` int(1) NOT NULL DEFAULT '0',
  `id_type_avis` int(2) NOT NULL DEFAULT '0',
  `lieu_execution` text NOT NULL,
  `type_mise_en_ligne` int(11) NOT NULL DEFAULT '1',
  `datemiseenligne` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_tiers_avis` char(1) NOT NULL DEFAULT '0',
  `url` varchar(255) NOT NULL DEFAULT '',
  `datefin_sad` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_sys_acq_dyn` int(11) NOT NULL DEFAULT '0',
  `reference_consultation_init` varchar(250) NOT NULL DEFAULT '',
  `signature_offre` char(1) DEFAULT NULL,
  `id_type_validation` int(11) NOT NULL DEFAULT '2',
  `etat_approbation` enum('0','1') NOT NULL DEFAULT '0',
  `etat_validation` enum('0','1') NOT NULL DEFAULT '0',
  `champ_supp_invisible` text NOT NULL,
  `code_cpv_1` varchar(8) DEFAULT NULL,
  `code_cpv_2` varchar(255) DEFAULT NULL,
  `publication_europe` enum('0','1') DEFAULT '0',
  `etat_publication` int(11) NOT NULL DEFAULT '0',
  `poursuivre_affichage` int(11) NOT NULL DEFAULT '0',
  `nbr_telechargement_dce` int(5) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `service_associe_id` int(11) DEFAULT NULL,
  `detail_consultation` text NOT NULL,
  `date_fin_affichage` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `depouillable_phase_consultation` enum('0','1') NOT NULL DEFAULT '0',
  `consultation_transverse` enum('0','1') NOT NULL DEFAULT '0',
  `consultation_achat_publique` enum('0','1') NOT NULL DEFAULT '0',
  `url_consultation_achat_publique` text,
  `partial_dce_download` char(1) NOT NULL DEFAULT '0',
  `tirage_plan` int(11) NOT NULL DEFAULT '0',
  `tireur_plan` int(11) NOT NULL DEFAULT '0',
  `date_mise_en_ligne_calcule` datetime DEFAULT NULL,
  `accessibilite_en` char(1) NOT NULL DEFAULT '0',
  `accessibilite_es` char(1) NOT NULL DEFAULT '0',
  `nbr_reponse` int(5) DEFAULT NULL,
  `id_type_procedure_org` int(1) NOT NULL DEFAULT '0',
  `organisme_consultation_init` varchar(255) NOT NULL DEFAULT '',
  `tirage_descriptif` mediumtext NOT NULL,
  `date_validation_intermediaire` varchar(20) DEFAULT NULL,
  `accessibilite_fr` enum('0','1') NOT NULL DEFAULT '0',
  `id_tr_accessibilite` int(11) DEFAULT NULL COMMENT 'Identifiant de la traduction de l''accessibilit? pour la traduction de la consultation par les entreprises',
  `accessibilite_cz` enum('0','1') NOT NULL DEFAULT '0',
  `accessibilite_du` enum('0','1') NOT NULL DEFAULT '0',
  `accessibilite_su` enum('0','1') NOT NULL DEFAULT '0',
  `accessibilite_ar` enum('0','1') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `alloti` enum('0','1') NOT NULL DEFAULT '0',
  `numero_phase` int(3) NOT NULL DEFAULT '0',
  `consultation_externe` enum('0','1') NOT NULL DEFAULT '0',
  `url_consultation_externe` text,
  `org_denomination` varchar(250) DEFAULT NULL,
  `domaines_activites` varchar(250) DEFAULT '',
  `id_affaire` int(11) DEFAULT NULL,
  `adresse_retrais_dossiers` longtext,
  `caution_provisoire` varchar(255) DEFAULT NULL,
  `adresse_depot_offres` longtext,
  `lieu_ouverture_plis` longtext,
  `prix_aquisition_plans` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `agrements` varchar(255) DEFAULT NULL,
  `add_echantillion` varchar(255) DEFAULT NULL,
  `date_limite_echantillion` varchar(50) DEFAULT NULL,
  `add_reunion` varchar(255) DEFAULT NULL,
  `date_reunion` varchar(50) DEFAULT NULL,
  `variantes` char(1) DEFAULT NULL,
  `adresse_retrais_dossiers_ar` varchar(255) DEFAULT NULL,
  `adresse_depot_offres_ar` varchar(255) DEFAULT NULL,
  `lieu_ouverture_plis_ar` varchar(255) DEFAULT NULL,
  `pieces_dossier_admin` text,
  `pieces_dossier_admin_fr` text,
  `pieces_dossier_admin_en` text,
  `pieces_dossier_admin_es` text,
  `pieces_dossier_admin_su` text,
  `pieces_dossier_admin_du` text,
  `pieces_dossier_admin_cz` text,
  `pieces_dossier_admin_ar` text,
  `pieces_dossier_tech` text,
  `pieces_dossier_tech_fr` text,
  `pieces_dossier_tech_en` text,
  `pieces_dossier_tech_es` text,
  `pieces_dossier_tech_su` text,
  `pieces_dossier_tech_du` text,
  `pieces_dossier_tech_cz` text,
  `pieces_dossier_tech_ar` text,
  `pieces_dossier_additif` text,
  `pieces_dossier_additif_fr` text,
  `pieces_dossier_additif_en` text,
  `pieces_dossier_additif_es` text,
  `pieces_dossier_additif_su` text,
  `pieces_dossier_additif_du` text,
  `pieces_dossier_additif_cz` text,
  `pieces_dossier_additif_ar` text,
  `id_rpa` int(11) DEFAULT NULL,
  `detail_consultation_fr` text,
  `detail_consultation_en` text,
  `detail_consultation_es` text,
  `detail_consultation_su` text,
  `detail_consultation_du` text,
  `detail_consultation_cz` text,
  `detail_consultation_ar` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `echantillon` enum('0','1') NOT NULL,
  `reunion` enum('0','1') NOT NULL,
  `visites_lieux` enum('0','1') NOT NULL,
  `variante_calcule` enum('0','1') NOT NULL DEFAULT '0',
  `adresse_retrais_dossiers_fr` varchar(255) DEFAULT NULL,
  `adresse_retrais_dossiers_en` varchar(255) DEFAULT NULL,
  `adresse_retrais_dossiers_es` varchar(255) DEFAULT NULL,
  `adresse_retrais_dossiers_su` varchar(255) DEFAULT NULL,
  `adresse_retrais_dossiers_du` varchar(255) DEFAULT NULL,
  `adresse_retrais_dossiers_cz` varchar(255) DEFAULT NULL,
  `adresse_depot_offres_fr` varchar(255) DEFAULT NULL,
  `adresse_depot_offres_en` varchar(255) DEFAULT NULL,
  `adresse_depot_offres_es` varchar(255) DEFAULT NULL,
  `adresse_depot_offres_su` varchar(255) DEFAULT NULL,
  `adresse_depot_offres_du` varchar(255) DEFAULT NULL,
  `adresse_depot_offres_cz` varchar(255) DEFAULT NULL,
  `lieu_ouverture_plis_fr` varchar(255) DEFAULT NULL,
  `lieu_ouverture_plis_en` varchar(255) DEFAULT NULL,
  `lieu_ouverture_plis_es` varchar(255) DEFAULT NULL,
  `lieu_ouverture_plis_su` varchar(255) DEFAULT NULL,
  `lieu_ouverture_plis_du` varchar(255) DEFAULT NULL,
  `lieu_ouverture_plis_cz` varchar(255) DEFAULT NULL,
  `add_echantillion_fr` varchar(255) DEFAULT NULL,
  `add_echantillion_en` varchar(255) DEFAULT NULL,
  `add_echantillion_es` varchar(255) DEFAULT NULL,
  `add_echantillion_su` varchar(255) DEFAULT NULL,
  `add_echantillion_du` varchar(255) DEFAULT NULL,
  `add_echantillion_cz` varchar(255) DEFAULT NULL,
  `add_echantillion_ar` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `add_reunion_fr` varchar(255) DEFAULT NULL,
  `add_reunion_en` varchar(255) DEFAULT NULL,
  `add_reunion_es` varchar(255) DEFAULT NULL,
  `add_reunion_su` varchar(255) DEFAULT NULL,
  `add_reunion_du` varchar(255) DEFAULT NULL,
  `add_reunion_cz` varchar(255) DEFAULT NULL,
  `add_reunion_ar` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mode_passation` varchar(1) DEFAULT NULL,
  `consultation_annulee` enum('0','1') NOT NULL DEFAULT '0',
  `Compte_Boamp_Associe` int(11) DEFAULT NULL,
  `accessibilite_it` enum('0','1') NOT NULL DEFAULT '0',
  `adresse_depot_offres_it` varchar(255) NOT NULL DEFAULT '',
  `lieu_ouverture_plis_it` varchar(255) NOT NULL DEFAULT '',
  `adresse_retrais_dossiers_it` varchar(255) NOT NULL DEFAULT '',
  `pieces_dossier_admin_it` varchar(255) NOT NULL DEFAULT '',
  `pieces_dossier_tech_it` varchar(255) NOT NULL DEFAULT '',
  `pieces_dossier_additif_it` varchar(255) NOT NULL DEFAULT '',
  `detail_consultation_it` text,
  `add_echantillion_it` varchar(250) NOT NULL DEFAULT '',
  `add_reunion_it` varchar(250) NOT NULL DEFAULT '',
  `codes_nuts` text COMMENT 'Contient les codes nuts, pour l''utilisation d''un referentiel externe',
  `intitule` longtext NOT NULL,
  `id_tr_intitule` int(11) DEFAULT NULL COMMENT 'Identifiant de la traduction de l''intitul? de la consultation',
  `objet` longtext NOT NULL,
  `id_tr_objet` int(11) DEFAULT NULL COMMENT 'Identifiant de la traduction de l''objet de la consultation',
  `date_decision` varchar(10) NOT NULL DEFAULT '',
  `type_acces` char(1) NOT NULL,
  `autoriser_reponse_electronique` char(1) NOT NULL DEFAULT '1',
  `regle_mise_en_ligne` int(11) NOT NULL DEFAULT '1',
  `id_regle_validation` int(11) NOT NULL DEFAULT '2',
  `intitule_fr` longtext NOT NULL,
  `intitule_en` longtext NOT NULL,
  `intitule_es` longtext,
  `intitule_su` longtext,
  `intitule_du` longtext,
  `intitule_cz` longtext,
  `intitule_ar` longtext NOT NULL,
  `intitule_it` longtext,
  `objet_fr` longtext NOT NULL,
  `objet_en` longtext NOT NULL,
  `objet_es` longtext,
  `objet_su` longtext,
  `objet_du` longtext,
  `objet_cz` longtext,
  `objet_ar` longtext NOT NULL,
  `objet_it` longtext,
  `clause_sociale` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '0 : Non renseign?, 1: oui, 2 : non',
  `clause_environnementale` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '0 : Non renseign?, 1: oui, 2 : non',
  `reponse_obligatoire` char(1) NOT NULL DEFAULT '0',
  `autoriser_publicite` int(2) NOT NULL DEFAULT '1',
  `type_envoi` char(1) NOT NULL DEFAULT '',
  `chiffrement_offre` char(1) NOT NULL DEFAULT '',
  `env_candidature` int(1) NOT NULL DEFAULT '0',
  `env_offre` int(3) NOT NULL DEFAULT '0',
  `env_anonymat` int(1) NOT NULL DEFAULT '0',
  `id_etat_consultation` int(11) NOT NULL DEFAULT '0',
  `reference_connecteur` varchar(255) NOT NULL DEFAULT '',
  `cons_statut` char(1) NOT NULL DEFAULT '0',
  `id_approbateur` int(11) NOT NULL DEFAULT '0',
  `id_valideur` int(11) NOT NULL DEFAULT '0',
  `service_validation` int(11) NOT NULL DEFAULT '0',
  `id_createur` int(11) NOT NULL DEFAULT '0',
  `nom_createur` varchar(100) DEFAULT NULL,
  `prenom_createur` varchar(100) DEFAULT NULL,
  `signature_acte_engagement` enum('0','1') NOT NULL DEFAULT '0',
  `archiveMetaDescription` longtext,
  `archiveMetaMotsClef` longtext,
  `archiveIdBlobZip` int(11) DEFAULT NULL,
  `decision_partielle` enum('0','1') NOT NULL DEFAULT '0',
  `type_decision_a_renseigner` enum('0','1') NOT NULL DEFAULT '1',
  `type_decision_attribution_marche` enum('0','1') NOT NULL DEFAULT '1',
  `type_decision_declaration_sans_suite` enum('0','1') NOT NULL DEFAULT '1',
  `type_decision_declaration_infructueux` enum('0','1') NOT NULL DEFAULT '1',
  `type_decision_selection_entreprise` enum('0','1') NOT NULL DEFAULT '1',
  `type_decision_attribution_accord_cadre` enum('0','1') NOT NULL DEFAULT '1',
  `type_decision_admission_sad` enum('0','1') NOT NULL DEFAULT '1',
  `type_decision_autre` enum('0','1') NOT NULL DEFAULT '1',
  `id_archiveur` int(11) DEFAULT NULL,
  `prenom_nom_agent_telechargement_plis` varchar(255) DEFAULT NULL,
  `id_agent_telechargement_plis` int(11) NOT NULL DEFAULT '0',
  `path_telechargement_plis` varchar(255) DEFAULT NULL,
  `date_telechargement_plis` varchar(20) DEFAULT NULL,
  `service_validation_intermediaire` int(11) DEFAULT NULL,
  `env_offre_technique` int(3) NOT NULL DEFAULT '0',
  `ref_org_partenaire` varchar(250) NOT NULL DEFAULT '',
  `date_archivage` varchar(20) DEFAULT NULL COMMENT 'Pr?cise la date de r?alisation de l''archivage',
  `date_decision_annulation` varchar(20) DEFAULT NULL,
  `commentaire_annulation` text,
  `date_mise_en_ligne_souhaitee` varchar(20) DEFAULT NULL,
  `etat_en_attente_validation` enum('0','1') NOT NULL DEFAULT '1',
  `dossier_additif` enum('0','1') NOT NULL DEFAULT '0',
  `type_marche` int(11) NOT NULL DEFAULT '0',
  `type_prestation` int(11) NOT NULL DEFAULT '1',
  `date_modification` varchar(20) DEFAULT NULL,
  `delai_partiel` enum('0','1') NOT NULL DEFAULT '0',
  `dateFinLocale` varchar(20) DEFAULT '0000-00-00 00:00:00' COMMENT 'Permet de renseigner la date limite de remise des plis locale en rapport avec le fuseau horaire',
  `lieuResidence` varchar(255) DEFAULT NULL COMMENT 'Permet de renseigner le lieu de residence en rapport avec le fuseau horaire',
  `alerte` enum('0','1') NOT NULL DEFAULT '0',
  `doublon` enum('0','1') NOT NULL DEFAULT '0',
  `denomination_adapte` varchar(250) DEFAULT NULL,
  `url_consultation_avis_pub` text NOT NULL,
  `doublon_de` varchar(250) DEFAULT NULL COMMENT 'Si 762 est le doublon de 14 alors doublon_de = 14, si doublon_de vide si je suis doublon de personne',
  `entite_adjudicatrice` enum('0','1') DEFAULT NULL COMMENT 'Permet de savoir si une Consultation est pass?e en tant qu''Entit? adjudicatrice',
  `code_operation` varchar(255) DEFAULT NULL COMMENT 'Permet de stocker la valeur du champ "Code op?ration"',
  `clause_sociale_condition_execution` varchar(10) DEFAULT '0' COMMENT 'Le march? comprend des clauses sociales d''insertion comme condition d''ex?cution (article 14 du Code des march?s publics)',
  `clause_sociale_insertion` varchar(10) DEFAULT '0' COMMENT 'Pr?sence parmi les crit?res d''attribution d''un crit?re relatif ? l''insertion (article 53 du code des march?s publics)',
  `clause_sociale_ateliers_proteges` varchar(10) DEFAULT '0' COMMENT 'Le march? est r?serv? ? des ateliers prot?g?s (article 15 du code des march?s publics)',
  `clause_env_specs_techniques` varchar(10) DEFAULT '0' COMMENT 'p?cifications techniques (article 6 du code des march?s publics)',
  `clause_env_cond_execution` varchar(10) DEFAULT '0' COMMENT 'Conditions d''ex?cution (article 14 du code des march?s publics)',
  `clause_env_criteres_select` varchar(10) DEFAULT '0' COMMENT 'Crit?re de s?lection (article 53.1 du code des march?s publics)',
  `id_donnee_complementaire` int(11) DEFAULT NULL,
  `donnee_complementaire_obligatoire` enum('0','1') NOT NULL DEFAULT '0',
  `mode_ouverture_reponse` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Enveloppe unique ou Multi-enveloppe',
  `id_fichier_annulation` int(11) DEFAULT NULL,
  `idOperation` int(11) DEFAULT NULL,
  `marche_public_simplifie` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de savoir si une Consultation est pass?e en tant que marche public simplifie',
  `infos_blocs_atlas` varchar(10) NOT NULL DEFAULT '0##0' COMMENT 'bloc a partir du quel on commence l''envoie##nbr des blocs existants',
  `DATE_FIN_UNIX` varchar(20) DEFAULT '0' COMMENT 'contient : UNIX_TIMESTAMP( datefin ) + ( consultation.poursuivre_affichage * ( 24 *60 *60 ) ), permet d''optimis? la recherche en recuperant le resultat direct de ce champ',
  `date_achevement` datetime DEFAULT NULL,
  `nombre_de_lots` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ConsultationFormulaire`
--

CREATE TABLE `ConsultationFormulaire` (
  `id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `type_formulaire` int(1) NOT NULL,
  `id_type_procedure` int(1) NOT NULL,
  `id_categorie` int(10) NOT NULL,
  `code_cpv_1` varchar(8) DEFAULT NULL,
  `code_cpv_2` varchar(8) DEFAULT NULL,
  `organisme` varchar(30) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `date_creation` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modification` varchar(20) DEFAULT '0000-00-00 00:00:00',
  `consultation_ref` int(11) NOT NULL,
  `type_enveloppe` int(11) NOT NULL,
  `lot` int(11) NOT NULL,
  `id_modele` int(11) NOT NULL DEFAULT '0',
  `statut` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ConsultationHistoriqueEtat`
--

CREATE TABLE `ConsultationHistoriqueEtat` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `id_agent` int(11) NOT NULL DEFAULT '0',
  `consultation_ref` int(11) NOT NULL DEFAULT '0',
  `id_etat` int(11) NOT NULL DEFAULT '0',
  `date_modification` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `consultation_document_cfe`
--

CREATE TABLE `consultation_document_cfe` (
  `id` int(11) NOT NULL,
  `id_justificatif` int(11) NOT NULL,
  `ref_consultation` int(11) NOT NULL,
  `organisme_consultation` varchar(30) NOT NULL,
  `nom_fichier` varchar(255) NOT NULL,
  `id_entreprise` int(11) DEFAULT NULL,
  `taille_document` varchar(80) DEFAULT NULL,
  `id_blob` int(11) NOT NULL,
  `type_document` varchar(255) DEFAULT NULL,
  `date_fin_validite` varchar(20) DEFAULT '',
  `horodatage` longblob NOT NULL,
  `untrusteddate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Pour associer des documents du coffre-fort ? une consultatio';

-- --------------------------------------------------------

--
-- Structure de la table `Contact_Entreprise`
--

CREATE TABLE `Contact_Entreprise` (
  `id` int(11) NOT NULL,
  `id_entreprise` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `adresse_suite` varchar(100) NOT NULL,
  `codepostal` varchar(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `fonction` varchar(50) NOT NULL,
  `telephone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Contrat`
--

CREATE TABLE `Contrat` (
  `id_contrat` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_marche` int(11) NOT NULL DEFAULT '0',
  `id_decision` int(11) NOT NULL DEFAULT '0',
  `informaions_complementaires` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Criteres_Evaluation`
--

CREATE TABLE `Criteres_Evaluation` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `consultation_ref` int(11) NOT NULL,
  `type_enveloppe` int(11) NOT NULL,
  `lot` int(11) NOT NULL,
  `Type_Critere` int(11) NOT NULL,
  `statut` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `DATEFIN`
--

CREATE TABLE `DATEFIN` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `consultation_ref` int(11) NOT NULL DEFAULT '0',
  `datefin` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `statut` char(1) NOT NULL DEFAULT '1',
  `horodatage` longblob NOT NULL,
  `untrusteddate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `agent_id` int(11) NOT NULL DEFAULT '0',
  `dateFinLocale` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Permet de stocker la date remise des plis heure locale'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `DateLancementCron`
--

CREATE TABLE `DateLancementCron` (
  `id` int(11) NOT NULL,
  `mise_a_jour_socle` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='cette table enregistre la derniere date de lancement de cron';

-- --------------------------------------------------------

--
-- Structure de la table `DA_Consultation`
--

CREATE TABLE `DA_Consultation` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) DEFAULT NULL,
  `reference_utilisateur` varchar(255) DEFAULT NULL,
  `Societe` varchar(255) DEFAULT NULL,
  `objet` longtext,
  `type_procedure` varchar(100) DEFAULT NULL,
  `type_marche` varchar(100) DEFAULT NULL,
  `satut_AO` varchar(100) DEFAULT NULL,
  `datefin` datetime DEFAULT NULL,
  `datemiseenligne` datetime DEFAULT NULL,
  `caution_provisoire` varchar(255) DEFAULT NULL,
  `Principale` enum('oui','non') DEFAULT NULL,
  `lot` int(5) DEFAULT NULL,
  `consultation_ref` int(11) DEFAULT NULL,
  `CREATE_AT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `DCE`
--

CREATE TABLE `DCE` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `consultation_ref` int(11) NOT NULL DEFAULT '0',
  `dce` int(11) NOT NULL DEFAULT '0',
  `nom_dce` varchar(150) NOT NULL,
  `statut` char(1) NOT NULL DEFAULT '1',
  `nom_fichier` varchar(80) NOT NULL DEFAULT '',
  `ancien_fichier` varchar(80) NOT NULL DEFAULT '',
  `horodatage` longblob NOT NULL,
  `untrusteddate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `agent_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `decisionEnveloppe`
--

CREATE TABLE `decisionEnveloppe` (
  `id_decision_enveloppe` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `consultation_ref` int(11) NOT NULL DEFAULT '0',
  `id_offre` int(11) NOT NULL DEFAULT '0',
  `lot` int(11) NOT NULL DEFAULT '0',
  `decision` enum('0','1') NOT NULL DEFAULT '0',
  `date_notification` varchar(10) DEFAULT NULL,
  `code_postal` varchar(5) DEFAULT NULL,
  `pme_pmi` int(11) NOT NULL DEFAULT '0',
  `tranche_budgetaire` int(11) DEFAULT NULL,
  `montant_marche` varchar(50) DEFAULT NULL,
  `categorie` int(11) DEFAULT NULL,
  `objet_marche` text,
  `commentaire` text,
  `fichier_joint` int(11) DEFAULT NULL,
  `nom_fichier_joint` varchar(100) DEFAULT NULL,
  `type_enveloppe` enum('1','2') DEFAULT NULL,
  `numero_marche` text,
  `statutEJ` text,
  `note` varchar(200) NOT NULL DEFAULT '',
  `classement` varchar(200) NOT NULL DEFAULT '',
  `id_blob_pieces_notification` varchar(20) NOT NULL COMMENT 'Permet de stocker les idBLob des pi?ces de notification',
  `date_fin_marche_previsionnel` varchar(20) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `acronymePays_Attributaire` varchar(10) DEFAULT NULL,
  `pays_Attributaire` varchar(50) DEFAULT NULL,
  `siren_Attributaire` varchar(20) DEFAULT NULL,
  `nic_Attributaire` varchar(6) DEFAULT NULL,
  `identifiantNational_Attributaire` varchar(50) DEFAULT NULL,
  `rc_ville_attributaire` varchar(250) DEFAULT NULL,
  `rc_num_attributaire` varchar(250) DEFAULT NULL,
  `date_notification_reelle` varchar(20) DEFAULT NULL,
  `date_fin_marche_reelle` varchar(20) DEFAULT NULL,
  `envoi_interface` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de sp?cifier si la decision a ?t? export?e vers une interface',
  `ifu_attributaire` varchar(200) DEFAULT NULL,
  `type_entreprise` enum('0','1','2','3') DEFAULT NULL COMMENT '0:PME,1:Auto-entrepreneur,2:Coopérative,3:Autre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `DecisionLot`
--

CREATE TABLE `DecisionLot` (
  `id_decision_lot` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `consultation_ref` int(11) NOT NULL DEFAULT '0',
  `lot` int(11) NOT NULL DEFAULT '0',
  `id_type_decision` int(11) NOT NULL DEFAULT '0',
  `autre_a_preciser` varchar(100) DEFAULT NULL,
  `date_decision` date DEFAULT NULL,
  `commentaire` text,
  `date_maj` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `DecisionPassationConsultation`
--

CREATE TABLE `DecisionPassationConsultation` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) DEFAULT NULL,
  `libelle_fr` varchar(100) DEFAULT NULL,
  `libelle_en` varchar(100) DEFAULT NULL,
  `libelle_es` varchar(100) DEFAULT NULL,
  `libelle_su` varchar(100) DEFAULT NULL,
  `libelle_du` varchar(100) DEFAULT NULL,
  `libelle_cz` varchar(100) DEFAULT NULL,
  `libelle_ar` varchar(100) DEFAULT NULL,
  `libelle_it` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `DecisionPassationMarcheAVenir`
--

CREATE TABLE `DecisionPassationMarcheAVenir` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) DEFAULT NULL,
  `libelle_fr` varchar(100) DEFAULT NULL,
  `libelle_en` varchar(100) DEFAULT NULL,
  `libelle_es` varchar(100) DEFAULT NULL,
  `libelle_su` varchar(100) DEFAULT NULL,
  `libelle_du` varchar(100) DEFAULT NULL,
  `libelle_cz` varchar(100) DEFAULT NULL,
  `libelle_ar` varchar(100) DEFAULT NULL,
  `libelle_it` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `demande_achat_ligne`
--

CREATE TABLE `demande_achat_ligne` (
  `id_demande_achat_ligne` int(11) NOT NULL,
  `organisme` varchar(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `numero_demande_achat` varchar(50) NOT NULL,
  `description_demande_achat` text NOT NULL,
  `numero_ligne` int(11) NOT NULL,
  `code_article` varchar(50) NOT NULL,
  `description_ligne` text NOT NULL,
  `statut` int(11) NOT NULL,
  `consultation_ref` int(11) NOT NULL,
  `lot` int(11) NOT NULL,
  `quantite` int(11) DEFAULT NULL,
  `unite` varchar(50) DEFAULT NULL,
  `site` varchar(50) DEFAULT NULL,
  `port` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `demande_achat_par_catalogue`
--

CREATE TABLE `demande_achat_par_catalogue` (
  `id` int(11) NOT NULL,
  `reference` varchar(250) NOT NULL,
  `date_creation` date NOT NULL,
  `date_validation` date DEFAULT NULL,
  `statut` int(11) NOT NULL,
  `id_agent` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `demande_achat_par_catalogue_article`
--

CREATE TABLE `demande_achat_par_catalogue_article` (
  `id_demande` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_bon_commande` int(11) DEFAULT NULL,
  `quantite` int(11) NOT NULL,
  `statut` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `demande_complement`
--

CREATE TABLE `demande_complement` (
  `id` int(11) NOT NULL,
  `id_resultat_analyse_decison` int(11) NOT NULL,
  `date_envoie` datetime NOT NULL,
  `date_reception` datetime NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nom_entreprise` text NOT NULL,
  `objet` longtext NOT NULL,
  `message` longtext NOT NULL,
  `uid` varchar(32) NOT NULL,
  `message_reponse` longtext NOT NULL,
  `statut` int(11) NOT NULL,
  `date_accuse_reception` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Departement`
--

CREATE TABLE `Departement` (
  `id_departement` int(11) NOT NULL,
  `nom_departement` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `DestinataireAnnonceJAL`
--

CREATE TABLE `DestinataireAnnonceJAL` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `idJAL` int(11) NOT NULL DEFAULT '0',
  `idAnnonceJAL` int(11) NOT NULL DEFAULT '0',
  `date_envoi` varchar(14) NOT NULL DEFAULT '',
  `date_pub` varchar(14) NOT NULL DEFAULT '',
  `statut` char(1) NOT NULL DEFAULT '',
  `accuse` char(1) NOT NULL DEFAULT '',
  `id_echange` int(11) DEFAULT NULL,
  `date_ar` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Destinataire_Annonce_Press`
--

CREATE TABLE `Destinataire_Annonce_Press` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_annonce_press` int(11) NOT NULL DEFAULT '0',
  `id_jal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `destinataire_centrale_pub`
--

CREATE TABLE `destinataire_centrale_pub` (
  `id` int(20) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_annonce_jal` int(20) DEFAULT NULL,
  `id_compte` int(20) DEFAULT NULL,
  `ids_journaux` varchar(200) DEFAULT NULL,
  `statut` char(1) DEFAULT NULL,
  `date_envoi` varchar(20) DEFAULT '0000-00-00 00:00:00',
  `date_pub` varchar(20) DEFAULT '0000-00-00 00:00:00',
  `accuse` varchar(20) DEFAULT NULL,
  `id_echange` int(11) DEFAULT NULL,
  `date_ar` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `destinataire_mise_disposition`
--

CREATE TABLE `destinataire_mise_disposition` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Destinataire_Pub`
--

CREATE TABLE `Destinataire_Pub` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_avis` int(11) NOT NULL,
  `id_support` int(11) NOT NULL,
  `etat` char(3) NOT NULL DEFAULT '0',
  `date_modification` varchar(20) NOT NULL,
  `date_publication` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `DocumentExterne`
--

CREATE TABLE `DocumentExterne` (
  `id` int(11) UNSIGNED NOT NULL,
  `refConsultation` int(11) DEFAULT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `idBlob` int(11) DEFAULT NULL,
  `idEntreprise` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `nom` varchar(255) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `lot` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `DocumentsAttaches`
--

CREATE TABLE `DocumentsAttaches` (
  `id_document` int(11) NOT NULL DEFAULT '0',
  `nom_document` varchar(100) NOT NULL DEFAULT '',
  `nom_document_fr` varchar(100) NOT NULL DEFAULT '',
  `nom_document_es` varchar(100) NOT NULL DEFAULT '',
  `nom_document_en` varchar(100) NOT NULL DEFAULT '',
  `nom_document_su` varchar(100) NOT NULL DEFAULT '',
  `nom_document_du` varchar(100) NOT NULL DEFAULT '',
  `nom_document_cz` varchar(100) NOT NULL DEFAULT '',
  `nom_document_ar` varchar(100) NOT NULL DEFAULT '',
  `nom_document_it` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Echange`
--

CREATE TABLE `Echange` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `objet` varchar(255) NOT NULL DEFAULT '',
  `corps` text NOT NULL,
  `expediteur` varchar(100) NOT NULL DEFAULT '',
  `id_createur` int(11) DEFAULT '0',
  `ref_consultation` int(11) NOT NULL DEFAULT '0',
  `option_envoi` int(11) NOT NULL DEFAULT '0',
  `date_message` varchar(25) NOT NULL DEFAULT '',
  `format` int(11) NOT NULL DEFAULT '0',
  `id_action_declencheur` int(11) NOT NULL DEFAULT '0',
  `status` int(2) NOT NULL DEFAULT '0',
  `service_id` int(11) DEFAULT '0',
  `email_expediteur` varchar(100) NOT NULL DEFAULT '',
  `id_type_message` int(11) NOT NULL,
  `destinataires_retraits` longtext,
  `destinataires_questions` longtext,
  `destinataires_depots` longtext,
  `destinataires_bd_fournisseurs` longtext,
  `destinataires_libres` longtext,
  `page_source` varchar(255) DEFAULT NULL,
  `destinataires` longtext,
  `destinataire_visioconference` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EchangeDestinataire`
--

CREATE TABLE `EchangeDestinataire` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_echange` int(11) NOT NULL DEFAULT '0',
  `mail_destinataire` varchar(255) NOT NULL DEFAULT '',
  `ar` enum('0','1') NOT NULL DEFAULT '0',
  `date_ar` varchar(25) NOT NULL DEFAULT '',
  `uid` varchar(32) NOT NULL DEFAULT '',
  `type_ar` int(11) NOT NULL DEFAULT '0',
  `id_inscrit` int(11) NOT NULL DEFAULT '0',
  `id_entreprise` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EchangeFormat`
--

CREATE TABLE `EchangeFormat` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL DEFAULT '',
  `libelle_fr` varchar(100) NOT NULL,
  `libelle_en` varchar(100) NOT NULL,
  `libelle_es` varchar(100) NOT NULL,
  `libelle_su` varchar(100) NOT NULL,
  `libelle_du` varchar(100) NOT NULL,
  `libelle_cz` varchar(100) NOT NULL,
  `libelle_ar` varchar(100) NOT NULL,
  `libelle_it` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EchangePieceJointe`
--

CREATE TABLE `EchangePieceJointe` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_message` int(11) NOT NULL DEFAULT '0',
  `nom_fichier` varchar(100) NOT NULL DEFAULT '',
  `piece` int(11) NOT NULL DEFAULT '0',
  `horodatage` longblob NOT NULL,
  `untrusteddate` varchar(25) NOT NULL DEFAULT '',
  `taille` varchar(25) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EchangeTypeAR`
--

CREATE TABLE `EchangeTypeAR` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL DEFAULT '',
  `libelle_fr` varchar(100) NOT NULL,
  `libelle_en` varchar(100) NOT NULL,
  `libelle_es` varchar(100) NOT NULL,
  `libelle_su` varchar(100) NOT NULL,
  `libelle_du` varchar(100) NOT NULL,
  `libelle_cz` varchar(100) NOT NULL,
  `libelle_ar` varchar(100) NOT NULL,
  `libelle_it` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EchangeTypeMessage`
--

CREATE TABLE `EchangeTypeMessage` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL COMMENT 'Les contenus de ce champ sont en correspondance avec messages.xml',
  `corps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EnchereEntreprisePmi`
--

CREATE TABLE `EnchereEntreprisePmi` (
  `id` int(10) UNSIGNED NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `idEnchere` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `nom` varchar(255) NOT NULL DEFAULT '',
  `numeroAnonyme` int(11) UNSIGNED DEFAULT NULL,
  `email` varchar(255) NOT NULL DEFAULT '',
  `mdp` varchar(255) NOT NULL DEFAULT '',
  `noteTechnique` double DEFAULT NULL,
  `idEntreprise` int(10) UNSIGNED DEFAULT NULL,
  `datePing` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nomAgentConnecte` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EnchereOffre`
--

CREATE TABLE `EnchereOffre` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `idEnchere` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `idEnchereEntreprise` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `date` datetime DEFAULT '0000-00-00 00:00:00',
  `valeurTIC` double DEFAULT NULL,
  `valeurTC` double DEFAULT NULL,
  `valeurNETC` double DEFAULT NULL,
  `valeurNGC` double DEFAULT NULL,
  `rang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EnchereOffreReference`
--

CREATE TABLE `EnchereOffreReference` (
  `id` int(10) UNSIGNED NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `idEnchereOffre` int(11) NOT NULL DEFAULT '0',
  `idEnchereReference` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `valeur` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EncherePmi`
--

CREATE TABLE `EncherePmi` (
  `id` int(10) UNSIGNED NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `refConsultation` int(10) UNSIGNED DEFAULT NULL,
  `idEntiteeAssociee` int(11) DEFAULT NULL,
  `referenceUtilisateur` varchar(45) DEFAULT NULL,
  `auteur` varchar(255) DEFAULT NULL,
  `idLot` int(10) UNSIGNED DEFAULT NULL,
  `objet` longtext,
  `dateDebut` datetime DEFAULT '0000-00-00 00:00:00',
  `dateFin` datetime DEFAULT '0000-00-00 00:00:00',
  `dateSuspension` datetime DEFAULT '0000-00-00 00:00:00',
  `delaiProlongation` int(11) DEFAULT NULL,
  `commentaire` longtext,
  `meilleureEnchereObligatoire` enum('0','1') NOT NULL DEFAULT '0',
  `typeBaremeNETC` enum('1','2','3','4') NOT NULL DEFAULT '1',
  `typeBaremeEnchereGlobale` enum('1','2') NOT NULL DEFAULT '1',
  `meilleurNoteHaute` enum('0','1') NOT NULL DEFAULT '0',
  `nbrCandidatsVisible` enum('0','1') NOT NULL DEFAULT '1',
  `listeCandidatsVisible` enum('0','1') NOT NULL DEFAULT '1',
  `rangVisible` enum('0','1') NOT NULL DEFAULT '1',
  `meilleureOffreVisible` enum('0','1') NOT NULL DEFAULT '1',
  `montantReserve` double DEFAULT NULL,
  `noteMaxBaremeRelatif` double DEFAULT NULL,
  `coeffA` double DEFAULT NULL,
  `coeffB` double DEFAULT NULL,
  `coeffC` double DEFAULT NULL,
  `mail` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EnchereReference`
--

CREATE TABLE `EnchereReference` (
  `id` int(10) UNSIGNED NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `idEnchere` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `libelle` varchar(255) NOT NULL DEFAULT '',
  `quantite` double DEFAULT NULL,
  `isMontant` enum('0','1') NOT NULL DEFAULT '1',
  `unite` varchar(20) DEFAULT NULL,
  `pasMin` double DEFAULT '0',
  `pasMax` double DEFAULT NULL,
  `valeurReference` double DEFAULT NULL,
  `valeurDepartCommune` enum('0','1') NOT NULL DEFAULT '1',
  `valeurDepart` double DEFAULT NULL,
  `typeBaremeReference` enum('1','2','3') DEFAULT NULL,
  `ponderationNoteReference` double DEFAULT '1',
  `noteMaxBaremeRelatif` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EnchereTrancheBaremeReference`
--

CREATE TABLE `EnchereTrancheBaremeReference` (
  `id` int(10) UNSIGNED NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `idReference` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `borneInf` double DEFAULT NULL,
  `borneSup` double DEFAULT NULL,
  `note` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EnchereTranchesBaremeNETC`
--

CREATE TABLE `EnchereTranchesBaremeNETC` (
  `id` int(10) UNSIGNED NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `idEnchere` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `borneInf` double DEFAULT NULL,
  `borneSup` double DEFAULT NULL,
  `note` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EnchereValeursInitiales`
--

CREATE TABLE `EnchereValeursInitiales` (
  `id` int(10) UNSIGNED NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `idEnchereEntreprise` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `idEnchereReference` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `valeur` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Entreprise`
--

CREATE TABLE `Entreprise` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL DEFAULT '0',
  `siren` varchar(20) DEFAULT NULL,
  `repmetiers` char(1) NOT NULL DEFAULT '',
  `nom` text NOT NULL,
  `adresse` varchar(80) NOT NULL DEFAULT '',
  `codepostal` varchar(5) NOT NULL DEFAULT '',
  `villeadresse` varchar(50) NOT NULL DEFAULT '',
  `paysadresse` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) DEFAULT NULL,
  `taille` int(2) DEFAULT NULL,
  `formejuridique` varchar(255) NOT NULL,
  `villeenregistrement` varchar(50) DEFAULT NULL,
  `motifNonIndNum` int(11) DEFAULT NULL,
  `ordreProfOuAgrement` varchar(30) DEFAULT NULL,
  `dateConstSociete` date DEFAULT NULL,
  `nomOrgInscription` varchar(30) DEFAULT NULL,
  `adrOrgInscription` varchar(80) DEFAULT NULL,
  `dateConstAssoc` date DEFAULT NULL,
  `dateConstAssocEtrangere` date DEFAULT NULL,
  `nomPersonnePublique` varchar(30) DEFAULT NULL,
  `nationalite` char(2) DEFAULT NULL,
  `redressement` int(11) DEFAULT NULL,
  `paysenregistrement` varchar(50) DEFAULT NULL,
  `sirenEtranger` varchar(20) DEFAULT NULL,
  `numAssoEtrangere` varchar(20) DEFAULT NULL,
  `debutExerciceGlob1` varchar(15) DEFAULT '',
  `finExerciceGlob1` varchar(15) DEFAULT '',
  `debutExerciceGlob2` varchar(15) DEFAULT '',
  `finExerciceGlob2` varchar(15) DEFAULT '',
  `debutExerciceGlob3` varchar(15) DEFAULT '',
  `finExerciceGlob3` varchar(15) DEFAULT '',
  `ventesGlob1` varchar(10) DEFAULT '',
  `ventesGlob2` varchar(10) DEFAULT '',
  `ventesGlob3` varchar(10) DEFAULT '',
  `biensGlob1` varchar(10) DEFAULT '',
  `biensGlob2` varchar(10) DEFAULT '',
  `biensGlob3` varchar(10) DEFAULT '',
  `servicesGlob1` varchar(10) DEFAULT '',
  `servicesGlob2` varchar(10) DEFAULT '',
  `servicesGlob3` varchar(10) DEFAULT '',
  `totalGlob1` varchar(10) DEFAULT '',
  `totalGlob2` varchar(10) DEFAULT '',
  `totalGlob3` varchar(10) DEFAULT '',
  `codeape` varchar(20) NOT NULL DEFAULT '',
  `origine_compte` varchar(255) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `site_internet` varchar(50) NOT NULL DEFAULT '',
  `description_activite` text,
  `activite_domaine_defense` text,
  `annee_cloture_exercice1` varchar(15) NOT NULL DEFAULT '',
  `annee_cloture_exercice2` varchar(15) NOT NULL DEFAULT '',
  `annee_cloture_exercice3` varchar(15) NOT NULL DEFAULT '',
  `effectif_moyen1` int(10) NOT NULL DEFAULT '0',
  `effectif_moyen2` int(10) NOT NULL DEFAULT '0',
  `effectif_moyen3` int(10) NOT NULL DEFAULT '0',
  `effectif_encadrement1` int(10) NOT NULL DEFAULT '0',
  `effectif_encadrement2` int(10) NOT NULL DEFAULT '0',
  `effectif_encadrement3` int(10) NOT NULL DEFAULT '0',
  `pme1` enum('1','0') DEFAULT NULL,
  `pme2` enum('1','0') DEFAULT NULL,
  `pme3` enum('1','0') DEFAULT NULL,
  `adresse2` varchar(80) DEFAULT NULL,
  `nicSiege` varchar(5) DEFAULT NULL,
  `acronyme_pays` varchar(10) DEFAULT NULL,
  `date_creation` varchar(20) NOT NULL,
  `date_modification` varchar(20) NOT NULL,
  `id_initial` int(11) NOT NULL DEFAULT '0',
  `region` varchar(250) DEFAULT NULL,
  `province` varchar(250) DEFAULT NULL,
  `telephone2` varchar(250) DEFAULT NULL,
  `telephone3` varchar(250) DEFAULT NULL,
  `cnss` varchar(250) DEFAULT NULL,
  `rc_num` varchar(250) DEFAULT NULL,
  `rc_ville` varchar(250) DEFAULT NULL,
  `domaines_activites` varchar(255) DEFAULT NULL,
  `num_tax` varchar(250) DEFAULT NULL,
  `documents_commerciaux` int(11) DEFAULT NULL,
  `intitule_documents_commerciaux` varchar(255) DEFAULT NULL,
  `taille_documents_commerciaux` varchar(50) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `agrement` varchar(255) DEFAULT NULL,
  `moyens_technique` longtext,
  `moyens_humains` longtext,
  `compte_actif` int(1) NOT NULL DEFAULT '1',
  `capital_social` varchar(50) NOT NULL,
  `ifu` varchar(200) NOT NULL,
  `id_agent_createur` int(20) NOT NULL,
  `nom_agent` varchar(200) NOT NULL,
  `prenom_agent` varchar(200) NOT NULL,
  `adresses_electroniques` varchar(255) DEFAULT NULL,
  `visible_bourse` char(1) NOT NULL DEFAULT '0' COMMENT 'entreprise visible dans la bourse ? la Co-traitance / Sous-traitance',
  `type_collaboration` varchar(255) DEFAULT NULL COMMENT 'les Type des collaboration ',
  `entreprise_EA` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Entreprise est une EA (Entreprise Adapt?e) ou un ESAT (Etablissement ou Service d''Aide par le Travail)',
  `entreprise_SIAE` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Entreprise est une SIAE (Structure de l''Insertion par l''Activit? Economique)',
  `type_entreprise` enum('0','1','2','3') DEFAULT NULL COMMENT '0:PME,1:Auto-entrepreneur,2:Coopérative,3:Autre',
  `note` int(1) DEFAULT NULL,
  `code_cpv` varchar(255) DEFAULT NULL,
  `statut_referencement` int(1) DEFAULT NULL COMMENT '1=>''En cours de referencement'', 2 => ''Reference'', 3 => ''Referencement annule''',
  `taille_entreprise` int(1) DEFAULT NULL COMMENT '1 =>TPE , 2=>PME, 3=>ETI , 4=>GE',
  `identifiant_fiscale` varchar(200) NOT NULL DEFAULT '' COMMENT 'Ceci est le champ réel pour le IFU',
  `valide` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EntrepriseInsee`
--

CREATE TABLE `EntrepriseInsee` (
  `id` int(30) NOT NULL,
  `siren` varchar(9) DEFAULT NULL,
  `raisonSociale` varchar(200) DEFAULT NULL,
  `nbEtA` int(1) DEFAULT NULL,
  `etat` char(1) DEFAULT NULL,
  `etatLib` varchar(40) DEFAULT NULL,
  `etatDebDate` varchar(20) DEFAULT NULL,
  `eff3112Tr` int(11) DEFAULT NULL,
  `eff3112TrLib` varchar(200) DEFAULT NULL,
  `effAn` varchar(10) DEFAULT NULL,
  `apen` varchar(5) DEFAULT NULL,
  `apenLib` varchar(200) DEFAULT NULL,
  `cj` varchar(4) DEFAULT NULL,
  `cjLib` varchar(200) DEFAULT NULL,
  `indNDC` char(1) DEFAULT NULL,
  `indDoublon` char(1) DEFAULT NULL,
  `indPurge` char(1) DEFAULT NULL,
  `nicSiege` varchar(5) DEFAULT '00000',
  `etatSiege` char(1) DEFAULT NULL,
  `etatSiegeLib` varchar(10) DEFAULT NULL,
  `etatDebDateSiege` varchar(20) DEFAULT NULL,
  `eff3112TrSiege` int(11) DEFAULT NULL,
  `eff3112TrSiegeLib` varchar(200) DEFAULT NULL,
  `effAnSiege` varchar(10) DEFAULT NULL,
  `apetSiege` varchar(5) DEFAULT NULL,
  `apetSiegeLib` varchar(200) DEFAULT NULL,
  `trtDerDateSiege` varchar(20) DEFAULT NULL,
  `adrEtVoieNum` varchar(100) DEFAULT NULL,
  `adrEtVoieType` varchar(100) DEFAULT NULL,
  `adrEtVoieLib` varchar(100) DEFAULT NULL,
  `adrEtDepCom` varchar(100) DEFAULT NULL,
  `adrEtComLib` varchar(100) DEFAULT NULL,
  `adrEtCodePost` varchar(100) DEFAULT NULL,
  `adrEtPost1` varchar(200) DEFAULT NULL,
  `adrEtPost2` varchar(200) DEFAULT NULL,
  `adrEtPost3` varchar(200) DEFAULT NULL,
  `nic` varchar(5) DEFAULT '00000',
  `etatEt` char(2) DEFAULT NULL,
  `etatDebDateEt` varchar(15) DEFAULT NULL,
  `catEt` char(2) DEFAULT NULL,
  `catEtLib` varchar(200) DEFAULT NULL,
  `eff3112TrEt` char(2) DEFAULT NULL,
  `eff3112TrEtLib` varchar(100) DEFAULT NULL,
  `effAnEt` varchar(15) DEFAULT NULL,
  `apet` varchar(5) DEFAULT NULL,
  `apetLib` varchar(200) DEFAULT NULL,
  `trtDerDateEt` varchar(15) DEFAULT NULL,
  `etatEtLib` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Entreprise_info_exercice`
--

CREATE TABLE `Entreprise_info_exercice` (
  `id_Entreprise` int(11) NOT NULL DEFAULT '0',
  `debutExerciceGlob` varchar(15) DEFAULT NULL,
  `finExerciceGlob` varchar(15) DEFAULT NULL,
  `ventesGlob` varchar(10) DEFAULT '0',
  `biensGlob` varchar(10) DEFAULT '0',
  `servicesGlob` varchar(10) DEFAULT '0',
  `totalGlob` varchar(10) DEFAULT '0',
  `annee_cloture_exercice` varchar(15) NOT NULL DEFAULT '',
  `effectif_moyen` int(10) DEFAULT '0',
  `effectif_encadrement` int(10) DEFAULT '0',
  `pme` enum('1','0') DEFAULT NULL,
  `chiffre_affaires` varchar(255) DEFAULT NULL,
  `besoin_excedent_financement` varchar(255) DEFAULT NULL,
  `cash_flow` varchar(255) DEFAULT NULL,
  `capacite_endettement` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Enveloppe`
--

CREATE TABLE `Enveloppe` (
  `id_enveloppe_electro` int(22) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `offre_id` int(22) NOT NULL DEFAULT '0',
  `champs_optionnels` longblob NOT NULL,
  `fichier` int(11) NOT NULL DEFAULT '0',
  `supprime` char(1) NOT NULL DEFAULT '0',
  `cryptage` char(1) NOT NULL DEFAULT '1',
  `nom_fichier` varchar(255) NOT NULL DEFAULT '',
  `hash` varchar(40) NOT NULL DEFAULT '',
  `type_env` int(1) NOT NULL DEFAULT '0',
  `sous_pli` int(3) NOT NULL DEFAULT '0',
  `attribue` char(1) NOT NULL DEFAULT '0',
  `dateheure_ouverture` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `agent_id_ouverture` int(11) DEFAULT NULL,
  `agent_id_ouverture2` int(11) DEFAULT NULL,
  `donnees_ouverture` longblob NOT NULL,
  `horodatage_donnees_ouverture` longblob NOT NULL,
  `statut_enveloppe` int(2) NOT NULL DEFAULT '1',
  `agent_telechargement` int(11) DEFAULT NULL,
  `date_telechargement` varchar(20) DEFAULT NULL,
  `repertoire_telechargement` varchar(100) DEFAULT NULL,
  `nom_agent_ouverture` varchar(100) NOT NULL DEFAULT '',
  `dateheure_ouverture_agent2` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `certificat` mediumtext,
  `montant` double DEFAULT NULL,
  `montant_apres_modification` double DEFAULT NULL,
  `type_attributaire` enum('1','2','3','4') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EnveloppeCritereEvaluation`
--

CREATE TABLE `EnveloppeCritereEvaluation` (
  `id` int(11) NOT NULL,
  `idCritereEvaluation` int(11) NOT NULL,
  `rejet` int(11) NOT NULL,
  `statut_critere_evaluation` int(11) NOT NULL,
  `note_totale` varchar(30) NOT NULL,
  `commentaire_total` varchar(100) NOT NULL,
  `id_agent` int(11) NOT NULL,
  `id_enveloppe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EnveloppeFormulaireConsultation`
--

CREATE TABLE `EnveloppeFormulaireConsultation` (
  `id` int(11) NOT NULL,
  `id_Formulaire_consultation` int(11) NOT NULL,
  `statut` int(11) NOT NULL,
  `id_enveloppe` int(11) NOT NULL,
  `total_bd_ht` varchar(30) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EnveloppeItemCritereEvaluation`
--

CREATE TABLE `EnveloppeItemCritereEvaluation` (
  `id` int(11) NOT NULL,
  `idItemCritereEvaluation` int(11) NOT NULL,
  `idEnveloppeCritereEvaluation` int(11) NOT NULL,
  `libelle` text NOT NULL,
  `prix` enum('0','1') NOT NULL DEFAULT '0',
  `quantite` int(11) DEFAULT NULL,
  `ponderation` int(11) DEFAULT NULL,
  `numero` int(11) NOT NULL,
  `regle_evaluation` int(1) NOT NULL,
  `type_item` int(11) NOT NULL,
  `reponse_fournisseur` varchar(100) NOT NULL,
  `note` varchar(30) NOT NULL,
  `commentaire_acheteur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EnveloppeItemFormulaireConsultationValues`
--

CREATE TABLE `EnveloppeItemFormulaireConsultationValues` (
  `id` int(11) NOT NULL,
  `idItemFormulaireConsultation` int(11) NOT NULL,
  `idEnveloppeFormulaireConsultation` int(11) NOT NULL,
  `valeur` varchar(100) NOT NULL,
  `type_valeur` int(11) NOT NULL,
  `precision_entreprise` varchar(100) NOT NULL,
  `prix_unitaire` varchar(30) NOT NULL,
  `tva` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Enveloppe_papier`
--

CREATE TABLE `Enveloppe_papier` (
  `id_enveloppe_papier` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `offre_papier_id` int(22) NOT NULL DEFAULT '0',
  `statut` int(11) NOT NULL DEFAULT '0',
  `supprime` char(1) NOT NULL DEFAULT '0',
  `cryptage` char(1) NOT NULL DEFAULT '1',
  `is_send` int(1) NOT NULL DEFAULT '1',
  `type_env` int(1) NOT NULL DEFAULT '0',
  `sous_pli` int(3) NOT NULL DEFAULT '0',
  `champs_optionnels` longtext,
  `agent_id_ouverture` int(11) NOT NULL DEFAULT '0',
  `dateheure_ouverture` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `statut_enveloppe` int(2) NOT NULL DEFAULT '1',
  `enveloppe_postule` enum('0','1') NOT NULL DEFAULT '1',
  `nom_agent_ouverture` varchar(100) DEFAULT NULL,
  `montant` double DEFAULT NULL,
  `montant_apres_modification` double DEFAULT NULL,
  `type_attributaire` enum('1','2','3','4') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EtatConsultation`
--

CREATE TABLE `EtatConsultation` (
  `id_etat` int(11) NOT NULL,
  `code_etat` varchar(200) NOT NULL DEFAULT '',
  `abreviation_etat` varchar(20) NOT NULL DEFAULT '',
  `visible` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Evenement`
--

CREATE TABLE `Evenement` (
  `id_evenement` int(11) NOT NULL,
  `reference_consultation` int(11) NOT NULL,
  `reference_utilisateur` varchar(255) NOT NULL,
  `id_service` int(11) NOT NULL,
  `organisme` varchar(30) DEFAULT NULL,
  `objet_consultation` mediumtext NOT NULL,
  `type_evenement` enum('publication','modification','annulation','decision') NOT NULL,
  `date_evenement` datetime NOT NULL,
  `date_creation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_agent_contrat`
--

CREATE TABLE `exec_agent_contrat` (
  `id` int(11) NOT NULL,
  `id_agent` int(11) NOT NULL,
  `id_contrat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_agent_profil`
--

CREATE TABLE `exec_agent_profil` (
  `id` int(11) NOT NULL,
  `id_profil` int(11) NOT NULL,
  `id_agent` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `actif` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_avenant`
--

CREATE TABLE `exec_avenant` (
  `id` int(11) NOT NULL,
  `id_contrat` int(11) NOT NULL,
  `id_type_avenant` int(11) DEFAULT NULL,
  `numero` varchar(255) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `date_notification` datetime NOT NULL,
  `incidence_financiere` int(1) NOT NULL,
  `positif` int(1) DEFAULT NULL,
  `montant_ecart_ht` double DEFAULT NULL,
  `montant_ecart_ttc` double DEFAULT NULL,
  `pourcentage_ecart` double DEFAULT NULL,
  `statut` int(2) NOT NULL,
  `date_validation` datetime DEFAULT NULL,
  `id_agent_validation` int(11) DEFAULT NULL,
  `date_rejet` datetime DEFAULT NULL,
  `id_agent_rejet` int(11) DEFAULT NULL,
  `date_crea` datetime DEFAULT NULL,
  `id_agent_crea` int(11) DEFAULT NULL,
  `date_modif` datetime DEFAULT NULL,
  `id_agent_modif` int(11) DEFAULT NULL,
  `id_parapheur` int(11) DEFAULT NULL,
  `date_cloture_parapheur` datetime DEFAULT NULL,
  `motif_rejet` varchar(255) DEFAULT NULL,
  `date_derniere_synchronisation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `exec_contact`
--

CREATE TABLE `exec_contact` (
  `id` int(11) NOT NULL,
  `id_contrat` int(11) NOT NULL,
  `id_contractant` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `exec_contractant`
--

CREATE TABLE `exec_contractant` (
  `id` int(11) NOT NULL,
  `id_contrat` int(11) NOT NULL,
  `id_type_contractant` int(11) NOT NULL,
  `id_type_structure` int(11) NOT NULL,
  `id_parent` int(11) DEFAULT NULL,
  `raison_sociale` varchar(255) NOT NULL,
  `adresse` text NOT NULL,
  `complement_adresse` text,
  `code_postal` int(5) DEFAULT NULL,
  `ville` int(11) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `rc_num` varchar(250) DEFAULT NULL,
  `rc_ville` int(11) DEFAULT NULL,
  `ice` varchar(250) DEFAULT NULL,
  `ifu` varchar(250) DEFAULT NULL,
  `montant_attribue_ht` double DEFAULT NULL,
  `montant_attribue_ttc` double DEFAULT NULL,
  `accessible_fournisseur` int(1) DEFAULT NULL,
  `date_crea` datetime DEFAULT NULL,
  `id_agent_crea` int(11) DEFAULT NULL,
  `date_modif` datetime DEFAULT NULL,
  `id_agent_modif` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_contrat`
--

CREATE TABLE `exec_contrat` (
  `id_contrat` int(11) NOT NULL,
  `consultation_ref` int(11) DEFAULT NULL,
  `organisme` varchar(30) DEFAULT NULL,
  `id_decision_enveloppe` int(11) DEFAULT NULL,
  `numero` varchar(255) NOT NULL,
  `statut` int(1) DEFAULT NULL,
  `id_type_contrat` int(11) NOT NULL,
  `id_type_structure` int(11) DEFAULT NULL,
  `objet` text NOT NULL,
  `num_consultation` varchar(255) NOT NULL,
  `id_nature_prestation` varchar(30) NOT NULL,
  `id_service` int(11) DEFAULT NULL,
  `id_service_gerant` int(11) DEFAULT NULL,
  `id_agent_gestion` int(11) DEFAULT NULL,
  `reconductible` int(1) DEFAULT NULL,
  `nombre_reconduction` int(11) DEFAULT NULL,
  `montant_ht` double DEFAULT NULL,
  `montant_ttc` double DEFAULT NULL,
  `montant_min` double DEFAULT NULL,
  `montant_max` double DEFAULT NULL,
  `montant_min_ttc` double DEFAULT NULL,
  `montant_max_ttc` double DEFAULT NULL,
  `montant_facture_ht` double DEFAULT NULL,
  `montant_facture_ttc` double DEFAULT NULL,
  `montant_paye_ht` double DEFAULT NULL,
  `montant_paye_ttc` double DEFAULT NULL,
  `montant_caution` double DEFAULT NULL,
  `pourcentage_caution` double DEFAULT NULL,
  `retenue_garantie` enum('0','1') NOT NULL DEFAULT '0',
  `pourcentage_retenue_garantie` double DEFAULT NULL,
  `montant_retenu_garantie` double DEFAULT NULL,
  `pourcentage_prelevement_garantie` double DEFAULT NULL,
  `montant_avance` double DEFAULT NULL,
  `delai_partiel` int(1) DEFAULT NULL,
  `delai_contrat` double DEFAULT NULL,
  `unite_delai_contrat` int(11) DEFAULT NULL,
  `date_approbation` datetime DEFAULT NULL,
  `date_notification_approbation` datetime DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL,
  `date_crea` datetime DEFAULT NULL,
  `id_agent_crea` int(11) DEFAULT NULL,
  `date_modif` datetime DEFAULT NULL,
  `id_agent_modif` int(11) DEFAULT NULL,
  `delai_reel` double DEFAULT NULL,
  `depassement` double DEFAULT NULL,
  `date_maj_delai_reel` datetime DEFAULT NULL,
  `id_parapheur` int(11) DEFAULT NULL,
  `statut_parapheur` int(11) DEFAULT NULL,
  `date_cloture_parapheur` datetime DEFAULT NULL,
  `garantie` enum('0','1') DEFAULT '0',
  `duree_garantie` double DEFAULT NULL,
  `unite_garantie` int(11) DEFAULT NULL,
  `type_penalite` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '0=>pourcentage, 1=>montant, 2=>pas de pénalité',
  `pourcentage_penalite` double DEFAULT NULL,
  `montant_penalite` double DEFAULT NULL,
  `plafond_penalite` double DEFAULT NULL,
  `mode_passation` int(11) DEFAULT NULL,
  `lie_marche` enum('0','1') DEFAULT '0',
  `num_chapeau` int(11) DEFAULT NULL,
  `os_phase` enum('0','1') DEFAULT '0',
  `prestation_demande` enum('0','1') DEFAULT '0',
  `forfait_jh` enum('0','1') DEFAULT '0',
  `quantite_jh` double DEFAULT NULL,
  `nature_marche` int(11) DEFAULT '0',
  `date_debut` datetime DEFAULT NULL,
  `plurianuelle` enum('0','1') DEFAULT NULL COMMENT '0 =>non , 1=>oui',
  `trancheconditionnelle` enum('0','1') DEFAULT NULL COMMENT '0 =>non , 1=>oui',
  `id_agent_cr` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_dossier_paiement`
--

CREATE TABLE `exec_dossier_paiement` (
  `id` int(11) NOT NULL,
  `nume_ordre_paiement` varchar(255) DEFAULT NULL,
  `commentaire` text,
  `id_contrat` int(11) DEFAULT NULL,
  `id_agent_creat` int(11) DEFAULT NULL,
  `statut` int(11) DEFAULT NULL,
  `date_depot` datetime DEFAULT NULL,
  `date_validation` datetime DEFAULT NULL,
  `date_rejet` datetime DEFAULT NULL,
  `montant_a_paye_ttc` double DEFAULT NULL,
  `date_crea` datetime DEFAULT NULL,
  `id_agent_modi` int(11) DEFAULT NULL,
  `id_parapheur` int(11) DEFAULT NULL,
  `date_cloture_parapheur` datetime DEFAULT NULL,
  `id_agent_validation` int(11) DEFAULT NULL,
  `montant_penalite` double DEFAULT NULL,
  `montant_facture` double DEFAULT NULL,
  `motif_rejet` varchar(255) DEFAULT NULL,
  `date_derniere_synchronisation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_dp_facture`
--

CREATE TABLE `exec_dp_facture` (
  `id` int(11) NOT NULL,
  `id_dp` int(11) DEFAULT NULL,
  `id_facture` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_evenement`
--

CREATE TABLE `exec_evenement` (
  `id` int(11) NOT NULL,
  `id_type_evenement` int(11) NOT NULL,
  `id_contrat` int(11) NOT NULL,
  `id_contractant` int(11) NOT NULL,
  `id_phase` int(11) DEFAULT NULL,
  `statut` int(1) DEFAULT NULL,
  `date` datetime NOT NULL,
  `date_document` datetime DEFAULT NULL,
  `commentaire` text CHARACTER SET utf8,
  `origine_piece` int(1) NOT NULL,
  `date_validation` datetime DEFAULT NULL,
  `date_rejet` datetime DEFAULT NULL,
  `id_agent_validation` int(11) DEFAULT NULL,
  `id_agent_rejet` int(11) DEFAULT NULL,
  `date_crea` datetime DEFAULT NULL,
  `id_agent_crea` int(11) DEFAULT NULL,
  `date_modif` datetime DEFAULT NULL,
  `id_agent_modif` int(11) DEFAULT NULL,
  `id_parapheur` int(11) DEFAULT NULL,
  `date_cloture_parapheur` datetime DEFAULT NULL,
  `motif_rejet` varchar(255) DEFAULT NULL,
  `motif_darret` varchar(255) DEFAULT NULL,
  `type_reception` enum('0','1') DEFAULT NULL COMMENT '0=>provisoire , 1=>définitive',
  `porte_reception` enum('0','1') DEFAULT NULL COMMENT '0=>intégralité du marcher / BC , 1=>Partielle',
  `mode_prononce_reception` enum('0','1') DEFAULT NULL COMMENT '0=>sans reserve , 1=>avec reserve',
  `penalite_retard` enum('0','1','2') DEFAULT NULL COMMENT '0=>oui , 1=>non , 2=>non applicable',
  `prestation_reception` text,
  `date_reserve` datetime DEFAULT NULL,
  `delai_maximal_reserves` int(11) DEFAULT '0',
  `detail_reserve` text,
  `ordre_evenement` int(11) DEFAULT NULL,
  `demande` enum('0','1') DEFAULT NULL COMMENT '0=>evenement , 1=>demande',
  `id_parent` int(11) DEFAULT '0' COMMENT 'id de la demande mère',
  `date_derniere_synchronisation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `exec_facture`
--

CREATE TABLE `exec_facture` (
  `id` int(11) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `id_contrat` int(11) NOT NULL,
  `id_contractant` int(11) NOT NULL,
  `statut` int(2) NOT NULL,
  `date_depot` datetime NOT NULL,
  `date_validation` datetime DEFAULT NULL,
  `id_agent_validation` int(11) DEFAULT NULL,
  `date_rejet` datetime DEFAULT NULL,
  `id_agent_rejet` int(11) DEFAULT NULL,
  `montant_facture_ht` double NOT NULL,
  `montant_facture_ttc` double NOT NULL,
  `montant_a_paye_ht` double NOT NULL,
  `montant_a_paye_ttc` double NOT NULL,
  `montant_paye_ht` double DEFAULT NULL,
  `montant_paye_ttc` double DEFAULT NULL,
  `commentaire` text CHARACTER SET utf8,
  `origine_piece` int(1) NOT NULL,
  `numero_workflow` varchar(255) DEFAULT NULL,
  `id_agent_crea` int(11) DEFAULT NULL,
  `id_entreprise_crea` int(11) DEFAULT NULL,
  `date_crea` datetime DEFAULT NULL,
  `id_agent_modif` int(11) DEFAULT NULL,
  `id_entreprise_modif` int(11) DEFAULT NULL,
  `date_modif` datetime DEFAULT NULL,
  `id_parapheur` int(11) DEFAULT NULL,
  `date_cloture_parapheur` datetime DEFAULT NULL,
  `montant_retenue_garantie` double DEFAULT NULL,
  `motif_rejet` varchar(255) DEFAULT NULL,
  `origine` tinyint(1) DEFAULT NULL,
  `validation_via_exec` tinyint(1) DEFAULT NULL COMMENT ' ''1'' EXEC ''0'' PARAPHEUR ',
  `date_paiement` datetime DEFAULT NULL,
  `date_derniere_synchronisation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `exec_facture_signature`
--

CREATE TABLE `exec_facture_signature` (
  `ID` int(11) NOT NULL,
  `ID_BLOB` int(11) NOT NULL,
  `ID_FACTURE` int(11) NOT NULL,
  `TYPE_DOCUMENT` enum('0','1') NOT NULL DEFAULT '0',
  `DATE_SIGNATURE` datetime NOT NULL,
  `EMETTEUR` varchar(255) NOT NULL,
  `DETAIL_EMETTEUR` varchar(250) DEFAULT NULL,
  `SIGNATAIRE` varchar(255) NOT NULL,
  `DETAIL_SIGNATAIRE` varchar(250) DEFAULT NULL,
  `REVOQUE` enum('0','1') NOT NULL,
  `NON_REPUDIATION` enum('0','1') NOT NULL DEFAULT '0',
  `CHAINE_VALIDE` enum('0','1') NOT NULL,
  `DATE_DEB_PERIODE_VALIDITE` datetime NOT NULL,
  `DATE_FIN_PERIODE_VALIDITE` datetime NOT NULL,
  `PERIODE_VALIDITE` enum('0','1') NOT NULL DEFAULT '0',
  `SIGNATURE_VALIDE` enum('0','1') NOT NULL,
  `TYPE_SIGNATURE` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1 : XADES , 2 : PADES',
  `XML_SIGNATURE` text NOT NULL,
  `NOM_FICHIER` varchar(255) NOT NULL,
  `HASH` varchar(255) DEFAULT NULL,
  `ALGORITHME_HASH` varchar(50) DEFAULT NULL,
  `DATE_DERNIERE_VERIFICATION` datetime DEFAULT NULL,
  `SIGNATURE_ARCHIVEE` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_habilitation`
--

CREATE TABLE `exec_habilitation` (
  `id` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `actif` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_historique_prix`
--

CREATE TABLE `exec_historique_prix` (
  `id` int(11) NOT NULL,
  `id_contrat` int(11) NOT NULL,
  `id_prix` int(11) NOT NULL,
  `id_avenant` int(11) DEFAULT NULL,
  `numero` varchar(255) NOT NULL,
  `intitule` text,
  `unite` varchar(50) DEFAULT NULL,
  `quantite` double DEFAULT NULL,
  `prix_unitaire` double DEFAULT NULL,
  `prix_ht` double DEFAULT NULL,
  `taux_tva` double DEFAULT NULL,
  `prix_ttc` double DEFAULT NULL,
  `date_crea` datetime DEFAULT NULL,
  `id_agent_crea` int(11) DEFAULT NULL,
  `date_modif` datetime DEFAULT NULL,
  `id_agent_modif` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `exec_inscrit_contrat`
--

CREATE TABLE `exec_inscrit_contrat` (
  `id` int(11) NOT NULL,
  `id_contrat` int(11) NOT NULL,
  `id_inscrit` int(11) NOT NULL,
  `id_entreprise` int(11) DEFAULT NULL,
  `id_contractant` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `exec_livrable_contrat`
--

CREATE TABLE `exec_livrable_contrat` (
  `id` int(11) NOT NULL,
  `id_contrat` int(11) NOT NULL,
  `id_phase` int(11) DEFAULT NULL,
  `libelle` varchar(255) NOT NULL,
  `taille` varchar(255) DEFAULT NULL,
  `id_agent_crea` int(11) NOT NULL,
  `date_creat` datetime NOT NULL,
  `id_agent_modif` int(11) DEFAULT NULL,
  `date_modif` int(11) DEFAULT NULL,
  `id_blob` int(11) NOT NULL,
  `nom_fichier` varchar(255) DEFAULT NULL,
  `statut` enum('0','1') DEFAULT NULL,
  `commentaire` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_modele_document`
--

CREATE TABLE `exec_modele_document` (
  `id` int(11) NOT NULL,
  `libelle` varchar(250) NOT NULL,
  `param` longtext NOT NULL,
  `extension` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `exec_modele_document`
--

INSERT INTO `exec_modele_document` (`id`, `libelle`, `param`, `extension`) VALUES
(1, 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `exec_modele_notification`
--

CREATE TABLE `exec_modele_notification` (
  `id` int(11) NOT NULL,
  `libelle` varchar(250) NOT NULL,
  `param` longtext NOT NULL,
  `type` varchar(20) NOT NULL,
  `en_copie` varchar(20) NOT NULL,
  `destinataire` varchar(20) NOT NULL,
  `objet` varchar(250) NOT NULL,
  `actif` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `exec_penalite`
--

CREATE TABLE `exec_penalite` (
  `id` int(11) NOT NULL,
  `id_dossier_paiement` int(11) DEFAULT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `taille` varchar(255) DEFAULT NULL,
  `id_blob` int(11) DEFAULT NULL,
  `montant_penalite` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_phase`
--

CREATE TABLE `exec_phase` (
  `id` int(11) NOT NULL,
  `id_contrat` int(11) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `intitule` varchar(255) DEFAULT NULL,
  `delai` double DEFAULT NULL,
  `unite_delai` int(1) DEFAULT NULL,
  `date_crea` datetime DEFAULT NULL,
  `id_agent_crea` int(11) DEFAULT NULL,
  `date_modif` datetime DEFAULT NULL,
  `id_agent_modif` int(11) DEFAULT NULL,
  `delai_reel` double DEFAULT NULL,
  `depassement` double DEFAULT NULL,
  `date_maj_delai_reel` datetime DEFAULT NULL,
  `delai_differe` double DEFAULT NULL,
  `unite_delai_differe` int(1) DEFAULT NULL,
  `date_debut` datetime DEFAULT NULL,
  `statut` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_phase_evenement`
--

CREATE TABLE `exec_phase_evenement` (
  `id` int(11) NOT NULL,
  `phase_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_piece`
--

CREATE TABLE `exec_piece` (
  `id` int(11) NOT NULL,
  `id_contrat` int(11) NOT NULL,
  `id_type_piece` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `taille` varchar(255) DEFAULT NULL,
  `id_agent_crea` int(11) NOT NULL,
  `date_creat` datetime NOT NULL,
  `id_blob` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_piece_avenant`
--

CREATE TABLE `exec_piece_avenant` (
  `id` int(11) NOT NULL,
  `id_avenant` int(11) NOT NULL,
  `id_contrat` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `taille` varchar(255) DEFAULT NULL,
  `id_agent_crea` int(11) NOT NULL,
  `date_crea` datetime NOT NULL,
  `id_blob` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `exec_piece_contrat`
--

CREATE TABLE `exec_piece_contrat` (
  `id` int(11) NOT NULL,
  `id_contrat` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `id_agent_crea` int(11) NOT NULL,
  `date_creat` datetime NOT NULL,
  `id_agent_modif` int(11) DEFAULT NULL,
  `date_modif` int(11) DEFAULT NULL,
  `attached` enum('0','1') NOT NULL DEFAULT '0',
  `original` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_piece_dossierpaiement`
--

CREATE TABLE `exec_piece_dossierpaiement` (
  `id` int(11) NOT NULL,
  `id_dossier_paiement` int(11) DEFAULT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `taille` varchar(255) DEFAULT NULL,
  `id_contrat` int(11) DEFAULT NULL,
  `id_agent_creat` int(11) DEFAULT NULL,
  `date_creat` datetime DEFAULT NULL,
  `id_blob` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_piece_evenement`
--

CREATE TABLE `exec_piece_evenement` (
  `id` int(11) NOT NULL,
  `id_evenement` int(11) NOT NULL,
  `id_contrat` int(11) NOT NULL,
  `id_type_piece` int(11) DEFAULT NULL,
  `libelle` varchar(255) NOT NULL,
  `taille` varchar(255) DEFAULT NULL,
  `id_agent_crea` int(11) NOT NULL,
  `date_creat` datetime NOT NULL,
  `id_blob` int(11) NOT NULL,
  `acces_fournisseur` enum('0','1') NOT NULL DEFAULT '0',
  `depuis_paraph` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_piece_facture`
--

CREATE TABLE `exec_piece_facture` (
  `id` int(11) NOT NULL,
  `id_facture` int(11) NOT NULL,
  `id_contrat` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `taille` varchar(255) DEFAULT NULL,
  `id_agent_crea` int(11) NOT NULL,
  `date_creat` datetime NOT NULL,
  `id_blob` int(11) NOT NULL,
  `depuis_paraph` enum('0','1') NOT NULL DEFAULT '0',
  `acces_fournisseur` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `exec_piece_type_contrat`
--

CREATE TABLE `exec_piece_type_contrat` (
  `id` int(11) NOT NULL,
  `id_type_procedure` int(11) DEFAULT NULL,
  `libelle` varchar(255) NOT NULL,
  `id_type_contrat` int(11) DEFAULT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_prix`
--

CREATE TABLE `exec_prix` (
  `id` int(11) NOT NULL,
  `id_contrat` int(11) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `intitule` text,
  `unite` varchar(50) DEFAULT NULL,
  `quantite` double DEFAULT NULL,
  `quantite_min` double DEFAULT NULL,
  `quantite_max` double DEFAULT NULL,
  `prix_unitaire` double DEFAULT NULL,
  `prix_ht` double DEFAULT NULL,
  `prix_ht_min` double DEFAULT NULL,
  `prix_ht_max` double DEFAULT NULL,
  `taux_tva` double DEFAULT NULL,
  `prix_ttc` double DEFAULT NULL,
  `prix_ttc_min` double DEFAULT NULL,
  `prix_ttc_max` double DEFAULT NULL,
  `date_crea` datetime DEFAULT NULL,
  `id_agent_crea` int(11) DEFAULT NULL,
  `date_modif` datetime DEFAULT NULL,
  `id_agent_modif` int(11) DEFAULT NULL,
  `num_chapeau` int(11) DEFAULT NULL,
  `prix_unitaire_max` double DEFAULT '0',
  `prestation` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_prix_avenant`
--

CREATE TABLE `exec_prix_avenant` (
  `id` int(11) NOT NULL,
  `id_avenant` int(11) NOT NULL,
  `id_prix` int(11) DEFAULT NULL,
  `id_contrat` int(11) NOT NULL,
  `numero` varchar(255) DEFAULT NULL,
  `intitule` text,
  `unite` varchar(50) DEFAULT NULL,
  `ecart_quantite` double DEFAULT '0',
  `quantite_av` double DEFAULT NULL,
  `quantite_ap` double DEFAULT NULL,
  `prix_unitaire` double DEFAULT NULL,
  `prix_ht_av` double DEFAULT NULL,
  `prix_ht_ap` double DEFAULT NULL,
  `taux_tva` double DEFAULT NULL,
  `prix_ttc_av` double DEFAULT NULL,
  `prix_ttc_ap` double DEFAULT NULL,
  `quantite_max` double DEFAULT NULL,
  `prix_ht_min` double NOT NULL,
  `prix_ht_max` double NOT NULL,
  `prix_ttc_min` double NOT NULL,
  `prix_ttc_max` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `exec_profil`
--

CREATE TABLE `exec_profil` (
  `id_profil` int(11) NOT NULL,
  `libelle` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_repartition`
--

CREATE TABLE `exec_repartition` (
  `id` int(11) NOT NULL,
  `id_contrat` int(11) NOT NULL,
  `id_facture` int(11) NOT NULL,
  `id_prix` int(11) NOT NULL,
  `id_contractant` int(11) NOT NULL,
  `prix_unitaire` double NOT NULL,
  `taux_tva` double NOT NULL,
  `pourcentage_realise` double NOT NULL,
  `cumul_pourcent_realise` double NOT NULL,
  `montant_facture_ht` double NOT NULL,
  `montant_facture_ttc` double NOT NULL,
  `montant_paye_ht` double DEFAULT NULL,
  `montant_paye_ttc` double DEFAULT NULL,
  `id_agent_crea` int(11) DEFAULT NULL,
  `id_entreprise_crea` int(11) DEFAULT NULL,
  `date_crea` datetime NOT NULL,
  `id_agent_modif` int(11) DEFAULT NULL,
  `date_modif` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `exec_synchronisation_objet_theme`
--

CREATE TABLE `exec_synchronisation_objet_theme` (
  `id` int(11) NOT NULL,
  `id_theme` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `libelle_object` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_type_avenant`
--

CREATE TABLE `exec_type_avenant` (
  `id` int(11) NOT NULL,
  `id_theme` int(11) DEFAULT NULL,
  `libelle` varchar(255) NOT NULL,
  `libelle_fr` varchar(255) DEFAULT NULL,
  `libelle_ar` varchar(255) DEFAULT NULL,
  `libelle_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `exec_type_contractant`
--

CREATE TABLE `exec_type_contractant` (
  `id` int(11) NOT NULL,
  `id_type_structure` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `libelle_fr` varchar(255) DEFAULT NULL,
  `libelle_ar` varchar(255) DEFAULT NULL,
  `libelle_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_type_contrat`
--

CREATE TABLE `exec_type_contrat` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `libelle_fr` varchar(255) DEFAULT NULL,
  `libelle_ar` varchar(255) DEFAULT NULL,
  `libelle_en` varchar(255) DEFAULT NULL,
  `type_evenement_liee` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_type_evenement`
--

CREATE TABLE `exec_type_evenement` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `libelle_fr` varchar(255) DEFAULT NULL,
  `libelle_ar` varchar(255) DEFAULT NULL,
  `libelle_en` varchar(255) DEFAULT NULL,
  `demande` tinyint(1) DEFAULT '0',
  `controle_input` varchar(50) DEFAULT NULL COMMENT '	Liste type antécédent, null si le control est désactivé	',
  `reconductible` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_type_evenement_organisme`
--

CREATE TABLE `exec_type_evenement_organisme` (
  `id_type_evenement` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `habilitation` text NOT NULL,
  `via_demande` tinyint(4) NOT NULL,
  `id_theme` int(11) NOT NULL,
  `id_modele_document` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_type_piece`
--

CREATE TABLE `exec_type_piece` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `libelle_fr` varchar(255) DEFAULT NULL,
  `libelle_ar` varchar(255) DEFAULT NULL,
  `libelle_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_type_piece_evenement`
--

CREATE TABLE `exec_type_piece_evenement` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `libelle_fr` varchar(255) DEFAULT NULL,
  `libelle_ar` varchar(255) DEFAULT NULL,
  `libelle_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exec_type_structure`
--

CREATE TABLE `exec_type_structure` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `libelle_fr` varchar(255) DEFAULT NULL,
  `libelle_ar` varchar(255) DEFAULT NULL,
  `libelle_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `id` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `id_sous_type` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `ref` varchar(255) DEFAULT NULL COMMENT 'Numero de la facture',
  `date_creation` datetime NOT NULL,
  `montant_ht` double DEFAULT NULL,
  `montant_ttc` double DEFAULT NULL,
  `montant_tva` double DEFAULT NULL,
  `objet` varchar(255) DEFAULT NULL,
  `devis` varchar(255) DEFAULT NULL,
  `statut` int(11) DEFAULT NULL,
  `numero_depot` varchar(255) DEFAULT NULL,
  `numero_marche` varchar(255) DEFAULT NULL,
  `id_inscrit` int(11) NOT NULL,
  `id_entreprise` int(11) NOT NULL,
  `id_blob_facture` int(11) NOT NULL,
  `nom_fichier` varchar(255) DEFAULT NULL,
  `id_blob_facture_signe` int(11) DEFAULT NULL,
  `date_envoi` datetime DEFAULT NULL,
  `date_depot` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `facture_piece_jointe`
--

CREATE TABLE `facture_piece_jointe` (
  `id` int(11) NOT NULL,
  `id_facture` int(11) NOT NULL,
  `id_blob_piece_jointe` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `id_piece_sous_type` int(11) NOT NULL,
  `nom_fichier` varchar(255) DEFAULT NULL,
  `id_blob_piece_signe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `facture_signature`
--

CREATE TABLE `facture_signature` (
  `ID` int(11) NOT NULL,
  `ID_BLOB` int(11) NOT NULL,
  `ID_FACTURE` int(11) NOT NULL,
  `ID_AGENT_SIGNATAIRE` int(11) NOT NULL,
  `REVISION` int(11) NOT NULL,
  `TYPE_DOCUMENT` enum('0','1') NOT NULL DEFAULT '0',
  `DATE_SIGNATURE` datetime NOT NULL,
  `EMETTEUR` varchar(255) NOT NULL,
  `DETAIL_EMETTEUR` varchar(250) DEFAULT NULL,
  `SIGNATAIRE` varchar(255) NOT NULL,
  `DETAIL_SIGNATAIRE` varchar(250) DEFAULT NULL,
  `REVOQUE` enum('0','1') NOT NULL,
  `NON_REPUDIATION` enum('0','1') NOT NULL DEFAULT '0',
  `CHAINE_VALIDE` enum('0','1') NOT NULL,
  `DATE_DEB_PERIODE_VALIDITE` datetime NOT NULL,
  `DATE_FIN_PERIODE_VALIDITE` datetime NOT NULL,
  `PERIODE_VALIDITE` enum('0','1') NOT NULL DEFAULT '0',
  `SIGNATURE_VALIDE` enum('0','1') NOT NULL,
  `TYPE_SIGNATURE` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1 : XADES , 2 : PADES',
  `XML_SIGNATURE` text NOT NULL,
  `NOM_FICHIER` varchar(255) NOT NULL,
  `HASH` varchar(255) DEFAULT NULL,
  `ALGORITHME_HASH` varchar(50) DEFAULT NULL,
  `DATE_DERNIERE_VERIFICATION` datetime DEFAULT NULL,
  `SIGNATURE_ARCHIVEE` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Faq_Entreprise`
--

CREATE TABLE `Faq_Entreprise` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `question_fr` text NOT NULL,
  `question_en` text NOT NULL,
  `question_es` text NOT NULL,
  `reponse` text NOT NULL,
  `reponse_fr` text NOT NULL,
  `reponse_en` text NOT NULL,
  `reponse_es` text NOT NULL,
  `question_it` text NOT NULL,
  `reponse_it` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Fcsp_Lieu`
--

CREATE TABLE `Fcsp_Lieu` (
  `id_auto` int(11) UNSIGNED NOT NULL,
  `id` int(11) NOT NULL DEFAULT '0',
  `organisme` varchar(5) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Fcsp_Mandataire`
--

CREATE TABLE `Fcsp_Mandataire` (
  `id_auto` int(11) UNSIGNED NOT NULL,
  `id` int(11) NOT NULL DEFAULT '0',
  `organisme` varchar(5) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Fcsp_unite`
--

CREATE TABLE `Fcsp_unite` (
  `id_auto` int(11) UNSIGNED NOT NULL,
  `id` int(11) NOT NULL DEFAULT '0',
  `organisme` varchar(5) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `fichierEnveloppe`
--

CREATE TABLE `fichierEnveloppe` (
  `id_fichier` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `id_enveloppe` int(11) NOT NULL DEFAULT '0',
  `type_fichier` char(3) NOT NULL DEFAULT '',
  `num_ordre_fichier` int(5) NOT NULL DEFAULT '0',
  `nom_fichier` text NOT NULL,
  `taille_fichier` varchar(50) NOT NULL DEFAULT '',
  `signature_fichier` text NOT NULL,
  `hash` text NOT NULL,
  `verification_certificat` varchar(5) NOT NULL DEFAULT '',
  `id_blob` int(11) DEFAULT NULL,
  `id_blob_signature` int(11) DEFAULT NULL COMMENT 'Permet de stocker l''identifiant du blob de la signature du fichier',
  `type_piece` int(10) NOT NULL DEFAULT '3' COMMENT '1: pi?ces jointes, 2: editions SUB, 3: pi?ces libres, 4: pi?ces typ?es',
  `id_type_piece` int(10) NOT NULL DEFAULT '0' COMMENT 'Permet de distinguer les pi?ces typ?es (typpes pi?ces=4)',
  `is_hash` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Ce champ est ? ''1'' si le fichier est de nature hash, ''0'' sinon',
  `nom_referentiel_certificat` varchar(255) DEFAULT NULL COMMENT 'Le nom de r?ferentiel qui contient le certificat',
  `statut_referentiel_certificat` int(1) DEFAULT NULL COMMENT 'Le statut du r?ferentiel du certificat( OK,NOK...)',
  `nom_referentiel_fonctionnel` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `date_signature` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `fichiers_liste_marches`
--

CREATE TABLE `fichiers_liste_marches` (
  `id` int(20) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `nom_fichier` varchar(50) NOT NULL DEFAULT '',
  `fichier` varchar(20) NOT NULL DEFAULT '',
  `horodatage` longblob NOT NULL,
  `untrusteddate` varchar(20) NOT NULL DEFAULT '',
  `taille` int(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `formejuridique`
--

CREATE TABLE `formejuridique` (
  `formejuridique` varchar(255) NOT NULL DEFAULT '',
  `ordre` int(5) DEFAULT NULL,
  `libelle_formejuridique` varchar(255) NOT NULL DEFAULT '',
  `libelle_formejuridique_fr` varchar(255) NOT NULL DEFAULT '',
  `libelle_formejuridique_en` varchar(255) NOT NULL DEFAULT '',
  `libelle_formejuridique_es` varchar(255) NOT NULL DEFAULT '',
  `libelle_formejuridique_su` varchar(255) NOT NULL DEFAULT '',
  `libelle_formejuridique_du` varchar(255) NOT NULL DEFAULT '',
  `libelle_formejuridique_cz` varchar(255) NOT NULL DEFAULT '',
  `libelle_formejuridique_ar` varchar(255) NOT NULL DEFAULT '',
  `libelle_formejuridique_it` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `FormXmlDestinataireOpoce`
--

CREATE TABLE `FormXmlDestinataireOpoce` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_destinataire_opoce` int(11) NOT NULL,
  `xml` text NOT NULL,
  `code_retour` varchar(255) DEFAULT NULL COMMENT 'Permet de stocker le code retourne par OPOCE apres la reussite de l''envoie de l''xml. Ce code est appel? submission_id ou identifiant opoce',
  `message_retour` varchar(255) DEFAULT NULL COMMENT 'Permet de stocker les retours (messages d''erreur) des flux entre MPE et OPOCE',
  `id_joue` varchar(255) DEFAULT NULL COMMENT 'Permet de stocker le num?ro du document dans le journal officiel de l''UE',
  `date_pub_joue` varchar(255) DEFAULT NULL COMMENT 'Permet de stocker la date de publication du document dans le journal officiel de l''UE',
  `lien_publication` varchar(225) DEFAULT NULL COMMENT 'Permet de stocker le lien de publication de la publicit? sur le site TED',
  `no_doc_ext` varchar(255) DEFAULT NULL COMMENT 'Permet de stocker le num?ro du document g?n?r? par esender'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `GeolocalisationN0`
--

CREATE TABLE `GeolocalisationN0` (
  `id` int(11) NOT NULL,
  `denomination` varchar(40) NOT NULL DEFAULT '',
  `denomination_fr` varchar(40) NOT NULL,
  `denomination_en` varchar(40) NOT NULL,
  `denomination_es` varchar(40) NOT NULL,
  `type` int(11) NOT NULL COMMENT 'mettre ''0'' pour les collectivites,''1'' pour les pays,''2'' pour la carte (france metropolitaine)',
  `libelle_selectionner` varchar(40) NOT NULL DEFAULT '',
  `libelle_selectionner_fr` varchar(40) NOT NULL,
  `libelle_selectionner_en` varchar(40) NOT NULL,
  `libelle_selectionner_es` varchar(40) NOT NULL,
  `libelle_tous` varchar(40) NOT NULL DEFAULT '',
  `libelle_tous_fr` varchar(40) NOT NULL,
  `libelle_tous_en` varchar(40) NOT NULL,
  `libelle_tous_es` varchar(40) NOT NULL,
  `libelle_Aucun` varchar(50) NOT NULL DEFAULT '',
  `libelle_Aucun_fr` varchar(50) NOT NULL,
  `libelle_Aucun_en` varchar(50) NOT NULL,
  `libelle_Aucun_es` varchar(50) NOT NULL,
  `denomination_ar` varchar(40) NOT NULL,
  `libelle_selectionner_ar` varchar(40) NOT NULL,
  `libelle_tous_ar` varchar(40) NOT NULL,
  `libelle_Aucun_ar` varchar(40) NOT NULL,
  `denomination_su` varchar(40) NOT NULL,
  `libelle_selectionner_su` varchar(40) NOT NULL,
  `libelle_tous_su` varchar(40) NOT NULL,
  `libelle_Aucun_su` varchar(40) NOT NULL,
  `denomination_du` varchar(40) NOT NULL,
  `libelle_selectionner_du` varchar(40) NOT NULL,
  `libelle_tous_du` varchar(40) NOT NULL,
  `libelle_Aucun_du` varchar(40) NOT NULL,
  `denomination_cz` varchar(40) NOT NULL,
  `libelle_selectionner_cz` varchar(40) NOT NULL,
  `libelle_tous_cz` varchar(40) NOT NULL,
  `libelle_Aucun_cz` varchar(40) NOT NULL,
  `denomination_it` varchar(40) NOT NULL DEFAULT '',
  `libelle_selectionner_it` varchar(40) NOT NULL DEFAULT '',
  `libelle_tous_it` varchar(40) NOT NULL DEFAULT '',
  `libelle_Aucun_it` varchar(40) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `GeolocalisationN1`
--

CREATE TABLE `GeolocalisationN1` (
  `id` int(11) NOT NULL,
  `id_geolocalisationN0` int(11) NOT NULL DEFAULT '0',
  `actif` enum('0','1') NOT NULL DEFAULT '1',
  `denomination1` varchar(100) NOT NULL,
  `denomination2` varchar(100) NOT NULL,
  `denomination1_ar` varchar(100) NOT NULL,
  `denomination2_ar` varchar(100) NOT NULL,
  `denomination1_fr` varchar(100) NOT NULL,
  `denomination2_fr` varchar(100) NOT NULL,
  `denomination1_en` varchar(100) NOT NULL,
  `denomination2_en` varchar(100) NOT NULL,
  `denomination1_es` varchar(100) NOT NULL,
  `denomination2_es` varchar(100) NOT NULL,
  `denomination1_su` varchar(100) NOT NULL,
  `denomination2_su` varchar(100) NOT NULL,
  `denomination1_du` varchar(100) NOT NULL,
  `denomination2_du` varchar(100) NOT NULL,
  `denomination1_cz` varchar(100) NOT NULL,
  `denomination2_cz` varchar(100) NOT NULL,
  `denomination1_it` varchar(100) NOT NULL DEFAULT '',
  `denomination2_it` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `GeolocalisationN2`
--

CREATE TABLE `GeolocalisationN2` (
  `id` int(11) NOT NULL,
  `id_geolocalisationN1` int(11) NOT NULL DEFAULT '0',
  `denomination1` varchar(50) NOT NULL,
  `denomination2` varchar(30) NOT NULL DEFAULT '',
  `valeur_avec_sous_categorie` enum('0','1') NOT NULL DEFAULT '1',
  `actif` enum('0','1') NOT NULL DEFAULT '1',
  `denomination1_ar` varchar(50) NOT NULL,
  `denomination2_ar` varchar(30) NOT NULL,
  `denomination1_fr` varchar(50) NOT NULL,
  `denomination2_fr` varchar(30) NOT NULL,
  `denomination1_en` varchar(50) NOT NULL,
  `denomination2_en` varchar(30) NOT NULL,
  `denomination1_es` varchar(50) NOT NULL,
  `denomination2_es` varchar(30) NOT NULL,
  `denomination1_su` varchar(50) NOT NULL,
  `denomination2_su` varchar(30) NOT NULL,
  `denomination1_du` varchar(50) NOT NULL,
  `denomination2_du` varchar(30) NOT NULL,
  `denomination1_cz` varchar(50) NOT NULL,
  `denomination2_cz` varchar(30) NOT NULL,
  `denomination1_it` varchar(50) NOT NULL DEFAULT '',
  `denomination2_it` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `gestion_adresses`
--

CREATE TABLE `gestion_adresses` (
  `id` int(50) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `id_service` int(11) NOT NULL DEFAULT '0',
  `id_agent` int(11) NOT NULL DEFAULT '0',
  `nom_agent` varchar(250) NOT NULL DEFAULT '',
  `prenom_agent` varchar(250) NOT NULL DEFAULT '',
  `adresse_depot_offres` varchar(250) NOT NULL DEFAULT '',
  `adresse_retrais_dossiers` varchar(250) NOT NULL DEFAULT '',
  `lieu_ouverture_plis` varchar(250) NOT NULL DEFAULT '',
  `adresse_depot_offres_fr` varchar(250) NOT NULL DEFAULT '',
  `adresse_retrais_dossiers_fr` varchar(250) NOT NULL DEFAULT '',
  `lieu_ouverture_plis_fr` varchar(250) NOT NULL DEFAULT '',
  `adresse_depot_offres_ar` varchar(250) NOT NULL DEFAULT '',
  `adresse_retrais_dossiers_ar` varchar(250) NOT NULL DEFAULT '',
  `lieu_ouverture_plis_ar` varchar(250) NOT NULL DEFAULT '',
  `adresse_depot_offres_en` varchar(250) NOT NULL DEFAULT '',
  `adresse_depot_offres_es` varchar(250) NOT NULL DEFAULT '',
  `adresse_depot_offres_su` varchar(250) NOT NULL DEFAULT '',
  `adresse_depot_offres_du` varchar(250) NOT NULL DEFAULT '',
  `adresse_depot_offres_cz` varchar(250) NOT NULL DEFAULT '',
  `adresse_retrais_dossiers_en` varchar(250) NOT NULL DEFAULT '',
  `adresse_retrais_dossiers_es` varchar(250) NOT NULL DEFAULT '',
  `adresse_retrais_dossiers_su` varchar(250) NOT NULL DEFAULT '',
  `adresse_retrais_dossiers_du` varchar(250) NOT NULL DEFAULT '',
  `adresse_retrais_dossiers_cz` varchar(250) NOT NULL DEFAULT '',
  `lieu_ouverture_plis_en` varchar(250) NOT NULL DEFAULT '',
  `lieu_ouverture_plis_es` varchar(250) NOT NULL DEFAULT '',
  `lieu_ouverture_plis_su` varchar(250) NOT NULL DEFAULT '',
  `lieu_ouverture_plis_du` varchar(250) NOT NULL DEFAULT '',
  `lieu_ouverture_plis_cz` varchar(250) NOT NULL DEFAULT '',
  `adresse_depot_offres_it` varchar(250) NOT NULL DEFAULT '',
  `adresse_retrais_dossiers_it` varchar(250) NOT NULL DEFAULT '',
  `lieu_ouverture_plis_it` varchar(250) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `groupement`
--

CREATE TABLE `groupement` (
  `id` int(11) NOT NULL,
  `ref_consultation` int(11) NOT NULL,
  `id_entreprise` int(11) NOT NULL,
  `id_inscrit` int(11) NOT NULL,
  `nom_groupement` text NOT NULL,
  `type_groupement` enum('1','2') DEFAULT '1' COMMENT '1=>solidaire, 2=> conjoint',
  `invitation_envoye` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Groupe_Moniteur`
--

CREATE TABLE `Groupe_Moniteur` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `id_service` int(11) NOT NULL DEFAULT '0',
  `Identifiant` varchar(50) NOT NULL DEFAULT '',
  `Mdp` varchar(50) NOT NULL DEFAULT '',
  `Num_Abonnement` varchar(50) DEFAULT NULL,
  `Num_Abonne` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Guides`
--

CREATE TABLE `Guides` (
  `id_guide` int(11) NOT NULL,
  `acces_from` varchar(250) NOT NULL COMMENT 'mettre "entreprise" pour les guides coténtreprise,mettre "agent" pour les guides cotécheteur public',
  `type` varchar(250) NOT NULL,
  `libelle` varchar(250) NOT NULL,
  `nom_fichier` varchar(250) NOT NULL,
  `langue` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `HabilitationAgent`
--

CREATE TABLE `HabilitationAgent` (
  `id_agent` int(11) NOT NULL DEFAULT '0',
  `gestion_agent_pole` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_fournisseurs_envois_postaux` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_bi_cles` enum('0','1') NOT NULL DEFAULT '0',
  `creer_consultation` enum('0','1') NOT NULL DEFAULT '1',
  `modifier_consultation` enum('0','1') NOT NULL DEFAULT '0',
  `valider_consultation` enum('0','1') NOT NULL DEFAULT '0',
  `publier_consultation` enum('0','1') NOT NULL DEFAULT '0',
  `suivre_consultation` enum('0','1') NOT NULL DEFAULT '1',
  `suivre_consultation_pole` enum('0','1') NOT NULL DEFAULT '0',
  `supprimer_enveloppe` enum('0','1') NOT NULL DEFAULT '0',
  `supprimer_consultation` enum('0','1') NOT NULL DEFAULT '0',
  `depouiller_candidature` enum('0','1') NOT NULL DEFAULT '1',
  `depouiller_offre` enum('0','1') NOT NULL DEFAULT '1',
  `messagerie_securisee` enum('0','1') NOT NULL DEFAULT '0',
  `acces_registre_depots_papier` enum('0','1') NOT NULL DEFAULT '0',
  `acces_registre_retraits_papier` enum('0','1') NOT NULL DEFAULT '0',
  `acces_registre_questions_papier` enum('0','1') NOT NULL DEFAULT '0',
  `gerer_encheres` enum('0','1') NOT NULL DEFAULT '0',
  `suivre_encheres` enum('0','1') NOT NULL DEFAULT '0',
  `suivi_entreprise` enum('0','1') NOT NULL DEFAULT '0',
  `envoi_boamp` enum('0','1') NOT NULL DEFAULT '0',
  `acces_classement_lot` enum('0','1') NOT NULL DEFAULT '0',
  `connecteur_sis` enum('0','1') NOT NULL DEFAULT '0',
  `connecteur_marco` enum('0','1') NOT NULL DEFAULT '0',
  `repondre_aux_questions` enum('0','1') NOT NULL DEFAULT '0',
  `appel_projet_formation` enum('0','1') NOT NULL DEFAULT '0',
  `utiliser_client_CAO` enum('0','1') NOT NULL DEFAULT '0',
  `notification_boamp` enum('0','1') NOT NULL DEFAULT '0',
  `administrer_compte` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_mapa` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_type_validation` enum('0','1') NOT NULL DEFAULT '0',
  `approuver_consultation` enum('0','1') NOT NULL DEFAULT '0',
  `administrer_procedure` enum('0','1') NOT NULL DEFAULT '0',
  `restreindre_creation` enum('0','1') NOT NULL DEFAULT '0',
  `creer_liste_marches` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_commissions` enum('0','1') NOT NULL DEFAULT '0',
  `suivi_seul_consultation` enum('0','1') NOT NULL DEFAULT '0',
  `attribution_marche` enum('0','1') NOT NULL DEFAULT '0',
  `fiche_recensement` enum('0','1') NOT NULL DEFAULT '0',
  `declarer_infructueux` enum('0','1') NOT NULL DEFAULT '0',
  `declarer_sans_suite` enum('0','1') NOT NULL DEFAULT '0',
  `creer_consultation_transverse` enum('0','1') NOT NULL DEFAULT '0',
  `ouvrir_candidature_en_ligne` enum('0','1') NOT NULL DEFAULT '0',
  `ouvrir_candidature_a_distance` enum('0','1') NOT NULL DEFAULT '0',
  `refuser_enveloppe` enum('0','1') NOT NULL DEFAULT '0',
  `gerer_admissibilite` enum('0','1') NOT NULL DEFAULT '0',
  `restaurer_enveloppe` enum('0','1') NOT NULL DEFAULT '0',
  `ouvrir_anonymat_en_ligne` enum('0','1') NOT NULL DEFAULT '0',
  `ouvrir_offre_en_ligne` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_compte_boamp` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_agents` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_habilitations` enum('0','1') NOT NULL DEFAULT '0',
  `gerer_mapa_inferieur_montant` enum('0','1') NOT NULL DEFAULT '0',
  `gerer_mapa_superieur_montant` enum('0','1') NOT NULL DEFAULT '0',
  `modifier_consultation_avant_validation` enum('0','1') NOT NULL DEFAULT '0',
  `modifier_consultation_apres_validation` enum('0','1') NOT NULL DEFAULT '0',
  `acces_reponses` enum('0','1') NOT NULL DEFAULT '0',
  `telechargement_groupe_anticipe_plis_chiffres` enum('0','1') NOT NULL DEFAULT '0',
  `telechargement_unitaire_plis_chiffres` enum('0','1') NOT NULL DEFAULT '0',
  `ouvrir_offre_a_distance` enum('0','1') NOT NULL DEFAULT '0',
  `creer_annonce_information` enum('0','1') NOT NULL DEFAULT '0',
  `saisie_marches` enum('0','1') NOT NULL DEFAULT '0',
  `validation_marches` enum('0','1') NOT NULL DEFAULT '0',
  `publication_marches` enum('0','1') NOT NULL DEFAULT '0',
  `gerer_statistiques_metier` enum('0','1') NOT NULL DEFAULT '0',
  `gerer_archives` enum('0','1') NOT NULL DEFAULT '0',
  `administrer_procedures_formalisees` enum('0','1') NOT NULL DEFAULT '0',
  `creer_annonce_attribution` enum('0','1') NOT NULL DEFAULT '0',
  `acces_registre_retraits_electronique` enum('0','1') NOT NULL DEFAULT '1',
  `acces_registre_questions_electronique` enum('0','1') NOT NULL DEFAULT '1',
  `acces_registre_depots_electronique` enum('0','1') NOT NULL DEFAULT '1',
  `validation_simple` enum('0','1') NOT NULL DEFAULT '1',
  `validation_intermediaire` enum('0','1') NOT NULL DEFAULT '1',
  `validation_finale` enum('0','1') NOT NULL DEFAULT '1',
  `creer_suite_consultation` enum('0','1') NOT NULL DEFAULT '1',
  `hyper_admin` enum('0','1') NOT NULL DEFAULT '0',
  `droit_gestion_services` enum('0','1') NOT NULL DEFAULT '0',
  `suivi_acces` enum('0','1') NOT NULL DEFAULT '0',
  `statistiques_site` enum('0','1') NOT NULL DEFAULT '0',
  `statistiques_QoS` enum('0','1') NOT NULL DEFAULT '0',
  `ouvrir_anonymat_a_distance` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_compte_jal` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_centrale_pub` enum('0','1') DEFAULT '0',
  `Gestion_Compte_Groupe_Moniteur` enum('0','1') DEFAULT '0',
  `ouvrir_offre_technique_en_ligne` enum('0','1') NOT NULL,
  `ouvrir_offre_technique_a_distance` enum('0','1') NOT NULL,
  `activation_compte_entreprise` enum('0','1') DEFAULT '0',
  `importer_enveloppe` enum('0','1') NOT NULL DEFAULT '0',
  `suivi_seul_registre_depots_papier` enum('0','1') NOT NULL DEFAULT '0',
  `suivi_seul_registre_retraits_papier` enum('0','1') NOT NULL DEFAULT '0',
  `suivi_seul_registre_questions_papier` enum('0','1') NOT NULL DEFAULT '0',
  `suivi_seul_registre_depots_electronique` enum('0','1') NOT NULL DEFAULT '1',
  `suivi_seul_registre_retraits_electronique` enum('0','1') NOT NULL DEFAULT '1',
  `suivi_seul_registre_questions_electronique` enum('0','1') NOT NULL DEFAULT '1',
  `modifier_consultation_mapa_inferieur_montant_apres_validation` enum('0','1') NOT NULL DEFAULT '0',
  `modifier_consultation_mapa_superieur_montant_apres_validation` enum('0','1') NOT NULL DEFAULT '0',
  `modifier_consultation_procedures_formalisees_apres_validation` enum('0','1') NOT NULL DEFAULT '0',
  `gerer_les_entreprises` enum('0','1') DEFAULT '0',
  `portee_societes_exclues` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet ? l''agent de creer une soci?t? exclue pour un organisme',
  `portee_societes_exclues_tous_organismes` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet ? l''agent de creer une soci?t? exclue pour un organisme pour l''ensemble des organismes',
  `modifier_societes_exclues` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet ? l''agent de modifier une societe exclue',
  `supprimer_societes_exclues` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet ? l''agent de supprimer une societe exclue',
  `resultat_analyse` enum('0','1') NOT NULL DEFAULT '0',
  `gerer_adresses_service` enum('0','1') DEFAULT '0',
  `gerer_mon_service` enum('0','1') DEFAULT '0',
  `download_archives` enum('0','1') DEFAULT '0',
  `creer_annonce_extrait_pv` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Gère l''habilitation pour la gestion des type d''annonce ''Annonce_extrait_pv''',
  `creer_annonce_rapport_achevement` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Gère l''habilitation pour la gestion des type d''annonce ''Annonce_rapport_achevement''',
  `gestion_certificats_agent` enum('0','1') DEFAULT '0',
  `creer_avis_programme_previsionnel` enum('0','1') DEFAULT '0',
  `annuler_consultation` enum('0','1') DEFAULT '0',
  `envoyer_publicite` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Conditionne l''affichage du bouton "Envoyer" dans les colonnes "Actions" des tableaux "Liste des destinataires"',
  `liste_marches_notifies` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''acc?der ? la page de recherche avanc?e des march?s notifi?s.',
  `suivre_message` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Donne la possibilit? de suivre les messages via l''interface des d?tails de la consultation.',
  `envoyer_message` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Donne la possibilit? d''envoyer des messages via l''interface des details de la consultation.',
  `suivi_flux_chorus_transversal` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''activer l''acc?s ? la fonctionnalit? de recherche avanc?e des ?changes',
  `gestion_mandataire` enum('0','1') DEFAULT '0',
  `gerer_newsletter` enum('0','1') DEFAULT '0' COMMENT 'permet de gerer la newsletter',
  `gestion_modeles_formulaire` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet de gerer les modeles de formulaires',
  `gestion_adresses_facturation_jal` enum('0','1') NOT NULL DEFAULT '0',
  `administrer_adresses_facturation_jal` enum('0','1') NOT NULL DEFAULT '0',
  `redaction_documents_redac` enum('0','1') NOT NULL DEFAULT '0',
  `validation_documents_redac` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_mise_disposition_pieces_marche` enum('0','1') NOT NULL DEFAULT '0',
  `annuaire_acheteur` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet de gerer la recherche des acheteur public',
  `reprendre_integralement_article` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Reprendre int?gralement un article REDAC',
  `administrer_clauses` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Administrer les clauses REDAC',
  `valider_clauses` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Valider les clauses REDAC',
  `administrer_canevas` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Administrer les canevas REDAC',
  `valider_canevas` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Valider les canevas REDAC',
  `administrer_clauses_entite_achats` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Administrer les clauses Entit? d Achats REDAC',
  `generer_pieces_format_odt` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'G?n?rer les pi?ces au format odt (?ditable) REDAC',
  `publier_version_clausier_editeur` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Publier une version de clausier Editeur REDAC',
  `administrer_clauses_editeur` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Administrer les clauses editeur REDAC',
  `valider_clauses_editeur` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Valider les clauses editeur REDAC',
  `administrer_canevas_editeur` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Administrer les canevas editeur REDAC',
  `valider_canevas_editeur` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Valider les canevas editeur REDAC',
  `decision_suivi_seul` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de t?l?charger les plis et acc?der ? la d?cision en lecture seule',
  `ouvrir_candidature_hors_ligne` enum('0','1') NOT NULL DEFAULT '1',
  `ouvrir_offre_hors_ligne` enum('0','1') NOT NULL DEFAULT '1',
  `ouvrir_offre_technique_hors_ligne` enum('0','1') NOT NULL DEFAULT '1',
  `ouvrir_anonymat_hors_ligne` enum('0','1') NOT NULL DEFAULT '1',
  `espace_collaboratif_gestionnaire` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet la cr?ation d''un Espace collaboratif',
  `espace_collaboratif_contributeur` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet la visualisation d''un Espace collaboratif',
  `gerer_organismes` enum('0','1') NOT NULL DEFAULT '0',
  `gerer_associations_agents` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Associer ? un autre compte',
  `module_redaction_uniquement` enum('0','1') DEFAULT '0',
  `historique_navigation_inscrits` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Acceder a l historique de navigation des inscrits ',
  `telecharger_accords_cadres` enum('0','1') NOT NULL DEFAULT '0',
  `creer_annonce_decision_resiliation` enum('0','1') NOT NULL DEFAULT '0',
  `creer_annonce_synthese_rapport_audit` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet de gerer la creation d''un eannonce de synth?se du rapport de d''audit',
  `gerer_operations` enum('0','1') NOT NULL DEFAULT '0',
  `telecharger_siret_acheteur` enum('0','1') DEFAULT '0',
  `gerer_reouvertures_modification` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Cette habilitation g?re la pr?sence ou non du bouton "Demande de compl?ment"(AOF)',
  `envoyer_demande_validation` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet d envoyer une demande de validation du dce au controleur de l etat ',
  `suivre_consultation_organisme` enum('0','1') NOT NULL DEFAULT '0',
  `renseigner_montant` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_referentiel_contact` enum('0','1') NOT NULL DEFAULT '0',
  `gerer_cao` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `HabilitationProfil`
--

CREATE TABLE `HabilitationProfil` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL DEFAULT '',
  `gestion_agent_pole` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_fournisseurs_envois_postaux` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_bi_cles` enum('0','1') NOT NULL DEFAULT '0',
  `creer_consultation` enum('0','1') NOT NULL DEFAULT '1',
  `modifier_consultation` enum('0','1') NOT NULL DEFAULT '0',
  `valider_consultation` enum('0','1') NOT NULL DEFAULT '0',
  `publier_consultation` enum('0','1') NOT NULL DEFAULT '0',
  `suivre_consultation` enum('0','1') NOT NULL DEFAULT '1',
  `suivre_consultation_pole` enum('0','1') NOT NULL DEFAULT '0',
  `supprimer_enveloppe` enum('0','1') NOT NULL DEFAULT '0',
  `supprimer_consultation` enum('0','1') NOT NULL DEFAULT '0',
  `depouiller_candidature` enum('0','1') NOT NULL DEFAULT '1',
  `depouiller_offre` enum('0','1') NOT NULL DEFAULT '1',
  `messagerie_securisee` enum('0','1') NOT NULL DEFAULT '0',
  `acces_registre_depots_papier` enum('0','1') NOT NULL DEFAULT '0',
  `acces_registre_retraits_papier` enum('0','1') NOT NULL DEFAULT '0',
  `acces_registre_questions_papier` enum('0','1') NOT NULL DEFAULT '0',
  `gerer_encheres` enum('0','1') NOT NULL DEFAULT '0',
  `suivre_encheres` enum('0','1') NOT NULL DEFAULT '0',
  `suivi_entreprise` enum('0','1') NOT NULL DEFAULT '0',
  `envoi_boamp` enum('0','1') NOT NULL DEFAULT '0',
  `acces_classement_lot` enum('0','1') NOT NULL DEFAULT '0',
  `connecteur_sis` enum('0','1') NOT NULL DEFAULT '0',
  `connecteur_marco` enum('0','1') NOT NULL DEFAULT '0',
  `repondre_aux_questions` enum('0','1') NOT NULL DEFAULT '0',
  `appel_projet_formation` enum('0','1') NOT NULL DEFAULT '0',
  `utiliser_client_CAO` enum('0','1') NOT NULL DEFAULT '1',
  `notification_boamp` enum('0','1') NOT NULL DEFAULT '1',
  `administrer_compte` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_mapa` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_type_validation` enum('0','1') NOT NULL DEFAULT '0',
  `approuver_consultation` enum('0','1') NOT NULL DEFAULT '0',
  `administrer_procedure` enum('0','1') NOT NULL DEFAULT '0',
  `restreindre_creation` enum('0','1') NOT NULL DEFAULT '0',
  `creer_liste_marches` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_commissions` enum('0','1') NOT NULL DEFAULT '0',
  `suivi_seul_consultation` enum('0','1') NOT NULL DEFAULT '0',
  `attribution_marche` enum('0','1') NOT NULL DEFAULT '0',
  `fiche_recensement` enum('0','1') NOT NULL DEFAULT '0',
  `declarer_infructueux` enum('0','1') NOT NULL DEFAULT '0',
  `declarer_sans_suite` enum('0','1') NOT NULL DEFAULT '0',
  `creer_consultation_transverse` enum('0','1') NOT NULL DEFAULT '0',
  `ouvrir_candidature_en_ligne` enum('0','1') NOT NULL DEFAULT '0',
  `ouvrir_candidature_a_distance` enum('0','1') NOT NULL DEFAULT '0',
  `refuser_enveloppe` enum('0','1') NOT NULL DEFAULT '0',
  `gerer_admissibilite` enum('0','1') NOT NULL DEFAULT '0',
  `restaurer_enveloppe` enum('0','1') NOT NULL DEFAULT '0',
  `ouvrir_offre_en_ligne` enum('0','1') NOT NULL DEFAULT '0',
  `ouvrir_anonymat_en_ligne` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_compte_boamp` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_agents` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_habilitations` enum('0','1') NOT NULL DEFAULT '0',
  `gerer_mapa_inferieur_montant` enum('0','1') NOT NULL DEFAULT '0',
  `gerer_mapa_superieur_montant` enum('0','1') NOT NULL DEFAULT '0',
  `modifier_consultation_avant_validation` enum('0','1') NOT NULL DEFAULT '0',
  `modifier_consultation_apres_validation` enum('0','1') NOT NULL DEFAULT '0',
  `acces_reponses` enum('0','1') NOT NULL DEFAULT '0',
  `telechargement_groupe_anticipe_plis_chiffres` enum('0','1') NOT NULL DEFAULT '0',
  `telechargement_unitaire_plis_chiffres` enum('0','1') NOT NULL DEFAULT '0',
  `ouvrir_offre_a_distance` enum('0','1') NOT NULL DEFAULT '0',
  `creer_annonce_information` enum('0','1') NOT NULL DEFAULT '0',
  `saisie_marches` enum('0','1') NOT NULL DEFAULT '0',
  `validation_marches` enum('0','1') NOT NULL DEFAULT '0',
  `publication_marches` enum('0','1') NOT NULL DEFAULT '0',
  `gerer_statistiques_metier` enum('0','1') NOT NULL DEFAULT '0',
  `gerer_archives` enum('0','1') NOT NULL DEFAULT '0',
  `administrer_procedures_formalisees` enum('0','1') NOT NULL DEFAULT '0',
  `creer_annonce_attribution` enum('0','1') NOT NULL DEFAULT '0',
  `acces_registre_retraits_electronique` enum('0','1') NOT NULL DEFAULT '1',
  `acces_registre_questions_electronique` enum('0','1') NOT NULL DEFAULT '1',
  `acces_registre_depots_electronique` enum('0','1') NOT NULL DEFAULT '1',
  `validation_simple` enum('0','1') NOT NULL DEFAULT '1',
  `validation_intermediaire` enum('0','1') NOT NULL DEFAULT '1',
  `validation_finale` enum('0','1') NOT NULL DEFAULT '1',
  `creer_suite_consultation` enum('0','1') NOT NULL DEFAULT '1',
  `hyper_admin` enum('0','1') NOT NULL DEFAULT '0',
  `droit_gestion_services` enum('0','1') NOT NULL DEFAULT '0',
  `suivi_acces` enum('0','1') NOT NULL DEFAULT '0',
  `statistiques_site` enum('0','1') NOT NULL DEFAULT '0',
  `statistiques_QoS` enum('0','1') NOT NULL DEFAULT '0',
  `ouvrir_anonymat_a_distance` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_compte_jal` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_centrale_pub` enum('0','1') DEFAULT '0',
  `Gestion_Compte_Groupe_Moniteur` enum('0','1') NOT NULL,
  `ouvrir_offre_technique_en_ligne` enum('0','1') NOT NULL,
  `ouvrir_offre_technique_a_distance` enum('0','1') NOT NULL,
  `activation_compte_entreprise` enum('0','1') DEFAULT '0',
  `importer_enveloppe` enum('0','1') NOT NULL DEFAULT '0',
  `suivi_seul_registre_depots_papier` enum('0','1') NOT NULL DEFAULT '0',
  `suivi_seul_registre_retraits_papier` enum('0','1') NOT NULL DEFAULT '0',
  `suivi_seul_registre_questions_papier` enum('0','1') NOT NULL DEFAULT '0',
  `suivi_seul_registre_depots_electronique` enum('0','1') NOT NULL DEFAULT '1',
  `suivi_seul_registre_retraits_electronique` enum('0','1') NOT NULL DEFAULT '1',
  `suivi_seul_registre_questions_electronique` enum('0','1') NOT NULL DEFAULT '1',
  `modifier_consultation_mapa_inferieur_montant_apres_validation` enum('0','1') NOT NULL DEFAULT '1',
  `modifier_consultation_mapa_superieur_montant_apres_validation` enum('0','1') NOT NULL DEFAULT '1',
  `modifier_consultation_procedures_formalisees_apres_validation` enum('0','1') NOT NULL DEFAULT '1',
  `gerer_les_entreprises` enum('0','1') DEFAULT '0',
  `portee_societes_exclues` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet ? l''agent de creer une soci?t? exclue pour un organisme',
  `portee_societes_exclues_tous_organismes` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet ? l''agent de creer une soci?t? exclue pour un organisme pour l''ensemble des organismes',
  `modifier_societes_exclues` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet ? l''agent de modifier une societe exclue',
  `supprimer_societes_exclues` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet ? l''agent de supprimer une societe exclue',
  `resultat_analyse` enum('0','1') NOT NULL DEFAULT '0',
  `gerer_adresses_service` enum('0','1') DEFAULT '0',
  `gerer_mon_service` enum('0','1') DEFAULT '0',
  `download_archives` enum('0','1') DEFAULT '0',
  `creer_annonce_extrait_pv` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Gère l''habilitation pour la gestion des type d''annonce ''Annonce_extrait_pv''',
  `creer_annonce_rapport_achevement` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Gère l''habilitation pour la gestion des type d''annonce ''Annonce_rapport_achevement''',
  `gestion_certificats_agent` enum('0','1') DEFAULT '0',
  `creer_avis_programme_previsionnel` enum('0','1') DEFAULT '0',
  `annuler_consultation` enum('0','1') DEFAULT '0',
  `envoyer_publicite` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Conditionne l''affichage du bouton "Envoyer" dans les colonnes "Actions" des tableaux "Liste des destinataires"',
  `liste_marches_notifies` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''acc?der ? la page de recherche avanc?e des march?s notifi?s.',
  `suivre_message` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Donne la possibilit? de suivre les messages via l''interface des d?tails de la consultation.',
  `envoyer_message` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Donne la possibilit? d''envoyer des messages via l''interface des details de la consultation.',
  `suivi_flux_chorus_transversal` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''activer l''acc?s ? la fonctionnalit? de recherche avanc?e des ?changes',
  `gestion_mandataire` enum('0','1') DEFAULT '0',
  `gerer_newsletter` enum('0','1') DEFAULT '0' COMMENT 'permet de gerer la newsletter',
  `gestion_modeles_formulaire` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet de gerer les modeles de formulaires',
  `gestion_adresses_facturation_jal` enum('0','1') NOT NULL DEFAULT '0',
  `administrer_adresses_facturation_jal` enum('0','1') NOT NULL DEFAULT '0',
  `redaction_documents_redac` enum('0','1') NOT NULL DEFAULT '0',
  `validation_documents_redac` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_mise_disposition_pieces_marche` enum('0','1') NOT NULL DEFAULT '0',
  `annuaire_acheteur` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet de gerer la recherche des acheteur public',
  `reprendre_integralement_article` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Reprendre int?gralement un article REDAC',
  `administrer_clauses` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Administrer les clauses REDAC',
  `valider_clauses` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Valider les clauses REDAC',
  `administrer_canevas` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Administrer les canevas REDAC',
  `valider_canevas` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Valider les canevas REDAC',
  `administrer_clauses_entite_achats` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Administrer les clauses Entit? d Achats REDAC',
  `generer_pieces_format_odt` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'G?n?rer les pi?ces au format odt (?ditable) REDAC',
  `publier_version_clausier_editeur` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Publier une version de clausier Editeur REDAC',
  `administrer_clauses_editeur` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Administrer les clauses editeur REDAC',
  `valider_clauses_editeur` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Valider les clauses editeur REDAC',
  `administrer_canevas_editeur` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Administrer les canevas editeur REDAC',
  `valider_canevas_editeur` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Valider les canevas editeur REDAC',
  `decision_suivi_seul` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet de t?l?charger les plis et acc?der ? la d?cision en lecture seule',
  `ouvrir_candidature_hors_ligne` enum('0','1') NOT NULL DEFAULT '1',
  `ouvrir_offre_hors_ligne` enum('0','1') NOT NULL DEFAULT '1',
  `ouvrir_offre_technique_hors_ligne` enum('0','1') NOT NULL DEFAULT '1',
  `ouvrir_anonymat_hors_ligne` enum('0','1') NOT NULL DEFAULT '1',
  `espace_collaboratif_gestionnaire` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet la cr?ation d''un Espace collaboratif',
  `espace_collaboratif_contributeur` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet la visualisation d''un Espace collaboratif',
  `gerer_organismes` enum('0','1') NOT NULL DEFAULT '0',
  `gerer_associations_agents` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Associer ? un autre compte',
  `module_redaction_uniquement` enum('0','1') DEFAULT '0',
  `historique_navigation_inscrits` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Acceder a l historique de navigation des inscrits ',
  `telecharger_accords_cadres` enum('0','1') NOT NULL DEFAULT '0',
  `creer_annonce_decision_resiliation` enum('0','1') NOT NULL DEFAULT '0',
  `creer_annonce_synthese_rapport_audit` enum('0','1') NOT NULL DEFAULT '0',
  `gerer_operations` enum('0','1') NOT NULL DEFAULT '0',
  `telecharger_siret_acheteur` enum('0','1') DEFAULT '0',
  `gerer_reouvertures_modification` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Cette habilitation g?re la pr?sence ou non du bouton "Demande de compl?ment"(AOF)',
  `envoyer_demande_validation` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet d envoyer une demande de validation du dce au controleur de l etat ',
  `suivre_consultation_organisme` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'invite permanent a toute les cons de l organisme ',
  `renseigner_montant` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_referentiel_contact` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Helios_cosignature`
--

CREATE TABLE `Helios_cosignature` (
  `id_fichier` int(20) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `signature_acte` varchar(20) NOT NULL,
  `horodatage_acte` longblob NOT NULL,
  `untrusteddate_acte` varchar(20) NOT NULL,
  `taille_acte` varchar(20) NOT NULL,
  `id_Blob` varchar(20) NOT NULL,
  `idEnveloppe` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Helios_piece_publicite`
--

CREATE TABLE `Helios_piece_publicite` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `nom_fichier` varchar(100) NOT NULL DEFAULT '',
  `fichier` int(11) NOT NULL DEFAULT '0',
  `horodatage` longblob NOT NULL,
  `untrusteddate` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `taille` varchar(20) NOT NULL DEFAULT '1',
  `consultation_ref` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Helios_pv_consultation`
--

CREATE TABLE `Helios_pv_consultation` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `consultation_ref` int(11) NOT NULL DEFAULT '0',
  `nom_fichier` varchar(100) NOT NULL DEFAULT '',
  `fichier` int(11) NOT NULL DEFAULT '0',
  `horodatage` longblob NOT NULL,
  `untrusteddate` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `taille` varchar(20) NOT NULL DEFAULT '0',
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Helios_rapport_prefet`
--

CREATE TABLE `Helios_rapport_prefet` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `consultation_ref` int(11) NOT NULL DEFAULT '0',
  `nom_fichier` varchar(100) NOT NULL DEFAULT '',
  `fichier` int(11) NOT NULL DEFAULT '0',
  `horodatage` longblob NOT NULL,
  `untrusteddate` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `taille` varchar(20) NOT NULL DEFAULT '0',
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Helios_tableau_ar`
--

CREATE TABLE `Helios_tableau_ar` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `consultation_ref` int(11) NOT NULL DEFAULT '0',
  `nom_fichier` varchar(100) NOT NULL DEFAULT '',
  `description` longtext,
  `fichier` int(11) NOT NULL DEFAULT '0',
  `horodatage` longblob NOT NULL,
  `untrusteddate` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `taille` varchar(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Helios_teletransmission`
--

CREATE TABLE `Helios_teletransmission` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `shown_id` varchar(20) NOT NULL DEFAULT '',
  `id_agent_creation` int(11) NOT NULL DEFAULT '0',
  `consultation_ref` int(11) DEFAULT NULL,
  `publicite_cons` char(20) DEFAULT NULL,
  `dce_items` varchar(255) DEFAULT NULL,
  `ids_pvs_cao` varchar(255) DEFAULT NULL,
  `ids_rapports_prefet` varchar(255) DEFAULT NULL,
  `deliberation_mapa` char(1) DEFAULT NULL,
  `tableau_ar` int(11) DEFAULT NULL,
  `date_creation` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_envoi` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_agent_envoi` int(11) NOT NULL DEFAULT '0',
  `nom_piecej1` varchar(250) NOT NULL DEFAULT '',
  `piecej1` int(11) NOT NULL DEFAULT '0',
  `horodatage_piecej1` longblob NOT NULL,
  `untrusteddate_piecej1` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `taille_piecej1` varchar(20) NOT NULL DEFAULT '',
  `nom_piecej2` varchar(250) NOT NULL DEFAULT '',
  `piecej2` int(11) NOT NULL DEFAULT '0',
  `horodatage_piecej2` longblob NOT NULL,
  `untrusteddate_piecej2` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `taille_piecej2` varchar(20) NOT NULL DEFAULT '',
  `piecej1_desc` longtext,
  `piecej2_desc` longtext,
  `fichier_xml` longblob NOT NULL,
  `nom_dossierzip` varchar(250) NOT NULL DEFAULT '',
  `taille_dossierzip` varchar(250) NOT NULL DEFAULT '',
  `objet_libre` varchar(250) NOT NULL DEFAULT '',
  `commentaire_libre` varchar(250) NOT NULL DEFAULT '',
  `sig_piece_principale` longblob NOT NULL,
  `ref_utilisateur` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Helios_teletransmission_lot`
--

CREATE TABLE `Helios_teletransmission_lot` (
  `id_teletransmission` int(11) NOT NULL DEFAULT '0',
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `lot` int(11) NOT NULL DEFAULT '0',
  `numero_marche` varchar(250) NOT NULL DEFAULT '',
  `ids_env_actes_engagements` varchar(255) NOT NULL DEFAULT '',
  `ids_enveloppes_items` varchar(255) NOT NULL DEFAULT '',
  `ids_docs_acceptes` varchar(255) NOT NULL DEFAULT '',
  `ids_msg_notif` varchar(255) NOT NULL DEFAULT '',
  `lot_in_transmission` char(1) NOT NULL DEFAULT '',
  `statut_envoi` int(11) NOT NULL DEFAULT '1',
  `id_zip_send` varchar(40) DEFAULT NULL,
  `nom_lettre_commande` varchar(100) DEFAULT NULL,
  `lettre_commande` int(20) DEFAULT NULL,
  `horodatage` varchar(20) NOT NULL DEFAULT '',
  `untrusteddate` varchar(20) NOT NULL DEFAULT '',
  `taille` varchar(20) NOT NULL DEFAULT '',
  `valider_comptable` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `historiques_consultation`
--

CREATE TABLE `historiques_consultation` (
  `id` int(50) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `ref_consultation` int(50) NOT NULL DEFAULT '0',
  `statut` char(1) NOT NULL DEFAULT '',
  `id_agent` int(50) NOT NULL DEFAULT '0',
  `nom_agent` varchar(250) NOT NULL DEFAULT '',
  `prenom_agent` varchar(250) NOT NULL DEFAULT '',
  `nom_element` varchar(250) NOT NULL DEFAULT '',
  `valeur` varchar(250) NOT NULL DEFAULT '',
  `valeur_detail_1` varchar(250) NOT NULL DEFAULT '',
  `valeur_detail_2` varchar(250) NOT NULL DEFAULT '',
  `numero_lot` varchar(250) NOT NULL DEFAULT '',
  `horodatage` longblob,
  `untrusteddate` varchar(20) DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Historique_Avis_Pub`
--

CREATE TABLE `Historique_Avis_Pub` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_avis` int(11) NOT NULL,
  `date_modification` varchar(20) NOT NULL,
  `detail_statut` int(11) NOT NULL,
  `motif_rejet` varchar(255) DEFAULT NULL COMMENT 'Permet de stocker le motif du rejet lorsque l''avis est rejet?',
  `prenom_agent` varchar(255) NOT NULL COMMENT 'Permet de renseigner le pr?nom de l''agent qui ?ffectue l''action',
  `nom_agent` varchar(255) NOT NULL COMMENT 'Permet de renseigner le nom de l''agent qui ?ffectue l''action',
  `type_historique` int(2) NOT NULL DEFAULT '0' COMMENT 'Permet de differencier entre l''historique de l''avis global et des supports de l''avis. 0 pour l''avais et (1,2,3) pour les supports respectifs (opoce,presse,plateforme)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Historique_suppression_agent`
--

CREATE TABLE `Historique_suppression_agent` (
  `id` int(11) NOT NULL,
  `id_agent_suppresseur` int(8) NOT NULL DEFAULT '0',
  `id_service` int(8) DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `organisme` varchar(100) DEFAULT NULL,
  `date_suppression` varchar(20) NOT NULL DEFAULT '',
  `id_agent_supprime` int(8) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Inscrit`
--

CREATE TABLE `Inscrit` (
  `id` int(11) NOT NULL,
  `entreprise_id` int(11) NOT NULL DEFAULT '0',
  `login` varchar(50) DEFAULT NULL,
  `mdp` varchar(40) DEFAULT NULL,
  `num_cert` varchar(64) DEFAULT NULL,
  `cert` mediumtext,
  `civilite` tinyint(1) NOT NULL DEFAULT '0',
  `nom` varchar(30) NOT NULL DEFAULT '',
  `prenom` varchar(30) NOT NULL DEFAULT '',
  `adresse` varchar(80) NOT NULL DEFAULT '',
  `codepostal` varchar(20) NOT NULL DEFAULT '',
  `ville` varchar(50) NOT NULL DEFAULT '',
  `pays` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `telephone` varchar(20) NOT NULL DEFAULT '',
  `categorie` text,
  `motstitreresume` mediumtext,
  `periode` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `siret` varchar(5) NOT NULL,
  `fax` varchar(20) NOT NULL DEFAULT '',
  `code_cpv` text,
  `id_langue` int(11) DEFAULT NULL,
  `profil` int(1) NOT NULL DEFAULT '1',
  `adresse2` varchar(80) DEFAULT NULL,
  `bloque` enum('0','1') NOT NULL DEFAULT '0',
  `id_initial` int(11) NOT NULL DEFAULT '0',
  `inscrit_annuaire_defense` enum('0','1') NOT NULL,
  `date_creation` varchar(20) NOT NULL,
  `date_modification` varchar(20) NOT NULL,
  `tentatives_mdp` int(1) NOT NULL DEFAULT '0',
  `uid` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `InscritHistorique`
--

CREATE TABLE `InscritHistorique` (
  `id` int(11) NOT NULL,
  `entreprise_id` int(11) NOT NULL DEFAULT '0',
  `inscrit1` varchar(64) NOT NULL DEFAULT '',
  `mail1` varchar(64) NOT NULL DEFAULT '',
  `inscrit2` varchar(64) NOT NULL DEFAULT '',
  `mail2` varchar(64) NOT NULL DEFAULT '',
  `date` varchar(32) NOT NULL DEFAULT '',
  `action` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Historiques des actions ';

-- --------------------------------------------------------

--
-- Structure de la table `inscrit_depot_selection_lots`
--

CREATE TABLE `inscrit_depot_selection_lots` (
  `id` int(11) NOT NULL,
  `inscrit_id` int(11) NOT NULL,
  `consultation_ref` int(11) NOT NULL,
  `lots` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Inscrit_Sub`
--

CREATE TABLE `Inscrit_Sub` (
  `id` int(11) NOT NULL,
  `entreprise_id` int(11) NOT NULL DEFAULT '0',
  `login` varchar(50) DEFAULT NULL,
  `mdp` varchar(40) DEFAULT NULL,
  `nom` varchar(30) NOT NULL DEFAULT '',
  `prenom` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `profil` int(1) NOT NULL DEFAULT '1',
  `id_inscrit` int(11) NOT NULL DEFAULT '0',
  `date_creation` varchar(20) NOT NULL DEFAULT '',
  `date_modification` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `interfacage_exec_parapheur_organisme`
--

CREATE TABLE `interfacage_exec_parapheur_organisme` (
  `id` int(11) NOT NULL,
  `org` varchar(20) NOT NULL,
  `id_entite_parapheur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `InterfaceTypeProcedure`
--

CREATE TABLE `InterfaceTypeProcedure` (
  `id` int(11) NOT NULL,
  `type_procedure_sis` varchar(10) DEFAULT NULL,
  `type_procedure_marco` varchar(10) DEFAULT NULL,
  `type_procedure` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `InterneConsultation`
--

CREATE TABLE `InterneConsultation` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `interne_id` int(11) NOT NULL DEFAULT '0',
  `consultation_ref` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `InterneConsultationSuiviSeul`
--

CREATE TABLE `InterneConsultationSuiviSeul` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `interne_id` int(11) NOT NULL DEFAULT '0',
  `consultation_ref` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `InvitationConsultationTransverse`
--

CREATE TABLE `InvitationConsultationTransverse` (
  `id` int(11) NOT NULL,
  `organisme_emetteur` varchar(30) NOT NULL DEFAULT '',
  `reference` varchar(255) NOT NULL DEFAULT '',
  `organisme_invite` varchar(30) NOT NULL DEFAULT '',
  `lot` int(11) NOT NULL DEFAULT '0',
  `date_decision` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `invitation_visio`
--

CREATE TABLE `invitation_visio` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `interne_id` int(11) NOT NULL DEFAULT '0',
  `consultation_ref` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ItemCritereEvaluation`
--

CREATE TABLE `ItemCritereEvaluation` (
  `id` int(11) NOT NULL,
  `idCritereEvaluation` int(11) NOT NULL,
  `libelle` text NOT NULL,
  `prix` enum('0','1') NOT NULL DEFAULT '0',
  `quantite` int(11) DEFAULT NULL,
  `ponderation` int(11) DEFAULT NULL,
  `numero` int(11) NOT NULL,
  `regle_evaluation` int(1) NOT NULL,
  `type_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ItemFormulaire`
--

CREATE TABLE `ItemFormulaire` (
  `id` int(11) NOT NULL,
  `idModeleFormulaire` int(11) NOT NULL,
  `libelle` text NOT NULL,
  `commentaire_acheteur` text NOT NULL,
  `prix_unitaire` enum('0','1') NOT NULL DEFAULT '0',
  `quantite` varchar(11) NOT NULL,
  `precision_entreprise` int(1) NOT NULL,
  `type_reponse` varchar(30) NOT NULL,
  `obligatoire` enum('0','1') NOT NULL DEFAULT '1',
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ItemFormulaireConsultation`
--

CREATE TABLE `ItemFormulaireConsultation` (
  `id` int(11) NOT NULL,
  `idFormulaireConsultation` int(11) NOT NULL,
  `libelle` text NOT NULL,
  `commentaire_acheteur` text NOT NULL,
  `prix_unitaire` enum('0','1') NOT NULL DEFAULT '0',
  `quantite` varchar(11) NOT NULL,
  `precision_entreprise` int(1) NOT NULL,
  `type_reponse` varchar(30) NOT NULL,
  `obligatoire` enum('0','1') NOT NULL DEFAULT '1',
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `JAL`
--

CREATE TABLE `JAL` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_service` int(11) NOT NULL DEFAULT '0',
  `nom` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `email_ar` varchar(100) NOT NULL DEFAULT '',
  `telecopie` varchar(20) NOT NULL DEFAULT '',
  `information_facturation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Journaux`
--

CREATE TABLE `Journaux` (
  `ID_JOURNAL` int(20) NOT NULL,
  `ORGANISME` varchar(30) NOT NULL,
  `ID_CENTRALE` int(20) NOT NULL DEFAULT '0',
  `NOM_JOURNAL` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Justificatifs`
--

CREATE TABLE `Justificatifs` (
  `id` int(11) NOT NULL,
  `intitule_justificatif` varchar(255) NOT NULL DEFAULT '',
  `id_entreprise` int(11) NOT NULL DEFAULT '0',
  `taille` varchar(80) NOT NULL DEFAULT '',
  `justificatif` int(11) NOT NULL,
  `statut` enum('0','1') NOT NULL DEFAULT '0',
  `id_document` int(11) DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `nom_fr` varchar(100) DEFAULT '',
  `nom_en` varchar(100) DEFAULT '',
  `nom_es` varchar(100) DEFAULT '',
  `nom_su` varchar(100) DEFAULT '',
  `nom_du` varchar(100) DEFAULT '',
  `nom_cz` varchar(100) DEFAULT '',
  `nom_ar` varchar(100) DEFAULT '',
  `nom_it` varchar(100) DEFAULT '',
  `date_fin_validite` date NOT NULL DEFAULT '0000-00-00',
  `visible_par_agents` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Langue`
--

CREATE TABLE `Langue` (
  `id_langue` int(11) NOT NULL,
  `langue` varchar(10) NOT NULL DEFAULT '',
  `active` enum('0','1') NOT NULL DEFAULT '0',
  `defaut` enum('0','1') DEFAULT '0',
  `theme_specifique` enum('0','1') NOT NULL DEFAULT '0',
  `obligatoire_pour_publication_consultation` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `LieuExecution`
--

CREATE TABLE `LieuExecution` (
  `id` int(22) NOT NULL DEFAULT '0',
  `libelle` varchar(255) NOT NULL DEFAULT '',
  `CodePostal_ANM` varchar(5) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Ligne_DA`
--

CREATE TABLE `Ligne_DA` (
  `id` int(11) NOT NULL,
  `Num_ordre` varchar(100) DEFAULT NULL,
  `code_article_specifique` varchar(255) DEFAULT NULL,
  `libelle_article_specifique` varchar(255) DEFAULT NULL,
  `detail_article_specifique` varchar(255) DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL,
  `unite` varchar(100) DEFAULT NULL,
  `prix_unitaire` varchar(100) DEFAULT NULL,
  `Montant_total` varchar(100) DEFAULT NULL,
  `quantite_min` int(11) DEFAULT NULL,
  `quantite_max` int(11) DEFAULT NULL,
  `DA_Consultation_ref` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `liste_present_commission`
--

CREATE TABLE `liste_present_commission` (
  `id` int(11) NOT NULL,
  `ref_consultation` varchar(255) NOT NULL,
  `type_enveloppe` int(11) NOT NULL,
  `id_agent` int(11) NOT NULL,
  `identifiant` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_connexion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Lt_Referentiel`
--

CREATE TABLE `Lt_Referentiel` (
  `id` int(11) NOT NULL,
  `code_libelle` varchar(200) NOT NULL,
  `entreprise` enum('0','1') NOT NULL DEFAULT '0',
  `consultation` enum('0','1') NOT NULL DEFAULT '0',
  `lot` enum('0','1') NOT NULL DEFAULT '0',
  `agent` enum('0','1') NOT NULL DEFAULT '0',
  `obligatoire` enum('0','1') NOT NULL DEFAULT '0',
  `type_search` enum('0','1','2','3','4') NOT NULL DEFAULT '0' COMMENT '''0'' : recherche seulement du code fourni.// ''1'' : recherche du code fourni et ses ascendants.// ''2'' : recherche du code fourni et ses descendants.// ''3'' : recherche du code fourni, ses ascendants et ses descendants.//''4'' : recherche dans un interval donn?',
  `pages` varchar(400) DEFAULT NULL,
  `path_config` varchar(200) DEFAULT NULL,
  `mode_affichage` varchar(20) DEFAULT NULL,
  `mode_modification` varchar(20) DEFAULT NULL,
  `mode_recherche` varchar(20) DEFAULT NULL,
  `Type` enum('0','1','2') NOT NULL DEFAULT '0',
  `organismes` varchar(400) DEFAULT NULL COMMENT 'Mettre null si le r?f?rentiel pour tout les organismes sinon mettre la liste des organismes s?par?s par # exemple : #a1a#a2a# (commencer et terminer par #)',
  `libelle_info_bulle` varchar(200) DEFAULT NULL COMMENT 'Contient le message d''info bulle pour ce r?f?rentiel',
  `logo` varchar(200) DEFAULT NULL,
  `defaultValue` varchar(255) DEFAULT NULL COMMENT 'contient la valeur par defait du referentiel',
  `dependance_allotissement` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet de gerer si le referentiel depond du lot si la consultation est allotie',
  `data_type` varchar(255) DEFAULT NULL COMMENT 'Mettre le nom de type des données à enregistrer dans le champ ; exemple : MONTANT,TEXT,...'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mandataire`
--

CREATE TABLE `mandataire` (
  `id` int(11) NOT NULL,
  `id_groupement` int(11) NOT NULL,
  `id_entreprise` int(11) DEFAULT NULL,
  `id_inscrit` int(11) DEFAULT NULL,
  `type_mandataire` enum('1','2') NOT NULL COMMENT '1=>mandataire, 2=> cotraitant',
  `rc_ville` int(11) NOT NULL,
  `rc_numero` int(11) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `statut_invitation` enum('0','1','2') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Mandataire_service`
--

CREATE TABLE `Mandataire_service` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `service_id` int(11) NOT NULL,
  `mandataire` int(11) NOT NULL,
  `commentaire` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Marche`
--

CREATE TABLE `Marche` (
  `id` int(11) UNSIGNED NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `idMarcheTrancheBudgetaire` int(11) UNSIGNED DEFAULT '0',
  `numeroMarcheAnnee` int(11) UNSIGNED DEFAULT '0',
  `idService` int(11) DEFAULT '0',
  `nomAttributaire` varchar(255) DEFAULT NULL,
  `dateNotification` date NOT NULL DEFAULT '0000-00-00',
  `codePostal` varchar(20) DEFAULT NULL,
  `natureMarche` varchar(30) DEFAULT '1',
  `objetMarche` longtext,
  `montantMarche` varchar(50) DEFAULT '0',
  `valide` enum('0','1') NOT NULL DEFAULT '0',
  `isManuel` enum('0','1') NOT NULL DEFAULT '0',
  `pmePmi` int(11) DEFAULT '0',
  `id_decision_enveloppe` int(11) NOT NULL,
  `ville` varchar(20) DEFAULT NULL,
  `acronymePays_Attributaire` varchar(10) DEFAULT NULL,
  `pays_Attributaire` varchar(50) DEFAULT NULL,
  `siren_Attributaire` varchar(20) DEFAULT NULL,
  `nic_Attributaire` varchar(6) DEFAULT NULL,
  `identifiantNational_Attributaire` varchar(50) DEFAULT NULL,
  `rc_ville_attributaire` varchar(250) DEFAULT NULL,
  `rc_num_attributaire` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `MarchePublie`
--

CREATE TABLE `MarchePublie` (
  `id` int(11) UNSIGNED NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `numeroMarcheAnnee` int(11) UNSIGNED DEFAULT '0',
  `idService` int(11) DEFAULT '0',
  `isPubliee` enum('0','1') NOT NULL DEFAULT '0',
  `isImportee` enum('0','1') NOT NULL DEFAULT '0',
  `newVersion` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Mesure_avancement`
--

CREATE TABLE `Mesure_avancement` (
  `id_mesure` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_service` int(11) NOT NULL,
  `annee` varchar(4) NOT NULL,
  `trimestre` char(2) NOT NULL,
  `siren` varchar(9) NOT NULL,
  `nic` varchar(5) NOT NULL,
  `identifiant_service` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `type_pouvoir_adjudicateur` int(11) NOT NULL,
  `departement` int(11) NOT NULL,
  `date_envoi` varchar(20) DEFAULT NULL,
  `date_accuse` varchar(20) DEFAULT NULL,
  `etat` varchar(5) DEFAULT 'BR',
  `date_creation` varchar(20) NOT NULL,
  `xml` longtext,
  `name_xml_genere` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Mesure_Type_Procedure`
--

CREATE TABLE `Mesure_Type_Procedure` (
  `id_tag_name` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `libelle_tag_name` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ModeleFormulaire`
--

CREATE TABLE `ModeleFormulaire` (
  `id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `type_formulaire` int(1) NOT NULL,
  `id_type_procedure` int(1) DEFAULT NULL,
  `id_categorie` int(10) DEFAULT NULL,
  `code_cpv_1` varchar(8) DEFAULT NULL,
  `code_cpv_2` varchar(255) DEFAULT NULL,
  `organisme` varchar(30) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `date_creation` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modification` varchar(20) DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mode_execution_contrat`
--

CREATE TABLE `mode_execution_contrat` (
  `id` int(11) NOT NULL DEFAULT '0',
  `libelle` varchar(255) DEFAULT NULL,
  `libelle_fr` varchar(255) DEFAULT NULL,
  `libelle_en` varchar(255) DEFAULT NULL,
  `libelle_es` varchar(255) DEFAULT NULL,
  `libelle_su` varchar(255) DEFAULT NULL,
  `libelle_du` varchar(255) DEFAULT NULL,
  `libelle_cz` varchar(255) DEFAULT NULL,
  `libelle_ar` varchar(255) DEFAULT NULL,
  `libelle_it` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `nature_acte_juridique`
--

CREATE TABLE `nature_acte_juridique` (
  `id` int(11) NOT NULL DEFAULT '0',
  `libelle` varchar(50) DEFAULT NULL,
  `libelle_fr` varchar(50) DEFAULT NULL,
  `libelle_en` varchar(50) DEFAULT NULL,
  `libelle_es` varchar(50) DEFAULT NULL,
  `libelle_su` varchar(50) DEFAULT NULL,
  `libelle_du` varchar(50) DEFAULT NULL,
  `libelle_cz` varchar(50) DEFAULT NULL,
  `libelle_ar` varchar(50) DEFAULT NULL,
  `libelle_it` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Newsletter`
--

CREATE TABLE `Newsletter` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `objet` varchar(255) NOT NULL DEFAULT '',
  `corps` text NOT NULL,
  `id_service_redacteur` int(11) NOT NULL,
  `nom_redacteur` varchar(100) NOT NULL,
  `prenom_redacteur` varchar(100) NOT NULL,
  `envoye_par_nom` varchar(100) DEFAULT NULL,
  `envoye_par_prenom` varchar(100) DEFAULT NULL,
  `envoye_par_email` varchar(100) DEFAULT NULL,
  `date_creation` varchar(25) NOT NULL,
  `date_derniere_modification` varchar(25) DEFAULT NULL,
  `date_envoi` varchar(25) DEFAULT NULL,
  `id_service_destinataire` varchar(11) DEFAULT NULL,
  `statut` int(2) DEFAULT NULL,
  `destinataires` text,
  `inclure_services_descendants` enum('0','1') NOT NULL DEFAULT '0',
  `type_destinataire` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `NewsletterPieceJointe`
--

CREATE TABLE `NewsletterPieceJointe` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_newsletter` int(11) NOT NULL DEFAULT '0',
  `nom_fichier` varchar(100) NOT NULL DEFAULT '',
  `piece` int(11) NOT NULL DEFAULT '0',
  `horodatage` longblob NOT NULL,
  `untrusteddate` varchar(25) NOT NULL DEFAULT '',
  `taille` varchar(25) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Numerotation_ref_cons_auto`
--

CREATE TABLE `Numerotation_ref_cons_auto` (
  `id_auto` int(11) UNSIGNED NOT NULL,
  `id_cons_auto` int(11) NOT NULL DEFAULT '0',
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `annee` year(4) NOT NULL DEFAULT '0000',
  `service_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Offres`
--

CREATE TABLE `Offres` (
  `id` int(22) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `consultation_ref` int(11) NOT NULL DEFAULT '0',
  `entreprise_id` int(22) NOT NULL DEFAULT '0',
  `inscrit_id` int(22) NOT NULL DEFAULT '0',
  `signatureenvxml` longblob NOT NULL,
  `horodatage` longblob NOT NULL,
  `mailsignataire` varchar(80) NOT NULL DEFAULT '',
  `untrusteddate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `untrustedserial` varchar(40) NOT NULL DEFAULT '',
  `envoi_complet` char(1) NOT NULL DEFAULT '',
  `date_depot_differe` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `horodatage_envoi_differe` longblob NOT NULL,
  `signatureenvxml_envoi_differe` longblob NOT NULL,
  `external_serial` varchar(8) DEFAULT NULL,
  `internal_serial` varchar(8) DEFAULT NULL,
  `uid_offre` varchar(40) NOT NULL DEFAULT '',
  `offre_selectionnee` int(11) NOT NULL DEFAULT '0',
  `Observation` text,
  `xml_string` longtext NOT NULL,
  `nom_entreprise_inscrit` varchar(30) DEFAULT NULL,
  `nom_inscrit` varchar(80) DEFAULT NULL,
  `prenom_inscrit` varchar(80) DEFAULT NULL,
  `adresse_inscrit` varchar(100) DEFAULT NULL,
  `adresse2_inscrit` varchar(100) DEFAULT NULL,
  `telephone_inscrit` varchar(20) DEFAULT NULL,
  `fax_inscrit` varchar(30) DEFAULT NULL,
  `code_postal_inscrit` varchar(5) DEFAULT NULL,
  `ville_inscrit` varchar(50) DEFAULT NULL,
  `pays_inscrit` varchar(50) DEFAULT NULL,
  `acronyme_pays` varchar(10) DEFAULT NULL,
  `siret_entreprise` varchar(14) DEFAULT NULL,
  `identifiant_national` varchar(20) DEFAULT NULL,
  `email_inscrit` varchar(100) DEFAULT NULL,
  `siret_inscrit` varchar(14) DEFAULT NULL,
  `nom_entreprise` varchar(30) DEFAULT NULL,
  `horodatage_annulation` longblob,
  `date_annulation` varchar(20) DEFAULT NULL,
  `signature_annulation` text,
  `depot_annule` enum('0','1') DEFAULT '0',
  `string_annulation` text,
  `verification_certificat_annulation` varchar(5) DEFAULT NULL,
  `offre_variante` enum('0','1') DEFAULT NULL,
  `reponse_pas_a_pas` enum('0','1') NOT NULL DEFAULT '0',
  `numero_reponse` int(11) NOT NULL,
  `statut_offres` int(2) DEFAULT NULL,
  `date_heure_ouverture` varchar(20) CHARACTER SET latin1 NOT NULL DEFAULT '0000-00-00 00:00:00',
  `agentid_ouverture` int(11) DEFAULT NULL,
  `agentid_ouverture2` int(11) DEFAULT NULL,
  `date_heure_ouverture_agent2` varchar(20) CHARACTER SET latin1 NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cryptage_reponse` char(1) NOT NULL DEFAULT '1',
  `nom_agent_ouverture` varchar(100) DEFAULT NULL,
  `agent_telechargement_offre` int(11) DEFAULT NULL,
  `date_telechargement_offre` varchar(20) DEFAULT NULL,
  `repertoire_telechargement_offre` varchar(100) DEFAULT NULL,
  `ifu_entreprise` varchar(100) DEFAULT NULL,
  `type_entreprise` enum('0','1','2','3') DEFAULT NULL COMMENT '0:PME,1:Auto-entrepreneur,2:Coopérative,3:Autre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `offre_caution`
--

CREATE TABLE `offre_caution` (
  `ID` int(11) NOT NULL,
  `ID_DEMANDE` int(11) NOT NULL,
  `REF_CONSULTATION` int(11) NOT NULL,
  `ID_OFFRE` int(11) NOT NULL,
  `TYPE_ENV` int(11) NOT NULL,
  `ID_ENTREPRISE` int(11) NOT NULL,
  `ID_INSCRIT` int(11) NOT NULL,
  `ACRONYME` varchar(10) NOT NULL,
  `INTITULE` varchar(100) NOT NULL,
  `LOT` int(11) DEFAULT NULL,
  `OBJET_LOT` varchar(250) DEFAULT NULL,
  `RAISON_SOCIALE` varchar(100) NOT NULL,
  `MONTANT` float NOT NULL,
  `DATE_DEMANDE` datetime DEFAULT NULL,
  `ID_STATUT_CAUTION` int(11) NOT NULL,
  `ID_COMPTE_BANCAIRE` int(11) NOT NULL,
  `ID_BLOB_DEMANDE` int(11) DEFAULT NULL,
  `NOM_DOC_DEMANDE` varchar(250) NOT NULL,
  `ID_BLOB_CAUTION` int(11) DEFAULT NULL,
  `NOM_DOC_CAUTION` varchar(250) DEFAULT NULL,
  `ID_INSCRIT_CREA` int(11) DEFAULT NULL,
  `DATE_CREA` datetime DEFAULT NULL,
  `IDENTIFIANT_BANCAIRE` varchar(100) NOT NULL,
  `ACHETEUR_PUBLIC` varchar(200) NOT NULL,
  `DATE_VALIDATION` datetime DEFAULT NULL,
  `DEPOT_ANNULE` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `offre_caution_signature`
--

CREATE TABLE `offre_caution_signature` (
  `ID` int(11) NOT NULL,
  `ID_OFFRE_CAUTION` int(11) NOT NULL,
  `ID_BLOB` int(11) NOT NULL,
  `REVISION` int(11) NOT NULL,
  `TYPE_DOCUMENT` enum('0','1') NOT NULL DEFAULT '0' COMMENT '''0'': demande ''1'' : caution',
  `DATE_SIGNATURE` datetime NOT NULL,
  `EMETTEUR` varchar(255) NOT NULL,
  `DETAIL_EMETTEUR` varchar(250) DEFAULT NULL,
  `SIGNATAIRE` varchar(255) NOT NULL,
  `DETAIL_SIGNATAIRE` varchar(250) DEFAULT NULL,
  `REVOQUE` enum('0','1') NOT NULL,
  `NON_REPUDIATION` enum('0','1') NOT NULL DEFAULT '0',
  `CHAINE_VALIDE` enum('0','1') NOT NULL,
  `DATE_DEB_PERIODE_VALIDITE` datetime NOT NULL,
  `DATE_FIN_PERIODE_VALIDITE` datetime NOT NULL,
  `PERIODE_VALIDITE` enum('0','1') NOT NULL DEFAULT '0',
  `SIGNATURE_VALIDE` enum('0','1') NOT NULL,
  `TYPE_SIGNATURE` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1 : XADES , 2 : PADES',
  `XML_SIGNATURE` text NOT NULL,
  `NOM_FICHIER` varchar(255) NOT NULL,
  `HASH` varchar(255) DEFAULT NULL,
  `ALGORITHME_HASH` varchar(50) DEFAULT NULL,
  `DATE_DERNIERE_VERIFICATION` datetime DEFAULT NULL COMMENT 'Date de la dernière vérification d''intégrité de la signature'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Offre_papier`
--

CREATE TABLE `Offre_papier` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `consultation_ref` int(11) NOT NULL DEFAULT '0',
  `nom_entreprise` varchar(30) NOT NULL DEFAULT '',
  `date_depot` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `external_serial` varchar(8) DEFAULT NULL,
  `internal_serial` varchar(8) DEFAULT NULL,
  `offre_selectionnee` int(11) NOT NULL DEFAULT '0',
  `nom` varchar(80) DEFAULT NULL,
  `prenom` varchar(80) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `adresse2` varchar(100) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `fax` varchar(30) DEFAULT NULL,
  `code_postal` varchar(5) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `pays` varchar(50) DEFAULT NULL,
  `acronyme_pays` varchar(10) DEFAULT NULL,
  `siret` varchar(14) DEFAULT NULL,
  `identifiant_national` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `observation` text,
  `date_annulation` varchar(20) DEFAULT NULL,
  `depot_annule` enum('0','1') NOT NULL DEFAULT '0',
  `offre_variante` enum('0','1') DEFAULT NULL,
  `statut_offre_papier` int(2) NOT NULL DEFAULT '1',
  `numero_reponse` int(11) DEFAULT NULL,
  `nom_agent_ouverture` varchar(100) DEFAULT NULL,
  `agent_id_ouverture` int(11) DEFAULT NULL,
  `dateheure_ouverture` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ifu_entreprise` varchar(100) DEFAULT NULL,
  `type_entreprise` enum('0','1','2','3') DEFAULT NULL COMMENT '0:PME,1:Auto-entrepreneur,2:Coopérative,3:Autre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Operations`
--

CREATE TABLE `Operations` (
  `id_operation` int(11) NOT NULL,
  `acronyme` varchar(30) NOT NULL,
  `id_service` int(11) NOT NULL,
  `id_agent` int(11) NOT NULL,
  `type` int(2) NOT NULL,
  `categorie` int(2) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `annee_debut` varchar(4) NOT NULL,
  `annee_fin` varchar(4) NOT NULL,
  `budget` varchar(40) NOT NULL,
  `date_creation` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modification` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `supprime` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Organisme`
--

CREATE TABLE `Organisme` (
  `id` int(11) NOT NULL,
  `acronyme` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `type_article_org` int(1) NOT NULL DEFAULT '0',
  `denomination_org` text COLLATE utf8_unicode_ci,
  `categorie_insee` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `description_org` mediumtext COLLATE utf8_unicode_ci,
  `adresse` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `cp` varchar(5) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `ville` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `email` varchar(100) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `url` varchar(100) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `id_attrib_file` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `attrib_file` varchar(150) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `date_creation` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `active` char(1) CHARACTER SET latin1 NOT NULL DEFAULT '1',
  `id_client_ANM` varchar(32) CHARACTER SET latin1 NOT NULL DEFAULT '0',
  `status` enum('0','1') CHARACTER SET latin1 NOT NULL DEFAULT '0',
  `signataire_cao` text CHARACTER SET latin1,
  `offset` char(3) CHARACTER SET latin1 NOT NULL DEFAULT '0',
  `sigle` varchar(100) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `adresse2` varchar(100) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `tel` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `telecopie` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `pays` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `affichage_entite` char(1) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `id_initial` int(11) NOT NULL DEFAULT '0',
  `denomination_org_ar` text COLLATE utf8_unicode_ci NOT NULL,
  `description_org_ar` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `adresse_ar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ville_ar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adresse2_ar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pays_ar` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `denomination_org_fr` varchar(100) CHARACTER SET latin1 NOT NULL,
  `description_org_fr` mediumtext CHARACTER SET latin1 NOT NULL,
  `adresse_fr` varchar(100) CHARACTER SET latin1 NOT NULL,
  `ville_fr` varchar(100) CHARACTER SET latin1 NOT NULL,
  `adresse2_fr` varchar(100) CHARACTER SET latin1 NOT NULL,
  `pays_fr` varchar(150) CHARACTER SET latin1 NOT NULL,
  `denomination_org_es` varchar(100) CHARACTER SET latin1 NOT NULL,
  `description_org_es` mediumtext CHARACTER SET latin1 NOT NULL,
  `adresse_es` varchar(100) CHARACTER SET latin1 NOT NULL,
  `ville_es` varchar(100) CHARACTER SET latin1 NOT NULL,
  `adresse2_es` varchar(100) CHARACTER SET latin1 NOT NULL,
  `pays_es` varchar(150) CHARACTER SET latin1 NOT NULL,
  `denomination_org_en` varchar(100) CHARACTER SET latin1 NOT NULL,
  `description_org_en` mediumtext CHARACTER SET latin1 NOT NULL,
  `adresse_en` varchar(100) CHARACTER SET latin1 NOT NULL,
  `ville_en` varchar(100) CHARACTER SET latin1 NOT NULL,
  `adresse2_en` varchar(100) CHARACTER SET latin1 NOT NULL,
  `pays_en` varchar(150) CHARACTER SET latin1 NOT NULL,
  `denomination_org_su` varchar(100) CHARACTER SET latin1 NOT NULL,
  `description_org_su` mediumtext CHARACTER SET latin1 NOT NULL,
  `adresse_su` varchar(100) CHARACTER SET latin1 NOT NULL,
  `ville_su` varchar(100) CHARACTER SET latin1 NOT NULL,
  `adresse2_su` varchar(100) CHARACTER SET latin1 NOT NULL,
  `pays_su` varchar(150) CHARACTER SET latin1 NOT NULL,
  `denomination_org_du` varchar(100) CHARACTER SET latin1 NOT NULL,
  `description_org_du` mediumtext CHARACTER SET latin1 NOT NULL,
  `adresse_du` varchar(100) CHARACTER SET latin1 NOT NULL,
  `ville_du` varchar(100) CHARACTER SET latin1 NOT NULL,
  `adresse2_du` varchar(100) CHARACTER SET latin1 NOT NULL,
  `pays_du` varchar(150) CHARACTER SET latin1 NOT NULL,
  `denomination_org_cz` varchar(100) CHARACTER SET latin1 NOT NULL,
  `description_org_cz` mediumtext CHARACTER SET latin1 NOT NULL,
  `adresse_cz` varchar(100) CHARACTER SET latin1 NOT NULL,
  `ville_cz` varchar(100) CHARACTER SET latin1 NOT NULL,
  `adresse2_cz` varchar(100) CHARACTER SET latin1 NOT NULL,
  `pays_cz` varchar(150) CHARACTER SET latin1 NOT NULL,
  `denomination_org_it` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description_org_it` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `adresse_it` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `ville_it` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `adresse2_it` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `pays_it` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `siren` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `complement` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `moniteur_provenance` int(11) DEFAULT '90' COMMENT 'contient la valeur de la balise PROV dans le fichier xml ''context'' du MOL',
  `code_acces_logiciel` varchar(30) COLLATE utf8_unicode_ci DEFAULT 'Y8YG-69WD-4421-4G28' COMMENT 'contient le code boamp du logiciel',
  `decalage_horaire` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Permet de renseigner le decalage horaire',
  `lieu_residence` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Permet de renseigner le lieu de residence du serice',
  `activation_fuseau_horaire` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT 'Permet d''activer l''utilisation du fuseau horaire pour le service. Activ?? 1 et desactiv? ? 0',
  `alerte` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ordre` int(11) NOT NULL DEFAULT '0' COMMENT 'permet d''afficher les consultation selon un ordre par organisme',
  `URL_INTERFACE_ANM` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'url utilis? par le Cli l''interface annonces marches '
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Organisme_Service_Metier`
--

CREATE TABLE `Organisme_Service_Metier` (
  `id_auto` int(11) UNSIGNED NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '0',
  `id_service_metier` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Panier_Entreprise`
--

CREATE TABLE `Panier_Entreprise` (
  `organisme` varchar(30) NOT NULL,
  `ref_consultation` int(11) NOT NULL,
  `id_entreprise` int(11) NOT NULL,
  `id_inscrit` int(11) NOT NULL,
  `date_ajout` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Cette table lie l''inscrit d''une entreprise ? une consultatio';

-- --------------------------------------------------------

--
-- Structure de la table `Parametrage_Enchere`
--

CREATE TABLE `Parametrage_Enchere` (
  `id` int(10) UNSIGNED NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `refConsultation` int(10) UNSIGNED DEFAULT NULL,
  `idEntiteeAssociee` int(11) DEFAULT NULL,
  `referenceUtilisateur` varchar(45) DEFAULT NULL,
  `auteur` varchar(255) DEFAULT NULL,
  `idLot` int(10) UNSIGNED DEFAULT NULL,
  `objet` longtext,
  `dateDebut` datetime DEFAULT '0000-00-00 00:00:00',
  `dateFin` datetime DEFAULT '0000-00-00 00:00:00',
  `dateSuspension` datetime DEFAULT '0000-00-00 00:00:00',
  `delaiProlongation` int(11) DEFAULT NULL,
  `commentaire` longtext,
  `meilleureEnchereObligatoire` enum('0','1') NOT NULL DEFAULT '0',
  `typeBaremeNETC` enum('1','2','3','4') NOT NULL DEFAULT '1',
  `typeBaremeEnchereGlobale` enum('1','2') NOT NULL DEFAULT '1',
  `meilleurNoteHaute` enum('0','1') NOT NULL DEFAULT '0',
  `nbrCandidatsVisible` enum('0','1') NOT NULL DEFAULT '1',
  `listeCandidatsVisible` enum('0','1') NOT NULL DEFAULT '1',
  `rangVisible` enum('0','1') NOT NULL DEFAULT '1',
  `meilleureOffreVisible` enum('0','1') NOT NULL DEFAULT '1',
  `montantReserve` double DEFAULT NULL,
  `noteMaxBaremeRelatif` double DEFAULT NULL,
  `coeffA` double DEFAULT NULL,
  `coeffB` double DEFAULT NULL,
  `coeffC` double DEFAULT NULL,
  `mail` longtext,
  `note_entreprises` varchar(50) DEFAULT NULL COMMENT 'Permet de stocker la note commune aux entreprises lors de la phase "Parametrage".'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Parametrage_Enchere_Reference`
--

CREATE TABLE `Parametrage_Enchere_Reference` (
  `id` int(10) UNSIGNED NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `idEnchere` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `libelle` varchar(255) NOT NULL DEFAULT '',
  `quantite` double DEFAULT NULL,
  `isMontant` enum('0','1') NOT NULL DEFAULT '1',
  `unite` varchar(20) DEFAULT NULL,
  `pasMin` double DEFAULT '0',
  `pasMax` double DEFAULT NULL,
  `valeurReference` double DEFAULT NULL,
  `valeurDepartCommune` enum('0','1') NOT NULL DEFAULT '1',
  `valeurDepart` double DEFAULT NULL,
  `typeBaremeReference` enum('1','2','3') DEFAULT NULL,
  `ponderationNoteReference` double DEFAULT '1',
  `noteMaxBaremeRelatif` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Parametrage_Enchere_Tranches_Bareme_NETC`
--

CREATE TABLE `Parametrage_Enchere_Tranches_Bareme_NETC` (
  `id` int(10) UNSIGNED NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `idEnchere` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `borneInf` double DEFAULT NULL,
  `borneSup` double DEFAULT NULL,
  `note` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Parametrage_Enchere_Tranche_Bareme_Reference`
--

CREATE TABLE `Parametrage_Enchere_Tranche_Bareme_Reference` (
  `id` int(10) UNSIGNED NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `idReference` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `borneInf` double DEFAULT NULL,
  `borneSup` double DEFAULT NULL,
  `note` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Parametrage_Fiche_Weka`
--

CREATE TABLE `Parametrage_Fiche_Weka` (
  `id_fiche` varchar(255) NOT NULL,
  `pages` varchar(255) DEFAULT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `xml` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Partenaire`
--

CREATE TABLE `Partenaire` (
  `id` int(11) NOT NULL,
  `initials` varchar(30) NOT NULL,
  `desc_partenaire` text NOT NULL,
  `desc_partenaire_fr` text,
  `desc_partenaire_en` text,
  `desc_partenaire_es` text,
  `desc_partenaire_it` text,
  `desc_partenaire_ar` text,
  `desc_partenaire_su` text,
  `lien_img` text NOT NULL,
  `lien_externe` text NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Passation_consultation`
--

CREATE TABLE `Passation_consultation` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `reference` int(11) NOT NULL DEFAULT '0',
  `unite` int(5) DEFAULT '0',
  `mandataire` int(5) DEFAULT '0',
  `lieu_detaille_predefini` int(5) DEFAULT '0',
  `lieux_detailles_non_definis` varchar(100) DEFAULT NULL,
  `code_postal_lieu_principal_execution` varchar(20) DEFAULT NULL,
  `Ville` varchar(50) DEFAULT NULL,
  `montant_estime_consultation` varchar(20) DEFAULT NULL,
  `commentaires` text,
  `numero_deliberation_financiere` varchar(20) DEFAULT NULL,
  `date_deliberation_financiere` varchar(10) DEFAULT NULL,
  `imputation_budgetaire` text,
  `numero_deliberation_autorisant_signature_marche` varchar(20) DEFAULT NULL,
  `date_deliberation_autorisant_signature_marche` varchar(10) DEFAULT NULL,
  `date_notification_previsionnelle` varchar(10) DEFAULT NULL,
  `date_reception_projet_DCE_Service_Validateur` varchar(10) DEFAULT NULL,
  `date_formulations_premieres_observations` varchar(10) DEFAULT NULL,
  `date_retour_projet_DCE_finalise` varchar(10) DEFAULT NULL,
  `date_validation_projet_DCE_par_service_validateur` varchar(10) DEFAULT NULL,
  `date_validation_projet_DCE_vue_par` int(5) DEFAULT '0',
  `date_reception_projet_AAPC_par_Service_Validateur` varchar(10) DEFAULT NULL,
  `date_formulations_premieres_observations_AAPC` varchar(10) DEFAULT NULL,
  `date_retour_projet_AAPC_finalise` varchar(10) DEFAULT NULL,
  `date_validation_projet_AAPC_par_Service_Validateur` varchar(10) DEFAULT NULL,
  `date_validation_projet_AAPC_par_Service_Validateur_vu_par` int(5) DEFAULT '0',
  `date_envoi_publicite` varchar(10) DEFAULT NULL,
  `date_envoi_invitations_remettre_offre` varchar(10) DEFAULT NULL,
  `date_limite_remise_offres` varchar(10) DEFAULT NULL,
  `delai_validite_offres` varchar(5) DEFAULT NULL,
  `commentaires_phase_consultation` text,
  `date_reunion_ouverture_candidatures` varchar(10) DEFAULT NULL,
  `date_reunion_ouverture_offres` varchar(10) DEFAULT NULL,
  `decision` int(5) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `passation_marche_a_venir`
--

CREATE TABLE `passation_marche_a_venir` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_passation_consultation` int(11) NOT NULL DEFAULT '0',
  `lot` int(11) NOT NULL DEFAULT '0',
  `montant_estime` varchar(11) NOT NULL DEFAULT '0',
  `id_nature_acte_juridique` int(11) NOT NULL DEFAULT '0',
  `forme_groupement` int(11) NOT NULL DEFAULT '0',
  `variante_autorisee` enum('0','1') NOT NULL DEFAULT '0',
  `variante_technique_obligatoire` enum('0','1') NOT NULL DEFAULT '0',
  `nombre_variante_technique` int(11) NOT NULL DEFAULT '0',
  `description_variante_technique` text NOT NULL,
  `mode_execution_contrat` int(11) NOT NULL DEFAULT '0',
  `type_bon_commande` int(11) NOT NULL DEFAULT '0',
  `min_bon_commande` varchar(11) NOT NULL DEFAULT '0',
  `max_bon_commande` varchar(11) NOT NULL DEFAULT '0',
  `duree_execution_marche_hors_reconduction` int(11) NOT NULL DEFAULT '0',
  `nombre_reconduction` int(11) NOT NULL DEFAULT '0',
  `duree_total_marche` int(11) NOT NULL DEFAULT '0',
  `ccag_applicable` int(11) NOT NULL DEFAULT '0',
  `marche_transversal` enum('0','1') NOT NULL DEFAULT '0',
  `date_reception_analyse_offre` varchar(10) DEFAULT NULL,
  `date_formulation_observation_projet_rapport` varchar(10) DEFAULT NULL,
  `date_retour_projet_rapport_finalise` varchar(10) DEFAULT NULL,
  `date_validation_projet_rapport` varchar(10) DEFAULT NULL,
  `projet_rapport_vu_par` int(11) DEFAULT NULL,
  `date_reunion_attribution` varchar(10) DEFAULT NULL,
  `decision` int(11) DEFAULT NULL,
  `date_envoi_courrier_condidat_non_retenu` varchar(10) DEFAULT NULL,
  `date_signature_marche_pa` varchar(10) DEFAULT NULL,
  `date_reception_controle_legalite` varchar(10) DEFAULT NULL,
  `date_formulation_observation_dossier` varchar(10) DEFAULT NULL,
  `date_retour_dossier_finalise` varchar(10) DEFAULT NULL,
  `date_transmission_prefecture` varchar(10) DEFAULT NULL,
  `dossier_vu_par` int(11) DEFAULT NULL,
  `date_validation_rapport_information` varchar(10) DEFAULT NULL,
  `commentaire` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pieces_complement`
--

CREATE TABLE `pieces_complement` (
  `id` int(11) NOT NULL,
  `id_demande_complement` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `taille` varchar(255) DEFAULT NULL,
  `id_blob` int(11) NOT NULL,
  `type` enum('1','2') NOT NULL COMMENT '1: envoie, 2: reponse'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Pieces_DCE`
--

CREATE TABLE `Pieces_DCE` (
  `id` int(11) NOT NULL,
  `nom_Piece` varchar(255) NOT NULL,
  `id_blob` int(11) NOT NULL,
  `ref_consultation` int(11) NOT NULL,
  `organisme_consultation` varchar(255) NOT NULL,
  `document_Redac` enum('0','1') NOT NULL DEFAULT '0',
  `id_Redac` int(11) DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT '0',
  `Type_Piece` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Pieces_Mise_Disposition`
--

CREATE TABLE `Pieces_Mise_Disposition` (
  `id` int(11) NOT NULL,
  `Id_type_doc` int(11) NOT NULL COMMENT 'les types de documents possibles',
  `id_decision_enveloppe` int(11) NOT NULL COMMENT 'attributaire',
  `id_externe` int(11) DEFAULT NULL COMMENT 'cet id depond de la valeur du champ type : ex = si type = 0 (piece_dce id_externe = index enveloppe',
  `org` varchar(30) NOT NULL,
  `lot` int(11) DEFAULT NULL,
  `consultation_ref` int(11) NOT NULL,
  `Date_mise_disposition` datetime NOT NULL,
  `Statut_disposition` int(1) NOT NULL DEFAULT '0' COMMENT '0= non mise ? disposition , 1 = mise ? disposition',
  `Date_recuperation` datetime DEFAULT NULL,
  `Statut_recuperation` int(1) NOT NULL DEFAULT '0' COMMENT '0=non recup?re ,1 =recup?re , 2 = non recupere suite ?  une erreur  , 4= acquitte',
  `Message` varchar(250) CHARACTER SET latin1 DEFAULT NULL COMMENT 'Le message retourne par l''application externe',
  `Id_blob` int(11) DEFAULT NULL,
  `Id_destinataire` int(11) NOT NULL DEFAULT '0',
  `type` int(1) DEFAULT NULL COMMENT '0 = piece_dce,1=piece_de _depot,2=piece_publicite,3=autres_pieces',
  `url_externe` varchar(100) DEFAULT NULL COMMENT 'Url retourn? par le service externe '
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `piece_sous_type_facture`
--

CREATE TABLE `piece_sous_type_facture` (
  `id` int(11) NOT NULL,
  `id_sous_type` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `nom_fichier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Prestation`
--

CREATE TABLE `Prestation` (
  `id` int(11) NOT NULL,
  `num_marche` varchar(255) DEFAULT NULL,
  `type_procedure` int(11) DEFAULT NULL,
  `objet` longtext,
  `montant` varchar(255) DEFAULT NULL,
  `maitre_ouvrage` varchar(255) DEFAULT NULL,
  `date_debut_execution` varchar(20) DEFAULT NULL,
  `date_fin_execution` varchar(20) DEFAULT NULL,
  `id_entreprise` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ProcedureEquivalence`
--

CREATE TABLE `ProcedureEquivalence` (
  `id_type_procedure` int(11) NOT NULL DEFAULT '0',
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `elec_resp` char(2) NOT NULL DEFAULT '',
  `no_elec_resp` char(2) NOT NULL DEFAULT '',
  `cipher_enabled` char(2) NOT NULL DEFAULT '',
  `cipher_disabled` char(2) NOT NULL DEFAULT '',
  `signature_enabled` char(2) NOT NULL DEFAULT '',
  `signature_disabled` char(2) NOT NULL DEFAULT '',
  `env_candidature` char(2) NOT NULL DEFAULT '',
  `env_offre` char(2) NOT NULL DEFAULT '',
  `env_anonymat` char(2) NOT NULL DEFAULT '',
  `envoi_complet` char(2) NOT NULL DEFAULT '',
  `envoi_differe` char(2) NOT NULL DEFAULT '',
  `procedure_publicite` char(2) NOT NULL DEFAULT '',
  `procedure_restreinte_candidature` char(2) NOT NULL DEFAULT '',
  `procedure_restreinte_offre` char(2) NOT NULL DEFAULT '',
  `envoi_mail_par_mpe` char(2) NOT NULL DEFAULT '0',
  `no_envoi_mail_par_mpe` char(2) NOT NULL DEFAULT '0',
  `mise_en_ligne1` char(2) NOT NULL DEFAULT '',
  `mise_en_ligne2` char(2) NOT NULL DEFAULT '',
  `mise_en_ligne3` char(2) NOT NULL DEFAULT '',
  `mise_en_ligne4` char(2) NOT NULL DEFAULT '',
  `env_offre_type_unique` char(2) NOT NULL DEFAULT '',
  `env_offre_type_multiple` char(2) NOT NULL DEFAULT '',
  `no_fichier_annonce` char(2) NOT NULL DEFAULT '',
  `fichier_importe` char(2) NOT NULL DEFAULT '',
  `fichier_boamp` char(2) NOT NULL DEFAULT '',
  `reglement_cons` char(2) NOT NULL DEFAULT '',
  `dossier_dce` char(2) NOT NULL DEFAULT '',
  `partial_dce_download` char(2) NOT NULL DEFAULT '',
  `service` char(2) NOT NULL DEFAULT '',
  `constitution_dossier_reponse` char(2) NOT NULL DEFAULT '',
  `env_offre_type_unique2` char(2) NOT NULL DEFAULT '',
  `env_offre_type_multiple2` char(2) NOT NULL DEFAULT '',
  `gestion_envois_postaux` char(2) NOT NULL DEFAULT '',
  `tireur_plan_non` char(2) NOT NULL DEFAULT '',
  `tireur_plan_oui` char(2) NOT NULL DEFAULT '',
  `tireur_plan_papier` char(2) NOT NULL DEFAULT '',
  `tireur_plan_cdrom` char(2) NOT NULL DEFAULT '',
  `tireur_plan_nom` char(2) NOT NULL DEFAULT '',
  `tirage_descriptif` char(2) NOT NULL DEFAULT '',
  `delai_date_limite_remise_pli` char(2) NOT NULL DEFAULT '',
  `signature_propre` char(2) NOT NULL DEFAULT '',
  `procedure_restreinte` char(2) NOT NULL DEFAULT '',
  `ouverture_simultanee` char(2) NOT NULL DEFAULT '',
  `type_decision_a_renseigner` char(2) NOT NULL DEFAULT '-0',
  `type_decision_attribution_marche` char(2) NOT NULL DEFAULT '-0',
  `type_decision_declaration_sans_suite` char(2) NOT NULL DEFAULT '-0',
  `type_decision_declaration_infructueux` char(2) NOT NULL DEFAULT '-0',
  `type_decision_selection_entreprise` char(2) NOT NULL DEFAULT '-0',
  `type_decision_attribution_accord_cadre` char(2) NOT NULL DEFAULT '-0',
  `type_decision_admission_sad` char(2) NOT NULL DEFAULT '-0',
  `type_decision_autre` char(2) NOT NULL DEFAULT '-0',
  `env_offre_technique` char(2) NOT NULL DEFAULT '-0',
  `env_offre_technique_type_unique` char(2) NOT NULL DEFAULT '-0',
  `env_offre_technique_type_multiple` char(2) NOT NULL DEFAULT '-0',
  `rep_obligatoire` varchar(2) NOT NULL DEFAULT '+0',
  `no_rep_obligatoire` varchar(2) NOT NULL DEFAULT '+0',
  `autre_piece_cons` char(2) NOT NULL DEFAULT '+0',
  `resp_elec_autre_plateforme` char(2) NOT NULL DEFAULT '-0',
  `mise_en_ligne_entite_coordinatrice` char(2) NOT NULL DEFAULT '-0',
  `autoriser_publicite` varchar(2) NOT NULL DEFAULT '1',
  `poursuite_date_limite_remise_pli` char(2) NOT NULL,
  `delai_poursuite_affichage` varchar(10) NOT NULL COMMENT 'Permet de stocker le delai de poursuite de l''affiche',
  `mode_ouverture_dossier` char(2) NOT NULL DEFAULT '+1',
  `mode_ouverture_reponse` char(2) NOT NULL DEFAULT '+0',
  `marche_public_simplifie` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `programme_previsionnel`
--

CREATE TABLE `programme_previsionnel` (
  `id` int(20) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `nom_fichier` varchar(50) NOT NULL DEFAULT '',
  `fichier` varchar(20) NOT NULL DEFAULT '',
  `date` varchar(20) NOT NULL DEFAULT '',
  `horodatage` longblob NOT NULL,
  `untrusteddate` varchar(20) NOT NULL DEFAULT '',
  `taille` int(20) NOT NULL DEFAULT '0',
  `annee` varchar(20) NOT NULL,
  `service_id` int(20) NOT NULL DEFAULT '0',
  `afficher` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Qualification`
--

CREATE TABLE `Qualification` (
  `id` int(11) NOT NULL COMMENT 'cl? primaire',
  `id_interne` varchar(20) NOT NULL COMMENT 'identifiant interne pour g?rer le classement des qualifications',
  `libelle` varchar(255) DEFAULT NULL,
  `id_interne_parent` varchar(20) DEFAULT NULL COMMENT 'id interne du parent',
  `libelle_ar` varchar(255) DEFAULT NULL,
  `libelle_fr` varchar(255) DEFAULT NULL,
  `libelle_en` varchar(255) DEFAULT NULL,
  `libelle_es` varchar(255) DEFAULT NULL,
  `libelle_su` varchar(255) DEFAULT NULL,
  `libelle_du` varchar(255) DEFAULT NULL,
  `libelle_cz` varchar(255) DEFAULT NULL,
  `libelle_it` varchar(255) DEFAULT '',
  `active` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `QuestionDCE`
--

CREATE TABLE `QuestionDCE` (
  `id` int(22) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `consultation_ref` int(11) NOT NULL,
  `date_depot` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_inscrit` int(11) NOT NULL DEFAULT '0',
  `id_entreprise` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `questions_dce`
--

CREATE TABLE `questions_dce` (
  `id` int(22) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `consultation_ref` int(11) NOT NULL DEFAULT '0',
  `date_depot` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `email` varchar(100) NOT NULL DEFAULT '',
  `nom` varchar(80) DEFAULT NULL,
  `entreprise` varchar(50) DEFAULT NULL,
  `adresse` varchar(200) DEFAULT NULL,
  `cp` varchar(100) DEFAULT NULL,
  `ville` varchar(150) DEFAULT NULL,
  `tel` varchar(150) DEFAULT NULL,
  `fax` varchar(150) DEFAULT NULL,
  `question` longtext NOT NULL,
  `statut` int(11) NOT NULL DEFAULT '0',
  `date_reponse` date NOT NULL DEFAULT '0000-00-00',
  `personne_repondu` text,
  `type_depot` enum('1','2') NOT NULL DEFAULT '1',
  `pays` varchar(150) DEFAULT NULL,
  `Observation` text,
  `siret` varchar(14) DEFAULT NULL,
  `identifiant_national` varchar(20) DEFAULT NULL,
  `acronyme_pays` varchar(10) DEFAULT NULL,
  `adresse2` varchar(80) DEFAULT NULL,
  `id_fichier` int(11) DEFAULT NULL,
  `nom_fichier` varchar(100) DEFAULT NULL,
  `prenom` varchar(80) DEFAULT NULL,
  `siret_etranger` varchar(20) DEFAULT NULL,
  `id_inscrit` int(11) NOT NULL DEFAULT '0',
  `id_entreprise` int(11) NOT NULL DEFAULT '0',
  `ifu` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Referentiel`
--

CREATE TABLE `Referentiel` (
  `id_referentiel` int(10) NOT NULL,
  `libelle_referentiel` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ReferentielDestinationFormXml`
--

CREATE TABLE `ReferentielDestinationFormXml` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `destinataire` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ReferentielFormXml`
--

CREATE TABLE `ReferentielFormXml` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_type_xml` int(11) NOT NULL DEFAULT '0',
  `consultation_ref` varchar(100) NOT NULL DEFAULT '',
  `xml` text NOT NULL,
  `date_creation` varchar(20) DEFAULT NULL,
  `statut` char(1) DEFAULT NULL,
  `id_compte_boamp` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ReferentielOrg`
--

CREATE TABLE `ReferentielOrg` (
  `id_referentiel` int(10) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `libelle_referentiel` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ReferentielTypeXml`
--

CREATE TABLE `ReferentielTypeXml` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_destinataire` varchar(50) NOT NULL DEFAULT '',
  `libelle_type` varchar(100) NOT NULL DEFAULT '',
  `libelle_type_fr` varchar(100) NOT NULL,
  `libelle_type_en` varchar(100) NOT NULL,
  `libelle_type_es` varchar(100) NOT NULL,
  `libelle_type_su` varchar(100) NOT NULL,
  `libelle_type_du` varchar(100) NOT NULL,
  `libelle_type_cz` varchar(100) NOT NULL,
  `libelle_type_ar` varchar(100) NOT NULL,
  `libelle_type_it` varchar(100) NOT NULL,
  `id_avis_marche` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Referentiel_Agent`
--

CREATE TABLE `Referentiel_Agent` (
  `id` int(11) NOT NULL,
  `organisme` varchar(20) NOT NULL,
  `id_Agent` int(100) NOT NULL,
  `id_Lt_Referentiel` int(100) NOT NULL,
  `valeur_Principale_Lt_Referentiel` text NOT NULL,
  `valeur_Secondaire_Lt_Referentiel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Referentiel_Consultation`
--

CREATE TABLE `Referentiel_Consultation` (
  `id` int(11) NOT NULL,
  `organisme` varchar(20) NOT NULL,
  `reference` int(100) NOT NULL,
  `id_Lt_Referentiel` int(100) NOT NULL,
  `lot` int(11) NOT NULL DEFAULT '0',
  `valeur_Principale_Lt_Referentiel` text NOT NULL,
  `valeur_Secondaire_Lt_Referentiel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Referentiel_contact`
--

CREATE TABLE `Referentiel_contact` (
  `id` int(11) NOT NULL,
  `sigle` varchar(20) DEFAULT NULL,
  `libelle` varchar(256) NOT NULL,
  `contact` varchar(256) NOT NULL,
  `actif` char(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Referentiel_Entreprise`
--

CREATE TABLE `Referentiel_Entreprise` (
  `id` int(11) NOT NULL,
  `id_entreprise` int(100) NOT NULL,
  `id_Lt_Referentiel` int(100) NOT NULL,
  `lot` int(11) NOT NULL DEFAULT '0',
  `valeur_Principale_Lt_Referentiel` varchar(200) NOT NULL,
  `valeur_Secondaire_Lt_Referentiel` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Referentiel_org_denomination`
--

CREATE TABLE `Referentiel_org_denomination` (
  `id` int(11) NOT NULL,
  `denomination` varchar(250) NOT NULL,
  `denomination_adapte` varchar(250) DEFAULT NULL,
  `denomination_normalise` varchar(250) DEFAULT NULL COMMENT 'La valeur propre utilis? dans l''auto compl?tion',
  `traite` enum('0','1') DEFAULT '0',
  `actif_recherche_avancee` enum('0','1') NOT NULL DEFAULT '0',
  `date_maj_actif_recherche_avancee` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Relation_Echange`
--

CREATE TABLE `Relation_Echange` (
  `id_auto` int(11) UNSIGNED NOT NULL,
  `id_echange` int(11) NOT NULL DEFAULT '0',
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `id_externe` int(11) NOT NULL DEFAULT '0',
  `type_relation` int(11) NOT NULL DEFAULT '0',
  `date_envoi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `renseignements_boamp`
--

CREATE TABLE `renseignements_boamp` (
  `id` int(50) NOT NULL,
  `acronymeOrg` varchar(30) NOT NULL,
  `id_type` int(50) NOT NULL,
  `id_compte` int(50) NOT NULL,
  `correspondant` varchar(200) DEFAULT NULL,
  `organisme` varchar(200) DEFAULT NULL,
  `adresse` varchar(200) DEFAULT NULL,
  `cp` varchar(200) DEFAULT NULL,
  `ville` varchar(200) DEFAULT NULL,
  `pays` varchar(200) DEFAULT NULL,
  `telephone` varchar(200) DEFAULT NULL,
  `poste` varchar(200) DEFAULT NULL,
  `fax` varchar(200) DEFAULT NULL,
  `mail` varchar(200) DEFAULT NULL,
  `url` text,
  `organe_charge_procedure` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ReponseInscritFormulaireConsultation`
--

CREATE TABLE `ReponseInscritFormulaireConsultation` (
  `id` int(11) NOT NULL,
  `id_Formulaire_consultation` int(11) NOT NULL,
  `statut` int(11) NOT NULL,
  `id_inscrit` int(11) NOT NULL,
  `id_entreprise` int(11) NOT NULL,
  `total_bd_ht` varchar(30) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ReponseInscritItemFormulaireConsultationValues`
--

CREATE TABLE `ReponseInscritItemFormulaireConsultationValues` (
  `id` int(11) NOT NULL,
  `idItemFormulaireConsultation` int(11) NOT NULL,
  `idReponseInscritItemFormulaireConsultation` int(11) NOT NULL,
  `valeur` varchar(100) NOT NULL,
  `type_valeur` int(11) NOT NULL,
  `precision_entreprise` varchar(100) NOT NULL,
  `prix_unitaire` varchar(30) NOT NULL,
  `tva` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `responsableengagement`
--

CREATE TABLE `responsableengagement` (
  `id` int(11) NOT NULL,
  `entreprise_id` int(11) NOT NULL DEFAULT '0',
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `qualite` varchar(32) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` varchar(100) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `id_initial` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `restitution_historique`
--

CREATE TABLE `restitution_historique` (
  `id` int(11) NOT NULL,
  `id_restitution` int(11) NOT NULL,
  `detail_action` varchar(250) NOT NULL,
  `acteur` varchar(250) NOT NULL,
  `date_action` datetime NOT NULL,
  `infos` longtext,
  `user_type` enum('entreprise','banque','agent') NOT NULL DEFAULT 'entreprise'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `resultat_analyse`
--

CREATE TABLE `resultat_analyse` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `consultation_ref` int(11) NOT NULL DEFAULT '0',
  `id_offre` int(11) NOT NULL DEFAULT '0',
  `lot` int(11) NOT NULL DEFAULT '0',
  `montant_offre` varchar(200) DEFAULT NULL,
  `note` varchar(200) DEFAULT NULL,
  `classement` tinyint(200) DEFAULT NULL,
  `observation` varchar(200) DEFAULT NULL,
  `type_enveloppe` int(1) NOT NULL DEFAULT '0',
  `offre_variante` enum('0','1') DEFAULT NULL COMMENT 'Ce champ permet de definir le montant de bese de ceux de variantes: null pour le montant d''une offre normale, 0 pour le montant de base et 1 pour les montants de variantes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `resultat_analyse_decision`
--

CREATE TABLE `resultat_analyse_decision` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `consultation_ref` int(11) NOT NULL DEFAULT '0',
  `lot` int(11) NOT NULL DEFAULT '0',
  `date_decision` varchar(20) DEFAULT NULL,
  `type_decision` varchar(200) DEFAULT NULL,
  `commentaire` text,
  `autre_type_decision` text,
  `autre` text,
  `id_offre` int(11) DEFAULT NULL,
  `justificatif` longtext NOT NULL,
  `statut` int(11) NOT NULL,
  `type_depot` enum('1','2') NOT NULL,
  `type_attributaire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `resultat_analyse_historique`
--

CREATE TABLE `resultat_analyse_historique` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `consultation_ref` int(11) NOT NULL DEFAULT '0',
  `id_offre` int(11) NOT NULL,
  `lot` int(11) NOT NULL DEFAULT '0',
  `date_decision` varchar(20) DEFAULT NULL,
  `type_decision` int(1) DEFAULT NULL,
  `type_depot` enum('1','2') NOT NULL,
  `justificatif` longtext NOT NULL,
  `nom_entreprise` varchar(30) DEFAULT NULL,
  `action` varchar(30) DEFAULT NULL,
  `agent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Retrait_Papier`
--

CREATE TABLE `Retrait_Papier` (
  `id` int(22) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `consultation_ref` int(11) NOT NULL DEFAULT '0',
  `nom` varchar(100) NOT NULL DEFAULT '',
  `adresse` varchar(100) NOT NULL DEFAULT '',
  `entreprise` varchar(100) NOT NULL DEFAULT '',
  `datetelechargement` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `codepostal` varchar(5) NOT NULL DEFAULT '0',
  `ville` varchar(50) NOT NULL DEFAULT '',
  `pays` varchar(50) NOT NULL DEFAULT '',
  `telephone` varchar(20) NOT NULL DEFAULT '',
  `tirage_plan` int(11) NOT NULL DEFAULT '0',
  `siret` varchar(14) DEFAULT NULL,
  `fax` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `Observation` text,
  `prenom` varchar(100) DEFAULT NULL,
  `adresse2` varchar(100) DEFAULT NULL,
  `identifiant_national` varchar(20) DEFAULT NULL,
  `acronyme_pays` varchar(10) DEFAULT NULL,
  `support` enum('1','2','3') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `RG`
--

CREATE TABLE `RG` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `consultation_ref` int(11) NOT NULL DEFAULT '0',
  `rg` int(11) NOT NULL DEFAULT '0',
  `nom_fichier` varchar(150) NOT NULL,
  `statut` char(1) NOT NULL DEFAULT '1',
  `horodatage` longblob NOT NULL,
  `untrusteddate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `agent_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `RPA`
--

CREATE TABLE `RPA` (
  `id` int(11) NOT NULL,
  `acronymeOrg` varchar(200) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `nom` varchar(30) NOT NULL DEFAULT '',
  `prenom` varchar(30) NOT NULL DEFAULT '',
  `adresse1` varchar(80) NOT NULL DEFAULT '',
  `adresse2` varchar(80) NOT NULL DEFAULT '',
  `codepostal` varchar(20) NOT NULL DEFAULT '',
  `ville` varchar(50) NOT NULL DEFAULT '',
  `id_service` int(11) NOT NULL DEFAULT '0',
  `Fonction` varchar(200) DEFAULT NULL,
  `pays` varchar(150) DEFAULT NULL,
  `date_creation` varchar(20) DEFAULT NULL,
  `date_modification` varchar(20) DEFAULT NULL,
  `responsable_archive` enum('0','1') NOT NULL DEFAULT '0',
  `email` varchar(50) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `OrganismeRpa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Service`
--

CREATE TABLE `Service` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `type_service` enum('1','2') NOT NULL DEFAULT '2',
  `libelle` text NOT NULL,
  `sigle` text NOT NULL,
  `adresse` varchar(100) NOT NULL DEFAULT '',
  `adresse_suite` varchar(100) NOT NULL DEFAULT '',
  `cp` varchar(5) NOT NULL DEFAULT '',
  `ville` varchar(100) NOT NULL DEFAULT '',
  `telephone` varchar(100) NOT NULL DEFAULT '',
  `fax` varchar(100) NOT NULL DEFAULT '',
  `mail` varchar(100) NOT NULL DEFAULT '',
  `pays` varchar(150) DEFAULT NULL,
  `id_initial` int(11) NOT NULL DEFAULT '0',
  `date_creation` varchar(20) DEFAULT NULL,
  `date_modification` varchar(20) DEFAULT NULL,
  `siren` varchar(9) DEFAULT NULL,
  `complement` varchar(5) DEFAULT NULL,
  `libelle_ar` text NOT NULL,
  `adresse_ar` varchar(100) NOT NULL DEFAULT '',
  `adresse_suite_ar` varchar(100) NOT NULL DEFAULT '',
  `ville_ar` varchar(100) NOT NULL DEFAULT '',
  `pays_ar` varchar(150) NOT NULL DEFAULT 'NULL',
  `libelle_fr` text NOT NULL,
  `adresse_fr` varchar(100) NOT NULL DEFAULT '',
  `adresse_suite_fr` varchar(100) NOT NULL DEFAULT '',
  `ville_fr` varchar(100) NOT NULL DEFAULT '',
  `pays_fr` varchar(150) NOT NULL DEFAULT 'NULL',
  `libelle_es` text NOT NULL,
  `adresse_es` varchar(100) NOT NULL DEFAULT '',
  `adresse_suite_es` varchar(100) NOT NULL DEFAULT '',
  `ville_es` varchar(100) NOT NULL DEFAULT '',
  `pays_es` varchar(150) NOT NULL DEFAULT 'NULL',
  `libelle_en` text NOT NULL,
  `adresse_en` varchar(100) NOT NULL DEFAULT '',
  `adresse_suite_en` varchar(100) NOT NULL DEFAULT '',
  `ville_en` varchar(100) NOT NULL DEFAULT '',
  `pays_en` varchar(150) NOT NULL DEFAULT 'NULL',
  `libelle_su` text NOT NULL,
  `adresse_su` varchar(100) NOT NULL DEFAULT '',
  `adresse_suite_su` varchar(100) NOT NULL DEFAULT '',
  `ville_su` varchar(100) NOT NULL DEFAULT '',
  `pays_su` varchar(150) NOT NULL DEFAULT 'NULL',
  `libelle_du` text NOT NULL,
  `adresse_du` varchar(100) NOT NULL DEFAULT '',
  `adresse_suite_du` varchar(100) NOT NULL DEFAULT '',
  `ville_du` varchar(100) NOT NULL DEFAULT '',
  `pays_du` varchar(150) NOT NULL DEFAULT 'NULL',
  `libelle_cz` text NOT NULL,
  `adresse_cz` varchar(100) NOT NULL DEFAULT '',
  `adresse_suite_cz` varchar(100) NOT NULL DEFAULT '',
  `ville_cz` varchar(100) NOT NULL DEFAULT '',
  `pays_cz` varchar(150) NOT NULL DEFAULT '',
  `libelle_it` text NOT NULL,
  `adresse_it` varchar(100) NOT NULL DEFAULT '',
  `adresse_suite_it` varchar(100) NOT NULL DEFAULT '',
  `ville_it` varchar(100) NOT NULL DEFAULT '',
  `pays_it` varchar(150) NOT NULL DEFAULT 'NULL',
  `chemin_complet` varchar(255) NOT NULL DEFAULT '',
  `chemin_complet_fr` varchar(255) NOT NULL DEFAULT '',
  `chemin_complet_en` varchar(255) NOT NULL DEFAULT '',
  `chemin_complet_es` varchar(255) NOT NULL DEFAULT '',
  `chemin_complet_su` varchar(255) NOT NULL DEFAULT '',
  `chemin_complet_du` varchar(255) NOT NULL DEFAULT '',
  `chemin_complet_cz` varchar(255) NOT NULL DEFAULT '',
  `chemin_complet_ar` varchar(255) NOT NULL DEFAULT '',
  `chemin_complet_it` varchar(255) NOT NULL DEFAULT '',
  `nom_service_archiveur` varchar(100) DEFAULT NULL,
  `identifiant_service_archiveur` varchar(100) DEFAULT NULL,
  `affichage_service` enum('0','1') NOT NULL DEFAULT '1',
  `activation_fuseau_horaire` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''activer l''utilisation du fuseau horaire pour le service',
  `decalage_horaire` varchar(5) DEFAULT NULL COMMENT 'Permet de renseigner le decalage horaire',
  `lieu_residence` varchar(255) DEFAULT NULL COMMENT 'Permet de renseigner le lieu de residence du serice',
  `alerte` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `service_associe`
--

CREATE TABLE `service_associe` (
  `id` int(11) NOT NULL,
  `id_service_gerant` int(11) NOT NULL,
  `id_service_gere` int(11) NOT NULL,
  `organisme_gerant` varchar(255) NOT NULL,
  `organisme_gere` varchar(255) NOT NULL,
  `actif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Service_Mertier`
--

CREATE TABLE `Service_Mertier` (
  `id` int(11) NOT NULL DEFAULT '0',
  `sigle` varchar(50) DEFAULT NULL,
  `denomination` varchar(255) DEFAULT NULL,
  `url_acces` text,
  `logo` varchar(100) NOT NULL DEFAULT '',
  `url_deconnexion` text NOT NULL,
  `ordre` int(2) NOT NULL DEFAULT '0' COMMENT 'Ordre d''''affichage des services metiers dans le socle (1:premier, 2:deuxi?me, ...)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Service_Mertier_Profils`
--

CREATE TABLE `Service_Mertier_Profils` (
  `id_auto` int(11) UNSIGNED NOT NULL,
  `id_interne` int(11) NOT NULL DEFAULT '0',
  `id_service_metier` int(11) NOT NULL DEFAULT '0',
  `id_externe` int(11) NOT NULL DEFAULT '0',
  `libelle` varchar(255) DEFAULT NULL,
  `libelle_fr` varchar(255) DEFAULT '',
  `libelle_en` varchar(255) DEFAULT '',
  `libelle_es` varchar(255) DEFAULT '',
  `libelle_su` varchar(255) DEFAULT '',
  `libelle_du` varchar(255) DEFAULT '',
  `libelle_cz` varchar(255) DEFAULT '',
  `libelle_ar` varchar(255) DEFAULT '',
  `libelle_it` varchar(255) DEFAULT '',
  `show_profile_for_hyperadmin_only` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Permet d''afficher le profil juste pour l''hyperAdmin si la valeur egale 1 sinon il va s''afficher pour touts les agents'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Societes_Exclues`
--

CREATE TABLE `Societes_Exclues` (
  `id_societes_exclues` int(11) NOT NULL COMMENT 'Cl? primaire',
  `organisme_acronyme` varchar(30) DEFAULT NULL,
  `id_service` int(11) DEFAULT NULL,
  `id_agent` int(11) DEFAULT NULL,
  `nom_document` varchar(255) DEFAULT NULL,
  `id_blob` int(11) DEFAULT NULL,
  `taille_document` varchar(80) DEFAULT NULL,
  `identifiant_entreprise` varchar(20) DEFAULT NULL,
  `raison_sociale` varchar(255) DEFAULT NULL,
  `motif` varchar(255) DEFAULT NULL,
  `raison_sociale_fr` varchar(255) DEFAULT NULL,
  `motif_fr` varchar(255) DEFAULT NULL,
  `raison_sociale_ar` varchar(255) DEFAULT NULL,
  `motif_ar` varchar(255) DEFAULT NULL,
  `type_exclusion` enum('0','1') DEFAULT '0',
  `date_debut_exclusion` varchar(20) DEFAULT NULL,
  `date_fin_exclusion` varchar(20) DEFAULT NULL,
  `type_portee` enum('0','1') DEFAULT '0',
  `raison_sociale_it` varchar(255) DEFAULT '',
  `motif_it` varchar(255) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Socle_Habilitation_Agent`
--

CREATE TABLE `Socle_Habilitation_Agent` (
  `id_agent` int(11) NOT NULL,
  `gestion_agent_pole_socle` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_agents_socle` enum('0','1') NOT NULL DEFAULT '0',
  `droit_gestion_services_socle` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Socle_Habilitation_Profil`
--

CREATE TABLE `Socle_Habilitation_Profil` (
  `id_profil` int(11) NOT NULL,
  `gestion_agent_pole_socle` enum('0','1') NOT NULL DEFAULT '0',
  `gestion_agents_socle` enum('0','1') NOT NULL DEFAULT '0',
  `droit_gestion_services_socle` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `SousCategorie`
--

CREATE TABLE `SousCategorie` (
  `id` varchar(30) NOT NULL DEFAULT '',
  `id_categorie` varchar(50) NOT NULL DEFAULT '',
  `libelle` varchar(250) NOT NULL,
  `libelle_ar` varchar(250) DEFAULT NULL,
  `libelle_fr` varchar(250) DEFAULT NULL,
  `libelle_en` varchar(250) DEFAULT NULL,
  `libelle_es` varchar(250) DEFAULT NULL,
  `libelle_su` varchar(250) DEFAULT NULL,
  `libelle_du` varchar(250) DEFAULT NULL,
  `libelle_cz` varchar(250) DEFAULT NULL,
  `libelle_it` varchar(250) DEFAULT NULL,
  `date_modification` varchar(20) DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL,
  `active` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sous_type_facture`
--

CREATE TABLE `sous_type_facture` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `sso_agent`
--

CREATE TABLE `sso_agent` (
  `id_sso` varchar(40) NOT NULL,
  `id_agent` int(20) NOT NULL,
  `organisme` varchar(20) NOT NULL,
  `id_service` int(20) NOT NULL,
  `date_connexion` varchar(20) NOT NULL,
  `date_last_request` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sso_entreprise`
--

CREATE TABLE `sso_entreprise` (
  `id_sso` varchar(40) NOT NULL,
  `id_inscrit` int(11) NOT NULL,
  `date_connexion` varchar(20) NOT NULL,
  `date_last_request` varchar(20) NOT NULL,
  `login` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Sso_Tiers`
--

CREATE TABLE `Sso_Tiers` (
  `id_sso_tiers` varchar(50) NOT NULL,
  `id_tiers` int(11) NOT NULL,
  `id_fonctionnalite` varchar(50) NOT NULL,
  `date_connexion` varchar(20) NOT NULL,
  `date_last_request` varchar(20) NOT NULL,
  `id_entite` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `StatutEnveloppe`
--

CREATE TABLE `StatutEnveloppe` (
  `id_statut` int(2) NOT NULL DEFAULT '0',
  `description` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `SuiviAcces`
--

CREATE TABLE `SuiviAcces` (
  `id_auto` int(11) UNSIGNED NOT NULL,
  `id_agent` int(8) NOT NULL DEFAULT '0',
  `date_acces` varchar(20) NOT NULL DEFAULT '',
  `id_service` int(8) DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `organisme` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Support_Publication`
--

CREATE TABLE `Support_Publication` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `date_publication` varchar(20) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `consultation_ref` int(11) NOT NULL,
  `type_publication` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Telechargement`
--

CREATE TABLE `Telechargement` (
  `id` int(22) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `consultation_ref` int(11) NOT NULL,
  `datetelechargement` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tirage_plan` int(11) NOT NULL DEFAULT '0',
  `id_inscrit` int(11) DEFAULT '0',
  `id_entreprise` int(11) DEFAULT '0',
  `support` enum('1','2','3') NOT NULL DEFAULT '1',
  `nom` varchar(100) NOT NULL DEFAULT '',
  `adresse` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `entreprise` varchar(100) NOT NULL DEFAULT '',
  `codepostal` varchar(5) NOT NULL DEFAULT '0',
  `ville` varchar(50) NOT NULL DEFAULT '',
  `pays` varchar(50) DEFAULT NULL,
  `telephone` varchar(20) NOT NULL DEFAULT '',
  `siret` varchar(14) NOT NULL DEFAULT '',
  `fax` varchar(30) NOT NULL DEFAULT '',
  `lots` varchar(255) DEFAULT '',
  `sirenEtranger` varchar(20) DEFAULT '0',
  `adresse2` varchar(80) NOT NULL DEFAULT '0',
  `prenom` varchar(11) DEFAULT '',
  `noms_fichiers_dce` text,
  `Observation` text,
  `acronyme_pays` varchar(10) DEFAULT NULL,
  `ifu` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `TelechargementAnonyme`
--

CREATE TABLE `TelechargementAnonyme` (
  `id` int(22) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `consultation_ref` int(11) NOT NULL,
  `datetelechargement` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tirage_plan` int(11) NOT NULL DEFAULT '0',
  `support` enum('1','2','3') NOT NULL DEFAULT '1',
  `noms_fichiers_dce` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Tiers`
--

CREATE TABLE `Tiers` (
  `id_tiers` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `denomination` varchar(250) NOT NULL,
  `fonctionnalite` varchar(50) NOT NULL,
  `id_entite` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `TireurPlan`
--

CREATE TABLE `TireurPlan` (
  `id` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `nom` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `id_service` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `trace_operations_inscrit`
--

CREATE TABLE `trace_operations_inscrit` (
  `id_trace` int(11) NOT NULL,
  `id_inscrit` int(11) NOT NULL DEFAULT '0',
  `id_entreprise` int(11) NOT NULL DEFAULT '0',
  `addr_ip` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `operations` text NOT NULL,
  `organisme` varchar(30) DEFAULT NULL,
  `ref_consultation` varchar(30) DEFAULT NULL,
  `afficher` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Tranche_Article_133`
--

CREATE TABLE `Tranche_Article_133` (
  `id` int(11) NOT NULL,
  `acronyme_org` varchar(30) NOT NULL,
  `millesime` varchar(10) NOT NULL,
  `Libelle_tranche_budgetaire` varchar(250) NOT NULL,
  `borne_inf` varchar(40) NOT NULL,
  `borne_sup` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `TypeAvenant`
--

CREATE TABLE `TypeAvenant` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) DEFAULT NULL,
  `libelle_fr` varchar(100) DEFAULT NULL,
  `libelle_en` varchar(100) DEFAULT NULL,
  `libelle_es` varchar(100) DEFAULT NULL,
  `libelle_su` varchar(100) DEFAULT NULL,
  `libelle_du` varchar(100) DEFAULT NULL,
  `libelle_cz` varchar(100) DEFAULT NULL,
  `libelle_ar` varchar(100) DEFAULT NULL,
  `libelle_it` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `TypeAvis`
--

CREATE TABLE `TypeAvis` (
  `id` int(11) NOT NULL,
  `intitule_avis` varchar(100) NOT NULL DEFAULT '',
  `intitule_avis_fr` varchar(100) DEFAULT NULL,
  `intitule_avis_en` varchar(100) DEFAULT NULL,
  `intitule_avis_es` varchar(100) DEFAULT NULL,
  `intitule_avis_su` varchar(100) DEFAULT NULL,
  `intitule_avis_du` varchar(100) DEFAULT NULL,
  `intitule_avis_cz` varchar(100) DEFAULT NULL,
  `intitule_avis_ar` varchar(100) DEFAULT NULL,
  `abbreviation` varchar(50) NOT NULL DEFAULT '',
  `id_type_avis_ANM` int(11) NOT NULL DEFAULT '0',
  `intitule_avis_it` varchar(100) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `TypeCommission`
--

CREATE TABLE `TypeCommission` (
  `id` int(5) NOT NULL,
  `organisme` varchar(10) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `TypeDecision`
--

CREATE TABLE `TypeDecision` (
  `id_type_decision` int(11) NOT NULL,
  `code_type_decision` varchar(100) NOT NULL COMMENT 'Pour obtenir le libell?, ce champ est mis en correspondance avec messages.xml'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `TypeProcedure`
--

CREATE TABLE `TypeProcedure` (
  `id_type_procedure` int(11) NOT NULL,
  `libelle_type_procedure` varchar(100) NOT NULL DEFAULT '',
  `libelle_type_procedure_fr` varchar(100) DEFAULT NULL,
  `libelle_type_procedure_en` varchar(100) DEFAULT NULL,
  `libelle_type_procedure_es` varchar(100) DEFAULT NULL,
  `libelle_type_procedure_su` varchar(100) DEFAULT NULL,
  `libelle_type_procedure_du` varchar(100) DEFAULT NULL,
  `libelle_type_procedure_cz` varchar(100) DEFAULT NULL,
  `libelle_type_procedure_ar` varchar(100) DEFAULT NULL,
  `abbreviation` varchar(50) NOT NULL DEFAULT '',
  `type_boamp` int(11) NOT NULL DEFAULT '0',
  `categorie_procedure` int(11) NOT NULL DEFAULT '0',
  `id_type_procedure_ANM` int(11) NOT NULL DEFAULT '0',
  `delai_alerte` int(11) NOT NULL DEFAULT '0',
  `mapa` enum('0','1') NOT NULL DEFAULT '0',
  `consultation_transverse` enum('0','1') NOT NULL DEFAULT '0',
  `code_recensement` char(3) DEFAULT NULL,
  `abbreviation_portail_ANM` varchar(50) NOT NULL,
  `id_modele` int(1) NOT NULL,
  `libelle_type_procedure_it` varchar(100) DEFAULT '',
  `affichage_caution` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Type_Avis_Pub`
--

CREATE TABLE `Type_Avis_Pub` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `libelle_ar` varchar(100) DEFAULT NULL,
  `libelle_cz` varchar(100) DEFAULT NULL,
  `libelle_du` varchar(100) DEFAULT NULL,
  `libelle_en` varchar(100) DEFAULT NULL,
  `libelle_es` varchar(100) DEFAULT NULL,
  `libelle_fr` varchar(100) DEFAULT NULL,
  `libelle_it` varchar(100) DEFAULT NULL,
  `libelle_su` varchar(100) DEFAULT NULL,
  `region` int(11) NOT NULL,
  `resource_formulaire` varchar(100) NOT NULL,
  `ressource_doc_presse` varchar(255) DEFAULT NULL COMMENT 'Permet de stocker les noms des ressources des documens gener?s et envoy?s ? la presse',
  `nature_avis` int(2) DEFAULT NULL COMMENT 'Permet de pr?ciser la nature de l''avis de publicit?, 1 pour les avis pr? information, 2 pour les avis initiaux'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Type_Avis_Pub_Organisme`
--

CREATE TABLE `Type_Avis_Pub_Organisme` (
  `id_type_avis` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_type_procedure` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `libelle_ar` varchar(100) DEFAULT NULL,
  `libelle_cz` varchar(100) DEFAULT NULL,
  `libelle_du` varchar(100) DEFAULT NULL,
  `libelle_en` varchar(100) DEFAULT NULL,
  `libelle_es` varchar(100) DEFAULT NULL,
  `libelle_fr` varchar(100) DEFAULT NULL,
  `libelle_it` varchar(100) DEFAULT NULL,
  `libelle_su` varchar(100) DEFAULT NULL,
  `region` int(11) NOT NULL,
  `resource_formulaire` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Type_Avis_Pub_Procedure`
--

CREATE TABLE `Type_Avis_Pub_Procedure` (
  `id_type_avis` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_type_procedure` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_facture`
--

CREATE TABLE `type_facture` (
  `id` int(11) NOT NULL,
  `is_locale` tinyint(1) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Type_Procedure_Organisme`
--

CREATE TABLE `Type_Procedure_Organisme` (
  `id_type_procedure` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `libelle_type_procedure` varchar(100) NOT NULL DEFAULT '',
  `abbreviation` varchar(50) NOT NULL DEFAULT '',
  `type_boamp` int(11) NOT NULL DEFAULT '0',
  `id_type_procedure_portail` int(11) NOT NULL DEFAULT '0',
  `categorie_procedure` int(11) NOT NULL DEFAULT '0',
  `delai_alerte` int(11) NOT NULL DEFAULT '0',
  `id_type_validation` int(11) NOT NULL DEFAULT '2',
  `service_validation` int(11) NOT NULL DEFAULT '0',
  `mapa` enum('0','1') NOT NULL DEFAULT '0',
  `activer_mapa` enum('0','1') NOT NULL DEFAULT '1',
  `libelle_type_procedure_fr` varchar(100) DEFAULT '',
  `libelle_type_procedure_en` varchar(100) DEFAULT '',
  `libelle_type_procedure_es` varchar(100) DEFAULT '',
  `libelle_type_procedure_su` varchar(100) DEFAULT '',
  `libelle_type_procedure_du` varchar(100) DEFAULT '',
  `libelle_type_procedure_cz` varchar(100) DEFAULT '',
  `libelle_type_procedure_ar` varchar(100) DEFAULT NULL,
  `id_montant_mapa` int(2) NOT NULL DEFAULT '0',
  `code_recensement` char(3) DEFAULT NULL,
  `depouillable_phase_consultation` enum('0','1') NOT NULL DEFAULT '0',
  `consultation_transverse` enum('0','1') NOT NULL DEFAULT '0',
  `tag_Boamp` varchar(50) NOT NULL DEFAULT '',
  `ao` enum('0','1') NOT NULL DEFAULT '0',
  `mn` enum('0','1') NOT NULL DEFAULT '0',
  `dc` enum('0','1') NOT NULL DEFAULT '0',
  `autre` enum('0','1') NOT NULL DEFAULT '0',
  `sad` enum('0','1') NOT NULL DEFAULT '0',
  `accord_cadre` enum('0','1') NOT NULL DEFAULT '0',
  `tag_name_mesure_avancement` varchar(100) NOT NULL,
  `abreviation_interface` varchar(50) DEFAULT NULL,
  `libelle_type_procedure_it` varchar(100) DEFAULT NULL,
  `publicite_types_form_xml` text NOT NULL COMMENT 'Permet de parametrer les types de formulaires au format xml dans la publicit? en fonction du type de procedure. Les valeurs de ce champ doivent etre separ?s par des ''#''',
  `tag_name_chorus` varchar(100) NOT NULL,
  `equivalent_opoce` varchar(100) NOT NULL,
  `equivalent_boamp` varchar(100) NOT NULL COMMENT 'Repr?sente le type de proc?dure envoy? dans le fichier xml du BOAMP'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Type_support`
--

CREATE TABLE `Type_support` (
  `id_type_avis` int(11) NOT NULL,
  `id_type_support` int(11) NOT NULL COMMENT 'valeur possible pour type destinataire: opoce->1 // press->2 // simap2->3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_annonce_annuelle`
--

CREATE TABLE `t_annonce_annuelle` (
  `id` int(20) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `nom_fichier` varchar(50) NOT NULL DEFAULT '',
  `fichier` varchar(20) NOT NULL DEFAULT '',
  `date` varchar(20) NOT NULL DEFAULT '',
  `horodatage` longblob NOT NULL,
  `untrusteddate` varchar(20) NOT NULL DEFAULT '',
  `taille` int(20) NOT NULL DEFAULT '0',
  `annee` varchar(20) NOT NULL,
  `service_id` int(20) NOT NULL DEFAULT '0',
  `id_type` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_banque`
--

CREATE TABLE `t_banque` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `sigle` varchar(100) DEFAULT NULL,
  `mode` enum('centralise','decentralise') DEFAULT NULL,
  `adresse_siege` varchar(255) DEFAULT NULL,
  `ville_siege` varchar(255) DEFAULT NULL,
  `id_ref_ville` int(11) NOT NULL,
  `position_debut_code_agence` int(11) DEFAULT NULL,
  `taille_code_agence` int(11) DEFAULT NULL,
  `position_debut_code_ville` int(11) NOT NULL,
  `taille_code_ville` int(11) NOT NULL,
  `affichage_compte_virement` enum('0','1') DEFAULT '0',
  `config_id_modele_demande_caution` int(11) DEFAULT NULL,
  `numero_agrement` varchar(100) DEFAULT NULL,
  `date_agrement` date DEFAULT NULL,
  `config_generer_reference_caution` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet de generer automatiquement la reference de la caution',
  `config_id_document_modele` int(11) DEFAULT NULL,
  `config_id_modele_demande_restitution` int(11) DEFAULT NULL COMMENT 'id modele restitution specifique'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_calendrier`
--

CREATE TABLE `t_calendrier` (
  `ID_CALENDRIER` int(11) NOT NULL,
  `REFERENCE` int(11) NOT NULL,
  `ORGANISME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_calendrier_etape`
--

CREATE TABLE `t_calendrier_etape` (
  `ID_CALENDRIER_ETAPE` int(11) NOT NULL,
  `ID_CALENDRIER` int(11) DEFAULT NULL,
  `CODE` varchar(3) DEFAULT NULL,
  `LIBELLE` varchar(100) DEFAULT NULL,
  `DATE_INITIALE` date DEFAULT NULL,
  `DATE_PREVUE` date DEFAULT NULL,
  `POSITION` int(11) DEFAULT NULL,
  `LIBRE` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'TRUE si etape libre false si etape predefinie',
  `DATE_REELLE_CONFIRMEE` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_calendrier_etape_referentiel`
--

CREATE TABLE `t_calendrier_etape_referentiel` (
  `ID_ETAPE_CALENDRIER_REFERENTIEL` int(11) NOT NULL,
  `ID_TYPE_PROCEDURE` int(11) NOT NULL DEFAULT '0',
  `ORGANISME` varchar(30) NOT NULL,
  `CODE` varchar(3) DEFAULT NULL COMMENT 'code de l''?tape',
  `LIBELLE` varchar(100) DEFAULT NULL,
  `POSITION` int(11) DEFAULT NULL COMMENT 'Position de l''?tape dans le calendrier la premi?re ?tape est num?rot? ? 0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_calendrier_transition`
--

CREATE TABLE `t_calendrier_transition` (
  `ID_CALENDRIER_TRANSITION` int(11) NOT NULL,
  `ID_ETAPE_SOURCE` int(11) DEFAULT NULL,
  `ID_ETAPE_CIBLE` int(11) DEFAULT NULL,
  `VALEUR_FIXE` int(11) NOT NULL DEFAULT '0',
  `VALEUR_VARIABLE_INITIALE` int(11) NOT NULL DEFAULT '0' COMMENT 'Valeur g?r?e au niveau du calendrier initiale',
  `VALEUR_VARIABLE_REELLE` int(11) NOT NULL DEFAULT '0' COMMENT 'Valeur g?r?e au niveau du calendrier r?elle'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_calendrier_transition_referentiel`
--

CREATE TABLE `t_calendrier_transition_referentiel` (
  `ID_TRANSITION_CALENDRIER_REFERENTIEL` int(11) NOT NULL,
  `ID_TYPE_PROCEDURE` int(11) NOT NULL,
  `ORGANISME` varchar(30) NOT NULL,
  `ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE` int(11) DEFAULT NULL,
  `ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE` int(11) DEFAULT NULL,
  `VALEUR_FIXE` int(11) NOT NULL DEFAULT '0' COMMENT 'Valeur ne pouvant pas etre modifi? par l''AGENT au moment de la cr?ation du calendrier associ? ? sa consultation',
  `VALEUR_VARIABLE` int(11) NOT NULL DEFAULT '0' COMMENT 'Valeur g?r?e au niveau du calendrier initiale'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_candidature_mps`
--

CREATE TABLE `t_candidature_mps` (
  `id_candidature` int(11) NOT NULL,
  `id_entreprise` int(11) NOT NULL,
  `id_inscrit` int(11) NOT NULL,
  `ref_consultation` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_offre` int(11) DEFAULT NULL,
  `id_blob` int(11) NOT NULL,
  `horodatage` longblob NOT NULL,
  `untrusted_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `untrusted_serial` varchar(40) NOT NULL,
  `taille_fichier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_CAO_Commission`
--

CREATE TABLE `t_CAO_Commission` (
  `id_commission` bigint(20) NOT NULL COMMENT 'Identifiant de la commission',
  `organisme` varchar(30) NOT NULL COMMENT 'Acronyme de l''organisme ? laquelle appartient la commission',
  `sigle` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Sigle de la commission',
  `intitule` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Intitul? de la commission'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_CAO_Commission_Agent`
--

CREATE TABLE `t_CAO_Commission_Agent` (
  `id_commission_agent` bigint(20) NOT NULL COMMENT 'Identifiant de l''agent de commission',
  `id_agent` int(11) NOT NULL COMMENT 'Identifiant de l''agent',
  `organisme` varchar(30) NOT NULL COMMENT 'Acronyme de l''organisme',
  `id_commission` bigint(20) NOT NULL COMMENT 'Identifiant de la commission ? laquelle appartient l''agent',
  `id_ref_val_type_voix_defaut` int(11) NOT NULL COMMENT 'Type de voix d?fini par d?faut pour la commission',
  `type_compte` tinyint(4) NOT NULL COMMENT 'Rappel du type de compte de l''agent "non ?lu" ou "?lu" '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_CAO_Commission_Consultation`
--

CREATE TABLE `t_CAO_Commission_Consultation` (
  `id_commission_consultation` bigint(20) NOT NULL COMMENT 'Identifiant de la consultation de commission',
  `id_commission` bigint(20) NOT NULL COMMENT 'Identifiant de la commission',
  `ref_consultation` varchar(255) NOT NULL COMMENT 'R?f?rence utilisateur de la consultation',
  `ref_libre` varchar(50) NOT NULL COMMENT 'R?f?rence de la consultation saisie manuellement',
  `organisme` varchar(30) NOT NULL COMMENT 'Acronyme de l''organisme ? laquelle appartient la commission',
  `intitule` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Intitul? de la consultation de commission',
  `id_type_procedure` int(10) NOT NULL COMMENT 'Identifiant du type de proc?dure de la consultation',
  `id_categorie` tinyint(4) NOT NULL COMMENT 'Id de la cat?gorie de la consultation',
  `service_gestionnaire` varchar(255) NOT NULL COMMENT 'Service gestionnaire de la consultation saisi manuellement',
  `id_service_gestionnaire` int(10) NOT NULL COMMENT 'Identifiant du service gestionnaire de la consultation',
  `service_associe` varchar(255) NOT NULL COMMENT 'Service associ? de la consultation saisi manuellement',
  `id_service_associe` int(10) NOT NULL COMMENT 'Identifiant du service associ? de la consultation',
  `date_cloture` datetime NOT NULL COMMENT 'Date de cl?ture de la consultation',
  `date_mise_en_ligne` datetime NOT NULL,
  `id_consultation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_CAO_Commission_Intervenant_Externe`
--

CREATE TABLE `t_CAO_Commission_Intervenant_Externe` (
  `id_commission_intervenant_externe` bigint(20) NOT NULL COMMENT 'Identifiant de l''intervenant externe pour la commission',
  `id_intervenant_externe` bigint(20) NOT NULL COMMENT 'Identifiant de l''intervenant externe de l''organisme',
  `id_commission` bigint(20) NOT NULL COMMENT 'Identifiant de la commission r?f?renc?e',
  `organisme` varchar(30) NOT NULL COMMENT 'Acronyme de l''organisme',
  `id_ref_val_type_voix_defaut` int(11) NOT NULL COMMENT 'Type de voix de l''intervenant pour la commission'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_CAO_Intervenant_Externe`
--

CREATE TABLE `t_CAO_Intervenant_Externe` (
  `id_intervenant_externe` bigint(20) NOT NULL COMMENT 'Identifiant de l''intervenant externe',
  `organisme` varchar(30) NOT NULL,
  `id_ref_val_civilite` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `organisation` varchar(50) NOT NULL,
  `fonction` varchar(100) NOT NULL,
  `id_ref_val_type_voix_defaut` int(11) NOT NULL COMMENT 'Type de voix par d?faut de l''intervenant externe',
  `adresse` varchar(255) NOT NULL DEFAULT '',
  `code_postal` char(15) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL DEFAULT '',
  `id_ref_val_mode_communication` tinyint(4) NOT NULL COMMENT 'Mode de communication avec l''intervenant externe'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_CAO_Ordre_De_Passage`
--

CREATE TABLE `t_CAO_Ordre_De_Passage` (
  `id_ordre_de_passage` bigint(20) NOT NULL COMMENT 'Identifiant de l''ordre de passage en commission de la consultation',
  `organisme` varchar(30) NOT NULL COMMENT 'Acronyme de l''organisme pour lequel a lieu la s?ance',
  `id_seance` bigint(20) NOT NULL COMMENT 'Identifiant de la s?ance',
  `id_commission` bigint(20) NOT NULL COMMENT 'Identifiant de la commission d?finissant la s?ance',
  `id_commission_consultation` bigint(11) NOT NULL COMMENT 'Identifiant de la consultation passant en commission',
  `ordre_de_passage` tinyint(4) NOT NULL COMMENT 'Num?ro de l''ordre de passage de la consultation en commission',
  `id_ref_org_val_etape` int(11) NOT NULL COMMENT 'Valeur r?f?rentielle de l''etape du passage en commission',
  `date_seance` datetime NOT NULL COMMENT 'Rappel de la date de la s?ance de commission',
  `date_passage` datetime NOT NULL COMMENT 'Date de passage de la consultation ? l''ordre du jour de la s?ance'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Ordre de passage dans une s?ance de commission';

-- --------------------------------------------------------

--
-- Structure de la table `t_CAO_Seance`
--

CREATE TABLE `t_CAO_Seance` (
  `id_seance` bigint(20) NOT NULL COMMENT 'Identifiant de la s?ance',
  `organisme` varchar(30) NOT NULL COMMENT 'Acronyme de l''organisme pour lequel a lieu la s?ance',
  `id_commission` bigint(11) NOT NULL COMMENT 'Identifiant de la commission d?finissant la s?ance',
  `date` datetime NOT NULL COMMENT 'Horaire de la s?ance',
  `lieu` varchar(200) NOT NULL,
  `salle` varchar(100) NOT NULL,
  `id_ref_val_statut` int(11) NOT NULL COMMENT 'Statut ? l''issue de la s?ance'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_CAO_Seance_Agent`
--

CREATE TABLE `t_CAO_Seance_Agent` (
  `id_seance_agent` bigint(20) NOT NULL COMMENT 'Identifiant de l''agent de la s?ance',
  `id_seance` bigint(20) NOT NULL COMMENT 'Identifiant de la s?ance',
  `id_agent` int(11) NOT NULL COMMENT 'Identifiant l''agent',
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `id_ref_val_type_voix` int(11) NOT NULL COMMENT 'Type de voix de l''agent pour la s?ance',
  `type_compte` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'Rappel du type de compte de l''agent "non ?lu" ou "?lu"'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_CAO_Seance_Intervenant_Externe`
--

CREATE TABLE `t_CAO_Seance_Intervenant_Externe` (
  `id_seance_intervenant_externe` bigint(20) NOT NULL COMMENT 'Identifiant de l''intervenant externe de la s?ance',
  `id_seance` bigint(20) NOT NULL COMMENT 'Identifiant de la s?ance',
  `id_intervenant_externe` bigint(20) NOT NULL COMMENT 'Identifiant l''intervenant externe',
  `organisme` varchar(30) NOT NULL,
  `id_ref_val_type_voix` int(11) NOT NULL COMMENT 'Type de voix de l''intervenant externe pour la s?ance'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_CAO_Seance_Invite`
--

CREATE TABLE `t_CAO_Seance_Invite` (
  `id_seance_invite` bigint(20) NOT NULL COMMENT 'Identifiant de l''invit? du passage en commission de la consultation',
  `organisme` varchar(30) NOT NULL COMMENT 'Acronyme de l''organisme auquel l''intervenant est rattach?',
  `id_ordre_de_passage` bigint(20) NOT NULL COMMENT 'Identifiant de l''ordre de passage en commission de la consultation',
  `id_intervenant_externe` bigint(20) DEFAULT NULL COMMENT 'Identifiant de l''intervenant',
  `id_agent` int(11) DEFAULT NULL COMMENT 'Identifiant de l''agent',
  `id_ref_val_type_voix` int(11) NOT NULL COMMENT 'Valeur r?f?rentielle du type de voix de l''intervenant'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Invit? d''une s?ance de commission pour une consultation';

-- --------------------------------------------------------

--
-- Structure de la table `t_chorus_tier_rejete`
--

CREATE TABLE `t_chorus_tier_rejete` (
  `id` int(20) NOT NULL,
  `id_echange` int(20) NOT NULL,
  `id_tier` varchar(14) NOT NULL,
  `code_rejet` varchar(255) DEFAULT NULL,
  `organisation_achat` varchar(255) DEFAULT NULL,
  `active` enum('0','1') NOT NULL DEFAULT '0',
  `date_creation` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_complement_formulaire`
--

CREATE TABLE `t_complement_formulaire` (
  `id_complement_formulaire` int(11) NOT NULL,
  `id_dossier_formulaire` int(11) NOT NULL,
  `numero_complement` int(11) DEFAULT NULL,
  `date_a_remettre` varchar(50) DEFAULT NULL,
  `date_remis_le` varchar(50) DEFAULT NULL,
  `motif` varchar(255) DEFAULT NULL,
  `commentaire` text,
  `statut_demande` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1 : en cours ou 2 : envoy?'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_compte_bancaire`
--

CREATE TABLE `t_compte_bancaire` (
  `ID` int(11) NOT NULL,
  `ID_ENTREPRISE` int(11) NOT NULL,
  `ID_INSCRIT` int(11) NOT NULL,
  `DENOMINATION` varchar(100) NOT NULL,
  `ID_BANQUE` int(11) NOT NULL,
  `IDENTIFIANT_BANCAIRE` varchar(100) NOT NULL,
  `CODE_VILLE` varchar(6) DEFAULT NULL,
  `CODE_AGENCE` varchar(6) DEFAULT NULL,
  `ID_VILLE` int(11) NOT NULL,
  `SUPPRIME` enum('0','1') NOT NULL DEFAULT '0',
  `ACTIF` enum('0','1') NOT NULL DEFAULT '1',
  `BANCARISE` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_critere_attribution`
--

CREATE TABLE `t_critere_attribution` (
  `id_critere_attribution` int(11) NOT NULL,
  `enonce` text,
  `ordre` int(11) NOT NULL DEFAULT '0',
  `ponderation` decimal(5,2) DEFAULT '0.00',
  `id_donnee_complementaire` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_donnee_complementaire`
--

CREATE TABLE `t_donnee_complementaire` (
  `id_donnee_complementaire` int(11) NOT NULL,
  `id_tranche_type_prix` int(11) DEFAULT NULL,
  `id_forme_prix` int(11) DEFAULT NULL,
  `id_ccag_reference` int(11) DEFAULT NULL,
  `reconductible` tinyint(1) DEFAULT NULL,
  `nombre_reconductions` int(11) DEFAULT NULL,
  `modalites_reconduction` varchar(1000) DEFAULT NULL,
  `variantes_autorisees` tinyint(1) DEFAULT NULL,
  `variantes_techniques_obligatoires` tinyint(1) DEFAULT NULL,
  `variantes_techniques_description` varchar(100) DEFAULT NULL,
  `decomposition_lots_techniques` tinyint(1) DEFAULT NULL,
  `id_duree_delai_description` int(11) DEFAULT NULL,
  `estimation_pf_att_pressenti` decimal(30,2) DEFAULT NULL,
  `estimation_bc_min_att_pressenti` decimal(30,2) DEFAULT NULL,
  `estimation_bc_max_att_pressenti` decimal(30,2) DEFAULT NULL,
  `estimation_pf_tab_ouv_offre` decimal(30,2) DEFAULT NULL,
  `estimation_dqe_tab_ouv_offre` decimal(30,2) DEFAULT NULL,
  `avis_attribution_present` tinyint(1) DEFAULT '0',
  `estimation_pf_preinscription` decimal(30,2) DEFAULT NULL,
  `estimation_bc_min_preinscription` decimal(30,2) DEFAULT NULL,
  `estimation_bc_max_preinscription` decimal(30,2) DEFAULT NULL,
  `estimation_date_valeur_preinscription` date DEFAULT NULL,
  `lieu_execution` varchar(40) DEFAULT NULL,
  `duree_marche` int(11) DEFAULT NULL,
  `duree_date_debut` date DEFAULT NULL,
  `duree_date_fin` date DEFAULT NULL,
  `duree_description` varchar(200) DEFAULT NULL,
  `id_choix_mois_jour` int(11) DEFAULT NULL,
  `id_unite` int(11) DEFAULT NULL,
  `id_nb_candidats_admis` int(11) DEFAULT NULL,
  `nombre_candidats_fixe` int(11) DEFAULT NULL,
  `nombre_candidats_min` int(11) DEFAULT NULL,
  `nombre_candidats_max` int(11) DEFAULT NULL,
  `delai_validite_offres` int(11) DEFAULT NULL,
  `phase_successive` tinyint(1) DEFAULT NULL,
  `id_groupement_attributaire` int(11) DEFAULT NULL,
  `id_critere_attribution` int(11) DEFAULT NULL,
  `type_prestation` int(11) NOT NULL DEFAULT '1',
  `delai_partiel` enum('0','1') NOT NULL DEFAULT '0',
  `adresse_retrais_dossiers` longtext,
  `adresse_depot_offres` longtext,
  `lieu_ouverture_plis` longtext,
  `pieces_dossier_admin` text,
  `id_tr_pieces_dossier_admin` int(11) DEFAULT NULL,
  `pieces_dossier_tech` text,
  `id_tr_pieces_dossier_tech` int(11) DEFAULT NULL,
  `pieces_dossier_additif` text,
  `id_tr_pieces_dossier_additif` int(11) DEFAULT NULL,
  `id_tr_adresse_retrais_dossiers` int(11) DEFAULT NULL,
  `id_tr_adresse_depot_offres` int(11) DEFAULT NULL,
  `id_tr_lieu_ouverture_plis` int(11) DEFAULT NULL,
  `caution_provisoire` varchar(255) DEFAULT NULL,
  `prix_aquisition_plans` varchar(255) DEFAULT NULL,
  `add_echantillon` varchar(255) DEFAULT NULL,
  `id_tr_add_echantillon` int(11) DEFAULT NULL COMMENT 'Identifiant de la traduction de l''?chantillon',
  `date_limite_echantillon` varchar(50) DEFAULT NULL,
  `add_reunion` varchar(255) DEFAULT NULL,
  `id_tr_add_reunion` int(11) DEFAULT NULL COMMENT 'Identifiant de la traduction de la r?union',
  `date_reunion` varchar(50) DEFAULT NULL,
  `reunion` enum('0','1') NOT NULL DEFAULT '0',
  `visites_lieux` enum('0','1') NOT NULL DEFAULT '0',
  `echantillon` enum('0','1') NOT NULL DEFAULT '0',
  `variantes` char(1) DEFAULT NULL,
  `variante_calcule` enum('0','1') NOT NULL DEFAULT '0',
  `criteres_identiques` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'permet de savoir si les crit?res sont identiques pour tous les lots',
  `date_expression_besoin` datetime DEFAULT NULL,
  `id_ref_contact_1` int(11) DEFAULT NULL,
  `id_ref_contact_2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_donnee_complementaire_tmp`
--

CREATE TABLE `t_donnee_complementaire_tmp` (
  `id_donnee_complementaire` int(11) NOT NULL,
  `id_tranche_type_prix` int(11) DEFAULT NULL,
  `id_forme_prix` int(11) DEFAULT NULL,
  `id_ccag_reference` int(11) DEFAULT NULL,
  `reconductible` tinyint(1) DEFAULT NULL,
  `nombre_reconductions` int(11) DEFAULT NULL,
  `modalites_reconduction` varchar(1000) DEFAULT NULL,
  `variantes_autorisees` tinyint(1) DEFAULT NULL,
  `variantes_techniques_obligatoires` tinyint(1) DEFAULT NULL,
  `variantes_techniques_description` varchar(100) DEFAULT NULL,
  `decomposition_lots_techniques` tinyint(1) DEFAULT NULL,
  `id_duree_delai_description` int(11) DEFAULT NULL,
  `estimation_pf_att_pressenti` decimal(30,2) DEFAULT NULL,
  `estimation_bc_min_att_pressenti` decimal(30,2) DEFAULT NULL,
  `estimation_bc_max_att_pressenti` decimal(30,2) DEFAULT NULL,
  `estimation_pf_tab_ouv_offre` decimal(30,2) DEFAULT NULL,
  `estimation_dqe_tab_ouv_offre` decimal(30,2) DEFAULT NULL,
  `avis_attribution_present` tinyint(1) DEFAULT '0',
  `estimation_pf_preinscription` decimal(30,2) DEFAULT NULL,
  `estimation_bc_min_preinscription` decimal(30,2) DEFAULT NULL,
  `estimation_bc_max_preinscription` decimal(30,2) DEFAULT NULL,
  `estimation_date_valeur_preinscription` date DEFAULT NULL,
  `lieu_execution` varchar(40) DEFAULT NULL,
  `duree_marche` int(11) DEFAULT NULL,
  `duree_date_debut` date DEFAULT NULL,
  `duree_date_fin` date DEFAULT NULL,
  `duree_description` varchar(200) DEFAULT NULL,
  `id_choix_mois_jour` int(11) DEFAULT NULL,
  `id_unite` int(11) DEFAULT NULL,
  `id_nb_candidats_admis` int(11) DEFAULT NULL,
  `nombre_candidats_fixe` int(11) DEFAULT NULL,
  `nombre_candidats_min` int(11) DEFAULT NULL,
  `nombre_candidats_max` int(11) DEFAULT NULL,
  `delai_validite_offres` int(11) DEFAULT NULL,
  `phase_successive` tinyint(1) DEFAULT NULL,
  `id_groupement_attributaire` int(11) DEFAULT NULL,
  `id_critere_attribution` int(11) DEFAULT NULL,
  `type_prestation` int(11) NOT NULL DEFAULT '1',
  `delai_partiel` enum('0','1') NOT NULL DEFAULT '0',
  `adresse_retrais_dossiers` longtext,
  `adresse_depot_offres` longtext,
  `lieu_ouverture_plis` longtext,
  `pieces_dossier_admin` text,
  `id_tr_pieces_dossier_admin` int(11) DEFAULT NULL,
  `pieces_dossier_tech` text,
  `id_tr_pieces_dossier_tech` int(11) DEFAULT NULL,
  `pieces_dossier_additif` text,
  `id_tr_pieces_dossier_additif` int(11) DEFAULT NULL,
  `id_tr_adresse_retrais_dossiers` int(11) DEFAULT NULL,
  `id_tr_adresse_depot_offres` int(11) DEFAULT NULL,
  `id_tr_lieu_ouverture_plis` int(11) DEFAULT NULL,
  `caution_provisoire` varchar(255) DEFAULT NULL,
  `prix_aquisition_plans` varchar(255) DEFAULT NULL,
  `add_echantillon` varchar(255) DEFAULT NULL,
  `id_tr_add_echantillon` int(11) DEFAULT NULL COMMENT 'Identifiant de la traduction de l''échantillon',
  `date_limite_echantillon` varchar(50) DEFAULT NULL,
  `add_reunion` varchar(255) DEFAULT NULL,
  `id_tr_add_reunion` int(11) DEFAULT NULL COMMENT 'Identifiant de la traduction de la réunion',
  `date_reunion` varchar(50) DEFAULT NULL,
  `reunion` enum('0','1') NOT NULL DEFAULT '0',
  `visites_lieux` enum('0','1') NOT NULL DEFAULT '0',
  `echantillon` enum('0','1') NOT NULL DEFAULT '0',
  `variantes` char(1) DEFAULT NULL,
  `variante_calcule` enum('0','1') NOT NULL DEFAULT '0',
  `organisme` varchar(30) DEFAULT NULL,
  `reference` int(11) DEFAULT NULL,
  `lot` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_dossier_formulaire`
--

CREATE TABLE `t_dossier_formulaire` (
  `id_dossier_formulaire` int(11) NOT NULL,
  `id_reponse_elec_formulaire` int(11) NOT NULL,
  `id_lot` int(11) DEFAULT NULL,
  `type_enveloppe` int(1) NOT NULL,
  `libelle_forrmulaire` varchar(255) NOT NULL,
  `cle_externe_dispositif` int(11) NOT NULL,
  `cle_externe_dossier` int(11) DEFAULT NULL,
  `statut_validation` enum('1','2','3') NOT NULL,
  `date_creation` varchar(255) DEFAULT NULL,
  `date_modif` varchar(255) DEFAULT NULL,
  `date_validation` varchar(255) DEFAULT NULL,
  `statut_generation_globale` int(1) DEFAULT NULL,
  `type_reponse` int(11) DEFAULT '1' COMMENT 'Permet de sp?cifier si le dossier est initial ou bien correspond ? une demande de compl?ment. Les valeurs correspondantes sont dans application.xml',
  `cle_externe_formulaire` int(11) DEFAULT NULL COMMENT 'Permet de stocker l''identifiant du formulaire SUB (id_formulaire) recup?r?e apr?s la validation',
  `formulaire_depose` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Ce champ est flagu? ? 1 lorsqu''une repons?e est depos?e sur le dossier',
  `id_dossier_pere` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_edition_formulaire`
--

CREATE TABLE `t_edition_formulaire` (
  `id_edition_formulaire` int(11) NOT NULL,
  `id_dossier_formulaire` int(11) NOT NULL,
  `cle_externe_edition` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `extension` varchar(3) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `hash` varchar(40) DEFAULT NULL,
  `signature` text,
  `date_generation` varchar(255) DEFAULT NULL,
  `date_depot` varchar(255) DEFAULT NULL,
  `statut_generation` int(1) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `nom_fichier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_enveloppe_dossier_formulaire`
--

CREATE TABLE `t_enveloppe_dossier_formulaire` (
  `id_enveloppe_dossier_formulaire` int(11) NOT NULL,
  `id_dossier_formulaire` int(11) NOT NULL,
  `id_enveloppe` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `id_lot` int(11) DEFAULT NULL,
  `type_enveloppe` int(1) NOT NULL,
  `libelle_forrmulaire` varchar(255) NOT NULL,
  `cle_externe_dispositif` int(11) NOT NULL,
  `cle_externe_dossier` int(11) DEFAULT NULL,
  `statut_validation` enum('1','2','3') NOT NULL,
  `date_creation` varchar(255) DEFAULT NULL,
  `date_modif` varchar(255) DEFAULT NULL,
  `date_validation` varchar(255) DEFAULT NULL,
  `statut_generation_globale` int(1) DEFAULT NULL,
  `type_reponse` int(11) DEFAULT '1' COMMENT 'Permet de sp?cifier si le dossier est initial ou bien correspond ? une demande de compl?ment. Les valeurs correspondantes sont dans application.xml',
  `cle_externe_formulaire` int(11) DEFAULT NULL COMMENT 'Permet de stocker l''identifiant du formulaire SUB (id_formulaire) recup?r?e apr?s la validation'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_espace_collaboratif`
--

CREATE TABLE `t_espace_collaboratif` (
  `id_auto` int(11) UNSIGNED NOT NULL,
  `reference` int(11) NOT NULL,
  `organisme` varchar(20) NOT NULL,
  `nom_espace` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contient la liste des espaces collaboratifs cr??s';

-- --------------------------------------------------------

--
-- Structure de la table `t_flux_rss`
--

CREATE TABLE `t_flux_rss` (
  `id` int(11) NOT NULL,
  `tender_xml` text NOT NULL,
  `nom_fichier` varchar(255) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `module` varchar(255) DEFAULT NULL,
  `afficher_flux_rss` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'ce paramettre permet d''afficher le flux rss dans la page des FluxRss'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_forme_prix`
--

CREATE TABLE `t_forme_prix` (
  `id_forme_prix` int(11) NOT NULL,
  `forme_prix` enum('PU','PF','PM') NOT NULL,
  `pf_estimation_ht` decimal(30,2) DEFAULT NULL,
  `pf_estimation_ttc` decimal(30,2) DEFAULT NULL,
  `pf_date_valeur` date DEFAULT NULL,
  `id_min_max` int(11) DEFAULT NULL,
  `modalite` enum('bon_commande','quantite_definie') DEFAULT NULL,
  `pu_min` decimal(30,2) DEFAULT NULL,
  `pu_max` decimal(30,2) DEFAULT NULL,
  `pu_min_ttc` decimal(30,2) DEFAULT NULL,
  `pu_max_ttc` decimal(30,2) DEFAULT NULL,
  `pu_estimation_ht` decimal(30,2) DEFAULT NULL,
  `pu_estimation_ttc` decimal(30,2) DEFAULT NULL,
  `pu_date_valeur` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_forme_prix_has_ref_type_prix`
--

CREATE TABLE `t_forme_prix_has_ref_type_prix` (
  `id_forme_prix` int(11) NOT NULL,
  `id_type_prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_forme_prix_pf_has_ref_variation`
--

CREATE TABLE `t_forme_prix_pf_has_ref_variation` (
  `id_variation` int(11) NOT NULL,
  `id_forme_prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_forme_prix_pu_has_ref_variation`
--

CREATE TABLE `t_forme_prix_pu_has_ref_variation` (
  `id_variation` int(11) NOT NULL,
  `id_forme_prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `T_Illustration_Fond`
--

CREATE TABLE `T_Illustration_Fond` (
  `id_illustration_fond` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `actif` enum('0','1') NOT NULL DEFAULT '0',
  `nom_image` varchar(255) DEFAULT NULL,
  `id_blob_image` varchar(50) DEFAULT NULL,
  `id_agent` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_lancement_unique_cli`
--

CREATE TABLE `t_lancement_unique_cli` (
  `id_lancement_unique_cli` int(11) NOT NULL,
  `nom_cli` varchar(255) NOT NULL,
  `en_cours` enum('0','1') NOT NULL DEFAULT '0',
  `date_lancement` varchar(50) DEFAULT NULL,
  `date_fin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_lot_technique`
--

CREATE TABLE `t_lot_technique` (
  `id_lot_technique` int(11) NOT NULL,
  `id_donnee_complementaire` int(11) NOT NULL,
  `numero_lot` varchar(3) DEFAULT NULL,
  `intitule_lot` varchar(1000) DEFAULT NULL,
  `principal` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_lot_technique_has_tranche`
--

CREATE TABLE `t_lot_technique_has_tranche` (
  `id_lot_technique` int(11) NOT NULL,
  `id_tranche` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_param_dossier_formulaire`
--

CREATE TABLE `t_param_dossier_formulaire` (
  `id_param_dossier_formulaire` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `consultation_ref` int(11) NOT NULL,
  `type_enveloppe` int(1) NOT NULL,
  `libelle_formulaire` varchar(255) NOT NULL,
  `cle_externe_dispositif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `T_Profil_Joue`
--

CREATE TABLE `T_Profil_Joue` (
  `id` int(11) NOT NULL,
  `id_agent` int(11) NOT NULL,
  `organisme` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nom_officiel` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pays` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `code_postal` varchar(50) DEFAULT NULL,
  `point_contact` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `a_attention_de` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `adresse_pouvoir_adjudicateur` varchar(255) DEFAULT NULL,
  `adresse_profil_acheteur` varchar(255) DEFAULT NULL,
  `autorite_nationale` int(2) DEFAULT NULL,
  `office_nationale` int(2) DEFAULT NULL,
  `collectivite_territoriale` int(2) DEFAULT NULL,
  `office_regionale` int(2) DEFAULT NULL,
  `organisme_public` int(2) DEFAULT NULL,
  `organisation_europenne` int(2) DEFAULT NULL,
  `autre_type_pouvoir_adjudicateur` int(2) DEFAULT NULL,
  `autre_libelle_type_pouvoir_adjudicateur` varchar(50) DEFAULT NULL,
  `services_generaux` int(2) DEFAULT NULL,
  `defense` int(2) DEFAULT NULL,
  `securite_public` int(2) DEFAULT NULL,
  `environnement` int(2) DEFAULT NULL,
  `affaires_economiques` int(2) DEFAULT NULL,
  `sante` int(2) DEFAULT NULL,
  `developpement_collectif` int(2) DEFAULT NULL,
  `protection_sociale` int(2) DEFAULT NULL,
  `loisirs` int(2) DEFAULT NULL,
  `eduction` int(2) DEFAULT NULL,
  `autre_activites_principales` int(2) DEFAULT NULL,
  `autre_libelle_activites_principales` varchar(50) DEFAULT NULL,
  `pouvoir_adjudicateur_agit` int(2) DEFAULT NULL,
  `pouvoir_adjudicateur_marche_couvert` int(2) DEFAULT NULL,
  `entite_adjudicatrice_marche_couvert` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_referentiel_certificat`
--

CREATE TABLE `t_referentiel_certificat` (
  `id` int(11) NOT NULL,
  `nom_referentiel_certificat` varchar(255) NOT NULL,
  `statut_referentiel_certificat` int(1) NOT NULL,
  `nom_referentiel_fonctionnel` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Cette table contient les r?f?rentiel des certificats et leur';

-- --------------------------------------------------------

--
-- Structure de la table `t_reponse_elec_formulaire`
--

CREATE TABLE `t_reponse_elec_formulaire` (
  `id_reponse_elec_formulaire` int(11) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `consultation_ref` int(11) NOT NULL,
  `id_entreprise` int(11) NOT NULL,
  `id_inscrit` int(11) NOT NULL,
  `statut_validation_globale` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_sous_critere_attribution`
--

CREATE TABLE `t_sous_critere_attribution` (
  `id_sous_critere_attribution` int(50) NOT NULL,
  `enonce` varchar(50) DEFAULT NULL,
  `ponderation` decimal(5,2) DEFAULT '0.00',
  `id_critere_attribution` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_synthese_rapport_audit`
--

CREATE TABLE `t_synthese_rapport_audit` (
  `id` int(20) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `nom_fichier` varchar(50) NOT NULL DEFAULT '',
  `fichier` varchar(20) NOT NULL DEFAULT '',
  `date` varchar(20) NOT NULL DEFAULT '',
  `horodatage` longblob NOT NULL,
  `untrusteddate` varchar(20) NOT NULL DEFAULT '',
  `taille` int(20) NOT NULL DEFAULT '0',
  `annee` varchar(20) NOT NULL,
  `service_id` int(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `T_Theme_Graphique`
--

CREATE TABLE `T_Theme_Graphique` (
  `id_theme_graphique` int(11) NOT NULL,
  `code` varchar(255) CHARACTER SET latin1 NOT NULL COMMENT 'ce code est utilis? pour d?signer quel th?me on va utiliser. Remarque : il ne faut pas ajouter un th?me avec le code qu''on a pour le th?me par d?faut qui se trouve dans le fichier de param?trage',
  `libelle` varchar(255) NOT NULL,
  `actif` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `T_trace_operations_inscrit_details`
--

CREATE TABLE `T_trace_operations_inscrit_details` (
  `id` int(11) NOT NULL,
  `id_trace` int(11) NOT NULL,
  `date_debut_action` datetime DEFAULT NULL,
  `nom_action` varchar(100) DEFAULT NULL,
  `details` varchar(50) DEFAULT NULL,
  `date_fin_action` datetime DEFAULT NULL,
  `id_description` int(10) DEFAULT NULL,
  `afficher` enum('0','1') NOT NULL DEFAULT '0',
  `descripton` varchar(250) NOT NULL,
  `log_applet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `T_Traduction`
--

CREATE TABLE `T_Traduction` (
  `langue` varchar(2) NOT NULL,
  `id_libelle` int(11) NOT NULL,
  `libelle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `T_Traduction_Tmp`
--

CREATE TABLE `T_Traduction_Tmp` (
  `langue` varchar(2) NOT NULL,
  `id_libelle` int(11) NOT NULL,
  `libelle` text NOT NULL,
  `champ` text NOT NULL,
  `organisme` varchar(30) DEFAULT NULL,
  `reference` int(11) DEFAULT NULL,
  `lot` int(11) DEFAULT NULL,
  `id_donnee_complementaire` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_tranche`
--

CREATE TABLE `t_tranche` (
  `id_tranche` int(11) NOT NULL,
  `id_forme_prix` int(11) DEFAULT NULL,
  `id_donnee_complementaire` int(11) DEFAULT NULL,
  `nature_tranche` enum('TF','TC') DEFAULT NULL,
  `code_tranche` int(11) DEFAULT NULL,
  `intitule_tranche` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ValeurReferentiel`
--

CREATE TABLE `ValeurReferentiel` (
  `id` int(10) NOT NULL,
  `id_referentiel` int(10) NOT NULL DEFAULT '0',
  `libelle_valeur_referentiel` text NOT NULL,
  `libelle_valeur_referentiel_fr` text NOT NULL,
  `libelle_valeur_referentiel_en` text NOT NULL,
  `libelle_valeur_referentiel_es` text NOT NULL,
  `libelle_valeur_referentiel_su` text NOT NULL,
  `libelle_valeur_referentiel_du` text NOT NULL,
  `libelle_valeur_referentiel_cz` text NOT NULL,
  `libelle_valeur_referentiel_ar` text NOT NULL,
  `libelle_2` varchar(200) NOT NULL DEFAULT '',
  `libelle_valeur_referentiel_it` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ValeurReferentielOrg`
--

CREATE TABLE `ValeurReferentielOrg` (
  `id` int(10) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `id_referentiel` int(10) NOT NULL DEFAULT '0',
  `libelle_valeur_referentiel` text NOT NULL,
  `libelle_valeur_referentiel_fr` text NOT NULL,
  `libelle_valeur_referentiel_en` text NOT NULL,
  `libelle_valeur_referentiel_es` text NOT NULL,
  `libelle_valeur_referentiel_su` text NOT NULL,
  `libelle_valeur_referentiel_du` text NOT NULL,
  `libelle_valeur_referentiel_cz` text NOT NULL,
  `libelle_valeur_referentiel_ar` text NOT NULL,
  `libelle_valeur_referentiel_it` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `visite_lieux`
--

CREATE TABLE `visite_lieux` (
  `id` int(50) NOT NULL,
  `organisme` varchar(30) NOT NULL DEFAULT '',
  `reference` int(50) NOT NULL DEFAULT '0',
  `adresse` varchar(250) NOT NULL DEFAULT '',
  `id_tr_adresse` int(11) DEFAULT NULL COMMENT 'Identifiant de la traduction de l''adresse des visites des lieux',
  `date` varchar(50) NOT NULL DEFAULT '',
  `lot` char(1) NOT NULL DEFAULT '',
  `adresse_fr` varchar(255) DEFAULT NULL,
  `adresse_en` varchar(255) DEFAULT NULL,
  `adresse_es` varchar(255) DEFAULT NULL,
  `adresse_su` varchar(255) DEFAULT NULL,
  `adresse_du` varchar(255) DEFAULT NULL,
  `adresse_cz` varchar(255) DEFAULT NULL,
  `adresse_ar` varchar(255) DEFAULT NULL,
  `adresse_it` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `AcheteurPublic`
--
ALTER TABLE `AcheteurPublic`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `Administrateur`
--
ALTER TABLE `Administrateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organisme` (`organisme`);

--
-- Index pour la table `Admissibilite_Analyse`
--
ALTER TABLE `Admissibilite_Analyse`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Admissibilite_Enveloppe_Lot`
--
ALTER TABLE `Admissibilite_Enveloppe_Lot`
  ADD PRIMARY KEY (`id_Offre`,`sous_pli`,`type_enveloppe`,`organisme`);

--
-- Index pour la table `Admissibilite_Enveloppe_papier_Lot`
--
ALTER TABLE `Admissibilite_Enveloppe_papier_Lot`
  ADD PRIMARY KEY (`id_offre_papier`,`sous_pli`,`type_enveloppe`,`organisme`);

--
-- Index pour la table `AdresseFacturationJal`
--
ALTER TABLE `AdresseFacturationJal`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `AffiliationService`
--
ALTER TABLE `AffiliationService`
  ADD PRIMARY KEY (`id_service`,`id_pole`,`organisme`),
  ADD KEY `id_service` (`id_service`),
  ADD KEY `id_pole` (`id_pole`),
  ADD KEY `organisme` (`organisme`),
  ADD KEY `AffiliationService_Pole` (`id_pole`,`organisme`),
  ADD KEY `AffiliationService_Service` (`id_service`,`organisme`);

--
-- Index pour la table `Agent`
--
ALTER TABLE `Agent`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `organisme` (`organisme`);

--
-- Index pour la table `agent_banquier`
--
ALTER TABLE `agent_banquier`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_A7D6AECC92FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_A7D6AECCA0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_A7D6AECCC05FB297` (`confirmation_token`);

--
-- Index pour la table `Agent_Service_Metier`
--
ALTER TABLE `Agent_Service_Metier`
  ADD PRIMARY KEY (`id_agent`,`id_service_metier`),
  ADD KEY `id_agent` (`id_agent`),
  ADD KEY `id_service_metier` (`id_service_metier`);

--
-- Index pour la table `Agrement`
--
ALTER TABLE `Agrement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Alerte`
--
ALTER TABLE `Alerte`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `alerte_metier`
--
ALTER TABLE `alerte_metier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reference_cons` (`reference_cons`),
  ADD KEY `organisme` (`organisme`),
  ADD KEY `id_alerte` (`id_alerte`);

--
-- Index pour la table `Annonce`
--
ALTER TABLE `Annonce`
  ADD PRIMARY KEY (`id_boamp`,`organisme`),
  ADD KEY `organisme` (`organisme`,`consultation_ref`),
  ADD KEY `Idx_Annonce` (`consultation_ref`);

--
-- Index pour la table `AnnonceBoamp`
--
ALTER TABLE `AnnonceBoamp`
  ADD PRIMARY KEY (`id_boamp`,`organisme`),
  ADD KEY `consultation_ref` (`consultation_ref`),
  ADD KEY `id_destination_form_xml` (`id_destination_form_xml`),
  ADD KEY `id_form_xml` (`id_form_xml`),
  ADD KEY `id_type_xml` (`id_type_xml`),
  ADD KEY `Idx_Annonce` (`consultation_ref`),
  ADD KEY `AnnonceBoamp_consultation` (`organisme`,`consultation_ref`);

--
-- Index pour la table `AnnonceJAL`
--
ALTER TABLE `AnnonceJAL`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `AnnonceJALPieceJointe`
--
ALTER TABLE `AnnonceJALPieceJointe`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `id_annonce_jal` (`id_annonce_jal`);

--
-- Index pour la table `AnnonceMoniteur`
--
ALTER TABLE `AnnonceMoniteur`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `id_form_xml` (`id_form_xml`),
  ADD KEY `id_destination_form_xml` (`id_destination_form_xml`);

--
-- Index pour la table `Annonce_Press`
--
ALTER TABLE `Annonce_Press`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `id_Dest_Press` (`id_Dest_Press`);

--
-- Index pour la table `Annonce_Press_PieceJointe`
--
ALTER TABLE `Annonce_Press_PieceJointe`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `id_annonce_press` (`id_annonce_press`);

--
-- Index pour la table `Articles`
--
ALTER TABLE `Articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `article_catalogue`
--
ALTER TABLE `article_catalogue`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Autres_Pieces_Mise_Disposition`
--
ALTER TABLE `Autres_Pieces_Mise_Disposition`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Avenant`
--
ALTER TABLE `Avenant`
  ADD PRIMARY KEY (`id_avenant`,`organisme`),
  ADD KEY `id_contrat` (`id_contrat`);

--
-- Index pour la table `AVIS`
--
ALTER TABLE `AVIS`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `consultation_ref` (`consultation_ref`),
  ADD KEY `AVIS_consultation` (`organisme`,`consultation_ref`);

--
-- Index pour la table `AvisCao`
--
ALTER TABLE `AvisCao`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Avis_Membres_CAO`
--
ALTER TABLE `Avis_Membres_CAO`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Avis_Pub`
--
ALTER TABLE `Avis_Pub`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `consultation_ref` (`consultation_ref`),
  ADD KEY `Avis_Pub_consultation` (`organisme`,`consultation_ref`);

--
-- Index pour la table `backup_Agent_Commission`
--
ALTER TABLE `backup_Agent_Commission`
  ADD PRIMARY KEY (`id_commission`,`id_agent`,`organisme`);

--
-- Index pour la table `backup_Commission`
--
ALTER TABLE `backup_Commission`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `backup_Etape_CAO`
--
ALTER TABLE `backup_Etape_CAO`
  ADD PRIMARY KEY (`id_etape_cao`);

--
-- Index pour la table `backup_Intervenant_Externe`
--
ALTER TABLE `backup_Intervenant_Externe`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `backup_Intervenant_Externe_Commission`
--
ALTER TABLE `backup_Intervenant_Externe_Commission`
  ADD PRIMARY KEY (`id_commission`,`id_intervenant_externe`,`organisme`),
  ADD KEY `id_intervenant_externe` (`id_intervenant_externe`);

--
-- Index pour la table `backup_Intervenant_Ordre_Du_Jour`
--
ALTER TABLE `backup_Intervenant_Ordre_Du_Jour`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `id_ordre_du_jour` (`id_ordre_du_jour`);

--
-- Index pour la table `backup_Ordre_Du_Jour`
--
ALTER TABLE `backup_Ordre_Du_Jour`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `id_commission` (`id_commission`),
  ADD KEY `ref_Consultation` (`ref_consultation`);

--
-- Index pour la table `backup_Ordre_Du_Jour_2`
--
ALTER TABLE `backup_Ordre_Du_Jour_2`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `id_commission` (`id_seance`),
  ADD KEY `ref_Consultation` (`ref_consultation`);

--
-- Index pour la table `blob`
--
ALTER TABLE `blob`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `blobOrganisme`
--
ALTER TABLE `blobOrganisme`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `blobOrganisme_file`
--
ALTER TABLE `blobOrganisme_file`
  ADD PRIMARY KEY (`id`,`revision`,`organisme`);

--
-- Index pour la table `blob_file`
--
ALTER TABLE `blob_file`
  ADD PRIMARY KEY (`id`,`revision`);

--
-- Index pour la table `blocFichierEnveloppe`
--
ALTER TABLE `blocFichierEnveloppe`
  ADD PRIMARY KEY (`id_bloc_fichier`,`organisme`),
  ADD KEY `id_fichier` (`id_fichier`),
  ADD KEY `blocFichierEnveloppe_fichierEnveloppe` (`id_fichier`,`organisme`);

--
-- Index pour la table `blocFichierEnveloppeTemporaire`
--
ALTER TABLE `blocFichierEnveloppeTemporaire`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `bon_commande_par_catalogue`
--
ALTER TABLE `bon_commande_par_catalogue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_demande` (`id_demande`),
  ADD KEY `id_entreprise` (`id_entreprise`);

--
-- Index pour la table `catalogues`
--
ALTER TABLE `catalogues`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `CategorieConsultation`
--
ALTER TABLE `CategorieConsultation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `CategorieINSEE`
--
ALTER TABLE `CategorieINSEE`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `CategorieLot`
--
ALTER TABLE `CategorieLot`
  ADD PRIMARY KEY (`organisme`,`consultation_ref`,`lot`),
  ADD KEY `organisme` (`organisme`,`consultation_ref`),
  ADD KEY `Idx_CategorieLot` (`consultation_ref`);

--
-- Index pour la table `caution_demande`
--
ALTER TABLE `caution_demande`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `caution_demande_ID_AGENT_BANQUIER_VALIDATION_FK` (`ID_AGENT_BANQUIER_VALIDATION`),
  ADD KEY `caution_demande_ID_AGENT_BANQUIER_REJET_FK` (`ID_AGENT_BANQUIER_REJET`),
  ADD KEY `caution_demande_ID_AGENT_PRISE_EN_CHARGE_FK` (`ID_AGENT_PRISE_EN_CHARGE`),
  ADD KEY `caution_demande_id_signataire1_fk` (`ID_SIGNATAIRE1`),
  ADD KEY `caution_demande_id_signataire2_fk` (`ID_SIGNATAIRE2`),
  ADD KEY `FK_ID_GROUPEMENT` (`ID_GROUPEMENT`),
  ADD KEY `caution_demande_ID_COMPTE_BANCAIRE_FK` (`ID_COMPTE_BANCAIRE`);

--
-- Index pour la table `caution_historique`
--
ALTER TABLE `caution_historique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `caution_referentiel`
--
ALTER TABLE `caution_referentiel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `caution_restitution`
--
ALTER TABLE `caution_restitution`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `caution_mainlevee_ID_AGENT_BANQUIER_VALIDATION_FK` (`ID_AGENT_BANQUIER_VALIDATION`),
  ADD KEY `caution_mainlevee_ID_AGENT_BANQUIER_REJET_FK` (`ID_AGENT_BANQUIER_REJET`),
  ADD KEY `caution_mainlevee_ID_AGENT_PRISE_EN_CHARGE_FK` (`ID_AGENT_BANQUIER_PRISE_EN_CHARGE`),
  ADD KEY `caution_mainlevee_id_ID_AGENT_ACHETEUR_SIGNATAIRE_FK` (`ID_AGENT_ACHETEUR_SIGNATAIRE`),
  ADD KEY `caution_restitution_ID_CAUTION_DEMANDE_FK` (`ID_CAUTION_DEMANDE`);

--
-- Index pour la table `caution_signataire_demande`
--
ALTER TABLE `caution_signataire_demande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `caution_signataire_demande_id_signataire_fk` (`id_signataire`),
  ADD KEY `caution_signataire_demande_id_demande_fk` (`id_demande`);

--
-- Index pour la table `caution_signature`
--
ALTER TABLE `caution_signature`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_BLOB` (`ID_BLOB`);

--
-- Index pour la table `caution_signature_restitution`
--
ALTER TABLE `caution_signature_restitution`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_BLOB` (`ID_BLOB`),
  ADD KEY `ID` (`ID`);

--
-- Index pour la table `ccag_applicable`
--
ALTER TABLE `ccag_applicable`
  ADD PRIMARY KEY (`id_auto`);

--
-- Index pour la table `Centrale_publication`
--
ALTER TABLE `Centrale_publication`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `CertificatChiffrement`
--
ALTER TABLE `CertificatChiffrement`
  ADD PRIMARY KEY (`consultation_ref`,`type_env`,`sous_pli`,`index_certificat`,`organisme`),
  ADD KEY `consultation_ref` (`consultation_ref`);

--
-- Index pour la table `CertificatPermanent`
--
ALTER TABLE `CertificatPermanent`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `Certificats_Entreprises`
--
ALTER TABLE `Certificats_Entreprises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_entreprise` (`id_entreprise`),
  ADD KEY `id_inscrit` (`id_inscrit`);

--
-- Index pour la table `Certificat_Agent`
--
ALTER TABLE `Certificat_Agent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_service` (`id_service`),
  ADD KEY `id_agent` (`id_agent`);

--
-- Index pour la table `CG76_Domaine`
--
ALTER TABLE `CG76_Domaine`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `CG76_Donnee_Complementaire_Domaine`
--
ALTER TABLE `CG76_Donnee_Complementaire_Domaine`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_domaine` (`IdDomaine`);

--
-- Index pour la table `CG76_Donnee_Complementaire_entreprise`
--
ALTER TABLE `CG76_Donnee_Complementaire_entreprise`
  ADD PRIMARY KEY (`Ref`),
  ADD KEY `idInscrit` (`idInscrit`),
  ADD KEY `Entreprise` (`IdEntreprise`);

--
-- Index pour la table `CG76_PieceJointe`
--
ALTER TABLE `CG76_PieceJointe`
  ADD PRIMARY KEY (`Ref`),
  ADD KEY `Entreprise` (`idEntreprise`);

--
-- Index pour la table `changement_heure`
--
ALTER TABLE `changement_heure`
  ADD PRIMARY KEY (`date_debut_zone`,`date_fin_zone`,`organisme`),
  ADD KEY `organisme` (`organisme`);

--
-- Index pour la table `Chorus_acte_juridique`
--
ALTER TABLE `Chorus_acte_juridique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Chorus_Code_Calcul_Interets`
--
ALTER TABLE `Chorus_Code_Calcul_Interets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Chorus_conditions_paiements`
--
ALTER TABLE `Chorus_conditions_paiements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Chorus_echange`
--
ALTER TABLE `Chorus_echange`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `id_decision` (`id_decision`),
  ADD KEY `ChorusEchange_decisionEnveloppe` (`id_decision`,`organisme`);

--
-- Index pour la table `Chorus_Fiche_Navette`
--
ALTER TABLE `Chorus_Fiche_Navette`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `id_chorus_echange` (`id_chorus_echange`);

--
-- Index pour la table `Chorus_forme_prix`
--
ALTER TABLE `Chorus_forme_prix`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Chorus_groupement_achat`
--
ALTER TABLE `Chorus_groupement_achat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_oa` (`id_oa`);

--
-- Index pour la table `chorus_noms_fichiers`
--
ALTER TABLE `chorus_noms_fichiers`
  ADD PRIMARY KEY (`id_echange`,`nom_fichier`),
  ADD KEY `organisme` (`acronyme_organisme`);

--
-- Index pour la table `chorus_numeros_marches`
--
ALTER TABLE `chorus_numeros_marches`
  ADD PRIMARY KEY (`numero_marche`),
  ADD KEY `organisme` (`acronyme_organisme`);

--
-- Index pour la table `Chorus_numero_sequence`
--
ALTER TABLE `Chorus_numero_sequence`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Chorus_organisation_achat`
--
ALTER TABLE `Chorus_organisation_achat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Chorus_pj`
--
ALTER TABLE `Chorus_pj`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `id_echange` (`id_echange`),
  ADD KEY `Chorus_pj_Chorus_echange` (`id_echange`,`organisme`);

--
-- Index pour la table `Chorus_Regroupement_Comptable`
--
ALTER TABLE `Chorus_Regroupement_Comptable`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `Chorus_Type_Groupement`
--
ALTER TABLE `Chorus_Type_Groupement`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `Chorus_type_marche`
--
ALTER TABLE `Chorus_type_marche`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Chorus_type_procedure`
--
ALTER TABLE `Chorus_type_procedure`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Complement`
--
ALTER TABLE `Complement`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `consultation_ref` (`consultation_ref`),
  ADD KEY `Complement_consultation` (`organisme`,`consultation_ref`);

--
-- Index pour la table `CompteMoniteur`
--
ALTER TABLE `CompteMoniteur`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `comptes_agents_associes`
--
ALTER TABLE `comptes_agents_associes`
  ADD PRIMARY KEY (`compte_principal`,`compte_secondaire`);

--
-- Index pour la table `compte_centrale`
--
ALTER TABLE `compte_centrale`
  ADD PRIMARY KEY (`ID_COMPTE`,`ORGANISME`),
  ADD KEY `ID_CENTRALE` (`ID_CENTRALE`);

--
-- Index pour la table `configuration_alerte`
--
ALTER TABLE `configuration_alerte`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `configuration_organisme`
--
ALTER TABLE `configuration_organisme`
  ADD PRIMARY KEY (`organisme`);

--
-- Index pour la table `configuration_plateforme`
--
ALTER TABLE `configuration_plateforme`
  ADD PRIMARY KEY (`id_auto`);

--
-- Index pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`reference`,`organisme`),
  ADD KEY `organisme` (`organisme`),
  ADD KEY `reference` (`reference`),
  ADD KEY `Idx_Consultation_Categorie` (`categorie`),
  ADD KEY `Idx_Consultation_CAP` (`consultation_achat_publique`),
  ADD KEY `Idx_Consultation_Datevalid` (`datevalidation`),
  ADD KEY `Idx_Consultation_EA` (`etat_approbation`),
  ADD KEY `Idx_Consultation_DVI` (`date_validation_intermediaire`),
  ADD KEY `Idx_Consultation_RU` (`reference_utilisateur`),
  ADD KEY `Idx_Consultation_Datefin` (`datefin`),
  ADD KEY `Idx_Consultation_ITP` (`id_type_procedure`),
  ADD KEY `Idx_Consultation_TML` (`type_mise_en_ligne`),
  ADD KEY `Idx_Consultation_DMLC` (`date_mise_en_ligne_calcule`),
  ADD KEY `Idx_Consultation_Datemiseenligne` (`datemiseenligne`),
  ADD KEY `Idx_Consultation_Code_CPV` (`code_cpv_1`,`code_cpv_2`),
  ADD KEY `idx_consultation_alerte` (`alerte`),
  ADD KEY `index_url_migration` (`url_consultation_externe`(255)),
  ADD KEY `Operations_fk` (`idOperation`),
  ADD KEY `DATE_FIN_UNIX` (`DATE_FIN_UNIX`);

--
-- Index pour la table `ConsultationFormulaire`
--
ALTER TABLE `ConsultationFormulaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ConsultationHistoriqueEtat`
--
ALTER TABLE `ConsultationHistoriqueEtat`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `consultation_ref` (`consultation_ref`);

--
-- Index pour la table `consultation_document_cfe`
--
ALTER TABLE `consultation_document_cfe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_justificatif` (`id_justificatif`,`ref_consultation`,`id_entreprise`),
  ADD KEY `id_entreprise` (`id_entreprise`),
  ADD KEY `ref_consultation` (`ref_consultation`),
  ADD KEY `organisme_consultation` (`organisme_consultation`),
  ADD KEY `blob` (`id_blob`);

--
-- Index pour la table `Contact_Entreprise`
--
ALTER TABLE `Contact_Entreprise`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_entreprise` (`id_entreprise`);

--
-- Index pour la table `Contrat`
--
ALTER TABLE `Contrat`
  ADD PRIMARY KEY (`id_contrat`,`organisme`),
  ADD KEY `id_marche` (`id_marche`),
  ADD KEY `id_decision` (`id_decision`);

--
-- Index pour la table `Criteres_Evaluation`
--
ALTER TABLE `Criteres_Evaluation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `DATEFIN`
--
ALTER TABLE `DATEFIN`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `consultation_ref` (`consultation_ref`),
  ADD KEY `DATEFIN_consultation` (`organisme`,`consultation_ref`);

--
-- Index pour la table `DateLancementCron`
--
ALTER TABLE `DateLancementCron`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `DA_Consultation`
--
ALTER TABLE `DA_Consultation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DA_Consultation_ibfk_1` (`organisme`),
  ADD KEY `DA_Consultation_ibfk_2` (`consultation_ref`);

--
-- Index pour la table `DCE`
--
ALTER TABLE `DCE`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `consultation_ref` (`consultation_ref`),
  ADD KEY `organisme` (`organisme`),
  ADD KEY `DCE_consultation` (`organisme`,`consultation_ref`);

--
-- Index pour la table `decisionEnveloppe`
--
ALTER TABLE `decisionEnveloppe`
  ADD PRIMARY KEY (`id_decision_enveloppe`,`organisme`),
  ADD KEY `ref_Consultation` (`consultation_ref`);

--
-- Index pour la table `DecisionLot`
--
ALTER TABLE `DecisionLot`
  ADD PRIMARY KEY (`id_decision_lot`,`organisme`),
  ADD KEY `ref_Consultation` (`consultation_ref`);

--
-- Index pour la table `DecisionPassationConsultation`
--
ALTER TABLE `DecisionPassationConsultation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `DecisionPassationMarcheAVenir`
--
ALTER TABLE `DecisionPassationMarcheAVenir`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demande_achat_ligne`
--
ALTER TABLE `demande_achat_ligne`
  ADD PRIMARY KEY (`id_demande_achat_ligne`);

--
-- Index pour la table `demande_achat_par_catalogue`
--
ALTER TABLE `demande_achat_par_catalogue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_agent` (`id_agent`),
  ADD KEY `organisme` (`organisme`);

--
-- Index pour la table `demande_achat_par_catalogue_article`
--
ALTER TABLE `demande_achat_par_catalogue_article`
  ADD PRIMARY KEY (`id_demande`,`id_article`);

--
-- Index pour la table `demande_complement`
--
ALTER TABLE `demande_complement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Departement`
--
ALTER TABLE `Departement`
  ADD PRIMARY KEY (`id_departement`);

--
-- Index pour la table `DestinataireAnnonceJAL`
--
ALTER TABLE `DestinataireAnnonceJAL`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `idJAL` (`idJAL`),
  ADD KEY `idAnnonceJAL` (`idAnnonceJAL`);

--
-- Index pour la table `Destinataire_Annonce_Press`
--
ALTER TABLE `Destinataire_Annonce_Press`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `id_annonce_press` (`id_annonce_press`),
  ADD KEY `id_jal` (`id_jal`);

--
-- Index pour la table `destinataire_centrale_pub`
--
ALTER TABLE `destinataire_centrale_pub`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `id_annonce_jal` (`id_annonce_jal`),
  ADD KEY `id_compte` (`id_compte`);

--
-- Index pour la table `destinataire_mise_disposition`
--
ALTER TABLE `destinataire_mise_disposition`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `organisme` (`organisme`);

--
-- Index pour la table `Destinataire_Pub`
--
ALTER TABLE `Destinataire_Pub`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `id_avis` (`id_avis`);

--
-- Index pour la table `DocumentExterne`
--
ALTER TABLE `DocumentExterne`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `idBlob` (`idBlob`),
  ADD KEY `refConsultation` (`refConsultation`),
  ADD KEY `DOC_EX_consultation` (`organisme`,`refConsultation`);

--
-- Index pour la table `DocumentsAttaches`
--
ALTER TABLE `DocumentsAttaches`
  ADD PRIMARY KEY (`id_document`),
  ADD KEY `id_document` (`id_document`);

--
-- Index pour la table `Echange`
--
ALTER TABLE `Echange`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `EchangeDestinataire`
--
ALTER TABLE `EchangeDestinataire`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `id_echange` (`id_echange`),
  ADD KEY `uid` (`uid`);

--
-- Index pour la table `EchangeFormat`
--
ALTER TABLE `EchangeFormat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `EchangePieceJointe`
--
ALTER TABLE `EchangePieceJointe`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `id_message` (`id_message`);

--
-- Index pour la table `EchangeTypeAR`
--
ALTER TABLE `EchangeTypeAR`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `EchangeTypeMessage`
--
ALTER TABLE `EchangeTypeMessage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `EnchereEntreprisePmi`
--
ALTER TABLE `EnchereEntreprisePmi`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `EnchereEntreprisePmi_EncherePmi_IdTech` (`idEnchere`,`organisme`);

--
-- Index pour la table `EnchereOffre`
--
ALTER TABLE `EnchereOffre`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `idEnchereEntreprise` (`idEnchereEntreprise`),
  ADD KEY `idEnchere` (`idEnchere`),
  ADD KEY `EnchereOffre_EnchereEntreprisePmi` (`idEnchereEntreprise`,`organisme`),
  ADD KEY `EnchereOffre_EncherePmi` (`idEnchere`,`organisme`);

--
-- Index pour la table `EnchereOffreReference`
--
ALTER TABLE `EnchereOffreReference`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `idEnchereOffre` (`idEnchereOffre`),
  ADD KEY `idEnchereReference` (`idEnchereReference`),
  ADD KEY `EnchereOffreReference_EnchereOffre` (`idEnchereOffre`,`organisme`),
  ADD KEY `EnchereOffreReference_EnchereReference` (`idEnchereReference`,`organisme`);

--
-- Index pour la table `EncherePmi`
--
ALTER TABLE `EncherePmi`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD UNIQUE KEY `referenceUtilisateur` (`referenceUtilisateur`),
  ADD KEY `refConsultation` (`refConsultation`),
  ADD KEY `idEntiteeAssociee` (`idEntiteeAssociee`);

--
-- Index pour la table `EnchereReference`
--
ALTER TABLE `EnchereReference`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `idEnchere` (`idEnchere`),
  ADD KEY `EnchereReference_EncherePmi_idEnchere_org` (`idEnchere`,`organisme`);

--
-- Index pour la table `EnchereTrancheBaremeReference`
--
ALTER TABLE `EnchereTrancheBaremeReference`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `idReference` (`idReference`),
  ADD KEY `EnchereTrancheBaremeReference_EnchereReference_idRef_org` (`idReference`,`organisme`);

--
-- Index pour la table `EnchereTranchesBaremeNETC`
--
ALTER TABLE `EnchereTranchesBaremeNETC`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `idEnchere` (`idEnchere`),
  ADD KEY `EnchereTranchesBaremeNETC_EncherePmi` (`idEnchere`,`organisme`);

--
-- Index pour la table `EnchereValeursInitiales`
--
ALTER TABLE `EnchereValeursInitiales`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `EnchereValeursInitiales_EnchereEntreprisePmi` (`idEnchereEntreprise`,`organisme`),
  ADD KEY `EnchereValeursInitiales_EnchereReference` (`idEnchereReference`,`organisme`);

--
-- Index pour la table `Entreprise`
--
ALTER TABLE `Entreprise`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region` (`region`),
  ADD KEY `province` (`province`),
  ADD KEY `domaines_activites` (`domaines_activites`),
  ADD KEY `qualification` (`qualification`);

--
-- Index pour la table `EntrepriseInsee`
--
ALTER TABLE `EntrepriseInsee`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Entreprise_info_exercice`
--
ALTER TABLE `Entreprise_info_exercice`
  ADD PRIMARY KEY (`id_Entreprise`,`annee_cloture_exercice`);

--
-- Index pour la table `Enveloppe`
--
ALTER TABLE `Enveloppe`
  ADD PRIMARY KEY (`id_enveloppe_electro`,`organisme`),
  ADD KEY `offre_id` (`offre_id`,`organisme`);

--
-- Index pour la table `EnveloppeCritereEvaluation`
--
ALTER TABLE `EnveloppeCritereEvaluation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `EnveloppeFormulaireConsultation`
--
ALTER TABLE `EnveloppeFormulaireConsultation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `EnveloppeItemCritereEvaluation`
--
ALTER TABLE `EnveloppeItemCritereEvaluation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEnveloppeCritereEvaluation` (`idEnveloppeCritereEvaluation`);

--
-- Index pour la table `EnveloppeItemFormulaireConsultationValues`
--
ALTER TABLE `EnveloppeItemFormulaireConsultationValues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idItemFormulaireConsultation` (`idItemFormulaireConsultation`);

--
-- Index pour la table `Enveloppe_papier`
--
ALTER TABLE `Enveloppe_papier`
  ADD PRIMARY KEY (`id_enveloppe_papier`,`organisme`),
  ADD KEY `offre_papier_id` (`offre_papier_id`);

--
-- Index pour la table `EtatConsultation`
--
ALTER TABLE `EtatConsultation`
  ADD PRIMARY KEY (`id_etat`),
  ADD KEY `code_etat` (`code_etat`);

--
-- Index pour la table `Evenement`
--
ALTER TABLE `Evenement`
  ADD PRIMARY KEY (`id_evenement`);

--
-- Index pour la table `exec_agent_contrat`
--
ALTER TABLE `exec_agent_contrat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exec_agent_contrat_ibfk_1` (`id_agent`),
  ADD KEY `exec_agent_contrat_ibfk_3` (`id_contrat`);

--
-- Index pour la table `exec_agent_profil`
--
ALTER TABLE `exec_agent_profil`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `exec_avenant`
--
ALTER TABLE `exec_avenant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exec_avenant_id_agent_crea_fk` (`id_agent_crea`),
  ADD KEY `exec_avenant_id_agent_modif_fk` (`id_agent_modif`),
  ADD KEY `exec_avenant_id_agent_validation_fk` (`id_agent_validation`),
  ADD KEY `exec_avenant_id_agent_rejet_fk` (`id_agent_rejet`),
  ADD KEY `exec_avenant_id_contrat_fk` (`id_contrat`),
  ADD KEY `exec_avenant_id_type_avenant_fk` (`id_type_avenant`);

--
-- Index pour la table `exec_contact`
--
ALTER TABLE `exec_contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exec_contact_id_contrat_fk` (`id_contrat`),
  ADD KEY `exec_contact_id_contractant_fk` (`id_contractant`);

--
-- Index pour la table `exec_contractant`
--
ALTER TABLE `exec_contractant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_contrat` (`id_contrat`),
  ADD KEY `id_type_contractant` (`id_type_contractant`),
  ADD KEY `id_type_structure` (`id_type_structure`),
  ADD KEY `exec_contractant_id_parent` (`id_parent`),
  ADD KEY `id_agent_crea` (`id_agent_crea`),
  ADD KEY `id_agent_modif` (`id_agent_modif`);

--
-- Index pour la table `exec_contrat`
--
ALTER TABLE `exec_contrat`
  ADD PRIMARY KEY (`id_contrat`),
  ADD KEY `id_agent_gestion` (`id_agent_gestion`),
  ADD KEY `id_type_structure` (`id_type_structure`),
  ADD KEY `id_nature_prestation` (`id_nature_prestation`),
  ADD KEY `id_agent_crea` (`id_agent_crea`),
  ADD KEY `id_agent_modif` (`id_agent_modif`),
  ADD KEY `id_type_contrat` (`id_type_contrat`);

--
-- Index pour la table `exec_dossier_paiement`
--
ALTER TABLE `exec_dossier_paiement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cont_ref` (`id_contrat`),
  ADD KEY `cr_agent` (`id_agent_creat`);

--
-- Index pour la table `exec_dp_facture`
--
ALTER TABLE `exec_dp_facture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `d_ref` (`id_dp`),
  ADD KEY `f_ref` (`id_facture`);

--
-- Index pour la table `exec_evenement`
--
ALTER TABLE `exec_evenement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type_evenement` (`id_type_evenement`),
  ADD KEY `id_contrat` (`id_contrat`),
  ADD KEY `id_contractant` (`id_contractant`),
  ADD KEY `id_phase` (`id_phase`),
  ADD KEY `id_agent_crea` (`id_agent_crea`),
  ADD KEY `id_agent_modif` (`id_agent_modif`),
  ADD KEY `exec_evenement_id_agent_validation_fk` (`id_agent_validation`),
  ADD KEY `exec_evenement_id_agent_rejet_fk` (`id_agent_rejet`);

--
-- Index pour la table `exec_facture`
--
ALTER TABLE `exec_facture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exec_facture_id_contrat_fk` (`id_contrat`),
  ADD KEY `exec_facture_id_contractant_fk` (`id_contractant`),
  ADD KEY `exec_facture_id_agent_crea_fk` (`id_agent_crea`),
  ADD KEY `exec_facture_id_agent_modif_fk` (`id_agent_modif`),
  ADD KEY `exec_facture_id_agent_validation_fk` (`id_agent_validation`),
  ADD KEY `exec_facture_id_agent_rejet_fk` (`id_agent_rejet`),
  ADD KEY `exec_facture_id_entreprise_crea_fk` (`id_entreprise_crea`),
  ADD KEY `exec_facture_id_entreprise_modif_fk` (`id_entreprise_modif`);

--
-- Index pour la table `exec_facture_signature`
--
ALTER TABLE `exec_facture_signature`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_BLOB` (`ID_BLOB`);

--
-- Index pour la table `exec_habilitation`
--
ALTER TABLE `exec_habilitation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `exec_historique_prix`
--
ALTER TABLE `exec_historique_prix`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exec_historique_prix_id_agent_crea_fk` (`id_agent_crea`),
  ADD KEY `exec_historique_prix_id_agent_modif_fk` (`id_agent_modif`),
  ADD KEY `exec_historique_prix_id_contrat_fk` (`id_contrat`),
  ADD KEY `exec_historique_prix_id_prix_fk` (`id_prix`),
  ADD KEY `exec_historique_prix_id_avenant_fk` (`id_avenant`);

--
-- Index pour la table `exec_inscrit_contrat`
--
ALTER TABLE `exec_inscrit_contrat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exec_inscrit_contrat_id_contrat_fk` (`id_contrat`),
  ADD KEY `exec_inscrit_contrat_id_inscrit_fk` (`id_inscrit`),
  ADD KEY `exec_inscrit_contrat_id_entreprise_fk` (`id_entreprise`),
  ADD KEY `exec_inscrit_contrat_id_contractant_fk` (`id_contractant`);

--
-- Index pour la table `exec_livrable_contrat`
--
ALTER TABLE `exec_livrable_contrat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_agent_crea` (`id_agent_crea`),
  ADD KEY `id_phase` (`id_phase`),
  ADD KEY `id_contrat` (`id_contrat`);

--
-- Index pour la table `exec_modele_document`
--
ALTER TABLE `exec_modele_document`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `exec_modele_notification`
--
ALTER TABLE `exec_modele_notification`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `exec_penalite`
--
ALTER TABLE `exec_penalite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pen_te` (`id_dossier_paiement`);

--
-- Index pour la table `exec_phase`
--
ALTER TABLE `exec_phase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_agent_crea` (`id_agent_crea`),
  ADD KEY `id_agent_modif` (`id_agent_modif`),
  ADD KEY `id_contrat` (`id_contrat`);

--
-- Index pour la table `exec_phase_evenement`
--
ALTER TABLE `exec_phase_evenement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `exec_piece`
--
ALTER TABLE `exec_piece`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exec_piece_id_type_piece_fk` (`id_type_piece`),
  ADD KEY `exec_piece_id_contrat_fk` (`id_contrat`),
  ADD KEY `id_agent_crea` (`id_agent_crea`);

--
-- Index pour la table `exec_piece_avenant`
--
ALTER TABLE `exec_piece_avenant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exec_piece_avenant_id_agent_crea_fk` (`id_agent_crea`),
  ADD KEY `exec_piece_avenant_id_contrat_fk` (`id_contrat`),
  ADD KEY `exec_piece_avenant_id_avenant_fk` (`id_avenant`);

--
-- Index pour la table `exec_piece_contrat`
--
ALTER TABLE `exec_piece_contrat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exec_piece_contrat_ibfk_1` (`id_agent_crea`),
  ADD KEY `exec_piece_contrat_ibfk_3` (`id_contrat`);

--
-- Index pour la table `exec_piece_dossierpaiement`
--
ALTER TABLE `exec_piece_dossierpaiement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `al_fi` (`id_contrat`),
  ADD KEY `pd_ref` (`id_agent_creat`),
  ADD KEY `al_ag` (`id_dossier_paiement`);

--
-- Index pour la table `exec_piece_evenement`
--
ALTER TABLE `exec_piece_evenement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_agent_crea` (`id_agent_crea`),
  ADD KEY `id_evenement` (`id_evenement`),
  ADD KEY `id_contrat` (`id_contrat`),
  ADD KEY `id_type_piece` (`id_type_piece`);

--
-- Index pour la table `exec_piece_facture`
--
ALTER TABLE `exec_piece_facture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exec_piece_facture_id_contrat_fk` (`id_contrat`),
  ADD KEY `exec_piece_facture_id_facture_fk` (`id_facture`),
  ADD KEY `exec_piece_facture_id_agent_crea_fk` (`id_agent_crea`);

--
-- Index pour la table `exec_piece_type_contrat`
--
ALTER TABLE `exec_piece_type_contrat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organisme` (`organisme`);

--
-- Index pour la table `exec_prix`
--
ALTER TABLE `exec_prix`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_agent_crea` (`id_agent_crea`),
  ADD KEY `id_agent_modif` (`id_agent_modif`),
  ADD KEY `id_contrat` (`id_contrat`);

--
-- Index pour la table `exec_prix_avenant`
--
ALTER TABLE `exec_prix_avenant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exec_prix_avenant_id_avenant_fk` (`id_avenant`),
  ADD KEY `exec_prix_avenant_id_prix_fk` (`id_prix`),
  ADD KEY `exec_prix_avenant_id_contrat_fk` (`id_contrat`);

--
-- Index pour la table `exec_profil`
--
ALTER TABLE `exec_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Index pour la table `exec_repartition`
--
ALTER TABLE `exec_repartition`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exec_repartition_id_contrat_fk` (`id_contrat`),
  ADD KEY `exec_repartition_id_fature_fk` (`id_facture`),
  ADD KEY `exec_repartition_id_contractant_fk` (`id_contractant`),
  ADD KEY `exec_repartition_id_prix_fk` (`id_prix`),
  ADD KEY `exec_repartition_id_agent_crea_fk` (`id_agent_crea`),
  ADD KEY `exec_repartition_id_agent_modif_fk` (`id_agent_modif`),
  ADD KEY `exec_repartition_id_entreprise_crea_fk` (`id_entreprise_crea`);

--
-- Index pour la table `exec_synchronisation_objet_theme`
--
ALTER TABLE `exec_synchronisation_objet_theme`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `exec_type_avenant`
--
ALTER TABLE `exec_type_avenant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `exec_type_contractant`
--
ALTER TABLE `exec_type_contractant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type_structure` (`id_type_structure`);

--
-- Index pour la table `exec_type_contrat`
--
ALTER TABLE `exec_type_contrat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `exec_type_evenement`
--
ALTER TABLE `exec_type_evenement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`) USING BTREE;

--
-- Index pour la table `exec_type_evenement_organisme`
--
ALTER TABLE `exec_type_evenement_organisme`
  ADD PRIMARY KEY (`id_type_evenement`,`organisme`),
  ADD KEY `id_type_evenement` (`id_type_evenement`),
  ADD KEY `organisme` (`organisme`);

--
-- Index pour la table `exec_type_piece`
--
ALTER TABLE `exec_type_piece`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `exec_type_piece_evenement`
--
ALTER TABLE `exec_type_piece_evenement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `exec_type_structure`
--
ALTER TABLE `exec_type_structure`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `id_sous_type` (`id_sous_type`),
  ADD KEY `id_inscrit` (`id_inscrit`),
  ADD KEY `id_entreprise` (`id_entreprise`),
  ADD KEY `id_blob_facture` (`id_blob_facture`);

--
-- Index pour la table `facture_piece_jointe`
--
ALTER TABLE `facture_piece_jointe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_facture` (`id_facture`),
  ADD KEY `id_blob_piece_jointe` (`id_blob_piece_jointe`),
  ADD KEY `id_piece_sous_type` (`id_piece_sous_type`);

--
-- Index pour la table `facture_signature`
--
ALTER TABLE `facture_signature`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_BLOB` (`ID_BLOB`);

--
-- Index pour la table `Faq_Entreprise`
--
ALTER TABLE `Faq_Entreprise`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Fcsp_Lieu`
--
ALTER TABLE `Fcsp_Lieu`
  ADD PRIMARY KEY (`id_auto`);

--
-- Index pour la table `Fcsp_Mandataire`
--
ALTER TABLE `Fcsp_Mandataire`
  ADD PRIMARY KEY (`id_auto`);

--
-- Index pour la table `Fcsp_unite`
--
ALTER TABLE `Fcsp_unite`
  ADD PRIMARY KEY (`id_auto`);

--
-- Index pour la table `fichierEnveloppe`
--
ALTER TABLE `fichierEnveloppe`
  ADD PRIMARY KEY (`id_fichier`,`organisme`),
  ADD KEY `id_enveloppe` (`id_enveloppe`);

--
-- Index pour la table `fichiers_liste_marches`
--
ALTER TABLE `fichiers_liste_marches`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `formejuridique`
--
ALTER TABLE `formejuridique`
  ADD PRIMARY KEY (`formejuridique`),
  ADD KEY `ordre` (`ordre`);

--
-- Index pour la table `FormXmlDestinataireOpoce`
--
ALTER TABLE `FormXmlDestinataireOpoce`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `GeolocalisationN0`
--
ALTER TABLE `GeolocalisationN0`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `GeolocalisationN1`
--
ALTER TABLE `GeolocalisationN1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_geolocalisationN0` (`id_geolocalisationN0`);

--
-- Index pour la table `GeolocalisationN2`
--
ALTER TABLE `GeolocalisationN2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_geolocalisationN1` (`id_geolocalisationN1`);

--
-- Index pour la table `gestion_adresses`
--
ALTER TABLE `gestion_adresses`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `groupement`
--
ALTER TABLE `groupement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Groupe_Moniteur`
--
ALTER TABLE `Groupe_Moniteur`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `Guides`
--
ALTER TABLE `Guides`
  ADD PRIMARY KEY (`id_guide`);

--
-- Index pour la table `HabilitationAgent`
--
ALTER TABLE `HabilitationAgent`
  ADD PRIMARY KEY (`id_agent`);

--
-- Index pour la table `HabilitationProfil`
--
ALTER TABLE `HabilitationProfil`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Helios_cosignature`
--
ALTER TABLE `Helios_cosignature`
  ADD PRIMARY KEY (`id_fichier`,`organisme`),
  ADD KEY `id_fichier` (`id_fichier`);

--
-- Index pour la table `Helios_piece_publicite`
--
ALTER TABLE `Helios_piece_publicite`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `consultation_ref` (`consultation_ref`),
  ADD KEY `Helios_piece_publicite_Consultation` (`organisme`,`consultation_ref`);

--
-- Index pour la table `Helios_pv_consultation`
--
ALTER TABLE `Helios_pv_consultation`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `consultation_ref` (`consultation_ref`),
  ADD KEY `Helios_pv_consultation_Consultation` (`organisme`,`consultation_ref`);

--
-- Index pour la table `Helios_rapport_prefet`
--
ALTER TABLE `Helios_rapport_prefet`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `consultation_ref` (`consultation_ref`),
  ADD KEY `Helios_rapport_prefet_Consultation` (`organisme`,`consultation_ref`);

--
-- Index pour la table `Helios_tableau_ar`
--
ALTER TABLE `Helios_tableau_ar`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `consultation_ref` (`consultation_ref`),
  ADD KEY `Helios_tableau_ar_Consultation` (`organisme`,`consultation_ref`);

--
-- Index pour la table `Helios_teletransmission`
--
ALTER TABLE `Helios_teletransmission`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `consultation_ref` (`consultation_ref`),
  ADD KEY `Helios_teletransmission_Consultation` (`organisme`,`consultation_ref`);

--
-- Index pour la table `Helios_teletransmission_lot`
--
ALTER TABLE `Helios_teletransmission_lot`
  ADD PRIMARY KEY (`id_teletransmission`,`organisme`,`lot`);

--
-- Index pour la table `historiques_consultation`
--
ALTER TABLE `historiques_consultation`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `ref_Consultation` (`ref_consultation`);

--
-- Index pour la table `Historique_Avis_Pub`
--
ALTER TABLE `Historique_Avis_Pub`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `id_avis` (`id_avis`);

--
-- Index pour la table `Historique_suppression_agent`
--
ALTER TABLE `Historique_suppression_agent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organisme` (`organisme`),
  ADD KEY `service` (`id_service`);

--
-- Index pour la table `Inscrit`
--
ALTER TABLE `Inscrit`
  ADD PRIMARY KEY (`id`,`entreprise_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `entreprise_id` (`entreprise_id`);

--
-- Index pour la table `InscritHistorique`
--
ALTER TABLE `InscritHistorique`
  ADD PRIMARY KEY (`id`),
  ADD KEY `entreprise_id` (`entreprise_id`);

--
-- Index pour la table `inscrit_depot_selection_lots`
--
ALTER TABLE `inscrit_depot_selection_lots`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Inscrit_Sub`
--
ALTER TABLE `Inscrit_Sub`
  ADD PRIMARY KEY (`id`,`entreprise_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `entreprise_id` (`entreprise_id`),
  ADD KEY `Inscrit_Sub_ibfk_2` (`id_inscrit`);

--
-- Index pour la table `interfacage_exec_parapheur_organisme`
--
ALTER TABLE `interfacage_exec_parapheur_organisme`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `InterfaceTypeProcedure`
--
ALTER TABLE `InterfaceTypeProcedure`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `InterneConsultation`
--
ALTER TABLE `InterneConsultation`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `interne_id` (`interne_id`),
  ADD KEY `consultation_ref` (`consultation_ref`),
  ADD KEY `InterneConsultation_consultation` (`organisme`,`consultation_ref`);

--
-- Index pour la table `InterneConsultationSuiviSeul`
--
ALTER TABLE `InterneConsultationSuiviSeul`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `interne_id` (`interne_id`),
  ADD KEY `consultation_ref` (`consultation_ref`),
  ADD KEY `InterneConsultationSuiviSeul_consultation` (`organisme`,`consultation_ref`);

--
-- Index pour la table `InvitationConsultationTransverse`
--
ALTER TABLE `InvitationConsultationTransverse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organisme_emetteur` (`organisme_emetteur`),
  ADD KEY `organisme_invite` (`organisme_invite`);

--
-- Index pour la table `invitation_visio`
--
ALTER TABLE `invitation_visio`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `interne_id` (`interne_id`),
  ADD KEY `consultation_ref` (`consultation_ref`),
  ADD KEY `organisme` (`organisme`);

--
-- Index pour la table `ItemCritereEvaluation`
--
ALTER TABLE `ItemCritereEvaluation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ItemCritereEvaluation_CritereEvaluation` (`idCritereEvaluation`);

--
-- Index pour la table `ItemFormulaire`
--
ALTER TABLE `ItemFormulaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ItemFormulaireConsultation`
--
ALTER TABLE `ItemFormulaireConsultation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ItemFormulaireConsultation_ConsultationFormulaire` (`idFormulaireConsultation`);

--
-- Index pour la table `JAL`
--
ALTER TABLE `JAL`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `Journaux`
--
ALTER TABLE `Journaux`
  ADD PRIMARY KEY (`ID_JOURNAL`,`ORGANISME`),
  ADD KEY `ID_CENTRALE` (`ID_CENTRALE`);

--
-- Index pour la table `Justificatifs`
--
ALTER TABLE `Justificatifs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_entreprise` (`id_entreprise`),
  ADD KEY `id_document` (`id_document`);

--
-- Index pour la table `Langue`
--
ALTER TABLE `Langue`
  ADD PRIMARY KEY (`id_langue`),
  ADD UNIQUE KEY `langue` (`langue`);

--
-- Index pour la table `LieuExecution`
--
ALTER TABLE `LieuExecution`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Ligne_DA`
--
ALTER TABLE `Ligne_DA`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DA_Consultation_ref` (`DA_Consultation_ref`);

--
-- Index pour la table `liste_present_commission`
--
ALTER TABLE `liste_present_commission`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Lt_Referentiel`
--
ALTER TABLE `Lt_Referentiel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mandataire`
--
ALTER TABLE `mandataire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `FK_Groupement` (`id_groupement`);

--
-- Index pour la table `Mandataire_service`
--
ALTER TABLE `Mandataire_service`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Marche`
--
ALTER TABLE `Marche`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `ListeMarches_FKIndex2` (`idMarcheTrancheBudgetaire`),
  ADD KEY `ListeMarches_FKIndex3` (`idService`),
  ADD KEY `numeroMarcheAnnee` (`numeroMarcheAnnee`),
  ADD KEY `natureMarche` (`natureMarche`),
  ADD KEY `id_decision_enveloppe` (`id_decision_enveloppe`);

--
-- Index pour la table `MarchePublie`
--
ALTER TABLE `MarchePublie`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `ListeMarchePubliee_FKIndex1` (`idService`),
  ADD KEY `ListeMarchePubliee_FKIndex2` (`numeroMarcheAnnee`);

--
-- Index pour la table `Mesure_avancement`
--
ALTER TABLE `Mesure_avancement`
  ADD PRIMARY KEY (`id_mesure`,`organisme`);

--
-- Index pour la table `Mesure_Type_Procedure`
--
ALTER TABLE `Mesure_Type_Procedure`
  ADD PRIMARY KEY (`id_tag_name`,`organisme`);

--
-- Index pour la table `ModeleFormulaire`
--
ALTER TABLE `ModeleFormulaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mode_execution_contrat`
--
ALTER TABLE `mode_execution_contrat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `nature_acte_juridique`
--
ALTER TABLE `nature_acte_juridique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Newsletter`
--
ALTER TABLE `Newsletter`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `NewsletterPieceJointe`
--
ALTER TABLE `NewsletterPieceJointe`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `id_newsletter` (`id_newsletter`);

--
-- Index pour la table `Numerotation_ref_cons_auto`
--
ALTER TABLE `Numerotation_ref_cons_auto`
  ADD PRIMARY KEY (`id_auto`);

--
-- Index pour la table `Offres`
--
ALTER TABLE `Offres`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD UNIQUE KEY `untrustedserial` (`untrustedserial`),
  ADD KEY `inscrit_id` (`inscrit_id`),
  ADD KEY `consultation_ref` (`consultation_ref`),
  ADD KEY `entreprise_id` (`entreprise_id`),
  ADD KEY `Offres_consultation` (`organisme`,`consultation_ref`);

--
-- Index pour la table `offre_caution`
--
ALTER TABLE `offre_caution`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `offre_caution_signature`
--
ALTER TABLE `offre_caution_signature`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_BLOB` (`ID_BLOB`);

--
-- Index pour la table `Offre_papier`
--
ALTER TABLE `Offre_papier`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `consultation_ref` (`consultation_ref`),
  ADD KEY `Offre_papier_consultation` (`organisme`,`consultation_ref`);

--
-- Index pour la table `Operations`
--
ALTER TABLE `Operations`
  ADD PRIMARY KEY (`id_operation`),
  ADD KEY `index_acronyme` (`acronyme`),
  ADD KEY `index_service` (`id_service`),
  ADD KEY `index_id_agent` (`id_agent`),
  ADD KEY `index_type` (`type`),
  ADD KEY `index_categorie` (`categorie`),
  ADD KEY `index_code` (`code`),
  ADD KEY `index_annee_fin` (`annee_fin`),
  ADD KEY `index_annee_debut` (`annee_debut`),
  ADD KEY `index_description` (`description`(255));

--
-- Index pour la table `Organisme`
--
ALTER TABLE `Organisme`
  ADD PRIMARY KEY (`id`),
  ADD KEY `acronyme` (`acronyme`),
  ADD KEY `categorie_insee` (`categorie_insee`);

--
-- Index pour la table `Organisme_Service_Metier`
--
ALTER TABLE `Organisme_Service_Metier`
  ADD PRIMARY KEY (`id_auto`),
  ADD KEY `organisme` (`organisme`),
  ADD KEY `id_service_metier` (`id_service_metier`);

--
-- Index pour la table `Panier_Entreprise`
--
ALTER TABLE `Panier_Entreprise`
  ADD PRIMARY KEY (`organisme`,`ref_consultation`,`id_entreprise`,`id_inscrit`),
  ADD KEY `organisme` (`organisme`),
  ADD KEY `ref_consultation` (`ref_consultation`),
  ADD KEY `id_entreprise` (`id_entreprise`),
  ADD KEY `id_inscrit` (`id_inscrit`),
  ADD KEY `organisme_2` (`organisme`),
  ADD KEY `ref_consultation_2` (`ref_consultation`),
  ADD KEY `id_entreprise_2` (`id_entreprise`),
  ADD KEY `id_inscrit_2` (`id_inscrit`),
  ADD KEY `organisme_3` (`organisme`),
  ADD KEY `ref_consultation_3` (`ref_consultation`),
  ADD KEY `id_entreprise_3` (`id_entreprise`),
  ADD KEY `id_inscrit_3` (`id_inscrit`);

--
-- Index pour la table `Parametrage_Enchere`
--
ALTER TABLE `Parametrage_Enchere`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD UNIQUE KEY `referenceUtilisateur` (`referenceUtilisateur`),
  ADD KEY `refConsultation` (`refConsultation`),
  ADD KEY `idEntiteeAssociee` (`idEntiteeAssociee`),
  ADD KEY `relation_ParamEnch_organisme` (`organisme`);

--
-- Index pour la table `Parametrage_Enchere_Reference`
--
ALTER TABLE `Parametrage_Enchere_Reference`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `idEnchere` (`idEnchere`),
  ADD KEY `relation_ParamEnchRef_ParamEnch_idOrg` (`idEnchere`,`organisme`);

--
-- Index pour la table `Parametrage_Enchere_Tranches_Bareme_NETC`
--
ALTER TABLE `Parametrage_Enchere_Tranches_Bareme_NETC`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `idEnchere` (`idEnchere`),
  ADD KEY `Relation_ParamEnchTranchesBaremeNETC_ParamEnch_IdOrg` (`idEnchere`,`organisme`);

--
-- Index pour la table `Parametrage_Enchere_Tranche_Bareme_Reference`
--
ALTER TABLE `Parametrage_Enchere_Tranche_Bareme_Reference`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `idReference` (`idReference`),
  ADD KEY `organisme` (`organisme`),
  ADD KEY `Relation_ParamEnchTrancheBaremeRef_ParamEnchRef_IdOrg` (`idReference`,`organisme`);

--
-- Index pour la table `Parametrage_Fiche_Weka`
--
ALTER TABLE `Parametrage_Fiche_Weka`
  ADD PRIMARY KEY (`id_fiche`);

--
-- Index pour la table `Partenaire`
--
ALTER TABLE `Partenaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Passation_consultation`
--
ALTER TABLE `Passation_consultation`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `passation_marche_a_venir`
--
ALTER TABLE `passation_marche_a_venir`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `id_passation_consultation` (`id_passation_consultation`);

--
-- Index pour la table `pieces_complement`
--
ALTER TABLE `pieces_complement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Pieces_DCE`
--
ALTER TABLE `Pieces_DCE`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ref_consultation` (`ref_consultation`),
  ADD KEY `organisme_consultation` (`organisme_consultation`);

--
-- Index pour la table `Pieces_Mise_Disposition`
--
ALTER TABLE `Pieces_Mise_Disposition`
  ADD PRIMARY KEY (`id`,`org`,`id_decision_enveloppe`,`Id_destinataire`),
  ADD KEY `Pieces_Mise_Disposition_lot` (`lot`),
  ADD KEY `consultation_ref` (`consultation_ref`),
  ADD KEY `INDEX_Pieces_Mise_Disposition_org` (`org`);

--
-- Index pour la table `piece_sous_type_facture`
--
ALTER TABLE `piece_sous_type_facture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sous_type` (`id_sous_type`);

--
-- Index pour la table `Prestation`
--
ALTER TABLE `Prestation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_entreprise` (`id_entreprise`);

--
-- Index pour la table `ProcedureEquivalence`
--
ALTER TABLE `ProcedureEquivalence`
  ADD PRIMARY KEY (`id_type_procedure`,`organisme`);

--
-- Index pour la table `programme_previsionnel`
--
ALTER TABLE `programme_previsionnel`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `service_id` (`service_id`);

--
-- Index pour la table `Qualification`
--
ALTER TABLE `Qualification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_interne` (`id_interne`);

--
-- Index pour la table `QuestionDCE`
--
ALTER TABLE `QuestionDCE`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `organisme` (`organisme`,`consultation_ref`),
  ADD KEY `id_inscrit` (`id_inscrit`),
  ADD KEY `Entreprise` (`id_entreprise`);

--
-- Index pour la table `questions_dce`
--
ALTER TABLE `questions_dce`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `consultation_ref` (`consultation_ref`),
  ADD KEY `id_inscrit` (`id_inscrit`),
  ADD KEY `Entreprise` (`id_entreprise`);

--
-- Index pour la table `Referentiel`
--
ALTER TABLE `Referentiel`
  ADD PRIMARY KEY (`id_referentiel`),
  ADD KEY `id_referentiel` (`id_referentiel`);

--
-- Index pour la table `ReferentielDestinationFormXml`
--
ALTER TABLE `ReferentielDestinationFormXml`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `ReferentielFormXml`
--
ALTER TABLE `ReferentielFormXml`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `id_type_xml` (`id_type_xml`),
  ADD KEY `consultation_ref` (`consultation_ref`);

--
-- Index pour la table `ReferentielOrg`
--
ALTER TABLE `ReferentielOrg`
  ADD PRIMARY KEY (`id_referentiel`,`organisme`);

--
-- Index pour la table `ReferentielTypeXml`
--
ALTER TABLE `ReferentielTypeXml`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `Referentiel_Agent`
--
ALTER TABLE `Referentiel_Agent`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Referentiel_Consultation`
--
ALTER TABLE `Referentiel_Consultation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reference` (`reference`),
  ADD KEY `id_Lt_Referentiel` (`id_Lt_Referentiel`),
  ADD KEY `organisme` (`organisme`);

--
-- Index pour la table `Referentiel_contact`
--
ALTER TABLE `Referentiel_contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Referentiel_Entreprise`
--
ALTER TABLE `Referentiel_Entreprise`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Referentiel_org_denomination`
--
ALTER TABLE `Referentiel_org_denomination`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_denomination_adapte` (`denomination_adapte`);

--
-- Index pour la table `Relation_Echange`
--
ALTER TABLE `Relation_Echange`
  ADD PRIMARY KEY (`id_auto`);

--
-- Index pour la table `renseignements_boamp`
--
ALTER TABLE `renseignements_boamp`
  ADD PRIMARY KEY (`id`,`acronymeOrg`),
  ADD KEY `id_type` (`id_type`,`id_compte`);

--
-- Index pour la table `ReponseInscritFormulaireConsultation`
--
ALTER TABLE `ReponseInscritFormulaireConsultation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ReponseInscritItemFormulaireConsultationValues`
--
ALTER TABLE `ReponseInscritItemFormulaireConsultationValues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idItemFormulaireConsultation` (`idItemFormulaireConsultation`);

--
-- Index pour la table `responsableengagement`
--
ALTER TABLE `responsableengagement`
  ADD PRIMARY KEY (`id`,`entreprise_id`),
  ADD KEY `entreprise_id` (`entreprise_id`);

--
-- Index pour la table `restitution_historique`
--
ALTER TABLE `restitution_historique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `resultat_analyse`
--
ALTER TABLE `resultat_analyse`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `ref_Consultation` (`consultation_ref`);

--
-- Index pour la table `resultat_analyse_decision`
--
ALTER TABLE `resultat_analyse_decision`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `ref_Consultation` (`consultation_ref`);

--
-- Index pour la table `resultat_analyse_historique`
--
ALTER TABLE `resultat_analyse_historique`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `ref_Consultation` (`consultation_ref`),
  ADD KEY `ResultatAnalyseHistorique_Agent` (`agent_id`);

--
-- Index pour la table `Retrait_Papier`
--
ALTER TABLE `Retrait_Papier`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `Retrait_Papier_consultation` (`organisme`,`consultation_ref`);

--
-- Index pour la table `RG`
--
ALTER TABLE `RG`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `consultation_ref` (`consultation_ref`),
  ADD KEY `RG_consultation` (`organisme`,`consultation_ref`);

--
-- Index pour la table `RPA`
--
ALTER TABLE `RPA`
  ADD PRIMARY KEY (`id`,`acronymeOrg`),
  ADD KEY `organisme` (`acronymeOrg`);

--
-- Index pour la table `Service`
--
ALTER TABLE `Service`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `service_associe`
--
ALTER TABLE `service_associe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Service_Mertier`
--
ALTER TABLE `Service_Mertier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Service_Mertier_Profils`
--
ALTER TABLE `Service_Mertier_Profils`
  ADD PRIMARY KEY (`id_auto`),
  ADD KEY `id_service_metier` (`id_service_metier`);

--
-- Index pour la table `Societes_Exclues`
--
ALTER TABLE `Societes_Exclues`
  ADD PRIMARY KEY (`id_societes_exclues`);

--
-- Index pour la table `Socle_Habilitation_Agent`
--
ALTER TABLE `Socle_Habilitation_Agent`
  ADD PRIMARY KEY (`id_agent`);

--
-- Index pour la table `Socle_Habilitation_Profil`
--
ALTER TABLE `Socle_Habilitation_Profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Index pour la table `SousCategorie`
--
ALTER TABLE `SousCategorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sous_type_facture`
--
ALTER TABLE `sous_type_facture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type` (`id_type`);

--
-- Index pour la table `sso_agent`
--
ALTER TABLE `sso_agent`
  ADD PRIMARY KEY (`id_sso`);

--
-- Index pour la table `sso_entreprise`
--
ALTER TABLE `sso_entreprise`
  ADD PRIMARY KEY (`id_sso`);

--
-- Index pour la table `Sso_Tiers`
--
ALTER TABLE `Sso_Tiers`
  ADD PRIMARY KEY (`id_sso_tiers`);

--
-- Index pour la table `StatutEnveloppe`
--
ALTER TABLE `StatutEnveloppe`
  ADD PRIMARY KEY (`id_statut`);

--
-- Index pour la table `SuiviAcces`
--
ALTER TABLE `SuiviAcces`
  ADD PRIMARY KEY (`id_auto`);

--
-- Index pour la table `Support_Publication`
--
ALTER TABLE `Support_Publication`
  ADD PRIMARY KEY (`id`),
  ADD KEY `SupportPublication_consultation` (`organisme`,`consultation_ref`);

--
-- Index pour la table `Telechargement`
--
ALTER TABLE `Telechargement`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `organisme` (`organisme`,`consultation_ref`);

--
-- Index pour la table `TelechargementAnonyme`
--
ALTER TABLE `TelechargementAnonyme`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `organisme` (`organisme`,`consultation_ref`),
  ADD KEY `consultation_ref` (`consultation_ref`);

--
-- Index pour la table `Tiers`
--
ALTER TABLE `Tiers`
  ADD PRIMARY KEY (`id_tiers`);

--
-- Index pour la table `TireurPlan`
--
ALTER TABLE `TireurPlan`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `trace_operations_inscrit`
--
ALTER TABLE `trace_operations_inscrit`
  ADD PRIMARY KEY (`id_trace`),
  ADD KEY `recherche` (`id_inscrit`,`id_entreprise`,`addr_ip`,`date`),
  ADD KEY `ref_consutation` (`organisme`,`ref_consultation`);

--
-- Index pour la table `Tranche_Article_133`
--
ALTER TABLE `Tranche_Article_133`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `TypeAvenant`
--
ALTER TABLE `TypeAvenant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `TypeAvis`
--
ALTER TABLE `TypeAvis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `TypeCommission`
--
ALTER TABLE `TypeCommission`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `TypeDecision`
--
ALTER TABLE `TypeDecision`
  ADD PRIMARY KEY (`id_type_decision`);

--
-- Index pour la table `TypeProcedure`
--
ALTER TABLE `TypeProcedure`
  ADD PRIMARY KEY (`id_type_procedure`);

--
-- Index pour la table `Type_Avis_Pub`
--
ALTER TABLE `Type_Avis_Pub`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Type_Avis_Pub_Organisme`
--
ALTER TABLE `Type_Avis_Pub_Organisme`
  ADD PRIMARY KEY (`id_type_avis`,`organisme`);

--
-- Index pour la table `Type_Avis_Pub_Procedure`
--
ALTER TABLE `Type_Avis_Pub_Procedure`
  ADD PRIMARY KEY (`id_type_avis`,`organisme`,`id_type_procedure`);

--
-- Index pour la table `type_facture`
--
ALTER TABLE `type_facture`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Type_Procedure_Organisme`
--
ALTER TABLE `Type_Procedure_Organisme`
  ADD PRIMARY KEY (`id_type_procedure`,`organisme`);

--
-- Index pour la table `Type_support`
--
ALTER TABLE `Type_support`
  ADD PRIMARY KEY (`id_type_avis`,`id_type_support`);

--
-- Index pour la table `t_annonce_annuelle`
--
ALTER TABLE `t_annonce_annuelle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_service_id` (`service_id`),
  ADD KEY `index_organisme` (`organisme`),
  ADD KEY `index_id_type` (`organisme`);

--
-- Index pour la table `t_banque`
--
ALTER TABLE `t_banque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t_calendrier`
--
ALTER TABLE `t_calendrier`
  ADD PRIMARY KEY (`ID_CALENDRIER`),
  ADD UNIQUE KEY `T_CALENDRIER_ID_CONSULTATION_UK` (`REFERENCE`,`ORGANISME`),
  ADD KEY `T_CALENDRIER_ID_CONSULTATION_FK` (`ORGANISME`,`REFERENCE`);

--
-- Index pour la table `t_calendrier_etape`
--
ALTER TABLE `t_calendrier_etape`
  ADD PRIMARY KEY (`ID_CALENDRIER_ETAPE`),
  ADD KEY `T_CALENDRIER_ETAPE_ID_CALENDRIER_FK` (`ID_CALENDRIER`);

--
-- Index pour la table `t_calendrier_etape_referentiel`
--
ALTER TABLE `t_calendrier_etape_referentiel`
  ADD PRIMARY KEY (`ID_ETAPE_CALENDRIER_REFERENTIEL`,`ID_TYPE_PROCEDURE`,`ORGANISME`),
  ADD KEY `T_CALENDRIER_ETAPE_REFERENTIEL_ID_PROCEDURE` (`ID_TYPE_PROCEDURE`,`ORGANISME`);

--
-- Index pour la table `t_calendrier_transition`
--
ALTER TABLE `t_calendrier_transition`
  ADD PRIMARY KEY (`ID_CALENDRIER_TRANSITION`),
  ADD KEY `T_CALENDRIER_TRANSITION_ID_ETAPE_CIBLE_FK` (`ID_ETAPE_CIBLE`),
  ADD KEY `T_CALENDRIER_TRANSITION_ID_ETAPE_SOURCE_FK` (`ID_ETAPE_SOURCE`);

--
-- Index pour la table `t_calendrier_transition_referentiel`
--
ALTER TABLE `t_calendrier_transition_referentiel`
  ADD PRIMARY KEY (`ID_TRANSITION_CALENDRIER_REFERENTIEL`,`ID_TYPE_PROCEDURE`,`ORGANISME`),
  ADD KEY `T_CALENDRIER_TRANSITION_REFERENTIEL_ID_ETAPE_CIBLE_FK` (`ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE`),
  ADD KEY `T_CALENDRIER_TRANSITION_REFERENTIEL_ID_ETAPE_SOURCE_FK` (`ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE`);

--
-- Index pour la table `t_candidature_mps`
--
ALTER TABLE `t_candidature_mps`
  ADD PRIMARY KEY (`id_candidature`);

--
-- Index pour la table `t_CAO_Commission`
--
ALTER TABLE `t_CAO_Commission`
  ADD PRIMARY KEY (`id_commission`,`organisme`),
  ADD KEY `sigle_idx` (`sigle`),
  ADD KEY `organisme_idx` (`organisme`);

--
-- Index pour la table `t_CAO_Commission_Agent`
--
ALTER TABLE `t_CAO_Commission_Agent`
  ADD PRIMARY KEY (`id_commission_agent`,`organisme`),
  ADD KEY `id_commission_idx` (`id_commission`),
  ADD KEY `organisme_idx` (`organisme`),
  ADD KEY `id_agent_idx` (`id_agent`);

--
-- Index pour la table `t_CAO_Commission_Consultation`
--
ALTER TABLE `t_CAO_Commission_Consultation`
  ADD PRIMARY KEY (`id_commission_consultation`,`organisme`),
  ADD KEY `ref_consultation_idx` (`ref_consultation`),
  ADD KEY `id_commission_idx` (`id_commission`),
  ADD KEY `organisme_idx` (`organisme`);

--
-- Index pour la table `t_CAO_Commission_Intervenant_Externe`
--
ALTER TABLE `t_CAO_Commission_Intervenant_Externe`
  ADD PRIMARY KEY (`id_commission_intervenant_externe`,`organisme`),
  ADD KEY `organisme_idx` (`organisme`),
  ADD KEY `id_intervenant_externe_idx` (`id_intervenant_externe`),
  ADD KEY `id_commission_idx` (`id_commission`);

--
-- Index pour la table `t_CAO_Intervenant_Externe`
--
ALTER TABLE `t_CAO_Intervenant_Externe`
  ADD PRIMARY KEY (`id_intervenant_externe`,`organisme`),
  ADD KEY `nom_idx` (`nom`),
  ADD KEY `organisation_idx` (`organisation`),
  ADD KEY `organisme_idx` (`organisme`);

--
-- Index pour la table `t_CAO_Ordre_De_Passage`
--
ALTER TABLE `t_CAO_Ordre_De_Passage`
  ADD PRIMARY KEY (`id_ordre_de_passage`,`organisme`),
  ADD KEY `id_commission_idx` (`id_commission`),
  ADD KEY `id_seance_idx` (`id_seance`),
  ADD KEY `id_commission_consultation_idx` (`id_commission_consultation`),
  ADD KEY `organisme_idx` (`organisme`),
  ADD KEY `date_seance_idx` (`date_seance`),
  ADD KEY `date_passage_idx` (`date_passage`);

--
-- Index pour la table `t_CAO_Seance`
--
ALTER TABLE `t_CAO_Seance`
  ADD PRIMARY KEY (`id_seance`,`organisme`),
  ADD KEY `lieu_idx` (`lieu`),
  ADD KEY `date_idx` (`date`),
  ADD KEY `id_commission_idx` (`id_commission`),
  ADD KEY `organisme_idx` (`organisme`);

--
-- Index pour la table `t_CAO_Seance_Agent`
--
ALTER TABLE `t_CAO_Seance_Agent`
  ADD PRIMARY KEY (`id_seance_agent`,`organisme`),
  ADD KEY `id_seance_idx` (`id_seance`),
  ADD KEY `id_agent_idx` (`id_agent`),
  ADD KEY `organisme_idx` (`organisme`);

--
-- Index pour la table `t_CAO_Seance_Intervenant_Externe`
--
ALTER TABLE `t_CAO_Seance_Intervenant_Externe`
  ADD PRIMARY KEY (`id_seance_intervenant_externe`,`organisme`),
  ADD KEY `id_seance_idx` (`id_seance`),
  ADD KEY `id_intervenant_externe_idx` (`id_intervenant_externe`),
  ADD KEY `organisme_idx` (`organisme`);

--
-- Index pour la table `t_CAO_Seance_Invite`
--
ALTER TABLE `t_CAO_Seance_Invite`
  ADD PRIMARY KEY (`id_seance_invite`,`organisme`),
  ADD KEY `id_intervenant_externe_idx` (`id_intervenant_externe`),
  ADD KEY `id_agent_idx` (`id_agent`),
  ADD KEY `organisme_idx` (`organisme`),
  ADD KEY `id_ordre_de_passage_idx` (`id_ordre_de_passage`);

--
-- Index pour la table `t_chorus_tier_rejete`
--
ALTER TABLE `t_chorus_tier_rejete`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_id_echange` (`id_echange`),
  ADD KEY `index_id_tier` (`id_tier`),
  ADD KEY `index_code_rejet` (`code_rejet`),
  ADD KEY `index_rejet_active` (`active`);

--
-- Index pour la table `t_complement_formulaire`
--
ALTER TABLE `t_complement_formulaire`
  ADD PRIMARY KEY (`id_complement_formulaire`),
  ADD KEY `id_dossier_formulaire` (`id_dossier_formulaire`);

--
-- Index pour la table `t_compte_bancaire`
--
ALTER TABLE `t_compte_bancaire`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `t_compte_bancaire_ibfk_1` (`ID_BANQUE`);

--
-- Index pour la table `t_critere_attribution`
--
ALTER TABLE `t_critere_attribution`
  ADD PRIMARY KEY (`id_critere_attribution`);

--
-- Index pour la table `t_donnee_complementaire`
--
ALTER TABLE `t_donnee_complementaire`
  ADD PRIMARY KEY (`id_donnee_complementaire`);

--
-- Index pour la table `t_donnee_complementaire_tmp`
--
ALTER TABLE `t_donnee_complementaire_tmp`
  ADD PRIMARY KEY (`id_donnee_complementaire`);

--
-- Index pour la table `t_dossier_formulaire`
--
ALTER TABLE `t_dossier_formulaire`
  ADD PRIMARY KEY (`id_dossier_formulaire`),
  ADD KEY `t_reponse_elec_form_t_dossier_form_id_reponse_elec_form_fk` (`id_reponse_elec_formulaire`);

--
-- Index pour la table `t_edition_formulaire`
--
ALTER TABLE `t_edition_formulaire`
  ADD PRIMARY KEY (`id_edition_formulaire`),
  ADD KEY `t_dossier_form_t_edition_form_id_dossier_form_fk` (`id_dossier_formulaire`);

--
-- Index pour la table `t_enveloppe_dossier_formulaire`
--
ALTER TABLE `t_enveloppe_dossier_formulaire`
  ADD PRIMARY KEY (`id_enveloppe_dossier_formulaire`);

--
-- Index pour la table `t_espace_collaboratif`
--
ALTER TABLE `t_espace_collaboratif`
  ADD PRIMARY KEY (`id_auto`);

--
-- Index pour la table `t_flux_rss`
--
ALTER TABLE `t_flux_rss`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t_forme_prix`
--
ALTER TABLE `t_forme_prix`
  ADD PRIMARY KEY (`id_forme_prix`);

--
-- Index pour la table `t_forme_prix_has_ref_type_prix`
--
ALTER TABLE `t_forme_prix_has_ref_type_prix`
  ADD PRIMARY KEY (`id_type_prix`,`id_forme_prix`);

--
-- Index pour la table `t_forme_prix_pf_has_ref_variation`
--
ALTER TABLE `t_forme_prix_pf_has_ref_variation`
  ADD PRIMARY KEY (`id_variation`,`id_forme_prix`);

--
-- Index pour la table `t_forme_prix_pu_has_ref_variation`
--
ALTER TABLE `t_forme_prix_pu_has_ref_variation`
  ADD PRIMARY KEY (`id_variation`,`id_forme_prix`);

--
-- Index pour la table `T_Illustration_Fond`
--
ALTER TABLE `T_Illustration_Fond`
  ADD PRIMARY KEY (`id_illustration_fond`);

--
-- Index pour la table `t_lancement_unique_cli`
--
ALTER TABLE `t_lancement_unique_cli`
  ADD PRIMARY KEY (`id_lancement_unique_cli`);

--
-- Index pour la table `t_lot_technique`
--
ALTER TABLE `t_lot_technique`
  ADD PRIMARY KEY (`id_lot_technique`),
  ADD KEY `t_lot_technique_id_donnee_complementaire_fk` (`id_donnee_complementaire`);

--
-- Index pour la table `t_lot_technique_has_tranche`
--
ALTER TABLE `t_lot_technique_has_tranche`
  ADD PRIMARY KEY (`id_lot_technique`,`id_tranche`),
  ADD KEY `t_lot_technique_has_tranche_id_tranche_fk` (`id_tranche`);

--
-- Index pour la table `t_param_dossier_formulaire`
--
ALTER TABLE `t_param_dossier_formulaire`
  ADD PRIMARY KEY (`id_param_dossier_formulaire`),
  ADD KEY `consultation_t_param_dossier_form_consultation_ref_fk` (`organisme`,`consultation_ref`);

--
-- Index pour la table `T_Profil_Joue`
--
ALTER TABLE `T_Profil_Joue`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t_referentiel_certificat`
--
ALTER TABLE `t_referentiel_certificat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t_reponse_elec_formulaire`
--
ALTER TABLE `t_reponse_elec_formulaire`
  ADD PRIMARY KEY (`id_reponse_elec_formulaire`),
  ADD KEY `consultation_t_reponse_elec_form_consultation_ref_fk` (`organisme`,`consultation_ref`),
  ADD KEY `Entreprise_t_reponse_elec_form_id_entreprise_fk` (`id_entreprise`),
  ADD KEY `Inscrit_t_reponse_elec_form_id_inscrit_fk` (`id_inscrit`);

--
-- Index pour la table `t_sous_critere_attribution`
--
ALTER TABLE `t_sous_critere_attribution`
  ADD PRIMARY KEY (`id_sous_critere_attribution`);

--
-- Index pour la table `t_synthese_rapport_audit`
--
ALTER TABLE `t_synthese_rapport_audit`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `service_id` (`service_id`);

--
-- Index pour la table `T_Theme_Graphique`
--
ALTER TABLE `T_Theme_Graphique`
  ADD PRIMARY KEY (`id_theme_graphique`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Index pour la table `T_trace_operations_inscrit_details`
--
ALTER TABLE `T_trace_operations_inscrit_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_Trace` (`id_trace`);

--
-- Index pour la table `T_Traduction`
--
ALTER TABLE `T_Traduction`
  ADD PRIMARY KEY (`id_libelle`,`langue`);

--
-- Index pour la table `T_Traduction_Tmp`
--
ALTER TABLE `T_Traduction_Tmp`
  ADD PRIMARY KEY (`id_libelle`,`langue`);

--
-- Index pour la table `t_tranche`
--
ALTER TABLE `t_tranche`
  ADD PRIMARY KEY (`id_tranche`),
  ADD KEY `T_TRANCHE_DONNEE_COMPLEMENTAIRE_FK` (`id_donnee_complementaire`),
  ADD KEY `T_TRANCHE_FORME_PRIX_FK` (`id_forme_prix`);

--
-- Index pour la table `ValeurReferentiel`
--
ALTER TABLE `ValeurReferentiel`
  ADD PRIMARY KEY (`id`,`id_referentiel`),
  ADD KEY `id_referentiel` (`id_referentiel`);

--
-- Index pour la table `ValeurReferentielOrg`
--
ALTER TABLE `ValeurReferentielOrg`
  ADD PRIMARY KEY (`id`,`organisme`);

--
-- Index pour la table `visite_lieux`
--
ALTER TABLE `visite_lieux`
  ADD PRIMARY KEY (`id`,`organisme`),
  ADD KEY `reference` (`reference`),
  ADD KEY `visite_lieux_consultation` (`organisme`,`reference`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `AcheteurPublic`
--
ALTER TABLE `AcheteurPublic`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Administrateur`
--
ALTER TABLE `Administrateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Admissibilite_Analyse`
--
ALTER TABLE `Admissibilite_Analyse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `AdresseFacturationJal`
--
ALTER TABLE `AdresseFacturationJal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Agent`
--
ALTER TABLE `Agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `agent_banquier`
--
ALTER TABLE `agent_banquier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Agrement`
--
ALTER TABLE `Agrement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Alerte`
--
ALTER TABLE `Alerte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `alerte_metier`
--
ALTER TABLE `alerte_metier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `AnnonceBoamp`
--
ALTER TABLE `AnnonceBoamp`
  MODIFY `id_boamp` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `AnnonceJAL`
--
ALTER TABLE `AnnonceJAL`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `AnnonceJALPieceJointe`
--
ALTER TABLE `AnnonceJALPieceJointe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `AnnonceMoniteur`
--
ALTER TABLE `AnnonceMoniteur`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Annonce_Press`
--
ALTER TABLE `Annonce_Press`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Annonce_Press_PieceJointe`
--
ALTER TABLE `Annonce_Press_PieceJointe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Articles`
--
ALTER TABLE `Articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `article_catalogue`
--
ALTER TABLE `article_catalogue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Autres_Pieces_Mise_Disposition`
--
ALTER TABLE `Autres_Pieces_Mise_Disposition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Avenant`
--
ALTER TABLE `Avenant`
  MODIFY `id_avenant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `AVIS`
--
ALTER TABLE `AVIS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `AvisCao`
--
ALTER TABLE `AvisCao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Avis_Membres_CAO`
--
ALTER TABLE `Avis_Membres_CAO`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Avis_Pub`
--
ALTER TABLE `Avis_Pub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `backup_Commission`
--
ALTER TABLE `backup_Commission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `backup_Etape_CAO`
--
ALTER TABLE `backup_Etape_CAO`
  MODIFY `id_etape_cao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `backup_Intervenant_Externe`
--
ALTER TABLE `backup_Intervenant_Externe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `backup_Intervenant_Ordre_Du_Jour`
--
ALTER TABLE `backup_Intervenant_Ordre_Du_Jour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `backup_Ordre_Du_Jour`
--
ALTER TABLE `backup_Ordre_Du_Jour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `backup_Ordre_Du_Jour_2`
--
ALTER TABLE `backup_Ordre_Du_Jour_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `blob`
--
ALTER TABLE `blob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `blobOrganisme`
--
ALTER TABLE `blobOrganisme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `blocFichierEnveloppe`
--
ALTER TABLE `blocFichierEnveloppe`
  MODIFY `id_bloc_fichier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `blocFichierEnveloppeTemporaire`
--
ALTER TABLE `blocFichierEnveloppeTemporaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `bon_commande_par_catalogue`
--
ALTER TABLE `bon_commande_par_catalogue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `catalogues`
--
ALTER TABLE `catalogues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `caution_demande`
--
ALTER TABLE `caution_demande`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `caution_historique`
--
ALTER TABLE `caution_historique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `caution_referentiel`
--
ALTER TABLE `caution_referentiel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `caution_restitution`
--
ALTER TABLE `caution_restitution`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `caution_signataire_demande`
--
ALTER TABLE `caution_signataire_demande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `caution_signature`
--
ALTER TABLE `caution_signature`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `caution_signature_restitution`
--
ALTER TABLE `caution_signature_restitution`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ccag_applicable`
--
ALTER TABLE `ccag_applicable`
  MODIFY `id_auto` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Centrale_publication`
--
ALTER TABLE `Centrale_publication`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `CertificatPermanent`
--
ALTER TABLE `CertificatPermanent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Certificats_Entreprises`
--
ALTER TABLE `Certificats_Entreprises`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Certificat_Agent`
--
ALTER TABLE `Certificat_Agent`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `CG76_Domaine`
--
ALTER TABLE `CG76_Domaine`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT pour la table `CG76_Donnee_Complementaire_Domaine`
--
ALTER TABLE `CG76_Donnee_Complementaire_Domaine`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `CG76_Donnee_Complementaire_entreprise`
--
ALTER TABLE `CG76_Donnee_Complementaire_entreprise`
  MODIFY `Ref` smallint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `CG76_PieceJointe`
--
ALTER TABLE `CG76_PieceJointe`
  MODIFY `Ref` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `Chorus_Code_Calcul_Interets`
--
ALTER TABLE `Chorus_Code_Calcul_Interets`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Chorus_conditions_paiements`
--
ALTER TABLE `Chorus_conditions_paiements`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Chorus_echange`
--
ALTER TABLE `Chorus_echange`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Chorus_Fiche_Navette`
--
ALTER TABLE `Chorus_Fiche_Navette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Chorus_groupement_achat`
--
ALTER TABLE `Chorus_groupement_achat`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Chorus_numero_sequence`
--
ALTER TABLE `Chorus_numero_sequence`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Chorus_organisation_achat`
--
ALTER TABLE `Chorus_organisation_achat`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Chorus_pj`
--
ALTER TABLE `Chorus_pj`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Chorus_Regroupement_Comptable`
--
ALTER TABLE `Chorus_Regroupement_Comptable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Chorus_Type_Groupement`
--
ALTER TABLE `Chorus_Type_Groupement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Chorus_type_marche`
--
ALTER TABLE `Chorus_type_marche`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Chorus_type_procedure`
--
ALTER TABLE `Chorus_type_procedure`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Complement`
--
ALTER TABLE `Complement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `CompteMoniteur`
--
ALTER TABLE `CompteMoniteur`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `compte_centrale`
--
ALTER TABLE `compte_centrale`
  MODIFY `ID_COMPTE` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `configuration_alerte`
--
ALTER TABLE `configuration_alerte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `configuration_plateforme`
--
ALTER TABLE `configuration_plateforme`
  MODIFY `id_auto` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `reference` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ConsultationFormulaire`
--
ALTER TABLE `ConsultationFormulaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ConsultationHistoriqueEtat`
--
ALTER TABLE `ConsultationHistoriqueEtat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `consultation_document_cfe`
--
ALTER TABLE `consultation_document_cfe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Contact_Entreprise`
--
ALTER TABLE `Contact_Entreprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Contrat`
--
ALTER TABLE `Contrat`
  MODIFY `id_contrat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Criteres_Evaluation`
--
ALTER TABLE `Criteres_Evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `DATEFIN`
--
ALTER TABLE `DATEFIN`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `DateLancementCron`
--
ALTER TABLE `DateLancementCron`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `DA_Consultation`
--
ALTER TABLE `DA_Consultation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `DCE`
--
ALTER TABLE `DCE`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `decisionEnveloppe`
--
ALTER TABLE `decisionEnveloppe`
  MODIFY `id_decision_enveloppe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `DecisionLot`
--
ALTER TABLE `DecisionLot`
  MODIFY `id_decision_lot` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `DecisionPassationConsultation`
--
ALTER TABLE `DecisionPassationConsultation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `DecisionPassationMarcheAVenir`
--
ALTER TABLE `DecisionPassationMarcheAVenir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `demande_achat_ligne`
--
ALTER TABLE `demande_achat_ligne`
  MODIFY `id_demande_achat_ligne` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `demande_achat_par_catalogue`
--
ALTER TABLE `demande_achat_par_catalogue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `demande_complement`
--
ALTER TABLE `demande_complement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Departement`
--
ALTER TABLE `Departement`
  MODIFY `id_departement` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `DestinataireAnnonceJAL`
--
ALTER TABLE `DestinataireAnnonceJAL`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Destinataire_Annonce_Press`
--
ALTER TABLE `Destinataire_Annonce_Press`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `destinataire_centrale_pub`
--
ALTER TABLE `destinataire_centrale_pub`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `destinataire_mise_disposition`
--
ALTER TABLE `destinataire_mise_disposition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Destinataire_Pub`
--
ALTER TABLE `Destinataire_Pub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `DocumentExterne`
--
ALTER TABLE `DocumentExterne`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Echange`
--
ALTER TABLE `Echange`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `EchangeDestinataire`
--
ALTER TABLE `EchangeDestinataire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `EchangeFormat`
--
ALTER TABLE `EchangeFormat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `EchangePieceJointe`
--
ALTER TABLE `EchangePieceJointe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `EchangeTypeAR`
--
ALTER TABLE `EchangeTypeAR`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `EchangeTypeMessage`
--
ALTER TABLE `EchangeTypeMessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `EnchereEntreprisePmi`
--
ALTER TABLE `EnchereEntreprisePmi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `EnchereOffre`
--
ALTER TABLE `EnchereOffre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `EnchereOffreReference`
--
ALTER TABLE `EnchereOffreReference`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `EncherePmi`
--
ALTER TABLE `EncherePmi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `EnchereReference`
--
ALTER TABLE `EnchereReference`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `EnchereTrancheBaremeReference`
--
ALTER TABLE `EnchereTrancheBaremeReference`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `EnchereTranchesBaremeNETC`
--
ALTER TABLE `EnchereTranchesBaremeNETC`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `EnchereValeursInitiales`
--
ALTER TABLE `EnchereValeursInitiales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Entreprise`
--
ALTER TABLE `Entreprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `EntrepriseInsee`
--
ALTER TABLE `EntrepriseInsee`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Enveloppe`
--
ALTER TABLE `Enveloppe`
  MODIFY `id_enveloppe_electro` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `EnveloppeCritereEvaluation`
--
ALTER TABLE `EnveloppeCritereEvaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `EnveloppeFormulaireConsultation`
--
ALTER TABLE `EnveloppeFormulaireConsultation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `EnveloppeItemCritereEvaluation`
--
ALTER TABLE `EnveloppeItemCritereEvaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `EnveloppeItemFormulaireConsultationValues`
--
ALTER TABLE `EnveloppeItemFormulaireConsultationValues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Enveloppe_papier`
--
ALTER TABLE `Enveloppe_papier`
  MODIFY `id_enveloppe_papier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `EtatConsultation`
--
ALTER TABLE `EtatConsultation`
  MODIFY `id_etat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `Evenement`
--
ALTER TABLE `Evenement`
  MODIFY `id_evenement` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_agent_contrat`
--
ALTER TABLE `exec_agent_contrat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_agent_profil`
--
ALTER TABLE `exec_agent_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_avenant`
--
ALTER TABLE `exec_avenant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_contact`
--
ALTER TABLE `exec_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_contractant`
--
ALTER TABLE `exec_contractant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_contrat`
--
ALTER TABLE `exec_contrat`
  MODIFY `id_contrat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_dossier_paiement`
--
ALTER TABLE `exec_dossier_paiement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_dp_facture`
--
ALTER TABLE `exec_dp_facture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_evenement`
--
ALTER TABLE `exec_evenement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_facture`
--
ALTER TABLE `exec_facture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_facture_signature`
--
ALTER TABLE `exec_facture_signature`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_habilitation`
--
ALTER TABLE `exec_habilitation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_historique_prix`
--
ALTER TABLE `exec_historique_prix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_inscrit_contrat`
--
ALTER TABLE `exec_inscrit_contrat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_livrable_contrat`
--
ALTER TABLE `exec_livrable_contrat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_modele_document`
--
ALTER TABLE `exec_modele_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `exec_modele_notification`
--
ALTER TABLE `exec_modele_notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_penalite`
--
ALTER TABLE `exec_penalite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_phase`
--
ALTER TABLE `exec_phase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_phase_evenement`
--
ALTER TABLE `exec_phase_evenement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_piece`
--
ALTER TABLE `exec_piece`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_piece_avenant`
--
ALTER TABLE `exec_piece_avenant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_piece_contrat`
--
ALTER TABLE `exec_piece_contrat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_piece_dossierpaiement`
--
ALTER TABLE `exec_piece_dossierpaiement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_piece_evenement`
--
ALTER TABLE `exec_piece_evenement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_piece_facture`
--
ALTER TABLE `exec_piece_facture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_piece_type_contrat`
--
ALTER TABLE `exec_piece_type_contrat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_prix`
--
ALTER TABLE `exec_prix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_prix_avenant`
--
ALTER TABLE `exec_prix_avenant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_profil`
--
ALTER TABLE `exec_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_repartition`
--
ALTER TABLE `exec_repartition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_synchronisation_objet_theme`
--
ALTER TABLE `exec_synchronisation_objet_theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_type_avenant`
--
ALTER TABLE `exec_type_avenant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_type_contractant`
--
ALTER TABLE `exec_type_contractant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_type_contrat`
--
ALTER TABLE `exec_type_contrat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_type_evenement`
--
ALTER TABLE `exec_type_evenement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_type_piece`
--
ALTER TABLE `exec_type_piece`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_type_piece_evenement`
--
ALTER TABLE `exec_type_piece_evenement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exec_type_structure`
--
ALTER TABLE `exec_type_structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `facture_piece_jointe`
--
ALTER TABLE `facture_piece_jointe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Faq_Entreprise`
--
ALTER TABLE `Faq_Entreprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Fcsp_Lieu`
--
ALTER TABLE `Fcsp_Lieu`
  MODIFY `id_auto` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Fcsp_Mandataire`
--
ALTER TABLE `Fcsp_Mandataire`
  MODIFY `id_auto` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Fcsp_unite`
--
ALTER TABLE `Fcsp_unite`
  MODIFY `id_auto` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fichierEnveloppe`
--
ALTER TABLE `fichierEnveloppe`
  MODIFY `id_fichier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fichiers_liste_marches`
--
ALTER TABLE `fichiers_liste_marches`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `FormXmlDestinataireOpoce`
--
ALTER TABLE `FormXmlDestinataireOpoce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `GeolocalisationN0`
--
ALTER TABLE `GeolocalisationN0`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `GeolocalisationN1`
--
ALTER TABLE `GeolocalisationN1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `GeolocalisationN2`
--
ALTER TABLE `GeolocalisationN2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gestion_adresses`
--
ALTER TABLE `gestion_adresses`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `groupement`
--
ALTER TABLE `groupement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Groupe_Moniteur`
--
ALTER TABLE `Groupe_Moniteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Guides`
--
ALTER TABLE `Guides`
  MODIFY `id_guide` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `HabilitationProfil`
--
ALTER TABLE `HabilitationProfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Helios_piece_publicite`
--
ALTER TABLE `Helios_piece_publicite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Helios_pv_consultation`
--
ALTER TABLE `Helios_pv_consultation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Helios_rapport_prefet`
--
ALTER TABLE `Helios_rapport_prefet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Helios_tableau_ar`
--
ALTER TABLE `Helios_tableau_ar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Helios_teletransmission`
--
ALTER TABLE `Helios_teletransmission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `historiques_consultation`
--
ALTER TABLE `historiques_consultation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Historique_Avis_Pub`
--
ALTER TABLE `Historique_Avis_Pub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Historique_suppression_agent`
--
ALTER TABLE `Historique_suppression_agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Inscrit`
--
ALTER TABLE `Inscrit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `InscritHistorique`
--
ALTER TABLE `InscritHistorique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1153;

--
-- AUTO_INCREMENT pour la table `inscrit_depot_selection_lots`
--
ALTER TABLE `inscrit_depot_selection_lots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Inscrit_Sub`
--
ALTER TABLE `Inscrit_Sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `interfacage_exec_parapheur_organisme`
--
ALTER TABLE `interfacage_exec_parapheur_organisme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `InterfaceTypeProcedure`
--
ALTER TABLE `InterfaceTypeProcedure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `InterneConsultation`
--
ALTER TABLE `InterneConsultation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `InterneConsultationSuiviSeul`
--
ALTER TABLE `InterneConsultationSuiviSeul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `InvitationConsultationTransverse`
--
ALTER TABLE `InvitationConsultationTransverse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ItemCritereEvaluation`
--
ALTER TABLE `ItemCritereEvaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ItemFormulaire`
--
ALTER TABLE `ItemFormulaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ItemFormulaireConsultation`
--
ALTER TABLE `ItemFormulaireConsultation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `JAL`
--
ALTER TABLE `JAL`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Journaux`
--
ALTER TABLE `Journaux`
  MODIFY `ID_JOURNAL` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Justificatifs`
--
ALTER TABLE `Justificatifs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Langue`
--
ALTER TABLE `Langue`
  MODIFY `id_langue` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Ligne_DA`
--
ALTER TABLE `Ligne_DA`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `liste_present_commission`
--
ALTER TABLE `liste_present_commission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Lt_Referentiel`
--
ALTER TABLE `Lt_Referentiel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `mandataire`
--
ALTER TABLE `mandataire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Mandataire_service`
--
ALTER TABLE `Mandataire_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Marche`
--
ALTER TABLE `Marche`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `MarchePublie`
--
ALTER TABLE `MarchePublie`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Mesure_avancement`
--
ALTER TABLE `Mesure_avancement`
  MODIFY `id_mesure` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Mesure_Type_Procedure`
--
ALTER TABLE `Mesure_Type_Procedure`
  MODIFY `id_tag_name` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ModeleFormulaire`
--
ALTER TABLE `ModeleFormulaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Newsletter`
--
ALTER TABLE `Newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `NewsletterPieceJointe`
--
ALTER TABLE `NewsletterPieceJointe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Numerotation_ref_cons_auto`
--
ALTER TABLE `Numerotation_ref_cons_auto`
  MODIFY `id_auto` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Offres`
--
ALTER TABLE `Offres`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `offre_caution`
--
ALTER TABLE `offre_caution`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `offre_caution_signature`
--
ALTER TABLE `offre_caution_signature`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Offre_papier`
--
ALTER TABLE `Offre_papier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Operations`
--
ALTER TABLE `Operations`
  MODIFY `id_operation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Organisme`
--
ALTER TABLE `Organisme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Organisme_Service_Metier`
--
ALTER TABLE `Organisme_Service_Metier`
  MODIFY `id_auto` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Parametrage_Enchere`
--
ALTER TABLE `Parametrage_Enchere`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Parametrage_Enchere_Reference`
--
ALTER TABLE `Parametrage_Enchere_Reference`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Parametrage_Enchere_Tranches_Bareme_NETC`
--
ALTER TABLE `Parametrage_Enchere_Tranches_Bareme_NETC`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Parametrage_Enchere_Tranche_Bareme_Reference`
--
ALTER TABLE `Parametrage_Enchere_Tranche_Bareme_Reference`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Partenaire`
--
ALTER TABLE `Partenaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Passation_consultation`
--
ALTER TABLE `Passation_consultation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `passation_marche_a_venir`
--
ALTER TABLE `passation_marche_a_venir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pieces_complement`
--
ALTER TABLE `pieces_complement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Pieces_DCE`
--
ALTER TABLE `Pieces_DCE`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Pieces_Mise_Disposition`
--
ALTER TABLE `Pieces_Mise_Disposition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `piece_sous_type_facture`
--
ALTER TABLE `piece_sous_type_facture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Prestation`
--
ALTER TABLE `Prestation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `programme_previsionnel`
--
ALTER TABLE `programme_previsionnel`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Qualification`
--
ALTER TABLE `Qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'cl? primaire';

--
-- AUTO_INCREMENT pour la table `QuestionDCE`
--
ALTER TABLE `QuestionDCE`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `questions_dce`
--
ALTER TABLE `questions_dce`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Referentiel`
--
ALTER TABLE `Referentiel`
  MODIFY `id_referentiel` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ReferentielDestinationFormXml`
--
ALTER TABLE `ReferentielDestinationFormXml`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ReferentielFormXml`
--
ALTER TABLE `ReferentielFormXml`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ReferentielOrg`
--
ALTER TABLE `ReferentielOrg`
  MODIFY `id_referentiel` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ReferentielTypeXml`
--
ALTER TABLE `ReferentielTypeXml`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Referentiel_Agent`
--
ALTER TABLE `Referentiel_Agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Referentiel_Consultation`
--
ALTER TABLE `Referentiel_Consultation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Referentiel_contact`
--
ALTER TABLE `Referentiel_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Referentiel_Entreprise`
--
ALTER TABLE `Referentiel_Entreprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Referentiel_org_denomination`
--
ALTER TABLE `Referentiel_org_denomination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Relation_Echange`
--
ALTER TABLE `Relation_Echange`
  MODIFY `id_auto` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `renseignements_boamp`
--
ALTER TABLE `renseignements_boamp`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ReponseInscritFormulaireConsultation`
--
ALTER TABLE `ReponseInscritFormulaireConsultation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ReponseInscritItemFormulaireConsultationValues`
--
ALTER TABLE `ReponseInscritItemFormulaireConsultationValues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `responsableengagement`
--
ALTER TABLE `responsableengagement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `restitution_historique`
--
ALTER TABLE `restitution_historique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `resultat_analyse`
--
ALTER TABLE `resultat_analyse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `resultat_analyse_decision`
--
ALTER TABLE `resultat_analyse_decision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `resultat_analyse_historique`
--
ALTER TABLE `resultat_analyse_historique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Retrait_Papier`
--
ALTER TABLE `Retrait_Papier`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `RG`
--
ALTER TABLE `RG`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `RPA`
--
ALTER TABLE `RPA`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Service`
--
ALTER TABLE `Service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `service_associe`
--
ALTER TABLE `service_associe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Service_Mertier_Profils`
--
ALTER TABLE `Service_Mertier_Profils`
  MODIFY `id_auto` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Societes_Exclues`
--
ALTER TABLE `Societes_Exclues`
  MODIFY `id_societes_exclues` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Cl? primaire';

--
-- AUTO_INCREMENT pour la table `sous_type_facture`
--
ALTER TABLE `sous_type_facture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `SuiviAcces`
--
ALTER TABLE `SuiviAcces`
  MODIFY `id_auto` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Support_Publication`
--
ALTER TABLE `Support_Publication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Telechargement`
--
ALTER TABLE `Telechargement`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `TelechargementAnonyme`
--
ALTER TABLE `TelechargementAnonyme`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Tiers`
--
ALTER TABLE `Tiers`
  MODIFY `id_tiers` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `TireurPlan`
--
ALTER TABLE `TireurPlan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `trace_operations_inscrit`
--
ALTER TABLE `trace_operations_inscrit`
  MODIFY `id_trace` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Tranche_Article_133`
--
ALTER TABLE `Tranche_Article_133`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `TypeAvenant`
--
ALTER TABLE `TypeAvenant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `TypeAvis`
--
ALTER TABLE `TypeAvis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `TypeCommission`
--
ALTER TABLE `TypeCommission`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `TypeDecision`
--
ALTER TABLE `TypeDecision`
  MODIFY `id_type_decision` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `TypeProcedure`
--
ALTER TABLE `TypeProcedure`
  MODIFY `id_type_procedure` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Type_Avis_Pub`
--
ALTER TABLE `Type_Avis_Pub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_facture`
--
ALTER TABLE `type_facture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Type_Procedure_Organisme`
--
ALTER TABLE `Type_Procedure_Organisme`
  MODIFY `id_type_procedure` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_annonce_annuelle`
--
ALTER TABLE `t_annonce_annuelle`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_banque`
--
ALTER TABLE `t_banque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_calendrier`
--
ALTER TABLE `t_calendrier`
  MODIFY `ID_CALENDRIER` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_calendrier_etape`
--
ALTER TABLE `t_calendrier_etape`
  MODIFY `ID_CALENDRIER_ETAPE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_calendrier_etape_referentiel`
--
ALTER TABLE `t_calendrier_etape_referentiel`
  MODIFY `ID_ETAPE_CALENDRIER_REFERENTIEL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_calendrier_transition`
--
ALTER TABLE `t_calendrier_transition`
  MODIFY `ID_CALENDRIER_TRANSITION` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_calendrier_transition_referentiel`
--
ALTER TABLE `t_calendrier_transition_referentiel`
  MODIFY `ID_TRANSITION_CALENDRIER_REFERENTIEL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_candidature_mps`
--
ALTER TABLE `t_candidature_mps`
  MODIFY `id_candidature` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_CAO_Commission`
--
ALTER TABLE `t_CAO_Commission`
  MODIFY `id_commission` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de la commission';

--
-- AUTO_INCREMENT pour la table `t_CAO_Commission_Agent`
--
ALTER TABLE `t_CAO_Commission_Agent`
  MODIFY `id_commission_agent` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de l''agent de commission';

--
-- AUTO_INCREMENT pour la table `t_CAO_Commission_Consultation`
--
ALTER TABLE `t_CAO_Commission_Consultation`
  MODIFY `id_commission_consultation` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de la consultation de commission';

--
-- AUTO_INCREMENT pour la table `t_CAO_Commission_Intervenant_Externe`
--
ALTER TABLE `t_CAO_Commission_Intervenant_Externe`
  MODIFY `id_commission_intervenant_externe` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de l''intervenant externe pour la commission';

--
-- AUTO_INCREMENT pour la table `t_CAO_Intervenant_Externe`
--
ALTER TABLE `t_CAO_Intervenant_Externe`
  MODIFY `id_intervenant_externe` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de l''intervenant externe';

--
-- AUTO_INCREMENT pour la table `t_CAO_Ordre_De_Passage`
--
ALTER TABLE `t_CAO_Ordre_De_Passage`
  MODIFY `id_ordre_de_passage` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de l''ordre de passage en commission de la consultation';

--
-- AUTO_INCREMENT pour la table `t_CAO_Seance`
--
ALTER TABLE `t_CAO_Seance`
  MODIFY `id_seance` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de la s?ance';

--
-- AUTO_INCREMENT pour la table `t_CAO_Seance_Agent`
--
ALTER TABLE `t_CAO_Seance_Agent`
  MODIFY `id_seance_agent` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de l''agent de la s?ance';

--
-- AUTO_INCREMENT pour la table `t_CAO_Seance_Intervenant_Externe`
--
ALTER TABLE `t_CAO_Seance_Intervenant_Externe`
  MODIFY `id_seance_intervenant_externe` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de l''intervenant externe de la s?ance';

--
-- AUTO_INCREMENT pour la table `t_CAO_Seance_Invite`
--
ALTER TABLE `t_CAO_Seance_Invite`
  MODIFY `id_seance_invite` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de l''invit? du passage en commission de la consultation';

--
-- AUTO_INCREMENT pour la table `t_chorus_tier_rejete`
--
ALTER TABLE `t_chorus_tier_rejete`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_complement_formulaire`
--
ALTER TABLE `t_complement_formulaire`
  MODIFY `id_complement_formulaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_compte_bancaire`
--
ALTER TABLE `t_compte_bancaire`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_critere_attribution`
--
ALTER TABLE `t_critere_attribution`
  MODIFY `id_critere_attribution` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_donnee_complementaire`
--
ALTER TABLE `t_donnee_complementaire`
  MODIFY `id_donnee_complementaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_donnee_complementaire_tmp`
--
ALTER TABLE `t_donnee_complementaire_tmp`
  MODIFY `id_donnee_complementaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_dossier_formulaire`
--
ALTER TABLE `t_dossier_formulaire`
  MODIFY `id_dossier_formulaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_edition_formulaire`
--
ALTER TABLE `t_edition_formulaire`
  MODIFY `id_edition_formulaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_enveloppe_dossier_formulaire`
--
ALTER TABLE `t_enveloppe_dossier_formulaire`
  MODIFY `id_enveloppe_dossier_formulaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_espace_collaboratif`
--
ALTER TABLE `t_espace_collaboratif`
  MODIFY `id_auto` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_flux_rss`
--
ALTER TABLE `t_flux_rss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_forme_prix`
--
ALTER TABLE `t_forme_prix`
  MODIFY `id_forme_prix` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `T_Illustration_Fond`
--
ALTER TABLE `T_Illustration_Fond`
  MODIFY `id_illustration_fond` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_lancement_unique_cli`
--
ALTER TABLE `t_lancement_unique_cli`
  MODIFY `id_lancement_unique_cli` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_lot_technique`
--
ALTER TABLE `t_lot_technique`
  MODIFY `id_lot_technique` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_param_dossier_formulaire`
--
ALTER TABLE `t_param_dossier_formulaire`
  MODIFY `id_param_dossier_formulaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `T_Profil_Joue`
--
ALTER TABLE `T_Profil_Joue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_referentiel_certificat`
--
ALTER TABLE `t_referentiel_certificat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_reponse_elec_formulaire`
--
ALTER TABLE `t_reponse_elec_formulaire`
  MODIFY `id_reponse_elec_formulaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_sous_critere_attribution`
--
ALTER TABLE `t_sous_critere_attribution`
  MODIFY `id_sous_critere_attribution` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_synthese_rapport_audit`
--
ALTER TABLE `t_synthese_rapport_audit`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `T_Theme_Graphique`
--
ALTER TABLE `T_Theme_Graphique`
  MODIFY `id_theme_graphique` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `T_trace_operations_inscrit_details`
--
ALTER TABLE `T_trace_operations_inscrit_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `T_Traduction_Tmp`
--
ALTER TABLE `T_Traduction_Tmp`
  MODIFY `id_libelle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_tranche`
--
ALTER TABLE `t_tranche`
  MODIFY `id_tranche` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ValeurReferentiel`
--
ALTER TABLE `ValeurReferentiel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ValeurReferentielOrg`
--
ALTER TABLE `ValeurReferentielOrg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `visite_lieux`
--
ALTER TABLE `visite_lieux`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Administrateur`
--
ALTER TABLE `Administrateur`
  ADD CONSTRAINT `Administrateur_ibfk_1` FOREIGN KEY (`organisme`) REFERENCES `Organisme` (`acronyme`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `AffiliationService`
--
ALTER TABLE `AffiliationService`
  ADD CONSTRAINT `AffiliationService_ibfk_1` FOREIGN KEY (`organisme`) REFERENCES `Organisme` (`acronyme`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `AffiliationService_Pole` FOREIGN KEY (`id_pole`,`organisme`) REFERENCES `Service` (`id`, `organisme`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `AffiliationService_Service` FOREIGN KEY (`id_service`,`organisme`) REFERENCES `Service` (`id`, `organisme`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Agent`
--
ALTER TABLE `Agent`
  ADD CONSTRAINT `Agent_ibfk_1` FOREIGN KEY (`organisme`) REFERENCES `Organisme` (`acronyme`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Annonce`
--
ALTER TABLE `Annonce`
  ADD CONSTRAINT `Annonce_consultation` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `AnnonceBoamp`
--
ALTER TABLE `AnnonceBoamp`
  ADD CONSTRAINT `AnnonceBoamp_consultation` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`),
  ADD CONSTRAINT `AnnonceBoamp_ibfk_6` FOREIGN KEY (`consultation_ref`) REFERENCES `consultation` (`reference`);

--
-- Contraintes pour la table `AnnonceJALPieceJointe`
--
ALTER TABLE `AnnonceJALPieceJointe`
  ADD CONSTRAINT `AnnonceJALPieceJointe_ibfk_1` FOREIGN KEY (`id_annonce_jal`) REFERENCES `AnnonceJAL` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `AnnonceMoniteur`
--
ALTER TABLE `AnnonceMoniteur`
  ADD CONSTRAINT `AnnonceMoniteur_ibfk_1` FOREIGN KEY (`id_destination_form_xml`) REFERENCES `ReferentielDestinationFormXml` (`id`),
  ADD CONSTRAINT `AnnonceMoniteur_ibfk_2` FOREIGN KEY (`id_form_xml`) REFERENCES `ReferentielFormXml` (`id`);

--
-- Contraintes pour la table `Annonce_Press_PieceJointe`
--
ALTER TABLE `Annonce_Press_PieceJointe`
  ADD CONSTRAINT `Annonce_Press_PieceJointe_ibfk_1` FOREIGN KEY (`id_annonce_press`) REFERENCES `Annonce_Press` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Avenant`
--
ALTER TABLE `Avenant`
  ADD CONSTRAINT `Avenant_ibfk_1` FOREIGN KEY (`id_contrat`) REFERENCES `Contrat` (`id_contrat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `AVIS`
--
ALTER TABLE `AVIS`
  ADD CONSTRAINT `AVIS_consultation` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Avis_Pub`
--
ALTER TABLE `Avis_Pub`
  ADD CONSTRAINT `Avis_Pub_consultation` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `blocFichierEnveloppe`
--
ALTER TABLE `blocFichierEnveloppe`
  ADD CONSTRAINT `blocFichierEnveloppe_fichierEnveloppe` FOREIGN KEY (`id_fichier`,`organisme`) REFERENCES `fichierEnveloppe` (`id_fichier`, `organisme`);

--
-- Contraintes pour la table `bon_commande_par_catalogue`
--
ALTER TABLE `bon_commande_par_catalogue`
  ADD CONSTRAINT `bon_commande_par_catalogue_ibfk_1` FOREIGN KEY (`id_demande`) REFERENCES `demande_achat_par_catalogue` (`id`),
  ADD CONSTRAINT `bon_commande_par_catalogue_ibfk_3` FOREIGN KEY (`id_entreprise`) REFERENCES `Entreprise` (`id`);

--
-- Contraintes pour la table `CategorieLot`
--
ALTER TABLE `CategorieLot`
  ADD CONSTRAINT `CategorieLot_consultation` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `caution_demande`
--
ALTER TABLE `caution_demande`
  ADD CONSTRAINT `caution_demande_ID_AGENT_BANQUIER_REJET_FK` FOREIGN KEY (`ID_AGENT_BANQUIER_REJET`) REFERENCES `agent_banquier` (`id`),
  ADD CONSTRAINT `caution_demande_ID_AGENT_BANQUIER_VALIDATION_FK` FOREIGN KEY (`ID_AGENT_BANQUIER_VALIDATION`) REFERENCES `agent_banquier` (`id`),
  ADD CONSTRAINT `caution_demande_ID_AGENT_PRISE_EN_CHARGE_FK` FOREIGN KEY (`ID_AGENT_PRISE_EN_CHARGE`) REFERENCES `agent_banquier` (`id`),
  ADD CONSTRAINT `caution_demande_ID_COMPTE_BANCAIRE_FK` FOREIGN KEY (`ID_COMPTE_BANCAIRE`) REFERENCES `t_compte_bancaire` (`ID`),
  ADD CONSTRAINT `caution_demande_id_signataire1_fk` FOREIGN KEY (`ID_SIGNATAIRE1`) REFERENCES `agent_banquier` (`id`),
  ADD CONSTRAINT `caution_demande_id_signataire2_fk` FOREIGN KEY (`ID_SIGNATAIRE2`) REFERENCES `agent_banquier` (`id`);

--
-- Contraintes pour la table `caution_restitution`
--
ALTER TABLE `caution_restitution`
  ADD CONSTRAINT `caution_restitution_ID_CAUTION_DEMANDE_FK` FOREIGN KEY (`ID_CAUTION_DEMANDE`) REFERENCES `caution_demande` (`ID`);

--
-- Contraintes pour la table `caution_signataire_demande`
--
ALTER TABLE `caution_signataire_demande`
  ADD CONSTRAINT `caution_signataire_demande_id_demande_fk` FOREIGN KEY (`id_demande`) REFERENCES `caution_demande` (`ID`),
  ADD CONSTRAINT `caution_signataire_demande_id_signataire_fk` FOREIGN KEY (`id_signataire`) REFERENCES `agent_banquier` (`id`);

--
-- Contraintes pour la table `Certificats_Entreprises`
--
ALTER TABLE `Certificats_Entreprises`
  ADD CONSTRAINT `Certificats_Entreprises_ibfk_2` FOREIGN KEY (`id_inscrit`) REFERENCES `Inscrit` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `Chorus_echange`
--
ALTER TABLE `Chorus_echange`
  ADD CONSTRAINT `ChorusEchange_decisionEnveloppe` FOREIGN KEY (`id_decision`,`organisme`) REFERENCES `decisionEnveloppe` (`id_decision_enveloppe`, `organisme`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Chorus_pj`
--
ALTER TABLE `Chorus_pj`
  ADD CONSTRAINT `Chorus_pj_Chorus_echange` FOREIGN KEY (`id_echange`,`organisme`) REFERENCES `Chorus_echange` (`id`, `organisme`);

--
-- Contraintes pour la table `Complement`
--
ALTER TABLE `Complement`
  ADD CONSTRAINT `Complement_consultation` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `compte_centrale`
--
ALTER TABLE `compte_centrale`
  ADD CONSTRAINT `compte_centrale_ibfk_1` FOREIGN KEY (`ID_CENTRALE`) REFERENCES `Centrale_publication` (`id`);

--
-- Contraintes pour la table `configuration_organisme`
--
ALTER TABLE `configuration_organisme`
  ADD CONSTRAINT `configuration_organisme_ibfk_1` FOREIGN KEY (`organisme`) REFERENCES `Organisme` (`acronyme`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `consultation_ibfk_1` FOREIGN KEY (`organisme`) REFERENCES `Organisme` (`acronyme`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Operations_fk` FOREIGN KEY (`idOperation`) REFERENCES `Operations` (`id_operation`);

--
-- Contraintes pour la table `ConsultationHistoriqueEtat`
--
ALTER TABLE `ConsultationHistoriqueEtat`
  ADD CONSTRAINT `ConsultationHistoriqueEtat` FOREIGN KEY (`consultation_ref`) REFERENCES `consultation` (`reference`);

--
-- Contraintes pour la table `consultation_document_cfe`
--
ALTER TABLE `consultation_document_cfe`
  ADD CONSTRAINT `consultation_document_cfe_ibfk_1` FOREIGN KEY (`ref_consultation`) REFERENCES `consultation` (`reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Contact_Entreprise`
--
ALTER TABLE `Contact_Entreprise`
  ADD CONSTRAINT `Contact_Entreprise_Entreprise` FOREIGN KEY (`id_entreprise`) REFERENCES `Entreprise` (`id`);

--
-- Contraintes pour la table `DATEFIN`
--
ALTER TABLE `DATEFIN`
  ADD CONSTRAINT `DATEFIN_consultation` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `DA_Consultation`
--
ALTER TABLE `DA_Consultation`
  ADD CONSTRAINT `DA_Consultation_ibfk_1` FOREIGN KEY (`organisme`) REFERENCES `Organisme` (`acronyme`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `DA_Consultation_ibfk_2` FOREIGN KEY (`consultation_ref`) REFERENCES `consultation` (`reference`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `DCE`
--
ALTER TABLE `DCE`
  ADD CONSTRAINT `DCE_consultation` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `demande_achat_par_catalogue`
--
ALTER TABLE `demande_achat_par_catalogue`
  ADD CONSTRAINT `demande_achat_par_catalogue_ibfk_1` FOREIGN KEY (`id_agent`) REFERENCES `Agent` (`id`),
  ADD CONSTRAINT `demande_achat_par_catalogue_ibfk_2` FOREIGN KEY (`organisme`) REFERENCES `Organisme` (`acronyme`);

--
-- Contraintes pour la table `DestinataireAnnonceJAL`
--
ALTER TABLE `DestinataireAnnonceJAL`
  ADD CONSTRAINT `DestinataireAnnonceJAL_ibfk_1` FOREIGN KEY (`idJAL`) REFERENCES `JAL` (`id`),
  ADD CONSTRAINT `DestinataireAnnonceJAL_ibfk_2` FOREIGN KEY (`idAnnonceJAL`) REFERENCES `AnnonceJAL` (`id`);

--
-- Contraintes pour la table `destinataire_mise_disposition`
--
ALTER TABLE `destinataire_mise_disposition`
  ADD CONSTRAINT `destinataire_mise_disposition_ibfk_1` FOREIGN KEY (`organisme`) REFERENCES `Organisme` (`acronyme`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `DocumentExterne`
--
ALTER TABLE `DocumentExterne`
  ADD CONSTRAINT `DOC_EX_Blob` FOREIGN KEY (`idBlob`) REFERENCES `blobOrganisme` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `DOC_EX_consultation` FOREIGN KEY (`organisme`,`refConsultation`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `EchangeDestinataire`
--
ALTER TABLE `EchangeDestinataire`
  ADD CONSTRAINT `EchangeDestinataire_ibfk_1` FOREIGN KEY (`id_echange`) REFERENCES `Echange` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `EchangePieceJointe`
--
ALTER TABLE `EchangePieceJointe`
  ADD CONSTRAINT `EchangePieceJointe_ibfk_1` FOREIGN KEY (`id_message`) REFERENCES `Echange` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `EnchereEntreprisePmi`
--
ALTER TABLE `EnchereEntreprisePmi`
  ADD CONSTRAINT `EnchereEntreprisePmi_EncherePmi_IdTech` FOREIGN KEY (`idEnchere`,`organisme`) REFERENCES `EncherePmi` (`id`, `organisme`);

--
-- Contraintes pour la table `EnchereOffre`
--
ALTER TABLE `EnchereOffre`
  ADD CONSTRAINT `EnchereOffre_EnchereEntreprisePmi` FOREIGN KEY (`idEnchereEntreprise`,`organisme`) REFERENCES `EnchereEntreprisePmi` (`id`, `organisme`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `EnchereOffre_EncherePmi` FOREIGN KEY (`idEnchere`,`organisme`) REFERENCES `EncherePmi` (`id`, `organisme`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `EnchereOffre_idEnchere` FOREIGN KEY (`idEnchere`) REFERENCES `EncherePmi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `EnchereOffreReference`
--
ALTER TABLE `EnchereOffreReference`
  ADD CONSTRAINT `EnchereOffreReference_EnchereOffre` FOREIGN KEY (`idEnchereOffre`,`organisme`) REFERENCES `EnchereOffre` (`id`, `organisme`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `EnchereOffreReference_EnchereOffre_idEnchereOffre` FOREIGN KEY (`idEnchereOffre`) REFERENCES `EnchereOffre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `EnchereOffreReference_EnchereReference` FOREIGN KEY (`idEnchereReference`,`organisme`) REFERENCES `EnchereReference` (`id`, `organisme`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `EnchereOffreReference_EnchereReference_idEnchereReference` FOREIGN KEY (`idEnchereReference`) REFERENCES `EnchereReference` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `EnchereReference`
--
ALTER TABLE `EnchereReference`
  ADD CONSTRAINT `EnchereReference_EncherePmi_idEnchere` FOREIGN KEY (`idEnchere`) REFERENCES `EncherePmi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `EnchereReference_EncherePmi_idEnchere_org` FOREIGN KEY (`idEnchere`,`organisme`) REFERENCES `EncherePmi` (`id`, `organisme`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `EnchereTrancheBaremeReference`
--
ALTER TABLE `EnchereTrancheBaremeReference`
  ADD CONSTRAINT `EnchereTrancheBaremeReference_EnchereReference_idRef` FOREIGN KEY (`idReference`) REFERENCES `EnchereReference` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `EnchereTrancheBaremeReference_EnchereReference_idRef_org` FOREIGN KEY (`idReference`,`organisme`) REFERENCES `EnchereReference` (`id`, `organisme`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `EnchereTranchesBaremeNETC`
--
ALTER TABLE `EnchereTranchesBaremeNETC`
  ADD CONSTRAINT `EnchereTranchesBaremeNETC_EncherePmi` FOREIGN KEY (`idEnchere`,`organisme`) REFERENCES `EncherePmi` (`id`, `organisme`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `EnchereTranchesBaremeNETC_EncherePmi_idReference` FOREIGN KEY (`idEnchere`) REFERENCES `EncherePmi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `EnchereValeursInitiales`
--
ALTER TABLE `EnchereValeursInitiales`
  ADD CONSTRAINT `EnchereValeursInitiales_EnchereEntreprisePmi` FOREIGN KEY (`idEnchereEntreprise`,`organisme`) REFERENCES `EnchereEntreprisePmi` (`id`, `organisme`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `EnchereValeursInitiales_EnchereReference` FOREIGN KEY (`idEnchereReference`,`organisme`) REFERENCES `EnchereReference` (`id`, `organisme`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `EnveloppeItemCritereEvaluation`
--
ALTER TABLE `EnveloppeItemCritereEvaluation`
  ADD CONSTRAINT `EnveloppeItemCritereEvaluation_ibfk_1` FOREIGN KEY (`idEnveloppeCritereEvaluation`) REFERENCES `EnveloppeCritereEvaluation` (`id`);

--
-- Contraintes pour la table `EnveloppeItemFormulaireConsultationValues`
--
ALTER TABLE `EnveloppeItemFormulaireConsultationValues`
  ADD CONSTRAINT `EnveloppeItemFormulaireConsultationValues_ibfk_1` FOREIGN KEY (`idItemFormulaireConsultation`) REFERENCES `ItemFormulaireConsultation` (`id`);

--
-- Contraintes pour la table `exec_agent_contrat`
--
ALTER TABLE `exec_agent_contrat`
  ADD CONSTRAINT `exec_agent_contrat_ibfk_1` FOREIGN KEY (`id_agent`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_agent_contrat_ibfk_3` FOREIGN KEY (`id_contrat`) REFERENCES `exec_contrat` (`id_contrat`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `exec_avenant`
--
ALTER TABLE `exec_avenant`
  ADD CONSTRAINT `exec_avenant_id_agent_crea_fk` FOREIGN KEY (`id_agent_crea`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_avenant_id_agent_modif_fk` FOREIGN KEY (`id_agent_modif`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_avenant_id_agent_rejet_fk` FOREIGN KEY (`id_agent_rejet`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_avenant_id_agent_validation_fk` FOREIGN KEY (`id_agent_validation`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_avenant_id_contrat_fk` FOREIGN KEY (`id_contrat`) REFERENCES `exec_contrat` (`id_contrat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_avenant_id_type_avenant_fk` FOREIGN KEY (`id_type_avenant`) REFERENCES `exec_type_avenant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `exec_contact`
--
ALTER TABLE `exec_contact`
  ADD CONSTRAINT `exec_contact_id_contractant_fk` FOREIGN KEY (`id_contractant`) REFERENCES `exec_contractant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_contact_id_contrat_fk` FOREIGN KEY (`id_contrat`) REFERENCES `exec_contrat` (`id_contrat`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `exec_contractant`
--
ALTER TABLE `exec_contractant`
  ADD CONSTRAINT `exec_contractant_id_agent_crea_fk` FOREIGN KEY (`id_agent_crea`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_contractant_id_agent_modif_fk` FOREIGN KEY (`id_agent_modif`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_contractant_id_contrat_fk` FOREIGN KEY (`id_contrat`) REFERENCES `exec_contrat` (`id_contrat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_contractant_id_parent_fk` FOREIGN KEY (`id_parent`) REFERENCES `exec_contractant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_contractant_id_type_contractant_fk` FOREIGN KEY (`id_type_contractant`) REFERENCES `exec_type_contractant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_contractant_id_type_structure_fk` FOREIGN KEY (`id_type_structure`) REFERENCES `exec_type_structure` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `exec_contrat`
--
ALTER TABLE `exec_contrat`
  ADD CONSTRAINT `exec_contrat_id_agent_crea_fk` FOREIGN KEY (`id_agent_crea`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_contrat_id_agent_gestion_fk` FOREIGN KEY (`id_agent_gestion`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_contrat_id_agent_modif_fk` FOREIGN KEY (`id_agent_modif`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_contrat_id_nature_prestation_fk` FOREIGN KEY (`id_nature_prestation`) REFERENCES `CategorieConsultation` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_contrat_id_type_contrat_fk` FOREIGN KEY (`id_type_contrat`) REFERENCES `exec_type_contrat` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_contrat_id_type_structure_fk` FOREIGN KEY (`id_type_structure`) REFERENCES `exec_type_structure` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `exec_dossier_paiement`
--
ALTER TABLE `exec_dossier_paiement`
  ADD CONSTRAINT `cont_ref` FOREIGN KEY (`id_contrat`) REFERENCES `exec_contrat` (`id_contrat`),
  ADD CONSTRAINT `cr_agent` FOREIGN KEY (`id_agent_creat`) REFERENCES `Agent` (`id`);

--
-- Contraintes pour la table `exec_dp_facture`
--
ALTER TABLE `exec_dp_facture`
  ADD CONSTRAINT `d_ref` FOREIGN KEY (`id_dp`) REFERENCES `exec_dossier_paiement` (`id`),
  ADD CONSTRAINT `f_ref` FOREIGN KEY (`id_facture`) REFERENCES `exec_facture` (`id`);

--
-- Contraintes pour la table `exec_evenement`
--
ALTER TABLE `exec_evenement`
  ADD CONSTRAINT `exec_evenement_id_agent_crea_fk` FOREIGN KEY (`id_agent_crea`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_evenement_id_agent_modif_fk` FOREIGN KEY (`id_agent_modif`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_evenement_id_agent_rejet_fk` FOREIGN KEY (`id_agent_rejet`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_evenement_id_agent_validation_fk` FOREIGN KEY (`id_agent_validation`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_evenement_id_contractant_fk` FOREIGN KEY (`id_contractant`) REFERENCES `exec_contractant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_evenement_id_contrat_fk` FOREIGN KEY (`id_contrat`) REFERENCES `exec_contrat` (`id_contrat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_evenement_id_phase_fk` FOREIGN KEY (`id_phase`) REFERENCES `exec_phase` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_evenement_id_type_evenement_fk` FOREIGN KEY (`id_type_evenement`) REFERENCES `exec_type_evenement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `exec_facture`
--
ALTER TABLE `exec_facture`
  ADD CONSTRAINT `exec_facture_id_agent_crea_fk` FOREIGN KEY (`id_agent_crea`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_facture_id_agent_modif_fk` FOREIGN KEY (`id_agent_modif`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_facture_id_agent_rejet_fk` FOREIGN KEY (`id_agent_rejet`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_facture_id_agent_validation_fk` FOREIGN KEY (`id_agent_validation`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_facture_id_contractant_fk` FOREIGN KEY (`id_contractant`) REFERENCES `exec_contractant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_facture_id_contrat_fk` FOREIGN KEY (`id_contrat`) REFERENCES `exec_contrat` (`id_contrat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_facture_id_entreprise_crea_fk` FOREIGN KEY (`id_entreprise_crea`) REFERENCES `Entreprise` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_facture_id_entreprise_modif_fk` FOREIGN KEY (`id_entreprise_modif`) REFERENCES `Entreprise` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `exec_historique_prix`
--
ALTER TABLE `exec_historique_prix`
  ADD CONSTRAINT `exec_historique_prix_id_agent_crea_fk` FOREIGN KEY (`id_agent_crea`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_historique_prix_id_agent_modif_fk` FOREIGN KEY (`id_agent_modif`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_historique_prix_id_avenant_fk` FOREIGN KEY (`id_avenant`) REFERENCES `exec_avenant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_historique_prix_id_contrat_fk` FOREIGN KEY (`id_contrat`) REFERENCES `exec_contrat` (`id_contrat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_historique_prix_id_prix_fk` FOREIGN KEY (`id_prix`) REFERENCES `exec_prix` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `exec_inscrit_contrat`
--
ALTER TABLE `exec_inscrit_contrat`
  ADD CONSTRAINT `exec_inscrit_contrat_id_contractant_fk` FOREIGN KEY (`id_contractant`) REFERENCES `exec_contractant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_inscrit_contrat_id_contrat_fk` FOREIGN KEY (`id_contrat`) REFERENCES `exec_contrat` (`id_contrat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_inscrit_contrat_id_entreprise_fk` FOREIGN KEY (`id_entreprise`) REFERENCES `Entreprise` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_inscrit_contrat_id_inscrit_fk` FOREIGN KEY (`id_inscrit`) REFERENCES `Inscrit` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `exec_livrable_contrat`
--
ALTER TABLE `exec_livrable_contrat`
  ADD CONSTRAINT `exec_livrable_contrat_ibfk_1` FOREIGN KEY (`id_agent_crea`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_livrable_contrat_ibfk_3` FOREIGN KEY (`id_contrat`) REFERENCES `exec_contrat` (`id_contrat`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `exec_penalite`
--
ALTER TABLE `exec_penalite`
  ADD CONSTRAINT `pen_te` FOREIGN KEY (`id_dossier_paiement`) REFERENCES `exec_dossier_paiement` (`id`);

--
-- Contraintes pour la table `exec_phase`
--
ALTER TABLE `exec_phase`
  ADD CONSTRAINT `exec_phase_id_agent_crea_fk` FOREIGN KEY (`id_agent_crea`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_phase_id_agent_modif_fk` FOREIGN KEY (`id_agent_modif`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_phase_id_contrat_fk` FOREIGN KEY (`id_contrat`) REFERENCES `exec_contrat` (`id_contrat`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `exec_piece`
--
ALTER TABLE `exec_piece`
  ADD CONSTRAINT `exec_piece_id_agent_crea_fk` FOREIGN KEY (`id_agent_crea`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_piece_id_contrat_fk` FOREIGN KEY (`id_contrat`) REFERENCES `exec_contrat` (`id_contrat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_piece_id_type_piece_fk` FOREIGN KEY (`id_type_piece`) REFERENCES `exec_type_piece` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `exec_piece_avenant`
--
ALTER TABLE `exec_piece_avenant`
  ADD CONSTRAINT `exec_piece_avenant_id_agent_crea_fk` FOREIGN KEY (`id_agent_crea`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_piece_avenant_id_avenant_fk` FOREIGN KEY (`id_avenant`) REFERENCES `exec_avenant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_piece_avenant_id_contrat_fk` FOREIGN KEY (`id_contrat`) REFERENCES `exec_contrat` (`id_contrat`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `exec_piece_contrat`
--
ALTER TABLE `exec_piece_contrat`
  ADD CONSTRAINT `exec_piece_contrat_ibfk_1` FOREIGN KEY (`id_agent_crea`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_piece_contrat_ibfk_3` FOREIGN KEY (`id_contrat`) REFERENCES `exec_contrat` (`id_contrat`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `exec_piece_dossierpaiement`
--
ALTER TABLE `exec_piece_dossierpaiement`
  ADD CONSTRAINT `al_ag` FOREIGN KEY (`id_dossier_paiement`) REFERENCES `exec_dossier_paiement` (`id`),
  ADD CONSTRAINT `al_fi` FOREIGN KEY (`id_contrat`) REFERENCES `exec_contrat` (`id_contrat`),
  ADD CONSTRAINT `pd_ref` FOREIGN KEY (`id_agent_creat`) REFERENCES `Agent` (`id`);

--
-- Contraintes pour la table `exec_piece_evenement`
--
ALTER TABLE `exec_piece_evenement`
  ADD CONSTRAINT `exec_piece_evenement_id_agent_crea_fk` FOREIGN KEY (`id_agent_crea`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_piece_evenement_id_contrat_fk` FOREIGN KEY (`id_contrat`) REFERENCES `exec_contrat` (`id_contrat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_piece_evenement_id_evenement_fk` FOREIGN KEY (`id_evenement`) REFERENCES `exec_evenement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_piece_evenement_id_type_piece_fk` FOREIGN KEY (`id_type_piece`) REFERENCES `exec_type_piece_evenement` (`id`);

--
-- Contraintes pour la table `exec_piece_facture`
--
ALTER TABLE `exec_piece_facture`
  ADD CONSTRAINT `exec_piece_facture_id_agent_crea_fk` FOREIGN KEY (`id_agent_crea`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_piece_facture_id_contrat_fk` FOREIGN KEY (`id_contrat`) REFERENCES `exec_contrat` (`id_contrat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_piece_facture_id_facture_fk` FOREIGN KEY (`id_facture`) REFERENCES `exec_facture` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `exec_prix`
--
ALTER TABLE `exec_prix`
  ADD CONSTRAINT `exec_prix_id_agent_crea_fk` FOREIGN KEY (`id_agent_crea`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_prix_id_agent_modif_fk` FOREIGN KEY (`id_agent_modif`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_prix_id_contrat_fk` FOREIGN KEY (`id_contrat`) REFERENCES `exec_contrat` (`id_contrat`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `exec_prix_avenant`
--
ALTER TABLE `exec_prix_avenant`
  ADD CONSTRAINT `exec_prix_avenant_id_avenant_fk` FOREIGN KEY (`id_avenant`) REFERENCES `exec_avenant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_prix_avenant_id_contrat_fk` FOREIGN KEY (`id_contrat`) REFERENCES `exec_contrat` (`id_contrat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_prix_avenant_id_prix_fk` FOREIGN KEY (`id_prix`) REFERENCES `exec_prix` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `exec_repartition`
--
ALTER TABLE `exec_repartition`
  ADD CONSTRAINT `exec_repartition_id_agent_crea_fk` FOREIGN KEY (`id_agent_crea`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_repartition_id_agent_modif_fk` FOREIGN KEY (`id_agent_modif`) REFERENCES `Agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_repartition_id_contractant_fk` FOREIGN KEY (`id_contractant`) REFERENCES `exec_contractant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_repartition_id_contrat_fk` FOREIGN KEY (`id_contrat`) REFERENCES `exec_contrat` (`id_contrat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_repartition_id_entreprise_crea_fk` FOREIGN KEY (`id_entreprise_crea`) REFERENCES `Entreprise` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_repartition_id_fature_fk` FOREIGN KEY (`id_facture`) REFERENCES `exec_facture` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `exec_repartition_id_prix_fk` FOREIGN KEY (`id_prix`) REFERENCES `exec_prix` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `exec_type_contractant`
--
ALTER TABLE `exec_type_contractant`
  ADD CONSTRAINT `exec_type_contractant_id_type_structure_fk` FOREIGN KEY (`id_type_structure`) REFERENCES `exec_type_structure` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `exec_type_evenement_organisme`
--
ALTER TABLE `exec_type_evenement_organisme`
  ADD CONSTRAINT `fk_evenement_organisme_relation_type` FOREIGN KEY (`id_type_evenement`) REFERENCES `exec_type_evenement` (`id`);

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type_facture` (`id`),
  ADD CONSTRAINT `facture_ibfk_2` FOREIGN KEY (`id_sous_type`) REFERENCES `sous_type_facture` (`id`),
  ADD CONSTRAINT `facture_ibfk_3` FOREIGN KEY (`id_inscrit`) REFERENCES `Inscrit` (`id`),
  ADD CONSTRAINT `facture_ibfk_4` FOREIGN KEY (`id_entreprise`) REFERENCES `Entreprise` (`id`);

--
-- Contraintes pour la table `facture_piece_jointe`
--
ALTER TABLE `facture_piece_jointe`
  ADD CONSTRAINT `facture_piece_jointe_ibfk_1` FOREIGN KEY (`id_facture`) REFERENCES `facture_piece_jointe` (`id`),
  ADD CONSTRAINT `facture_piece_jointe_ibfk_3` FOREIGN KEY (`id_piece_sous_type`) REFERENCES `piece_sous_type_facture` (`id`);

--
-- Contraintes pour la table `HabilitationAgent`
--
ALTER TABLE `HabilitationAgent`
  ADD CONSTRAINT `HabilitationAgent_ibfk_1` FOREIGN KEY (`id_agent`) REFERENCES `Agent` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Helios_piece_publicite`
--
ALTER TABLE `Helios_piece_publicite`
  ADD CONSTRAINT `Helios_piece_publicite_Consultation` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Helios_pv_consultation`
--
ALTER TABLE `Helios_pv_consultation`
  ADD CONSTRAINT `Helios_pv_consultation_Consultation` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Helios_rapport_prefet`
--
ALTER TABLE `Helios_rapport_prefet`
  ADD CONSTRAINT `Helios_rapport_prefet_Consultation` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Helios_tableau_ar`
--
ALTER TABLE `Helios_tableau_ar`
  ADD CONSTRAINT `Helios_tableau_ar_Consultation` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Helios_teletransmission`
--
ALTER TABLE `Helios_teletransmission`
  ADD CONSTRAINT `Helios_teletransmission_Consultation` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Helios_teletransmission_lot`
--
ALTER TABLE `Helios_teletransmission_lot`
  ADD CONSTRAINT `Helios_teletransmission_lot_Helios_teletransmission` FOREIGN KEY (`id_teletransmission`,`organisme`) REFERENCES `Helios_teletransmission` (`id`, `organisme`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Inscrit`
--
ALTER TABLE `Inscrit`
  ADD CONSTRAINT `Inscrit_ibfk_1` FOREIGN KEY (`entreprise_id`) REFERENCES `Entreprise` (`id`);

--
-- Contraintes pour la table `Inscrit_Sub`
--
ALTER TABLE `Inscrit_Sub`
  ADD CONSTRAINT `Inscrit_Sub_ibfk_2` FOREIGN KEY (`id_inscrit`) REFERENCES `Inscrit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `InterneConsultation`
--
ALTER TABLE `InterneConsultation`
  ADD CONSTRAINT `InterneConsultation_consultation` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `InterneConsultationSuiviSeul`
--
ALTER TABLE `InterneConsultationSuiviSeul`
  ADD CONSTRAINT `InterneConsultationSuiviSeul_consultation` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ItemCritereEvaluation`
--
ALTER TABLE `ItemCritereEvaluation`
  ADD CONSTRAINT `ItemCritereEvaluation_CritereEvaluation` FOREIGN KEY (`idCritereEvaluation`) REFERENCES `Criteres_Evaluation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ItemFormulaireConsultation`
--
ALTER TABLE `ItemFormulaireConsultation`
  ADD CONSTRAINT `ItemFormulaireConsultation_ConsultationFormulaire` FOREIGN KEY (`idFormulaireConsultation`) REFERENCES `ConsultationFormulaire` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `mandataire`
--
ALTER TABLE `mandataire`
  ADD CONSTRAINT `FK_Groupement` FOREIGN KEY (`id_groupement`) REFERENCES `groupement` (`id`);

--
-- Contraintes pour la table `Marche`
--
ALTER TABLE `Marche`
  ADD CONSTRAINT `Marche_ibfk_4` FOREIGN KEY (`natureMarche`) REFERENCES `CategorieConsultation` (`id`);

--
-- Contraintes pour la table `NewsletterPieceJointe`
--
ALTER TABLE `NewsletterPieceJointe`
  ADD CONSTRAINT `NewsletterPieceJointe_ibfk_1` FOREIGN KEY (`id_newsletter`) REFERENCES `Newsletter` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Offres`
--
ALTER TABLE `Offres`
  ADD CONSTRAINT `Offres_consultation` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Offre_papier`
--
ALTER TABLE `Offre_papier`
  ADD CONSTRAINT `Offre_papier_consultation` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Organisme_Service_Metier`
--
ALTER TABLE `Organisme_Service_Metier`
  ADD CONSTRAINT `Organisme_Service_Metier_ibfk_1` FOREIGN KEY (`organisme`) REFERENCES `Organisme` (`acronyme`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Panier_Entreprise`
--
ALTER TABLE `Panier_Entreprise`
  ADD CONSTRAINT `PanierEntrepriseIdEtp_EntrepriseId` FOREIGN KEY (`id_entreprise`) REFERENCES `Entreprise` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `PanierEntrepriseIdInscrit_InscritId` FOREIGN KEY (`id_inscrit`) REFERENCES `Inscrit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `PanierEntrepriseRef_ConsultationRef` FOREIGN KEY (`ref_consultation`) REFERENCES `consultation` (`reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Parametrage_Enchere`
--
ALTER TABLE `Parametrage_Enchere`
  ADD CONSTRAINT `relation_ParamEnch_organisme` FOREIGN KEY (`organisme`) REFERENCES `Organisme` (`acronyme`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Parametrage_Enchere_Reference`
--
ALTER TABLE `Parametrage_Enchere_Reference`
  ADD CONSTRAINT `relation_ParamEnchRef_ParamEnch_id` FOREIGN KEY (`idEnchere`) REFERENCES `Parametrage_Enchere` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relation_ParamEnchRef_ParamEnch_idOrg` FOREIGN KEY (`idEnchere`,`organisme`) REFERENCES `Parametrage_Enchere` (`id`, `organisme`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Parametrage_Enchere_Tranches_Bareme_NETC`
--
ALTER TABLE `Parametrage_Enchere_Tranches_Bareme_NETC`
  ADD CONSTRAINT `Relation_ParamEnchTranchesBaremeNETC_ParamEnch_Id` FOREIGN KEY (`idEnchere`) REFERENCES `Parametrage_Enchere` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Relation_ParamEnchTranchesBaremeNETC_ParamEnch_IdOrg` FOREIGN KEY (`idEnchere`,`organisme`) REFERENCES `Parametrage_Enchere` (`id`, `organisme`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Parametrage_Enchere_Tranche_Bareme_Reference`
--
ALTER TABLE `Parametrage_Enchere_Tranche_Bareme_Reference`
  ADD CONSTRAINT `Relation_ParamEnchTrancheBaremeRef_Id` FOREIGN KEY (`idReference`) REFERENCES `Parametrage_Enchere_Reference` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Relation_ParamEnchTrancheBaremeRef_ParamEnchRef_IdOrg` FOREIGN KEY (`idReference`,`organisme`) REFERENCES `Parametrage_Enchere_Reference` (`id`, `organisme`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `passation_marche_a_venir`
--
ALTER TABLE `passation_marche_a_venir`
  ADD CONSTRAINT `passation_marche_a_venir_fk` FOREIGN KEY (`id_passation_consultation`) REFERENCES `Passation_consultation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Pieces_DCE`
--
ALTER TABLE `Pieces_DCE`
  ADD CONSTRAINT `Pieces_DCE_ibfk_1` FOREIGN KEY (`ref_consultation`) REFERENCES `consultation` (`reference`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Pieces_DCE_ibfk_2` FOREIGN KEY (`organisme_consultation`) REFERENCES `consultation` (`organisme`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `piece_sous_type_facture`
--
ALTER TABLE `piece_sous_type_facture`
  ADD CONSTRAINT `piece_sous_type_facture_ibfk_1` FOREIGN KEY (`id_sous_type`) REFERENCES `sous_type_facture` (`id`);

--
-- Contraintes pour la table `ReferentielFormXml`
--
ALTER TABLE `ReferentielFormXml`
  ADD CONSTRAINT `ReferentielFormXml_ibfk_1` FOREIGN KEY (`id_type_xml`) REFERENCES `ReferentielTypeXml` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ReponseInscritItemFormulaireConsultationValues`
--
ALTER TABLE `ReponseInscritItemFormulaireConsultationValues`
  ADD CONSTRAINT `ReponseInscritItemFormulaireConsultationValues_ibfk_1` FOREIGN KEY (`idItemFormulaireConsultation`) REFERENCES `ItemFormulaireConsultation` (`id`);

--
-- Contraintes pour la table `resultat_analyse_historique`
--
ALTER TABLE `resultat_analyse_historique`
  ADD CONSTRAINT `ResultatAnalyseHistorique_Agent` FOREIGN KEY (`agent_id`) REFERENCES `Agent` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Retrait_Papier`
--
ALTER TABLE `Retrait_Papier`
  ADD CONSTRAINT `Retrait_Papier_consultation` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `RG`
--
ALTER TABLE `RG`
  ADD CONSTRAINT `RG_consultation` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `RPA`
--
ALTER TABLE `RPA`
  ADD CONSTRAINT `RPA_ORGANISME_ORG` FOREIGN KEY (`acronymeOrg`) REFERENCES `Organisme` (`acronyme`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `sous_type_facture`
--
ALTER TABLE `sous_type_facture`
  ADD CONSTRAINT `sous_type_facture_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type_facture` (`id`);

--
-- Contraintes pour la table `Support_Publication`
--
ALTER TABLE `Support_Publication`
  ADD CONSTRAINT `SupportPublication_consultation` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Telechargement`
--
ALTER TABLE `Telechargement`
  ADD CONSTRAINT `Telechargement_consultation` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `TelechargementAnonyme`
--
ALTER TABLE `TelechargementAnonyme`
  ADD CONSTRAINT `TelechargementAnonyme_consultation` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `TelechargementAnonyme_ibfk_1` FOREIGN KEY (`consultation_ref`) REFERENCES `consultation` (`reference`);

--
-- Contraintes pour la table `t_calendrier`
--
ALTER TABLE `t_calendrier`
  ADD CONSTRAINT `T_CALENDRIER_ID_CONSULTATION_FK` FOREIGN KEY (`ORGANISME`,`REFERENCE`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `t_calendrier_etape`
--
ALTER TABLE `t_calendrier_etape`
  ADD CONSTRAINT `t_calendrier_etape_ibfk_1` FOREIGN KEY (`ID_CALENDRIER`) REFERENCES `t_calendrier` (`ID_CALENDRIER`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `t_calendrier_etape_referentiel`
--
ALTER TABLE `t_calendrier_etape_referentiel`
  ADD CONSTRAINT `T_CALENDRIER_ETAPE_REFERENTIEL_ID_PROCEDURE` FOREIGN KEY (`ID_TYPE_PROCEDURE`,`ORGANISME`) REFERENCES `Type_Procedure_Organisme` (`id_type_procedure`, `organisme`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `t_calendrier_transition`
--
ALTER TABLE `t_calendrier_transition`
  ADD CONSTRAINT `t_calendrier_transition_ibfk_1` FOREIGN KEY (`ID_ETAPE_SOURCE`) REFERENCES `t_calendrier_etape` (`ID_CALENDRIER_ETAPE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_calendrier_transition_ibfk_2` FOREIGN KEY (`ID_ETAPE_CIBLE`) REFERENCES `t_calendrier_etape` (`ID_CALENDRIER_ETAPE`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `t_CAO_Commission_Agent`
--
ALTER TABLE `t_CAO_Commission_Agent`
  ADD CONSTRAINT `t_CAO_Commission_Agent_id_agent_fk` FOREIGN KEY (`id_agent`) REFERENCES `Agent` (`id`),
  ADD CONSTRAINT `t_CAO_Commission_Agent_id_commission_fk` FOREIGN KEY (`id_commission`) REFERENCES `t_CAO_Commission` (`id_commission`);

--
-- Contraintes pour la table `t_CAO_Commission_Consultation`
--
ALTER TABLE `t_CAO_Commission_Consultation`
  ADD CONSTRAINT `t_CAO_Commission_Consultation_id_commission_fk` FOREIGN KEY (`id_commission`) REFERENCES `t_CAO_Commission` (`id_commission`),
  ADD CONSTRAINT `t_CAO_Commission_Consultation_organisme_fk` FOREIGN KEY (`organisme`) REFERENCES `Organisme` (`acronyme`);

--
-- Contraintes pour la table `t_CAO_Commission_Intervenant_Externe`
--
ALTER TABLE `t_CAO_Commission_Intervenant_Externe`
  ADD CONSTRAINT `t_CAO_Commission_Intervenant_Externe_id_commission_fk` FOREIGN KEY (`id_commission`) REFERENCES `t_CAO_Commission` (`id_commission`),
  ADD CONSTRAINT `t_CAO_Commission_Intervenant_Externe_id_intervenant_externe_fk` FOREIGN KEY (`id_intervenant_externe`) REFERENCES `t_CAO_Intervenant_Externe` (`id_intervenant_externe`);

--
-- Contraintes pour la table `t_CAO_Ordre_De_Passage`
--
ALTER TABLE `t_CAO_Ordre_De_Passage`
  ADD CONSTRAINT `t_CAO_Ordre_De_Passage_date_seance_fk` FOREIGN KEY (`date_seance`) REFERENCES `t_CAO_Seance` (`date`) ON UPDATE CASCADE,
  ADD CONSTRAINT `t_CAO_Ordre_De_Passage_id_commission_consultation_fk` FOREIGN KEY (`id_commission_consultation`) REFERENCES `t_CAO_Commission_Consultation` (`id_commission_consultation`),
  ADD CONSTRAINT `t_CAO_Ordre_De_Passage_id_commission_fk` FOREIGN KEY (`id_commission`) REFERENCES `t_CAO_Commission` (`id_commission`),
  ADD CONSTRAINT `t_CAO_Ordre_De_Passage_id_seance_fk` FOREIGN KEY (`id_seance`) REFERENCES `t_CAO_Seance` (`id_seance`),
  ADD CONSTRAINT `t_CAO_Ordre_De_Passage_organisme_fk` FOREIGN KEY (`organisme`) REFERENCES `Organisme` (`acronyme`);

--
-- Contraintes pour la table `t_CAO_Seance`
--
ALTER TABLE `t_CAO_Seance`
  ADD CONSTRAINT `t_CAO_Seance_id_commission_fk` FOREIGN KEY (`id_commission`) REFERENCES `t_CAO_Commission` (`id_commission`);

--
-- Contraintes pour la table `t_CAO_Seance_Agent`
--
ALTER TABLE `t_CAO_Seance_Agent`
  ADD CONSTRAINT `t_CAO_Seance_Agent_id_agent_fk` FOREIGN KEY (`id_agent`) REFERENCES `Agent` (`id`),
  ADD CONSTRAINT `t_CAO_Seance_Agent_id_seance_fk` FOREIGN KEY (`id_seance`) REFERENCES `t_CAO_Seance` (`id_seance`);

--
-- Contraintes pour la table `t_CAO_Seance_Intervenant_Externe`
--
ALTER TABLE `t_CAO_Seance_Intervenant_Externe`
  ADD CONSTRAINT `t_CAO_Seance_Intervenant_Externe_id_intervenant_externe_fk` FOREIGN KEY (`id_intervenant_externe`) REFERENCES `t_CAO_Intervenant_Externe` (`id_intervenant_externe`),
  ADD CONSTRAINT `t_CAO_Seance_Intervenant_Externe_id_seance_fk` FOREIGN KEY (`id_seance`) REFERENCES `t_CAO_Seance` (`id_seance`);

--
-- Contraintes pour la table `t_CAO_Seance_Invite`
--
ALTER TABLE `t_CAO_Seance_Invite`
  ADD CONSTRAINT `t_CAO_Seance_Invite_id_agent_fk` FOREIGN KEY (`id_agent`) REFERENCES `Agent` (`id`),
  ADD CONSTRAINT `t_CAO_Seance_Invite_id_intervenant_externe_fk` FOREIGN KEY (`id_intervenant_externe`) REFERENCES `t_CAO_Intervenant_Externe` (`id_intervenant_externe`),
  ADD CONSTRAINT `t_CAO_Seance_Invite_id_ordre_de_passage_fk` FOREIGN KEY (`id_ordre_de_passage`) REFERENCES `t_CAO_Ordre_De_Passage` (`id_ordre_de_passage`),
  ADD CONSTRAINT `t_CAO_Seance_Invite_organisme_fk` FOREIGN KEY (`organisme`) REFERENCES `Organisme` (`acronyme`);

--
-- Contraintes pour la table `t_compte_bancaire`
--
ALTER TABLE `t_compte_bancaire`
  ADD CONSTRAINT `t_compte_bancaire_ibfk_1` FOREIGN KEY (`ID_BANQUE`) REFERENCES `t_banque` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `t_dossier_formulaire`
--
ALTER TABLE `t_dossier_formulaire`
  ADD CONSTRAINT `t_reponse_elec_form_t_dossier_form_id_reponse_elec_form_fk` FOREIGN KEY (`id_reponse_elec_formulaire`) REFERENCES `t_reponse_elec_formulaire` (`id_reponse_elec_formulaire`);

--
-- Contraintes pour la table `t_edition_formulaire`
--
ALTER TABLE `t_edition_formulaire`
  ADD CONSTRAINT `t_dossier_form_t_edition_form_id_dossier_form_fk` FOREIGN KEY (`id_dossier_formulaire`) REFERENCES `t_dossier_formulaire` (`id_dossier_formulaire`);

--
-- Contraintes pour la table `t_lot_technique`
--
ALTER TABLE `t_lot_technique`
  ADD CONSTRAINT `T_LOT_TECHNIQUE_ID_DONNEE_COMPLEMENTAIRE_FK` FOREIGN KEY (`id_donnee_complementaire`) REFERENCES `t_donnee_complementaire` (`id_donnee_complementaire`);

--
-- Contraintes pour la table `t_lot_technique_has_tranche`
--
ALTER TABLE `t_lot_technique_has_tranche`
  ADD CONSTRAINT `T_LOT_TECHNIQUE_HAS_TRANCHE_ID_LOT_TECHNIQUE_FK` FOREIGN KEY (`id_lot_technique`) REFERENCES `t_lot_technique` (`id_lot_technique`),
  ADD CONSTRAINT `T_LOT_TECHNIQUE_HAS_TRANCHE_ID_TRANCHE_FK` FOREIGN KEY (`id_tranche`) REFERENCES `t_tranche` (`id_tranche`);

--
-- Contraintes pour la table `t_param_dossier_formulaire`
--
ALTER TABLE `t_param_dossier_formulaire`
  ADD CONSTRAINT `consultation_t_param_dossier_form_consultation_ref_fk` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`);

--
-- Contraintes pour la table `t_reponse_elec_formulaire`
--
ALTER TABLE `t_reponse_elec_formulaire`
  ADD CONSTRAINT `consultation_t_reponse_elec_form_consultation_ref_fk` FOREIGN KEY (`organisme`,`consultation_ref`) REFERENCES `consultation` (`organisme`, `reference`),
  ADD CONSTRAINT `Entreprise_t_reponse_elec_form_id_entreprise_fk` FOREIGN KEY (`id_entreprise`) REFERENCES `Entreprise` (`id`),
  ADD CONSTRAINT `Inscrit_t_reponse_elec_form_id_inscrit_fk` FOREIGN KEY (`id_inscrit`) REFERENCES `Inscrit` (`id`);

--
-- Contraintes pour la table `t_tranche`
--
ALTER TABLE `t_tranche`
  ADD CONSTRAINT `T_TRANCHE_DONNEE_COMPLEMENTAIRE_FK` FOREIGN KEY (`id_donnee_complementaire`) REFERENCES `t_donnee_complementaire` (`id_donnee_complementaire`),
  ADD CONSTRAINT `T_TRANCHE_FORME_PRIX_FK` FOREIGN KEY (`id_forme_prix`) REFERENCES `t_forme_prix` (`id_forme_prix`);

--
-- Contraintes pour la table `visite_lieux`
--
ALTER TABLE `visite_lieux`
  ADD CONSTRAINT `visite_lieux_consultation` FOREIGN KEY (`organisme`,`reference`) REFERENCES `consultation` (`organisme`, `reference`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
