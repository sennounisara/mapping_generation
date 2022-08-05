<?php


/**
 * Base static class for performing query and update operations on the 'EntrepriseInsee' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonEntrepriseInseePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'EntrepriseInsee';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonEntrepriseInsee';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonEntrepriseInseeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 48;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 48;

    /** the column name for the id field */
    const ID = 'EntrepriseInsee.id';

    /** the column name for the siren field */
    const SIREN = 'EntrepriseInsee.siren';

    /** the column name for the raisonSociale field */
    const RAISONSOCIALE = 'EntrepriseInsee.raisonSociale';

    /** the column name for the nbEtA field */
    const NBETA = 'EntrepriseInsee.nbEtA';

    /** the column name for the etat field */
    const ETAT = 'EntrepriseInsee.etat';

    /** the column name for the etatLib field */
    const ETATLIB = 'EntrepriseInsee.etatLib';

    /** the column name for the etatDebDate field */
    const ETATDEBDATE = 'EntrepriseInsee.etatDebDate';

    /** the column name for the eff3112Tr field */
    const EFF3112TR = 'EntrepriseInsee.eff3112Tr';

    /** the column name for the eff3112TrLib field */
    const EFF3112TRLIB = 'EntrepriseInsee.eff3112TrLib';

    /** the column name for the effAn field */
    const EFFAN = 'EntrepriseInsee.effAn';

    /** the column name for the apen field */
    const APEN = 'EntrepriseInsee.apen';

    /** the column name for the apenLib field */
    const APENLIB = 'EntrepriseInsee.apenLib';

    /** the column name for the cj field */
    const CJ = 'EntrepriseInsee.cj';

    /** the column name for the cjLib field */
    const CJLIB = 'EntrepriseInsee.cjLib';

    /** the column name for the indNDC field */
    const INDNDC = 'EntrepriseInsee.indNDC';

    /** the column name for the indDoublon field */
    const INDDOUBLON = 'EntrepriseInsee.indDoublon';

    /** the column name for the indPurge field */
    const INDPURGE = 'EntrepriseInsee.indPurge';

    /** the column name for the nicSiege field */
    const NICSIEGE = 'EntrepriseInsee.nicSiege';

    /** the column name for the etatSiege field */
    const ETATSIEGE = 'EntrepriseInsee.etatSiege';

    /** the column name for the etatSiegeLib field */
    const ETATSIEGELIB = 'EntrepriseInsee.etatSiegeLib';

    /** the column name for the etatDebDateSiege field */
    const ETATDEBDATESIEGE = 'EntrepriseInsee.etatDebDateSiege';

    /** the column name for the eff3112TrSiege field */
    const EFF3112TRSIEGE = 'EntrepriseInsee.eff3112TrSiege';

    /** the column name for the eff3112TrSiegeLib field */
    const EFF3112TRSIEGELIB = 'EntrepriseInsee.eff3112TrSiegeLib';

    /** the column name for the effAnSiege field */
    const EFFANSIEGE = 'EntrepriseInsee.effAnSiege';

    /** the column name for the apetSiege field */
    const APETSIEGE = 'EntrepriseInsee.apetSiege';

    /** the column name for the apetSiegeLib field */
    const APETSIEGELIB = 'EntrepriseInsee.apetSiegeLib';

    /** the column name for the trtDerDateSiege field */
    const TRTDERDATESIEGE = 'EntrepriseInsee.trtDerDateSiege';

    /** the column name for the adrEtVoieNum field */
    const ADRETVOIENUM = 'EntrepriseInsee.adrEtVoieNum';

    /** the column name for the adrEtVoieType field */
    const ADRETVOIETYPE = 'EntrepriseInsee.adrEtVoieType';

    /** the column name for the adrEtVoieLib field */
    const ADRETVOIELIB = 'EntrepriseInsee.adrEtVoieLib';

    /** the column name for the adrEtDepCom field */
    const ADRETDEPCOM = 'EntrepriseInsee.adrEtDepCom';

    /** the column name for the adrEtComLib field */
    const ADRETCOMLIB = 'EntrepriseInsee.adrEtComLib';

    /** the column name for the adrEtCodePost field */
    const ADRETCODEPOST = 'EntrepriseInsee.adrEtCodePost';

    /** the column name for the adrEtPost1 field */
    const ADRETPOST1 = 'EntrepriseInsee.adrEtPost1';

    /** the column name for the adrEtPost2 field */
    const ADRETPOST2 = 'EntrepriseInsee.adrEtPost2';

    /** the column name for the adrEtPost3 field */
    const ADRETPOST3 = 'EntrepriseInsee.adrEtPost3';

    /** the column name for the nic field */
    const NIC = 'EntrepriseInsee.nic';

    /** the column name for the etatEt field */
    const ETATET = 'EntrepriseInsee.etatEt';

    /** the column name for the etatDebDateEt field */
    const ETATDEBDATEET = 'EntrepriseInsee.etatDebDateEt';

    /** the column name for the catEt field */
    const CATET = 'EntrepriseInsee.catEt';

    /** the column name for the catEtLib field */
    const CATETLIB = 'EntrepriseInsee.catEtLib';

    /** the column name for the eff3112TrEt field */
    const EFF3112TRET = 'EntrepriseInsee.eff3112TrEt';

    /** the column name for the eff3112TrEtLib field */
    const EFF3112TRETLIB = 'EntrepriseInsee.eff3112TrEtLib';

    /** the column name for the effAnEt field */
    const EFFANET = 'EntrepriseInsee.effAnEt';

    /** the column name for the apet field */
    const APET = 'EntrepriseInsee.apet';

    /** the column name for the apetLib field */
    const APETLIB = 'EntrepriseInsee.apetLib';

    /** the column name for the trtDerDateEt field */
    const TRTDERDATEET = 'EntrepriseInsee.trtDerDateEt';

    /** the column name for the etatEtLib field */
    const ETATETLIB = 'EntrepriseInsee.etatEtLib';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonEntrepriseInsee objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonEntrepriseInsee[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonEntrepriseInseePeer::$fieldNames[CommonEntrepriseInseePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Siren', 'Raisonsociale', 'Nbeta', 'Etat', 'Etatlib', 'Etatdebdate', 'Eff3112tr', 'Eff3112trlib', 'Effan', 'Apen', 'Apenlib', 'Cj', 'Cjlib', 'Indndc', 'Inddoublon', 'Indpurge', 'Nicsiege', 'Etatsiege', 'Etatsiegelib', 'Etatdebdatesiege', 'Eff3112trsiege', 'Eff3112trsiegelib', 'Effansiege', 'Apetsiege', 'Apetsiegelib', 'Trtderdatesiege', 'Adretvoienum', 'Adretvoietype', 'Adretvoielib', 'Adretdepcom', 'Adretcomlib', 'Adretcodepost', 'Adretpost1', 'Adretpost2', 'Adretpost3', 'Nic', 'Etatet', 'Etatdebdateet', 'Catet', 'Catetlib', 'Eff3112tret', 'Eff3112tretlib', 'Effanet', 'Apet', 'Apetlib', 'Trtderdateet', 'Etatetlib', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'siren', 'raisonsociale', 'nbeta', 'etat', 'etatlib', 'etatdebdate', 'eff3112tr', 'eff3112trlib', 'effan', 'apen', 'apenlib', 'cj', 'cjlib', 'indndc', 'inddoublon', 'indpurge', 'nicsiege', 'etatsiege', 'etatsiegelib', 'etatdebdatesiege', 'eff3112trsiege', 'eff3112trsiegelib', 'effansiege', 'apetsiege', 'apetsiegelib', 'trtderdatesiege', 'adretvoienum', 'adretvoietype', 'adretvoielib', 'adretdepcom', 'adretcomlib', 'adretcodepost', 'adretpost1', 'adretpost2', 'adretpost3', 'nic', 'etatet', 'etatdebdateet', 'catet', 'catetlib', 'eff3112tret', 'eff3112tretlib', 'effanet', 'apet', 'apetlib', 'trtderdateet', 'etatetlib', ),
        BasePeer::TYPE_COLNAME => array (CommonEntrepriseInseePeer::ID, CommonEntrepriseInseePeer::SIREN, CommonEntrepriseInseePeer::RAISONSOCIALE, CommonEntrepriseInseePeer::NBETA, CommonEntrepriseInseePeer::ETAT, CommonEntrepriseInseePeer::ETATLIB, CommonEntrepriseInseePeer::ETATDEBDATE, CommonEntrepriseInseePeer::EFF3112TR, CommonEntrepriseInseePeer::EFF3112TRLIB, CommonEntrepriseInseePeer::EFFAN, CommonEntrepriseInseePeer::APEN, CommonEntrepriseInseePeer::APENLIB, CommonEntrepriseInseePeer::CJ, CommonEntrepriseInseePeer::CJLIB, CommonEntrepriseInseePeer::INDNDC, CommonEntrepriseInseePeer::INDDOUBLON, CommonEntrepriseInseePeer::INDPURGE, CommonEntrepriseInseePeer::NICSIEGE, CommonEntrepriseInseePeer::ETATSIEGE, CommonEntrepriseInseePeer::ETATSIEGELIB, CommonEntrepriseInseePeer::ETATDEBDATESIEGE, CommonEntrepriseInseePeer::EFF3112TRSIEGE, CommonEntrepriseInseePeer::EFF3112TRSIEGELIB, CommonEntrepriseInseePeer::EFFANSIEGE, CommonEntrepriseInseePeer::APETSIEGE, CommonEntrepriseInseePeer::APETSIEGELIB, CommonEntrepriseInseePeer::TRTDERDATESIEGE, CommonEntrepriseInseePeer::ADRETVOIENUM, CommonEntrepriseInseePeer::ADRETVOIETYPE, CommonEntrepriseInseePeer::ADRETVOIELIB, CommonEntrepriseInseePeer::ADRETDEPCOM, CommonEntrepriseInseePeer::ADRETCOMLIB, CommonEntrepriseInseePeer::ADRETCODEPOST, CommonEntrepriseInseePeer::ADRETPOST1, CommonEntrepriseInseePeer::ADRETPOST2, CommonEntrepriseInseePeer::ADRETPOST3, CommonEntrepriseInseePeer::NIC, CommonEntrepriseInseePeer::ETATET, CommonEntrepriseInseePeer::ETATDEBDATEET, CommonEntrepriseInseePeer::CATET, CommonEntrepriseInseePeer::CATETLIB, CommonEntrepriseInseePeer::EFF3112TRET, CommonEntrepriseInseePeer::EFF3112TRETLIB, CommonEntrepriseInseePeer::EFFANET, CommonEntrepriseInseePeer::APET, CommonEntrepriseInseePeer::APETLIB, CommonEntrepriseInseePeer::TRTDERDATEET, CommonEntrepriseInseePeer::ETATETLIB, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'SIREN', 'RAISONSOCIALE', 'NBETA', 'ETAT', 'ETATLIB', 'ETATDEBDATE', 'EFF3112TR', 'EFF3112TRLIB', 'EFFAN', 'APEN', 'APENLIB', 'CJ', 'CJLIB', 'INDNDC', 'INDDOUBLON', 'INDPURGE', 'NICSIEGE', 'ETATSIEGE', 'ETATSIEGELIB', 'ETATDEBDATESIEGE', 'EFF3112TRSIEGE', 'EFF3112TRSIEGELIB', 'EFFANSIEGE', 'APETSIEGE', 'APETSIEGELIB', 'TRTDERDATESIEGE', 'ADRETVOIENUM', 'ADRETVOIETYPE', 'ADRETVOIELIB', 'ADRETDEPCOM', 'ADRETCOMLIB', 'ADRETCODEPOST', 'ADRETPOST1', 'ADRETPOST2', 'ADRETPOST3', 'NIC', 'ETATET', 'ETATDEBDATEET', 'CATET', 'CATETLIB', 'EFF3112TRET', 'EFF3112TRETLIB', 'EFFANET', 'APET', 'APETLIB', 'TRTDERDATEET', 'ETATETLIB', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'siren', 'raisonSociale', 'nbEtA', 'etat', 'etatLib', 'etatDebDate', 'eff3112Tr', 'eff3112TrLib', 'effAn', 'apen', 'apenLib', 'cj', 'cjLib', 'indNDC', 'indDoublon', 'indPurge', 'nicSiege', 'etatSiege', 'etatSiegeLib', 'etatDebDateSiege', 'eff3112TrSiege', 'eff3112TrSiegeLib', 'effAnSiege', 'apetSiege', 'apetSiegeLib', 'trtDerDateSiege', 'adrEtVoieNum', 'adrEtVoieType', 'adrEtVoieLib', 'adrEtDepCom', 'adrEtComLib', 'adrEtCodePost', 'adrEtPost1', 'adrEtPost2', 'adrEtPost3', 'nic', 'etatEt', 'etatDebDateEt', 'catEt', 'catEtLib', 'eff3112TrEt', 'eff3112TrEtLib', 'effAnEt', 'apet', 'apetLib', 'trtDerDateEt', 'etatEtLib', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonEntrepriseInseePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Siren' => 1, 'Raisonsociale' => 2, 'Nbeta' => 3, 'Etat' => 4, 'Etatlib' => 5, 'Etatdebdate' => 6, 'Eff3112tr' => 7, 'Eff3112trlib' => 8, 'Effan' => 9, 'Apen' => 10, 'Apenlib' => 11, 'Cj' => 12, 'Cjlib' => 13, 'Indndc' => 14, 'Inddoublon' => 15, 'Indpurge' => 16, 'Nicsiege' => 17, 'Etatsiege' => 18, 'Etatsiegelib' => 19, 'Etatdebdatesiege' => 20, 'Eff3112trsiege' => 21, 'Eff3112trsiegelib' => 22, 'Effansiege' => 23, 'Apetsiege' => 24, 'Apetsiegelib' => 25, 'Trtderdatesiege' => 26, 'Adretvoienum' => 27, 'Adretvoietype' => 28, 'Adretvoielib' => 29, 'Adretdepcom' => 30, 'Adretcomlib' => 31, 'Adretcodepost' => 32, 'Adretpost1' => 33, 'Adretpost2' => 34, 'Adretpost3' => 35, 'Nic' => 36, 'Etatet' => 37, 'Etatdebdateet' => 38, 'Catet' => 39, 'Catetlib' => 40, 'Eff3112tret' => 41, 'Eff3112tretlib' => 42, 'Effanet' => 43, 'Apet' => 44, 'Apetlib' => 45, 'Trtderdateet' => 46, 'Etatetlib' => 47, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'siren' => 1, 'raisonsociale' => 2, 'nbeta' => 3, 'etat' => 4, 'etatlib' => 5, 'etatdebdate' => 6, 'eff3112tr' => 7, 'eff3112trlib' => 8, 'effan' => 9, 'apen' => 10, 'apenlib' => 11, 'cj' => 12, 'cjlib' => 13, 'indndc' => 14, 'inddoublon' => 15, 'indpurge' => 16, 'nicsiege' => 17, 'etatsiege' => 18, 'etatsiegelib' => 19, 'etatdebdatesiege' => 20, 'eff3112trsiege' => 21, 'eff3112trsiegelib' => 22, 'effansiege' => 23, 'apetsiege' => 24, 'apetsiegelib' => 25, 'trtderdatesiege' => 26, 'adretvoienum' => 27, 'adretvoietype' => 28, 'adretvoielib' => 29, 'adretdepcom' => 30, 'adretcomlib' => 31, 'adretcodepost' => 32, 'adretpost1' => 33, 'adretpost2' => 34, 'adretpost3' => 35, 'nic' => 36, 'etatet' => 37, 'etatdebdateet' => 38, 'catet' => 39, 'catetlib' => 40, 'eff3112tret' => 41, 'eff3112tretlib' => 42, 'effanet' => 43, 'apet' => 44, 'apetlib' => 45, 'trtderdateet' => 46, 'etatetlib' => 47, ),
        BasePeer::TYPE_COLNAME => array (CommonEntrepriseInseePeer::ID => 0, CommonEntrepriseInseePeer::SIREN => 1, CommonEntrepriseInseePeer::RAISONSOCIALE => 2, CommonEntrepriseInseePeer::NBETA => 3, CommonEntrepriseInseePeer::ETAT => 4, CommonEntrepriseInseePeer::ETATLIB => 5, CommonEntrepriseInseePeer::ETATDEBDATE => 6, CommonEntrepriseInseePeer::EFF3112TR => 7, CommonEntrepriseInseePeer::EFF3112TRLIB => 8, CommonEntrepriseInseePeer::EFFAN => 9, CommonEntrepriseInseePeer::APEN => 10, CommonEntrepriseInseePeer::APENLIB => 11, CommonEntrepriseInseePeer::CJ => 12, CommonEntrepriseInseePeer::CJLIB => 13, CommonEntrepriseInseePeer::INDNDC => 14, CommonEntrepriseInseePeer::INDDOUBLON => 15, CommonEntrepriseInseePeer::INDPURGE => 16, CommonEntrepriseInseePeer::NICSIEGE => 17, CommonEntrepriseInseePeer::ETATSIEGE => 18, CommonEntrepriseInseePeer::ETATSIEGELIB => 19, CommonEntrepriseInseePeer::ETATDEBDATESIEGE => 20, CommonEntrepriseInseePeer::EFF3112TRSIEGE => 21, CommonEntrepriseInseePeer::EFF3112TRSIEGELIB => 22, CommonEntrepriseInseePeer::EFFANSIEGE => 23, CommonEntrepriseInseePeer::APETSIEGE => 24, CommonEntrepriseInseePeer::APETSIEGELIB => 25, CommonEntrepriseInseePeer::TRTDERDATESIEGE => 26, CommonEntrepriseInseePeer::ADRETVOIENUM => 27, CommonEntrepriseInseePeer::ADRETVOIETYPE => 28, CommonEntrepriseInseePeer::ADRETVOIELIB => 29, CommonEntrepriseInseePeer::ADRETDEPCOM => 30, CommonEntrepriseInseePeer::ADRETCOMLIB => 31, CommonEntrepriseInseePeer::ADRETCODEPOST => 32, CommonEntrepriseInseePeer::ADRETPOST1 => 33, CommonEntrepriseInseePeer::ADRETPOST2 => 34, CommonEntrepriseInseePeer::ADRETPOST3 => 35, CommonEntrepriseInseePeer::NIC => 36, CommonEntrepriseInseePeer::ETATET => 37, CommonEntrepriseInseePeer::ETATDEBDATEET => 38, CommonEntrepriseInseePeer::CATET => 39, CommonEntrepriseInseePeer::CATETLIB => 40, CommonEntrepriseInseePeer::EFF3112TRET => 41, CommonEntrepriseInseePeer::EFF3112TRETLIB => 42, CommonEntrepriseInseePeer::EFFANET => 43, CommonEntrepriseInseePeer::APET => 44, CommonEntrepriseInseePeer::APETLIB => 45, CommonEntrepriseInseePeer::TRTDERDATEET => 46, CommonEntrepriseInseePeer::ETATETLIB => 47, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'SIREN' => 1, 'RAISONSOCIALE' => 2, 'NBETA' => 3, 'ETAT' => 4, 'ETATLIB' => 5, 'ETATDEBDATE' => 6, 'EFF3112TR' => 7, 'EFF3112TRLIB' => 8, 'EFFAN' => 9, 'APEN' => 10, 'APENLIB' => 11, 'CJ' => 12, 'CJLIB' => 13, 'INDNDC' => 14, 'INDDOUBLON' => 15, 'INDPURGE' => 16, 'NICSIEGE' => 17, 'ETATSIEGE' => 18, 'ETATSIEGELIB' => 19, 'ETATDEBDATESIEGE' => 20, 'EFF3112TRSIEGE' => 21, 'EFF3112TRSIEGELIB' => 22, 'EFFANSIEGE' => 23, 'APETSIEGE' => 24, 'APETSIEGELIB' => 25, 'TRTDERDATESIEGE' => 26, 'ADRETVOIENUM' => 27, 'ADRETVOIETYPE' => 28, 'ADRETVOIELIB' => 29, 'ADRETDEPCOM' => 30, 'ADRETCOMLIB' => 31, 'ADRETCODEPOST' => 32, 'ADRETPOST1' => 33, 'ADRETPOST2' => 34, 'ADRETPOST3' => 35, 'NIC' => 36, 'ETATET' => 37, 'ETATDEBDATEET' => 38, 'CATET' => 39, 'CATETLIB' => 40, 'EFF3112TRET' => 41, 'EFF3112TRETLIB' => 42, 'EFFANET' => 43, 'APET' => 44, 'APETLIB' => 45, 'TRTDERDATEET' => 46, 'ETATETLIB' => 47, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'siren' => 1, 'raisonSociale' => 2, 'nbEtA' => 3, 'etat' => 4, 'etatLib' => 5, 'etatDebDate' => 6, 'eff3112Tr' => 7, 'eff3112TrLib' => 8, 'effAn' => 9, 'apen' => 10, 'apenLib' => 11, 'cj' => 12, 'cjLib' => 13, 'indNDC' => 14, 'indDoublon' => 15, 'indPurge' => 16, 'nicSiege' => 17, 'etatSiege' => 18, 'etatSiegeLib' => 19, 'etatDebDateSiege' => 20, 'eff3112TrSiege' => 21, 'eff3112TrSiegeLib' => 22, 'effAnSiege' => 23, 'apetSiege' => 24, 'apetSiegeLib' => 25, 'trtDerDateSiege' => 26, 'adrEtVoieNum' => 27, 'adrEtVoieType' => 28, 'adrEtVoieLib' => 29, 'adrEtDepCom' => 30, 'adrEtComLib' => 31, 'adrEtCodePost' => 32, 'adrEtPost1' => 33, 'adrEtPost2' => 34, 'adrEtPost3' => 35, 'nic' => 36, 'etatEt' => 37, 'etatDebDateEt' => 38, 'catEt' => 39, 'catEtLib' => 40, 'eff3112TrEt' => 41, 'eff3112TrEtLib' => 42, 'effAnEt' => 43, 'apet' => 44, 'apetLib' => 45, 'trtDerDateEt' => 46, 'etatEtLib' => 47, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, )
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
        $toNames = CommonEntrepriseInseePeer::getFieldNames($toType);
        $key = isset(CommonEntrepriseInseePeer::$fieldKeys[$fromType][$name]) ? CommonEntrepriseInseePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonEntrepriseInseePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonEntrepriseInseePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonEntrepriseInseePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonEntrepriseInseePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonEntrepriseInseePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::ID);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::SIREN);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::RAISONSOCIALE);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::NBETA);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::ETAT);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::ETATLIB);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::ETATDEBDATE);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::EFF3112TR);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::EFF3112TRLIB);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::EFFAN);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::APEN);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::APENLIB);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::CJ);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::CJLIB);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::INDNDC);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::INDDOUBLON);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::INDPURGE);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::NICSIEGE);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::ETATSIEGE);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::ETATSIEGELIB);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::ETATDEBDATESIEGE);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::EFF3112TRSIEGE);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::EFF3112TRSIEGELIB);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::EFFANSIEGE);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::APETSIEGE);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::APETSIEGELIB);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::TRTDERDATESIEGE);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::ADRETVOIENUM);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::ADRETVOIETYPE);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::ADRETVOIELIB);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::ADRETDEPCOM);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::ADRETCOMLIB);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::ADRETCODEPOST);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::ADRETPOST1);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::ADRETPOST2);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::ADRETPOST3);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::NIC);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::ETATET);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::ETATDEBDATEET);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::CATET);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::CATETLIB);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::EFF3112TRET);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::EFF3112TRETLIB);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::EFFANET);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::APET);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::APETLIB);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::TRTDERDATEET);
            $criteria->addSelectColumn(CommonEntrepriseInseePeer::ETATETLIB);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.siren');
            $criteria->addSelectColumn($alias . '.raisonSociale');
            $criteria->addSelectColumn($alias . '.nbEtA');
            $criteria->addSelectColumn($alias . '.etat');
            $criteria->addSelectColumn($alias . '.etatLib');
            $criteria->addSelectColumn($alias . '.etatDebDate');
            $criteria->addSelectColumn($alias . '.eff3112Tr');
            $criteria->addSelectColumn($alias . '.eff3112TrLib');
            $criteria->addSelectColumn($alias . '.effAn');
            $criteria->addSelectColumn($alias . '.apen');
            $criteria->addSelectColumn($alias . '.apenLib');
            $criteria->addSelectColumn($alias . '.cj');
            $criteria->addSelectColumn($alias . '.cjLib');
            $criteria->addSelectColumn($alias . '.indNDC');
            $criteria->addSelectColumn($alias . '.indDoublon');
            $criteria->addSelectColumn($alias . '.indPurge');
            $criteria->addSelectColumn($alias . '.nicSiege');
            $criteria->addSelectColumn($alias . '.etatSiege');
            $criteria->addSelectColumn($alias . '.etatSiegeLib');
            $criteria->addSelectColumn($alias . '.etatDebDateSiege');
            $criteria->addSelectColumn($alias . '.eff3112TrSiege');
            $criteria->addSelectColumn($alias . '.eff3112TrSiegeLib');
            $criteria->addSelectColumn($alias . '.effAnSiege');
            $criteria->addSelectColumn($alias . '.apetSiege');
            $criteria->addSelectColumn($alias . '.apetSiegeLib');
            $criteria->addSelectColumn($alias . '.trtDerDateSiege');
            $criteria->addSelectColumn($alias . '.adrEtVoieNum');
            $criteria->addSelectColumn($alias . '.adrEtVoieType');
            $criteria->addSelectColumn($alias . '.adrEtVoieLib');
            $criteria->addSelectColumn($alias . '.adrEtDepCom');
            $criteria->addSelectColumn($alias . '.adrEtComLib');
            $criteria->addSelectColumn($alias . '.adrEtCodePost');
            $criteria->addSelectColumn($alias . '.adrEtPost1');
            $criteria->addSelectColumn($alias . '.adrEtPost2');
            $criteria->addSelectColumn($alias . '.adrEtPost3');
            $criteria->addSelectColumn($alias . '.nic');
            $criteria->addSelectColumn($alias . '.etatEt');
            $criteria->addSelectColumn($alias . '.etatDebDateEt');
            $criteria->addSelectColumn($alias . '.catEt');
            $criteria->addSelectColumn($alias . '.catEtLib');
            $criteria->addSelectColumn($alias . '.eff3112TrEt');
            $criteria->addSelectColumn($alias . '.eff3112TrEtLib');
            $criteria->addSelectColumn($alias . '.effAnEt');
            $criteria->addSelectColumn($alias . '.apet');
            $criteria->addSelectColumn($alias . '.apetLib');
            $criteria->addSelectColumn($alias . '.trtDerDateEt');
            $criteria->addSelectColumn($alias . '.etatEtLib');
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
        $criteria->setPrimaryTableName(CommonEntrepriseInseePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonEntrepriseInseePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonEntrepriseInseePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonEntrepriseInseePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEntrepriseInsee
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonEntrepriseInseePeer::doSelect($critcopy, $con);
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
        return CommonEntrepriseInseePeer::populateObjects(CommonEntrepriseInseePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonEntrepriseInseePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonEntrepriseInseePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEntrepriseInseePeer::DATABASE_NAME);

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
     * @param      CommonEntrepriseInsee $obj A CommonEntrepriseInsee object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonEntrepriseInseePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonEntrepriseInsee object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonEntrepriseInsee) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonEntrepriseInsee object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonEntrepriseInseePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonEntrepriseInsee Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonEntrepriseInseePeer::$instances[$key])) {
                return CommonEntrepriseInseePeer::$instances[$key];
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
        foreach (CommonEntrepriseInseePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonEntrepriseInseePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to EntrepriseInsee
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
        $cls = CommonEntrepriseInseePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonEntrepriseInseePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonEntrepriseInseePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonEntrepriseInseePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonEntrepriseInsee object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonEntrepriseInseePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonEntrepriseInseePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonEntrepriseInseePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonEntrepriseInseePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonEntrepriseInseePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonEntrepriseInseePeer::DATABASE_NAME)->getTable(CommonEntrepriseInseePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonEntrepriseInseePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonEntrepriseInseePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonEntrepriseInseeTableMap());
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
        return CommonEntrepriseInseePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonEntrepriseInsee or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEntrepriseInsee object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEntrepriseInseePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonEntrepriseInsee object
        }

        if ($criteria->containsKey(CommonEntrepriseInseePeer::ID) && $criteria->keyContainsValue(CommonEntrepriseInseePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonEntrepriseInseePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonEntrepriseInseePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonEntrepriseInsee or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEntrepriseInsee object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEntrepriseInseePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonEntrepriseInseePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonEntrepriseInseePeer::ID);
            $value = $criteria->remove(CommonEntrepriseInseePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonEntrepriseInseePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonEntrepriseInseePeer::TABLE_NAME);
            }

        } else { // $values is CommonEntrepriseInsee object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonEntrepriseInseePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the EntrepriseInsee table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEntrepriseInseePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonEntrepriseInseePeer::TABLE_NAME, $con, CommonEntrepriseInseePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonEntrepriseInseePeer::clearInstancePool();
            CommonEntrepriseInseePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonEntrepriseInsee or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonEntrepriseInsee object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonEntrepriseInseePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonEntrepriseInseePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonEntrepriseInsee) { // it's a model object
            // invalidate the cache for this single object
            CommonEntrepriseInseePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonEntrepriseInseePeer::DATABASE_NAME);
            $criteria->add(CommonEntrepriseInseePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonEntrepriseInseePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEntrepriseInseePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonEntrepriseInseePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonEntrepriseInsee object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonEntrepriseInsee $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonEntrepriseInseePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonEntrepriseInseePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonEntrepriseInseePeer::DATABASE_NAME, CommonEntrepriseInseePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonEntrepriseInsee
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonEntrepriseInseePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonEntrepriseInseePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonEntrepriseInseePeer::DATABASE_NAME);
        $criteria->add(CommonEntrepriseInseePeer::ID, $pk);

        $v = CommonEntrepriseInseePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonEntrepriseInsee[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEntrepriseInseePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonEntrepriseInseePeer::DATABASE_NAME);
            $criteria->add(CommonEntrepriseInseePeer::ID, $pks, Criteria::IN);
            $objs = CommonEntrepriseInseePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonEntrepriseInseePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonEntrepriseInseePeer::buildTableMap();

