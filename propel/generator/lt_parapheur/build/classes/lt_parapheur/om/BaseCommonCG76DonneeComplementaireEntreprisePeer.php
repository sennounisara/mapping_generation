<?php


/**
 * Base static class for performing query and update operations on the 'CG76_Donnee_Complementaire_entreprise' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCG76DonneeComplementaireEntreprisePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'CG76_Donnee_Complementaire_entreprise';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonCG76DonneeComplementaireEntreprise';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonCG76DonneeComplementaireEntrepriseTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the Ref field */
    const REF = 'CG76_Donnee_Complementaire_entreprise.Ref';

    /** the column name for the idInscrit field */
    const IDINSCRIT = 'CG76_Donnee_Complementaire_entreprise.idInscrit';

    /** the column name for the IdEntreprise field */
    const IDENTREPRISE = 'CG76_Donnee_Complementaire_entreprise.IdEntreprise';

    /** the column name for the type_formation field */
    const TYPE_FORMATION = 'CG76_Donnee_Complementaire_entreprise.type_formation';

    /** the column name for the email field */
    const EMAIL = 'CG76_Donnee_Complementaire_entreprise.email';

    /** the column name for the cout_moyen_journee field */
    const COUT_MOYEN_JOURNEE = 'CG76_Donnee_Complementaire_entreprise.cout_moyen_journee';

    /** the column name for the collaboration_fpt field */
    const COLLABORATION_FPT = 'CG76_Donnee_Complementaire_entreprise.collaboration_fpt';

    /** the column name for the collaboration_fpe field */
    const COLLABORATION_FPE = 'CG76_Donnee_Complementaire_entreprise.collaboration_fpe';

    /** the column name for the centre_documentation field */
    const CENTRE_DOCUMENTATION = 'CG76_Donnee_Complementaire_entreprise.centre_documentation';

    /** the column name for the service_reprographie field */
    const SERVICE_REPROGRAPHIE = 'CG76_Donnee_Complementaire_entreprise.service_reprographie';

    /** the column name for the salle_info field */
    const SALLE_INFO = 'CG76_Donnee_Complementaire_entreprise.salle_info';

    /** the column name for the salle_cours field */
    const SALLE_COURS = 'CG76_Donnee_Complementaire_entreprise.salle_cours';

    /** the column name for the aire_geo_inter field */
    const AIRE_GEO_INTER = 'CG76_Donnee_Complementaire_entreprise.aire_geo_inter';

    /** the column name for the commentaire field */
    const COMMENTAIRE = 'CG76_Donnee_Complementaire_entreprise.commentaire';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonCG76DonneeComplementaireEntreprise objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonCG76DonneeComplementaireEntreprise[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonCG76DonneeComplementaireEntreprisePeer::$fieldNames[CommonCG76DonneeComplementaireEntreprisePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Ref', 'Idinscrit', 'Identreprise', 'TypeFormation', 'Email', 'CoutMoyenJournee', 'CollaborationFpt', 'CollaborationFpe', 'CentreDocumentation', 'ServiceReprographie', 'SalleInfo', 'SalleCours', 'AireGeoInter', 'Commentaire', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('ref', 'idinscrit', 'identreprise', 'typeFormation', 'email', 'coutMoyenJournee', 'collaborationFpt', 'collaborationFpe', 'centreDocumentation', 'serviceReprographie', 'salleInfo', 'salleCours', 'aireGeoInter', 'commentaire', ),
        BasePeer::TYPE_COLNAME => array (CommonCG76DonneeComplementaireEntreprisePeer::REF, CommonCG76DonneeComplementaireEntreprisePeer::IDINSCRIT, CommonCG76DonneeComplementaireEntreprisePeer::IDENTREPRISE, CommonCG76DonneeComplementaireEntreprisePeer::TYPE_FORMATION, CommonCG76DonneeComplementaireEntreprisePeer::EMAIL, CommonCG76DonneeComplementaireEntreprisePeer::COUT_MOYEN_JOURNEE, CommonCG76DonneeComplementaireEntreprisePeer::COLLABORATION_FPT, CommonCG76DonneeComplementaireEntreprisePeer::COLLABORATION_FPE, CommonCG76DonneeComplementaireEntreprisePeer::CENTRE_DOCUMENTATION, CommonCG76DonneeComplementaireEntreprisePeer::SERVICE_REPROGRAPHIE, CommonCG76DonneeComplementaireEntreprisePeer::SALLE_INFO, CommonCG76DonneeComplementaireEntreprisePeer::SALLE_COURS, CommonCG76DonneeComplementaireEntreprisePeer::AIRE_GEO_INTER, CommonCG76DonneeComplementaireEntreprisePeer::COMMENTAIRE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('REF', 'IDINSCRIT', 'IDENTREPRISE', 'TYPE_FORMATION', 'EMAIL', 'COUT_MOYEN_JOURNEE', 'COLLABORATION_FPT', 'COLLABORATION_FPE', 'CENTRE_DOCUMENTATION', 'SERVICE_REPROGRAPHIE', 'SALLE_INFO', 'SALLE_COURS', 'AIRE_GEO_INTER', 'COMMENTAIRE', ),
        BasePeer::TYPE_FIELDNAME => array ('Ref', 'idInscrit', 'IdEntreprise', 'type_formation', 'email', 'cout_moyen_journee', 'collaboration_fpt', 'collaboration_fpe', 'centre_documentation', 'service_reprographie', 'salle_info', 'salle_cours', 'aire_geo_inter', 'commentaire', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonCG76DonneeComplementaireEntreprisePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Ref' => 0, 'Idinscrit' => 1, 'Identreprise' => 2, 'TypeFormation' => 3, 'Email' => 4, 'CoutMoyenJournee' => 5, 'CollaborationFpt' => 6, 'CollaborationFpe' => 7, 'CentreDocumentation' => 8, 'ServiceReprographie' => 9, 'SalleInfo' => 10, 'SalleCours' => 11, 'AireGeoInter' => 12, 'Commentaire' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('ref' => 0, 'idinscrit' => 1, 'identreprise' => 2, 'typeFormation' => 3, 'email' => 4, 'coutMoyenJournee' => 5, 'collaborationFpt' => 6, 'collaborationFpe' => 7, 'centreDocumentation' => 8, 'serviceReprographie' => 9, 'salleInfo' => 10, 'salleCours' => 11, 'aireGeoInter' => 12, 'commentaire' => 13, ),
        BasePeer::TYPE_COLNAME => array (CommonCG76DonneeComplementaireEntreprisePeer::REF => 0, CommonCG76DonneeComplementaireEntreprisePeer::IDINSCRIT => 1, CommonCG76DonneeComplementaireEntreprisePeer::IDENTREPRISE => 2, CommonCG76DonneeComplementaireEntreprisePeer::TYPE_FORMATION => 3, CommonCG76DonneeComplementaireEntreprisePeer::EMAIL => 4, CommonCG76DonneeComplementaireEntreprisePeer::COUT_MOYEN_JOURNEE => 5, CommonCG76DonneeComplementaireEntreprisePeer::COLLABORATION_FPT => 6, CommonCG76DonneeComplementaireEntreprisePeer::COLLABORATION_FPE => 7, CommonCG76DonneeComplementaireEntreprisePeer::CENTRE_DOCUMENTATION => 8, CommonCG76DonneeComplementaireEntreprisePeer::SERVICE_REPROGRAPHIE => 9, CommonCG76DonneeComplementaireEntreprisePeer::SALLE_INFO => 10, CommonCG76DonneeComplementaireEntreprisePeer::SALLE_COURS => 11, CommonCG76DonneeComplementaireEntreprisePeer::AIRE_GEO_INTER => 12, CommonCG76DonneeComplementaireEntreprisePeer::COMMENTAIRE => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('REF' => 0, 'IDINSCRIT' => 1, 'IDENTREPRISE' => 2, 'TYPE_FORMATION' => 3, 'EMAIL' => 4, 'COUT_MOYEN_JOURNEE' => 5, 'COLLABORATION_FPT' => 6, 'COLLABORATION_FPE' => 7, 'CENTRE_DOCUMENTATION' => 8, 'SERVICE_REPROGRAPHIE' => 9, 'SALLE_INFO' => 10, 'SALLE_COURS' => 11, 'AIRE_GEO_INTER' => 12, 'COMMENTAIRE' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('Ref' => 0, 'idInscrit' => 1, 'IdEntreprise' => 2, 'type_formation' => 3, 'email' => 4, 'cout_moyen_journee' => 5, 'collaboration_fpt' => 6, 'collaboration_fpe' => 7, 'centre_documentation' => 8, 'service_reprographie' => 9, 'salle_info' => 10, 'salle_cours' => 11, 'aire_geo_inter' => 12, 'commentaire' => 13, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
        $toNames = CommonCG76DonneeComplementaireEntreprisePeer::getFieldNames($toType);
        $key = isset(CommonCG76DonneeComplementaireEntreprisePeer::$fieldKeys[$fromType][$name]) ? CommonCG76DonneeComplementaireEntreprisePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonCG76DonneeComplementaireEntreprisePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonCG76DonneeComplementaireEntreprisePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonCG76DonneeComplementaireEntreprisePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonCG76DonneeComplementaireEntreprisePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonCG76DonneeComplementaireEntreprisePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonCG76DonneeComplementaireEntreprisePeer::REF);
            $criteria->addSelectColumn(CommonCG76DonneeComplementaireEntreprisePeer::IDINSCRIT);
            $criteria->addSelectColumn(CommonCG76DonneeComplementaireEntreprisePeer::IDENTREPRISE);
            $criteria->addSelectColumn(CommonCG76DonneeComplementaireEntreprisePeer::TYPE_FORMATION);
            $criteria->addSelectColumn(CommonCG76DonneeComplementaireEntreprisePeer::EMAIL);
            $criteria->addSelectColumn(CommonCG76DonneeComplementaireEntreprisePeer::COUT_MOYEN_JOURNEE);
            $criteria->addSelectColumn(CommonCG76DonneeComplementaireEntreprisePeer::COLLABORATION_FPT);
            $criteria->addSelectColumn(CommonCG76DonneeComplementaireEntreprisePeer::COLLABORATION_FPE);
            $criteria->addSelectColumn(CommonCG76DonneeComplementaireEntreprisePeer::CENTRE_DOCUMENTATION);
            $criteria->addSelectColumn(CommonCG76DonneeComplementaireEntreprisePeer::SERVICE_REPROGRAPHIE);
            $criteria->addSelectColumn(CommonCG76DonneeComplementaireEntreprisePeer::SALLE_INFO);
            $criteria->addSelectColumn(CommonCG76DonneeComplementaireEntreprisePeer::SALLE_COURS);
            $criteria->addSelectColumn(CommonCG76DonneeComplementaireEntreprisePeer::AIRE_GEO_INTER);
            $criteria->addSelectColumn(CommonCG76DonneeComplementaireEntreprisePeer::COMMENTAIRE);
        } else {
            $criteria->addSelectColumn($alias . '.Ref');
            $criteria->addSelectColumn($alias . '.idInscrit');
            $criteria->addSelectColumn($alias . '.IdEntreprise');
            $criteria->addSelectColumn($alias . '.type_formation');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.cout_moyen_journee');
            $criteria->addSelectColumn($alias . '.collaboration_fpt');
            $criteria->addSelectColumn($alias . '.collaboration_fpe');
            $criteria->addSelectColumn($alias . '.centre_documentation');
            $criteria->addSelectColumn($alias . '.service_reprographie');
            $criteria->addSelectColumn($alias . '.salle_info');
            $criteria->addSelectColumn($alias . '.salle_cours');
            $criteria->addSelectColumn($alias . '.aire_geo_inter');
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
        $criteria->setPrimaryTableName(CommonCG76DonneeComplementaireEntreprisePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCG76DonneeComplementaireEntreprisePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCG76DonneeComplementaireEntreprise
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonCG76DonneeComplementaireEntreprisePeer::doSelect($critcopy, $con);
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
        return CommonCG76DonneeComplementaireEntreprisePeer::populateObjects(CommonCG76DonneeComplementaireEntreprisePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonCG76DonneeComplementaireEntreprisePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME);

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
     * @param      CommonCG76DonneeComplementaireEntreprise $obj A CommonCG76DonneeComplementaireEntreprise object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getRef();
            } // if key === null
            CommonCG76DonneeComplementaireEntreprisePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonCG76DonneeComplementaireEntreprise object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonCG76DonneeComplementaireEntreprise) {
                $key = (string) $value->getRef();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonCG76DonneeComplementaireEntreprise object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonCG76DonneeComplementaireEntreprisePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonCG76DonneeComplementaireEntreprise Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonCG76DonneeComplementaireEntreprisePeer::$instances[$key])) {
                return CommonCG76DonneeComplementaireEntreprisePeer::$instances[$key];
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
        foreach (CommonCG76DonneeComplementaireEntreprisePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonCG76DonneeComplementaireEntreprisePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to CG76_Donnee_Complementaire_entreprise
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
        $cls = CommonCG76DonneeComplementaireEntreprisePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonCG76DonneeComplementaireEntreprisePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonCG76DonneeComplementaireEntreprisePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonCG76DonneeComplementaireEntreprisePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonCG76DonneeComplementaireEntreprise object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonCG76DonneeComplementaireEntreprisePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonCG76DonneeComplementaireEntreprisePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonCG76DonneeComplementaireEntreprisePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonCG76DonneeComplementaireEntreprisePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonCG76DonneeComplementaireEntreprisePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME)->getTable(CommonCG76DonneeComplementaireEntreprisePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonCG76DonneeComplementaireEntreprisePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonCG76DonneeComplementaireEntrepriseTableMap());
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
        return CommonCG76DonneeComplementaireEntreprisePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonCG76DonneeComplementaireEntreprise or Criteria object.
     *
     * @param      mixed $values Criteria or CommonCG76DonneeComplementaireEntreprise object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonCG76DonneeComplementaireEntreprise object
        }

        if ($criteria->containsKey(CommonCG76DonneeComplementaireEntreprisePeer::REF) && $criteria->keyContainsValue(CommonCG76DonneeComplementaireEntreprisePeer::REF) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonCG76DonneeComplementaireEntreprisePeer::REF.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonCG76DonneeComplementaireEntreprise or Criteria object.
     *
     * @param      mixed $values Criteria or CommonCG76DonneeComplementaireEntreprise object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonCG76DonneeComplementaireEntreprisePeer::REF);
            $value = $criteria->remove(CommonCG76DonneeComplementaireEntreprisePeer::REF);
            if ($value) {
                $selectCriteria->add(CommonCG76DonneeComplementaireEntreprisePeer::REF, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonCG76DonneeComplementaireEntreprisePeer::TABLE_NAME);
            }

        } else { // $values is CommonCG76DonneeComplementaireEntreprise object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the CG76_Donnee_Complementaire_entreprise table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonCG76DonneeComplementaireEntreprisePeer::TABLE_NAME, $con, CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonCG76DonneeComplementaireEntreprisePeer::clearInstancePool();
            CommonCG76DonneeComplementaireEntreprisePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonCG76DonneeComplementaireEntreprise or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonCG76DonneeComplementaireEntreprise object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonCG76DonneeComplementaireEntreprisePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonCG76DonneeComplementaireEntreprise) { // it's a model object
            // invalidate the cache for this single object
            CommonCG76DonneeComplementaireEntreprisePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME);
            $criteria->add(CommonCG76DonneeComplementaireEntreprisePeer::REF, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonCG76DonneeComplementaireEntreprisePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonCG76DonneeComplementaireEntreprisePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonCG76DonneeComplementaireEntreprise object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonCG76DonneeComplementaireEntreprise $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonCG76DonneeComplementaireEntreprisePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME, CommonCG76DonneeComplementaireEntreprisePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonCG76DonneeComplementaireEntreprise
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonCG76DonneeComplementaireEntreprisePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME);
        $criteria->add(CommonCG76DonneeComplementaireEntreprisePeer::REF, $pk);

        $v = CommonCG76DonneeComplementaireEntreprisePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonCG76DonneeComplementaireEntreprise[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME);
            $criteria->add(CommonCG76DonneeComplementaireEntreprisePeer::REF, $pks, Criteria::IN);
            $objs = CommonCG76DonneeComplementaireEntreprisePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonCG76DonneeComplementaireEntreprisePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonCG76DonneeComplementaireEntreprisePeer::buildTableMap();

