<?php


/**
 * Base static class for performing query and update operations on the 'AnnonceMoniteur' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonAnnonceMoniteurPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'AnnonceMoniteur';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonAnnonceMoniteur';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonAnnonceMoniteurTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 23;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 23;

    /** the column name for the id field */
    const ID = 'AnnonceMoniteur.id';

    /** the column name for the organisme field */
    const ORGANISME = 'AnnonceMoniteur.organisme';

    /** the column name for the date_envoi field */
    const DATE_ENVOI = 'AnnonceMoniteur.date_envoi';

    /** the column name for the type_moniteur field */
    const TYPE_MONITEUR = 'AnnonceMoniteur.type_moniteur';

    /** the column name for the statut_xml field */
    const STATUT_XML = 'AnnonceMoniteur.statut_xml';

    /** the column name for the date_creation field */
    const DATE_CREATION = 'AnnonceMoniteur.date_creation';

    /** the column name for the statut_web field */
    const STATUT_WEB = 'AnnonceMoniteur.statut_web';

    /** the column name for the statut_arg field */
    const STATUT_ARG = 'AnnonceMoniteur.statut_arg';

    /** the column name for the statut_usn field */
    const STATUT_USN = 'AnnonceMoniteur.statut_usn';

    /** the column name for the statut_01i field */
    const STATUT_01I = 'AnnonceMoniteur.statut_01i';

    /** the column name for the datepub field */
    const DATEPUB = 'AnnonceMoniteur.datepub';

    /** the column name for the num_annonce field */
    const NUM_ANNONCE = 'AnnonceMoniteur.num_annonce';

    /** the column name for the message_error field */
    const MESSAGE_ERROR = 'AnnonceMoniteur.message_error';

    /** the column name for the timestamp field */
    const TIMESTAMP = 'AnnonceMoniteur.timestamp';

    /** the column name for the nom_timestamp field */
    const NOM_TIMESTAMP = 'AnnonceMoniteur.nom_timestamp';

    /** the column name for the xml_moniteur field */
    const XML_MONITEUR = 'AnnonceMoniteur.xml_moniteur';

    /** the column name for the id_annonce_boamp field */
    const ID_ANNONCE_BOAMP = 'AnnonceMoniteur.id_annonce_boamp';

    /** the column name for the date_maj field */
    const DATE_MAJ = 'AnnonceMoniteur.date_maj';

    /** the column name for the id_form_xml field */
    const ID_FORM_XML = 'AnnonceMoniteur.id_form_xml';

    /** the column name for the accuse_reception field */
    const ACCUSE_RECEPTION = 'AnnonceMoniteur.accuse_reception';

    /** the column name for the id_destination_form_xml field */
    const ID_DESTINATION_FORM_XML = 'AnnonceMoniteur.id_destination_form_xml';

    /** the column name for the statut_destinataire field */
    const STATUT_DESTINATAIRE = 'AnnonceMoniteur.statut_destinataire';

    /** the column name for the commentaire field */
    const COMMENTAIRE = 'AnnonceMoniteur.commentaire';

    /** The enumerated values for the statut_web field */
    const STATUT_WEB_0 = '0';
    const STATUT_WEB_1 = '1';
    const STATUT_WEB_2 = '2';
    const STATUT_WEB_3 = '3';
    const STATUT_WEB_4 = '4';
    const STATUT_WEB_5 = '5';

    /** The enumerated values for the statut_arg field */
    const STATUT_ARG_0 = '0';
    const STATUT_ARG_1 = '1';
    const STATUT_ARG_2 = '2';
    const STATUT_ARG_3 = '3';
    const STATUT_ARG_4 = '4';
    const STATUT_ARG_5 = '5';

    /** The enumerated values for the statut_usn field */
    const STATUT_USN_0 = '0';
    const STATUT_USN_1 = '1';
    const STATUT_USN_2 = '2';
    const STATUT_USN_3 = '3';
    const STATUT_USN_4 = '4';
    const STATUT_USN_5 = '5';

    /** The enumerated values for the statut_01i field */
    const STATUT_01I_0 = '0';
    const STATUT_01I_1 = '1';
    const STATUT_01I_2 = '2';
    const STATUT_01I_3 = '3';
    const STATUT_01I_4 = '4';
    const STATUT_01I_5 = '5';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonAnnonceMoniteur objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonAnnonceMoniteur[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonAnnonceMoniteurPeer::$fieldNames[CommonAnnonceMoniteurPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'DateEnvoi', 'TypeMoniteur', 'StatutXml', 'DateCreation', 'StatutWeb', 'StatutArg', 'StatutUsn', 'Statut01i', 'Datepub', 'NumAnnonce', 'MessageError', 'Timestamp', 'NomTimestamp', 'XmlMoniteur', 'IdAnnonceBoamp', 'DateMaj', 'IdFormXml', 'AccuseReception', 'IdDestinationFormXml', 'StatutDestinataire', 'Commentaire', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'dateEnvoi', 'typeMoniteur', 'statutXml', 'dateCreation', 'statutWeb', 'statutArg', 'statutUsn', 'statut01i', 'datepub', 'numAnnonce', 'messageError', 'timestamp', 'nomTimestamp', 'xmlMoniteur', 'idAnnonceBoamp', 'dateMaj', 'idFormXml', 'accuseReception', 'idDestinationFormXml', 'statutDestinataire', 'commentaire', ),
        BasePeer::TYPE_COLNAME => array (CommonAnnonceMoniteurPeer::ID, CommonAnnonceMoniteurPeer::ORGANISME, CommonAnnonceMoniteurPeer::DATE_ENVOI, CommonAnnonceMoniteurPeer::TYPE_MONITEUR, CommonAnnonceMoniteurPeer::STATUT_XML, CommonAnnonceMoniteurPeer::DATE_CREATION, CommonAnnonceMoniteurPeer::STATUT_WEB, CommonAnnonceMoniteurPeer::STATUT_ARG, CommonAnnonceMoniteurPeer::STATUT_USN, CommonAnnonceMoniteurPeer::STATUT_01I, CommonAnnonceMoniteurPeer::DATEPUB, CommonAnnonceMoniteurPeer::NUM_ANNONCE, CommonAnnonceMoniteurPeer::MESSAGE_ERROR, CommonAnnonceMoniteurPeer::TIMESTAMP, CommonAnnonceMoniteurPeer::NOM_TIMESTAMP, CommonAnnonceMoniteurPeer::XML_MONITEUR, CommonAnnonceMoniteurPeer::ID_ANNONCE_BOAMP, CommonAnnonceMoniteurPeer::DATE_MAJ, CommonAnnonceMoniteurPeer::ID_FORM_XML, CommonAnnonceMoniteurPeer::ACCUSE_RECEPTION, CommonAnnonceMoniteurPeer::ID_DESTINATION_FORM_XML, CommonAnnonceMoniteurPeer::STATUT_DESTINATAIRE, CommonAnnonceMoniteurPeer::COMMENTAIRE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'DATE_ENVOI', 'TYPE_MONITEUR', 'STATUT_XML', 'DATE_CREATION', 'STATUT_WEB', 'STATUT_ARG', 'STATUT_USN', 'STATUT_01I', 'DATEPUB', 'NUM_ANNONCE', 'MESSAGE_ERROR', 'TIMESTAMP', 'NOM_TIMESTAMP', 'XML_MONITEUR', 'ID_ANNONCE_BOAMP', 'DATE_MAJ', 'ID_FORM_XML', 'ACCUSE_RECEPTION', 'ID_DESTINATION_FORM_XML', 'STATUT_DESTINATAIRE', 'COMMENTAIRE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'date_envoi', 'type_moniteur', 'statut_xml', 'date_creation', 'statut_web', 'statut_arg', 'statut_usn', 'statut_01i', 'datepub', 'num_annonce', 'message_error', 'timestamp', 'nom_timestamp', 'xml_moniteur', 'id_annonce_boamp', 'date_maj', 'id_form_xml', 'accuse_reception', 'id_destination_form_xml', 'statut_destinataire', 'commentaire', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonAnnonceMoniteurPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'DateEnvoi' => 2, 'TypeMoniteur' => 3, 'StatutXml' => 4, 'DateCreation' => 5, 'StatutWeb' => 6, 'StatutArg' => 7, 'StatutUsn' => 8, 'Statut01i' => 9, 'Datepub' => 10, 'NumAnnonce' => 11, 'MessageError' => 12, 'Timestamp' => 13, 'NomTimestamp' => 14, 'XmlMoniteur' => 15, 'IdAnnonceBoamp' => 16, 'DateMaj' => 17, 'IdFormXml' => 18, 'AccuseReception' => 19, 'IdDestinationFormXml' => 20, 'StatutDestinataire' => 21, 'Commentaire' => 22, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'dateEnvoi' => 2, 'typeMoniteur' => 3, 'statutXml' => 4, 'dateCreation' => 5, 'statutWeb' => 6, 'statutArg' => 7, 'statutUsn' => 8, 'statut01i' => 9, 'datepub' => 10, 'numAnnonce' => 11, 'messageError' => 12, 'timestamp' => 13, 'nomTimestamp' => 14, 'xmlMoniteur' => 15, 'idAnnonceBoamp' => 16, 'dateMaj' => 17, 'idFormXml' => 18, 'accuseReception' => 19, 'idDestinationFormXml' => 20, 'statutDestinataire' => 21, 'commentaire' => 22, ),
        BasePeer::TYPE_COLNAME => array (CommonAnnonceMoniteurPeer::ID => 0, CommonAnnonceMoniteurPeer::ORGANISME => 1, CommonAnnonceMoniteurPeer::DATE_ENVOI => 2, CommonAnnonceMoniteurPeer::TYPE_MONITEUR => 3, CommonAnnonceMoniteurPeer::STATUT_XML => 4, CommonAnnonceMoniteurPeer::DATE_CREATION => 5, CommonAnnonceMoniteurPeer::STATUT_WEB => 6, CommonAnnonceMoniteurPeer::STATUT_ARG => 7, CommonAnnonceMoniteurPeer::STATUT_USN => 8, CommonAnnonceMoniteurPeer::STATUT_01I => 9, CommonAnnonceMoniteurPeer::DATEPUB => 10, CommonAnnonceMoniteurPeer::NUM_ANNONCE => 11, CommonAnnonceMoniteurPeer::MESSAGE_ERROR => 12, CommonAnnonceMoniteurPeer::TIMESTAMP => 13, CommonAnnonceMoniteurPeer::NOM_TIMESTAMP => 14, CommonAnnonceMoniteurPeer::XML_MONITEUR => 15, CommonAnnonceMoniteurPeer::ID_ANNONCE_BOAMP => 16, CommonAnnonceMoniteurPeer::DATE_MAJ => 17, CommonAnnonceMoniteurPeer::ID_FORM_XML => 18, CommonAnnonceMoniteurPeer::ACCUSE_RECEPTION => 19, CommonAnnonceMoniteurPeer::ID_DESTINATION_FORM_XML => 20, CommonAnnonceMoniteurPeer::STATUT_DESTINATAIRE => 21, CommonAnnonceMoniteurPeer::COMMENTAIRE => 22, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'DATE_ENVOI' => 2, 'TYPE_MONITEUR' => 3, 'STATUT_XML' => 4, 'DATE_CREATION' => 5, 'STATUT_WEB' => 6, 'STATUT_ARG' => 7, 'STATUT_USN' => 8, 'STATUT_01I' => 9, 'DATEPUB' => 10, 'NUM_ANNONCE' => 11, 'MESSAGE_ERROR' => 12, 'TIMESTAMP' => 13, 'NOM_TIMESTAMP' => 14, 'XML_MONITEUR' => 15, 'ID_ANNONCE_BOAMP' => 16, 'DATE_MAJ' => 17, 'ID_FORM_XML' => 18, 'ACCUSE_RECEPTION' => 19, 'ID_DESTINATION_FORM_XML' => 20, 'STATUT_DESTINATAIRE' => 21, 'COMMENTAIRE' => 22, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'date_envoi' => 2, 'type_moniteur' => 3, 'statut_xml' => 4, 'date_creation' => 5, 'statut_web' => 6, 'statut_arg' => 7, 'statut_usn' => 8, 'statut_01i' => 9, 'datepub' => 10, 'num_annonce' => 11, 'message_error' => 12, 'timestamp' => 13, 'nom_timestamp' => 14, 'xml_moniteur' => 15, 'id_annonce_boamp' => 16, 'date_maj' => 17, 'id_form_xml' => 18, 'accuse_reception' => 19, 'id_destination_form_xml' => 20, 'statut_destinataire' => 21, 'commentaire' => 22, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonAnnonceMoniteurPeer::STATUT_WEB => array(
            CommonAnnonceMoniteurPeer::STATUT_WEB_0,
            CommonAnnonceMoniteurPeer::STATUT_WEB_1,
            CommonAnnonceMoniteurPeer::STATUT_WEB_2,
            CommonAnnonceMoniteurPeer::STATUT_WEB_3,
            CommonAnnonceMoniteurPeer::STATUT_WEB_4,
            CommonAnnonceMoniteurPeer::STATUT_WEB_5,
        ),
        CommonAnnonceMoniteurPeer::STATUT_ARG => array(
            CommonAnnonceMoniteurPeer::STATUT_ARG_0,
            CommonAnnonceMoniteurPeer::STATUT_ARG_1,
            CommonAnnonceMoniteurPeer::STATUT_ARG_2,
            CommonAnnonceMoniteurPeer::STATUT_ARG_3,
            CommonAnnonceMoniteurPeer::STATUT_ARG_4,
            CommonAnnonceMoniteurPeer::STATUT_ARG_5,
        ),
        CommonAnnonceMoniteurPeer::STATUT_USN => array(
            CommonAnnonceMoniteurPeer::STATUT_USN_0,
            CommonAnnonceMoniteurPeer::STATUT_USN_1,
            CommonAnnonceMoniteurPeer::STATUT_USN_2,
            CommonAnnonceMoniteurPeer::STATUT_USN_3,
            CommonAnnonceMoniteurPeer::STATUT_USN_4,
            CommonAnnonceMoniteurPeer::STATUT_USN_5,
        ),
        CommonAnnonceMoniteurPeer::STATUT_01I => array(
            CommonAnnonceMoniteurPeer::STATUT_01I_0,
            CommonAnnonceMoniteurPeer::STATUT_01I_1,
            CommonAnnonceMoniteurPeer::STATUT_01I_2,
            CommonAnnonceMoniteurPeer::STATUT_01I_3,
            CommonAnnonceMoniteurPeer::STATUT_01I_4,
            CommonAnnonceMoniteurPeer::STATUT_01I_5,
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
        $toNames = CommonAnnonceMoniteurPeer::getFieldNames($toType);
        $key = isset(CommonAnnonceMoniteurPeer::$fieldKeys[$fromType][$name]) ? CommonAnnonceMoniteurPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonAnnonceMoniteurPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonAnnonceMoniteurPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonAnnonceMoniteurPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonAnnonceMoniteurPeer::$enumValueSets;
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
        $valueSets = CommonAnnonceMoniteurPeer::getValueSets();

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
        $values = CommonAnnonceMoniteurPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonAnnonceMoniteurPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonAnnonceMoniteurPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::ID);
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::ORGANISME);
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::DATE_ENVOI);
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::TYPE_MONITEUR);
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::STATUT_XML);
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::STATUT_WEB);
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::STATUT_ARG);
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::STATUT_USN);
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::STATUT_01I);
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::DATEPUB);
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::NUM_ANNONCE);
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::MESSAGE_ERROR);
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::TIMESTAMP);
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::NOM_TIMESTAMP);
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::XML_MONITEUR);
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::ID_ANNONCE_BOAMP);
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::DATE_MAJ);
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::ID_FORM_XML);
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::ACCUSE_RECEPTION);
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::ID_DESTINATION_FORM_XML);
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::STATUT_DESTINATAIRE);
            $criteria->addSelectColumn(CommonAnnonceMoniteurPeer::COMMENTAIRE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.date_envoi');
            $criteria->addSelectColumn($alias . '.type_moniteur');
            $criteria->addSelectColumn($alias . '.statut_xml');
            $criteria->addSelectColumn($alias . '.date_creation');
            $criteria->addSelectColumn($alias . '.statut_web');
            $criteria->addSelectColumn($alias . '.statut_arg');
            $criteria->addSelectColumn($alias . '.statut_usn');
            $criteria->addSelectColumn($alias . '.statut_01i');
            $criteria->addSelectColumn($alias . '.datepub');
            $criteria->addSelectColumn($alias . '.num_annonce');
            $criteria->addSelectColumn($alias . '.message_error');
            $criteria->addSelectColumn($alias . '.timestamp');
            $criteria->addSelectColumn($alias . '.nom_timestamp');
            $criteria->addSelectColumn($alias . '.xml_moniteur');
            $criteria->addSelectColumn($alias . '.id_annonce_boamp');
            $criteria->addSelectColumn($alias . '.date_maj');
            $criteria->addSelectColumn($alias . '.id_form_xml');
            $criteria->addSelectColumn($alias . '.accuse_reception');
            $criteria->addSelectColumn($alias . '.id_destination_form_xml');
            $criteria->addSelectColumn($alias . '.statut_destinataire');
            $criteria->addSelectColumn($alias . '.commentaire');
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
        $criteria->setPrimaryTableName(CommonAnnonceMoniteurPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAnnonceMoniteurPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonAnnonceMoniteurPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceMoniteurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAnnonceMoniteur
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonAnnonceMoniteurPeer::doSelect($critcopy, $con);
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
        return CommonAnnonceMoniteurPeer::populateObjects(CommonAnnonceMoniteurPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonAnnonceMoniteurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonAnnonceMoniteurPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAnnonceMoniteurPeer::DATABASE_NAME);

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
     * @param      CommonAnnonceMoniteur $obj A CommonAnnonceMoniteur object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonAnnonceMoniteurPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonAnnonceMoniteur object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonAnnonceMoniteur) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonAnnonceMoniteur object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonAnnonceMoniteurPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonAnnonceMoniteur Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonAnnonceMoniteurPeer::$instances[$key])) {
                return CommonAnnonceMoniteurPeer::$instances[$key];
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
        foreach (CommonAnnonceMoniteurPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonAnnonceMoniteurPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to AnnonceMoniteur
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
        $cls = CommonAnnonceMoniteurPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonAnnonceMoniteurPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonAnnonceMoniteurPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonAnnonceMoniteurPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonAnnonceMoniteur object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonAnnonceMoniteurPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonAnnonceMoniteurPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonAnnonceMoniteurPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonAnnonceMoniteurPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonAnnonceMoniteurPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonReferentielDestinationFormXml table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonReferentielDestinationFormXml(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonAnnonceMoniteurPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAnnonceMoniteurPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonAnnonceMoniteurPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceMoniteurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonAnnonceMoniteurPeer::ID_DESTINATION_FORM_XML, CommonReferentielDestinationFormXmlPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonReferentielFormXml table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonReferentielFormXml(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonAnnonceMoniteurPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAnnonceMoniteurPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonAnnonceMoniteurPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceMoniteurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonAnnonceMoniteurPeer::ID_FORM_XML, CommonReferentielFormXmlPeer::ID, $join_behavior);

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
     * Selects a collection of CommonAnnonceMoniteur objects pre-filled with their CommonReferentielDestinationFormXml objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonAnnonceMoniteur objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonReferentielDestinationFormXml(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonAnnonceMoniteurPeer::DATABASE_NAME);
        }

        CommonAnnonceMoniteurPeer::addSelectColumns($criteria);
        $startcol = CommonAnnonceMoniteurPeer::NUM_HYDRATE_COLUMNS;
        CommonReferentielDestinationFormXmlPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonAnnonceMoniteurPeer::ID_DESTINATION_FORM_XML, CommonReferentielDestinationFormXmlPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonAnnonceMoniteurPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonAnnonceMoniteurPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonAnnonceMoniteurPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonAnnonceMoniteurPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonReferentielDestinationFormXmlPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonReferentielDestinationFormXmlPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonReferentielDestinationFormXmlPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonReferentielDestinationFormXmlPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonAnnonceMoniteur) to $obj2 (CommonReferentielDestinationFormXml)
                $obj2->addCommonAnnonceMoniteur($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonAnnonceMoniteur objects pre-filled with their CommonReferentielFormXml objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonAnnonceMoniteur objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonReferentielFormXml(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonAnnonceMoniteurPeer::DATABASE_NAME);
        }

        CommonAnnonceMoniteurPeer::addSelectColumns($criteria);
        $startcol = CommonAnnonceMoniteurPeer::NUM_HYDRATE_COLUMNS;
        CommonReferentielFormXmlPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonAnnonceMoniteurPeer::ID_FORM_XML, CommonReferentielFormXmlPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonAnnonceMoniteurPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonAnnonceMoniteurPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonAnnonceMoniteurPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonAnnonceMoniteurPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonReferentielFormXmlPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonReferentielFormXmlPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonReferentielFormXmlPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonReferentielFormXmlPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonAnnonceMoniteur) to $obj2 (CommonReferentielFormXml)
                $obj2->addCommonAnnonceMoniteur($obj1);

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
        $criteria->setPrimaryTableName(CommonAnnonceMoniteurPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAnnonceMoniteurPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonAnnonceMoniteurPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceMoniteurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonAnnonceMoniteurPeer::ID_DESTINATION_FORM_XML, CommonReferentielDestinationFormXmlPeer::ID, $join_behavior);

        $criteria->addJoin(CommonAnnonceMoniteurPeer::ID_FORM_XML, CommonReferentielFormXmlPeer::ID, $join_behavior);

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
     * Selects a collection of CommonAnnonceMoniteur objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonAnnonceMoniteur objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonAnnonceMoniteurPeer::DATABASE_NAME);
        }

        CommonAnnonceMoniteurPeer::addSelectColumns($criteria);
        $startcol2 = CommonAnnonceMoniteurPeer::NUM_HYDRATE_COLUMNS;

        CommonReferentielDestinationFormXmlPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonReferentielDestinationFormXmlPeer::NUM_HYDRATE_COLUMNS;

        CommonReferentielFormXmlPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonReferentielFormXmlPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonAnnonceMoniteurPeer::ID_DESTINATION_FORM_XML, CommonReferentielDestinationFormXmlPeer::ID, $join_behavior);

        $criteria->addJoin(CommonAnnonceMoniteurPeer::ID_FORM_XML, CommonReferentielFormXmlPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonAnnonceMoniteurPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonAnnonceMoniteurPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonAnnonceMoniteurPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonAnnonceMoniteurPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonReferentielDestinationFormXml rows

            $key2 = CommonReferentielDestinationFormXmlPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonReferentielDestinationFormXmlPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonReferentielDestinationFormXmlPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonReferentielDestinationFormXmlPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonAnnonceMoniteur) to the collection in $obj2 (CommonReferentielDestinationFormXml)
                $obj2->addCommonAnnonceMoniteur($obj1);
            } // if joined row not null

            // Add objects for joined CommonReferentielFormXml rows

            $key3 = CommonReferentielFormXmlPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CommonReferentielFormXmlPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CommonReferentielFormXmlPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonReferentielFormXmlPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (CommonAnnonceMoniteur) to the collection in $obj3 (CommonReferentielFormXml)
                $obj3->addCommonAnnonceMoniteur($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonReferentielDestinationFormXml table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonReferentielDestinationFormXml(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonAnnonceMoniteurPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAnnonceMoniteurPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonAnnonceMoniteurPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceMoniteurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonAnnonceMoniteurPeer::ID_FORM_XML, CommonReferentielFormXmlPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonReferentielFormXml table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonReferentielFormXml(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonAnnonceMoniteurPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAnnonceMoniteurPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonAnnonceMoniteurPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceMoniteurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonAnnonceMoniteurPeer::ID_DESTINATION_FORM_XML, CommonReferentielDestinationFormXmlPeer::ID, $join_behavior);

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
     * Selects a collection of CommonAnnonceMoniteur objects pre-filled with all related objects except CommonReferentielDestinationFormXml.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonAnnonceMoniteur objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonReferentielDestinationFormXml(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonAnnonceMoniteurPeer::DATABASE_NAME);
        }

        CommonAnnonceMoniteurPeer::addSelectColumns($criteria);
        $startcol2 = CommonAnnonceMoniteurPeer::NUM_HYDRATE_COLUMNS;

        CommonReferentielFormXmlPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonReferentielFormXmlPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonAnnonceMoniteurPeer::ID_FORM_XML, CommonReferentielFormXmlPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonAnnonceMoniteurPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonAnnonceMoniteurPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonAnnonceMoniteurPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonAnnonceMoniteurPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonReferentielFormXml rows

                $key2 = CommonReferentielFormXmlPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonReferentielFormXmlPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonReferentielFormXmlPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonReferentielFormXmlPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonAnnonceMoniteur) to the collection in $obj2 (CommonReferentielFormXml)
                $obj2->addCommonAnnonceMoniteur($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonAnnonceMoniteur objects pre-filled with all related objects except CommonReferentielFormXml.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonAnnonceMoniteur objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonReferentielFormXml(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonAnnonceMoniteurPeer::DATABASE_NAME);
        }

        CommonAnnonceMoniteurPeer::addSelectColumns($criteria);
        $startcol2 = CommonAnnonceMoniteurPeer::NUM_HYDRATE_COLUMNS;

        CommonReferentielDestinationFormXmlPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonReferentielDestinationFormXmlPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonAnnonceMoniteurPeer::ID_DESTINATION_FORM_XML, CommonReferentielDestinationFormXmlPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonAnnonceMoniteurPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonAnnonceMoniteurPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonAnnonceMoniteurPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonAnnonceMoniteurPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonReferentielDestinationFormXml rows

                $key2 = CommonReferentielDestinationFormXmlPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonReferentielDestinationFormXmlPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonReferentielDestinationFormXmlPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonReferentielDestinationFormXmlPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonAnnonceMoniteur) to the collection in $obj2 (CommonReferentielDestinationFormXml)
                $obj2->addCommonAnnonceMoniteur($obj1);

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
        return Propel::getDatabaseMap(CommonAnnonceMoniteurPeer::DATABASE_NAME)->getTable(CommonAnnonceMoniteurPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonAnnonceMoniteurPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonAnnonceMoniteurPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonAnnonceMoniteurTableMap());
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
        return CommonAnnonceMoniteurPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonAnnonceMoniteur or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAnnonceMoniteur object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceMoniteurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonAnnonceMoniteur object
        }

        if ($criteria->containsKey(CommonAnnonceMoniteurPeer::ID) && $criteria->keyContainsValue(CommonAnnonceMoniteurPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonAnnonceMoniteurPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonAnnonceMoniteurPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonAnnonceMoniteur or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAnnonceMoniteur object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceMoniteurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonAnnonceMoniteurPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonAnnonceMoniteurPeer::ID);
            $value = $criteria->remove(CommonAnnonceMoniteurPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonAnnonceMoniteurPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAnnonceMoniteurPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonAnnonceMoniteurPeer::ORGANISME);
            $value = $criteria->remove(CommonAnnonceMoniteurPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonAnnonceMoniteurPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAnnonceMoniteurPeer::TABLE_NAME);
            }

        } else { // $values is CommonAnnonceMoniteur object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonAnnonceMoniteurPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the AnnonceMoniteur table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceMoniteurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonAnnonceMoniteurPeer::TABLE_NAME, $con, CommonAnnonceMoniteurPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonAnnonceMoniteurPeer::clearInstancePool();
            CommonAnnonceMoniteurPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonAnnonceMoniteur or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonAnnonceMoniteur object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonAnnonceMoniteurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonAnnonceMoniteurPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonAnnonceMoniteur) { // it's a model object
            // invalidate the cache for this single object
            CommonAnnonceMoniteurPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonAnnonceMoniteurPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonAnnonceMoniteurPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonAnnonceMoniteurPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonAnnonceMoniteurPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAnnonceMoniteurPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonAnnonceMoniteurPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonAnnonceMoniteur object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonAnnonceMoniteur $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonAnnonceMoniteurPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonAnnonceMoniteurPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonAnnonceMoniteurPeer::DATABASE_NAME, CommonAnnonceMoniteurPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonAnnonceMoniteur
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonAnnonceMoniteurPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceMoniteurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonAnnonceMoniteurPeer::DATABASE_NAME);
        $criteria->add(CommonAnnonceMoniteurPeer::ID, $id);
        $criteria->add(CommonAnnonceMoniteurPeer::ORGANISME, $organisme);
        $v = CommonAnnonceMoniteurPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonAnnonceMoniteurPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonAnnonceMoniteurPeer::buildTableMap();

