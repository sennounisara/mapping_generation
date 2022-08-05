<?php


/**
 * Base static class for performing query and update operations on the 'Helios_teletransmission_lot' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonHeliosTeletransmissionLotPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Helios_teletransmission_lot';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonHeliosTeletransmissionLot';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonHeliosTeletransmissionLotTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 17;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 17;

    /** the column name for the id_teletransmission field */
    const ID_TELETRANSMISSION = 'Helios_teletransmission_lot.id_teletransmission';

    /** the column name for the organisme field */
    const ORGANISME = 'Helios_teletransmission_lot.organisme';

    /** the column name for the lot field */
    const LOT = 'Helios_teletransmission_lot.lot';

    /** the column name for the numero_marche field */
    const NUMERO_MARCHE = 'Helios_teletransmission_lot.numero_marche';

    /** the column name for the ids_env_actes_engagements field */
    const IDS_ENV_ACTES_ENGAGEMENTS = 'Helios_teletransmission_lot.ids_env_actes_engagements';

    /** the column name for the ids_enveloppes_items field */
    const IDS_ENVELOPPES_ITEMS = 'Helios_teletransmission_lot.ids_enveloppes_items';

    /** the column name for the ids_docs_acceptes field */
    const IDS_DOCS_ACCEPTES = 'Helios_teletransmission_lot.ids_docs_acceptes';

    /** the column name for the ids_msg_notif field */
    const IDS_MSG_NOTIF = 'Helios_teletransmission_lot.ids_msg_notif';

    /** the column name for the lot_in_transmission field */
    const LOT_IN_TRANSMISSION = 'Helios_teletransmission_lot.lot_in_transmission';

    /** the column name for the statut_envoi field */
    const STATUT_ENVOI = 'Helios_teletransmission_lot.statut_envoi';

    /** the column name for the id_zip_send field */
    const ID_ZIP_SEND = 'Helios_teletransmission_lot.id_zip_send';

    /** the column name for the nom_lettre_commande field */
    const NOM_LETTRE_COMMANDE = 'Helios_teletransmission_lot.nom_lettre_commande';

    /** the column name for the lettre_commande field */
    const LETTRE_COMMANDE = 'Helios_teletransmission_lot.lettre_commande';

    /** the column name for the horodatage field */
    const HORODATAGE = 'Helios_teletransmission_lot.horodatage';

    /** the column name for the untrusteddate field */
    const UNTRUSTEDDATE = 'Helios_teletransmission_lot.untrusteddate';

    /** the column name for the taille field */
    const TAILLE = 'Helios_teletransmission_lot.taille';

    /** the column name for the valider_comptable field */
    const VALIDER_COMPTABLE = 'Helios_teletransmission_lot.valider_comptable';

    /** The enumerated values for the valider_comptable field */
    const VALIDER_COMPTABLE_0 = '0';
    const VALIDER_COMPTABLE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonHeliosTeletransmissionLot objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonHeliosTeletransmissionLot[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonHeliosTeletransmissionLotPeer::$fieldNames[CommonHeliosTeletransmissionLotPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdTeletransmission', 'Organisme', 'Lot', 'NumeroMarche', 'IdsEnvActesEngagements', 'IdsEnveloppesItems', 'IdsDocsAcceptes', 'IdsMsgNotif', 'LotInTransmission', 'StatutEnvoi', 'IdZipSend', 'NomLettreCommande', 'LettreCommande', 'Horodatage', 'Untrusteddate', 'Taille', 'ValiderComptable', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idTeletransmission', 'organisme', 'lot', 'numeroMarche', 'idsEnvActesEngagements', 'idsEnveloppesItems', 'idsDocsAcceptes', 'idsMsgNotif', 'lotInTransmission', 'statutEnvoi', 'idZipSend', 'nomLettreCommande', 'lettreCommande', 'horodatage', 'untrusteddate', 'taille', 'validerComptable', ),
        BasePeer::TYPE_COLNAME => array (CommonHeliosTeletransmissionLotPeer::ID_TELETRANSMISSION, CommonHeliosTeletransmissionLotPeer::ORGANISME, CommonHeliosTeletransmissionLotPeer::LOT, CommonHeliosTeletransmissionLotPeer::NUMERO_MARCHE, CommonHeliosTeletransmissionLotPeer::IDS_ENV_ACTES_ENGAGEMENTS, CommonHeliosTeletransmissionLotPeer::IDS_ENVELOPPES_ITEMS, CommonHeliosTeletransmissionLotPeer::IDS_DOCS_ACCEPTES, CommonHeliosTeletransmissionLotPeer::IDS_MSG_NOTIF, CommonHeliosTeletransmissionLotPeer::LOT_IN_TRANSMISSION, CommonHeliosTeletransmissionLotPeer::STATUT_ENVOI, CommonHeliosTeletransmissionLotPeer::ID_ZIP_SEND, CommonHeliosTeletransmissionLotPeer::NOM_LETTRE_COMMANDE, CommonHeliosTeletransmissionLotPeer::LETTRE_COMMANDE, CommonHeliosTeletransmissionLotPeer::HORODATAGE, CommonHeliosTeletransmissionLotPeer::UNTRUSTEDDATE, CommonHeliosTeletransmissionLotPeer::TAILLE, CommonHeliosTeletransmissionLotPeer::VALIDER_COMPTABLE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_TELETRANSMISSION', 'ORGANISME', 'LOT', 'NUMERO_MARCHE', 'IDS_ENV_ACTES_ENGAGEMENTS', 'IDS_ENVELOPPES_ITEMS', 'IDS_DOCS_ACCEPTES', 'IDS_MSG_NOTIF', 'LOT_IN_TRANSMISSION', 'STATUT_ENVOI', 'ID_ZIP_SEND', 'NOM_LETTRE_COMMANDE', 'LETTRE_COMMANDE', 'HORODATAGE', 'UNTRUSTEDDATE', 'TAILLE', 'VALIDER_COMPTABLE', ),
        BasePeer::TYPE_FIELDNAME => array ('id_teletransmission', 'organisme', 'lot', 'numero_marche', 'ids_env_actes_engagements', 'ids_enveloppes_items', 'ids_docs_acceptes', 'ids_msg_notif', 'lot_in_transmission', 'statut_envoi', 'id_zip_send', 'nom_lettre_commande', 'lettre_commande', 'horodatage', 'untrusteddate', 'taille', 'valider_comptable', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonHeliosTeletransmissionLotPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdTeletransmission' => 0, 'Organisme' => 1, 'Lot' => 2, 'NumeroMarche' => 3, 'IdsEnvActesEngagements' => 4, 'IdsEnveloppesItems' => 5, 'IdsDocsAcceptes' => 6, 'IdsMsgNotif' => 7, 'LotInTransmission' => 8, 'StatutEnvoi' => 9, 'IdZipSend' => 10, 'NomLettreCommande' => 11, 'LettreCommande' => 12, 'Horodatage' => 13, 'Untrusteddate' => 14, 'Taille' => 15, 'ValiderComptable' => 16, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idTeletransmission' => 0, 'organisme' => 1, 'lot' => 2, 'numeroMarche' => 3, 'idsEnvActesEngagements' => 4, 'idsEnveloppesItems' => 5, 'idsDocsAcceptes' => 6, 'idsMsgNotif' => 7, 'lotInTransmission' => 8, 'statutEnvoi' => 9, 'idZipSend' => 10, 'nomLettreCommande' => 11, 'lettreCommande' => 12, 'horodatage' => 13, 'untrusteddate' => 14, 'taille' => 15, 'validerComptable' => 16, ),
        BasePeer::TYPE_COLNAME => array (CommonHeliosTeletransmissionLotPeer::ID_TELETRANSMISSION => 0, CommonHeliosTeletransmissionLotPeer::ORGANISME => 1, CommonHeliosTeletransmissionLotPeer::LOT => 2, CommonHeliosTeletransmissionLotPeer::NUMERO_MARCHE => 3, CommonHeliosTeletransmissionLotPeer::IDS_ENV_ACTES_ENGAGEMENTS => 4, CommonHeliosTeletransmissionLotPeer::IDS_ENVELOPPES_ITEMS => 5, CommonHeliosTeletransmissionLotPeer::IDS_DOCS_ACCEPTES => 6, CommonHeliosTeletransmissionLotPeer::IDS_MSG_NOTIF => 7, CommonHeliosTeletransmissionLotPeer::LOT_IN_TRANSMISSION => 8, CommonHeliosTeletransmissionLotPeer::STATUT_ENVOI => 9, CommonHeliosTeletransmissionLotPeer::ID_ZIP_SEND => 10, CommonHeliosTeletransmissionLotPeer::NOM_LETTRE_COMMANDE => 11, CommonHeliosTeletransmissionLotPeer::LETTRE_COMMANDE => 12, CommonHeliosTeletransmissionLotPeer::HORODATAGE => 13, CommonHeliosTeletransmissionLotPeer::UNTRUSTEDDATE => 14, CommonHeliosTeletransmissionLotPeer::TAILLE => 15, CommonHeliosTeletransmissionLotPeer::VALIDER_COMPTABLE => 16, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_TELETRANSMISSION' => 0, 'ORGANISME' => 1, 'LOT' => 2, 'NUMERO_MARCHE' => 3, 'IDS_ENV_ACTES_ENGAGEMENTS' => 4, 'IDS_ENVELOPPES_ITEMS' => 5, 'IDS_DOCS_ACCEPTES' => 6, 'IDS_MSG_NOTIF' => 7, 'LOT_IN_TRANSMISSION' => 8, 'STATUT_ENVOI' => 9, 'ID_ZIP_SEND' => 10, 'NOM_LETTRE_COMMANDE' => 11, 'LETTRE_COMMANDE' => 12, 'HORODATAGE' => 13, 'UNTRUSTEDDATE' => 14, 'TAILLE' => 15, 'VALIDER_COMPTABLE' => 16, ),
        BasePeer::TYPE_FIELDNAME => array ('id_teletransmission' => 0, 'organisme' => 1, 'lot' => 2, 'numero_marche' => 3, 'ids_env_actes_engagements' => 4, 'ids_enveloppes_items' => 5, 'ids_docs_acceptes' => 6, 'ids_msg_notif' => 7, 'lot_in_transmission' => 8, 'statut_envoi' => 9, 'id_zip_send' => 10, 'nom_lettre_commande' => 11, 'lettre_commande' => 12, 'horodatage' => 13, 'untrusteddate' => 14, 'taille' => 15, 'valider_comptable' => 16, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonHeliosTeletransmissionLotPeer::VALIDER_COMPTABLE => array(
            CommonHeliosTeletransmissionLotPeer::VALIDER_COMPTABLE_0,
            CommonHeliosTeletransmissionLotPeer::VALIDER_COMPTABLE_1,
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
        $toNames = CommonHeliosTeletransmissionLotPeer::getFieldNames($toType);
        $key = isset(CommonHeliosTeletransmissionLotPeer::$fieldKeys[$fromType][$name]) ? CommonHeliosTeletransmissionLotPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonHeliosTeletransmissionLotPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonHeliosTeletransmissionLotPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonHeliosTeletransmissionLotPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonHeliosTeletransmissionLotPeer::$enumValueSets;
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
        $valueSets = CommonHeliosTeletransmissionLotPeer::getValueSets();

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
        $values = CommonHeliosTeletransmissionLotPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonHeliosTeletransmissionLotPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonHeliosTeletransmissionLotPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonHeliosTeletransmissionLotPeer::ID_TELETRANSMISSION);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionLotPeer::ORGANISME);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionLotPeer::LOT);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionLotPeer::NUMERO_MARCHE);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionLotPeer::IDS_ENV_ACTES_ENGAGEMENTS);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionLotPeer::IDS_ENVELOPPES_ITEMS);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionLotPeer::IDS_DOCS_ACCEPTES);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionLotPeer::IDS_MSG_NOTIF);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionLotPeer::LOT_IN_TRANSMISSION);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionLotPeer::STATUT_ENVOI);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionLotPeer::ID_ZIP_SEND);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionLotPeer::NOM_LETTRE_COMMANDE);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionLotPeer::LETTRE_COMMANDE);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionLotPeer::HORODATAGE);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionLotPeer::UNTRUSTEDDATE);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionLotPeer::TAILLE);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionLotPeer::VALIDER_COMPTABLE);
        } else {
            $criteria->addSelectColumn($alias . '.id_teletransmission');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.lot');
            $criteria->addSelectColumn($alias . '.numero_marche');
            $criteria->addSelectColumn($alias . '.ids_env_actes_engagements');
            $criteria->addSelectColumn($alias . '.ids_enveloppes_items');
            $criteria->addSelectColumn($alias . '.ids_docs_acceptes');
            $criteria->addSelectColumn($alias . '.ids_msg_notif');
            $criteria->addSelectColumn($alias . '.lot_in_transmission');
            $criteria->addSelectColumn($alias . '.statut_envoi');
            $criteria->addSelectColumn($alias . '.id_zip_send');
            $criteria->addSelectColumn($alias . '.nom_lettre_commande');
            $criteria->addSelectColumn($alias . '.lettre_commande');
            $criteria->addSelectColumn($alias . '.horodatage');
            $criteria->addSelectColumn($alias . '.untrusteddate');
            $criteria->addSelectColumn($alias . '.taille');
            $criteria->addSelectColumn($alias . '.valider_comptable');
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
        $criteria->setPrimaryTableName(CommonHeliosTeletransmissionLotPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonHeliosTeletransmissionLotPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonHeliosTeletransmissionLot
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonHeliosTeletransmissionLotPeer::doSelect($critcopy, $con);
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
        return CommonHeliosTeletransmissionLotPeer::populateObjects(CommonHeliosTeletransmissionLotPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonHeliosTeletransmissionLotPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME);

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
     * @param      CommonHeliosTeletransmissionLot $obj A CommonHeliosTeletransmissionLot object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdTeletransmission(), (string) $obj->getOrganisme(), (string) $obj->getLot()));
            } // if key === null
            CommonHeliosTeletransmissionLotPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonHeliosTeletransmissionLot object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonHeliosTeletransmissionLot) {
                $key = serialize(array((string) $value->getIdTeletransmission(), (string) $value->getOrganisme(), (string) $value->getLot()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonHeliosTeletransmissionLot object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonHeliosTeletransmissionLotPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonHeliosTeletransmissionLot Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonHeliosTeletransmissionLotPeer::$instances[$key])) {
                return CommonHeliosTeletransmissionLotPeer::$instances[$key];
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
        foreach (CommonHeliosTeletransmissionLotPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonHeliosTeletransmissionLotPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Helios_teletransmission_lot
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
        if ($row[$startcol] === null && $row[$startcol + 1] === null && $row[$startcol + 2] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1], (string) $row[$startcol + 2]));
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

        return array((int) $row[$startcol], (string) $row[$startcol + 1], (int) $row[$startcol + 2]);
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
        $cls = CommonHeliosTeletransmissionLotPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonHeliosTeletransmissionLotPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonHeliosTeletransmissionLotPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonHeliosTeletransmissionLotPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonHeliosTeletransmissionLot object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonHeliosTeletransmissionLotPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonHeliosTeletransmissionLotPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonHeliosTeletransmissionLotPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonHeliosTeletransmissionLotPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonHeliosTeletransmissionLotPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME)->getTable(CommonHeliosTeletransmissionLotPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonHeliosTeletransmissionLotPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonHeliosTeletransmissionLotPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonHeliosTeletransmissionLotTableMap());
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
        return CommonHeliosTeletransmissionLotPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonHeliosTeletransmissionLot or Criteria object.
     *
     * @param      mixed $values Criteria or CommonHeliosTeletransmissionLot object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonHeliosTeletransmissionLot object
        }


        // Set the correct dbName
        $criteria->setDbName(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonHeliosTeletransmissionLot or Criteria object.
     *
     * @param      mixed $values Criteria or CommonHeliosTeletransmissionLot object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonHeliosTeletransmissionLotPeer::ID_TELETRANSMISSION);
            $value = $criteria->remove(CommonHeliosTeletransmissionLotPeer::ID_TELETRANSMISSION);
            if ($value) {
                $selectCriteria->add(CommonHeliosTeletransmissionLotPeer::ID_TELETRANSMISSION, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonHeliosTeletransmissionLotPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonHeliosTeletransmissionLotPeer::ORGANISME);
            $value = $criteria->remove(CommonHeliosTeletransmissionLotPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonHeliosTeletransmissionLotPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonHeliosTeletransmissionLotPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonHeliosTeletransmissionLotPeer::LOT);
            $value = $criteria->remove(CommonHeliosTeletransmissionLotPeer::LOT);
            if ($value) {
                $selectCriteria->add(CommonHeliosTeletransmissionLotPeer::LOT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonHeliosTeletransmissionLotPeer::TABLE_NAME);
            }

        } else { // $values is CommonHeliosTeletransmissionLot object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Helios_teletransmission_lot table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonHeliosTeletransmissionLotPeer::TABLE_NAME, $con, CommonHeliosTeletransmissionLotPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonHeliosTeletransmissionLotPeer::clearInstancePool();
            CommonHeliosTeletransmissionLotPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonHeliosTeletransmissionLot or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonHeliosTeletransmissionLot object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonHeliosTeletransmissionLotPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonHeliosTeletransmissionLot) { // it's a model object
            // invalidate the cache for this single object
            CommonHeliosTeletransmissionLotPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonHeliosTeletransmissionLotPeer::ID_TELETRANSMISSION, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonHeliosTeletransmissionLotPeer::ORGANISME, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CommonHeliosTeletransmissionLotPeer::LOT, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonHeliosTeletransmissionLotPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonHeliosTeletransmissionLotPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonHeliosTeletransmissionLot object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonHeliosTeletransmissionLot $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonHeliosTeletransmissionLotPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME, CommonHeliosTeletransmissionLotPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id_teletransmission
     * @param   string $organisme
     * @param   int $lot
     * @param      PropelPDO $con
     * @return   CommonHeliosTeletransmissionLot
     */
    public static function retrieveByPK($id_teletransmission, $organisme, $lot, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_teletransmission, (string) $organisme, (string) $lot));
         if (null !== ($obj = CommonHeliosTeletransmissionLotPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME);
        $criteria->add(CommonHeliosTeletransmissionLotPeer::ID_TELETRANSMISSION, $id_teletransmission);
        $criteria->add(CommonHeliosTeletransmissionLotPeer::ORGANISME, $organisme);
        $criteria->add(CommonHeliosTeletransmissionLotPeer::LOT, $lot);
        $v = CommonHeliosTeletransmissionLotPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonHeliosTeletransmissionLotPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonHeliosTeletransmissionLotPeer::buildTableMap();

