<?php


/**
 * Base static class for performing query and update operations on the 't_signature_piece_jointe' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseTSignaturePieceJointePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'lt_parapheur';

    /** the table name for this class */
    const TABLE_NAME = 't_signature_piece_jointe';

    /** the related Propel class for this table */
    const OM_CLASS = 'TSignaturePieceJointe';

    /** the related TableMap class for this table */
    const TM_CLASS = 'TSignaturePieceJointeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 21;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 21;

    /** the column name for the ID field */
    const ID = 't_signature_piece_jointe.ID';

    /** the column name for the ID_BLOB field */
    const ID_BLOB = 't_signature_piece_jointe.ID_BLOB';

    /** the column name for the REVISION field */
    const REVISION = 't_signature_piece_jointe.REVISION';

    /** the column name for the ID_DEMANDE field */
    const ID_DEMANDE = 't_signature_piece_jointe.ID_DEMANDE';

    /** the column name for the ID_HISTORIQUE field */
    const ID_HISTORIQUE = 't_signature_piece_jointe.ID_HISTORIQUE';

    /** the column name for the DATE_SIGNATURE field */
    const DATE_SIGNATURE = 't_signature_piece_jointe.DATE_SIGNATURE';

    /** the column name for the EMETTEUR field */
    const EMETTEUR = 't_signature_piece_jointe.EMETTEUR';

    /** the column name for the SIGNATAIRE field */
    const SIGNATAIRE = 't_signature_piece_jointe.SIGNATAIRE';

    /** the column name for the REVOQUE field */
    const REVOQUE = 't_signature_piece_jointe.REVOQUE';

    /** the column name for the CHAINE_VALIDE field */
    const CHAINE_VALIDE = 't_signature_piece_jointe.CHAINE_VALIDE';

    /** the column name for the DATE_DEB_PERIODE_VALIDITE field */
    const DATE_DEB_PERIODE_VALIDITE = 't_signature_piece_jointe.DATE_DEB_PERIODE_VALIDITE';

    /** the column name for the DATE_FIN_PERIODE_VALIDITE field */
    const DATE_FIN_PERIODE_VALIDITE = 't_signature_piece_jointe.DATE_FIN_PERIODE_VALIDITE';

    /** the column name for the SIGNATURE_VALIDE field */
    const SIGNATURE_VALIDE = 't_signature_piece_jointe.SIGNATURE_VALIDE';

    /** the column name for the FROM_DEMANDEUR field */
    const FROM_DEMANDEUR = 't_signature_piece_jointe.FROM_DEMANDEUR';

    /** the column name for the TYPE_SIGNATURE field */
    const TYPE_SIGNATURE = 't_signature_piece_jointe.TYPE_SIGNATURE';

    /** the column name for the XML_SIGNATURE field */
    const XML_SIGNATURE = 't_signature_piece_jointe.XML_SIGNATURE';

    /** the column name for the NOM_FICHIER field */
    const NOM_FICHIER = 't_signature_piece_jointe.NOM_FICHIER';

    /** the column name for the hash field */
    const HASH = 't_signature_piece_jointe.hash';

    /** the column name for the algorithme_hash field */
    const ALGORITHME_HASH = 't_signature_piece_jointe.algorithme_hash';

    /** the column name for the DATE_DERNIERE_VERIFICATION field */
    const DATE_DERNIERE_VERIFICATION = 't_signature_piece_jointe.DATE_DERNIERE_VERIFICATION';

    /** the column name for the SIGNATURE_ELECTRONIQUE field */
    const SIGNATURE_ELECTRONIQUE = 't_signature_piece_jointe.SIGNATURE_ELECTRONIQUE';

    /** The enumerated values for the REVOQUE field */
    const REVOQUE_0 = '0';
    const REVOQUE_1 = '1';
    const REVOQUE_2 = '2';

    /** The enumerated values for the CHAINE_VALIDE field */
    const CHAINE_VALIDE_0 = '0';
    const CHAINE_VALIDE_1 = '1';
    const CHAINE_VALIDE_2 = '2';

    /** The enumerated values for the SIGNATURE_VALIDE field */
    const SIGNATURE_VALIDE_0 = '0';
    const SIGNATURE_VALIDE_1 = '1';
    const SIGNATURE_VALIDE_2 = '2';
    const SIGNATURE_VALIDE_5 = '5';

    /** The enumerated values for the FROM_DEMANDEUR field */
    const FROM_DEMANDEUR_0 = '0';
    const FROM_DEMANDEUR_1 = '1';

    /** The enumerated values for the TYPE_SIGNATURE field */
    const TYPE_SIGNATURE_1 = '1';
    const TYPE_SIGNATURE_2 = '2';

    /** The enumerated values for the SIGNATURE_ELECTRONIQUE field */
    const SIGNATURE_ELECTRONIQUE_0 = '0';
    const SIGNATURE_ELECTRONIQUE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of TSignaturePieceJointe objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array TSignaturePieceJointe[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. TSignaturePieceJointePeer::$fieldNames[TSignaturePieceJointePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdBlob', 'Revision', 'IdDemande', 'IdHistorique', 'DateSignature', 'Emetteur', 'Signataire', 'Revoque', 'ChaineValide', 'DateDebPeriodeValidite', 'DateFinPeriodeValidite', 'SignatureValide', 'FromDemandeur', 'TypeSignature', 'XmlSignature', 'NomFichier', 'Hash', 'AlgorithmeHash', 'DateDerniereVerification', 'SignatureElectronique', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idBlob', 'revision', 'idDemande', 'idHistorique', 'dateSignature', 'emetteur', 'signataire', 'revoque', 'chaineValide', 'dateDebPeriodeValidite', 'dateFinPeriodeValidite', 'signatureValide', 'fromDemandeur', 'typeSignature', 'xmlSignature', 'nomFichier', 'hash', 'algorithmeHash', 'dateDerniereVerification', 'signatureElectronique', ),
        BasePeer::TYPE_COLNAME => array (TSignaturePieceJointePeer::ID, TSignaturePieceJointePeer::ID_BLOB, TSignaturePieceJointePeer::REVISION, TSignaturePieceJointePeer::ID_DEMANDE, TSignaturePieceJointePeer::ID_HISTORIQUE, TSignaturePieceJointePeer::DATE_SIGNATURE, TSignaturePieceJointePeer::EMETTEUR, TSignaturePieceJointePeer::SIGNATAIRE, TSignaturePieceJointePeer::REVOQUE, TSignaturePieceJointePeer::CHAINE_VALIDE, TSignaturePieceJointePeer::DATE_DEB_PERIODE_VALIDITE, TSignaturePieceJointePeer::DATE_FIN_PERIODE_VALIDITE, TSignaturePieceJointePeer::SIGNATURE_VALIDE, TSignaturePieceJointePeer::FROM_DEMANDEUR, TSignaturePieceJointePeer::TYPE_SIGNATURE, TSignaturePieceJointePeer::XML_SIGNATURE, TSignaturePieceJointePeer::NOM_FICHIER, TSignaturePieceJointePeer::HASH, TSignaturePieceJointePeer::ALGORITHME_HASH, TSignaturePieceJointePeer::DATE_DERNIERE_VERIFICATION, TSignaturePieceJointePeer::SIGNATURE_ELECTRONIQUE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_BLOB', 'REVISION', 'ID_DEMANDE', 'ID_HISTORIQUE', 'DATE_SIGNATURE', 'EMETTEUR', 'SIGNATAIRE', 'REVOQUE', 'CHAINE_VALIDE', 'DATE_DEB_PERIODE_VALIDITE', 'DATE_FIN_PERIODE_VALIDITE', 'SIGNATURE_VALIDE', 'FROM_DEMANDEUR', 'TYPE_SIGNATURE', 'XML_SIGNATURE', 'NOM_FICHIER', 'HASH', 'ALGORITHME_HASH', 'DATE_DERNIERE_VERIFICATION', 'SIGNATURE_ELECTRONIQUE', ),
        BasePeer::TYPE_FIELDNAME => array ('ID', 'ID_BLOB', 'REVISION', 'ID_DEMANDE', 'ID_HISTORIQUE', 'DATE_SIGNATURE', 'EMETTEUR', 'SIGNATAIRE', 'REVOQUE', 'CHAINE_VALIDE', 'DATE_DEB_PERIODE_VALIDITE', 'DATE_FIN_PERIODE_VALIDITE', 'SIGNATURE_VALIDE', 'FROM_DEMANDEUR', 'TYPE_SIGNATURE', 'XML_SIGNATURE', 'NOM_FICHIER', 'hash', 'algorithme_hash', 'DATE_DERNIERE_VERIFICATION', 'SIGNATURE_ELECTRONIQUE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. TSignaturePieceJointePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdBlob' => 1, 'Revision' => 2, 'IdDemande' => 3, 'IdHistorique' => 4, 'DateSignature' => 5, 'Emetteur' => 6, 'Signataire' => 7, 'Revoque' => 8, 'ChaineValide' => 9, 'DateDebPeriodeValidite' => 10, 'DateFinPeriodeValidite' => 11, 'SignatureValide' => 12, 'FromDemandeur' => 13, 'TypeSignature' => 14, 'XmlSignature' => 15, 'NomFichier' => 16, 'Hash' => 17, 'AlgorithmeHash' => 18, 'DateDerniereVerification' => 19, 'SignatureElectronique' => 20, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idBlob' => 1, 'revision' => 2, 'idDemande' => 3, 'idHistorique' => 4, 'dateSignature' => 5, 'emetteur' => 6, 'signataire' => 7, 'revoque' => 8, 'chaineValide' => 9, 'dateDebPeriodeValidite' => 10, 'dateFinPeriodeValidite' => 11, 'signatureValide' => 12, 'fromDemandeur' => 13, 'typeSignature' => 14, 'xmlSignature' => 15, 'nomFichier' => 16, 'hash' => 17, 'algorithmeHash' => 18, 'dateDerniereVerification' => 19, 'signatureElectronique' => 20, ),
        BasePeer::TYPE_COLNAME => array (TSignaturePieceJointePeer::ID => 0, TSignaturePieceJointePeer::ID_BLOB => 1, TSignaturePieceJointePeer::REVISION => 2, TSignaturePieceJointePeer::ID_DEMANDE => 3, TSignaturePieceJointePeer::ID_HISTORIQUE => 4, TSignaturePieceJointePeer::DATE_SIGNATURE => 5, TSignaturePieceJointePeer::EMETTEUR => 6, TSignaturePieceJointePeer::SIGNATAIRE => 7, TSignaturePieceJointePeer::REVOQUE => 8, TSignaturePieceJointePeer::CHAINE_VALIDE => 9, TSignaturePieceJointePeer::DATE_DEB_PERIODE_VALIDITE => 10, TSignaturePieceJointePeer::DATE_FIN_PERIODE_VALIDITE => 11, TSignaturePieceJointePeer::SIGNATURE_VALIDE => 12, TSignaturePieceJointePeer::FROM_DEMANDEUR => 13, TSignaturePieceJointePeer::TYPE_SIGNATURE => 14, TSignaturePieceJointePeer::XML_SIGNATURE => 15, TSignaturePieceJointePeer::NOM_FICHIER => 16, TSignaturePieceJointePeer::HASH => 17, TSignaturePieceJointePeer::ALGORITHME_HASH => 18, TSignaturePieceJointePeer::DATE_DERNIERE_VERIFICATION => 19, TSignaturePieceJointePeer::SIGNATURE_ELECTRONIQUE => 20, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_BLOB' => 1, 'REVISION' => 2, 'ID_DEMANDE' => 3, 'ID_HISTORIQUE' => 4, 'DATE_SIGNATURE' => 5, 'EMETTEUR' => 6, 'SIGNATAIRE' => 7, 'REVOQUE' => 8, 'CHAINE_VALIDE' => 9, 'DATE_DEB_PERIODE_VALIDITE' => 10, 'DATE_FIN_PERIODE_VALIDITE' => 11, 'SIGNATURE_VALIDE' => 12, 'FROM_DEMANDEUR' => 13, 'TYPE_SIGNATURE' => 14, 'XML_SIGNATURE' => 15, 'NOM_FICHIER' => 16, 'HASH' => 17, 'ALGORITHME_HASH' => 18, 'DATE_DERNIERE_VERIFICATION' => 19, 'SIGNATURE_ELECTRONIQUE' => 20, ),
        BasePeer::TYPE_FIELDNAME => array ('ID' => 0, 'ID_BLOB' => 1, 'REVISION' => 2, 'ID_DEMANDE' => 3, 'ID_HISTORIQUE' => 4, 'DATE_SIGNATURE' => 5, 'EMETTEUR' => 6, 'SIGNATAIRE' => 7, 'REVOQUE' => 8, 'CHAINE_VALIDE' => 9, 'DATE_DEB_PERIODE_VALIDITE' => 10, 'DATE_FIN_PERIODE_VALIDITE' => 11, 'SIGNATURE_VALIDE' => 12, 'FROM_DEMANDEUR' => 13, 'TYPE_SIGNATURE' => 14, 'XML_SIGNATURE' => 15, 'NOM_FICHIER' => 16, 'hash' => 17, 'algorithme_hash' => 18, 'DATE_DERNIERE_VERIFICATION' => 19, 'SIGNATURE_ELECTRONIQUE' => 20, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        TSignaturePieceJointePeer::REVOQUE => array(
            TSignaturePieceJointePeer::REVOQUE_0,
            TSignaturePieceJointePeer::REVOQUE_1,
            TSignaturePieceJointePeer::REVOQUE_2,
        ),
        TSignaturePieceJointePeer::CHAINE_VALIDE => array(
            TSignaturePieceJointePeer::CHAINE_VALIDE_0,
            TSignaturePieceJointePeer::CHAINE_VALIDE_1,
            TSignaturePieceJointePeer::CHAINE_VALIDE_2,
        ),
        TSignaturePieceJointePeer::SIGNATURE_VALIDE => array(
            TSignaturePieceJointePeer::SIGNATURE_VALIDE_0,
            TSignaturePieceJointePeer::SIGNATURE_VALIDE_1,
            TSignaturePieceJointePeer::SIGNATURE_VALIDE_2,
            TSignaturePieceJointePeer::SIGNATURE_VALIDE_5,
        ),
        TSignaturePieceJointePeer::FROM_DEMANDEUR => array(
            TSignaturePieceJointePeer::FROM_DEMANDEUR_0,
            TSignaturePieceJointePeer::FROM_DEMANDEUR_1,
        ),
        TSignaturePieceJointePeer::TYPE_SIGNATURE => array(
            TSignaturePieceJointePeer::TYPE_SIGNATURE_1,
            TSignaturePieceJointePeer::TYPE_SIGNATURE_2,
        ),
        TSignaturePieceJointePeer::SIGNATURE_ELECTRONIQUE => array(
            TSignaturePieceJointePeer::SIGNATURE_ELECTRONIQUE_0,
            TSignaturePieceJointePeer::SIGNATURE_ELECTRONIQUE_1,
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
        $toNames = TSignaturePieceJointePeer::getFieldNames($toType);
        $key = isset(TSignaturePieceJointePeer::$fieldKeys[$fromType][$name]) ? TSignaturePieceJointePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(TSignaturePieceJointePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, TSignaturePieceJointePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return TSignaturePieceJointePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return TSignaturePieceJointePeer::$enumValueSets;
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
        $valueSets = TSignaturePieceJointePeer::getValueSets();

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
        $values = TSignaturePieceJointePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. TSignaturePieceJointePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(TSignaturePieceJointePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(TSignaturePieceJointePeer::ID);
            $criteria->addSelectColumn(TSignaturePieceJointePeer::ID_BLOB);
            $criteria->addSelectColumn(TSignaturePieceJointePeer::REVISION);
            $criteria->addSelectColumn(TSignaturePieceJointePeer::ID_DEMANDE);
            $criteria->addSelectColumn(TSignaturePieceJointePeer::ID_HISTORIQUE);
            $criteria->addSelectColumn(TSignaturePieceJointePeer::DATE_SIGNATURE);
            $criteria->addSelectColumn(TSignaturePieceJointePeer::EMETTEUR);
            $criteria->addSelectColumn(TSignaturePieceJointePeer::SIGNATAIRE);
            $criteria->addSelectColumn(TSignaturePieceJointePeer::REVOQUE);
            $criteria->addSelectColumn(TSignaturePieceJointePeer::CHAINE_VALIDE);
            $criteria->addSelectColumn(TSignaturePieceJointePeer::DATE_DEB_PERIODE_VALIDITE);
            $criteria->addSelectColumn(TSignaturePieceJointePeer::DATE_FIN_PERIODE_VALIDITE);
            $criteria->addSelectColumn(TSignaturePieceJointePeer::SIGNATURE_VALIDE);
            $criteria->addSelectColumn(TSignaturePieceJointePeer::FROM_DEMANDEUR);
            $criteria->addSelectColumn(TSignaturePieceJointePeer::TYPE_SIGNATURE);
            $criteria->addSelectColumn(TSignaturePieceJointePeer::XML_SIGNATURE);
            $criteria->addSelectColumn(TSignaturePieceJointePeer::NOM_FICHIER);
            $criteria->addSelectColumn(TSignaturePieceJointePeer::HASH);
            $criteria->addSelectColumn(TSignaturePieceJointePeer::ALGORITHME_HASH);
            $criteria->addSelectColumn(TSignaturePieceJointePeer::DATE_DERNIERE_VERIFICATION);
            $criteria->addSelectColumn(TSignaturePieceJointePeer::SIGNATURE_ELECTRONIQUE);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.ID_BLOB');
            $criteria->addSelectColumn($alias . '.REVISION');
            $criteria->addSelectColumn($alias . '.ID_DEMANDE');
            $criteria->addSelectColumn($alias . '.ID_HISTORIQUE');
            $criteria->addSelectColumn($alias . '.DATE_SIGNATURE');
            $criteria->addSelectColumn($alias . '.EMETTEUR');
            $criteria->addSelectColumn($alias . '.SIGNATAIRE');
            $criteria->addSelectColumn($alias . '.REVOQUE');
            $criteria->addSelectColumn($alias . '.CHAINE_VALIDE');
            $criteria->addSelectColumn($alias . '.DATE_DEB_PERIODE_VALIDITE');
            $criteria->addSelectColumn($alias . '.DATE_FIN_PERIODE_VALIDITE');
            $criteria->addSelectColumn($alias . '.SIGNATURE_VALIDE');
            $criteria->addSelectColumn($alias . '.FROM_DEMANDEUR');
            $criteria->addSelectColumn($alias . '.TYPE_SIGNATURE');
            $criteria->addSelectColumn($alias . '.XML_SIGNATURE');
            $criteria->addSelectColumn($alias . '.NOM_FICHIER');
            $criteria->addSelectColumn($alias . '.hash');
            $criteria->addSelectColumn($alias . '.algorithme_hash');
            $criteria->addSelectColumn($alias . '.DATE_DERNIERE_VERIFICATION');
            $criteria->addSelectColumn($alias . '.SIGNATURE_ELECTRONIQUE');
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
        $criteria->setPrimaryTableName(TSignaturePieceJointePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TSignaturePieceJointePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(TSignaturePieceJointePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(TSignaturePieceJointePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TSignaturePieceJointe
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = TSignaturePieceJointePeer::doSelect($critcopy, $con);
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
        return TSignaturePieceJointePeer::populateObjects(TSignaturePieceJointePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(TSignaturePieceJointePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            TSignaturePieceJointePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(TSignaturePieceJointePeer::DATABASE_NAME);

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
     * @param      TSignaturePieceJointe $obj A TSignaturePieceJointe object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            TSignaturePieceJointePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A TSignaturePieceJointe object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof TSignaturePieceJointe) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or TSignaturePieceJointe object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(TSignaturePieceJointePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   TSignaturePieceJointe Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(TSignaturePieceJointePeer::$instances[$key])) {
                return TSignaturePieceJointePeer::$instances[$key];
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
        foreach (TSignaturePieceJointePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        TSignaturePieceJointePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_signature_piece_jointe
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
        $cls = TSignaturePieceJointePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = TSignaturePieceJointePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = TSignaturePieceJointePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TSignaturePieceJointePeer::addInstanceToPool($obj, $key);
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
     * @return array (TSignaturePieceJointe object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = TSignaturePieceJointePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = TSignaturePieceJointePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + TSignaturePieceJointePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TSignaturePieceJointePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            TSignaturePieceJointePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(TSignaturePieceJointePeer::DATABASE_NAME)->getTable(TSignaturePieceJointePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseTSignaturePieceJointePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseTSignaturePieceJointePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new TSignaturePieceJointeTableMap());
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
        return TSignaturePieceJointePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a TSignaturePieceJointe or Criteria object.
     *
     * @param      mixed $values Criteria or TSignaturePieceJointe object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TSignaturePieceJointePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from TSignaturePieceJointe object
        }

        if ($criteria->containsKey(TSignaturePieceJointePeer::ID) && $criteria->keyContainsValue(TSignaturePieceJointePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TSignaturePieceJointePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(TSignaturePieceJointePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a TSignaturePieceJointe or Criteria object.
     *
     * @param      mixed $values Criteria or TSignaturePieceJointe object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TSignaturePieceJointePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(TSignaturePieceJointePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(TSignaturePieceJointePeer::ID);
            $value = $criteria->remove(TSignaturePieceJointePeer::ID);
            if ($value) {
                $selectCriteria->add(TSignaturePieceJointePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TSignaturePieceJointePeer::TABLE_NAME);
            }

        } else { // $values is TSignaturePieceJointe object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(TSignaturePieceJointePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_signature_piece_jointe table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TSignaturePieceJointePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(TSignaturePieceJointePeer::TABLE_NAME, $con, TSignaturePieceJointePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TSignaturePieceJointePeer::clearInstancePool();
            TSignaturePieceJointePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a TSignaturePieceJointe or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or TSignaturePieceJointe object or primary key or array of primary keys
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
            $con = Propel::getConnection(TSignaturePieceJointePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            TSignaturePieceJointePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof TSignaturePieceJointe) { // it's a model object
            // invalidate the cache for this single object
            TSignaturePieceJointePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TSignaturePieceJointePeer::DATABASE_NAME);
            $criteria->add(TSignaturePieceJointePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                TSignaturePieceJointePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(TSignaturePieceJointePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            TSignaturePieceJointePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given TSignaturePieceJointe object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      TSignaturePieceJointe $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(TSignaturePieceJointePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(TSignaturePieceJointePeer::TABLE_NAME);

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

        return BasePeer::doValidate(TSignaturePieceJointePeer::DATABASE_NAME, TSignaturePieceJointePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return TSignaturePieceJointe
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = TSignaturePieceJointePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(TSignaturePieceJointePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(TSignaturePieceJointePeer::DATABASE_NAME);
        $criteria->add(TSignaturePieceJointePeer::ID, $pk);

        $v = TSignaturePieceJointePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return TSignaturePieceJointe[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TSignaturePieceJointePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(TSignaturePieceJointePeer::DATABASE_NAME);
            $criteria->add(TSignaturePieceJointePeer::ID, $pks, Criteria::IN);
            $objs = TSignaturePieceJointePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseTSignaturePieceJointePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTSignaturePieceJointePeer::buildTableMap();

