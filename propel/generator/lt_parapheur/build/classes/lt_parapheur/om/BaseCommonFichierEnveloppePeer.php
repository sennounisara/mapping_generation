<?php


/**
 * Base static class for performing query and update operations on the 'fichierEnveloppe' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonFichierEnveloppePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'fichierEnveloppe';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonFichierEnveloppe';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonFichierEnveloppeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 20;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 20;

    /** the column name for the id_fichier field */
    const ID_FICHIER = 'fichierEnveloppe.id_fichier';

    /** the column name for the organisme field */
    const ORGANISME = 'fichierEnveloppe.organisme';

    /** the column name for the id_enveloppe field */
    const ID_ENVELOPPE = 'fichierEnveloppe.id_enveloppe';

    /** the column name for the type_fichier field */
    const TYPE_FICHIER = 'fichierEnveloppe.type_fichier';

    /** the column name for the num_ordre_fichier field */
    const NUM_ORDRE_FICHIER = 'fichierEnveloppe.num_ordre_fichier';

    /** the column name for the nom_fichier field */
    const NOM_FICHIER = 'fichierEnveloppe.nom_fichier';

    /** the column name for the taille_fichier field */
    const TAILLE_FICHIER = 'fichierEnveloppe.taille_fichier';

    /** the column name for the signature_fichier field */
    const SIGNATURE_FICHIER = 'fichierEnveloppe.signature_fichier';

    /** the column name for the hash field */
    const HASH = 'fichierEnveloppe.hash';

    /** the column name for the verification_certificat field */
    const VERIFICATION_CERTIFICAT = 'fichierEnveloppe.verification_certificat';

    /** the column name for the id_blob field */
    const ID_BLOB = 'fichierEnveloppe.id_blob';

    /** the column name for the id_blob_signature field */
    const ID_BLOB_SIGNATURE = 'fichierEnveloppe.id_blob_signature';

    /** the column name for the type_piece field */
    const TYPE_PIECE = 'fichierEnveloppe.type_piece';

    /** the column name for the id_type_piece field */
    const ID_TYPE_PIECE = 'fichierEnveloppe.id_type_piece';

    /** the column name for the is_hash field */
    const IS_HASH = 'fichierEnveloppe.is_hash';

    /** the column name for the nom_referentiel_certificat field */
    const NOM_REFERENTIEL_CERTIFICAT = 'fichierEnveloppe.nom_referentiel_certificat';

    /** the column name for the statut_referentiel_certificat field */
    const STATUT_REFERENTIEL_CERTIFICAT = 'fichierEnveloppe.statut_referentiel_certificat';

    /** the column name for the nom_referentiel_fonctionnel field */
    const NOM_REFERENTIEL_FONCTIONNEL = 'fichierEnveloppe.nom_referentiel_fonctionnel';

    /** the column name for the message field */
    const MESSAGE = 'fichierEnveloppe.message';

    /** the column name for the date_signature field */
    const DATE_SIGNATURE = 'fichierEnveloppe.date_signature';

    /** The enumerated values for the is_hash field */
    const IS_HASH_0 = '0';
    const IS_HASH_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonFichierEnveloppe objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonFichierEnveloppe[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonFichierEnveloppePeer::$fieldNames[CommonFichierEnveloppePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdFichier', 'Organisme', 'IdEnveloppe', 'TypeFichier', 'NumOrdreFichier', 'NomFichier', 'TailleFichier', 'SignatureFichier', 'Hash', 'VerificationCertificat', 'IdBlob', 'IdBlobSignature', 'TypePiece', 'IdTypePiece', 'IsHash', 'NomReferentielCertificat', 'StatutReferentielCertificat', 'NomReferentielFonctionnel', 'Message', 'DateSignature', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idFichier', 'organisme', 'idEnveloppe', 'typeFichier', 'numOrdreFichier', 'nomFichier', 'tailleFichier', 'signatureFichier', 'hash', 'verificationCertificat', 'idBlob', 'idBlobSignature', 'typePiece', 'idTypePiece', 'isHash', 'nomReferentielCertificat', 'statutReferentielCertificat', 'nomReferentielFonctionnel', 'message', 'dateSignature', ),
        BasePeer::TYPE_COLNAME => array (CommonFichierEnveloppePeer::ID_FICHIER, CommonFichierEnveloppePeer::ORGANISME, CommonFichierEnveloppePeer::ID_ENVELOPPE, CommonFichierEnveloppePeer::TYPE_FICHIER, CommonFichierEnveloppePeer::NUM_ORDRE_FICHIER, CommonFichierEnveloppePeer::NOM_FICHIER, CommonFichierEnveloppePeer::TAILLE_FICHIER, CommonFichierEnveloppePeer::SIGNATURE_FICHIER, CommonFichierEnveloppePeer::HASH, CommonFichierEnveloppePeer::VERIFICATION_CERTIFICAT, CommonFichierEnveloppePeer::ID_BLOB, CommonFichierEnveloppePeer::ID_BLOB_SIGNATURE, CommonFichierEnveloppePeer::TYPE_PIECE, CommonFichierEnveloppePeer::ID_TYPE_PIECE, CommonFichierEnveloppePeer::IS_HASH, CommonFichierEnveloppePeer::NOM_REFERENTIEL_CERTIFICAT, CommonFichierEnveloppePeer::STATUT_REFERENTIEL_CERTIFICAT, CommonFichierEnveloppePeer::NOM_REFERENTIEL_FONCTIONNEL, CommonFichierEnveloppePeer::MESSAGE, CommonFichierEnveloppePeer::DATE_SIGNATURE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_FICHIER', 'ORGANISME', 'ID_ENVELOPPE', 'TYPE_FICHIER', 'NUM_ORDRE_FICHIER', 'NOM_FICHIER', 'TAILLE_FICHIER', 'SIGNATURE_FICHIER', 'HASH', 'VERIFICATION_CERTIFICAT', 'ID_BLOB', 'ID_BLOB_SIGNATURE', 'TYPE_PIECE', 'ID_TYPE_PIECE', 'IS_HASH', 'NOM_REFERENTIEL_CERTIFICAT', 'STATUT_REFERENTIEL_CERTIFICAT', 'NOM_REFERENTIEL_FONCTIONNEL', 'MESSAGE', 'DATE_SIGNATURE', ),
        BasePeer::TYPE_FIELDNAME => array ('id_fichier', 'organisme', 'id_enveloppe', 'type_fichier', 'num_ordre_fichier', 'nom_fichier', 'taille_fichier', 'signature_fichier', 'hash', 'verification_certificat', 'id_blob', 'id_blob_signature', 'type_piece', 'id_type_piece', 'is_hash', 'nom_referentiel_certificat', 'statut_referentiel_certificat', 'nom_referentiel_fonctionnel', 'message', 'date_signature', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonFichierEnveloppePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdFichier' => 0, 'Organisme' => 1, 'IdEnveloppe' => 2, 'TypeFichier' => 3, 'NumOrdreFichier' => 4, 'NomFichier' => 5, 'TailleFichier' => 6, 'SignatureFichier' => 7, 'Hash' => 8, 'VerificationCertificat' => 9, 'IdBlob' => 10, 'IdBlobSignature' => 11, 'TypePiece' => 12, 'IdTypePiece' => 13, 'IsHash' => 14, 'NomReferentielCertificat' => 15, 'StatutReferentielCertificat' => 16, 'NomReferentielFonctionnel' => 17, 'Message' => 18, 'DateSignature' => 19, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idFichier' => 0, 'organisme' => 1, 'idEnveloppe' => 2, 'typeFichier' => 3, 'numOrdreFichier' => 4, 'nomFichier' => 5, 'tailleFichier' => 6, 'signatureFichier' => 7, 'hash' => 8, 'verificationCertificat' => 9, 'idBlob' => 10, 'idBlobSignature' => 11, 'typePiece' => 12, 'idTypePiece' => 13, 'isHash' => 14, 'nomReferentielCertificat' => 15, 'statutReferentielCertificat' => 16, 'nomReferentielFonctionnel' => 17, 'message' => 18, 'dateSignature' => 19, ),
        BasePeer::TYPE_COLNAME => array (CommonFichierEnveloppePeer::ID_FICHIER => 0, CommonFichierEnveloppePeer::ORGANISME => 1, CommonFichierEnveloppePeer::ID_ENVELOPPE => 2, CommonFichierEnveloppePeer::TYPE_FICHIER => 3, CommonFichierEnveloppePeer::NUM_ORDRE_FICHIER => 4, CommonFichierEnveloppePeer::NOM_FICHIER => 5, CommonFichierEnveloppePeer::TAILLE_FICHIER => 6, CommonFichierEnveloppePeer::SIGNATURE_FICHIER => 7, CommonFichierEnveloppePeer::HASH => 8, CommonFichierEnveloppePeer::VERIFICATION_CERTIFICAT => 9, CommonFichierEnveloppePeer::ID_BLOB => 10, CommonFichierEnveloppePeer::ID_BLOB_SIGNATURE => 11, CommonFichierEnveloppePeer::TYPE_PIECE => 12, CommonFichierEnveloppePeer::ID_TYPE_PIECE => 13, CommonFichierEnveloppePeer::IS_HASH => 14, CommonFichierEnveloppePeer::NOM_REFERENTIEL_CERTIFICAT => 15, CommonFichierEnveloppePeer::STATUT_REFERENTIEL_CERTIFICAT => 16, CommonFichierEnveloppePeer::NOM_REFERENTIEL_FONCTIONNEL => 17, CommonFichierEnveloppePeer::MESSAGE => 18, CommonFichierEnveloppePeer::DATE_SIGNATURE => 19, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_FICHIER' => 0, 'ORGANISME' => 1, 'ID_ENVELOPPE' => 2, 'TYPE_FICHIER' => 3, 'NUM_ORDRE_FICHIER' => 4, 'NOM_FICHIER' => 5, 'TAILLE_FICHIER' => 6, 'SIGNATURE_FICHIER' => 7, 'HASH' => 8, 'VERIFICATION_CERTIFICAT' => 9, 'ID_BLOB' => 10, 'ID_BLOB_SIGNATURE' => 11, 'TYPE_PIECE' => 12, 'ID_TYPE_PIECE' => 13, 'IS_HASH' => 14, 'NOM_REFERENTIEL_CERTIFICAT' => 15, 'STATUT_REFERENTIEL_CERTIFICAT' => 16, 'NOM_REFERENTIEL_FONCTIONNEL' => 17, 'MESSAGE' => 18, 'DATE_SIGNATURE' => 19, ),
        BasePeer::TYPE_FIELDNAME => array ('id_fichier' => 0, 'organisme' => 1, 'id_enveloppe' => 2, 'type_fichier' => 3, 'num_ordre_fichier' => 4, 'nom_fichier' => 5, 'taille_fichier' => 6, 'signature_fichier' => 7, 'hash' => 8, 'verification_certificat' => 9, 'id_blob' => 10, 'id_blob_signature' => 11, 'type_piece' => 12, 'id_type_piece' => 13, 'is_hash' => 14, 'nom_referentiel_certificat' => 15, 'statut_referentiel_certificat' => 16, 'nom_referentiel_fonctionnel' => 17, 'message' => 18, 'date_signature' => 19, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonFichierEnveloppePeer::IS_HASH => array(
            CommonFichierEnveloppePeer::IS_HASH_0,
            CommonFichierEnveloppePeer::IS_HASH_1,
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
        $toNames = CommonFichierEnveloppePeer::getFieldNames($toType);
        $key = isset(CommonFichierEnveloppePeer::$fieldKeys[$fromType][$name]) ? CommonFichierEnveloppePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonFichierEnveloppePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonFichierEnveloppePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonFichierEnveloppePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonFichierEnveloppePeer::$enumValueSets;
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
        $valueSets = CommonFichierEnveloppePeer::getValueSets();

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
        $values = CommonFichierEnveloppePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonFichierEnveloppePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonFichierEnveloppePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonFichierEnveloppePeer::ID_FICHIER);
            $criteria->addSelectColumn(CommonFichierEnveloppePeer::ORGANISME);
            $criteria->addSelectColumn(CommonFichierEnveloppePeer::ID_ENVELOPPE);
            $criteria->addSelectColumn(CommonFichierEnveloppePeer::TYPE_FICHIER);
            $criteria->addSelectColumn(CommonFichierEnveloppePeer::NUM_ORDRE_FICHIER);
            $criteria->addSelectColumn(CommonFichierEnveloppePeer::NOM_FICHIER);
            $criteria->addSelectColumn(CommonFichierEnveloppePeer::TAILLE_FICHIER);
            $criteria->addSelectColumn(CommonFichierEnveloppePeer::SIGNATURE_FICHIER);
            $criteria->addSelectColumn(CommonFichierEnveloppePeer::HASH);
            $criteria->addSelectColumn(CommonFichierEnveloppePeer::VERIFICATION_CERTIFICAT);
            $criteria->addSelectColumn(CommonFichierEnveloppePeer::ID_BLOB);
            $criteria->addSelectColumn(CommonFichierEnveloppePeer::ID_BLOB_SIGNATURE);
            $criteria->addSelectColumn(CommonFichierEnveloppePeer::TYPE_PIECE);
            $criteria->addSelectColumn(CommonFichierEnveloppePeer::ID_TYPE_PIECE);
            $criteria->addSelectColumn(CommonFichierEnveloppePeer::IS_HASH);
            $criteria->addSelectColumn(CommonFichierEnveloppePeer::NOM_REFERENTIEL_CERTIFICAT);
            $criteria->addSelectColumn(CommonFichierEnveloppePeer::STATUT_REFERENTIEL_CERTIFICAT);
            $criteria->addSelectColumn(CommonFichierEnveloppePeer::NOM_REFERENTIEL_FONCTIONNEL);
            $criteria->addSelectColumn(CommonFichierEnveloppePeer::MESSAGE);
            $criteria->addSelectColumn(CommonFichierEnveloppePeer::DATE_SIGNATURE);
        } else {
            $criteria->addSelectColumn($alias . '.id_fichier');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.id_enveloppe');
            $criteria->addSelectColumn($alias . '.type_fichier');
            $criteria->addSelectColumn($alias . '.num_ordre_fichier');
            $criteria->addSelectColumn($alias . '.nom_fichier');
            $criteria->addSelectColumn($alias . '.taille_fichier');
            $criteria->addSelectColumn($alias . '.signature_fichier');
            $criteria->addSelectColumn($alias . '.hash');
            $criteria->addSelectColumn($alias . '.verification_certificat');
            $criteria->addSelectColumn($alias . '.id_blob');
            $criteria->addSelectColumn($alias . '.id_blob_signature');
            $criteria->addSelectColumn($alias . '.type_piece');
            $criteria->addSelectColumn($alias . '.id_type_piece');
            $criteria->addSelectColumn($alias . '.is_hash');
            $criteria->addSelectColumn($alias . '.nom_referentiel_certificat');
            $criteria->addSelectColumn($alias . '.statut_referentiel_certificat');
            $criteria->addSelectColumn($alias . '.nom_referentiel_fonctionnel');
            $criteria->addSelectColumn($alias . '.message');
            $criteria->addSelectColumn($alias . '.date_signature');
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
        $criteria->setPrimaryTableName(CommonFichierEnveloppePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonFichierEnveloppePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonFichierEnveloppePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonFichierEnveloppe
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonFichierEnveloppePeer::doSelect($critcopy, $con);
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
        return CommonFichierEnveloppePeer::populateObjects(CommonFichierEnveloppePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonFichierEnveloppePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonFichierEnveloppePeer::DATABASE_NAME);

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
     * @param      CommonFichierEnveloppe $obj A CommonFichierEnveloppe object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdFichier(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonFichierEnveloppePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonFichierEnveloppe object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonFichierEnveloppe) {
                $key = serialize(array((string) $value->getIdFichier(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonFichierEnveloppe object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonFichierEnveloppePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonFichierEnveloppe Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonFichierEnveloppePeer::$instances[$key])) {
                return CommonFichierEnveloppePeer::$instances[$key];
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
        foreach (CommonFichierEnveloppePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonFichierEnveloppePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to fichierEnveloppe
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
        $cls = CommonFichierEnveloppePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonFichierEnveloppePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonFichierEnveloppePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonFichierEnveloppePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonFichierEnveloppe object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonFichierEnveloppePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonFichierEnveloppePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonFichierEnveloppePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonFichierEnveloppePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonFichierEnveloppePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonFichierEnveloppePeer::DATABASE_NAME)->getTable(CommonFichierEnveloppePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonFichierEnveloppePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonFichierEnveloppePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonFichierEnveloppeTableMap());
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
        return CommonFichierEnveloppePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonFichierEnveloppe or Criteria object.
     *
     * @param      mixed $values Criteria or CommonFichierEnveloppe object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonFichierEnveloppe object
        }

        if ($criteria->containsKey(CommonFichierEnveloppePeer::ID_FICHIER) && $criteria->keyContainsValue(CommonFichierEnveloppePeer::ID_FICHIER) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonFichierEnveloppePeer::ID_FICHIER.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonFichierEnveloppePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonFichierEnveloppe or Criteria object.
     *
     * @param      mixed $values Criteria or CommonFichierEnveloppe object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonFichierEnveloppePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonFichierEnveloppePeer::ID_FICHIER);
            $value = $criteria->remove(CommonFichierEnveloppePeer::ID_FICHIER);
            if ($value) {
                $selectCriteria->add(CommonFichierEnveloppePeer::ID_FICHIER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonFichierEnveloppePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonFichierEnveloppePeer::ORGANISME);
            $value = $criteria->remove(CommonFichierEnveloppePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonFichierEnveloppePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonFichierEnveloppePeer::TABLE_NAME);
            }

        } else { // $values is CommonFichierEnveloppe object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonFichierEnveloppePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the fichierEnveloppe table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonFichierEnveloppePeer::TABLE_NAME, $con, CommonFichierEnveloppePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonFichierEnveloppePeer::clearInstancePool();
            CommonFichierEnveloppePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonFichierEnveloppe or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonFichierEnveloppe object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonFichierEnveloppePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonFichierEnveloppe) { // it's a model object
            // invalidate the cache for this single object
            CommonFichierEnveloppePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonFichierEnveloppePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonFichierEnveloppePeer::ID_FICHIER, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonFichierEnveloppePeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonFichierEnveloppePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonFichierEnveloppePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonFichierEnveloppePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonFichierEnveloppe object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonFichierEnveloppe $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonFichierEnveloppePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonFichierEnveloppePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonFichierEnveloppePeer::DATABASE_NAME, CommonFichierEnveloppePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id_fichier
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonFichierEnveloppe
     */
    public static function retrieveByPK($id_fichier, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_fichier, (string) $organisme));
         if (null !== ($obj = CommonFichierEnveloppePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonFichierEnveloppePeer::DATABASE_NAME);
        $criteria->add(CommonFichierEnveloppePeer::ID_FICHIER, $id_fichier);
        $criteria->add(CommonFichierEnveloppePeer::ORGANISME, $organisme);
        $v = CommonFichierEnveloppePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonFichierEnveloppePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonFichierEnveloppePeer::buildTableMap();

