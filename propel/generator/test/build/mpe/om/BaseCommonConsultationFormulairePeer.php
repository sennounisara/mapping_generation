<?php


/**
 * Base static class for performing query and update operations on the 'ConsultationFormulaire' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonConsultationFormulairePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'ConsultationFormulaire';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonConsultationFormulaire';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonConsultationFormulaireTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 17;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 17;

    /** the column name for the id field */
    const ID = 'ConsultationFormulaire.id';

    /** the column name for the reference field */
    const REFERENCE = 'ConsultationFormulaire.reference';

    /** the column name for the nom field */
    const NOM = 'ConsultationFormulaire.nom';

    /** the column name for the type_formulaire field */
    const TYPE_FORMULAIRE = 'ConsultationFormulaire.type_formulaire';

    /** the column name for the id_type_procedure field */
    const ID_TYPE_PROCEDURE = 'ConsultationFormulaire.id_type_procedure';

    /** the column name for the id_categorie field */
    const ID_CATEGORIE = 'ConsultationFormulaire.id_categorie';

    /** the column name for the code_cpv_1 field */
    const CODE_CPV_1 = 'ConsultationFormulaire.code_cpv_1';

    /** the column name for the code_cpv_2 field */
    const CODE_CPV_2 = 'ConsultationFormulaire.code_cpv_2';

    /** the column name for the organisme field */
    const ORGANISME = 'ConsultationFormulaire.organisme';

    /** the column name for the service_id field */
    const SERVICE_ID = 'ConsultationFormulaire.service_id';

    /** the column name for the date_creation field */
    const DATE_CREATION = 'ConsultationFormulaire.date_creation';

    /** the column name for the date_modification field */
    const DATE_MODIFICATION = 'ConsultationFormulaire.date_modification';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'ConsultationFormulaire.consultation_ref';

    /** the column name for the type_enveloppe field */
    const TYPE_ENVELOPPE = 'ConsultationFormulaire.type_enveloppe';

    /** the column name for the lot field */
    const LOT = 'ConsultationFormulaire.lot';

    /** the column name for the id_modele field */
    const ID_MODELE = 'ConsultationFormulaire.id_modele';

    /** the column name for the statut field */
    const STATUT = 'ConsultationFormulaire.statut';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonConsultationFormulaire objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonConsultationFormulaire[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonConsultationFormulairePeer::$fieldNames[CommonConsultationFormulairePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Reference', 'Nom', 'TypeFormulaire', 'IdTypeProcedure', 'IdCategorie', 'CodeCpv1', 'CodeCpv2', 'Organisme', 'ServiceId', 'DateCreation', 'DateModification', 'ConsultationRef', 'TypeEnveloppe', 'Lot', 'IdModele', 'Statut', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'reference', 'nom', 'typeFormulaire', 'idTypeProcedure', 'idCategorie', 'codeCpv1', 'codeCpv2', 'organisme', 'serviceId', 'dateCreation', 'dateModification', 'consultationRef', 'typeEnveloppe', 'lot', 'idModele', 'statut', ),
        BasePeer::TYPE_COLNAME => array (CommonConsultationFormulairePeer::ID, CommonConsultationFormulairePeer::REFERENCE, CommonConsultationFormulairePeer::NOM, CommonConsultationFormulairePeer::TYPE_FORMULAIRE, CommonConsultationFormulairePeer::ID_TYPE_PROCEDURE, CommonConsultationFormulairePeer::ID_CATEGORIE, CommonConsultationFormulairePeer::CODE_CPV_1, CommonConsultationFormulairePeer::CODE_CPV_2, CommonConsultationFormulairePeer::ORGANISME, CommonConsultationFormulairePeer::SERVICE_ID, CommonConsultationFormulairePeer::DATE_CREATION, CommonConsultationFormulairePeer::DATE_MODIFICATION, CommonConsultationFormulairePeer::CONSULTATION_REF, CommonConsultationFormulairePeer::TYPE_ENVELOPPE, CommonConsultationFormulairePeer::LOT, CommonConsultationFormulairePeer::ID_MODELE, CommonConsultationFormulairePeer::STATUT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'REFERENCE', 'NOM', 'TYPE_FORMULAIRE', 'ID_TYPE_PROCEDURE', 'ID_CATEGORIE', 'CODE_CPV_1', 'CODE_CPV_2', 'ORGANISME', 'SERVICE_ID', 'DATE_CREATION', 'DATE_MODIFICATION', 'CONSULTATION_REF', 'TYPE_ENVELOPPE', 'LOT', 'ID_MODELE', 'STATUT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'reference', 'nom', 'type_formulaire', 'id_type_procedure', 'id_categorie', 'code_cpv_1', 'code_cpv_2', 'organisme', 'service_id', 'date_creation', 'date_modification', 'consultation_ref', 'type_enveloppe', 'lot', 'id_modele', 'statut', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonConsultationFormulairePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Reference' => 1, 'Nom' => 2, 'TypeFormulaire' => 3, 'IdTypeProcedure' => 4, 'IdCategorie' => 5, 'CodeCpv1' => 6, 'CodeCpv2' => 7, 'Organisme' => 8, 'ServiceId' => 9, 'DateCreation' => 10, 'DateModification' => 11, 'ConsultationRef' => 12, 'TypeEnveloppe' => 13, 'Lot' => 14, 'IdModele' => 15, 'Statut' => 16, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'reference' => 1, 'nom' => 2, 'typeFormulaire' => 3, 'idTypeProcedure' => 4, 'idCategorie' => 5, 'codeCpv1' => 6, 'codeCpv2' => 7, 'organisme' => 8, 'serviceId' => 9, 'dateCreation' => 10, 'dateModification' => 11, 'consultationRef' => 12, 'typeEnveloppe' => 13, 'lot' => 14, 'idModele' => 15, 'statut' => 16, ),
        BasePeer::TYPE_COLNAME => array (CommonConsultationFormulairePeer::ID => 0, CommonConsultationFormulairePeer::REFERENCE => 1, CommonConsultationFormulairePeer::NOM => 2, CommonConsultationFormulairePeer::TYPE_FORMULAIRE => 3, CommonConsultationFormulairePeer::ID_TYPE_PROCEDURE => 4, CommonConsultationFormulairePeer::ID_CATEGORIE => 5, CommonConsultationFormulairePeer::CODE_CPV_1 => 6, CommonConsultationFormulairePeer::CODE_CPV_2 => 7, CommonConsultationFormulairePeer::ORGANISME => 8, CommonConsultationFormulairePeer::SERVICE_ID => 9, CommonConsultationFormulairePeer::DATE_CREATION => 10, CommonConsultationFormulairePeer::DATE_MODIFICATION => 11, CommonConsultationFormulairePeer::CONSULTATION_REF => 12, CommonConsultationFormulairePeer::TYPE_ENVELOPPE => 13, CommonConsultationFormulairePeer::LOT => 14, CommonConsultationFormulairePeer::ID_MODELE => 15, CommonConsultationFormulairePeer::STATUT => 16, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'REFERENCE' => 1, 'NOM' => 2, 'TYPE_FORMULAIRE' => 3, 'ID_TYPE_PROCEDURE' => 4, 'ID_CATEGORIE' => 5, 'CODE_CPV_1' => 6, 'CODE_CPV_2' => 7, 'ORGANISME' => 8, 'SERVICE_ID' => 9, 'DATE_CREATION' => 10, 'DATE_MODIFICATION' => 11, 'CONSULTATION_REF' => 12, 'TYPE_ENVELOPPE' => 13, 'LOT' => 14, 'ID_MODELE' => 15, 'STATUT' => 16, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'reference' => 1, 'nom' => 2, 'type_formulaire' => 3, 'id_type_procedure' => 4, 'id_categorie' => 5, 'code_cpv_1' => 6, 'code_cpv_2' => 7, 'organisme' => 8, 'service_id' => 9, 'date_creation' => 10, 'date_modification' => 11, 'consultation_ref' => 12, 'type_enveloppe' => 13, 'lot' => 14, 'id_modele' => 15, 'statut' => 16, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
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
        $toNames = CommonConsultationFormulairePeer::getFieldNames($toType);
        $key = isset(CommonConsultationFormulairePeer::$fieldKeys[$fromType][$name]) ? CommonConsultationFormulairePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonConsultationFormulairePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonConsultationFormulairePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonConsultationFormulairePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonConsultationFormulairePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonConsultationFormulairePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonConsultationFormulairePeer::ID);
            $criteria->addSelectColumn(CommonConsultationFormulairePeer::REFERENCE);
            $criteria->addSelectColumn(CommonConsultationFormulairePeer::NOM);
            $criteria->addSelectColumn(CommonConsultationFormulairePeer::TYPE_FORMULAIRE);
            $criteria->addSelectColumn(CommonConsultationFormulairePeer::ID_TYPE_PROCEDURE);
            $criteria->addSelectColumn(CommonConsultationFormulairePeer::ID_CATEGORIE);
            $criteria->addSelectColumn(CommonConsultationFormulairePeer::CODE_CPV_1);
            $criteria->addSelectColumn(CommonConsultationFormulairePeer::CODE_CPV_2);
            $criteria->addSelectColumn(CommonConsultationFormulairePeer::ORGANISME);
            $criteria->addSelectColumn(CommonConsultationFormulairePeer::SERVICE_ID);
            $criteria->addSelectColumn(CommonConsultationFormulairePeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonConsultationFormulairePeer::DATE_MODIFICATION);
            $criteria->addSelectColumn(CommonConsultationFormulairePeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonConsultationFormulairePeer::TYPE_ENVELOPPE);
            $criteria->addSelectColumn(CommonConsultationFormulairePeer::LOT);
            $criteria->addSelectColumn(CommonConsultationFormulairePeer::ID_MODELE);
            $criteria->addSelectColumn(CommonConsultationFormulairePeer::STATUT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.reference');
            $criteria->addSelectColumn($alias . '.nom');
            $criteria->addSelectColumn($alias . '.type_formulaire');
            $criteria->addSelectColumn($alias . '.id_type_procedure');
            $criteria->addSelectColumn($alias . '.id_categorie');
            $criteria->addSelectColumn($alias . '.code_cpv_1');
            $criteria->addSelectColumn($alias . '.code_cpv_2');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.service_id');
            $criteria->addSelectColumn($alias . '.date_creation');
            $criteria->addSelectColumn($alias . '.date_modification');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.type_enveloppe');
            $criteria->addSelectColumn($alias . '.lot');
            $criteria->addSelectColumn($alias . '.id_modele');
            $criteria->addSelectColumn($alias . '.statut');
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
        $criteria->setPrimaryTableName(CommonConsultationFormulairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonConsultationFormulairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonConsultationFormulairePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonConsultationFormulaire
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonConsultationFormulairePeer::doSelect($critcopy, $con);
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
        return CommonConsultationFormulairePeer::populateObjects(CommonConsultationFormulairePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonConsultationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonConsultationFormulairePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonConsultationFormulairePeer::DATABASE_NAME);

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
     * @param      CommonConsultationFormulaire $obj A CommonConsultationFormulaire object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonConsultationFormulairePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonConsultationFormulaire object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonConsultationFormulaire) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonConsultationFormulaire object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonConsultationFormulairePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonConsultationFormulaire Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonConsultationFormulairePeer::$instances[$key])) {
                return CommonConsultationFormulairePeer::$instances[$key];
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
        foreach (CommonConsultationFormulairePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonConsultationFormulairePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to ConsultationFormulaire
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in CommonItemFormulaireConsultationPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonItemFormulaireConsultationPeer::clearInstancePool();
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
        $cls = CommonConsultationFormulairePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonConsultationFormulairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonConsultationFormulairePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonConsultationFormulairePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonConsultationFormulaire object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonConsultationFormulairePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonConsultationFormulairePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonConsultationFormulairePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonConsultationFormulairePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonConsultationFormulairePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonConsultationFormulairePeer::DATABASE_NAME)->getTable(CommonConsultationFormulairePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonConsultationFormulairePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonConsultationFormulairePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonConsultationFormulaireTableMap());
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
        return CommonConsultationFormulairePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonConsultationFormulaire or Criteria object.
     *
     * @param      mixed $values Criteria or CommonConsultationFormulaire object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonConsultationFormulaire object
        }

        if ($criteria->containsKey(CommonConsultationFormulairePeer::ID) && $criteria->keyContainsValue(CommonConsultationFormulairePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonConsultationFormulairePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonConsultationFormulairePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonConsultationFormulaire or Criteria object.
     *
     * @param      mixed $values Criteria or CommonConsultationFormulaire object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonConsultationFormulairePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonConsultationFormulairePeer::ID);
            $value = $criteria->remove(CommonConsultationFormulairePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonConsultationFormulairePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonConsultationFormulairePeer::TABLE_NAME);
            }

        } else { // $values is CommonConsultationFormulaire object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonConsultationFormulairePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the ConsultationFormulaire table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += CommonConsultationFormulairePeer::doOnDeleteCascade(new Criteria(CommonConsultationFormulairePeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(CommonConsultationFormulairePeer::TABLE_NAME, $con, CommonConsultationFormulairePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonConsultationFormulairePeer::clearInstancePool();
            CommonConsultationFormulairePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonConsultationFormulaire or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonConsultationFormulaire object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonConsultationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonConsultationFormulaire) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonConsultationFormulairePeer::DATABASE_NAME);
            $criteria->add(CommonConsultationFormulairePeer::ID, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonConsultationFormulairePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += CommonConsultationFormulairePeer::doOnDeleteCascade($c, $con);
            
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                CommonConsultationFormulairePeer::clearInstancePool();
            } elseif ($values instanceof CommonConsultationFormulaire) { // it's a model object
                CommonConsultationFormulairePeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    CommonConsultationFormulairePeer::removeInstanceFromPool($singleval);
                }
            }
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonConsultationFormulairePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
     * feature (like MySQL or SQLite).
     *
     * This method is not very speedy because it must perform a query first to get
     * the implicated records and then perform the deletes by calling those Peer classes.
     *
     * This method should be used within a transaction if possible.
     *
     * @param      Criteria $criteria
     * @param      PropelPDO $con
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
    {
        // initialize var to track total num of affected rows
        $affectedRows = 0;

        // first find the objects that are implicated by the $criteria
        $objects = CommonConsultationFormulairePeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related CommonItemFormulaireConsultation objects
            $criteria = new Criteria(CommonItemFormulaireConsultationPeer::DATABASE_NAME);
            
            $criteria->add(CommonItemFormulaireConsultationPeer::IDFORMULAIRECONSULTATION, $obj->getId());
            $affectedRows += CommonItemFormulaireConsultationPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given CommonConsultationFormulaire object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonConsultationFormulaire $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonConsultationFormulairePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonConsultationFormulairePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonConsultationFormulairePeer::DATABASE_NAME, CommonConsultationFormulairePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonConsultationFormulaire
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonConsultationFormulairePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonConsultationFormulairePeer::DATABASE_NAME);
        $criteria->add(CommonConsultationFormulairePeer::ID, $pk);

        $v = CommonConsultationFormulairePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonConsultationFormulaire[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonConsultationFormulairePeer::DATABASE_NAME);
            $criteria->add(CommonConsultationFormulairePeer::ID, $pks, Criteria::IN);
            $objs = CommonConsultationFormulairePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonConsultationFormulairePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonConsultationFormulairePeer::buildTableMap();

