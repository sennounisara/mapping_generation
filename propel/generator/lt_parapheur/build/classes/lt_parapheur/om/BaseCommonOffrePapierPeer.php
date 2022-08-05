<?php


/**
 * Base static class for performing query and update operations on the 'Offre_papier' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonOffrePapierPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Offre_papier';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonOffrePapier';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonOffrePapierTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 32;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 32;

    /** the column name for the id field */
    const ID = 'Offre_papier.id';

    /** the column name for the organisme field */
    const ORGANISME = 'Offre_papier.organisme';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'Offre_papier.consultation_ref';

    /** the column name for the nom_entreprise field */
    const NOM_ENTREPRISE = 'Offre_papier.nom_entreprise';

    /** the column name for the date_depot field */
    const DATE_DEPOT = 'Offre_papier.date_depot';

    /** the column name for the external_serial field */
    const EXTERNAL_SERIAL = 'Offre_papier.external_serial';

    /** the column name for the internal_serial field */
    const INTERNAL_SERIAL = 'Offre_papier.internal_serial';

    /** the column name for the offre_selectionnee field */
    const OFFRE_SELECTIONNEE = 'Offre_papier.offre_selectionnee';

    /** the column name for the nom field */
    const NOM = 'Offre_papier.nom';

    /** the column name for the prenom field */
    const PRENOM = 'Offre_papier.prenom';

    /** the column name for the adresse field */
    const ADRESSE = 'Offre_papier.adresse';

    /** the column name for the adresse2 field */
    const ADRESSE2 = 'Offre_papier.adresse2';

    /** the column name for the telephone field */
    const TELEPHONE = 'Offre_papier.telephone';

    /** the column name for the fax field */
    const FAX = 'Offre_papier.fax';

    /** the column name for the code_postal field */
    const CODE_POSTAL = 'Offre_papier.code_postal';

    /** the column name for the ville field */
    const VILLE = 'Offre_papier.ville';

    /** the column name for the pays field */
    const PAYS = 'Offre_papier.pays';

    /** the column name for the acronyme_pays field */
    const ACRONYME_PAYS = 'Offre_papier.acronyme_pays';

    /** the column name for the siret field */
    const SIRET = 'Offre_papier.siret';

    /** the column name for the identifiant_national field */
    const IDENTIFIANT_NATIONAL = 'Offre_papier.identifiant_national';

    /** the column name for the email field */
    const EMAIL = 'Offre_papier.email';

    /** the column name for the observation field */
    const OBSERVATION = 'Offre_papier.observation';

    /** the column name for the date_annulation field */
    const DATE_ANNULATION = 'Offre_papier.date_annulation';

    /** the column name for the depot_annule field */
    const DEPOT_ANNULE = 'Offre_papier.depot_annule';

    /** the column name for the offre_variante field */
    const OFFRE_VARIANTE = 'Offre_papier.offre_variante';

    /** the column name for the statut_offre_papier field */
    const STATUT_OFFRE_PAPIER = 'Offre_papier.statut_offre_papier';

    /** the column name for the numero_reponse field */
    const NUMERO_REPONSE = 'Offre_papier.numero_reponse';

    /** the column name for the nom_agent_ouverture field */
    const NOM_AGENT_OUVERTURE = 'Offre_papier.nom_agent_ouverture';

    /** the column name for the agent_id_ouverture field */
    const AGENT_ID_OUVERTURE = 'Offre_papier.agent_id_ouverture';

    /** the column name for the dateheure_ouverture field */
    const DATEHEURE_OUVERTURE = 'Offre_papier.dateheure_ouverture';

    /** the column name for the ifu_entreprise field */
    const IFU_ENTREPRISE = 'Offre_papier.ifu_entreprise';

    /** the column name for the type_entreprise field */
    const TYPE_ENTREPRISE = 'Offre_papier.type_entreprise';

    /** The enumerated values for the depot_annule field */
    const DEPOT_ANNULE_0 = '0';
    const DEPOT_ANNULE_1 = '1';

    /** The enumerated values for the offre_variante field */
    const OFFRE_VARIANTE_0 = '0';
    const OFFRE_VARIANTE_1 = '1';

    /** The enumerated values for the type_entreprise field */
    const TYPE_ENTREPRISE_0 = '0';
    const TYPE_ENTREPRISE_1 = '1';
    const TYPE_ENTREPRISE_2 = '2';
    const TYPE_ENTREPRISE_3 = '3';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonOffrePapier objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonOffrePapier[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonOffrePapierPeer::$fieldNames[CommonOffrePapierPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'ConsultationRef', 'NomEntreprise', 'DateDepot', 'ExternalSerial', 'InternalSerial', 'OffreSelectionnee', 'Nom', 'Prenom', 'Adresse', 'Adresse2', 'Telephone', 'Fax', 'CodePostal', 'Ville', 'Pays', 'AcronymePays', 'Siret', 'IdentifiantNational', 'Email', 'Observation', 'DateAnnulation', 'DepotAnnule', 'OffreVariante', 'StatutOffrePapier', 'NumeroReponse', 'NomAgentOuverture', 'AgentIdOuverture', 'DateheureOuverture', 'IfuEntreprise', 'TypeEntreprise', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'consultationRef', 'nomEntreprise', 'dateDepot', 'externalSerial', 'internalSerial', 'offreSelectionnee', 'nom', 'prenom', 'adresse', 'adresse2', 'telephone', 'fax', 'codePostal', 'ville', 'pays', 'acronymePays', 'siret', 'identifiantNational', 'email', 'observation', 'dateAnnulation', 'depotAnnule', 'offreVariante', 'statutOffrePapier', 'numeroReponse', 'nomAgentOuverture', 'agentIdOuverture', 'dateheureOuverture', 'ifuEntreprise', 'typeEntreprise', ),
        BasePeer::TYPE_COLNAME => array (CommonOffrePapierPeer::ID, CommonOffrePapierPeer::ORGANISME, CommonOffrePapierPeer::CONSULTATION_REF, CommonOffrePapierPeer::NOM_ENTREPRISE, CommonOffrePapierPeer::DATE_DEPOT, CommonOffrePapierPeer::EXTERNAL_SERIAL, CommonOffrePapierPeer::INTERNAL_SERIAL, CommonOffrePapierPeer::OFFRE_SELECTIONNEE, CommonOffrePapierPeer::NOM, CommonOffrePapierPeer::PRENOM, CommonOffrePapierPeer::ADRESSE, CommonOffrePapierPeer::ADRESSE2, CommonOffrePapierPeer::TELEPHONE, CommonOffrePapierPeer::FAX, CommonOffrePapierPeer::CODE_POSTAL, CommonOffrePapierPeer::VILLE, CommonOffrePapierPeer::PAYS, CommonOffrePapierPeer::ACRONYME_PAYS, CommonOffrePapierPeer::SIRET, CommonOffrePapierPeer::IDENTIFIANT_NATIONAL, CommonOffrePapierPeer::EMAIL, CommonOffrePapierPeer::OBSERVATION, CommonOffrePapierPeer::DATE_ANNULATION, CommonOffrePapierPeer::DEPOT_ANNULE, CommonOffrePapierPeer::OFFRE_VARIANTE, CommonOffrePapierPeer::STATUT_OFFRE_PAPIER, CommonOffrePapierPeer::NUMERO_REPONSE, CommonOffrePapierPeer::NOM_AGENT_OUVERTURE, CommonOffrePapierPeer::AGENT_ID_OUVERTURE, CommonOffrePapierPeer::DATEHEURE_OUVERTURE, CommonOffrePapierPeer::IFU_ENTREPRISE, CommonOffrePapierPeer::TYPE_ENTREPRISE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'CONSULTATION_REF', 'NOM_ENTREPRISE', 'DATE_DEPOT', 'EXTERNAL_SERIAL', 'INTERNAL_SERIAL', 'OFFRE_SELECTIONNEE', 'NOM', 'PRENOM', 'ADRESSE', 'ADRESSE2', 'TELEPHONE', 'FAX', 'CODE_POSTAL', 'VILLE', 'PAYS', 'ACRONYME_PAYS', 'SIRET', 'IDENTIFIANT_NATIONAL', 'EMAIL', 'OBSERVATION', 'DATE_ANNULATION', 'DEPOT_ANNULE', 'OFFRE_VARIANTE', 'STATUT_OFFRE_PAPIER', 'NUMERO_REPONSE', 'NOM_AGENT_OUVERTURE', 'AGENT_ID_OUVERTURE', 'DATEHEURE_OUVERTURE', 'IFU_ENTREPRISE', 'TYPE_ENTREPRISE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'consultation_ref', 'nom_entreprise', 'date_depot', 'external_serial', 'internal_serial', 'offre_selectionnee', 'nom', 'prenom', 'adresse', 'adresse2', 'telephone', 'fax', 'code_postal', 'ville', 'pays', 'acronyme_pays', 'siret', 'identifiant_national', 'email', 'observation', 'date_annulation', 'depot_annule', 'offre_variante', 'statut_offre_papier', 'numero_reponse', 'nom_agent_ouverture', 'agent_id_ouverture', 'dateheure_ouverture', 'ifu_entreprise', 'type_entreprise', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonOffrePapierPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'ConsultationRef' => 2, 'NomEntreprise' => 3, 'DateDepot' => 4, 'ExternalSerial' => 5, 'InternalSerial' => 6, 'OffreSelectionnee' => 7, 'Nom' => 8, 'Prenom' => 9, 'Adresse' => 10, 'Adresse2' => 11, 'Telephone' => 12, 'Fax' => 13, 'CodePostal' => 14, 'Ville' => 15, 'Pays' => 16, 'AcronymePays' => 17, 'Siret' => 18, 'IdentifiantNational' => 19, 'Email' => 20, 'Observation' => 21, 'DateAnnulation' => 22, 'DepotAnnule' => 23, 'OffreVariante' => 24, 'StatutOffrePapier' => 25, 'NumeroReponse' => 26, 'NomAgentOuverture' => 27, 'AgentIdOuverture' => 28, 'DateheureOuverture' => 29, 'IfuEntreprise' => 30, 'TypeEntreprise' => 31, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'consultationRef' => 2, 'nomEntreprise' => 3, 'dateDepot' => 4, 'externalSerial' => 5, 'internalSerial' => 6, 'offreSelectionnee' => 7, 'nom' => 8, 'prenom' => 9, 'adresse' => 10, 'adresse2' => 11, 'telephone' => 12, 'fax' => 13, 'codePostal' => 14, 'ville' => 15, 'pays' => 16, 'acronymePays' => 17, 'siret' => 18, 'identifiantNational' => 19, 'email' => 20, 'observation' => 21, 'dateAnnulation' => 22, 'depotAnnule' => 23, 'offreVariante' => 24, 'statutOffrePapier' => 25, 'numeroReponse' => 26, 'nomAgentOuverture' => 27, 'agentIdOuverture' => 28, 'dateheureOuverture' => 29, 'ifuEntreprise' => 30, 'typeEntreprise' => 31, ),
        BasePeer::TYPE_COLNAME => array (CommonOffrePapierPeer::ID => 0, CommonOffrePapierPeer::ORGANISME => 1, CommonOffrePapierPeer::CONSULTATION_REF => 2, CommonOffrePapierPeer::NOM_ENTREPRISE => 3, CommonOffrePapierPeer::DATE_DEPOT => 4, CommonOffrePapierPeer::EXTERNAL_SERIAL => 5, CommonOffrePapierPeer::INTERNAL_SERIAL => 6, CommonOffrePapierPeer::OFFRE_SELECTIONNEE => 7, CommonOffrePapierPeer::NOM => 8, CommonOffrePapierPeer::PRENOM => 9, CommonOffrePapierPeer::ADRESSE => 10, CommonOffrePapierPeer::ADRESSE2 => 11, CommonOffrePapierPeer::TELEPHONE => 12, CommonOffrePapierPeer::FAX => 13, CommonOffrePapierPeer::CODE_POSTAL => 14, CommonOffrePapierPeer::VILLE => 15, CommonOffrePapierPeer::PAYS => 16, CommonOffrePapierPeer::ACRONYME_PAYS => 17, CommonOffrePapierPeer::SIRET => 18, CommonOffrePapierPeer::IDENTIFIANT_NATIONAL => 19, CommonOffrePapierPeer::EMAIL => 20, CommonOffrePapierPeer::OBSERVATION => 21, CommonOffrePapierPeer::DATE_ANNULATION => 22, CommonOffrePapierPeer::DEPOT_ANNULE => 23, CommonOffrePapierPeer::OFFRE_VARIANTE => 24, CommonOffrePapierPeer::STATUT_OFFRE_PAPIER => 25, CommonOffrePapierPeer::NUMERO_REPONSE => 26, CommonOffrePapierPeer::NOM_AGENT_OUVERTURE => 27, CommonOffrePapierPeer::AGENT_ID_OUVERTURE => 28, CommonOffrePapierPeer::DATEHEURE_OUVERTURE => 29, CommonOffrePapierPeer::IFU_ENTREPRISE => 30, CommonOffrePapierPeer::TYPE_ENTREPRISE => 31, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'CONSULTATION_REF' => 2, 'NOM_ENTREPRISE' => 3, 'DATE_DEPOT' => 4, 'EXTERNAL_SERIAL' => 5, 'INTERNAL_SERIAL' => 6, 'OFFRE_SELECTIONNEE' => 7, 'NOM' => 8, 'PRENOM' => 9, 'ADRESSE' => 10, 'ADRESSE2' => 11, 'TELEPHONE' => 12, 'FAX' => 13, 'CODE_POSTAL' => 14, 'VILLE' => 15, 'PAYS' => 16, 'ACRONYME_PAYS' => 17, 'SIRET' => 18, 'IDENTIFIANT_NATIONAL' => 19, 'EMAIL' => 20, 'OBSERVATION' => 21, 'DATE_ANNULATION' => 22, 'DEPOT_ANNULE' => 23, 'OFFRE_VARIANTE' => 24, 'STATUT_OFFRE_PAPIER' => 25, 'NUMERO_REPONSE' => 26, 'NOM_AGENT_OUVERTURE' => 27, 'AGENT_ID_OUVERTURE' => 28, 'DATEHEURE_OUVERTURE' => 29, 'IFU_ENTREPRISE' => 30, 'TYPE_ENTREPRISE' => 31, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'consultation_ref' => 2, 'nom_entreprise' => 3, 'date_depot' => 4, 'external_serial' => 5, 'internal_serial' => 6, 'offre_selectionnee' => 7, 'nom' => 8, 'prenom' => 9, 'adresse' => 10, 'adresse2' => 11, 'telephone' => 12, 'fax' => 13, 'code_postal' => 14, 'ville' => 15, 'pays' => 16, 'acronyme_pays' => 17, 'siret' => 18, 'identifiant_national' => 19, 'email' => 20, 'observation' => 21, 'date_annulation' => 22, 'depot_annule' => 23, 'offre_variante' => 24, 'statut_offre_papier' => 25, 'numero_reponse' => 26, 'nom_agent_ouverture' => 27, 'agent_id_ouverture' => 28, 'dateheure_ouverture' => 29, 'ifu_entreprise' => 30, 'type_entreprise' => 31, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonOffrePapierPeer::DEPOT_ANNULE => array(
            CommonOffrePapierPeer::DEPOT_ANNULE_0,
            CommonOffrePapierPeer::DEPOT_ANNULE_1,
        ),
        CommonOffrePapierPeer::OFFRE_VARIANTE => array(
            CommonOffrePapierPeer::OFFRE_VARIANTE_0,
            CommonOffrePapierPeer::OFFRE_VARIANTE_1,
        ),
        CommonOffrePapierPeer::TYPE_ENTREPRISE => array(
            CommonOffrePapierPeer::TYPE_ENTREPRISE_0,
            CommonOffrePapierPeer::TYPE_ENTREPRISE_1,
            CommonOffrePapierPeer::TYPE_ENTREPRISE_2,
            CommonOffrePapierPeer::TYPE_ENTREPRISE_3,
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
        $toNames = CommonOffrePapierPeer::getFieldNames($toType);
        $key = isset(CommonOffrePapierPeer::$fieldKeys[$fromType][$name]) ? CommonOffrePapierPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonOffrePapierPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonOffrePapierPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonOffrePapierPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonOffrePapierPeer::$enumValueSets;
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
        $valueSets = CommonOffrePapierPeer::getValueSets();

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
        $values = CommonOffrePapierPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonOffrePapierPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonOffrePapierPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonOffrePapierPeer::ID);
            $criteria->addSelectColumn(CommonOffrePapierPeer::ORGANISME);
            $criteria->addSelectColumn(CommonOffrePapierPeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonOffrePapierPeer::NOM_ENTREPRISE);
            $criteria->addSelectColumn(CommonOffrePapierPeer::DATE_DEPOT);
            $criteria->addSelectColumn(CommonOffrePapierPeer::EXTERNAL_SERIAL);
            $criteria->addSelectColumn(CommonOffrePapierPeer::INTERNAL_SERIAL);
            $criteria->addSelectColumn(CommonOffrePapierPeer::OFFRE_SELECTIONNEE);
            $criteria->addSelectColumn(CommonOffrePapierPeer::NOM);
            $criteria->addSelectColumn(CommonOffrePapierPeer::PRENOM);
            $criteria->addSelectColumn(CommonOffrePapierPeer::ADRESSE);
            $criteria->addSelectColumn(CommonOffrePapierPeer::ADRESSE2);
            $criteria->addSelectColumn(CommonOffrePapierPeer::TELEPHONE);
            $criteria->addSelectColumn(CommonOffrePapierPeer::FAX);
            $criteria->addSelectColumn(CommonOffrePapierPeer::CODE_POSTAL);
            $criteria->addSelectColumn(CommonOffrePapierPeer::VILLE);
            $criteria->addSelectColumn(CommonOffrePapierPeer::PAYS);
            $criteria->addSelectColumn(CommonOffrePapierPeer::ACRONYME_PAYS);
            $criteria->addSelectColumn(CommonOffrePapierPeer::SIRET);
            $criteria->addSelectColumn(CommonOffrePapierPeer::IDENTIFIANT_NATIONAL);
            $criteria->addSelectColumn(CommonOffrePapierPeer::EMAIL);
            $criteria->addSelectColumn(CommonOffrePapierPeer::OBSERVATION);
            $criteria->addSelectColumn(CommonOffrePapierPeer::DATE_ANNULATION);
            $criteria->addSelectColumn(CommonOffrePapierPeer::DEPOT_ANNULE);
            $criteria->addSelectColumn(CommonOffrePapierPeer::OFFRE_VARIANTE);
            $criteria->addSelectColumn(CommonOffrePapierPeer::STATUT_OFFRE_PAPIER);
            $criteria->addSelectColumn(CommonOffrePapierPeer::NUMERO_REPONSE);
            $criteria->addSelectColumn(CommonOffrePapierPeer::NOM_AGENT_OUVERTURE);
            $criteria->addSelectColumn(CommonOffrePapierPeer::AGENT_ID_OUVERTURE);
            $criteria->addSelectColumn(CommonOffrePapierPeer::DATEHEURE_OUVERTURE);
            $criteria->addSelectColumn(CommonOffrePapierPeer::IFU_ENTREPRISE);
            $criteria->addSelectColumn(CommonOffrePapierPeer::TYPE_ENTREPRISE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.nom_entreprise');
            $criteria->addSelectColumn($alias . '.date_depot');
            $criteria->addSelectColumn($alias . '.external_serial');
            $criteria->addSelectColumn($alias . '.internal_serial');
            $criteria->addSelectColumn($alias . '.offre_selectionnee');
            $criteria->addSelectColumn($alias . '.nom');
            $criteria->addSelectColumn($alias . '.prenom');
            $criteria->addSelectColumn($alias . '.adresse');
            $criteria->addSelectColumn($alias . '.adresse2');
            $criteria->addSelectColumn($alias . '.telephone');
            $criteria->addSelectColumn($alias . '.fax');
            $criteria->addSelectColumn($alias . '.code_postal');
            $criteria->addSelectColumn($alias . '.ville');
            $criteria->addSelectColumn($alias . '.pays');
            $criteria->addSelectColumn($alias . '.acronyme_pays');
            $criteria->addSelectColumn($alias . '.siret');
            $criteria->addSelectColumn($alias . '.identifiant_national');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.observation');
            $criteria->addSelectColumn($alias . '.date_annulation');
            $criteria->addSelectColumn($alias . '.depot_annule');
            $criteria->addSelectColumn($alias . '.offre_variante');
            $criteria->addSelectColumn($alias . '.statut_offre_papier');
            $criteria->addSelectColumn($alias . '.numero_reponse');
            $criteria->addSelectColumn($alias . '.nom_agent_ouverture');
            $criteria->addSelectColumn($alias . '.agent_id_ouverture');
            $criteria->addSelectColumn($alias . '.dateheure_ouverture');
            $criteria->addSelectColumn($alias . '.ifu_entreprise');
            $criteria->addSelectColumn($alias . '.type_entreprise');
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
        $criteria->setPrimaryTableName(CommonOffrePapierPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonOffrePapierPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonOffrePapierPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonOffrePapierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonOffrePapier
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonOffrePapierPeer::doSelect($critcopy, $con);
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
        return CommonOffrePapierPeer::populateObjects(CommonOffrePapierPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonOffrePapierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonOffrePapierPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonOffrePapierPeer::DATABASE_NAME);

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
     * @param      CommonOffrePapier $obj A CommonOffrePapier object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonOffrePapierPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonOffrePapier object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonOffrePapier) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonOffrePapier object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonOffrePapierPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonOffrePapier Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonOffrePapierPeer::$instances[$key])) {
                return CommonOffrePapierPeer::$instances[$key];
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
        foreach (CommonOffrePapierPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonOffrePapierPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Offre_papier
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
        $cls = CommonOffrePapierPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonOffrePapierPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonOffrePapierPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonOffrePapierPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonOffrePapier object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonOffrePapierPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonOffrePapierPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonOffrePapierPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonOffrePapierPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonOffrePapierPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonConsultation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonConsultation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonOffrePapierPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonOffrePapierPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonOffrePapierPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonOffrePapierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonOffrePapierPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonOffrePapierPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

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
     * Selects a collection of CommonOffrePapier objects pre-filled with their CommonConsultation objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonOffrePapier objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonConsultation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonOffrePapierPeer::DATABASE_NAME);
        }

        CommonOffrePapierPeer::addSelectColumns($criteria);
        $startcol = CommonOffrePapierPeer::NUM_HYDRATE_COLUMNS;
        CommonConsultationPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(CommonOffrePapierPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonOffrePapierPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonOffrePapierPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonOffrePapierPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonOffrePapierPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonOffrePapierPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonConsultationPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonConsultationPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonConsultationPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonOffrePapier) to $obj2 (CommonConsultation)
                $obj2->addCommonOffrePapier($obj1);

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
        $criteria->setPrimaryTableName(CommonOffrePapierPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonOffrePapierPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonOffrePapierPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonOffrePapierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonOffrePapierPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonOffrePapierPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

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
     * Selects a collection of CommonOffrePapier objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonOffrePapier objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonOffrePapierPeer::DATABASE_NAME);
        }

        CommonOffrePapierPeer::addSelectColumns($criteria);
        $startcol2 = CommonOffrePapierPeer::NUM_HYDRATE_COLUMNS;

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonConsultationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(CommonOffrePapierPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonOffrePapierPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonOffrePapierPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonOffrePapierPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonOffrePapierPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonOffrePapierPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonConsultation rows

            $key2 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonConsultationPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonConsultationPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonConsultationPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonOffrePapier) to the collection in $obj2 (CommonConsultation)
                $obj2->addCommonOffrePapier($obj1);
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
        return Propel::getDatabaseMap(CommonOffrePapierPeer::DATABASE_NAME)->getTable(CommonOffrePapierPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonOffrePapierPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonOffrePapierPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonOffrePapierTableMap());
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
        return CommonOffrePapierPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonOffrePapier or Criteria object.
     *
     * @param      mixed $values Criteria or CommonOffrePapier object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonOffrePapierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonOffrePapier object
        }

        if ($criteria->containsKey(CommonOffrePapierPeer::ID) && $criteria->keyContainsValue(CommonOffrePapierPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonOffrePapierPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonOffrePapierPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonOffrePapier or Criteria object.
     *
     * @param      mixed $values Criteria or CommonOffrePapier object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonOffrePapierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonOffrePapierPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonOffrePapierPeer::ID);
            $value = $criteria->remove(CommonOffrePapierPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonOffrePapierPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonOffrePapierPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonOffrePapierPeer::ORGANISME);
            $value = $criteria->remove(CommonOffrePapierPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonOffrePapierPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonOffrePapierPeer::TABLE_NAME);
            }

        } else { // $values is CommonOffrePapier object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonOffrePapierPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Offre_papier table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonOffrePapierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonOffrePapierPeer::TABLE_NAME, $con, CommonOffrePapierPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonOffrePapierPeer::clearInstancePool();
            CommonOffrePapierPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonOffrePapier or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonOffrePapier object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonOffrePapierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonOffrePapierPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonOffrePapier) { // it's a model object
            // invalidate the cache for this single object
            CommonOffrePapierPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonOffrePapierPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonOffrePapierPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonOffrePapierPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonOffrePapierPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonOffrePapierPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonOffrePapierPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonOffrePapier object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonOffrePapier $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonOffrePapierPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonOffrePapierPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonOffrePapierPeer::DATABASE_NAME, CommonOffrePapierPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonOffrePapier
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonOffrePapierPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonOffrePapierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonOffrePapierPeer::DATABASE_NAME);
        $criteria->add(CommonOffrePapierPeer::ID, $id);
        $criteria->add(CommonOffrePapierPeer::ORGANISME, $organisme);
        $v = CommonOffrePapierPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonOffrePapierPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonOffrePapierPeer::buildTableMap();

