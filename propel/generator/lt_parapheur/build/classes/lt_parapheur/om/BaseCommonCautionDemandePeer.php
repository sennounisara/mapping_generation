<?php


/**
 * Base static class for performing query and update operations on the 'caution_demande' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCautionDemandePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'caution_demande';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonCautionDemande';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonCautionDemandeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 45;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 45;

    /** the column name for the ID field */
    const ID = 'caution_demande.ID';

    /** the column name for the REF_CONSULTATION field */
    const REF_CONSULTATION = 'caution_demande.REF_CONSULTATION';

    /** the column name for the ID_ENTREPRISE field */
    const ID_ENTREPRISE = 'caution_demande.ID_ENTREPRISE';

    /** the column name for the ID_INSCRIT field */
    const ID_INSCRIT = 'caution_demande.ID_INSCRIT';

    /** the column name for the ACRONYME field */
    const ACRONYME = 'caution_demande.ACRONYME';

    /** the column name for the INTITULE field */
    const INTITULE = 'caution_demande.INTITULE';

    /** the column name for the LOT field */
    const LOT = 'caution_demande.LOT';

    /** the column name for the OBJET_LOT field */
    const OBJET_LOT = 'caution_demande.OBJET_LOT';

    /** the column name for the RAISON_SOCIALE field */
    const RAISON_SOCIALE = 'caution_demande.RAISON_SOCIALE';

    /** the column name for the MONTANT field */
    const MONTANT = 'caution_demande.MONTANT';

    /** the column name for the DATE_DEMANDE field */
    const DATE_DEMANDE = 'caution_demande.DATE_DEMANDE';

    /** the column name for the DATE_LIMITE_REMISE_PLIS field */
    const DATE_LIMITE_REMISE_PLIS = 'caution_demande.DATE_LIMITE_REMISE_PLIS';

    /** the column name for the ID_STATUT_CAUTION field */
    const ID_STATUT_CAUTION = 'caution_demande.ID_STATUT_CAUTION';

    /** the column name for the ID_COMPTE_BANCAIRE field */
    const ID_COMPTE_BANCAIRE = 'caution_demande.ID_COMPTE_BANCAIRE';

    /** the column name for the ID_BLOB_DEMANDE field */
    const ID_BLOB_DEMANDE = 'caution_demande.ID_BLOB_DEMANDE';

    /** the column name for the NOM_DOC_DEMANDE field */
    const NOM_DOC_DEMANDE = 'caution_demande.NOM_DOC_DEMANDE';

    /** the column name for the ID_BLOB_CAUTION field */
    const ID_BLOB_CAUTION = 'caution_demande.ID_BLOB_CAUTION';

    /** the column name for the NOM_DOC_CAUTION field */
    const NOM_DOC_CAUTION = 'caution_demande.NOM_DOC_CAUTION';

    /** the column name for the ID_INSCRIT_CREA field */
    const ID_INSCRIT_CREA = 'caution_demande.ID_INSCRIT_CREA';

    /** the column name for the DATE_CREA field */
    const DATE_CREA = 'caution_demande.DATE_CREA';

    /** the column name for the ID_INSCRIT_MODIF field */
    const ID_INSCRIT_MODIF = 'caution_demande.ID_INSCRIT_MODIF';

    /** the column name for the DATE_MODIF field */
    const DATE_MODIF = 'caution_demande.DATE_MODIF';

    /** the column name for the IDENTIFIANT_BANCAIRE field */
    const IDENTIFIANT_BANCAIRE = 'caution_demande.IDENTIFIANT_BANCAIRE';

    /** the column name for the ID_VILLE field */
    const ID_VILLE = 'caution_demande.ID_VILLE';

    /** the column name for the ACHETEUR_PUBLIC field */
    const ACHETEUR_PUBLIC = 'caution_demande.ACHETEUR_PUBLIC';

    /** the column name for the DATE_VALIDATION field */
    const DATE_VALIDATION = 'caution_demande.DATE_VALIDATION';

    /** the column name for the DATE_REJET field */
    const DATE_REJET = 'caution_demande.DATE_REJET';

    /** the column name for the MOTIF_REJET field */
    const MOTIF_REJET = 'caution_demande.MOTIF_REJET';

    /** the column name for the ID_AGENT_BANQUIER_VALIDATION field */
    const ID_AGENT_BANQUIER_VALIDATION = 'caution_demande.ID_AGENT_BANQUIER_VALIDATION';

    /** the column name for the ID_AGENT_BANQUIER_REJET field */
    const ID_AGENT_BANQUIER_REJET = 'caution_demande.ID_AGENT_BANQUIER_REJET';

    /** the column name for the REFERENCE_MODELE field */
    const REFERENCE_MODELE = 'caution_demande.REFERENCE_MODELE';

    /** the column name for the DATE_PRISE_EN_CHARGE field */
    const DATE_PRISE_EN_CHARGE = 'caution_demande.DATE_PRISE_EN_CHARGE';

    /** the column name for the ID_AGENT_PRISE_EN_CHARGE field */
    const ID_AGENT_PRISE_EN_CHARGE = 'caution_demande.ID_AGENT_PRISE_EN_CHARGE';

    /** the column name for the TAGUEE field */
    const TAGUEE = 'caution_demande.TAGUEE';

    /** the column name for the UTILISEE field */
    const UTILISEE = 'caution_demande.UTILISEE';

    /** the column name for the MISE_A_DISPO field */
    const MISE_A_DISPO = 'caution_demande.MISE_A_DISPO';

    /** the column name for the ID_SIGNATAIRE1 field */
    const ID_SIGNATAIRE1 = 'caution_demande.ID_SIGNATAIRE1';

    /** the column name for the DATE_SIGNATURE1 field */
    const DATE_SIGNATURE1 = 'caution_demande.DATE_SIGNATURE1';

    /** the column name for the ID_SIGNATAIRE2 field */
    const ID_SIGNATAIRE2 = 'caution_demande.ID_SIGNATAIRE2';

    /** the column name for the DATE_SIGNATURE2 field */
    const DATE_SIGNATURE2 = 'caution_demande.DATE_SIGNATURE2';

    /** the column name for the GROUPEMENT field */
    const GROUPEMENT = 'caution_demande.GROUPEMENT';

    /** the column name for the ID_GROUPEMENT field */
    const ID_GROUPEMENT = 'caution_demande.ID_GROUPEMENT';

    /** the column name for the CODE_AGENCE field */
    const CODE_AGENCE = 'caution_demande.CODE_AGENCE';

    /** the column name for the CODE_VILLE field */
    const CODE_VILLE = 'caution_demande.CODE_VILLE';

    /** the column name for the REFERENCE_INTERNE field */
    const REFERENCE_INTERNE = 'caution_demande.REFERENCE_INTERNE';

    /** The enumerated values for the TAGUEE field */
    const TAGUEE_0 = '0';
    const TAGUEE_1 = '1';

    /** The enumerated values for the UTILISEE field */
    const UTILISEE_0 = '0';
    const UTILISEE_1 = '1';

    /** The enumerated values for the MISE_A_DISPO field */
    const MISE_A_DISPO_0 = '0';
    const MISE_A_DISPO_1 = '1';

    /** The enumerated values for the GROUPEMENT field */
    const GROUPEMENT_0 = '0';
    const GROUPEMENT_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonCautionDemande objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonCautionDemande[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonCautionDemandePeer::$fieldNames[CommonCautionDemandePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'RefConsultation', 'IdEntreprise', 'IdInscrit', 'Acronyme', 'Intitule', 'Lot', 'ObjetLot', 'RaisonSociale', 'Montant', 'DateDemande', 'DateLimiteRemisePlis', 'IdStatutCaution', 'IdCompteBancaire', 'IdBlobDemande', 'NomDocDemande', 'IdBlobCaution', 'NomDocCaution', 'IdInscritCrea', 'DateCrea', 'IdInscritModif', 'DateModif', 'IdentifiantBancaire', 'IdVille', 'AcheteurPublic', 'DateValidation', 'DateRejet', 'MotifRejet', 'IdAgentBanquierValidation', 'IdAgentBanquierRejet', 'ReferenceModele', 'DatePriseEnCharge', 'IdAgentPriseEnCharge', 'Taguee', 'Utilisee', 'MiseADispo', 'IdSignataire1', 'DateSignature1', 'IdSignataire2', 'DateSignature2', 'Groupement', 'IdGroupement', 'CodeAgence', 'CodeVille', 'ReferenceInterne', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'refConsultation', 'idEntreprise', 'idInscrit', 'acronyme', 'intitule', 'lot', 'objetLot', 'raisonSociale', 'montant', 'dateDemande', 'dateLimiteRemisePlis', 'idStatutCaution', 'idCompteBancaire', 'idBlobDemande', 'nomDocDemande', 'idBlobCaution', 'nomDocCaution', 'idInscritCrea', 'dateCrea', 'idInscritModif', 'dateModif', 'identifiantBancaire', 'idVille', 'acheteurPublic', 'dateValidation', 'dateRejet', 'motifRejet', 'idAgentBanquierValidation', 'idAgentBanquierRejet', 'referenceModele', 'datePriseEnCharge', 'idAgentPriseEnCharge', 'taguee', 'utilisee', 'miseADispo', 'idSignataire1', 'dateSignature1', 'idSignataire2', 'dateSignature2', 'groupement', 'idGroupement', 'codeAgence', 'codeVille', 'referenceInterne', ),
        BasePeer::TYPE_COLNAME => array (CommonCautionDemandePeer::ID, CommonCautionDemandePeer::REF_CONSULTATION, CommonCautionDemandePeer::ID_ENTREPRISE, CommonCautionDemandePeer::ID_INSCRIT, CommonCautionDemandePeer::ACRONYME, CommonCautionDemandePeer::INTITULE, CommonCautionDemandePeer::LOT, CommonCautionDemandePeer::OBJET_LOT, CommonCautionDemandePeer::RAISON_SOCIALE, CommonCautionDemandePeer::MONTANT, CommonCautionDemandePeer::DATE_DEMANDE, CommonCautionDemandePeer::DATE_LIMITE_REMISE_PLIS, CommonCautionDemandePeer::ID_STATUT_CAUTION, CommonCautionDemandePeer::ID_COMPTE_BANCAIRE, CommonCautionDemandePeer::ID_BLOB_DEMANDE, CommonCautionDemandePeer::NOM_DOC_DEMANDE, CommonCautionDemandePeer::ID_BLOB_CAUTION, CommonCautionDemandePeer::NOM_DOC_CAUTION, CommonCautionDemandePeer::ID_INSCRIT_CREA, CommonCautionDemandePeer::DATE_CREA, CommonCautionDemandePeer::ID_INSCRIT_MODIF, CommonCautionDemandePeer::DATE_MODIF, CommonCautionDemandePeer::IDENTIFIANT_BANCAIRE, CommonCautionDemandePeer::ID_VILLE, CommonCautionDemandePeer::ACHETEUR_PUBLIC, CommonCautionDemandePeer::DATE_VALIDATION, CommonCautionDemandePeer::DATE_REJET, CommonCautionDemandePeer::MOTIF_REJET, CommonCautionDemandePeer::ID_AGENT_BANQUIER_VALIDATION, CommonCautionDemandePeer::ID_AGENT_BANQUIER_REJET, CommonCautionDemandePeer::REFERENCE_MODELE, CommonCautionDemandePeer::DATE_PRISE_EN_CHARGE, CommonCautionDemandePeer::ID_AGENT_PRISE_EN_CHARGE, CommonCautionDemandePeer::TAGUEE, CommonCautionDemandePeer::UTILISEE, CommonCautionDemandePeer::MISE_A_DISPO, CommonCautionDemandePeer::ID_SIGNATAIRE1, CommonCautionDemandePeer::DATE_SIGNATURE1, CommonCautionDemandePeer::ID_SIGNATAIRE2, CommonCautionDemandePeer::DATE_SIGNATURE2, CommonCautionDemandePeer::GROUPEMENT, CommonCautionDemandePeer::ID_GROUPEMENT, CommonCautionDemandePeer::CODE_AGENCE, CommonCautionDemandePeer::CODE_VILLE, CommonCautionDemandePeer::REFERENCE_INTERNE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'REF_CONSULTATION', 'ID_ENTREPRISE', 'ID_INSCRIT', 'ACRONYME', 'INTITULE', 'LOT', 'OBJET_LOT', 'RAISON_SOCIALE', 'MONTANT', 'DATE_DEMANDE', 'DATE_LIMITE_REMISE_PLIS', 'ID_STATUT_CAUTION', 'ID_COMPTE_BANCAIRE', 'ID_BLOB_DEMANDE', 'NOM_DOC_DEMANDE', 'ID_BLOB_CAUTION', 'NOM_DOC_CAUTION', 'ID_INSCRIT_CREA', 'DATE_CREA', 'ID_INSCRIT_MODIF', 'DATE_MODIF', 'IDENTIFIANT_BANCAIRE', 'ID_VILLE', 'ACHETEUR_PUBLIC', 'DATE_VALIDATION', 'DATE_REJET', 'MOTIF_REJET', 'ID_AGENT_BANQUIER_VALIDATION', 'ID_AGENT_BANQUIER_REJET', 'REFERENCE_MODELE', 'DATE_PRISE_EN_CHARGE', 'ID_AGENT_PRISE_EN_CHARGE', 'TAGUEE', 'UTILISEE', 'MISE_A_DISPO', 'ID_SIGNATAIRE1', 'DATE_SIGNATURE1', 'ID_SIGNATAIRE2', 'DATE_SIGNATURE2', 'GROUPEMENT', 'ID_GROUPEMENT', 'CODE_AGENCE', 'CODE_VILLE', 'REFERENCE_INTERNE', ),
        BasePeer::TYPE_FIELDNAME => array ('ID', 'REF_CONSULTATION', 'ID_ENTREPRISE', 'ID_INSCRIT', 'ACRONYME', 'INTITULE', 'LOT', 'OBJET_LOT', 'RAISON_SOCIALE', 'MONTANT', 'DATE_DEMANDE', 'DATE_LIMITE_REMISE_PLIS', 'ID_STATUT_CAUTION', 'ID_COMPTE_BANCAIRE', 'ID_BLOB_DEMANDE', 'NOM_DOC_DEMANDE', 'ID_BLOB_CAUTION', 'NOM_DOC_CAUTION', 'ID_INSCRIT_CREA', 'DATE_CREA', 'ID_INSCRIT_MODIF', 'DATE_MODIF', 'IDENTIFIANT_BANCAIRE', 'ID_VILLE', 'ACHETEUR_PUBLIC', 'DATE_VALIDATION', 'DATE_REJET', 'MOTIF_REJET', 'ID_AGENT_BANQUIER_VALIDATION', 'ID_AGENT_BANQUIER_REJET', 'REFERENCE_MODELE', 'DATE_PRISE_EN_CHARGE', 'ID_AGENT_PRISE_EN_CHARGE', 'TAGUEE', 'UTILISEE', 'MISE_A_DISPO', 'ID_SIGNATAIRE1', 'DATE_SIGNATURE1', 'ID_SIGNATAIRE2', 'DATE_SIGNATURE2', 'GROUPEMENT', 'ID_GROUPEMENT', 'CODE_AGENCE', 'CODE_VILLE', 'REFERENCE_INTERNE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonCautionDemandePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'RefConsultation' => 1, 'IdEntreprise' => 2, 'IdInscrit' => 3, 'Acronyme' => 4, 'Intitule' => 5, 'Lot' => 6, 'ObjetLot' => 7, 'RaisonSociale' => 8, 'Montant' => 9, 'DateDemande' => 10, 'DateLimiteRemisePlis' => 11, 'IdStatutCaution' => 12, 'IdCompteBancaire' => 13, 'IdBlobDemande' => 14, 'NomDocDemande' => 15, 'IdBlobCaution' => 16, 'NomDocCaution' => 17, 'IdInscritCrea' => 18, 'DateCrea' => 19, 'IdInscritModif' => 20, 'DateModif' => 21, 'IdentifiantBancaire' => 22, 'IdVille' => 23, 'AcheteurPublic' => 24, 'DateValidation' => 25, 'DateRejet' => 26, 'MotifRejet' => 27, 'IdAgentBanquierValidation' => 28, 'IdAgentBanquierRejet' => 29, 'ReferenceModele' => 30, 'DatePriseEnCharge' => 31, 'IdAgentPriseEnCharge' => 32, 'Taguee' => 33, 'Utilisee' => 34, 'MiseADispo' => 35, 'IdSignataire1' => 36, 'DateSignature1' => 37, 'IdSignataire2' => 38, 'DateSignature2' => 39, 'Groupement' => 40, 'IdGroupement' => 41, 'CodeAgence' => 42, 'CodeVille' => 43, 'ReferenceInterne' => 44, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'refConsultation' => 1, 'idEntreprise' => 2, 'idInscrit' => 3, 'acronyme' => 4, 'intitule' => 5, 'lot' => 6, 'objetLot' => 7, 'raisonSociale' => 8, 'montant' => 9, 'dateDemande' => 10, 'dateLimiteRemisePlis' => 11, 'idStatutCaution' => 12, 'idCompteBancaire' => 13, 'idBlobDemande' => 14, 'nomDocDemande' => 15, 'idBlobCaution' => 16, 'nomDocCaution' => 17, 'idInscritCrea' => 18, 'dateCrea' => 19, 'idInscritModif' => 20, 'dateModif' => 21, 'identifiantBancaire' => 22, 'idVille' => 23, 'acheteurPublic' => 24, 'dateValidation' => 25, 'dateRejet' => 26, 'motifRejet' => 27, 'idAgentBanquierValidation' => 28, 'idAgentBanquierRejet' => 29, 'referenceModele' => 30, 'datePriseEnCharge' => 31, 'idAgentPriseEnCharge' => 32, 'taguee' => 33, 'utilisee' => 34, 'miseADispo' => 35, 'idSignataire1' => 36, 'dateSignature1' => 37, 'idSignataire2' => 38, 'dateSignature2' => 39, 'groupement' => 40, 'idGroupement' => 41, 'codeAgence' => 42, 'codeVille' => 43, 'referenceInterne' => 44, ),
        BasePeer::TYPE_COLNAME => array (CommonCautionDemandePeer::ID => 0, CommonCautionDemandePeer::REF_CONSULTATION => 1, CommonCautionDemandePeer::ID_ENTREPRISE => 2, CommonCautionDemandePeer::ID_INSCRIT => 3, CommonCautionDemandePeer::ACRONYME => 4, CommonCautionDemandePeer::INTITULE => 5, CommonCautionDemandePeer::LOT => 6, CommonCautionDemandePeer::OBJET_LOT => 7, CommonCautionDemandePeer::RAISON_SOCIALE => 8, CommonCautionDemandePeer::MONTANT => 9, CommonCautionDemandePeer::DATE_DEMANDE => 10, CommonCautionDemandePeer::DATE_LIMITE_REMISE_PLIS => 11, CommonCautionDemandePeer::ID_STATUT_CAUTION => 12, CommonCautionDemandePeer::ID_COMPTE_BANCAIRE => 13, CommonCautionDemandePeer::ID_BLOB_DEMANDE => 14, CommonCautionDemandePeer::NOM_DOC_DEMANDE => 15, CommonCautionDemandePeer::ID_BLOB_CAUTION => 16, CommonCautionDemandePeer::NOM_DOC_CAUTION => 17, CommonCautionDemandePeer::ID_INSCRIT_CREA => 18, CommonCautionDemandePeer::DATE_CREA => 19, CommonCautionDemandePeer::ID_INSCRIT_MODIF => 20, CommonCautionDemandePeer::DATE_MODIF => 21, CommonCautionDemandePeer::IDENTIFIANT_BANCAIRE => 22, CommonCautionDemandePeer::ID_VILLE => 23, CommonCautionDemandePeer::ACHETEUR_PUBLIC => 24, CommonCautionDemandePeer::DATE_VALIDATION => 25, CommonCautionDemandePeer::DATE_REJET => 26, CommonCautionDemandePeer::MOTIF_REJET => 27, CommonCautionDemandePeer::ID_AGENT_BANQUIER_VALIDATION => 28, CommonCautionDemandePeer::ID_AGENT_BANQUIER_REJET => 29, CommonCautionDemandePeer::REFERENCE_MODELE => 30, CommonCautionDemandePeer::DATE_PRISE_EN_CHARGE => 31, CommonCautionDemandePeer::ID_AGENT_PRISE_EN_CHARGE => 32, CommonCautionDemandePeer::TAGUEE => 33, CommonCautionDemandePeer::UTILISEE => 34, CommonCautionDemandePeer::MISE_A_DISPO => 35, CommonCautionDemandePeer::ID_SIGNATAIRE1 => 36, CommonCautionDemandePeer::DATE_SIGNATURE1 => 37, CommonCautionDemandePeer::ID_SIGNATAIRE2 => 38, CommonCautionDemandePeer::DATE_SIGNATURE2 => 39, CommonCautionDemandePeer::GROUPEMENT => 40, CommonCautionDemandePeer::ID_GROUPEMENT => 41, CommonCautionDemandePeer::CODE_AGENCE => 42, CommonCautionDemandePeer::CODE_VILLE => 43, CommonCautionDemandePeer::REFERENCE_INTERNE => 44, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'REF_CONSULTATION' => 1, 'ID_ENTREPRISE' => 2, 'ID_INSCRIT' => 3, 'ACRONYME' => 4, 'INTITULE' => 5, 'LOT' => 6, 'OBJET_LOT' => 7, 'RAISON_SOCIALE' => 8, 'MONTANT' => 9, 'DATE_DEMANDE' => 10, 'DATE_LIMITE_REMISE_PLIS' => 11, 'ID_STATUT_CAUTION' => 12, 'ID_COMPTE_BANCAIRE' => 13, 'ID_BLOB_DEMANDE' => 14, 'NOM_DOC_DEMANDE' => 15, 'ID_BLOB_CAUTION' => 16, 'NOM_DOC_CAUTION' => 17, 'ID_INSCRIT_CREA' => 18, 'DATE_CREA' => 19, 'ID_INSCRIT_MODIF' => 20, 'DATE_MODIF' => 21, 'IDENTIFIANT_BANCAIRE' => 22, 'ID_VILLE' => 23, 'ACHETEUR_PUBLIC' => 24, 'DATE_VALIDATION' => 25, 'DATE_REJET' => 26, 'MOTIF_REJET' => 27, 'ID_AGENT_BANQUIER_VALIDATION' => 28, 'ID_AGENT_BANQUIER_REJET' => 29, 'REFERENCE_MODELE' => 30, 'DATE_PRISE_EN_CHARGE' => 31, 'ID_AGENT_PRISE_EN_CHARGE' => 32, 'TAGUEE' => 33, 'UTILISEE' => 34, 'MISE_A_DISPO' => 35, 'ID_SIGNATAIRE1' => 36, 'DATE_SIGNATURE1' => 37, 'ID_SIGNATAIRE2' => 38, 'DATE_SIGNATURE2' => 39, 'GROUPEMENT' => 40, 'ID_GROUPEMENT' => 41, 'CODE_AGENCE' => 42, 'CODE_VILLE' => 43, 'REFERENCE_INTERNE' => 44, ),
        BasePeer::TYPE_FIELDNAME => array ('ID' => 0, 'REF_CONSULTATION' => 1, 'ID_ENTREPRISE' => 2, 'ID_INSCRIT' => 3, 'ACRONYME' => 4, 'INTITULE' => 5, 'LOT' => 6, 'OBJET_LOT' => 7, 'RAISON_SOCIALE' => 8, 'MONTANT' => 9, 'DATE_DEMANDE' => 10, 'DATE_LIMITE_REMISE_PLIS' => 11, 'ID_STATUT_CAUTION' => 12, 'ID_COMPTE_BANCAIRE' => 13, 'ID_BLOB_DEMANDE' => 14, 'NOM_DOC_DEMANDE' => 15, 'ID_BLOB_CAUTION' => 16, 'NOM_DOC_CAUTION' => 17, 'ID_INSCRIT_CREA' => 18, 'DATE_CREA' => 19, 'ID_INSCRIT_MODIF' => 20, 'DATE_MODIF' => 21, 'IDENTIFIANT_BANCAIRE' => 22, 'ID_VILLE' => 23, 'ACHETEUR_PUBLIC' => 24, 'DATE_VALIDATION' => 25, 'DATE_REJET' => 26, 'MOTIF_REJET' => 27, 'ID_AGENT_BANQUIER_VALIDATION' => 28, 'ID_AGENT_BANQUIER_REJET' => 29, 'REFERENCE_MODELE' => 30, 'DATE_PRISE_EN_CHARGE' => 31, 'ID_AGENT_PRISE_EN_CHARGE' => 32, 'TAGUEE' => 33, 'UTILISEE' => 34, 'MISE_A_DISPO' => 35, 'ID_SIGNATAIRE1' => 36, 'DATE_SIGNATURE1' => 37, 'ID_SIGNATAIRE2' => 38, 'DATE_SIGNATURE2' => 39, 'GROUPEMENT' => 40, 'ID_GROUPEMENT' => 41, 'CODE_AGENCE' => 42, 'CODE_VILLE' => 43, 'REFERENCE_INTERNE' => 44, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonCautionDemandePeer::TAGUEE => array(
            CommonCautionDemandePeer::TAGUEE_0,
            CommonCautionDemandePeer::TAGUEE_1,
        ),
        CommonCautionDemandePeer::UTILISEE => array(
            CommonCautionDemandePeer::UTILISEE_0,
            CommonCautionDemandePeer::UTILISEE_1,
        ),
        CommonCautionDemandePeer::MISE_A_DISPO => array(
            CommonCautionDemandePeer::MISE_A_DISPO_0,
            CommonCautionDemandePeer::MISE_A_DISPO_1,
        ),
        CommonCautionDemandePeer::GROUPEMENT => array(
            CommonCautionDemandePeer::GROUPEMENT_0,
            CommonCautionDemandePeer::GROUPEMENT_1,
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
        $toNames = CommonCautionDemandePeer::getFieldNames($toType);
        $key = isset(CommonCautionDemandePeer::$fieldKeys[$fromType][$name]) ? CommonCautionDemandePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonCautionDemandePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonCautionDemandePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonCautionDemandePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonCautionDemandePeer::$enumValueSets;
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
        $valueSets = CommonCautionDemandePeer::getValueSets();

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
        $values = CommonCautionDemandePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonCautionDemandePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonCautionDemandePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonCautionDemandePeer::ID);
            $criteria->addSelectColumn(CommonCautionDemandePeer::REF_CONSULTATION);
            $criteria->addSelectColumn(CommonCautionDemandePeer::ID_ENTREPRISE);
            $criteria->addSelectColumn(CommonCautionDemandePeer::ID_INSCRIT);
            $criteria->addSelectColumn(CommonCautionDemandePeer::ACRONYME);
            $criteria->addSelectColumn(CommonCautionDemandePeer::INTITULE);
            $criteria->addSelectColumn(CommonCautionDemandePeer::LOT);
            $criteria->addSelectColumn(CommonCautionDemandePeer::OBJET_LOT);
            $criteria->addSelectColumn(CommonCautionDemandePeer::RAISON_SOCIALE);
            $criteria->addSelectColumn(CommonCautionDemandePeer::MONTANT);
            $criteria->addSelectColumn(CommonCautionDemandePeer::DATE_DEMANDE);
            $criteria->addSelectColumn(CommonCautionDemandePeer::DATE_LIMITE_REMISE_PLIS);
            $criteria->addSelectColumn(CommonCautionDemandePeer::ID_STATUT_CAUTION);
            $criteria->addSelectColumn(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE);
            $criteria->addSelectColumn(CommonCautionDemandePeer::ID_BLOB_DEMANDE);
            $criteria->addSelectColumn(CommonCautionDemandePeer::NOM_DOC_DEMANDE);
            $criteria->addSelectColumn(CommonCautionDemandePeer::ID_BLOB_CAUTION);
            $criteria->addSelectColumn(CommonCautionDemandePeer::NOM_DOC_CAUTION);
            $criteria->addSelectColumn(CommonCautionDemandePeer::ID_INSCRIT_CREA);
            $criteria->addSelectColumn(CommonCautionDemandePeer::DATE_CREA);
            $criteria->addSelectColumn(CommonCautionDemandePeer::ID_INSCRIT_MODIF);
            $criteria->addSelectColumn(CommonCautionDemandePeer::DATE_MODIF);
            $criteria->addSelectColumn(CommonCautionDemandePeer::IDENTIFIANT_BANCAIRE);
            $criteria->addSelectColumn(CommonCautionDemandePeer::ID_VILLE);
            $criteria->addSelectColumn(CommonCautionDemandePeer::ACHETEUR_PUBLIC);
            $criteria->addSelectColumn(CommonCautionDemandePeer::DATE_VALIDATION);
            $criteria->addSelectColumn(CommonCautionDemandePeer::DATE_REJET);
            $criteria->addSelectColumn(CommonCautionDemandePeer::MOTIF_REJET);
            $criteria->addSelectColumn(CommonCautionDemandePeer::ID_AGENT_BANQUIER_VALIDATION);
            $criteria->addSelectColumn(CommonCautionDemandePeer::ID_AGENT_BANQUIER_REJET);
            $criteria->addSelectColumn(CommonCautionDemandePeer::REFERENCE_MODELE);
            $criteria->addSelectColumn(CommonCautionDemandePeer::DATE_PRISE_EN_CHARGE);
            $criteria->addSelectColumn(CommonCautionDemandePeer::ID_AGENT_PRISE_EN_CHARGE);
            $criteria->addSelectColumn(CommonCautionDemandePeer::TAGUEE);
            $criteria->addSelectColumn(CommonCautionDemandePeer::UTILISEE);
            $criteria->addSelectColumn(CommonCautionDemandePeer::MISE_A_DISPO);
            $criteria->addSelectColumn(CommonCautionDemandePeer::ID_SIGNATAIRE1);
            $criteria->addSelectColumn(CommonCautionDemandePeer::DATE_SIGNATURE1);
            $criteria->addSelectColumn(CommonCautionDemandePeer::ID_SIGNATAIRE2);
            $criteria->addSelectColumn(CommonCautionDemandePeer::DATE_SIGNATURE2);
            $criteria->addSelectColumn(CommonCautionDemandePeer::GROUPEMENT);
            $criteria->addSelectColumn(CommonCautionDemandePeer::ID_GROUPEMENT);
            $criteria->addSelectColumn(CommonCautionDemandePeer::CODE_AGENCE);
            $criteria->addSelectColumn(CommonCautionDemandePeer::CODE_VILLE);
            $criteria->addSelectColumn(CommonCautionDemandePeer::REFERENCE_INTERNE);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.REF_CONSULTATION');
            $criteria->addSelectColumn($alias . '.ID_ENTREPRISE');
            $criteria->addSelectColumn($alias . '.ID_INSCRIT');
            $criteria->addSelectColumn($alias . '.ACRONYME');
            $criteria->addSelectColumn($alias . '.INTITULE');
            $criteria->addSelectColumn($alias . '.LOT');
            $criteria->addSelectColumn($alias . '.OBJET_LOT');
            $criteria->addSelectColumn($alias . '.RAISON_SOCIALE');
            $criteria->addSelectColumn($alias . '.MONTANT');
            $criteria->addSelectColumn($alias . '.DATE_DEMANDE');
            $criteria->addSelectColumn($alias . '.DATE_LIMITE_REMISE_PLIS');
            $criteria->addSelectColumn($alias . '.ID_STATUT_CAUTION');
            $criteria->addSelectColumn($alias . '.ID_COMPTE_BANCAIRE');
            $criteria->addSelectColumn($alias . '.ID_BLOB_DEMANDE');
            $criteria->addSelectColumn($alias . '.NOM_DOC_DEMANDE');
            $criteria->addSelectColumn($alias . '.ID_BLOB_CAUTION');
            $criteria->addSelectColumn($alias . '.NOM_DOC_CAUTION');
            $criteria->addSelectColumn($alias . '.ID_INSCRIT_CREA');
            $criteria->addSelectColumn($alias . '.DATE_CREA');
            $criteria->addSelectColumn($alias . '.ID_INSCRIT_MODIF');
            $criteria->addSelectColumn($alias . '.DATE_MODIF');
            $criteria->addSelectColumn($alias . '.IDENTIFIANT_BANCAIRE');
            $criteria->addSelectColumn($alias . '.ID_VILLE');
            $criteria->addSelectColumn($alias . '.ACHETEUR_PUBLIC');
            $criteria->addSelectColumn($alias . '.DATE_VALIDATION');
            $criteria->addSelectColumn($alias . '.DATE_REJET');
            $criteria->addSelectColumn($alias . '.MOTIF_REJET');
            $criteria->addSelectColumn($alias . '.ID_AGENT_BANQUIER_VALIDATION');
            $criteria->addSelectColumn($alias . '.ID_AGENT_BANQUIER_REJET');
            $criteria->addSelectColumn($alias . '.REFERENCE_MODELE');
            $criteria->addSelectColumn($alias . '.DATE_PRISE_EN_CHARGE');
            $criteria->addSelectColumn($alias . '.ID_AGENT_PRISE_EN_CHARGE');
            $criteria->addSelectColumn($alias . '.TAGUEE');
            $criteria->addSelectColumn($alias . '.UTILISEE');
            $criteria->addSelectColumn($alias . '.MISE_A_DISPO');
            $criteria->addSelectColumn($alias . '.ID_SIGNATAIRE1');
            $criteria->addSelectColumn($alias . '.DATE_SIGNATURE1');
            $criteria->addSelectColumn($alias . '.ID_SIGNATAIRE2');
            $criteria->addSelectColumn($alias . '.DATE_SIGNATURE2');
            $criteria->addSelectColumn($alias . '.GROUPEMENT');
            $criteria->addSelectColumn($alias . '.ID_GROUPEMENT');
            $criteria->addSelectColumn($alias . '.CODE_AGENCE');
            $criteria->addSelectColumn($alias . '.CODE_VILLE');
            $criteria->addSelectColumn($alias . '.REFERENCE_INTERNE');
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
        $criteria->setPrimaryTableName(CommonCautionDemandePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCautionDemandePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCautionDemande
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonCautionDemandePeer::doSelect($critcopy, $con);
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
        return CommonCautionDemandePeer::populateObjects(CommonCautionDemandePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonCautionDemandePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);

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
     * @param      CommonCautionDemande $obj A CommonCautionDemande object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonCautionDemandePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonCautionDemande object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonCautionDemande) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonCautionDemande object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonCautionDemandePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonCautionDemande Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonCautionDemandePeer::$instances[$key])) {
                return CommonCautionDemandePeer::$instances[$key];
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
        foreach (CommonCautionDemandePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonCautionDemandePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to caution_demande
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
        $cls = CommonCautionDemandePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonCautionDemandePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonCautionDemandePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonCautionDemandePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonCautionDemande object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonCautionDemandePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonCautionDemandePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonCautionDemandePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonCautionDemandePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonCautionDemandePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonAgentBanquierRelatedByIdAgentBanquierRejet table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonAgentBanquierRelatedByIdAgentBanquierRejet(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonCautionDemandePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCautionDemandePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonCautionDemandePeer::ID_AGENT_BANQUIER_REJET, CommonAgentBanquierPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonAgentBanquierRelatedByIdAgentBanquierValidation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonAgentBanquierRelatedByIdAgentBanquierValidation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonCautionDemandePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCautionDemandePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonCautionDemandePeer::ID_AGENT_BANQUIER_VALIDATION, CommonAgentBanquierPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonAgentBanquierRelatedByIdAgentPriseEnCharge table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonAgentBanquierRelatedByIdAgentPriseEnCharge(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonCautionDemandePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCautionDemandePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonCautionDemandePeer::ID_AGENT_PRISE_EN_CHARGE, CommonAgentBanquierPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonTCompteBancaire table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonTCompteBancaire(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonCautionDemandePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCautionDemandePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE, CommonTCompteBancairePeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonAgentBanquierRelatedByIdSignataire1 table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonAgentBanquierRelatedByIdSignataire1(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonCautionDemandePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCautionDemandePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonCautionDemandePeer::ID_SIGNATAIRE1, CommonAgentBanquierPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonAgentBanquierRelatedByIdSignataire2 table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonAgentBanquierRelatedByIdSignataire2(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonCautionDemandePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCautionDemandePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonCautionDemandePeer::ID_SIGNATAIRE2, CommonAgentBanquierPeer::ID, $join_behavior);

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
     * Selects a collection of CommonCautionDemande objects pre-filled with their CommonAgentBanquier objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonCautionDemande objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonAgentBanquierRelatedByIdAgentBanquierRejet(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);
        }

        CommonCautionDemandePeer::addSelectColumns($criteria);
        $startcol = CommonCautionDemandePeer::NUM_HYDRATE_COLUMNS;
        CommonAgentBanquierPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonCautionDemandePeer::ID_AGENT_BANQUIER_REJET, CommonAgentBanquierPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonCautionDemandePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonCautionDemandePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonCautionDemandePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonCautionDemandePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonAgentBanquierPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonAgentBanquierPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonAgentBanquierPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonAgentBanquierPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonCautionDemande) to $obj2 (CommonAgentBanquier)
                $obj2->addCommonCautionDemandeRelatedByIdAgentBanquierRejet($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonCautionDemande objects pre-filled with their CommonAgentBanquier objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonCautionDemande objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonAgentBanquierRelatedByIdAgentBanquierValidation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);
        }

        CommonCautionDemandePeer::addSelectColumns($criteria);
        $startcol = CommonCautionDemandePeer::NUM_HYDRATE_COLUMNS;
        CommonAgentBanquierPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonCautionDemandePeer::ID_AGENT_BANQUIER_VALIDATION, CommonAgentBanquierPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonCautionDemandePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonCautionDemandePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonCautionDemandePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonCautionDemandePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonAgentBanquierPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonAgentBanquierPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonAgentBanquierPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonAgentBanquierPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonCautionDemande) to $obj2 (CommonAgentBanquier)
                $obj2->addCommonCautionDemandeRelatedByIdAgentBanquierValidation($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonCautionDemande objects pre-filled with their CommonAgentBanquier objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonCautionDemande objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonAgentBanquierRelatedByIdAgentPriseEnCharge(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);
        }

        CommonCautionDemandePeer::addSelectColumns($criteria);
        $startcol = CommonCautionDemandePeer::NUM_HYDRATE_COLUMNS;
        CommonAgentBanquierPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonCautionDemandePeer::ID_AGENT_PRISE_EN_CHARGE, CommonAgentBanquierPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonCautionDemandePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonCautionDemandePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonCautionDemandePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonCautionDemandePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonAgentBanquierPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonAgentBanquierPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonAgentBanquierPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonAgentBanquierPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonCautionDemande) to $obj2 (CommonAgentBanquier)
                $obj2->addCommonCautionDemandeRelatedByIdAgentPriseEnCharge($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonCautionDemande objects pre-filled with their CommonTCompteBancaire objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonCautionDemande objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonTCompteBancaire(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);
        }

        CommonCautionDemandePeer::addSelectColumns($criteria);
        $startcol = CommonCautionDemandePeer::NUM_HYDRATE_COLUMNS;
        CommonTCompteBancairePeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE, CommonTCompteBancairePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonCautionDemandePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonCautionDemandePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonCautionDemandePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonCautionDemandePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonTCompteBancairePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonTCompteBancairePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTCompteBancairePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonTCompteBancairePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonCautionDemande) to $obj2 (CommonTCompteBancaire)
                $obj2->addCommonCautionDemande($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonCautionDemande objects pre-filled with their CommonAgentBanquier objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonCautionDemande objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonAgentBanquierRelatedByIdSignataire1(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);
        }

        CommonCautionDemandePeer::addSelectColumns($criteria);
        $startcol = CommonCautionDemandePeer::NUM_HYDRATE_COLUMNS;
        CommonAgentBanquierPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonCautionDemandePeer::ID_SIGNATAIRE1, CommonAgentBanquierPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonCautionDemandePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonCautionDemandePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonCautionDemandePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonCautionDemandePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonAgentBanquierPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonAgentBanquierPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonAgentBanquierPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonAgentBanquierPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonCautionDemande) to $obj2 (CommonAgentBanquier)
                $obj2->addCommonCautionDemandeRelatedByIdSignataire1($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonCautionDemande objects pre-filled with their CommonAgentBanquier objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonCautionDemande objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonAgentBanquierRelatedByIdSignataire2(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);
        }

        CommonCautionDemandePeer::addSelectColumns($criteria);
        $startcol = CommonCautionDemandePeer::NUM_HYDRATE_COLUMNS;
        CommonAgentBanquierPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonCautionDemandePeer::ID_SIGNATAIRE2, CommonAgentBanquierPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonCautionDemandePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonCautionDemandePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonCautionDemandePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonCautionDemandePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonAgentBanquierPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonAgentBanquierPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonAgentBanquierPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonAgentBanquierPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonCautionDemande) to $obj2 (CommonAgentBanquier)
                $obj2->addCommonCautionDemandeRelatedByIdSignataire2($obj1);

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
        $criteria->setPrimaryTableName(CommonCautionDemandePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCautionDemandePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonCautionDemandePeer::ID_AGENT_BANQUIER_REJET, CommonAgentBanquierPeer::ID, $join_behavior);

        $criteria->addJoin(CommonCautionDemandePeer::ID_AGENT_BANQUIER_VALIDATION, CommonAgentBanquierPeer::ID, $join_behavior);

        $criteria->addJoin(CommonCautionDemandePeer::ID_AGENT_PRISE_EN_CHARGE, CommonAgentBanquierPeer::ID, $join_behavior);

        $criteria->addJoin(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE, CommonTCompteBancairePeer::ID, $join_behavior);

        $criteria->addJoin(CommonCautionDemandePeer::ID_SIGNATAIRE1, CommonAgentBanquierPeer::ID, $join_behavior);

        $criteria->addJoin(CommonCautionDemandePeer::ID_SIGNATAIRE2, CommonAgentBanquierPeer::ID, $join_behavior);

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
     * Selects a collection of CommonCautionDemande objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonCautionDemande objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);
        }

        CommonCautionDemandePeer::addSelectColumns($criteria);
        $startcol2 = CommonCautionDemandePeer::NUM_HYDRATE_COLUMNS;

        CommonAgentBanquierPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonAgentBanquierPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentBanquierPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonAgentBanquierPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentBanquierPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonAgentBanquierPeer::NUM_HYDRATE_COLUMNS;

        CommonTCompteBancairePeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + CommonTCompteBancairePeer::NUM_HYDRATE_COLUMNS;

        CommonAgentBanquierPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + CommonAgentBanquierPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentBanquierPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + CommonAgentBanquierPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonCautionDemandePeer::ID_AGENT_BANQUIER_REJET, CommonAgentBanquierPeer::ID, $join_behavior);

        $criteria->addJoin(CommonCautionDemandePeer::ID_AGENT_BANQUIER_VALIDATION, CommonAgentBanquierPeer::ID, $join_behavior);

        $criteria->addJoin(CommonCautionDemandePeer::ID_AGENT_PRISE_EN_CHARGE, CommonAgentBanquierPeer::ID, $join_behavior);

        $criteria->addJoin(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE, CommonTCompteBancairePeer::ID, $join_behavior);

        $criteria->addJoin(CommonCautionDemandePeer::ID_SIGNATAIRE1, CommonAgentBanquierPeer::ID, $join_behavior);

        $criteria->addJoin(CommonCautionDemandePeer::ID_SIGNATAIRE2, CommonAgentBanquierPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonCautionDemandePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonCautionDemandePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonCautionDemandePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonCautionDemandePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonAgentBanquier rows

            $key2 = CommonAgentBanquierPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonAgentBanquierPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonAgentBanquierPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonAgentBanquierPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonCautionDemande) to the collection in $obj2 (CommonAgentBanquier)
                $obj2->addCommonCautionDemandeRelatedByIdAgentBanquierRejet($obj1);
            } // if joined row not null

            // Add objects for joined CommonAgentBanquier rows

            $key3 = CommonAgentBanquierPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CommonAgentBanquierPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CommonAgentBanquierPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonAgentBanquierPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (CommonCautionDemande) to the collection in $obj3 (CommonAgentBanquier)
                $obj3->addCommonCautionDemandeRelatedByIdAgentBanquierValidation($obj1);
            } // if joined row not null

            // Add objects for joined CommonAgentBanquier rows

            $key4 = CommonAgentBanquierPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = CommonAgentBanquierPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = CommonAgentBanquierPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonAgentBanquierPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (CommonCautionDemande) to the collection in $obj4 (CommonAgentBanquier)
                $obj4->addCommonCautionDemandeRelatedByIdAgentPriseEnCharge($obj1);
            } // if joined row not null

            // Add objects for joined CommonTCompteBancaire rows

            $key5 = CommonTCompteBancairePeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = CommonTCompteBancairePeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = CommonTCompteBancairePeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    CommonTCompteBancairePeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (CommonCautionDemande) to the collection in $obj5 (CommonTCompteBancaire)
                $obj5->addCommonCautionDemande($obj1);
            } // if joined row not null

            // Add objects for joined CommonAgentBanquier rows

            $key6 = CommonAgentBanquierPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = CommonAgentBanquierPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = CommonAgentBanquierPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    CommonAgentBanquierPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (CommonCautionDemande) to the collection in $obj6 (CommonAgentBanquier)
                $obj6->addCommonCautionDemandeRelatedByIdSignataire1($obj1);
            } // if joined row not null

            // Add objects for joined CommonAgentBanquier rows

            $key7 = CommonAgentBanquierPeer::getPrimaryKeyHashFromRow($row, $startcol7);
            if ($key7 !== null) {
                $obj7 = CommonAgentBanquierPeer::getInstanceFromPool($key7);
                if (!$obj7) {

                    $cls = CommonAgentBanquierPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    CommonAgentBanquierPeer::addInstanceToPool($obj7, $key7);
                } // if obj7 loaded

                // Add the $obj1 (CommonCautionDemande) to the collection in $obj7 (CommonAgentBanquier)
                $obj7->addCommonCautionDemandeRelatedByIdSignataire2($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonAgentBanquierRelatedByIdAgentBanquierRejet table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonAgentBanquierRelatedByIdAgentBanquierRejet(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonCautionDemandePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCautionDemandePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE, CommonTCompteBancairePeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonAgentBanquierRelatedByIdAgentBanquierValidation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonAgentBanquierRelatedByIdAgentBanquierValidation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonCautionDemandePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCautionDemandePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE, CommonTCompteBancairePeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonAgentBanquierRelatedByIdAgentPriseEnCharge table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonAgentBanquierRelatedByIdAgentPriseEnCharge(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonCautionDemandePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCautionDemandePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE, CommonTCompteBancairePeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonTCompteBancaire table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonTCompteBancaire(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonCautionDemandePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCautionDemandePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonCautionDemandePeer::ID_AGENT_BANQUIER_REJET, CommonAgentBanquierPeer::ID, $join_behavior);

        $criteria->addJoin(CommonCautionDemandePeer::ID_AGENT_BANQUIER_VALIDATION, CommonAgentBanquierPeer::ID, $join_behavior);

        $criteria->addJoin(CommonCautionDemandePeer::ID_AGENT_PRISE_EN_CHARGE, CommonAgentBanquierPeer::ID, $join_behavior);

        $criteria->addJoin(CommonCautionDemandePeer::ID_SIGNATAIRE1, CommonAgentBanquierPeer::ID, $join_behavior);

        $criteria->addJoin(CommonCautionDemandePeer::ID_SIGNATAIRE2, CommonAgentBanquierPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonAgentBanquierRelatedByIdSignataire1 table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonAgentBanquierRelatedByIdSignataire1(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonCautionDemandePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCautionDemandePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE, CommonTCompteBancairePeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonAgentBanquierRelatedByIdSignataire2 table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonAgentBanquierRelatedByIdSignataire2(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonCautionDemandePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCautionDemandePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE, CommonTCompteBancairePeer::ID, $join_behavior);

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
     * Selects a collection of CommonCautionDemande objects pre-filled with all related objects except CommonAgentBanquierRelatedByIdAgentBanquierRejet.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonCautionDemande objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonAgentBanquierRelatedByIdAgentBanquierRejet(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);
        }

        CommonCautionDemandePeer::addSelectColumns($criteria);
        $startcol2 = CommonCautionDemandePeer::NUM_HYDRATE_COLUMNS;

        CommonTCompteBancairePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTCompteBancairePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE, CommonTCompteBancairePeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonCautionDemandePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonCautionDemandePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonCautionDemandePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonCautionDemandePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonTCompteBancaire rows

                $key2 = CommonTCompteBancairePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonTCompteBancairePeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonTCompteBancairePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonTCompteBancairePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonCautionDemande) to the collection in $obj2 (CommonTCompteBancaire)
                $obj2->addCommonCautionDemande($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonCautionDemande objects pre-filled with all related objects except CommonAgentBanquierRelatedByIdAgentBanquierValidation.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonCautionDemande objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonAgentBanquierRelatedByIdAgentBanquierValidation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);
        }

        CommonCautionDemandePeer::addSelectColumns($criteria);
        $startcol2 = CommonCautionDemandePeer::NUM_HYDRATE_COLUMNS;

        CommonTCompteBancairePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTCompteBancairePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE, CommonTCompteBancairePeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonCautionDemandePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonCautionDemandePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonCautionDemandePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonCautionDemandePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonTCompteBancaire rows

                $key2 = CommonTCompteBancairePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonTCompteBancairePeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonTCompteBancairePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonTCompteBancairePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonCautionDemande) to the collection in $obj2 (CommonTCompteBancaire)
                $obj2->addCommonCautionDemande($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonCautionDemande objects pre-filled with all related objects except CommonAgentBanquierRelatedByIdAgentPriseEnCharge.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonCautionDemande objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonAgentBanquierRelatedByIdAgentPriseEnCharge(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);
        }

        CommonCautionDemandePeer::addSelectColumns($criteria);
        $startcol2 = CommonCautionDemandePeer::NUM_HYDRATE_COLUMNS;

        CommonTCompteBancairePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTCompteBancairePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE, CommonTCompteBancairePeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonCautionDemandePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonCautionDemandePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonCautionDemandePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonCautionDemandePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonTCompteBancaire rows

                $key2 = CommonTCompteBancairePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonTCompteBancairePeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonTCompteBancairePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonTCompteBancairePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonCautionDemande) to the collection in $obj2 (CommonTCompteBancaire)
                $obj2->addCommonCautionDemande($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonCautionDemande objects pre-filled with all related objects except CommonTCompteBancaire.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonCautionDemande objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonTCompteBancaire(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);
        }

        CommonCautionDemandePeer::addSelectColumns($criteria);
        $startcol2 = CommonCautionDemandePeer::NUM_HYDRATE_COLUMNS;

        CommonAgentBanquierPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonAgentBanquierPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentBanquierPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonAgentBanquierPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentBanquierPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonAgentBanquierPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentBanquierPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + CommonAgentBanquierPeer::NUM_HYDRATE_COLUMNS;

        CommonAgentBanquierPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + CommonAgentBanquierPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonCautionDemandePeer::ID_AGENT_BANQUIER_REJET, CommonAgentBanquierPeer::ID, $join_behavior);

        $criteria->addJoin(CommonCautionDemandePeer::ID_AGENT_BANQUIER_VALIDATION, CommonAgentBanquierPeer::ID, $join_behavior);

        $criteria->addJoin(CommonCautionDemandePeer::ID_AGENT_PRISE_EN_CHARGE, CommonAgentBanquierPeer::ID, $join_behavior);

        $criteria->addJoin(CommonCautionDemandePeer::ID_SIGNATAIRE1, CommonAgentBanquierPeer::ID, $join_behavior);

        $criteria->addJoin(CommonCautionDemandePeer::ID_SIGNATAIRE2, CommonAgentBanquierPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonCautionDemandePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonCautionDemandePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonCautionDemandePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonCautionDemandePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonAgentBanquier rows

                $key2 = CommonAgentBanquierPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonAgentBanquierPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonAgentBanquierPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonAgentBanquierPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonCautionDemande) to the collection in $obj2 (CommonAgentBanquier)
                $obj2->addCommonCautionDemandeRelatedByIdAgentBanquierRejet($obj1);

            } // if joined row is not null

                // Add objects for joined CommonAgentBanquier rows

                $key3 = CommonAgentBanquierPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CommonAgentBanquierPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = CommonAgentBanquierPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonAgentBanquierPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (CommonCautionDemande) to the collection in $obj3 (CommonAgentBanquier)
                $obj3->addCommonCautionDemandeRelatedByIdAgentBanquierValidation($obj1);

            } // if joined row is not null

                // Add objects for joined CommonAgentBanquier rows

                $key4 = CommonAgentBanquierPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = CommonAgentBanquierPeer::getInstanceFromPool($key4);
                    if (!$obj4) {
    
                        $cls = CommonAgentBanquierPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonAgentBanquierPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (CommonCautionDemande) to the collection in $obj4 (CommonAgentBanquier)
                $obj4->addCommonCautionDemandeRelatedByIdAgentPriseEnCharge($obj1);

            } // if joined row is not null

                // Add objects for joined CommonAgentBanquier rows

                $key5 = CommonAgentBanquierPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = CommonAgentBanquierPeer::getInstanceFromPool($key5);
                    if (!$obj5) {
    
                        $cls = CommonAgentBanquierPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    CommonAgentBanquierPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (CommonCautionDemande) to the collection in $obj5 (CommonAgentBanquier)
                $obj5->addCommonCautionDemandeRelatedByIdSignataire1($obj1);

            } // if joined row is not null

                // Add objects for joined CommonAgentBanquier rows

                $key6 = CommonAgentBanquierPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = CommonAgentBanquierPeer::getInstanceFromPool($key6);
                    if (!$obj6) {
    
                        $cls = CommonAgentBanquierPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    CommonAgentBanquierPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (CommonCautionDemande) to the collection in $obj6 (CommonAgentBanquier)
                $obj6->addCommonCautionDemandeRelatedByIdSignataire2($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonCautionDemande objects pre-filled with all related objects except CommonAgentBanquierRelatedByIdSignataire1.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonCautionDemande objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonAgentBanquierRelatedByIdSignataire1(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);
        }

        CommonCautionDemandePeer::addSelectColumns($criteria);
        $startcol2 = CommonCautionDemandePeer::NUM_HYDRATE_COLUMNS;

        CommonTCompteBancairePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTCompteBancairePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE, CommonTCompteBancairePeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonCautionDemandePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonCautionDemandePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonCautionDemandePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonCautionDemandePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonTCompteBancaire rows

                $key2 = CommonTCompteBancairePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonTCompteBancairePeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonTCompteBancairePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonTCompteBancairePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonCautionDemande) to the collection in $obj2 (CommonTCompteBancaire)
                $obj2->addCommonCautionDemande($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonCautionDemande objects pre-filled with all related objects except CommonAgentBanquierRelatedByIdSignataire2.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonCautionDemande objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonAgentBanquierRelatedByIdSignataire2(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);
        }

        CommonCautionDemandePeer::addSelectColumns($criteria);
        $startcol2 = CommonCautionDemandePeer::NUM_HYDRATE_COLUMNS;

        CommonTCompteBancairePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTCompteBancairePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE, CommonTCompteBancairePeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonCautionDemandePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonCautionDemandePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonCautionDemandePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonCautionDemandePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonTCompteBancaire rows

                $key2 = CommonTCompteBancairePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonTCompteBancairePeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonTCompteBancairePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonTCompteBancairePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonCautionDemande) to the collection in $obj2 (CommonTCompteBancaire)
                $obj2->addCommonCautionDemande($obj1);

            } // if joined row is not null

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
        return Propel::getDatabaseMap(CommonCautionDemandePeer::DATABASE_NAME)->getTable(CommonCautionDemandePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonCautionDemandePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonCautionDemandePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonCautionDemandeTableMap());
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
        return CommonCautionDemandePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonCautionDemande or Criteria object.
     *
     * @param      mixed $values Criteria or CommonCautionDemande object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonCautionDemande object
        }

        if ($criteria->containsKey(CommonCautionDemandePeer::ID) && $criteria->keyContainsValue(CommonCautionDemandePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonCautionDemandePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonCautionDemande or Criteria object.
     *
     * @param      mixed $values Criteria or CommonCautionDemande object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonCautionDemandePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonCautionDemandePeer::ID);
            $value = $criteria->remove(CommonCautionDemandePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonCautionDemandePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonCautionDemandePeer::TABLE_NAME);
            }

        } else { // $values is CommonCautionDemande object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the caution_demande table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonCautionDemandePeer::TABLE_NAME, $con, CommonCautionDemandePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonCautionDemandePeer::clearInstancePool();
            CommonCautionDemandePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonCautionDemande or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonCautionDemande object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonCautionDemandePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonCautionDemande) { // it's a model object
            // invalidate the cache for this single object
            CommonCautionDemandePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonCautionDemandePeer::DATABASE_NAME);
            $criteria->add(CommonCautionDemandePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonCautionDemandePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonCautionDemandePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonCautionDemandePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonCautionDemande object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonCautionDemande $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonCautionDemandePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonCautionDemandePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonCautionDemandePeer::DATABASE_NAME, CommonCautionDemandePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonCautionDemande
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonCautionDemandePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonCautionDemandePeer::DATABASE_NAME);
        $criteria->add(CommonCautionDemandePeer::ID, $pk);

        $v = CommonCautionDemandePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonCautionDemande[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonCautionDemandePeer::DATABASE_NAME);
            $criteria->add(CommonCautionDemandePeer::ID, $pks, Criteria::IN);
            $objs = CommonCautionDemandePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonCautionDemandePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonCautionDemandePeer::buildTableMap();

