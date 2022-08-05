<?php


/**
 * Base static class for performing query and update operations on the 'consultation_document_cfe' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonConsultationDocumentCfePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'consultation_document_cfe';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonConsultationDocumentCfe';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonConsultationDocumentCfeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the id field */
    const ID = 'consultation_document_cfe.id';

    /** the column name for the id_justificatif field */
    const ID_JUSTIFICATIF = 'consultation_document_cfe.id_justificatif';

    /** the column name for the ref_consultation field */
    const REF_CONSULTATION = 'consultation_document_cfe.ref_consultation';

    /** the column name for the organisme_consultation field */
    const ORGANISME_CONSULTATION = 'consultation_document_cfe.organisme_consultation';

    /** the column name for the nom_fichier field */
    const NOM_FICHIER = 'consultation_document_cfe.nom_fichier';

    /** the column name for the id_entreprise field */
    const ID_ENTREPRISE = 'consultation_document_cfe.id_entreprise';

    /** the column name for the taille_document field */
    const TAILLE_DOCUMENT = 'consultation_document_cfe.taille_document';

    /** the column name for the id_blob field */
    const ID_BLOB = 'consultation_document_cfe.id_blob';

    /** the column name for the type_document field */
    const TYPE_DOCUMENT = 'consultation_document_cfe.type_document';

    /** the column name for the date_fin_validite field */
    const DATE_FIN_VALIDITE = 'consultation_document_cfe.date_fin_validite';

    /** the column name for the horodatage field */
    const HORODATAGE = 'consultation_document_cfe.horodatage';

    /** the column name for the untrusteddate field */
    const UNTRUSTEDDATE = 'consultation_document_cfe.untrusteddate';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonConsultationDocumentCfe objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonConsultationDocumentCfe[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonConsultationDocumentCfePeer::$fieldNames[CommonConsultationDocumentCfePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdJustificatif', 'RefConsultation', 'OrganismeConsultation', 'NomFichier', 'IdEntreprise', 'TailleDocument', 'IdBlob', 'TypeDocument', 'DateFinValidite', 'Horodatage', 'Untrusteddate', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idJustificatif', 'refConsultation', 'organismeConsultation', 'nomFichier', 'idEntreprise', 'tailleDocument', 'idBlob', 'typeDocument', 'dateFinValidite', 'horodatage', 'untrusteddate', ),
        BasePeer::TYPE_COLNAME => array (CommonConsultationDocumentCfePeer::ID, CommonConsultationDocumentCfePeer::ID_JUSTIFICATIF, CommonConsultationDocumentCfePeer::REF_CONSULTATION, CommonConsultationDocumentCfePeer::ORGANISME_CONSULTATION, CommonConsultationDocumentCfePeer::NOM_FICHIER, CommonConsultationDocumentCfePeer::ID_ENTREPRISE, CommonConsultationDocumentCfePeer::TAILLE_DOCUMENT, CommonConsultationDocumentCfePeer::ID_BLOB, CommonConsultationDocumentCfePeer::TYPE_DOCUMENT, CommonConsultationDocumentCfePeer::DATE_FIN_VALIDITE, CommonConsultationDocumentCfePeer::HORODATAGE, CommonConsultationDocumentCfePeer::UNTRUSTEDDATE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_JUSTIFICATIF', 'REF_CONSULTATION', 'ORGANISME_CONSULTATION', 'NOM_FICHIER', 'ID_ENTREPRISE', 'TAILLE_DOCUMENT', 'ID_BLOB', 'TYPE_DOCUMENT', 'DATE_FIN_VALIDITE', 'HORODATAGE', 'UNTRUSTEDDATE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'id_justificatif', 'ref_consultation', 'organisme_consultation', 'nom_fichier', 'id_entreprise', 'taille_document', 'id_blob', 'type_document', 'date_fin_validite', 'horodatage', 'untrusteddate', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonConsultationDocumentCfePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdJustificatif' => 1, 'RefConsultation' => 2, 'OrganismeConsultation' => 3, 'NomFichier' => 4, 'IdEntreprise' => 5, 'TailleDocument' => 6, 'IdBlob' => 7, 'TypeDocument' => 8, 'DateFinValidite' => 9, 'Horodatage' => 10, 'Untrusteddate' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idJustificatif' => 1, 'refConsultation' => 2, 'organismeConsultation' => 3, 'nomFichier' => 4, 'idEntreprise' => 5, 'tailleDocument' => 6, 'idBlob' => 7, 'typeDocument' => 8, 'dateFinValidite' => 9, 'horodatage' => 10, 'untrusteddate' => 11, ),
        BasePeer::TYPE_COLNAME => array (CommonConsultationDocumentCfePeer::ID => 0, CommonConsultationDocumentCfePeer::ID_JUSTIFICATIF => 1, CommonConsultationDocumentCfePeer::REF_CONSULTATION => 2, CommonConsultationDocumentCfePeer::ORGANISME_CONSULTATION => 3, CommonConsultationDocumentCfePeer::NOM_FICHIER => 4, CommonConsultationDocumentCfePeer::ID_ENTREPRISE => 5, CommonConsultationDocumentCfePeer::TAILLE_DOCUMENT => 6, CommonConsultationDocumentCfePeer::ID_BLOB => 7, CommonConsultationDocumentCfePeer::TYPE_DOCUMENT => 8, CommonConsultationDocumentCfePeer::DATE_FIN_VALIDITE => 9, CommonConsultationDocumentCfePeer::HORODATAGE => 10, CommonConsultationDocumentCfePeer::UNTRUSTEDDATE => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_JUSTIFICATIF' => 1, 'REF_CONSULTATION' => 2, 'ORGANISME_CONSULTATION' => 3, 'NOM_FICHIER' => 4, 'ID_ENTREPRISE' => 5, 'TAILLE_DOCUMENT' => 6, 'ID_BLOB' => 7, 'TYPE_DOCUMENT' => 8, 'DATE_FIN_VALIDITE' => 9, 'HORODATAGE' => 10, 'UNTRUSTEDDATE' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_justificatif' => 1, 'ref_consultation' => 2, 'organisme_consultation' => 3, 'nom_fichier' => 4, 'id_entreprise' => 5, 'taille_document' => 6, 'id_blob' => 7, 'type_document' => 8, 'date_fin_validite' => 9, 'horodatage' => 10, 'untrusteddate' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
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
        $toNames = CommonConsultationDocumentCfePeer::getFieldNames($toType);
        $key = isset(CommonConsultationDocumentCfePeer::$fieldKeys[$fromType][$name]) ? CommonConsultationDocumentCfePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonConsultationDocumentCfePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonConsultationDocumentCfePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonConsultationDocumentCfePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonConsultationDocumentCfePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonConsultationDocumentCfePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonConsultationDocumentCfePeer::ID);
            $criteria->addSelectColumn(CommonConsultationDocumentCfePeer::ID_JUSTIFICATIF);
            $criteria->addSelectColumn(CommonConsultationDocumentCfePeer::REF_CONSULTATION);
            $criteria->addSelectColumn(CommonConsultationDocumentCfePeer::ORGANISME_CONSULTATION);
            $criteria->addSelectColumn(CommonConsultationDocumentCfePeer::NOM_FICHIER);
            $criteria->addSelectColumn(CommonConsultationDocumentCfePeer::ID_ENTREPRISE);
            $criteria->addSelectColumn(CommonConsultationDocumentCfePeer::TAILLE_DOCUMENT);
            $criteria->addSelectColumn(CommonConsultationDocumentCfePeer::ID_BLOB);
            $criteria->addSelectColumn(CommonConsultationDocumentCfePeer::TYPE_DOCUMENT);
            $criteria->addSelectColumn(CommonConsultationDocumentCfePeer::DATE_FIN_VALIDITE);
            $criteria->addSelectColumn(CommonConsultationDocumentCfePeer::HORODATAGE);
            $criteria->addSelectColumn(CommonConsultationDocumentCfePeer::UNTRUSTEDDATE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.id_justificatif');
            $criteria->addSelectColumn($alias . '.ref_consultation');
            $criteria->addSelectColumn($alias . '.organisme_consultation');
            $criteria->addSelectColumn($alias . '.nom_fichier');
            $criteria->addSelectColumn($alias . '.id_entreprise');
            $criteria->addSelectColumn($alias . '.taille_document');
            $criteria->addSelectColumn($alias . '.id_blob');
            $criteria->addSelectColumn($alias . '.type_document');
            $criteria->addSelectColumn($alias . '.date_fin_validite');
            $criteria->addSelectColumn($alias . '.horodatage');
            $criteria->addSelectColumn($alias . '.untrusteddate');
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
        $criteria->setPrimaryTableName(CommonConsultationDocumentCfePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonConsultationDocumentCfePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonConsultationDocumentCfePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationDocumentCfePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonConsultationDocumentCfe
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonConsultationDocumentCfePeer::doSelect($critcopy, $con);
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
        return CommonConsultationDocumentCfePeer::populateObjects(CommonConsultationDocumentCfePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonConsultationDocumentCfePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonConsultationDocumentCfePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonConsultationDocumentCfePeer::DATABASE_NAME);

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
     * @param      CommonConsultationDocumentCfe $obj A CommonConsultationDocumentCfe object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonConsultationDocumentCfePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonConsultationDocumentCfe object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonConsultationDocumentCfe) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonConsultationDocumentCfe object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonConsultationDocumentCfePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonConsultationDocumentCfe Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonConsultationDocumentCfePeer::$instances[$key])) {
                return CommonConsultationDocumentCfePeer::$instances[$key];
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
        foreach (CommonConsultationDocumentCfePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonConsultationDocumentCfePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to consultation_document_cfe
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
        $cls = CommonConsultationDocumentCfePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonConsultationDocumentCfePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonConsultationDocumentCfePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonConsultationDocumentCfePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonConsultationDocumentCfe object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonConsultationDocumentCfePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonConsultationDocumentCfePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonConsultationDocumentCfePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonConsultationDocumentCfePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonConsultationDocumentCfePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonConsultation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonConsultation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonConsultationDocumentCfePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonConsultationDocumentCfePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonConsultationDocumentCfePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationDocumentCfePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonConsultationDocumentCfePeer::REF_CONSULTATION, CommonConsultationPeer::REFERENCE, $join_behavior);

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
     * Selects a collection of CommonConsultationDocumentCfe objects pre-filled with their CommonConsultation objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonConsultationDocumentCfe objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonConsultation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonConsultationDocumentCfePeer::DATABASE_NAME);
        }

        CommonConsultationDocumentCfePeer::addSelectColumns($criteria);
        $startcol = CommonConsultationDocumentCfePeer::NUM_HYDRATE_COLUMNS;
        CommonConsultationPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonConsultationDocumentCfePeer::REF_CONSULTATION, CommonConsultationPeer::REFERENCE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonConsultationDocumentCfePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonConsultationDocumentCfePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonConsultationDocumentCfePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonConsultationDocumentCfePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonConsultationDocumentCfe) to $obj2 (CommonConsultation)
                $obj2->addCommonConsultationDocumentCfe($obj1);

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
        $criteria->setPrimaryTableName(CommonConsultationDocumentCfePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonConsultationDocumentCfePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonConsultationDocumentCfePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationDocumentCfePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonConsultationDocumentCfePeer::REF_CONSULTATION, CommonConsultationPeer::REFERENCE, $join_behavior);

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
     * Selects a collection of CommonConsultationDocumentCfe objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonConsultationDocumentCfe objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonConsultationDocumentCfePeer::DATABASE_NAME);
        }

        CommonConsultationDocumentCfePeer::addSelectColumns($criteria);
        $startcol2 = CommonConsultationDocumentCfePeer::NUM_HYDRATE_COLUMNS;

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonConsultationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonConsultationDocumentCfePeer::REF_CONSULTATION, CommonConsultationPeer::REFERENCE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonConsultationDocumentCfePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonConsultationDocumentCfePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonConsultationDocumentCfePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonConsultationDocumentCfePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonConsultationDocumentCfe) to the collection in $obj2 (CommonConsultation)
                $obj2->addCommonConsultationDocumentCfe($obj1);
            } // if joined row not null

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
        return Propel::getDatabaseMap(CommonConsultationDocumentCfePeer::DATABASE_NAME)->getTable(CommonConsultationDocumentCfePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonConsultationDocumentCfePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonConsultationDocumentCfePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonConsultationDocumentCfeTableMap());
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
        return CommonConsultationDocumentCfePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonConsultationDocumentCfe or Criteria object.
     *
     * @param      mixed $values Criteria or CommonConsultationDocumentCfe object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationDocumentCfePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonConsultationDocumentCfe object
        }

        if ($criteria->containsKey(CommonConsultationDocumentCfePeer::ID) && $criteria->keyContainsValue(CommonConsultationDocumentCfePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonConsultationDocumentCfePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonConsultationDocumentCfePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonConsultationDocumentCfe or Criteria object.
     *
     * @param      mixed $values Criteria or CommonConsultationDocumentCfe object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationDocumentCfePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonConsultationDocumentCfePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonConsultationDocumentCfePeer::ID);
            $value = $criteria->remove(CommonConsultationDocumentCfePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonConsultationDocumentCfePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonConsultationDocumentCfePeer::TABLE_NAME);
            }

        } else { // $values is CommonConsultationDocumentCfe object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonConsultationDocumentCfePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the consultation_document_cfe table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationDocumentCfePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonConsultationDocumentCfePeer::TABLE_NAME, $con, CommonConsultationDocumentCfePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonConsultationDocumentCfePeer::clearInstancePool();
            CommonConsultationDocumentCfePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonConsultationDocumentCfe or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonConsultationDocumentCfe object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonConsultationDocumentCfePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonConsultationDocumentCfePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonConsultationDocumentCfe) { // it's a model object
            // invalidate the cache for this single object
            CommonConsultationDocumentCfePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonConsultationDocumentCfePeer::DATABASE_NAME);
            $criteria->add(CommonConsultationDocumentCfePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonConsultationDocumentCfePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonConsultationDocumentCfePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonConsultationDocumentCfePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonConsultationDocumentCfe object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonConsultationDocumentCfe $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonConsultationDocumentCfePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonConsultationDocumentCfePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonConsultationDocumentCfePeer::DATABASE_NAME, CommonConsultationDocumentCfePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonConsultationDocumentCfe
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonConsultationDocumentCfePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationDocumentCfePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonConsultationDocumentCfePeer::DATABASE_NAME);
        $criteria->add(CommonConsultationDocumentCfePeer::ID, $pk);

        $v = CommonConsultationDocumentCfePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonConsultationDocumentCfe[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationDocumentCfePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonConsultationDocumentCfePeer::DATABASE_NAME);
            $criteria->add(CommonConsultationDocumentCfePeer::ID, $pks, Criteria::IN);
            $objs = CommonConsultationDocumentCfePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonConsultationDocumentCfePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonConsultationDocumentCfePeer::buildTableMap();

