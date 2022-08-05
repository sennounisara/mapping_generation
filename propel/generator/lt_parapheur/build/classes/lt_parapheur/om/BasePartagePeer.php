<?php


/**
 * Base static class for performing query and update operations on the 'partage' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BasePartagePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'lt_parapheur';

    /** the table name for this class */
    const TABLE_NAME = 'partage';

    /** the related Propel class for this table */
    const OM_CLASS = 'Partage';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PartageTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 18;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 18;

    /** the column name for the ID_PARTAGE field */
    const ID_PARTAGE = 'partage.ID_PARTAGE';

    /** the column name for the ID_DEMANDE field */
    const ID_DEMANDE = 'partage.ID_DEMANDE';

    /** the column name for the ID_AGENT_PARTAGE field */
    const ID_AGENT_PARTAGE = 'partage.ID_AGENT_PARTAGE';

    /** the column name for the NOM_AGENT_PARTAGE_FR field */
    const NOM_AGENT_PARTAGE_FR = 'partage.NOM_AGENT_PARTAGE_FR';

    /** the column name for the NOM_AGENT_PARTAGE_AR field */
    const NOM_AGENT_PARTAGE_AR = 'partage.NOM_AGENT_PARTAGE_AR';

    /** the column name for the PRENOM_AGENT_PARTAGE_FR field */
    const PRENOM_AGENT_PARTAGE_FR = 'partage.PRENOM_AGENT_PARTAGE_FR';

    /** the column name for the PRENOM_AGENT_PARTAGE_AR field */
    const PRENOM_AGENT_PARTAGE_AR = 'partage.PRENOM_AGENT_PARTAGE_AR';

    /** the column name for the ID_AGENT field */
    const ID_AGENT = 'partage.ID_AGENT';

    /** the column name for the ID_ENTITE field */
    const ID_ENTITE = 'partage.ID_ENTITE';

    /** the column name for the ACTION_ATTENDUE field */
    const ACTION_ATTENDUE = 'partage.ACTION_ATTENDUE';

    /** the column name for the COMMENTAIRE field */
    const COMMENTAIRE = 'partage.COMMENTAIRE';

    /** the column name for the ID_PIECE_JOINTE field */
    const ID_PIECE_JOINTE = 'partage.ID_PIECE_JOINTE';

    /** the column name for the NOM_PIECE_JOINTE field */
    const NOM_PIECE_JOINTE = 'partage.NOM_PIECE_JOINTE';

    /** the column name for the DATE_PARTAGE field */
    const DATE_PARTAGE = 'partage.DATE_PARTAGE';

    /** the column name for the DATE_RETRAIT field */
    const DATE_RETRAIT = 'partage.DATE_RETRAIT';

    /** the column name for the ETAT field */
    const ETAT = 'partage.ETAT';

    /** the column name for the ETAT_PARTAGE field */
    const ETAT_PARTAGE = 'partage.ETAT_PARTAGE';

    /** the column name for the DATE_RETIRER_PARTAGE field */
    const DATE_RETIRER_PARTAGE = 'partage.DATE_RETIRER_PARTAGE';

    /** The enumerated values for the ETAT field */
    const ETAT_0 = '0';
    const ETAT_1 = '1';

    /** The enumerated values for the ETAT_PARTAGE field */
    const ETAT_PARTAGE_0 = '0';
    const ETAT_PARTAGE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Partage objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Partage[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PartagePeer::$fieldNames[PartagePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdPartage', 'IdDemande', 'IdAgentPartage', 'NomAgentPartageFr', 'NomAgentPartageAr', 'PrenomAgentPartageFr', 'PrenomAgentPartageAr', 'IdAgent', 'IdEntite', 'ActionAttendue', 'Commentaire', 'IdPieceJointe', 'NomPieceJointe', 'DatePartage', 'DateRetrait', 'Etat', 'EtatPartage', 'DateRetirerPartage', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idPartage', 'idDemande', 'idAgentPartage', 'nomAgentPartageFr', 'nomAgentPartageAr', 'prenomAgentPartageFr', 'prenomAgentPartageAr', 'idAgent', 'idEntite', 'actionAttendue', 'commentaire', 'idPieceJointe', 'nomPieceJointe', 'datePartage', 'dateRetrait', 'etat', 'etatPartage', 'dateRetirerPartage', ),
        BasePeer::TYPE_COLNAME => array (PartagePeer::ID_PARTAGE, PartagePeer::ID_DEMANDE, PartagePeer::ID_AGENT_PARTAGE, PartagePeer::NOM_AGENT_PARTAGE_FR, PartagePeer::NOM_AGENT_PARTAGE_AR, PartagePeer::PRENOM_AGENT_PARTAGE_FR, PartagePeer::PRENOM_AGENT_PARTAGE_AR, PartagePeer::ID_AGENT, PartagePeer::ID_ENTITE, PartagePeer::ACTION_ATTENDUE, PartagePeer::COMMENTAIRE, PartagePeer::ID_PIECE_JOINTE, PartagePeer::NOM_PIECE_JOINTE, PartagePeer::DATE_PARTAGE, PartagePeer::DATE_RETRAIT, PartagePeer::ETAT, PartagePeer::ETAT_PARTAGE, PartagePeer::DATE_RETIRER_PARTAGE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_PARTAGE', 'ID_DEMANDE', 'ID_AGENT_PARTAGE', 'NOM_AGENT_PARTAGE_FR', 'NOM_AGENT_PARTAGE_AR', 'PRENOM_AGENT_PARTAGE_FR', 'PRENOM_AGENT_PARTAGE_AR', 'ID_AGENT', 'ID_ENTITE', 'ACTION_ATTENDUE', 'COMMENTAIRE', 'ID_PIECE_JOINTE', 'NOM_PIECE_JOINTE', 'DATE_PARTAGE', 'DATE_RETRAIT', 'ETAT', 'ETAT_PARTAGE', 'DATE_RETIRER_PARTAGE', ),
        BasePeer::TYPE_FIELDNAME => array ('ID_PARTAGE', 'ID_DEMANDE', 'ID_AGENT_PARTAGE', 'NOM_AGENT_PARTAGE_FR', 'NOM_AGENT_PARTAGE_AR', 'PRENOM_AGENT_PARTAGE_FR', 'PRENOM_AGENT_PARTAGE_AR', 'ID_AGENT', 'ID_ENTITE', 'ACTION_ATTENDUE', 'COMMENTAIRE', 'ID_PIECE_JOINTE', 'NOM_PIECE_JOINTE', 'DATE_PARTAGE', 'DATE_RETRAIT', 'ETAT', 'ETAT_PARTAGE', 'DATE_RETIRER_PARTAGE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PartagePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdPartage' => 0, 'IdDemande' => 1, 'IdAgentPartage' => 2, 'NomAgentPartageFr' => 3, 'NomAgentPartageAr' => 4, 'PrenomAgentPartageFr' => 5, 'PrenomAgentPartageAr' => 6, 'IdAgent' => 7, 'IdEntite' => 8, 'ActionAttendue' => 9, 'Commentaire' => 10, 'IdPieceJointe' => 11, 'NomPieceJointe' => 12, 'DatePartage' => 13, 'DateRetrait' => 14, 'Etat' => 15, 'EtatPartage' => 16, 'DateRetirerPartage' => 17, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idPartage' => 0, 'idDemande' => 1, 'idAgentPartage' => 2, 'nomAgentPartageFr' => 3, 'nomAgentPartageAr' => 4, 'prenomAgentPartageFr' => 5, 'prenomAgentPartageAr' => 6, 'idAgent' => 7, 'idEntite' => 8, 'actionAttendue' => 9, 'commentaire' => 10, 'idPieceJointe' => 11, 'nomPieceJointe' => 12, 'datePartage' => 13, 'dateRetrait' => 14, 'etat' => 15, 'etatPartage' => 16, 'dateRetirerPartage' => 17, ),
        BasePeer::TYPE_COLNAME => array (PartagePeer::ID_PARTAGE => 0, PartagePeer::ID_DEMANDE => 1, PartagePeer::ID_AGENT_PARTAGE => 2, PartagePeer::NOM_AGENT_PARTAGE_FR => 3, PartagePeer::NOM_AGENT_PARTAGE_AR => 4, PartagePeer::PRENOM_AGENT_PARTAGE_FR => 5, PartagePeer::PRENOM_AGENT_PARTAGE_AR => 6, PartagePeer::ID_AGENT => 7, PartagePeer::ID_ENTITE => 8, PartagePeer::ACTION_ATTENDUE => 9, PartagePeer::COMMENTAIRE => 10, PartagePeer::ID_PIECE_JOINTE => 11, PartagePeer::NOM_PIECE_JOINTE => 12, PartagePeer::DATE_PARTAGE => 13, PartagePeer::DATE_RETRAIT => 14, PartagePeer::ETAT => 15, PartagePeer::ETAT_PARTAGE => 16, PartagePeer::DATE_RETIRER_PARTAGE => 17, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_PARTAGE' => 0, 'ID_DEMANDE' => 1, 'ID_AGENT_PARTAGE' => 2, 'NOM_AGENT_PARTAGE_FR' => 3, 'NOM_AGENT_PARTAGE_AR' => 4, 'PRENOM_AGENT_PARTAGE_FR' => 5, 'PRENOM_AGENT_PARTAGE_AR' => 6, 'ID_AGENT' => 7, 'ID_ENTITE' => 8, 'ACTION_ATTENDUE' => 9, 'COMMENTAIRE' => 10, 'ID_PIECE_JOINTE' => 11, 'NOM_PIECE_JOINTE' => 12, 'DATE_PARTAGE' => 13, 'DATE_RETRAIT' => 14, 'ETAT' => 15, 'ETAT_PARTAGE' => 16, 'DATE_RETIRER_PARTAGE' => 17, ),
        BasePeer::TYPE_FIELDNAME => array ('ID_PARTAGE' => 0, 'ID_DEMANDE' => 1, 'ID_AGENT_PARTAGE' => 2, 'NOM_AGENT_PARTAGE_FR' => 3, 'NOM_AGENT_PARTAGE_AR' => 4, 'PRENOM_AGENT_PARTAGE_FR' => 5, 'PRENOM_AGENT_PARTAGE_AR' => 6, 'ID_AGENT' => 7, 'ID_ENTITE' => 8, 'ACTION_ATTENDUE' => 9, 'COMMENTAIRE' => 10, 'ID_PIECE_JOINTE' => 11, 'NOM_PIECE_JOINTE' => 12, 'DATE_PARTAGE' => 13, 'DATE_RETRAIT' => 14, 'ETAT' => 15, 'ETAT_PARTAGE' => 16, 'DATE_RETIRER_PARTAGE' => 17, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        PartagePeer::ETAT => array(
            PartagePeer::ETAT_0,
            PartagePeer::ETAT_1,
        ),
        PartagePeer::ETAT_PARTAGE => array(
            PartagePeer::ETAT_PARTAGE_0,
            PartagePeer::ETAT_PARTAGE_1,
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
        $toNames = PartagePeer::getFieldNames($toType);
        $key = isset(PartagePeer::$fieldKeys[$fromType][$name]) ? PartagePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PartagePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PartagePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PartagePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return PartagePeer::$enumValueSets;
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
        $valueSets = PartagePeer::getValueSets();

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
        $values = PartagePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. PartagePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PartagePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PartagePeer::ID_PARTAGE);
            $criteria->addSelectColumn(PartagePeer::ID_DEMANDE);
            $criteria->addSelectColumn(PartagePeer::ID_AGENT_PARTAGE);
            $criteria->addSelectColumn(PartagePeer::NOM_AGENT_PARTAGE_FR);
            $criteria->addSelectColumn(PartagePeer::NOM_AGENT_PARTAGE_AR);
            $criteria->addSelectColumn(PartagePeer::PRENOM_AGENT_PARTAGE_FR);
            $criteria->addSelectColumn(PartagePeer::PRENOM_AGENT_PARTAGE_AR);
            $criteria->addSelectColumn(PartagePeer::ID_AGENT);
            $criteria->addSelectColumn(PartagePeer::ID_ENTITE);
            $criteria->addSelectColumn(PartagePeer::ACTION_ATTENDUE);
            $criteria->addSelectColumn(PartagePeer::COMMENTAIRE);
            $criteria->addSelectColumn(PartagePeer::ID_PIECE_JOINTE);
            $criteria->addSelectColumn(PartagePeer::NOM_PIECE_JOINTE);
            $criteria->addSelectColumn(PartagePeer::DATE_PARTAGE);
            $criteria->addSelectColumn(PartagePeer::DATE_RETRAIT);
            $criteria->addSelectColumn(PartagePeer::ETAT);
            $criteria->addSelectColumn(PartagePeer::ETAT_PARTAGE);
            $criteria->addSelectColumn(PartagePeer::DATE_RETIRER_PARTAGE);
        } else {
            $criteria->addSelectColumn($alias . '.ID_PARTAGE');
            $criteria->addSelectColumn($alias . '.ID_DEMANDE');
            $criteria->addSelectColumn($alias . '.ID_AGENT_PARTAGE');
            $criteria->addSelectColumn($alias . '.NOM_AGENT_PARTAGE_FR');
            $criteria->addSelectColumn($alias . '.NOM_AGENT_PARTAGE_AR');
            $criteria->addSelectColumn($alias . '.PRENOM_AGENT_PARTAGE_FR');
            $criteria->addSelectColumn($alias . '.PRENOM_AGENT_PARTAGE_AR');
            $criteria->addSelectColumn($alias . '.ID_AGENT');
            $criteria->addSelectColumn($alias . '.ID_ENTITE');
            $criteria->addSelectColumn($alias . '.ACTION_ATTENDUE');
            $criteria->addSelectColumn($alias . '.COMMENTAIRE');
            $criteria->addSelectColumn($alias . '.ID_PIECE_JOINTE');
            $criteria->addSelectColumn($alias . '.NOM_PIECE_JOINTE');
            $criteria->addSelectColumn($alias . '.DATE_PARTAGE');
            $criteria->addSelectColumn($alias . '.DATE_RETRAIT');
            $criteria->addSelectColumn($alias . '.ETAT');
            $criteria->addSelectColumn($alias . '.ETAT_PARTAGE');
            $criteria->addSelectColumn($alias . '.DATE_RETIRER_PARTAGE');
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
        $criteria->setPrimaryTableName(PartagePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PartagePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PartagePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PartagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Partage
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PartagePeer::doSelect($critcopy, $con);
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
        return PartagePeer::populateObjects(PartagePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PartagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PartagePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PartagePeer::DATABASE_NAME);

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
     * @param      Partage $obj A Partage object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdPartage();
            } // if key === null
            PartagePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Partage object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Partage) {
                $key = (string) $value->getIdPartage();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Partage object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PartagePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   Partage Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PartagePeer::$instances[$key])) {
                return PartagePeer::$instances[$key];
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
        foreach (PartagePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PartagePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to partage
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
        $cls = PartagePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PartagePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PartagePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PartagePeer::addInstanceToPool($obj, $key);
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
     * @return array (Partage object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PartagePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PartagePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PartagePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PartagePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PartagePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(PartagePeer::DATABASE_NAME)->getTable(PartagePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePartagePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePartagePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new PartageTableMap());
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
        return PartagePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Partage or Criteria object.
     *
     * @param      mixed $values Criteria or Partage object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PartagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Partage object
        }

        if ($criteria->containsKey(PartagePeer::ID_PARTAGE) && $criteria->keyContainsValue(PartagePeer::ID_PARTAGE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PartagePeer::ID_PARTAGE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PartagePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Partage or Criteria object.
     *
     * @param      mixed $values Criteria or Partage object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PartagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PartagePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PartagePeer::ID_PARTAGE);
            $value = $criteria->remove(PartagePeer::ID_PARTAGE);
            if ($value) {
                $selectCriteria->add(PartagePeer::ID_PARTAGE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PartagePeer::TABLE_NAME);
            }

        } else { // $values is Partage object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PartagePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the partage table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PartagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PartagePeer::TABLE_NAME, $con, PartagePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PartagePeer::clearInstancePool();
            PartagePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Partage or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Partage object or primary key or array of primary keys
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
            $con = Propel::getConnection(PartagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PartagePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Partage) { // it's a model object
            // invalidate the cache for this single object
            PartagePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PartagePeer::DATABASE_NAME);
            $criteria->add(PartagePeer::ID_PARTAGE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                PartagePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PartagePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            PartagePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Partage object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      Partage $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PartagePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PartagePeer::TABLE_NAME);

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

        return BasePeer::doValidate(PartagePeer::DATABASE_NAME, PartagePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Partage
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PartagePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PartagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PartagePeer::DATABASE_NAME);
        $criteria->add(PartagePeer::ID_PARTAGE, $pk);

        $v = PartagePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Partage[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PartagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PartagePeer::DATABASE_NAME);
            $criteria->add(PartagePeer::ID_PARTAGE, $pks, Criteria::IN);
            $objs = PartagePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BasePartagePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePartagePeer::buildTableMap();

