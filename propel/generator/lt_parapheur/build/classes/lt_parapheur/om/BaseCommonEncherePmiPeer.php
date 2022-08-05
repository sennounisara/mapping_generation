<?php


/**
 * Base static class for performing query and update operations on the 'EncherePmi' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonEncherePmiPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'EncherePmi';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonEncherePmi';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonEncherePmiTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 27;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 27;

    /** the column name for the id field */
    const ID = 'EncherePmi.id';

    /** the column name for the organisme field */
    const ORGANISME = 'EncherePmi.organisme';

    /** the column name for the refConsultation field */
    const REFCONSULTATION = 'EncherePmi.refConsultation';

    /** the column name for the idEntiteeAssociee field */
    const IDENTITEEASSOCIEE = 'EncherePmi.idEntiteeAssociee';

    /** the column name for the referenceUtilisateur field */
    const REFERENCEUTILISATEUR = 'EncherePmi.referenceUtilisateur';

    /** the column name for the auteur field */
    const AUTEUR = 'EncherePmi.auteur';

    /** the column name for the idLot field */
    const IDLOT = 'EncherePmi.idLot';

    /** the column name for the objet field */
    const OBJET = 'EncherePmi.objet';

    /** the column name for the dateDebut field */
    const DATEDEBUT = 'EncherePmi.dateDebut';

    /** the column name for the dateFin field */
    const DATEFIN = 'EncherePmi.dateFin';

    /** the column name for the dateSuspension field */
    const DATESUSPENSION = 'EncherePmi.dateSuspension';

    /** the column name for the delaiProlongation field */
    const DELAIPROLONGATION = 'EncherePmi.delaiProlongation';

    /** the column name for the commentaire field */
    const COMMENTAIRE = 'EncherePmi.commentaire';

    /** the column name for the meilleureEnchereObligatoire field */
    const MEILLEUREENCHEREOBLIGATOIRE = 'EncherePmi.meilleureEnchereObligatoire';

    /** the column name for the typeBaremeNETC field */
    const TYPEBAREMENETC = 'EncherePmi.typeBaremeNETC';

    /** the column name for the typeBaremeEnchereGlobale field */
    const TYPEBAREMEENCHEREGLOBALE = 'EncherePmi.typeBaremeEnchereGlobale';

    /** the column name for the meilleurNoteHaute field */
    const MEILLEURNOTEHAUTE = 'EncherePmi.meilleurNoteHaute';

    /** the column name for the nbrCandidatsVisible field */
    const NBRCANDIDATSVISIBLE = 'EncherePmi.nbrCandidatsVisible';

    /** the column name for the listeCandidatsVisible field */
    const LISTECANDIDATSVISIBLE = 'EncherePmi.listeCandidatsVisible';

    /** the column name for the rangVisible field */
    const RANGVISIBLE = 'EncherePmi.rangVisible';

    /** the column name for the meilleureOffreVisible field */
    const MEILLEUREOFFREVISIBLE = 'EncherePmi.meilleureOffreVisible';

    /** the column name for the montantReserve field */
    const MONTANTRESERVE = 'EncherePmi.montantReserve';

    /** the column name for the noteMaxBaremeRelatif field */
    const NOTEMAXBAREMERELATIF = 'EncherePmi.noteMaxBaremeRelatif';

    /** the column name for the coeffA field */
    const COEFFA = 'EncherePmi.coeffA';

    /** the column name for the coeffB field */
    const COEFFB = 'EncherePmi.coeffB';

    /** the column name for the coeffC field */
    const COEFFC = 'EncherePmi.coeffC';

    /** the column name for the mail field */
    const MAIL = 'EncherePmi.mail';

    /** The enumerated values for the meilleureEnchereObligatoire field */
    const MEILLEUREENCHEREOBLIGATOIRE_0 = '0';
    const MEILLEUREENCHEREOBLIGATOIRE_1 = '1';

    /** The enumerated values for the typeBaremeNETC field */
    const TYPEBAREMENETC_1 = '1';
    const TYPEBAREMENETC_2 = '2';
    const TYPEBAREMENETC_3 = '3';
    const TYPEBAREMENETC_4 = '4';

    /** The enumerated values for the typeBaremeEnchereGlobale field */
    const TYPEBAREMEENCHEREGLOBALE_1 = '1';
    const TYPEBAREMEENCHEREGLOBALE_2 = '2';

    /** The enumerated values for the meilleurNoteHaute field */
    const MEILLEURNOTEHAUTE_0 = '0';
    const MEILLEURNOTEHAUTE_1 = '1';

    /** The enumerated values for the nbrCandidatsVisible field */
    const NBRCANDIDATSVISIBLE_0 = '0';
    const NBRCANDIDATSVISIBLE_1 = '1';

    /** The enumerated values for the listeCandidatsVisible field */
    const LISTECANDIDATSVISIBLE_0 = '0';
    const LISTECANDIDATSVISIBLE_1 = '1';

    /** The enumerated values for the rangVisible field */
    const RANGVISIBLE_0 = '0';
    const RANGVISIBLE_1 = '1';

    /** The enumerated values for the meilleureOffreVisible field */
    const MEILLEUREOFFREVISIBLE_0 = '0';
    const MEILLEUREOFFREVISIBLE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonEncherePmi objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonEncherePmi[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonEncherePmiPeer::$fieldNames[CommonEncherePmiPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'Refconsultation', 'Identiteeassociee', 'Referenceutilisateur', 'Auteur', 'Idlot', 'Objet', 'Datedebut', 'Datefin', 'Datesuspension', 'Delaiprolongation', 'Commentaire', 'Meilleureenchereobligatoire', 'Typebaremenetc', 'Typebaremeenchereglobale', 'Meilleurnotehaute', 'Nbrcandidatsvisible', 'Listecandidatsvisible', 'Rangvisible', 'Meilleureoffrevisible', 'Montantreserve', 'Notemaxbaremerelatif', 'Coeffa', 'Coeffb', 'Coeffc', 'Mail', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'refconsultation', 'identiteeassociee', 'referenceutilisateur', 'auteur', 'idlot', 'objet', 'datedebut', 'datefin', 'datesuspension', 'delaiprolongation', 'commentaire', 'meilleureenchereobligatoire', 'typebaremenetc', 'typebaremeenchereglobale', 'meilleurnotehaute', 'nbrcandidatsvisible', 'listecandidatsvisible', 'rangvisible', 'meilleureoffrevisible', 'montantreserve', 'notemaxbaremerelatif', 'coeffa', 'coeffb', 'coeffc', 'mail', ),
        BasePeer::TYPE_COLNAME => array (CommonEncherePmiPeer::ID, CommonEncherePmiPeer::ORGANISME, CommonEncherePmiPeer::REFCONSULTATION, CommonEncherePmiPeer::IDENTITEEASSOCIEE, CommonEncherePmiPeer::REFERENCEUTILISATEUR, CommonEncherePmiPeer::AUTEUR, CommonEncherePmiPeer::IDLOT, CommonEncherePmiPeer::OBJET, CommonEncherePmiPeer::DATEDEBUT, CommonEncherePmiPeer::DATEFIN, CommonEncherePmiPeer::DATESUSPENSION, CommonEncherePmiPeer::DELAIPROLONGATION, CommonEncherePmiPeer::COMMENTAIRE, CommonEncherePmiPeer::MEILLEUREENCHEREOBLIGATOIRE, CommonEncherePmiPeer::TYPEBAREMENETC, CommonEncherePmiPeer::TYPEBAREMEENCHEREGLOBALE, CommonEncherePmiPeer::MEILLEURNOTEHAUTE, CommonEncherePmiPeer::NBRCANDIDATSVISIBLE, CommonEncherePmiPeer::LISTECANDIDATSVISIBLE, CommonEncherePmiPeer::RANGVISIBLE, CommonEncherePmiPeer::MEILLEUREOFFREVISIBLE, CommonEncherePmiPeer::MONTANTRESERVE, CommonEncherePmiPeer::NOTEMAXBAREMERELATIF, CommonEncherePmiPeer::COEFFA, CommonEncherePmiPeer::COEFFB, CommonEncherePmiPeer::COEFFC, CommonEncherePmiPeer::MAIL, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'REFCONSULTATION', 'IDENTITEEASSOCIEE', 'REFERENCEUTILISATEUR', 'AUTEUR', 'IDLOT', 'OBJET', 'DATEDEBUT', 'DATEFIN', 'DATESUSPENSION', 'DELAIPROLONGATION', 'COMMENTAIRE', 'MEILLEUREENCHEREOBLIGATOIRE', 'TYPEBAREMENETC', 'TYPEBAREMEENCHEREGLOBALE', 'MEILLEURNOTEHAUTE', 'NBRCANDIDATSVISIBLE', 'LISTECANDIDATSVISIBLE', 'RANGVISIBLE', 'MEILLEUREOFFREVISIBLE', 'MONTANTRESERVE', 'NOTEMAXBAREMERELATIF', 'COEFFA', 'COEFFB', 'COEFFC', 'MAIL', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'refConsultation', 'idEntiteeAssociee', 'referenceUtilisateur', 'auteur', 'idLot', 'objet', 'dateDebut', 'dateFin', 'dateSuspension', 'delaiProlongation', 'commentaire', 'meilleureEnchereObligatoire', 'typeBaremeNETC', 'typeBaremeEnchereGlobale', 'meilleurNoteHaute', 'nbrCandidatsVisible', 'listeCandidatsVisible', 'rangVisible', 'meilleureOffreVisible', 'montantReserve', 'noteMaxBaremeRelatif', 'coeffA', 'coeffB', 'coeffC', 'mail', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonEncherePmiPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'Refconsultation' => 2, 'Identiteeassociee' => 3, 'Referenceutilisateur' => 4, 'Auteur' => 5, 'Idlot' => 6, 'Objet' => 7, 'Datedebut' => 8, 'Datefin' => 9, 'Datesuspension' => 10, 'Delaiprolongation' => 11, 'Commentaire' => 12, 'Meilleureenchereobligatoire' => 13, 'Typebaremenetc' => 14, 'Typebaremeenchereglobale' => 15, 'Meilleurnotehaute' => 16, 'Nbrcandidatsvisible' => 17, 'Listecandidatsvisible' => 18, 'Rangvisible' => 19, 'Meilleureoffrevisible' => 20, 'Montantreserve' => 21, 'Notemaxbaremerelatif' => 22, 'Coeffa' => 23, 'Coeffb' => 24, 'Coeffc' => 25, 'Mail' => 26, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'refconsultation' => 2, 'identiteeassociee' => 3, 'referenceutilisateur' => 4, 'auteur' => 5, 'idlot' => 6, 'objet' => 7, 'datedebut' => 8, 'datefin' => 9, 'datesuspension' => 10, 'delaiprolongation' => 11, 'commentaire' => 12, 'meilleureenchereobligatoire' => 13, 'typebaremenetc' => 14, 'typebaremeenchereglobale' => 15, 'meilleurnotehaute' => 16, 'nbrcandidatsvisible' => 17, 'listecandidatsvisible' => 18, 'rangvisible' => 19, 'meilleureoffrevisible' => 20, 'montantreserve' => 21, 'notemaxbaremerelatif' => 22, 'coeffa' => 23, 'coeffb' => 24, 'coeffc' => 25, 'mail' => 26, ),
        BasePeer::TYPE_COLNAME => array (CommonEncherePmiPeer::ID => 0, CommonEncherePmiPeer::ORGANISME => 1, CommonEncherePmiPeer::REFCONSULTATION => 2, CommonEncherePmiPeer::IDENTITEEASSOCIEE => 3, CommonEncherePmiPeer::REFERENCEUTILISATEUR => 4, CommonEncherePmiPeer::AUTEUR => 5, CommonEncherePmiPeer::IDLOT => 6, CommonEncherePmiPeer::OBJET => 7, CommonEncherePmiPeer::DATEDEBUT => 8, CommonEncherePmiPeer::DATEFIN => 9, CommonEncherePmiPeer::DATESUSPENSION => 10, CommonEncherePmiPeer::DELAIPROLONGATION => 11, CommonEncherePmiPeer::COMMENTAIRE => 12, CommonEncherePmiPeer::MEILLEUREENCHEREOBLIGATOIRE => 13, CommonEncherePmiPeer::TYPEBAREMENETC => 14, CommonEncherePmiPeer::TYPEBAREMEENCHEREGLOBALE => 15, CommonEncherePmiPeer::MEILLEURNOTEHAUTE => 16, CommonEncherePmiPeer::NBRCANDIDATSVISIBLE => 17, CommonEncherePmiPeer::LISTECANDIDATSVISIBLE => 18, CommonEncherePmiPeer::RANGVISIBLE => 19, CommonEncherePmiPeer::MEILLEUREOFFREVISIBLE => 20, CommonEncherePmiPeer::MONTANTRESERVE => 21, CommonEncherePmiPeer::NOTEMAXBAREMERELATIF => 22, CommonEncherePmiPeer::COEFFA => 23, CommonEncherePmiPeer::COEFFB => 24, CommonEncherePmiPeer::COEFFC => 25, CommonEncherePmiPeer::MAIL => 26, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'REFCONSULTATION' => 2, 'IDENTITEEASSOCIEE' => 3, 'REFERENCEUTILISATEUR' => 4, 'AUTEUR' => 5, 'IDLOT' => 6, 'OBJET' => 7, 'DATEDEBUT' => 8, 'DATEFIN' => 9, 'DATESUSPENSION' => 10, 'DELAIPROLONGATION' => 11, 'COMMENTAIRE' => 12, 'MEILLEUREENCHEREOBLIGATOIRE' => 13, 'TYPEBAREMENETC' => 14, 'TYPEBAREMEENCHEREGLOBALE' => 15, 'MEILLEURNOTEHAUTE' => 16, 'NBRCANDIDATSVISIBLE' => 17, 'LISTECANDIDATSVISIBLE' => 18, 'RANGVISIBLE' => 19, 'MEILLEUREOFFREVISIBLE' => 20, 'MONTANTRESERVE' => 21, 'NOTEMAXBAREMERELATIF' => 22, 'COEFFA' => 23, 'COEFFB' => 24, 'COEFFC' => 25, 'MAIL' => 26, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'refConsultation' => 2, 'idEntiteeAssociee' => 3, 'referenceUtilisateur' => 4, 'auteur' => 5, 'idLot' => 6, 'objet' => 7, 'dateDebut' => 8, 'dateFin' => 9, 'dateSuspension' => 10, 'delaiProlongation' => 11, 'commentaire' => 12, 'meilleureEnchereObligatoire' => 13, 'typeBaremeNETC' => 14, 'typeBaremeEnchereGlobale' => 15, 'meilleurNoteHaute' => 16, 'nbrCandidatsVisible' => 17, 'listeCandidatsVisible' => 18, 'rangVisible' => 19, 'meilleureOffreVisible' => 20, 'montantReserve' => 21, 'noteMaxBaremeRelatif' => 22, 'coeffA' => 23, 'coeffB' => 24, 'coeffC' => 25, 'mail' => 26, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonEncherePmiPeer::MEILLEUREENCHEREOBLIGATOIRE => array(
            CommonEncherePmiPeer::MEILLEUREENCHEREOBLIGATOIRE_0,
            CommonEncherePmiPeer::MEILLEUREENCHEREOBLIGATOIRE_1,
        ),
        CommonEncherePmiPeer::TYPEBAREMENETC => array(
            CommonEncherePmiPeer::TYPEBAREMENETC_1,
            CommonEncherePmiPeer::TYPEBAREMENETC_2,
            CommonEncherePmiPeer::TYPEBAREMENETC_3,
            CommonEncherePmiPeer::TYPEBAREMENETC_4,
        ),
        CommonEncherePmiPeer::TYPEBAREMEENCHEREGLOBALE => array(
            CommonEncherePmiPeer::TYPEBAREMEENCHEREGLOBALE_1,
            CommonEncherePmiPeer::TYPEBAREMEENCHEREGLOBALE_2,
        ),
        CommonEncherePmiPeer::MEILLEURNOTEHAUTE => array(
            CommonEncherePmiPeer::MEILLEURNOTEHAUTE_0,
            CommonEncherePmiPeer::MEILLEURNOTEHAUTE_1,
        ),
        CommonEncherePmiPeer::NBRCANDIDATSVISIBLE => array(
            CommonEncherePmiPeer::NBRCANDIDATSVISIBLE_0,
            CommonEncherePmiPeer::NBRCANDIDATSVISIBLE_1,
        ),
        CommonEncherePmiPeer::LISTECANDIDATSVISIBLE => array(
            CommonEncherePmiPeer::LISTECANDIDATSVISIBLE_0,
            CommonEncherePmiPeer::LISTECANDIDATSVISIBLE_1,
        ),
        CommonEncherePmiPeer::RANGVISIBLE => array(
            CommonEncherePmiPeer::RANGVISIBLE_0,
            CommonEncherePmiPeer::RANGVISIBLE_1,
        ),
        CommonEncherePmiPeer::MEILLEUREOFFREVISIBLE => array(
            CommonEncherePmiPeer::MEILLEUREOFFREVISIBLE_0,
            CommonEncherePmiPeer::MEILLEUREOFFREVISIBLE_1,
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
        $toNames = CommonEncherePmiPeer::getFieldNames($toType);
        $key = isset(CommonEncherePmiPeer::$fieldKeys[$fromType][$name]) ? CommonEncherePmiPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonEncherePmiPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonEncherePmiPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonEncherePmiPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonEncherePmiPeer::$enumValueSets;
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
        $valueSets = CommonEncherePmiPeer::getValueSets();

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
        $values = CommonEncherePmiPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonEncherePmiPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonEncherePmiPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonEncherePmiPeer::ID);
            $criteria->addSelectColumn(CommonEncherePmiPeer::ORGANISME);
            $criteria->addSelectColumn(CommonEncherePmiPeer::REFCONSULTATION);
            $criteria->addSelectColumn(CommonEncherePmiPeer::IDENTITEEASSOCIEE);
            $criteria->addSelectColumn(CommonEncherePmiPeer::REFERENCEUTILISATEUR);
            $criteria->addSelectColumn(CommonEncherePmiPeer::AUTEUR);
            $criteria->addSelectColumn(CommonEncherePmiPeer::IDLOT);
            $criteria->addSelectColumn(CommonEncherePmiPeer::OBJET);
            $criteria->addSelectColumn(CommonEncherePmiPeer::DATEDEBUT);
            $criteria->addSelectColumn(CommonEncherePmiPeer::DATEFIN);
            $criteria->addSelectColumn(CommonEncherePmiPeer::DATESUSPENSION);
            $criteria->addSelectColumn(CommonEncherePmiPeer::DELAIPROLONGATION);
            $criteria->addSelectColumn(CommonEncherePmiPeer::COMMENTAIRE);
            $criteria->addSelectColumn(CommonEncherePmiPeer::MEILLEUREENCHEREOBLIGATOIRE);
            $criteria->addSelectColumn(CommonEncherePmiPeer::TYPEBAREMENETC);
            $criteria->addSelectColumn(CommonEncherePmiPeer::TYPEBAREMEENCHEREGLOBALE);
            $criteria->addSelectColumn(CommonEncherePmiPeer::MEILLEURNOTEHAUTE);
            $criteria->addSelectColumn(CommonEncherePmiPeer::NBRCANDIDATSVISIBLE);
            $criteria->addSelectColumn(CommonEncherePmiPeer::LISTECANDIDATSVISIBLE);
            $criteria->addSelectColumn(CommonEncherePmiPeer::RANGVISIBLE);
            $criteria->addSelectColumn(CommonEncherePmiPeer::MEILLEUREOFFREVISIBLE);
            $criteria->addSelectColumn(CommonEncherePmiPeer::MONTANTRESERVE);
            $criteria->addSelectColumn(CommonEncherePmiPeer::NOTEMAXBAREMERELATIF);
            $criteria->addSelectColumn(CommonEncherePmiPeer::COEFFA);
            $criteria->addSelectColumn(CommonEncherePmiPeer::COEFFB);
            $criteria->addSelectColumn(CommonEncherePmiPeer::COEFFC);
            $criteria->addSelectColumn(CommonEncherePmiPeer::MAIL);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.refConsultation');
            $criteria->addSelectColumn($alias . '.idEntiteeAssociee');
            $criteria->addSelectColumn($alias . '.referenceUtilisateur');
            $criteria->addSelectColumn($alias . '.auteur');
            $criteria->addSelectColumn($alias . '.idLot');
            $criteria->addSelectColumn($alias . '.objet');
            $criteria->addSelectColumn($alias . '.dateDebut');
            $criteria->addSelectColumn($alias . '.dateFin');
            $criteria->addSelectColumn($alias . '.dateSuspension');
            $criteria->addSelectColumn($alias . '.delaiProlongation');
            $criteria->addSelectColumn($alias . '.commentaire');
            $criteria->addSelectColumn($alias . '.meilleureEnchereObligatoire');
            $criteria->addSelectColumn($alias . '.typeBaremeNETC');
            $criteria->addSelectColumn($alias . '.typeBaremeEnchereGlobale');
            $criteria->addSelectColumn($alias . '.meilleurNoteHaute');
            $criteria->addSelectColumn($alias . '.nbrCandidatsVisible');
            $criteria->addSelectColumn($alias . '.listeCandidatsVisible');
            $criteria->addSelectColumn($alias . '.rangVisible');
            $criteria->addSelectColumn($alias . '.meilleureOffreVisible');
            $criteria->addSelectColumn($alias . '.montantReserve');
            $criteria->addSelectColumn($alias . '.noteMaxBaremeRelatif');
            $criteria->addSelectColumn($alias . '.coeffA');
            $criteria->addSelectColumn($alias . '.coeffB');
            $criteria->addSelectColumn($alias . '.coeffC');
            $criteria->addSelectColumn($alias . '.mail');
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
        $criteria->setPrimaryTableName(CommonEncherePmiPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonEncherePmiPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonEncherePmiPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonEncherePmiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEncherePmi
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonEncherePmiPeer::doSelect($critcopy, $con);
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
        return CommonEncherePmiPeer::populateObjects(CommonEncherePmiPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonEncherePmiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonEncherePmiPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEncherePmiPeer::DATABASE_NAME);

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
     * @param      CommonEncherePmi $obj A CommonEncherePmi object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonEncherePmiPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonEncherePmi object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonEncherePmi) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonEncherePmi object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonEncherePmiPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonEncherePmi Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonEncherePmiPeer::$instances[$key])) {
                return CommonEncherePmiPeer::$instances[$key];
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
        foreach (CommonEncherePmiPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonEncherePmiPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to EncherePmi
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
        $cls = CommonEncherePmiPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonEncherePmiPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonEncherePmiPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonEncherePmiPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonEncherePmi object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonEncherePmiPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonEncherePmiPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonEncherePmiPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonEncherePmiPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonEncherePmiPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonEncherePmiPeer::DATABASE_NAME)->getTable(CommonEncherePmiPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonEncherePmiPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonEncherePmiPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonEncherePmiTableMap());
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
        return CommonEncherePmiPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonEncherePmi or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEncherePmi object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEncherePmiPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonEncherePmi object
        }

        if ($criteria->containsKey(CommonEncherePmiPeer::ID) && $criteria->keyContainsValue(CommonEncherePmiPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonEncherePmiPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonEncherePmiPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonEncherePmi or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEncherePmi object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEncherePmiPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonEncherePmiPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonEncherePmiPeer::ID);
            $value = $criteria->remove(CommonEncherePmiPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonEncherePmiPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonEncherePmiPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonEncherePmiPeer::ORGANISME);
            $value = $criteria->remove(CommonEncherePmiPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonEncherePmiPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonEncherePmiPeer::TABLE_NAME);
            }

        } else { // $values is CommonEncherePmi object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonEncherePmiPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the EncherePmi table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEncherePmiPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonEncherePmiPeer::TABLE_NAME, $con, CommonEncherePmiPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonEncherePmiPeer::clearInstancePool();
            CommonEncherePmiPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonEncherePmi or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonEncherePmi object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonEncherePmiPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonEncherePmiPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonEncherePmi) { // it's a model object
            // invalidate the cache for this single object
            CommonEncherePmiPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonEncherePmiPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonEncherePmiPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonEncherePmiPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonEncherePmiPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEncherePmiPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonEncherePmiPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonEncherePmi object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonEncherePmi $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonEncherePmiPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonEncherePmiPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonEncherePmiPeer::DATABASE_NAME, CommonEncherePmiPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonEncherePmi
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonEncherePmiPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonEncherePmiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonEncherePmiPeer::DATABASE_NAME);
        $criteria->add(CommonEncherePmiPeer::ID, $id);
        $criteria->add(CommonEncherePmiPeer::ORGANISME, $organisme);
        $v = CommonEncherePmiPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonEncherePmiPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonEncherePmiPeer::buildTableMap();

