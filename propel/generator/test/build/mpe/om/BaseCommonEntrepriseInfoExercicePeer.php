<?php


/**
 * Base static class for performing query and update operations on the 'Entreprise_info_exercice' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonEntrepriseInfoExercicePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Entreprise_info_exercice';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonEntrepriseInfoExercice';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonEntrepriseInfoExerciceTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the id_Entreprise field */
    const ID_ENTREPRISE = 'Entreprise_info_exercice.id_Entreprise';

    /** the column name for the debutExerciceGlob field */
    const DEBUTEXERCICEGLOB = 'Entreprise_info_exercice.debutExerciceGlob';

    /** the column name for the finExerciceGlob field */
    const FINEXERCICEGLOB = 'Entreprise_info_exercice.finExerciceGlob';

    /** the column name for the ventesGlob field */
    const VENTESGLOB = 'Entreprise_info_exercice.ventesGlob';

    /** the column name for the biensGlob field */
    const BIENSGLOB = 'Entreprise_info_exercice.biensGlob';

    /** the column name for the servicesGlob field */
    const SERVICESGLOB = 'Entreprise_info_exercice.servicesGlob';

    /** the column name for the totalGlob field */
    const TOTALGLOB = 'Entreprise_info_exercice.totalGlob';

    /** the column name for the annee_cloture_exercice field */
    const ANNEE_CLOTURE_EXERCICE = 'Entreprise_info_exercice.annee_cloture_exercice';

    /** the column name for the effectif_moyen field */
    const EFFECTIF_MOYEN = 'Entreprise_info_exercice.effectif_moyen';

    /** the column name for the effectif_encadrement field */
    const EFFECTIF_ENCADREMENT = 'Entreprise_info_exercice.effectif_encadrement';

    /** the column name for the pme field */
    const PME = 'Entreprise_info_exercice.pme';

    /** the column name for the chiffre_affaires field */
    const CHIFFRE_AFFAIRES = 'Entreprise_info_exercice.chiffre_affaires';

    /** the column name for the besoin_excedent_financement field */
    const BESOIN_EXCEDENT_FINANCEMENT = 'Entreprise_info_exercice.besoin_excedent_financement';

    /** the column name for the cash_flow field */
    const CASH_FLOW = 'Entreprise_info_exercice.cash_flow';

    /** the column name for the capacite_endettement field */
    const CAPACITE_ENDETTEMENT = 'Entreprise_info_exercice.capacite_endettement';

    /** The enumerated values for the pme field */
    const PME_1 = '1';
    const PME_0 = '0';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonEntrepriseInfoExercice objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonEntrepriseInfoExercice[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonEntrepriseInfoExercicePeer::$fieldNames[CommonEntrepriseInfoExercicePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdEntreprise', 'Debutexerciceglob', 'Finexerciceglob', 'Ventesglob', 'Biensglob', 'Servicesglob', 'Totalglob', 'AnneeClotureExercice', 'EffectifMoyen', 'EffectifEncadrement', 'Pme', 'ChiffreAffaires', 'BesoinExcedentFinancement', 'CashFlow', 'CapaciteEndettement', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEntreprise', 'debutexerciceglob', 'finexerciceglob', 'ventesglob', 'biensglob', 'servicesglob', 'totalglob', 'anneeClotureExercice', 'effectifMoyen', 'effectifEncadrement', 'pme', 'chiffreAffaires', 'besoinExcedentFinancement', 'cashFlow', 'capaciteEndettement', ),
        BasePeer::TYPE_COLNAME => array (CommonEntrepriseInfoExercicePeer::ID_ENTREPRISE, CommonEntrepriseInfoExercicePeer::DEBUTEXERCICEGLOB, CommonEntrepriseInfoExercicePeer::FINEXERCICEGLOB, CommonEntrepriseInfoExercicePeer::VENTESGLOB, CommonEntrepriseInfoExercicePeer::BIENSGLOB, CommonEntrepriseInfoExercicePeer::SERVICESGLOB, CommonEntrepriseInfoExercicePeer::TOTALGLOB, CommonEntrepriseInfoExercicePeer::ANNEE_CLOTURE_EXERCICE, CommonEntrepriseInfoExercicePeer::EFFECTIF_MOYEN, CommonEntrepriseInfoExercicePeer::EFFECTIF_ENCADREMENT, CommonEntrepriseInfoExercicePeer::PME, CommonEntrepriseInfoExercicePeer::CHIFFRE_AFFAIRES, CommonEntrepriseInfoExercicePeer::BESOIN_EXCEDENT_FINANCEMENT, CommonEntrepriseInfoExercicePeer::CASH_FLOW, CommonEntrepriseInfoExercicePeer::CAPACITE_ENDETTEMENT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_ENTREPRISE', 'DEBUTEXERCICEGLOB', 'FINEXERCICEGLOB', 'VENTESGLOB', 'BIENSGLOB', 'SERVICESGLOB', 'TOTALGLOB', 'ANNEE_CLOTURE_EXERCICE', 'EFFECTIF_MOYEN', 'EFFECTIF_ENCADREMENT', 'PME', 'CHIFFRE_AFFAIRES', 'BESOIN_EXCEDENT_FINANCEMENT', 'CASH_FLOW', 'CAPACITE_ENDETTEMENT', ),
        BasePeer::TYPE_FIELDNAME => array ('id_Entreprise', 'debutExerciceGlob', 'finExerciceGlob', 'ventesGlob', 'biensGlob', 'servicesGlob', 'totalGlob', 'annee_cloture_exercice', 'effectif_moyen', 'effectif_encadrement', 'pme', 'chiffre_affaires', 'besoin_excedent_financement', 'cash_flow', 'capacite_endettement', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonEntrepriseInfoExercicePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdEntreprise' => 0, 'Debutexerciceglob' => 1, 'Finexerciceglob' => 2, 'Ventesglob' => 3, 'Biensglob' => 4, 'Servicesglob' => 5, 'Totalglob' => 6, 'AnneeClotureExercice' => 7, 'EffectifMoyen' => 8, 'EffectifEncadrement' => 9, 'Pme' => 10, 'ChiffreAffaires' => 11, 'BesoinExcedentFinancement' => 12, 'CashFlow' => 13, 'CapaciteEndettement' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEntreprise' => 0, 'debutexerciceglob' => 1, 'finexerciceglob' => 2, 'ventesglob' => 3, 'biensglob' => 4, 'servicesglob' => 5, 'totalglob' => 6, 'anneeClotureExercice' => 7, 'effectifMoyen' => 8, 'effectifEncadrement' => 9, 'pme' => 10, 'chiffreAffaires' => 11, 'besoinExcedentFinancement' => 12, 'cashFlow' => 13, 'capaciteEndettement' => 14, ),
        BasePeer::TYPE_COLNAME => array (CommonEntrepriseInfoExercicePeer::ID_ENTREPRISE => 0, CommonEntrepriseInfoExercicePeer::DEBUTEXERCICEGLOB => 1, CommonEntrepriseInfoExercicePeer::FINEXERCICEGLOB => 2, CommonEntrepriseInfoExercicePeer::VENTESGLOB => 3, CommonEntrepriseInfoExercicePeer::BIENSGLOB => 4, CommonEntrepriseInfoExercicePeer::SERVICESGLOB => 5, CommonEntrepriseInfoExercicePeer::TOTALGLOB => 6, CommonEntrepriseInfoExercicePeer::ANNEE_CLOTURE_EXERCICE => 7, CommonEntrepriseInfoExercicePeer::EFFECTIF_MOYEN => 8, CommonEntrepriseInfoExercicePeer::EFFECTIF_ENCADREMENT => 9, CommonEntrepriseInfoExercicePeer::PME => 10, CommonEntrepriseInfoExercicePeer::CHIFFRE_AFFAIRES => 11, CommonEntrepriseInfoExercicePeer::BESOIN_EXCEDENT_FINANCEMENT => 12, CommonEntrepriseInfoExercicePeer::CASH_FLOW => 13, CommonEntrepriseInfoExercicePeer::CAPACITE_ENDETTEMENT => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_ENTREPRISE' => 0, 'DEBUTEXERCICEGLOB' => 1, 'FINEXERCICEGLOB' => 2, 'VENTESGLOB' => 3, 'BIENSGLOB' => 4, 'SERVICESGLOB' => 5, 'TOTALGLOB' => 6, 'ANNEE_CLOTURE_EXERCICE' => 7, 'EFFECTIF_MOYEN' => 8, 'EFFECTIF_ENCADREMENT' => 9, 'PME' => 10, 'CHIFFRE_AFFAIRES' => 11, 'BESOIN_EXCEDENT_FINANCEMENT' => 12, 'CASH_FLOW' => 13, 'CAPACITE_ENDETTEMENT' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('id_Entreprise' => 0, 'debutExerciceGlob' => 1, 'finExerciceGlob' => 2, 'ventesGlob' => 3, 'biensGlob' => 4, 'servicesGlob' => 5, 'totalGlob' => 6, 'annee_cloture_exercice' => 7, 'effectif_moyen' => 8, 'effectif_encadrement' => 9, 'pme' => 10, 'chiffre_affaires' => 11, 'besoin_excedent_financement' => 12, 'cash_flow' => 13, 'capacite_endettement' => 14, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonEntrepriseInfoExercicePeer::PME => array(
            CommonEntrepriseInfoExercicePeer::PME_1,
            CommonEntrepriseInfoExercicePeer::PME_0,
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
        $toNames = CommonEntrepriseInfoExercicePeer::getFieldNames($toType);
        $key = isset(CommonEntrepriseInfoExercicePeer::$fieldKeys[$fromType][$name]) ? CommonEntrepriseInfoExercicePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonEntrepriseInfoExercicePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonEntrepriseInfoExercicePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonEntrepriseInfoExercicePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonEntrepriseInfoExercicePeer::$enumValueSets;
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
        $valueSets = CommonEntrepriseInfoExercicePeer::getValueSets();

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
        $values = CommonEntrepriseInfoExercicePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonEntrepriseInfoExercicePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonEntrepriseInfoExercicePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonEntrepriseInfoExercicePeer::ID_ENTREPRISE);
            $criteria->addSelectColumn(CommonEntrepriseInfoExercicePeer::DEBUTEXERCICEGLOB);
            $criteria->addSelectColumn(CommonEntrepriseInfoExercicePeer::FINEXERCICEGLOB);
            $criteria->addSelectColumn(CommonEntrepriseInfoExercicePeer::VENTESGLOB);
            $criteria->addSelectColumn(CommonEntrepriseInfoExercicePeer::BIENSGLOB);
            $criteria->addSelectColumn(CommonEntrepriseInfoExercicePeer::SERVICESGLOB);
            $criteria->addSelectColumn(CommonEntrepriseInfoExercicePeer::TOTALGLOB);
            $criteria->addSelectColumn(CommonEntrepriseInfoExercicePeer::ANNEE_CLOTURE_EXERCICE);
            $criteria->addSelectColumn(CommonEntrepriseInfoExercicePeer::EFFECTIF_MOYEN);
            $criteria->addSelectColumn(CommonEntrepriseInfoExercicePeer::EFFECTIF_ENCADREMENT);
            $criteria->addSelectColumn(CommonEntrepriseInfoExercicePeer::PME);
            $criteria->addSelectColumn(CommonEntrepriseInfoExercicePeer::CHIFFRE_AFFAIRES);
            $criteria->addSelectColumn(CommonEntrepriseInfoExercicePeer::BESOIN_EXCEDENT_FINANCEMENT);
            $criteria->addSelectColumn(CommonEntrepriseInfoExercicePeer::CASH_FLOW);
            $criteria->addSelectColumn(CommonEntrepriseInfoExercicePeer::CAPACITE_ENDETTEMENT);
        } else {
            $criteria->addSelectColumn($alias . '.id_Entreprise');
            $criteria->addSelectColumn($alias . '.debutExerciceGlob');
            $criteria->addSelectColumn($alias . '.finExerciceGlob');
            $criteria->addSelectColumn($alias . '.ventesGlob');
            $criteria->addSelectColumn($alias . '.biensGlob');
            $criteria->addSelectColumn($alias . '.servicesGlob');
            $criteria->addSelectColumn($alias . '.totalGlob');
            $criteria->addSelectColumn($alias . '.annee_cloture_exercice');
            $criteria->addSelectColumn($alias . '.effectif_moyen');
            $criteria->addSelectColumn($alias . '.effectif_encadrement');
            $criteria->addSelectColumn($alias . '.pme');
            $criteria->addSelectColumn($alias . '.chiffre_affaires');
            $criteria->addSelectColumn($alias . '.besoin_excedent_financement');
            $criteria->addSelectColumn($alias . '.cash_flow');
            $criteria->addSelectColumn($alias . '.capacite_endettement');
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
        $criteria->setPrimaryTableName(CommonEntrepriseInfoExercicePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonEntrepriseInfoExercicePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonEntrepriseInfoExercicePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonEntrepriseInfoExercicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEntrepriseInfoExercice
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonEntrepriseInfoExercicePeer::doSelect($critcopy, $con);
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
        return CommonEntrepriseInfoExercicePeer::populateObjects(CommonEntrepriseInfoExercicePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonEntrepriseInfoExercicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonEntrepriseInfoExercicePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEntrepriseInfoExercicePeer::DATABASE_NAME);

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
     * @param      CommonEntrepriseInfoExercice $obj A CommonEntrepriseInfoExercice object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdEntreprise(), (string) $obj->getAnneeClotureExercice()));
            } // if key === null
            CommonEntrepriseInfoExercicePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonEntrepriseInfoExercice object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonEntrepriseInfoExercice) {
                $key = serialize(array((string) $value->getIdEntreprise(), (string) $value->getAnneeClotureExercice()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonEntrepriseInfoExercice object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonEntrepriseInfoExercicePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonEntrepriseInfoExercice Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonEntrepriseInfoExercicePeer::$instances[$key])) {
                return CommonEntrepriseInfoExercicePeer::$instances[$key];
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
        foreach (CommonEntrepriseInfoExercicePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonEntrepriseInfoExercicePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Entreprise_info_exercice
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
        if ($row[$startcol] === null && $row[$startcol + 7] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 7]));
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

        return array((int) $row[$startcol], (string) $row[$startcol + 7]);
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
        $cls = CommonEntrepriseInfoExercicePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonEntrepriseInfoExercicePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonEntrepriseInfoExercicePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonEntrepriseInfoExercicePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonEntrepriseInfoExercice object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonEntrepriseInfoExercicePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonEntrepriseInfoExercicePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonEntrepriseInfoExercicePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonEntrepriseInfoExercicePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonEntrepriseInfoExercicePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonEntrepriseInfoExercicePeer::DATABASE_NAME)->getTable(CommonEntrepriseInfoExercicePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonEntrepriseInfoExercicePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonEntrepriseInfoExercicePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonEntrepriseInfoExerciceTableMap());
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
        return CommonEntrepriseInfoExercicePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonEntrepriseInfoExercice or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEntrepriseInfoExercice object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEntrepriseInfoExercicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonEntrepriseInfoExercice object
        }


        // Set the correct dbName
        $criteria->setDbName(CommonEntrepriseInfoExercicePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonEntrepriseInfoExercice or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEntrepriseInfoExercice object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEntrepriseInfoExercicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonEntrepriseInfoExercicePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonEntrepriseInfoExercicePeer::ID_ENTREPRISE);
            $value = $criteria->remove(CommonEntrepriseInfoExercicePeer::ID_ENTREPRISE);
            if ($value) {
                $selectCriteria->add(CommonEntrepriseInfoExercicePeer::ID_ENTREPRISE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonEntrepriseInfoExercicePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonEntrepriseInfoExercicePeer::ANNEE_CLOTURE_EXERCICE);
            $value = $criteria->remove(CommonEntrepriseInfoExercicePeer::ANNEE_CLOTURE_EXERCICE);
            if ($value) {
                $selectCriteria->add(CommonEntrepriseInfoExercicePeer::ANNEE_CLOTURE_EXERCICE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonEntrepriseInfoExercicePeer::TABLE_NAME);
            }

        } else { // $values is CommonEntrepriseInfoExercice object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonEntrepriseInfoExercicePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Entreprise_info_exercice table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEntrepriseInfoExercicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonEntrepriseInfoExercicePeer::TABLE_NAME, $con, CommonEntrepriseInfoExercicePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonEntrepriseInfoExercicePeer::clearInstancePool();
            CommonEntrepriseInfoExercicePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonEntrepriseInfoExercice or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonEntrepriseInfoExercice object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonEntrepriseInfoExercicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonEntrepriseInfoExercicePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonEntrepriseInfoExercice) { // it's a model object
            // invalidate the cache for this single object
            CommonEntrepriseInfoExercicePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonEntrepriseInfoExercicePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonEntrepriseInfoExercicePeer::ID_ENTREPRISE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonEntrepriseInfoExercicePeer::ANNEE_CLOTURE_EXERCICE, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonEntrepriseInfoExercicePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEntrepriseInfoExercicePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonEntrepriseInfoExercicePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonEntrepriseInfoExercice object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonEntrepriseInfoExercice $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonEntrepriseInfoExercicePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonEntrepriseInfoExercicePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonEntrepriseInfoExercicePeer::DATABASE_NAME, CommonEntrepriseInfoExercicePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id_entreprise
     * @param   string $annee_cloture_exercice
     * @param      PropelPDO $con
     * @return   CommonEntrepriseInfoExercice
     */
    public static function retrieveByPK($id_entreprise, $annee_cloture_exercice, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_entreprise, (string) $annee_cloture_exercice));
         if (null !== ($obj = CommonEntrepriseInfoExercicePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonEntrepriseInfoExercicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonEntrepriseInfoExercicePeer::DATABASE_NAME);
        $criteria->add(CommonEntrepriseInfoExercicePeer::ID_ENTREPRISE, $id_entreprise);
        $criteria->add(CommonEntrepriseInfoExercicePeer::ANNEE_CLOTURE_EXERCICE, $annee_cloture_exercice);
        $v = CommonEntrepriseInfoExercicePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonEntrepriseInfoExercicePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonEntrepriseInfoExercicePeer::buildTableMap();

