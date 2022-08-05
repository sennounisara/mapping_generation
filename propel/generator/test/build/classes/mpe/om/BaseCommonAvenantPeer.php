<?php


/**
 * Base static class for performing query and update operations on the 'Avenant' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonAvenantPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Avenant';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonAvenant';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonAvenantTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 29;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 29;

    /** the column name for the id_avenant field */
    const ID_AVENANT = 'Avenant.id_avenant';

    /** the column name for the organisme field */
    const ORGANISME = 'Avenant.organisme';

    /** the column name for the id_contrat field */
    const ID_CONTRAT = 'Avenant.id_contrat';

    /** the column name for the numero_avenant field */
    const NUMERO_AVENANT = 'Avenant.numero_avenant';

    /** the column name for the type_avenant field */
    const TYPE_AVENANT = 'Avenant.type_avenant';

    /** the column name for the objet_avenant field */
    const OBJET_AVENANT = 'Avenant.objet_avenant';

    /** the column name for the montant_avenant_ht field */
    const MONTANT_AVENANT_HT = 'Avenant.montant_avenant_ht';

    /** the column name for the montant_avenant_ttc field */
    const MONTANT_AVENANT_TTC = 'Avenant.montant_avenant_ttc';

    /** the column name for the pourcentage_augmentation_marche_initial field */
    const POURCENTAGE_AUGMENTATION_MARCHE_INITIAL = 'Avenant.pourcentage_augmentation_marche_initial';

    /** the column name for the pourcentage_augmentation_cumule field */
    const POURCENTAGE_AUGMENTATION_CUMULE = 'Avenant.pourcentage_augmentation_cumule';

    /** the column name for the montant_total_marche_tout_avenant_cumule field */
    const MONTANT_TOTAL_MARCHE_TOUT_AVENANT_CUMULE = 'Avenant.montant_total_marche_tout_avenant_cumule';

    /** the column name for the date_reception_projet_par_secretaire_cao field */
    const DATE_RECEPTION_PROJET_PAR_SECRETAIRE_CAO = 'Avenant.date_reception_projet_par_secretaire_cao';

    /** the column name for the date_reception_projet_par_charge_etude field */
    const DATE_RECEPTION_PROJET_PAR_CHARGE_ETUDE = 'Avenant.date_reception_projet_par_charge_etude';

    /** the column name for the date_observation_par_sv field */
    const DATE_OBSERVATION_PAR_SV = 'Avenant.date_observation_par_sv';

    /** the column name for the date_retour_projet field */
    const DATE_RETOUR_PROJET = 'Avenant.date_retour_projet';

    /** the column name for the date_validation_projet field */
    const DATE_VALIDATION_PROJET = 'Avenant.date_validation_projet';

    /** the column name for the date_validation_projet_vu_par field */
    const DATE_VALIDATION_PROJET_VU_PAR = 'Avenant.date_validation_projet_vu_par';

    /** the column name for the date_cao field */
    const DATE_CAO = 'Avenant.date_cao';

    /** the column name for the avis_cao field */
    const AVIS_CAO = 'Avenant.avis_cao';

    /** the column name for the date_cp field */
    const DATE_CP = 'Avenant.date_cp';

    /** the column name for the date_signature_avenant field */
    const DATE_SIGNATURE_AVENANT = 'Avenant.date_signature_avenant';

    /** the column name for the date_reception_dossier field */
    const DATE_RECEPTION_DOSSIER = 'Avenant.date_reception_dossier';

    /** the column name for the date_formulation_observation_par_sv_sur_sdossier field */
    const DATE_FORMULATION_OBSERVATION_PAR_SV_SUR_SDOSSIER = 'Avenant.date_formulation_observation_par_sv_sur_sdossier';

    /** the column name for the date_retour_dossier_finalise field */
    const DATE_RETOUR_DOSSIER_FINALISE = 'Avenant.date_retour_dossier_finalise';

    /** the column name for the date_validation_dossier_finalise field */
    const DATE_VALIDATION_DOSSIER_FINALISE = 'Avenant.date_validation_dossier_finalise';

    /** the column name for the date_transmission_prefecture field */
    const DATE_TRANSMISSION_PREFECTURE = 'Avenant.date_transmission_prefecture';

    /** the column name for the date_notification field */
    const DATE_NOTIFICATION = 'Avenant.date_notification';

    /** the column name for the operation_validation_vues_par field */
    const OPERATION_VALIDATION_VUES_PAR = 'Avenant.operation_validation_vues_par';

    /** the column name for the commentaires field */
    const COMMENTAIRES = 'Avenant.commentaires';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonAvenant objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonAvenant[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonAvenantPeer::$fieldNames[CommonAvenantPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdAvenant', 'Organisme', 'IdContrat', 'NumeroAvenant', 'TypeAvenant', 'ObjetAvenant', 'MontantAvenantHt', 'MontantAvenantTtc', 'PourcentageAugmentationMarcheInitial', 'PourcentageAugmentationCumule', 'MontantTotalMarcheToutAvenantCumule', 'DateReceptionProjetParSecretaireCao', 'DateReceptionProjetParChargeEtude', 'DateObservationParSv', 'DateRetourProjet', 'DateValidationProjet', 'DateValidationProjetVuPar', 'DateCao', 'AvisCao', 'DateCp', 'DateSignatureAvenant', 'DateReceptionDossier', 'DateFormulationObservationParSvSurSdossier', 'DateRetourDossierFinalise', 'DateValidationDossierFinalise', 'DateTransmissionPrefecture', 'DateNotification', 'OperationValidationVuesPar', 'Commentaires', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idAvenant', 'organisme', 'idContrat', 'numeroAvenant', 'typeAvenant', 'objetAvenant', 'montantAvenantHt', 'montantAvenantTtc', 'pourcentageAugmentationMarcheInitial', 'pourcentageAugmentationCumule', 'montantTotalMarcheToutAvenantCumule', 'dateReceptionProjetParSecretaireCao', 'dateReceptionProjetParChargeEtude', 'dateObservationParSv', 'dateRetourProjet', 'dateValidationProjet', 'dateValidationProjetVuPar', 'dateCao', 'avisCao', 'dateCp', 'dateSignatureAvenant', 'dateReceptionDossier', 'dateFormulationObservationParSvSurSdossier', 'dateRetourDossierFinalise', 'dateValidationDossierFinalise', 'dateTransmissionPrefecture', 'dateNotification', 'operationValidationVuesPar', 'commentaires', ),
        BasePeer::TYPE_COLNAME => array (CommonAvenantPeer::ID_AVENANT, CommonAvenantPeer::ORGANISME, CommonAvenantPeer::ID_CONTRAT, CommonAvenantPeer::NUMERO_AVENANT, CommonAvenantPeer::TYPE_AVENANT, CommonAvenantPeer::OBJET_AVENANT, CommonAvenantPeer::MONTANT_AVENANT_HT, CommonAvenantPeer::MONTANT_AVENANT_TTC, CommonAvenantPeer::POURCENTAGE_AUGMENTATION_MARCHE_INITIAL, CommonAvenantPeer::POURCENTAGE_AUGMENTATION_CUMULE, CommonAvenantPeer::MONTANT_TOTAL_MARCHE_TOUT_AVENANT_CUMULE, CommonAvenantPeer::DATE_RECEPTION_PROJET_PAR_SECRETAIRE_CAO, CommonAvenantPeer::DATE_RECEPTION_PROJET_PAR_CHARGE_ETUDE, CommonAvenantPeer::DATE_OBSERVATION_PAR_SV, CommonAvenantPeer::DATE_RETOUR_PROJET, CommonAvenantPeer::DATE_VALIDATION_PROJET, CommonAvenantPeer::DATE_VALIDATION_PROJET_VU_PAR, CommonAvenantPeer::DATE_CAO, CommonAvenantPeer::AVIS_CAO, CommonAvenantPeer::DATE_CP, CommonAvenantPeer::DATE_SIGNATURE_AVENANT, CommonAvenantPeer::DATE_RECEPTION_DOSSIER, CommonAvenantPeer::DATE_FORMULATION_OBSERVATION_PAR_SV_SUR_SDOSSIER, CommonAvenantPeer::DATE_RETOUR_DOSSIER_FINALISE, CommonAvenantPeer::DATE_VALIDATION_DOSSIER_FINALISE, CommonAvenantPeer::DATE_TRANSMISSION_PREFECTURE, CommonAvenantPeer::DATE_NOTIFICATION, CommonAvenantPeer::OPERATION_VALIDATION_VUES_PAR, CommonAvenantPeer::COMMENTAIRES, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_AVENANT', 'ORGANISME', 'ID_CONTRAT', 'NUMERO_AVENANT', 'TYPE_AVENANT', 'OBJET_AVENANT', 'MONTANT_AVENANT_HT', 'MONTANT_AVENANT_TTC', 'POURCENTAGE_AUGMENTATION_MARCHE_INITIAL', 'POURCENTAGE_AUGMENTATION_CUMULE', 'MONTANT_TOTAL_MARCHE_TOUT_AVENANT_CUMULE', 'DATE_RECEPTION_PROJET_PAR_SECRETAIRE_CAO', 'DATE_RECEPTION_PROJET_PAR_CHARGE_ETUDE', 'DATE_OBSERVATION_PAR_SV', 'DATE_RETOUR_PROJET', 'DATE_VALIDATION_PROJET', 'DATE_VALIDATION_PROJET_VU_PAR', 'DATE_CAO', 'AVIS_CAO', 'DATE_CP', 'DATE_SIGNATURE_AVENANT', 'DATE_RECEPTION_DOSSIER', 'DATE_FORMULATION_OBSERVATION_PAR_SV_SUR_SDOSSIER', 'DATE_RETOUR_DOSSIER_FINALISE', 'DATE_VALIDATION_DOSSIER_FINALISE', 'DATE_TRANSMISSION_PREFECTURE', 'DATE_NOTIFICATION', 'OPERATION_VALIDATION_VUES_PAR', 'COMMENTAIRES', ),
        BasePeer::TYPE_FIELDNAME => array ('id_avenant', 'organisme', 'id_contrat', 'numero_avenant', 'type_avenant', 'objet_avenant', 'montant_avenant_ht', 'montant_avenant_ttc', 'pourcentage_augmentation_marche_initial', 'pourcentage_augmentation_cumule', 'montant_total_marche_tout_avenant_cumule', 'date_reception_projet_par_secretaire_cao', 'date_reception_projet_par_charge_etude', 'date_observation_par_sv', 'date_retour_projet', 'date_validation_projet', 'date_validation_projet_vu_par', 'date_cao', 'avis_cao', 'date_cp', 'date_signature_avenant', 'date_reception_dossier', 'date_formulation_observation_par_sv_sur_sdossier', 'date_retour_dossier_finalise', 'date_validation_dossier_finalise', 'date_transmission_prefecture', 'date_notification', 'operation_validation_vues_par', 'commentaires', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonAvenantPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdAvenant' => 0, 'Organisme' => 1, 'IdContrat' => 2, 'NumeroAvenant' => 3, 'TypeAvenant' => 4, 'ObjetAvenant' => 5, 'MontantAvenantHt' => 6, 'MontantAvenantTtc' => 7, 'PourcentageAugmentationMarcheInitial' => 8, 'PourcentageAugmentationCumule' => 9, 'MontantTotalMarcheToutAvenantCumule' => 10, 'DateReceptionProjetParSecretaireCao' => 11, 'DateReceptionProjetParChargeEtude' => 12, 'DateObservationParSv' => 13, 'DateRetourProjet' => 14, 'DateValidationProjet' => 15, 'DateValidationProjetVuPar' => 16, 'DateCao' => 17, 'AvisCao' => 18, 'DateCp' => 19, 'DateSignatureAvenant' => 20, 'DateReceptionDossier' => 21, 'DateFormulationObservationParSvSurSdossier' => 22, 'DateRetourDossierFinalise' => 23, 'DateValidationDossierFinalise' => 24, 'DateTransmissionPrefecture' => 25, 'DateNotification' => 26, 'OperationValidationVuesPar' => 27, 'Commentaires' => 28, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idAvenant' => 0, 'organisme' => 1, 'idContrat' => 2, 'numeroAvenant' => 3, 'typeAvenant' => 4, 'objetAvenant' => 5, 'montantAvenantHt' => 6, 'montantAvenantTtc' => 7, 'pourcentageAugmentationMarcheInitial' => 8, 'pourcentageAugmentationCumule' => 9, 'montantTotalMarcheToutAvenantCumule' => 10, 'dateReceptionProjetParSecretaireCao' => 11, 'dateReceptionProjetParChargeEtude' => 12, 'dateObservationParSv' => 13, 'dateRetourProjet' => 14, 'dateValidationProjet' => 15, 'dateValidationProjetVuPar' => 16, 'dateCao' => 17, 'avisCao' => 18, 'dateCp' => 19, 'dateSignatureAvenant' => 20, 'dateReceptionDossier' => 21, 'dateFormulationObservationParSvSurSdossier' => 22, 'dateRetourDossierFinalise' => 23, 'dateValidationDossierFinalise' => 24, 'dateTransmissionPrefecture' => 25, 'dateNotification' => 26, 'operationValidationVuesPar' => 27, 'commentaires' => 28, ),
        BasePeer::TYPE_COLNAME => array (CommonAvenantPeer::ID_AVENANT => 0, CommonAvenantPeer::ORGANISME => 1, CommonAvenantPeer::ID_CONTRAT => 2, CommonAvenantPeer::NUMERO_AVENANT => 3, CommonAvenantPeer::TYPE_AVENANT => 4, CommonAvenantPeer::OBJET_AVENANT => 5, CommonAvenantPeer::MONTANT_AVENANT_HT => 6, CommonAvenantPeer::MONTANT_AVENANT_TTC => 7, CommonAvenantPeer::POURCENTAGE_AUGMENTATION_MARCHE_INITIAL => 8, CommonAvenantPeer::POURCENTAGE_AUGMENTATION_CUMULE => 9, CommonAvenantPeer::MONTANT_TOTAL_MARCHE_TOUT_AVENANT_CUMULE => 10, CommonAvenantPeer::DATE_RECEPTION_PROJET_PAR_SECRETAIRE_CAO => 11, CommonAvenantPeer::DATE_RECEPTION_PROJET_PAR_CHARGE_ETUDE => 12, CommonAvenantPeer::DATE_OBSERVATION_PAR_SV => 13, CommonAvenantPeer::DATE_RETOUR_PROJET => 14, CommonAvenantPeer::DATE_VALIDATION_PROJET => 15, CommonAvenantPeer::DATE_VALIDATION_PROJET_VU_PAR => 16, CommonAvenantPeer::DATE_CAO => 17, CommonAvenantPeer::AVIS_CAO => 18, CommonAvenantPeer::DATE_CP => 19, CommonAvenantPeer::DATE_SIGNATURE_AVENANT => 20, CommonAvenantPeer::DATE_RECEPTION_DOSSIER => 21, CommonAvenantPeer::DATE_FORMULATION_OBSERVATION_PAR_SV_SUR_SDOSSIER => 22, CommonAvenantPeer::DATE_RETOUR_DOSSIER_FINALISE => 23, CommonAvenantPeer::DATE_VALIDATION_DOSSIER_FINALISE => 24, CommonAvenantPeer::DATE_TRANSMISSION_PREFECTURE => 25, CommonAvenantPeer::DATE_NOTIFICATION => 26, CommonAvenantPeer::OPERATION_VALIDATION_VUES_PAR => 27, CommonAvenantPeer::COMMENTAIRES => 28, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_AVENANT' => 0, 'ORGANISME' => 1, 'ID_CONTRAT' => 2, 'NUMERO_AVENANT' => 3, 'TYPE_AVENANT' => 4, 'OBJET_AVENANT' => 5, 'MONTANT_AVENANT_HT' => 6, 'MONTANT_AVENANT_TTC' => 7, 'POURCENTAGE_AUGMENTATION_MARCHE_INITIAL' => 8, 'POURCENTAGE_AUGMENTATION_CUMULE' => 9, 'MONTANT_TOTAL_MARCHE_TOUT_AVENANT_CUMULE' => 10, 'DATE_RECEPTION_PROJET_PAR_SECRETAIRE_CAO' => 11, 'DATE_RECEPTION_PROJET_PAR_CHARGE_ETUDE' => 12, 'DATE_OBSERVATION_PAR_SV' => 13, 'DATE_RETOUR_PROJET' => 14, 'DATE_VALIDATION_PROJET' => 15, 'DATE_VALIDATION_PROJET_VU_PAR' => 16, 'DATE_CAO' => 17, 'AVIS_CAO' => 18, 'DATE_CP' => 19, 'DATE_SIGNATURE_AVENANT' => 20, 'DATE_RECEPTION_DOSSIER' => 21, 'DATE_FORMULATION_OBSERVATION_PAR_SV_SUR_SDOSSIER' => 22, 'DATE_RETOUR_DOSSIER_FINALISE' => 23, 'DATE_VALIDATION_DOSSIER_FINALISE' => 24, 'DATE_TRANSMISSION_PREFECTURE' => 25, 'DATE_NOTIFICATION' => 26, 'OPERATION_VALIDATION_VUES_PAR' => 27, 'COMMENTAIRES' => 28, ),
        BasePeer::TYPE_FIELDNAME => array ('id_avenant' => 0, 'organisme' => 1, 'id_contrat' => 2, 'numero_avenant' => 3, 'type_avenant' => 4, 'objet_avenant' => 5, 'montant_avenant_ht' => 6, 'montant_avenant_ttc' => 7, 'pourcentage_augmentation_marche_initial' => 8, 'pourcentage_augmentation_cumule' => 9, 'montant_total_marche_tout_avenant_cumule' => 10, 'date_reception_projet_par_secretaire_cao' => 11, 'date_reception_projet_par_charge_etude' => 12, 'date_observation_par_sv' => 13, 'date_retour_projet' => 14, 'date_validation_projet' => 15, 'date_validation_projet_vu_par' => 16, 'date_cao' => 17, 'avis_cao' => 18, 'date_cp' => 19, 'date_signature_avenant' => 20, 'date_reception_dossier' => 21, 'date_formulation_observation_par_sv_sur_sdossier' => 22, 'date_retour_dossier_finalise' => 23, 'date_validation_dossier_finalise' => 24, 'date_transmission_prefecture' => 25, 'date_notification' => 26, 'operation_validation_vues_par' => 27, 'commentaires' => 28, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
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
        $toNames = CommonAvenantPeer::getFieldNames($toType);
        $key = isset(CommonAvenantPeer::$fieldKeys[$fromType][$name]) ? CommonAvenantPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonAvenantPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonAvenantPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonAvenantPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonAvenantPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonAvenantPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonAvenantPeer::ID_AVENANT);
            $criteria->addSelectColumn(CommonAvenantPeer::ORGANISME);
            $criteria->addSelectColumn(CommonAvenantPeer::ID_CONTRAT);
            $criteria->addSelectColumn(CommonAvenantPeer::NUMERO_AVENANT);
            $criteria->addSelectColumn(CommonAvenantPeer::TYPE_AVENANT);
            $criteria->addSelectColumn(CommonAvenantPeer::OBJET_AVENANT);
            $criteria->addSelectColumn(CommonAvenantPeer::MONTANT_AVENANT_HT);
            $criteria->addSelectColumn(CommonAvenantPeer::MONTANT_AVENANT_TTC);
            $criteria->addSelectColumn(CommonAvenantPeer::POURCENTAGE_AUGMENTATION_MARCHE_INITIAL);
            $criteria->addSelectColumn(CommonAvenantPeer::POURCENTAGE_AUGMENTATION_CUMULE);
            $criteria->addSelectColumn(CommonAvenantPeer::MONTANT_TOTAL_MARCHE_TOUT_AVENANT_CUMULE);
            $criteria->addSelectColumn(CommonAvenantPeer::DATE_RECEPTION_PROJET_PAR_SECRETAIRE_CAO);
            $criteria->addSelectColumn(CommonAvenantPeer::DATE_RECEPTION_PROJET_PAR_CHARGE_ETUDE);
            $criteria->addSelectColumn(CommonAvenantPeer::DATE_OBSERVATION_PAR_SV);
            $criteria->addSelectColumn(CommonAvenantPeer::DATE_RETOUR_PROJET);
            $criteria->addSelectColumn(CommonAvenantPeer::DATE_VALIDATION_PROJET);
            $criteria->addSelectColumn(CommonAvenantPeer::DATE_VALIDATION_PROJET_VU_PAR);
            $criteria->addSelectColumn(CommonAvenantPeer::DATE_CAO);
            $criteria->addSelectColumn(CommonAvenantPeer::AVIS_CAO);
            $criteria->addSelectColumn(CommonAvenantPeer::DATE_CP);
            $criteria->addSelectColumn(CommonAvenantPeer::DATE_SIGNATURE_AVENANT);
            $criteria->addSelectColumn(CommonAvenantPeer::DATE_RECEPTION_DOSSIER);
            $criteria->addSelectColumn(CommonAvenantPeer::DATE_FORMULATION_OBSERVATION_PAR_SV_SUR_SDOSSIER);
            $criteria->addSelectColumn(CommonAvenantPeer::DATE_RETOUR_DOSSIER_FINALISE);
            $criteria->addSelectColumn(CommonAvenantPeer::DATE_VALIDATION_DOSSIER_FINALISE);
            $criteria->addSelectColumn(CommonAvenantPeer::DATE_TRANSMISSION_PREFECTURE);
            $criteria->addSelectColumn(CommonAvenantPeer::DATE_NOTIFICATION);
            $criteria->addSelectColumn(CommonAvenantPeer::OPERATION_VALIDATION_VUES_PAR);
            $criteria->addSelectColumn(CommonAvenantPeer::COMMENTAIRES);
        } else {
            $criteria->addSelectColumn($alias . '.id_avenant');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.id_contrat');
            $criteria->addSelectColumn($alias . '.numero_avenant');
            $criteria->addSelectColumn($alias . '.type_avenant');
            $criteria->addSelectColumn($alias . '.objet_avenant');
            $criteria->addSelectColumn($alias . '.montant_avenant_ht');
            $criteria->addSelectColumn($alias . '.montant_avenant_ttc');
            $criteria->addSelectColumn($alias . '.pourcentage_augmentation_marche_initial');
            $criteria->addSelectColumn($alias . '.pourcentage_augmentation_cumule');
            $criteria->addSelectColumn($alias . '.montant_total_marche_tout_avenant_cumule');
            $criteria->addSelectColumn($alias . '.date_reception_projet_par_secretaire_cao');
            $criteria->addSelectColumn($alias . '.date_reception_projet_par_charge_etude');
            $criteria->addSelectColumn($alias . '.date_observation_par_sv');
            $criteria->addSelectColumn($alias . '.date_retour_projet');
            $criteria->addSelectColumn($alias . '.date_validation_projet');
            $criteria->addSelectColumn($alias . '.date_validation_projet_vu_par');
            $criteria->addSelectColumn($alias . '.date_cao');
            $criteria->addSelectColumn($alias . '.avis_cao');
            $criteria->addSelectColumn($alias . '.date_cp');
            $criteria->addSelectColumn($alias . '.date_signature_avenant');
            $criteria->addSelectColumn($alias . '.date_reception_dossier');
            $criteria->addSelectColumn($alias . '.date_formulation_observation_par_sv_sur_sdossier');
            $criteria->addSelectColumn($alias . '.date_retour_dossier_finalise');
            $criteria->addSelectColumn($alias . '.date_validation_dossier_finalise');
            $criteria->addSelectColumn($alias . '.date_transmission_prefecture');
            $criteria->addSelectColumn($alias . '.date_notification');
            $criteria->addSelectColumn($alias . '.operation_validation_vues_par');
            $criteria->addSelectColumn($alias . '.commentaires');
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
        $criteria->setPrimaryTableName(CommonAvenantPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAvenantPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonAvenantPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAvenant
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonAvenantPeer::doSelect($critcopy, $con);
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
        return CommonAvenantPeer::populateObjects(CommonAvenantPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonAvenantPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAvenantPeer::DATABASE_NAME);

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
     * @param      CommonAvenant $obj A CommonAvenant object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdAvenant(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonAvenantPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonAvenant object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonAvenant) {
                $key = serialize(array((string) $value->getIdAvenant(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonAvenant object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonAvenantPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonAvenant Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonAvenantPeer::$instances[$key])) {
                return CommonAvenantPeer::$instances[$key];
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
        foreach (CommonAvenantPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonAvenantPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Avenant
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
        $cls = CommonAvenantPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonAvenantPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonAvenantPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonAvenantPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonAvenant object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonAvenantPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonAvenantPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonAvenantPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonAvenantPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonAvenantPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonAvenantPeer::DATABASE_NAME)->getTable(CommonAvenantPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonAvenantPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonAvenantPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonAvenantTableMap());
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
        return CommonAvenantPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonAvenant or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAvenant object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAvenantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonAvenant object
        }

        if ($criteria->containsKey(CommonAvenantPeer::ID_AVENANT) && $criteria->keyContainsValue(CommonAvenantPeer::ID_AVENANT) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonAvenantPeer::ID_AVENANT.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonAvenantPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonAvenant or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAvenant object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAvenantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonAvenantPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonAvenantPeer::ID_AVENANT);
            $value = $criteria->remove(CommonAvenantPeer::ID_AVENANT);
            if ($value) {
                $selectCriteria->add(CommonAvenantPeer::ID_AVENANT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAvenantPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonAvenantPeer::ORGANISME);
            $value = $criteria->remove(CommonAvenantPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonAvenantPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAvenantPeer::TABLE_NAME);
            }

        } else { // $values is CommonAvenant object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonAvenantPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Avenant table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAvenantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonAvenantPeer::TABLE_NAME, $con, CommonAvenantPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonAvenantPeer::clearInstancePool();
            CommonAvenantPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonAvenant or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonAvenant object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonAvenantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonAvenantPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonAvenant) { // it's a model object
            // invalidate the cache for this single object
            CommonAvenantPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonAvenantPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonAvenantPeer::ID_AVENANT, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonAvenantPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonAvenantPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAvenantPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonAvenantPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonAvenant object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonAvenant $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonAvenantPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonAvenantPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonAvenantPeer::DATABASE_NAME, CommonAvenantPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id_avenant
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonAvenant
     */
    public static function retrieveByPK($id_avenant, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_avenant, (string) $organisme));
         if (null !== ($obj = CommonAvenantPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonAvenantPeer::DATABASE_NAME);
        $criteria->add(CommonAvenantPeer::ID_AVENANT, $id_avenant);
        $criteria->add(CommonAvenantPeer::ORGANISME, $organisme);
        $v = CommonAvenantPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonAvenantPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonAvenantPeer::buildTableMap();

