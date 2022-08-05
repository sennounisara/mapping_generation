<?php


/**
 * Base static class for performing query and update operations on the 'questions_dce' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonQuestionsDcePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'questions_dce';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonQuestionsDce';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonQuestionsDceTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 30;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 30;

    /** the column name for the id field */
    const ID = 'questions_dce.id';

    /** the column name for the organisme field */
    const ORGANISME = 'questions_dce.organisme';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'questions_dce.consultation_ref';

    /** the column name for the date_depot field */
    const DATE_DEPOT = 'questions_dce.date_depot';

    /** the column name for the email field */
    const EMAIL = 'questions_dce.email';

    /** the column name for the nom field */
    const NOM = 'questions_dce.nom';

    /** the column name for the entreprise field */
    const ENTREPRISE = 'questions_dce.entreprise';

    /** the column name for the adresse field */
    const ADRESSE = 'questions_dce.adresse';

    /** the column name for the cp field */
    const CP = 'questions_dce.cp';

    /** the column name for the ville field */
    const VILLE = 'questions_dce.ville';

    /** the column name for the tel field */
    const TEL = 'questions_dce.tel';

    /** the column name for the fax field */
    const FAX = 'questions_dce.fax';

    /** the column name for the question field */
    const QUESTION = 'questions_dce.question';

    /** the column name for the statut field */
    const STATUT = 'questions_dce.statut';

    /** the column name for the date_reponse field */
    const DATE_REPONSE = 'questions_dce.date_reponse';

    /** the column name for the personne_repondu field */
    const PERSONNE_REPONDU = 'questions_dce.personne_repondu';

    /** the column name for the type_depot field */
    const TYPE_DEPOT = 'questions_dce.type_depot';

    /** the column name for the pays field */
    const PAYS = 'questions_dce.pays';

    /** the column name for the Observation field */
    const OBSERVATION = 'questions_dce.Observation';

    /** the column name for the siret field */
    const SIRET = 'questions_dce.siret';

    /** the column name for the identifiant_national field */
    const IDENTIFIANT_NATIONAL = 'questions_dce.identifiant_national';

    /** the column name for the acronyme_pays field */
    const ACRONYME_PAYS = 'questions_dce.acronyme_pays';

    /** the column name for the adresse2 field */
    const ADRESSE2 = 'questions_dce.adresse2';

    /** the column name for the id_fichier field */
    const ID_FICHIER = 'questions_dce.id_fichier';

    /** the column name for the nom_fichier field */
    const NOM_FICHIER = 'questions_dce.nom_fichier';

    /** the column name for the prenom field */
    const PRENOM = 'questions_dce.prenom';

    /** the column name for the siret_etranger field */
    const SIRET_ETRANGER = 'questions_dce.siret_etranger';

    /** the column name for the id_inscrit field */
    const ID_INSCRIT = 'questions_dce.id_inscrit';

    /** the column name for the id_entreprise field */
    const ID_ENTREPRISE = 'questions_dce.id_entreprise';

    /** the column name for the ifu field */
    const IFU = 'questions_dce.ifu';

    /** The enumerated values for the type_depot field */
    const TYPE_DEPOT_1 = '1';
    const TYPE_DEPOT_2 = '2';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonQuestionsDce objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonQuestionsDce[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonQuestionsDcePeer::$fieldNames[CommonQuestionsDcePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'ConsultationRef', 'DateDepot', 'Email', 'Nom', 'Entreprise', 'Adresse', 'Cp', 'Ville', 'Tel', 'Fax', 'Question', 'Statut', 'DateReponse', 'PersonneRepondu', 'TypeDepot', 'Pays', 'Observation', 'Siret', 'IdentifiantNational', 'AcronymePays', 'Adresse2', 'IdFichier', 'NomFichier', 'Prenom', 'SiretEtranger', 'IdInscrit', 'IdEntreprise', 'Ifu', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'consultationRef', 'dateDepot', 'email', 'nom', 'entreprise', 'adresse', 'cp', 'ville', 'tel', 'fax', 'question', 'statut', 'dateReponse', 'personneRepondu', 'typeDepot', 'pays', 'observation', 'siret', 'identifiantNational', 'acronymePays', 'adresse2', 'idFichier', 'nomFichier', 'prenom', 'siretEtranger', 'idInscrit', 'idEntreprise', 'ifu', ),
        BasePeer::TYPE_COLNAME => array (CommonQuestionsDcePeer::ID, CommonQuestionsDcePeer::ORGANISME, CommonQuestionsDcePeer::CONSULTATION_REF, CommonQuestionsDcePeer::DATE_DEPOT, CommonQuestionsDcePeer::EMAIL, CommonQuestionsDcePeer::NOM, CommonQuestionsDcePeer::ENTREPRISE, CommonQuestionsDcePeer::ADRESSE, CommonQuestionsDcePeer::CP, CommonQuestionsDcePeer::VILLE, CommonQuestionsDcePeer::TEL, CommonQuestionsDcePeer::FAX, CommonQuestionsDcePeer::QUESTION, CommonQuestionsDcePeer::STATUT, CommonQuestionsDcePeer::DATE_REPONSE, CommonQuestionsDcePeer::PERSONNE_REPONDU, CommonQuestionsDcePeer::TYPE_DEPOT, CommonQuestionsDcePeer::PAYS, CommonQuestionsDcePeer::OBSERVATION, CommonQuestionsDcePeer::SIRET, CommonQuestionsDcePeer::IDENTIFIANT_NATIONAL, CommonQuestionsDcePeer::ACRONYME_PAYS, CommonQuestionsDcePeer::ADRESSE2, CommonQuestionsDcePeer::ID_FICHIER, CommonQuestionsDcePeer::NOM_FICHIER, CommonQuestionsDcePeer::PRENOM, CommonQuestionsDcePeer::SIRET_ETRANGER, CommonQuestionsDcePeer::ID_INSCRIT, CommonQuestionsDcePeer::ID_ENTREPRISE, CommonQuestionsDcePeer::IFU, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'CONSULTATION_REF', 'DATE_DEPOT', 'EMAIL', 'NOM', 'ENTREPRISE', 'ADRESSE', 'CP', 'VILLE', 'TEL', 'FAX', 'QUESTION', 'STATUT', 'DATE_REPONSE', 'PERSONNE_REPONDU', 'TYPE_DEPOT', 'PAYS', 'OBSERVATION', 'SIRET', 'IDENTIFIANT_NATIONAL', 'ACRONYME_PAYS', 'ADRESSE2', 'ID_FICHIER', 'NOM_FICHIER', 'PRENOM', 'SIRET_ETRANGER', 'ID_INSCRIT', 'ID_ENTREPRISE', 'IFU', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'consultation_ref', 'date_depot', 'email', 'nom', 'entreprise', 'adresse', 'cp', 'ville', 'tel', 'fax', 'question', 'statut', 'date_reponse', 'personne_repondu', 'type_depot', 'pays', 'Observation', 'siret', 'identifiant_national', 'acronyme_pays', 'adresse2', 'id_fichier', 'nom_fichier', 'prenom', 'siret_etranger', 'id_inscrit', 'id_entreprise', 'ifu', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonQuestionsDcePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'ConsultationRef' => 2, 'DateDepot' => 3, 'Email' => 4, 'Nom' => 5, 'Entreprise' => 6, 'Adresse' => 7, 'Cp' => 8, 'Ville' => 9, 'Tel' => 10, 'Fax' => 11, 'Question' => 12, 'Statut' => 13, 'DateReponse' => 14, 'PersonneRepondu' => 15, 'TypeDepot' => 16, 'Pays' => 17, 'Observation' => 18, 'Siret' => 19, 'IdentifiantNational' => 20, 'AcronymePays' => 21, 'Adresse2' => 22, 'IdFichier' => 23, 'NomFichier' => 24, 'Prenom' => 25, 'SiretEtranger' => 26, 'IdInscrit' => 27, 'IdEntreprise' => 28, 'Ifu' => 29, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'consultationRef' => 2, 'dateDepot' => 3, 'email' => 4, 'nom' => 5, 'entreprise' => 6, 'adresse' => 7, 'cp' => 8, 'ville' => 9, 'tel' => 10, 'fax' => 11, 'question' => 12, 'statut' => 13, 'dateReponse' => 14, 'personneRepondu' => 15, 'typeDepot' => 16, 'pays' => 17, 'observation' => 18, 'siret' => 19, 'identifiantNational' => 20, 'acronymePays' => 21, 'adresse2' => 22, 'idFichier' => 23, 'nomFichier' => 24, 'prenom' => 25, 'siretEtranger' => 26, 'idInscrit' => 27, 'idEntreprise' => 28, 'ifu' => 29, ),
        BasePeer::TYPE_COLNAME => array (CommonQuestionsDcePeer::ID => 0, CommonQuestionsDcePeer::ORGANISME => 1, CommonQuestionsDcePeer::CONSULTATION_REF => 2, CommonQuestionsDcePeer::DATE_DEPOT => 3, CommonQuestionsDcePeer::EMAIL => 4, CommonQuestionsDcePeer::NOM => 5, CommonQuestionsDcePeer::ENTREPRISE => 6, CommonQuestionsDcePeer::ADRESSE => 7, CommonQuestionsDcePeer::CP => 8, CommonQuestionsDcePeer::VILLE => 9, CommonQuestionsDcePeer::TEL => 10, CommonQuestionsDcePeer::FAX => 11, CommonQuestionsDcePeer::QUESTION => 12, CommonQuestionsDcePeer::STATUT => 13, CommonQuestionsDcePeer::DATE_REPONSE => 14, CommonQuestionsDcePeer::PERSONNE_REPONDU => 15, CommonQuestionsDcePeer::TYPE_DEPOT => 16, CommonQuestionsDcePeer::PAYS => 17, CommonQuestionsDcePeer::OBSERVATION => 18, CommonQuestionsDcePeer::SIRET => 19, CommonQuestionsDcePeer::IDENTIFIANT_NATIONAL => 20, CommonQuestionsDcePeer::ACRONYME_PAYS => 21, CommonQuestionsDcePeer::ADRESSE2 => 22, CommonQuestionsDcePeer::ID_FICHIER => 23, CommonQuestionsDcePeer::NOM_FICHIER => 24, CommonQuestionsDcePeer::PRENOM => 25, CommonQuestionsDcePeer::SIRET_ETRANGER => 26, CommonQuestionsDcePeer::ID_INSCRIT => 27, CommonQuestionsDcePeer::ID_ENTREPRISE => 28, CommonQuestionsDcePeer::IFU => 29, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'CONSULTATION_REF' => 2, 'DATE_DEPOT' => 3, 'EMAIL' => 4, 'NOM' => 5, 'ENTREPRISE' => 6, 'ADRESSE' => 7, 'CP' => 8, 'VILLE' => 9, 'TEL' => 10, 'FAX' => 11, 'QUESTION' => 12, 'STATUT' => 13, 'DATE_REPONSE' => 14, 'PERSONNE_REPONDU' => 15, 'TYPE_DEPOT' => 16, 'PAYS' => 17, 'OBSERVATION' => 18, 'SIRET' => 19, 'IDENTIFIANT_NATIONAL' => 20, 'ACRONYME_PAYS' => 21, 'ADRESSE2' => 22, 'ID_FICHIER' => 23, 'NOM_FICHIER' => 24, 'PRENOM' => 25, 'SIRET_ETRANGER' => 26, 'ID_INSCRIT' => 27, 'ID_ENTREPRISE' => 28, 'IFU' => 29, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'consultation_ref' => 2, 'date_depot' => 3, 'email' => 4, 'nom' => 5, 'entreprise' => 6, 'adresse' => 7, 'cp' => 8, 'ville' => 9, 'tel' => 10, 'fax' => 11, 'question' => 12, 'statut' => 13, 'date_reponse' => 14, 'personne_repondu' => 15, 'type_depot' => 16, 'pays' => 17, 'Observation' => 18, 'siret' => 19, 'identifiant_national' => 20, 'acronyme_pays' => 21, 'adresse2' => 22, 'id_fichier' => 23, 'nom_fichier' => 24, 'prenom' => 25, 'siret_etranger' => 26, 'id_inscrit' => 27, 'id_entreprise' => 28, 'ifu' => 29, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonQuestionsDcePeer::TYPE_DEPOT => array(
            CommonQuestionsDcePeer::TYPE_DEPOT_1,
            CommonQuestionsDcePeer::TYPE_DEPOT_2,
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
        $toNames = CommonQuestionsDcePeer::getFieldNames($toType);
        $key = isset(CommonQuestionsDcePeer::$fieldKeys[$fromType][$name]) ? CommonQuestionsDcePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonQuestionsDcePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonQuestionsDcePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonQuestionsDcePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonQuestionsDcePeer::$enumValueSets;
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
        $valueSets = CommonQuestionsDcePeer::getValueSets();

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
        $values = CommonQuestionsDcePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonQuestionsDcePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonQuestionsDcePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonQuestionsDcePeer::ID);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::ORGANISME);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::DATE_DEPOT);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::EMAIL);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::NOM);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::ENTREPRISE);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::ADRESSE);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::CP);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::VILLE);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::TEL);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::FAX);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::QUESTION);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::STATUT);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::DATE_REPONSE);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::PERSONNE_REPONDU);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::TYPE_DEPOT);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::PAYS);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::OBSERVATION);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::SIRET);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::IDENTIFIANT_NATIONAL);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::ACRONYME_PAYS);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::ADRESSE2);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::ID_FICHIER);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::NOM_FICHIER);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::PRENOM);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::SIRET_ETRANGER);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::ID_INSCRIT);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::ID_ENTREPRISE);
            $criteria->addSelectColumn(CommonQuestionsDcePeer::IFU);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.date_depot');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.nom');
            $criteria->addSelectColumn($alias . '.entreprise');
            $criteria->addSelectColumn($alias . '.adresse');
            $criteria->addSelectColumn($alias . '.cp');
            $criteria->addSelectColumn($alias . '.ville');
            $criteria->addSelectColumn($alias . '.tel');
            $criteria->addSelectColumn($alias . '.fax');
            $criteria->addSelectColumn($alias . '.question');
            $criteria->addSelectColumn($alias . '.statut');
            $criteria->addSelectColumn($alias . '.date_reponse');
            $criteria->addSelectColumn($alias . '.personne_repondu');
            $criteria->addSelectColumn($alias . '.type_depot');
            $criteria->addSelectColumn($alias . '.pays');
            $criteria->addSelectColumn($alias . '.Observation');
            $criteria->addSelectColumn($alias . '.siret');
            $criteria->addSelectColumn($alias . '.identifiant_national');
            $criteria->addSelectColumn($alias . '.acronyme_pays');
            $criteria->addSelectColumn($alias . '.adresse2');
            $criteria->addSelectColumn($alias . '.id_fichier');
            $criteria->addSelectColumn($alias . '.nom_fichier');
            $criteria->addSelectColumn($alias . '.prenom');
            $criteria->addSelectColumn($alias . '.siret_etranger');
            $criteria->addSelectColumn($alias . '.id_inscrit');
            $criteria->addSelectColumn($alias . '.id_entreprise');
            $criteria->addSelectColumn($alias . '.ifu');
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
        $criteria->setPrimaryTableName(CommonQuestionsDcePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonQuestionsDcePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonQuestionsDcePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonQuestionsDcePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonQuestionsDce
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonQuestionsDcePeer::doSelect($critcopy, $con);
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
        return CommonQuestionsDcePeer::populateObjects(CommonQuestionsDcePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonQuestionsDcePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonQuestionsDcePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonQuestionsDcePeer::DATABASE_NAME);

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
     * @param      CommonQuestionsDce $obj A CommonQuestionsDce object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonQuestionsDcePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonQuestionsDce object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonQuestionsDce) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonQuestionsDce object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonQuestionsDcePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonQuestionsDce Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonQuestionsDcePeer::$instances[$key])) {
                return CommonQuestionsDcePeer::$instances[$key];
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
        foreach (CommonQuestionsDcePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonQuestionsDcePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to questions_dce
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

        return array((int) $row[$startcol], (string) $row[$startcol + 1]);
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
        $cls = CommonQuestionsDcePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonQuestionsDcePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonQuestionsDcePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonQuestionsDcePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonQuestionsDce object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonQuestionsDcePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonQuestionsDcePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonQuestionsDcePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonQuestionsDcePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonQuestionsDcePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonQuestionsDcePeer::DATABASE_NAME)->getTable(CommonQuestionsDcePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonQuestionsDcePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonQuestionsDcePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonQuestionsDceTableMap());
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
        return CommonQuestionsDcePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonQuestionsDce or Criteria object.
     *
     * @param      mixed $values Criteria or CommonQuestionsDce object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonQuestionsDcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonQuestionsDce object
        }

        if ($criteria->containsKey(CommonQuestionsDcePeer::ID) && $criteria->keyContainsValue(CommonQuestionsDcePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonQuestionsDcePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonQuestionsDcePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonQuestionsDce or Criteria object.
     *
     * @param      mixed $values Criteria or CommonQuestionsDce object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonQuestionsDcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonQuestionsDcePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonQuestionsDcePeer::ID);
            $value = $criteria->remove(CommonQuestionsDcePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonQuestionsDcePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonQuestionsDcePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonQuestionsDcePeer::ORGANISME);
            $value = $criteria->remove(CommonQuestionsDcePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonQuestionsDcePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonQuestionsDcePeer::TABLE_NAME);
            }

        } else { // $values is CommonQuestionsDce object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonQuestionsDcePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the questions_dce table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonQuestionsDcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonQuestionsDcePeer::TABLE_NAME, $con, CommonQuestionsDcePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonQuestionsDcePeer::clearInstancePool();
            CommonQuestionsDcePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonQuestionsDce or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonQuestionsDce object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonQuestionsDcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonQuestionsDcePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonQuestionsDce) { // it's a model object
            // invalidate the cache for this single object
            CommonQuestionsDcePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonQuestionsDcePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonQuestionsDcePeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonQuestionsDcePeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonQuestionsDcePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonQuestionsDcePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonQuestionsDcePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonQuestionsDce object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonQuestionsDce $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonQuestionsDcePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonQuestionsDcePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonQuestionsDcePeer::DATABASE_NAME, CommonQuestionsDcePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonQuestionsDce
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonQuestionsDcePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonQuestionsDcePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonQuestionsDcePeer::DATABASE_NAME);
        $criteria->add(CommonQuestionsDcePeer::ID, $id);
        $criteria->add(CommonQuestionsDcePeer::ORGANISME, $organisme);
        $v = CommonQuestionsDcePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonQuestionsDcePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonQuestionsDcePeer::buildTableMap();

