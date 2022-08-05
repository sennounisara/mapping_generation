<?php


/**
 * Base static class for performing query and update operations on the 'caution_signature' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCautionSignaturePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'caution_signature';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonCautionSignature';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonCautionSignatureTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 25;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 25;

    /** the column name for the ID field */
    const ID = 'caution_signature.ID';

    /** the column name for the ID_BLOB field */
    const ID_BLOB = 'caution_signature.ID_BLOB';

    /** the column name for the ID_DEMANDE field */
    const ID_DEMANDE = 'caution_signature.ID_DEMANDE';

    /** the column name for the ID_AGENT_SIGNATAIRE field */
    const ID_AGENT_SIGNATAIRE = 'caution_signature.ID_AGENT_SIGNATAIRE';

    /** the column name for the REVISION field */
    const REVISION = 'caution_signature.REVISION';

    /** the column name for the TYPE_DOCUMENT field */
    const TYPE_DOCUMENT = 'caution_signature.TYPE_DOCUMENT';

    /** the column name for the DATE_SIGNATURE field */
    const DATE_SIGNATURE = 'caution_signature.DATE_SIGNATURE';

    /** the column name for the EMETTEUR field */
    const EMETTEUR = 'caution_signature.EMETTEUR';

    /** the column name for the DETAIL_EMETTEUR field */
    const DETAIL_EMETTEUR = 'caution_signature.DETAIL_EMETTEUR';

    /** the column name for the SIGNATAIRE field */
    const SIGNATAIRE = 'caution_signature.SIGNATAIRE';

    /** the column name for the DETAIL_SIGNATAIRE field */
    const DETAIL_SIGNATAIRE = 'caution_signature.DETAIL_SIGNATAIRE';

    /** the column name for the REVOQUE field */
    const REVOQUE = 'caution_signature.REVOQUE';

    /** the column name for the NON_REPUDIATION field */
    const NON_REPUDIATION = 'caution_signature.NON_REPUDIATION';

    /** the column name for the CHAINE_VALIDE field */
    const CHAINE_VALIDE = 'caution_signature.CHAINE_VALIDE';

    /** the column name for the DATE_DEB_PERIODE_VALIDITE field */
    const DATE_DEB_PERIODE_VALIDITE = 'caution_signature.DATE_DEB_PERIODE_VALIDITE';

    /** the column name for the DATE_FIN_PERIODE_VALIDITE field */
    const DATE_FIN_PERIODE_VALIDITE = 'caution_signature.DATE_FIN_PERIODE_VALIDITE';

    /** the column name for the PERIODE_VALIDITE field */
    const PERIODE_VALIDITE = 'caution_signature.PERIODE_VALIDITE';

    /** the column name for the SIGNATURE_VALIDE field */
    const SIGNATURE_VALIDE = 'caution_signature.SIGNATURE_VALIDE';

    /** the column name for the TYPE_SIGNATURE field */
    const TYPE_SIGNATURE = 'caution_signature.TYPE_SIGNATURE';

    /** the column name for the XML_SIGNATURE field */
    const XML_SIGNATURE = 'caution_signature.XML_SIGNATURE';

    /** the column name for the NOM_FICHIER field */
    const NOM_FICHIER = 'caution_signature.NOM_FICHIER';

    /** the column name for the HASH field */
    const HASH = 'caution_signature.HASH';

    /** the column name for the ALGORITHME_HASH field */
    const ALGORITHME_HASH = 'caution_signature.ALGORITHME_HASH';

    /** the column name for the DATE_DERNIERE_VERIFICATION field */
    const DATE_DERNIERE_VERIFICATION = 'caution_signature.DATE_DERNIERE_VERIFICATION';

    /** the column name for the SIGNATURE_ARCHIVEE field */
    const SIGNATURE_ARCHIVEE = 'caution_signature.SIGNATURE_ARCHIVEE';

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
     * An identity map to hold any loaded instances of CommonCautionSignature objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonCautionSignature[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonCautionSignaturePeer::$fieldNames[CommonCautionSignaturePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdBlob', 'IdDemande', 'IdAgentSignataire', 'Revision', 'TypeDocument', 'DateSignature', 'Emetteur', 'DetailEmetteur', 'Signataire', 'DetailSignataire', 'Revoque', 'NonRepudiation', 'ChaineValide', 'DateDebPeriodeValidite', 'DateFinPeriodeValidite', 'PeriodeValidite', 'SignatureValide', 'TypeSignature', 'XmlSignature', 'NomFichier', 'Hash', 'AlgorithmeHash', 'DateDerniereVerification', 'SignatureArchivee', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idBlob', 'idDemande', 'idAgentSignataire', 'revision', 'typeDocument', 'dateSignature', 'emetteur', 'detailEmetteur', 'signataire', 'detailSignataire', 'revoque', 'nonRepudiation', 'chaineValide', 'dateDebPeriodeValidite', 'dateFinPeriodeValidite', 'periodeValidite', 'signatureValide', 'typeSignature', 'xmlSignature', 'nomFichier', 'hash', 'algorithmeHash', 'dateDerniereVerification', 'signatureArchivee', ),
        BasePeer::TYPE_COLNAME => array (CommonCautionSignaturePeer::ID, CommonCautionSignaturePeer::ID_BLOB, CommonCautionSignaturePeer::ID_DEMANDE, CommonCautionSignaturePeer::ID_AGENT_SIGNATAIRE, CommonCautionSignaturePeer::REVISION, CommonCautionSignaturePeer::TYPE_DOCUMENT, CommonCautionSignaturePeer::DATE_SIGNATURE, CommonCautionSignaturePeer::EMETTEUR, CommonCautionSignaturePeer::DETAIL_EMETTEUR, CommonCautionSignaturePeer::SIGNATAIRE, CommonCautionSignaturePeer::DETAIL_SIGNATAIRE, CommonCautionSignaturePeer::REVOQUE, CommonCautionSignaturePeer::NON_REPUDIATION, CommonCautionSignaturePeer::CHAINE_VALIDE, CommonCautionSignaturePeer::DATE_DEB_PERIODE_VALIDITE, CommonCautionSignaturePeer::DATE_FIN_PERIODE_VALIDITE, CommonCautionSignaturePeer::PERIODE_VALIDITE, CommonCautionSignaturePeer::SIGNATURE_VALIDE, CommonCautionSignaturePeer::TYPE_SIGNATURE, CommonCautionSignaturePeer::XML_SIGNATURE, CommonCautionSignaturePeer::NOM_FICHIER, CommonCautionSignaturePeer::HASH, CommonCautionSignaturePeer::ALGORITHME_HASH, CommonCautionSignaturePeer::DATE_DERNIERE_VERIFICATION, CommonCautionSignaturePeer::SIGNATURE_ARCHIVEE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_BLOB', 'ID_DEMANDE', 'ID_AGENT_SIGNATAIRE', 'REVISION', 'TYPE_DOCUMENT', 'DATE_SIGNATURE', 'EMETTEUR', 'DETAIL_EMETTEUR', 'SIGNATAIRE', 'DETAIL_SIGNATAIRE', 'REVOQUE', 'NON_REPUDIATION', 'CHAINE_VALIDE', 'DATE_DEB_PERIODE_VALIDITE', 'DATE_FIN_PERIODE_VALIDITE', 'PERIODE_VALIDITE', 'SIGNATURE_VALIDE', 'TYPE_SIGNATURE', 'XML_SIGNATURE', 'NOM_FICHIER', 'HASH', 'ALGORITHME_HASH', 'DATE_DERNIERE_VERIFICATION', 'SIGNATURE_ARCHIVEE', ),
        BasePeer::TYPE_FIELDNAME => array ('ID', 'ID_BLOB', 'ID_DEMANDE', 'ID_AGENT_SIGNATAIRE', 'REVISION', 'TYPE_DOCUMENT', 'DATE_SIGNATURE', 'EMETTEUR', 'DETAIL_EMETTEUR', 'SIGNATAIRE', 'DETAIL_SIGNATAIRE', 'REVOQUE', 'NON_REPUDIATION', 'CHAINE_VALIDE', 'DATE_DEB_PERIODE_VALIDITE', 'DATE_FIN_PERIODE_VALIDITE', 'PERIODE_VALIDITE', 'SIGNATURE_VALIDE', 'TYPE_SIGNATURE', 'XML_SIGNATURE', 'NOM_FICHIER', 'HASH', 'ALGORITHME_HASH', 'DATE_DERNIERE_VERIFICATION', 'SIGNATURE_ARCHIVEE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonCautionSignaturePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdBlob' => 1, 'IdDemande' => 2, 'IdAgentSignataire' => 3, 'Revision' => 4, 'TypeDocument' => 5, 'DateSignature' => 6, 'Emetteur' => 7, 'DetailEmetteur' => 8, 'Signataire' => 9, 'DetailSignataire' => 10, 'Revoque' => 11, 'NonRepudiation' => 12, 'ChaineValide' => 13, 'DateDebPeriodeValidite' => 14, 'DateFinPeriodeValidite' => 15, 'PeriodeValidite' => 16, 'SignatureValide' => 17, 'TypeSignature' => 18, 'XmlSignature' => 19, 'NomFichier' => 20, 'Hash' => 21, 'AlgorithmeHash' => 22, 'DateDerniereVerification' => 23, 'SignatureArchivee' => 24, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idBlob' => 1, 'idDemande' => 2, 'idAgentSignataire' => 3, 'revision' => 4, 'typeDocument' => 5, 'dateSignature' => 6, 'emetteur' => 7, 'detailEmetteur' => 8, 'signataire' => 9, 'detailSignataire' => 10, 'revoque' => 11, 'nonRepudiation' => 12, 'chaineValide' => 13, 'dateDebPeriodeValidite' => 14, 'dateFinPeriodeValidite' => 15, 'periodeValidite' => 16, 'signatureValide' => 17, 'typeSignature' => 18, 'xmlSignature' => 19, 'nomFichier' => 20, 'hash' => 21, 'algorithmeHash' => 22, 'dateDerniereVerification' => 23, 'signatureArchivee' => 24, ),
        BasePeer::TYPE_COLNAME => array (CommonCautionSignaturePeer::ID => 0, CommonCautionSignaturePeer::ID_BLOB => 1, CommonCautionSignaturePeer::ID_DEMANDE => 2, CommonCautionSignaturePeer::ID_AGENT_SIGNATAIRE => 3, CommonCautionSignaturePeer::REVISION => 4, CommonCautionSignaturePeer::TYPE_DOCUMENT => 5, CommonCautionSignaturePeer::DATE_SIGNATURE => 6, CommonCautionSignaturePeer::EMETTEUR => 7, CommonCautionSignaturePeer::DETAIL_EMETTEUR => 8, CommonCautionSignaturePeer::SIGNATAIRE => 9, CommonCautionSignaturePeer::DETAIL_SIGNATAIRE => 10, CommonCautionSignaturePeer::REVOQUE => 11, CommonCautionSignaturePeer::NON_REPUDIATION => 12, CommonCautionSignaturePeer::CHAINE_VALIDE => 13, CommonCautionSignaturePeer::DATE_DEB_PERIODE_VALIDITE => 14, CommonCautionSignaturePeer::DATE_FIN_PERIODE_VALIDITE => 15, CommonCautionSignaturePeer::PERIODE_VALIDITE => 16, CommonCautionSignaturePeer::SIGNATURE_VALIDE => 17, CommonCautionSignaturePeer::TYPE_SIGNATURE => 18, CommonCautionSignaturePeer::XML_SIGNATURE => 19, CommonCautionSignaturePeer::NOM_FICHIER => 20, CommonCautionSignaturePeer::HASH => 21, CommonCautionSignaturePeer::ALGORITHME_HASH => 22, CommonCautionSignaturePeer::DATE_DERNIERE_VERIFICATION => 23, CommonCautionSignaturePeer::SIGNATURE_ARCHIVEE => 24, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_BLOB' => 1, 'ID_DEMANDE' => 2, 'ID_AGENT_SIGNATAIRE' => 3, 'REVISION' => 4, 'TYPE_DOCUMENT' => 5, 'DATE_SIGNATURE' => 6, 'EMETTEUR' => 7, 'DETAIL_EMETTEUR' => 8, 'SIGNATAIRE' => 9, 'DETAIL_SIGNATAIRE' => 10, 'REVOQUE' => 11, 'NON_REPUDIATION' => 12, 'CHAINE_VALIDE' => 13, 'DATE_DEB_PERIODE_VALIDITE' => 14, 'DATE_FIN_PERIODE_VALIDITE' => 15, 'PERIODE_VALIDITE' => 16, 'SIGNATURE_VALIDE' => 17, 'TYPE_SIGNATURE' => 18, 'XML_SIGNATURE' => 19, 'NOM_FICHIER' => 20, 'HASH' => 21, 'ALGORITHME_HASH' => 22, 'DATE_DERNIERE_VERIFICATION' => 23, 'SIGNATURE_ARCHIVEE' => 24, ),
        BasePeer::TYPE_FIELDNAME => array ('ID' => 0, 'ID_BLOB' => 1, 'ID_DEMANDE' => 2, 'ID_AGENT_SIGNATAIRE' => 3, 'REVISION' => 4, 'TYPE_DOCUMENT' => 5, 'DATE_SIGNATURE' => 6, 'EMETTEUR' => 7, 'DETAIL_EMETTEUR' => 8, 'SIGNATAIRE' => 9, 'DETAIL_SIGNATAIRE' => 10, 'REVOQUE' => 11, 'NON_REPUDIATION' => 12, 'CHAINE_VALIDE' => 13, 'DATE_DEB_PERIODE_VALIDITE' => 14, 'DATE_FIN_PERIODE_VALIDITE' => 15, 'PERIODE_VALIDITE' => 16, 'SIGNATURE_VALIDE' => 17, 'TYPE_SIGNATURE' => 18, 'XML_SIGNATURE' => 19, 'NOM_FICHIER' => 20, 'HASH' => 21, 'ALGORITHME_HASH' => 22, 'DATE_DERNIERE_VERIFICATION' => 23, 'SIGNATURE_ARCHIVEE' => 24, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonCautionSignaturePeer::TYPE_DOCUMENT => array(
            CommonCautionSignaturePeer::TYPE_DOCUMENT_0,
            CommonCautionSignaturePeer::TYPE_DOCUMENT_1,
        ),
        CommonCautionSignaturePeer::REVOQUE => array(
            CommonCautionSignaturePeer::REVOQUE_0,
            CommonCautionSignaturePeer::REVOQUE_1,
        ),
        CommonCautionSignaturePeer::NON_REPUDIATION => array(
            CommonCautionSignaturePeer::NON_REPUDIATION_0,
            CommonCautionSignaturePeer::NON_REPUDIATION_1,
        ),
        CommonCautionSignaturePeer::CHAINE_VALIDE => array(
            CommonCautionSignaturePeer::CHAINE_VALIDE_0,
            CommonCautionSignaturePeer::CHAINE_VALIDE_1,
        ),
        CommonCautionSignaturePeer::PERIODE_VALIDITE => array(
            CommonCautionSignaturePeer::PERIODE_VALIDITE_0,
            CommonCautionSignaturePeer::PERIODE_VALIDITE_1,
        ),
        CommonCautionSignaturePeer::SIGNATURE_VALIDE => array(
            CommonCautionSignaturePeer::SIGNATURE_VALIDE_0,
            CommonCautionSignaturePeer::SIGNATURE_VALIDE_1,
        ),
        CommonCautionSignaturePeer::TYPE_SIGNATURE => array(
            CommonCautionSignaturePeer::TYPE_SIGNATURE_1,
            CommonCautionSignaturePeer::TYPE_SIGNATURE_2,
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
        $toNames = CommonCautionSignaturePeer::getFieldNames($toType);
        $key = isset(CommonCautionSignaturePeer::$fieldKeys[$fromType][$name]) ? CommonCautionSignaturePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonCautionSignaturePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonCautionSignaturePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonCautionSignaturePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonCautionSignaturePeer::$enumValueSets;
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
        $valueSets = CommonCautionSignaturePeer::getValueSets();

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
        $values = CommonCautionSignaturePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonCautionSignaturePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonCautionSignaturePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonCautionSignaturePeer::ID);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::ID_BLOB);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::ID_DEMANDE);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::ID_AGENT_SIGNATAIRE);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::REVISION);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::TYPE_DOCUMENT);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::DATE_SIGNATURE);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::EMETTEUR);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::DETAIL_EMETTEUR);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::SIGNATAIRE);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::DETAIL_SIGNATAIRE);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::REVOQUE);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::NON_REPUDIATION);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::CHAINE_VALIDE);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::DATE_DEB_PERIODE_VALIDITE);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::DATE_FIN_PERIODE_VALIDITE);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::PERIODE_VALIDITE);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::SIGNATURE_VALIDE);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::TYPE_SIGNATURE);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::XML_SIGNATURE);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::NOM_FICHIER);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::HASH);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::ALGORITHME_HASH);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::DATE_DERNIERE_VERIFICATION);
            $criteria->addSelectColumn(CommonCautionSignaturePeer::SIGNATURE_ARCHIVEE);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.ID_BLOB');
            $criteria->addSelectColumn($alias . '.ID_DEMANDE');
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
        $criteria->setPrimaryTableName(CommonCautionSignaturePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonCautionSignaturePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonCautionSignaturePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionSignaturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCautionSignature
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonCautionSignaturePeer::doSelect($critcopy, $con);
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
        return CommonCautionSignaturePeer::populateObjects(CommonCautionSignaturePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonCautionSignaturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonCautionSignaturePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonCautionSignaturePeer::DATABASE_NAME);

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
     * @param      CommonCautionSignature $obj A CommonCautionSignature object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonCautionSignaturePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonCautionSignature object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonCautionSignature) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonCautionSignature object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonCautionSignaturePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonCautionSignature Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonCautionSignaturePeer::$instances[$key])) {
                return CommonCautionSignaturePeer::$instances[$key];
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
        foreach (CommonCautionSignaturePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonCautionSignaturePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to caution_signature
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
        $cls = CommonCautionSignaturePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonCautionSignaturePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonCautionSignaturePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonCautionSignaturePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonCautionSignature object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonCautionSignaturePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonCautionSignaturePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonCautionSignaturePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonCautionSignaturePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonCautionSignaturePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonCautionSignaturePeer::DATABASE_NAME)->getTable(CommonCautionSignaturePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonCautionSignaturePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonCautionSignaturePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonCautionSignatureTableMap());
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
        return CommonCautionSignaturePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonCautionSignature or Criteria object.
     *
     * @param      mixed $values Criteria or CommonCautionSignature object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionSignaturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonCautionSignature object
        }

        if ($criteria->containsKey(CommonCautionSignaturePeer::ID) && $criteria->keyContainsValue(CommonCautionSignaturePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonCautionSignaturePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonCautionSignaturePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonCautionSignature or Criteria object.
     *
     * @param      mixed $values Criteria or CommonCautionSignature object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionSignaturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonCautionSignaturePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonCautionSignaturePeer::ID);
            $value = $criteria->remove(CommonCautionSignaturePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonCautionSignaturePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonCautionSignaturePeer::TABLE_NAME);
            }

        } else { // $values is CommonCautionSignature object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonCautionSignaturePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the caution_signature table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionSignaturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonCautionSignaturePeer::TABLE_NAME, $con, CommonCautionSignaturePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonCautionSignaturePeer::clearInstancePool();
            CommonCautionSignaturePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonCautionSignature or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonCautionSignature object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonCautionSignaturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonCautionSignaturePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonCautionSignature) { // it's a model object
            // invalidate the cache for this single object
            CommonCautionSignaturePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonCautionSignaturePeer::DATABASE_NAME);
            $criteria->add(CommonCautionSignaturePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonCautionSignaturePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonCautionSignaturePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonCautionSignaturePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonCautionSignature object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonCautionSignature $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonCautionSignaturePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonCautionSignaturePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonCautionSignaturePeer::DATABASE_NAME, CommonCautionSignaturePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonCautionSignature
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonCautionSignaturePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonCautionSignaturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonCautionSignaturePeer::DATABASE_NAME);
        $criteria->add(CommonCautionSignaturePeer::ID, $pk);

        $v = CommonCautionSignaturePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonCautionSignature[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionSignaturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonCautionSignaturePeer::DATABASE_NAME);
            $criteria->add(CommonCautionSignaturePeer::ID, $pks, Criteria::IN);
            $objs = CommonCautionSignaturePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonCautionSignaturePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonCautionSignaturePeer::buildTableMap();

