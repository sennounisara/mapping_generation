<?php



/**
 * This class defines the structure of the 'profil_agent' table.
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
class ProfilAgentTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.ProfilAgentTableMap';

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
        $this->setName('profil_agent');
        $this->setPhpName('ProfilAgent');
        $this->setClassname('ProfilAgent');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('LIBELLE_PROFIL_AGENT', 'LibelleProfilAgent', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_PROFIL', 'IdProfil', 'INTEGER', false, null, null);
        $this->addColumn('ID_ORGANISME', 'IdOrganisme', 'INTEGER', true, null, null);
        $this->addColumn('MENU_MON_COMPTE', 'MenuMonCompte', 'CHAR', true, null, null);
        $this->getColumn('MENU_MON_COMPTE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MENU_DEMANDE_NOUVELLES', 'MenuDemandeNouvelles', 'CHAR', true, null, null);
        $this->getColumn('MENU_DEMANDE_NOUVELLES', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MENU_DEMANDE_RECHERCHE', 'MenuDemandeRecherche', 'CHAR', true, null, null);
        $this->getColumn('MENU_DEMANDE_RECHERCHE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MENU_ADMIN', 'MenuAdmin', 'CHAR', true, null, null);
        $this->getColumn('MENU_ADMIN', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MENU_ADMIN_SERVICES', 'MenuAdminServices', 'CHAR', true, null, null);
        $this->getColumn('MENU_ADMIN_SERVICES', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MENU_ADMIN_UTILISATEURS', 'MenuAdminUtilisateurs', 'CHAR', true, null, null);
        $this->getColumn('MENU_ADMIN_UTILISATEURS', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MENU_RAPPORT', 'MenuRapport', 'CHAR', true, null, null);
        $this->getColumn('MENU_RAPPORT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MENU_RAPPORT_MENSUEL', 'MenuRapportMensuel', 'CHAR', true, null, '0');
        $this->getColumn('MENU_RAPPORT_MENSUEL', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MENU_RAPPORT_GLOBAL', 'MenuRapportGlobal', 'CHAR', true, null, '0');
        $this->getColumn('MENU_RAPPORT_GLOBAL', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MENU_RAPPORT_PERSONNALISE', 'MenuRapportPersonnalise', 'CHAR', true, null, '0');
        $this->getColumn('MENU_RAPPORT_PERSONNALISE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MENU_ADMIN_ENTITE_DEMANDEUR', 'MenuAdminEntiteDemandeur', 'CHAR', true, null, null);
        $this->getColumn('MENU_ADMIN_ENTITE_DEMANDEUR', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MENU_ADMIN_DEMANDEURS', 'MenuAdminDemandeurs', 'CHAR', true, null, null);
        $this->getColumn('MENU_ADMIN_DEMANDEURS', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('HISTORIQUE', 'Historique', 'CHAR', true, null, null);
        $this->getColumn('HISTORIQUE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MENU_DEMANDE_AFFECTEES_ENTITE', 'MenuDemandeAffecteesEntite', 'CHAR', false, null, null);
        $this->getColumn('MENU_DEMANDE_AFFECTEES_ENTITE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MENU_ADMIN_ENTITE', 'MenuAdminEntite', 'CHAR', false, null, null);
        $this->getColumn('MENU_ADMIN_ENTITE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MENU_ADMIN_THEME', 'MenuAdminTheme', 'CHAR', false, null, null);
        $this->getColumn('MENU_ADMIN_THEME', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ETAT_PROFIL', 'EtatProfil', 'CHAR', false, null, null);
        $this->getColumn('ETAT_PROFIL', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ACTION_AFFECTER_ENTITE', 'ActionAffecterEntite', 'CHAR', false, null, null);
        $this->getColumn('ACTION_AFFECTER_ENTITE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ACTION_AFFECTER_AGENT', 'ActionAffecterAgent', 'CHAR', false, null, null);
        $this->getColumn('ACTION_AFFECTER_AGENT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('SUPPRIMER_MODIFIIER_DEMANDE_ENTITE', 'SupprimerModifiierDemandeEntite', 'CHAR', false, null, null);
        $this->getColumn('SUPPRIMER_MODIFIIER_DEMANDE_ENTITE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('SUPPRIMER_MODIFIIER_ALL_DEMANDE', 'SupprimerModifiierAllDemande', 'CHAR', false, null, null);
        $this->getColumn('SUPPRIMER_MODIFIIER_ALL_DEMANDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('TRAITER_TOUTE_DEMANDE', 'TraiterTouteDemande', 'CHAR', true, null, '0');
        $this->getColumn('TRAITER_TOUTE_DEMANDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('DATE_INDICATIVE_REPONSE', 'DateIndicativeReponse', 'CHAR', false, null, '0');
        $this->getColumn('DATE_INDICATIVE_REPONSE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MODIFIER_THEME', 'ModifierTheme', 'CHAR', false, null, '0');
        $this->getColumn('MODIFIER_THEME', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ACTION_RETOURNER_PRECEDENT', 'ActionRetournerPrecedent', 'CHAR', false, null, '0');
        $this->getColumn('ACTION_RETOURNER_PRECEDENT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ACTION_CLASSER_ERRONEE', 'ActionClasserErronee', 'CHAR', false, null, '0');
        $this->getColumn('ACTION_CLASSER_ERRONEE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ACTION_CLASSER_HA', 'ActionClasserHa', 'CHAR', false, null, '0');
        $this->getColumn('ACTION_CLASSER_HA', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ACTION_SOUMETTRE_REPONSE_CIRCUIT', 'ActionSoumettreReponseCircuit', 'CHAR', false, null, '0');
        $this->getColumn('ACTION_SOUMETTRE_REPONSE_CIRCUIT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ACTION_TRANSMETTRE_REPONSE_REQ', 'ActionTransmettreReponseReq', 'CHAR', false, null, '0');
        $this->getColumn('ACTION_TRANSMETTRE_REPONSE_REQ', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ACTION_CLOTURER', 'ActionCloturer', 'CHAR', false, null, '0');
        $this->getColumn('ACTION_CLOTURER', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('SUIVRE_DEMANDE', 'SuivreDemande', 'CHAR', true, null, '0');
        $this->getColumn('SUIVRE_DEMANDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MENU_EN_PROPOSITION', 'MenuEnProposition', 'CHAR', false, null, '0');
        $this->getColumn('MENU_EN_PROPOSITION', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('LIBELLE_PROFIL_AGENT_AR', 'LibelleProfilAgentAr', 'VARCHAR', false, 255, null);
        $this->addColumn('ACTION_PARTAGER_DEMANDE', 'ActionPartagerDemande', 'CHAR', false, null, '0');
        $this->getColumn('ACTION_PARTAGER_DEMANDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MENU_DEMANDE_PARTAGEES_ENTITE', 'MenuDemandePartageesEntite', 'CHAR', false, null, '0');
        $this->getColumn('MENU_DEMANDE_PARTAGEES_ENTITE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('HABILITATION_GESTION_TACHE', 'HabilitationGestionTache', 'CHAR', true, null, '0');
        $this->getColumn('HABILITATION_GESTION_TACHE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ACTION_AFFECTER_DEMANDE_CLOTURE', 'ActionAffecterDemandeCloture', 'CHAR', true, null, '0');
        $this->getColumn('ACTION_AFFECTER_DEMANDE_CLOTURE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBILITE_DEMANDE_RECU', 'VisibiliteDemandeRecu', 'CHAR', true, null, '0');
        $this->getColumn('VISIBILITE_DEMANDE_RECU', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MENU_MINISTERES', 'MenuMinisteres', 'CHAR', true, null, '0');
        $this->getColumn('MENU_MINISTERES', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('DEMANDES_A_SUIVRE', 'DemandesASuivre', 'CHAR', true, null, '0');
        $this->getColumn('DEMANDES_A_SUIVRE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('GESTION_INTERIM', 'GestionInterim', 'CHAR', true, null, '0');
        $this->getColumn('GESTION_INTERIM', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('AFFICHAGE_SIMPLIFIE', 'AffichageSimplifie', 'CHAR', true, null, '0');
        $this->getColumn('AFFICHAGE_SIMPLIFIE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('SUPPRIMER_TOUS', 'SupprimerTous', 'CHAR', true, null, '0');
        $this->getColumn('SUPPRIMER_TOUS', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('AJOUT_DEMANDE', 'AjoutDemande', 'CHAR', true, null, '1');
        $this->getColumn('AJOUT_DEMANDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('TYPE_AJOUT_DEMANDE', 'TypeAjoutDemande', 'VARCHAR', false, 255, null);
        $this->addColumn('AJOUT_DEMANDE_ENTRANTE', 'AjoutDemandeEntrante', 'CHAR', true, null, '0');
        $this->getColumn('AJOUT_DEMANDE_ENTRANTE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('AJOUT_DEMANDE_SORTANTE', 'AjoutDemandeSortante', 'CHAR', true, null, '0');
        $this->getColumn('AJOUT_DEMANDE_SORTANTE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('AJOUT_DEMANDE_SORTANT', 'AjoutDemandeSortant', 'CHAR', true, null, '0');
        $this->getColumn('AJOUT_DEMANDE_SORTANT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('AJOUT_DEMANDE_INTERNE', 'AjoutDemandeInterne', 'CHAR', true, null, '0');
        $this->getColumn('AJOUT_DEMANDE_INTERNE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('AJOUT_DEMANDE_INTRAGROUPE', 'AjoutDemandeIntragroupe', 'CHAR', true, null, '0');
        $this->getColumn('AJOUT_DEMANDE_INTRAGROUPE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MODIFICATION_CIRCUIT_VALIDATION_DEMANDE', 'ModificationCircuitValidationDemande', 'CHAR', false, null, null);
        $this->getColumn('MODIFICATION_CIRCUIT_VALIDATION_DEMANDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('TRANSFERT_DEMANDE', 'TransfertDemande', 'CHAR', true, null, '0');
        $this->getColumn('TRANSFERT_DEMANDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISUALISER_ECHANGE', 'VisualiserEchange', 'CHAR', true, null, '0');
        $this->getColumn('VISUALISER_ECHANGE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('CLOTURE_TRANSVERSE', 'ClotureTransverse', 'CHAR', false, null, null);
        $this->getColumn('CLOTURE_TRANSVERSE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ECHANGE_HORS_SYS', 'EchangeHorsSys', 'CHAR', true, null, '1');
        $this->getColumn('ECHANGE_HORS_SYS', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ECHANGE_REQUERANT', 'EchangeRequerant', 'CHAR', true, null, '1');
        $this->getColumn('ECHANGE_REQUERANT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('AFFICHAGE_REPONSE_FINAL', 'AffichageReponseFinal', 'CHAR', true, null, '1');
        $this->getColumn('AFFICHAGE_REPONSE_FINAL', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('RETIRER_AFFECTATION', 'RetirerAffectation', 'CHAR', true, null, '0');
        $this->getColumn('RETIRER_AFFECTATION', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('AFFECTATION_EXTERNE', 'AffectationExterne', 'CHAR', true, null, '0');
        $this->getColumn('AFFECTATION_EXTERNE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('COMPLEMENT_DEMANDE', 'ComplementDemande', 'CHAR', true, null, '0');
        $this->getColumn('COMPLEMENT_DEMANDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ENCOPIE_DEMANDE', 'EncopieDemande', 'CHAR', true, null, '0');
        $this->getColumn('ENCOPIE_DEMANDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MODIFIER_DEMANDE', 'ModifierDemande', 'CHAR', true, null, '0');
        $this->getColumn('MODIFIER_DEMANDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('SUPPRIMER_DEMANDE', 'SupprimerDemande', 'CHAR', true, null, '0');
        $this->getColumn('SUPPRIMER_DEMANDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBILITE_MAIL_TEL_BO', 'VisibiliteMailTelBo', 'CHAR', true, null, '1');
        $this->getColumn('VISIBILITE_MAIL_TEL_BO', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ACCES_AUDIO_CA', 'AccesAudioCa', 'CHAR', true, null, '0');
        $this->getColumn('ACCES_AUDIO_CA', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('PROLONGER_DUREE_TRAITEMENT', 'ProlongerDureeTraitement', 'CHAR', true, null, '0');
        $this->getColumn('PROLONGER_DUREE_TRAITEMENT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MODIF_DEMANDE_AFFECTE', 'ModifDemandeAffecte', 'CHAR', true, null, '0');
        $this->getColumn('MODIF_DEMANDE_AFFECTE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('TABLEAU_BORD_SUPERVISION', 'TableauBordSupervision', 'CHAR', true, null, '0');
        $this->getColumn('TABLEAU_BORD_SUPERVISION', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('STATISTIQUE_SUPERVISION', 'StatistiqueSupervision', 'CHAR', true, null, '0');
        $this->getColumn('STATISTIQUE_SUPERVISION', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('SUIVI_SUPERVISION', 'SuiviSupervision', 'CHAR', true, null, '0');
        $this->getColumn('SUIVI_SUPERVISION', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('FORCE_CLOTURE', 'ForceCloture', 'CHAR', true, null, '0');
        $this->getColumn('FORCE_CLOTURE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('AFFECTER_GROUPE', 'AffecterGroupe', 'CHAR', true, null, '0');
        $this->getColumn('AFFECTER_GROUPE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('HISTORIQUE_CONSULTATION', 'HistoriqueConsultation', 'CHAR', true, null, '0');
        $this->getColumn('HISTORIQUE_CONSULTATION', false)->setValueSet(array (
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

} // ProfilAgentTableMap
