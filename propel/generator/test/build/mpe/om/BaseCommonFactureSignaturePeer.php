<?php


/**
 * Base static class for performing query and update operations on the 'facture_signature' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonFactureSignaturePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'facture_signature';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonFactureSignature';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonFactureSignatureTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 25;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 25;

    /** the column name for the ID field */
    const ID = 'facture_signature.ID';

    /** the column name for the ID_BLOB field */
    const ID_BLOB = 'facture_signature.ID_BLOB';

    /** the column name for the ID_FACTURE field */
    const ID_FACTURE = 'facture_signature.ID_FACTURE';

    /** the column name for the ID_AGENT_SIGNATAIRE field */
    const ID_AGENT_SIGNATAIRE = 'facture_signature.ID_AGENT_SIGNATAIRE';

    /** the column name for the REVISION field */
    const REVISION = 'facture_signature.REVISION';

    /** the column name for the TYPE_DOCUMENT field */
    const TYPE_DOCUMENT = 'facture_signature.TYPE_DOCUMENT';

    /** the column name for the DATE_SIGNATURE field */
    const DATE_SIGNATURE = 'facture_signature.DATE_SIGNATURE';

    /** the column name for the EMETTEUR field */
    const EMETTEUR = 'facture_signature.EMETTEUR';

    /** the column name for the DETAIL_EMETTEUR field */
    const DETAIL_EMETTEUR = 'facture_signature.DETAIL_EMETTEUR';

    /** the column name for the SIGNATAIRE field */
    const SIGNATAIRE = 'facture_signature.SIGNATAIRE';

    /** the column name for the DETAIL_SIGNATAIRE field */
    const DETAIL_SIGNATAIRE = 'facture_signature.DETAIL_SIGNATAIRE';

    /** the column name for the REVOQUE field */
    const REVOQUE = 'facture_signature.REVOQUE';

    /** the column name for the NON_REPUDIATION field */
    const NON_REPUDIATION = 'facture_signature.NON_REPUDIATION';

    /** the column name for the CHAINE_VALIDE field */
    const CHAINE_VALIDE = 'facture_signature.CHAINE_VALIDE';

    /** the column name for the DATE_DEB_PERIODE_VALIDITE field */
    const DATE_DEB_PERIODE_VALIDITE = 'facture_signature.DATE_DEB_PERIODE_VALIDITE';

    /** the column name for the DATE_FIN_PERIODE_VALIDITE field */
    const DATE_FIN_PERIODE_VALIDITE = 'facture_signature.DATE_FIN_PERIODE_VALIDITE';

    /** the column name for the PERIODE_VALIDITE field */
    const PERIODE_VALIDITE = 'facture_signature.PERIODE_VALIDITE';

    /** the column name for the SIGNATURE_VALIDE field */
    const SIGNATURE_VALIDE = 'facture_signature.SIGNATURE_VALIDE';

    /** the column name for the TYPE_SIGNATURE field */
    const TYPE_SIGNATURE = 'facture_signature.TYPE_SIGNATURE';

    /** the column name for the XML_SIGNATURE field */
    const XML_SIGNATURE = 'facture_signature.XML_SIGNATURE';

    /** the column name for the NOM_FICHIER field */
    const NOM_FICHIER = 'facture_signature.NOM_FICHIER';

    /** the column name for the HASH field */
    const HASH = 'facture_signature.HASH';

    /** the column name for the ALGORITHME_HASH field */
    const ALGORITHME_HASH = 'facture_signature.ALGORITHME_HASH';

    /** the column name for the DATE_DERNIERE_VERIFICATION field */
    const DATE_DERNIERE_VERIFICATION = 'facture_signature.DATE_DERNIERE_VERIFICATION';

    /** the column name for the SIGNATURE_ARCHIVEE field */
    const SIGNATURE_ARCHIVEE = 'facture_signature.SIGNATURE_ARCHIVEE';

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
     * An identity map to hold any loaded instances of CommonFactureSignature objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonFactureSignature[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonFactureSignaturePeer::$fieldNames[CommonFactureSignaturePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdBlob', 'IdFacture', 'IdAgentSignataire', 'Revision', 'TypeDocument', 'DateSignature', 'Emetteur', 'DetailEmetteur', 'Signataire', 'DetailSignataire', 'Revoque', 'NonRepudiation', 'ChaineValide', 'DateDebPeriodeValidite', 'DateFinPeriodeValidite', 'PeriodeValidite', 'SignatureValide', 'TypeSignature', 'XmlSignature', 'NomFichier', 'Hash', 'AlgorithmeHash', 'DateDerniereVerification', 'SignatureArchivee', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idBlob', 'idFacture', 'idAgentSignataire', 'revision', 'typeDocument', 'dateSignature', 'emetteur', 'detailEmetteur', 'signataire', 'detailSignataire', 'revoque', 'nonRepudiation', 'chaineValide', 'dateDebPeriodeValidite', 'dateFinPeriodeValidite', 'periodeValidite', 'signatureValide', 'typeSignature', 'xmlSignature', 'nomFichier', 'hash', 'algorithmeHash', 'dateDerniereVerification', 'signatureArchivee', ),
        BasePeer::TYPE_COLNAME => array (CommonFactureSignaturePeer::ID, CommonFactureSignaturePeer::ID_BLOB, CommonFactureSignaturePeer::ID_FACTURE, CommonFactureSignaturePeer::ID_AGENT_SIGNATAIRE, CommonFactureSignaturePeer::REVISION, CommonFactureSignaturePeer::TYPE_DOCUMENT, CommonFactureSignaturePeer::DATE_SIGNATURE, CommonFactureSignaturePeer::EMETTEUR, CommonFactureSignaturePeer::DETAIL_EMETTEUR, CommonFactureSignaturePeer::SIGNATAIRE, CommonFactureSignaturePeer::DETAIL_SIGNATAIRE, CommonFactureSignaturePeer::REVOQUE, CommonFactureSignaturePeer::NON_REPUDIATION, CommonFactureSignaturePeer::CHAINE_VALIDE, CommonFactureSignaturePeer::DATE_DEB_PERIODE_VALIDITE, CommonFactureSignaturePeer::DATE_FIN_PERIODE_VALIDITE, CommonFactureSignaturePeer::PERIODE_VALIDITE, CommonFactureSignaturePeer::SIGNATURE_VALIDE, CommonFactureSignaturePeer::TYPE_SIGNATURE, CommonFactureSignaturePeer::XML_SIGNATURE, CommonFactureSignaturePeer::NOM_FICHIER, CommonFactureSignaturePeer::HASH, CommonFactureSignaturePeer::ALGORITHME_HASH, CommonFactureSignaturePeer::DATE_DERNIERE_VERIFICATION, CommonFactureSignaturePeer::SIGNATURE_ARCHIVEE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_BLOB', 'ID_FACTURE', 'ID_AGENT_SIGNATAIRE', 'REVISION', 'TYPE_DOCUMENT', 'DATE_SIGNATURE', 'EMETTEUR', 'DETAIL_EMETTEUR', 'SIGNATAIRE', 'DETAIL_SIGNATAIRE', 'REVOQUE', 'NON_REPUDIATION', 'CHAINE_VALIDE', 'DATE_DEB_PERIODE_VALIDITE', 'DATE_FIN_PERIODE_VALIDITE', 'PERIODE_VALIDITE', 'SIGNATURE_VALIDE', 'TYPE_SIGNATURE', 'XML_SIGNATURE', 'NOM_FICHIER', 'HASH', 'ALGORITHME_HASH', 'DATE_DERNIERE_VERIFICATION', 'SIGNATURE_ARCHIVEE', ),
        BasePeer::TYPE_FIELDNAME => array ('ID', 'ID_BLOB', 'ID_FACTURE', 'ID_AGENT_SIGNATAIRE', 'REVISION', 'TYPE_DOCUMENT', 'DATE_SIGNATURE', 'EMETTEUR', 'DETAIL_EMETTEUR', 'SIGNATAIRE', 'DETAIL_SIGNATAIRE', 'REVOQUE', 'NON_REPUDIATION', 'CHAINE_VALIDE', 'DATE_DEB_PERIODE_VALIDITE', 'DATE_FIN_PERIODE_VALIDITE', 'PERIODE_VALIDITE', 'SIGNATURE_VALIDE', 'TYPE_SIGNATURE', 'XML_SIGNATURE', 'NOM_FICHIER', 'HASH', 'ALGORITHME_HASH', 'DATE_DERNIERE_VERIFICATION', 'SIGNATURE_ARCHIVEE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonFactureSignaturePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdBlob' => 1, 'IdFacture' => 2, 'IdAgentSignataire' => 3, 'Revision' => 4, 'TypeDocument' => 5, 'DateSignature' => 6, 'Emetteur' => 7, 'DetailEmetteur' => 8, 'Signataire' => 9, 'DetailSignataire' => 10, 'Revoque' => 11, 'NonRepudiation' => 12, 'ChaineValide' => 13, 'DateDebPeriodeValidite' => 14, 'DateFinPeriodeValidite' => 15, 'PeriodeValidite' => 16, 'SignatureValide' => 17, 'TypeSignature' => 18, 'XmlSignature' => 19, 'NomFichier' => 20, 'Hash' => 21, 'AlgorithmeHash' => 22, 'DateDerniereVerification' => 23, 'SignatureArchivee' => 24, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idBlob' => 1, 'idFacture' => 2, 'idAgentSignataire' => 3, 'revision' => 4, 'typeDocument' => 5, 'dateSignature' => 6, 'emetteur' => 7, 'detailEmetteur' => 8, 'signataire' => 9, 'detailSignataire' => 10, 'revoque' => 11, 'nonRepudiation' => 12, 'chaineValide' => 13, 'dateDebPeriodeValidite' => 14, 'dateFinPeriodeValidite' => 15, 'periodeValidite' => 16, 'signatureValide' => 17, 'typeSignature' => 18, 'xmlSignature' => 19, 'nomFichier' => 20, 'hash' => 21, 'algorithmeHash' => 22, 'dateDerniereVerification' => 23, 'signatureArchivee' => 24, ),
        BasePeer::TYPE_COLNAME => array (CommonFactureSignaturePeer::ID => 0, CommonFactureSignaturePeer::ID_BLOB => 1, CommonFactureSignaturePeer::ID_FACTURE => 2, CommonFactureSignaturePeer::ID_AGENT_SIGNATAIRE => 3, CommonFactureSignaturePeer::REVISION => 4, CommonFactureSignaturePeer::TYPE_DOCUMENT => 5, CommonFactureSignaturePeer::DATE_SIGNATURE => 6, CommonFactureSignaturePeer::EMETTEUR => 7, CommonFactureSignaturePeer::DETAIL_EMETTEUR => 8, CommonFactureSignaturePeer::SIGNATAIRE => 9, CommonFactureSignaturePeer::DETAIL_SIGNATAIRE => 10, CommonFactureSignaturePeer::REVOQUE => 11, CommonFactureSignaturePeer::NON_REPUDIATION => 12, CommonFactureSignaturePeer::CHAINE_VALIDE => 13, CommonFactureSignaturePeer::DATE_DEB_PERIODE_VALIDITE => 14, CommonFactureSignaturePeer::DATE_FIN_PERIODE_VALIDITE => 15, CommonFactureSignaturePeer::PERIODE_VALIDITE => 16, CommonFactureSignaturePeer::SIGNATURE_VALIDE => 17, CommonFactureSignaturePeer::TYPE_SIGNATURE => 18, CommonFactureSignaturePeer::XML_SIGNATURE => 19, CommonFactureSignaturePeer::NOM_FICHIER => 20, CommonFactureSignaturePeer::HASH => 21, CommonFactureSignaturePeer::ALGORITHME_HASH => 22, CommonFactureSignaturePeer::DATE_DERNIERE_VERIFICATION => 23, CommonFactureSignaturePeer::SIGNATURE_ARCHIVEE => 24, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_BLOB' => 1, 'ID_FACTURE' => 2, 'ID_AGENT_SIGNATAIRE' => 3, 'REVISION' => 4, 'TYPE_DOCUMENT' => 5, 'DATE_SIGNATURE' => 6, 'EMETTEUR' => 7, 'DETAIL_EMETTEUR' => 8, 'SIGNATAIRE' => 9, 'DETAIL_SIGNATAIRE' => 10, 'REVOQUE' => 11, 'NON_REPUDIATION' => 12, 'CHAINE_VALIDE' => 13, 'DATE_DEB_PERIODE_VALIDITE' => 14, 'DATE_FIN_PERIODE_VALIDITE' => 15, 'PERIODE_VALIDITE' => 16, 'SIGNATURE_VALIDE' => 17, 'TYPE_SIGNATURE' => 18, 'XML_SIGNATURE' => 19, 'NOM_FICHIER' => 20, 'HASH' => 21, 'ALGORITHME_HASH' => 22, 'DATE_DERNIERE_VERIFICATION' => 23, 'SIGNATURE_ARCHIVEE' => 24, ),
        BasePeer::TYPE_FIELDNAME => array ('ID' => 0, 'ID_BLOB' => 1, 'ID_FACTURE' => 2, 'ID_AGENT_SIGNATAIRE' => 3, 'REVISION' => 4, 'TYPE_DOCUMENT' => 5, 'DATE_SIGNATURE' => 6, 'EMETTEUR' => 7, 'DETAIL_EMETTEUR' => 8, 'SIGNATAIRE' => 9, 'DETAIL_SIGNATAIRE' => 10, 'REVOQUE' => 11, 'NON_REPUDIATION' => 12, 'CHAINE_VALIDE' => 13, 'DATE_DEB_PERIODE_VALIDITE' => 14, 'DATE_FIN_PERIODE_VALIDITE' => 15, 'PERIODE_VALIDITE' => 16, 'SIGNATURE_VALIDE' => 17, 'TYPE_SIGNATURE' => 18, 'XML_SIGNATURE' => 19, 'NOM_FICHIER' => 20, 'HASH' => 21, 'ALGORITHME_HASH' => 22, 'DATE_DERNIERE_VERIFICATION' => 23, 'SIGNATURE_ARCHIVEE' => 24, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonFactureSignaturePeer::TYPE_DOCUMENT => array(
            CommonFactureSignaturePeer::TYPE_DOCUMENT_0,
            CommonFactureSignaturePeer::TYPE_DOCUMENT_1,
        ),
        CommonFactureSignaturePeer::REVOQUE => array(
            CommonFactureSignaturePeer::REVOQUE_0,
            CommonFactureSignaturePeer::REVOQUE_1,
        ),
        CommonFactureSignaturePeer::NON_REPUDIATION => array(
            CommonFactureSignaturePeer::NON_REPUDIATION_0,
            CommonFactureSignaturePeer::NON_REPUDIATION_1,
        ),
        CommonFactureSignaturePeer::CHAINE_VALIDE => array(
            CommonFactureSignaturePeer::CHAINE_VALIDE_0,
            CommonFactureSignaturePeer::CHAINE_VALIDE_1,
        ),
        CommonFactureSignaturePeer::PERIODE_VALIDITE => array(
            CommonFactureSignaturePeer::PERIODE_VALIDITE_0,
            CommonFactureSignaturePeer::PERIODE_VALIDITE_1,
        ),
        CommonFactureSignaturePeer::SIGNATURE_VALIDE => array(
            CommonFactureSignaturePeer::SIGNATURE_VALIDE_0,
            CommonFactureSignaturePeer::SIGNATURE_VALIDE_1,
        ),
        CommonFactureSignaturePeer::TYPE_SIGNATURE => array(
            CommonFactureSignaturePeer::TYPE_SIGNATURE_1,
            CommonFactureSignaturePeer::TYPE_SIGNATURE_2,
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
        $toNames = CommonFactureSignaturePeer::getFieldNames($toType);
        $key = isset(CommonFactureSignaturePeer::$fieldKeys[$fromType][$name]) ? CommonFactureSignaturePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonFactureSignaturePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonFactureSignaturePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonFactureSignaturePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonFactureSignaturePeer::$enumValueSets;
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
        $valueSets = CommonFactureSignaturePeer::getValueSets();

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
        $values = CommonFactureSignaturePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonFactureSignaturePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonFactureSignaturePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonFactureSignaturePeer::ID);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::ID_BLOB);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::ID_FACTURE);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::ID_AGENT_SIGNATAIRE);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::REVISION);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::TYPE_DOCUMENT);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::DATE_SIGNATURE);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::EMETTEUR);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::DETAIL_EMETTEUR);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::SIGNATAIRE);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::DETAIL_SIGNATAIRE);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::REVOQUE);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::NON_REPUDIATION);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::CHAINE_VALIDE);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::DATE_DEB_PERIODE_VALIDITE);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::DATE_FIN_PERIODE_VALIDITE);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::PERIODE_VALIDITE);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::SIGNATURE_VALIDE);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::TYPE_SIGNATURE);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::XML_SIGNATURE);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::NOM_FICHIER);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::HASH);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::ALGORITHME_HASH);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::DATE_DERNIERE_VERIFICATION);
            $criteria->addSelectColumn(CommonFactureSignaturePeer::SIGNATURE_ARCHIVEE);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.ID_BLOB');
            $criteria->addSelectColumn($alias . '.ID_FACTURE');
            $criteria->addSelectColumn($alias . '.ID_AGENT_SIGNATAIRE');
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
            $criteria->addSelectColumn($alias . '.SIGNATURE_ARCHIVEE');
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
        $criteria->setPrimaryTableName(CommonFactureSignaturePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonFactureSignaturePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonFactureSignaturePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonFactureSignaturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonFactureSignature
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonFactureSignaturePeer::doSelect($critcopy, $con);
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
        return CommonFactureSignaturePeer::populateObjects(CommonFactureSignaturePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonFactureSignaturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonFactureSignaturePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonFactureSignaturePeer::DATABASE_NAME);

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
     * @param      CommonFactureSignature $obj A CommonFactureSignature object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonFactureSignaturePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonFactureSignature object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonFactureSignature) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonFactureSignature object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonFactureSignaturePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonFactureSignature Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonFactureSignaturePeer::$instances[$key])) {
                return CommonFactureSignaturePeer::$instances[$key];
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
        foreach (CommonFactureSignaturePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonFactureSignaturePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to facture_signature
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
        $cls = CommonFactureSignaturePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonFactureSignaturePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonFactureSignaturePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonFactureSignaturePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonFactureSignature object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonFactureSignaturePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonFactureSignaturePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonFactureSignaturePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonFactureSignaturePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonFactureSignaturePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonFactureSignaturePeer::DATABASE_NAME)->getTable(CommonFactureSignaturePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonFactureSignaturePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonFactureSignaturePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonFactureSignatureTableMap());
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
        return CommonFactureSignaturePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonFactureSignature or Criteria object.
     *
     * @param      mixed $values Criteria or CommonFactureSignature object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonFactureSignaturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonFactureSignature object
        }


        // Set the correct dbName
        $criteria->setDbName(CommonFactureSignaturePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonFactureSignature or Criteria object.
     *
     * @param      mixed $values Criteria or CommonFactureSignature object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonFactureSignaturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonFactureSignaturePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonFactureSignaturePeer::ID);
            $value = $criteria->remove(CommonFactureSignaturePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonFactureSignaturePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonFactureSignaturePeer::TABLE_NAME);
            }

        } else { // $values is CommonFactureSignature object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonFactureSignaturePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the facture_signature table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonFactureSignaturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonFactureSignaturePeer::TABLE_NAME, $con, CommonFactureSignaturePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonFactureSignaturePeer::clearInstancePool();
            CommonFactureSignaturePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonFactureSignature or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonFactureSignature object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonFactureSignaturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonFactureSignaturePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonFactureSignature) { // it's a model object
            // invalidate the cache for this single object
            CommonFactureSignaturePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonFactureSignaturePeer::DATABASE_NAME);
            $criteria->add(CommonFactureSignaturePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonFactureSignaturePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonFactureSignaturePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonFactureSignaturePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonFactureSignature object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonFactureSignature $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonFactureSignaturePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonFactureSignaturePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonFactureSignaturePeer::DATABASE_NAME, CommonFactureSignaturePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonFactureSignature
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonFactureSignaturePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonFactureSignaturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonFactureSignaturePeer::DATABASE_NAME);
        $criteria->add(CommonFactureSignaturePeer::ID, $pk);

        $v = CommonFactureSignaturePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonFactureSignature[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonFactureSignaturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonFactureSignaturePeer::DATABASE_NAME);
            $criteria->add(CommonFactureSignaturePeer::ID, $pks, Criteria::IN);
            $objs = CommonFactureSignaturePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonFactureSignaturePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonFactureSignaturePeer::buildTableMap();

