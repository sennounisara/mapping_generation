<?php


/**
 * Base static class for performing query and update operations on the 't_banque' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonTBanquePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 't_banque';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTBanque';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTBanqueTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 19;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 19;

    /** the column name for the id field */
    const ID = 't_banque.id';

    /** the column name for the code field */
    const CODE = 't_banque.code';

    /** the column name for the libelle field */
    const LIBELLE = 't_banque.libelle';

    /** the column name for the sigle field */
    const SIGLE = 't_banque.sigle';

    /** the column name for the mode field */
    const MODE = 't_banque.mode';

    /** the column name for the adresse_siege field */
    const ADRESSE_SIEGE = 't_banque.adresse_siege';

    /** the column name for the ville_siege field */
    const VILLE_SIEGE = 't_banque.ville_siege';

    /** the column name for the id_ref_ville field */
    const ID_REF_VILLE = 't_banque.id_ref_ville';

    /** the column name for the position_debut_code_agence field */
    const POSITION_DEBUT_CODE_AGENCE = 't_banque.position_debut_code_agence';

    /** the column name for the taille_code_agence field */
    const TAILLE_CODE_AGENCE = 't_banque.taille_code_agence';

    /** the column name for the position_debut_code_ville field */
    const POSITION_DEBUT_CODE_VILLE = 't_banque.position_debut_code_ville';

    /** the column name for the taille_code_ville field */
    const TAILLE_CODE_VILLE = 't_banque.taille_code_ville';

    /** the column name for the affichage_compte_virement field */
    const AFFICHAGE_COMPTE_VIREMENT = 't_banque.affichage_compte_virement';

    /** the column name for the config_id_modele_demande_caution field */
    const CONFIG_ID_MODELE_DEMANDE_CAUTION = 't_banque.config_id_modele_demande_caution';

    /** the column name for the numero_agrement field */
    const NUMERO_AGREMENT = 't_banque.numero_agrement';

    /** the column name for the date_agrement field */
    const DATE_AGREMENT = 't_banque.date_agrement';

    /** the column name for the config_generer_reference_caution field */
    const CONFIG_GENERER_REFERENCE_CAUTION = 't_banque.config_generer_reference_caution';

    /** the column name for the config_id_document_modele field */
    const CONFIG_ID_DOCUMENT_MODELE = 't_banque.config_id_document_modele';

    /** the column name for the config_id_modele_demande_restitution field */
    const CONFIG_ID_MODELE_DEMANDE_RESTITUTION = 't_banque.config_id_modele_demande_restitution';

    /** The enumerated values for the mode field */
    const MODE_CENTRALISE = 'centralise';
    const MODE_DECENTRALISE = 'decentralise';

    /** The enumerated values for the affichage_compte_virement field */
    const AFFICHAGE_COMPTE_VIREMENT_0 = '0';
    const AFFICHAGE_COMPTE_VIREMENT_1 = '1';

    /** The enumerated values for the config_generer_reference_caution field */
    const CONFIG_GENERER_REFERENCE_CAUTION_0 = '0';
    const CONFIG_GENERER_REFERENCE_CAUTION_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTBanque objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTBanque[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTBanquePeer::$fieldNames[CommonTBanquePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Code', 'Libelle', 'Sigle', 'Mode', 'AdresseSiege', 'VilleSiege', 'IdRefVille', 'PositionDebutCodeAgence', 'TailleCodeAgence', 'PositionDebutCodeVille', 'TailleCodeVille', 'AffichageCompteVirement', 'ConfigIdModeleDemandeCaution', 'NumeroAgrement', 'DateAgrement', 'ConfigGenererReferenceCaution', 'ConfigIdDocumentModele', 'ConfigIdModeleDemandeRestitution', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'code', 'libelle', 'sigle', 'mode', 'adresseSiege', 'villeSiege', 'idRefVille', 'positionDebutCodeAgence', 'tailleCodeAgence', 'positionDebutCodeVille', 'tailleCodeVille', 'affichageCompteVirement', 'configIdModeleDemandeCaution', 'numeroAgrement', 'dateAgrement', 'configGenererReferenceCaution', 'configIdDocumentModele', 'configIdModeleDemandeRestitution', ),
        BasePeer::TYPE_COLNAME => array (CommonTBanquePeer::ID, CommonTBanquePeer::CODE, CommonTBanquePeer::LIBELLE, CommonTBanquePeer::SIGLE, CommonTBanquePeer::MODE, CommonTBanquePeer::ADRESSE_SIEGE, CommonTBanquePeer::VILLE_SIEGE, CommonTBanquePeer::ID_REF_VILLE, CommonTBanquePeer::POSITION_DEBUT_CODE_AGENCE, CommonTBanquePeer::TAILLE_CODE_AGENCE, CommonTBanquePeer::POSITION_DEBUT_CODE_VILLE, CommonTBanquePeer::TAILLE_CODE_VILLE, CommonTBanquePeer::AFFICHAGE_COMPTE_VIREMENT, CommonTBanquePeer::CONFIG_ID_MODELE_DEMANDE_CAUTION, CommonTBanquePeer::NUMERO_AGREMENT, CommonTBanquePeer::DATE_AGREMENT, CommonTBanquePeer::CONFIG_GENERER_REFERENCE_CAUTION, CommonTBanquePeer::CONFIG_ID_DOCUMENT_MODELE, CommonTBanquePeer::CONFIG_ID_MODELE_DEMANDE_RESTITUTION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'CODE', 'LIBELLE', 'SIGLE', 'MODE', 'ADRESSE_SIEGE', 'VILLE_SIEGE', 'ID_REF_VILLE', 'POSITION_DEBUT_CODE_AGENCE', 'TAILLE_CODE_AGENCE', 'POSITION_DEBUT_CODE_VILLE', 'TAILLE_CODE_VILLE', 'AFFICHAGE_COMPTE_VIREMENT', 'CONFIG_ID_MODELE_DEMANDE_CAUTION', 'NUMERO_AGREMENT', 'DATE_AGREMENT', 'CONFIG_GENERER_REFERENCE_CAUTION', 'CONFIG_ID_DOCUMENT_MODELE', 'CONFIG_ID_MODELE_DEMANDE_RESTITUTION', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'code', 'libelle', 'sigle', 'mode', 'adresse_siege', 'ville_siege', 'id_ref_ville', 'position_debut_code_agence', 'taille_code_agence', 'position_debut_code_ville', 'taille_code_ville', 'affichage_compte_virement', 'config_id_modele_demande_caution', 'numero_agrement', 'date_agrement', 'config_generer_reference_caution', 'config_id_document_modele', 'config_id_modele_demande_restitution', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTBanquePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Code' => 1, 'Libelle' => 2, 'Sigle' => 3, 'Mode' => 4, 'AdresseSiege' => 5, 'VilleSiege' => 6, 'IdRefVille' => 7, 'PositionDebutCodeAgence' => 8, 'TailleCodeAgence' => 9, 'PositionDebutCodeVille' => 10, 'TailleCodeVille' => 11, 'AffichageCompteVirement' => 12, 'ConfigIdModeleDemandeCaution' => 13, 'NumeroAgrement' => 14, 'DateAgrement' => 15, 'ConfigGenererReferenceCaution' => 16, 'ConfigIdDocumentModele' => 17, 'ConfigIdModeleDemandeRestitution' => 18, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'code' => 1, 'libelle' => 2, 'sigle' => 3, 'mode' => 4, 'adresseSiege' => 5, 'villeSiege' => 6, 'idRefVille' => 7, 'positionDebutCodeAgence' => 8, 'tailleCodeAgence' => 9, 'positionDebutCodeVille' => 10, 'tailleCodeVille' => 11, 'affichageCompteVirement' => 12, 'configIdModeleDemandeCaution' => 13, 'numeroAgrement' => 14, 'dateAgrement' => 15, 'configGenererReferenceCaution' => 16, 'configIdDocumentModele' => 17, 'configIdModeleDemandeRestitution' => 18, ),
        BasePeer::TYPE_COLNAME => array (CommonTBanquePeer::ID => 0, CommonTBanquePeer::CODE => 1, CommonTBanquePeer::LIBELLE => 2, CommonTBanquePeer::SIGLE => 3, CommonTBanquePeer::MODE => 4, CommonTBanquePeer::ADRESSE_SIEGE => 5, CommonTBanquePeer::VILLE_SIEGE => 6, CommonTBanquePeer::ID_REF_VILLE => 7, CommonTBanquePeer::POSITION_DEBUT_CODE_AGENCE => 8, CommonTBanquePeer::TAILLE_CODE_AGENCE => 9, CommonTBanquePeer::POSITION_DEBUT_CODE_VILLE => 10, CommonTBanquePeer::TAILLE_CODE_VILLE => 11, CommonTBanquePeer::AFFICHAGE_COMPTE_VIREMENT => 12, CommonTBanquePeer::CONFIG_ID_MODELE_DEMANDE_CAUTION => 13, CommonTBanquePeer::NUMERO_AGREMENT => 14, CommonTBanquePeer::DATE_AGREMENT => 15, CommonTBanquePeer::CONFIG_GENERER_REFERENCE_CAUTION => 16, CommonTBanquePeer::CONFIG_ID_DOCUMENT_MODELE => 17, CommonTBanquePeer::CONFIG_ID_MODELE_DEMANDE_RESTITUTION => 18, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'CODE' => 1, 'LIBELLE' => 2, 'SIGLE' => 3, 'MODE' => 4, 'ADRESSE_SIEGE' => 5, 'VILLE_SIEGE' => 6, 'ID_REF_VILLE' => 7, 'POSITION_DEBUT_CODE_AGENCE' => 8, 'TAILLE_CODE_AGENCE' => 9, 'POSITION_DEBUT_CODE_VILLE' => 10, 'TAILLE_CODE_VILLE' => 11, 'AFFICHAGE_COMPTE_VIREMENT' => 12, 'CONFIG_ID_MODELE_DEMANDE_CAUTION' => 13, 'NUMERO_AGREMENT' => 14, 'DATE_AGREMENT' => 15, 'CONFIG_GENERER_REFERENCE_CAUTION' => 16, 'CONFIG_ID_DOCUMENT_MODELE' => 17, 'CONFIG_ID_MODELE_DEMANDE_RESTITUTION' => 18, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'code' => 1, 'libelle' => 2, 'sigle' => 3, 'mode' => 4, 'adresse_siege' => 5, 'ville_siege' => 6, 'id_ref_ville' => 7, 'position_debut_code_agence' => 8, 'taille_code_agence' => 9, 'position_debut_code_ville' => 10, 'taille_code_ville' => 11, 'affichage_compte_virement' => 12, 'config_id_modele_demande_caution' => 13, 'numero_agrement' => 14, 'date_agrement' => 15, 'config_generer_reference_caution' => 16, 'config_id_document_modele' => 17, 'config_id_modele_demande_restitution' => 18, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonTBanquePeer::MODE => array(
            CommonTBanquePeer::MODE_CENTRALISE,
            CommonTBanquePeer::MODE_DECENTRALISE,
        ),
        CommonTBanquePeer::AFFICHAGE_COMPTE_VIREMENT => array(
            CommonTBanquePeer::AFFICHAGE_COMPTE_VIREMENT_0,
            CommonTBanquePeer::AFFICHAGE_COMPTE_VIREMENT_1,
        ),
        CommonTBanquePeer::CONFIG_GENERER_REFERENCE_CAUTION => array(
            CommonTBanquePeer::CONFIG_GENERER_REFERENCE_CAUTION_0,
            CommonTBanquePeer::CONFIG_GENERER_REFERENCE_CAUTION_1,
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
        $toNames = CommonTBanquePeer::getFieldNames($toType);
        $key = isset(CommonTBanquePeer::$fieldKeys[$fromType][$name]) ? CommonTBanquePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTBanquePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTBanquePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTBanquePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonTBanquePeer::$enumValueSets;
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
        $valueSets = CommonTBanquePeer::getValueSets();

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
        $values = CommonTBanquePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonTBanquePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTBanquePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTBanquePeer::ID);
            $criteria->addSelectColumn(CommonTBanquePeer::CODE);
            $criteria->addSelectColumn(CommonTBanquePeer::LIBELLE);
            $criteria->addSelectColumn(CommonTBanquePeer::SIGLE);
            $criteria->addSelectColumn(CommonTBanquePeer::MODE);
            $criteria->addSelectColumn(CommonTBanquePeer::ADRESSE_SIEGE);
            $criteria->addSelectColumn(CommonTBanquePeer::VILLE_SIEGE);
            $criteria->addSelectColumn(CommonTBanquePeer::ID_REF_VILLE);
            $criteria->addSelectColumn(CommonTBanquePeer::POSITION_DEBUT_CODE_AGENCE);
            $criteria->addSelectColumn(CommonTBanquePeer::TAILLE_CODE_AGENCE);
            $criteria->addSelectColumn(CommonTBanquePeer::POSITION_DEBUT_CODE_VILLE);
            $criteria->addSelectColumn(CommonTBanquePeer::TAILLE_CODE_VILLE);
            $criteria->addSelectColumn(CommonTBanquePeer::AFFICHAGE_COMPTE_VIREMENT);
            $criteria->addSelectColumn(CommonTBanquePeer::CONFIG_ID_MODELE_DEMANDE_CAUTION);
            $criteria->addSelectColumn(CommonTBanquePeer::NUMERO_AGREMENT);
            $criteria->addSelectColumn(CommonTBanquePeer::DATE_AGREMENT);
            $criteria->addSelectColumn(CommonTBanquePeer::CONFIG_GENERER_REFERENCE_CAUTION);
            $criteria->addSelectColumn(CommonTBanquePeer::CONFIG_ID_DOCUMENT_MODELE);
            $criteria->addSelectColumn(CommonTBanquePeer::CONFIG_ID_MODELE_DEMANDE_RESTITUTION);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.code');
            $criteria->addSelectColumn($alias . '.libelle');
            $criteria->addSelectColumn($alias . '.sigle');
            $criteria->addSelectColumn($alias . '.mode');
            $criteria->addSelectColumn($alias . '.adresse_siege');
            $criteria->addSelectColumn($alias . '.ville_siege');
            $criteria->addSelectColumn($alias . '.id_ref_ville');
            $criteria->addSelectColumn($alias . '.position_debut_code_agence');
            $criteria->addSelectColumn($alias . '.taille_code_agence');
            $criteria->addSelectColumn($alias . '.position_debut_code_ville');
            $criteria->addSelectColumn($alias . '.taille_code_ville');
            $criteria->addSelectColumn($alias . '.affichage_compte_virement');
            $criteria->addSelectColumn($alias . '.config_id_modele_demande_caution');
            $criteria->addSelectColumn($alias . '.numero_agrement');
            $criteria->addSelectColumn($alias . '.date_agrement');
            $criteria->addSelectColumn($alias . '.config_generer_reference_caution');
            $criteria->addSelectColumn($alias . '.config_id_document_modele');
            $criteria->addSelectColumn($alias . '.config_id_modele_demande_restitution');
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
        $criteria->setPrimaryTableName(CommonTBanquePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTBanquePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTBanquePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTBanquePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTBanque
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTBanquePeer::doSelect($critcopy, $con);
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
        return CommonTBanquePeer::populateObjects(CommonTBanquePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTBanquePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTBanquePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTBanquePeer::DATABASE_NAME);

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
     * @param      CommonTBanque $obj A CommonTBanque object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonTBanquePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTBanque object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTBanque) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTBanque object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTBanquePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTBanque Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTBanquePeer::$instances[$key])) {
                return CommonTBanquePeer::$instances[$key];
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
        foreach (CommonTBanquePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTBanquePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_banque
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
        $cls = CommonTBanquePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTBanquePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTBanquePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTBanquePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTBanque object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTBanquePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTBanquePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTBanquePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTBanquePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTBanquePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonTBanquePeer::DATABASE_NAME)->getTable(CommonTBanquePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTBanquePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTBanquePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTBanqueTableMap());
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
        return CommonTBanquePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTBanque or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTBanque object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTBanquePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTBanque object
        }

        if ($criteria->containsKey(CommonTBanquePeer::ID) && $criteria->keyContainsValue(CommonTBanquePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTBanquePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTBanquePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTBanque or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTBanque object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTBanquePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTBanquePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTBanquePeer::ID);
            $value = $criteria->remove(CommonTBanquePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonTBanquePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTBanquePeer::TABLE_NAME);
            }

        } else { // $values is CommonTBanque object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTBanquePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_banque table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTBanquePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTBanquePeer::TABLE_NAME, $con, CommonTBanquePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTBanquePeer::clearInstancePool();
            CommonTBanquePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTBanque or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTBanque object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTBanquePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTBanquePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTBanque) { // it's a model object
            // invalidate the cache for this single object
            CommonTBanquePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTBanquePeer::DATABASE_NAME);
            $criteria->add(CommonTBanquePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonTBanquePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTBanquePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTBanquePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTBanque object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTBanque $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTBanquePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTBanquePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTBanquePeer::DATABASE_NAME, CommonTBanquePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonTBanque
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonTBanquePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTBanquePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonTBanquePeer::DATABASE_NAME);
        $criteria->add(CommonTBanquePeer::ID, $pk);

        $v = CommonTBanquePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonTBanque[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTBanquePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonTBanquePeer::DATABASE_NAME);
            $criteria->add(CommonTBanquePeer::ID, $pks, Criteria::IN);
            $objs = CommonTBanquePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonTBanquePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTBanquePeer::buildTableMap();

