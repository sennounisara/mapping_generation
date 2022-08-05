<?php


/**
 * Base static class for performing query and update operations on the 'Offres' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonOffresPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Offres';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonOffres';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonOffresTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 57;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 57;

    /** the column name for the id field */
    const ID = 'Offres.id';

    /** the column name for the organisme field */
    const ORGANISME = 'Offres.organisme';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'Offres.consultation_ref';

    /** the column name for the entreprise_id field */
    const ENTREPRISE_ID = 'Offres.entreprise_id';

    /** the column name for the inscrit_id field */
    const INSCRIT_ID = 'Offres.inscrit_id';

    /** the column name for the signatureenvxml field */
    const SIGNATUREENVXML = 'Offres.signatureenvxml';

    /** the column name for the horodatage field */
    const HORODATAGE = 'Offres.horodatage';

    /** the column name for the mailsignataire field */
    const MAILSIGNATAIRE = 'Offres.mailsignataire';

    /** the column name for the untrusteddate field */
    const UNTRUSTEDDATE = 'Offres.untrusteddate';

    /** the column name for the untrustedserial field */
    const UNTRUSTEDSERIAL = 'Offres.untrustedserial';

    /** the column name for the envoi_complet field */
    const ENVOI_COMPLET = 'Offres.envoi_complet';

    /** the column name for the date_depot_differe field */
    const DATE_DEPOT_DIFFERE = 'Offres.date_depot_differe';

    /** the column name for the horodatage_envoi_differe field */
    const HORODATAGE_ENVOI_DIFFERE = 'Offres.horodatage_envoi_differe';

    /** the column name for the signatureenvxml_envoi_differe field */
    const SIGNATUREENVXML_ENVOI_DIFFERE = 'Offres.signatureenvxml_envoi_differe';

    /** the column name for the external_serial field */
    const EXTERNAL_SERIAL = 'Offres.external_serial';

    /** the column name for the internal_serial field */
    const INTERNAL_SERIAL = 'Offres.internal_serial';

    /** the column name for the uid_offre field */
    const UID_OFFRE = 'Offres.uid_offre';

    /** the column name for the offre_selectionnee field */
    const OFFRE_SELECTIONNEE = 'Offres.offre_selectionnee';

    /** the column name for the Observation field */
    const OBSERVATION = 'Offres.Observation';

    /** the column name for the xml_string field */
    const XML_STRING = 'Offres.xml_string';

    /** the column name for the nom_entreprise_inscrit field */
    const NOM_ENTREPRISE_INSCRIT = 'Offres.nom_entreprise_inscrit';

    /** the column name for the nom_inscrit field */
    const NOM_INSCRIT = 'Offres.nom_inscrit';

    /** the column name for the prenom_inscrit field */
    const PRENOM_INSCRIT = 'Offres.prenom_inscrit';

    /** the column name for the adresse_inscrit field */
    const ADRESSE_INSCRIT = 'Offres.adresse_inscrit';

    /** the column name for the adresse2_inscrit field */
    const ADRESSE2_INSCRIT = 'Offres.adresse2_inscrit';

    /** the column name for the telephone_inscrit field */
    const TELEPHONE_INSCRIT = 'Offres.telephone_inscrit';

    /** the column name for the fax_inscrit field */
    const FAX_INSCRIT = 'Offres.fax_inscrit';

    /** the column name for the code_postal_inscrit field */
    const CODE_POSTAL_INSCRIT = 'Offres.code_postal_inscrit';

    /** the column name for the ville_inscrit field */
    const VILLE_INSCRIT = 'Offres.ville_inscrit';

    /** the column name for the pays_inscrit field */
    const PAYS_INSCRIT = 'Offres.pays_inscrit';

    /** the column name for the acronyme_pays field */
    const ACRONYME_PAYS = 'Offres.acronyme_pays';

    /** the column name for the siret_entreprise field */
    const SIRET_ENTREPRISE = 'Offres.siret_entreprise';

    /** the column name for the identifiant_national field */
    const IDENTIFIANT_NATIONAL = 'Offres.identifiant_national';

    /** the column name for the email_inscrit field */
    const EMAIL_INSCRIT = 'Offres.email_inscrit';

    /** the column name for the siret_inscrit field */
    const SIRET_INSCRIT = 'Offres.siret_inscrit';

    /** the column name for the nom_entreprise field */
    const NOM_ENTREPRISE = 'Offres.nom_entreprise';

    /** the column name for the horodatage_annulation field */
    const HORODATAGE_ANNULATION = 'Offres.horodatage_annulation';

    /** the column name for the date_annulation field */
    const DATE_ANNULATION = 'Offres.date_annulation';

    /** the column name for the signature_annulation field */
    const SIGNATURE_ANNULATION = 'Offres.signature_annulation';

    /** the column name for the depot_annule field */
    const DEPOT_ANNULE = 'Offres.depot_annule';

    /** the column name for the string_annulation field */
    const STRING_ANNULATION = 'Offres.string_annulation';

    /** the column name for the verification_certificat_annulation field */
    const VERIFICATION_CERTIFICAT_ANNULATION = 'Offres.verification_certificat_annulation';

    /** the column name for the offre_variante field */
    const OFFRE_VARIANTE = 'Offres.offre_variante';

    /** the column name for the reponse_pas_a_pas field */
    const REPONSE_PAS_A_PAS = 'Offres.reponse_pas_a_pas';

    /** the column name for the numero_reponse field */
    const NUMERO_REPONSE = 'Offres.numero_reponse';

    /** the column name for the statut_offres field */
    const STATUT_OFFRES = 'Offres.statut_offres';

    /** the column name for the date_heure_ouverture field */
    const DATE_HEURE_OUVERTURE = 'Offres.date_heure_ouverture';

    /** the column name for the agentid_ouverture field */
    const AGENTID_OUVERTURE = 'Offres.agentid_ouverture';

    /** the column name for the agentid_ouverture2 field */
    const AGENTID_OUVERTURE2 = 'Offres.agentid_ouverture2';

    /** the column name for the date_heure_ouverture_agent2 field */
    const DATE_HEURE_OUVERTURE_AGENT2 = 'Offres.date_heure_ouverture_agent2';

    /** the column name for the cryptage_reponse field */
    const CRYPTAGE_REPONSE = 'Offres.cryptage_reponse';

    /** the column name for the nom_agent_ouverture field */
    const NOM_AGENT_OUVERTURE = 'Offres.nom_agent_ouverture';

    /** the column name for the agent_telechargement_offre field */
    const AGENT_TELECHARGEMENT_OFFRE = 'Offres.agent_telechargement_offre';

    /** the column name for the date_telechargement_offre field */
    const DATE_TELECHARGEMENT_OFFRE = 'Offres.date_telechargement_offre';

    /** the column name for the repertoire_telechargement_offre field */
    const REPERTOIRE_TELECHARGEMENT_OFFRE = 'Offres.repertoire_telechargement_offre';

    /** the column name for the ifu_entreprise field */
    const IFU_ENTREPRISE = 'Offres.ifu_entreprise';

    /** the column name for the type_entreprise field */
    const TYPE_ENTREPRISE = 'Offres.type_entreprise';

    /** The enumerated values for the depot_annule field */
    const DEPOT_ANNULE_0 = '0';
    const DEPOT_ANNULE_1 = '1';

    /** The enumerated values for the offre_variante field */
    const OFFRE_VARIANTE_0 = '0';
    const OFFRE_VARIANTE_1 = '1';

    /** The enumerated values for the reponse_pas_a_pas field */
    const REPONSE_PAS_A_PAS_0 = '0';
    const REPONSE_PAS_A_PAS_1 = '1';

    /** The enumerated values for the type_entreprise field */
    const TYPE_ENTREPRISE_0 = '0';
    const TYPE_ENTREPRISE_1 = '1';
    const TYPE_ENTREPRISE_2 = '2';
    const TYPE_ENTREPRISE_3 = '3';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonOffres objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonOffres[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonOffresPeer::$fieldNames[CommonOffresPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'ConsultationRef', 'EntrepriseId', 'InscritId', 'Signatureenvxml', 'Horodatage', 'Mailsignataire', 'Untrusteddate', 'Untrustedserial', 'EnvoiComplet', 'DateDepotDiffere', 'HorodatageEnvoiDiffere', 'SignatureenvxmlEnvoiDiffere', 'ExternalSerial', 'InternalSerial', 'UidOffre', 'OffreSelectionnee', 'Observation', 'XmlString', 'NomEntrepriseInscrit', 'NomInscrit', 'PrenomInscrit', 'AdresseInscrit', 'Adresse2Inscrit', 'TelephoneInscrit', 'FaxInscrit', 'CodePostalInscrit', 'VilleInscrit', 'PaysInscrit', 'AcronymePays', 'SiretEntreprise', 'IdentifiantNational', 'EmailInscrit', 'SiretInscrit', 'NomEntreprise', 'HorodatageAnnulation', 'DateAnnulation', 'SignatureAnnulation', 'DepotAnnule', 'StringAnnulation', 'VerificationCertificatAnnulation', 'OffreVariante', 'ReponsePasAPas', 'NumeroReponse', 'StatutOffres', 'DateHeureOuverture', 'AgentidOuverture', 'AgentidOuverture2', 'DateHeureOuvertureAgent2', 'CryptageReponse', 'NomAgentOuverture', 'AgentTelechargementOffre', 'DateTelechargementOffre', 'RepertoireTelechargementOffre', 'IfuEntreprise', 'TypeEntreprise', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'consultationRef', 'entrepriseId', 'inscritId', 'signatureenvxml', 'horodatage', 'mailsignataire', 'untrusteddate', 'untrustedserial', 'envoiComplet', 'dateDepotDiffere', 'horodatageEnvoiDiffere', 'signatureenvxmlEnvoiDiffere', 'externalSerial', 'internalSerial', 'uidOffre', 'offreSelectionnee', 'observation', 'xmlString', 'nomEntrepriseInscrit', 'nomInscrit', 'prenomInscrit', 'adresseInscrit', 'adresse2Inscrit', 'telephoneInscrit', 'faxInscrit', 'codePostalInscrit', 'villeInscrit', 'paysInscrit', 'acronymePays', 'siretEntreprise', 'identifiantNational', 'emailInscrit', 'siretInscrit', 'nomEntreprise', 'horodatageAnnulation', 'dateAnnulation', 'signatureAnnulation', 'depotAnnule', 'stringAnnulation', 'verificationCertificatAnnulation', 'offreVariante', 'reponsePasAPas', 'numeroReponse', 'statutOffres', 'dateHeureOuverture', 'agentidOuverture', 'agentidOuverture2', 'dateHeureOuvertureAgent2', 'cryptageReponse', 'nomAgentOuverture', 'agentTelechargementOffre', 'dateTelechargementOffre', 'repertoireTelechargementOffre', 'ifuEntreprise', 'typeEntreprise', ),
        BasePeer::TYPE_COLNAME => array (CommonOffresPeer::ID, CommonOffresPeer::ORGANISME, CommonOffresPeer::CONSULTATION_REF, CommonOffresPeer::ENTREPRISE_ID, CommonOffresPeer::INSCRIT_ID, CommonOffresPeer::SIGNATUREENVXML, CommonOffresPeer::HORODATAGE, CommonOffresPeer::MAILSIGNATAIRE, CommonOffresPeer::UNTRUSTEDDATE, CommonOffresPeer::UNTRUSTEDSERIAL, CommonOffresPeer::ENVOI_COMPLET, CommonOffresPeer::DATE_DEPOT_DIFFERE, CommonOffresPeer::HORODATAGE_ENVOI_DIFFERE, CommonOffresPeer::SIGNATUREENVXML_ENVOI_DIFFERE, CommonOffresPeer::EXTERNAL_SERIAL, CommonOffresPeer::INTERNAL_SERIAL, CommonOffresPeer::UID_OFFRE, CommonOffresPeer::OFFRE_SELECTIONNEE, CommonOffresPeer::OBSERVATION, CommonOffresPeer::XML_STRING, CommonOffresPeer::NOM_ENTREPRISE_INSCRIT, CommonOffresPeer::NOM_INSCRIT, CommonOffresPeer::PRENOM_INSCRIT, CommonOffresPeer::ADRESSE_INSCRIT, CommonOffresPeer::ADRESSE2_INSCRIT, CommonOffresPeer::TELEPHONE_INSCRIT, CommonOffresPeer::FAX_INSCRIT, CommonOffresPeer::CODE_POSTAL_INSCRIT, CommonOffresPeer::VILLE_INSCRIT, CommonOffresPeer::PAYS_INSCRIT, CommonOffresPeer::ACRONYME_PAYS, CommonOffresPeer::SIRET_ENTREPRISE, CommonOffresPeer::IDENTIFIANT_NATIONAL, CommonOffresPeer::EMAIL_INSCRIT, CommonOffresPeer::SIRET_INSCRIT, CommonOffresPeer::NOM_ENTREPRISE, CommonOffresPeer::HORODATAGE_ANNULATION, CommonOffresPeer::DATE_ANNULATION, CommonOffresPeer::SIGNATURE_ANNULATION, CommonOffresPeer::DEPOT_ANNULE, CommonOffresPeer::STRING_ANNULATION, CommonOffresPeer::VERIFICATION_CERTIFICAT_ANNULATION, CommonOffresPeer::OFFRE_VARIANTE, CommonOffresPeer::REPONSE_PAS_A_PAS, CommonOffresPeer::NUMERO_REPONSE, CommonOffresPeer::STATUT_OFFRES, CommonOffresPeer::DATE_HEURE_OUVERTURE, CommonOffresPeer::AGENTID_OUVERTURE, CommonOffresPeer::AGENTID_OUVERTURE2, CommonOffresPeer::DATE_HEURE_OUVERTURE_AGENT2, CommonOffresPeer::CRYPTAGE_REPONSE, CommonOffresPeer::NOM_AGENT_OUVERTURE, CommonOffresPeer::AGENT_TELECHARGEMENT_OFFRE, CommonOffresPeer::DATE_TELECHARGEMENT_OFFRE, CommonOffresPeer::REPERTOIRE_TELECHARGEMENT_OFFRE, CommonOffresPeer::IFU_ENTREPRISE, CommonOffresPeer::TYPE_ENTREPRISE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'CONSULTATION_REF', 'ENTREPRISE_ID', 'INSCRIT_ID', 'SIGNATUREENVXML', 'HORODATAGE', 'MAILSIGNATAIRE', 'UNTRUSTEDDATE', 'UNTRUSTEDSERIAL', 'ENVOI_COMPLET', 'DATE_DEPOT_DIFFERE', 'HORODATAGE_ENVOI_DIFFERE', 'SIGNATUREENVXML_ENVOI_DIFFERE', 'EXTERNAL_SERIAL', 'INTERNAL_SERIAL', 'UID_OFFRE', 'OFFRE_SELECTIONNEE', 'OBSERVATION', 'XML_STRING', 'NOM_ENTREPRISE_INSCRIT', 'NOM_INSCRIT', 'PRENOM_INSCRIT', 'ADRESSE_INSCRIT', 'ADRESSE2_INSCRIT', 'TELEPHONE_INSCRIT', 'FAX_INSCRIT', 'CODE_POSTAL_INSCRIT', 'VILLE_INSCRIT', 'PAYS_INSCRIT', 'ACRONYME_PAYS', 'SIRET_ENTREPRISE', 'IDENTIFIANT_NATIONAL', 'EMAIL_INSCRIT', 'SIRET_INSCRIT', 'NOM_ENTREPRISE', 'HORODATAGE_ANNULATION', 'DATE_ANNULATION', 'SIGNATURE_ANNULATION', 'DEPOT_ANNULE', 'STRING_ANNULATION', 'VERIFICATION_CERTIFICAT_ANNULATION', 'OFFRE_VARIANTE', 'REPONSE_PAS_A_PAS', 'NUMERO_REPONSE', 'STATUT_OFFRES', 'DATE_HEURE_OUVERTURE', 'AGENTID_OUVERTURE', 'AGENTID_OUVERTURE2', 'DATE_HEURE_OUVERTURE_AGENT2', 'CRYPTAGE_REPONSE', 'NOM_AGENT_OUVERTURE', 'AGENT_TELECHARGEMENT_OFFRE', 'DATE_TELECHARGEMENT_OFFRE', 'REPERTOIRE_TELECHARGEMENT_OFFRE', 'IFU_ENTREPRISE', 'TYPE_ENTREPRISE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'consultation_ref', 'entreprise_id', 'inscrit_id', 'signatureenvxml', 'horodatage', 'mailsignataire', 'untrusteddate', 'untrustedserial', 'envoi_complet', 'date_depot_differe', 'horodatage_envoi_differe', 'signatureenvxml_envoi_differe', 'external_serial', 'internal_serial', 'uid_offre', 'offre_selectionnee', 'Observation', 'xml_string', 'nom_entreprise_inscrit', 'nom_inscrit', 'prenom_inscrit', 'adresse_inscrit', 'adresse2_inscrit', 'telephone_inscrit', 'fax_inscrit', 'code_postal_inscrit', 'ville_inscrit', 'pays_inscrit', 'acronyme_pays', 'siret_entreprise', 'identifiant_national', 'email_inscrit', 'siret_inscrit', 'nom_entreprise', 'horodatage_annulation', 'date_annulation', 'signature_annulation', 'depot_annule', 'string_annulation', 'verification_certificat_annulation', 'offre_variante', 'reponse_pas_a_pas', 'numero_reponse', 'statut_offres', 'date_heure_ouverture', 'agentid_ouverture', 'agentid_ouverture2', 'date_heure_ouverture_agent2', 'cryptage_reponse', 'nom_agent_ouverture', 'agent_telechargement_offre', 'date_telechargement_offre', 'repertoire_telechargement_offre', 'ifu_entreprise', 'type_entreprise', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonOffresPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'ConsultationRef' => 2, 'EntrepriseId' => 3, 'InscritId' => 4, 'Signatureenvxml' => 5, 'Horodatage' => 6, 'Mailsignataire' => 7, 'Untrusteddate' => 8, 'Untrustedserial' => 9, 'EnvoiComplet' => 10, 'DateDepotDiffere' => 11, 'HorodatageEnvoiDiffere' => 12, 'SignatureenvxmlEnvoiDiffere' => 13, 'ExternalSerial' => 14, 'InternalSerial' => 15, 'UidOffre' => 16, 'OffreSelectionnee' => 17, 'Observation' => 18, 'XmlString' => 19, 'NomEntrepriseInscrit' => 20, 'NomInscrit' => 21, 'PrenomInscrit' => 22, 'AdresseInscrit' => 23, 'Adresse2Inscrit' => 24, 'TelephoneInscrit' => 25, 'FaxInscrit' => 26, 'CodePostalInscrit' => 27, 'VilleInscrit' => 28, 'PaysInscrit' => 29, 'AcronymePays' => 30, 'SiretEntreprise' => 31, 'IdentifiantNational' => 32, 'EmailInscrit' => 33, 'SiretInscrit' => 34, 'NomEntreprise' => 35, 'HorodatageAnnulation' => 36, 'DateAnnulation' => 37, 'SignatureAnnulation' => 38, 'DepotAnnule' => 39, 'StringAnnulation' => 40, 'VerificationCertificatAnnulation' => 41, 'OffreVariante' => 42, 'ReponsePasAPas' => 43, 'NumeroReponse' => 44, 'StatutOffres' => 45, 'DateHeureOuverture' => 46, 'AgentidOuverture' => 47, 'AgentidOuverture2' => 48, 'DateHeureOuvertureAgent2' => 49, 'CryptageReponse' => 50, 'NomAgentOuverture' => 51, 'AgentTelechargementOffre' => 52, 'DateTelechargementOffre' => 53, 'RepertoireTelechargementOffre' => 54, 'IfuEntreprise' => 55, 'TypeEntreprise' => 56, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'consultationRef' => 2, 'entrepriseId' => 3, 'inscritId' => 4, 'signatureenvxml' => 5, 'horodatage' => 6, 'mailsignataire' => 7, 'untrusteddate' => 8, 'untrustedserial' => 9, 'envoiComplet' => 10, 'dateDepotDiffere' => 11, 'horodatageEnvoiDiffere' => 12, 'signatureenvxmlEnvoiDiffere' => 13, 'externalSerial' => 14, 'internalSerial' => 15, 'uidOffre' => 16, 'offreSelectionnee' => 17, 'observation' => 18, 'xmlString' => 19, 'nomEntrepriseInscrit' => 20, 'nomInscrit' => 21, 'prenomInscrit' => 22, 'adresseInscrit' => 23, 'adresse2Inscrit' => 24, 'telephoneInscrit' => 25, 'faxInscrit' => 26, 'codePostalInscrit' => 27, 'villeInscrit' => 28, 'paysInscrit' => 29, 'acronymePays' => 30, 'siretEntreprise' => 31, 'identifiantNational' => 32, 'emailInscrit' => 33, 'siretInscrit' => 34, 'nomEntreprise' => 35, 'horodatageAnnulation' => 36, 'dateAnnulation' => 37, 'signatureAnnulation' => 38, 'depotAnnule' => 39, 'stringAnnulation' => 40, 'verificationCertificatAnnulation' => 41, 'offreVariante' => 42, 'reponsePasAPas' => 43, 'numeroReponse' => 44, 'statutOffres' => 45, 'dateHeureOuverture' => 46, 'agentidOuverture' => 47, 'agentidOuverture2' => 48, 'dateHeureOuvertureAgent2' => 49, 'cryptageReponse' => 50, 'nomAgentOuverture' => 51, 'agentTelechargementOffre' => 52, 'dateTelechargementOffre' => 53, 'repertoireTelechargementOffre' => 54, 'ifuEntreprise' => 55, 'typeEntreprise' => 56, ),
        BasePeer::TYPE_COLNAME => array (CommonOffresPeer::ID => 0, CommonOffresPeer::ORGANISME => 1, CommonOffresPeer::CONSULTATION_REF => 2, CommonOffresPeer::ENTREPRISE_ID => 3, CommonOffresPeer::INSCRIT_ID => 4, CommonOffresPeer::SIGNATUREENVXML => 5, CommonOffresPeer::HORODATAGE => 6, CommonOffresPeer::MAILSIGNATAIRE => 7, CommonOffresPeer::UNTRUSTEDDATE => 8, CommonOffresPeer::UNTRUSTEDSERIAL => 9, CommonOffresPeer::ENVOI_COMPLET => 10, CommonOffresPeer::DATE_DEPOT_DIFFERE => 11, CommonOffresPeer::HORODATAGE_ENVOI_DIFFERE => 12, CommonOffresPeer::SIGNATUREENVXML_ENVOI_DIFFERE => 13, CommonOffresPeer::EXTERNAL_SERIAL => 14, CommonOffresPeer::INTERNAL_SERIAL => 15, CommonOffresPeer::UID_OFFRE => 16, CommonOffresPeer::OFFRE_SELECTIONNEE => 17, CommonOffresPeer::OBSERVATION => 18, CommonOffresPeer::XML_STRING => 19, CommonOffresPeer::NOM_ENTREPRISE_INSCRIT => 20, CommonOffresPeer::NOM_INSCRIT => 21, CommonOffresPeer::PRENOM_INSCRIT => 22, CommonOffresPeer::ADRESSE_INSCRIT => 23, CommonOffresPeer::ADRESSE2_INSCRIT => 24, CommonOffresPeer::TELEPHONE_INSCRIT => 25, CommonOffresPeer::FAX_INSCRIT => 26, CommonOffresPeer::CODE_POSTAL_INSCRIT => 27, CommonOffresPeer::VILLE_INSCRIT => 28, CommonOffresPeer::PAYS_INSCRIT => 29, CommonOffresPeer::ACRONYME_PAYS => 30, CommonOffresPeer::SIRET_ENTREPRISE => 31, CommonOffresPeer::IDENTIFIANT_NATIONAL => 32, CommonOffresPeer::EMAIL_INSCRIT => 33, CommonOffresPeer::SIRET_INSCRIT => 34, CommonOffresPeer::NOM_ENTREPRISE => 35, CommonOffresPeer::HORODATAGE_ANNULATION => 36, CommonOffresPeer::DATE_ANNULATION => 37, CommonOffresPeer::SIGNATURE_ANNULATION => 38, CommonOffresPeer::DEPOT_ANNULE => 39, CommonOffresPeer::STRING_ANNULATION => 40, CommonOffresPeer::VERIFICATION_CERTIFICAT_ANNULATION => 41, CommonOffresPeer::OFFRE_VARIANTE => 42, CommonOffresPeer::REPONSE_PAS_A_PAS => 43, CommonOffresPeer::NUMERO_REPONSE => 44, CommonOffresPeer::STATUT_OFFRES => 45, CommonOffresPeer::DATE_HEURE_OUVERTURE => 46, CommonOffresPeer::AGENTID_OUVERTURE => 47, CommonOffresPeer::AGENTID_OUVERTURE2 => 48, CommonOffresPeer::DATE_HEURE_OUVERTURE_AGENT2 => 49, CommonOffresPeer::CRYPTAGE_REPONSE => 50, CommonOffresPeer::NOM_AGENT_OUVERTURE => 51, CommonOffresPeer::AGENT_TELECHARGEMENT_OFFRE => 52, CommonOffresPeer::DATE_TELECHARGEMENT_OFFRE => 53, CommonOffresPeer::REPERTOIRE_TELECHARGEMENT_OFFRE => 54, CommonOffresPeer::IFU_ENTREPRISE => 55, CommonOffresPeer::TYPE_ENTREPRISE => 56, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'CONSULTATION_REF' => 2, 'ENTREPRISE_ID' => 3, 'INSCRIT_ID' => 4, 'SIGNATUREENVXML' => 5, 'HORODATAGE' => 6, 'MAILSIGNATAIRE' => 7, 'UNTRUSTEDDATE' => 8, 'UNTRUSTEDSERIAL' => 9, 'ENVOI_COMPLET' => 10, 'DATE_DEPOT_DIFFERE' => 11, 'HORODATAGE_ENVOI_DIFFERE' => 12, 'SIGNATUREENVXML_ENVOI_DIFFERE' => 13, 'EXTERNAL_SERIAL' => 14, 'INTERNAL_SERIAL' => 15, 'UID_OFFRE' => 16, 'OFFRE_SELECTIONNEE' => 17, 'OBSERVATION' => 18, 'XML_STRING' => 19, 'NOM_ENTREPRISE_INSCRIT' => 20, 'NOM_INSCRIT' => 21, 'PRENOM_INSCRIT' => 22, 'ADRESSE_INSCRIT' => 23, 'ADRESSE2_INSCRIT' => 24, 'TELEPHONE_INSCRIT' => 25, 'FAX_INSCRIT' => 26, 'CODE_POSTAL_INSCRIT' => 27, 'VILLE_INSCRIT' => 28, 'PAYS_INSCRIT' => 29, 'ACRONYME_PAYS' => 30, 'SIRET_ENTREPRISE' => 31, 'IDENTIFIANT_NATIONAL' => 32, 'EMAIL_INSCRIT' => 33, 'SIRET_INSCRIT' => 34, 'NOM_ENTREPRISE' => 35, 'HORODATAGE_ANNULATION' => 36, 'DATE_ANNULATION' => 37, 'SIGNATURE_ANNULATION' => 38, 'DEPOT_ANNULE' => 39, 'STRING_ANNULATION' => 40, 'VERIFICATION_CERTIFICAT_ANNULATION' => 41, 'OFFRE_VARIANTE' => 42, 'REPONSE_PAS_A_PAS' => 43, 'NUMERO_REPONSE' => 44, 'STATUT_OFFRES' => 45, 'DATE_HEURE_OUVERTURE' => 46, 'AGENTID_OUVERTURE' => 47, 'AGENTID_OUVERTURE2' => 48, 'DATE_HEURE_OUVERTURE_AGENT2' => 49, 'CRYPTAGE_REPONSE' => 50, 'NOM_AGENT_OUVERTURE' => 51, 'AGENT_TELECHARGEMENT_OFFRE' => 52, 'DATE_TELECHARGEMENT_OFFRE' => 53, 'REPERTOIRE_TELECHARGEMENT_OFFRE' => 54, 'IFU_ENTREPRISE' => 55, 'TYPE_ENTREPRISE' => 56, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'consultation_ref' => 2, 'entreprise_id' => 3, 'inscrit_id' => 4, 'signatureenvxml' => 5, 'horodatage' => 6, 'mailsignataire' => 7, 'untrusteddate' => 8, 'untrustedserial' => 9, 'envoi_complet' => 10, 'date_depot_differe' => 11, 'horodatage_envoi_differe' => 12, 'signatureenvxml_envoi_differe' => 13, 'external_serial' => 14, 'internal_serial' => 15, 'uid_offre' => 16, 'offre_selectionnee' => 17, 'Observation' => 18, 'xml_string' => 19, 'nom_entreprise_inscrit' => 20, 'nom_inscrit' => 21, 'prenom_inscrit' => 22, 'adresse_inscrit' => 23, 'adresse2_inscrit' => 24, 'telephone_inscrit' => 25, 'fax_inscrit' => 26, 'code_postal_inscrit' => 27, 'ville_inscrit' => 28, 'pays_inscrit' => 29, 'acronyme_pays' => 30, 'siret_entreprise' => 31, 'identifiant_national' => 32, 'email_inscrit' => 33, 'siret_inscrit' => 34, 'nom_entreprise' => 35, 'horodatage_annulation' => 36, 'date_annulation' => 37, 'signature_annulation' => 38, 'depot_annule' => 39, 'string_annulation' => 40, 'verification_certificat_annulation' => 41, 'offre_variante' => 42, 'reponse_pas_a_pas' => 43, 'numero_reponse' => 44, 'statut_offres' => 45, 'date_heure_ouverture' => 46, 'agentid_ouverture' => 47, 'agentid_ouverture2' => 48, 'date_heure_ouverture_agent2' => 49, 'cryptage_reponse' => 50, 'nom_agent_ouverture' => 51, 'agent_telechargement_offre' => 52, 'date_telechargement_offre' => 53, 'repertoire_telechargement_offre' => 54, 'ifu_entreprise' => 55, 'type_entreprise' => 56, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonOffresPeer::DEPOT_ANNULE => array(
            CommonOffresPeer::DEPOT_ANNULE_0,
            CommonOffresPeer::DEPOT_ANNULE_1,
        ),
        CommonOffresPeer::OFFRE_VARIANTE => array(
            CommonOffresPeer::OFFRE_VARIANTE_0,
            CommonOffresPeer::OFFRE_VARIANTE_1,
        ),
        CommonOffresPeer::REPONSE_PAS_A_PAS => array(
            CommonOffresPeer::REPONSE_PAS_A_PAS_0,
            CommonOffresPeer::REPONSE_PAS_A_PAS_1,
        ),
        CommonOffresPeer::TYPE_ENTREPRISE => array(
            CommonOffresPeer::TYPE_ENTREPRISE_0,
            CommonOffresPeer::TYPE_ENTREPRISE_1,
            CommonOffresPeer::TYPE_ENTREPRISE_2,
            CommonOffresPeer::TYPE_ENTREPRISE_3,
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
        $toNames = CommonOffresPeer::getFieldNames($toType);
        $key = isset(CommonOffresPeer::$fieldKeys[$fromType][$name]) ? CommonOffresPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonOffresPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonOffresPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonOffresPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonOffresPeer::$enumValueSets;
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
        $valueSets = CommonOffresPeer::getValueSets();

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
        $values = CommonOffresPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonOffresPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonOffresPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonOffresPeer::ID);
            $criteria->addSelectColumn(CommonOffresPeer::ORGANISME);
            $criteria->addSelectColumn(CommonOffresPeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonOffresPeer::ENTREPRISE_ID);
            $criteria->addSelectColumn(CommonOffresPeer::INSCRIT_ID);
            $criteria->addSelectColumn(CommonOffresPeer::SIGNATUREENVXML);
            $criteria->addSelectColumn(CommonOffresPeer::HORODATAGE);
            $criteria->addSelectColumn(CommonOffresPeer::MAILSIGNATAIRE);
            $criteria->addSelectColumn(CommonOffresPeer::UNTRUSTEDDATE);
            $criteria->addSelectColumn(CommonOffresPeer::UNTRUSTEDSERIAL);
            $criteria->addSelectColumn(CommonOffresPeer::ENVOI_COMPLET);
            $criteria->addSelectColumn(CommonOffresPeer::DATE_DEPOT_DIFFERE);
            $criteria->addSelectColumn(CommonOffresPeer::HORODATAGE_ENVOI_DIFFERE);
            $criteria->addSelectColumn(CommonOffresPeer::SIGNATUREENVXML_ENVOI_DIFFERE);
            $criteria->addSelectColumn(CommonOffresPeer::EXTERNAL_SERIAL);
            $criteria->addSelectColumn(CommonOffresPeer::INTERNAL_SERIAL);
            $criteria->addSelectColumn(CommonOffresPeer::UID_OFFRE);
            $criteria->addSelectColumn(CommonOffresPeer::OFFRE_SELECTIONNEE);
            $criteria->addSelectColumn(CommonOffresPeer::OBSERVATION);
            $criteria->addSelectColumn(CommonOffresPeer::XML_STRING);
            $criteria->addSelectColumn(CommonOffresPeer::NOM_ENTREPRISE_INSCRIT);
            $criteria->addSelectColumn(CommonOffresPeer::NOM_INSCRIT);
            $criteria->addSelectColumn(CommonOffresPeer::PRENOM_INSCRIT);
            $criteria->addSelectColumn(CommonOffresPeer::ADRESSE_INSCRIT);
            $criteria->addSelectColumn(CommonOffresPeer::ADRESSE2_INSCRIT);
            $criteria->addSelectColumn(CommonOffresPeer::TELEPHONE_INSCRIT);
            $criteria->addSelectColumn(CommonOffresPeer::FAX_INSCRIT);
            $criteria->addSelectColumn(CommonOffresPeer::CODE_POSTAL_INSCRIT);
            $criteria->addSelectColumn(CommonOffresPeer::VILLE_INSCRIT);
            $criteria->addSelectColumn(CommonOffresPeer::PAYS_INSCRIT);
            $criteria->addSelectColumn(CommonOffresPeer::ACRONYME_PAYS);
            $criteria->addSelectColumn(CommonOffresPeer::SIRET_ENTREPRISE);
            $criteria->addSelectColumn(CommonOffresPeer::IDENTIFIANT_NATIONAL);
            $criteria->addSelectColumn(CommonOffresPeer::EMAIL_INSCRIT);
            $criteria->addSelectColumn(CommonOffresPeer::SIRET_INSCRIT);
            $criteria->addSelectColumn(CommonOffresPeer::NOM_ENTREPRISE);
            $criteria->addSelectColumn(CommonOffresPeer::HORODATAGE_ANNULATION);
            $criteria->addSelectColumn(CommonOffresPeer::DATE_ANNULATION);
            $criteria->addSelectColumn(CommonOffresPeer::SIGNATURE_ANNULATION);
            $criteria->addSelectColumn(CommonOffresPeer::DEPOT_ANNULE);
            $criteria->addSelectColumn(CommonOffresPeer::STRING_ANNULATION);
            $criteria->addSelectColumn(CommonOffresPeer::VERIFICATION_CERTIFICAT_ANNULATION);
            $criteria->addSelectColumn(CommonOffresPeer::OFFRE_VARIANTE);
            $criteria->addSelectColumn(CommonOffresPeer::REPONSE_PAS_A_PAS);
            $criteria->addSelectColumn(CommonOffresPeer::NUMERO_REPONSE);
            $criteria->addSelectColumn(CommonOffresPeer::STATUT_OFFRES);
            $criteria->addSelectColumn(CommonOffresPeer::DATE_HEURE_OUVERTURE);
            $criteria->addSelectColumn(CommonOffresPeer::AGENTID_OUVERTURE);
            $criteria->addSelectColumn(CommonOffresPeer::AGENTID_OUVERTURE2);
            $criteria->addSelectColumn(CommonOffresPeer::DATE_HEURE_OUVERTURE_AGENT2);
            $criteria->addSelectColumn(CommonOffresPeer::CRYPTAGE_REPONSE);
            $criteria->addSelectColumn(CommonOffresPeer::NOM_AGENT_OUVERTURE);
            $criteria->addSelectColumn(CommonOffresPeer::AGENT_TELECHARGEMENT_OFFRE);
            $criteria->addSelectColumn(CommonOffresPeer::DATE_TELECHARGEMENT_OFFRE);
            $criteria->addSelectColumn(CommonOffresPeer::REPERTOIRE_TELECHARGEMENT_OFFRE);
            $criteria->addSelectColumn(CommonOffresPeer::IFU_ENTREPRISE);
            $criteria->addSelectColumn(CommonOffresPeer::TYPE_ENTREPRISE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.entreprise_id');
            $criteria->addSelectColumn($alias . '.inscrit_id');
            $criteria->addSelectColumn($alias . '.signatureenvxml');
            $criteria->addSelectColumn($alias . '.horodatage');
            $criteria->addSelectColumn($alias . '.mailsignataire');
            $criteria->addSelectColumn($alias . '.untrusteddate');
            $criteria->addSelectColumn($alias . '.untrustedserial');
            $criteria->addSelectColumn($alias . '.envoi_complet');
            $criteria->addSelectColumn($alias . '.date_depot_differe');
            $criteria->addSelectColumn($alias . '.horodatage_envoi_differe');
            $criteria->addSelectColumn($alias . '.signatureenvxml_envoi_differe');
            $criteria->addSelectColumn($alias . '.external_serial');
            $criteria->addSelectColumn($alias . '.internal_serial');
            $criteria->addSelectColumn($alias . '.uid_offre');
            $criteria->addSelectColumn($alias . '.offre_selectionnee');
            $criteria->addSelectColumn($alias . '.Observation');
            $criteria->addSelectColumn($alias . '.xml_string');
            $criteria->addSelectColumn($alias . '.nom_entreprise_inscrit');
            $criteria->addSelectColumn($alias . '.nom_inscrit');
            $criteria->addSelectColumn($alias . '.prenom_inscrit');
            $criteria->addSelectColumn($alias . '.adresse_inscrit');
            $criteria->addSelectColumn($alias . '.adresse2_inscrit');
            $criteria->addSelectColumn($alias . '.telephone_inscrit');
            $criteria->addSelectColumn($alias . '.fax_inscrit');
            $criteria->addSelectColumn($alias . '.code_postal_inscrit');
            $criteria->addSelectColumn($alias . '.ville_inscrit');
            $criteria->addSelectColumn($alias . '.pays_inscrit');
            $criteria->addSelectColumn($alias . '.acronyme_pays');
            $criteria->addSelectColumn($alias . '.siret_entreprise');
            $criteria->addSelectColumn($alias . '.identifiant_national');
            $criteria->addSelectColumn($alias . '.email_inscrit');
            $criteria->addSelectColumn($alias . '.siret_inscrit');
            $criteria->addSelectColumn($alias . '.nom_entreprise');
            $criteria->addSelectColumn($alias . '.horodatage_annulation');
            $criteria->addSelectColumn($alias . '.date_annulation');
            $criteria->addSelectColumn($alias . '.signature_annulation');
            $criteria->addSelectColumn($alias . '.depot_annule');
            $criteria->addSelectColumn($alias . '.string_annulation');
            $criteria->addSelectColumn($alias . '.verification_certificat_annulation');
            $criteria->addSelectColumn($alias . '.offre_variante');
            $criteria->addSelectColumn($alias . '.reponse_pas_a_pas');
            $criteria->addSelectColumn($alias . '.numero_reponse');
            $criteria->addSelectColumn($alias . '.statut_offres');
            $criteria->addSelectColumn($alias . '.date_heure_ouverture');
            $criteria->addSelectColumn($alias . '.agentid_ouverture');
            $criteria->addSelectColumn($alias . '.agentid_ouverture2');
            $criteria->addSelectColumn($alias . '.date_heure_ouverture_agent2');
            $criteria->addSelectColumn($alias . '.cryptage_reponse');
            $criteria->addSelectColumn($alias . '.nom_agent_ouverture');
            $criteria->addSelectColumn($alias . '.agent_telechargement_offre');
            $criteria->addSelectColumn($alias . '.date_telechargement_offre');
            $criteria->addSelectColumn($alias . '.repertoire_telechargement_offre');
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
        $criteria->setPrimaryTableName(CommonOffresPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonOffresPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonOffresPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonOffresPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonOffres
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonOffresPeer::doSelect($critcopy, $con);
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
        return CommonOffresPeer::populateObjects(CommonOffresPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonOffresPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonOffresPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonOffresPeer::DATABASE_NAME);

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
     * @param      CommonOffres $obj A CommonOffres object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonOffresPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonOffres object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonOffres) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonOffres object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonOffresPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonOffres Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonOffresPeer::$instances[$key])) {
                return CommonOffresPeer::$instances[$key];
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
        foreach (CommonOffresPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonOffresPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Offres
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
        $cls = CommonOffresPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonOffresPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonOffresPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonOffresPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonOffres object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonOffresPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonOffresPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonOffresPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonOffresPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonOffresPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(CommonOffresPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonOffresPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonOffresPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonOffresPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonOffresPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonOffresPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
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
     * Selects a collection of CommonOffres objects pre-filled with their CommonConsultation objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonOffres objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonConsultation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonOffresPeer::DATABASE_NAME);
        }

        CommonOffresPeer::addSelectColumns($criteria);
        $startcol = CommonOffresPeer::NUM_HYDRATE_COLUMNS;
        CommonConsultationPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(CommonOffresPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonOffresPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonOffresPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonOffresPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonOffresPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonOffresPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonOffres) to $obj2 (CommonConsultation)
                $obj2->addCommonOffres($obj1);

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
        $criteria->setPrimaryTableName(CommonOffresPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonOffresPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonOffresPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonOffresPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonOffresPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonOffresPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
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
     * Selects a collection of CommonOffres objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonOffres objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonOffresPeer::DATABASE_NAME);
        }

        CommonOffresPeer::addSelectColumns($criteria);
        $startcol2 = CommonOffresPeer::NUM_HYDRATE_COLUMNS;

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonConsultationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(CommonOffresPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonOffresPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonOffresPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonOffresPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonOffresPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonOffresPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonOffres) to the collection in $obj2 (CommonConsultation)
                $obj2->addCommonOffres($obj1);
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
        return Propel::getDatabaseMap(CommonOffresPeer::DATABASE_NAME)->getTable(CommonOffresPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonOffresPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonOffresPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonOffresTableMap());
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
        return CommonOffresPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonOffres or Criteria object.
     *
     * @param      mixed $values Criteria or CommonOffres object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonOffresPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonOffres object
        }

        if ($criteria->containsKey(CommonOffresPeer::ID) && $criteria->keyContainsValue(CommonOffresPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonOffresPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonOffresPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonOffres or Criteria object.
     *
     * @param      mixed $values Criteria or CommonOffres object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonOffresPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonOffresPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonOffresPeer::ID);
            $value = $criteria->remove(CommonOffresPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonOffresPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonOffresPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonOffresPeer::ORGANISME);
            $value = $criteria->remove(CommonOffresPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonOffresPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonOffresPeer::TABLE_NAME);
            }

        } else { // $values is CommonOffres object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonOffresPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Offres table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonOffresPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonOffresPeer::TABLE_NAME, $con, CommonOffresPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonOffresPeer::clearInstancePool();
            CommonOffresPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonOffres or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonOffres object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonOffresPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonOffresPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonOffres) { // it's a model object
            // invalidate the cache for this single object
            CommonOffresPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonOffresPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonOffresPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonOffresPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonOffresPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonOffresPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonOffresPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonOffres object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonOffres $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonOffresPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonOffresPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonOffresPeer::DATABASE_NAME, CommonOffresPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonOffres
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonOffresPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonOffresPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonOffresPeer::DATABASE_NAME);
        $criteria->add(CommonOffresPeer::ID, $id);
        $criteria->add(CommonOffresPeer::ORGANISME, $organisme);
        $v = CommonOffresPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonOffresPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonOffresPeer::buildTableMap();

