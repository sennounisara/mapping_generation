<?php


/**
 * Base static class for performing query and update operations on the 'TypeProcedure' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTypeProcedurePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'TypeProcedure';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTypeProcedure';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTypeProcedureTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 21;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 21;

    /** the column name for the id_type_procedure field */
    const ID_TYPE_PROCEDURE = 'TypeProcedure.id_type_procedure';

    /** the column name for the libelle_type_procedure field */
    const LIBELLE_TYPE_PROCEDURE = 'TypeProcedure.libelle_type_procedure';

    /** the column name for the libelle_type_procedure_fr field */
    const LIBELLE_TYPE_PROCEDURE_FR = 'TypeProcedure.libelle_type_procedure_fr';

    /** the column name for the libelle_type_procedure_en field */
    const LIBELLE_TYPE_PROCEDURE_EN = 'TypeProcedure.libelle_type_procedure_en';

    /** the column name for the libelle_type_procedure_es field */
    const LIBELLE_TYPE_PROCEDURE_ES = 'TypeProcedure.libelle_type_procedure_es';

    /** the column name for the libelle_type_procedure_su field */
    const LIBELLE_TYPE_PROCEDURE_SU = 'TypeProcedure.libelle_type_procedure_su';

    /** the column name for the libelle_type_procedure_du field */
    const LIBELLE_TYPE_PROCEDURE_DU = 'TypeProcedure.libelle_type_procedure_du';

    /** the column name for the libelle_type_procedure_cz field */
    const LIBELLE_TYPE_PROCEDURE_CZ = 'TypeProcedure.libelle_type_procedure_cz';

    /** the column name for the libelle_type_procedure_ar field */
    const LIBELLE_TYPE_PROCEDURE_AR = 'TypeProcedure.libelle_type_procedure_ar';

    /** the column name for the abbreviation field */
    const ABBREVIATION = 'TypeProcedure.abbreviation';

    /** the column name for the type_boamp field */
    const TYPE_BOAMP = 'TypeProcedure.type_boamp';

    /** the column name for the categorie_procedure field */
    const CATEGORIE_PROCEDURE = 'TypeProcedure.categorie_procedure';

    /** the column name for the id_type_procedure_ANM field */
    const ID_TYPE_PROCEDURE_ANM = 'TypeProcedure.id_type_procedure_ANM';

    /** the column name for the delai_alerte field */
    const DELAI_ALERTE = 'TypeProcedure.delai_alerte';

    /** the column name for the mapa field */
    const MAPA = 'TypeProcedure.mapa';

    /** the column name for the consultation_transverse field */
    const CONSULTATION_TRANSVERSE = 'TypeProcedure.consultation_transverse';

    /** the column name for the code_recensement field */
    const CODE_RECENSEMENT = 'TypeProcedure.code_recensement';

    /** the column name for the abbreviation_portail_ANM field */
    const ABBREVIATION_PORTAIL_ANM = 'TypeProcedure.abbreviation_portail_ANM';

    /** the column name for the id_modele field */
    const ID_MODELE = 'TypeProcedure.id_modele';

    /** the column name for the libelle_type_procedure_it field */
    const LIBELLE_TYPE_PROCEDURE_IT = 'TypeProcedure.libelle_type_procedure_it';

    /** the column name for the affichage_caution field */
    const AFFICHAGE_CAUTION = 'TypeProcedure.affichage_caution';

    /** The enumerated values for the mapa field */
    const MAPA_0 = '0';
    const MAPA_1 = '1';

    /** The enumerated values for the consultation_transverse field */
    const CONSULTATION_TRANSVERSE_0 = '0';
    const CONSULTATION_TRANSVERSE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTypeProcedure objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTypeProcedure[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTypeProcedurePeer::$fieldNames[CommonTypeProcedurePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdTypeProcedure', 'LibelleTypeProcedure', 'LibelleTypeProcedureFr', 'LibelleTypeProcedureEn', 'LibelleTypeProcedureEs', 'LibelleTypeProcedureSu', 'LibelleTypeProcedureDu', 'LibelleTypeProcedureCz', 'LibelleTypeProcedureAr', 'Abbreviation', 'TypeBoamp', 'CategorieProcedure', 'IdTypeProcedureAnm', 'DelaiAlerte', 'Mapa', 'ConsultationTransverse', 'CodeRecensement', 'AbbreviationPortailAnm', 'IdModele', 'LibelleTypeProcedureIt', 'AffichageCaution', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idTypeProcedure', 'libelleTypeProcedure', 'libelleTypeProcedureFr', 'libelleTypeProcedureEn', 'libelleTypeProcedureEs', 'libelleTypeProcedureSu', 'libelleTypeProcedureDu', 'libelleTypeProcedureCz', 'libelleTypeProcedureAr', 'abbreviation', 'typeBoamp', 'categorieProcedure', 'idTypeProcedureAnm', 'delaiAlerte', 'mapa', 'consultationTransverse', 'codeRecensement', 'abbreviationPortailAnm', 'idModele', 'libelleTypeProcedureIt', 'affichageCaution', ),
        BasePeer::TYPE_COLNAME => array (CommonTypeProcedurePeer::ID_TYPE_PROCEDURE, CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE, CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_FR, CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_EN, CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_ES, CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_SU, CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_DU, CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_CZ, CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_AR, CommonTypeProcedurePeer::ABBREVIATION, CommonTypeProcedurePeer::TYPE_BOAMP, CommonTypeProcedurePeer::CATEGORIE_PROCEDURE, CommonTypeProcedurePeer::ID_TYPE_PROCEDURE_ANM, CommonTypeProcedurePeer::DELAI_ALERTE, CommonTypeProcedurePeer::MAPA, CommonTypeProcedurePeer::CONSULTATION_TRANSVERSE, CommonTypeProcedurePeer::CODE_RECENSEMENT, CommonTypeProcedurePeer::ABBREVIATION_PORTAIL_ANM, CommonTypeProcedurePeer::ID_MODELE, CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_IT, CommonTypeProcedurePeer::AFFICHAGE_CAUTION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_TYPE_PROCEDURE', 'LIBELLE_TYPE_PROCEDURE', 'LIBELLE_TYPE_PROCEDURE_FR', 'LIBELLE_TYPE_PROCEDURE_EN', 'LIBELLE_TYPE_PROCEDURE_ES', 'LIBELLE_TYPE_PROCEDURE_SU', 'LIBELLE_TYPE_PROCEDURE_DU', 'LIBELLE_TYPE_PROCEDURE_CZ', 'LIBELLE_TYPE_PROCEDURE_AR', 'ABBREVIATION', 'TYPE_BOAMP', 'CATEGORIE_PROCEDURE', 'ID_TYPE_PROCEDURE_ANM', 'DELAI_ALERTE', 'MAPA', 'CONSULTATION_TRANSVERSE', 'CODE_RECENSEMENT', 'ABBREVIATION_PORTAIL_ANM', 'ID_MODELE', 'LIBELLE_TYPE_PROCEDURE_IT', 'AFFICHAGE_CAUTION', ),
        BasePeer::TYPE_FIELDNAME => array ('id_type_procedure', 'libelle_type_procedure', 'libelle_type_procedure_fr', 'libelle_type_procedure_en', 'libelle_type_procedure_es', 'libelle_type_procedure_su', 'libelle_type_procedure_du', 'libelle_type_procedure_cz', 'libelle_type_procedure_ar', 'abbreviation', 'type_boamp', 'categorie_procedure', 'id_type_procedure_ANM', 'delai_alerte', 'mapa', 'consultation_transverse', 'code_recensement', 'abbreviation_portail_ANM', 'id_modele', 'libelle_type_procedure_it', 'affichage_caution', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTypeProcedurePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdTypeProcedure' => 0, 'LibelleTypeProcedure' => 1, 'LibelleTypeProcedureFr' => 2, 'LibelleTypeProcedureEn' => 3, 'LibelleTypeProcedureEs' => 4, 'LibelleTypeProcedureSu' => 5, 'LibelleTypeProcedureDu' => 6, 'LibelleTypeProcedureCz' => 7, 'LibelleTypeProcedureAr' => 8, 'Abbreviation' => 9, 'TypeBoamp' => 10, 'CategorieProcedure' => 11, 'IdTypeProcedureAnm' => 12, 'DelaiAlerte' => 13, 'Mapa' => 14, 'ConsultationTransverse' => 15, 'CodeRecensement' => 16, 'AbbreviationPortailAnm' => 17, 'IdModele' => 18, 'LibelleTypeProcedureIt' => 19, 'AffichageCaution' => 20, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idTypeProcedure' => 0, 'libelleTypeProcedure' => 1, 'libelleTypeProcedureFr' => 2, 'libelleTypeProcedureEn' => 3, 'libelleTypeProcedureEs' => 4, 'libelleTypeProcedureSu' => 5, 'libelleTypeProcedureDu' => 6, 'libelleTypeProcedureCz' => 7, 'libelleTypeProcedureAr' => 8, 'abbreviation' => 9, 'typeBoamp' => 10, 'categorieProcedure' => 11, 'idTypeProcedureAnm' => 12, 'delaiAlerte' => 13, 'mapa' => 14, 'consultationTransverse' => 15, 'codeRecensement' => 16, 'abbreviationPortailAnm' => 17, 'idModele' => 18, 'libelleTypeProcedureIt' => 19, 'affichageCaution' => 20, ),
        BasePeer::TYPE_COLNAME => array (CommonTypeProcedurePeer::ID_TYPE_PROCEDURE => 0, CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE => 1, CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_FR => 2, CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_EN => 3, CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_ES => 4, CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_SU => 5, CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_DU => 6, CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_CZ => 7, CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_AR => 8, CommonTypeProcedurePeer::ABBREVIATION => 9, CommonTypeProcedurePeer::TYPE_BOAMP => 10, CommonTypeProcedurePeer::CATEGORIE_PROCEDURE => 11, CommonTypeProcedurePeer::ID_TYPE_PROCEDURE_ANM => 12, CommonTypeProcedurePeer::DELAI_ALERTE => 13, CommonTypeProcedurePeer::MAPA => 14, CommonTypeProcedurePeer::CONSULTATION_TRANSVERSE => 15, CommonTypeProcedurePeer::CODE_RECENSEMENT => 16, CommonTypeProcedurePeer::ABBREVIATION_PORTAIL_ANM => 17, CommonTypeProcedurePeer::ID_MODELE => 18, CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_IT => 19, CommonTypeProcedurePeer::AFFICHAGE_CAUTION => 20, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_TYPE_PROCEDURE' => 0, 'LIBELLE_TYPE_PROCEDURE' => 1, 'LIBELLE_TYPE_PROCEDURE_FR' => 2, 'LIBELLE_TYPE_PROCEDURE_EN' => 3, 'LIBELLE_TYPE_PROCEDURE_ES' => 4, 'LIBELLE_TYPE_PROCEDURE_SU' => 5, 'LIBELLE_TYPE_PROCEDURE_DU' => 6, 'LIBELLE_TYPE_PROCEDURE_CZ' => 7, 'LIBELLE_TYPE_PROCEDURE_AR' => 8, 'ABBREVIATION' => 9, 'TYPE_BOAMP' => 10, 'CATEGORIE_PROCEDURE' => 11, 'ID_TYPE_PROCEDURE_ANM' => 12, 'DELAI_ALERTE' => 13, 'MAPA' => 14, 'CONSULTATION_TRANSVERSE' => 15, 'CODE_RECENSEMENT' => 16, 'ABBREVIATION_PORTAIL_ANM' => 17, 'ID_MODELE' => 18, 'LIBELLE_TYPE_PROCEDURE_IT' => 19, 'AFFICHAGE_CAUTION' => 20, ),
        BasePeer::TYPE_FIELDNAME => array ('id_type_procedure' => 0, 'libelle_type_procedure' => 1, 'libelle_type_procedure_fr' => 2, 'libelle_type_procedure_en' => 3, 'libelle_type_procedure_es' => 4, 'libelle_type_procedure_su' => 5, 'libelle_type_procedure_du' => 6, 'libelle_type_procedure_cz' => 7, 'libelle_type_procedure_ar' => 8, 'abbreviation' => 9, 'type_boamp' => 10, 'categorie_procedure' => 11, 'id_type_procedure_ANM' => 12, 'delai_alerte' => 13, 'mapa' => 14, 'consultation_transverse' => 15, 'code_recensement' => 16, 'abbreviation_portail_ANM' => 17, 'id_modele' => 18, 'libelle_type_procedure_it' => 19, 'affichage_caution' => 20, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonTypeProcedurePeer::MAPA => array(
            CommonTypeProcedurePeer::MAPA_0,
            CommonTypeProcedurePeer::MAPA_1,
        ),
        CommonTypeProcedurePeer::CONSULTATION_TRANSVERSE => array(
            CommonTypeProcedurePeer::CONSULTATION_TRANSVERSE_0,
            CommonTypeProcedurePeer::CONSULTATION_TRANSVERSE_1,
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
        $toNames = CommonTypeProcedurePeer::getFieldNames($toType);
        $key = isset(CommonTypeProcedurePeer::$fieldKeys[$fromType][$name]) ? CommonTypeProcedurePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTypeProcedurePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTypeProcedurePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTypeProcedurePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonTypeProcedurePeer::$enumValueSets;
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
        $valueSets = CommonTypeProcedurePeer::getValueSets();

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
        $values = CommonTypeProcedurePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonTypeProcedurePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTypeProcedurePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE);
            $criteria->addSelectColumn(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE);
            $criteria->addSelectColumn(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_FR);
            $criteria->addSelectColumn(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_EN);
            $criteria->addSelectColumn(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_ES);
            $criteria->addSelectColumn(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_SU);
            $criteria->addSelectColumn(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_DU);
            $criteria->addSelectColumn(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_CZ);
            $criteria->addSelectColumn(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_AR);
            $criteria->addSelectColumn(CommonTypeProcedurePeer::ABBREVIATION);
            $criteria->addSelectColumn(CommonTypeProcedurePeer::TYPE_BOAMP);
            $criteria->addSelectColumn(CommonTypeProcedurePeer::CATEGORIE_PROCEDURE);
            $criteria->addSelectColumn(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE_ANM);
            $criteria->addSelectColumn(CommonTypeProcedurePeer::DELAI_ALERTE);
            $criteria->addSelectColumn(CommonTypeProcedurePeer::MAPA);
            $criteria->addSelectColumn(CommonTypeProcedurePeer::CONSULTATION_TRANSVERSE);
            $criteria->addSelectColumn(CommonTypeProcedurePeer::CODE_RECENSEMENT);
            $criteria->addSelectColumn(CommonTypeProcedurePeer::ABBREVIATION_PORTAIL_ANM);
            $criteria->addSelectColumn(CommonTypeProcedurePeer::ID_MODELE);
            $criteria->addSelectColumn(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_IT);
            $criteria->addSelectColumn(CommonTypeProcedurePeer::AFFICHAGE_CAUTION);
        } else {
            $criteria->addSelectColumn($alias . '.id_type_procedure');
            $criteria->addSelectColumn($alias . '.libelle_type_procedure');
            $criteria->addSelectColumn($alias . '.libelle_type_procedure_fr');
            $criteria->addSelectColumn($alias . '.libelle_type_procedure_en');
            $criteria->addSelectColumn($alias . '.libelle_type_procedure_es');
            $criteria->addSelectColumn($alias . '.libelle_type_procedure_su');
            $criteria->addSelectColumn($alias . '.libelle_type_procedure_du');
            $criteria->addSelectColumn($alias . '.libelle_type_procedure_cz');
            $criteria->addSelectColumn($alias . '.libelle_type_procedure_ar');
            $criteria->addSelectColumn($alias . '.abbreviation');
            $criteria->addSelectColumn($alias . '.type_boamp');
            $criteria->addSelectColumn($alias . '.categorie_procedure');
            $criteria->addSelectColumn($alias . '.id_type_procedure_ANM');
            $criteria->addSelectColumn($alias . '.delai_alerte');
            $criteria->addSelectColumn($alias . '.mapa');
            $criteria->addSelectColumn($alias . '.consultation_transverse');
            $criteria->addSelectColumn($alias . '.code_recensement');
            $criteria->addSelectColumn($alias . '.abbreviation_portail_ANM');
            $criteria->addSelectColumn($alias . '.id_modele');
            $criteria->addSelectColumn($alias . '.libelle_type_procedure_it');
            $criteria->addSelectColumn($alias . '.affichage_caution');
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
        $criteria->setPrimaryTableName(CommonTypeProcedurePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTypeProcedurePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTypeProcedurePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTypeProcedurePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTypeProcedure
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTypeProcedurePeer::doSelect($critcopy, $con);
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
        return CommonTypeProcedurePeer::populateObjects(CommonTypeProcedurePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTypeProcedurePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTypeProcedurePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTypeProcedurePeer::DATABASE_NAME);

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
     * @param      CommonTypeProcedure $obj A CommonTypeProcedure object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdTypeProcedure();
            } // if key === null
            CommonTypeProcedurePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTypeProcedure object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTypeProcedure) {
                $key = (string) $value->getIdTypeProcedure();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTypeProcedure object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTypeProcedurePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTypeProcedure Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTypeProcedurePeer::$instances[$key])) {
                return CommonTypeProcedurePeer::$instances[$key];
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
        foreach (CommonTypeProcedurePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTypeProcedurePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to TypeProcedure
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
        $cls = CommonTypeProcedurePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTypeProcedurePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTypeProcedurePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTypeProcedurePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTypeProcedure object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTypeProcedurePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTypeProcedurePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTypeProcedurePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTypeProcedurePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTypeProcedurePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonTypeProcedurePeer::DATABASE_NAME)->getTable(CommonTypeProcedurePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTypeProcedurePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTypeProcedurePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTypeProcedureTableMap());
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
        return CommonTypeProcedurePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTypeProcedure or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTypeProcedure object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTypeProcedurePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTypeProcedure object
        }

        if ($criteria->containsKey(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE) && $criteria->keyContainsValue(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTypeProcedurePeer::ID_TYPE_PROCEDURE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTypeProcedurePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTypeProcedure or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTypeProcedure object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTypeProcedurePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTypeProcedurePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE);
            $value = $criteria->remove(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE);
            if ($value) {
                $selectCriteria->add(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTypeProcedurePeer::TABLE_NAME);
            }

        } else { // $values is CommonTypeProcedure object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTypeProcedurePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the TypeProcedure table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTypeProcedurePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTypeProcedurePeer::TABLE_NAME, $con, CommonTypeProcedurePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTypeProcedurePeer::clearInstancePool();
            CommonTypeProcedurePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTypeProcedure or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTypeProcedure object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTypeProcedurePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTypeProcedurePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTypeProcedure) { // it's a model object
            // invalidate the cache for this single object
            CommonTypeProcedurePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTypeProcedurePeer::DATABASE_NAME);
            $criteria->add(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonTypeProcedurePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTypeProcedurePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTypeProcedurePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTypeProcedure object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTypeProcedure $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTypeProcedurePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTypeProcedurePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTypeProcedurePeer::DATABASE_NAME, CommonTypeProcedurePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonTypeProcedure
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonTypeProcedurePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTypeProcedurePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonTypeProcedurePeer::DATABASE_NAME);
        $criteria->add(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE, $pk);

        $v = CommonTypeProcedurePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonTypeProcedure[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTypeProcedurePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonTypeProcedurePeer::DATABASE_NAME);
            $criteria->add(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE, $pks, Criteria::IN);
            $objs = CommonTypeProcedurePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonTypeProcedurePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTypeProcedurePeer::buildTableMap();

