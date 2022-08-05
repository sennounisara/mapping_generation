<?php


/**
 * Base static class for performing query and update operations on the 'Certificats_Entreprises' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonCertificatsEntreprisesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Certificats_Entreprises';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonCertificatsEntreprises';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonCertificatsEntreprisesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 11;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 11;

    /** the column name for the id field */
    const ID = 'Certificats_Entreprises.id';

    /** the column name for the certificat field */
    const CERTIFICAT = 'Certificats_Entreprises.certificat';

    /** the column name for the date_debut field */
    const DATE_DEBUT = 'Certificats_Entreprises.date_debut';

    /** the column name for the date_fin field */
    const DATE_FIN = 'Certificats_Entreprises.date_fin';

    /** the column name for the id_inscrit field */
    const ID_INSCRIT = 'Certificats_Entreprises.id_inscrit';

    /** the column name for the nom_inscrit field */
    const NOM_INSCRIT = 'Certificats_Entreprises.nom_inscrit';

    /** the column name for the prenom_inscrit field */
    const PRENOM_INSCRIT = 'Certificats_Entreprises.prenom_inscrit';

    /** the column name for the id_entreprise field */
    const ID_ENTREPRISE = 'Certificats_Entreprises.id_entreprise';

    /** the column name for the statut_revoque field */
    const STATUT_REVOQUE = 'Certificats_Entreprises.statut_revoque';

    /** the column name for the date_revoquation field */
    const DATE_REVOQUATION = 'Certificats_Entreprises.date_revoquation';

    /** the column name for the mail_inscrit field */
    const MAIL_INSCRIT = 'Certificats_Entreprises.mail_inscrit';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonCertificatsEntreprises objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonCertificatsEntreprises[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonCertificatsEntreprisesPeer::$fieldNames[CommonCertificatsEntreprisesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Certificat', 'DateDebut', 'DateFin', 'IdInscrit', 'NomInscrit', 'PrenomInscrit', 'IdEntreprise', 'StatutRevoque', 'DateRevoquation', 'MailInscrit', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'certificat', 'dateDebut', 'dateFin', 'idInscrit', 'nomInscrit', 'prenomInscrit', 'idEntreprise', 'statutRevoque', 'dateRevoquation', 'mailInscrit', ),
        BasePeer::TYPE_COLNAME => array (CommonCertificatsEntreprisesPeer::ID, CommonCertificatsEntreprisesPeer::CERTIFICAT, CommonCertificatsEntreprisesPeer::DATE_DEBUT, CommonCertificatsEntreprisesPeer::DATE_FIN, CommonCertificatsEntreprisesPeer::ID_INSCRIT, CommonCertificatsEntreprisesPeer::NOM_INSCRIT, CommonCertificatsEntreprisesPeer::PRENOM_INSCRIT, CommonCertificatsEntreprisesPeer::ID_ENTREPRISE, CommonCertificatsEntreprisesPeer::STATUT_REVOQUE, CommonCertificatsEntreprisesPeer::DATE_REVOQUATION, CommonCertificatsEntreprisesPeer::MAIL_INSCRIT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'CERTIFICAT', 'DATE_DEBUT', 'DATE_FIN', 'ID_INSCRIT', 'NOM_INSCRIT', 'PRENOM_INSCRIT', 'ID_ENTREPRISE', 'STATUT_REVOQUE', 'DATE_REVOQUATION', 'MAIL_INSCRIT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'certificat', 'date_debut', 'date_fin', 'id_inscrit', 'nom_inscrit', 'prenom_inscrit', 'id_entreprise', 'statut_revoque', 'date_revoquation', 'mail_inscrit', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonCertificatsEntreprisesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Certificat' => 1, 'DateDebut' => 2, 'DateFin' => 3, 'IdInscrit' => 4, 'NomInscrit' => 5, 'PrenomInscrit' => 6, 'IdEntreprise' => 7, 'StatutRevoque' => 8, 'DateRevoquation' => 9, 'MailInscrit' => 10, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'certificat' => 1, 'dateDebut' => 2, 'dateFin' => 3, 'idInscrit' => 4, 'nomInscrit' => 5, 'prenomInscrit' => 6, 'idEntreprise' => 7, 'statutRevoque' => 8, 'dateRevoquation' => 9, 'mailInscrit' => 10, ),
        BasePeer::TYPE_COLNAME => array (CommonCertificatsEntreprisesPeer::ID => 0, CommonCertificatsEntreprisesPeer::CERTIFICAT => 1, CommonCertificatsEntreprisesPeer::DATE_DEBUT => 2, CommonCertificatsEntreprisesPeer::DATE_FIN => 3, CommonCertificatsEntreprisesPeer::ID_INSCRIT => 4, CommonCertificatsEntreprisesPeer::NOM_INSCRIT => 5, CommonCertificatsEntreprisesPeer::PRENOM_INSCRIT => 6, CommonCertificatsEntreprisesPeer::ID_ENTREPRISE => 7, CommonCertificatsEntreprisesPeer::STATUT_REVOQUE => 8, CommonCertificatsEntreprisesPeer::DATE_REVOQUATION => 9, CommonCertificatsEntreprisesPeer::MAIL_INSCRIT => 10, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'CERTIFICAT' => 1, 'DATE_DEBUT' => 2, 'DATE_FIN' => 3, 'ID_INSCRIT' => 4, 'NOM_INSCRIT' => 5, 'PRENOM_INSCRIT' => 6, 'ID_ENTREPRISE' => 7, 'STATUT_REVOQUE' => 8, 'DATE_REVOQUATION' => 9, 'MAIL_INSCRIT' => 10, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'certificat' => 1, 'date_debut' => 2, 'date_fin' => 3, 'id_inscrit' => 4, 'nom_inscrit' => 5, 'prenom_inscrit' => 6, 'id_entreprise' => 7, 'statut_revoque' => 8, 'date_revoquation' => 9, 'mail_inscrit' => 10, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
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
        $toNames = CommonCertificatsEntreprisesPeer::getFieldNames($toType);
        $key = isset(CommonCertificatsEntreprisesPeer::$fieldKeys[$fromType][$name]) ? CommonCertificatsEntreprisesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonCertificatsEntreprisesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonCertificatsEntreprisesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonCertificatsEntreprisesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonCertificatsEntreprisesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonCertificatsEntreprisesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonCertificatsEntreprisesPeer::ID);
            $criteria->addSelectColumn(CommonCertificatsEntreprisesPeer::CERTIFICAT);
            $criteria->addSelectColumn(CommonCertificatsEntreprisesPeer::DATE_DEBUT);
            $criteria->addSelectColumn(CommonCertificatsEntreprisesPeer::DATE_FIN);
            $criteria->addSelectColumn(CommonCertificatsEntreprisesPeer::ID_INSCRIT);
            $criteria->addSelectColumn(CommonCertificatsEntreprisesPeer::NOM_INSCRIT);
            $criteria->addSelectColumn(CommonCertificatsEntreprisesPeer::PRENOM_INSCRIT);
            $criteria->addSelectColumn(CommonCertificatsEntreprisesPeer::ID_ENTREPRISE);
            $criteria->addSelectColumn(CommonCertificatsEntreprisesPeer::STATUT_REVOQUE);
            $criteria->addSelectColumn(CommonCertificatsEntreprisesPeer::DATE_REVOQUATION);
            $criteria->addSelectColumn(CommonCertificatsEntreprisesPeer::MAIL_INSCRIT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.certificat');
            $criteria->addSelectColumn($alias . '.date_debut');
            $criteria->addSelectColumn($alias . '.date_fin');
            $criteria->addSelectColumn($alias . '.id_inscrit');
            $criteria->addSelectColumn($alias . '.nom_inscrit');
            $criteria->addSelectColumn($alias . '.prenom_inscrit');
            $criteria->addSelectColumn($alias . '.id_entreprise');
            $criteria->addSelectColumn($alias . '.statut_revoque');
            $criteria->addSelectColumn($alias . '.date_revoquation');
            $criteria->addSelectColumn($alias . '.mail_inscrit');
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
        $criteria->setPrimaryTableName(CommonCertificatsEntreprisesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCertificatsEntreprisesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonCertificatsEntreprisesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatsEntreprisesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCertificatsEntreprises
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonCertificatsEntreprisesPeer::doSelect($critcopy, $con);
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
        return CommonCertificatsEntreprisesPeer::populateObjects(CommonCertificatsEntreprisesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonCertificatsEntreprisesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonCertificatsEntreprisesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonCertificatsEntreprisesPeer::DATABASE_NAME);

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
     * @param      CommonCertificatsEntreprises $obj A CommonCertificatsEntreprises object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonCertificatsEntreprisesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonCertificatsEntreprises object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonCertificatsEntreprises) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonCertificatsEntreprises object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonCertificatsEntreprisesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonCertificatsEntreprises Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonCertificatsEntreprisesPeer::$instances[$key])) {
                return CommonCertificatsEntreprisesPeer::$instances[$key];
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
        foreach (CommonCertificatsEntreprisesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonCertificatsEntreprisesPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Certificats_Entreprises
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
        $cls = CommonCertificatsEntreprisesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonCertificatsEntreprisesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonCertificatsEntreprisesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonCertificatsEntreprisesPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonCertificatsEntreprises object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonCertificatsEntreprisesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonCertificatsEntreprisesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonCertificatsEntreprisesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonCertificatsEntreprisesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonCertificatsEntreprisesPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonInscrit table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonInscrit(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonCertificatsEntreprisesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCertificatsEntreprisesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonCertificatsEntreprisesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatsEntreprisesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonCertificatsEntreprisesPeer::ID_INSCRIT, CommonInscritPeer::ID, $join_behavior);

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
     * Selects a collection of CommonCertificatsEntreprises objects pre-filled with their CommonInscrit objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonCertificatsEntreprises objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonInscrit(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonCertificatsEntreprisesPeer::DATABASE_NAME);
        }

        CommonCertificatsEntreprisesPeer::addSelectColumns($criteria);
        $startcol = CommonCertificatsEntreprisesPeer::NUM_HYDRATE_COLUMNS;
        CommonInscritPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonCertificatsEntreprisesPeer::ID_INSCRIT, CommonInscritPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonCertificatsEntreprisesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonCertificatsEntreprisesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonCertificatsEntreprisesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonCertificatsEntreprisesPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonInscritPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonInscritPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonInscritPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonInscritPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonCertificatsEntreprises) to $obj2 (CommonInscrit)
                $obj2->addCommonCertificatsEntreprises($obj1);

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
        $criteria->setPrimaryTableName(CommonCertificatsEntreprisesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCertificatsEntreprisesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonCertificatsEntreprisesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatsEntreprisesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonCertificatsEntreprisesPeer::ID_INSCRIT, CommonInscritPeer::ID, $join_behavior);

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
     * Selects a collection of CommonCertificatsEntreprises objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonCertificatsEntreprises objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonCertificatsEntreprisesPeer::DATABASE_NAME);
        }

        CommonCertificatsEntreprisesPeer::addSelectColumns($criteria);
        $startcol2 = CommonCertificatsEntreprisesPeer::NUM_HYDRATE_COLUMNS;

        CommonInscritPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonInscritPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonCertificatsEntreprisesPeer::ID_INSCRIT, CommonInscritPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonCertificatsEntreprisesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonCertificatsEntreprisesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonCertificatsEntreprisesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonCertificatsEntreprisesPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonInscrit rows

            $key2 = CommonInscritPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonInscritPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonInscritPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonInscritPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonCertificatsEntreprises) to the collection in $obj2 (CommonInscrit)
                $obj2->addCommonCertificatsEntreprises($obj1);
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
        return Propel::getDatabaseMap(CommonCertificatsEntreprisesPeer::DATABASE_NAME)->getTable(CommonCertificatsEntreprisesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonCertificatsEntreprisesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonCertificatsEntreprisesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonCertificatsEntreprisesTableMap());
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
        return CommonCertificatsEntreprisesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonCertificatsEntreprises or Criteria object.
     *
     * @param      mixed $values Criteria or CommonCertificatsEntreprises object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatsEntreprisesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonCertificatsEntreprises object
        }

        if ($criteria->containsKey(CommonCertificatsEntreprisesPeer::ID) && $criteria->keyContainsValue(CommonCertificatsEntreprisesPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonCertificatsEntreprisesPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonCertificatsEntreprisesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonCertificatsEntreprises or Criteria object.
     *
     * @param      mixed $values Criteria or CommonCertificatsEntreprises object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatsEntreprisesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonCertificatsEntreprisesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonCertificatsEntreprisesPeer::ID);
            $value = $criteria->remove(CommonCertificatsEntreprisesPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonCertificatsEntreprisesPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonCertificatsEntreprisesPeer::TABLE_NAME);
            }

        } else { // $values is CommonCertificatsEntreprises object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonCertificatsEntreprisesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Certificats_Entreprises table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatsEntreprisesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonCertificatsEntreprisesPeer::TABLE_NAME, $con, CommonCertificatsEntreprisesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonCertificatsEntreprisesPeer::clearInstancePool();
            CommonCertificatsEntreprisesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonCertificatsEntreprises or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonCertificatsEntreprises object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonCertificatsEntreprisesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonCertificatsEntreprisesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonCertificatsEntreprises) { // it's a model object
            // invalidate the cache for this single object
            CommonCertificatsEntreprisesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonCertificatsEntreprisesPeer::DATABASE_NAME);
            $criteria->add(CommonCertificatsEntreprisesPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonCertificatsEntreprisesPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonCertificatsEntreprisesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonCertificatsEntreprisesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonCertificatsEntreprises object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonCertificatsEntreprises $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonCertificatsEntreprisesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonCertificatsEntreprisesPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonCertificatsEntreprisesPeer::DATABASE_NAME, CommonCertificatsEntreprisesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonCertificatsEntreprises
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonCertificatsEntreprisesPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatsEntreprisesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonCertificatsEntreprisesPeer::DATABASE_NAME);
        $criteria->add(CommonCertificatsEntreprisesPeer::ID, $pk);

        $v = CommonCertificatsEntreprisesPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonCertificatsEntreprises[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatsEntreprisesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonCertificatsEntreprisesPeer::DATABASE_NAME);
            $criteria->add(CommonCertificatsEntreprisesPeer::ID, $pks, Criteria::IN);
            $objs = CommonCertificatsEntreprisesPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonCertificatsEntreprisesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonCertificatsEntreprisesPeer::buildTableMap();

