<?php


/**
 * Base static class for performing query and update operations on the 'decisionEnveloppe' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonDecisionEnveloppePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'decisionEnveloppe';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonDecisionEnveloppe';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonDecisionEnveloppeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 36;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 36;

    /** the column name for the id_decision_enveloppe field */
    const ID_DECISION_ENVELOPPE = 'decisionEnveloppe.id_decision_enveloppe';

    /** the column name for the organisme field */
    const ORGANISME = 'decisionEnveloppe.organisme';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'decisionEnveloppe.consultation_ref';

    /** the column name for the id_offre field */
    const ID_OFFRE = 'decisionEnveloppe.id_offre';

    /** the column name for the lot field */
    const LOT = 'decisionEnveloppe.lot';

    /** the column name for the decision field */
    const DECISION = 'decisionEnveloppe.decision';

    /** the column name for the date_notification field */
    const DATE_NOTIFICATION = 'decisionEnveloppe.date_notification';

    /** the column name for the code_postal field */
    const CODE_POSTAL = 'decisionEnveloppe.code_postal';

    /** the column name for the pme_pmi field */
    const PME_PMI = 'decisionEnveloppe.pme_pmi';

    /** the column name for the tranche_budgetaire field */
    const TRANCHE_BUDGETAIRE = 'decisionEnveloppe.tranche_budgetaire';

    /** the column name for the montant_marche field */
    const MONTANT_MARCHE = 'decisionEnveloppe.montant_marche';

    /** the column name for the categorie field */
    const CATEGORIE = 'decisionEnveloppe.categorie';

    /** the column name for the objet_marche field */
    const OBJET_MARCHE = 'decisionEnveloppe.objet_marche';

    /** the column name for the commentaire field */
    const COMMENTAIRE = 'decisionEnveloppe.commentaire';

    /** the column name for the fichier_joint field */
    const FICHIER_JOINT = 'decisionEnveloppe.fichier_joint';

    /** the column name for the nom_fichier_joint field */
    const NOM_FICHIER_JOINT = 'decisionEnveloppe.nom_fichier_joint';

    /** the column name for the type_enveloppe field */
    const TYPE_ENVELOPPE = 'decisionEnveloppe.type_enveloppe';

    /** the column name for the numero_marche field */
    const NUMERO_MARCHE = 'decisionEnveloppe.numero_marche';

    /** the column name for the statutEJ field */
    const STATUTEJ = 'decisionEnveloppe.statutEJ';

    /** the column name for the note field */
    const NOTE = 'decisionEnveloppe.note';

    /** the column name for the classement field */
    const CLASSEMENT = 'decisionEnveloppe.classement';

    /** the column name for the id_blob_pieces_notification field */
    const ID_BLOB_PIECES_NOTIFICATION = 'decisionEnveloppe.id_blob_pieces_notification';

    /** the column name for the date_fin_marche_previsionnel field */
    const DATE_FIN_MARCHE_PREVISIONNEL = 'decisionEnveloppe.date_fin_marche_previsionnel';

    /** the column name for the ville field */
    const VILLE = 'decisionEnveloppe.ville';

    /** the column name for the acronymePays_Attributaire field */
    const ACRONYMEPAYS_ATTRIBUTAIRE = 'decisionEnveloppe.acronymePays_Attributaire';

    /** the column name for the pays_Attributaire field */
    const PAYS_ATTRIBUTAIRE = 'decisionEnveloppe.pays_Attributaire';

    /** the column name for the siren_Attributaire field */
    const SIREN_ATTRIBUTAIRE = 'decisionEnveloppe.siren_Attributaire';

    /** the column name for the nic_Attributaire field */
    const NIC_ATTRIBUTAIRE = 'decisionEnveloppe.nic_Attributaire';

    /** the column name for the identifiantNational_Attributaire field */
    const IDENTIFIANTNATIONAL_ATTRIBUTAIRE = 'decisionEnveloppe.identifiantNational_Attributaire';

    /** the column name for the rc_ville_attributaire field */
    const RC_VILLE_ATTRIBUTAIRE = 'decisionEnveloppe.rc_ville_attributaire';

    /** the column name for the rc_num_attributaire field */
    const RC_NUM_ATTRIBUTAIRE = 'decisionEnveloppe.rc_num_attributaire';

    /** the column name for the date_notification_reelle field */
    const DATE_NOTIFICATION_REELLE = 'decisionEnveloppe.date_notification_reelle';

    /** the column name for the date_fin_marche_reelle field */
    const DATE_FIN_MARCHE_REELLE = 'decisionEnveloppe.date_fin_marche_reelle';

    /** the column name for the envoi_interface field */
    const ENVOI_INTERFACE = 'decisionEnveloppe.envoi_interface';

    /** the column name for the ifu_attributaire field */
    const IFU_ATTRIBUTAIRE = 'decisionEnveloppe.ifu_attributaire';

    /** the column name for the type_entreprise field */
    const TYPE_ENTREPRISE = 'decisionEnveloppe.type_entreprise';

    /** The enumerated values for the decision field */
    const DECISION_0 = '0';
    const DECISION_1 = '1';

    /** The enumerated values for the type_enveloppe field */
    const TYPE_ENVELOPPE_1 = '1';
    const TYPE_ENVELOPPE_2 = '2';

    /** The enumerated values for the envoi_interface field */
    const ENVOI_INTERFACE_0 = '0';
    const ENVOI_INTERFACE_1 = '1';

    /** The enumerated values for the type_entreprise field */
    const TYPE_ENTREPRISE_0 = '0';
    const TYPE_ENTREPRISE_1 = '1';
    const TYPE_ENTREPRISE_2 = '2';
    const TYPE_ENTREPRISE_3 = '3';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonDecisionEnveloppe objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonDecisionEnveloppe[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonDecisionEnveloppePeer::$fieldNames[CommonDecisionEnveloppePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdDecisionEnveloppe', 'Organisme', 'ConsultationRef', 'IdOffre', 'Lot', 'Decision', 'DateNotification', 'CodePostal', 'PmePmi', 'TrancheBudgetaire', 'MontantMarche', 'Categorie', 'ObjetMarche', 'Commentaire', 'FichierJoint', 'NomFichierJoint', 'TypeEnveloppe', 'NumeroMarche', 'Statutej', 'Note', 'Classement', 'IdBlobPiecesNotification', 'DateFinMarchePrevisionnel', 'Ville', 'AcronymepaysAttributaire', 'PaysAttributaire', 'SirenAttributaire', 'NicAttributaire', 'IdentifiantnationalAttributaire', 'RcVilleAttributaire', 'RcNumAttributaire', 'DateNotificationReelle', 'DateFinMarcheReelle', 'EnvoiInterface', 'IfuAttributaire', 'TypeEntreprise', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idDecisionEnveloppe', 'organisme', 'consultationRef', 'idOffre', 'lot', 'decision', 'dateNotification', 'codePostal', 'pmePmi', 'trancheBudgetaire', 'montantMarche', 'categorie', 'objetMarche', 'commentaire', 'fichierJoint', 'nomFichierJoint', 'typeEnveloppe', 'numeroMarche', 'statutej', 'note', 'classement', 'idBlobPiecesNotification', 'dateFinMarchePrevisionnel', 'ville', 'acronymepaysAttributaire', 'paysAttributaire', 'sirenAttributaire', 'nicAttributaire', 'identifiantnationalAttributaire', 'rcVilleAttributaire', 'rcNumAttributaire', 'dateNotificationReelle', 'dateFinMarcheReelle', 'envoiInterface', 'ifuAttributaire', 'typeEntreprise', ),
        BasePeer::TYPE_COLNAME => array (CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE, CommonDecisionEnveloppePeer::ORGANISME, CommonDecisionEnveloppePeer::CONSULTATION_REF, CommonDecisionEnveloppePeer::ID_OFFRE, CommonDecisionEnveloppePeer::LOT, CommonDecisionEnveloppePeer::DECISION, CommonDecisionEnveloppePeer::DATE_NOTIFICATION, CommonDecisionEnveloppePeer::CODE_POSTAL, CommonDecisionEnveloppePeer::PME_PMI, CommonDecisionEnveloppePeer::TRANCHE_BUDGETAIRE, CommonDecisionEnveloppePeer::MONTANT_MARCHE, CommonDecisionEnveloppePeer::CATEGORIE, CommonDecisionEnveloppePeer::OBJET_MARCHE, CommonDecisionEnveloppePeer::COMMENTAIRE, CommonDecisionEnveloppePeer::FICHIER_JOINT, CommonDecisionEnveloppePeer::NOM_FICHIER_JOINT, CommonDecisionEnveloppePeer::TYPE_ENVELOPPE, CommonDecisionEnveloppePeer::NUMERO_MARCHE, CommonDecisionEnveloppePeer::STATUTEJ, CommonDecisionEnveloppePeer::NOTE, CommonDecisionEnveloppePeer::CLASSEMENT, CommonDecisionEnveloppePeer::ID_BLOB_PIECES_NOTIFICATION, CommonDecisionEnveloppePeer::DATE_FIN_MARCHE_PREVISIONNEL, CommonDecisionEnveloppePeer::VILLE, CommonDecisionEnveloppePeer::ACRONYMEPAYS_ATTRIBUTAIRE, CommonDecisionEnveloppePeer::PAYS_ATTRIBUTAIRE, CommonDecisionEnveloppePeer::SIREN_ATTRIBUTAIRE, CommonDecisionEnveloppePeer::NIC_ATTRIBUTAIRE, CommonDecisionEnveloppePeer::IDENTIFIANTNATIONAL_ATTRIBUTAIRE, CommonDecisionEnveloppePeer::RC_VILLE_ATTRIBUTAIRE, CommonDecisionEnveloppePeer::RC_NUM_ATTRIBUTAIRE, CommonDecisionEnveloppePeer::DATE_NOTIFICATION_REELLE, CommonDecisionEnveloppePeer::DATE_FIN_MARCHE_REELLE, CommonDecisionEnveloppePeer::ENVOI_INTERFACE, CommonDecisionEnveloppePeer::IFU_ATTRIBUTAIRE, CommonDecisionEnveloppePeer::TYPE_ENTREPRISE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_DECISION_ENVELOPPE', 'ORGANISME', 'CONSULTATION_REF', 'ID_OFFRE', 'LOT', 'DECISION', 'DATE_NOTIFICATION', 'CODE_POSTAL', 'PME_PMI', 'TRANCHE_BUDGETAIRE', 'MONTANT_MARCHE', 'CATEGORIE', 'OBJET_MARCHE', 'COMMENTAIRE', 'FICHIER_JOINT', 'NOM_FICHIER_JOINT', 'TYPE_ENVELOPPE', 'NUMERO_MARCHE', 'STATUTEJ', 'NOTE', 'CLASSEMENT', 'ID_BLOB_PIECES_NOTIFICATION', 'DATE_FIN_MARCHE_PREVISIONNEL', 'VILLE', 'ACRONYMEPAYS_ATTRIBUTAIRE', 'PAYS_ATTRIBUTAIRE', 'SIREN_ATTRIBUTAIRE', 'NIC_ATTRIBUTAIRE', 'IDENTIFIANTNATIONAL_ATTRIBUTAIRE', 'RC_VILLE_ATTRIBUTAIRE', 'RC_NUM_ATTRIBUTAIRE', 'DATE_NOTIFICATION_REELLE', 'DATE_FIN_MARCHE_REELLE', 'ENVOI_INTERFACE', 'IFU_ATTRIBUTAIRE', 'TYPE_ENTREPRISE', ),
        BasePeer::TYPE_FIELDNAME => array ('id_decision_enveloppe', 'organisme', 'consultation_ref', 'id_offre', 'lot', 'decision', 'date_notification', 'code_postal', 'pme_pmi', 'tranche_budgetaire', 'montant_marche', 'categorie', 'objet_marche', 'commentaire', 'fichier_joint', 'nom_fichier_joint', 'type_enveloppe', 'numero_marche', 'statutEJ', 'note', 'classement', 'id_blob_pieces_notification', 'date_fin_marche_previsionnel', 'ville', 'acronymePays_Attributaire', 'pays_Attributaire', 'siren_Attributaire', 'nic_Attributaire', 'identifiantNational_Attributaire', 'rc_ville_attributaire', 'rc_num_attributaire', 'date_notification_reelle', 'date_fin_marche_reelle', 'envoi_interface', 'ifu_attributaire', 'type_entreprise', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonDecisionEnveloppePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdDecisionEnveloppe' => 0, 'Organisme' => 1, 'ConsultationRef' => 2, 'IdOffre' => 3, 'Lot' => 4, 'Decision' => 5, 'DateNotification' => 6, 'CodePostal' => 7, 'PmePmi' => 8, 'TrancheBudgetaire' => 9, 'MontantMarche' => 10, 'Categorie' => 11, 'ObjetMarche' => 12, 'Commentaire' => 13, 'FichierJoint' => 14, 'NomFichierJoint' => 15, 'TypeEnveloppe' => 16, 'NumeroMarche' => 17, 'Statutej' => 18, 'Note' => 19, 'Classement' => 20, 'IdBlobPiecesNotification' => 21, 'DateFinMarchePrevisionnel' => 22, 'Ville' => 23, 'AcronymepaysAttributaire' => 24, 'PaysAttributaire' => 25, 'SirenAttributaire' => 26, 'NicAttributaire' => 27, 'IdentifiantnationalAttributaire' => 28, 'RcVilleAttributaire' => 29, 'RcNumAttributaire' => 30, 'DateNotificationReelle' => 31, 'DateFinMarcheReelle' => 32, 'EnvoiInterface' => 33, 'IfuAttributaire' => 34, 'TypeEntreprise' => 35, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idDecisionEnveloppe' => 0, 'organisme' => 1, 'consultationRef' => 2, 'idOffre' => 3, 'lot' => 4, 'decision' => 5, 'dateNotification' => 6, 'codePostal' => 7, 'pmePmi' => 8, 'trancheBudgetaire' => 9, 'montantMarche' => 10, 'categorie' => 11, 'objetMarche' => 12, 'commentaire' => 13, 'fichierJoint' => 14, 'nomFichierJoint' => 15, 'typeEnveloppe' => 16, 'numeroMarche' => 17, 'statutej' => 18, 'note' => 19, 'classement' => 20, 'idBlobPiecesNotification' => 21, 'dateFinMarchePrevisionnel' => 22, 'ville' => 23, 'acronymepaysAttributaire' => 24, 'paysAttributaire' => 25, 'sirenAttributaire' => 26, 'nicAttributaire' => 27, 'identifiantnationalAttributaire' => 28, 'rcVilleAttributaire' => 29, 'rcNumAttributaire' => 30, 'dateNotificationReelle' => 31, 'dateFinMarcheReelle' => 32, 'envoiInterface' => 33, 'ifuAttributaire' => 34, 'typeEntreprise' => 35, ),
        BasePeer::TYPE_COLNAME => array (CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE => 0, CommonDecisionEnveloppePeer::ORGANISME => 1, CommonDecisionEnveloppePeer::CONSULTATION_REF => 2, CommonDecisionEnveloppePeer::ID_OFFRE => 3, CommonDecisionEnveloppePeer::LOT => 4, CommonDecisionEnveloppePeer::DECISION => 5, CommonDecisionEnveloppePeer::DATE_NOTIFICATION => 6, CommonDecisionEnveloppePeer::CODE_POSTAL => 7, CommonDecisionEnveloppePeer::PME_PMI => 8, CommonDecisionEnveloppePeer::TRANCHE_BUDGETAIRE => 9, CommonDecisionEnveloppePeer::MONTANT_MARCHE => 10, CommonDecisionEnveloppePeer::CATEGORIE => 11, CommonDecisionEnveloppePeer::OBJET_MARCHE => 12, CommonDecisionEnveloppePeer::COMMENTAIRE => 13, CommonDecisionEnveloppePeer::FICHIER_JOINT => 14, CommonDecisionEnveloppePeer::NOM_FICHIER_JOINT => 15, CommonDecisionEnveloppePeer::TYPE_ENVELOPPE => 16, CommonDecisionEnveloppePeer::NUMERO_MARCHE => 17, CommonDecisionEnveloppePeer::STATUTEJ => 18, CommonDecisionEnveloppePeer::NOTE => 19, CommonDecisionEnveloppePeer::CLASSEMENT => 20, CommonDecisionEnveloppePeer::ID_BLOB_PIECES_NOTIFICATION => 21, CommonDecisionEnveloppePeer::DATE_FIN_MARCHE_PREVISIONNEL => 22, CommonDecisionEnveloppePeer::VILLE => 23, CommonDecisionEnveloppePeer::ACRONYMEPAYS_ATTRIBUTAIRE => 24, CommonDecisionEnveloppePeer::PAYS_ATTRIBUTAIRE => 25, CommonDecisionEnveloppePeer::SIREN_ATTRIBUTAIRE => 26, CommonDecisionEnveloppePeer::NIC_ATTRIBUTAIRE => 27, CommonDecisionEnveloppePeer::IDENTIFIANTNATIONAL_ATTRIBUTAIRE => 28, CommonDecisionEnveloppePeer::RC_VILLE_ATTRIBUTAIRE => 29, CommonDecisionEnveloppePeer::RC_NUM_ATTRIBUTAIRE => 30, CommonDecisionEnveloppePeer::DATE_NOTIFICATION_REELLE => 31, CommonDecisionEnveloppePeer::DATE_FIN_MARCHE_REELLE => 32, CommonDecisionEnveloppePeer::ENVOI_INTERFACE => 33, CommonDecisionEnveloppePeer::IFU_ATTRIBUTAIRE => 34, CommonDecisionEnveloppePeer::TYPE_ENTREPRISE => 35, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_DECISION_ENVELOPPE' => 0, 'ORGANISME' => 1, 'CONSULTATION_REF' => 2, 'ID_OFFRE' => 3, 'LOT' => 4, 'DECISION' => 5, 'DATE_NOTIFICATION' => 6, 'CODE_POSTAL' => 7, 'PME_PMI' => 8, 'TRANCHE_BUDGETAIRE' => 9, 'MONTANT_MARCHE' => 10, 'CATEGORIE' => 11, 'OBJET_MARCHE' => 12, 'COMMENTAIRE' => 13, 'FICHIER_JOINT' => 14, 'NOM_FICHIER_JOINT' => 15, 'TYPE_ENVELOPPE' => 16, 'NUMERO_MARCHE' => 17, 'STATUTEJ' => 18, 'NOTE' => 19, 'CLASSEMENT' => 20, 'ID_BLOB_PIECES_NOTIFICATION' => 21, 'DATE_FIN_MARCHE_PREVISIONNEL' => 22, 'VILLE' => 23, 'ACRONYMEPAYS_ATTRIBUTAIRE' => 24, 'PAYS_ATTRIBUTAIRE' => 25, 'SIREN_ATTRIBUTAIRE' => 26, 'NIC_ATTRIBUTAIRE' => 27, 'IDENTIFIANTNATIONAL_ATTRIBUTAIRE' => 28, 'RC_VILLE_ATTRIBUTAIRE' => 29, 'RC_NUM_ATTRIBUTAIRE' => 30, 'DATE_NOTIFICATION_REELLE' => 31, 'DATE_FIN_MARCHE_REELLE' => 32, 'ENVOI_INTERFACE' => 33, 'IFU_ATTRIBUTAIRE' => 34, 'TYPE_ENTREPRISE' => 35, ),
        BasePeer::TYPE_FIELDNAME => array ('id_decision_enveloppe' => 0, 'organisme' => 1, 'consultation_ref' => 2, 'id_offre' => 3, 'lot' => 4, 'decision' => 5, 'date_notification' => 6, 'code_postal' => 7, 'pme_pmi' => 8, 'tranche_budgetaire' => 9, 'montant_marche' => 10, 'categorie' => 11, 'objet_marche' => 12, 'commentaire' => 13, 'fichier_joint' => 14, 'nom_fichier_joint' => 15, 'type_enveloppe' => 16, 'numero_marche' => 17, 'statutEJ' => 18, 'note' => 19, 'classement' => 20, 'id_blob_pieces_notification' => 21, 'date_fin_marche_previsionnel' => 22, 'ville' => 23, 'acronymePays_Attributaire' => 24, 'pays_Attributaire' => 25, 'siren_Attributaire' => 26, 'nic_Attributaire' => 27, 'identifiantNational_Attributaire' => 28, 'rc_ville_attributaire' => 29, 'rc_num_attributaire' => 30, 'date_notification_reelle' => 31, 'date_fin_marche_reelle' => 32, 'envoi_interface' => 33, 'ifu_attributaire' => 34, 'type_entreprise' => 35, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonDecisionEnveloppePeer::DECISION => array(
            CommonDecisionEnveloppePeer::DECISION_0,
            CommonDecisionEnveloppePeer::DECISION_1,
        ),
        CommonDecisionEnveloppePeer::TYPE_ENVELOPPE => array(
            CommonDecisionEnveloppePeer::TYPE_ENVELOPPE_1,
            CommonDecisionEnveloppePeer::TYPE_ENVELOPPE_2,
        ),
        CommonDecisionEnveloppePeer::ENVOI_INTERFACE => array(
            CommonDecisionEnveloppePeer::ENVOI_INTERFACE_0,
            CommonDecisionEnveloppePeer::ENVOI_INTERFACE_1,
        ),
        CommonDecisionEnveloppePeer::TYPE_ENTREPRISE => array(
            CommonDecisionEnveloppePeer::TYPE_ENTREPRISE_0,
            CommonDecisionEnveloppePeer::TYPE_ENTREPRISE_1,
            CommonDecisionEnveloppePeer::TYPE_ENTREPRISE_2,
            CommonDecisionEnveloppePeer::TYPE_ENTREPRISE_3,
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
        $toNames = CommonDecisionEnveloppePeer::getFieldNames($toType);
        $key = isset(CommonDecisionEnveloppePeer::$fieldKeys[$fromType][$name]) ? CommonDecisionEnveloppePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonDecisionEnveloppePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonDecisionEnveloppePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonDecisionEnveloppePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonDecisionEnveloppePeer::$enumValueSets;
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
        $valueSets = CommonDecisionEnveloppePeer::getValueSets();

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
        $values = CommonDecisionEnveloppePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonDecisionEnveloppePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonDecisionEnveloppePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::ORGANISME);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::ID_OFFRE);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::LOT);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::DECISION);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::DATE_NOTIFICATION);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::CODE_POSTAL);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::PME_PMI);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::TRANCHE_BUDGETAIRE);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::MONTANT_MARCHE);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::CATEGORIE);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::OBJET_MARCHE);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::COMMENTAIRE);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::FICHIER_JOINT);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::NOM_FICHIER_JOINT);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::TYPE_ENVELOPPE);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::NUMERO_MARCHE);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::STATUTEJ);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::NOTE);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::CLASSEMENT);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::ID_BLOB_PIECES_NOTIFICATION);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::DATE_FIN_MARCHE_PREVISIONNEL);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::VILLE);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::ACRONYMEPAYS_ATTRIBUTAIRE);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::PAYS_ATTRIBUTAIRE);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::SIREN_ATTRIBUTAIRE);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::NIC_ATTRIBUTAIRE);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::IDENTIFIANTNATIONAL_ATTRIBUTAIRE);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::RC_VILLE_ATTRIBUTAIRE);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::RC_NUM_ATTRIBUTAIRE);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::DATE_NOTIFICATION_REELLE);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::DATE_FIN_MARCHE_REELLE);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::ENVOI_INTERFACE);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::IFU_ATTRIBUTAIRE);
            $criteria->addSelectColumn(CommonDecisionEnveloppePeer::TYPE_ENTREPRISE);
        } else {
            $criteria->addSelectColumn($alias . '.id_decision_enveloppe');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.id_offre');
            $criteria->addSelectColumn($alias . '.lot');
            $criteria->addSelectColumn($alias . '.decision');
            $criteria->addSelectColumn($alias . '.date_notification');
            $criteria->addSelectColumn($alias . '.code_postal');
            $criteria->addSelectColumn($alias . '.pme_pmi');
            $criteria->addSelectColumn($alias . '.tranche_budgetaire');
            $criteria->addSelectColumn($alias . '.montant_marche');
            $criteria->addSelectColumn($alias . '.categorie');
            $criteria->addSelectColumn($alias . '.objet_marche');
            $criteria->addSelectColumn($alias . '.commentaire');
            $criteria->addSelectColumn($alias . '.fichier_joint');
            $criteria->addSelectColumn($alias . '.nom_fichier_joint');
            $criteria->addSelectColumn($alias . '.type_enveloppe');
            $criteria->addSelectColumn($alias . '.numero_marche');
            $criteria->addSelectColumn($alias . '.statutEJ');
            $criteria->addSelectColumn($alias . '.note');
            $criteria->addSelectColumn($alias . '.classement');
            $criteria->addSelectColumn($alias . '.id_blob_pieces_notification');
            $criteria->addSelectColumn($alias . '.date_fin_marche_previsionnel');
            $criteria->addSelectColumn($alias . '.ville');
            $criteria->addSelectColumn($alias . '.acronymePays_Attributaire');
            $criteria->addSelectColumn($alias . '.pays_Attributaire');
            $criteria->addSelectColumn($alias . '.siren_Attributaire');
            $criteria->addSelectColumn($alias . '.nic_Attributaire');
            $criteria->addSelectColumn($alias . '.identifiantNational_Attributaire');
            $criteria->addSelectColumn($alias . '.rc_ville_attributaire');
            $criteria->addSelectColumn($alias . '.rc_num_attributaire');
            $criteria->addSelectColumn($alias . '.date_notification_reelle');
            $criteria->addSelectColumn($alias . '.date_fin_marche_reelle');
            $criteria->addSelectColumn($alias . '.envoi_interface');
            $criteria->addSelectColumn($alias . '.ifu_attributaire');
            $criteria->addSelectColumn($alias . '.type_entreprise');
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
        $criteria->setPrimaryTableName(CommonDecisionEnveloppePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonDecisionEnveloppePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonDecisionEnveloppePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonDecisionEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonDecisionEnveloppe
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonDecisionEnveloppePeer::doSelect($critcopy, $con);
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
        return CommonDecisionEnveloppePeer::populateObjects(CommonDecisionEnveloppePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonDecisionEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonDecisionEnveloppePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonDecisionEnveloppePeer::DATABASE_NAME);

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
     * @param      CommonDecisionEnveloppe $obj A CommonDecisionEnveloppe object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdDecisionEnveloppe(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonDecisionEnveloppePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonDecisionEnveloppe object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonDecisionEnveloppe) {
                $key = serialize(array((string) $value->getIdDecisionEnveloppe(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonDecisionEnveloppe object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonDecisionEnveloppePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonDecisionEnveloppe Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonDecisionEnveloppePeer::$instances[$key])) {
                return CommonDecisionEnveloppePeer::$instances[$key];
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
        foreach (CommonDecisionEnveloppePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonDecisionEnveloppePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to decisionEnveloppe
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
        if ($row[$startcol] === null && $row[$startcol + 1] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1]));
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

        return array((int) $row[$startcol], (string) $row[$startcol + 1]);
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
        $cls = CommonDecisionEnveloppePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonDecisionEnveloppePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonDecisionEnveloppePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonDecisionEnveloppePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonDecisionEnveloppe object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonDecisionEnveloppePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonDecisionEnveloppePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonDecisionEnveloppePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonDecisionEnveloppePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonDecisionEnveloppePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonDecisionEnveloppePeer::DATABASE_NAME)->getTable(CommonDecisionEnveloppePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonDecisionEnveloppePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonDecisionEnveloppePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonDecisionEnveloppeTableMap());
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
        return CommonDecisionEnveloppePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonDecisionEnveloppe or Criteria object.
     *
     * @param      mixed $values Criteria or CommonDecisionEnveloppe object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonDecisionEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonDecisionEnveloppe object
        }

        if ($criteria->containsKey(CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE) && $criteria->keyContainsValue(CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonDecisionEnveloppePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonDecisionEnveloppe or Criteria object.
     *
     * @param      mixed $values Criteria or CommonDecisionEnveloppe object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonDecisionEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonDecisionEnveloppePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE);
            $value = $criteria->remove(CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE);
            if ($value) {
                $selectCriteria->add(CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonDecisionEnveloppePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonDecisionEnveloppePeer::ORGANISME);
            $value = $criteria->remove(CommonDecisionEnveloppePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonDecisionEnveloppePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonDecisionEnveloppePeer::TABLE_NAME);
            }

        } else { // $values is CommonDecisionEnveloppe object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonDecisionEnveloppePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the decisionEnveloppe table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonDecisionEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonDecisionEnveloppePeer::TABLE_NAME, $con, CommonDecisionEnveloppePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonDecisionEnveloppePeer::clearInstancePool();
            CommonDecisionEnveloppePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonDecisionEnveloppe or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonDecisionEnveloppe object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonDecisionEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonDecisionEnveloppePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonDecisionEnveloppe) { // it's a model object
            // invalidate the cache for this single object
            CommonDecisionEnveloppePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonDecisionEnveloppePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonDecisionEnveloppePeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonDecisionEnveloppePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonDecisionEnveloppePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonDecisionEnveloppePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonDecisionEnveloppe object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonDecisionEnveloppe $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonDecisionEnveloppePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonDecisionEnveloppePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonDecisionEnveloppePeer::DATABASE_NAME, CommonDecisionEnveloppePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id_decision_enveloppe
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonDecisionEnveloppe
     */
    public static function retrieveByPK($id_decision_enveloppe, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_decision_enveloppe, (string) $organisme));
         if (null !== ($obj = CommonDecisionEnveloppePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonDecisionEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonDecisionEnveloppePeer::DATABASE_NAME);
        $criteria->add(CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE, $id_decision_enveloppe);
        $criteria->add(CommonDecisionEnveloppePeer::ORGANISME, $organisme);
        $v = CommonDecisionEnveloppePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonDecisionEnveloppePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonDecisionEnveloppePeer::buildTableMap();

