<?php



/**
 * This class defines the structure of the 'HabilitationProfil' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonHabilitationProfilTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonHabilitationProfilTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('HabilitationProfil');
        $this->setPhpName('CommonHabilitationProfil');
        $this->setClassname('CommonHabilitationProfil');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 100, '');
        $this->addColumn('gestion_agent_pole', 'GestionAgentPole', 'CHAR', true, null, '0');
        $this->getColumn('gestion_agent_pole', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_fournisseurs_envois_postaux', 'GestionFournisseursEnvoisPostaux', 'CHAR', true, null, '0');
        $this->getColumn('gestion_fournisseurs_envois_postaux', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_bi_cles', 'GestionBiCles', 'CHAR', true, null, '0');
        $this->getColumn('gestion_bi_cles', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('creer_consultation', 'CreerConsultation', 'CHAR', true, null, '1');
        $this->getColumn('creer_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('modifier_consultation', 'ModifierConsultation', 'CHAR', true, null, '0');
        $this->getColumn('modifier_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('valider_consultation', 'ValiderConsultation', 'CHAR', true, null, '0');
        $this->getColumn('valider_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('publier_consultation', 'PublierConsultation', 'CHAR', true, null, '0');
        $this->getColumn('publier_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('suivre_consultation', 'SuivreConsultation', 'CHAR', true, null, '1');
        $this->getColumn('suivre_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('suivre_consultation_pole', 'SuivreConsultationPole', 'CHAR', true, null, '0');
        $this->getColumn('suivre_consultation_pole', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('supprimer_enveloppe', 'SupprimerEnveloppe', 'CHAR', true, null, '0');
        $this->getColumn('supprimer_enveloppe', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('supprimer_consultation', 'SupprimerConsultation', 'CHAR', true, null, '0');
        $this->getColumn('supprimer_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('depouiller_candidature', 'DepouillerCandidature', 'CHAR', true, null, '1');
        $this->getColumn('depouiller_candidature', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('depouiller_offre', 'DepouillerOffre', 'CHAR', true, null, '1');
        $this->getColumn('depouiller_offre', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('messagerie_securisee', 'MessagerieSecurisee', 'CHAR', true, null, '0');
        $this->getColumn('messagerie_securisee', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('acces_registre_depots_papier', 'AccesRegistreDepotsPapier', 'CHAR', true, null, '0');
        $this->getColumn('acces_registre_depots_papier', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('acces_registre_retraits_papier', 'AccesRegistreRetraitsPapier', 'CHAR', true, null, '0');
        $this->getColumn('acces_registre_retraits_papier', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('acces_registre_questions_papier', 'AccesRegistreQuestionsPapier', 'CHAR', true, null, '0');
        $this->getColumn('acces_registre_questions_papier', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gerer_encheres', 'GererEncheres', 'CHAR', true, null, '0');
        $this->getColumn('gerer_encheres', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('suivre_encheres', 'SuivreEncheres', 'CHAR', true, null, '0');
        $this->getColumn('suivre_encheres', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('suivi_entreprise', 'SuiviEntreprise', 'CHAR', true, null, '0');
        $this->getColumn('suivi_entreprise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('envoi_boamp', 'EnvoiBoamp', 'CHAR', true, null, '0');
        $this->getColumn('envoi_boamp', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('acces_classement_lot', 'AccesClassementLot', 'CHAR', true, null, '0');
        $this->getColumn('acces_classement_lot', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('connecteur_sis', 'ConnecteurSis', 'CHAR', true, null, '0');
        $this->getColumn('connecteur_sis', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('connecteur_marco', 'ConnecteurMarco', 'CHAR', true, null, '0');
        $this->getColumn('connecteur_marco', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('repondre_aux_questions', 'RepondreAuxQuestions', 'CHAR', true, null, '0');
        $this->getColumn('repondre_aux_questions', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('appel_projet_formation', 'AppelProjetFormation', 'CHAR', true, null, '0');
        $this->getColumn('appel_projet_formation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('utiliser_client_CAO', 'UtiliserClientCao', 'CHAR', true, null, '1');
        $this->getColumn('utiliser_client_CAO', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('notification_boamp', 'NotificationBoamp', 'CHAR', true, null, '1');
        $this->getColumn('notification_boamp', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('administrer_compte', 'AdministrerCompte', 'CHAR', true, null, '0');
        $this->getColumn('administrer_compte', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_mapa', 'GestionMapa', 'CHAR', true, null, '0');
        $this->getColumn('gestion_mapa', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_type_validation', 'GestionTypeValidation', 'CHAR', true, null, '0');
        $this->getColumn('gestion_type_validation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('approuver_consultation', 'ApprouverConsultation', 'CHAR', true, null, '0');
        $this->getColumn('approuver_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('administrer_procedure', 'AdministrerProcedure', 'CHAR', true, null, '0');
        $this->getColumn('administrer_procedure', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('restreindre_creation', 'RestreindreCreation', 'CHAR', true, null, '0');
        $this->getColumn('restreindre_creation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('creer_liste_marches', 'CreerListeMarches', 'CHAR', true, null, '0');
        $this->getColumn('creer_liste_marches', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_commissions', 'GestionCommissions', 'CHAR', true, null, '0');
        $this->getColumn('gestion_commissions', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('suivi_seul_consultation', 'SuiviSeulConsultation', 'CHAR', true, null, '0');
        $this->getColumn('suivi_seul_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('attribution_marche', 'AttributionMarche', 'CHAR', true, null, '0');
        $this->getColumn('attribution_marche', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('fiche_recensement', 'FicheRecensement', 'CHAR', true, null, '0');
        $this->getColumn('fiche_recensement', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('declarer_infructueux', 'DeclarerInfructueux', 'CHAR', true, null, '0');
        $this->getColumn('declarer_infructueux', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('declarer_sans_suite', 'DeclarerSansSuite', 'CHAR', true, null, '0');
        $this->getColumn('declarer_sans_suite', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('creer_consultation_transverse', 'CreerConsultationTransverse', 'CHAR', true, null, '0');
        $this->getColumn('creer_consultation_transverse', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ouvrir_candidature_en_ligne', 'OuvrirCandidatureEnLigne', 'CHAR', true, null, '0');
        $this->getColumn('ouvrir_candidature_en_ligne', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ouvrir_candidature_a_distance', 'OuvrirCandidatureADistance', 'CHAR', true, null, '0');
        $this->getColumn('ouvrir_candidature_a_distance', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('refuser_enveloppe', 'RefuserEnveloppe', 'CHAR', true, null, '0');
        $this->getColumn('refuser_enveloppe', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gerer_admissibilite', 'GererAdmissibilite', 'CHAR', true, null, '0');
        $this->getColumn('gerer_admissibilite', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('restaurer_enveloppe', 'RestaurerEnveloppe', 'CHAR', true, null, '0');
        $this->getColumn('restaurer_enveloppe', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ouvrir_offre_en_ligne', 'OuvrirOffreEnLigne', 'CHAR', true, null, '0');
        $this->getColumn('ouvrir_offre_en_ligne', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ouvrir_anonymat_en_ligne', 'OuvrirAnonymatEnLigne', 'CHAR', true, null, '0');
        $this->getColumn('ouvrir_anonymat_en_ligne', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_compte_boamp', 'GestionCompteBoamp', 'CHAR', true, null, '0');
        $this->getColumn('gestion_compte_boamp', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_agents', 'GestionAgents', 'CHAR', true, null, '0');
        $this->getColumn('gestion_agents', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_habilitations', 'GestionHabilitations', 'CHAR', true, null, '0');
        $this->getColumn('gestion_habilitations', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gerer_mapa_inferieur_montant', 'GererMapaInferieurMontant', 'CHAR', true, null, '0');
        $this->getColumn('gerer_mapa_inferieur_montant', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gerer_mapa_superieur_montant', 'GererMapaSuperieurMontant', 'CHAR', true, null, '0');
        $this->getColumn('gerer_mapa_superieur_montant', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('modifier_consultation_avant_validation', 'ModifierConsultationAvantValidation', 'CHAR', true, null, '0');
        $this->getColumn('modifier_consultation_avant_validation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('modifier_consultation_apres_validation', 'ModifierConsultationApresValidation', 'CHAR', true, null, '0');
        $this->getColumn('modifier_consultation_apres_validation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('acces_reponses', 'AccesReponses', 'CHAR', true, null, '0');
        $this->getColumn('acces_reponses', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('telechargement_groupe_anticipe_plis_chiffres', 'TelechargementGroupeAnticipePlisChiffres', 'CHAR', true, null, '0');
        $this->getColumn('telechargement_groupe_anticipe_plis_chiffres', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('telechargement_unitaire_plis_chiffres', 'TelechargementUnitairePlisChiffres', 'CHAR', true, null, '0');
        $this->getColumn('telechargement_unitaire_plis_chiffres', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ouvrir_offre_a_distance', 'OuvrirOffreADistance', 'CHAR', true, null, '0');
        $this->getColumn('ouvrir_offre_a_distance', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('creer_annonce_information', 'CreerAnnonceInformation', 'CHAR', true, null, '0');
        $this->getColumn('creer_annonce_information', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('saisie_marches', 'SaisieMarches', 'CHAR', true, null, '0');
        $this->getColumn('saisie_marches', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('validation_marches', 'ValidationMarches', 'CHAR', true, null, '0');
        $this->getColumn('validation_marches', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('publication_marches', 'PublicationMarches', 'CHAR', true, null, '0');
        $this->getColumn('publication_marches', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gerer_statistiques_metier', 'GererStatistiquesMetier', 'CHAR', true, null, '0');
        $this->getColumn('gerer_statistiques_metier', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gerer_archives', 'GererArchives', 'CHAR', true, null, '0');
        $this->getColumn('gerer_archives', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('administrer_procedures_formalisees', 'AdministrerProceduresFormalisees', 'CHAR', true, null, '0');
        $this->getColumn('administrer_procedures_formalisees', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('creer_annonce_attribution', 'CreerAnnonceAttribution', 'CHAR', true, null, '0');
        $this->getColumn('creer_annonce_attribution', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('acces_registre_retraits_electronique', 'AccesRegistreRetraitsElectronique', 'CHAR', true, null, '1');
        $this->getColumn('acces_registre_retraits_electronique', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('acces_registre_questions_electronique', 'AccesRegistreQuestionsElectronique', 'CHAR', true, null, '1');
        $this->getColumn('acces_registre_questions_electronique', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('acces_registre_depots_electronique', 'AccesRegistreDepotsElectronique', 'CHAR', true, null, '1');
        $this->getColumn('acces_registre_depots_electronique', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('validation_simple', 'ValidationSimple', 'CHAR', true, null, '1');
        $this->getColumn('validation_simple', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('validation_intermediaire', 'ValidationIntermediaire', 'CHAR', true, null, '1');
        $this->getColumn('validation_intermediaire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('validation_finale', 'ValidationFinale', 'CHAR', true, null, '1');
        $this->getColumn('validation_finale', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('creer_suite_consultation', 'CreerSuiteConsultation', 'CHAR', true, null, '1');
        $this->getColumn('creer_suite_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('hyper_admin', 'HyperAdmin', 'CHAR', true, null, '0');
        $this->getColumn('hyper_admin', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('droit_gestion_services', 'DroitGestionServices', 'CHAR', true, null, '0');
        $this->getColumn('droit_gestion_services', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('suivi_acces', 'SuiviAcces', 'CHAR', true, null, '0');
        $this->getColumn('suivi_acces', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('statistiques_site', 'StatistiquesSite', 'CHAR', true, null, '0');
        $this->getColumn('statistiques_site', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('statistiques_QoS', 'StatistiquesQos', 'CHAR', true, null, '0');
        $this->getColumn('statistiques_QoS', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ouvrir_anonymat_a_distance', 'OuvrirAnonymatADistance', 'CHAR', true, null, '0');
        $this->getColumn('ouvrir_anonymat_a_distance', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_compte_jal', 'GestionCompteJal', 'CHAR', true, null, '0');
        $this->getColumn('gestion_compte_jal', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_centrale_pub', 'GestionCentralePub', 'CHAR', false, null, '0');
        $this->getColumn('gestion_centrale_pub', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('Gestion_Compte_Groupe_Moniteur', 'GestionCompteGroupeMoniteur', 'CHAR', true, null, null);
        $this->getColumn('Gestion_Compte_Groupe_Moniteur', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ouvrir_offre_technique_en_ligne', 'OuvrirOffreTechniqueEnLigne', 'CHAR', true, null, null);
        $this->getColumn('ouvrir_offre_technique_en_ligne', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ouvrir_offre_technique_a_distance', 'OuvrirOffreTechniqueADistance', 'CHAR', true, null, null);
        $this->getColumn('ouvrir_offre_technique_a_distance', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('activation_compte_entreprise', 'ActivationCompteEntreprise', 'CHAR', false, null, '0');
        $this->getColumn('activation_compte_entreprise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('importer_enveloppe', 'ImporterEnveloppe', 'CHAR', true, null, '0');
        $this->getColumn('importer_enveloppe', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('suivi_seul_registre_depots_papier', 'SuiviSeulRegistreDepotsPapier', 'CHAR', true, null, '0');
        $this->getColumn('suivi_seul_registre_depots_papier', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('suivi_seul_registre_retraits_papier', 'SuiviSeulRegistreRetraitsPapier', 'CHAR', true, null, '0');
        $this->getColumn('suivi_seul_registre_retraits_papier', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('suivi_seul_registre_questions_papier', 'SuiviSeulRegistreQuestionsPapier', 'CHAR', true, null, '0');
        $this->getColumn('suivi_seul_registre_questions_papier', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('suivi_seul_registre_depots_electronique', 'SuiviSeulRegistreDepotsElectronique', 'CHAR', true, null, '1');
        $this->getColumn('suivi_seul_registre_depots_electronique', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('suivi_seul_registre_retraits_electronique', 'SuiviSeulRegistreRetraitsElectronique', 'CHAR', true, null, '1');
        $this->getColumn('suivi_seul_registre_retraits_electronique', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('suivi_seul_registre_questions_electronique', 'SuiviSeulRegistreQuestionsElectronique', 'CHAR', true, null, '1');
        $this->getColumn('suivi_seul_registre_questions_electronique', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('modifier_consultation_mapa_inferieur_montant_apres_validation', 'ModifierConsultationMapaInferieurMontantApresValidation', 'CHAR', true, null, '1');
        $this->getColumn('modifier_consultation_mapa_inferieur_montant_apres_validation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('modifier_consultation_mapa_superieur_montant_apres_validation', 'ModifierConsultationMapaSuperieurMontantApresValidation', 'CHAR', true, null, '1');
        $this->getColumn('modifier_consultation_mapa_superieur_montant_apres_validation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('modifier_consultation_procedures_formalisees_apres_validation', 'ModifierConsultationProceduresFormaliseesApresValidation', 'CHAR', true, null, '1');
        $this->getColumn('modifier_consultation_procedures_formalisees_apres_validation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gerer_les_entreprises', 'GererLesEntreprises', 'CHAR', false, null, '0');
        $this->getColumn('gerer_les_entreprises', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('portee_societes_exclues', 'PorteeSocietesExclues', 'CHAR', true, null, '0');
        $this->getColumn('portee_societes_exclues', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('portee_societes_exclues_tous_organismes', 'PorteeSocietesExcluesTousOrganismes', 'CHAR', true, null, '0');
        $this->getColumn('portee_societes_exclues_tous_organismes', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('modifier_societes_exclues', 'ModifierSocietesExclues', 'CHAR', true, null, '0');
        $this->getColumn('modifier_societes_exclues', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('supprimer_societes_exclues', 'SupprimerSocietesExclues', 'CHAR', true, null, '0');
        $this->getColumn('supprimer_societes_exclues', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('resultat_analyse', 'ResultatAnalyse', 'CHAR', true, null, '0');
        $this->getColumn('resultat_analyse', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gerer_adresses_service', 'GererAdressesService', 'CHAR', false, null, '0');
        $this->getColumn('gerer_adresses_service', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gerer_mon_service', 'GererMonService', 'CHAR', false, null, '0');
        $this->getColumn('gerer_mon_service', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('download_archives', 'DownloadArchives', 'CHAR', false, null, '0');
        $this->getColumn('download_archives', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('creer_annonce_extrait_pv', 'CreerAnnonceExtraitPv', 'CHAR', true, null, '0');
        $this->getColumn('creer_annonce_extrait_pv', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('creer_annonce_rapport_achevement', 'CreerAnnonceRapportAchevement', 'CHAR', true, null, '0');
        $this->getColumn('creer_annonce_rapport_achevement', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_certificats_agent', 'GestionCertificatsAgent', 'CHAR', false, null, '0');
        $this->getColumn('gestion_certificats_agent', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('creer_avis_programme_previsionnel', 'CreerAvisProgrammePrevisionnel', 'CHAR', false, null, '0');
        $this->getColumn('creer_avis_programme_previsionnel', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('annuler_consultation', 'AnnulerConsultation', 'CHAR', false, null, '0');
        $this->getColumn('annuler_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('envoyer_publicite', 'EnvoyerPublicite', 'CHAR', true, null, '1');
        $this->getColumn('envoyer_publicite', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('liste_marches_notifies', 'ListeMarchesNotifies', 'CHAR', true, null, '0');
        $this->getColumn('liste_marches_notifies', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('suivre_message', 'SuivreMessage', 'CHAR', true, null, '1');
        $this->getColumn('suivre_message', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('envoyer_message', 'EnvoyerMessage', 'CHAR', true, null, '1');
        $this->getColumn('envoyer_message', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('suivi_flux_chorus_transversal', 'SuiviFluxChorusTransversal', 'CHAR', true, null, '0');
        $this->getColumn('suivi_flux_chorus_transversal', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_mandataire', 'GestionMandataire', 'CHAR', false, null, '0');
        $this->getColumn('gestion_mandataire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gerer_newsletter', 'GererNewsletter', 'CHAR', false, null, '0');
        $this->getColumn('gerer_newsletter', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_modeles_formulaire', 'GestionModelesFormulaire', 'CHAR', true, null, '0');
        $this->getColumn('gestion_modeles_formulaire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_adresses_facturation_jal', 'GestionAdressesFacturationJal', 'CHAR', true, null, '0');
        $this->getColumn('gestion_adresses_facturation_jal', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('administrer_adresses_facturation_jal', 'AdministrerAdressesFacturationJal', 'CHAR', true, null, '0');
        $this->getColumn('administrer_adresses_facturation_jal', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('redaction_documents_redac', 'RedactionDocumentsRedac', 'CHAR', true, null, '0');
        $this->getColumn('redaction_documents_redac', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('validation_documents_redac', 'ValidationDocumentsRedac', 'CHAR', true, null, '0');
        $this->getColumn('validation_documents_redac', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_mise_disposition_pieces_marche', 'GestionMiseDispositionPiecesMarche', 'CHAR', true, null, '0');
        $this->getColumn('gestion_mise_disposition_pieces_marche', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('annuaire_acheteur', 'AnnuaireAcheteur', 'CHAR', true, null, '0');
        $this->getColumn('annuaire_acheteur', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('reprendre_integralement_article', 'ReprendreIntegralementArticle', 'CHAR', true, null, '0');
        $this->getColumn('reprendre_integralement_article', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('administrer_clauses', 'AdministrerClauses', 'CHAR', true, null, '0');
        $this->getColumn('administrer_clauses', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('valider_clauses', 'ValiderClauses', 'CHAR', true, null, '0');
        $this->getColumn('valider_clauses', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('administrer_canevas', 'AdministrerCanevas', 'CHAR', true, null, '0');
        $this->getColumn('administrer_canevas', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('valider_canevas', 'ValiderCanevas', 'CHAR', true, null, '0');
        $this->getColumn('valider_canevas', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('administrer_clauses_entite_achats', 'AdministrerClausesEntiteAchats', 'CHAR', true, null, '0');
        $this->getColumn('administrer_clauses_entite_achats', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('generer_pieces_format_odt', 'GenererPiecesFormatOdt', 'CHAR', true, null, '0');
        $this->getColumn('generer_pieces_format_odt', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('publier_version_clausier_editeur', 'PublierVersionClausierEditeur', 'CHAR', true, null, '0');
        $this->getColumn('publier_version_clausier_editeur', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('administrer_clauses_editeur', 'AdministrerClausesEditeur', 'CHAR', true, null, '0');
        $this->getColumn('administrer_clauses_editeur', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('valider_clauses_editeur', 'ValiderClausesEditeur', 'CHAR', true, null, '0');
        $this->getColumn('valider_clauses_editeur', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('administrer_canevas_editeur', 'AdministrerCanevasEditeur', 'CHAR', true, null, '0');
        $this->getColumn('administrer_canevas_editeur', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('valider_canevas_editeur', 'ValiderCanevasEditeur', 'CHAR', true, null, '0');
        $this->getColumn('valider_canevas_editeur', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('decision_suivi_seul', 'DecisionSuiviSeul', 'CHAR', true, null, '0');
        $this->getColumn('decision_suivi_seul', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ouvrir_candidature_hors_ligne', 'OuvrirCandidatureHorsLigne', 'CHAR', true, null, '1');
        $this->getColumn('ouvrir_candidature_hors_ligne', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ouvrir_offre_hors_ligne', 'OuvrirOffreHorsLigne', 'CHAR', true, null, '1');
        $this->getColumn('ouvrir_offre_hors_ligne', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ouvrir_offre_technique_hors_ligne', 'OuvrirOffreTechniqueHorsLigne', 'CHAR', true, null, '1');
        $this->getColumn('ouvrir_offre_technique_hors_ligne', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ouvrir_anonymat_hors_ligne', 'OuvrirAnonymatHorsLigne', 'CHAR', true, null, '1');
        $this->getColumn('ouvrir_anonymat_hors_ligne', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('espace_collaboratif_gestionnaire', 'EspaceCollaboratifGestionnaire', 'CHAR', true, null, '0');
        $this->getColumn('espace_collaboratif_gestionnaire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('espace_collaboratif_contributeur', 'EspaceCollaboratifContributeur', 'CHAR', true, null, '0');
        $this->getColumn('espace_collaboratif_contributeur', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gerer_organismes', 'GererOrganismes', 'CHAR', true, null, '0');
        $this->getColumn('gerer_organismes', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gerer_associations_agents', 'GererAssociationsAgents', 'CHAR', true, null, '0');
        $this->getColumn('gerer_associations_agents', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('module_redaction_uniquement', 'ModuleRedactionUniquement', 'CHAR', false, null, '0');
        $this->getColumn('module_redaction_uniquement', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('historique_navigation_inscrits', 'HistoriqueNavigationInscrits', 'CHAR', true, null, '1');
        $this->getColumn('historique_navigation_inscrits', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('telecharger_accords_cadres', 'TelechargerAccordsCadres', 'CHAR', true, null, '0');
        $this->getColumn('telecharger_accords_cadres', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('creer_annonce_decision_resiliation', 'CreerAnnonceDecisionResiliation', 'CHAR', true, null, '0');
        $this->getColumn('creer_annonce_decision_resiliation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('creer_annonce_synthese_rapport_audit', 'CreerAnnonceSyntheseRapportAudit', 'CHAR', true, null, '0');
        $this->getColumn('creer_annonce_synthese_rapport_audit', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gerer_operations', 'GererOperations', 'CHAR', true, null, '0');
        $this->getColumn('gerer_operations', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('telecharger_siret_acheteur', 'TelechargerSiretAcheteur', 'CHAR', false, null, '0');
        $this->getColumn('telecharger_siret_acheteur', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gerer_reouvertures_modification', 'GererReouverturesModification', 'CHAR', true, null, '0');
        $this->getColumn('gerer_reouvertures_modification', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('envoyer_demande_validation', 'EnvoyerDemandeValidation', 'CHAR', true, null, '0');
        $this->getColumn('envoyer_demande_validation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('suivre_consultation_organisme', 'SuivreConsultationOrganisme', 'CHAR', true, null, '0');
        $this->getColumn('suivre_consultation_organisme', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('renseigner_montant', 'RenseignerMontant', 'CHAR', true, null, '0');
        $this->getColumn('renseigner_montant', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_referentiel_contact', 'GestionReferentielContact', 'CHAR', true, null, '0');
        $this->getColumn('gestion_referentiel_contact', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('validation_acces_facture', 'ValidationAccesFacture', 'CHAR', true, null, '0');
        $this->getColumn('validation_acces_facture', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gerer_cao', 'GererCao', 'CHAR', true, null, '0');
        $this->getColumn('gerer_cao', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_travaux_cao', 'GestionTravauxCao', 'CHAR', true, null, '0');
        $this->getColumn('gestion_travaux_cao', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonHabilitationProfilTableMap
