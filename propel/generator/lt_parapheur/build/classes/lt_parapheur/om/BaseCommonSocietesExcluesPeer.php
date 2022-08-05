<?php


/**
 * Base static class for performing query and update operations on the 'Societes_Exclues' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonSocietesExcluesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Societes_Exclues';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonSocietesExclues';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonSocietesExcluesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 20;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 20;

    /** the column name for the id_societes_exclues field */
    const ID_SOCIETES_EXCLUES = 'Societes_Exclues.id_societes_exclues';

    /** the column name for the organisme_acronyme field */
    const ORGANISME_ACRONYME = 'Societes_Exclues.organisme_acronyme';

    /** the column name for the id_service field */
    const ID_SERVICE = 'Societes_Exclues.id_service';

    /** the column name for the id_agent field */
    const ID_AGENT = 'Societes_Exclues.id_agent';

    /** the column name for the nom_document field */
    const NOM_DOCUMENT = 'Societes_Exclues.nom_document';

    /** the column name for the id_blob field */
    const ID_BLOB = 'Societes_Exclues.id_blob';

    /** the column name for the taille_document field */
    const TAILLE_DOCUMENT = 'Societes_Exclues.taille_document';

    /** the column name for the identifiant_entreprise field */
    const IDENTIFIANT_ENTREPRISE = 'Societes_Exclues.identifiant_entreprise';

    /** the column name for the raison_sociale field */
    const RAISON_SOCIALE = 'Societes_Exclues.raison_sociale';

    /** the column name for the motif field */
    const MOTIF = 'Societes_Exclues.motif';

    /** the column name for the raison_sociale_fr field */
    const RAISON_SOCIALE_FR = 'Societes_Exclues.raison_sociale_fr';

    /** the column name for the motif_fr field */
    const MOTIF_FR = 'Societes_Exclues.motif_fr';

    /** the column name for the raison_sociale_ar field */
    const RAISON_SOCIALE_AR = 'Societes_Exclues.raison_sociale_ar';

    /** the column name for the motif_ar field */
    const MOTIF_AR = 'Societes_Exclues.motif_ar';

    /** the column name for the type_exclusion field */
    const TYPE_EXCLUSION = 'Societes_Exclues.type_exclusion';

    /** the column name for the date_debut_exclusion field */
    const DATE_DEBUT_EXCLUSION = 'Societes_Exclues.date_debut_exclusion';

    /** the column name for the date_fin_exclusion field */
    const DATE_FIN_EXCLUSION = 'Societes_Exclues.date_fin_exclusion';

    /** the column name for the type_portee field */
    const TYPE_PORTEE = 'Societes_Exclues.type_portee';

    /** the column name for the raison_sociale_it field */
    const RAISON_SOCIALE_IT = 'Societes_Exclues.raison_sociale_it';

    /** the column name for the motif_it field */
    const MOTIF_IT = 'Societes_Exclues.motif_it';

    /** The enumerated values for the type_exclusion field */
    const TYPE_EXCLUSION_0 = '0';
    const TYPE_EXCLUSION_1 = '1';

    /** The enumerated values for the type_portee field */
    const TYPE_PORTEE_0 = '0';
    const TYPE_PORTEE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonSocietesExclues objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonSocietesExclues[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonSocietesExcluesPeer::$fieldNames[CommonSocietesExcluesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdSocietesExclues', 'OrganismeAcronyme', 'IdService', 'IdAgent', 'NomDocument', 'IdBlob', 'TailleDocument', 'IdentifiantEntreprise', 'RaisonSociale', 'Motif', 'RaisonSocialeFr', 'MotifFr', 'RaisonSocialeAr', 'MotifAr', 'TypeExclusion', 'DateDebutExclusion', 'DateFinExclusion', 'TypePortee', 'RaisonSocialeIt', 'MotifIt', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idSocietesExclues', 'organismeAcronyme', 'idService', 'idAgent', 'nomDocument', 'idBlob', 'tailleDocument', 'identifiantEntreprise', 'raisonSociale', 'motif', 'raisonSocialeFr', 'motifFr', 'raisonSocialeAr', 'motifAr', 'typeExclusion', 'dateDebutExclusion', 'dateFinExclusion', 'typePortee', 'raisonSocialeIt', 'motifIt', ),
        BasePeer::TYPE_COLNAME => array (CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES, CommonSocietesExcluesPeer::ORGANISME_ACRONYME, CommonSocietesExcluesPeer::ID_SERVICE, CommonSocietesExcluesPeer::ID_AGENT, CommonSocietesExcluesPeer::NOM_DOCUMENT, CommonSocietesExcluesPeer::ID_BLOB, CommonSocietesExcluesPeer::TAILLE_DOCUMENT, CommonSocietesExcluesPeer::IDENTIFIANT_ENTREPRISE, CommonSocietesExcluesPeer::RAISON_SOCIALE, CommonSocietesExcluesPeer::MOTIF, CommonSocietesExcluesPeer::RAISON_SOCIALE_FR, CommonSocietesExcluesPeer::MOTIF_FR, CommonSocietesExcluesPeer::RAISON_SOCIALE_AR, CommonSocietesExcluesPeer::MOTIF_AR, CommonSocietesExcluesPeer::TYPE_EXCLUSION, CommonSocietesExcluesPeer::DATE_DEBUT_EXCLUSION, CommonSocietesExcluesPeer::DATE_FIN_EXCLUSION, CommonSocietesExcluesPeer::TYPE_PORTEE, CommonSocietesExcluesPeer::RAISON_SOCIALE_IT, CommonSocietesExcluesPeer::MOTIF_IT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_SOCIETES_EXCLUES', 'ORGANISME_ACRONYME', 'ID_SERVICE', 'ID_AGENT', 'NOM_DOCUMENT', 'ID_BLOB', 'TAILLE_DOCUMENT', 'IDENTIFIANT_ENTREPRISE', 'RAISON_SOCIALE', 'MOTIF', 'RAISON_SOCIALE_FR', 'MOTIF_FR', 'RAISON_SOCIALE_AR', 'MOTIF_AR', 'TYPE_EXCLUSION', 'DATE_DEBUT_EXCLUSION', 'DATE_FIN_EXCLUSION', 'TYPE_PORTEE', 'RAISON_SOCIALE_IT', 'MOTIF_IT', ),
        BasePeer::TYPE_FIELDNAME => array ('id_societes_exclues', 'organisme_acronyme', 'id_service', 'id_agent', 'nom_document', 'id_blob', 'taille_document', 'identifiant_entreprise', 'raison_sociale', 'motif', 'raison_sociale_fr', 'motif_fr', 'raison_sociale_ar', 'motif_ar', 'type_exclusion', 'date_debut_exclusion', 'date_fin_exclusion', 'type_portee', 'raison_sociale_it', 'motif_it', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonSocietesExcluesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdSocietesExclues' => 0, 'OrganismeAcronyme' => 1, 'IdService' => 2, 'IdAgent' => 3, 'NomDocument' => 4, 'IdBlob' => 5, 'TailleDocument' => 6, 'IdentifiantEntreprise' => 7, 'RaisonSociale' => 8, 'Motif' => 9, 'RaisonSocialeFr' => 10, 'MotifFr' => 11, 'RaisonSocialeAr' => 12, 'MotifAr' => 13, 'TypeExclusion' => 14, 'DateDebutExclusion' => 15, 'DateFinExclusion' => 16, 'TypePortee' => 17, 'RaisonSocialeIt' => 18, 'MotifIt' => 19, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idSocietesExclues' => 0, 'organismeAcronyme' => 1, 'idService' => 2, 'idAgent' => 3, 'nomDocument' => 4, 'idBlob' => 5, 'tailleDocument' => 6, 'identifiantEntreprise' => 7, 'raisonSociale' => 8, 'motif' => 9, 'raisonSocialeFr' => 10, 'motifFr' => 11, 'raisonSocialeAr' => 12, 'motifAr' => 13, 'typeExclusion' => 14, 'dateDebutExclusion' => 15, 'dateFinExclusion' => 16, 'typePortee' => 17, 'raisonSocialeIt' => 18, 'motifIt' => 19, ),
        BasePeer::TYPE_COLNAME => array (CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES => 0, CommonSocietesExcluesPeer::ORGANISME_ACRONYME => 1, CommonSocietesExcluesPeer::ID_SERVICE => 2, CommonSocietesExcluesPeer::ID_AGENT => 3, CommonSocietesExcluesPeer::NOM_DOCUMENT => 4, CommonSocietesExcluesPeer::ID_BLOB => 5, CommonSocietesExcluesPeer::TAILLE_DOCUMENT => 6, CommonSocietesExcluesPeer::IDENTIFIANT_ENTREPRISE => 7, CommonSocietesExcluesPeer::RAISON_SOCIALE => 8, CommonSocietesExcluesPeer::MOTIF => 9, CommonSocietesExcluesPeer::RAISON_SOCIALE_FR => 10, CommonSocietesExcluesPeer::MOTIF_FR => 11, CommonSocietesExcluesPeer::RAISON_SOCIALE_AR => 12, CommonSocietesExcluesPeer::MOTIF_AR => 13, CommonSocietesExcluesPeer::TYPE_EXCLUSION => 14, CommonSocietesExcluesPeer::DATE_DEBUT_EXCLUSION => 15, CommonSocietesExcluesPeer::DATE_FIN_EXCLUSION => 16, CommonSocietesExcluesPeer::TYPE_PORTEE => 17, CommonSocietesExcluesPeer::RAISON_SOCIALE_IT => 18, CommonSocietesExcluesPeer::MOTIF_IT => 19, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_SOCIETES_EXCLUES' => 0, 'ORGANISME_ACRONYME' => 1, 'ID_SERVICE' => 2, 'ID_AGENT' => 3, 'NOM_DOCUMENT' => 4, 'ID_BLOB' => 5, 'TAILLE_DOCUMENT' => 6, 'IDENTIFIANT_ENTREPRISE' => 7, 'RAISON_SOCIALE' => 8, 'MOTIF' => 9, 'RAISON_SOCIALE_FR' => 10, 'MOTIF_FR' => 11, 'RAISON_SOCIALE_AR' => 12, 'MOTIF_AR' => 13, 'TYPE_EXCLUSION' => 14, 'DATE_DEBUT_EXCLUSION' => 15, 'DATE_FIN_EXCLUSION' => 16, 'TYPE_PORTEE' => 17, 'RAISON_SOCIALE_IT' => 18, 'MOTIF_IT' => 19, ),
        BasePeer::TYPE_FIELDNAME => array ('id_societes_exclues' => 0, 'organisme_acronyme' => 1, 'id_service' => 2, 'id_agent' => 3, 'nom_document' => 4, 'id_blob' => 5, 'taille_document' => 6, 'identifiant_entreprise' => 7, 'raison_sociale' => 8, 'motif' => 9, 'raison_sociale_fr' => 10, 'motif_fr' => 11, 'raison_sociale_ar' => 12, 'motif_ar' => 13, 'type_exclusion' => 14, 'date_debut_exclusion' => 15, 'date_fin_exclusion' => 16, 'type_portee' => 17, 'raison_sociale_it' => 18, 'motif_it' => 19, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonSocietesExcluesPeer::TYPE_EXCLUSION => array(
            CommonSocietesExcluesPeer::TYPE_EXCLUSION_0,
            CommonSocietesExcluesPeer::TYPE_EXCLUSION_1,
        ),
        CommonSocietesExcluesPeer::TYPE_PORTEE => array(
            CommonSocietesExcluesPeer::TYPE_PORTEE_0,
            CommonSocietesExcluesPeer::TYPE_PORTEE_1,
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
        $toNames = CommonSocietesExcluesPeer::getFieldNames($toType);
        $key = isset(CommonSocietesExcluesPeer::$fieldKeys[$fromType][$name]) ? CommonSocietesExcluesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonSocietesExcluesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonSocietesExcluesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonSocietesExcluesPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonSocietesExcluesPeer::$enumValueSets;
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
        $valueSets = CommonSocietesExcluesPeer::getValueSets();

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
        $values = CommonSocietesExcluesPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonSocietesExcluesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonSocietesExcluesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES);
            $criteria->addSelectColumn(CommonSocietesExcluesPeer::ORGANISME_ACRONYME);
            $criteria->addSelectColumn(CommonSocietesExcluesPeer::ID_SERVICE);
            $criteria->addSelectColumn(CommonSocietesExcluesPeer::ID_AGENT);
            $criteria->addSelectColumn(CommonSocietesExcluesPeer::NOM_DOCUMENT);
            $criteria->addSelectColumn(CommonSocietesExcluesPeer::ID_BLOB);
            $criteria->addSelectColumn(CommonSocietesExcluesPeer::TAILLE_DOCUMENT);
            $criteria->addSelectColumn(CommonSocietesExcluesPeer::IDENTIFIANT_ENTREPRISE);
            $criteria->addSelectColumn(CommonSocietesExcluesPeer::RAISON_SOCIALE);
            $criteria->addSelectColumn(CommonSocietesExcluesPeer::MOTIF);
            $criteria->addSelectColumn(CommonSocietesExcluesPeer::RAISON_SOCIALE_FR);
            $criteria->addSelectColumn(CommonSocietesExcluesPeer::MOTIF_FR);
            $criteria->addSelectColumn(CommonSocietesExcluesPeer::RAISON_SOCIALE_AR);
            $criteria->addSelectColumn(CommonSocietesExcluesPeer::MOTIF_AR);
            $criteria->addSelectColumn(CommonSocietesExcluesPeer::TYPE_EXCLUSION);
            $criteria->addSelectColumn(CommonSocietesExcluesPeer::DATE_DEBUT_EXCLUSION);
            $criteria->addSelectColumn(CommonSocietesExcluesPeer::DATE_FIN_EXCLUSION);
            $criteria->addSelectColumn(CommonSocietesExcluesPeer::TYPE_PORTEE);
            $criteria->addSelectColumn(CommonSocietesExcluesPeer::RAISON_SOCIALE_IT);
            $criteria->addSelectColumn(CommonSocietesExcluesPeer::MOTIF_IT);
        } else {
            $criteria->addSelectColumn($alias . '.id_societes_exclues');
            $criteria->addSelectColumn($alias . '.organisme_acronyme');
            $criteria->addSelectColumn($alias . '.id_service');
            $criteria->addSelectColumn($alias . '.id_agent');
            $criteria->addSelectColumn($alias . '.nom_document');
            $criteria->addSelectColumn($alias . '.id_blob');
            $criteria->addSelectColumn($alias . '.taille_document');
            $criteria->addSelectColumn($alias . '.identifiant_entreprise');
            $criteria->addSelectColumn($alias . '.raison_sociale');
            $criteria->addSelectColumn($alias . '.motif');
            $criteria->addSelectColumn($alias . '.raison_sociale_fr');
            $criteria->addSelectColumn($alias . '.motif_fr');
            $criteria->addSelectColumn($alias . '.raison_sociale_ar');
            $criteria->addSelectColumn($alias . '.motif_ar');
            $criteria->addSelectColumn($alias . '.type_exclusion');
            $criteria->addSelectColumn($alias . '.date_debut_exclusion');
            $criteria->addSelectColumn($alias . '.date_fin_exclusion');
            $criteria->addSelectColumn($alias . '.type_portee');
            $criteria->addSelectColumn($alias . '.raison_sociale_it');
            $criteria->addSelectColumn($alias . '.motif_it');
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
        $criteria->setPrimaryTableName(CommonSocietesExcluesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonSocietesExcluesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonSocietesExcluesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonSocietesExcluesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonSocietesExclues
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonSocietesExcluesPeer::doSelect($critcopy, $con);
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
        return CommonSocietesExcluesPeer::populateObjects(CommonSocietesExcluesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonSocietesExcluesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonSocietesExcluesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonSocietesExcluesPeer::DATABASE_NAME);

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
     * @param      CommonSocietesExclues $obj A CommonSocietesExclues object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdSocietesExclues();
            } // if key === null
            CommonSocietesExcluesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonSocietesExclues object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonSocietesExclues) {
                $key = (string) $value->getIdSocietesExclues();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonSocietesExclues object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonSocietesExcluesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonSocietesExclues Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonSocietesExcluesPeer::$instances[$key])) {
                return CommonSocietesExcluesPeer::$instances[$key];
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
        foreach (CommonSocietesExcluesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonSocietesExcluesPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Societes_Exclues
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
        $cls = CommonSocietesExcluesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonSocietesExcluesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonSocietesExcluesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonSocietesExcluesPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonSocietesExclues object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonSocietesExcluesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonSocietesExcluesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonSocietesExcluesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonSocietesExcluesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonSocietesExcluesPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonSocietesExcluesPeer::DATABASE_NAME)->getTable(CommonSocietesExcluesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonSocietesExcluesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonSocietesExcluesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonSocietesExcluesTableMap());
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
        return CommonSocietesExcluesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonSocietesExclues or Criteria object.
     *
     * @param      mixed $values Criteria or CommonSocietesExclues object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonSocietesExcluesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonSocietesExclues object
        }

        if ($criteria->containsKey(CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES) && $criteria->keyContainsValue(CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonSocietesExcluesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonSocietesExclues or Criteria object.
     *
     * @param      mixed $values Criteria or CommonSocietesExclues object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonSocietesExcluesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonSocietesExcluesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES);
            $value = $criteria->remove(CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES);
            if ($value) {
                $selectCriteria->add(CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonSocietesExcluesPeer::TABLE_NAME);
            }

        } else { // $values is CommonSocietesExclues object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonSocietesExcluesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Societes_Exclues table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonSocietesExcluesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonSocietesExcluesPeer::TABLE_NAME, $con, CommonSocietesExcluesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonSocietesExcluesPeer::clearInstancePool();
            CommonSocietesExcluesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonSocietesExclues or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonSocietesExclues object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonSocietesExcluesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonSocietesExcluesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonSocietesExclues) { // it's a model object
            // invalidate the cache for this single object
            CommonSocietesExcluesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonSocietesExcluesPeer::DATABASE_NAME);
            $criteria->add(CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonSocietesExcluesPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonSocietesExcluesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonSocietesExcluesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonSocietesExclues object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonSocietesExclues $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonSocietesExcluesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonSocietesExcluesPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonSocietesExcluesPeer::DATABASE_NAME, CommonSocietesExcluesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonSocietesExclues
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonSocietesExcluesPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonSocietesExcluesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonSocietesExcluesPeer::DATABASE_NAME);
        $criteria->add(CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES, $pk);

        $v = CommonSocietesExcluesPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonSocietesExclues[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonSocietesExcluesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonSocietesExcluesPeer::DATABASE_NAME);
            $criteria->add(CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES, $pks, Criteria::IN);
            $objs = CommonSocietesExcluesPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonSocietesExcluesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonSocietesExcluesPeer::buildTableMap();

