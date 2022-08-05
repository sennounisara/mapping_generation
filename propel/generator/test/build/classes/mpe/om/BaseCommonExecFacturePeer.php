<?php


/**
 * Base static class for performing query and update operations on the 'exec_facture' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonExecFacturePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'exec_facture';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonExecFacture';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonExecFactureTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 34;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 34;

    /** the column name for the id field */
    const ID = 'exec_facture.id';

    /** the column name for the intitule field */
    const INTITULE = 'exec_facture.intitule';

    /** the column name for the numero field */
    const NUMERO = 'exec_facture.numero';

    /** the column name for the id_contrat field */
    const ID_CONTRAT = 'exec_facture.id_contrat';

    /** the column name for the id_contractant field */
    const ID_CONTRACTANT = 'exec_facture.id_contractant';

    /** the column name for the statut field */
    const STATUT = 'exec_facture.statut';

    /** the column name for the date_depot field */
    const DATE_DEPOT = 'exec_facture.date_depot';

    /** the column name for the date_validation field */
    const DATE_VALIDATION = 'exec_facture.date_validation';

    /** the column name for the id_agent_validation field */
    const ID_AGENT_VALIDATION = 'exec_facture.id_agent_validation';

    /** the column name for the date_rejet field */
    const DATE_REJET = 'exec_facture.date_rejet';

    /** the column name for the id_agent_rejet field */
    const ID_AGENT_REJET = 'exec_facture.id_agent_rejet';

    /** the column name for the montant_facture_ht field */
    const MONTANT_FACTURE_HT = 'exec_facture.montant_facture_ht';

    /** the column name for the montant_facture_ttc field */
    const MONTANT_FACTURE_TTC = 'exec_facture.montant_facture_ttc';

    /** the column name for the montant_a_paye_ht field */
    const MONTANT_A_PAYE_HT = 'exec_facture.montant_a_paye_ht';

    /** the column name for the montant_a_paye_ttc field */
    const MONTANT_A_PAYE_TTC = 'exec_facture.montant_a_paye_ttc';

    /** the column name for the montant_paye_ht field */
    const MONTANT_PAYE_HT = 'exec_facture.montant_paye_ht';

    /** the column name for the montant_paye_ttc field */
    const MONTANT_PAYE_TTC = 'exec_facture.montant_paye_ttc';

    /** the column name for the commentaire field */
    const COMMENTAIRE = 'exec_facture.commentaire';

    /** the column name for the origine_piece field */
    const ORIGINE_PIECE = 'exec_facture.origine_piece';

    /** the column name for the numero_workflow field */
    const NUMERO_WORKFLOW = 'exec_facture.numero_workflow';

    /** the column name for the id_agent_crea field */
    const ID_AGENT_CREA = 'exec_facture.id_agent_crea';

    /** the column name for the id_entreprise_crea field */
    const ID_ENTREPRISE_CREA = 'exec_facture.id_entreprise_crea';

    /** the column name for the date_crea field */
    const DATE_CREA = 'exec_facture.date_crea';

    /** the column name for the id_agent_modif field */
    const ID_AGENT_MODIF = 'exec_facture.id_agent_modif';

    /** the column name for the id_entreprise_modif field */
    const ID_ENTREPRISE_MODIF = 'exec_facture.id_entreprise_modif';

    /** the column name for the date_modif field */
    const DATE_MODIF = 'exec_facture.date_modif';

    /** the column name for the id_parapheur field */
    const ID_PARAPHEUR = 'exec_facture.id_parapheur';

    /** the column name for the date_cloture_parapheur field */
    const DATE_CLOTURE_PARAPHEUR = 'exec_facture.date_cloture_parapheur';

    /** the column name for the montant_retenue_garantie field */
    const MONTANT_RETENUE_GARANTIE = 'exec_facture.montant_retenue_garantie';

    /** the column name for the motif_rejet field */
    const MOTIF_REJET = 'exec_facture.motif_rejet';

    /** the column name for the origine field */
    const ORIGINE = 'exec_facture.origine';

    /** the column name for the validation_via_exec field */
    const VALIDATION_VIA_EXEC = 'exec_facture.validation_via_exec';

    /** the column name for the date_paiement field */
    const DATE_PAIEMENT = 'exec_facture.date_paiement';

    /** the column name for the date_derniere_synchronisation field */
    const DATE_DERNIERE_SYNCHRONISATION = 'exec_facture.date_derniere_synchronisation';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonExecFacture objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonExecFacture[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonExecFacturePeer::$fieldNames[CommonExecFacturePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Intitule', 'Numero', 'IdContrat', 'IdContractant', 'Statut', 'DateDepot', 'DateValidation', 'IdAgentValidation', 'DateRejet', 'IdAgentRejet', 'MontantFactureHt', 'MontantFactureTtc', 'MontantAPayeHt', 'MontantAPayeTtc', 'MontantPayeHt', 'MontantPayeTtc', 'Commentaire', 'OriginePiece', 'NumeroWorkflow', 'IdAgentCrea', 'IdEntrepriseCrea', 'DateCrea', 'IdAgentModif', 'IdEntrepriseModif', 'DateModif', 'IdParapheur', 'DateClotureParapheur', 'MontantRetenueGarantie', 'MotifRejet', 'Origine', 'ValidationViaExec', 'DatePaiement', 'DateDerniereSynchronisation', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'intitule', 'numero', 'idContrat', 'idContractant', 'statut', 'dateDepot', 'dateValidation', 'idAgentValidation', 'dateRejet', 'idAgentRejet', 'montantFactureHt', 'montantFactureTtc', 'montantAPayeHt', 'montantAPayeTtc', 'montantPayeHt', 'montantPayeTtc', 'commentaire', 'originePiece', 'numeroWorkflow', 'idAgentCrea', 'idEntrepriseCrea', 'dateCrea', 'idAgentModif', 'idEntrepriseModif', 'dateModif', 'idParapheur', 'dateClotureParapheur', 'montantRetenueGarantie', 'motifRejet', 'origine', 'validationViaExec', 'datePaiement', 'dateDerniereSynchronisation', ),
        BasePeer::TYPE_COLNAME => array (CommonExecFacturePeer::ID, CommonExecFacturePeer::INTITULE, CommonExecFacturePeer::NUMERO, CommonExecFacturePeer::ID_CONTRAT, CommonExecFacturePeer::ID_CONTRACTANT, CommonExecFacturePeer::STATUT, CommonExecFacturePeer::DATE_DEPOT, CommonExecFacturePeer::DATE_VALIDATION, CommonExecFacturePeer::ID_AGENT_VALIDATION, CommonExecFacturePeer::DATE_REJET, CommonExecFacturePeer::ID_AGENT_REJET, CommonExecFacturePeer::MONTANT_FACTURE_HT, CommonExecFacturePeer::MONTANT_FACTURE_TTC, CommonExecFacturePeer::MONTANT_A_PAYE_HT, CommonExecFacturePeer::MONTANT_A_PAYE_TTC, CommonExecFacturePeer::MONTANT_PAYE_HT, CommonExecFacturePeer::MONTANT_PAYE_TTC, CommonExecFacturePeer::COMMENTAIRE, CommonExecFacturePeer::ORIGINE_PIECE, CommonExecFacturePeer::NUMERO_WORKFLOW, CommonExecFacturePeer::ID_AGENT_CREA, CommonExecFacturePeer::ID_ENTREPRISE_CREA, CommonExecFacturePeer::DATE_CREA, CommonExecFacturePeer::ID_AGENT_MODIF, CommonExecFacturePeer::ID_ENTREPRISE_MODIF, CommonExecFacturePeer::DATE_MODIF, CommonExecFacturePeer::ID_PARAPHEUR, CommonExecFacturePeer::DATE_CLOTURE_PARAPHEUR, CommonExecFacturePeer::MONTANT_RETENUE_GARANTIE, CommonExecFacturePeer::MOTIF_REJET, CommonExecFacturePeer::ORIGINE, CommonExecFacturePeer::VALIDATION_VIA_EXEC, CommonExecFacturePeer::DATE_PAIEMENT, CommonExecFacturePeer::DATE_DERNIERE_SYNCHRONISATION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'INTITULE', 'NUMERO', 'ID_CONTRAT', 'ID_CONTRACTANT', 'STATUT', 'DATE_DEPOT', 'DATE_VALIDATION', 'ID_AGENT_VALIDATION', 'DATE_REJET', 'ID_AGENT_REJET', 'MONTANT_FACTURE_HT', 'MONTANT_FACTURE_TTC', 'MONTANT_A_PAYE_HT', 'MONTANT_A_PAYE_TTC', 'MONTANT_PAYE_HT', 'MONTANT_PAYE_TTC', 'COMMENTAIRE', 'ORIGINE_PIECE', 'NUMERO_WORKFLOW', 'ID_AGENT_CREA', 'ID_ENTREPRISE_CREA', 'DATE_CREA', 'ID_AGENT_MODIF', 'ID_ENTREPRISE_MODIF', 'DATE_MODIF', 'ID_PARAPHEUR', 'DATE_CLOTURE_PARAPHEUR', 'MONTANT_RETENUE_GARANTIE', 'MOTIF_REJET', 'ORIGINE', 'VALIDATION_VIA_EXEC', 'DATE_PAIEMENT', 'DATE_DERNIERE_SYNCHRONISATION', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'intitule', 'numero', 'id_contrat', 'id_contractant', 'statut', 'date_depot', 'date_validation', 'id_agent_validation', 'date_rejet', 'id_agent_rejet', 'montant_facture_ht', 'montant_facture_ttc', 'montant_a_paye_ht', 'montant_a_paye_ttc', 'montant_paye_ht', 'montant_paye_ttc', 'commentaire', 'origine_piece', 'numero_workflow', 'id_agent_crea', 'id_entreprise_crea', 'date_crea', 'id_agent_modif', 'id_entreprise_modif', 'date_modif', 'id_parapheur', 'date_cloture_parapheur', 'montant_retenue_garantie', 'motif_rejet', 'origine', 'validation_via_exec', 'date_paiement', 'date_derniere_synchronisation', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonExecFacturePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Intitule' => 1, 'Numero' => 2, 'IdContrat' => 3, 'IdContractant' => 4, 'Statut' => 5, 'DateDepot' => 6, 'DateValidation' => 7, 'IdAgentValidation' => 8, 'DateRejet' => 9, 'IdAgentRejet' => 10, 'MontantFactureHt' => 11, 'MontantFactureTtc' => 12, 'MontantAPayeHt' => 13, 'MontantAPayeTtc' => 14, 'MontantPayeHt' => 15, 'MontantPayeTtc' => 16, 'Commentaire' => 17, 'OriginePiece' => 18, 'NumeroWorkflow' => 19, 'IdAgentCrea' => 20, 'IdEntrepriseCrea' => 21, 'DateCrea' => 22, 'IdAgentModif' => 23, 'IdEntrepriseModif' => 24, 'DateModif' => 25, 'IdParapheur' => 26, 'DateClotureParapheur' => 27, 'MontantRetenueGarantie' => 28, 'MotifRejet' => 29, 'Origine' => 30, 'ValidationViaExec' => 31, 'DatePaiement' => 32, 'DateDerniereSynchronisation' => 33, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'intitule' => 1, 'numero' => 2, 'idContrat' => 3, 'idContractant' => 4, 'statut' => 5, 'dateDepot' => 6, 'dateValidation' => 7, 'idAgentValidation' => 8, 'dateRejet' => 9, 'idAgentRejet' => 10, 'montantFactureHt' => 11, 'montantFactureTtc' => 12, 'montantAPayeHt' => 13, 'montantAPayeTtc' => 14, 'montantPayeHt' => 15, 'montantPayeTtc' => 16, 'commentaire' => 17, 'originePiece' => 18, 'numeroWorkflow' => 19, 'idAgentCrea' => 20, 'idEntrepriseCrea' => 21, 'dateCrea' => 22, 'idAgentModif' => 23, 'idEntrepriseModif' => 24, 'dateModif' => 25, 'idParapheur' => 26, 'dateClotureParapheur' => 27, 'montantRetenueGarantie' => 28, 'motifRejet' => 29, 'origine' => 30, 'validationViaExec' => 31, 'datePaiement' => 32, 'dateDerniereSynchronisation' => 33, ),
        BasePeer::TYPE_COLNAME => array (CommonExecFacturePeer::ID => 0, CommonExecFacturePeer::INTITULE => 1, CommonExecFacturePeer::NUMERO => 2, CommonExecFacturePeer::ID_CONTRAT => 3, CommonExecFacturePeer::ID_CONTRACTANT => 4, CommonExecFacturePeer::STATUT => 5, CommonExecFacturePeer::DATE_DEPOT => 6, CommonExecFacturePeer::DATE_VALIDATION => 7, CommonExecFacturePeer::ID_AGENT_VALIDATION => 8, CommonExecFacturePeer::DATE_REJET => 9, CommonExecFacturePeer::ID_AGENT_REJET => 10, CommonExecFacturePeer::MONTANT_FACTURE_HT => 11, CommonExecFacturePeer::MONTANT_FACTURE_TTC => 12, CommonExecFacturePeer::MONTANT_A_PAYE_HT => 13, CommonExecFacturePeer::MONTANT_A_PAYE_TTC => 14, CommonExecFacturePeer::MONTANT_PAYE_HT => 15, CommonExecFacturePeer::MONTANT_PAYE_TTC => 16, CommonExecFacturePeer::COMMENTAIRE => 17, CommonExecFacturePeer::ORIGINE_PIECE => 18, CommonExecFacturePeer::NUMERO_WORKFLOW => 19, CommonExecFacturePeer::ID_AGENT_CREA => 20, CommonExecFacturePeer::ID_ENTREPRISE_CREA => 21, CommonExecFacturePeer::DATE_CREA => 22, CommonExecFacturePeer::ID_AGENT_MODIF => 23, CommonExecFacturePeer::ID_ENTREPRISE_MODIF => 24, CommonExecFacturePeer::DATE_MODIF => 25, CommonExecFacturePeer::ID_PARAPHEUR => 26, CommonExecFacturePeer::DATE_CLOTURE_PARAPHEUR => 27, CommonExecFacturePeer::MONTANT_RETENUE_GARANTIE => 28, CommonExecFacturePeer::MOTIF_REJET => 29, CommonExecFacturePeer::ORIGINE => 30, CommonExecFacturePeer::VALIDATION_VIA_EXEC => 31, CommonExecFacturePeer::DATE_PAIEMENT => 32, CommonExecFacturePeer::DATE_DERNIERE_SYNCHRONISATION => 33, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'INTITULE' => 1, 'NUMERO' => 2, 'ID_CONTRAT' => 3, 'ID_CONTRACTANT' => 4, 'STATUT' => 5, 'DATE_DEPOT' => 6, 'DATE_VALIDATION' => 7, 'ID_AGENT_VALIDATION' => 8, 'DATE_REJET' => 9, 'ID_AGENT_REJET' => 10, 'MONTANT_FACTURE_HT' => 11, 'MONTANT_FACTURE_TTC' => 12, 'MONTANT_A_PAYE_HT' => 13, 'MONTANT_A_PAYE_TTC' => 14, 'MONTANT_PAYE_HT' => 15, 'MONTANT_PAYE_TTC' => 16, 'COMMENTAIRE' => 17, 'ORIGINE_PIECE' => 18, 'NUMERO_WORKFLOW' => 19, 'ID_AGENT_CREA' => 20, 'ID_ENTREPRISE_CREA' => 21, 'DATE_CREA' => 22, 'ID_AGENT_MODIF' => 23, 'ID_ENTREPRISE_MODIF' => 24, 'DATE_MODIF' => 25, 'ID_PARAPHEUR' => 26, 'DATE_CLOTURE_PARAPHEUR' => 27, 'MONTANT_RETENUE_GARANTIE' => 28, 'MOTIF_REJET' => 29, 'ORIGINE' => 30, 'VALIDATION_VIA_EXEC' => 31, 'DATE_PAIEMENT' => 32, 'DATE_DERNIERE_SYNCHRONISATION' => 33, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'intitule' => 1, 'numero' => 2, 'id_contrat' => 3, 'id_contractant' => 4, 'statut' => 5, 'date_depot' => 6, 'date_validation' => 7, 'id_agent_validation' => 8, 'date_rejet' => 9, 'id_agent_rejet' => 10, 'montant_facture_ht' => 11, 'montant_facture_ttc' => 12, 'montant_a_paye_ht' => 13, 'montant_a_paye_ttc' => 14, 'montant_paye_ht' => 15, 'montant_paye_ttc' => 16, 'commentaire' => 17, 'origine_piece' => 18, 'numero_workflow' => 19, 'id_agent_crea' => 20, 'id_entreprise_crea' => 21, 'date_crea' => 22, 'id_agent_modif' => 23, 'id_entreprise_modif' => 24, 'date_modif' => 25, 'id_parapheur' => 26, 'date_cloture_parapheur' => 27, 'montant_retenue_garantie' => 28, 'motif_rejet' => 29, 'origine' => 30, 'validation_via_exec' => 31, 'date_paiement' => 32, 'date_derniere_synchronisation' => 33, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, )
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
        $toNames = CommonExecFacturePeer::getFieldNames($toType);
        $key = isset(CommonExecFacturePeer::$fieldKeys[$fromType][$name]) ? CommonExecFacturePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonExecFacturePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonExecFacturePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonExecFacturePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonExecFacturePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonExecFacturePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonExecFacturePeer::ID);
            $criteria->addSelectColumn(CommonExecFacturePeer::INTITULE);
            $criteria->addSelectColumn(CommonExecFacturePeer::NUMERO);
            $criteria->addSelectColumn(CommonExecFacturePeer::ID_CONTRAT);
            $criteria->addSelectColumn(CommonExecFacturePeer::ID_CONTRACTANT);
            $criteria->addSelectColumn(CommonExecFacturePeer::STATUT);
            $criteria->addSelectColumn(CommonExecFacturePeer::DATE_DEPOT);
            $criteria->addSelectColumn(CommonExecFacturePeer::DATE_VALIDATION);
            $criteria->addSelectColumn(CommonExecFacturePeer::ID_AGENT_VALIDATION);
            $criteria->addSelectColumn(CommonExecFacturePeer::DATE_REJET);
            $criteria->addSelectColumn(CommonExecFacturePeer::ID_AGENT_REJET);
            $criteria->addSelectColumn(CommonExecFacturePeer::MONTANT_FACTURE_HT);
            $criteria->addSelectColumn(CommonExecFacturePeer::MONTANT_FACTURE_TTC);
            $criteria->addSelectColumn(CommonExecFacturePeer::MONTANT_A_PAYE_HT);
            $criteria->addSelectColumn(CommonExecFacturePeer::MONTANT_A_PAYE_TTC);
            $criteria->addSelectColumn(CommonExecFacturePeer::MONTANT_PAYE_HT);
            $criteria->addSelectColumn(CommonExecFacturePeer::MONTANT_PAYE_TTC);
            $criteria->addSelectColumn(CommonExecFacturePeer::COMMENTAIRE);
            $criteria->addSelectColumn(CommonExecFacturePeer::ORIGINE_PIECE);
            $criteria->addSelectColumn(CommonExecFacturePeer::NUMERO_WORKFLOW);
            $criteria->addSelectColumn(CommonExecFacturePeer::ID_AGENT_CREA);
            $criteria->addSelectColumn(CommonExecFacturePeer::ID_ENTREPRISE_CREA);
            $criteria->addSelectColumn(CommonExecFacturePeer::DATE_CREA);
            $criteria->addSelectColumn(CommonExecFacturePeer::ID_AGENT_MODIF);
            $criteria->addSelectColumn(CommonExecFacturePeer::ID_ENTREPRISE_MODIF);
            $criteria->addSelectColumn(CommonExecFacturePeer::DATE_MODIF);
            $criteria->addSelectColumn(CommonExecFacturePeer::ID_PARAPHEUR);
            $criteria->addSelectColumn(CommonExecFacturePeer::DATE_CLOTURE_PARAPHEUR);
            $criteria->addSelectColumn(CommonExecFacturePeer::MONTANT_RETENUE_GARANTIE);
            $criteria->addSelectColumn(CommonExecFacturePeer::MOTIF_REJET);
            $criteria->addSelectColumn(CommonExecFacturePeer::ORIGINE);
            $criteria->addSelectColumn(CommonExecFacturePeer::VALIDATION_VIA_EXEC);
            $criteria->addSelectColumn(CommonExecFacturePeer::DATE_PAIEMENT);
            $criteria->addSelectColumn(CommonExecFacturePeer::DATE_DERNIERE_SYNCHRONISATION);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.intitule');
            $criteria->addSelectColumn($alias . '.numero');
            $criteria->addSelectColumn($alias . '.id_contrat');
            $criteria->addSelectColumn($alias . '.id_contractant');
            $criteria->addSelectColumn($alias . '.statut');
            $criteria->addSelectColumn($alias . '.date_depot');
            $criteria->addSelectColumn($alias . '.date_validation');
            $criteria->addSelectColumn($alias . '.id_agent_validation');
            $criteria->addSelectColumn($alias . '.date_rejet');
            $criteria->addSelectColumn($alias . '.id_agent_rejet');
            $criteria->addSelectColumn($alias . '.montant_facture_ht');
            $criteria->addSelectColumn($alias . '.montant_facture_ttc');
            $criteria->addSelectColumn($alias . '.montant_a_paye_ht');
            $criteria->addSelectColumn($alias . '.montant_a_paye_ttc');
            $criteria->addSelectColumn($alias . '.montant_paye_ht');
            $criteria->addSelectColumn($alias . '.montant_paye_ttc');
            $criteria->addSelectColumn($alias . '.commentaire');
            $criteria->addSelectColumn($alias . '.origine_piece');
            $criteria->addSelectColumn($alias . '.numero_workflow');
            $criteria->addSelectColumn($alias . '.id_agent_crea');
            $criteria->addSelectColumn($alias . '.id_entreprise_crea');
            $criteria->addSelectColumn($alias . '.date_crea');
            $criteria->addSelectColumn($alias . '.id_agent_modif');
            $criteria->addSelectColumn($alias . '.id_entreprise_modif');
            $criteria->addSelectColumn($alias . '.date_modif');
            $criteria->addSelectColumn($alias . '.id_parapheur');
            $criteria->addSelectColumn($alias . '.date_cloture_parapheur');
            $criteria->addSelectColumn($alias . '.montant_retenue_garantie');
            $criteria->addSelectColumn($alias . '.motif_rejet');
            $criteria->addSelectColumn($alias . '.origine');
            $criteria->addSelectColumn($alias . '.validation_via_exec');
            $criteria->addSelectColumn($alias . '.date_paiement');
            $criteria->addSelectColumn($alias . '.date_derniere_synchronisation');
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
        $criteria->setPrimaryTableName(CommonExecFacturePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecFacturePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonExecFacturePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonExecFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecFacture
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonExecFacturePeer::doSelect($critcopy, $con);
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
        return CommonExecFacturePeer::populateObjects(CommonExecFacturePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonExecFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonExecFacturePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecFacturePeer::DATABASE_NAME);

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
     * @param      CommonExecFacture $obj A CommonExecFacture object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonExecFacturePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonExecFacture object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonExecFacture) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonExecFacture object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonExecFacturePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonExecFacture Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonExecFacturePeer::$instances[$key])) {
                return CommonExecFacturePeer::$instances[$key];
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
        foreach (CommonExecFacturePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonExecFacturePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to exec_facture
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
        $cls = CommonExecFacturePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonExecFacturePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonExecFacturePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonExecFacturePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonExecFacture object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonExecFacturePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonExecFacturePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonExecFacturePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonExecFacturePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonExecFacturePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonExecContractant table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonExecContractant(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecFacturePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecFacturePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecFacturePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecFacturePeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonExecContrat table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonExecContrat(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecFacturePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecFacturePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecFacturePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecFacturePeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

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
     * Selects a collection of CommonExecFacture objects pre-filled with their CommonExecContractant objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecFacture objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecContractant(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecFacturePeer::DATABASE_NAME);
        }

        CommonExecFacturePeer::addSelectColumns($criteria);
        $startcol = CommonExecFacturePeer::NUM_HYDRATE_COLUMNS;
        CommonExecContractantPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecFacturePeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecFacturePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecFacturePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecFacturePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecFacturePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonExecContractantPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonExecContractantPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecContractantPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonExecContractantPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonExecFacture) to $obj2 (CommonExecContractant)
                $obj2->addCommonExecFacture($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecFacture objects pre-filled with their CommonExecContrat objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecFacture objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecContrat(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecFacturePeer::DATABASE_NAME);
        }

        CommonExecFacturePeer::addSelectColumns($criteria);
        $startcol = CommonExecFacturePeer::NUM_HYDRATE_COLUMNS;
        CommonExecContratPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecFacturePeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecFacturePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecFacturePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecFacturePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecFacturePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonExecContratPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecContratPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonExecContratPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonExecFacture) to $obj2 (CommonExecContrat)
                $obj2->addCommonExecFacture($obj1);

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
        $criteria->setPrimaryTableName(CommonExecFacturePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecFacturePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecFacturePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecFacturePeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecFacturePeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

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
     * Selects a collection of CommonExecFacture objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecFacture objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecFacturePeer::DATABASE_NAME);
        }

        CommonExecFacturePeer::addSelectColumns($criteria);
        $startcol2 = CommonExecFacturePeer::NUM_HYDRATE_COLUMNS;

        CommonExecContractantPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecContractantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecFacturePeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecFacturePeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecFacturePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecFacturePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecFacturePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecFacturePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonExecContractant rows

            $key2 = CommonExecContractantPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonExecContractantPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecContractantPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonExecContractantPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonExecFacture) to the collection in $obj2 (CommonExecContractant)
                $obj2->addCommonExecFacture($obj1);
            } // if joined row not null

            // Add objects for joined CommonExecContrat rows

            $key3 = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CommonExecContratPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CommonExecContratPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonExecContratPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (CommonExecFacture) to the collection in $obj3 (CommonExecContrat)
                $obj3->addCommonExecFacture($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonExecContractant table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonExecContractant(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecFacturePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecFacturePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecFacturePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecFacturePeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonExecContrat table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonExecContrat(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecFacturePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecFacturePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecFacturePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecFacturePeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

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
     * Selects a collection of CommonExecFacture objects pre-filled with all related objects except CommonExecContractant.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecFacture objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonExecContractant(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecFacturePeer::DATABASE_NAME);
        }

        CommonExecFacturePeer::addSelectColumns($criteria);
        $startcol2 = CommonExecFacturePeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecFacturePeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecFacturePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecFacturePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecFacturePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecFacturePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonExecContrat rows

                $key2 = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonExecContratPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonExecContratPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonExecContratPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonExecFacture) to the collection in $obj2 (CommonExecContrat)
                $obj2->addCommonExecFacture($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecFacture objects pre-filled with all related objects except CommonExecContrat.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecFacture objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonExecContrat(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecFacturePeer::DATABASE_NAME);
        }

        CommonExecFacturePeer::addSelectColumns($criteria);
        $startcol2 = CommonExecFacturePeer::NUM_HYDRATE_COLUMNS;

        CommonExecContractantPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecContractantPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecFacturePeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecFacturePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecFacturePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecFacturePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecFacturePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonExecContractant rows

                $key2 = CommonExecContractantPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonExecContractantPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonExecContractantPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonExecContractantPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonExecFacture) to the collection in $obj2 (CommonExecContractant)
                $obj2->addCommonExecFacture($obj1);

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
        return Propel::getDatabaseMap(CommonExecFacturePeer::DATABASE_NAME)->getTable(CommonExecFacturePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonExecFacturePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonExecFacturePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonExecFactureTableMap());
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
        return CommonExecFacturePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonExecFacture or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecFacture object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecFacturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonExecFacture object
        }

        if ($criteria->containsKey(CommonExecFacturePeer::ID) && $criteria->keyContainsValue(CommonExecFacturePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonExecFacturePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonExecFacturePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonExecFacture or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecFacture object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecFacturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonExecFacturePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonExecFacturePeer::ID);
            $value = $criteria->remove(CommonExecFacturePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonExecFacturePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonExecFacturePeer::TABLE_NAME);
            }

        } else { // $values is CommonExecFacture object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonExecFacturePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the exec_facture table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecFacturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonExecFacturePeer::TABLE_NAME, $con, CommonExecFacturePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonExecFacturePeer::clearInstancePool();
            CommonExecFacturePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonExecFacture or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonExecFacture object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonExecFacturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonExecFacturePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonExecFacture) { // it's a model object
            // invalidate the cache for this single object
            CommonExecFacturePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonExecFacturePeer::DATABASE_NAME);
            $criteria->add(CommonExecFacturePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonExecFacturePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecFacturePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonExecFacturePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonExecFacture object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonExecFacture $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonExecFacturePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonExecFacturePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonExecFacturePeer::DATABASE_NAME, CommonExecFacturePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonExecFacture
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonExecFacturePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonExecFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonExecFacturePeer::DATABASE_NAME);
        $criteria->add(CommonExecFacturePeer::ID, $pk);

        $v = CommonExecFacturePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonExecFacture[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonExecFacturePeer::DATABASE_NAME);
            $criteria->add(CommonExecFacturePeer::ID, $pks, Criteria::IN);
            $objs = CommonExecFacturePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonExecFacturePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonExecFacturePeer::buildTableMap();

