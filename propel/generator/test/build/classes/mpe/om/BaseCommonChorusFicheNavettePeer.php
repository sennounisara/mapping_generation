<?php


/**
 * Base static class for performing query and update operations on the 'Chorus_Fiche_Navette' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonChorusFicheNavettePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Chorus_Fiche_Navette';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonChorusFicheNavette';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonChorusFicheNavetteTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 35;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 35;

    /** the column name for the id field */
    const ID = 'Chorus_Fiche_Navette.id';

    /** the column name for the organisme field */
    const ORGANISME = 'Chorus_Fiche_Navette.organisme';

    /** the column name for the id_chorus_echange field */
    const ID_CHORUS_ECHANGE = 'Chorus_Fiche_Navette.id_chorus_echange';

    /** the column name for the rpa field */
    const RPA = 'Chorus_Fiche_Navette.rpa';

    /** the column name for the objet field */
    const OBJET = 'Chorus_Fiche_Navette.objet';

    /** the column name for the fiche_immobilisation field */
    const FICHE_IMMOBILISATION = 'Chorus_Fiche_Navette.fiche_immobilisation';

    /** the column name for the attente_pj field */
    const ATTENTE_PJ = 'Chorus_Fiche_Navette.attente_pj';

    /** the column name for the marche_partage field */
    const MARCHE_PARTAGE = 'Chorus_Fiche_Navette.marche_partage';

    /** the column name for the id_accord_cadre field */
    const ID_ACCORD_CADRE = 'Chorus_Fiche_Navette.id_accord_cadre';

    /** the column name for the lib_accord_cadre field */
    const LIB_ACCORD_CADRE = 'Chorus_Fiche_Navette.lib_accord_cadre';

    /** the column name for the annee_creation_accord_cadre field */
    const ANNEE_CREATION_ACCORD_CADRE = 'Chorus_Fiche_Navette.annee_creation_accord_cadre';

    /** the column name for the montant_ht field */
    const MONTANT_HT = 'Chorus_Fiche_Navette.montant_ht';

    /** the column name for the reconductible field */
    const RECONDUCTIBLE = 'Chorus_Fiche_Navette.reconductible';

    /** the column name for the visa_accf field */
    const VISA_ACCF = 'Chorus_Fiche_Navette.visa_accf';

    /** the column name for the visa_prefet field */
    const VISA_PREFET = 'Chorus_Fiche_Navette.visa_prefet';

    /** the column name for the retenue_garantie field */
    const RETENUE_GARANTIE = 'Chorus_Fiche_Navette.retenue_garantie';

    /** the column name for the montant_mini field */
    const MONTANT_MINI = 'Chorus_Fiche_Navette.montant_mini';

    /** the column name for the montant_maxi field */
    const MONTANT_MAXI = 'Chorus_Fiche_Navette.montant_maxi';

    /** the column name for the montant_forfaitaire field */
    const MONTANT_FORFAITAIRE = 'Chorus_Fiche_Navette.montant_forfaitaire';

    /** the column name for the montant_bc field */
    const MONTANT_BC = 'Chorus_Fiche_Navette.montant_bc';

    /** the column name for the taux_tva field */
    const TAUX_TVA = 'Chorus_Fiche_Navette.taux_tva';

    /** the column name for the centre_cout field */
    const CENTRE_COUT = 'Chorus_Fiche_Navette.centre_cout';

    /** the column name for the centre_financier field */
    const CENTRE_FINANCIER = 'Chorus_Fiche_Navette.centre_financier';

    /** the column name for the activite field */
    const ACTIVITE = 'Chorus_Fiche_Navette.activite';

    /** the column name for the domaine_fonctionnel field */
    const DOMAINE_FONCTIONNEL = 'Chorus_Fiche_Navette.domaine_fonctionnel';

    /** the column name for the fond field */
    const FOND = 'Chorus_Fiche_Navette.fond';

    /** the column name for the localisation_interministerielle field */
    const LOCALISATION_INTERMINISTERIELLE = 'Chorus_Fiche_Navette.localisation_interministerielle';

    /** the column name for the nature field */
    const NATURE = 'Chorus_Fiche_Navette.nature';

    /** the column name for the axe_ministeriel1 field */
    const AXE_MINISTERIEL1 = 'Chorus_Fiche_Navette.axe_ministeriel1';

    /** the column name for the projet_analytique field */
    const PROJET_ANALYTIQUE = 'Chorus_Fiche_Navette.projet_analytique';

    /** the column name for the localisation_ministerielle field */
    const LOCALISATION_MINISTERIELLE = 'Chorus_Fiche_Navette.localisation_ministerielle';

    /** the column name for the axe_ministeriel2 field */
    const AXE_MINISTERIEL2 = 'Chorus_Fiche_Navette.axe_ministeriel2';

    /** the column name for the remarques field */
    const REMARQUES = 'Chorus_Fiche_Navette.remarques';

    /** the column name for the id_document field */
    const ID_DOCUMENT = 'Chorus_Fiche_Navette.id_document';

    /** the column name for the nom_document field */
    const NOM_DOCUMENT = 'Chorus_Fiche_Navette.nom_document';

    /** The enumerated values for the fiche_immobilisation field */
    const FICHE_IMMOBILISATION_0 = '0';
    const FICHE_IMMOBILISATION_1 = '1';

    /** The enumerated values for the attente_pj field */
    const ATTENTE_PJ_0 = '0';
    const ATTENTE_PJ_1 = '1';

    /** The enumerated values for the marche_partage field */
    const MARCHE_PARTAGE_0 = '0';
    const MARCHE_PARTAGE_1 = '1';

    /** The enumerated values for the reconductible field */
    const RECONDUCTIBLE_0 = '0';
    const RECONDUCTIBLE_1 = '1';

    /** The enumerated values for the visa_accf field */
    const VISA_ACCF_0 = '0';
    const VISA_ACCF_1 = '1';

    /** The enumerated values for the visa_prefet field */
    const VISA_PREFET_0 = '0';
    const VISA_PREFET_1 = '1';

    /** The enumerated values for the retenue_garantie field */
    const RETENUE_GARANTIE_0 = '0';
    const RETENUE_GARANTIE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonChorusFicheNavette objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonChorusFicheNavette[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonChorusFicheNavettePeer::$fieldNames[CommonChorusFicheNavettePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'IdChorusEchange', 'Rpa', 'Objet', 'FicheImmobilisation', 'AttentePj', 'MarchePartage', 'IdAccordCadre', 'LibAccordCadre', 'AnneeCreationAccordCadre', 'MontantHt', 'Reconductible', 'VisaAccf', 'VisaPrefet', 'RetenueGarantie', 'MontantMini', 'MontantMaxi', 'MontantForfaitaire', 'MontantBc', 'TauxTva', 'CentreCout', 'CentreFinancier', 'Activite', 'DomaineFonctionnel', 'Fond', 'LocalisationInterministerielle', 'Nature', 'AxeMinisteriel1', 'ProjetAnalytique', 'LocalisationMinisterielle', 'AxeMinisteriel2', 'Remarques', 'IdDocument', 'NomDocument', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'idChorusEchange', 'rpa', 'objet', 'ficheImmobilisation', 'attentePj', 'marchePartage', 'idAccordCadre', 'libAccordCadre', 'anneeCreationAccordCadre', 'montantHt', 'reconductible', 'visaAccf', 'visaPrefet', 'retenueGarantie', 'montantMini', 'montantMaxi', 'montantForfaitaire', 'montantBc', 'tauxTva', 'centreCout', 'centreFinancier', 'activite', 'domaineFonctionnel', 'fond', 'localisationInterministerielle', 'nature', 'axeMinisteriel1', 'projetAnalytique', 'localisationMinisterielle', 'axeMinisteriel2', 'remarques', 'idDocument', 'nomDocument', ),
        BasePeer::TYPE_COLNAME => array (CommonChorusFicheNavettePeer::ID, CommonChorusFicheNavettePeer::ORGANISME, CommonChorusFicheNavettePeer::ID_CHORUS_ECHANGE, CommonChorusFicheNavettePeer::RPA, CommonChorusFicheNavettePeer::OBJET, CommonChorusFicheNavettePeer::FICHE_IMMOBILISATION, CommonChorusFicheNavettePeer::ATTENTE_PJ, CommonChorusFicheNavettePeer::MARCHE_PARTAGE, CommonChorusFicheNavettePeer::ID_ACCORD_CADRE, CommonChorusFicheNavettePeer::LIB_ACCORD_CADRE, CommonChorusFicheNavettePeer::ANNEE_CREATION_ACCORD_CADRE, CommonChorusFicheNavettePeer::MONTANT_HT, CommonChorusFicheNavettePeer::RECONDUCTIBLE, CommonChorusFicheNavettePeer::VISA_ACCF, CommonChorusFicheNavettePeer::VISA_PREFET, CommonChorusFicheNavettePeer::RETENUE_GARANTIE, CommonChorusFicheNavettePeer::MONTANT_MINI, CommonChorusFicheNavettePeer::MONTANT_MAXI, CommonChorusFicheNavettePeer::MONTANT_FORFAITAIRE, CommonChorusFicheNavettePeer::MONTANT_BC, CommonChorusFicheNavettePeer::TAUX_TVA, CommonChorusFicheNavettePeer::CENTRE_COUT, CommonChorusFicheNavettePeer::CENTRE_FINANCIER, CommonChorusFicheNavettePeer::ACTIVITE, CommonChorusFicheNavettePeer::DOMAINE_FONCTIONNEL, CommonChorusFicheNavettePeer::FOND, CommonChorusFicheNavettePeer::LOCALISATION_INTERMINISTERIELLE, CommonChorusFicheNavettePeer::NATURE, CommonChorusFicheNavettePeer::AXE_MINISTERIEL1, CommonChorusFicheNavettePeer::PROJET_ANALYTIQUE, CommonChorusFicheNavettePeer::LOCALISATION_MINISTERIELLE, CommonChorusFicheNavettePeer::AXE_MINISTERIEL2, CommonChorusFicheNavettePeer::REMARQUES, CommonChorusFicheNavettePeer::ID_DOCUMENT, CommonChorusFicheNavettePeer::NOM_DOCUMENT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'ID_CHORUS_ECHANGE', 'RPA', 'OBJET', 'FICHE_IMMOBILISATION', 'ATTENTE_PJ', 'MARCHE_PARTAGE', 'ID_ACCORD_CADRE', 'LIB_ACCORD_CADRE', 'ANNEE_CREATION_ACCORD_CADRE', 'MONTANT_HT', 'RECONDUCTIBLE', 'VISA_ACCF', 'VISA_PREFET', 'RETENUE_GARANTIE', 'MONTANT_MINI', 'MONTANT_MAXI', 'MONTANT_FORFAITAIRE', 'MONTANT_BC', 'TAUX_TVA', 'CENTRE_COUT', 'CENTRE_FINANCIER', 'ACTIVITE', 'DOMAINE_FONCTIONNEL', 'FOND', 'LOCALISATION_INTERMINISTERIELLE', 'NATURE', 'AXE_MINISTERIEL1', 'PROJET_ANALYTIQUE', 'LOCALISATION_MINISTERIELLE', 'AXE_MINISTERIEL2', 'REMARQUES', 'ID_DOCUMENT', 'NOM_DOCUMENT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'id_chorus_echange', 'rpa', 'objet', 'fiche_immobilisation', 'attente_pj', 'marche_partage', 'id_accord_cadre', 'lib_accord_cadre', 'annee_creation_accord_cadre', 'montant_ht', 'reconductible', 'visa_accf', 'visa_prefet', 'retenue_garantie', 'montant_mini', 'montant_maxi', 'montant_forfaitaire', 'montant_bc', 'taux_tva', 'centre_cout', 'centre_financier', 'activite', 'domaine_fonctionnel', 'fond', 'localisation_interministerielle', 'nature', 'axe_ministeriel1', 'projet_analytique', 'localisation_ministerielle', 'axe_ministeriel2', 'remarques', 'id_document', 'nom_document', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonChorusFicheNavettePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'IdChorusEchange' => 2, 'Rpa' => 3, 'Objet' => 4, 'FicheImmobilisation' => 5, 'AttentePj' => 6, 'MarchePartage' => 7, 'IdAccordCadre' => 8, 'LibAccordCadre' => 9, 'AnneeCreationAccordCadre' => 10, 'MontantHt' => 11, 'Reconductible' => 12, 'VisaAccf' => 13, 'VisaPrefet' => 14, 'RetenueGarantie' => 15, 'MontantMini' => 16, 'MontantMaxi' => 17, 'MontantForfaitaire' => 18, 'MontantBc' => 19, 'TauxTva' => 20, 'CentreCout' => 21, 'CentreFinancier' => 22, 'Activite' => 23, 'DomaineFonctionnel' => 24, 'Fond' => 25, 'LocalisationInterministerielle' => 26, 'Nature' => 27, 'AxeMinisteriel1' => 28, 'ProjetAnalytique' => 29, 'LocalisationMinisterielle' => 30, 'AxeMinisteriel2' => 31, 'Remarques' => 32, 'IdDocument' => 33, 'NomDocument' => 34, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'idChorusEchange' => 2, 'rpa' => 3, 'objet' => 4, 'ficheImmobilisation' => 5, 'attentePj' => 6, 'marchePartage' => 7, 'idAccordCadre' => 8, 'libAccordCadre' => 9, 'anneeCreationAccordCadre' => 10, 'montantHt' => 11, 'reconductible' => 12, 'visaAccf' => 13, 'visaPrefet' => 14, 'retenueGarantie' => 15, 'montantMini' => 16, 'montantMaxi' => 17, 'montantForfaitaire' => 18, 'montantBc' => 19, 'tauxTva' => 20, 'centreCout' => 21, 'centreFinancier' => 22, 'activite' => 23, 'domaineFonctionnel' => 24, 'fond' => 25, 'localisationInterministerielle' => 26, 'nature' => 27, 'axeMinisteriel1' => 28, 'projetAnalytique' => 29, 'localisationMinisterielle' => 30, 'axeMinisteriel2' => 31, 'remarques' => 32, 'idDocument' => 33, 'nomDocument' => 34, ),
        BasePeer::TYPE_COLNAME => array (CommonChorusFicheNavettePeer::ID => 0, CommonChorusFicheNavettePeer::ORGANISME => 1, CommonChorusFicheNavettePeer::ID_CHORUS_ECHANGE => 2, CommonChorusFicheNavettePeer::RPA => 3, CommonChorusFicheNavettePeer::OBJET => 4, CommonChorusFicheNavettePeer::FICHE_IMMOBILISATION => 5, CommonChorusFicheNavettePeer::ATTENTE_PJ => 6, CommonChorusFicheNavettePeer::MARCHE_PARTAGE => 7, CommonChorusFicheNavettePeer::ID_ACCORD_CADRE => 8, CommonChorusFicheNavettePeer::LIB_ACCORD_CADRE => 9, CommonChorusFicheNavettePeer::ANNEE_CREATION_ACCORD_CADRE => 10, CommonChorusFicheNavettePeer::MONTANT_HT => 11, CommonChorusFicheNavettePeer::RECONDUCTIBLE => 12, CommonChorusFicheNavettePeer::VISA_ACCF => 13, CommonChorusFicheNavettePeer::VISA_PREFET => 14, CommonChorusFicheNavettePeer::RETENUE_GARANTIE => 15, CommonChorusFicheNavettePeer::MONTANT_MINI => 16, CommonChorusFicheNavettePeer::MONTANT_MAXI => 17, CommonChorusFicheNavettePeer::MONTANT_FORFAITAIRE => 18, CommonChorusFicheNavettePeer::MONTANT_BC => 19, CommonChorusFicheNavettePeer::TAUX_TVA => 20, CommonChorusFicheNavettePeer::CENTRE_COUT => 21, CommonChorusFicheNavettePeer::CENTRE_FINANCIER => 22, CommonChorusFicheNavettePeer::ACTIVITE => 23, CommonChorusFicheNavettePeer::DOMAINE_FONCTIONNEL => 24, CommonChorusFicheNavettePeer::FOND => 25, CommonChorusFicheNavettePeer::LOCALISATION_INTERMINISTERIELLE => 26, CommonChorusFicheNavettePeer::NATURE => 27, CommonChorusFicheNavettePeer::AXE_MINISTERIEL1 => 28, CommonChorusFicheNavettePeer::PROJET_ANALYTIQUE => 29, CommonChorusFicheNavettePeer::LOCALISATION_MINISTERIELLE => 30, CommonChorusFicheNavettePeer::AXE_MINISTERIEL2 => 31, CommonChorusFicheNavettePeer::REMARQUES => 32, CommonChorusFicheNavettePeer::ID_DOCUMENT => 33, CommonChorusFicheNavettePeer::NOM_DOCUMENT => 34, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'ID_CHORUS_ECHANGE' => 2, 'RPA' => 3, 'OBJET' => 4, 'FICHE_IMMOBILISATION' => 5, 'ATTENTE_PJ' => 6, 'MARCHE_PARTAGE' => 7, 'ID_ACCORD_CADRE' => 8, 'LIB_ACCORD_CADRE' => 9, 'ANNEE_CREATION_ACCORD_CADRE' => 10, 'MONTANT_HT' => 11, 'RECONDUCTIBLE' => 12, 'VISA_ACCF' => 13, 'VISA_PREFET' => 14, 'RETENUE_GARANTIE' => 15, 'MONTANT_MINI' => 16, 'MONTANT_MAXI' => 17, 'MONTANT_FORFAITAIRE' => 18, 'MONTANT_BC' => 19, 'TAUX_TVA' => 20, 'CENTRE_COUT' => 21, 'CENTRE_FINANCIER' => 22, 'ACTIVITE' => 23, 'DOMAINE_FONCTIONNEL' => 24, 'FOND' => 25, 'LOCALISATION_INTERMINISTERIELLE' => 26, 'NATURE' => 27, 'AXE_MINISTERIEL1' => 28, 'PROJET_ANALYTIQUE' => 29, 'LOCALISATION_MINISTERIELLE' => 30, 'AXE_MINISTERIEL2' => 31, 'REMARQUES' => 32, 'ID_DOCUMENT' => 33, 'NOM_DOCUMENT' => 34, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'id_chorus_echange' => 2, 'rpa' => 3, 'objet' => 4, 'fiche_immobilisation' => 5, 'attente_pj' => 6, 'marche_partage' => 7, 'id_accord_cadre' => 8, 'lib_accord_cadre' => 9, 'annee_creation_accord_cadre' => 10, 'montant_ht' => 11, 'reconductible' => 12, 'visa_accf' => 13, 'visa_prefet' => 14, 'retenue_garantie' => 15, 'montant_mini' => 16, 'montant_maxi' => 17, 'montant_forfaitaire' => 18, 'montant_bc' => 19, 'taux_tva' => 20, 'centre_cout' => 21, 'centre_financier' => 22, 'activite' => 23, 'domaine_fonctionnel' => 24, 'fond' => 25, 'localisation_interministerielle' => 26, 'nature' => 27, 'axe_ministeriel1' => 28, 'projet_analytique' => 29, 'localisation_ministerielle' => 30, 'axe_ministeriel2' => 31, 'remarques' => 32, 'id_document' => 33, 'nom_document' => 34, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonChorusFicheNavettePeer::FICHE_IMMOBILISATION => array(
            CommonChorusFicheNavettePeer::FICHE_IMMOBILISATION_0,
            CommonChorusFicheNavettePeer::FICHE_IMMOBILISATION_1,
        ),
        CommonChorusFicheNavettePeer::ATTENTE_PJ => array(
            CommonChorusFicheNavettePeer::ATTENTE_PJ_0,
            CommonChorusFicheNavettePeer::ATTENTE_PJ_1,
        ),
        CommonChorusFicheNavettePeer::MARCHE_PARTAGE => array(
            CommonChorusFicheNavettePeer::MARCHE_PARTAGE_0,
            CommonChorusFicheNavettePeer::MARCHE_PARTAGE_1,
        ),
        CommonChorusFicheNavettePeer::RECONDUCTIBLE => array(
            CommonChorusFicheNavettePeer::RECONDUCTIBLE_0,
            CommonChorusFicheNavettePeer::RECONDUCTIBLE_1,
        ),
        CommonChorusFicheNavettePeer::VISA_ACCF => array(
            CommonChorusFicheNavettePeer::VISA_ACCF_0,
            CommonChorusFicheNavettePeer::VISA_ACCF_1,
        ),
        CommonChorusFicheNavettePeer::VISA_PREFET => array(
            CommonChorusFicheNavettePeer::VISA_PREFET_0,
            CommonChorusFicheNavettePeer::VISA_PREFET_1,
        ),
        CommonChorusFicheNavettePeer::RETENUE_GARANTIE => array(
            CommonChorusFicheNavettePeer::RETENUE_GARANTIE_0,
            CommonChorusFicheNavettePeer::RETENUE_GARANTIE_1,
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
        $toNames = CommonChorusFicheNavettePeer::getFieldNames($toType);
        $key = isset(CommonChorusFicheNavettePeer::$fieldKeys[$fromType][$name]) ? CommonChorusFicheNavettePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonChorusFicheNavettePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonChorusFicheNavettePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonChorusFicheNavettePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonChorusFicheNavettePeer::$enumValueSets;
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
        $valueSets = CommonChorusFicheNavettePeer::getValueSets();

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
        $values = CommonChorusFicheNavettePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonChorusFicheNavettePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonChorusFicheNavettePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::ID);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::ORGANISME);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::ID_CHORUS_ECHANGE);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::RPA);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::OBJET);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::FICHE_IMMOBILISATION);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::ATTENTE_PJ);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::MARCHE_PARTAGE);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::ID_ACCORD_CADRE);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::LIB_ACCORD_CADRE);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::ANNEE_CREATION_ACCORD_CADRE);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::MONTANT_HT);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::RECONDUCTIBLE);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::VISA_ACCF);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::VISA_PREFET);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::RETENUE_GARANTIE);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::MONTANT_MINI);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::MONTANT_MAXI);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::MONTANT_FORFAITAIRE);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::MONTANT_BC);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::TAUX_TVA);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::CENTRE_COUT);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::CENTRE_FINANCIER);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::ACTIVITE);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::DOMAINE_FONCTIONNEL);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::FOND);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::LOCALISATION_INTERMINISTERIELLE);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::NATURE);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::AXE_MINISTERIEL1);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::PROJET_ANALYTIQUE);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::LOCALISATION_MINISTERIELLE);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::AXE_MINISTERIEL2);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::REMARQUES);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::ID_DOCUMENT);
            $criteria->addSelectColumn(CommonChorusFicheNavettePeer::NOM_DOCUMENT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.id_chorus_echange');
            $criteria->addSelectColumn($alias . '.rpa');
            $criteria->addSelectColumn($alias . '.objet');
            $criteria->addSelectColumn($alias . '.fiche_immobilisation');
            $criteria->addSelectColumn($alias . '.attente_pj');
            $criteria->addSelectColumn($alias . '.marche_partage');
            $criteria->addSelectColumn($alias . '.id_accord_cadre');
            $criteria->addSelectColumn($alias . '.lib_accord_cadre');
            $criteria->addSelectColumn($alias . '.annee_creation_accord_cadre');
            $criteria->addSelectColumn($alias . '.montant_ht');
            $criteria->addSelectColumn($alias . '.reconductible');
            $criteria->addSelectColumn($alias . '.visa_accf');
            $criteria->addSelectColumn($alias . '.visa_prefet');
            $criteria->addSelectColumn($alias . '.retenue_garantie');
            $criteria->addSelectColumn($alias . '.montant_mini');
            $criteria->addSelectColumn($alias . '.montant_maxi');
            $criteria->addSelectColumn($alias . '.montant_forfaitaire');
            $criteria->addSelectColumn($alias . '.montant_bc');
            $criteria->addSelectColumn($alias . '.taux_tva');
            $criteria->addSelectColumn($alias . '.centre_cout');
            $criteria->addSelectColumn($alias . '.centre_financier');
            $criteria->addSelectColumn($alias . '.activite');
            $criteria->addSelectColumn($alias . '.domaine_fonctionnel');
            $criteria->addSelectColumn($alias . '.fond');
            $criteria->addSelectColumn($alias . '.localisation_interministerielle');
            $criteria->addSelectColumn($alias . '.nature');
            $criteria->addSelectColumn($alias . '.axe_ministeriel1');
            $criteria->addSelectColumn($alias . '.projet_analytique');
            $criteria->addSelectColumn($alias . '.localisation_ministerielle');
            $criteria->addSelectColumn($alias . '.axe_ministeriel2');
            $criteria->addSelectColumn($alias . '.remarques');
            $criteria->addSelectColumn($alias . '.id_document');
            $criteria->addSelectColumn($alias . '.nom_document');
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
        $criteria->setPrimaryTableName(CommonChorusFicheNavettePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonChorusFicheNavettePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonChorusFicheNavettePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonChorusFicheNavettePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonChorusFicheNavette
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonChorusFicheNavettePeer::doSelect($critcopy, $con);
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
        return CommonChorusFicheNavettePeer::populateObjects(CommonChorusFicheNavettePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonChorusFicheNavettePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonChorusFicheNavettePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonChorusFicheNavettePeer::DATABASE_NAME);

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
     * @param      CommonChorusFicheNavette $obj A CommonChorusFicheNavette object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonChorusFicheNavettePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonChorusFicheNavette object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonChorusFicheNavette) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonChorusFicheNavette object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonChorusFicheNavettePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonChorusFicheNavette Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonChorusFicheNavettePeer::$instances[$key])) {
                return CommonChorusFicheNavettePeer::$instances[$key];
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
        foreach (CommonChorusFicheNavettePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonChorusFicheNavettePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Chorus_Fiche_Navette
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
        $cls = CommonChorusFicheNavettePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonChorusFicheNavettePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonChorusFicheNavettePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonChorusFicheNavettePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonChorusFicheNavette object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonChorusFicheNavettePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonChorusFicheNavettePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonChorusFicheNavettePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonChorusFicheNavettePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonChorusFicheNavettePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonChorusFicheNavettePeer::DATABASE_NAME)->getTable(CommonChorusFicheNavettePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonChorusFicheNavettePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonChorusFicheNavettePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonChorusFicheNavetteTableMap());
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
        return CommonChorusFicheNavettePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonChorusFicheNavette or Criteria object.
     *
     * @param      mixed $values Criteria or CommonChorusFicheNavette object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonChorusFicheNavettePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonChorusFicheNavette object
        }

        if ($criteria->containsKey(CommonChorusFicheNavettePeer::ID) && $criteria->keyContainsValue(CommonChorusFicheNavettePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonChorusFicheNavettePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonChorusFicheNavettePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonChorusFicheNavette or Criteria object.
     *
     * @param      mixed $values Criteria or CommonChorusFicheNavette object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonChorusFicheNavettePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonChorusFicheNavettePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonChorusFicheNavettePeer::ID);
            $value = $criteria->remove(CommonChorusFicheNavettePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonChorusFicheNavettePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonChorusFicheNavettePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonChorusFicheNavettePeer::ORGANISME);
            $value = $criteria->remove(CommonChorusFicheNavettePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonChorusFicheNavettePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonChorusFicheNavettePeer::TABLE_NAME);
            }

        } else { // $values is CommonChorusFicheNavette object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonChorusFicheNavettePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Chorus_Fiche_Navette table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonChorusFicheNavettePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonChorusFicheNavettePeer::TABLE_NAME, $con, CommonChorusFicheNavettePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonChorusFicheNavettePeer::clearInstancePool();
            CommonChorusFicheNavettePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonChorusFicheNavette or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonChorusFicheNavette object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonChorusFicheNavettePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonChorusFicheNavettePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonChorusFicheNavette) { // it's a model object
            // invalidate the cache for this single object
            CommonChorusFicheNavettePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonChorusFicheNavettePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonChorusFicheNavettePeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonChorusFicheNavettePeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonChorusFicheNavettePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonChorusFicheNavettePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonChorusFicheNavettePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonChorusFicheNavette object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonChorusFicheNavette $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonChorusFicheNavettePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonChorusFicheNavettePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonChorusFicheNavettePeer::DATABASE_NAME, CommonChorusFicheNavettePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonChorusFicheNavette
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonChorusFicheNavettePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonChorusFicheNavettePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonChorusFicheNavettePeer::DATABASE_NAME);
        $criteria->add(CommonChorusFicheNavettePeer::ID, $id);
        $criteria->add(CommonChorusFicheNavettePeer::ORGANISME, $organisme);
        $v = CommonChorusFicheNavettePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonChorusFicheNavettePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonChorusFicheNavettePeer::buildTableMap();

