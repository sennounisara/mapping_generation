<?php


/**
 * Base static class for performing query and update operations on the 'AnnonceBoamp' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonAnnonceBoampPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'AnnonceBoamp';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonAnnonceBoamp';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonAnnonceBoampTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 29;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 29;

    /** the column name for the id_boamp field */
    const ID_BOAMP = 'AnnonceBoamp.id_boamp';

    /** the column name for the organisme field */
    const ORGANISME = 'AnnonceBoamp.organisme';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'AnnonceBoamp.consultation_ref';

    /** the column name for the envoi_boamp field */
    const ENVOI_BOAMP = 'AnnonceBoamp.envoi_boamp';

    /** the column name for the date_envoi field */
    const DATE_ENVOI = 'AnnonceBoamp.date_envoi';

    /** the column name for the ann_xml field */
    const ANN_XML = 'AnnonceBoamp.ann_xml';

    /** the column name for the ann_pdf field */
    const ANN_PDF = 'AnnonceBoamp.ann_pdf';

    /** the column name for the ann_form_values field */
    const ANN_FORM_VALUES = 'AnnonceBoamp.ann_form_values';

    /** the column name for the ann_error field */
    const ANN_ERROR = 'AnnonceBoamp.ann_error';

    /** the column name for the type_boamp field */
    const TYPE_BOAMP = 'AnnonceBoamp.type_boamp';

    /** the column name for the type_ann field */
    const TYPE_ANN = 'AnnonceBoamp.type_ann';

    /** the column name for the datepub field */
    const DATEPUB = 'AnnonceBoamp.datepub';

    /** the column name for the num_ann field */
    const NUM_ANN = 'AnnonceBoamp.num_ann';

    /** the column name for the parution field */
    const PARUTION = 'AnnonceBoamp.parution';

    /** the column name for the id_jo field */
    const ID_JO = 'AnnonceBoamp.id_jo';

    /** the column name for the erreurs field */
    const ERREURS = 'AnnonceBoamp.erreurs';

    /** the column name for the nom_fichier_xml field */
    const NOM_FICHIER_XML = 'AnnonceBoamp.nom_fichier_xml';

    /** the column name for the envoi_joue field */
    const ENVOI_JOUE = 'AnnonceBoamp.envoi_joue';

    /** the column name for the mapa field */
    const MAPA = 'AnnonceBoamp.mapa';

    /** the column name for the implique_SAD field */
    const IMPLIQUE_SAD = 'AnnonceBoamp.implique_SAD';

    /** the column name for the date_maj field */
    const DATE_MAJ = 'AnnonceBoamp.date_maj';

    /** the column name for the id_destination_form_xml field */
    const ID_DESTINATION_FORM_XML = 'AnnonceBoamp.id_destination_form_xml';

    /** the column name for the id_form_xml field */
    const ID_FORM_XML = 'AnnonceBoamp.id_form_xml';

    /** the column name for the id_type_xml field */
    const ID_TYPE_XML = 'AnnonceBoamp.id_type_xml';

    /** the column name for the statut_destinataire field */
    const STATUT_DESTINATAIRE = 'AnnonceBoamp.statut_destinataire';

    /** the column name for the accuse_reception field */
    const ACCUSE_RECEPTION = 'AnnonceBoamp.accuse_reception';

    /** the column name for the lien field */
    const LIEN = 'AnnonceBoamp.lien';

    /** the column name for the lien_boamp field */
    const LIEN_BOAMP = 'AnnonceBoamp.lien_boamp';

    /** the column name for the lien_pdf field */
    const LIEN_PDF = 'AnnonceBoamp.lien_pdf';

    /** The enumerated values for the envoi_joue field */
    const ENVOI_JOUE_0 = '0';
    const ENVOI_JOUE_1 = '1';

    /** The enumerated values for the mapa field */
    const MAPA_0 = '0';
    const MAPA_1 = '1';

    /** The enumerated values for the implique_SAD field */
    const IMPLIQUE_SAD_0 = '0';
    const IMPLIQUE_SAD_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonAnnonceBoamp objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonAnnonceBoamp[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonAnnonceBoampPeer::$fieldNames[CommonAnnonceBoampPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdBoamp', 'Organisme', 'ConsultationRef', 'EnvoiBoamp', 'DateEnvoi', 'AnnXml', 'AnnPdf', 'AnnFormValues', 'AnnError', 'TypeBoamp', 'TypeAnn', 'Datepub', 'NumAnn', 'Parution', 'IdJo', 'Erreurs', 'NomFichierXml', 'EnvoiJoue', 'Mapa', 'ImpliqueSad', 'DateMaj', 'IdDestinationFormXml', 'IdFormXml', 'IdTypeXml', 'StatutDestinataire', 'AccuseReception', 'Lien', 'LienBoamp', 'LienPdf', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idBoamp', 'organisme', 'consultationRef', 'envoiBoamp', 'dateEnvoi', 'annXml', 'annPdf', 'annFormValues', 'annError', 'typeBoamp', 'typeAnn', 'datepub', 'numAnn', 'parution', 'idJo', 'erreurs', 'nomFichierXml', 'envoiJoue', 'mapa', 'impliqueSad', 'dateMaj', 'idDestinationFormXml', 'idFormXml', 'idTypeXml', 'statutDestinataire', 'accuseReception', 'lien', 'lienBoamp', 'lienPdf', ),
        BasePeer::TYPE_COLNAME => array (CommonAnnonceBoampPeer::ID_BOAMP, CommonAnnonceBoampPeer::ORGANISME, CommonAnnonceBoampPeer::CONSULTATION_REF, CommonAnnonceBoampPeer::ENVOI_BOAMP, CommonAnnonceBoampPeer::DATE_ENVOI, CommonAnnonceBoampPeer::ANN_XML, CommonAnnonceBoampPeer::ANN_PDF, CommonAnnonceBoampPeer::ANN_FORM_VALUES, CommonAnnonceBoampPeer::ANN_ERROR, CommonAnnonceBoampPeer::TYPE_BOAMP, CommonAnnonceBoampPeer::TYPE_ANN, CommonAnnonceBoampPeer::DATEPUB, CommonAnnonceBoampPeer::NUM_ANN, CommonAnnonceBoampPeer::PARUTION, CommonAnnonceBoampPeer::ID_JO, CommonAnnonceBoampPeer::ERREURS, CommonAnnonceBoampPeer::NOM_FICHIER_XML, CommonAnnonceBoampPeer::ENVOI_JOUE, CommonAnnonceBoampPeer::MAPA, CommonAnnonceBoampPeer::IMPLIQUE_SAD, CommonAnnonceBoampPeer::DATE_MAJ, CommonAnnonceBoampPeer::ID_DESTINATION_FORM_XML, CommonAnnonceBoampPeer::ID_FORM_XML, CommonAnnonceBoampPeer::ID_TYPE_XML, CommonAnnonceBoampPeer::STATUT_DESTINATAIRE, CommonAnnonceBoampPeer::ACCUSE_RECEPTION, CommonAnnonceBoampPeer::LIEN, CommonAnnonceBoampPeer::LIEN_BOAMP, CommonAnnonceBoampPeer::LIEN_PDF, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_BOAMP', 'ORGANISME', 'CONSULTATION_REF', 'ENVOI_BOAMP', 'DATE_ENVOI', 'ANN_XML', 'ANN_PDF', 'ANN_FORM_VALUES', 'ANN_ERROR', 'TYPE_BOAMP', 'TYPE_ANN', 'DATEPUB', 'NUM_ANN', 'PARUTION', 'ID_JO', 'ERREURS', 'NOM_FICHIER_XML', 'ENVOI_JOUE', 'MAPA', 'IMPLIQUE_SAD', 'DATE_MAJ', 'ID_DESTINATION_FORM_XML', 'ID_FORM_XML', 'ID_TYPE_XML', 'STATUT_DESTINATAIRE', 'ACCUSE_RECEPTION', 'LIEN', 'LIEN_BOAMP', 'LIEN_PDF', ),
        BasePeer::TYPE_FIELDNAME => array ('id_boamp', 'organisme', 'consultation_ref', 'envoi_boamp', 'date_envoi', 'ann_xml', 'ann_pdf', 'ann_form_values', 'ann_error', 'type_boamp', 'type_ann', 'datepub', 'num_ann', 'parution', 'id_jo', 'erreurs', 'nom_fichier_xml', 'envoi_joue', 'mapa', 'implique_SAD', 'date_maj', 'id_destination_form_xml', 'id_form_xml', 'id_type_xml', 'statut_destinataire', 'accuse_reception', 'lien', 'lien_boamp', 'lien_pdf', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonAnnonceBoampPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdBoamp' => 0, 'Organisme' => 1, 'ConsultationRef' => 2, 'EnvoiBoamp' => 3, 'DateEnvoi' => 4, 'AnnXml' => 5, 'AnnPdf' => 6, 'AnnFormValues' => 7, 'AnnError' => 8, 'TypeBoamp' => 9, 'TypeAnn' => 10, 'Datepub' => 11, 'NumAnn' => 12, 'Parution' => 13, 'IdJo' => 14, 'Erreurs' => 15, 'NomFichierXml' => 16, 'EnvoiJoue' => 17, 'Mapa' => 18, 'ImpliqueSad' => 19, 'DateMaj' => 20, 'IdDestinationFormXml' => 21, 'IdFormXml' => 22, 'IdTypeXml' => 23, 'StatutDestinataire' => 24, 'AccuseReception' => 25, 'Lien' => 26, 'LienBoamp' => 27, 'LienPdf' => 28, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idBoamp' => 0, 'organisme' => 1, 'consultationRef' => 2, 'envoiBoamp' => 3, 'dateEnvoi' => 4, 'annXml' => 5, 'annPdf' => 6, 'annFormValues' => 7, 'annError' => 8, 'typeBoamp' => 9, 'typeAnn' => 10, 'datepub' => 11, 'numAnn' => 12, 'parution' => 13, 'idJo' => 14, 'erreurs' => 15, 'nomFichierXml' => 16, 'envoiJoue' => 17, 'mapa' => 18, 'impliqueSad' => 19, 'dateMaj' => 20, 'idDestinationFormXml' => 21, 'idFormXml' => 22, 'idTypeXml' => 23, 'statutDestinataire' => 24, 'accuseReception' => 25, 'lien' => 26, 'lienBoamp' => 27, 'lienPdf' => 28, ),
        BasePeer::TYPE_COLNAME => array (CommonAnnonceBoampPeer::ID_BOAMP => 0, CommonAnnonceBoampPeer::ORGANISME => 1, CommonAnnonceBoampPeer::CONSULTATION_REF => 2, CommonAnnonceBoampPeer::ENVOI_BOAMP => 3, CommonAnnonceBoampPeer::DATE_ENVOI => 4, CommonAnnonceBoampPeer::ANN_XML => 5, CommonAnnonceBoampPeer::ANN_PDF => 6, CommonAnnonceBoampPeer::ANN_FORM_VALUES => 7, CommonAnnonceBoampPeer::ANN_ERROR => 8, CommonAnnonceBoampPeer::TYPE_BOAMP => 9, CommonAnnonceBoampPeer::TYPE_ANN => 10, CommonAnnonceBoampPeer::DATEPUB => 11, CommonAnnonceBoampPeer::NUM_ANN => 12, CommonAnnonceBoampPeer::PARUTION => 13, CommonAnnonceBoampPeer::ID_JO => 14, CommonAnnonceBoampPeer::ERREURS => 15, CommonAnnonceBoampPeer::NOM_FICHIER_XML => 16, CommonAnnonceBoampPeer::ENVOI_JOUE => 17, CommonAnnonceBoampPeer::MAPA => 18, CommonAnnonceBoampPeer::IMPLIQUE_SAD => 19, CommonAnnonceBoampPeer::DATE_MAJ => 20, CommonAnnonceBoampPeer::ID_DESTINATION_FORM_XML => 21, CommonAnnonceBoampPeer::ID_FORM_XML => 22, CommonAnnonceBoampPeer::ID_TYPE_XML => 23, CommonAnnonceBoampPeer::STATUT_DESTINATAIRE => 24, CommonAnnonceBoampPeer::ACCUSE_RECEPTION => 25, CommonAnnonceBoampPeer::LIEN => 26, CommonAnnonceBoampPeer::LIEN_BOAMP => 27, CommonAnnonceBoampPeer::LIEN_PDF => 28, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_BOAMP' => 0, 'ORGANISME' => 1, 'CONSULTATION_REF' => 2, 'ENVOI_BOAMP' => 3, 'DATE_ENVOI' => 4, 'ANN_XML' => 5, 'ANN_PDF' => 6, 'ANN_FORM_VALUES' => 7, 'ANN_ERROR' => 8, 'TYPE_BOAMP' => 9, 'TYPE_ANN' => 10, 'DATEPUB' => 11, 'NUM_ANN' => 12, 'PARUTION' => 13, 'ID_JO' => 14, 'ERREURS' => 15, 'NOM_FICHIER_XML' => 16, 'ENVOI_JOUE' => 17, 'MAPA' => 18, 'IMPLIQUE_SAD' => 19, 'DATE_MAJ' => 20, 'ID_DESTINATION_FORM_XML' => 21, 'ID_FORM_XML' => 22, 'ID_TYPE_XML' => 23, 'STATUT_DESTINATAIRE' => 24, 'ACCUSE_RECEPTION' => 25, 'LIEN' => 26, 'LIEN_BOAMP' => 27, 'LIEN_PDF' => 28, ),
        BasePeer::TYPE_FIELDNAME => array ('id_boamp' => 0, 'organisme' => 1, 'consultation_ref' => 2, 'envoi_boamp' => 3, 'date_envoi' => 4, 'ann_xml' => 5, 'ann_pdf' => 6, 'ann_form_values' => 7, 'ann_error' => 8, 'type_boamp' => 9, 'type_ann' => 10, 'datepub' => 11, 'num_ann' => 12, 'parution' => 13, 'id_jo' => 14, 'erreurs' => 15, 'nom_fichier_xml' => 16, 'envoi_joue' => 17, 'mapa' => 18, 'implique_SAD' => 19, 'date_maj' => 20, 'id_destination_form_xml' => 21, 'id_form_xml' => 22, 'id_type_xml' => 23, 'statut_destinataire' => 24, 'accuse_reception' => 25, 'lien' => 26, 'lien_boamp' => 27, 'lien_pdf' => 28, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonAnnonceBoampPeer::ENVOI_JOUE => array(
            CommonAnnonceBoampPeer::ENVOI_JOUE_0,
            CommonAnnonceBoampPeer::ENVOI_JOUE_1,
        ),
        CommonAnnonceBoampPeer::MAPA => array(
            CommonAnnonceBoampPeer::MAPA_0,
            CommonAnnonceBoampPeer::MAPA_1,
        ),
        CommonAnnonceBoampPeer::IMPLIQUE_SAD => array(
            CommonAnnonceBoampPeer::IMPLIQUE_SAD_0,
            CommonAnnonceBoampPeer::IMPLIQUE_SAD_1,
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
        $toNames = CommonAnnonceBoampPeer::getFieldNames($toType);
        $key = isset(CommonAnnonceBoampPeer::$fieldKeys[$fromType][$name]) ? CommonAnnonceBoampPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonAnnonceBoampPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonAnnonceBoampPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonAnnonceBoampPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonAnnonceBoampPeer::$enumValueSets;
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
        $valueSets = CommonAnnonceBoampPeer::getValueSets();

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
        $values = CommonAnnonceBoampPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonAnnonceBoampPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonAnnonceBoampPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::ID_BOAMP);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::ORGANISME);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::ENVOI_BOAMP);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::DATE_ENVOI);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::ANN_XML);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::ANN_PDF);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::ANN_FORM_VALUES);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::ANN_ERROR);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::TYPE_BOAMP);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::TYPE_ANN);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::DATEPUB);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::NUM_ANN);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::PARUTION);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::ID_JO);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::ERREURS);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::NOM_FICHIER_XML);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::ENVOI_JOUE);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::MAPA);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::IMPLIQUE_SAD);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::DATE_MAJ);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::ID_DESTINATION_FORM_XML);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::ID_FORM_XML);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::ID_TYPE_XML);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::STATUT_DESTINATAIRE);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::ACCUSE_RECEPTION);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::LIEN);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::LIEN_BOAMP);
            $criteria->addSelectColumn(CommonAnnonceBoampPeer::LIEN_PDF);
        } else {
            $criteria->addSelectColumn($alias . '.id_boamp');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.envoi_boamp');
            $criteria->addSelectColumn($alias . '.date_envoi');
            $criteria->addSelectColumn($alias . '.ann_xml');
            $criteria->addSelectColumn($alias . '.ann_pdf');
            $criteria->addSelectColumn($alias . '.ann_form_values');
            $criteria->addSelectColumn($alias . '.ann_error');
            $criteria->addSelectColumn($alias . '.type_boamp');
            $criteria->addSelectColumn($alias . '.type_ann');
            $criteria->addSelectColumn($alias . '.datepub');
            $criteria->addSelectColumn($alias . '.num_ann');
            $criteria->addSelectColumn($alias . '.parution');
            $criteria->addSelectColumn($alias . '.id_jo');
            $criteria->addSelectColumn($alias . '.erreurs');
            $criteria->addSelectColumn($alias . '.nom_fichier_xml');
            $criteria->addSelectColumn($alias . '.envoi_joue');
            $criteria->addSelectColumn($alias . '.mapa');
            $criteria->addSelectColumn($alias . '.implique_SAD');
            $criteria->addSelectColumn($alias . '.date_maj');
            $criteria->addSelectColumn($alias . '.id_destination_form_xml');
            $criteria->addSelectColumn($alias . '.id_form_xml');
            $criteria->addSelectColumn($alias . '.id_type_xml');
            $criteria->addSelectColumn($alias . '.statut_destinataire');
            $criteria->addSelectColumn($alias . '.accuse_reception');
            $criteria->addSelectColumn($alias . '.lien');
            $criteria->addSelectColumn($alias . '.lien_boamp');
            $criteria->addSelectColumn($alias . '.lien_pdf');
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
        $criteria->setPrimaryTableName(CommonAnnonceBoampPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAnnonceBoampPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonAnnonceBoampPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceBoampPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAnnonceBoamp
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonAnnonceBoampPeer::doSelect($critcopy, $con);
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
        return CommonAnnonceBoampPeer::populateObjects(CommonAnnonceBoampPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonAnnonceBoampPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonAnnonceBoampPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAnnonceBoampPeer::DATABASE_NAME);

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
     * @param      CommonAnnonceBoamp $obj A CommonAnnonceBoamp object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdBoamp(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonAnnonceBoampPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonAnnonceBoamp object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonAnnonceBoamp) {
                $key = serialize(array((string) $value->getIdBoamp(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonAnnonceBoamp object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonAnnonceBoampPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonAnnonceBoamp Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonAnnonceBoampPeer::$instances[$key])) {
                return CommonAnnonceBoampPeer::$instances[$key];
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
        foreach (CommonAnnonceBoampPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonAnnonceBoampPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to AnnonceBoamp
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
        $cls = CommonAnnonceBoampPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonAnnonceBoampPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonAnnonceBoampPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonAnnonceBoampPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonAnnonceBoamp object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonAnnonceBoampPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonAnnonceBoampPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonAnnonceBoampPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonAnnonceBoampPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonAnnonceBoampPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonConsultationRelatedByOrganismeConsultationRef table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonConsultationRelatedByOrganismeConsultationRef(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonAnnonceBoampPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAnnonceBoampPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonAnnonceBoampPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceBoampPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonAnnonceBoampPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonAnnonceBoampPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonConsultationRelatedByConsultationRef table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonConsultationRelatedByConsultationRef(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonAnnonceBoampPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAnnonceBoampPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonAnnonceBoampPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceBoampPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonAnnonceBoampPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE, $join_behavior);

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
     * Selects a collection of CommonAnnonceBoamp objects pre-filled with their CommonConsultation objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonAnnonceBoamp objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonConsultationRelatedByOrganismeConsultationRef(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonAnnonceBoampPeer::DATABASE_NAME);
        }

        CommonAnnonceBoampPeer::addSelectColumns($criteria);
        $startcol = CommonAnnonceBoampPeer::NUM_HYDRATE_COLUMNS;
        CommonConsultationPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(CommonAnnonceBoampPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonAnnonceBoampPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonAnnonceBoampPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonAnnonceBoampPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonAnnonceBoampPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonAnnonceBoampPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonConsultationPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonConsultationPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonConsultationPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonAnnonceBoamp) to $obj2 (CommonConsultation)
                $obj2->addCommonAnnonceBoampRelatedByOrganismeConsultationRef($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonAnnonceBoamp objects pre-filled with their CommonConsultation objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonAnnonceBoamp objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonConsultationRelatedByConsultationRef(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonAnnonceBoampPeer::DATABASE_NAME);
        }

        CommonAnnonceBoampPeer::addSelectColumns($criteria);
        $startcol = CommonAnnonceBoampPeer::NUM_HYDRATE_COLUMNS;
        CommonConsultationPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonAnnonceBoampPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonAnnonceBoampPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonAnnonceBoampPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonAnnonceBoampPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonAnnonceBoampPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonConsultationPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonConsultationPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonConsultationPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonAnnonceBoamp) to $obj2 (CommonConsultation)
                $obj2->addCommonAnnonceBoampRelatedByConsultationRef($obj1);

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
        $criteria->setPrimaryTableName(CommonAnnonceBoampPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAnnonceBoampPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonAnnonceBoampPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceBoampPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonAnnonceBoampPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonAnnonceBoampPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $criteria->addJoin(CommonAnnonceBoampPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE, $join_behavior);

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
     * Selects a collection of CommonAnnonceBoamp objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonAnnonceBoamp objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonAnnonceBoampPeer::DATABASE_NAME);
        }

        CommonAnnonceBoampPeer::addSelectColumns($criteria);
        $startcol2 = CommonAnnonceBoampPeer::NUM_HYDRATE_COLUMNS;

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonConsultationPeer::NUM_HYDRATE_COLUMNS;

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonConsultationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(CommonAnnonceBoampPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonAnnonceBoampPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $criteria->addJoin(CommonAnnonceBoampPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonAnnonceBoampPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonAnnonceBoampPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonAnnonceBoampPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonAnnonceBoampPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonConsultation rows

            $key2 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonConsultationPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonConsultationPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonConsultationPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonAnnonceBoamp) to the collection in $obj2 (CommonConsultation)
                $obj2->addCommonAnnonceBoampRelatedByOrganismeConsultationRef($obj1);
            } // if joined row not null

            // Add objects for joined CommonConsultation rows

            $key3 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CommonConsultationPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CommonConsultationPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonConsultationPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (CommonAnnonceBoamp) to the collection in $obj3 (CommonConsultation)
                $obj3->addCommonAnnonceBoampRelatedByConsultationRef($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonConsultationRelatedByOrganismeConsultationRef table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonConsultationRelatedByOrganismeConsultationRef(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonAnnonceBoampPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAnnonceBoampPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonAnnonceBoampPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceBoampPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
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
     * Returns the number of rows matching criteria, joining the related CommonConsultationRelatedByConsultationRef table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonConsultationRelatedByConsultationRef(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonAnnonceBoampPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAnnonceBoampPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonAnnonceBoampPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceBoampPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
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
     * Selects a collection of CommonAnnonceBoamp objects pre-filled with all related objects except CommonConsultationRelatedByOrganismeConsultationRef.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonAnnonceBoamp objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonConsultationRelatedByOrganismeConsultationRef(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonAnnonceBoampPeer::DATABASE_NAME);
        }

        CommonAnnonceBoampPeer::addSelectColumns($criteria);
        $startcol2 = CommonAnnonceBoampPeer::NUM_HYDRATE_COLUMNS;


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonAnnonceBoampPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonAnnonceBoampPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonAnnonceBoampPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonAnnonceBoampPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonAnnonceBoamp objects pre-filled with all related objects except CommonConsultationRelatedByConsultationRef.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonAnnonceBoamp objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonConsultationRelatedByConsultationRef(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonAnnonceBoampPeer::DATABASE_NAME);
        }

        CommonAnnonceBoampPeer::addSelectColumns($criteria);
        $startcol2 = CommonAnnonceBoampPeer::NUM_HYDRATE_COLUMNS;


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonAnnonceBoampPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonAnnonceBoampPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonAnnonceBoampPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonAnnonceBoampPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

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
        return Propel::getDatabaseMap(CommonAnnonceBoampPeer::DATABASE_NAME)->getTable(CommonAnnonceBoampPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonAnnonceBoampPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonAnnonceBoampPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonAnnonceBoampTableMap());
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
        return CommonAnnonceBoampPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonAnnonceBoamp or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAnnonceBoamp object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceBoampPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonAnnonceBoamp object
        }

        if ($criteria->containsKey(CommonAnnonceBoampPeer::ID_BOAMP) && $criteria->keyContainsValue(CommonAnnonceBoampPeer::ID_BOAMP) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonAnnonceBoampPeer::ID_BOAMP.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonAnnonceBoampPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonAnnonceBoamp or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAnnonceBoamp object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceBoampPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonAnnonceBoampPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonAnnonceBoampPeer::ID_BOAMP);
            $value = $criteria->remove(CommonAnnonceBoampPeer::ID_BOAMP);
            if ($value) {
                $selectCriteria->add(CommonAnnonceBoampPeer::ID_BOAMP, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAnnonceBoampPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonAnnonceBoampPeer::ORGANISME);
            $value = $criteria->remove(CommonAnnonceBoampPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonAnnonceBoampPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAnnonceBoampPeer::TABLE_NAME);
            }

        } else { // $values is CommonAnnonceBoamp object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonAnnonceBoampPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the AnnonceBoamp table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceBoampPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonAnnonceBoampPeer::TABLE_NAME, $con, CommonAnnonceBoampPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonAnnonceBoampPeer::clearInstancePool();
            CommonAnnonceBoampPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonAnnonceBoamp or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonAnnonceBoamp object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonAnnonceBoampPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonAnnonceBoampPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonAnnonceBoamp) { // it's a model object
            // invalidate the cache for this single object
            CommonAnnonceBoampPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonAnnonceBoampPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonAnnonceBoampPeer::ID_BOAMP, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonAnnonceBoampPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonAnnonceBoampPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAnnonceBoampPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonAnnonceBoampPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonAnnonceBoamp object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonAnnonceBoamp $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonAnnonceBoampPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonAnnonceBoampPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonAnnonceBoampPeer::DATABASE_NAME, CommonAnnonceBoampPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id_boamp
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonAnnonceBoamp
     */
    public static function retrieveByPK($id_boamp, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_boamp, (string) $organisme));
         if (null !== ($obj = CommonAnnonceBoampPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceBoampPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonAnnonceBoampPeer::DATABASE_NAME);
        $criteria->add(CommonAnnonceBoampPeer::ID_BOAMP, $id_boamp);
        $criteria->add(CommonAnnonceBoampPeer::ORGANISME, $organisme);
        $v = CommonAnnonceBoampPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonAnnonceBoampPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonAnnonceBoampPeer::buildTableMap();

