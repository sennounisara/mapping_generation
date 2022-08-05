<?php


/**
 * Base static class for performing query and update operations on the 'offre_caution_signature' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonOffreCautionSignaturePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'offre_caution_signature';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonOffreCautionSignature';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonOffreCautionSignatureTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 23;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 23;

    /** the column name for the ID field */
    const ID = 'offre_caution_signature.ID';

    /** the column name for the ID_OFFRE_CAUTION field */
    const ID_OFFRE_CAUTION = 'offre_caution_signature.ID_OFFRE_CAUTION';

    /** the column name for the ID_BLOB field */
    const ID_BLOB = 'offre_caution_signature.ID_BLOB';

    /** the column name for the REVISION field */
    const REVISION = 'offre_caution_signature.REVISION';

    /** the column name for the TYPE_DOCUMENT field */
    const TYPE_DOCUMENT = 'offre_caution_signature.TYPE_DOCUMENT';

    /** the column name for the DATE_SIGNATURE field */
    const DATE_SIGNATURE = 'offre_caution_signature.DATE_SIGNATURE';

    /** the column name for the EMETTEUR field */
    const EMETTEUR = 'offre_caution_signature.EMETTEUR';

    /** the column name for the DETAIL_EMETTEUR field */
    const DETAIL_EMETTEUR = 'offre_caution_signature.DETAIL_EMETTEUR';

    /** the column name for the SIGNATAIRE field */
    const SIGNATAIRE = 'offre_caution_signature.SIGNATAIRE';

    /** the column name for the DETAIL_SIGNATAIRE field */
    const DETAIL_SIGNATAIRE = 'offre_caution_signature.DETAIL_SIGNATAIRE';

    /** the column name for the REVOQUE field */
    const REVOQUE = 'offre_caution_signature.REVOQUE';

    /** the column name for the NON_REPUDIATION field */
    const NON_REPUDIATION = 'offre_caution_signature.NON_REPUDIATION';

    /** the column name for the CHAINE_VALIDE field */
    const CHAINE_VALIDE = 'offre_caution_signature.CHAINE_VALIDE';

    /** the column name for the DATE_DEB_PERIODE_VALIDITE field */
    const DATE_DEB_PERIODE_VALIDITE = 'offre_caution_signature.DATE_DEB_PERIODE_VALIDITE';

    /** the column name for the DATE_FIN_PERIODE_VALIDITE field */
    const DATE_FIN_PERIODE_VALIDITE = 'offre_caution_signature.DATE_FIN_PERIODE_VALIDITE';

    /** the column name for the PERIODE_VALIDITE field */
    const PERIODE_VALIDITE = 'offre_caution_signature.PERIODE_VALIDITE';

    /** the column name for the SIGNATURE_VALIDE field */
    const SIGNATURE_VALIDE = 'offre_caution_signature.SIGNATURE_VALIDE';

    /** the column name for the TYPE_SIGNATURE field */
    const TYPE_SIGNATURE = 'offre_caution_signature.TYPE_SIGNATURE';

    /** the column name for the XML_SIGNATURE field */
    const XML_SIGNATURE = 'offre_caution_signature.XML_SIGNATURE';

    /** the column name for the NOM_FICHIER field */
    const NOM_FICHIER = 'offre_caution_signature.NOM_FICHIER';

    /** the column name for the HASH field */
    const HASH = 'offre_caution_signature.HASH';

    /** the column name for the ALGORITHME_HASH field */
    const ALGORITHME_HASH = 'offre_caution_signature.ALGORITHME_HASH';

    /** the column name for the DATE_DERNIERE_VERIFICATION field */
    const DATE_DERNIERE_VERIFICATION = 'offre_caution_signature.DATE_DERNIERE_VERIFICATION';

    /** The enumerated values for the TYPE_DOCUMENT field */
    const TYPE_DOCUMENT_0 = '0';
    const TYPE_DOCUMENT_1 = '1';

    /** The enumerated values for the REVOQUE field */
    const REVOQUE_0 = '0';
    const REVOQUE_1 = '1';

    /** The enumerated values for the NON_REPUDIATION field */
    const NON_REPUDIATION_0 = '0';
    const NON_REPUDIATION_1 = '1';

    /** The enumerated values for the CHAINE_VALIDE field */
    const CHAINE_VALIDE_0 = '0';
    const CHAINE_VALIDE_1 = '1';

    /** The enumerated values for the PERIODE_VALIDITE field */
    const PERIODE_VALIDITE_0 = '0';
    const PERIODE_VALIDITE_1 = '1';

    /** The enumerated values for the SIGNATURE_VALIDE field */
    const SIGNATURE_VALIDE_0 = '0';
    const SIGNATURE_VALIDE_1 = '1';

    /** The enumerated values for the TYPE_SIGNATURE field */
    const TYPE_SIGNATURE_1 = '1';
    const TYPE_SIGNATURE_2 = '2';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonOffreCautionSignature objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonOffreCautionSignature[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonOffreCautionSignaturePeer::$fieldNames[CommonOffreCautionSignaturePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdOffreCaution', 'IdBlob', 'Revision', 'TypeDocument', 'DateSignature', 'Emetteur', 'DetailEmetteur', 'Signataire', 'DetailSignataire', 'Revoque', 'NonRepudiation', 'ChaineValide', 'DateDebPeriodeValidite', 'DateFinPeriodeValidite', 'PeriodeValidite', 'SignatureValide', 'TypeSignature', 'XmlSignature', 'NomFichier', 'Hash', 'AlgorithmeHash', 'DateDerniereVerification', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idOffreCaution', 'idBlob', 'revision', 'typeDocument', 'dateSignature', 'emetteur', 'detailEmetteur', 'signataire', 'detailSignataire', 'revoque', 'nonRepudiation', 'chaineValide', 'dateDebPeriodeValidite', 'dateFinPeriodeValidite', 'periodeValidite', 'signatureValide', 'typeSignature', 'xmlSignature', 'nomFichier', 'hash', 'algorithmeHash', 'dateDerniereVerification', ),
        BasePeer::TYPE_COLNAME => array (CommonOffreCautionSignaturePeer::ID, CommonOffreCautionSignaturePeer::ID_OFFRE_CAUTION, CommonOffreCautionSignaturePeer::ID_BLOB, CommonOffreCautionSignaturePeer::REVISION, CommonOffreCautionSignaturePeer::TYPE_DOCUMENT, CommonOffreCautionSignaturePeer::DATE_SIGNATURE, CommonOffreCautionSignaturePeer::EMETTEUR, CommonOffreCautionSignaturePeer::DETAIL_EMETTEUR, CommonOffreCautionSignaturePeer::SIGNATAIRE, CommonOffreCautionSignaturePeer::DETAIL_SIGNATAIRE, CommonOffreCautionSignaturePeer::REVOQUE, CommonOffreCautionSignaturePeer::NON_REPUDIATION, CommonOffreCautionSignaturePeer::CHAINE_VALIDE, CommonOffreCautionSignaturePeer::DATE_DEB_PERIODE_VALIDITE, CommonOffreCautionSignaturePeer::DATE_FIN_PERIODE_VALIDITE, CommonOffreCautionSignaturePeer::PERIODE_VALIDITE, CommonOffreCautionSignaturePeer::SIGNATURE_VALIDE, CommonOffreCautionSignaturePeer::TYPE_SIGNATURE, CommonOffreCautionSignaturePeer::XML_SIGNATURE, CommonOffreCautionSignaturePeer::NOM_FICHIER, CommonOffreCautionSignaturePeer::HASH, CommonOffreCautionSignaturePeer::ALGORITHME_HASH, CommonOffreCautionSignaturePeer::DATE_DERNIERE_VERIFICATION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_OFFRE_CAUTION', 'ID_BLOB', 'REVISION', 'TYPE_DOCUMENT', 'DATE_SIGNATURE', 'EMETTEUR', 'DETAIL_EMETTEUR', 'SIGNATAIRE', 'DETAIL_SIGNATAIRE', 'REVOQUE', 'NON_REPUDIATION', 'CHAINE_VALIDE', 'DATE_DEB_PERIODE_VALIDITE', 'DATE_FIN_PERIODE_VALIDITE', 'PERIODE_VALIDITE', 'SIGNATURE_VALIDE', 'TYPE_SIGNATURE', 'XML_SIGNATURE', 'NOM_FICHIER', 'HASH', 'ALGORITHME_HASH', 'DATE_DERNIERE_VERIFICATION', ),
        BasePeer::TYPE_FIELDNAME => array ('ID', 'ID_OFFRE_CAUTION', 'ID_BLOB', 'REVISION', 'TYPE_DOCUMENT', 'DATE_SIGNATURE', 'EMETTEUR', 'DETAIL_EMETTEUR', 'SIGNATAIRE', 'DETAIL_SIGNATAIRE', 'REVOQUE', 'NON_REPUDIATION', 'CHAINE_VALIDE', 'DATE_DEB_PERIODE_VALIDITE', 'DATE_FIN_PERIODE_VALIDITE', 'PERIODE_VALIDITE', 'SIGNATURE_VALIDE', 'TYPE_SIGNATURE', 'XML_SIGNATURE', 'NOM_FICHIER', 'HASH', 'ALGORITHME_HASH', 'DATE_DERNIERE_VERIFICATION', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonOffreCautionSignaturePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdOffreCaution' => 1, 'IdBlob' => 2, 'Revision' => 3, 'TypeDocument' => 4, 'DateSignature' => 5, 'Emetteur' => 6, 'DetailEmetteur' => 7, 'Signataire' => 8, 'DetailSignataire' => 9, 'Revoque' => 10, 'NonRepudiation' => 11, 'ChaineValide' => 12, 'DateDebPeriodeValidite' => 13, 'DateFinPeriodeValidite' => 14, 'PeriodeValidite' => 15, 'SignatureValide' => 16, 'TypeSignature' => 17, 'XmlSignature' => 18, 'NomFichier' => 19, 'Hash' => 20, 'AlgorithmeHash' => 21, 'DateDerniereVerification' => 22, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idOffreCaution' => 1, 'idBlob' => 2, 'revision' => 3, 'typeDocument' => 4, 'dateSignature' => 5, 'emetteur' => 6, 'detailEmetteur' => 7, 'signataire' => 8, 'detailSignataire' => 9, 'revoque' => 10, 'nonRepudiation' => 11, 'chaineValide' => 12, 'dateDebPeriodeValidite' => 13, 'dateFinPeriodeValidite' => 14, 'periodeValidite' => 15, 'signatureValide' => 16, 'typeSignature' => 17, 'xmlSignature' => 18, 'nomFichier' => 19, 'hash' => 20, 'algorithmeHash' => 21, 'dateDerniereVerification' => 22, ),
        BasePeer::TYPE_COLNAME => array (CommonOffreCautionSignaturePeer::ID => 0, CommonOffreCautionSignaturePeer::ID_OFFRE_CAUTION => 1, CommonOffreCautionSignaturePeer::ID_BLOB => 2, CommonOffreCautionSignaturePeer::REVISION => 3, CommonOffreCautionSignaturePeer::TYPE_DOCUMENT => 4, CommonOffreCautionSignaturePeer::DATE_SIGNATURE => 5, CommonOffreCautionSignaturePeer::EMETTEUR => 6, CommonOffreCautionSignaturePeer::DETAIL_EMETTEUR => 7, CommonOffreCautionSignaturePeer::SIGNATAIRE => 8, CommonOffreCautionSignaturePeer::DETAIL_SIGNATAIRE => 9, CommonOffreCautionSignaturePeer::REVOQUE => 10, CommonOffreCautionSignaturePeer::NON_REPUDIATION => 11, CommonOffreCautionSignaturePeer::CHAINE_VALIDE => 12, CommonOffreCautionSignaturePeer::DATE_DEB_PERIODE_VALIDITE => 13, CommonOffreCautionSignaturePeer::DATE_FIN_PERIODE_VALIDITE => 14, CommonOffreCautionSignaturePeer::PERIODE_VALIDITE => 15, CommonOffreCautionSignaturePeer::SIGNATURE_VALIDE => 16, CommonOffreCautionSignaturePeer::TYPE_SIGNATURE => 17, CommonOffreCautionSignaturePeer::XML_SIGNATURE => 18, CommonOffreCautionSignaturePeer::NOM_FICHIER => 19, CommonOffreCautionSignaturePeer::HASH => 20, CommonOffreCautionSignaturePeer::ALGORITHME_HASH => 21, CommonOffreCautionSignaturePeer::DATE_DERNIERE_VERIFICATION => 22, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_OFFRE_CAUTION' => 1, 'ID_BLOB' => 2, 'REVISION' => 3, 'TYPE_DOCUMENT' => 4, 'DATE_SIGNATURE' => 5, 'EMETTEUR' => 6, 'DETAIL_EMETTEUR' => 7, 'SIGNATAIRE' => 8, 'DETAIL_SIGNATAIRE' => 9, 'REVOQUE' => 10, 'NON_REPUDIATION' => 11, 'CHAINE_VALIDE' => 12, 'DATE_DEB_PERIODE_VALIDITE' => 13, 'DATE_FIN_PERIODE_VALIDITE' => 14, 'PERIODE_VALIDITE' => 15, 'SIGNATURE_VALIDE' => 16, 'TYPE_SIGNATURE' => 17, 'XML_SIGNATURE' => 18, 'NOM_FICHIER' => 19, 'HASH' => 20, 'ALGORITHME_HASH' => 21, 'DATE_DERNIERE_VERIFICATION' => 22, ),
        BasePeer::TYPE_FIELDNAME => array ('ID' => 0, 'ID_OFFRE_CAUTION' => 1, 'ID_BLOB' => 2, 'REVISION' => 3, 'TYPE_DOCUMENT' => 4, 'DATE_SIGNATURE' => 5, 'EMETTEUR' => 6, 'DETAIL_EMETTEUR' => 7, 'SIGNATAIRE' => 8, 'DETAIL_SIGNATAIRE' => 9, 'REVOQUE' => 10, 'NON_REPUDIATION' => 11, 'CHAINE_VALIDE' => 12, 'DATE_DEB_PERIODE_VALIDITE' => 13, 'DATE_FIN_PERIODE_VALIDITE' => 14, 'PERIODE_VALIDITE' => 15, 'SIGNATURE_VALIDE' => 16, 'TYPE_SIGNATURE' => 17, 'XML_SIGNATURE' => 18, 'NOM_FICHIER' => 19, 'HASH' => 20, 'ALGORITHME_HASH' => 21, 'DATE_DERNIERE_VERIFICATION' => 22, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonOffreCautionSignaturePeer::TYPE_DOCUMENT => array(
            CommonOffreCautionSignaturePeer::TYPE_DOCUMENT_0,
            CommonOffreCautionSignaturePeer::TYPE_DOCUMENT_1,
        ),
        CommonOffreCautionSignaturePeer::REVOQUE => array(
            CommonOffreCautionSignaturePeer::REVOQUE_0,
            CommonOffreCautionSignaturePeer::REVOQUE_1,
        ),
        CommonOffreCautionSignaturePeer::NON_REPUDIATION => array(
            CommonOffreCautionSignaturePeer::NON_REPUDIATION_0,
            CommonOffreCautionSignaturePeer::NON_REPUDIATION_1,
        ),
        CommonOffreCautionSignaturePeer::CHAINE_VALIDE => array(
            CommonOffreCautionSignaturePeer::CHAINE_VALIDE_0,
            CommonOffreCautionSignaturePeer::CHAINE_VALIDE_1,
        ),
        CommonOffreCautionSignaturePeer::PERIODE_VALIDITE => array(
            CommonOffreCautionSignaturePeer::PERIODE_VALIDITE_0,
            CommonOffreCautionSignaturePeer::PERIODE_VALIDITE_1,
        ),
        CommonOffreCautionSignaturePeer::SIGNATURE_VALIDE => array(
            CommonOffreCautionSignaturePeer::SIGNATURE_VALIDE_0,
            CommonOffreCautionSignaturePeer::SIGNATURE_VALIDE_1,
        ),
        CommonOffreCautionSignaturePeer::TYPE_SIGNATURE => array(
            CommonOffreCautionSignaturePeer::TYPE_SIGNATURE_1,
            CommonOffreCautionSignaturePeer::TYPE_SIGNATURE_2,
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
        $toNames = CommonOffreCautionSignaturePeer::getFieldNames($toType);
        $key = isset(CommonOffreCautionSignaturePeer::$fieldKeys[$fromType][$name]) ? CommonOffreCautionSignaturePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonOffreCautionSignaturePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonOffreCautionSignaturePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonOffreCautionSignaturePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonOffreCautionSignaturePeer::$enumValueSets;
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
        $valueSets = CommonOffreCautionSignaturePeer::getValueSets();

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
        $values = CommonOffreCautionSignaturePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonOffreCautionSignaturePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonOffreCautionSignaturePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::ID);
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::ID_OFFRE_CAUTION);
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::ID_BLOB);
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::REVISION);
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::TYPE_DOCUMENT);
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::DATE_SIGNATURE);
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::EMETTEUR);
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::DETAIL_EMETTEUR);
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::SIGNATAIRE);
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::DETAIL_SIGNATAIRE);
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::REVOQUE);
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::NON_REPUDIATION);
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::CHAINE_VALIDE);
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::DATE_DEB_PERIODE_VALIDITE);
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::DATE_FIN_PERIODE_VALIDITE);
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::PERIODE_VALIDITE);
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::SIGNATURE_VALIDE);
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::TYPE_SIGNATURE);
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::XML_SIGNATURE);
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::NOM_FICHIER);
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::HASH);
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::ALGORITHME_HASH);
            $criteria->addSelectColumn(CommonOffreCautionSignaturePeer::DATE_DERNIERE_VERIFICATION);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.ID_OFFRE_CAUTION');
            $criteria->addSelectColumn($alias . '.ID_BLOB');
            $criteria->addSelectColumn($alias . '.REVISION');
            $criteria->addSelectColumn($alias . '.TYPE_DOCUMENT');
            $criteria->addSelectColumn($alias . '.DATE_SIGNATURE');
            $criteria->addSelectColumn($alias . '.EMETTEUR');
            $criteria->addSelectColumn($alias . '.DETAIL_EMETTEUR');
            $criteria->addSelectColumn($alias . '.SIGNATAIRE');
            $criteria->addSelectColumn($alias . '.DETAIL_SIGNATAIRE');
            $criteria->addSelectColumn($alias . '.REVOQUE');
            $criteria->addSelectColumn($alias . '.NON_REPUDIATION');
            $criteria->addSelectColumn($alias . '.CHAINE_VALIDE');
            $criteria->addSelectColumn($alias . '.DATE_DEB_PERIODE_VALIDITE');
            $criteria->addSelectColumn($alias . '.DATE_FIN_PERIODE_VALIDITE');
            $criteria->addSelectColumn($alias . '.PERIODE_VALIDITE');
            $criteria->addSelectColumn($alias . '.SIGNATURE_VALIDE');
            $criteria->addSelectColumn($alias . '.TYPE_SIGNATURE');
            $criteria->addSelectColumn($alias . '.XML_SIGNATURE');
            $criteria->addSelectColumn($alias . '.NOM_FICHIER');
            $criteria->addSelectColumn($alias . '.HASH');
            $criteria->addSelectColumn($alias . '.ALGORITHME_HASH');
            $criteria->addSelectColumn($alias . '.DATE_DERNIERE_VERIFICATION');
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
        $criteria->setPrimaryTableName(CommonOffreCautionSignaturePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonOffreCautionSignaturePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonOffreCautionSignaturePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonOffreCautionSignaturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonOffreCautionSignature
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonOffreCautionSignaturePeer::doSelect($critcopy, $con);
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
        return CommonOffreCautionSignaturePeer::populateObjects(CommonOffreCautionSignaturePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonOffreCautionSignaturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonOffreCautionSignaturePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonOffreCautionSignaturePeer::DATABASE_NAME);

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
     * @param      CommonOffreCautionSignature $obj A CommonOffreCautionSignature object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonOffreCautionSignaturePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonOffreCautionSignature object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonOffreCautionSignature) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonOffreCautionSignature object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonOffreCautionSignaturePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonOffreCautionSignature Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonOffreCautionSignaturePeer::$instances[$key])) {
                return CommonOffreCautionSignaturePeer::$instances[$key];
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
        foreach (CommonOffreCautionSignaturePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonOffreCautionSignaturePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to offre_caution_signature
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
        $cls = CommonOffreCautionSignaturePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonOffreCautionSignaturePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonOffreCautionSignaturePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonOffreCautionSignaturePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonOffreCautionSignature object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonOffreCautionSignaturePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonOffreCautionSignaturePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonOffreCautionSignaturePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonOffreCautionSignaturePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonOffreCautionSignaturePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonOffreCautionSignaturePeer::DATABASE_NAME)->getTable(CommonOffreCautionSignaturePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonOffreCautionSignaturePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonOffreCautionSignaturePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonOffreCautionSignatureTableMap());
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
        return CommonOffreCautionSignaturePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonOffreCautionSignature or Criteria object.
     *
     * @param      mixed $values Criteria or CommonOffreCautionSignature object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonOffreCautionSignaturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonOffreCautionSignature object
        }

        if ($criteria->containsKey(CommonOffreCautionSignaturePeer::ID) && $criteria->keyContainsValue(CommonOffreCautionSignaturePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonOffreCautionSignaturePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonOffreCautionSignaturePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonOffreCautionSignature or Criteria object.
     *
     * @param      mixed $values Criteria or CommonOffreCautionSignature object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonOffreCautionSignaturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonOffreCautionSignaturePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonOffreCautionSignaturePeer::ID);
            $value = $criteria->remove(CommonOffreCautionSignaturePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonOffreCautionSignaturePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonOffreCautionSignaturePeer::TABLE_NAME);
            }

        } else { // $values is CommonOffreCautionSignature object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonOffreCautionSignaturePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the offre_caution_signature table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonOffreCautionSignaturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonOffreCautionSignaturePeer::TABLE_NAME, $con, CommonOffreCautionSignaturePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonOffreCautionSignaturePeer::clearInstancePool();
            CommonOffreCautionSignaturePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonOffreCautionSignature or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonOffreCautionSignature object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonOffreCautionSignaturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonOffreCautionSignaturePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonOffreCautionSignature) { // it's a model object
            // invalidate the cache for this single object
            CommonOffreCautionSignaturePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonOffreCautionSignaturePeer::DATABASE_NAME);
            $criteria->add(CommonOffreCautionSignaturePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonOffreCautionSignaturePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonOffreCautionSignaturePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonOffreCautionSignaturePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonOffreCautionSignature object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonOffreCautionSignature $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonOffreCautionSignaturePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonOffreCautionSignaturePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonOffreCautionSignaturePeer::DATABASE_NAME, CommonOffreCautionSignaturePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonOffreCautionSignature
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonOffreCautionSignaturePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonOffreCautionSignaturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonOffreCautionSignaturePeer::DATABASE_NAME);
        $criteria->add(CommonOffreCautionSignaturePeer::ID, $pk);

        $v = CommonOffreCautionSignaturePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonOffreCautionSignature[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonOffreCautionSignaturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonOffreCautionSignaturePeer::DATABASE_NAME);
            $criteria->add(CommonOffreCautionSignaturePeer::ID, $pks, Criteria::IN);
            $objs = CommonOffreCautionSignaturePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonOffreCautionSignaturePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonOffreCautionSignaturePeer::buildTableMap();

