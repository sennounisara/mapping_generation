<?php


/**
 * Base static class for performing query and update operations on the 'caution_restitution' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCautionRestitutionPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'caution_restitution';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonCautionRestitution';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonCautionRestitutionTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 37;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 37;

    /** the column name for the ID field */
    const ID = 'caution_restitution.ID';

    /** the column name for the ID_CAUTION_DEMANDE field */
    const ID_CAUTION_DEMANDE = 'caution_restitution.ID_CAUTION_DEMANDE';

    /** the column name for the ID_ENTREPRISE field */
    const ID_ENTREPRISE = 'caution_restitution.ID_ENTREPRISE';

    /** the column name for the ID_INSCRIT field */
    const ID_INSCRIT = 'caution_restitution.ID_INSCRIT';

    /** the column name for the RAISON_SOCIALE field */
    const RAISON_SOCIALE = 'caution_restitution.RAISON_SOCIALE';

    /** the column name for the REF_CONSULTATION field */
    const REF_CONSULTATION = 'caution_restitution.REF_CONSULTATION';

    /** the column name for the ACRONYME_ORG field */
    const ACRONYME_ORG = 'caution_restitution.ACRONYME_ORG';

    /** the column name for the ID_ACHETEUR_SERVICE field */
    const ID_ACHETEUR_SERVICE = 'caution_restitution.ID_ACHETEUR_SERVICE';

    /** the column name for the ID_STATUT field */
    const ID_STATUT = 'caution_restitution.ID_STATUT';

    /** the column name for the TYPE_ANNULATION field */
    const TYPE_ANNULATION = 'caution_restitution.TYPE_ANNULATION';

    /** the column name for the NUM_COMPTE_VIREMENT field */
    const NUM_COMPTE_VIREMENT = 'caution_restitution.NUM_COMPTE_VIREMENT';

    /** the column name for the ID_BLOB_DEMANDE field */
    const ID_BLOB_DEMANDE = 'caution_restitution.ID_BLOB_DEMANDE';

    /** the column name for the NOM_DOC_DEMANDE field */
    const NOM_DOC_DEMANDE = 'caution_restitution.NOM_DOC_DEMANDE';

    /** the column name for the ID_BLOB_MAINLEVEE field */
    const ID_BLOB_MAINLEVEE = 'caution_restitution.ID_BLOB_MAINLEVEE';

    /** the column name for the NOM_DOC_MAINLEVEE field */
    const NOM_DOC_MAINLEVEE = 'caution_restitution.NOM_DOC_MAINLEVEE';

    /** the column name for the DATE_CREA field */
    const DATE_CREA = 'caution_restitution.DATE_CREA';

    /** the column name for the DATE_MODIF field */
    const DATE_MODIF = 'caution_restitution.DATE_MODIF';

    /** the column name for the DATE_DEPOT field */
    const DATE_DEPOT = 'caution_restitution.DATE_DEPOT';

    /** the column name for the MOTIF_REJET_ACHETEUR field */
    const MOTIF_REJET_ACHETEUR = 'caution_restitution.MOTIF_REJET_ACHETEUR';

    /** the column name for the ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE field */
    const ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE = 'caution_restitution.ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE';

    /** the column name for the ID_AGENT_ACHETEUR_SIGNATAIRE field */
    const ID_AGENT_ACHETEUR_SIGNATAIRE = 'caution_restitution.ID_AGENT_ACHETEUR_SIGNATAIRE';

    /** the column name for the ID_AGENT_ACHETEUR_VALIDATION field */
    const ID_AGENT_ACHETEUR_VALIDATION = 'caution_restitution.ID_AGENT_ACHETEUR_VALIDATION';

    /** the column name for the ID_AGENT_ACHETEUR_REJET field */
    const ID_AGENT_ACHETEUR_REJET = 'caution_restitution.ID_AGENT_ACHETEUR_REJET';

    /** the column name for the DATE_GENERATION_MAINLEVEE field */
    const DATE_GENERATION_MAINLEVEE = 'caution_restitution.DATE_GENERATION_MAINLEVEE';

    /** the column name for the DATE_SIGNATURE field */
    const DATE_SIGNATURE = 'caution_restitution.DATE_SIGNATURE';

    /** the column name for the DATE_VALIDATION_ACHETEUR field */
    const DATE_VALIDATION_ACHETEUR = 'caution_restitution.DATE_VALIDATION_ACHETEUR';

    /** the column name for the DATE_REJET_ACHETEUR field */
    const DATE_REJET_ACHETEUR = 'caution_restitution.DATE_REJET_ACHETEUR';

    /** the column name for the DATE_PRISE_EN_CHARGE_BANQUE field */
    const DATE_PRISE_EN_CHARGE_BANQUE = 'caution_restitution.DATE_PRISE_EN_CHARGE_BANQUE';

    /** the column name for the DATE_VALIDATION_BANQUE field */
    const DATE_VALIDATION_BANQUE = 'caution_restitution.DATE_VALIDATION_BANQUE';

    /** the column name for the DATE_REJET_BANQUE field */
    const DATE_REJET_BANQUE = 'caution_restitution.DATE_REJET_BANQUE';

    /** the column name for the ID_AGENT_BANQUIER_PRISE_EN_CHARGE field */
    const ID_AGENT_BANQUIER_PRISE_EN_CHARGE = 'caution_restitution.ID_AGENT_BANQUIER_PRISE_EN_CHARGE';

    /** the column name for the ID_AGENT_BANQUIER_VALIDATION field */
    const ID_AGENT_BANQUIER_VALIDATION = 'caution_restitution.ID_AGENT_BANQUIER_VALIDATION';

    /** the column name for the ID_AGENT_BANQUIER_REJET field */
    const ID_AGENT_BANQUIER_REJET = 'caution_restitution.ID_AGENT_BANQUIER_REJET';

    /** the column name for the MOTIF_REJET_BANQUIER field */
    const MOTIF_REJET_BANQUIER = 'caution_restitution.MOTIF_REJET_BANQUIER';

    /** the column name for the ID_VILLE field */
    const ID_VILLE = 'caution_restitution.ID_VILLE';

    /** the column name for the CODE_AGENCE field */
    const CODE_AGENCE = 'caution_restitution.CODE_AGENCE';

    /** the column name for the CODE_VILLE field */
    const CODE_VILLE = 'caution_restitution.CODE_VILLE';

    /** The enumerated values for the TYPE_ANNULATION field */
    const TYPE_ANNULATION_1 = '1';
    const TYPE_ANNULATION_2 = '2';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonCautionRestitution objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonCautionRestitution[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonCautionRestitutionPeer::$fieldNames[CommonCautionRestitutionPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdCautionDemande', 'IdEntreprise', 'IdInscrit', 'RaisonSociale', 'RefConsultation', 'AcronymeOrg', 'IdAcheteurService', 'IdStatut', 'TypeAnnulation', 'NumCompteVirement', 'IdBlobDemande', 'NomDocDemande', 'IdBlobMainlevee', 'NomDocMainlevee', 'DateCrea', 'DateModif', 'DateDepot', 'MotifRejetAcheteur', 'IdAgentAcheteurGenerationMainlevee', 'IdAgentAcheteurSignataire', 'IdAgentAcheteurValidation', 'IdAgentAcheteurRejet', 'DateGenerationMainlevee', 'DateSignature', 'DateValidationAcheteur', 'DateRejetAcheteur', 'DatePriseEnChargeBanque', 'DateValidationBanque', 'DateRejetBanque', 'IdAgentBanquierPriseEnCharge', 'IdAgentBanquierValidation', 'IdAgentBanquierRejet', 'MotifRejetBanquier', 'IdVille', 'CodeAgence', 'CodeVille', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idCautionDemande', 'idEntreprise', 'idInscrit', 'raisonSociale', 'refConsultation', 'acronymeOrg', 'idAcheteurService', 'idStatut', 'typeAnnulation', 'numCompteVirement', 'idBlobDemande', 'nomDocDemande', 'idBlobMainlevee', 'nomDocMainlevee', 'dateCrea', 'dateModif', 'dateDepot', 'motifRejetAcheteur', 'idAgentAcheteurGenerationMainlevee', 'idAgentAcheteurSignataire', 'idAgentAcheteurValidation', 'idAgentAcheteurRejet', 'dateGenerationMainlevee', 'dateSignature', 'dateValidationAcheteur', 'dateRejetAcheteur', 'datePriseEnChargeBanque', 'dateValidationBanque', 'dateRejetBanque', 'idAgentBanquierPriseEnCharge', 'idAgentBanquierValidation', 'idAgentBanquierRejet', 'motifRejetBanquier', 'idVille', 'codeAgence', 'codeVille', ),
        BasePeer::TYPE_COLNAME => array (CommonCautionRestitutionPeer::ID, CommonCautionRestitutionPeer::ID_CAUTION_DEMANDE, CommonCautionRestitutionPeer::ID_ENTREPRISE, CommonCautionRestitutionPeer::ID_INSCRIT, CommonCautionRestitutionPeer::RAISON_SOCIALE, CommonCautionRestitutionPeer::REF_CONSULTATION, CommonCautionRestitutionPeer::ACRONYME_ORG, CommonCautionRestitutionPeer::ID_ACHETEUR_SERVICE, CommonCautionRestitutionPeer::ID_STATUT, CommonCautionRestitutionPeer::TYPE_ANNULATION, CommonCautionRestitutionPeer::NUM_COMPTE_VIREMENT, CommonCautionRestitutionPeer::ID_BLOB_DEMANDE, CommonCautionRestitutionPeer::NOM_DOC_DEMANDE, CommonCautionRestitutionPeer::ID_BLOB_MAINLEVEE, CommonCautionRestitutionPeer::NOM_DOC_MAINLEVEE, CommonCautionRestitutionPeer::DATE_CREA, CommonCautionRestitutionPeer::DATE_MODIF, CommonCautionRestitutionPeer::DATE_DEPOT, CommonCautionRestitutionPeer::MOTIF_REJET_ACHETEUR, CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE, CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_SIGNATAIRE, CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_VALIDATION, CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_REJET, CommonCautionRestitutionPeer::DATE_GENERATION_MAINLEVEE, CommonCautionRestitutionPeer::DATE_SIGNATURE, CommonCautionRestitutionPeer::DATE_VALIDATION_ACHETEUR, CommonCautionRestitutionPeer::DATE_REJET_ACHETEUR, CommonCautionRestitutionPeer::DATE_PRISE_EN_CHARGE_BANQUE, CommonCautionRestitutionPeer::DATE_VALIDATION_BANQUE, CommonCautionRestitutionPeer::DATE_REJET_BANQUE, CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_PRISE_EN_CHARGE, CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_VALIDATION, CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_REJET, CommonCautionRestitutionPeer::MOTIF_REJET_BANQUIER, CommonCautionRestitutionPeer::ID_VILLE, CommonCautionRestitutionPeer::CODE_AGENCE, CommonCautionRestitutionPeer::CODE_VILLE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_CAUTION_DEMANDE', 'ID_ENTREPRISE', 'ID_INSCRIT', 'RAISON_SOCIALE', 'REF_CONSULTATION', 'ACRONYME_ORG', 'ID_ACHETEUR_SERVICE', 'ID_STATUT', 'TYPE_ANNULATION', 'NUM_COMPTE_VIREMENT', 'ID_BLOB_DEMANDE', 'NOM_DOC_DEMANDE', 'ID_BLOB_MAINLEVEE', 'NOM_DOC_MAINLEVEE', 'DATE_CREA', 'DATE_MODIF', 'DATE_DEPOT', 'MOTIF_REJET_ACHETEUR', 'ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE', 'ID_AGENT_ACHETEUR_SIGNATAIRE', 'ID_AGENT_ACHETEUR_VALIDATION', 'ID_AGENT_ACHETEUR_REJET', 'DATE_GENERATION_MAINLEVEE', 'DATE_SIGNATURE', 'DATE_VALIDATION_ACHETEUR', 'DATE_REJET_ACHETEUR', 'DATE_PRISE_EN_CHARGE_BANQUE', 'DATE_VALIDATION_BANQUE', 'DATE_REJET_BANQUE', 'ID_AGENT_BANQUIER_PRISE_EN_CHARGE', 'ID_AGENT_BANQUIER_VALIDATION', 'ID_AGENT_BANQUIER_REJET', 'MOTIF_REJET_BANQUIER', 'ID_VILLE', 'CODE_AGENCE', 'CODE_VILLE', ),
        BasePeer::TYPE_FIELDNAME => array ('ID', 'ID_CAUTION_DEMANDE', 'ID_ENTREPRISE', 'ID_INSCRIT', 'RAISON_SOCIALE', 'REF_CONSULTATION', 'ACRONYME_ORG', 'ID_ACHETEUR_SERVICE', 'ID_STATUT', 'TYPE_ANNULATION', 'NUM_COMPTE_VIREMENT', 'ID_BLOB_DEMANDE', 'NOM_DOC_DEMANDE', 'ID_BLOB_MAINLEVEE', 'NOM_DOC_MAINLEVEE', 'DATE_CREA', 'DATE_MODIF', 'DATE_DEPOT', 'MOTIF_REJET_ACHETEUR', 'ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE', 'ID_AGENT_ACHETEUR_SIGNATAIRE', 'ID_AGENT_ACHETEUR_VALIDATION', 'ID_AGENT_ACHETEUR_REJET', 'DATE_GENERATION_MAINLEVEE', 'DATE_SIGNATURE', 'DATE_VALIDATION_ACHETEUR', 'DATE_REJET_ACHETEUR', 'DATE_PRISE_EN_CHARGE_BANQUE', 'DATE_VALIDATION_BANQUE', 'DATE_REJET_BANQUE', 'ID_AGENT_BANQUIER_PRISE_EN_CHARGE', 'ID_AGENT_BANQUIER_VALIDATION', 'ID_AGENT_BANQUIER_REJET', 'MOTIF_REJET_BANQUIER', 'ID_VILLE', 'CODE_AGENCE', 'CODE_VILLE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonCautionRestitutionPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdCautionDemande' => 1, 'IdEntreprise' => 2, 'IdInscrit' => 3, 'RaisonSociale' => 4, 'RefConsultation' => 5, 'AcronymeOrg' => 6, 'IdAcheteurService' => 7, 'IdStatut' => 8, 'TypeAnnulation' => 9, 'NumCompteVirement' => 10, 'IdBlobDemande' => 11, 'NomDocDemande' => 12, 'IdBlobMainlevee' => 13, 'NomDocMainlevee' => 14, 'DateCrea' => 15, 'DateModif' => 16, 'DateDepot' => 17, 'MotifRejetAcheteur' => 18, 'IdAgentAcheteurGenerationMainlevee' => 19, 'IdAgentAcheteurSignataire' => 20, 'IdAgentAcheteurValidation' => 21, 'IdAgentAcheteurRejet' => 22, 'DateGenerationMainlevee' => 23, 'DateSignature' => 24, 'DateValidationAcheteur' => 25, 'DateRejetAcheteur' => 26, 'DatePriseEnChargeBanque' => 27, 'DateValidationBanque' => 28, 'DateRejetBanque' => 29, 'IdAgentBanquierPriseEnCharge' => 30, 'IdAgentBanquierValidation' => 31, 'IdAgentBanquierRejet' => 32, 'MotifRejetBanquier' => 33, 'IdVille' => 34, 'CodeAgence' => 35, 'CodeVille' => 36, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idCautionDemande' => 1, 'idEntreprise' => 2, 'idInscrit' => 3, 'raisonSociale' => 4, 'refConsultation' => 5, 'acronymeOrg' => 6, 'idAcheteurService' => 7, 'idStatut' => 8, 'typeAnnulation' => 9, 'numCompteVirement' => 10, 'idBlobDemande' => 11, 'nomDocDemande' => 12, 'idBlobMainlevee' => 13, 'nomDocMainlevee' => 14, 'dateCrea' => 15, 'dateModif' => 16, 'dateDepot' => 17, 'motifRejetAcheteur' => 18, 'idAgentAcheteurGenerationMainlevee' => 19, 'idAgentAcheteurSignataire' => 20, 'idAgentAcheteurValidation' => 21, 'idAgentAcheteurRejet' => 22, 'dateGenerationMainlevee' => 23, 'dateSignature' => 24, 'dateValidationAcheteur' => 25, 'dateRejetAcheteur' => 26, 'datePriseEnChargeBanque' => 27, 'dateValidationBanque' => 28, 'dateRejetBanque' => 29, 'idAgentBanquierPriseEnCharge' => 30, 'idAgentBanquierValidation' => 31, 'idAgentBanquierRejet' => 32, 'motifRejetBanquier' => 33, 'idVille' => 34, 'codeAgence' => 35, 'codeVille' => 36, ),
        BasePeer::TYPE_COLNAME => array (CommonCautionRestitutionPeer::ID => 0, CommonCautionRestitutionPeer::ID_CAUTION_DEMANDE => 1, CommonCautionRestitutionPeer::ID_ENTREPRISE => 2, CommonCautionRestitutionPeer::ID_INSCRIT => 3, CommonCautionRestitutionPeer::RAISON_SOCIALE => 4, CommonCautionRestitutionPeer::REF_CONSULTATION => 5, CommonCautionRestitutionPeer::ACRONYME_ORG => 6, CommonCautionRestitutionPeer::ID_ACHETEUR_SERVICE => 7, CommonCautionRestitutionPeer::ID_STATUT => 8, CommonCautionRestitutionPeer::TYPE_ANNULATION => 9, CommonCautionRestitutionPeer::NUM_COMPTE_VIREMENT => 10, CommonCautionRestitutionPeer::ID_BLOB_DEMANDE => 11, CommonCautionRestitutionPeer::NOM_DOC_DEMANDE => 12, CommonCautionRestitutionPeer::ID_BLOB_MAINLEVEE => 13, CommonCautionRestitutionPeer::NOM_DOC_MAINLEVEE => 14, CommonCautionRestitutionPeer::DATE_CREA => 15, CommonCautionRestitutionPeer::DATE_MODIF => 16, CommonCautionRestitutionPeer::DATE_DEPOT => 17, CommonCautionRestitutionPeer::MOTIF_REJET_ACHETEUR => 18, CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE => 19, CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_SIGNATAIRE => 20, CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_VALIDATION => 21, CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_REJET => 22, CommonCautionRestitutionPeer::DATE_GENERATION_MAINLEVEE => 23, CommonCautionRestitutionPeer::DATE_SIGNATURE => 24, CommonCautionRestitutionPeer::DATE_VALIDATION_ACHETEUR => 25, CommonCautionRestitutionPeer::DATE_REJET_ACHETEUR => 26, CommonCautionRestitutionPeer::DATE_PRISE_EN_CHARGE_BANQUE => 27, CommonCautionRestitutionPeer::DATE_VALIDATION_BANQUE => 28, CommonCautionRestitutionPeer::DATE_REJET_BANQUE => 29, CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_PRISE_EN_CHARGE => 30, CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_VALIDATION => 31, CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_REJET => 32, CommonCautionRestitutionPeer::MOTIF_REJET_BANQUIER => 33, CommonCautionRestitutionPeer::ID_VILLE => 34, CommonCautionRestitutionPeer::CODE_AGENCE => 35, CommonCautionRestitutionPeer::CODE_VILLE => 36, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_CAUTION_DEMANDE' => 1, 'ID_ENTREPRISE' => 2, 'ID_INSCRIT' => 3, 'RAISON_SOCIALE' => 4, 'REF_CONSULTATION' => 5, 'ACRONYME_ORG' => 6, 'ID_ACHETEUR_SERVICE' => 7, 'ID_STATUT' => 8, 'TYPE_ANNULATION' => 9, 'NUM_COMPTE_VIREMENT' => 10, 'ID_BLOB_DEMANDE' => 11, 'NOM_DOC_DEMANDE' => 12, 'ID_BLOB_MAINLEVEE' => 13, 'NOM_DOC_MAINLEVEE' => 14, 'DATE_CREA' => 15, 'DATE_MODIF' => 16, 'DATE_DEPOT' => 17, 'MOTIF_REJET_ACHETEUR' => 18, 'ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE' => 19, 'ID_AGENT_ACHETEUR_SIGNATAIRE' => 20, 'ID_AGENT_ACHETEUR_VALIDATION' => 21, 'ID_AGENT_ACHETEUR_REJET' => 22, 'DATE_GENERATION_MAINLEVEE' => 23, 'DATE_SIGNATURE' => 24, 'DATE_VALIDATION_ACHETEUR' => 25, 'DATE_REJET_ACHETEUR' => 26, 'DATE_PRISE_EN_CHARGE_BANQUE' => 27, 'DATE_VALIDATION_BANQUE' => 28, 'DATE_REJET_BANQUE' => 29, 'ID_AGENT_BANQUIER_PRISE_EN_CHARGE' => 30, 'ID_AGENT_BANQUIER_VALIDATION' => 31, 'ID_AGENT_BANQUIER_REJET' => 32, 'MOTIF_REJET_BANQUIER' => 33, 'ID_VILLE' => 34, 'CODE_AGENCE' => 35, 'CODE_VILLE' => 36, ),
        BasePeer::TYPE_FIELDNAME => array ('ID' => 0, 'ID_CAUTION_DEMANDE' => 1, 'ID_ENTREPRISE' => 2, 'ID_INSCRIT' => 3, 'RAISON_SOCIALE' => 4, 'REF_CONSULTATION' => 5, 'ACRONYME_ORG' => 6, 'ID_ACHETEUR_SERVICE' => 7, 'ID_STATUT' => 8, 'TYPE_ANNULATION' => 9, 'NUM_COMPTE_VIREMENT' => 10, 'ID_BLOB_DEMANDE' => 11, 'NOM_DOC_DEMANDE' => 12, 'ID_BLOB_MAINLEVEE' => 13, 'NOM_DOC_MAINLEVEE' => 14, 'DATE_CREA' => 15, 'DATE_MODIF' => 16, 'DATE_DEPOT' => 17, 'MOTIF_REJET_ACHETEUR' => 18, 'ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE' => 19, 'ID_AGENT_ACHETEUR_SIGNATAIRE' => 20, 'ID_AGENT_ACHETEUR_VALIDATION' => 21, 'ID_AGENT_ACHETEUR_REJET' => 22, 'DATE_GENERATION_MAINLEVEE' => 23, 'DATE_SIGNATURE' => 24, 'DATE_VALIDATION_ACHETEUR' => 25, 'DATE_REJET_ACHETEUR' => 26, 'DATE_PRISE_EN_CHARGE_BANQUE' => 27, 'DATE_VALIDATION_BANQUE' => 28, 'DATE_REJET_BANQUE' => 29, 'ID_AGENT_BANQUIER_PRISE_EN_CHARGE' => 30, 'ID_AGENT_BANQUIER_VALIDATION' => 31, 'ID_AGENT_BANQUIER_REJET' => 32, 'MOTIF_REJET_BANQUIER' => 33, 'ID_VILLE' => 34, 'CODE_AGENCE' => 35, 'CODE_VILLE' => 36, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonCautionRestitutionPeer::TYPE_ANNULATION => array(
            CommonCautionRestitutionPeer::TYPE_ANNULATION_1,
            CommonCautionRestitutionPeer::TYPE_ANNULATION_2,
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
        $toNames = CommonCautionRestitutionPeer::getFieldNames($toType);
        $key = isset(CommonCautionRestitutionPeer::$fieldKeys[$fromType][$name]) ? CommonCautionRestitutionPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonCautionRestitutionPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonCautionRestitutionPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonCautionRestitutionPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonCautionRestitutionPeer::$enumValueSets;
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
        $valueSets = CommonCautionRestitutionPeer::getValueSets();

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
        $values = CommonCautionRestitutionPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonCautionRestitutionPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonCautionRestitutionPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::ID);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::ID_CAUTION_DEMANDE);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::ID_ENTREPRISE);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::ID_INSCRIT);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::RAISON_SOCIALE);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::REF_CONSULTATION);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::ACRONYME_ORG);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::ID_ACHETEUR_SERVICE);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::ID_STATUT);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::TYPE_ANNULATION);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::NUM_COMPTE_VIREMENT);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::ID_BLOB_DEMANDE);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::NOM_DOC_DEMANDE);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::ID_BLOB_MAINLEVEE);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::NOM_DOC_MAINLEVEE);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::DATE_CREA);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::DATE_MODIF);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::DATE_DEPOT);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::MOTIF_REJET_ACHETEUR);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_SIGNATAIRE);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_VALIDATION);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_REJET);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::DATE_GENERATION_MAINLEVEE);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::DATE_SIGNATURE);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::DATE_VALIDATION_ACHETEUR);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::DATE_REJET_ACHETEUR);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::DATE_PRISE_EN_CHARGE_BANQUE);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::DATE_VALIDATION_BANQUE);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::DATE_REJET_BANQUE);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_PRISE_EN_CHARGE);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_VALIDATION);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_REJET);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::MOTIF_REJET_BANQUIER);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::ID_VILLE);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::CODE_AGENCE);
            $criteria->addSelectColumn(CommonCautionRestitutionPeer::CODE_VILLE);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.ID_CAUTION_DEMANDE');
            $criteria->addSelectColumn($alias . '.ID_ENTREPRISE');
            $criteria->addSelectColumn($alias . '.ID_INSCRIT');
            $criteria->addSelectColumn($alias . '.RAISON_SOCIALE');
            $criteria->addSelectColumn($alias . '.REF_CONSULTATION');
            $criteria->addSelectColumn($alias . '.ACRONYME_ORG');
            $criteria->addSelectColumn($alias . '.ID_ACHETEUR_SERVICE');
            $criteria->addSelectColumn($alias . '.ID_STATUT');
            $criteria->addSelectColumn($alias . '.TYPE_ANNULATION');
            $criteria->addSelectColumn($alias . '.NUM_COMPTE_VIREMENT');
            $criteria->addSelectColumn($alias . '.ID_BLOB_DEMANDE');
            $criteria->addSelectColumn($alias . '.NOM_DOC_DEMANDE');
            $criteria->addSelectColumn($alias . '.ID_BLOB_MAINLEVEE');
            $criteria->addSelectColumn($alias . '.NOM_DOC_MAINLEVEE');
            $criteria->addSelectColumn($alias . '.DATE_CREA');
            $criteria->addSelectColumn($alias . '.DATE_MODIF');
            $criteria->addSelectColumn($alias . '.DATE_DEPOT');
            $criteria->addSelectColumn($alias . '.MOTIF_REJET_ACHETEUR');
            $criteria->addSelectColumn($alias . '.ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE');
            $criteria->addSelectColumn($alias . '.ID_AGENT_ACHETEUR_SIGNATAIRE');
            $criteria->addSelectColumn($alias . '.ID_AGENT_ACHETEUR_VALIDATION');
            $criteria->addSelectColumn($alias . '.ID_AGENT_ACHETEUR_REJET');
            $criteria->addSelectColumn($alias . '.DATE_GENERATION_MAINLEVEE');
            $criteria->addSelectColumn($alias . '.DATE_SIGNATURE');
            $criteria->addSelectColumn($alias . '.DATE_VALIDATION_ACHETEUR');
            $criteria->addSelectColumn($alias . '.DATE_REJET_ACHETEUR');
            $criteria->addSelectColumn($alias . '.DATE_PRISE_EN_CHARGE_BANQUE');
            $criteria->addSelectColumn($alias . '.DATE_VALIDATION_BANQUE');
            $criteria->addSelectColumn($alias . '.DATE_REJET_BANQUE');
            $criteria->addSelectColumn($alias . '.ID_AGENT_BANQUIER_PRISE_EN_CHARGE');
            $criteria->addSelectColumn($alias . '.ID_AGENT_BANQUIER_VALIDATION');
            $criteria->addSelectColumn($alias . '.ID_AGENT_BANQUIER_REJET');
            $criteria->addSelectColumn($alias . '.MOTIF_REJET_BANQUIER');
            $criteria->addSelectColumn($alias . '.ID_VILLE');
            $criteria->addSelectColumn($alias . '.CODE_AGENCE');
            $criteria->addSelectColumn($alias . '.CODE_VILLE');
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
        $criteria->setPrimaryTableName(CommonCautionRestitutionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCautionRestitutionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonCautionRestitutionPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionRestitutionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCautionRestitution
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonCautionRestitutionPeer::doSelect($critcopy, $con);
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
        return CommonCautionRestitutionPeer::populateObjects(CommonCautionRestitutionPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonCautionRestitutionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonCautionRestitutionPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonCautionRestitutionPeer::DATABASE_NAME);

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
     * @param      CommonCautionRestitution $obj A CommonCautionRestitution object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonCautionRestitutionPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonCautionRestitution object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonCautionRestitution) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonCautionRestitution object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonCautionRestitutionPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonCautionRestitution Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonCautionRestitutionPeer::$instances[$key])) {
                return CommonCautionRestitutionPeer::$instances[$key];
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
        foreach (CommonCautionRestitutionPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonCautionRestitutionPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to caution_restitution
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
        $cls = CommonCautionRestitutionPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonCautionRestitutionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonCautionRestitutionPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonCautionRestitutionPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonCautionRestitution object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonCautionRestitutionPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonCautionRestitutionPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonCautionRestitutionPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonCautionRestitutionPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonCautionRestitutionPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonCautionDemande table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonCautionDemande(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonCautionRestitutionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCautionRestitutionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonCautionRestitutionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionRestitutionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonCautionRestitutionPeer::ID_CAUTION_DEMANDE, CommonCautionDemandePeer::ID, $join_behavior);

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
     * Selects a collection of CommonCautionRestitution objects pre-filled with their CommonCautionDemande objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonCautionRestitution objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonCautionDemande(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonCautionRestitutionPeer::DATABASE_NAME);
        }

        CommonCautionRestitutionPeer::addSelectColumns($criteria);
        $startcol = CommonCautionRestitutionPeer::NUM_HYDRATE_COLUMNS;
        CommonCautionDemandePeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonCautionRestitutionPeer::ID_CAUTION_DEMANDE, CommonCautionDemandePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonCautionRestitutionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonCautionRestitutionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonCautionRestitutionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonCautionRestitutionPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonCautionDemandePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonCautionDemandePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonCautionDemandePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonCautionDemandePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonCautionRestitution) to $obj2 (CommonCautionDemande)
                $obj2->addCommonCautionRestitution($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonCautionRestitutionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCautionRestitutionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonCautionRestitutionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionRestitutionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonCautionRestitutionPeer::ID_CAUTION_DEMANDE, CommonCautionDemandePeer::ID, $join_behavior);

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
     * Selects a collection of CommonCautionRestitution objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonCautionRestitution objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonCautionRestitutionPeer::DATABASE_NAME);
        }

        CommonCautionRestitutionPeer::addSelectColumns($criteria);
        $startcol2 = CommonCautionRestitutionPeer::NUM_HYDRATE_COLUMNS;

        CommonCautionDemandePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonCautionDemandePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonCautionRestitutionPeer::ID_CAUTION_DEMANDE, CommonCautionDemandePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonCautionRestitutionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonCautionRestitutionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonCautionRestitutionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonCautionRestitutionPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonCautionDemande rows

            $key2 = CommonCautionDemandePeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonCautionDemandePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonCautionDemandePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonCautionDemandePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonCautionRestitution) to the collection in $obj2 (CommonCautionDemande)
                $obj2->addCommonCautionRestitution($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
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
        return Propel::getDatabaseMap(CommonCautionRestitutionPeer::DATABASE_NAME)->getTable(CommonCautionRestitutionPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonCautionRestitutionPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonCautionRestitutionPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonCautionRestitutionTableMap());
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
        return CommonCautionRestitutionPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonCautionRestitution or Criteria object.
     *
     * @param      mixed $values Criteria or CommonCautionRestitution object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionRestitutionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonCautionRestitution object
        }

        if ($criteria->containsKey(CommonCautionRestitutionPeer::ID) && $criteria->keyContainsValue(CommonCautionRestitutionPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonCautionRestitutionPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonCautionRestitutionPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonCautionRestitution or Criteria object.
     *
     * @param      mixed $values Criteria or CommonCautionRestitution object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionRestitutionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonCautionRestitutionPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonCautionRestitutionPeer::ID);
            $value = $criteria->remove(CommonCautionRestitutionPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonCautionRestitutionPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonCautionRestitutionPeer::TABLE_NAME);
            }

        } else { // $values is CommonCautionRestitution object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonCautionRestitutionPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the caution_restitution table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionRestitutionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonCautionRestitutionPeer::TABLE_NAME, $con, CommonCautionRestitutionPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonCautionRestitutionPeer::clearInstancePool();
            CommonCautionRestitutionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonCautionRestitution or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonCautionRestitution object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonCautionRestitutionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonCautionRestitutionPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonCautionRestitution) { // it's a model object
            // invalidate the cache for this single object
            CommonCautionRestitutionPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonCautionRestitutionPeer::DATABASE_NAME);
            $criteria->add(CommonCautionRestitutionPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonCautionRestitutionPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonCautionRestitutionPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonCautionRestitutionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonCautionRestitution object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonCautionRestitution $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonCautionRestitutionPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonCautionRestitutionPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonCautionRestitutionPeer::DATABASE_NAME, CommonCautionRestitutionPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonCautionRestitution
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonCautionRestitutionPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionRestitutionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonCautionRestitutionPeer::DATABASE_NAME);
        $criteria->add(CommonCautionRestitutionPeer::ID, $pk);

        $v = CommonCautionRestitutionPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonCautionRestitution[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionRestitutionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonCautionRestitutionPeer::DATABASE_NAME);
            $criteria->add(CommonCautionRestitutionPeer::ID, $pks, Criteria::IN);
            $objs = CommonCautionRestitutionPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonCautionRestitutionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonCautionRestitutionPeer::buildTableMap();

