<?php


/**
 * Base static class for performing query and update operations on the 'Helios_teletransmission' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonHeliosTeletransmissionPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Helios_teletransmission';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonHeliosTeletransmission';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonHeliosTeletransmissionTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 33;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 33;

    /** the column name for the id field */
    const ID = 'Helios_teletransmission.id';

    /** the column name for the organisme field */
    const ORGANISME = 'Helios_teletransmission.organisme';

    /** the column name for the shown_id field */
    const SHOWN_ID = 'Helios_teletransmission.shown_id';

    /** the column name for the id_agent_creation field */
    const ID_AGENT_CREATION = 'Helios_teletransmission.id_agent_creation';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'Helios_teletransmission.consultation_ref';

    /** the column name for the publicite_cons field */
    const PUBLICITE_CONS = 'Helios_teletransmission.publicite_cons';

    /** the column name for the dce_items field */
    const DCE_ITEMS = 'Helios_teletransmission.dce_items';

    /** the column name for the ids_pvs_cao field */
    const IDS_PVS_CAO = 'Helios_teletransmission.ids_pvs_cao';

    /** the column name for the ids_rapports_prefet field */
    const IDS_RAPPORTS_PREFET = 'Helios_teletransmission.ids_rapports_prefet';

    /** the column name for the deliberation_mapa field */
    const DELIBERATION_MAPA = 'Helios_teletransmission.deliberation_mapa';

    /** the column name for the tableau_ar field */
    const TABLEAU_AR = 'Helios_teletransmission.tableau_ar';

    /** the column name for the date_creation field */
    const DATE_CREATION = 'Helios_teletransmission.date_creation';

    /** the column name for the date_envoi field */
    const DATE_ENVOI = 'Helios_teletransmission.date_envoi';

    /** the column name for the id_agent_envoi field */
    const ID_AGENT_ENVOI = 'Helios_teletransmission.id_agent_envoi';

    /** the column name for the nom_piecej1 field */
    const NOM_PIECEJ1 = 'Helios_teletransmission.nom_piecej1';

    /** the column name for the piecej1 field */
    const PIECEJ1 = 'Helios_teletransmission.piecej1';

    /** the column name for the horodatage_piecej1 field */
    const HORODATAGE_PIECEJ1 = 'Helios_teletransmission.horodatage_piecej1';

    /** the column name for the untrusteddate_piecej1 field */
    const UNTRUSTEDDATE_PIECEJ1 = 'Helios_teletransmission.untrusteddate_piecej1';

    /** the column name for the taille_piecej1 field */
    const TAILLE_PIECEJ1 = 'Helios_teletransmission.taille_piecej1';

    /** the column name for the nom_piecej2 field */
    const NOM_PIECEJ2 = 'Helios_teletransmission.nom_piecej2';

    /** the column name for the piecej2 field */
    const PIECEJ2 = 'Helios_teletransmission.piecej2';

    /** the column name for the horodatage_piecej2 field */
    const HORODATAGE_PIECEJ2 = 'Helios_teletransmission.horodatage_piecej2';

    /** the column name for the untrusteddate_piecej2 field */
    const UNTRUSTEDDATE_PIECEJ2 = 'Helios_teletransmission.untrusteddate_piecej2';

    /** the column name for the taille_piecej2 field */
    const TAILLE_PIECEJ2 = 'Helios_teletransmission.taille_piecej2';

    /** the column name for the piecej1_desc field */
    const PIECEJ1_DESC = 'Helios_teletransmission.piecej1_desc';

    /** the column name for the piecej2_desc field */
    const PIECEJ2_DESC = 'Helios_teletransmission.piecej2_desc';

    /** the column name for the fichier_xml field */
    const FICHIER_XML = 'Helios_teletransmission.fichier_xml';

    /** the column name for the nom_dossierzip field */
    const NOM_DOSSIERZIP = 'Helios_teletransmission.nom_dossierzip';

    /** the column name for the taille_dossierzip field */
    const TAILLE_DOSSIERZIP = 'Helios_teletransmission.taille_dossierzip';

    /** the column name for the objet_libre field */
    const OBJET_LIBRE = 'Helios_teletransmission.objet_libre';

    /** the column name for the commentaire_libre field */
    const COMMENTAIRE_LIBRE = 'Helios_teletransmission.commentaire_libre';

    /** the column name for the sig_piece_principale field */
    const SIG_PIECE_PRINCIPALE = 'Helios_teletransmission.sig_piece_principale';

    /** the column name for the ref_utilisateur field */
    const REF_UTILISATEUR = 'Helios_teletransmission.ref_utilisateur';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonHeliosTeletransmission objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonHeliosTeletransmission[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonHeliosTeletransmissionPeer::$fieldNames[CommonHeliosTeletransmissionPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'ShownId', 'IdAgentCreation', 'ConsultationRef', 'PubliciteCons', 'DceItems', 'IdsPvsCao', 'IdsRapportsPrefet', 'DeliberationMapa', 'TableauAr', 'DateCreation', 'DateEnvoi', 'IdAgentEnvoi', 'NomPiecej1', 'Piecej1', 'HorodatagePiecej1', 'UntrusteddatePiecej1', 'TaillePiecej1', 'NomPiecej2', 'Piecej2', 'HorodatagePiecej2', 'UntrusteddatePiecej2', 'TaillePiecej2', 'Piecej1Desc', 'Piecej2Desc', 'FichierXml', 'NomDossierzip', 'TailleDossierzip', 'ObjetLibre', 'CommentaireLibre', 'SigPiecePrincipale', 'RefUtilisateur', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'shownId', 'idAgentCreation', 'consultationRef', 'publiciteCons', 'dceItems', 'idsPvsCao', 'idsRapportsPrefet', 'deliberationMapa', 'tableauAr', 'dateCreation', 'dateEnvoi', 'idAgentEnvoi', 'nomPiecej1', 'piecej1', 'horodatagePiecej1', 'untrusteddatePiecej1', 'taillePiecej1', 'nomPiecej2', 'piecej2', 'horodatagePiecej2', 'untrusteddatePiecej2', 'taillePiecej2', 'piecej1Desc', 'piecej2Desc', 'fichierXml', 'nomDossierzip', 'tailleDossierzip', 'objetLibre', 'commentaireLibre', 'sigPiecePrincipale', 'refUtilisateur', ),
        BasePeer::TYPE_COLNAME => array (CommonHeliosTeletransmissionPeer::ID, CommonHeliosTeletransmissionPeer::ORGANISME, CommonHeliosTeletransmissionPeer::SHOWN_ID, CommonHeliosTeletransmissionPeer::ID_AGENT_CREATION, CommonHeliosTeletransmissionPeer::CONSULTATION_REF, CommonHeliosTeletransmissionPeer::PUBLICITE_CONS, CommonHeliosTeletransmissionPeer::DCE_ITEMS, CommonHeliosTeletransmissionPeer::IDS_PVS_CAO, CommonHeliosTeletransmissionPeer::IDS_RAPPORTS_PREFET, CommonHeliosTeletransmissionPeer::DELIBERATION_MAPA, CommonHeliosTeletransmissionPeer::TABLEAU_AR, CommonHeliosTeletransmissionPeer::DATE_CREATION, CommonHeliosTeletransmissionPeer::DATE_ENVOI, CommonHeliosTeletransmissionPeer::ID_AGENT_ENVOI, CommonHeliosTeletransmissionPeer::NOM_PIECEJ1, CommonHeliosTeletransmissionPeer::PIECEJ1, CommonHeliosTeletransmissionPeer::HORODATAGE_PIECEJ1, CommonHeliosTeletransmissionPeer::UNTRUSTEDDATE_PIECEJ1, CommonHeliosTeletransmissionPeer::TAILLE_PIECEJ1, CommonHeliosTeletransmissionPeer::NOM_PIECEJ2, CommonHeliosTeletransmissionPeer::PIECEJ2, CommonHeliosTeletransmissionPeer::HORODATAGE_PIECEJ2, CommonHeliosTeletransmissionPeer::UNTRUSTEDDATE_PIECEJ2, CommonHeliosTeletransmissionPeer::TAILLE_PIECEJ2, CommonHeliosTeletransmissionPeer::PIECEJ1_DESC, CommonHeliosTeletransmissionPeer::PIECEJ2_DESC, CommonHeliosTeletransmissionPeer::FICHIER_XML, CommonHeliosTeletransmissionPeer::NOM_DOSSIERZIP, CommonHeliosTeletransmissionPeer::TAILLE_DOSSIERZIP, CommonHeliosTeletransmissionPeer::OBJET_LIBRE, CommonHeliosTeletransmissionPeer::COMMENTAIRE_LIBRE, CommonHeliosTeletransmissionPeer::SIG_PIECE_PRINCIPALE, CommonHeliosTeletransmissionPeer::REF_UTILISATEUR, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'SHOWN_ID', 'ID_AGENT_CREATION', 'CONSULTATION_REF', 'PUBLICITE_CONS', 'DCE_ITEMS', 'IDS_PVS_CAO', 'IDS_RAPPORTS_PREFET', 'DELIBERATION_MAPA', 'TABLEAU_AR', 'DATE_CREATION', 'DATE_ENVOI', 'ID_AGENT_ENVOI', 'NOM_PIECEJ1', 'PIECEJ1', 'HORODATAGE_PIECEJ1', 'UNTRUSTEDDATE_PIECEJ1', 'TAILLE_PIECEJ1', 'NOM_PIECEJ2', 'PIECEJ2', 'HORODATAGE_PIECEJ2', 'UNTRUSTEDDATE_PIECEJ2', 'TAILLE_PIECEJ2', 'PIECEJ1_DESC', 'PIECEJ2_DESC', 'FICHIER_XML', 'NOM_DOSSIERZIP', 'TAILLE_DOSSIERZIP', 'OBJET_LIBRE', 'COMMENTAIRE_LIBRE', 'SIG_PIECE_PRINCIPALE', 'REF_UTILISATEUR', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'shown_id', 'id_agent_creation', 'consultation_ref', 'publicite_cons', 'dce_items', 'ids_pvs_cao', 'ids_rapports_prefet', 'deliberation_mapa', 'tableau_ar', 'date_creation', 'date_envoi', 'id_agent_envoi', 'nom_piecej1', 'piecej1', 'horodatage_piecej1', 'untrusteddate_piecej1', 'taille_piecej1', 'nom_piecej2', 'piecej2', 'horodatage_piecej2', 'untrusteddate_piecej2', 'taille_piecej2', 'piecej1_desc', 'piecej2_desc', 'fichier_xml', 'nom_dossierzip', 'taille_dossierzip', 'objet_libre', 'commentaire_libre', 'sig_piece_principale', 'ref_utilisateur', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonHeliosTeletransmissionPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'ShownId' => 2, 'IdAgentCreation' => 3, 'ConsultationRef' => 4, 'PubliciteCons' => 5, 'DceItems' => 6, 'IdsPvsCao' => 7, 'IdsRapportsPrefet' => 8, 'DeliberationMapa' => 9, 'TableauAr' => 10, 'DateCreation' => 11, 'DateEnvoi' => 12, 'IdAgentEnvoi' => 13, 'NomPiecej1' => 14, 'Piecej1' => 15, 'HorodatagePiecej1' => 16, 'UntrusteddatePiecej1' => 17, 'TaillePiecej1' => 18, 'NomPiecej2' => 19, 'Piecej2' => 20, 'HorodatagePiecej2' => 21, 'UntrusteddatePiecej2' => 22, 'TaillePiecej2' => 23, 'Piecej1Desc' => 24, 'Piecej2Desc' => 25, 'FichierXml' => 26, 'NomDossierzip' => 27, 'TailleDossierzip' => 28, 'ObjetLibre' => 29, 'CommentaireLibre' => 30, 'SigPiecePrincipale' => 31, 'RefUtilisateur' => 32, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'shownId' => 2, 'idAgentCreation' => 3, 'consultationRef' => 4, 'publiciteCons' => 5, 'dceItems' => 6, 'idsPvsCao' => 7, 'idsRapportsPrefet' => 8, 'deliberationMapa' => 9, 'tableauAr' => 10, 'dateCreation' => 11, 'dateEnvoi' => 12, 'idAgentEnvoi' => 13, 'nomPiecej1' => 14, 'piecej1' => 15, 'horodatagePiecej1' => 16, 'untrusteddatePiecej1' => 17, 'taillePiecej1' => 18, 'nomPiecej2' => 19, 'piecej2' => 20, 'horodatagePiecej2' => 21, 'untrusteddatePiecej2' => 22, 'taillePiecej2' => 23, 'piecej1Desc' => 24, 'piecej2Desc' => 25, 'fichierXml' => 26, 'nomDossierzip' => 27, 'tailleDossierzip' => 28, 'objetLibre' => 29, 'commentaireLibre' => 30, 'sigPiecePrincipale' => 31, 'refUtilisateur' => 32, ),
        BasePeer::TYPE_COLNAME => array (CommonHeliosTeletransmissionPeer::ID => 0, CommonHeliosTeletransmissionPeer::ORGANISME => 1, CommonHeliosTeletransmissionPeer::SHOWN_ID => 2, CommonHeliosTeletransmissionPeer::ID_AGENT_CREATION => 3, CommonHeliosTeletransmissionPeer::CONSULTATION_REF => 4, CommonHeliosTeletransmissionPeer::PUBLICITE_CONS => 5, CommonHeliosTeletransmissionPeer::DCE_ITEMS => 6, CommonHeliosTeletransmissionPeer::IDS_PVS_CAO => 7, CommonHeliosTeletransmissionPeer::IDS_RAPPORTS_PREFET => 8, CommonHeliosTeletransmissionPeer::DELIBERATION_MAPA => 9, CommonHeliosTeletransmissionPeer::TABLEAU_AR => 10, CommonHeliosTeletransmissionPeer::DATE_CREATION => 11, CommonHeliosTeletransmissionPeer::DATE_ENVOI => 12, CommonHeliosTeletransmissionPeer::ID_AGENT_ENVOI => 13, CommonHeliosTeletransmissionPeer::NOM_PIECEJ1 => 14, CommonHeliosTeletransmissionPeer::PIECEJ1 => 15, CommonHeliosTeletransmissionPeer::HORODATAGE_PIECEJ1 => 16, CommonHeliosTeletransmissionPeer::UNTRUSTEDDATE_PIECEJ1 => 17, CommonHeliosTeletransmissionPeer::TAILLE_PIECEJ1 => 18, CommonHeliosTeletransmissionPeer::NOM_PIECEJ2 => 19, CommonHeliosTeletransmissionPeer::PIECEJ2 => 20, CommonHeliosTeletransmissionPeer::HORODATAGE_PIECEJ2 => 21, CommonHeliosTeletransmissionPeer::UNTRUSTEDDATE_PIECEJ2 => 22, CommonHeliosTeletransmissionPeer::TAILLE_PIECEJ2 => 23, CommonHeliosTeletransmissionPeer::PIECEJ1_DESC => 24, CommonHeliosTeletransmissionPeer::PIECEJ2_DESC => 25, CommonHeliosTeletransmissionPeer::FICHIER_XML => 26, CommonHeliosTeletransmissionPeer::NOM_DOSSIERZIP => 27, CommonHeliosTeletransmissionPeer::TAILLE_DOSSIERZIP => 28, CommonHeliosTeletransmissionPeer::OBJET_LIBRE => 29, CommonHeliosTeletransmissionPeer::COMMENTAIRE_LIBRE => 30, CommonHeliosTeletransmissionPeer::SIG_PIECE_PRINCIPALE => 31, CommonHeliosTeletransmissionPeer::REF_UTILISATEUR => 32, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'SHOWN_ID' => 2, 'ID_AGENT_CREATION' => 3, 'CONSULTATION_REF' => 4, 'PUBLICITE_CONS' => 5, 'DCE_ITEMS' => 6, 'IDS_PVS_CAO' => 7, 'IDS_RAPPORTS_PREFET' => 8, 'DELIBERATION_MAPA' => 9, 'TABLEAU_AR' => 10, 'DATE_CREATION' => 11, 'DATE_ENVOI' => 12, 'ID_AGENT_ENVOI' => 13, 'NOM_PIECEJ1' => 14, 'PIECEJ1' => 15, 'HORODATAGE_PIECEJ1' => 16, 'UNTRUSTEDDATE_PIECEJ1' => 17, 'TAILLE_PIECEJ1' => 18, 'NOM_PIECEJ2' => 19, 'PIECEJ2' => 20, 'HORODATAGE_PIECEJ2' => 21, 'UNTRUSTEDDATE_PIECEJ2' => 22, 'TAILLE_PIECEJ2' => 23, 'PIECEJ1_DESC' => 24, 'PIECEJ2_DESC' => 25, 'FICHIER_XML' => 26, 'NOM_DOSSIERZIP' => 27, 'TAILLE_DOSSIERZIP' => 28, 'OBJET_LIBRE' => 29, 'COMMENTAIRE_LIBRE' => 30, 'SIG_PIECE_PRINCIPALE' => 31, 'REF_UTILISATEUR' => 32, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'shown_id' => 2, 'id_agent_creation' => 3, 'consultation_ref' => 4, 'publicite_cons' => 5, 'dce_items' => 6, 'ids_pvs_cao' => 7, 'ids_rapports_prefet' => 8, 'deliberation_mapa' => 9, 'tableau_ar' => 10, 'date_creation' => 11, 'date_envoi' => 12, 'id_agent_envoi' => 13, 'nom_piecej1' => 14, 'piecej1' => 15, 'horodatage_piecej1' => 16, 'untrusteddate_piecej1' => 17, 'taille_piecej1' => 18, 'nom_piecej2' => 19, 'piecej2' => 20, 'horodatage_piecej2' => 21, 'untrusteddate_piecej2' => 22, 'taille_piecej2' => 23, 'piecej1_desc' => 24, 'piecej2_desc' => 25, 'fichier_xml' => 26, 'nom_dossierzip' => 27, 'taille_dossierzip' => 28, 'objet_libre' => 29, 'commentaire_libre' => 30, 'sig_piece_principale' => 31, 'ref_utilisateur' => 32, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, )
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
        $toNames = CommonHeliosTeletransmissionPeer::getFieldNames($toType);
        $key = isset(CommonHeliosTeletransmissionPeer::$fieldKeys[$fromType][$name]) ? CommonHeliosTeletransmissionPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonHeliosTeletransmissionPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonHeliosTeletransmissionPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonHeliosTeletransmissionPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonHeliosTeletransmissionPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonHeliosTeletransmissionPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::ID);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::ORGANISME);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::SHOWN_ID);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::ID_AGENT_CREATION);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::PUBLICITE_CONS);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::DCE_ITEMS);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::IDS_PVS_CAO);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::IDS_RAPPORTS_PREFET);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::DELIBERATION_MAPA);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::TABLEAU_AR);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::DATE_ENVOI);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::ID_AGENT_ENVOI);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::NOM_PIECEJ1);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::PIECEJ1);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::HORODATAGE_PIECEJ1);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::UNTRUSTEDDATE_PIECEJ1);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::TAILLE_PIECEJ1);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::NOM_PIECEJ2);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::PIECEJ2);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::HORODATAGE_PIECEJ2);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::UNTRUSTEDDATE_PIECEJ2);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::TAILLE_PIECEJ2);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::PIECEJ1_DESC);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::PIECEJ2_DESC);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::FICHIER_XML);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::NOM_DOSSIERZIP);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::TAILLE_DOSSIERZIP);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::OBJET_LIBRE);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::COMMENTAIRE_LIBRE);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::SIG_PIECE_PRINCIPALE);
            $criteria->addSelectColumn(CommonHeliosTeletransmissionPeer::REF_UTILISATEUR);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.shown_id');
            $criteria->addSelectColumn($alias . '.id_agent_creation');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.publicite_cons');
            $criteria->addSelectColumn($alias . '.dce_items');
            $criteria->addSelectColumn($alias . '.ids_pvs_cao');
            $criteria->addSelectColumn($alias . '.ids_rapports_prefet');
            $criteria->addSelectColumn($alias . '.deliberation_mapa');
            $criteria->addSelectColumn($alias . '.tableau_ar');
            $criteria->addSelectColumn($alias . '.date_creation');
            $criteria->addSelectColumn($alias . '.date_envoi');
            $criteria->addSelectColumn($alias . '.id_agent_envoi');
            $criteria->addSelectColumn($alias . '.nom_piecej1');
            $criteria->addSelectColumn($alias . '.piecej1');
            $criteria->addSelectColumn($alias . '.horodatage_piecej1');
            $criteria->addSelectColumn($alias . '.untrusteddate_piecej1');
            $criteria->addSelectColumn($alias . '.taille_piecej1');
            $criteria->addSelectColumn($alias . '.nom_piecej2');
            $criteria->addSelectColumn($alias . '.piecej2');
            $criteria->addSelectColumn($alias . '.horodatage_piecej2');
            $criteria->addSelectColumn($alias . '.untrusteddate_piecej2');
            $criteria->addSelectColumn($alias . '.taille_piecej2');
            $criteria->addSelectColumn($alias . '.piecej1_desc');
            $criteria->addSelectColumn($alias . '.piecej2_desc');
            $criteria->addSelectColumn($alias . '.fichier_xml');
            $criteria->addSelectColumn($alias . '.nom_dossierzip');
            $criteria->addSelectColumn($alias . '.taille_dossierzip');
            $criteria->addSelectColumn($alias . '.objet_libre');
            $criteria->addSelectColumn($alias . '.commentaire_libre');
            $criteria->addSelectColumn($alias . '.sig_piece_principale');
            $criteria->addSelectColumn($alias . '.ref_utilisateur');
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
        $criteria->setPrimaryTableName(CommonHeliosTeletransmissionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonHeliosTeletransmissionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonHeliosTeletransmissionPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonHeliosTeletransmissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonHeliosTeletransmission
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonHeliosTeletransmissionPeer::doSelect($critcopy, $con);
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
        return CommonHeliosTeletransmissionPeer::populateObjects(CommonHeliosTeletransmissionPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonHeliosTeletransmissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonHeliosTeletransmissionPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonHeliosTeletransmissionPeer::DATABASE_NAME);

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
     * @param      CommonHeliosTeletransmission $obj A CommonHeliosTeletransmission object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonHeliosTeletransmissionPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonHeliosTeletransmission object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonHeliosTeletransmission) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonHeliosTeletransmission object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonHeliosTeletransmissionPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonHeliosTeletransmission Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonHeliosTeletransmissionPeer::$instances[$key])) {
                return CommonHeliosTeletransmissionPeer::$instances[$key];
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
        foreach (CommonHeliosTeletransmissionPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonHeliosTeletransmissionPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Helios_teletransmission
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
        $cls = CommonHeliosTeletransmissionPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonHeliosTeletransmissionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonHeliosTeletransmissionPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonHeliosTeletransmissionPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonHeliosTeletransmission object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonHeliosTeletransmissionPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonHeliosTeletransmissionPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonHeliosTeletransmissionPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonHeliosTeletransmissionPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonHeliosTeletransmissionPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(CommonHeliosTeletransmissionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonHeliosTeletransmissionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonHeliosTeletransmissionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonHeliosTeletransmissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonHeliosTeletransmissionPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonHeliosTeletransmissionPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
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
     * Selects a collection of CommonHeliosTeletransmission objects pre-filled with their CommonConsultation objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonHeliosTeletransmission objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonConsultation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonHeliosTeletransmissionPeer::DATABASE_NAME);
        }

        CommonHeliosTeletransmissionPeer::addSelectColumns($criteria);
        $startcol = CommonHeliosTeletransmissionPeer::NUM_HYDRATE_COLUMNS;
        CommonConsultationPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(CommonHeliosTeletransmissionPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonHeliosTeletransmissionPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonHeliosTeletransmissionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonHeliosTeletransmissionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonHeliosTeletransmissionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonHeliosTeletransmissionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonHeliosTeletransmission) to $obj2 (CommonConsultation)
                $obj2->addCommonHeliosTeletransmission($obj1);

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
        $criteria->setPrimaryTableName(CommonHeliosTeletransmissionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonHeliosTeletransmissionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonHeliosTeletransmissionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonHeliosTeletransmissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonHeliosTeletransmissionPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonHeliosTeletransmissionPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
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
     * Selects a collection of CommonHeliosTeletransmission objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonHeliosTeletransmission objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonHeliosTeletransmissionPeer::DATABASE_NAME);
        }

        CommonHeliosTeletransmissionPeer::addSelectColumns($criteria);
        $startcol2 = CommonHeliosTeletransmissionPeer::NUM_HYDRATE_COLUMNS;

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonConsultationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(CommonHeliosTeletransmissionPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonHeliosTeletransmissionPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonHeliosTeletransmissionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonHeliosTeletransmissionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonHeliosTeletransmissionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonHeliosTeletransmissionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonHeliosTeletransmission) to the collection in $obj2 (CommonConsultation)
                $obj2->addCommonHeliosTeletransmission($obj1);
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
        return Propel::getDatabaseMap(CommonHeliosTeletransmissionPeer::DATABASE_NAME)->getTable(CommonHeliosTeletransmissionPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonHeliosTeletransmissionPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonHeliosTeletransmissionPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonHeliosTeletransmissionTableMap());
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
        return CommonHeliosTeletransmissionPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonHeliosTeletransmission or Criteria object.
     *
     * @param      mixed $values Criteria or CommonHeliosTeletransmission object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonHeliosTeletransmissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonHeliosTeletransmission object
        }

        if ($criteria->containsKey(CommonHeliosTeletransmissionPeer::ID) && $criteria->keyContainsValue(CommonHeliosTeletransmissionPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonHeliosTeletransmissionPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonHeliosTeletransmissionPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonHeliosTeletransmission or Criteria object.
     *
     * @param      mixed $values Criteria or CommonHeliosTeletransmission object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonHeliosTeletransmissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonHeliosTeletransmissionPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonHeliosTeletransmissionPeer::ID);
            $value = $criteria->remove(CommonHeliosTeletransmissionPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonHeliosTeletransmissionPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonHeliosTeletransmissionPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonHeliosTeletransmissionPeer::ORGANISME);
            $value = $criteria->remove(CommonHeliosTeletransmissionPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonHeliosTeletransmissionPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonHeliosTeletransmissionPeer::TABLE_NAME);
            }

        } else { // $values is CommonHeliosTeletransmission object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonHeliosTeletransmissionPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Helios_teletransmission table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonHeliosTeletransmissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonHeliosTeletransmissionPeer::TABLE_NAME, $con, CommonHeliosTeletransmissionPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonHeliosTeletransmissionPeer::clearInstancePool();
            CommonHeliosTeletransmissionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonHeliosTeletransmission or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonHeliosTeletransmission object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonHeliosTeletransmissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonHeliosTeletransmissionPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonHeliosTeletransmission) { // it's a model object
            // invalidate the cache for this single object
            CommonHeliosTeletransmissionPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonHeliosTeletransmissionPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonHeliosTeletransmissionPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonHeliosTeletransmissionPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonHeliosTeletransmissionPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonHeliosTeletransmissionPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonHeliosTeletransmissionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonHeliosTeletransmission object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonHeliosTeletransmission $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonHeliosTeletransmissionPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonHeliosTeletransmissionPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonHeliosTeletransmissionPeer::DATABASE_NAME, CommonHeliosTeletransmissionPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonHeliosTeletransmission
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonHeliosTeletransmissionPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonHeliosTeletransmissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonHeliosTeletransmissionPeer::DATABASE_NAME);
        $criteria->add(CommonHeliosTeletransmissionPeer::ID, $id);
        $criteria->add(CommonHeliosTeletransmissionPeer::ORGANISME, $organisme);
        $v = CommonHeliosTeletransmissionPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonHeliosTeletransmissionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonHeliosTeletransmissionPeer::buildTableMap();

