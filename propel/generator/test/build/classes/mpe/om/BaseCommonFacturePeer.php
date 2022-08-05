<?php


/**
 * Base static class for performing query and update operations on the 'facture' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonFacturePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'facture';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonFacture';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonFactureTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 21;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 21;

    /** the column name for the id field */
    const ID = 'facture.id';

    /** the column name for the id_type field */
    const ID_TYPE = 'facture.id_type';

    /** the column name for the id_sous_type field */
    const ID_SOUS_TYPE = 'facture.id_sous_type';

    /** the column name for the type field */
    const TYPE = 'facture.type';

    /** the column name for the ref field */
    const REF = 'facture.ref';

    /** the column name for the date_creation field */
    const DATE_CREATION = 'facture.date_creation';

    /** the column name for the montant_ht field */
    const MONTANT_HT = 'facture.montant_ht';

    /** the column name for the montant_ttc field */
    const MONTANT_TTC = 'facture.montant_ttc';

    /** the column name for the montant_tva field */
    const MONTANT_TVA = 'facture.montant_tva';

    /** the column name for the objet field */
    const OBJET = 'facture.objet';

    /** the column name for the devis field */
    const DEVIS = 'facture.devis';

    /** the column name for the statut field */
    const STATUT = 'facture.statut';

    /** the column name for the numero_depot field */
    const NUMERO_DEPOT = 'facture.numero_depot';

    /** the column name for the numero_marche field */
    const NUMERO_MARCHE = 'facture.numero_marche';

    /** the column name for the id_inscrit field */
    const ID_INSCRIT = 'facture.id_inscrit';

    /** the column name for the id_entreprise field */
    const ID_ENTREPRISE = 'facture.id_entreprise';

    /** the column name for the id_blob_facture field */
    const ID_BLOB_FACTURE = 'facture.id_blob_facture';

    /** the column name for the nom_fichier field */
    const NOM_FICHIER = 'facture.nom_fichier';

    /** the column name for the id_blob_facture_signe field */
    const ID_BLOB_FACTURE_SIGNE = 'facture.id_blob_facture_signe';

    /** the column name for the date_envoi field */
    const DATE_ENVOI = 'facture.date_envoi';

    /** the column name for the date_depot field */
    const DATE_DEPOT = 'facture.date_depot';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonFacture objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonFacture[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonFacturePeer::$fieldNames[CommonFacturePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdType', 'IdSousType', 'Type', 'Ref', 'DateCreation', 'MontantHt', 'MontantTtc', 'MontantTva', 'Objet', 'Devis', 'Statut', 'NumeroDepot', 'NumeroMarche', 'IdInscrit', 'IdEntreprise', 'IdBlobFacture', 'NomFichier', 'IdBlobFactureSigne', 'DateEnvoi', 'DateDepot', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idType', 'idSousType', 'type', 'ref', 'dateCreation', 'montantHt', 'montantTtc', 'montantTva', 'objet', 'devis', 'statut', 'numeroDepot', 'numeroMarche', 'idInscrit', 'idEntreprise', 'idBlobFacture', 'nomFichier', 'idBlobFactureSigne', 'dateEnvoi', 'dateDepot', ),
        BasePeer::TYPE_COLNAME => array (CommonFacturePeer::ID, CommonFacturePeer::ID_TYPE, CommonFacturePeer::ID_SOUS_TYPE, CommonFacturePeer::TYPE, CommonFacturePeer::REF, CommonFacturePeer::DATE_CREATION, CommonFacturePeer::MONTANT_HT, CommonFacturePeer::MONTANT_TTC, CommonFacturePeer::MONTANT_TVA, CommonFacturePeer::OBJET, CommonFacturePeer::DEVIS, CommonFacturePeer::STATUT, CommonFacturePeer::NUMERO_DEPOT, CommonFacturePeer::NUMERO_MARCHE, CommonFacturePeer::ID_INSCRIT, CommonFacturePeer::ID_ENTREPRISE, CommonFacturePeer::ID_BLOB_FACTURE, CommonFacturePeer::NOM_FICHIER, CommonFacturePeer::ID_BLOB_FACTURE_SIGNE, CommonFacturePeer::DATE_ENVOI, CommonFacturePeer::DATE_DEPOT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_TYPE', 'ID_SOUS_TYPE', 'TYPE', 'REF', 'DATE_CREATION', 'MONTANT_HT', 'MONTANT_TTC', 'MONTANT_TVA', 'OBJET', 'DEVIS', 'STATUT', 'NUMERO_DEPOT', 'NUMERO_MARCHE', 'ID_INSCRIT', 'ID_ENTREPRISE', 'ID_BLOB_FACTURE', 'NOM_FICHIER', 'ID_BLOB_FACTURE_SIGNE', 'DATE_ENVOI', 'DATE_DEPOT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'id_type', 'id_sous_type', 'type', 'ref', 'date_creation', 'montant_ht', 'montant_ttc', 'montant_tva', 'objet', 'devis', 'statut', 'numero_depot', 'numero_marche', 'id_inscrit', 'id_entreprise', 'id_blob_facture', 'nom_fichier', 'id_blob_facture_signe', 'date_envoi', 'date_depot', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonFacturePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdType' => 1, 'IdSousType' => 2, 'Type' => 3, 'Ref' => 4, 'DateCreation' => 5, 'MontantHt' => 6, 'MontantTtc' => 7, 'MontantTva' => 8, 'Objet' => 9, 'Devis' => 10, 'Statut' => 11, 'NumeroDepot' => 12, 'NumeroMarche' => 13, 'IdInscrit' => 14, 'IdEntreprise' => 15, 'IdBlobFacture' => 16, 'NomFichier' => 17, 'IdBlobFactureSigne' => 18, 'DateEnvoi' => 19, 'DateDepot' => 20, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idType' => 1, 'idSousType' => 2, 'type' => 3, 'ref' => 4, 'dateCreation' => 5, 'montantHt' => 6, 'montantTtc' => 7, 'montantTva' => 8, 'objet' => 9, 'devis' => 10, 'statut' => 11, 'numeroDepot' => 12, 'numeroMarche' => 13, 'idInscrit' => 14, 'idEntreprise' => 15, 'idBlobFacture' => 16, 'nomFichier' => 17, 'idBlobFactureSigne' => 18, 'dateEnvoi' => 19, 'dateDepot' => 20, ),
        BasePeer::TYPE_COLNAME => array (CommonFacturePeer::ID => 0, CommonFacturePeer::ID_TYPE => 1, CommonFacturePeer::ID_SOUS_TYPE => 2, CommonFacturePeer::TYPE => 3, CommonFacturePeer::REF => 4, CommonFacturePeer::DATE_CREATION => 5, CommonFacturePeer::MONTANT_HT => 6, CommonFacturePeer::MONTANT_TTC => 7, CommonFacturePeer::MONTANT_TVA => 8, CommonFacturePeer::OBJET => 9, CommonFacturePeer::DEVIS => 10, CommonFacturePeer::STATUT => 11, CommonFacturePeer::NUMERO_DEPOT => 12, CommonFacturePeer::NUMERO_MARCHE => 13, CommonFacturePeer::ID_INSCRIT => 14, CommonFacturePeer::ID_ENTREPRISE => 15, CommonFacturePeer::ID_BLOB_FACTURE => 16, CommonFacturePeer::NOM_FICHIER => 17, CommonFacturePeer::ID_BLOB_FACTURE_SIGNE => 18, CommonFacturePeer::DATE_ENVOI => 19, CommonFacturePeer::DATE_DEPOT => 20, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_TYPE' => 1, 'ID_SOUS_TYPE' => 2, 'TYPE' => 3, 'REF' => 4, 'DATE_CREATION' => 5, 'MONTANT_HT' => 6, 'MONTANT_TTC' => 7, 'MONTANT_TVA' => 8, 'OBJET' => 9, 'DEVIS' => 10, 'STATUT' => 11, 'NUMERO_DEPOT' => 12, 'NUMERO_MARCHE' => 13, 'ID_INSCRIT' => 14, 'ID_ENTREPRISE' => 15, 'ID_BLOB_FACTURE' => 16, 'NOM_FICHIER' => 17, 'ID_BLOB_FACTURE_SIGNE' => 18, 'DATE_ENVOI' => 19, 'DATE_DEPOT' => 20, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_type' => 1, 'id_sous_type' => 2, 'type' => 3, 'ref' => 4, 'date_creation' => 5, 'montant_ht' => 6, 'montant_ttc' => 7, 'montant_tva' => 8, 'objet' => 9, 'devis' => 10, 'statut' => 11, 'numero_depot' => 12, 'numero_marche' => 13, 'id_inscrit' => 14, 'id_entreprise' => 15, 'id_blob_facture' => 16, 'nom_fichier' => 17, 'id_blob_facture_signe' => 18, 'date_envoi' => 19, 'date_depot' => 20, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
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
        $toNames = CommonFacturePeer::getFieldNames($toType);
        $key = isset(CommonFacturePeer::$fieldKeys[$fromType][$name]) ? CommonFacturePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonFacturePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonFacturePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonFacturePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonFacturePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonFacturePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonFacturePeer::ID);
            $criteria->addSelectColumn(CommonFacturePeer::ID_TYPE);
            $criteria->addSelectColumn(CommonFacturePeer::ID_SOUS_TYPE);
            $criteria->addSelectColumn(CommonFacturePeer::TYPE);
            $criteria->addSelectColumn(CommonFacturePeer::REF);
            $criteria->addSelectColumn(CommonFacturePeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonFacturePeer::MONTANT_HT);
            $criteria->addSelectColumn(CommonFacturePeer::MONTANT_TTC);
            $criteria->addSelectColumn(CommonFacturePeer::MONTANT_TVA);
            $criteria->addSelectColumn(CommonFacturePeer::OBJET);
            $criteria->addSelectColumn(CommonFacturePeer::DEVIS);
            $criteria->addSelectColumn(CommonFacturePeer::STATUT);
            $criteria->addSelectColumn(CommonFacturePeer::NUMERO_DEPOT);
            $criteria->addSelectColumn(CommonFacturePeer::NUMERO_MARCHE);
            $criteria->addSelectColumn(CommonFacturePeer::ID_INSCRIT);
            $criteria->addSelectColumn(CommonFacturePeer::ID_ENTREPRISE);
            $criteria->addSelectColumn(CommonFacturePeer::ID_BLOB_FACTURE);
            $criteria->addSelectColumn(CommonFacturePeer::NOM_FICHIER);
            $criteria->addSelectColumn(CommonFacturePeer::ID_BLOB_FACTURE_SIGNE);
            $criteria->addSelectColumn(CommonFacturePeer::DATE_ENVOI);
            $criteria->addSelectColumn(CommonFacturePeer::DATE_DEPOT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.id_type');
            $criteria->addSelectColumn($alias . '.id_sous_type');
            $criteria->addSelectColumn($alias . '.type');
            $criteria->addSelectColumn($alias . '.ref');
            $criteria->addSelectColumn($alias . '.date_creation');
            $criteria->addSelectColumn($alias . '.montant_ht');
            $criteria->addSelectColumn($alias . '.montant_ttc');
            $criteria->addSelectColumn($alias . '.montant_tva');
            $criteria->addSelectColumn($alias . '.objet');
            $criteria->addSelectColumn($alias . '.devis');
            $criteria->addSelectColumn($alias . '.statut');
            $criteria->addSelectColumn($alias . '.numero_depot');
            $criteria->addSelectColumn($alias . '.numero_marche');
            $criteria->addSelectColumn($alias . '.id_inscrit');
            $criteria->addSelectColumn($alias . '.id_entreprise');
            $criteria->addSelectColumn($alias . '.id_blob_facture');
            $criteria->addSelectColumn($alias . '.nom_fichier');
            $criteria->addSelectColumn($alias . '.id_blob_facture_signe');
            $criteria->addSelectColumn($alias . '.date_envoi');
            $criteria->addSelectColumn($alias . '.date_depot');
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
        $criteria->setPrimaryTableName(CommonFacturePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonFacturePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonFacturePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonFacture
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonFacturePeer::doSelect($critcopy, $con);
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
        return CommonFacturePeer::populateObjects(CommonFacturePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonFacturePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonFacturePeer::DATABASE_NAME);

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
     * @param      CommonFacture $obj A CommonFacture object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonFacturePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonFacture object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonFacture) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonFacture object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonFacturePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonFacture Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonFacturePeer::$instances[$key])) {
                return CommonFacturePeer::$instances[$key];
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
        foreach (CommonFacturePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonFacturePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to facture
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
        $cls = CommonFacturePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonFacturePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonFacturePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonFacturePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonFacture object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonFacturePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonFacturePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonFacturePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonFacturePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonFacturePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonTypeFacture table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonTypeFacture(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonFacturePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonFacturePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonFacturePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonFacturePeer::ID_TYPE, CommonTypeFacturePeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonSousTypeFacture table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonSousTypeFacture(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonFacturePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonFacturePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonFacturePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonFacturePeer::ID_SOUS_TYPE, CommonSousTypeFacturePeer::ID, $join_behavior);

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
     * Selects a collection of CommonFacture objects pre-filled with their CommonTypeFacture objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonFacture objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonTypeFacture(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonFacturePeer::DATABASE_NAME);
        }

        CommonFacturePeer::addSelectColumns($criteria);
        $startcol = CommonFacturePeer::NUM_HYDRATE_COLUMNS;
        CommonTypeFacturePeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonFacturePeer::ID_TYPE, CommonTypeFacturePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonFacturePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonFacturePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonFacturePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonFacturePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonTypeFacturePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonTypeFacturePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTypeFacturePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonTypeFacturePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonFacture) to $obj2 (CommonTypeFacture)
                $obj2->addCommonFacture($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonFacture objects pre-filled with their CommonSousTypeFacture objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonFacture objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonSousTypeFacture(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonFacturePeer::DATABASE_NAME);
        }

        CommonFacturePeer::addSelectColumns($criteria);
        $startcol = CommonFacturePeer::NUM_HYDRATE_COLUMNS;
        CommonSousTypeFacturePeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonFacturePeer::ID_SOUS_TYPE, CommonSousTypeFacturePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonFacturePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonFacturePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonFacturePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonFacturePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonSousTypeFacturePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonSousTypeFacturePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonSousTypeFacturePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonSousTypeFacturePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonFacture) to $obj2 (CommonSousTypeFacture)
                $obj2->addCommonFacture($obj1);

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
        $criteria->setPrimaryTableName(CommonFacturePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonFacturePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonFacturePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonFacturePeer::ID_TYPE, CommonTypeFacturePeer::ID, $join_behavior);

        $criteria->addJoin(CommonFacturePeer::ID_SOUS_TYPE, CommonSousTypeFacturePeer::ID, $join_behavior);

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
     * Selects a collection of CommonFacture objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonFacture objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonFacturePeer::DATABASE_NAME);
        }

        CommonFacturePeer::addSelectColumns($criteria);
        $startcol2 = CommonFacturePeer::NUM_HYDRATE_COLUMNS;

        CommonTypeFacturePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTypeFacturePeer::NUM_HYDRATE_COLUMNS;

        CommonSousTypeFacturePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonSousTypeFacturePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonFacturePeer::ID_TYPE, CommonTypeFacturePeer::ID, $join_behavior);

        $criteria->addJoin(CommonFacturePeer::ID_SOUS_TYPE, CommonSousTypeFacturePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonFacturePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonFacturePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonFacturePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonFacturePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonTypeFacture rows

            $key2 = CommonTypeFacturePeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonTypeFacturePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTypeFacturePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonTypeFacturePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonFacture) to the collection in $obj2 (CommonTypeFacture)
                $obj2->addCommonFacture($obj1);
            } // if joined row not null

            // Add objects for joined CommonSousTypeFacture rows

            $key3 = CommonSousTypeFacturePeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CommonSousTypeFacturePeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CommonSousTypeFacturePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonSousTypeFacturePeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (CommonFacture) to the collection in $obj3 (CommonSousTypeFacture)
                $obj3->addCommonFacture($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonTypeFacture table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonTypeFacture(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonFacturePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonFacturePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonFacturePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonFacturePeer::ID_SOUS_TYPE, CommonSousTypeFacturePeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonSousTypeFacture table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonSousTypeFacture(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonFacturePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonFacturePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonFacturePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonFacturePeer::ID_TYPE, CommonTypeFacturePeer::ID, $join_behavior);

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
     * Selects a collection of CommonFacture objects pre-filled with all related objects except CommonTypeFacture.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonFacture objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonTypeFacture(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonFacturePeer::DATABASE_NAME);
        }

        CommonFacturePeer::addSelectColumns($criteria);
        $startcol2 = CommonFacturePeer::NUM_HYDRATE_COLUMNS;

        CommonSousTypeFacturePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonSousTypeFacturePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonFacturePeer::ID_SOUS_TYPE, CommonSousTypeFacturePeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonFacturePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonFacturePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonFacturePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonFacturePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonSousTypeFacture rows

                $key2 = CommonSousTypeFacturePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonSousTypeFacturePeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonSousTypeFacturePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonSousTypeFacturePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonFacture) to the collection in $obj2 (CommonSousTypeFacture)
                $obj2->addCommonFacture($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonFacture objects pre-filled with all related objects except CommonSousTypeFacture.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonFacture objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonSousTypeFacture(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonFacturePeer::DATABASE_NAME);
        }

        CommonFacturePeer::addSelectColumns($criteria);
        $startcol2 = CommonFacturePeer::NUM_HYDRATE_COLUMNS;

        CommonTypeFacturePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTypeFacturePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonFacturePeer::ID_TYPE, CommonTypeFacturePeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonFacturePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonFacturePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonFacturePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonFacturePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonTypeFacture rows

                $key2 = CommonTypeFacturePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonTypeFacturePeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonTypeFacturePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonTypeFacturePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonFacture) to the collection in $obj2 (CommonTypeFacture)
                $obj2->addCommonFacture($obj1);

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
        return Propel::getDatabaseMap(CommonFacturePeer::DATABASE_NAME)->getTable(CommonFacturePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonFacturePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonFacturePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonFactureTableMap());
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
        return CommonFacturePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonFacture or Criteria object.
     *
     * @param      mixed $values Criteria or CommonFacture object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonFacturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonFacture object
        }

        if ($criteria->containsKey(CommonFacturePeer::ID) && $criteria->keyContainsValue(CommonFacturePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonFacturePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonFacturePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonFacture or Criteria object.
     *
     * @param      mixed $values Criteria or CommonFacture object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonFacturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonFacturePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonFacturePeer::ID);
            $value = $criteria->remove(CommonFacturePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonFacturePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonFacturePeer::TABLE_NAME);
            }

        } else { // $values is CommonFacture object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonFacturePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the facture table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonFacturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonFacturePeer::TABLE_NAME, $con, CommonFacturePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonFacturePeer::clearInstancePool();
            CommonFacturePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonFacture or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonFacture object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonFacturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonFacturePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonFacture) { // it's a model object
            // invalidate the cache for this single object
            CommonFacturePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonFacturePeer::DATABASE_NAME);
            $criteria->add(CommonFacturePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonFacturePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonFacturePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonFacturePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonFacture object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonFacture $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonFacturePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonFacturePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonFacturePeer::DATABASE_NAME, CommonFacturePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonFacture
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonFacturePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonFacturePeer::DATABASE_NAME);
        $criteria->add(CommonFacturePeer::ID, $pk);

        $v = CommonFacturePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonFacture[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonFacturePeer::DATABASE_NAME);
            $criteria->add(CommonFacturePeer::ID, $pks, Criteria::IN);
            $objs = CommonFacturePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonFacturePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonFacturePeer::buildTableMap();

