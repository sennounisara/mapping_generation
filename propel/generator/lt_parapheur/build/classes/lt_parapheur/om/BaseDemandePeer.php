<?php


/**
 * Base static class for performing query and update operations on the 'demande' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseDemandePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'lt_parapheur';

    /** the table name for this class */
    const TABLE_NAME = 'demande';

    /** the related Propel class for this table */
    const OM_CLASS = 'Demande';

    /** the related TableMap class for this table */
    const TM_CLASS = 'DemandeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 127;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 127;

    /** the column name for the ID field */
    const ID = 'demande.ID';

    /** the column name for the ID_AGENT field */
    const ID_AGENT = 'demande.ID_AGENT';

    /** the column name for the ID_COMMUNE field */
    const ID_COMMUNE = 'demande.ID_COMMUNE';

    /** the column name for the ID_SERVICE field */
    const ID_SERVICE = 'demande.ID_SERVICE';

    /** the column name for the ID_ENTITE field */
    const ID_ENTITE = 'demande.ID_ENTITE';

    /** the column name for the ID_ORGANISME field */
    const ID_ORGANISME = 'demande.ID_ORGANISME';

    /** the column name for the NUMERO_DEMANDE field */
    const NUMERO_DEMANDE = 'demande.NUMERO_DEMANDE';

    /** the column name for the DETAIL_DEMANDE field */
    const DETAIL_DEMANDE = 'demande.DETAIL_DEMANDE';

    /** the column name for the STATUT_DEMANDE field */
    const STATUT_DEMANDE = 'demande.STATUT_DEMANDE';

    /** the column name for the LATITUDE_DEMANDE field */
    const LATITUDE_DEMANDE = 'demande.LATITUDE_DEMANDE';

    /** the column name for the LONGITUDE_DEMANDE field */
    const LONGITUDE_DEMANDE = 'demande.LONGITUDE_DEMANDE';

    /** the column name for the ADRESSE_DEMANDE field */
    const ADRESSE_DEMANDE = 'demande.ADRESSE_DEMANDE';

    /** the column name for the ID_PIECE_JOINTE_DEMANDE field */
    const ID_PIECE_JOINTE_DEMANDE = 'demande.ID_PIECE_JOINTE_DEMANDE';

    /** the column name for the NOM_PIECE_JOINTE_DEMANDE field */
    const NOM_PIECE_JOINTE_DEMANDE = 'demande.NOM_PIECE_JOINTE_DEMANDE';

    /** the column name for the REVISION field */
    const REVISION = 'demande.REVISION';

    /** the column name for the CONTENU_PIECE_JOINTE field */
    const CONTENU_PIECE_JOINTE = 'demande.CONTENU_PIECE_JOINTE';

    /** the column name for the NOM_CITOYEN field */
    const NOM_CITOYEN = 'demande.NOM_CITOYEN';

    /** the column name for the PRENOM_CITOYEN field */
    const PRENOM_CITOYEN = 'demande.PRENOM_CITOYEN';

    /** the column name for the EMAIL_CITOYEN field */
    const EMAIL_CITOYEN = 'demande.EMAIL_CITOYEN';

    /** the column name for the TEL_CITOYEN field */
    const TEL_CITOYEN = 'demande.TEL_CITOYEN';

    /** the column name for the TELEPHONE_PORTABLE field */
    const TELEPHONE_PORTABLE = 'demande.TELEPHONE_PORTABLE';

    /** the column name for the ADRESSE_CITOYEN_1 field */
    const ADRESSE_CITOYEN_1 = 'demande.ADRESSE_CITOYEN_1';

    /** the column name for the ADRESSE_CITOYEN_2 field */
    const ADRESSE_CITOYEN_2 = 'demande.ADRESSE_CITOYEN_2';

    /** the column name for the CODE_POSTAL_CITOYEN field */
    const CODE_POSTAL_CITOYEN = 'demande.CODE_POSTAL_CITOYEN';

    /** the column name for the LOCALITE_CITOYEN field */
    const LOCALITE_CITOYEN = 'demande.LOCALITE_CITOYEN';

    /** the column name for the IDENTIFIANT_APP_MOBILE_CITOYEN field */
    const IDENTIFIANT_APP_MOBILE_CITOYEN = 'demande.IDENTIFIANT_APP_MOBILE_CITOYEN';

    /** the column name for the TYPE_DEVICE field */
    const TYPE_DEVICE = 'demande.TYPE_DEVICE';

    /** the column name for the DATE_DEPOT_DEMANDE field */
    const DATE_DEPOT_DEMANDE = 'demande.DATE_DEPOT_DEMANDE';

    /** the column name for the DATE_TRAITEMENT_DEMANDE field */
    const DATE_TRAITEMENT_DEMANDE = 'demande.DATE_TRAITEMENT_DEMANDE';

    /** the column name for the DATE_CLOTURE_DEMANDE field */
    const DATE_CLOTURE_DEMANDE = 'demande.DATE_CLOTURE_DEMANDE';

    /** the column name for the DATE_REOUVERTURE_DEMANDE field */
    const DATE_REOUVERTURE_DEMANDE = 'demande.DATE_REOUVERTURE_DEMANDE';

    /** the column name for the DUREE_AVANT_TRAITEMENT field */
    const DUREE_AVANT_TRAITEMENT = 'demande.DUREE_AVANT_TRAITEMENT';

    /** the column name for the DUREE_TRAITEMENT field */
    const DUREE_TRAITEMENT = 'demande.DUREE_TRAITEMENT';

    /** the column name for the MOTIF_REOUVERTIR field */
    const MOTIF_REOUVERTIR = 'demande.MOTIF_REOUVERTIR';

    /** the column name for the CLOTURER_PAR field */
    const CLOTURER_PAR = 'demande.CLOTURER_PAR';

    /** the column name for the PAYS field */
    const PAYS = 'demande.PAYS';

    /** the column name for the NOM_AGENT_FR field */
    const NOM_AGENT_FR = 'demande.NOM_AGENT_FR';

    /** the column name for the NOM_AGENT_AR field */
    const NOM_AGENT_AR = 'demande.NOM_AGENT_AR';

    /** the column name for the ID_THEME_CITOYEN field */
    const ID_THEME_CITOYEN = 'demande.ID_THEME_CITOYEN';

    /** the column name for the ID_THEME_EN_COURS field */
    const ID_THEME_EN_COURS = 'demande.ID_THEME_EN_COURS';

    /** the column name for the DATE_REPONSE field */
    const DATE_REPONSE = 'demande.DATE_REPONSE';

    /** the column name for the DATE_STATUT field */
    const DATE_STATUT = 'demande.DATE_STATUT';

    /** the column name for the ID_REGION_AFFECTATION field */
    const ID_REGION_AFFECTATION = 'demande.ID_REGION_AFFECTATION';

    /** the column name for the ID_PROVINCE_AFFECTATION field */
    const ID_PROVINCE_AFFECTATION = 'demande.ID_PROVINCE_AFFECTATION';

    /** the column name for the ID_COMMUNE_AFFECTATION field */
    const ID_COMMUNE_AFFECTATION = 'demande.ID_COMMUNE_AFFECTATION';

    /** the column name for the ORGANISATION field */
    const ORGANISATION = 'demande.ORGANISATION';

    /** the column name for the ID_ORIGINE field */
    const ID_ORIGINE = 'demande.ID_ORIGINE';

    /** the column name for the ID_AGENT_CREATEUR field */
    const ID_AGENT_CREATEUR = 'demande.ID_AGENT_CREATEUR';

    /** the column name for the ID_ENTITE_CREATRICE field */
    const ID_ENTITE_CREATRICE = 'demande.ID_ENTITE_CREATRICE';

    /** the column name for the SUPPRIME field */
    const SUPPRIME = 'demande.SUPPRIME';

    /** the column name for the SOURCE field */
    const SOURCE = 'demande.SOURCE';

    /** the column name for the DETAIL_SOURCE field */
    const DETAIL_SOURCE = 'demande.DETAIL_SOURCE';

    /** the column name for the FORMAT field */
    const FORMAT = 'demande.FORMAT';

    /** the column name for the REFERENCE_INTERNE field */
    const REFERENCE_INTERNE = 'demande.REFERENCE_INTERNE';

    /** the column name for the ID_REGION field */
    const ID_REGION = 'demande.ID_REGION';

    /** the column name for the ID_PROVINCE field */
    const ID_PROVINCE = 'demande.ID_PROVINCE';

    /** the column name for the ID_PAYS field */
    const ID_PAYS = 'demande.ID_PAYS';

    /** the column name for the DATE_CREATION_DEMANDE field */
    const DATE_CREATION_DEMANDE = 'demande.DATE_CREATION_DEMANDE';

    /** the column name for the ID_ENTITE_CONCERNEE field */
    const ID_ENTITE_CONCERNEE = 'demande.ID_ENTITE_CONCERNEE';

    /** the column name for the NOM_ENTITE_CONCERNEE_FR field */
    const NOM_ENTITE_CONCERNEE_FR = 'demande.NOM_ENTITE_CONCERNEE_FR';

    /** the column name for the NOM_ENTITE_CONCERNEE_AR field */
    const NOM_ENTITE_CONCERNEE_AR = 'demande.NOM_ENTITE_CONCERNEE_AR';

    /** the column name for the ID_ENTITE_CONCERNEE_CITOYEN field */
    const ID_ENTITE_CONCERNEE_CITOYEN = 'demande.ID_ENTITE_CONCERNEE_CITOYEN';

    /** the column name for the NOM_ENTITE_CONCERNEE_CITOYEN_FR field */
    const NOM_ENTITE_CONCERNEE_CITOYEN_FR = 'demande.NOM_ENTITE_CONCERNEE_CITOYEN_FR';

    /** the column name for the NOM_ENTITE_CONCERNEE_CITOYEN_AR field */
    const NOM_ENTITE_CONCERNEE_CITOYEN_AR = 'demande.NOM_ENTITE_CONCERNEE_CITOYEN_AR';

    /** the column name for the TYPE_REQUERANT field */
    const TYPE_REQUERANT = 'demande.TYPE_REQUERANT';

    /** the column name for the CANAL_DEPOT field */
    const CANAL_DEPOT = 'demande.CANAL_DEPOT';

    /** the column name for the ID_EXTERNE field */
    const ID_EXTERNE = 'demande.ID_EXTERNE';

    /** the column name for the DATE_ENVOI_REPONSE field */
    const DATE_ENVOI_REPONSE = 'demande.DATE_ENVOI_REPONSE';

    /** the column name for the ETAT_ENVOI_REPONSE field */
    const ETAT_ENVOI_REPONSE = 'demande.ETAT_ENVOI_REPONSE';

    /** the column name for the ETAT_ENVOI field */
    const ETAT_ENVOI = 'demande.ETAT_ENVOI';

    /** the column name for the DATE_ENVOI field */
    const DATE_ENVOI = 'demande.DATE_ENVOI';

    /** the column name for the NUMERO_EXTERNE field */
    const NUMERO_EXTERNE = 'demande.NUMERO_EXTERNE';

    /** the column name for the OBJET_DEMANDE field */
    const OBJET_DEMANDE = 'demande.OBJET_DEMANDE';

    /** the column name for the TAG_INTERFACE field */
    const TAG_INTERFACE = 'demande.TAG_INTERFACE';

    /** the column name for the CHAMP_SUPP_1 field */
    const CHAMP_SUPP_1 = 'demande.CHAMP_SUPP_1';

    /** the column name for the CHAMP_SUPP_2 field */
    const CHAMP_SUPP_2 = 'demande.CHAMP_SUPP_2';

    /** the column name for the CHAMP_SUPP_3 field */
    const CHAMP_SUPP_3 = 'demande.CHAMP_SUPP_3';

    /** the column name for the CHAMP_SUPP_4 field */
    const CHAMP_SUPP_4 = 'demande.CHAMP_SUPP_4';

    /** the column name for the CHAMP_SUPP_5 field */
    const CHAMP_SUPP_5 = 'demande.CHAMP_SUPP_5';

    /** the column name for the TYPE_DEMANDE field */
    const TYPE_DEMANDE = 'demande.TYPE_DEMANDE';

    /** the column name for the ID_AGENT_DESTINATAIRE field */
    const ID_AGENT_DESTINATAIRE = 'demande.ID_AGENT_DESTINATAIRE';

    /** the column name for the NOM_AGENT_DESTINATAIRE_FR field */
    const NOM_AGENT_DESTINATAIRE_FR = 'demande.NOM_AGENT_DESTINATAIRE_FR';

    /** the column name for the PRENOM_AGENT_DESTINATAIRE_FR field */
    const PRENOM_AGENT_DESTINATAIRE_FR = 'demande.PRENOM_AGENT_DESTINATAIRE_FR';

    /** the column name for the NOM_AGENT_DESTINATAIRE_AR field */
    const NOM_AGENT_DESTINATAIRE_AR = 'demande.NOM_AGENT_DESTINATAIRE_AR';

    /** the column name for the PRENOM_AGENT_DESTINATAIRE_AR field */
    const PRENOM_AGENT_DESTINATAIRE_AR = 'demande.PRENOM_AGENT_DESTINATAIRE_AR';

    /** the column name for the ID_AGENT_SIGNATAIRE field */
    const ID_AGENT_SIGNATAIRE = 'demande.ID_AGENT_SIGNATAIRE';

    /** the column name for the NOM_AGENT_SIGNATAIRE_FR field */
    const NOM_AGENT_SIGNATAIRE_FR = 'demande.NOM_AGENT_SIGNATAIRE_FR';

    /** the column name for the NOM_AGENT_SIGNATAIRE_AR field */
    const NOM_AGENT_SIGNATAIRE_AR = 'demande.NOM_AGENT_SIGNATAIRE_AR';

    /** the column name for the PRENOM_AGENT_SIGNATAIRE_AR field */
    const PRENOM_AGENT_SIGNATAIRE_AR = 'demande.PRENOM_AGENT_SIGNATAIRE_AR';

    /** the column name for the PRENOM_AGENT_SIGNATAIRE_FR field */
    const PRENOM_AGENT_SIGNATAIRE_FR = 'demande.PRENOM_AGENT_SIGNATAIRE_FR';

    /** the column name for the ID_AGENT_EMETTEUR field */
    const ID_AGENT_EMETTEUR = 'demande.ID_AGENT_EMETTEUR';

    /** the column name for the NOM_AGENT_EMETTEUR_FR field */
    const NOM_AGENT_EMETTEUR_FR = 'demande.NOM_AGENT_EMETTEUR_FR';

    /** the column name for the NOM_AGENT_EMETTEUR_AR field */
    const NOM_AGENT_EMETTEUR_AR = 'demande.NOM_AGENT_EMETTEUR_AR';

    /** the column name for the PRENOM_AGENT_EMETTEUR_AR field */
    const PRENOM_AGENT_EMETTEUR_AR = 'demande.PRENOM_AGENT_EMETTEUR_AR';

    /** the column name for the PRENOM_AGENT_EMETTEUR_FR field */
    const PRENOM_AGENT_EMETTEUR_FR = 'demande.PRENOM_AGENT_EMETTEUR_FR';

    /** the column name for the REPONSE_OBLIGATOIRE field */
    const REPONSE_OBLIGATOIRE = 'demande.REPONSE_OBLIGATOIRE';

    /** the column name for the CODE_DEMANDE field */
    const CODE_DEMANDE = 'demande.CODE_DEMANDE';

    /** the column name for the CODE_PROVISOIRE field */
    const CODE_PROVISOIRE = 'demande.CODE_PROVISOIRE';

    /** the column name for the TAG_GATEWAY field */
    const TAG_GATEWAY = 'demande.TAG_GATEWAY';

    /** the column name for the ID_UTILISATEUR_GATEWAY field */
    const ID_UTILISATEUR_GATEWAY = 'demande.ID_UTILISATEUR_GATEWAY';

    /** the column name for the CHAMP_SUPP_THEME_1 field */
    const CHAMP_SUPP_THEME_1 = 'demande.CHAMP_SUPP_THEME_1';

    /** the column name for the CHAMP_SUPP_THEME_2 field */
    const CHAMP_SUPP_THEME_2 = 'demande.CHAMP_SUPP_THEME_2';

    /** the column name for the CHAMP_SUPP_THEME_3 field */
    const CHAMP_SUPP_THEME_3 = 'demande.CHAMP_SUPP_THEME_3';

    /** the column name for the CHAMP_SUPP_THEME_4 field */
    const CHAMP_SUPP_THEME_4 = 'demande.CHAMP_SUPP_THEME_4';

    /** the column name for the CHAMP_SUPP_THEME_5 field */
    const CHAMP_SUPP_THEME_5 = 'demande.CHAMP_SUPP_THEME_5';

    /** the column name for the ID_TYPE_THEME field */
    const ID_TYPE_THEME = 'demande.ID_TYPE_THEME';

    /** the column name for the ID_ETAPE_EN_COURS field */
    const ID_ETAPE_EN_COURS = 'demande.ID_ETAPE_EN_COURS';

    /** the column name for the NUMERO_ETAPE_ENCOURS field */
    const NUMERO_ETAPE_ENCOURS = 'demande.NUMERO_ETAPE_ENCOURS';

    /** the column name for the NOMBRE_ETAPES field */
    const NOMBRE_ETAPES = 'demande.NOMBRE_ETAPES';

    /** the column name for the DERNIER_MESSAGE field */
    const DERNIER_MESSAGE = 'demande.DERNIER_MESSAGE';

    /** the column name for the LIBELLE_ETAPE_ENCOURS field */
    const LIBELLE_ETAPE_ENCOURS = 'demande.LIBELLE_ETAPE_ENCOURS';

    /** the column name for the DERNIER_ACTEUR field */
    const DERNIER_ACTEUR = 'demande.DERNIER_ACTEUR';

    /** the column name for the DATE_REPONSE_ETAPE field */
    const DATE_REPONSE_ETAPE = 'demande.DATE_REPONSE_ETAPE';

    /** the column name for the ID_ENTITE_RELANCE field */
    const ID_ENTITE_RELANCE = 'demande.ID_ENTITE_RELANCE';

    /** the column name for the ID_AGENT_RELANCE field */
    const ID_AGENT_RELANCE = 'demande.ID_AGENT_RELANCE';

    /** the column name for the IMPORTANT field */
    const IMPORTANT = 'demande.IMPORTANT';

    /** the column name for the DATE_ECHEANCE_REPONSE_PROCHE field */
    const DATE_ECHEANCE_REPONSE_PROCHE = 'demande.DATE_ECHEANCE_REPONSE_PROCHE';

    /** the column name for the URL_EXTERNE field */
    const URL_EXTERNE = 'demande.URL_EXTERNE';

    /** the column name for the CLOTURE_AUTOMATIQUE field */
    const CLOTURE_AUTOMATIQUE = 'demande.CLOTURE_AUTOMATIQUE';

    /** the column name for the DELAI_TRAITEMENT_OUVRABLE field */
    const DELAI_TRAITEMENT_OUVRABLE = 'demande.DELAI_TRAITEMENT_OUVRABLE';

    /** the column name for the ACTEUR_EXTERNE field */
    const ACTEUR_EXTERNE = 'demande.ACTEUR_EXTERNE';

    /** the column name for the DELAI_TRAITEMENT field */
    const DELAI_TRAITEMENT = 'demande.DELAI_TRAITEMENT';

    /** the column name for the OBJET_MODIFIE field */
    const OBJET_MODIFIE = 'demande.OBJET_MODIFIE';

    /** the column name for the CONFIDENTIEL field */
    const CONFIDENTIEL = 'demande.CONFIDENTIEL';

    /** the column name for the DELAI_COMPLEMENT field */
    const DELAI_COMPLEMENT = 'demande.DELAI_COMPLEMENT';

    /** the column name for the ERREURS_DETECTES field */
    const ERREURS_DETECTES = 'demande.ERREURS_DETECTES';

    /** the column name for the ID_DEMANDE_ORIGINE field */
    const ID_DEMANDE_ORIGINE = 'demande.ID_DEMANDE_ORIGINE';

    /** The enumerated values for the TYPE_DEVICE field */
    const TYPE_DEVICE_0 = '0';
    const TYPE_DEVICE_1 = '1';

    /** The enumerated values for the CLOTURER_PAR field */
    const CLOTURER_PAR_0 = '0';
    const CLOTURER_PAR_1 = '1';
    const CLOTURER_PAR_2 = '2';

    /** The enumerated values for the SUPPRIME field */
    const SUPPRIME_0 = '0';
    const SUPPRIME_1 = '1';

    /** The enumerated values for the ETAT_ENVOI_REPONSE field */
    const ETAT_ENVOI_REPONSE_0 = '0';
    const ETAT_ENVOI_REPONSE_1 = '1';
    const ETAT_ENVOI_REPONSE__1 = '-1';
    const ETAT_ENVOI_REPONSE_2 = '2';

    /** The enumerated values for the ETAT_ENVOI field */
    const ETAT_ENVOI_0 = '0';
    const ETAT_ENVOI_1 = '1';

    /** The enumerated values for the REPONSE_OBLIGATOIRE field */
    const REPONSE_OBLIGATOIRE_0 = '0';
    const REPONSE_OBLIGATOIRE_1 = '1';

    /** The enumerated values for the TAG_GATEWAY field */
    const TAG_GATEWAY_0 = '0';
    const TAG_GATEWAY_1 = '1';

    /** The enumerated values for the IMPORTANT field */
    const IMPORTANT_0 = '0';
    const IMPORTANT_1 = '1';

    /** The enumerated values for the CLOTURE_AUTOMATIQUE field */
    const CLOTURE_AUTOMATIQUE_0 = '0';
    const CLOTURE_AUTOMATIQUE_1 = '1';

    /** The enumerated values for the CONFIDENTIEL field */
    const CONFIDENTIEL_0 = '0';
    const CONFIDENTIEL_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Demande objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Demande[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. DemandePeer::$fieldNames[DemandePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdAgent', 'IdCommune', 'IdService', 'IdEntite', 'IdOrganisme', 'NumeroDemande', 'DetailDemande', 'StatutDemande', 'LatitudeDemande', 'LongitudeDemande', 'AdresseDemande', 'IdPieceJointeDemande', 'NomPieceJointeDemande', 'Revision', 'ContenuPieceJointe', 'NomCitoyen', 'PrenomCitoyen', 'EmailCitoyen', 'TelCitoyen', 'TelephonePortable', 'AdresseCitoyen1', 'AdresseCitoyen2', 'CodePostalCitoyen', 'LocaliteCitoyen', 'IdentifiantAppMobileCitoyen', 'TypeDevice', 'DateDepotDemande', 'DateTraitementDemande', 'DateClotureDemande', 'DateReouvertureDemande', 'DureeAvantTraitement', 'DureeTraitement', 'MotifReouvertir', 'CloturerPar', 'Pays', 'NomAgentFr', 'NomAgentAr', 'IdThemeCitoyen', 'IdThemeEnCours', 'DateReponse', 'DateStatut', 'IdRegionAffectation', 'IdProvinceAffectation', 'IdCommuneAffectation', 'Organisation', 'IdOrigine', 'IdAgentCreateur', 'IdEntiteCreatrice', 'Supprime', 'Source', 'DetailSource', 'Format', 'ReferenceInterne', 'IdRegion', 'IdProvince', 'IdPays', 'DateCreationDemande', 'IdEntiteConcernee', 'NomEntiteConcerneeFr', 'NomEntiteConcerneeAr', 'IdEntiteConcerneeCitoyen', 'NomEntiteConcerneeCitoyenFr', 'NomEntiteConcerneeCitoyenAr', 'TypeRequerant', 'CanalDepot', 'IdExterne', 'DateEnvoiReponse', 'EtatEnvoiReponse', 'EtatEnvoi', 'DateEnvoi', 'NumeroExterne', 'ObjetDemande', 'TagInterface', 'ChampSupp1', 'ChampSupp2', 'ChampSupp3', 'ChampSupp4', 'ChampSupp5', 'TypeDemande', 'IdAgentDestinataire', 'NomAgentDestinataireFr', 'PrenomAgentDestinataireFr', 'NomAgentDestinataireAr', 'PrenomAgentDestinataireAr', 'IdAgentSignataire', 'NomAgentSignataireFr', 'NomAgentSignataireAr', 'PrenomAgentSignataireAr', 'PrenomAgentSignataireFr', 'IdAgentEmetteur', 'NomAgentEmetteurFr', 'NomAgentEmetteurAr', 'PrenomAgentEmetteurAr', 'PrenomAgentEmetteurFr', 'ReponseObligatoire', 'CodeDemande', 'CodeProvisoire', 'TagGateway', 'IdUtilisateurGateway', 'ChampSuppTheme1', 'ChampSuppTheme2', 'ChampSuppTheme3', 'ChampSuppTheme4', 'ChampSuppTheme5', 'IdTypeTheme', 'IdEtapeEnCours', 'NumeroEtapeEncours', 'NombreEtapes', 'DernierMessage', 'LibelleEtapeEncours', 'DernierActeur', 'DateReponseEtape', 'IdEntiteRelance', 'IdAgentRelance', 'Important', 'DateEcheanceReponseProche', 'UrlExterne', 'ClotureAutomatique', 'DelaiTraitementOuvrable', 'ActeurExterne', 'DelaiTraitement', 'ObjetModifie', 'Confidentiel', 'DelaiComplement', 'ErreursDetectes', 'IdDemandeOrigine', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idAgent', 'idCommune', 'idService', 'idEntite', 'idOrganisme', 'numeroDemande', 'detailDemande', 'statutDemande', 'latitudeDemande', 'longitudeDemande', 'adresseDemande', 'idPieceJointeDemande', 'nomPieceJointeDemande', 'revision', 'contenuPieceJointe', 'nomCitoyen', 'prenomCitoyen', 'emailCitoyen', 'telCitoyen', 'telephonePortable', 'adresseCitoyen1', 'adresseCitoyen2', 'codePostalCitoyen', 'localiteCitoyen', 'identifiantAppMobileCitoyen', 'typeDevice', 'dateDepotDemande', 'dateTraitementDemande', 'dateClotureDemande', 'dateReouvertureDemande', 'dureeAvantTraitement', 'dureeTraitement', 'motifReouvertir', 'cloturerPar', 'pays', 'nomAgentFr', 'nomAgentAr', 'idThemeCitoyen', 'idThemeEnCours', 'dateReponse', 'dateStatut', 'idRegionAffectation', 'idProvinceAffectation', 'idCommuneAffectation', 'organisation', 'idOrigine', 'idAgentCreateur', 'idEntiteCreatrice', 'supprime', 'source', 'detailSource', 'format', 'referenceInterne', 'idRegion', 'idProvince', 'idPays', 'dateCreationDemande', 'idEntiteConcernee', 'nomEntiteConcerneeFr', 'nomEntiteConcerneeAr', 'idEntiteConcerneeCitoyen', 'nomEntiteConcerneeCitoyenFr', 'nomEntiteConcerneeCitoyenAr', 'typeRequerant', 'canalDepot', 'idExterne', 'dateEnvoiReponse', 'etatEnvoiReponse', 'etatEnvoi', 'dateEnvoi', 'numeroExterne', 'objetDemande', 'tagInterface', 'champSupp1', 'champSupp2', 'champSupp3', 'champSupp4', 'champSupp5', 'typeDemande', 'idAgentDestinataire', 'nomAgentDestinataireFr', 'prenomAgentDestinataireFr', 'nomAgentDestinataireAr', 'prenomAgentDestinataireAr', 'idAgentSignataire', 'nomAgentSignataireFr', 'nomAgentSignataireAr', 'prenomAgentSignataireAr', 'prenomAgentSignataireFr', 'idAgentEmetteur', 'nomAgentEmetteurFr', 'nomAgentEmetteurAr', 'prenomAgentEmetteurAr', 'prenomAgentEmetteurFr', 'reponseObligatoire', 'codeDemande', 'codeProvisoire', 'tagGateway', 'idUtilisateurGateway', 'champSuppTheme1', 'champSuppTheme2', 'champSuppTheme3', 'champSuppTheme4', 'champSuppTheme5', 'idTypeTheme', 'idEtapeEnCours', 'numeroEtapeEncours', 'nombreEtapes', 'dernierMessage', 'libelleEtapeEncours', 'dernierActeur', 'dateReponseEtape', 'idEntiteRelance', 'idAgentRelance', 'important', 'dateEcheanceReponseProche', 'urlExterne', 'clotureAutomatique', 'delaiTraitementOuvrable', 'acteurExterne', 'delaiTraitement', 'objetModifie', 'confidentiel', 'delaiComplement', 'erreursDetectes', 'idDemandeOrigine', ),
        BasePeer::TYPE_COLNAME => array (DemandePeer::ID, DemandePeer::ID_AGENT, DemandePeer::ID_COMMUNE, DemandePeer::ID_SERVICE, DemandePeer::ID_ENTITE, DemandePeer::ID_ORGANISME, DemandePeer::NUMERO_DEMANDE, DemandePeer::DETAIL_DEMANDE, DemandePeer::STATUT_DEMANDE, DemandePeer::LATITUDE_DEMANDE, DemandePeer::LONGITUDE_DEMANDE, DemandePeer::ADRESSE_DEMANDE, DemandePeer::ID_PIECE_JOINTE_DEMANDE, DemandePeer::NOM_PIECE_JOINTE_DEMANDE, DemandePeer::REVISION, DemandePeer::CONTENU_PIECE_JOINTE, DemandePeer::NOM_CITOYEN, DemandePeer::PRENOM_CITOYEN, DemandePeer::EMAIL_CITOYEN, DemandePeer::TEL_CITOYEN, DemandePeer::TELEPHONE_PORTABLE, DemandePeer::ADRESSE_CITOYEN_1, DemandePeer::ADRESSE_CITOYEN_2, DemandePeer::CODE_POSTAL_CITOYEN, DemandePeer::LOCALITE_CITOYEN, DemandePeer::IDENTIFIANT_APP_MOBILE_CITOYEN, DemandePeer::TYPE_DEVICE, DemandePeer::DATE_DEPOT_DEMANDE, DemandePeer::DATE_TRAITEMENT_DEMANDE, DemandePeer::DATE_CLOTURE_DEMANDE, DemandePeer::DATE_REOUVERTURE_DEMANDE, DemandePeer::DUREE_AVANT_TRAITEMENT, DemandePeer::DUREE_TRAITEMENT, DemandePeer::MOTIF_REOUVERTIR, DemandePeer::CLOTURER_PAR, DemandePeer::PAYS, DemandePeer::NOM_AGENT_FR, DemandePeer::NOM_AGENT_AR, DemandePeer::ID_THEME_CITOYEN, DemandePeer::ID_THEME_EN_COURS, DemandePeer::DATE_REPONSE, DemandePeer::DATE_STATUT, DemandePeer::ID_REGION_AFFECTATION, DemandePeer::ID_PROVINCE_AFFECTATION, DemandePeer::ID_COMMUNE_AFFECTATION, DemandePeer::ORGANISATION, DemandePeer::ID_ORIGINE, DemandePeer::ID_AGENT_CREATEUR, DemandePeer::ID_ENTITE_CREATRICE, DemandePeer::SUPPRIME, DemandePeer::SOURCE, DemandePeer::DETAIL_SOURCE, DemandePeer::FORMAT, DemandePeer::REFERENCE_INTERNE, DemandePeer::ID_REGION, DemandePeer::ID_PROVINCE, DemandePeer::ID_PAYS, DemandePeer::DATE_CREATION_DEMANDE, DemandePeer::ID_ENTITE_CONCERNEE, DemandePeer::NOM_ENTITE_CONCERNEE_FR, DemandePeer::NOM_ENTITE_CONCERNEE_AR, DemandePeer::ID_ENTITE_CONCERNEE_CITOYEN, DemandePeer::NOM_ENTITE_CONCERNEE_CITOYEN_FR, DemandePeer::NOM_ENTITE_CONCERNEE_CITOYEN_AR, DemandePeer::TYPE_REQUERANT, DemandePeer::CANAL_DEPOT, DemandePeer::ID_EXTERNE, DemandePeer::DATE_ENVOI_REPONSE, DemandePeer::ETAT_ENVOI_REPONSE, DemandePeer::ETAT_ENVOI, DemandePeer::DATE_ENVOI, DemandePeer::NUMERO_EXTERNE, DemandePeer::OBJET_DEMANDE, DemandePeer::TAG_INTERFACE, DemandePeer::CHAMP_SUPP_1, DemandePeer::CHAMP_SUPP_2, DemandePeer::CHAMP_SUPP_3, DemandePeer::CHAMP_SUPP_4, DemandePeer::CHAMP_SUPP_5, DemandePeer::TYPE_DEMANDE, DemandePeer::ID_AGENT_DESTINATAIRE, DemandePeer::NOM_AGENT_DESTINATAIRE_FR, DemandePeer::PRENOM_AGENT_DESTINATAIRE_FR, DemandePeer::NOM_AGENT_DESTINATAIRE_AR, DemandePeer::PRENOM_AGENT_DESTINATAIRE_AR, DemandePeer::ID_AGENT_SIGNATAIRE, DemandePeer::NOM_AGENT_SIGNATAIRE_FR, DemandePeer::NOM_AGENT_SIGNATAIRE_AR, DemandePeer::PRENOM_AGENT_SIGNATAIRE_AR, DemandePeer::PRENOM_AGENT_SIGNATAIRE_FR, DemandePeer::ID_AGENT_EMETTEUR, DemandePeer::NOM_AGENT_EMETTEUR_FR, DemandePeer::NOM_AGENT_EMETTEUR_AR, DemandePeer::PRENOM_AGENT_EMETTEUR_AR, DemandePeer::PRENOM_AGENT_EMETTEUR_FR, DemandePeer::REPONSE_OBLIGATOIRE, DemandePeer::CODE_DEMANDE, DemandePeer::CODE_PROVISOIRE, DemandePeer::TAG_GATEWAY, DemandePeer::ID_UTILISATEUR_GATEWAY, DemandePeer::CHAMP_SUPP_THEME_1, DemandePeer::CHAMP_SUPP_THEME_2, DemandePeer::CHAMP_SUPP_THEME_3, DemandePeer::CHAMP_SUPP_THEME_4, DemandePeer::CHAMP_SUPP_THEME_5, DemandePeer::ID_TYPE_THEME, DemandePeer::ID_ETAPE_EN_COURS, DemandePeer::NUMERO_ETAPE_ENCOURS, DemandePeer::NOMBRE_ETAPES, DemandePeer::DERNIER_MESSAGE, DemandePeer::LIBELLE_ETAPE_ENCOURS, DemandePeer::DERNIER_ACTEUR, DemandePeer::DATE_REPONSE_ETAPE, DemandePeer::ID_ENTITE_RELANCE, DemandePeer::ID_AGENT_RELANCE, DemandePeer::IMPORTANT, DemandePeer::DATE_ECHEANCE_REPONSE_PROCHE, DemandePeer::URL_EXTERNE, DemandePeer::CLOTURE_AUTOMATIQUE, DemandePeer::DELAI_TRAITEMENT_OUVRABLE, DemandePeer::ACTEUR_EXTERNE, DemandePeer::DELAI_TRAITEMENT, DemandePeer::OBJET_MODIFIE, DemandePeer::CONFIDENTIEL, DemandePeer::DELAI_COMPLEMENT, DemandePeer::ERREURS_DETECTES, DemandePeer::ID_DEMANDE_ORIGINE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_AGENT', 'ID_COMMUNE', 'ID_SERVICE', 'ID_ENTITE', 'ID_ORGANISME', 'NUMERO_DEMANDE', 'DETAIL_DEMANDE', 'STATUT_DEMANDE', 'LATITUDE_DEMANDE', 'LONGITUDE_DEMANDE', 'ADRESSE_DEMANDE', 'ID_PIECE_JOINTE_DEMANDE', 'NOM_PIECE_JOINTE_DEMANDE', 'REVISION', 'CONTENU_PIECE_JOINTE', 'NOM_CITOYEN', 'PRENOM_CITOYEN', 'EMAIL_CITOYEN', 'TEL_CITOYEN', 'TELEPHONE_PORTABLE', 'ADRESSE_CITOYEN_1', 'ADRESSE_CITOYEN_2', 'CODE_POSTAL_CITOYEN', 'LOCALITE_CITOYEN', 'IDENTIFIANT_APP_MOBILE_CITOYEN', 'TYPE_DEVICE', 'DATE_DEPOT_DEMANDE', 'DATE_TRAITEMENT_DEMANDE', 'DATE_CLOTURE_DEMANDE', 'DATE_REOUVERTURE_DEMANDE', 'DUREE_AVANT_TRAITEMENT', 'DUREE_TRAITEMENT', 'MOTIF_REOUVERTIR', 'CLOTURER_PAR', 'PAYS', 'NOM_AGENT_FR', 'NOM_AGENT_AR', 'ID_THEME_CITOYEN', 'ID_THEME_EN_COURS', 'DATE_REPONSE', 'DATE_STATUT', 'ID_REGION_AFFECTATION', 'ID_PROVINCE_AFFECTATION', 'ID_COMMUNE_AFFECTATION', 'ORGANISATION', 'ID_ORIGINE', 'ID_AGENT_CREATEUR', 'ID_ENTITE_CREATRICE', 'SUPPRIME', 'SOURCE', 'DETAIL_SOURCE', 'FORMAT', 'REFERENCE_INTERNE', 'ID_REGION', 'ID_PROVINCE', 'ID_PAYS', 'DATE_CREATION_DEMANDE', 'ID_ENTITE_CONCERNEE', 'NOM_ENTITE_CONCERNEE_FR', 'NOM_ENTITE_CONCERNEE_AR', 'ID_ENTITE_CONCERNEE_CITOYEN', 'NOM_ENTITE_CONCERNEE_CITOYEN_FR', 'NOM_ENTITE_CONCERNEE_CITOYEN_AR', 'TYPE_REQUERANT', 'CANAL_DEPOT', 'ID_EXTERNE', 'DATE_ENVOI_REPONSE', 'ETAT_ENVOI_REPONSE', 'ETAT_ENVOI', 'DATE_ENVOI', 'NUMERO_EXTERNE', 'OBJET_DEMANDE', 'TAG_INTERFACE', 'CHAMP_SUPP_1', 'CHAMP_SUPP_2', 'CHAMP_SUPP_3', 'CHAMP_SUPP_4', 'CHAMP_SUPP_5', 'TYPE_DEMANDE', 'ID_AGENT_DESTINATAIRE', 'NOM_AGENT_DESTINATAIRE_FR', 'PRENOM_AGENT_DESTINATAIRE_FR', 'NOM_AGENT_DESTINATAIRE_AR', 'PRENOM_AGENT_DESTINATAIRE_AR', 'ID_AGENT_SIGNATAIRE', 'NOM_AGENT_SIGNATAIRE_FR', 'NOM_AGENT_SIGNATAIRE_AR', 'PRENOM_AGENT_SIGNATAIRE_AR', 'PRENOM_AGENT_SIGNATAIRE_FR', 'ID_AGENT_EMETTEUR', 'NOM_AGENT_EMETTEUR_FR', 'NOM_AGENT_EMETTEUR_AR', 'PRENOM_AGENT_EMETTEUR_AR', 'PRENOM_AGENT_EMETTEUR_FR', 'REPONSE_OBLIGATOIRE', 'CODE_DEMANDE', 'CODE_PROVISOIRE', 'TAG_GATEWAY', 'ID_UTILISATEUR_GATEWAY', 'CHAMP_SUPP_THEME_1', 'CHAMP_SUPP_THEME_2', 'CHAMP_SUPP_THEME_3', 'CHAMP_SUPP_THEME_4', 'CHAMP_SUPP_THEME_5', 'ID_TYPE_THEME', 'ID_ETAPE_EN_COURS', 'NUMERO_ETAPE_ENCOURS', 'NOMBRE_ETAPES', 'DERNIER_MESSAGE', 'LIBELLE_ETAPE_ENCOURS', 'DERNIER_ACTEUR', 'DATE_REPONSE_ETAPE', 'ID_ENTITE_RELANCE', 'ID_AGENT_RELANCE', 'IMPORTANT', 'DATE_ECHEANCE_REPONSE_PROCHE', 'URL_EXTERNE', 'CLOTURE_AUTOMATIQUE', 'DELAI_TRAITEMENT_OUVRABLE', 'ACTEUR_EXTERNE', 'DELAI_TRAITEMENT', 'OBJET_MODIFIE', 'CONFIDENTIEL', 'DELAI_COMPLEMENT', 'ERREURS_DETECTES', 'ID_DEMANDE_ORIGINE', ),
        BasePeer::TYPE_FIELDNAME => array ('ID', 'ID_AGENT', 'ID_COMMUNE', 'ID_SERVICE', 'ID_ENTITE', 'ID_ORGANISME', 'NUMERO_DEMANDE', 'DETAIL_DEMANDE', 'STATUT_DEMANDE', 'LATITUDE_DEMANDE', 'LONGITUDE_DEMANDE', 'ADRESSE_DEMANDE', 'ID_PIECE_JOINTE_DEMANDE', 'NOM_PIECE_JOINTE_DEMANDE', 'REVISION', 'CONTENU_PIECE_JOINTE', 'NOM_CITOYEN', 'PRENOM_CITOYEN', 'EMAIL_CITOYEN', 'TEL_CITOYEN', 'TELEPHONE_PORTABLE', 'ADRESSE_CITOYEN_1', 'ADRESSE_CITOYEN_2', 'CODE_POSTAL_CITOYEN', 'LOCALITE_CITOYEN', 'IDENTIFIANT_APP_MOBILE_CITOYEN', 'TYPE_DEVICE', 'DATE_DEPOT_DEMANDE', 'DATE_TRAITEMENT_DEMANDE', 'DATE_CLOTURE_DEMANDE', 'DATE_REOUVERTURE_DEMANDE', 'DUREE_AVANT_TRAITEMENT', 'DUREE_TRAITEMENT', 'MOTIF_REOUVERTIR', 'CLOTURER_PAR', 'PAYS', 'NOM_AGENT_FR', 'NOM_AGENT_AR', 'ID_THEME_CITOYEN', 'ID_THEME_EN_COURS', 'DATE_REPONSE', 'DATE_STATUT', 'ID_REGION_AFFECTATION', 'ID_PROVINCE_AFFECTATION', 'ID_COMMUNE_AFFECTATION', 'ORGANISATION', 'ID_ORIGINE', 'ID_AGENT_CREATEUR', 'ID_ENTITE_CREATRICE', 'SUPPRIME', 'SOURCE', 'DETAIL_SOURCE', 'FORMAT', 'REFERENCE_INTERNE', 'ID_REGION', 'ID_PROVINCE', 'ID_PAYS', 'DATE_CREATION_DEMANDE', 'ID_ENTITE_CONCERNEE', 'NOM_ENTITE_CONCERNEE_FR', 'NOM_ENTITE_CONCERNEE_AR', 'ID_ENTITE_CONCERNEE_CITOYEN', 'NOM_ENTITE_CONCERNEE_CITOYEN_FR', 'NOM_ENTITE_CONCERNEE_CITOYEN_AR', 'TYPE_REQUERANT', 'CANAL_DEPOT', 'ID_EXTERNE', 'DATE_ENVOI_REPONSE', 'ETAT_ENVOI_REPONSE', 'ETAT_ENVOI', 'DATE_ENVOI', 'NUMERO_EXTERNE', 'OBJET_DEMANDE', 'TAG_INTERFACE', 'CHAMP_SUPP_1', 'CHAMP_SUPP_2', 'CHAMP_SUPP_3', 'CHAMP_SUPP_4', 'CHAMP_SUPP_5', 'TYPE_DEMANDE', 'ID_AGENT_DESTINATAIRE', 'NOM_AGENT_DESTINATAIRE_FR', 'PRENOM_AGENT_DESTINATAIRE_FR', 'NOM_AGENT_DESTINATAIRE_AR', 'PRENOM_AGENT_DESTINATAIRE_AR', 'ID_AGENT_SIGNATAIRE', 'NOM_AGENT_SIGNATAIRE_FR', 'NOM_AGENT_SIGNATAIRE_AR', 'PRENOM_AGENT_SIGNATAIRE_AR', 'PRENOM_AGENT_SIGNATAIRE_FR', 'ID_AGENT_EMETTEUR', 'NOM_AGENT_EMETTEUR_FR', 'NOM_AGENT_EMETTEUR_AR', 'PRENOM_AGENT_EMETTEUR_AR', 'PRENOM_AGENT_EMETTEUR_FR', 'REPONSE_OBLIGATOIRE', 'CODE_DEMANDE', 'CODE_PROVISOIRE', 'TAG_GATEWAY', 'ID_UTILISATEUR_GATEWAY', 'CHAMP_SUPP_THEME_1', 'CHAMP_SUPP_THEME_2', 'CHAMP_SUPP_THEME_3', 'CHAMP_SUPP_THEME_4', 'CHAMP_SUPP_THEME_5', 'ID_TYPE_THEME', 'ID_ETAPE_EN_COURS', 'NUMERO_ETAPE_ENCOURS', 'NOMBRE_ETAPES', 'DERNIER_MESSAGE', 'LIBELLE_ETAPE_ENCOURS', 'DERNIER_ACTEUR', 'DATE_REPONSE_ETAPE', 'ID_ENTITE_RELANCE', 'ID_AGENT_RELANCE', 'IMPORTANT', 'DATE_ECHEANCE_REPONSE_PROCHE', 'URL_EXTERNE', 'CLOTURE_AUTOMATIQUE', 'DELAI_TRAITEMENT_OUVRABLE', 'ACTEUR_EXTERNE', 'DELAI_TRAITEMENT', 'OBJET_MODIFIE', 'CONFIDENTIEL', 'DELAI_COMPLEMENT', 'ERREURS_DETECTES', 'ID_DEMANDE_ORIGINE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. DemandePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdAgent' => 1, 'IdCommune' => 2, 'IdService' => 3, 'IdEntite' => 4, 'IdOrganisme' => 5, 'NumeroDemande' => 6, 'DetailDemande' => 7, 'StatutDemande' => 8, 'LatitudeDemande' => 9, 'LongitudeDemande' => 10, 'AdresseDemande' => 11, 'IdPieceJointeDemande' => 12, 'NomPieceJointeDemande' => 13, 'Revision' => 14, 'ContenuPieceJointe' => 15, 'NomCitoyen' => 16, 'PrenomCitoyen' => 17, 'EmailCitoyen' => 18, 'TelCitoyen' => 19, 'TelephonePortable' => 20, 'AdresseCitoyen1' => 21, 'AdresseCitoyen2' => 22, 'CodePostalCitoyen' => 23, 'LocaliteCitoyen' => 24, 'IdentifiantAppMobileCitoyen' => 25, 'TypeDevice' => 26, 'DateDepotDemande' => 27, 'DateTraitementDemande' => 28, 'DateClotureDemande' => 29, 'DateReouvertureDemande' => 30, 'DureeAvantTraitement' => 31, 'DureeTraitement' => 32, 'MotifReouvertir' => 33, 'CloturerPar' => 34, 'Pays' => 35, 'NomAgentFr' => 36, 'NomAgentAr' => 37, 'IdThemeCitoyen' => 38, 'IdThemeEnCours' => 39, 'DateReponse' => 40, 'DateStatut' => 41, 'IdRegionAffectation' => 42, 'IdProvinceAffectation' => 43, 'IdCommuneAffectation' => 44, 'Organisation' => 45, 'IdOrigine' => 46, 'IdAgentCreateur' => 47, 'IdEntiteCreatrice' => 48, 'Supprime' => 49, 'Source' => 50, 'DetailSource' => 51, 'Format' => 52, 'ReferenceInterne' => 53, 'IdRegion' => 54, 'IdProvince' => 55, 'IdPays' => 56, 'DateCreationDemande' => 57, 'IdEntiteConcernee' => 58, 'NomEntiteConcerneeFr' => 59, 'NomEntiteConcerneeAr' => 60, 'IdEntiteConcerneeCitoyen' => 61, 'NomEntiteConcerneeCitoyenFr' => 62, 'NomEntiteConcerneeCitoyenAr' => 63, 'TypeRequerant' => 64, 'CanalDepot' => 65, 'IdExterne' => 66, 'DateEnvoiReponse' => 67, 'EtatEnvoiReponse' => 68, 'EtatEnvoi' => 69, 'DateEnvoi' => 70, 'NumeroExterne' => 71, 'ObjetDemande' => 72, 'TagInterface' => 73, 'ChampSupp1' => 74, 'ChampSupp2' => 75, 'ChampSupp3' => 76, 'ChampSupp4' => 77, 'ChampSupp5' => 78, 'TypeDemande' => 79, 'IdAgentDestinataire' => 80, 'NomAgentDestinataireFr' => 81, 'PrenomAgentDestinataireFr' => 82, 'NomAgentDestinataireAr' => 83, 'PrenomAgentDestinataireAr' => 84, 'IdAgentSignataire' => 85, 'NomAgentSignataireFr' => 86, 'NomAgentSignataireAr' => 87, 'PrenomAgentSignataireAr' => 88, 'PrenomAgentSignataireFr' => 89, 'IdAgentEmetteur' => 90, 'NomAgentEmetteurFr' => 91, 'NomAgentEmetteurAr' => 92, 'PrenomAgentEmetteurAr' => 93, 'PrenomAgentEmetteurFr' => 94, 'ReponseObligatoire' => 95, 'CodeDemande' => 96, 'CodeProvisoire' => 97, 'TagGateway' => 98, 'IdUtilisateurGateway' => 99, 'ChampSuppTheme1' => 100, 'ChampSuppTheme2' => 101, 'ChampSuppTheme3' => 102, 'ChampSuppTheme4' => 103, 'ChampSuppTheme5' => 104, 'IdTypeTheme' => 105, 'IdEtapeEnCours' => 106, 'NumeroEtapeEncours' => 107, 'NombreEtapes' => 108, 'DernierMessage' => 109, 'LibelleEtapeEncours' => 110, 'DernierActeur' => 111, 'DateReponseEtape' => 112, 'IdEntiteRelance' => 113, 'IdAgentRelance' => 114, 'Important' => 115, 'DateEcheanceReponseProche' => 116, 'UrlExterne' => 117, 'ClotureAutomatique' => 118, 'DelaiTraitementOuvrable' => 119, 'ActeurExterne' => 120, 'DelaiTraitement' => 121, 'ObjetModifie' => 122, 'Confidentiel' => 123, 'DelaiComplement' => 124, 'ErreursDetectes' => 125, 'IdDemandeOrigine' => 126, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idAgent' => 1, 'idCommune' => 2, 'idService' => 3, 'idEntite' => 4, 'idOrganisme' => 5, 'numeroDemande' => 6, 'detailDemande' => 7, 'statutDemande' => 8, 'latitudeDemande' => 9, 'longitudeDemande' => 10, 'adresseDemande' => 11, 'idPieceJointeDemande' => 12, 'nomPieceJointeDemande' => 13, 'revision' => 14, 'contenuPieceJointe' => 15, 'nomCitoyen' => 16, 'prenomCitoyen' => 17, 'emailCitoyen' => 18, 'telCitoyen' => 19, 'telephonePortable' => 20, 'adresseCitoyen1' => 21, 'adresseCitoyen2' => 22, 'codePostalCitoyen' => 23, 'localiteCitoyen' => 24, 'identifiantAppMobileCitoyen' => 25, 'typeDevice' => 26, 'dateDepotDemande' => 27, 'dateTraitementDemande' => 28, 'dateClotureDemande' => 29, 'dateReouvertureDemande' => 30, 'dureeAvantTraitement' => 31, 'dureeTraitement' => 32, 'motifReouvertir' => 33, 'cloturerPar' => 34, 'pays' => 35, 'nomAgentFr' => 36, 'nomAgentAr' => 37, 'idThemeCitoyen' => 38, 'idThemeEnCours' => 39, 'dateReponse' => 40, 'dateStatut' => 41, 'idRegionAffectation' => 42, 'idProvinceAffectation' => 43, 'idCommuneAffectation' => 44, 'organisation' => 45, 'idOrigine' => 46, 'idAgentCreateur' => 47, 'idEntiteCreatrice' => 48, 'supprime' => 49, 'source' => 50, 'detailSource' => 51, 'format' => 52, 'referenceInterne' => 53, 'idRegion' => 54, 'idProvince' => 55, 'idPays' => 56, 'dateCreationDemande' => 57, 'idEntiteConcernee' => 58, 'nomEntiteConcerneeFr' => 59, 'nomEntiteConcerneeAr' => 60, 'idEntiteConcerneeCitoyen' => 61, 'nomEntiteConcerneeCitoyenFr' => 62, 'nomEntiteConcerneeCitoyenAr' => 63, 'typeRequerant' => 64, 'canalDepot' => 65, 'idExterne' => 66, 'dateEnvoiReponse' => 67, 'etatEnvoiReponse' => 68, 'etatEnvoi' => 69, 'dateEnvoi' => 70, 'numeroExterne' => 71, 'objetDemande' => 72, 'tagInterface' => 73, 'champSupp1' => 74, 'champSupp2' => 75, 'champSupp3' => 76, 'champSupp4' => 77, 'champSupp5' => 78, 'typeDemande' => 79, 'idAgentDestinataire' => 80, 'nomAgentDestinataireFr' => 81, 'prenomAgentDestinataireFr' => 82, 'nomAgentDestinataireAr' => 83, 'prenomAgentDestinataireAr' => 84, 'idAgentSignataire' => 85, 'nomAgentSignataireFr' => 86, 'nomAgentSignataireAr' => 87, 'prenomAgentSignataireAr' => 88, 'prenomAgentSignataireFr' => 89, 'idAgentEmetteur' => 90, 'nomAgentEmetteurFr' => 91, 'nomAgentEmetteurAr' => 92, 'prenomAgentEmetteurAr' => 93, 'prenomAgentEmetteurFr' => 94, 'reponseObligatoire' => 95, 'codeDemande' => 96, 'codeProvisoire' => 97, 'tagGateway' => 98, 'idUtilisateurGateway' => 99, 'champSuppTheme1' => 100, 'champSuppTheme2' => 101, 'champSuppTheme3' => 102, 'champSuppTheme4' => 103, 'champSuppTheme5' => 104, 'idTypeTheme' => 105, 'idEtapeEnCours' => 106, 'numeroEtapeEncours' => 107, 'nombreEtapes' => 108, 'dernierMessage' => 109, 'libelleEtapeEncours' => 110, 'dernierActeur' => 111, 'dateReponseEtape' => 112, 'idEntiteRelance' => 113, 'idAgentRelance' => 114, 'important' => 115, 'dateEcheanceReponseProche' => 116, 'urlExterne' => 117, 'clotureAutomatique' => 118, 'delaiTraitementOuvrable' => 119, 'acteurExterne' => 120, 'delaiTraitement' => 121, 'objetModifie' => 122, 'confidentiel' => 123, 'delaiComplement' => 124, 'erreursDetectes' => 125, 'idDemandeOrigine' => 126, ),
        BasePeer::TYPE_COLNAME => array (DemandePeer::ID => 0, DemandePeer::ID_AGENT => 1, DemandePeer::ID_COMMUNE => 2, DemandePeer::ID_SERVICE => 3, DemandePeer::ID_ENTITE => 4, DemandePeer::ID_ORGANISME => 5, DemandePeer::NUMERO_DEMANDE => 6, DemandePeer::DETAIL_DEMANDE => 7, DemandePeer::STATUT_DEMANDE => 8, DemandePeer::LATITUDE_DEMANDE => 9, DemandePeer::LONGITUDE_DEMANDE => 10, DemandePeer::ADRESSE_DEMANDE => 11, DemandePeer::ID_PIECE_JOINTE_DEMANDE => 12, DemandePeer::NOM_PIECE_JOINTE_DEMANDE => 13, DemandePeer::REVISION => 14, DemandePeer::CONTENU_PIECE_JOINTE => 15, DemandePeer::NOM_CITOYEN => 16, DemandePeer::PRENOM_CITOYEN => 17, DemandePeer::EMAIL_CITOYEN => 18, DemandePeer::TEL_CITOYEN => 19, DemandePeer::TELEPHONE_PORTABLE => 20, DemandePeer::ADRESSE_CITOYEN_1 => 21, DemandePeer::ADRESSE_CITOYEN_2 => 22, DemandePeer::CODE_POSTAL_CITOYEN => 23, DemandePeer::LOCALITE_CITOYEN => 24, DemandePeer::IDENTIFIANT_APP_MOBILE_CITOYEN => 25, DemandePeer::TYPE_DEVICE => 26, DemandePeer::DATE_DEPOT_DEMANDE => 27, DemandePeer::DATE_TRAITEMENT_DEMANDE => 28, DemandePeer::DATE_CLOTURE_DEMANDE => 29, DemandePeer::DATE_REOUVERTURE_DEMANDE => 30, DemandePeer::DUREE_AVANT_TRAITEMENT => 31, DemandePeer::DUREE_TRAITEMENT => 32, DemandePeer::MOTIF_REOUVERTIR => 33, DemandePeer::CLOTURER_PAR => 34, DemandePeer::PAYS => 35, DemandePeer::NOM_AGENT_FR => 36, DemandePeer::NOM_AGENT_AR => 37, DemandePeer::ID_THEME_CITOYEN => 38, DemandePeer::ID_THEME_EN_COURS => 39, DemandePeer::DATE_REPONSE => 40, DemandePeer::DATE_STATUT => 41, DemandePeer::ID_REGION_AFFECTATION => 42, DemandePeer::ID_PROVINCE_AFFECTATION => 43, DemandePeer::ID_COMMUNE_AFFECTATION => 44, DemandePeer::ORGANISATION => 45, DemandePeer::ID_ORIGINE => 46, DemandePeer::ID_AGENT_CREATEUR => 47, DemandePeer::ID_ENTITE_CREATRICE => 48, DemandePeer::SUPPRIME => 49, DemandePeer::SOURCE => 50, DemandePeer::DETAIL_SOURCE => 51, DemandePeer::FORMAT => 52, DemandePeer::REFERENCE_INTERNE => 53, DemandePeer::ID_REGION => 54, DemandePeer::ID_PROVINCE => 55, DemandePeer::ID_PAYS => 56, DemandePeer::DATE_CREATION_DEMANDE => 57, DemandePeer::ID_ENTITE_CONCERNEE => 58, DemandePeer::NOM_ENTITE_CONCERNEE_FR => 59, DemandePeer::NOM_ENTITE_CONCERNEE_AR => 60, DemandePeer::ID_ENTITE_CONCERNEE_CITOYEN => 61, DemandePeer::NOM_ENTITE_CONCERNEE_CITOYEN_FR => 62, DemandePeer::NOM_ENTITE_CONCERNEE_CITOYEN_AR => 63, DemandePeer::TYPE_REQUERANT => 64, DemandePeer::CANAL_DEPOT => 65, DemandePeer::ID_EXTERNE => 66, DemandePeer::DATE_ENVOI_REPONSE => 67, DemandePeer::ETAT_ENVOI_REPONSE => 68, DemandePeer::ETAT_ENVOI => 69, DemandePeer::DATE_ENVOI => 70, DemandePeer::NUMERO_EXTERNE => 71, DemandePeer::OBJET_DEMANDE => 72, DemandePeer::TAG_INTERFACE => 73, DemandePeer::CHAMP_SUPP_1 => 74, DemandePeer::CHAMP_SUPP_2 => 75, DemandePeer::CHAMP_SUPP_3 => 76, DemandePeer::CHAMP_SUPP_4 => 77, DemandePeer::CHAMP_SUPP_5 => 78, DemandePeer::TYPE_DEMANDE => 79, DemandePeer::ID_AGENT_DESTINATAIRE => 80, DemandePeer::NOM_AGENT_DESTINATAIRE_FR => 81, DemandePeer::PRENOM_AGENT_DESTINATAIRE_FR => 82, DemandePeer::NOM_AGENT_DESTINATAIRE_AR => 83, DemandePeer::PRENOM_AGENT_DESTINATAIRE_AR => 84, DemandePeer::ID_AGENT_SIGNATAIRE => 85, DemandePeer::NOM_AGENT_SIGNATAIRE_FR => 86, DemandePeer::NOM_AGENT_SIGNATAIRE_AR => 87, DemandePeer::PRENOM_AGENT_SIGNATAIRE_AR => 88, DemandePeer::PRENOM_AGENT_SIGNATAIRE_FR => 89, DemandePeer::ID_AGENT_EMETTEUR => 90, DemandePeer::NOM_AGENT_EMETTEUR_FR => 91, DemandePeer::NOM_AGENT_EMETTEUR_AR => 92, DemandePeer::PRENOM_AGENT_EMETTEUR_AR => 93, DemandePeer::PRENOM_AGENT_EMETTEUR_FR => 94, DemandePeer::REPONSE_OBLIGATOIRE => 95, DemandePeer::CODE_DEMANDE => 96, DemandePeer::CODE_PROVISOIRE => 97, DemandePeer::TAG_GATEWAY => 98, DemandePeer::ID_UTILISATEUR_GATEWAY => 99, DemandePeer::CHAMP_SUPP_THEME_1 => 100, DemandePeer::CHAMP_SUPP_THEME_2 => 101, DemandePeer::CHAMP_SUPP_THEME_3 => 102, DemandePeer::CHAMP_SUPP_THEME_4 => 103, DemandePeer::CHAMP_SUPP_THEME_5 => 104, DemandePeer::ID_TYPE_THEME => 105, DemandePeer::ID_ETAPE_EN_COURS => 106, DemandePeer::NUMERO_ETAPE_ENCOURS => 107, DemandePeer::NOMBRE_ETAPES => 108, DemandePeer::DERNIER_MESSAGE => 109, DemandePeer::LIBELLE_ETAPE_ENCOURS => 110, DemandePeer::DERNIER_ACTEUR => 111, DemandePeer::DATE_REPONSE_ETAPE => 112, DemandePeer::ID_ENTITE_RELANCE => 113, DemandePeer::ID_AGENT_RELANCE => 114, DemandePeer::IMPORTANT => 115, DemandePeer::DATE_ECHEANCE_REPONSE_PROCHE => 116, DemandePeer::URL_EXTERNE => 117, DemandePeer::CLOTURE_AUTOMATIQUE => 118, DemandePeer::DELAI_TRAITEMENT_OUVRABLE => 119, DemandePeer::ACTEUR_EXTERNE => 120, DemandePeer::DELAI_TRAITEMENT => 121, DemandePeer::OBJET_MODIFIE => 122, DemandePeer::CONFIDENTIEL => 123, DemandePeer::DELAI_COMPLEMENT => 124, DemandePeer::ERREURS_DETECTES => 125, DemandePeer::ID_DEMANDE_ORIGINE => 126, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_AGENT' => 1, 'ID_COMMUNE' => 2, 'ID_SERVICE' => 3, 'ID_ENTITE' => 4, 'ID_ORGANISME' => 5, 'NUMERO_DEMANDE' => 6, 'DETAIL_DEMANDE' => 7, 'STATUT_DEMANDE' => 8, 'LATITUDE_DEMANDE' => 9, 'LONGITUDE_DEMANDE' => 10, 'ADRESSE_DEMANDE' => 11, 'ID_PIECE_JOINTE_DEMANDE' => 12, 'NOM_PIECE_JOINTE_DEMANDE' => 13, 'REVISION' => 14, 'CONTENU_PIECE_JOINTE' => 15, 'NOM_CITOYEN' => 16, 'PRENOM_CITOYEN' => 17, 'EMAIL_CITOYEN' => 18, 'TEL_CITOYEN' => 19, 'TELEPHONE_PORTABLE' => 20, 'ADRESSE_CITOYEN_1' => 21, 'ADRESSE_CITOYEN_2' => 22, 'CODE_POSTAL_CITOYEN' => 23, 'LOCALITE_CITOYEN' => 24, 'IDENTIFIANT_APP_MOBILE_CITOYEN' => 25, 'TYPE_DEVICE' => 26, 'DATE_DEPOT_DEMANDE' => 27, 'DATE_TRAITEMENT_DEMANDE' => 28, 'DATE_CLOTURE_DEMANDE' => 29, 'DATE_REOUVERTURE_DEMANDE' => 30, 'DUREE_AVANT_TRAITEMENT' => 31, 'DUREE_TRAITEMENT' => 32, 'MOTIF_REOUVERTIR' => 33, 'CLOTURER_PAR' => 34, 'PAYS' => 35, 'NOM_AGENT_FR' => 36, 'NOM_AGENT_AR' => 37, 'ID_THEME_CITOYEN' => 38, 'ID_THEME_EN_COURS' => 39, 'DATE_REPONSE' => 40, 'DATE_STATUT' => 41, 'ID_REGION_AFFECTATION' => 42, 'ID_PROVINCE_AFFECTATION' => 43, 'ID_COMMUNE_AFFECTATION' => 44, 'ORGANISATION' => 45, 'ID_ORIGINE' => 46, 'ID_AGENT_CREATEUR' => 47, 'ID_ENTITE_CREATRICE' => 48, 'SUPPRIME' => 49, 'SOURCE' => 50, 'DETAIL_SOURCE' => 51, 'FORMAT' => 52, 'REFERENCE_INTERNE' => 53, 'ID_REGION' => 54, 'ID_PROVINCE' => 55, 'ID_PAYS' => 56, 'DATE_CREATION_DEMANDE' => 57, 'ID_ENTITE_CONCERNEE' => 58, 'NOM_ENTITE_CONCERNEE_FR' => 59, 'NOM_ENTITE_CONCERNEE_AR' => 60, 'ID_ENTITE_CONCERNEE_CITOYEN' => 61, 'NOM_ENTITE_CONCERNEE_CITOYEN_FR' => 62, 'NOM_ENTITE_CONCERNEE_CITOYEN_AR' => 63, 'TYPE_REQUERANT' => 64, 'CANAL_DEPOT' => 65, 'ID_EXTERNE' => 66, 'DATE_ENVOI_REPONSE' => 67, 'ETAT_ENVOI_REPONSE' => 68, 'ETAT_ENVOI' => 69, 'DATE_ENVOI' => 70, 'NUMERO_EXTERNE' => 71, 'OBJET_DEMANDE' => 72, 'TAG_INTERFACE' => 73, 'CHAMP_SUPP_1' => 74, 'CHAMP_SUPP_2' => 75, 'CHAMP_SUPP_3' => 76, 'CHAMP_SUPP_4' => 77, 'CHAMP_SUPP_5' => 78, 'TYPE_DEMANDE' => 79, 'ID_AGENT_DESTINATAIRE' => 80, 'NOM_AGENT_DESTINATAIRE_FR' => 81, 'PRENOM_AGENT_DESTINATAIRE_FR' => 82, 'NOM_AGENT_DESTINATAIRE_AR' => 83, 'PRENOM_AGENT_DESTINATAIRE_AR' => 84, 'ID_AGENT_SIGNATAIRE' => 85, 'NOM_AGENT_SIGNATAIRE_FR' => 86, 'NOM_AGENT_SIGNATAIRE_AR' => 87, 'PRENOM_AGENT_SIGNATAIRE_AR' => 88, 'PRENOM_AGENT_SIGNATAIRE_FR' => 89, 'ID_AGENT_EMETTEUR' => 90, 'NOM_AGENT_EMETTEUR_FR' => 91, 'NOM_AGENT_EMETTEUR_AR' => 92, 'PRENOM_AGENT_EMETTEUR_AR' => 93, 'PRENOM_AGENT_EMETTEUR_FR' => 94, 'REPONSE_OBLIGATOIRE' => 95, 'CODE_DEMANDE' => 96, 'CODE_PROVISOIRE' => 97, 'TAG_GATEWAY' => 98, 'ID_UTILISATEUR_GATEWAY' => 99, 'CHAMP_SUPP_THEME_1' => 100, 'CHAMP_SUPP_THEME_2' => 101, 'CHAMP_SUPP_THEME_3' => 102, 'CHAMP_SUPP_THEME_4' => 103, 'CHAMP_SUPP_THEME_5' => 104, 'ID_TYPE_THEME' => 105, 'ID_ETAPE_EN_COURS' => 106, 'NUMERO_ETAPE_ENCOURS' => 107, 'NOMBRE_ETAPES' => 108, 'DERNIER_MESSAGE' => 109, 'LIBELLE_ETAPE_ENCOURS' => 110, 'DERNIER_ACTEUR' => 111, 'DATE_REPONSE_ETAPE' => 112, 'ID_ENTITE_RELANCE' => 113, 'ID_AGENT_RELANCE' => 114, 'IMPORTANT' => 115, 'DATE_ECHEANCE_REPONSE_PROCHE' => 116, 'URL_EXTERNE' => 117, 'CLOTURE_AUTOMATIQUE' => 118, 'DELAI_TRAITEMENT_OUVRABLE' => 119, 'ACTEUR_EXTERNE' => 120, 'DELAI_TRAITEMENT' => 121, 'OBJET_MODIFIE' => 122, 'CONFIDENTIEL' => 123, 'DELAI_COMPLEMENT' => 124, 'ERREURS_DETECTES' => 125, 'ID_DEMANDE_ORIGINE' => 126, ),
        BasePeer::TYPE_FIELDNAME => array ('ID' => 0, 'ID_AGENT' => 1, 'ID_COMMUNE' => 2, 'ID_SERVICE' => 3, 'ID_ENTITE' => 4, 'ID_ORGANISME' => 5, 'NUMERO_DEMANDE' => 6, 'DETAIL_DEMANDE' => 7, 'STATUT_DEMANDE' => 8, 'LATITUDE_DEMANDE' => 9, 'LONGITUDE_DEMANDE' => 10, 'ADRESSE_DEMANDE' => 11, 'ID_PIECE_JOINTE_DEMANDE' => 12, 'NOM_PIECE_JOINTE_DEMANDE' => 13, 'REVISION' => 14, 'CONTENU_PIECE_JOINTE' => 15, 'NOM_CITOYEN' => 16, 'PRENOM_CITOYEN' => 17, 'EMAIL_CITOYEN' => 18, 'TEL_CITOYEN' => 19, 'TELEPHONE_PORTABLE' => 20, 'ADRESSE_CITOYEN_1' => 21, 'ADRESSE_CITOYEN_2' => 22, 'CODE_POSTAL_CITOYEN' => 23, 'LOCALITE_CITOYEN' => 24, 'IDENTIFIANT_APP_MOBILE_CITOYEN' => 25, 'TYPE_DEVICE' => 26, 'DATE_DEPOT_DEMANDE' => 27, 'DATE_TRAITEMENT_DEMANDE' => 28, 'DATE_CLOTURE_DEMANDE' => 29, 'DATE_REOUVERTURE_DEMANDE' => 30, 'DUREE_AVANT_TRAITEMENT' => 31, 'DUREE_TRAITEMENT' => 32, 'MOTIF_REOUVERTIR' => 33, 'CLOTURER_PAR' => 34, 'PAYS' => 35, 'NOM_AGENT_FR' => 36, 'NOM_AGENT_AR' => 37, 'ID_THEME_CITOYEN' => 38, 'ID_THEME_EN_COURS' => 39, 'DATE_REPONSE' => 40, 'DATE_STATUT' => 41, 'ID_REGION_AFFECTATION' => 42, 'ID_PROVINCE_AFFECTATION' => 43, 'ID_COMMUNE_AFFECTATION' => 44, 'ORGANISATION' => 45, 'ID_ORIGINE' => 46, 'ID_AGENT_CREATEUR' => 47, 'ID_ENTITE_CREATRICE' => 48, 'SUPPRIME' => 49, 'SOURCE' => 50, 'DETAIL_SOURCE' => 51, 'FORMAT' => 52, 'REFERENCE_INTERNE' => 53, 'ID_REGION' => 54, 'ID_PROVINCE' => 55, 'ID_PAYS' => 56, 'DATE_CREATION_DEMANDE' => 57, 'ID_ENTITE_CONCERNEE' => 58, 'NOM_ENTITE_CONCERNEE_FR' => 59, 'NOM_ENTITE_CONCERNEE_AR' => 60, 'ID_ENTITE_CONCERNEE_CITOYEN' => 61, 'NOM_ENTITE_CONCERNEE_CITOYEN_FR' => 62, 'NOM_ENTITE_CONCERNEE_CITOYEN_AR' => 63, 'TYPE_REQUERANT' => 64, 'CANAL_DEPOT' => 65, 'ID_EXTERNE' => 66, 'DATE_ENVOI_REPONSE' => 67, 'ETAT_ENVOI_REPONSE' => 68, 'ETAT_ENVOI' => 69, 'DATE_ENVOI' => 70, 'NUMERO_EXTERNE' => 71, 'OBJET_DEMANDE' => 72, 'TAG_INTERFACE' => 73, 'CHAMP_SUPP_1' => 74, 'CHAMP_SUPP_2' => 75, 'CHAMP_SUPP_3' => 76, 'CHAMP_SUPP_4' => 77, 'CHAMP_SUPP_5' => 78, 'TYPE_DEMANDE' => 79, 'ID_AGENT_DESTINATAIRE' => 80, 'NOM_AGENT_DESTINATAIRE_FR' => 81, 'PRENOM_AGENT_DESTINATAIRE_FR' => 82, 'NOM_AGENT_DESTINATAIRE_AR' => 83, 'PRENOM_AGENT_DESTINATAIRE_AR' => 84, 'ID_AGENT_SIGNATAIRE' => 85, 'NOM_AGENT_SIGNATAIRE_FR' => 86, 'NOM_AGENT_SIGNATAIRE_AR' => 87, 'PRENOM_AGENT_SIGNATAIRE_AR' => 88, 'PRENOM_AGENT_SIGNATAIRE_FR' => 89, 'ID_AGENT_EMETTEUR' => 90, 'NOM_AGENT_EMETTEUR_FR' => 91, 'NOM_AGENT_EMETTEUR_AR' => 92, 'PRENOM_AGENT_EMETTEUR_AR' => 93, 'PRENOM_AGENT_EMETTEUR_FR' => 94, 'REPONSE_OBLIGATOIRE' => 95, 'CODE_DEMANDE' => 96, 'CODE_PROVISOIRE' => 97, 'TAG_GATEWAY' => 98, 'ID_UTILISATEUR_GATEWAY' => 99, 'CHAMP_SUPP_THEME_1' => 100, 'CHAMP_SUPP_THEME_2' => 101, 'CHAMP_SUPP_THEME_3' => 102, 'CHAMP_SUPP_THEME_4' => 103, 'CHAMP_SUPP_THEME_5' => 104, 'ID_TYPE_THEME' => 105, 'ID_ETAPE_EN_COURS' => 106, 'NUMERO_ETAPE_ENCOURS' => 107, 'NOMBRE_ETAPES' => 108, 'DERNIER_MESSAGE' => 109, 'LIBELLE_ETAPE_ENCOURS' => 110, 'DERNIER_ACTEUR' => 111, 'DATE_REPONSE_ETAPE' => 112, 'ID_ENTITE_RELANCE' => 113, 'ID_AGENT_RELANCE' => 114, 'IMPORTANT' => 115, 'DATE_ECHEANCE_REPONSE_PROCHE' => 116, 'URL_EXTERNE' => 117, 'CLOTURE_AUTOMATIQUE' => 118, 'DELAI_TRAITEMENT_OUVRABLE' => 119, 'ACTEUR_EXTERNE' => 120, 'DELAI_TRAITEMENT' => 121, 'OBJET_MODIFIE' => 122, 'CONFIDENTIEL' => 123, 'DELAI_COMPLEMENT' => 124, 'ERREURS_DETECTES' => 125, 'ID_DEMANDE_ORIGINE' => 126, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        DemandePeer::TYPE_DEVICE => array(
            DemandePeer::TYPE_DEVICE_0,
            DemandePeer::TYPE_DEVICE_1,
        ),
        DemandePeer::CLOTURER_PAR => array(
            DemandePeer::CLOTURER_PAR_0,
            DemandePeer::CLOTURER_PAR_1,
            DemandePeer::CLOTURER_PAR_2,
        ),
        DemandePeer::SUPPRIME => array(
            DemandePeer::SUPPRIME_0,
            DemandePeer::SUPPRIME_1,
        ),
        DemandePeer::ETAT_ENVOI_REPONSE => array(
            DemandePeer::ETAT_ENVOI_REPONSE_0,
            DemandePeer::ETAT_ENVOI_REPONSE_1,
            DemandePeer::ETAT_ENVOI_REPONSE__1,
            DemandePeer::ETAT_ENVOI_REPONSE_2,
        ),
        DemandePeer::ETAT_ENVOI => array(
            DemandePeer::ETAT_ENVOI_0,
            DemandePeer::ETAT_ENVOI_1,
        ),
        DemandePeer::REPONSE_OBLIGATOIRE => array(
            DemandePeer::REPONSE_OBLIGATOIRE_0,
            DemandePeer::REPONSE_OBLIGATOIRE_1,
        ),
        DemandePeer::TAG_GATEWAY => array(
            DemandePeer::TAG_GATEWAY_0,
            DemandePeer::TAG_GATEWAY_1,
        ),
        DemandePeer::IMPORTANT => array(
            DemandePeer::IMPORTANT_0,
            DemandePeer::IMPORTANT_1,
        ),
        DemandePeer::CLOTURE_AUTOMATIQUE => array(
            DemandePeer::CLOTURE_AUTOMATIQUE_0,
            DemandePeer::CLOTURE_AUTOMATIQUE_1,
        ),
        DemandePeer::CONFIDENTIEL => array(
            DemandePeer::CONFIDENTIEL_0,
            DemandePeer::CONFIDENTIEL_1,
        ),
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = DemandePeer::getFieldNames($toType);
        $key = isset(DemandePeer::$fieldKeys[$fromType][$name]) ? DemandePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(DemandePeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, DemandePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return DemandePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return DemandePeer::$enumValueSets;
    }

    /**
     * Gets the list of values for an ENUM column
     *
     * @param string $colname The ENUM column name.
     *
     * @return array list of possible values for the column
     */
    public static function getValueSet($colname)
    {
        $valueSets = DemandePeer::getValueSets();

        if (!isset($valueSets[$colname])) {
            throw new PropelException(sprintf('Column "%s" has no ValueSet.', $colname));
        }

        return $valueSets[$colname];
    }

    /**
     * Gets the SQL value for the ENUM column value
     *
     * @param string $colname ENUM column name.
     * @param string $enumVal ENUM value.
     *
     * @return int SQL value
     */
    public static function getSqlValueForEnum($colname, $enumVal)
    {
        $values = DemandePeer::getValueSet($colname);
        if (!in_array($enumVal, $values)) {
            throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $colname));
        }

        return array_search($enumVal, $values);
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. DemandePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(DemandePeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(DemandePeer::ID);
            $criteria->addSelectColumn(DemandePeer::ID_AGENT);
            $criteria->addSelectColumn(DemandePeer::ID_COMMUNE);
            $criteria->addSelectColumn(DemandePeer::ID_SERVICE);
            $criteria->addSelectColumn(DemandePeer::ID_ENTITE);
            $criteria->addSelectColumn(DemandePeer::ID_ORGANISME);
            $criteria->addSelectColumn(DemandePeer::NUMERO_DEMANDE);
            $criteria->addSelectColumn(DemandePeer::DETAIL_DEMANDE);
            $criteria->addSelectColumn(DemandePeer::STATUT_DEMANDE);
            $criteria->addSelectColumn(DemandePeer::LATITUDE_DEMANDE);
            $criteria->addSelectColumn(DemandePeer::LONGITUDE_DEMANDE);
            $criteria->addSelectColumn(DemandePeer::ADRESSE_DEMANDE);
            $criteria->addSelectColumn(DemandePeer::ID_PIECE_JOINTE_DEMANDE);
            $criteria->addSelectColumn(DemandePeer::NOM_PIECE_JOINTE_DEMANDE);
            $criteria->addSelectColumn(DemandePeer::REVISION);
            $criteria->addSelectColumn(DemandePeer::CONTENU_PIECE_JOINTE);
            $criteria->addSelectColumn(DemandePeer::NOM_CITOYEN);
            $criteria->addSelectColumn(DemandePeer::PRENOM_CITOYEN);
            $criteria->addSelectColumn(DemandePeer::EMAIL_CITOYEN);
            $criteria->addSelectColumn(DemandePeer::TEL_CITOYEN);
            $criteria->addSelectColumn(DemandePeer::TELEPHONE_PORTABLE);
            $criteria->addSelectColumn(DemandePeer::ADRESSE_CITOYEN_1);
            $criteria->addSelectColumn(DemandePeer::ADRESSE_CITOYEN_2);
            $criteria->addSelectColumn(DemandePeer::CODE_POSTAL_CITOYEN);
            $criteria->addSelectColumn(DemandePeer::LOCALITE_CITOYEN);
            $criteria->addSelectColumn(DemandePeer::IDENTIFIANT_APP_MOBILE_CITOYEN);
            $criteria->addSelectColumn(DemandePeer::TYPE_DEVICE);
            $criteria->addSelectColumn(DemandePeer::DATE_DEPOT_DEMANDE);
            $criteria->addSelectColumn(DemandePeer::DATE_TRAITEMENT_DEMANDE);
            $criteria->addSelectColumn(DemandePeer::DATE_CLOTURE_DEMANDE);
            $criteria->addSelectColumn(DemandePeer::DATE_REOUVERTURE_DEMANDE);
            $criteria->addSelectColumn(DemandePeer::DUREE_AVANT_TRAITEMENT);
            $criteria->addSelectColumn(DemandePeer::DUREE_TRAITEMENT);
            $criteria->addSelectColumn(DemandePeer::MOTIF_REOUVERTIR);
            $criteria->addSelectColumn(DemandePeer::CLOTURER_PAR);
            $criteria->addSelectColumn(DemandePeer::PAYS);
            $criteria->addSelectColumn(DemandePeer::NOM_AGENT_FR);
            $criteria->addSelectColumn(DemandePeer::NOM_AGENT_AR);
            $criteria->addSelectColumn(DemandePeer::ID_THEME_CITOYEN);
            $criteria->addSelectColumn(DemandePeer::ID_THEME_EN_COURS);
            $criteria->addSelectColumn(DemandePeer::DATE_REPONSE);
            $criteria->addSelectColumn(DemandePeer::DATE_STATUT);
            $criteria->addSelectColumn(DemandePeer::ID_REGION_AFFECTATION);
            $criteria->addSelectColumn(DemandePeer::ID_PROVINCE_AFFECTATION);
            $criteria->addSelectColumn(DemandePeer::ID_COMMUNE_AFFECTATION);
            $criteria->addSelectColumn(DemandePeer::ORGANISATION);
            $criteria->addSelectColumn(DemandePeer::ID_ORIGINE);
            $criteria->addSelectColumn(DemandePeer::ID_AGENT_CREATEUR);
            $criteria->addSelectColumn(DemandePeer::ID_ENTITE_CREATRICE);
            $criteria->addSelectColumn(DemandePeer::SUPPRIME);
            $criteria->addSelectColumn(DemandePeer::SOURCE);
            $criteria->addSelectColumn(DemandePeer::DETAIL_SOURCE);
            $criteria->addSelectColumn(DemandePeer::FORMAT);
            $criteria->addSelectColumn(DemandePeer::REFERENCE_INTERNE);
            $criteria->addSelectColumn(DemandePeer::ID_REGION);
            $criteria->addSelectColumn(DemandePeer::ID_PROVINCE);
            $criteria->addSelectColumn(DemandePeer::ID_PAYS);
            $criteria->addSelectColumn(DemandePeer::DATE_CREATION_DEMANDE);
            $criteria->addSelectColumn(DemandePeer::ID_ENTITE_CONCERNEE);
            $criteria->addSelectColumn(DemandePeer::NOM_ENTITE_CONCERNEE_FR);
            $criteria->addSelectColumn(DemandePeer::NOM_ENTITE_CONCERNEE_AR);
            $criteria->addSelectColumn(DemandePeer::ID_ENTITE_CONCERNEE_CITOYEN);
            $criteria->addSelectColumn(DemandePeer::NOM_ENTITE_CONCERNEE_CITOYEN_FR);
            $criteria->addSelectColumn(DemandePeer::NOM_ENTITE_CONCERNEE_CITOYEN_AR);
            $criteria->addSelectColumn(DemandePeer::TYPE_REQUERANT);
            $criteria->addSelectColumn(DemandePeer::CANAL_DEPOT);
            $criteria->addSelectColumn(DemandePeer::ID_EXTERNE);
            $criteria->addSelectColumn(DemandePeer::DATE_ENVOI_REPONSE);
            $criteria->addSelectColumn(DemandePeer::ETAT_ENVOI_REPONSE);
            $criteria->addSelectColumn(DemandePeer::ETAT_ENVOI);
            $criteria->addSelectColumn(DemandePeer::DATE_ENVOI);
            $criteria->addSelectColumn(DemandePeer::NUMERO_EXTERNE);
            $criteria->addSelectColumn(DemandePeer::OBJET_DEMANDE);
            $criteria->addSelectColumn(DemandePeer::TAG_INTERFACE);
            $criteria->addSelectColumn(DemandePeer::CHAMP_SUPP_1);
            $criteria->addSelectColumn(DemandePeer::CHAMP_SUPP_2);
            $criteria->addSelectColumn(DemandePeer::CHAMP_SUPP_3);
            $criteria->addSelectColumn(DemandePeer::CHAMP_SUPP_4);
            $criteria->addSelectColumn(DemandePeer::CHAMP_SUPP_5);
            $criteria->addSelectColumn(DemandePeer::TYPE_DEMANDE);
            $criteria->addSelectColumn(DemandePeer::ID_AGENT_DESTINATAIRE);
            $criteria->addSelectColumn(DemandePeer::NOM_AGENT_DESTINATAIRE_FR);
            $criteria->addSelectColumn(DemandePeer::PRENOM_AGENT_DESTINATAIRE_FR);
            $criteria->addSelectColumn(DemandePeer::NOM_AGENT_DESTINATAIRE_AR);
            $criteria->addSelectColumn(DemandePeer::PRENOM_AGENT_DESTINATAIRE_AR);
            $criteria->addSelectColumn(DemandePeer::ID_AGENT_SIGNATAIRE);
            $criteria->addSelectColumn(DemandePeer::NOM_AGENT_SIGNATAIRE_FR);
            $criteria->addSelectColumn(DemandePeer::NOM_AGENT_SIGNATAIRE_AR);
            $criteria->addSelectColumn(DemandePeer::PRENOM_AGENT_SIGNATAIRE_AR);
            $criteria->addSelectColumn(DemandePeer::PRENOM_AGENT_SIGNATAIRE_FR);
            $criteria->addSelectColumn(DemandePeer::ID_AGENT_EMETTEUR);
            $criteria->addSelectColumn(DemandePeer::NOM_AGENT_EMETTEUR_FR);
            $criteria->addSelectColumn(DemandePeer::NOM_AGENT_EMETTEUR_AR);
            $criteria->addSelectColumn(DemandePeer::PRENOM_AGENT_EMETTEUR_AR);
            $criteria->addSelectColumn(DemandePeer::PRENOM_AGENT_EMETTEUR_FR);
            $criteria->addSelectColumn(DemandePeer::REPONSE_OBLIGATOIRE);
            $criteria->addSelectColumn(DemandePeer::CODE_DEMANDE);
            $criteria->addSelectColumn(DemandePeer::CODE_PROVISOIRE);
            $criteria->addSelectColumn(DemandePeer::TAG_GATEWAY);
            $criteria->addSelectColumn(DemandePeer::ID_UTILISATEUR_GATEWAY);
            $criteria->addSelectColumn(DemandePeer::CHAMP_SUPP_THEME_1);
            $criteria->addSelectColumn(DemandePeer::CHAMP_SUPP_THEME_2);
            $criteria->addSelectColumn(DemandePeer::CHAMP_SUPP_THEME_3);
            $criteria->addSelectColumn(DemandePeer::CHAMP_SUPP_THEME_4);
            $criteria->addSelectColumn(DemandePeer::CHAMP_SUPP_THEME_5);
            $criteria->addSelectColumn(DemandePeer::ID_TYPE_THEME);
            $criteria->addSelectColumn(DemandePeer::ID_ETAPE_EN_COURS);
            $criteria->addSelectColumn(DemandePeer::NUMERO_ETAPE_ENCOURS);
            $criteria->addSelectColumn(DemandePeer::NOMBRE_ETAPES);
            $criteria->addSelectColumn(DemandePeer::DERNIER_MESSAGE);
            $criteria->addSelectColumn(DemandePeer::LIBELLE_ETAPE_ENCOURS);
            $criteria->addSelectColumn(DemandePeer::DERNIER_ACTEUR);
            $criteria->addSelectColumn(DemandePeer::DATE_REPONSE_ETAPE);
            $criteria->addSelectColumn(DemandePeer::ID_ENTITE_RELANCE);
            $criteria->addSelectColumn(DemandePeer::ID_AGENT_RELANCE);
            $criteria->addSelectColumn(DemandePeer::IMPORTANT);
            $criteria->addSelectColumn(DemandePeer::DATE_ECHEANCE_REPONSE_PROCHE);
            $criteria->addSelectColumn(DemandePeer::URL_EXTERNE);
            $criteria->addSelectColumn(DemandePeer::CLOTURE_AUTOMATIQUE);
            $criteria->addSelectColumn(DemandePeer::DELAI_TRAITEMENT_OUVRABLE);
            $criteria->addSelectColumn(DemandePeer::ACTEUR_EXTERNE);
            $criteria->addSelectColumn(DemandePeer::DELAI_TRAITEMENT);
            $criteria->addSelectColumn(DemandePeer::OBJET_MODIFIE);
            $criteria->addSelectColumn(DemandePeer::CONFIDENTIEL);
            $criteria->addSelectColumn(DemandePeer::DELAI_COMPLEMENT);
            $criteria->addSelectColumn(DemandePeer::ERREURS_DETECTES);
            $criteria->addSelectColumn(DemandePeer::ID_DEMANDE_ORIGINE);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.ID_AGENT');
            $criteria->addSelectColumn($alias . '.ID_COMMUNE');
            $criteria->addSelectColumn($alias . '.ID_SERVICE');
            $criteria->addSelectColumn($alias . '.ID_ENTITE');
            $criteria->addSelectColumn($alias . '.ID_ORGANISME');
            $criteria->addSelectColumn($alias . '.NUMERO_DEMANDE');
            $criteria->addSelectColumn($alias . '.DETAIL_DEMANDE');
            $criteria->addSelectColumn($alias . '.STATUT_DEMANDE');
            $criteria->addSelectColumn($alias . '.LATITUDE_DEMANDE');
            $criteria->addSelectColumn($alias . '.LONGITUDE_DEMANDE');
            $criteria->addSelectColumn($alias . '.ADRESSE_DEMANDE');
            $criteria->addSelectColumn($alias . '.ID_PIECE_JOINTE_DEMANDE');
            $criteria->addSelectColumn($alias . '.NOM_PIECE_JOINTE_DEMANDE');
            $criteria->addSelectColumn($alias . '.REVISION');
            $criteria->addSelectColumn($alias . '.CONTENU_PIECE_JOINTE');
            $criteria->addSelectColumn($alias . '.NOM_CITOYEN');
            $criteria->addSelectColumn($alias . '.PRENOM_CITOYEN');
            $criteria->addSelectColumn($alias . '.EMAIL_CITOYEN');
            $criteria->addSelectColumn($alias . '.TEL_CITOYEN');
            $criteria->addSelectColumn($alias . '.TELEPHONE_PORTABLE');
            $criteria->addSelectColumn($alias . '.ADRESSE_CITOYEN_1');
            $criteria->addSelectColumn($alias . '.ADRESSE_CITOYEN_2');
            $criteria->addSelectColumn($alias . '.CODE_POSTAL_CITOYEN');
            $criteria->addSelectColumn($alias . '.LOCALITE_CITOYEN');
            $criteria->addSelectColumn($alias . '.IDENTIFIANT_APP_MOBILE_CITOYEN');
            $criteria->addSelectColumn($alias . '.TYPE_DEVICE');
            $criteria->addSelectColumn($alias . '.DATE_DEPOT_DEMANDE');
            $criteria->addSelectColumn($alias . '.DATE_TRAITEMENT_DEMANDE');
            $criteria->addSelectColumn($alias . '.DATE_CLOTURE_DEMANDE');
            $criteria->addSelectColumn($alias . '.DATE_REOUVERTURE_DEMANDE');
            $criteria->addSelectColumn($alias . '.DUREE_AVANT_TRAITEMENT');
            $criteria->addSelectColumn($alias . '.DUREE_TRAITEMENT');
            $criteria->addSelectColumn($alias . '.MOTIF_REOUVERTIR');
            $criteria->addSelectColumn($alias . '.CLOTURER_PAR');
            $criteria->addSelectColumn($alias . '.PAYS');
            $criteria->addSelectColumn($alias . '.NOM_AGENT_FR');
            $criteria->addSelectColumn($alias . '.NOM_AGENT_AR');
            $criteria->addSelectColumn($alias . '.ID_THEME_CITOYEN');
            $criteria->addSelectColumn($alias . '.ID_THEME_EN_COURS');
            $criteria->addSelectColumn($alias . '.DATE_REPONSE');
            $criteria->addSelectColumn($alias . '.DATE_STATUT');
            $criteria->addSelectColumn($alias . '.ID_REGION_AFFECTATION');
            $criteria->addSelectColumn($alias . '.ID_PROVINCE_AFFECTATION');
            $criteria->addSelectColumn($alias . '.ID_COMMUNE_AFFECTATION');
            $criteria->addSelectColumn($alias . '.ORGANISATION');
            $criteria->addSelectColumn($alias . '.ID_ORIGINE');
            $criteria->addSelectColumn($alias . '.ID_AGENT_CREATEUR');
            $criteria->addSelectColumn($alias . '.ID_ENTITE_CREATRICE');
            $criteria->addSelectColumn($alias . '.SUPPRIME');
            $criteria->addSelectColumn($alias . '.SOURCE');
            $criteria->addSelectColumn($alias . '.DETAIL_SOURCE');
            $criteria->addSelectColumn($alias . '.FORMAT');
            $criteria->addSelectColumn($alias . '.REFERENCE_INTERNE');
            $criteria->addSelectColumn($alias . '.ID_REGION');
            $criteria->addSelectColumn($alias . '.ID_PROVINCE');
            $criteria->addSelectColumn($alias . '.ID_PAYS');
            $criteria->addSelectColumn($alias . '.DATE_CREATION_DEMANDE');
            $criteria->addSelectColumn($alias . '.ID_ENTITE_CONCERNEE');
            $criteria->addSelectColumn($alias . '.NOM_ENTITE_CONCERNEE_FR');
            $criteria->addSelectColumn($alias . '.NOM_ENTITE_CONCERNEE_AR');
            $criteria->addSelectColumn($alias . '.ID_ENTITE_CONCERNEE_CITOYEN');
            $criteria->addSelectColumn($alias . '.NOM_ENTITE_CONCERNEE_CITOYEN_FR');
            $criteria->addSelectColumn($alias . '.NOM_ENTITE_CONCERNEE_CITOYEN_AR');
            $criteria->addSelectColumn($alias . '.TYPE_REQUERANT');
            $criteria->addSelectColumn($alias . '.CANAL_DEPOT');
            $criteria->addSelectColumn($alias . '.ID_EXTERNE');
            $criteria->addSelectColumn($alias . '.DATE_ENVOI_REPONSE');
            $criteria->addSelectColumn($alias . '.ETAT_ENVOI_REPONSE');
            $criteria->addSelectColumn($alias . '.ETAT_ENVOI');
            $criteria->addSelectColumn($alias . '.DATE_ENVOI');
            $criteria->addSelectColumn($alias . '.NUMERO_EXTERNE');
            $criteria->addSelectColumn($alias . '.OBJET_DEMANDE');
            $criteria->addSelectColumn($alias . '.TAG_INTERFACE');
            $criteria->addSelectColumn($alias . '.CHAMP_SUPP_1');
            $criteria->addSelectColumn($alias . '.CHAMP_SUPP_2');
            $criteria->addSelectColumn($alias . '.CHAMP_SUPP_3');
            $criteria->addSelectColumn($alias . '.CHAMP_SUPP_4');
            $criteria->addSelectColumn($alias . '.CHAMP_SUPP_5');
            $criteria->addSelectColumn($alias . '.TYPE_DEMANDE');
            $criteria->addSelectColumn($alias . '.ID_AGENT_DESTINATAIRE');
            $criteria->addSelectColumn($alias . '.NOM_AGENT_DESTINATAIRE_FR');
            $criteria->addSelectColumn($alias . '.PRENOM_AGENT_DESTINATAIRE_FR');
            $criteria->addSelectColumn($alias . '.NOM_AGENT_DESTINATAIRE_AR');
            $criteria->addSelectColumn($alias . '.PRENOM_AGENT_DESTINATAIRE_AR');
            $criteria->addSelectColumn($alias . '.ID_AGENT_SIGNATAIRE');
            $criteria->addSelectColumn($alias . '.NOM_AGENT_SIGNATAIRE_FR');
            $criteria->addSelectColumn($alias . '.NOM_AGENT_SIGNATAIRE_AR');
            $criteria->addSelectColumn($alias . '.PRENOM_AGENT_SIGNATAIRE_AR');
            $criteria->addSelectColumn($alias . '.PRENOM_AGENT_SIGNATAIRE_FR');
            $criteria->addSelectColumn($alias . '.ID_AGENT_EMETTEUR');
            $criteria->addSelectColumn($alias . '.NOM_AGENT_EMETTEUR_FR');
            $criteria->addSelectColumn($alias . '.NOM_AGENT_EMETTEUR_AR');
            $criteria->addSelectColumn($alias . '.PRENOM_AGENT_EMETTEUR_AR');
            $criteria->addSelectColumn($alias . '.PRENOM_AGENT_EMETTEUR_FR');
            $criteria->addSelectColumn($alias . '.REPONSE_OBLIGATOIRE');
            $criteria->addSelectColumn($alias . '.CODE_DEMANDE');
            $criteria->addSelectColumn($alias . '.CODE_PROVISOIRE');
            $criteria->addSelectColumn($alias . '.TAG_GATEWAY');
            $criteria->addSelectColumn($alias . '.ID_UTILISATEUR_GATEWAY');
            $criteria->addSelectColumn($alias . '.CHAMP_SUPP_THEME_1');
            $criteria->addSelectColumn($alias . '.CHAMP_SUPP_THEME_2');
            $criteria->addSelectColumn($alias . '.CHAMP_SUPP_THEME_3');
            $criteria->addSelectColumn($alias . '.CHAMP_SUPP_THEME_4');
            $criteria->addSelectColumn($alias . '.CHAMP_SUPP_THEME_5');
            $criteria->addSelectColumn($alias . '.ID_TYPE_THEME');
            $criteria->addSelectColumn($alias . '.ID_ETAPE_EN_COURS');
            $criteria->addSelectColumn($alias . '.NUMERO_ETAPE_ENCOURS');
            $criteria->addSelectColumn($alias . '.NOMBRE_ETAPES');
            $criteria->addSelectColumn($alias . '.DERNIER_MESSAGE');
            $criteria->addSelectColumn($alias . '.LIBELLE_ETAPE_ENCOURS');
            $criteria->addSelectColumn($alias . '.DERNIER_ACTEUR');
            $criteria->addSelectColumn($alias . '.DATE_REPONSE_ETAPE');
            $criteria->addSelectColumn($alias . '.ID_ENTITE_RELANCE');
            $criteria->addSelectColumn($alias . '.ID_AGENT_RELANCE');
            $criteria->addSelectColumn($alias . '.IMPORTANT');
            $criteria->addSelectColumn($alias . '.DATE_ECHEANCE_REPONSE_PROCHE');
            $criteria->addSelectColumn($alias . '.URL_EXTERNE');
            $criteria->addSelectColumn($alias . '.CLOTURE_AUTOMATIQUE');
            $criteria->addSelectColumn($alias . '.DELAI_TRAITEMENT_OUVRABLE');
            $criteria->addSelectColumn($alias . '.ACTEUR_EXTERNE');
            $criteria->addSelectColumn($alias . '.DELAI_TRAITEMENT');
            $criteria->addSelectColumn($alias . '.OBJET_MODIFIE');
            $criteria->addSelectColumn($alias . '.CONFIDENTIEL');
            $criteria->addSelectColumn($alias . '.DELAI_COMPLEMENT');
            $criteria->addSelectColumn($alias . '.ERREURS_DETECTES');
            $criteria->addSelectColumn($alias . '.ID_DEMANDE_ORIGINE');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(DemandePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DemandePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(DemandePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(DemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 Demande
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = DemandePeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return DemandePeer::populateObjects(DemandePeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            DemandePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(DemandePeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      Demande $obj A Demande object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            DemandePeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Demande object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Demande) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Demande object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(DemandePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   Demande Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(DemandePeer::$instances[$key])) {
                return DemandePeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }
    
    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (DemandePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        DemandePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to demande
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }
    
    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();
    
        // set the class once to avoid overhead in the loop
        $cls = DemandePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = DemandePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = DemandePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                DemandePeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Demande object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = DemandePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = DemandePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + DemandePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = DemandePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            DemandePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(DemandePeer::DATABASE_NAME)->getTable(DemandePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseDemandePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseDemandePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new DemandeTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return DemandePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Demande or Criteria object.
     *
     * @param      mixed $values Criteria or Demande object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Demande object
        }

        if ($criteria->containsKey(DemandePeer::ID) && $criteria->keyContainsValue(DemandePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.DemandePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(DemandePeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Demande or Criteria object.
     *
     * @param      mixed $values Criteria or Demande object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(DemandePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(DemandePeer::ID);
            $value = $criteria->remove(DemandePeer::ID);
            if ($value) {
                $selectCriteria->add(DemandePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DemandePeer::TABLE_NAME);
            }

        } else { // $values is Demande object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(DemandePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the demande table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(DemandePeer::TABLE_NAME, $con, DemandePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            DemandePeer::clearInstancePool();
            DemandePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Demande or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Demande object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(DemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            DemandePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Demande) { // it's a model object
            // invalidate the cache for this single object
            DemandePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(DemandePeer::DATABASE_NAME);
            $criteria->add(DemandePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                DemandePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(DemandePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            DemandePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Demande object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      Demande $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(DemandePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(DemandePeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(DemandePeer::DATABASE_NAME, DemandePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Demande
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = DemandePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(DemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(DemandePeer::DATABASE_NAME);
        $criteria->add(DemandePeer::ID, $pk);

        $v = DemandePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Demande[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(DemandePeer::DATABASE_NAME);
            $criteria->add(DemandePeer::ID, $pks, Criteria::IN);
            $objs = DemandePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseDemandePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseDemandePeer::buildTableMap();

