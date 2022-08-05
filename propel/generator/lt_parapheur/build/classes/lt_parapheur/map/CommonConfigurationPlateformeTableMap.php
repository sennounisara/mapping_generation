<?php



/**
 * This class defines the structure of the 'configuration_plateforme' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class CommonConfigurationPlateformeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonConfigurationPlateformeTableMap';

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
        $this->setName('configuration_plateforme');
        $this->setPhpName('CommonConfigurationPlateforme');
        $this->setClassname('CommonConfigurationPlateforme');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_auto', 'IdAuto', 'INTEGER', true, null, null);
        $this->addColumn('code_cpv', 'CodeCpv', 'CHAR', true, null, '0');
        $this->getColumn('code_cpv', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('multi_linguisme_entreprise', 'MultiLinguismeEntreprise', 'CHAR', true, null, '0');
        $this->getColumn('multi_linguisme_entreprise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_fournisseurs_docs_mes_sous_services', 'GestionFournisseursDocsMesSousServices', 'CHAR', true, null, '1');
        $this->getColumn('gestion_fournisseurs_docs_mes_sous_services', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('authenticate_inscrit_by_cert', 'AuthenticateInscritByCert', 'CHAR', true, null, '0');
        $this->getColumn('authenticate_inscrit_by_cert', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('authenticate_inscrit_by_login', 'AuthenticateInscritByLogin', 'CHAR', true, null, '1');
        $this->getColumn('authenticate_inscrit_by_login', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('base_qualifiee_entreprise_insee', 'BaseQualifieeEntrepriseInsee', 'CHAR', true, null, '0');
        $this->getColumn('base_qualifiee_entreprise_insee', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_boamp_mes_sous_services', 'GestionBoampMesSousServices', 'CHAR', true, null, '1');
        $this->getColumn('gestion_boamp_mes_sous_services', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_bi_cle_mes_sous_services', 'GestionBiCleMesSousServices', 'CHAR', true, null, '1');
        $this->getColumn('gestion_bi_cle_mes_sous_services', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('nom_entreprise_toujours_visible', 'NomEntrepriseToujoursVisible', 'CHAR', true, null, '0');
        $this->getColumn('nom_entreprise_toujours_visible', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_jal_mes_sous_services', 'GestionJalMesSousServices', 'CHAR', true, null, '1');
        $this->getColumn('gestion_jal_mes_sous_services', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('choix_langue_affichage_consultation', 'ChoixLangueAffichageConsultation', 'CHAR', true, null, '0');
        $this->getColumn('choix_langue_affichage_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_donnees_complementaires', 'CompteEntrepriseDonneesComplementaires', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_donnees_complementaires', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('annuaire_entites_achat_visible_par_entreprise', 'AnnuaireEntitesAchatVisibleParEntreprise', 'CHAR', true, null, '1');
        $this->getColumn('annuaire_entites_achat_visible_par_entreprise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('affichage_recherche_avancee_agent_ac_sad_transversaux', 'AffichageRechercheAvanceeAgentAcSadTransversaux', 'CHAR', true, null, '0');
        $this->getColumn('affichage_recherche_avancee_agent_ac_sad_transversaux', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('encheres_entreprise', 'EncheresEntreprise', 'CHAR', true, null, '0');
        $this->getColumn('encheres_entreprise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('socle_interne', 'SocleInterne', 'CHAR', true, null, '0');
        $this->getColumn('socle_interne', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('module_certificat', 'ModuleCertificat', 'CHAR', true, null, '0');
        $this->getColumn('module_certificat', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('socle_externe_agent', 'SocleExterneAgent', 'CHAR', true, null, '0');
        $this->getColumn('socle_externe_agent', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('afficher_image_organisme', 'AfficherImageOrganisme', 'CHAR', true, null, '0');
        $this->getColumn('afficher_image_organisme', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('socle_externe_entreprise', 'SocleExterneEntreprise', 'CHAR', true, null, '0');
        $this->getColumn('socle_externe_entreprise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('portail_defense_entreprise', 'PortailDefenseEntreprise', 'CHAR', true, null, '0');
        $this->getColumn('portail_defense_entreprise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_province', 'CompteEntrepriseProvince', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_province', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_telephone3', 'CompteEntrepriseTelephone3', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_telephone3', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_tax_prof', 'CompteEntrepriseTaxProf', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_tax_prof', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_rcville', 'CompteEntrepriseRcville', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_rcville', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_declaration_honneur', 'CompteEntrepriseDeclarationHonneur', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_declaration_honneur', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_qualification', 'CompteEntrepriseQualification', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_qualification', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_moyens_techniques', 'CompteEntrepriseMoyensTechniques', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_moyens_techniques', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_prestations_realisees', 'CompteEntreprisePrestationsRealisees', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_prestations_realisees', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_chiffre_affaire_production_biens_services', 'CompteEntrepriseChiffreAffaireProductionBiensServices', 'CHAR', true, null, '1');
        $this->getColumn('compte_entreprise_chiffre_affaire_production_biens_services', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('enveloppe_offre_technique', 'EnveloppeOffreTechnique', 'CHAR', true, null, '0');
        $this->getColumn('enveloppe_offre_technique', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_inscrit_choix_profil', 'CompteInscritChoixProfil', 'CHAR', true, null, '0');
        $this->getColumn('compte_inscrit_choix_profil', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('procedure_adaptee', 'ProcedureAdaptee', 'CHAR', true, null, '1');
        $this->getColumn('procedure_adaptee', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_siren', 'CompteEntrepriseSiren', 'CHAR', true, null, '1');
        $this->getColumn('compte_entreprise_siren', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_activation_inscription_par_agent', 'CompteEntrepriseActivationInscriptionParAgent', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_activation_inscription_par_agent', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('menu_entreprise_consultations_en_cours', 'MenuEntrepriseConsultationsEnCours', 'CHAR', true, null, '0');
        $this->getColumn('menu_entreprise_consultations_en_cours', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_capital_social', 'CompteEntrepriseCapitalSocial', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_capital_social', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('mail_activation_compte_inscrit_entreprise', 'MailActivationCompteInscritEntreprise', 'CHAR', true, null, '0');
        $this->getColumn('mail_activation_compte_inscrit_entreprise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('decision_date_notification', 'DecisionDateNotification', 'CHAR', true, null, '1');
        $this->getColumn('decision_date_notification', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('decision_pmi_pme', 'DecisionPmiPme', 'CHAR', true, null, '1');
        $this->getColumn('decision_pmi_pme', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('decision_nature_prestations', 'DecisionNaturePrestations', 'CHAR', true, null, '1');
        $this->getColumn('decision_nature_prestations', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('decision_objet_marche', 'DecisionObjetMarche', 'CHAR', true, null, '1');
        $this->getColumn('decision_objet_marche', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('decision_note', 'DecisionNote', 'CHAR', true, null, '0');
        $this->getColumn('decision_note', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('decision_fiche_recensement', 'DecisionFicheRecensement', 'CHAR', true, null, '1');
        $this->getColumn('decision_fiche_recensement', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('registre_papier_mail_obligatoire', 'RegistrePapierMailObligatoire', 'CHAR', true, null, '0');
        $this->getColumn('registre_papier_mail_obligatoire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('menu_entreprise_indicateurs_cles', 'MenuEntrepriseIndicateursCles', 'CHAR', true, null, '0');
        $this->getColumn('menu_entreprise_indicateurs_cles', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ajout_rpa_champ_email', 'AjoutRpaChampEmail', 'CHAR', true, null, '0');
        $this->getColumn('ajout_rpa_champ_email', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ajout_rpa_champ_telephone', 'AjoutRpaChampTelephone', 'CHAR', true, null, '0');
        $this->getColumn('ajout_rpa_champ_telephone', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ajout_rpa_champ_fax', 'AjoutRpaChampFax', 'CHAR', true, null, '0');
        $this->getColumn('ajout_rpa_champ_fax', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('entreprise_poser_question_sans_pj', 'EntreprisePoserQuestionSansPj', 'CHAR', true, null, '1');
        $this->getColumn('entreprise_poser_question_sans_pj', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('url_demarche_agent', 'UrlDemarcheAgent', 'CHAR', true, null, '0');
        $this->getColumn('url_demarche_agent', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('url_demarche_entreprise', 'UrlDemarcheEntreprise', 'CHAR', true, null, '0');
        $this->getColumn('url_demarche_entreprise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('siret_detail_entite_achat', 'SiretDetailEntiteAchat', 'CHAR', true, null, '1');
        $this->getColumn('siret_detail_entite_achat', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('presence_elu', 'PresenceElu', 'CHAR', true, null, '1');
        $this->getColumn('presence_elu', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gerer_mon_service', 'GererMonService', 'CHAR', true, null, '0');
        $this->getColumn('gerer_mon_service', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('depouillement_enveloppe_depend_RAT_enveloppe_precedente', 'DepouillementEnveloppeDependRatEnveloppePrecedente', 'CHAR', true, null, '0');
        $this->getColumn('depouillement_enveloppe_depend_RAT_enveloppe_precedente', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_adresse_retrais_dossiers', 'ConsultationAdresseRetraisDossiers', 'CHAR', true, null, '0');
        $this->getColumn('consultation_adresse_retrais_dossiers', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_adresse_depot_offres', 'ConsultationAdresseDepotOffres', 'CHAR', true, null, '0');
        $this->getColumn('consultation_adresse_depot_offres', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_caution_provisoire', 'ConsultationCautionProvisoire', 'CHAR', true, null, '0');
        $this->getColumn('consultation_caution_provisoire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_lieu_ouverture_plis', 'ConsultationLieuOuverturePlis', 'CHAR', true, null, '0');
        $this->getColumn('consultation_lieu_ouverture_plis', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_qualification', 'ConsultationQualification', 'CHAR', true, null, '0');
        $this->getColumn('consultation_qualification', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_agrement', 'ConsultationAgrement', 'CHAR', true, null, '0');
        $this->getColumn('consultation_agrement', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_echantillons_demandes', 'ConsultationEchantillonsDemandes', 'CHAR', true, null, '0');
        $this->getColumn('consultation_echantillons_demandes', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_reunion', 'ConsultationReunion', 'CHAR', true, null, '0');
        $this->getColumn('consultation_reunion', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_visite_des_lieux', 'ConsultationVisiteDesLieux', 'CHAR', true, null, '0');
        $this->getColumn('consultation_visite_des_lieux', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_prix_acquisition', 'ConsultationPrixAcquisition', 'CHAR', true, null, '0');
        $this->getColumn('consultation_prix_acquisition', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('resultat_analyse_avant_decision', 'ResultatAnalyseAvantDecision', 'CHAR', true, null, '0');
        $this->getColumn('resultat_analyse_avant_decision', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('creation_inscrit_par_ates', 'CreationInscritParAtes', 'CHAR', true, null, '0');
        $this->getColumn('creation_inscrit_par_ates', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_variantes_autorisees', 'ConsultationVariantesAutorisees', 'CHAR', true, null, '0');
        $this->getColumn('consultation_variantes_autorisees', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('recherche_avancee_par_type_org', 'RechercheAvanceeParTypeOrg', 'CHAR', true, null, '0');
        $this->getColumn('recherche_avancee_par_type_org', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('menu_agent_societes_exclues', 'MenuAgentSocietesExclues', 'CHAR', true, null, '0');
        $this->getColumn('menu_agent_societes_exclues', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('recherche_avancee_par_domaines_activite', 'RechercheAvanceeParDomainesActivite', 'CHAR', true, null, '0');
        $this->getColumn('recherche_avancee_par_domaines_activite', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('recherche_avancee_par_qualification', 'RechercheAvanceeParQualification', 'CHAR', true, null, '0');
        $this->getColumn('recherche_avancee_par_qualification', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('recherche_avancee_par_agrement', 'RechercheAvanceeParAgrement', 'CHAR', true, null, '0');
        $this->getColumn('recherche_avancee_par_agrement', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('contact_administratif_dans_detail_consultation_cote_entreprise', 'ContactAdministratifDansDetailConsultationCoteEntreprise', 'CHAR', true, null, '0');
        $this->getColumn('contact_administratif_dans_detail_consultation_cote_entreprise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_pieces_dossiers', 'ConsultationPiecesDossiers', 'CHAR', true, null, '0');
        $this->getColumn('consultation_pieces_dossiers', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gerer_adresses_service', 'GererAdressesService', 'CHAR', true, null, '0');
        $this->getColumn('gerer_adresses_service', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('traduire_annonces', 'TraduireAnnonces', 'CHAR', true, null, '0');
        $this->getColumn('traduire_annonces', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('afficher_bloc_actions_dans_details_annonces', 'AfficherBlocActionsDansDetailsAnnonces', 'CHAR', true, null, '0');
        $this->getColumn('afficher_bloc_actions_dans_details_annonces', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('autoriser_une_seule_reponse_principale_par_entreprise', 'AutoriserUneSeuleReponsePrincipaleParEntreprise', 'CHAR', true, null, '0');
        $this->getColumn('autoriser_une_seule_reponse_principale_par_entreprise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('generation_avis', 'GenerationAvis', 'CHAR', true, null, '0');
        $this->getColumn('generation_avis', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('passation_appliquer_donnees_ensemble_lots', 'PassationAppliquerDonneesEnsembleLots', 'CHAR', true, null, '0');
        $this->getColumn('passation_appliquer_donnees_ensemble_lots', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('autre_annonce_extrait_pv', 'AutreAnnonceExtraitPv', 'CHAR', true, null, '0');
        $this->getColumn('autre_annonce_extrait_pv', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('autre_annonce_rapport_achevement', 'AutreAnnonceRapportAchevement', 'CHAR', true, null, '0');
        $this->getColumn('autre_annonce_rapport_achevement', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ajout_fichier_joint_autre_annonce', 'AjoutFichierJointAutreAnnonce', 'CHAR', true, null, '0');
        $this->getColumn('ajout_fichier_joint_autre_annonce', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_mode_passation', 'ConsultationModePassation', 'CHAR', true, null, '0');
        $this->getColumn('consultation_mode_passation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_identifiant_unique', 'CompteEntrepriseIdentifiantUnique', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_identifiant_unique', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gerer_certificats_agent', 'GererCertificatsAgent', 'CHAR', true, null, '0');
        $this->getColumn('gerer_certificats_agent', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('autre_annonce_programme_previsionnel', 'AutreAnnonceProgrammePrevisionnel', 'CHAR', true, null, '0');
        $this->getColumn('autre_annonce_programme_previsionnel', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('annuler_consultation', 'AnnulerConsultation', 'CHAR', true, null, '0');
        $this->getColumn('annuler_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('cfe_entreprise_accessible_par_agent', 'CfeEntrepriseAccessibleParAgent', 'CHAR', true, null, '1');
        $this->getColumn('cfe_entreprise_accessible_par_agent', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_code_nace_referentiel', 'CompteEntrepriseCodeNaceReferentiel', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_code_nace_referentiel', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('code_nut_lt_referentiel', 'CodeNutLtReferentiel', 'CHAR', true, null, '0');
        $this->getColumn('code_nut_lt_referentiel', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('lieux_execution', 'LieuxExecution', 'CHAR', true, null, '1');
        $this->getColumn('lieux_execution', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_domaine_activite_lt_referentiel', 'CompteEntrepriseDomaineActiviteLtReferentiel', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_domaine_activite_lt_referentiel', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_domaines_activites_lt_referentiel', 'ConsultationDomainesActivitesLtReferentiel', 'CHAR', true, null, '0');
        $this->getColumn('consultation_domaines_activites_lt_referentiel', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_agrement_lt_referentiel', 'CompteEntrepriseAgrementLtReferentiel', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_agrement_lt_referentiel', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_qualification_lt_referentiel', 'CompteEntrepriseQualificationLtReferentiel', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_qualification_lt_referentiel', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('reponse_pas_a_pas', 'ReponsePasAPas', 'CHAR', true, null, '0');
        $this->getColumn('reponse_pas_a_pas', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('agent_controle_format_mot_de_passe', 'AgentControleFormatMotDePasse', 'CHAR', true, null, '0');
        $this->getColumn('agent_controle_format_mot_de_passe', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('entreprise_validation_email_inscription', 'EntrepriseValidationEmailInscription', 'CHAR', true, null, '0');
        $this->getColumn('entreprise_validation_email_inscription', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('telecharger_dce_avec_authentification', 'TelechargerDceAvecAuthentification', 'CHAR', true, null, '0');
        $this->getColumn('telecharger_dce_avec_authentification', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('authentification_basic', 'AuthentificationBasic', 'CHAR', true, null, '0');
        $this->getColumn('authentification_basic', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('reglement_consultation', 'ReglementConsultation', 'CHAR', true, null, '1');
        $this->getColumn('reglement_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('annonces_marches', 'AnnoncesMarches', 'CHAR', true, null, '0');
        $this->getColumn('annonces_marches', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('cfe_date_fin_validite_obligatoire', 'CfeDateFinValiditeObligatoire', 'CHAR', true, null, '1');
        $this->getColumn('cfe_date_fin_validite_obligatoire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('associer_documents_cfe_consultation', 'AssocierDocumentsCfeConsultation', 'CHAR', true, null, '0');
        $this->getColumn('associer_documents_cfe_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_region', 'CompteEntrepriseRegion', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_region', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_telephone2', 'CompteEntrepriseTelephone2', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_telephone2', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_cnss', 'CompteEntrepriseCnss', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_cnss', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_rcnum', 'CompteEntrepriseRcnum', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_rcnum', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_domaine_activite', 'CompteEntrepriseDomaineActivite', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_domaine_activite', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_inscrit_code_nic', 'CompteInscritCodeNic', 'CHAR', true, null, '1');
        $this->getColumn('compte_inscrit_code_nic', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_code_ape', 'CompteEntrepriseCodeApe', 'CHAR', true, null, '1');
        $this->getColumn('compte_entreprise_code_ape', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_documents_commerciaux', 'CompteEntrepriseDocumentsCommerciaux', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_documents_commerciaux', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_agrement', 'CompteEntrepriseAgrement', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_agrement', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_moyens_humains', 'CompteEntrepriseMoyensHumains', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_moyens_humains', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_activite_domaine_defense', 'CompteEntrepriseActiviteDomaineDefense', 'CHAR', true, null, '1');
        $this->getColumn('compte_entreprise_activite_domaine_defense', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_donnees_financieres', 'CompteEntrepriseDonneesFinancieres', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_donnees_financieres', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('enveloppe_anonymat', 'EnveloppeAnonymat', 'CHAR', true, null, '1');
        $this->getColumn('enveloppe_anonymat', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('publicite_format_xml', 'PubliciteFormatXml', 'CHAR', true, null, '1');
        $this->getColumn('publicite_format_xml', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('article_133_generation_pf', 'Article133GenerationPf', 'CHAR', true, null, '1');
        $this->getColumn('article_133_generation_pf', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('entreprise_repondre_consultation_apres_cloture', 'EntrepriseRepondreConsultationApresCloture', 'CHAR', true, null, '1');
        $this->getColumn('entreprise_repondre_consultation_apres_cloture', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('telechargement_outil_verif_horodatage', 'TelechargementOutilVerifHorodatage', 'CHAR', true, null, '0');
        $this->getColumn('telechargement_outil_verif_horodatage', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('affichage_code_cpv', 'AffichageCodeCpv', 'CHAR', true, null, '1');
        $this->getColumn('affichage_code_cpv', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_domaines_activites', 'ConsultationDomainesActivites', 'CHAR', true, null, '0');
        $this->getColumn('consultation_domaines_activites', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('statistiques_mesure_demat', 'StatistiquesMesureDemat', 'CHAR', true, null, '1');
        $this->getColumn('statistiques_mesure_demat', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('publication_procure', 'PublicationProcure', 'CHAR', true, null, '0');
        $this->getColumn('publication_procure', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('menu_entreprise_toutes_les_consultations', 'MenuEntrepriseToutesLesConsultations', 'CHAR', true, null, '1');
        $this->getColumn('menu_entreprise_toutes_les_consultations', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_cp_obligatoire', 'CompteEntrepriseCpObligatoire', 'CHAR', true, null, '1');
        $this->getColumn('compte_entreprise_cp_obligatoire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('annuler_depot', 'AnnulerDepot', 'CHAR', true, null, '0');
        $this->getColumn('annuler_depot', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('traduire_entite_achat_arabe', 'TraduireEntiteAchatArabe', 'CHAR', true, null, '0');
        $this->getColumn('traduire_entite_achat_arabe', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('traduire_organisme_arabe', 'TraduireOrganismeArabe', 'CHAR', false, null, '0');
        $this->getColumn('traduire_organisme_arabe', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('decision_cp', 'DecisionCp', 'CHAR', true, null, '1');
        $this->getColumn('decision_cp', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('decision_tranche_budgetaire', 'DecisionTrancheBudgetaire', 'CHAR', true, null, '1');
        $this->getColumn('decision_tranche_budgetaire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('decision_classement', 'DecisionClassement', 'CHAR', true, null, '0');
        $this->getColumn('decision_classement', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('decision_afficher_detail_candidat_par_defaut', 'DecisionAfficherDetailCandidatParDefaut', 'CHAR', true, null, '0');
        $this->getColumn('decision_afficher_detail_candidat_par_defaut', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('article_133_upload_fichier', 'Article133UploadFichier', 'CHAR', true, null, '0');
        $this->getColumn('article_133_upload_fichier', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('multi_linguisme_agent', 'MultiLinguismeAgent', 'CHAR', true, null, '0');
        $this->getColumn('multi_linguisme_agent', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('compte_entreprise_ifu', 'CompteEntrepriseIfu', 'CHAR', true, null, '0');
        $this->getColumn('compte_entreprise_ifu', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_organisme_par_agent', 'GestionOrganismeParAgent', 'CHAR', true, null, '0');
        $this->getColumn('gestion_organisme_par_agent', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('utiliser_lucene', 'UtiliserLucene', 'CHAR', true, null, '1');
        $this->getColumn('utiliser_lucene', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('utiliser_page_html_lieux_execution', 'UtiliserPageHtmlLieuxExecution', 'CHAR', true, null, '1');
        $this->getColumn('utiliser_page_html_lieux_execution', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('prado_validateur_format_date', 'PradoValidateurFormatDate', 'CHAR', true, null, '1');
        $this->getColumn('prado_validateur_format_date', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('prado_validateur_format_email', 'PradoValidateurFormatEmail', 'CHAR', true, null, '1');
        $this->getColumn('prado_validateur_format_email', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('socle_externe_ppp', 'SocleExternePpp', 'CHAR', true, null, '0');
        $this->getColumn('socle_externe_ppp', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('validation_format_champs_stricte', 'ValidationFormatChampsStricte', 'CHAR', true, null, '0');
        $this->getColumn('validation_format_champs_stricte', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('poser_question_necessite_authentification', 'PoserQuestionNecessiteAuthentification', 'CHAR', true, null, '0');
        $this->getColumn('poser_question_necessite_authentification', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('autoriser_modif_profil_inscrit_ates', 'AutoriserModifProfilInscritAtes', 'CHAR', false, null, '0');
        $this->getColumn('autoriser_modif_profil_inscrit_ates', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('unicite_reference_consultation', 'UniciteReferenceConsultation', 'CHAR', true, null, '0');
        $this->getColumn('unicite_reference_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('registre_papier_rcnum_rcville_obligatoires', 'RegistrePapierRcnumRcvilleObligatoires', 'CHAR', true, null, '0');
        $this->getColumn('registre_papier_rcnum_rcville_obligatoires', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('registre_papier_adresse_cp_ville_obligatoires', 'RegistrePapierAdresseCpVilleObligatoires', 'CHAR', true, null, '0');
        $this->getColumn('registre_papier_adresse_cp_ville_obligatoires', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('telecharger_dce_sans_identification', 'TelechargerDceSansIdentification', 'CHAR', true, null, '0');
        $this->getColumn('telecharger_dce_sans_identification', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_entreprise_par_agent', 'GestionEntrepriseParAgent', 'CHAR', true, null, '0');
        $this->getColumn('gestion_entreprise_par_agent', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('autoriser_caracteres_speciaux_dans_reference', 'AutoriserCaracteresSpeciauxDansReference', 'CHAR', true, null, '0');
        $this->getColumn('autoriser_caracteres_speciaux_dans_reference', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('inscription_libre_entreprise', 'InscriptionLibreEntreprise', 'CHAR', true, null, '1');
        $this->getColumn('inscription_libre_entreprise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('afficher_code_service', 'AfficherCodeService', 'CHAR', true, null, '0');
        $this->getColumn('afficher_code_service', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('authenticate_agent_by_login', 'AuthenticateAgentByLogin', 'CHAR', true, null, '1');
        $this->getColumn('authenticate_agent_by_login', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('authenticate_agent_by_cert', 'AuthenticateAgentByCert', 'CHAR', true, null, '0');
        $this->getColumn('authenticate_agent_by_cert', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('generer_acte_dengagement', 'GenererActeDengagement', 'CHAR', true, null, '0');
        $this->getColumn('generer_acte_dengagement', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('entreprise_controle_format_mot_de_passe', 'EntrepriseControleFormatMotDePasse', 'CHAR', true, null, '0');
        $this->getColumn('entreprise_controle_format_mot_de_passe', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('autre_annonce_information', 'AutreAnnonceInformation', 'CHAR', true, null, '1');
        $this->getColumn('autre_annonce_information', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('creer_autre_annonce', 'CreerAutreAnnonce', 'CHAR', true, null, '1');
        $this->getColumn('creer_autre_annonce', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_clause', 'ConsultationClause', 'CHAR', true, null, '0');
        $this->getColumn('consultation_clause', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('panier_entreprise', 'PanierEntreprise', 'CHAR', true, null, '0');
        $this->getColumn('panier_entreprise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('parametrage_publicite_par_type_procedure', 'ParametragePubliciteParTypeProcedure', 'CHAR', true, null, '0');
        $this->getColumn('parametrage_publicite_par_type_procedure', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('export_decision', 'ExportDecision', 'CHAR', true, null, '0');
        $this->getColumn('export_decision', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('lieu_ouverture_plis_obligatoire', 'LieuOuverturePlisObligatoire', 'CHAR', true, null, '0');
        $this->getColumn('lieu_ouverture_plis_obligatoire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('regle_mise_en_ligne_par_entite_coordinatrice', 'RegleMiseEnLigneParEntiteCoordinatrice', 'CHAR', true, null, '0');
        $this->getColumn('regle_mise_en_ligne_par_entite_coordinatrice', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_newsletter', 'GestionNewsletter', 'CHAR', true, null, '0');
        $this->getColumn('gestion_newsletter', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('publicite_opoce', 'PubliciteOpoce', 'CHAR', true, null, '0');
        $this->getColumn('publicite_opoce', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_modeles_formulaire', 'GestionModelesFormulaire', 'CHAR', true, null, '0');
        $this->getColumn('gestion_modeles_formulaire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_adresses_facturation_JAL', 'GestionAdressesFacturationJal', 'CHAR', true, null, '0');
        $this->getColumn('gestion_adresses_facturation_JAL', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('publicite_marches_en_ligne', 'PubliciteMarchesEnLigne', 'CHAR', true, null, '1');
        $this->getColumn('publicite_marches_en_ligne', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('dossier_additif', 'DossierAdditif', 'CHAR', true, null, '0');
        $this->getColumn('dossier_additif', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('type_marche', 'TypeMarche', 'CHAR', true, null, '0');
        $this->getColumn('type_marche', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('type_prestation', 'TypePrestation', 'CHAR', true, null, '0');
        $this->getColumn('type_prestation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('afficher_tjr_bloc_caracteristique_reponse', 'AfficherTjrBlocCaracteristiqueReponse', 'CHAR', true, null, '0');
        $this->getColumn('afficher_tjr_bloc_caracteristique_reponse', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('alerte_metier', 'AlerteMetier', 'CHAR', true, null, '0');
        $this->getColumn('alerte_metier', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('bourse_a_la_sous_traitance', 'BourseALaSousTraitance', 'CHAR', true, null, '0');
        $this->getColumn('bourse_a_la_sous_traitance', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('publier_guides', 'PublierGuides', 'CHAR', true, null, '0');
        $this->getColumn('publier_guides', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('recherche_auto_completion', 'RechercheAutoCompletion', 'CHAR', true, null, '0');
        $this->getColumn('recherche_auto_completion', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('statut_compte_entreprise', 'StatutCompteEntreprise', 'CHAR', true, null, '0');
        $this->getColumn('statut_compte_entreprise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('gestion_organismes', 'GestionOrganismes', 'CHAR', true, null, '0');
        $this->getColumn('gestion_organismes', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('accueil_entreprise_personnalise', 'AccueilEntreprisePersonnalise', 'CHAR', true, null, '0');
        $this->getColumn('accueil_entreprise_personnalise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('interface_module_sub', 'InterfaceModuleSub', 'CHAR', true, null, '0');
        $this->getColumn('interface_module_sub', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('authentification_agent_multi_organismes', 'AuthentificationAgentMultiOrganismes', 'CHAR', true, null, '1');
        $this->getColumn('authentification_agent_multi_organismes', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('partager_consultation', 'PartagerConsultation', 'CHAR', true, null, '0');
        $this->getColumn('partager_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('annuaire_acheteurs_publics', 'AnnuaireAcheteursPublics', 'CHAR', true, null, '0');
        $this->getColumn('annuaire_acheteurs_publics', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('entreprise_actions_groupees', 'EntrepriseActionsGroupees', 'CHAR', true, null, '0');
        $this->getColumn('entreprise_actions_groupees', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('lieux_execution_carte', 'LieuxExecutionCarte', 'CHAR', true, null, '1');
        $this->getColumn('lieux_execution_carte', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('surcharge_referentiels', 'SurchargeReferentiels', 'CHAR', true, null, '1');
        $this->getColumn('surcharge_referentiels', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('Mode_Restriction_RGS', 'ModeRestrictionRgs', 'CHAR', true, null, '0');
        $this->getColumn('Mode_Restriction_RGS', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('autre_annonce_decision_resiliation', 'AutreAnnonceDecisionResiliation', 'CHAR', true, null, '0');
        $this->getColumn('autre_annonce_decision_resiliation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('autre_annonce_synthese_rapport_audit', 'AutreAnnonceSyntheseRapportAudit', 'CHAR', true, null, '0');
        $this->getColumn('autre_annonce_synthese_rapport_audit', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('fiche_weka', 'FicheWeka', 'CHAR', true, null, '0');
        $this->getColumn('fiche_weka', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('generation_automatique_mdp_agent', 'GenerationAutomatiqueMdpAgent', 'CHAR', true, null, '0');
        $this->getColumn('generation_automatique_mdp_agent', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('generation_automatique_mdp_inscrit', 'GenerationAutomatiqueMdpInscrit', 'CHAR', true, null, '0');
        $this->getColumn('generation_automatique_mdp_inscrit', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('liste_ac_rgs', 'ListeAcRgs', 'CHAR', true, null, '0');
        $this->getColumn('liste_ac_rgs', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('liste_cons_org', 'ListeConsOrg', 'CHAR', true, null, '0');
        $this->getColumn('liste_cons_org', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('marche_public_simplifie_entreprise', 'MarchePublicSimplifieEntreprise', 'CHAR', true, null, '0');
        $this->getColumn('marche_public_simplifie_entreprise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('demande_validation_controleur', 'DemandeValidationControleur', 'CHAR', true, null, '0');
        $this->getColumn('demande_validation_controleur', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('acces_exec_contrats', 'AccesExecContrats', 'CHAR', true, null, '0');
        $this->getColumn('acces_exec_contrats', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('forme_juridique_groupement_attributaire', 'FormeJuridiqueGroupementAttributaire', 'CHAR', true, null, '1');
        $this->getColumn('forme_juridique_groupement_attributaire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('date_limite_remise_plis_obligatoire', 'DateLimiteRemisePlisObligatoire', 'CHAR', true, null, '1');
        $this->getColumn('date_limite_remise_plis_obligatoire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('modif_type_procedure', 'ModifTypeProcedure', 'CHAR', true, null, '0');
        $this->getColumn('modif_type_procedure', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('donnees_complementaires_procedure', 'DonneesComplementairesProcedure', 'CHAR', true, null, '1');
        $this->getColumn('donnees_complementaires_procedure', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('forme_marche_forme_prix', 'FormeMarcheFormePrix', 'CHAR', true, null, '1');
        $this->getColumn('forme_marche_forme_prix', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('controle_unicite_num_marche', 'ControleUniciteNumMarche', 'CHAR', true, null, '0');
        $this->getColumn('controle_unicite_num_marche', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('affichage_num_marche', 'AffichageNumMarche', 'CHAR', true, null, '1');
        $this->getColumn('affichage_num_marche', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('affichage_date_fin_marche', 'AffichageDateFinMarche', 'CHAR', true, null, '1');
        $this->getColumn('affichage_date_fin_marche', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('affichage_ice', 'AffichageIce', 'CHAR', false, null, '0');
        $this->getColumn('affichage_ice', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('blocage_depot_hors_delai', 'BlocageDepotHorsDelai', 'CHAR', true, null, '0');
        $this->getColumn('blocage_depot_hors_delai', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('activer_suivi_pv', 'ActiverSuiviPv', 'CHAR', true, null, '0');
        $this->getColumn('activer_suivi_pv', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('captcha_validateur', 'CaptchaValidateur', 'CHAR', true, null, '0');
        $this->getColumn('captcha_validateur', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('decision_depuis_resultat_analyse', 'DecisionDepuisResultatAnalyse', 'CHAR', true, null, '0');
        $this->getColumn('decision_depuis_resultat_analyse', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('module_facture', 'ModuleFacture', 'CHAR', true, null, '0');
        $this->getColumn('module_facture', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('validation_entreprise_facturation', 'ValidationEntrepriseFacturation', 'CHAR', true, null, null);
        $this->getColumn('validation_entreprise_facturation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('bloquer_depot_si_env_non_depose', 'BloquerDepotSiEnvNonDepose', 'CHAR', true, null, '0');
        $this->getColumn('bloquer_depot_si_env_non_depose', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('bloquer_depot_signature_invalide', 'BloquerDepotSignatureInvalide', 'CHAR', true, null, '0');
        $this->getColumn('bloquer_depot_signature_invalide', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_import_lots', 'ConsultationImportLots', 'CHAR', true, null, '0');
        $this->getColumn('consultation_import_lots', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('depot_selection_lots', 'DepotSelectionLots', 'CHAR', true, null, '0');
        $this->getColumn('depot_selection_lots', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('modification_lots_apres_mise_en_ligne', 'ModificationLotsApresMiseEnLigne', 'CHAR', true, null, '0');
        $this->getColumn('modification_lots_apres_mise_en_ligne', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('filtre_bdf_entreprise_valide', 'FiltreBdfEntrepriseValide', 'CHAR', true, null, '0');
        $this->getColumn('filtre_bdf_entreprise_valide', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('affichage_identifiant_fiscale', 'AffichageIdentifiantFiscale', 'CHAR', true, null, '0');
        $this->getColumn('affichage_identifiant_fiscale', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('decision_creer_contrat', 'DecisionCreerContrat', 'CHAR', true, null, '0');
        $this->getColumn('decision_creer_contrat', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('generation_bi_cle', 'GenerationBiCle', 'CHAR', true, null, '0');
        $this->getColumn('generation_bi_cle', false)->setValueSet(array (
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

} // CommonConfigurationPlateformeTableMap
