<?php


/**
 * Base static class for performing query and update operations on the 'Inscrit' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonInscritPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Inscrit';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonInscrit';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonInscritTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 31;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 31;

    /** the column name for the id field */
    const ID = 'Inscrit.id';

    /** the column name for the entreprise_id field */
    const ENTREPRISE_ID = 'Inscrit.entreprise_id';

    /** the column name for the login field */
    const LOGIN = 'Inscrit.login';

    /** the column name for the mdp field */
    const MDP = 'Inscrit.mdp';

    /** the column name for the num_cert field */
    const NUM_CERT = 'Inscrit.num_cert';

    /** the column name for the cert field */
    const CERT = 'Inscrit.cert';

    /** the column name for the civilite field */
    const CIVILITE = 'Inscrit.civilite';

    /** the column name for the nom field */
    const NOM = 'Inscrit.nom';

    /** the column name for the prenom field */
    const PRENOM = 'Inscrit.prenom';

    /** the column name for the adresse field */
    const ADRESSE = 'Inscrit.adresse';

    /** the column name for the codepostal field */
    const CODEPOSTAL = 'Inscrit.codepostal';

    /** the column name for the ville field */
    const VILLE = 'Inscrit.ville';

    /** the column name for the pays field */
    const PAYS = 'Inscrit.pays';

    /** the column name for the email field */
    const EMAIL = 'Inscrit.email';

    /** the column name for the telephone field */
    const TELEPHONE = 'Inscrit.telephone';

    /** the column name for the categorie field */
    const CATEGORIE = 'Inscrit.categorie';

    /** the column name for the motstitreresume field */
    const MOTSTITRERESUME = 'Inscrit.motstitreresume';

    /** the column name for the periode field */
    const PERIODE = 'Inscrit.periode';

    /** the column name for the siret field */
    const SIRET = 'Inscrit.siret';

    /** the column name for the fax field */
    const FAX = 'Inscrit.fax';

    /** the column name for the code_cpv field */
    const CODE_CPV = 'Inscrit.code_cpv';

    /** the column name for the id_langue field */
    const ID_LANGUE = 'Inscrit.id_langue';

    /** the column name for the profil field */
    const PROFIL = 'Inscrit.profil';

    /** the column name for the adresse2 field */
    const ADRESSE2 = 'Inscrit.adresse2';

    /** the column name for the bloque field */
    const BLOQUE = 'Inscrit.bloque';

    /** the column name for the id_initial field */
    const ID_INITIAL = 'Inscrit.id_initial';

    /** the column name for the inscrit_annuaire_defense field */
    const INSCRIT_ANNUAIRE_DEFENSE = 'Inscrit.inscrit_annuaire_defense';

    /** the column name for the date_creation field */
    const DATE_CREATION = 'Inscrit.date_creation';

    /** the column name for the date_modification field */
    const DATE_MODIFICATION = 'Inscrit.date_modification';

    /** the column name for the tentatives_mdp field */
    const TENTATIVES_MDP = 'Inscrit.tentatives_mdp';

    /** the column name for the uid field */
    const UID = 'Inscrit.uid';

    /** The enumerated values for the bloque field */
    const BLOQUE_0 = '0';
    const BLOQUE_1 = '1';

    /** The enumerated values for the inscrit_annuaire_defense field */
    const INSCRIT_ANNUAIRE_DEFENSE_0 = '0';
    const INSCRIT_ANNUAIRE_DEFENSE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonInscrit objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonInscrit[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonInscritPeer::$fieldNames[CommonInscritPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'EntrepriseId', 'Login', 'Mdp', 'NumCert', 'Cert', 'Civilite', 'Nom', 'Prenom', 'Adresse', 'Codepostal', 'Ville', 'Pays', 'Email', 'Telephone', 'Categorie', 'Motstitreresume', 'Periode', 'Siret', 'Fax', 'CodeCpv', 'IdLangue', 'Profil', 'Adresse2', 'Bloque', 'IdInitial', 'InscritAnnuaireDefense', 'DateCreation', 'DateModification', 'TentativesMdp', 'Uid', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'entrepriseId', 'login', 'mdp', 'numCert', 'cert', 'civilite', 'nom', 'prenom', 'adresse', 'codepostal', 'ville', 'pays', 'email', 'telephone', 'categorie', 'motstitreresume', 'periode', 'siret', 'fax', 'codeCpv', 'idLangue', 'profil', 'adresse2', 'bloque', 'idInitial', 'inscritAnnuaireDefense', 'dateCreation', 'dateModification', 'tentativesMdp', 'uid', ),
        BasePeer::TYPE_COLNAME => array (CommonInscritPeer::ID, CommonInscritPeer::ENTREPRISE_ID, CommonInscritPeer::LOGIN, CommonInscritPeer::MDP, CommonInscritPeer::NUM_CERT, CommonInscritPeer::CERT, CommonInscritPeer::CIVILITE, CommonInscritPeer::NOM, CommonInscritPeer::PRENOM, CommonInscritPeer::ADRESSE, CommonInscritPeer::CODEPOSTAL, CommonInscritPeer::VILLE, CommonInscritPeer::PAYS, CommonInscritPeer::EMAIL, CommonInscritPeer::TELEPHONE, CommonInscritPeer::CATEGORIE, CommonInscritPeer::MOTSTITRERESUME, CommonInscritPeer::PERIODE, CommonInscritPeer::SIRET, CommonInscritPeer::FAX, CommonInscritPeer::CODE_CPV, CommonInscritPeer::ID_LANGUE, CommonInscritPeer::PROFIL, CommonInscritPeer::ADRESSE2, CommonInscritPeer::BLOQUE, CommonInscritPeer::ID_INITIAL, CommonInscritPeer::INSCRIT_ANNUAIRE_DEFENSE, CommonInscritPeer::DATE_CREATION, CommonInscritPeer::DATE_MODIFICATION, CommonInscritPeer::TENTATIVES_MDP, CommonInscritPeer::UID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ENTREPRISE_ID', 'LOGIN', 'MDP', 'NUM_CERT', 'CERT', 'CIVILITE', 'NOM', 'PRENOM', 'ADRESSE', 'CODEPOSTAL', 'VILLE', 'PAYS', 'EMAIL', 'TELEPHONE', 'CATEGORIE', 'MOTSTITRERESUME', 'PERIODE', 'SIRET', 'FAX', 'CODE_CPV', 'ID_LANGUE', 'PROFIL', 'ADRESSE2', 'BLOQUE', 'ID_INITIAL', 'INSCRIT_ANNUAIRE_DEFENSE', 'DATE_CREATION', 'DATE_MODIFICATION', 'TENTATIVES_MDP', 'UID', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'entreprise_id', 'login', 'mdp', 'num_cert', 'cert', 'civilite', 'nom', 'prenom', 'adresse', 'codepostal', 'ville', 'pays', 'email', 'telephone', 'categorie', 'motstitreresume', 'periode', 'siret', 'fax', 'code_cpv', 'id_langue', 'profil', 'adresse2', 'bloque', 'id_initial', 'inscrit_annuaire_defense', 'date_creation', 'date_modification', 'tentatives_mdp', 'uid', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonInscritPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'EntrepriseId' => 1, 'Login' => 2, 'Mdp' => 3, 'NumCert' => 4, 'Cert' => 5, 'Civilite' => 6, 'Nom' => 7, 'Prenom' => 8, 'Adresse' => 9, 'Codepostal' => 10, 'Ville' => 11, 'Pays' => 12, 'Email' => 13, 'Telephone' => 14, 'Categorie' => 15, 'Motstitreresume' => 16, 'Periode' => 17, 'Siret' => 18, 'Fax' => 19, 'CodeCpv' => 20, 'IdLangue' => 21, 'Profil' => 22, 'Adresse2' => 23, 'Bloque' => 24, 'IdInitial' => 25, 'InscritAnnuaireDefense' => 26, 'DateCreation' => 27, 'DateModification' => 28, 'TentativesMdp' => 29, 'Uid' => 30, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'entrepriseId' => 1, 'login' => 2, 'mdp' => 3, 'numCert' => 4, 'cert' => 5, 'civilite' => 6, 'nom' => 7, 'prenom' => 8, 'adresse' => 9, 'codepostal' => 10, 'ville' => 11, 'pays' => 12, 'email' => 13, 'telephone' => 14, 'categorie' => 15, 'motstitreresume' => 16, 'periode' => 17, 'siret' => 18, 'fax' => 19, 'codeCpv' => 20, 'idLangue' => 21, 'profil' => 22, 'adresse2' => 23, 'bloque' => 24, 'idInitial' => 25, 'inscritAnnuaireDefense' => 26, 'dateCreation' => 27, 'dateModification' => 28, 'tentativesMdp' => 29, 'uid' => 30, ),
        BasePeer::TYPE_COLNAME => array (CommonInscritPeer::ID => 0, CommonInscritPeer::ENTREPRISE_ID => 1, CommonInscritPeer::LOGIN => 2, CommonInscritPeer::MDP => 3, CommonInscritPeer::NUM_CERT => 4, CommonInscritPeer::CERT => 5, CommonInscritPeer::CIVILITE => 6, CommonInscritPeer::NOM => 7, CommonInscritPeer::PRENOM => 8, CommonInscritPeer::ADRESSE => 9, CommonInscritPeer::CODEPOSTAL => 10, CommonInscritPeer::VILLE => 11, CommonInscritPeer::PAYS => 12, CommonInscritPeer::EMAIL => 13, CommonInscritPeer::TELEPHONE => 14, CommonInscritPeer::CATEGORIE => 15, CommonInscritPeer::MOTSTITRERESUME => 16, CommonInscritPeer::PERIODE => 17, CommonInscritPeer::SIRET => 18, CommonInscritPeer::FAX => 19, CommonInscritPeer::CODE_CPV => 20, CommonInscritPeer::ID_LANGUE => 21, CommonInscritPeer::PROFIL => 22, CommonInscritPeer::ADRESSE2 => 23, CommonInscritPeer::BLOQUE => 24, CommonInscritPeer::ID_INITIAL => 25, CommonInscritPeer::INSCRIT_ANNUAIRE_DEFENSE => 26, CommonInscritPeer::DATE_CREATION => 27, CommonInscritPeer::DATE_MODIFICATION => 28, CommonInscritPeer::TENTATIVES_MDP => 29, CommonInscritPeer::UID => 30, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ENTREPRISE_ID' => 1, 'LOGIN' => 2, 'MDP' => 3, 'NUM_CERT' => 4, 'CERT' => 5, 'CIVILITE' => 6, 'NOM' => 7, 'PRENOM' => 8, 'ADRESSE' => 9, 'CODEPOSTAL' => 10, 'VILLE' => 11, 'PAYS' => 12, 'EMAIL' => 13, 'TELEPHONE' => 14, 'CATEGORIE' => 15, 'MOTSTITRERESUME' => 16, 'PERIODE' => 17, 'SIRET' => 18, 'FAX' => 19, 'CODE_CPV' => 20, 'ID_LANGUE' => 21, 'PROFIL' => 22, 'ADRESSE2' => 23, 'BLOQUE' => 24, 'ID_INITIAL' => 25, 'INSCRIT_ANNUAIRE_DEFENSE' => 26, 'DATE_CREATION' => 27, 'DATE_MODIFICATION' => 28, 'TENTATIVES_MDP' => 29, 'UID' => 30, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'entreprise_id' => 1, 'login' => 2, 'mdp' => 3, 'num_cert' => 4, 'cert' => 5, 'civilite' => 6, 'nom' => 7, 'prenom' => 8, 'adresse' => 9, 'codepostal' => 10, 'ville' => 11, 'pays' => 12, 'email' => 13, 'telephone' => 14, 'categorie' => 15, 'motstitreresume' => 16, 'periode' => 17, 'siret' => 18, 'fax' => 19, 'code_cpv' => 20, 'id_langue' => 21, 'profil' => 22, 'adresse2' => 23, 'bloque' => 24, 'id_initial' => 25, 'inscrit_annuaire_defense' => 26, 'date_creation' => 27, 'date_modification' => 28, 'tentatives_mdp' => 29, 'uid' => 30, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonInscritPeer::BLOQUE => array(
            CommonInscritPeer::BLOQUE_0,
            CommonInscritPeer::BLOQUE_1,
        ),
        CommonInscritPeer::INSCRIT_ANNUAIRE_DEFENSE => array(
            CommonInscritPeer::INSCRIT_ANNUAIRE_DEFENSE_0,
            CommonInscritPeer::INSCRIT_ANNUAIRE_DEFENSE_1,
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
        $toNames = CommonInscritPeer::getFieldNames($toType);
        $key = isset(CommonInscritPeer::$fieldKeys[$fromType][$name]) ? CommonInscritPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonInscritPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonInscritPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonInscritPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonInscritPeer::$enumValueSets;
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
        $valueSets = CommonInscritPeer::getValueSets();

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
        $values = CommonInscritPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonInscritPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonInscritPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonInscritPeer::ID);
            $criteria->addSelectColumn(CommonInscritPeer::ENTREPRISE_ID);
            $criteria->addSelectColumn(CommonInscritPeer::LOGIN);
            $criteria->addSelectColumn(CommonInscritPeer::MDP);
            $criteria->addSelectColumn(CommonInscritPeer::NUM_CERT);
            $criteria->addSelectColumn(CommonInscritPeer::CERT);
            $criteria->addSelectColumn(CommonInscritPeer::CIVILITE);
            $criteria->addSelectColumn(CommonInscritPeer::NOM);
            $criteria->addSelectColumn(CommonInscritPeer::PRENOM);
            $criteria->addSelectColumn(CommonInscritPeer::ADRESSE);
            $criteria->addSelectColumn(CommonInscritPeer::CODEPOSTAL);
            $criteria->addSelectColumn(CommonInscritPeer::VILLE);
            $criteria->addSelectColumn(CommonInscritPeer::PAYS);
            $criteria->addSelectColumn(CommonInscritPeer::EMAIL);
            $criteria->addSelectColumn(CommonInscritPeer::TELEPHONE);
            $criteria->addSelectColumn(CommonInscritPeer::CATEGORIE);
            $criteria->addSelectColumn(CommonInscritPeer::MOTSTITRERESUME);
            $criteria->addSelectColumn(CommonInscritPeer::PERIODE);
            $criteria->addSelectColumn(CommonInscritPeer::SIRET);
            $criteria->addSelectColumn(CommonInscritPeer::FAX);
            $criteria->addSelectColumn(CommonInscritPeer::CODE_CPV);
            $criteria->addSelectColumn(CommonInscritPeer::ID_LANGUE);
            $criteria->addSelectColumn(CommonInscritPeer::PROFIL);
            $criteria->addSelectColumn(CommonInscritPeer::ADRESSE2);
            $criteria->addSelectColumn(CommonInscritPeer::BLOQUE);
            $criteria->addSelectColumn(CommonInscritPeer::ID_INITIAL);
            $criteria->addSelectColumn(CommonInscritPeer::INSCRIT_ANNUAIRE_DEFENSE);
            $criteria->addSelectColumn(CommonInscritPeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonInscritPeer::DATE_MODIFICATION);
            $criteria->addSelectColumn(CommonInscritPeer::TENTATIVES_MDP);
            $criteria->addSelectColumn(CommonInscritPeer::UID);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.entreprise_id');
            $criteria->addSelectColumn($alias . '.login');
            $criteria->addSelectColumn($alias . '.mdp');
            $criteria->addSelectColumn($alias . '.num_cert');
            $criteria->addSelectColumn($alias . '.cert');
            $criteria->addSelectColumn($alias . '.civilite');
            $criteria->addSelectColumn($alias . '.nom');
            $criteria->addSelectColumn($alias . '.prenom');
            $criteria->addSelectColumn($alias . '.adresse');
            $criteria->addSelectColumn($alias . '.codepostal');
            $criteria->addSelectColumn($alias . '.ville');
            $criteria->addSelectColumn($alias . '.pays');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.telephone');
            $criteria->addSelectColumn($alias . '.categorie');
            $criteria->addSelectColumn($alias . '.motstitreresume');
            $criteria->addSelectColumn($alias . '.periode');
            $criteria->addSelectColumn($alias . '.siret');
            $criteria->addSelectColumn($alias . '.fax');
            $criteria->addSelectColumn($alias . '.code_cpv');
            $criteria->addSelectColumn($alias . '.id_langue');
            $criteria->addSelectColumn($alias . '.profil');
            $criteria->addSelectColumn($alias . '.adresse2');
            $criteria->addSelectColumn($alias . '.bloque');
            $criteria->addSelectColumn($alias . '.id_initial');
            $criteria->addSelectColumn($alias . '.inscrit_annuaire_defense');
            $criteria->addSelectColumn($alias . '.date_creation');
            $criteria->addSelectColumn($alias . '.date_modification');
            $criteria->addSelectColumn($alias . '.tentatives_mdp');
            $criteria->addSelectColumn($alias . '.uid');
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
        $criteria->setPrimaryTableName(CommonInscritPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonInscritPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonInscritPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonInscritPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonInscrit
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonInscritPeer::doSelect($critcopy, $con);
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
        return CommonInscritPeer::populateObjects(CommonInscritPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonInscritPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonInscritPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonInscritPeer::DATABASE_NAME);

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
     * @param      CommonInscrit $obj A CommonInscrit object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getEntrepriseId()));
            } // if key === null
            CommonInscritPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonInscrit object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonInscrit) {
                $key = serialize(array((string) $value->getId(), (string) $value->getEntrepriseId()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonInscrit object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonInscritPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonInscrit Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonInscritPeer::$instances[$key])) {
                return CommonInscritPeer::$instances[$key];
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
        foreach (CommonInscritPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonInscritPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Inscrit
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in CommonCertificatsEntreprisesPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonCertificatsEntreprisesPeer::clearInstancePool();
        // Invalidate objects in CommonInscritSubPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonInscritSubPeer::clearInstancePool();
        // Invalidate objects in CommonPanierEntreprisePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonPanierEntreprisePeer::clearInstancePool();
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
        if ($row[$startcol] === null && $row[$startcol + 1] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1]));
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

        return array((int) $row[$startcol], (int) $row[$startcol + 1]);
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
        $cls = CommonInscritPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonInscritPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonInscritPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonInscritPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonInscrit object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonInscritPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonInscritPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonInscritPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonInscritPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonInscritPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonEntreprise table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonEntreprise(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonInscritPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonInscritPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonInscritPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonInscritPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonInscritPeer::ENTREPRISE_ID, CommonEntreprisePeer::ID, $join_behavior);

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
     * Selects a collection of CommonInscrit objects pre-filled with their CommonEntreprise objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonInscrit objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonEntreprise(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonInscritPeer::DATABASE_NAME);
        }

        CommonInscritPeer::addSelectColumns($criteria);
        $startcol = CommonInscritPeer::NUM_HYDRATE_COLUMNS;
        CommonEntreprisePeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonInscritPeer::ENTREPRISE_ID, CommonEntreprisePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonInscritPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonInscritPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonInscritPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonInscritPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonEntreprisePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonEntreprisePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonEntreprisePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonEntreprisePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonInscrit) to $obj2 (CommonEntreprise)
                $obj2->addCommonInscrit($obj1);

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
        $criteria->setPrimaryTableName(CommonInscritPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonInscritPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonInscritPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonInscritPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonInscritPeer::ENTREPRISE_ID, CommonEntreprisePeer::ID, $join_behavior);

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
     * Selects a collection of CommonInscrit objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonInscrit objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonInscritPeer::DATABASE_NAME);
        }

        CommonInscritPeer::addSelectColumns($criteria);
        $startcol2 = CommonInscritPeer::NUM_HYDRATE_COLUMNS;

        CommonEntreprisePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonEntreprisePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonInscritPeer::ENTREPRISE_ID, CommonEntreprisePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonInscritPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonInscritPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonInscritPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonInscritPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonEntreprise rows

            $key2 = CommonEntreprisePeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonEntreprisePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonEntreprisePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonEntreprisePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonInscrit) to the collection in $obj2 (CommonEntreprise)
                $obj2->addCommonInscrit($obj1);
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
        return Propel::getDatabaseMap(CommonInscritPeer::DATABASE_NAME)->getTable(CommonInscritPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonInscritPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonInscritPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonInscritTableMap());
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
        return CommonInscritPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonInscrit or Criteria object.
     *
     * @param      mixed $values Criteria or CommonInscrit object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonInscritPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonInscrit object
        }

        if ($criteria->containsKey(CommonInscritPeer::ID) && $criteria->keyContainsValue(CommonInscritPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonInscritPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonInscritPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonInscrit or Criteria object.
     *
     * @param      mixed $values Criteria or CommonInscrit object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonInscritPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonInscritPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonInscritPeer::ID);
            $value = $criteria->remove(CommonInscritPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonInscritPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonInscritPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonInscritPeer::ENTREPRISE_ID);
            $value = $criteria->remove(CommonInscritPeer::ENTREPRISE_ID);
            if ($value) {
                $selectCriteria->add(CommonInscritPeer::ENTREPRISE_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonInscritPeer::TABLE_NAME);
            }

        } else { // $values is CommonInscrit object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonInscritPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Inscrit table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonInscritPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += CommonInscritPeer::doOnDeleteCascade(new Criteria(CommonInscritPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(CommonInscritPeer::TABLE_NAME, $con, CommonInscritPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonInscritPeer::clearInstancePool();
            CommonInscritPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonInscrit or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonInscrit object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonInscritPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonInscrit) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonInscritPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonInscritPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonInscritPeer::ENTREPRISE_ID, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonInscritPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += CommonInscritPeer::doOnDeleteCascade($c, $con);
            
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                CommonInscritPeer::clearInstancePool();
            } elseif ($values instanceof CommonInscrit) { // it's a model object
                CommonInscritPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    CommonInscritPeer::removeInstanceFromPool($singleval);
                }
            }
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonInscritPeer::clearRelatedInstancePool();
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
        $objects = CommonInscritPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related CommonCertificatsEntreprises objects
            $criteria = new Criteria(CommonCertificatsEntreprisesPeer::DATABASE_NAME);
            
            $criteria->add(CommonCertificatsEntreprisesPeer::ID_INSCRIT, $obj->getId());
            $affectedRows += CommonCertificatsEntreprisesPeer::doDelete($criteria, $con);

            // delete related CommonInscritSub objects
            $criteria = new Criteria(CommonInscritSubPeer::DATABASE_NAME);
            
            $criteria->add(CommonInscritSubPeer::ID_INSCRIT, $obj->getId());
            $affectedRows += CommonInscritSubPeer::doDelete($criteria, $con);

            // delete related CommonPanierEntreprise objects
            $criteria = new Criteria(CommonPanierEntreprisePeer::DATABASE_NAME);
            
            $criteria->add(CommonPanierEntreprisePeer::ID_INSCRIT, $obj->getId());
            $affectedRows += CommonPanierEntreprisePeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given CommonInscrit object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonInscrit $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonInscritPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonInscritPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonInscritPeer::DATABASE_NAME, CommonInscritPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   int $entreprise_id
     * @param      PropelPDO $con
     * @return   CommonInscrit
     */
    public static function retrieveByPK($id, $entreprise_id, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $entreprise_id));
         if (null !== ($obj = CommonInscritPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonInscritPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonInscritPeer::DATABASE_NAME);
        $criteria->add(CommonInscritPeer::ID, $id);
        $criteria->add(CommonInscritPeer::ENTREPRISE_ID, $entreprise_id);
        $v = CommonInscritPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonInscritPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonInscritPeer::buildTableMap();

