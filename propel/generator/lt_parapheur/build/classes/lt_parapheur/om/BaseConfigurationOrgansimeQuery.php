<?php


/**
 * Base class that represents a query for the 'configuration_organsime' table.
 *
 * 
 *
 * @method ConfigurationOrgansimeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method ConfigurationOrgansimeQuery orderByNiveauLieu($order = Criteria::ASC) Order by the niveau_lieu column
 * @method ConfigurationOrgansimeQuery orderByValeurDefautPays($order = Criteria::ASC) Order by the valeur_defaut_pays column
 * @method ConfigurationOrgansimeQuery orderByValeurDefautRegion($order = Criteria::ASC) Order by the valeur_defaut_region column
 * @method ConfigurationOrgansimeQuery orderByValeurDefautProvince($order = Criteria::ASC) Order by the valeur_defaut_province column
 * @method ConfigurationOrgansimeQuery orderByValeurParDefautCommune($order = Criteria::ASC) Order by the valeur_par_defaut_commune column
 * @method ConfigurationOrgansimeQuery orderByModeAffectationDemande($order = Criteria::ASC) Order by the mode_affectation_demande column
 * @method ConfigurationOrgansimeQuery orderByModuleEntiteLieLieu($order = Criteria::ASC) Order by the module_entite_lie_lieu column
 * @method ConfigurationOrgansimeQuery orderByNbrJourDelaiTraitement($order = Criteria::ASC) Order by the NBR_JOUR_DELAI_TRAITEMENT column
 * @method ConfigurationOrgansimeQuery orderByObligationLieuDemande($order = Criteria::ASC) Order by the OBLIGATION_LIEU_DEMANDE column
 * @method ConfigurationOrgansimeQuery orderByModuleGoogleMaps($order = Criteria::ASC) Order by the MODULE_GOOGLE_MAPS column
 * @method ConfigurationOrgansimeQuery orderByVisibiliteChampLocalisation($order = Criteria::ASC) Order by the VISIBILITE_CHAMP_LOCALISATION column
 * @method ConfigurationOrgansimeQuery orderByEchangeWebService($order = Criteria::ASC) Order by the ECHANGE_WEB_SERVICE column
 * @method ConfigurationOrgansimeQuery orderByIdEntite($order = Criteria::ASC) Order by the ID_ENTITE column
 * @method ConfigurationOrgansimeQuery orderByObligationNomPrenomRequerant($order = Criteria::ASC) Order by the OBLIGATION_NOM_PRENOM_REQUERANT column
 * @method ConfigurationOrgansimeQuery orderByObligationNomOrganismeRequerant($order = Criteria::ASC) Order by the OBLIGATION_NOM_ORGANISME_REQUERANT column
 * @method ConfigurationOrgansimeQuery orderByObligationRegistreCommerceRequerant($order = Criteria::ASC) Order by the OBLIGATION_REGISTRE_COMMERCE_REQUERANT column
 * @method ConfigurationOrgansimeQuery orderByObligationTelephoneRequerant($order = Criteria::ASC) Order by the OBLIGATION_TELEPHONE_REQUERANT column
 * @method ConfigurationOrgansimeQuery orderByVisibiliteRegistreCommerceRequerant($order = Criteria::ASC) Order by the VISIBILITE_REGISTRE_COMMERCE_REQUERANT column
 * @method ConfigurationOrgansimeQuery orderByVisibiliteIdentifiantFiscal($order = Criteria::ASC) Order by the VISIBILITE_IDENTIFIANT_FISCAL column
 * @method ConfigurationOrgansimeQuery orderByObligationIdentifiantFiscal($order = Criteria::ASC) Order by the OBLIGATION_IDENTIFIANT_FISCAL column
 * @method ConfigurationOrgansimeQuery orderByDelaiClotureDemande($order = Criteria::ASC) Order by the DELAI_CLOTURE_DEMANDE column
 * @method ConfigurationOrgansimeQuery orderByNotificationAvantDateReponse($order = Criteria::ASC) Order by the NOTIFICATION_AVANT_DATE_REPONSE column
 * @method ConfigurationOrgansimeQuery orderByBorneTraitementDemande($order = Criteria::ASC) Order by the BORNE_TRAITEMENT_DEMANDE column
 * @method ConfigurationOrgansimeQuery orderByRegleNumeroDemandeEntrant($order = Criteria::ASC) Order by the REGLE_NUMERO_DEMANDE_ENTRANT column
 * @method ConfigurationOrgansimeQuery orderByRegleNumeroDemandeSortant($order = Criteria::ASC) Order by the REGLE_NUMERO_DEMANDE_SORTANT column
 * @method ConfigurationOrgansimeQuery orderByRegleNumeroDemandeInterne($order = Criteria::ASC) Order by the REGLE_NUMERO_DEMANDE_INTERNE column
 * @method ConfigurationOrgansimeQuery orderByVisibiliteBlocReponseObligatoire($order = Criteria::ASC) Order by the VISIBILITE_BLOC_REPONSE_OBLIGATOIRE column
 * @method ConfigurationOrgansimeQuery orderByVisibiliteBlocLieuConcerne($order = Criteria::ASC) Order by the VISIBILITE_BLOC_LIEU_CONCERNE column
 * @method ConfigurationOrgansimeQuery orderByObligationMessageDemande($order = Criteria::ASC) Order by the OBLIGATION_MESSAGE_DEMANDE column
 * @method ConfigurationOrgansimeQuery orderByObligationEmailDemandeur($order = Criteria::ASC) Order by the OBLIGATION_EMAIL_DEMANDEUR column
 * @method ConfigurationOrgansimeQuery orderByObligationSousTheme($order = Criteria::ASC) Order by the OBLIGATION_SOUS_THEME column
 * @method ConfigurationOrgansimeQuery orderByVisiblitieConditionUtilisation($order = Criteria::ASC) Order by the VISIBLITIE_CONDITION_UTILISATION column
 * @method ConfigurationOrgansimeQuery orderByConditionUtilisationAr($order = Criteria::ASC) Order by the CONDITION_UTILISATION_AR column
 * @method ConfigurationOrgansimeQuery orderByConditionUtilisationFr($order = Criteria::ASC) Order by the CONDITION_UTILISATION_FR column
 * @method ConfigurationOrgansimeQuery orderByGestionDemandeurParEntite($order = Criteria::ASC) Order by the GESTION_DEMANDEUR_PAR_ENTITE column
 * @method ConfigurationOrgansimeQuery orderByValeurDefautTypeDemande($order = Criteria::ASC) Order by the VALEUR_DEFAUT_TYPE_DEMANDE column
 * @method ConfigurationOrgansimeQuery orderByValeurDefautReponseObligatoire($order = Criteria::ASC) Order by the VALEUR_DEFAUT_REPONSE_OBLIGATOIRE column
 * @method ConfigurationOrgansimeQuery orderByAccesExtranet($order = Criteria::ASC) Order by the ACCES_EXTRANET column
 * @method ConfigurationOrgansimeQuery orderByLangueParDefautExtranet($order = Criteria::ASC) Order by the LANGUE_PAR_DEFAUT_EXTRANET column
 * @method ConfigurationOrgansimeQuery orderByGoogleAnalytics($order = Criteria::ASC) Order by the GOOGLE_ANALYTICS column
 * @method ConfigurationOrgansimeQuery orderByChiffrement($order = Criteria::ASC) Order by the CHIFFREMENT column
 * @method ConfigurationOrgansimeQuery orderByIdEntiteCentrale($order = Criteria::ASC) Order by the ID_ENTITE_CENTRALE column
 * @method ConfigurationOrgansimeQuery orderByServiceNotificationSms($order = Criteria::ASC) Order by the SERVICE_NOTIFICATION_SMS column
 * @method ConfigurationOrgansimeQuery orderByLoginServiceSms($order = Criteria::ASC) Order by the LOGIN_SERVICE_SMS column
 * @method ConfigurationOrgansimeQuery orderByPassServiceSms($order = Criteria::ASC) Order by the PASS_SERVICE_SMS column
 * @method ConfigurationOrgansimeQuery orderByCodeEnvoiSms($order = Criteria::ASC) Order by the CODE_ENVOI_SMS column
 * @method ConfigurationOrgansimeQuery orderByUrlServiceSms($order = Criteria::ASC) Order by the URL_SERVICE_SMS column
 * @method ConfigurationOrgansimeQuery orderByCircuitValidation($order = Criteria::ASC) Order by the CIRCUIT_VALIDATION column
 * @method ConfigurationOrgansimeQuery orderByVisibiliteMessageDemande($order = Criteria::ASC) Order by the VISIBILITE_MESSAGE_DEMANDE column
 * @method ConfigurationOrgansimeQuery orderByCodeSignataireCertificat($order = Criteria::ASC) Order by the CODE_SIGNATAIRE_CERTIFICAT column
 * @method ConfigurationOrgansimeQuery orderByAccesStatistiques($order = Criteria::ASC) Order by the ACCES_STATISTIQUES column
 * @method ConfigurationOrgansimeQuery orderByWebserviceDemande($order = Criteria::ASC) Order by the WEBSERVICE_DEMANDE column
 * @method ConfigurationOrgansimeQuery orderByUrlWebserviceDemande($order = Criteria::ASC) Order by the URL_WEBSERVICE_DEMANDE column
 * @method ConfigurationOrgansimeQuery orderByJetonWebservice($order = Criteria::ASC) Order by the JETON_WEBSERVICE column
 * @method ConfigurationOrgansimeQuery orderByIdentifiantEntiteReception($order = Criteria::ASC) Order by the IDENTIFIANT_ENTITE_RECEPTION column
 * @method ConfigurationOrgansimeQuery orderByIdentifiantSousTheme($order = Criteria::ASC) Order by the IDENTIFIANT_SOUS_THEME column
 * @method ConfigurationOrgansimeQuery orderByScanner($order = Criteria::ASC) Order by the SCANNER column
 * @method ConfigurationOrgansimeQuery orderByActivationAuthSocle($order = Criteria::ASC) Order by the ACTIVATION_AUTH_SOCLE column
 * @method ConfigurationOrgansimeQuery orderByAffichageEnregistrerGenererNumero($order = Criteria::ASC) Order by the AFFICHAGE_ENREGISTRER_GENERER_NUMERO column
 * @method ConfigurationOrgansimeQuery orderByJetonOrgService($order = Criteria::ASC) Order by the JETON_ORG_SERVICE column
 * @method ConfigurationOrgansimeQuery orderByOngletDepuis1($order = Criteria::ASC) Order by the ONGLET_DEPUIS_1 column
 * @method ConfigurationOrgansimeQuery orderByOngletDepuis2($order = Criteria::ASC) Order by the ONGLET_DEPUIS_2 column
 * @method ConfigurationOrgansimeQuery orderByNombreReouverture($order = Criteria::ASC) Order by the NOMBRE_REOUVERTURE column
 * @method ConfigurationOrgansimeQuery orderByCentreAppel($order = Criteria::ASC) Order by the CENTRE_APPEL column
 * @method ConfigurationOrgansimeQuery orderByUrlWsCa($order = Criteria::ASC) Order by the URL_WS_CA column
 * @method ConfigurationOrgansimeQuery orderByAuthentificationLdap($order = Criteria::ASC) Order by the AUTHENTIFICATION_LDAP column
 * @method ConfigurationOrgansimeQuery orderByIpLdap($order = Criteria::ASC) Order by the IP_LDAP column
 * @method ConfigurationOrgansimeQuery orderByBaseDnLdap($order = Criteria::ASC) Order by the BASE_DN_LDAP column
 * @method ConfigurationOrgansimeQuery orderByUserLdap($order = Criteria::ASC) Order by the USER_LDAP column
 * @method ConfigurationOrgansimeQuery orderByPasswordLdap($order = Criteria::ASC) Order by the PASSWORD_LDAP column
 * @method ConfigurationOrgansimeQuery orderBySchemaLdap($order = Criteria::ASC) Order by the SCHEMA_LDAP column
 * @method ConfigurationOrgansimeQuery orderByPortLdap($order = Criteria::ASC) Order by the PORT_LDAP column
 * @method ConfigurationOrgansimeQuery orderByProlongation($order = Criteria::ASC) Order by the PROLONGATION column
 * @method ConfigurationOrgansimeQuery orderByDureeProlongation($order = Criteria::ASC) Order by the DUREE_PROLONGATION column
 * @method ConfigurationOrgansimeQuery orderByOrganismeParametrage($order = Criteria::ASC) Order by the ORGANISME_PARAMETRAGE column
 * @method ConfigurationOrgansimeQuery orderByOrganismeGestionUtilisateurs($order = Criteria::ASC) Order by the ORGANISME_GESTION_UTILISATEURS column
 * @method ConfigurationOrgansimeQuery orderByTypeGestionUtilisateur($order = Criteria::ASC) Order by the TYPE_GESTION_UTILISATEUR column
 * @method ConfigurationOrgansimeQuery orderByMultiAffectation($order = Criteria::ASC) Order by the MULTI_AFFECTATION column
 * @method ConfigurationOrgansimeQuery orderByTauxEcheance($order = Criteria::ASC) Order by the TAUX_ECHEANCE column
 * @method ConfigurationOrgansimeQuery orderByReponseAffectationExterne($order = Criteria::ASC) Order by the REPONSE_AFFECTATION_EXTERNE column
 * @method ConfigurationOrgansimeQuery orderByIncrementConfidentiel($order = Criteria::ASC) Order by the INCREMENT_CONFIDENTIEL column
 * @method ConfigurationOrgansimeQuery orderByObligationEmetteurCourrierEntrant($order = Criteria::ASC) Order by the OBLIGATION_EMETTEUR_COURRIER_ENTRANT column
 * @method ConfigurationOrgansimeQuery orderByObligationEmetteurCourrierInterne($order = Criteria::ASC) Order by the OBLIGATION_EMETTEUR_COURRIER_INTERNE column
 * @method ConfigurationOrgansimeQuery orderByObligationDestinataireCourrierSortant($order = Criteria::ASC) Order by the OBLIGATION_DESTINATAIRE_COURRIER_SORTANT column
 * @method ConfigurationOrgansimeQuery orderByObligationDestinataireMentionneCourrierEntrant($order = Criteria::ASC) Order by the OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT column
 * @method ConfigurationOrgansimeQuery orderByObligationDestinataireCourrierInterne($order = Criteria::ASC) Order by the OBLIGATION_DESTINATAIRE_COURRIER_INTERNE column
 * @method ConfigurationOrgansimeQuery orderByObligationObjet($order = Criteria::ASC) Order by the OBLIGATION_OBJET column
 * @method ConfigurationOrgansimeQuery orderByObligationSignataire($order = Criteria::ASC) Order by the OBLIGATION_SIGNATAIRE column
 * @method ConfigurationOrgansimeQuery orderByGestionDemandeurs($order = Criteria::ASC) Order by the GESTION_DEMANDEURS column
 * @method ConfigurationOrgansimeQuery orderByNumeroFournisseur($order = Criteria::ASC) Order by the NUMERO_FOURNISSEUR column
 * @method ConfigurationOrgansimeQuery orderByTypeDelai($order = Criteria::ASC) Order by the TYPE_DELAI column
 * @method ConfigurationOrgansimeQuery orderByNumProvisoire($order = Criteria::ASC) Order by the NUM_PROVISOIRE column
 *
 * @method ConfigurationOrgansimeQuery groupById() Group by the id column
 * @method ConfigurationOrgansimeQuery groupByNiveauLieu() Group by the niveau_lieu column
 * @method ConfigurationOrgansimeQuery groupByValeurDefautPays() Group by the valeur_defaut_pays column
 * @method ConfigurationOrgansimeQuery groupByValeurDefautRegion() Group by the valeur_defaut_region column
 * @method ConfigurationOrgansimeQuery groupByValeurDefautProvince() Group by the valeur_defaut_province column
 * @method ConfigurationOrgansimeQuery groupByValeurParDefautCommune() Group by the valeur_par_defaut_commune column
 * @method ConfigurationOrgansimeQuery groupByModeAffectationDemande() Group by the mode_affectation_demande column
 * @method ConfigurationOrgansimeQuery groupByModuleEntiteLieLieu() Group by the module_entite_lie_lieu column
 * @method ConfigurationOrgansimeQuery groupByNbrJourDelaiTraitement() Group by the NBR_JOUR_DELAI_TRAITEMENT column
 * @method ConfigurationOrgansimeQuery groupByObligationLieuDemande() Group by the OBLIGATION_LIEU_DEMANDE column
 * @method ConfigurationOrgansimeQuery groupByModuleGoogleMaps() Group by the MODULE_GOOGLE_MAPS column
 * @method ConfigurationOrgansimeQuery groupByVisibiliteChampLocalisation() Group by the VISIBILITE_CHAMP_LOCALISATION column
 * @method ConfigurationOrgansimeQuery groupByEchangeWebService() Group by the ECHANGE_WEB_SERVICE column
 * @method ConfigurationOrgansimeQuery groupByIdEntite() Group by the ID_ENTITE column
 * @method ConfigurationOrgansimeQuery groupByObligationNomPrenomRequerant() Group by the OBLIGATION_NOM_PRENOM_REQUERANT column
 * @method ConfigurationOrgansimeQuery groupByObligationNomOrganismeRequerant() Group by the OBLIGATION_NOM_ORGANISME_REQUERANT column
 * @method ConfigurationOrgansimeQuery groupByObligationRegistreCommerceRequerant() Group by the OBLIGATION_REGISTRE_COMMERCE_REQUERANT column
 * @method ConfigurationOrgansimeQuery groupByObligationTelephoneRequerant() Group by the OBLIGATION_TELEPHONE_REQUERANT column
 * @method ConfigurationOrgansimeQuery groupByVisibiliteRegistreCommerceRequerant() Group by the VISIBILITE_REGISTRE_COMMERCE_REQUERANT column
 * @method ConfigurationOrgansimeQuery groupByVisibiliteIdentifiantFiscal() Group by the VISIBILITE_IDENTIFIANT_FISCAL column
 * @method ConfigurationOrgansimeQuery groupByObligationIdentifiantFiscal() Group by the OBLIGATION_IDENTIFIANT_FISCAL column
 * @method ConfigurationOrgansimeQuery groupByDelaiClotureDemande() Group by the DELAI_CLOTURE_DEMANDE column
 * @method ConfigurationOrgansimeQuery groupByNotificationAvantDateReponse() Group by the NOTIFICATION_AVANT_DATE_REPONSE column
 * @method ConfigurationOrgansimeQuery groupByBorneTraitementDemande() Group by the BORNE_TRAITEMENT_DEMANDE column
 * @method ConfigurationOrgansimeQuery groupByRegleNumeroDemandeEntrant() Group by the REGLE_NUMERO_DEMANDE_ENTRANT column
 * @method ConfigurationOrgansimeQuery groupByRegleNumeroDemandeSortant() Group by the REGLE_NUMERO_DEMANDE_SORTANT column
 * @method ConfigurationOrgansimeQuery groupByRegleNumeroDemandeInterne() Group by the REGLE_NUMERO_DEMANDE_INTERNE column
 * @method ConfigurationOrgansimeQuery groupByVisibiliteBlocReponseObligatoire() Group by the VISIBILITE_BLOC_REPONSE_OBLIGATOIRE column
 * @method ConfigurationOrgansimeQuery groupByVisibiliteBlocLieuConcerne() Group by the VISIBILITE_BLOC_LIEU_CONCERNE column
 * @method ConfigurationOrgansimeQuery groupByObligationMessageDemande() Group by the OBLIGATION_MESSAGE_DEMANDE column
 * @method ConfigurationOrgansimeQuery groupByObligationEmailDemandeur() Group by the OBLIGATION_EMAIL_DEMANDEUR column
 * @method ConfigurationOrgansimeQuery groupByObligationSousTheme() Group by the OBLIGATION_SOUS_THEME column
 * @method ConfigurationOrgansimeQuery groupByVisiblitieConditionUtilisation() Group by the VISIBLITIE_CONDITION_UTILISATION column
 * @method ConfigurationOrgansimeQuery groupByConditionUtilisationAr() Group by the CONDITION_UTILISATION_AR column
 * @method ConfigurationOrgansimeQuery groupByConditionUtilisationFr() Group by the CONDITION_UTILISATION_FR column
 * @method ConfigurationOrgansimeQuery groupByGestionDemandeurParEntite() Group by the GESTION_DEMANDEUR_PAR_ENTITE column
 * @method ConfigurationOrgansimeQuery groupByValeurDefautTypeDemande() Group by the VALEUR_DEFAUT_TYPE_DEMANDE column
 * @method ConfigurationOrgansimeQuery groupByValeurDefautReponseObligatoire() Group by the VALEUR_DEFAUT_REPONSE_OBLIGATOIRE column
 * @method ConfigurationOrgansimeQuery groupByAccesExtranet() Group by the ACCES_EXTRANET column
 * @method ConfigurationOrgansimeQuery groupByLangueParDefautExtranet() Group by the LANGUE_PAR_DEFAUT_EXTRANET column
 * @method ConfigurationOrgansimeQuery groupByGoogleAnalytics() Group by the GOOGLE_ANALYTICS column
 * @method ConfigurationOrgansimeQuery groupByChiffrement() Group by the CHIFFREMENT column
 * @method ConfigurationOrgansimeQuery groupByIdEntiteCentrale() Group by the ID_ENTITE_CENTRALE column
 * @method ConfigurationOrgansimeQuery groupByServiceNotificationSms() Group by the SERVICE_NOTIFICATION_SMS column
 * @method ConfigurationOrgansimeQuery groupByLoginServiceSms() Group by the LOGIN_SERVICE_SMS column
 * @method ConfigurationOrgansimeQuery groupByPassServiceSms() Group by the PASS_SERVICE_SMS column
 * @method ConfigurationOrgansimeQuery groupByCodeEnvoiSms() Group by the CODE_ENVOI_SMS column
 * @method ConfigurationOrgansimeQuery groupByUrlServiceSms() Group by the URL_SERVICE_SMS column
 * @method ConfigurationOrgansimeQuery groupByCircuitValidation() Group by the CIRCUIT_VALIDATION column
 * @method ConfigurationOrgansimeQuery groupByVisibiliteMessageDemande() Group by the VISIBILITE_MESSAGE_DEMANDE column
 * @method ConfigurationOrgansimeQuery groupByCodeSignataireCertificat() Group by the CODE_SIGNATAIRE_CERTIFICAT column
 * @method ConfigurationOrgansimeQuery groupByAccesStatistiques() Group by the ACCES_STATISTIQUES column
 * @method ConfigurationOrgansimeQuery groupByWebserviceDemande() Group by the WEBSERVICE_DEMANDE column
 * @method ConfigurationOrgansimeQuery groupByUrlWebserviceDemande() Group by the URL_WEBSERVICE_DEMANDE column
 * @method ConfigurationOrgansimeQuery groupByJetonWebservice() Group by the JETON_WEBSERVICE column
 * @method ConfigurationOrgansimeQuery groupByIdentifiantEntiteReception() Group by the IDENTIFIANT_ENTITE_RECEPTION column
 * @method ConfigurationOrgansimeQuery groupByIdentifiantSousTheme() Group by the IDENTIFIANT_SOUS_THEME column
 * @method ConfigurationOrgansimeQuery groupByScanner() Group by the SCANNER column
 * @method ConfigurationOrgansimeQuery groupByActivationAuthSocle() Group by the ACTIVATION_AUTH_SOCLE column
 * @method ConfigurationOrgansimeQuery groupByAffichageEnregistrerGenererNumero() Group by the AFFICHAGE_ENREGISTRER_GENERER_NUMERO column
 * @method ConfigurationOrgansimeQuery groupByJetonOrgService() Group by the JETON_ORG_SERVICE column
 * @method ConfigurationOrgansimeQuery groupByOngletDepuis1() Group by the ONGLET_DEPUIS_1 column
 * @method ConfigurationOrgansimeQuery groupByOngletDepuis2() Group by the ONGLET_DEPUIS_2 column
 * @method ConfigurationOrgansimeQuery groupByNombreReouverture() Group by the NOMBRE_REOUVERTURE column
 * @method ConfigurationOrgansimeQuery groupByCentreAppel() Group by the CENTRE_APPEL column
 * @method ConfigurationOrgansimeQuery groupByUrlWsCa() Group by the URL_WS_CA column
 * @method ConfigurationOrgansimeQuery groupByAuthentificationLdap() Group by the AUTHENTIFICATION_LDAP column
 * @method ConfigurationOrgansimeQuery groupByIpLdap() Group by the IP_LDAP column
 * @method ConfigurationOrgansimeQuery groupByBaseDnLdap() Group by the BASE_DN_LDAP column
 * @method ConfigurationOrgansimeQuery groupByUserLdap() Group by the USER_LDAP column
 * @method ConfigurationOrgansimeQuery groupByPasswordLdap() Group by the PASSWORD_LDAP column
 * @method ConfigurationOrgansimeQuery groupBySchemaLdap() Group by the SCHEMA_LDAP column
 * @method ConfigurationOrgansimeQuery groupByPortLdap() Group by the PORT_LDAP column
 * @method ConfigurationOrgansimeQuery groupByProlongation() Group by the PROLONGATION column
 * @method ConfigurationOrgansimeQuery groupByDureeProlongation() Group by the DUREE_PROLONGATION column
 * @method ConfigurationOrgansimeQuery groupByOrganismeParametrage() Group by the ORGANISME_PARAMETRAGE column
 * @method ConfigurationOrgansimeQuery groupByOrganismeGestionUtilisateurs() Group by the ORGANISME_GESTION_UTILISATEURS column
 * @method ConfigurationOrgansimeQuery groupByTypeGestionUtilisateur() Group by the TYPE_GESTION_UTILISATEUR column
 * @method ConfigurationOrgansimeQuery groupByMultiAffectation() Group by the MULTI_AFFECTATION column
 * @method ConfigurationOrgansimeQuery groupByTauxEcheance() Group by the TAUX_ECHEANCE column
 * @method ConfigurationOrgansimeQuery groupByReponseAffectationExterne() Group by the REPONSE_AFFECTATION_EXTERNE column
 * @method ConfigurationOrgansimeQuery groupByIncrementConfidentiel() Group by the INCREMENT_CONFIDENTIEL column
 * @method ConfigurationOrgansimeQuery groupByObligationEmetteurCourrierEntrant() Group by the OBLIGATION_EMETTEUR_COURRIER_ENTRANT column
 * @method ConfigurationOrgansimeQuery groupByObligationEmetteurCourrierInterne() Group by the OBLIGATION_EMETTEUR_COURRIER_INTERNE column
 * @method ConfigurationOrgansimeQuery groupByObligationDestinataireCourrierSortant() Group by the OBLIGATION_DESTINATAIRE_COURRIER_SORTANT column
 * @method ConfigurationOrgansimeQuery groupByObligationDestinataireMentionneCourrierEntrant() Group by the OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT column
 * @method ConfigurationOrgansimeQuery groupByObligationDestinataireCourrierInterne() Group by the OBLIGATION_DESTINATAIRE_COURRIER_INTERNE column
 * @method ConfigurationOrgansimeQuery groupByObligationObjet() Group by the OBLIGATION_OBJET column
 * @method ConfigurationOrgansimeQuery groupByObligationSignataire() Group by the OBLIGATION_SIGNATAIRE column
 * @method ConfigurationOrgansimeQuery groupByGestionDemandeurs() Group by the GESTION_DEMANDEURS column
 * @method ConfigurationOrgansimeQuery groupByNumeroFournisseur() Group by the NUMERO_FOURNISSEUR column
 * @method ConfigurationOrgansimeQuery groupByTypeDelai() Group by the TYPE_DELAI column
 * @method ConfigurationOrgansimeQuery groupByNumProvisoire() Group by the NUM_PROVISOIRE column
 *
 * @method ConfigurationOrgansimeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ConfigurationOrgansimeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ConfigurationOrgansimeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ConfigurationOrgansime findOne(PropelPDO $con = null) Return the first ConfigurationOrgansime matching the query
 * @method ConfigurationOrgansime findOneOrCreate(PropelPDO $con = null) Return the first ConfigurationOrgansime matching the query, or a new ConfigurationOrgansime object populated from the query conditions when no match is found
 *
 * @method ConfigurationOrgansime findOneByNiveauLieu(int $niveau_lieu) Return the first ConfigurationOrgansime filtered by the niveau_lieu column
 * @method ConfigurationOrgansime findOneByValeurDefautPays(int $valeur_defaut_pays) Return the first ConfigurationOrgansime filtered by the valeur_defaut_pays column
 * @method ConfigurationOrgansime findOneByValeurDefautRegion(int $valeur_defaut_region) Return the first ConfigurationOrgansime filtered by the valeur_defaut_region column
 * @method ConfigurationOrgansime findOneByValeurDefautProvince(int $valeur_defaut_province) Return the first ConfigurationOrgansime filtered by the valeur_defaut_province column
 * @method ConfigurationOrgansime findOneByValeurParDefautCommune(int $valeur_par_defaut_commune) Return the first ConfigurationOrgansime filtered by the valeur_par_defaut_commune column
 * @method ConfigurationOrgansime findOneByModeAffectationDemande(string $mode_affectation_demande) Return the first ConfigurationOrgansime filtered by the mode_affectation_demande column
 * @method ConfigurationOrgansime findOneByModuleEntiteLieLieu(string $module_entite_lie_lieu) Return the first ConfigurationOrgansime filtered by the module_entite_lie_lieu column
 * @method ConfigurationOrgansime findOneByNbrJourDelaiTraitement(int $NBR_JOUR_DELAI_TRAITEMENT) Return the first ConfigurationOrgansime filtered by the NBR_JOUR_DELAI_TRAITEMENT column
 * @method ConfigurationOrgansime findOneByObligationLieuDemande(string $OBLIGATION_LIEU_DEMANDE) Return the first ConfigurationOrgansime filtered by the OBLIGATION_LIEU_DEMANDE column
 * @method ConfigurationOrgansime findOneByModuleGoogleMaps(string $MODULE_GOOGLE_MAPS) Return the first ConfigurationOrgansime filtered by the MODULE_GOOGLE_MAPS column
 * @method ConfigurationOrgansime findOneByVisibiliteChampLocalisation(string $VISIBILITE_CHAMP_LOCALISATION) Return the first ConfigurationOrgansime filtered by the VISIBILITE_CHAMP_LOCALISATION column
 * @method ConfigurationOrgansime findOneByEchangeWebService(string $ECHANGE_WEB_SERVICE) Return the first ConfigurationOrgansime filtered by the ECHANGE_WEB_SERVICE column
 * @method ConfigurationOrgansime findOneByIdEntite(int $ID_ENTITE) Return the first ConfigurationOrgansime filtered by the ID_ENTITE column
 * @method ConfigurationOrgansime findOneByObligationNomPrenomRequerant(string $OBLIGATION_NOM_PRENOM_REQUERANT) Return the first ConfigurationOrgansime filtered by the OBLIGATION_NOM_PRENOM_REQUERANT column
 * @method ConfigurationOrgansime findOneByObligationNomOrganismeRequerant(string $OBLIGATION_NOM_ORGANISME_REQUERANT) Return the first ConfigurationOrgansime filtered by the OBLIGATION_NOM_ORGANISME_REQUERANT column
 * @method ConfigurationOrgansime findOneByObligationRegistreCommerceRequerant(string $OBLIGATION_REGISTRE_COMMERCE_REQUERANT) Return the first ConfigurationOrgansime filtered by the OBLIGATION_REGISTRE_COMMERCE_REQUERANT column
 * @method ConfigurationOrgansime findOneByObligationTelephoneRequerant(string $OBLIGATION_TELEPHONE_REQUERANT) Return the first ConfigurationOrgansime filtered by the OBLIGATION_TELEPHONE_REQUERANT column
 * @method ConfigurationOrgansime findOneByVisibiliteRegistreCommerceRequerant(string $VISIBILITE_REGISTRE_COMMERCE_REQUERANT) Return the first ConfigurationOrgansime filtered by the VISIBILITE_REGISTRE_COMMERCE_REQUERANT column
 * @method ConfigurationOrgansime findOneByVisibiliteIdentifiantFiscal(string $VISIBILITE_IDENTIFIANT_FISCAL) Return the first ConfigurationOrgansime filtered by the VISIBILITE_IDENTIFIANT_FISCAL column
 * @method ConfigurationOrgansime findOneByObligationIdentifiantFiscal(string $OBLIGATION_IDENTIFIANT_FISCAL) Return the first ConfigurationOrgansime filtered by the OBLIGATION_IDENTIFIANT_FISCAL column
 * @method ConfigurationOrgansime findOneByDelaiClotureDemande(int $DELAI_CLOTURE_DEMANDE) Return the first ConfigurationOrgansime filtered by the DELAI_CLOTURE_DEMANDE column
 * @method ConfigurationOrgansime findOneByNotificationAvantDateReponse(int $NOTIFICATION_AVANT_DATE_REPONSE) Return the first ConfigurationOrgansime filtered by the NOTIFICATION_AVANT_DATE_REPONSE column
 * @method ConfigurationOrgansime findOneByBorneTraitementDemande(int $BORNE_TRAITEMENT_DEMANDE) Return the first ConfigurationOrgansime filtered by the BORNE_TRAITEMENT_DEMANDE column
 * @method ConfigurationOrgansime findOneByRegleNumeroDemandeEntrant(string $REGLE_NUMERO_DEMANDE_ENTRANT) Return the first ConfigurationOrgansime filtered by the REGLE_NUMERO_DEMANDE_ENTRANT column
 * @method ConfigurationOrgansime findOneByRegleNumeroDemandeSortant(string $REGLE_NUMERO_DEMANDE_SORTANT) Return the first ConfigurationOrgansime filtered by the REGLE_NUMERO_DEMANDE_SORTANT column
 * @method ConfigurationOrgansime findOneByRegleNumeroDemandeInterne(string $REGLE_NUMERO_DEMANDE_INTERNE) Return the first ConfigurationOrgansime filtered by the REGLE_NUMERO_DEMANDE_INTERNE column
 * @method ConfigurationOrgansime findOneByVisibiliteBlocReponseObligatoire(string $VISIBILITE_BLOC_REPONSE_OBLIGATOIRE) Return the first ConfigurationOrgansime filtered by the VISIBILITE_BLOC_REPONSE_OBLIGATOIRE column
 * @method ConfigurationOrgansime findOneByVisibiliteBlocLieuConcerne(string $VISIBILITE_BLOC_LIEU_CONCERNE) Return the first ConfigurationOrgansime filtered by the VISIBILITE_BLOC_LIEU_CONCERNE column
 * @method ConfigurationOrgansime findOneByObligationMessageDemande(string $OBLIGATION_MESSAGE_DEMANDE) Return the first ConfigurationOrgansime filtered by the OBLIGATION_MESSAGE_DEMANDE column
 * @method ConfigurationOrgansime findOneByObligationEmailDemandeur(string $OBLIGATION_EMAIL_DEMANDEUR) Return the first ConfigurationOrgansime filtered by the OBLIGATION_EMAIL_DEMANDEUR column
 * @method ConfigurationOrgansime findOneByObligationSousTheme(string $OBLIGATION_SOUS_THEME) Return the first ConfigurationOrgansime filtered by the OBLIGATION_SOUS_THEME column
 * @method ConfigurationOrgansime findOneByVisiblitieConditionUtilisation(string $VISIBLITIE_CONDITION_UTILISATION) Return the first ConfigurationOrgansime filtered by the VISIBLITIE_CONDITION_UTILISATION column
 * @method ConfigurationOrgansime findOneByConditionUtilisationAr(string $CONDITION_UTILISATION_AR) Return the first ConfigurationOrgansime filtered by the CONDITION_UTILISATION_AR column
 * @method ConfigurationOrgansime findOneByConditionUtilisationFr(string $CONDITION_UTILISATION_FR) Return the first ConfigurationOrgansime filtered by the CONDITION_UTILISATION_FR column
 * @method ConfigurationOrgansime findOneByGestionDemandeurParEntite(string $GESTION_DEMANDEUR_PAR_ENTITE) Return the first ConfigurationOrgansime filtered by the GESTION_DEMANDEUR_PAR_ENTITE column
 * @method ConfigurationOrgansime findOneByValeurDefautTypeDemande(int $VALEUR_DEFAUT_TYPE_DEMANDE) Return the first ConfigurationOrgansime filtered by the VALEUR_DEFAUT_TYPE_DEMANDE column
 * @method ConfigurationOrgansime findOneByValeurDefautReponseObligatoire(string $VALEUR_DEFAUT_REPONSE_OBLIGATOIRE) Return the first ConfigurationOrgansime filtered by the VALEUR_DEFAUT_REPONSE_OBLIGATOIRE column
 * @method ConfigurationOrgansime findOneByAccesExtranet(string $ACCES_EXTRANET) Return the first ConfigurationOrgansime filtered by the ACCES_EXTRANET column
 * @method ConfigurationOrgansime findOneByLangueParDefautExtranet(string $LANGUE_PAR_DEFAUT_EXTRANET) Return the first ConfigurationOrgansime filtered by the LANGUE_PAR_DEFAUT_EXTRANET column
 * @method ConfigurationOrgansime findOneByGoogleAnalytics(string $GOOGLE_ANALYTICS) Return the first ConfigurationOrgansime filtered by the GOOGLE_ANALYTICS column
 * @method ConfigurationOrgansime findOneByChiffrement(string $CHIFFREMENT) Return the first ConfigurationOrgansime filtered by the CHIFFREMENT column
 * @method ConfigurationOrgansime findOneByIdEntiteCentrale(int $ID_ENTITE_CENTRALE) Return the first ConfigurationOrgansime filtered by the ID_ENTITE_CENTRALE column
 * @method ConfigurationOrgansime findOneByServiceNotificationSms(string $SERVICE_NOTIFICATION_SMS) Return the first ConfigurationOrgansime filtered by the SERVICE_NOTIFICATION_SMS column
 * @method ConfigurationOrgansime findOneByLoginServiceSms(string $LOGIN_SERVICE_SMS) Return the first ConfigurationOrgansime filtered by the LOGIN_SERVICE_SMS column
 * @method ConfigurationOrgansime findOneByPassServiceSms(string $PASS_SERVICE_SMS) Return the first ConfigurationOrgansime filtered by the PASS_SERVICE_SMS column
 * @method ConfigurationOrgansime findOneByCodeEnvoiSms(string $CODE_ENVOI_SMS) Return the first ConfigurationOrgansime filtered by the CODE_ENVOI_SMS column
 * @method ConfigurationOrgansime findOneByUrlServiceSms(string $URL_SERVICE_SMS) Return the first ConfigurationOrgansime filtered by the URL_SERVICE_SMS column
 * @method ConfigurationOrgansime findOneByCircuitValidation(string $CIRCUIT_VALIDATION) Return the first ConfigurationOrgansime filtered by the CIRCUIT_VALIDATION column
 * @method ConfigurationOrgansime findOneByVisibiliteMessageDemande(string $VISIBILITE_MESSAGE_DEMANDE) Return the first ConfigurationOrgansime filtered by the VISIBILITE_MESSAGE_DEMANDE column
 * @method ConfigurationOrgansime findOneByCodeSignataireCertificat(string $CODE_SIGNATAIRE_CERTIFICAT) Return the first ConfigurationOrgansime filtered by the CODE_SIGNATAIRE_CERTIFICAT column
 * @method ConfigurationOrgansime findOneByAccesStatistiques(string $ACCES_STATISTIQUES) Return the first ConfigurationOrgansime filtered by the ACCES_STATISTIQUES column
 * @method ConfigurationOrgansime findOneByWebserviceDemande(string $WEBSERVICE_DEMANDE) Return the first ConfigurationOrgansime filtered by the WEBSERVICE_DEMANDE column
 * @method ConfigurationOrgansime findOneByUrlWebserviceDemande(string $URL_WEBSERVICE_DEMANDE) Return the first ConfigurationOrgansime filtered by the URL_WEBSERVICE_DEMANDE column
 * @method ConfigurationOrgansime findOneByJetonWebservice(string $JETON_WEBSERVICE) Return the first ConfigurationOrgansime filtered by the JETON_WEBSERVICE column
 * @method ConfigurationOrgansime findOneByIdentifiantEntiteReception(int $IDENTIFIANT_ENTITE_RECEPTION) Return the first ConfigurationOrgansime filtered by the IDENTIFIANT_ENTITE_RECEPTION column
 * @method ConfigurationOrgansime findOneByIdentifiantSousTheme(int $IDENTIFIANT_SOUS_THEME) Return the first ConfigurationOrgansime filtered by the IDENTIFIANT_SOUS_THEME column
 * @method ConfigurationOrgansime findOneByScanner(string $SCANNER) Return the first ConfigurationOrgansime filtered by the SCANNER column
 * @method ConfigurationOrgansime findOneByActivationAuthSocle(string $ACTIVATION_AUTH_SOCLE) Return the first ConfigurationOrgansime filtered by the ACTIVATION_AUTH_SOCLE column
 * @method ConfigurationOrgansime findOneByAffichageEnregistrerGenererNumero(string $AFFICHAGE_ENREGISTRER_GENERER_NUMERO) Return the first ConfigurationOrgansime filtered by the AFFICHAGE_ENREGISTRER_GENERER_NUMERO column
 * @method ConfigurationOrgansime findOneByJetonOrgService(string $JETON_ORG_SERVICE) Return the first ConfigurationOrgansime filtered by the JETON_ORG_SERVICE column
 * @method ConfigurationOrgansime findOneByOngletDepuis1(int $ONGLET_DEPUIS_1) Return the first ConfigurationOrgansime filtered by the ONGLET_DEPUIS_1 column
 * @method ConfigurationOrgansime findOneByOngletDepuis2(int $ONGLET_DEPUIS_2) Return the first ConfigurationOrgansime filtered by the ONGLET_DEPUIS_2 column
 * @method ConfigurationOrgansime findOneByNombreReouverture(int $NOMBRE_REOUVERTURE) Return the first ConfigurationOrgansime filtered by the NOMBRE_REOUVERTURE column
 * @method ConfigurationOrgansime findOneByCentreAppel(string $CENTRE_APPEL) Return the first ConfigurationOrgansime filtered by the CENTRE_APPEL column
 * @method ConfigurationOrgansime findOneByUrlWsCa(string $URL_WS_CA) Return the first ConfigurationOrgansime filtered by the URL_WS_CA column
 * @method ConfigurationOrgansime findOneByAuthentificationLdap(string $AUTHENTIFICATION_LDAP) Return the first ConfigurationOrgansime filtered by the AUTHENTIFICATION_LDAP column
 * @method ConfigurationOrgansime findOneByIpLdap(string $IP_LDAP) Return the first ConfigurationOrgansime filtered by the IP_LDAP column
 * @method ConfigurationOrgansime findOneByBaseDnLdap(string $BASE_DN_LDAP) Return the first ConfigurationOrgansime filtered by the BASE_DN_LDAP column
 * @method ConfigurationOrgansime findOneByUserLdap(string $USER_LDAP) Return the first ConfigurationOrgansime filtered by the USER_LDAP column
 * @method ConfigurationOrgansime findOneByPasswordLdap(string $PASSWORD_LDAP) Return the first ConfigurationOrgansime filtered by the PASSWORD_LDAP column
 * @method ConfigurationOrgansime findOneBySchemaLdap(string $SCHEMA_LDAP) Return the first ConfigurationOrgansime filtered by the SCHEMA_LDAP column
 * @method ConfigurationOrgansime findOneByPortLdap(int $PORT_LDAP) Return the first ConfigurationOrgansime filtered by the PORT_LDAP column
 * @method ConfigurationOrgansime findOneByProlongation(string $PROLONGATION) Return the first ConfigurationOrgansime filtered by the PROLONGATION column
 * @method ConfigurationOrgansime findOneByDureeProlongation(int $DUREE_PROLONGATION) Return the first ConfigurationOrgansime filtered by the DUREE_PROLONGATION column
 * @method ConfigurationOrgansime findOneByOrganismeParametrage(int $ORGANISME_PARAMETRAGE) Return the first ConfigurationOrgansime filtered by the ORGANISME_PARAMETRAGE column
 * @method ConfigurationOrgansime findOneByOrganismeGestionUtilisateurs(int $ORGANISME_GESTION_UTILISATEURS) Return the first ConfigurationOrgansime filtered by the ORGANISME_GESTION_UTILISATEURS column
 * @method ConfigurationOrgansime findOneByTypeGestionUtilisateur(string $TYPE_GESTION_UTILISATEUR) Return the first ConfigurationOrgansime filtered by the TYPE_GESTION_UTILISATEUR column
 * @method ConfigurationOrgansime findOneByMultiAffectation(string $MULTI_AFFECTATION) Return the first ConfigurationOrgansime filtered by the MULTI_AFFECTATION column
 * @method ConfigurationOrgansime findOneByTauxEcheance(double $TAUX_ECHEANCE) Return the first ConfigurationOrgansime filtered by the TAUX_ECHEANCE column
 * @method ConfigurationOrgansime findOneByReponseAffectationExterne(string $REPONSE_AFFECTATION_EXTERNE) Return the first ConfigurationOrgansime filtered by the REPONSE_AFFECTATION_EXTERNE column
 * @method ConfigurationOrgansime findOneByIncrementConfidentiel(string $INCREMENT_CONFIDENTIEL) Return the first ConfigurationOrgansime filtered by the INCREMENT_CONFIDENTIEL column
 * @method ConfigurationOrgansime findOneByObligationEmetteurCourrierEntrant(string $OBLIGATION_EMETTEUR_COURRIER_ENTRANT) Return the first ConfigurationOrgansime filtered by the OBLIGATION_EMETTEUR_COURRIER_ENTRANT column
 * @method ConfigurationOrgansime findOneByObligationEmetteurCourrierInterne(string $OBLIGATION_EMETTEUR_COURRIER_INTERNE) Return the first ConfigurationOrgansime filtered by the OBLIGATION_EMETTEUR_COURRIER_INTERNE column
 * @method ConfigurationOrgansime findOneByObligationDestinataireCourrierSortant(string $OBLIGATION_DESTINATAIRE_COURRIER_SORTANT) Return the first ConfigurationOrgansime filtered by the OBLIGATION_DESTINATAIRE_COURRIER_SORTANT column
 * @method ConfigurationOrgansime findOneByObligationDestinataireMentionneCourrierEntrant(string $OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT) Return the first ConfigurationOrgansime filtered by the OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT column
 * @method ConfigurationOrgansime findOneByObligationDestinataireCourrierInterne(string $OBLIGATION_DESTINATAIRE_COURRIER_INTERNE) Return the first ConfigurationOrgansime filtered by the OBLIGATION_DESTINATAIRE_COURRIER_INTERNE column
 * @method ConfigurationOrgansime findOneByObligationObjet(string $OBLIGATION_OBJET) Return the first ConfigurationOrgansime filtered by the OBLIGATION_OBJET column
 * @method ConfigurationOrgansime findOneByObligationSignataire(string $OBLIGATION_SIGNATAIRE) Return the first ConfigurationOrgansime filtered by the OBLIGATION_SIGNATAIRE column
 * @method ConfigurationOrgansime findOneByGestionDemandeurs(string $GESTION_DEMANDEURS) Return the first ConfigurationOrgansime filtered by the GESTION_DEMANDEURS column
 * @method ConfigurationOrgansime findOneByNumeroFournisseur(string $NUMERO_FOURNISSEUR) Return the first ConfigurationOrgansime filtered by the NUMERO_FOURNISSEUR column
 * @method ConfigurationOrgansime findOneByTypeDelai(string $TYPE_DELAI) Return the first ConfigurationOrgansime filtered by the TYPE_DELAI column
 * @method ConfigurationOrgansime findOneByNumProvisoire(string $NUM_PROVISOIRE) Return the first ConfigurationOrgansime filtered by the NUM_PROVISOIRE column
 *
 * @method array findById(int $id) Return ConfigurationOrgansime objects filtered by the id column
 * @method array findByNiveauLieu(int $niveau_lieu) Return ConfigurationOrgansime objects filtered by the niveau_lieu column
 * @method array findByValeurDefautPays(int $valeur_defaut_pays) Return ConfigurationOrgansime objects filtered by the valeur_defaut_pays column
 * @method array findByValeurDefautRegion(int $valeur_defaut_region) Return ConfigurationOrgansime objects filtered by the valeur_defaut_region column
 * @method array findByValeurDefautProvince(int $valeur_defaut_province) Return ConfigurationOrgansime objects filtered by the valeur_defaut_province column
 * @method array findByValeurParDefautCommune(int $valeur_par_defaut_commune) Return ConfigurationOrgansime objects filtered by the valeur_par_defaut_commune column
 * @method array findByModeAffectationDemande(string $mode_affectation_demande) Return ConfigurationOrgansime objects filtered by the mode_affectation_demande column
 * @method array findByModuleEntiteLieLieu(string $module_entite_lie_lieu) Return ConfigurationOrgansime objects filtered by the module_entite_lie_lieu column
 * @method array findByNbrJourDelaiTraitement(int $NBR_JOUR_DELAI_TRAITEMENT) Return ConfigurationOrgansime objects filtered by the NBR_JOUR_DELAI_TRAITEMENT column
 * @method array findByObligationLieuDemande(string $OBLIGATION_LIEU_DEMANDE) Return ConfigurationOrgansime objects filtered by the OBLIGATION_LIEU_DEMANDE column
 * @method array findByModuleGoogleMaps(string $MODULE_GOOGLE_MAPS) Return ConfigurationOrgansime objects filtered by the MODULE_GOOGLE_MAPS column
 * @method array findByVisibiliteChampLocalisation(string $VISIBILITE_CHAMP_LOCALISATION) Return ConfigurationOrgansime objects filtered by the VISIBILITE_CHAMP_LOCALISATION column
 * @method array findByEchangeWebService(string $ECHANGE_WEB_SERVICE) Return ConfigurationOrgansime objects filtered by the ECHANGE_WEB_SERVICE column
 * @method array findByIdEntite(int $ID_ENTITE) Return ConfigurationOrgansime objects filtered by the ID_ENTITE column
 * @method array findByObligationNomPrenomRequerant(string $OBLIGATION_NOM_PRENOM_REQUERANT) Return ConfigurationOrgansime objects filtered by the OBLIGATION_NOM_PRENOM_REQUERANT column
 * @method array findByObligationNomOrganismeRequerant(string $OBLIGATION_NOM_ORGANISME_REQUERANT) Return ConfigurationOrgansime objects filtered by the OBLIGATION_NOM_ORGANISME_REQUERANT column
 * @method array findByObligationRegistreCommerceRequerant(string $OBLIGATION_REGISTRE_COMMERCE_REQUERANT) Return ConfigurationOrgansime objects filtered by the OBLIGATION_REGISTRE_COMMERCE_REQUERANT column
 * @method array findByObligationTelephoneRequerant(string $OBLIGATION_TELEPHONE_REQUERANT) Return ConfigurationOrgansime objects filtered by the OBLIGATION_TELEPHONE_REQUERANT column
 * @method array findByVisibiliteRegistreCommerceRequerant(string $VISIBILITE_REGISTRE_COMMERCE_REQUERANT) Return ConfigurationOrgansime objects filtered by the VISIBILITE_REGISTRE_COMMERCE_REQUERANT column
 * @method array findByVisibiliteIdentifiantFiscal(string $VISIBILITE_IDENTIFIANT_FISCAL) Return ConfigurationOrgansime objects filtered by the VISIBILITE_IDENTIFIANT_FISCAL column
 * @method array findByObligationIdentifiantFiscal(string $OBLIGATION_IDENTIFIANT_FISCAL) Return ConfigurationOrgansime objects filtered by the OBLIGATION_IDENTIFIANT_FISCAL column
 * @method array findByDelaiClotureDemande(int $DELAI_CLOTURE_DEMANDE) Return ConfigurationOrgansime objects filtered by the DELAI_CLOTURE_DEMANDE column
 * @method array findByNotificationAvantDateReponse(int $NOTIFICATION_AVANT_DATE_REPONSE) Return ConfigurationOrgansime objects filtered by the NOTIFICATION_AVANT_DATE_REPONSE column
 * @method array findByBorneTraitementDemande(int $BORNE_TRAITEMENT_DEMANDE) Return ConfigurationOrgansime objects filtered by the BORNE_TRAITEMENT_DEMANDE column
 * @method array findByRegleNumeroDemandeEntrant(string $REGLE_NUMERO_DEMANDE_ENTRANT) Return ConfigurationOrgansime objects filtered by the REGLE_NUMERO_DEMANDE_ENTRANT column
 * @method array findByRegleNumeroDemandeSortant(string $REGLE_NUMERO_DEMANDE_SORTANT) Return ConfigurationOrgansime objects filtered by the REGLE_NUMERO_DEMANDE_SORTANT column
 * @method array findByRegleNumeroDemandeInterne(string $REGLE_NUMERO_DEMANDE_INTERNE) Return ConfigurationOrgansime objects filtered by the REGLE_NUMERO_DEMANDE_INTERNE column
 * @method array findByVisibiliteBlocReponseObligatoire(string $VISIBILITE_BLOC_REPONSE_OBLIGATOIRE) Return ConfigurationOrgansime objects filtered by the VISIBILITE_BLOC_REPONSE_OBLIGATOIRE column
 * @method array findByVisibiliteBlocLieuConcerne(string $VISIBILITE_BLOC_LIEU_CONCERNE) Return ConfigurationOrgansime objects filtered by the VISIBILITE_BLOC_LIEU_CONCERNE column
 * @method array findByObligationMessageDemande(string $OBLIGATION_MESSAGE_DEMANDE) Return ConfigurationOrgansime objects filtered by the OBLIGATION_MESSAGE_DEMANDE column
 * @method array findByObligationEmailDemandeur(string $OBLIGATION_EMAIL_DEMANDEUR) Return ConfigurationOrgansime objects filtered by the OBLIGATION_EMAIL_DEMANDEUR column
 * @method array findByObligationSousTheme(string $OBLIGATION_SOUS_THEME) Return ConfigurationOrgansime objects filtered by the OBLIGATION_SOUS_THEME column
 * @method array findByVisiblitieConditionUtilisation(string $VISIBLITIE_CONDITION_UTILISATION) Return ConfigurationOrgansime objects filtered by the VISIBLITIE_CONDITION_UTILISATION column
 * @method array findByConditionUtilisationAr(string $CONDITION_UTILISATION_AR) Return ConfigurationOrgansime objects filtered by the CONDITION_UTILISATION_AR column
 * @method array findByConditionUtilisationFr(string $CONDITION_UTILISATION_FR) Return ConfigurationOrgansime objects filtered by the CONDITION_UTILISATION_FR column
 * @method array findByGestionDemandeurParEntite(string $GESTION_DEMANDEUR_PAR_ENTITE) Return ConfigurationOrgansime objects filtered by the GESTION_DEMANDEUR_PAR_ENTITE column
 * @method array findByValeurDefautTypeDemande(int $VALEUR_DEFAUT_TYPE_DEMANDE) Return ConfigurationOrgansime objects filtered by the VALEUR_DEFAUT_TYPE_DEMANDE column
 * @method array findByValeurDefautReponseObligatoire(string $VALEUR_DEFAUT_REPONSE_OBLIGATOIRE) Return ConfigurationOrgansime objects filtered by the VALEUR_DEFAUT_REPONSE_OBLIGATOIRE column
 * @method array findByAccesExtranet(string $ACCES_EXTRANET) Return ConfigurationOrgansime objects filtered by the ACCES_EXTRANET column
 * @method array findByLangueParDefautExtranet(string $LANGUE_PAR_DEFAUT_EXTRANET) Return ConfigurationOrgansime objects filtered by the LANGUE_PAR_DEFAUT_EXTRANET column
 * @method array findByGoogleAnalytics(string $GOOGLE_ANALYTICS) Return ConfigurationOrgansime objects filtered by the GOOGLE_ANALYTICS column
 * @method array findByChiffrement(string $CHIFFREMENT) Return ConfigurationOrgansime objects filtered by the CHIFFREMENT column
 * @method array findByIdEntiteCentrale(int $ID_ENTITE_CENTRALE) Return ConfigurationOrgansime objects filtered by the ID_ENTITE_CENTRALE column
 * @method array findByServiceNotificationSms(string $SERVICE_NOTIFICATION_SMS) Return ConfigurationOrgansime objects filtered by the SERVICE_NOTIFICATION_SMS column
 * @method array findByLoginServiceSms(string $LOGIN_SERVICE_SMS) Return ConfigurationOrgansime objects filtered by the LOGIN_SERVICE_SMS column
 * @method array findByPassServiceSms(string $PASS_SERVICE_SMS) Return ConfigurationOrgansime objects filtered by the PASS_SERVICE_SMS column
 * @method array findByCodeEnvoiSms(string $CODE_ENVOI_SMS) Return ConfigurationOrgansime objects filtered by the CODE_ENVOI_SMS column
 * @method array findByUrlServiceSms(string $URL_SERVICE_SMS) Return ConfigurationOrgansime objects filtered by the URL_SERVICE_SMS column
 * @method array findByCircuitValidation(string $CIRCUIT_VALIDATION) Return ConfigurationOrgansime objects filtered by the CIRCUIT_VALIDATION column
 * @method array findByVisibiliteMessageDemande(string $VISIBILITE_MESSAGE_DEMANDE) Return ConfigurationOrgansime objects filtered by the VISIBILITE_MESSAGE_DEMANDE column
 * @method array findByCodeSignataireCertificat(string $CODE_SIGNATAIRE_CERTIFICAT) Return ConfigurationOrgansime objects filtered by the CODE_SIGNATAIRE_CERTIFICAT column
 * @method array findByAccesStatistiques(string $ACCES_STATISTIQUES) Return ConfigurationOrgansime objects filtered by the ACCES_STATISTIQUES column
 * @method array findByWebserviceDemande(string $WEBSERVICE_DEMANDE) Return ConfigurationOrgansime objects filtered by the WEBSERVICE_DEMANDE column
 * @method array findByUrlWebserviceDemande(string $URL_WEBSERVICE_DEMANDE) Return ConfigurationOrgansime objects filtered by the URL_WEBSERVICE_DEMANDE column
 * @method array findByJetonWebservice(string $JETON_WEBSERVICE) Return ConfigurationOrgansime objects filtered by the JETON_WEBSERVICE column
 * @method array findByIdentifiantEntiteReception(int $IDENTIFIANT_ENTITE_RECEPTION) Return ConfigurationOrgansime objects filtered by the IDENTIFIANT_ENTITE_RECEPTION column
 * @method array findByIdentifiantSousTheme(int $IDENTIFIANT_SOUS_THEME) Return ConfigurationOrgansime objects filtered by the IDENTIFIANT_SOUS_THEME column
 * @method array findByScanner(string $SCANNER) Return ConfigurationOrgansime objects filtered by the SCANNER column
 * @method array findByActivationAuthSocle(string $ACTIVATION_AUTH_SOCLE) Return ConfigurationOrgansime objects filtered by the ACTIVATION_AUTH_SOCLE column
 * @method array findByAffichageEnregistrerGenererNumero(string $AFFICHAGE_ENREGISTRER_GENERER_NUMERO) Return ConfigurationOrgansime objects filtered by the AFFICHAGE_ENREGISTRER_GENERER_NUMERO column
 * @method array findByJetonOrgService(string $JETON_ORG_SERVICE) Return ConfigurationOrgansime objects filtered by the JETON_ORG_SERVICE column
 * @method array findByOngletDepuis1(int $ONGLET_DEPUIS_1) Return ConfigurationOrgansime objects filtered by the ONGLET_DEPUIS_1 column
 * @method array findByOngletDepuis2(int $ONGLET_DEPUIS_2) Return ConfigurationOrgansime objects filtered by the ONGLET_DEPUIS_2 column
 * @method array findByNombreReouverture(int $NOMBRE_REOUVERTURE) Return ConfigurationOrgansime objects filtered by the NOMBRE_REOUVERTURE column
 * @method array findByCentreAppel(string $CENTRE_APPEL) Return ConfigurationOrgansime objects filtered by the CENTRE_APPEL column
 * @method array findByUrlWsCa(string $URL_WS_CA) Return ConfigurationOrgansime objects filtered by the URL_WS_CA column
 * @method array findByAuthentificationLdap(string $AUTHENTIFICATION_LDAP) Return ConfigurationOrgansime objects filtered by the AUTHENTIFICATION_LDAP column
 * @method array findByIpLdap(string $IP_LDAP) Return ConfigurationOrgansime objects filtered by the IP_LDAP column
 * @method array findByBaseDnLdap(string $BASE_DN_LDAP) Return ConfigurationOrgansime objects filtered by the BASE_DN_LDAP column
 * @method array findByUserLdap(string $USER_LDAP) Return ConfigurationOrgansime objects filtered by the USER_LDAP column
 * @method array findByPasswordLdap(string $PASSWORD_LDAP) Return ConfigurationOrgansime objects filtered by the PASSWORD_LDAP column
 * @method array findBySchemaLdap(string $SCHEMA_LDAP) Return ConfigurationOrgansime objects filtered by the SCHEMA_LDAP column
 * @method array findByPortLdap(int $PORT_LDAP) Return ConfigurationOrgansime objects filtered by the PORT_LDAP column
 * @method array findByProlongation(string $PROLONGATION) Return ConfigurationOrgansime objects filtered by the PROLONGATION column
 * @method array findByDureeProlongation(int $DUREE_PROLONGATION) Return ConfigurationOrgansime objects filtered by the DUREE_PROLONGATION column
 * @method array findByOrganismeParametrage(int $ORGANISME_PARAMETRAGE) Return ConfigurationOrgansime objects filtered by the ORGANISME_PARAMETRAGE column
 * @method array findByOrganismeGestionUtilisateurs(int $ORGANISME_GESTION_UTILISATEURS) Return ConfigurationOrgansime objects filtered by the ORGANISME_GESTION_UTILISATEURS column
 * @method array findByTypeGestionUtilisateur(string $TYPE_GESTION_UTILISATEUR) Return ConfigurationOrgansime objects filtered by the TYPE_GESTION_UTILISATEUR column
 * @method array findByMultiAffectation(string $MULTI_AFFECTATION) Return ConfigurationOrgansime objects filtered by the MULTI_AFFECTATION column
 * @method array findByTauxEcheance(double $TAUX_ECHEANCE) Return ConfigurationOrgansime objects filtered by the TAUX_ECHEANCE column
 * @method array findByReponseAffectationExterne(string $REPONSE_AFFECTATION_EXTERNE) Return ConfigurationOrgansime objects filtered by the REPONSE_AFFECTATION_EXTERNE column
 * @method array findByIncrementConfidentiel(string $INCREMENT_CONFIDENTIEL) Return ConfigurationOrgansime objects filtered by the INCREMENT_CONFIDENTIEL column
 * @method array findByObligationEmetteurCourrierEntrant(string $OBLIGATION_EMETTEUR_COURRIER_ENTRANT) Return ConfigurationOrgansime objects filtered by the OBLIGATION_EMETTEUR_COURRIER_ENTRANT column
 * @method array findByObligationEmetteurCourrierInterne(string $OBLIGATION_EMETTEUR_COURRIER_INTERNE) Return ConfigurationOrgansime objects filtered by the OBLIGATION_EMETTEUR_COURRIER_INTERNE column
 * @method array findByObligationDestinataireCourrierSortant(string $OBLIGATION_DESTINATAIRE_COURRIER_SORTANT) Return ConfigurationOrgansime objects filtered by the OBLIGATION_DESTINATAIRE_COURRIER_SORTANT column
 * @method array findByObligationDestinataireMentionneCourrierEntrant(string $OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT) Return ConfigurationOrgansime objects filtered by the OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT column
 * @method array findByObligationDestinataireCourrierInterne(string $OBLIGATION_DESTINATAIRE_COURRIER_INTERNE) Return ConfigurationOrgansime objects filtered by the OBLIGATION_DESTINATAIRE_COURRIER_INTERNE column
 * @method array findByObligationObjet(string $OBLIGATION_OBJET) Return ConfigurationOrgansime objects filtered by the OBLIGATION_OBJET column
 * @method array findByObligationSignataire(string $OBLIGATION_SIGNATAIRE) Return ConfigurationOrgansime objects filtered by the OBLIGATION_SIGNATAIRE column
 * @method array findByGestionDemandeurs(string $GESTION_DEMANDEURS) Return ConfigurationOrgansime objects filtered by the GESTION_DEMANDEURS column
 * @method array findByNumeroFournisseur(string $NUMERO_FOURNISSEUR) Return ConfigurationOrgansime objects filtered by the NUMERO_FOURNISSEUR column
 * @method array findByTypeDelai(string $TYPE_DELAI) Return ConfigurationOrgansime objects filtered by the TYPE_DELAI column
 * @method array findByNumProvisoire(string $NUM_PROVISOIRE) Return ConfigurationOrgansime objects filtered by the NUM_PROVISOIRE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseConfigurationOrgansimeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseConfigurationOrgansimeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'ConfigurationOrgansime', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ConfigurationOrgansimeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ConfigurationOrgansimeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ConfigurationOrgansimeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ConfigurationOrgansimeQuery) {
            return $criteria;
        }
        $query = new ConfigurationOrgansimeQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   ConfigurationOrgansime|ConfigurationOrgansime[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ConfigurationOrgansimePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ConfigurationOrgansimePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 ConfigurationOrgansime A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 ConfigurationOrgansime A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `niveau_lieu`, `valeur_defaut_pays`, `valeur_defaut_region`, `valeur_defaut_province`, `valeur_par_defaut_commune`, `mode_affectation_demande`, `module_entite_lie_lieu`, `NBR_JOUR_DELAI_TRAITEMENT`, `OBLIGATION_LIEU_DEMANDE`, `MODULE_GOOGLE_MAPS`, `VISIBILITE_CHAMP_LOCALISATION`, `ECHANGE_WEB_SERVICE`, `ID_ENTITE`, `OBLIGATION_NOM_PRENOM_REQUERANT`, `OBLIGATION_NOM_ORGANISME_REQUERANT`, `OBLIGATION_REGISTRE_COMMERCE_REQUERANT`, `OBLIGATION_TELEPHONE_REQUERANT`, `VISIBILITE_REGISTRE_COMMERCE_REQUERANT`, `VISIBILITE_IDENTIFIANT_FISCAL`, `OBLIGATION_IDENTIFIANT_FISCAL`, `DELAI_CLOTURE_DEMANDE`, `NOTIFICATION_AVANT_DATE_REPONSE`, `BORNE_TRAITEMENT_DEMANDE`, `REGLE_NUMERO_DEMANDE_ENTRANT`, `REGLE_NUMERO_DEMANDE_SORTANT`, `REGLE_NUMERO_DEMANDE_INTERNE`, `VISIBILITE_BLOC_REPONSE_OBLIGATOIRE`, `VISIBILITE_BLOC_LIEU_CONCERNE`, `OBLIGATION_MESSAGE_DEMANDE`, `OBLIGATION_EMAIL_DEMANDEUR`, `OBLIGATION_SOUS_THEME`, `VISIBLITIE_CONDITION_UTILISATION`, `CONDITION_UTILISATION_AR`, `CONDITION_UTILISATION_FR`, `GESTION_DEMANDEUR_PAR_ENTITE`, `VALEUR_DEFAUT_TYPE_DEMANDE`, `VALEUR_DEFAUT_REPONSE_OBLIGATOIRE`, `ACCES_EXTRANET`, `LANGUE_PAR_DEFAUT_EXTRANET`, `GOOGLE_ANALYTICS`, `CHIFFREMENT`, `ID_ENTITE_CENTRALE`, `SERVICE_NOTIFICATION_SMS`, `LOGIN_SERVICE_SMS`, `PASS_SERVICE_SMS`, `CODE_ENVOI_SMS`, `URL_SERVICE_SMS`, `CIRCUIT_VALIDATION`, `VISIBILITE_MESSAGE_DEMANDE`, `CODE_SIGNATAIRE_CERTIFICAT`, `ACCES_STATISTIQUES`, `WEBSERVICE_DEMANDE`, `URL_WEBSERVICE_DEMANDE`, `JETON_WEBSERVICE`, `IDENTIFIANT_ENTITE_RECEPTION`, `IDENTIFIANT_SOUS_THEME`, `SCANNER`, `ACTIVATION_AUTH_SOCLE`, `AFFICHAGE_ENREGISTRER_GENERER_NUMERO`, `JETON_ORG_SERVICE`, `ONGLET_DEPUIS_1`, `ONGLET_DEPUIS_2`, `NOMBRE_REOUVERTURE`, `CENTRE_APPEL`, `URL_WS_CA`, `AUTHENTIFICATION_LDAP`, `IP_LDAP`, `BASE_DN_LDAP`, `USER_LDAP`, `PASSWORD_LDAP`, `SCHEMA_LDAP`, `PORT_LDAP`, `PROLONGATION`, `DUREE_PROLONGATION`, `ORGANISME_PARAMETRAGE`, `ORGANISME_GESTION_UTILISATEURS`, `TYPE_GESTION_UTILISATEUR`, `MULTI_AFFECTATION`, `TAUX_ECHEANCE`, `REPONSE_AFFECTATION_EXTERNE`, `INCREMENT_CONFIDENTIEL`, `OBLIGATION_EMETTEUR_COURRIER_ENTRANT`, `OBLIGATION_EMETTEUR_COURRIER_INTERNE`, `OBLIGATION_DESTINATAIRE_COURRIER_SORTANT`, `OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT`, `OBLIGATION_DESTINATAIRE_COURRIER_INTERNE`, `OBLIGATION_OBJET`, `OBLIGATION_SIGNATAIRE`, `GESTION_DEMANDEURS`, `NUMERO_FOURNISSEUR`, `TYPE_DELAI`, `NUM_PROVISOIRE` FROM `configuration_organsime` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new ConfigurationOrgansime();
            $obj->hydrate($row);
            ConfigurationOrgansimePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return ConfigurationOrgansime|ConfigurationOrgansime[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|ConfigurationOrgansime[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConfigurationOrgansimePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConfigurationOrgansimePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the niveau_lieu column
     *
     * Example usage:
     * <code>
     * $query->filterByNiveauLieu(1234); // WHERE niveau_lieu = 1234
     * $query->filterByNiveauLieu(array(12, 34)); // WHERE niveau_lieu IN (12, 34)
     * $query->filterByNiveauLieu(array('min' => 12)); // WHERE niveau_lieu >= 12
     * $query->filterByNiveauLieu(array('max' => 12)); // WHERE niveau_lieu <= 12
     * </code>
     *
     * @param     mixed $niveauLieu The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByNiveauLieu($niveauLieu = null, $comparison = null)
    {
        if (is_array($niveauLieu)) {
            $useMinMax = false;
            if (isset($niveauLieu['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::NIVEAU_LIEU, $niveauLieu['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($niveauLieu['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::NIVEAU_LIEU, $niveauLieu['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::NIVEAU_LIEU, $niveauLieu, $comparison);
    }

    /**
     * Filter the query on the valeur_defaut_pays column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurDefautPays(1234); // WHERE valeur_defaut_pays = 1234
     * $query->filterByValeurDefautPays(array(12, 34)); // WHERE valeur_defaut_pays IN (12, 34)
     * $query->filterByValeurDefautPays(array('min' => 12)); // WHERE valeur_defaut_pays >= 12
     * $query->filterByValeurDefautPays(array('max' => 12)); // WHERE valeur_defaut_pays <= 12
     * </code>
     *
     * @param     mixed $valeurDefautPays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByValeurDefautPays($valeurDefautPays = null, $comparison = null)
    {
        if (is_array($valeurDefautPays)) {
            $useMinMax = false;
            if (isset($valeurDefautPays['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::VALEUR_DEFAUT_PAYS, $valeurDefautPays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valeurDefautPays['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::VALEUR_DEFAUT_PAYS, $valeurDefautPays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::VALEUR_DEFAUT_PAYS, $valeurDefautPays, $comparison);
    }

    /**
     * Filter the query on the valeur_defaut_region column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurDefautRegion(1234); // WHERE valeur_defaut_region = 1234
     * $query->filterByValeurDefautRegion(array(12, 34)); // WHERE valeur_defaut_region IN (12, 34)
     * $query->filterByValeurDefautRegion(array('min' => 12)); // WHERE valeur_defaut_region >= 12
     * $query->filterByValeurDefautRegion(array('max' => 12)); // WHERE valeur_defaut_region <= 12
     * </code>
     *
     * @param     mixed $valeurDefautRegion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByValeurDefautRegion($valeurDefautRegion = null, $comparison = null)
    {
        if (is_array($valeurDefautRegion)) {
            $useMinMax = false;
            if (isset($valeurDefautRegion['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::VALEUR_DEFAUT_REGION, $valeurDefautRegion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valeurDefautRegion['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::VALEUR_DEFAUT_REGION, $valeurDefautRegion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::VALEUR_DEFAUT_REGION, $valeurDefautRegion, $comparison);
    }

    /**
     * Filter the query on the valeur_defaut_province column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurDefautProvince(1234); // WHERE valeur_defaut_province = 1234
     * $query->filterByValeurDefautProvince(array(12, 34)); // WHERE valeur_defaut_province IN (12, 34)
     * $query->filterByValeurDefautProvince(array('min' => 12)); // WHERE valeur_defaut_province >= 12
     * $query->filterByValeurDefautProvince(array('max' => 12)); // WHERE valeur_defaut_province <= 12
     * </code>
     *
     * @param     mixed $valeurDefautProvince The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByValeurDefautProvince($valeurDefautProvince = null, $comparison = null)
    {
        if (is_array($valeurDefautProvince)) {
            $useMinMax = false;
            if (isset($valeurDefautProvince['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::VALEUR_DEFAUT_PROVINCE, $valeurDefautProvince['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valeurDefautProvince['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::VALEUR_DEFAUT_PROVINCE, $valeurDefautProvince['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::VALEUR_DEFAUT_PROVINCE, $valeurDefautProvince, $comparison);
    }

    /**
     * Filter the query on the valeur_par_defaut_commune column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurParDefautCommune(1234); // WHERE valeur_par_defaut_commune = 1234
     * $query->filterByValeurParDefautCommune(array(12, 34)); // WHERE valeur_par_defaut_commune IN (12, 34)
     * $query->filterByValeurParDefautCommune(array('min' => 12)); // WHERE valeur_par_defaut_commune >= 12
     * $query->filterByValeurParDefautCommune(array('max' => 12)); // WHERE valeur_par_defaut_commune <= 12
     * </code>
     *
     * @param     mixed $valeurParDefautCommune The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByValeurParDefautCommune($valeurParDefautCommune = null, $comparison = null)
    {
        if (is_array($valeurParDefautCommune)) {
            $useMinMax = false;
            if (isset($valeurParDefautCommune['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::VALEUR_PAR_DEFAUT_COMMUNE, $valeurParDefautCommune['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valeurParDefautCommune['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::VALEUR_PAR_DEFAUT_COMMUNE, $valeurParDefautCommune['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::VALEUR_PAR_DEFAUT_COMMUNE, $valeurParDefautCommune, $comparison);
    }

    /**
     * Filter the query on the mode_affectation_demande column
     *
     * Example usage:
     * <code>
     * $query->filterByModeAffectationDemande('fooValue');   // WHERE mode_affectation_demande = 'fooValue'
     * $query->filterByModeAffectationDemande('%fooValue%'); // WHERE mode_affectation_demande LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modeAffectationDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByModeAffectationDemande($modeAffectationDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modeAffectationDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modeAffectationDemande)) {
                $modeAffectationDemande = str_replace('*', '%', $modeAffectationDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::MODE_AFFECTATION_DEMANDE, $modeAffectationDemande, $comparison);
    }

    /**
     * Filter the query on the module_entite_lie_lieu column
     *
     * Example usage:
     * <code>
     * $query->filterByModuleEntiteLieLieu('fooValue');   // WHERE module_entite_lie_lieu = 'fooValue'
     * $query->filterByModuleEntiteLieLieu('%fooValue%'); // WHERE module_entite_lie_lieu LIKE '%fooValue%'
     * </code>
     *
     * @param     string $moduleEntiteLieLieu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByModuleEntiteLieLieu($moduleEntiteLieLieu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($moduleEntiteLieLieu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $moduleEntiteLieLieu)) {
                $moduleEntiteLieLieu = str_replace('*', '%', $moduleEntiteLieLieu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::MODULE_ENTITE_LIE_LIEU, $moduleEntiteLieLieu, $comparison);
    }

    /**
     * Filter the query on the NBR_JOUR_DELAI_TRAITEMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByNbrJourDelaiTraitement(1234); // WHERE NBR_JOUR_DELAI_TRAITEMENT = 1234
     * $query->filterByNbrJourDelaiTraitement(array(12, 34)); // WHERE NBR_JOUR_DELAI_TRAITEMENT IN (12, 34)
     * $query->filterByNbrJourDelaiTraitement(array('min' => 12)); // WHERE NBR_JOUR_DELAI_TRAITEMENT >= 12
     * $query->filterByNbrJourDelaiTraitement(array('max' => 12)); // WHERE NBR_JOUR_DELAI_TRAITEMENT <= 12
     * </code>
     *
     * @param     mixed $nbrJourDelaiTraitement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByNbrJourDelaiTraitement($nbrJourDelaiTraitement = null, $comparison = null)
    {
        if (is_array($nbrJourDelaiTraitement)) {
            $useMinMax = false;
            if (isset($nbrJourDelaiTraitement['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::NBR_JOUR_DELAI_TRAITEMENT, $nbrJourDelaiTraitement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nbrJourDelaiTraitement['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::NBR_JOUR_DELAI_TRAITEMENT, $nbrJourDelaiTraitement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::NBR_JOUR_DELAI_TRAITEMENT, $nbrJourDelaiTraitement, $comparison);
    }

    /**
     * Filter the query on the OBLIGATION_LIEU_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByObligationLieuDemande('fooValue');   // WHERE OBLIGATION_LIEU_DEMANDE = 'fooValue'
     * $query->filterByObligationLieuDemande('%fooValue%'); // WHERE OBLIGATION_LIEU_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligationLieuDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByObligationLieuDemande($obligationLieuDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligationLieuDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligationLieuDemande)) {
                $obligationLieuDemande = str_replace('*', '%', $obligationLieuDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::OBLIGATION_LIEU_DEMANDE, $obligationLieuDemande, $comparison);
    }

    /**
     * Filter the query on the MODULE_GOOGLE_MAPS column
     *
     * Example usage:
     * <code>
     * $query->filterByModuleGoogleMaps('fooValue');   // WHERE MODULE_GOOGLE_MAPS = 'fooValue'
     * $query->filterByModuleGoogleMaps('%fooValue%'); // WHERE MODULE_GOOGLE_MAPS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $moduleGoogleMaps The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByModuleGoogleMaps($moduleGoogleMaps = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($moduleGoogleMaps)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $moduleGoogleMaps)) {
                $moduleGoogleMaps = str_replace('*', '%', $moduleGoogleMaps);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::MODULE_GOOGLE_MAPS, $moduleGoogleMaps, $comparison);
    }

    /**
     * Filter the query on the VISIBILITE_CHAMP_LOCALISATION column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibiliteChampLocalisation('fooValue');   // WHERE VISIBILITE_CHAMP_LOCALISATION = 'fooValue'
     * $query->filterByVisibiliteChampLocalisation('%fooValue%'); // WHERE VISIBILITE_CHAMP_LOCALISATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibiliteChampLocalisation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByVisibiliteChampLocalisation($visibiliteChampLocalisation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibiliteChampLocalisation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibiliteChampLocalisation)) {
                $visibiliteChampLocalisation = str_replace('*', '%', $visibiliteChampLocalisation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::VISIBILITE_CHAMP_LOCALISATION, $visibiliteChampLocalisation, $comparison);
    }

    /**
     * Filter the query on the ECHANGE_WEB_SERVICE column
     *
     * Example usage:
     * <code>
     * $query->filterByEchangeWebService('fooValue');   // WHERE ECHANGE_WEB_SERVICE = 'fooValue'
     * $query->filterByEchangeWebService('%fooValue%'); // WHERE ECHANGE_WEB_SERVICE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $echangeWebService The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByEchangeWebService($echangeWebService = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($echangeWebService)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $echangeWebService)) {
                $echangeWebService = str_replace('*', '%', $echangeWebService);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::ECHANGE_WEB_SERVICE, $echangeWebService, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntite(1234); // WHERE ID_ENTITE = 1234
     * $query->filterByIdEntite(array(12, 34)); // WHERE ID_ENTITE IN (12, 34)
     * $query->filterByIdEntite(array('min' => 12)); // WHERE ID_ENTITE >= 12
     * $query->filterByIdEntite(array('max' => 12)); // WHERE ID_ENTITE <= 12
     * </code>
     *
     * @param     mixed $idEntite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::ID_ENTITE, $idEntite, $comparison);
    }

    /**
     * Filter the query on the OBLIGATION_NOM_PRENOM_REQUERANT column
     *
     * Example usage:
     * <code>
     * $query->filterByObligationNomPrenomRequerant('fooValue');   // WHERE OBLIGATION_NOM_PRENOM_REQUERANT = 'fooValue'
     * $query->filterByObligationNomPrenomRequerant('%fooValue%'); // WHERE OBLIGATION_NOM_PRENOM_REQUERANT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligationNomPrenomRequerant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByObligationNomPrenomRequerant($obligationNomPrenomRequerant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligationNomPrenomRequerant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligationNomPrenomRequerant)) {
                $obligationNomPrenomRequerant = str_replace('*', '%', $obligationNomPrenomRequerant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::OBLIGATION_NOM_PRENOM_REQUERANT, $obligationNomPrenomRequerant, $comparison);
    }

    /**
     * Filter the query on the OBLIGATION_NOM_ORGANISME_REQUERANT column
     *
     * Example usage:
     * <code>
     * $query->filterByObligationNomOrganismeRequerant('fooValue');   // WHERE OBLIGATION_NOM_ORGANISME_REQUERANT = 'fooValue'
     * $query->filterByObligationNomOrganismeRequerant('%fooValue%'); // WHERE OBLIGATION_NOM_ORGANISME_REQUERANT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligationNomOrganismeRequerant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByObligationNomOrganismeRequerant($obligationNomOrganismeRequerant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligationNomOrganismeRequerant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligationNomOrganismeRequerant)) {
                $obligationNomOrganismeRequerant = str_replace('*', '%', $obligationNomOrganismeRequerant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::OBLIGATION_NOM_ORGANISME_REQUERANT, $obligationNomOrganismeRequerant, $comparison);
    }

    /**
     * Filter the query on the OBLIGATION_REGISTRE_COMMERCE_REQUERANT column
     *
     * Example usage:
     * <code>
     * $query->filterByObligationRegistreCommerceRequerant('fooValue');   // WHERE OBLIGATION_REGISTRE_COMMERCE_REQUERANT = 'fooValue'
     * $query->filterByObligationRegistreCommerceRequerant('%fooValue%'); // WHERE OBLIGATION_REGISTRE_COMMERCE_REQUERANT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligationRegistreCommerceRequerant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByObligationRegistreCommerceRequerant($obligationRegistreCommerceRequerant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligationRegistreCommerceRequerant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligationRegistreCommerceRequerant)) {
                $obligationRegistreCommerceRequerant = str_replace('*', '%', $obligationRegistreCommerceRequerant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::OBLIGATION_REGISTRE_COMMERCE_REQUERANT, $obligationRegistreCommerceRequerant, $comparison);
    }

    /**
     * Filter the query on the OBLIGATION_TELEPHONE_REQUERANT column
     *
     * Example usage:
     * <code>
     * $query->filterByObligationTelephoneRequerant('fooValue');   // WHERE OBLIGATION_TELEPHONE_REQUERANT = 'fooValue'
     * $query->filterByObligationTelephoneRequerant('%fooValue%'); // WHERE OBLIGATION_TELEPHONE_REQUERANT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligationTelephoneRequerant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByObligationTelephoneRequerant($obligationTelephoneRequerant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligationTelephoneRequerant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligationTelephoneRequerant)) {
                $obligationTelephoneRequerant = str_replace('*', '%', $obligationTelephoneRequerant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::OBLIGATION_TELEPHONE_REQUERANT, $obligationTelephoneRequerant, $comparison);
    }

    /**
     * Filter the query on the VISIBILITE_REGISTRE_COMMERCE_REQUERANT column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibiliteRegistreCommerceRequerant('fooValue');   // WHERE VISIBILITE_REGISTRE_COMMERCE_REQUERANT = 'fooValue'
     * $query->filterByVisibiliteRegistreCommerceRequerant('%fooValue%'); // WHERE VISIBILITE_REGISTRE_COMMERCE_REQUERANT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibiliteRegistreCommerceRequerant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByVisibiliteRegistreCommerceRequerant($visibiliteRegistreCommerceRequerant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibiliteRegistreCommerceRequerant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibiliteRegistreCommerceRequerant)) {
                $visibiliteRegistreCommerceRequerant = str_replace('*', '%', $visibiliteRegistreCommerceRequerant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::VISIBILITE_REGISTRE_COMMERCE_REQUERANT, $visibiliteRegistreCommerceRequerant, $comparison);
    }

    /**
     * Filter the query on the VISIBILITE_IDENTIFIANT_FISCAL column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibiliteIdentifiantFiscal('fooValue');   // WHERE VISIBILITE_IDENTIFIANT_FISCAL = 'fooValue'
     * $query->filterByVisibiliteIdentifiantFiscal('%fooValue%'); // WHERE VISIBILITE_IDENTIFIANT_FISCAL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibiliteIdentifiantFiscal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByVisibiliteIdentifiantFiscal($visibiliteIdentifiantFiscal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibiliteIdentifiantFiscal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibiliteIdentifiantFiscal)) {
                $visibiliteIdentifiantFiscal = str_replace('*', '%', $visibiliteIdentifiantFiscal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::VISIBILITE_IDENTIFIANT_FISCAL, $visibiliteIdentifiantFiscal, $comparison);
    }

    /**
     * Filter the query on the OBLIGATION_IDENTIFIANT_FISCAL column
     *
     * Example usage:
     * <code>
     * $query->filterByObligationIdentifiantFiscal('fooValue');   // WHERE OBLIGATION_IDENTIFIANT_FISCAL = 'fooValue'
     * $query->filterByObligationIdentifiantFiscal('%fooValue%'); // WHERE OBLIGATION_IDENTIFIANT_FISCAL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligationIdentifiantFiscal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByObligationIdentifiantFiscal($obligationIdentifiantFiscal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligationIdentifiantFiscal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligationIdentifiantFiscal)) {
                $obligationIdentifiantFiscal = str_replace('*', '%', $obligationIdentifiantFiscal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::OBLIGATION_IDENTIFIANT_FISCAL, $obligationIdentifiantFiscal, $comparison);
    }

    /**
     * Filter the query on the DELAI_CLOTURE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiClotureDemande(1234); // WHERE DELAI_CLOTURE_DEMANDE = 1234
     * $query->filterByDelaiClotureDemande(array(12, 34)); // WHERE DELAI_CLOTURE_DEMANDE IN (12, 34)
     * $query->filterByDelaiClotureDemande(array('min' => 12)); // WHERE DELAI_CLOTURE_DEMANDE >= 12
     * $query->filterByDelaiClotureDemande(array('max' => 12)); // WHERE DELAI_CLOTURE_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $delaiClotureDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByDelaiClotureDemande($delaiClotureDemande = null, $comparison = null)
    {
        if (is_array($delaiClotureDemande)) {
            $useMinMax = false;
            if (isset($delaiClotureDemande['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::DELAI_CLOTURE_DEMANDE, $delaiClotureDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiClotureDemande['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::DELAI_CLOTURE_DEMANDE, $delaiClotureDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::DELAI_CLOTURE_DEMANDE, $delaiClotureDemande, $comparison);
    }

    /**
     * Filter the query on the NOTIFICATION_AVANT_DATE_REPONSE column
     *
     * Example usage:
     * <code>
     * $query->filterByNotificationAvantDateReponse(1234); // WHERE NOTIFICATION_AVANT_DATE_REPONSE = 1234
     * $query->filterByNotificationAvantDateReponse(array(12, 34)); // WHERE NOTIFICATION_AVANT_DATE_REPONSE IN (12, 34)
     * $query->filterByNotificationAvantDateReponse(array('min' => 12)); // WHERE NOTIFICATION_AVANT_DATE_REPONSE >= 12
     * $query->filterByNotificationAvantDateReponse(array('max' => 12)); // WHERE NOTIFICATION_AVANT_DATE_REPONSE <= 12
     * </code>
     *
     * @param     mixed $notificationAvantDateReponse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByNotificationAvantDateReponse($notificationAvantDateReponse = null, $comparison = null)
    {
        if (is_array($notificationAvantDateReponse)) {
            $useMinMax = false;
            if (isset($notificationAvantDateReponse['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::NOTIFICATION_AVANT_DATE_REPONSE, $notificationAvantDateReponse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($notificationAvantDateReponse['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::NOTIFICATION_AVANT_DATE_REPONSE, $notificationAvantDateReponse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::NOTIFICATION_AVANT_DATE_REPONSE, $notificationAvantDateReponse, $comparison);
    }

    /**
     * Filter the query on the BORNE_TRAITEMENT_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByBorneTraitementDemande(1234); // WHERE BORNE_TRAITEMENT_DEMANDE = 1234
     * $query->filterByBorneTraitementDemande(array(12, 34)); // WHERE BORNE_TRAITEMENT_DEMANDE IN (12, 34)
     * $query->filterByBorneTraitementDemande(array('min' => 12)); // WHERE BORNE_TRAITEMENT_DEMANDE >= 12
     * $query->filterByBorneTraitementDemande(array('max' => 12)); // WHERE BORNE_TRAITEMENT_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $borneTraitementDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByBorneTraitementDemande($borneTraitementDemande = null, $comparison = null)
    {
        if (is_array($borneTraitementDemande)) {
            $useMinMax = false;
            if (isset($borneTraitementDemande['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::BORNE_TRAITEMENT_DEMANDE, $borneTraitementDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($borneTraitementDemande['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::BORNE_TRAITEMENT_DEMANDE, $borneTraitementDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::BORNE_TRAITEMENT_DEMANDE, $borneTraitementDemande, $comparison);
    }

    /**
     * Filter the query on the REGLE_NUMERO_DEMANDE_ENTRANT column
     *
     * Example usage:
     * <code>
     * $query->filterByRegleNumeroDemandeEntrant('fooValue');   // WHERE REGLE_NUMERO_DEMANDE_ENTRANT = 'fooValue'
     * $query->filterByRegleNumeroDemandeEntrant('%fooValue%'); // WHERE REGLE_NUMERO_DEMANDE_ENTRANT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $regleNumeroDemandeEntrant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByRegleNumeroDemandeEntrant($regleNumeroDemandeEntrant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($regleNumeroDemandeEntrant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $regleNumeroDemandeEntrant)) {
                $regleNumeroDemandeEntrant = str_replace('*', '%', $regleNumeroDemandeEntrant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_ENTRANT, $regleNumeroDemandeEntrant, $comparison);
    }

    /**
     * Filter the query on the REGLE_NUMERO_DEMANDE_SORTANT column
     *
     * Example usage:
     * <code>
     * $query->filterByRegleNumeroDemandeSortant('fooValue');   // WHERE REGLE_NUMERO_DEMANDE_SORTANT = 'fooValue'
     * $query->filterByRegleNumeroDemandeSortant('%fooValue%'); // WHERE REGLE_NUMERO_DEMANDE_SORTANT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $regleNumeroDemandeSortant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByRegleNumeroDemandeSortant($regleNumeroDemandeSortant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($regleNumeroDemandeSortant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $regleNumeroDemandeSortant)) {
                $regleNumeroDemandeSortant = str_replace('*', '%', $regleNumeroDemandeSortant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_SORTANT, $regleNumeroDemandeSortant, $comparison);
    }

    /**
     * Filter the query on the REGLE_NUMERO_DEMANDE_INTERNE column
     *
     * Example usage:
     * <code>
     * $query->filterByRegleNumeroDemandeInterne('fooValue');   // WHERE REGLE_NUMERO_DEMANDE_INTERNE = 'fooValue'
     * $query->filterByRegleNumeroDemandeInterne('%fooValue%'); // WHERE REGLE_NUMERO_DEMANDE_INTERNE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $regleNumeroDemandeInterne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByRegleNumeroDemandeInterne($regleNumeroDemandeInterne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($regleNumeroDemandeInterne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $regleNumeroDemandeInterne)) {
                $regleNumeroDemandeInterne = str_replace('*', '%', $regleNumeroDemandeInterne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::REGLE_NUMERO_DEMANDE_INTERNE, $regleNumeroDemandeInterne, $comparison);
    }

    /**
     * Filter the query on the VISIBILITE_BLOC_REPONSE_OBLIGATOIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibiliteBlocReponseObligatoire('fooValue');   // WHERE VISIBILITE_BLOC_REPONSE_OBLIGATOIRE = 'fooValue'
     * $query->filterByVisibiliteBlocReponseObligatoire('%fooValue%'); // WHERE VISIBILITE_BLOC_REPONSE_OBLIGATOIRE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibiliteBlocReponseObligatoire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByVisibiliteBlocReponseObligatoire($visibiliteBlocReponseObligatoire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibiliteBlocReponseObligatoire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibiliteBlocReponseObligatoire)) {
                $visibiliteBlocReponseObligatoire = str_replace('*', '%', $visibiliteBlocReponseObligatoire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::VISIBILITE_BLOC_REPONSE_OBLIGATOIRE, $visibiliteBlocReponseObligatoire, $comparison);
    }

    /**
     * Filter the query on the VISIBILITE_BLOC_LIEU_CONCERNE column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibiliteBlocLieuConcerne('fooValue');   // WHERE VISIBILITE_BLOC_LIEU_CONCERNE = 'fooValue'
     * $query->filterByVisibiliteBlocLieuConcerne('%fooValue%'); // WHERE VISIBILITE_BLOC_LIEU_CONCERNE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibiliteBlocLieuConcerne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByVisibiliteBlocLieuConcerne($visibiliteBlocLieuConcerne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibiliteBlocLieuConcerne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibiliteBlocLieuConcerne)) {
                $visibiliteBlocLieuConcerne = str_replace('*', '%', $visibiliteBlocLieuConcerne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::VISIBILITE_BLOC_LIEU_CONCERNE, $visibiliteBlocLieuConcerne, $comparison);
    }

    /**
     * Filter the query on the OBLIGATION_MESSAGE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByObligationMessageDemande('fooValue');   // WHERE OBLIGATION_MESSAGE_DEMANDE = 'fooValue'
     * $query->filterByObligationMessageDemande('%fooValue%'); // WHERE OBLIGATION_MESSAGE_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligationMessageDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByObligationMessageDemande($obligationMessageDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligationMessageDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligationMessageDemande)) {
                $obligationMessageDemande = str_replace('*', '%', $obligationMessageDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::OBLIGATION_MESSAGE_DEMANDE, $obligationMessageDemande, $comparison);
    }

    /**
     * Filter the query on the OBLIGATION_EMAIL_DEMANDEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByObligationEmailDemandeur('fooValue');   // WHERE OBLIGATION_EMAIL_DEMANDEUR = 'fooValue'
     * $query->filterByObligationEmailDemandeur('%fooValue%'); // WHERE OBLIGATION_EMAIL_DEMANDEUR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligationEmailDemandeur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByObligationEmailDemandeur($obligationEmailDemandeur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligationEmailDemandeur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligationEmailDemandeur)) {
                $obligationEmailDemandeur = str_replace('*', '%', $obligationEmailDemandeur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::OBLIGATION_EMAIL_DEMANDEUR, $obligationEmailDemandeur, $comparison);
    }

    /**
     * Filter the query on the OBLIGATION_SOUS_THEME column
     *
     * Example usage:
     * <code>
     * $query->filterByObligationSousTheme('fooValue');   // WHERE OBLIGATION_SOUS_THEME = 'fooValue'
     * $query->filterByObligationSousTheme('%fooValue%'); // WHERE OBLIGATION_SOUS_THEME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligationSousTheme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByObligationSousTheme($obligationSousTheme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligationSousTheme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligationSousTheme)) {
                $obligationSousTheme = str_replace('*', '%', $obligationSousTheme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::OBLIGATION_SOUS_THEME, $obligationSousTheme, $comparison);
    }

    /**
     * Filter the query on the VISIBLITIE_CONDITION_UTILISATION column
     *
     * Example usage:
     * <code>
     * $query->filterByVisiblitieConditionUtilisation('fooValue');   // WHERE VISIBLITIE_CONDITION_UTILISATION = 'fooValue'
     * $query->filterByVisiblitieConditionUtilisation('%fooValue%'); // WHERE VISIBLITIE_CONDITION_UTILISATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visiblitieConditionUtilisation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByVisiblitieConditionUtilisation($visiblitieConditionUtilisation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visiblitieConditionUtilisation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visiblitieConditionUtilisation)) {
                $visiblitieConditionUtilisation = str_replace('*', '%', $visiblitieConditionUtilisation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::VISIBLITIE_CONDITION_UTILISATION, $visiblitieConditionUtilisation, $comparison);
    }

    /**
     * Filter the query on the CONDITION_UTILISATION_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByConditionUtilisationAr('fooValue');   // WHERE CONDITION_UTILISATION_AR = 'fooValue'
     * $query->filterByConditionUtilisationAr('%fooValue%'); // WHERE CONDITION_UTILISATION_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conditionUtilisationAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByConditionUtilisationAr($conditionUtilisationAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conditionUtilisationAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conditionUtilisationAr)) {
                $conditionUtilisationAr = str_replace('*', '%', $conditionUtilisationAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::CONDITION_UTILISATION_AR, $conditionUtilisationAr, $comparison);
    }

    /**
     * Filter the query on the CONDITION_UTILISATION_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByConditionUtilisationFr('fooValue');   // WHERE CONDITION_UTILISATION_FR = 'fooValue'
     * $query->filterByConditionUtilisationFr('%fooValue%'); // WHERE CONDITION_UTILISATION_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conditionUtilisationFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByConditionUtilisationFr($conditionUtilisationFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conditionUtilisationFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conditionUtilisationFr)) {
                $conditionUtilisationFr = str_replace('*', '%', $conditionUtilisationFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::CONDITION_UTILISATION_FR, $conditionUtilisationFr, $comparison);
    }

    /**
     * Filter the query on the GESTION_DEMANDEUR_PAR_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionDemandeurParEntite('fooValue');   // WHERE GESTION_DEMANDEUR_PAR_ENTITE = 'fooValue'
     * $query->filterByGestionDemandeurParEntite('%fooValue%'); // WHERE GESTION_DEMANDEUR_PAR_ENTITE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionDemandeurParEntite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByGestionDemandeurParEntite($gestionDemandeurParEntite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionDemandeurParEntite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionDemandeurParEntite)) {
                $gestionDemandeurParEntite = str_replace('*', '%', $gestionDemandeurParEntite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::GESTION_DEMANDEUR_PAR_ENTITE, $gestionDemandeurParEntite, $comparison);
    }

    /**
     * Filter the query on the VALEUR_DEFAUT_TYPE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurDefautTypeDemande(1234); // WHERE VALEUR_DEFAUT_TYPE_DEMANDE = 1234
     * $query->filterByValeurDefautTypeDemande(array(12, 34)); // WHERE VALEUR_DEFAUT_TYPE_DEMANDE IN (12, 34)
     * $query->filterByValeurDefautTypeDemande(array('min' => 12)); // WHERE VALEUR_DEFAUT_TYPE_DEMANDE >= 12
     * $query->filterByValeurDefautTypeDemande(array('max' => 12)); // WHERE VALEUR_DEFAUT_TYPE_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $valeurDefautTypeDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByValeurDefautTypeDemande($valeurDefautTypeDemande = null, $comparison = null)
    {
        if (is_array($valeurDefautTypeDemande)) {
            $useMinMax = false;
            if (isset($valeurDefautTypeDemande['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::VALEUR_DEFAUT_TYPE_DEMANDE, $valeurDefautTypeDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valeurDefautTypeDemande['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::VALEUR_DEFAUT_TYPE_DEMANDE, $valeurDefautTypeDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::VALEUR_DEFAUT_TYPE_DEMANDE, $valeurDefautTypeDemande, $comparison);
    }

    /**
     * Filter the query on the VALEUR_DEFAUT_REPONSE_OBLIGATOIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurDefautReponseObligatoire('fooValue');   // WHERE VALEUR_DEFAUT_REPONSE_OBLIGATOIRE = 'fooValue'
     * $query->filterByValeurDefautReponseObligatoire('%fooValue%'); // WHERE VALEUR_DEFAUT_REPONSE_OBLIGATOIRE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeurDefautReponseObligatoire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByValeurDefautReponseObligatoire($valeurDefautReponseObligatoire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeurDefautReponseObligatoire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeurDefautReponseObligatoire)) {
                $valeurDefautReponseObligatoire = str_replace('*', '%', $valeurDefautReponseObligatoire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::VALEUR_DEFAUT_REPONSE_OBLIGATOIRE, $valeurDefautReponseObligatoire, $comparison);
    }

    /**
     * Filter the query on the ACCES_EXTRANET column
     *
     * Example usage:
     * <code>
     * $query->filterByAccesExtranet('fooValue');   // WHERE ACCES_EXTRANET = 'fooValue'
     * $query->filterByAccesExtranet('%fooValue%'); // WHERE ACCES_EXTRANET LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accesExtranet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByAccesExtranet($accesExtranet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accesExtranet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accesExtranet)) {
                $accesExtranet = str_replace('*', '%', $accesExtranet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::ACCES_EXTRANET, $accesExtranet, $comparison);
    }

    /**
     * Filter the query on the LANGUE_PAR_DEFAUT_EXTRANET column
     *
     * Example usage:
     * <code>
     * $query->filterByLangueParDefautExtranet('fooValue');   // WHERE LANGUE_PAR_DEFAUT_EXTRANET = 'fooValue'
     * $query->filterByLangueParDefautExtranet('%fooValue%'); // WHERE LANGUE_PAR_DEFAUT_EXTRANET LIKE '%fooValue%'
     * </code>
     *
     * @param     string $langueParDefautExtranet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByLangueParDefautExtranet($langueParDefautExtranet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($langueParDefautExtranet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $langueParDefautExtranet)) {
                $langueParDefautExtranet = str_replace('*', '%', $langueParDefautExtranet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::LANGUE_PAR_DEFAUT_EXTRANET, $langueParDefautExtranet, $comparison);
    }

    /**
     * Filter the query on the GOOGLE_ANALYTICS column
     *
     * Example usage:
     * <code>
     * $query->filterByGoogleAnalytics('fooValue');   // WHERE GOOGLE_ANALYTICS = 'fooValue'
     * $query->filterByGoogleAnalytics('%fooValue%'); // WHERE GOOGLE_ANALYTICS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $googleAnalytics The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByGoogleAnalytics($googleAnalytics = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($googleAnalytics)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $googleAnalytics)) {
                $googleAnalytics = str_replace('*', '%', $googleAnalytics);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::GOOGLE_ANALYTICS, $googleAnalytics, $comparison);
    }

    /**
     * Filter the query on the CHIFFREMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByChiffrement('fooValue');   // WHERE CHIFFREMENT = 'fooValue'
     * $query->filterByChiffrement('%fooValue%'); // WHERE CHIFFREMENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chiffrement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByChiffrement($chiffrement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chiffrement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $chiffrement)) {
                $chiffrement = str_replace('*', '%', $chiffrement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::CHIFFREMENT, $chiffrement, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE_CENTRALE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntiteCentrale(1234); // WHERE ID_ENTITE_CENTRALE = 1234
     * $query->filterByIdEntiteCentrale(array(12, 34)); // WHERE ID_ENTITE_CENTRALE IN (12, 34)
     * $query->filterByIdEntiteCentrale(array('min' => 12)); // WHERE ID_ENTITE_CENTRALE >= 12
     * $query->filterByIdEntiteCentrale(array('max' => 12)); // WHERE ID_ENTITE_CENTRALE <= 12
     * </code>
     *
     * @param     mixed $idEntiteCentrale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByIdEntiteCentrale($idEntiteCentrale = null, $comparison = null)
    {
        if (is_array($idEntiteCentrale)) {
            $useMinMax = false;
            if (isset($idEntiteCentrale['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::ID_ENTITE_CENTRALE, $idEntiteCentrale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntiteCentrale['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::ID_ENTITE_CENTRALE, $idEntiteCentrale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::ID_ENTITE_CENTRALE, $idEntiteCentrale, $comparison);
    }

    /**
     * Filter the query on the SERVICE_NOTIFICATION_SMS column
     *
     * Example usage:
     * <code>
     * $query->filterByServiceNotificationSms('fooValue');   // WHERE SERVICE_NOTIFICATION_SMS = 'fooValue'
     * $query->filterByServiceNotificationSms('%fooValue%'); // WHERE SERVICE_NOTIFICATION_SMS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $serviceNotificationSms The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByServiceNotificationSms($serviceNotificationSms = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($serviceNotificationSms)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $serviceNotificationSms)) {
                $serviceNotificationSms = str_replace('*', '%', $serviceNotificationSms);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::SERVICE_NOTIFICATION_SMS, $serviceNotificationSms, $comparison);
    }

    /**
     * Filter the query on the LOGIN_SERVICE_SMS column
     *
     * Example usage:
     * <code>
     * $query->filterByLoginServiceSms('fooValue');   // WHERE LOGIN_SERVICE_SMS = 'fooValue'
     * $query->filterByLoginServiceSms('%fooValue%'); // WHERE LOGIN_SERVICE_SMS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loginServiceSms The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByLoginServiceSms($loginServiceSms = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loginServiceSms)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $loginServiceSms)) {
                $loginServiceSms = str_replace('*', '%', $loginServiceSms);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::LOGIN_SERVICE_SMS, $loginServiceSms, $comparison);
    }

    /**
     * Filter the query on the PASS_SERVICE_SMS column
     *
     * Example usage:
     * <code>
     * $query->filterByPassServiceSms('fooValue');   // WHERE PASS_SERVICE_SMS = 'fooValue'
     * $query->filterByPassServiceSms('%fooValue%'); // WHERE PASS_SERVICE_SMS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $passServiceSms The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByPassServiceSms($passServiceSms = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($passServiceSms)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $passServiceSms)) {
                $passServiceSms = str_replace('*', '%', $passServiceSms);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::PASS_SERVICE_SMS, $passServiceSms, $comparison);
    }

    /**
     * Filter the query on the CODE_ENVOI_SMS column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeEnvoiSms('fooValue');   // WHERE CODE_ENVOI_SMS = 'fooValue'
     * $query->filterByCodeEnvoiSms('%fooValue%'); // WHERE CODE_ENVOI_SMS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeEnvoiSms The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByCodeEnvoiSms($codeEnvoiSms = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeEnvoiSms)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeEnvoiSms)) {
                $codeEnvoiSms = str_replace('*', '%', $codeEnvoiSms);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::CODE_ENVOI_SMS, $codeEnvoiSms, $comparison);
    }

    /**
     * Filter the query on the URL_SERVICE_SMS column
     *
     * Example usage:
     * <code>
     * $query->filterByUrlServiceSms('fooValue');   // WHERE URL_SERVICE_SMS = 'fooValue'
     * $query->filterByUrlServiceSms('%fooValue%'); // WHERE URL_SERVICE_SMS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urlServiceSms The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByUrlServiceSms($urlServiceSms = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urlServiceSms)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urlServiceSms)) {
                $urlServiceSms = str_replace('*', '%', $urlServiceSms);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::URL_SERVICE_SMS, $urlServiceSms, $comparison);
    }

    /**
     * Filter the query on the CIRCUIT_VALIDATION column
     *
     * Example usage:
     * <code>
     * $query->filterByCircuitValidation('fooValue');   // WHERE CIRCUIT_VALIDATION = 'fooValue'
     * $query->filterByCircuitValidation('%fooValue%'); // WHERE CIRCUIT_VALIDATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $circuitValidation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByCircuitValidation($circuitValidation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($circuitValidation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $circuitValidation)) {
                $circuitValidation = str_replace('*', '%', $circuitValidation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::CIRCUIT_VALIDATION, $circuitValidation, $comparison);
    }

    /**
     * Filter the query on the VISIBILITE_MESSAGE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibiliteMessageDemande('fooValue');   // WHERE VISIBILITE_MESSAGE_DEMANDE = 'fooValue'
     * $query->filterByVisibiliteMessageDemande('%fooValue%'); // WHERE VISIBILITE_MESSAGE_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibiliteMessageDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByVisibiliteMessageDemande($visibiliteMessageDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibiliteMessageDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibiliteMessageDemande)) {
                $visibiliteMessageDemande = str_replace('*', '%', $visibiliteMessageDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::VISIBILITE_MESSAGE_DEMANDE, $visibiliteMessageDemande, $comparison);
    }

    /**
     * Filter the query on the CODE_SIGNATAIRE_CERTIFICAT column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeSignataireCertificat('fooValue');   // WHERE CODE_SIGNATAIRE_CERTIFICAT = 'fooValue'
     * $query->filterByCodeSignataireCertificat('%fooValue%'); // WHERE CODE_SIGNATAIRE_CERTIFICAT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeSignataireCertificat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByCodeSignataireCertificat($codeSignataireCertificat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeSignataireCertificat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeSignataireCertificat)) {
                $codeSignataireCertificat = str_replace('*', '%', $codeSignataireCertificat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::CODE_SIGNATAIRE_CERTIFICAT, $codeSignataireCertificat, $comparison);
    }

    /**
     * Filter the query on the ACCES_STATISTIQUES column
     *
     * Example usage:
     * <code>
     * $query->filterByAccesStatistiques('fooValue');   // WHERE ACCES_STATISTIQUES = 'fooValue'
     * $query->filterByAccesStatistiques('%fooValue%'); // WHERE ACCES_STATISTIQUES LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accesStatistiques The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByAccesStatistiques($accesStatistiques = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accesStatistiques)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accesStatistiques)) {
                $accesStatistiques = str_replace('*', '%', $accesStatistiques);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::ACCES_STATISTIQUES, $accesStatistiques, $comparison);
    }

    /**
     * Filter the query on the WEBSERVICE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByWebserviceDemande('fooValue');   // WHERE WEBSERVICE_DEMANDE = 'fooValue'
     * $query->filterByWebserviceDemande('%fooValue%'); // WHERE WEBSERVICE_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $webserviceDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByWebserviceDemande($webserviceDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($webserviceDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $webserviceDemande)) {
                $webserviceDemande = str_replace('*', '%', $webserviceDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::WEBSERVICE_DEMANDE, $webserviceDemande, $comparison);
    }

    /**
     * Filter the query on the URL_WEBSERVICE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByUrlWebserviceDemande('fooValue');   // WHERE URL_WEBSERVICE_DEMANDE = 'fooValue'
     * $query->filterByUrlWebserviceDemande('%fooValue%'); // WHERE URL_WEBSERVICE_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urlWebserviceDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByUrlWebserviceDemande($urlWebserviceDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urlWebserviceDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urlWebserviceDemande)) {
                $urlWebserviceDemande = str_replace('*', '%', $urlWebserviceDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::URL_WEBSERVICE_DEMANDE, $urlWebserviceDemande, $comparison);
    }

    /**
     * Filter the query on the JETON_WEBSERVICE column
     *
     * Example usage:
     * <code>
     * $query->filterByJetonWebservice('fooValue');   // WHERE JETON_WEBSERVICE = 'fooValue'
     * $query->filterByJetonWebservice('%fooValue%'); // WHERE JETON_WEBSERVICE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jetonWebservice The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByJetonWebservice($jetonWebservice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jetonWebservice)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jetonWebservice)) {
                $jetonWebservice = str_replace('*', '%', $jetonWebservice);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::JETON_WEBSERVICE, $jetonWebservice, $comparison);
    }

    /**
     * Filter the query on the IDENTIFIANT_ENTITE_RECEPTION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiantEntiteReception(1234); // WHERE IDENTIFIANT_ENTITE_RECEPTION = 1234
     * $query->filterByIdentifiantEntiteReception(array(12, 34)); // WHERE IDENTIFIANT_ENTITE_RECEPTION IN (12, 34)
     * $query->filterByIdentifiantEntiteReception(array('min' => 12)); // WHERE IDENTIFIANT_ENTITE_RECEPTION >= 12
     * $query->filterByIdentifiantEntiteReception(array('max' => 12)); // WHERE IDENTIFIANT_ENTITE_RECEPTION <= 12
     * </code>
     *
     * @param     mixed $identifiantEntiteReception The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByIdentifiantEntiteReception($identifiantEntiteReception = null, $comparison = null)
    {
        if (is_array($identifiantEntiteReception)) {
            $useMinMax = false;
            if (isset($identifiantEntiteReception['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::IDENTIFIANT_ENTITE_RECEPTION, $identifiantEntiteReception['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($identifiantEntiteReception['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::IDENTIFIANT_ENTITE_RECEPTION, $identifiantEntiteReception['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::IDENTIFIANT_ENTITE_RECEPTION, $identifiantEntiteReception, $comparison);
    }

    /**
     * Filter the query on the IDENTIFIANT_SOUS_THEME column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiantSousTheme(1234); // WHERE IDENTIFIANT_SOUS_THEME = 1234
     * $query->filterByIdentifiantSousTheme(array(12, 34)); // WHERE IDENTIFIANT_SOUS_THEME IN (12, 34)
     * $query->filterByIdentifiantSousTheme(array('min' => 12)); // WHERE IDENTIFIANT_SOUS_THEME >= 12
     * $query->filterByIdentifiantSousTheme(array('max' => 12)); // WHERE IDENTIFIANT_SOUS_THEME <= 12
     * </code>
     *
     * @param     mixed $identifiantSousTheme The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByIdentifiantSousTheme($identifiantSousTheme = null, $comparison = null)
    {
        if (is_array($identifiantSousTheme)) {
            $useMinMax = false;
            if (isset($identifiantSousTheme['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::IDENTIFIANT_SOUS_THEME, $identifiantSousTheme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($identifiantSousTheme['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::IDENTIFIANT_SOUS_THEME, $identifiantSousTheme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::IDENTIFIANT_SOUS_THEME, $identifiantSousTheme, $comparison);
    }

    /**
     * Filter the query on the SCANNER column
     *
     * Example usage:
     * <code>
     * $query->filterByScanner('fooValue');   // WHERE SCANNER = 'fooValue'
     * $query->filterByScanner('%fooValue%'); // WHERE SCANNER LIKE '%fooValue%'
     * </code>
     *
     * @param     string $scanner The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByScanner($scanner = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($scanner)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $scanner)) {
                $scanner = str_replace('*', '%', $scanner);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::SCANNER, $scanner, $comparison);
    }

    /**
     * Filter the query on the ACTIVATION_AUTH_SOCLE column
     *
     * Example usage:
     * <code>
     * $query->filterByActivationAuthSocle('fooValue');   // WHERE ACTIVATION_AUTH_SOCLE = 'fooValue'
     * $query->filterByActivationAuthSocle('%fooValue%'); // WHERE ACTIVATION_AUTH_SOCLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $activationAuthSocle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByActivationAuthSocle($activationAuthSocle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($activationAuthSocle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $activationAuthSocle)) {
                $activationAuthSocle = str_replace('*', '%', $activationAuthSocle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::ACTIVATION_AUTH_SOCLE, $activationAuthSocle, $comparison);
    }

    /**
     * Filter the query on the AFFICHAGE_ENREGISTRER_GENERER_NUMERO column
     *
     * Example usage:
     * <code>
     * $query->filterByAffichageEnregistrerGenererNumero('fooValue');   // WHERE AFFICHAGE_ENREGISTRER_GENERER_NUMERO = 'fooValue'
     * $query->filterByAffichageEnregistrerGenererNumero('%fooValue%'); // WHERE AFFICHAGE_ENREGISTRER_GENERER_NUMERO LIKE '%fooValue%'
     * </code>
     *
     * @param     string $affichageEnregistrerGenererNumero The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByAffichageEnregistrerGenererNumero($affichageEnregistrerGenererNumero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($affichageEnregistrerGenererNumero)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $affichageEnregistrerGenererNumero)) {
                $affichageEnregistrerGenererNumero = str_replace('*', '%', $affichageEnregistrerGenererNumero);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::AFFICHAGE_ENREGISTRER_GENERER_NUMERO, $affichageEnregistrerGenererNumero, $comparison);
    }

    /**
     * Filter the query on the JETON_ORG_SERVICE column
     *
     * Example usage:
     * <code>
     * $query->filterByJetonOrgService('fooValue');   // WHERE JETON_ORG_SERVICE = 'fooValue'
     * $query->filterByJetonOrgService('%fooValue%'); // WHERE JETON_ORG_SERVICE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jetonOrgService The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByJetonOrgService($jetonOrgService = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jetonOrgService)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jetonOrgService)) {
                $jetonOrgService = str_replace('*', '%', $jetonOrgService);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::JETON_ORG_SERVICE, $jetonOrgService, $comparison);
    }

    /**
     * Filter the query on the ONGLET_DEPUIS_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOngletDepuis1(1234); // WHERE ONGLET_DEPUIS_1 = 1234
     * $query->filterByOngletDepuis1(array(12, 34)); // WHERE ONGLET_DEPUIS_1 IN (12, 34)
     * $query->filterByOngletDepuis1(array('min' => 12)); // WHERE ONGLET_DEPUIS_1 >= 12
     * $query->filterByOngletDepuis1(array('max' => 12)); // WHERE ONGLET_DEPUIS_1 <= 12
     * </code>
     *
     * @param     mixed $ongletDepuis1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByOngletDepuis1($ongletDepuis1 = null, $comparison = null)
    {
        if (is_array($ongletDepuis1)) {
            $useMinMax = false;
            if (isset($ongletDepuis1['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::ONGLET_DEPUIS_1, $ongletDepuis1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ongletDepuis1['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::ONGLET_DEPUIS_1, $ongletDepuis1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::ONGLET_DEPUIS_1, $ongletDepuis1, $comparison);
    }

    /**
     * Filter the query on the ONGLET_DEPUIS_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOngletDepuis2(1234); // WHERE ONGLET_DEPUIS_2 = 1234
     * $query->filterByOngletDepuis2(array(12, 34)); // WHERE ONGLET_DEPUIS_2 IN (12, 34)
     * $query->filterByOngletDepuis2(array('min' => 12)); // WHERE ONGLET_DEPUIS_2 >= 12
     * $query->filterByOngletDepuis2(array('max' => 12)); // WHERE ONGLET_DEPUIS_2 <= 12
     * </code>
     *
     * @param     mixed $ongletDepuis2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByOngletDepuis2($ongletDepuis2 = null, $comparison = null)
    {
        if (is_array($ongletDepuis2)) {
            $useMinMax = false;
            if (isset($ongletDepuis2['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::ONGLET_DEPUIS_2, $ongletDepuis2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ongletDepuis2['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::ONGLET_DEPUIS_2, $ongletDepuis2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::ONGLET_DEPUIS_2, $ongletDepuis2, $comparison);
    }

    /**
     * Filter the query on the NOMBRE_REOUVERTURE column
     *
     * Example usage:
     * <code>
     * $query->filterByNombreReouverture(1234); // WHERE NOMBRE_REOUVERTURE = 1234
     * $query->filterByNombreReouverture(array(12, 34)); // WHERE NOMBRE_REOUVERTURE IN (12, 34)
     * $query->filterByNombreReouverture(array('min' => 12)); // WHERE NOMBRE_REOUVERTURE >= 12
     * $query->filterByNombreReouverture(array('max' => 12)); // WHERE NOMBRE_REOUVERTURE <= 12
     * </code>
     *
     * @param     mixed $nombreReouverture The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByNombreReouverture($nombreReouverture = null, $comparison = null)
    {
        if (is_array($nombreReouverture)) {
            $useMinMax = false;
            if (isset($nombreReouverture['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::NOMBRE_REOUVERTURE, $nombreReouverture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nombreReouverture['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::NOMBRE_REOUVERTURE, $nombreReouverture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::NOMBRE_REOUVERTURE, $nombreReouverture, $comparison);
    }

    /**
     * Filter the query on the CENTRE_APPEL column
     *
     * Example usage:
     * <code>
     * $query->filterByCentreAppel('fooValue');   // WHERE CENTRE_APPEL = 'fooValue'
     * $query->filterByCentreAppel('%fooValue%'); // WHERE CENTRE_APPEL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $centreAppel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByCentreAppel($centreAppel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($centreAppel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $centreAppel)) {
                $centreAppel = str_replace('*', '%', $centreAppel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::CENTRE_APPEL, $centreAppel, $comparison);
    }

    /**
     * Filter the query on the URL_WS_CA column
     *
     * Example usage:
     * <code>
     * $query->filterByUrlWsCa('fooValue');   // WHERE URL_WS_CA = 'fooValue'
     * $query->filterByUrlWsCa('%fooValue%'); // WHERE URL_WS_CA LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urlWsCa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByUrlWsCa($urlWsCa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urlWsCa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urlWsCa)) {
                $urlWsCa = str_replace('*', '%', $urlWsCa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::URL_WS_CA, $urlWsCa, $comparison);
    }

    /**
     * Filter the query on the AUTHENTIFICATION_LDAP column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthentificationLdap('fooValue');   // WHERE AUTHENTIFICATION_LDAP = 'fooValue'
     * $query->filterByAuthentificationLdap('%fooValue%'); // WHERE AUTHENTIFICATION_LDAP LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authentificationLdap The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByAuthentificationLdap($authentificationLdap = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authentificationLdap)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authentificationLdap)) {
                $authentificationLdap = str_replace('*', '%', $authentificationLdap);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::AUTHENTIFICATION_LDAP, $authentificationLdap, $comparison);
    }

    /**
     * Filter the query on the IP_LDAP column
     *
     * Example usage:
     * <code>
     * $query->filterByIpLdap('fooValue');   // WHERE IP_LDAP = 'fooValue'
     * $query->filterByIpLdap('%fooValue%'); // WHERE IP_LDAP LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ipLdap The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByIpLdap($ipLdap = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ipLdap)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ipLdap)) {
                $ipLdap = str_replace('*', '%', $ipLdap);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::IP_LDAP, $ipLdap, $comparison);
    }

    /**
     * Filter the query on the BASE_DN_LDAP column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseDnLdap('fooValue');   // WHERE BASE_DN_LDAP = 'fooValue'
     * $query->filterByBaseDnLdap('%fooValue%'); // WHERE BASE_DN_LDAP LIKE '%fooValue%'
     * </code>
     *
     * @param     string $baseDnLdap The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByBaseDnLdap($baseDnLdap = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($baseDnLdap)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $baseDnLdap)) {
                $baseDnLdap = str_replace('*', '%', $baseDnLdap);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::BASE_DN_LDAP, $baseDnLdap, $comparison);
    }

    /**
     * Filter the query on the USER_LDAP column
     *
     * Example usage:
     * <code>
     * $query->filterByUserLdap('fooValue');   // WHERE USER_LDAP = 'fooValue'
     * $query->filterByUserLdap('%fooValue%'); // WHERE USER_LDAP LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userLdap The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByUserLdap($userLdap = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userLdap)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userLdap)) {
                $userLdap = str_replace('*', '%', $userLdap);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::USER_LDAP, $userLdap, $comparison);
    }

    /**
     * Filter the query on the PASSWORD_LDAP column
     *
     * Example usage:
     * <code>
     * $query->filterByPasswordLdap('fooValue');   // WHERE PASSWORD_LDAP = 'fooValue'
     * $query->filterByPasswordLdap('%fooValue%'); // WHERE PASSWORD_LDAP LIKE '%fooValue%'
     * </code>
     *
     * @param     string $passwordLdap The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByPasswordLdap($passwordLdap = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($passwordLdap)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $passwordLdap)) {
                $passwordLdap = str_replace('*', '%', $passwordLdap);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::PASSWORD_LDAP, $passwordLdap, $comparison);
    }

    /**
     * Filter the query on the SCHEMA_LDAP column
     *
     * Example usage:
     * <code>
     * $query->filterBySchemaLdap('fooValue');   // WHERE SCHEMA_LDAP = 'fooValue'
     * $query->filterBySchemaLdap('%fooValue%'); // WHERE SCHEMA_LDAP LIKE '%fooValue%'
     * </code>
     *
     * @param     string $schemaLdap The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterBySchemaLdap($schemaLdap = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($schemaLdap)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $schemaLdap)) {
                $schemaLdap = str_replace('*', '%', $schemaLdap);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::SCHEMA_LDAP, $schemaLdap, $comparison);
    }

    /**
     * Filter the query on the PORT_LDAP column
     *
     * Example usage:
     * <code>
     * $query->filterByPortLdap(1234); // WHERE PORT_LDAP = 1234
     * $query->filterByPortLdap(array(12, 34)); // WHERE PORT_LDAP IN (12, 34)
     * $query->filterByPortLdap(array('min' => 12)); // WHERE PORT_LDAP >= 12
     * $query->filterByPortLdap(array('max' => 12)); // WHERE PORT_LDAP <= 12
     * </code>
     *
     * @param     mixed $portLdap The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByPortLdap($portLdap = null, $comparison = null)
    {
        if (is_array($portLdap)) {
            $useMinMax = false;
            if (isset($portLdap['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::PORT_LDAP, $portLdap['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($portLdap['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::PORT_LDAP, $portLdap['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::PORT_LDAP, $portLdap, $comparison);
    }

    /**
     * Filter the query on the PROLONGATION column
     *
     * Example usage:
     * <code>
     * $query->filterByProlongation('fooValue');   // WHERE PROLONGATION = 'fooValue'
     * $query->filterByProlongation('%fooValue%'); // WHERE PROLONGATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prolongation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByProlongation($prolongation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prolongation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prolongation)) {
                $prolongation = str_replace('*', '%', $prolongation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::PROLONGATION, $prolongation, $comparison);
    }

    /**
     * Filter the query on the DUREE_PROLONGATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDureeProlongation(1234); // WHERE DUREE_PROLONGATION = 1234
     * $query->filterByDureeProlongation(array(12, 34)); // WHERE DUREE_PROLONGATION IN (12, 34)
     * $query->filterByDureeProlongation(array('min' => 12)); // WHERE DUREE_PROLONGATION >= 12
     * $query->filterByDureeProlongation(array('max' => 12)); // WHERE DUREE_PROLONGATION <= 12
     * </code>
     *
     * @param     mixed $dureeProlongation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByDureeProlongation($dureeProlongation = null, $comparison = null)
    {
        if (is_array($dureeProlongation)) {
            $useMinMax = false;
            if (isset($dureeProlongation['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::DUREE_PROLONGATION, $dureeProlongation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dureeProlongation['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::DUREE_PROLONGATION, $dureeProlongation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::DUREE_PROLONGATION, $dureeProlongation, $comparison);
    }

    /**
     * Filter the query on the ORGANISME_PARAMETRAGE column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganismeParametrage(1234); // WHERE ORGANISME_PARAMETRAGE = 1234
     * $query->filterByOrganismeParametrage(array(12, 34)); // WHERE ORGANISME_PARAMETRAGE IN (12, 34)
     * $query->filterByOrganismeParametrage(array('min' => 12)); // WHERE ORGANISME_PARAMETRAGE >= 12
     * $query->filterByOrganismeParametrage(array('max' => 12)); // WHERE ORGANISME_PARAMETRAGE <= 12
     * </code>
     *
     * @param     mixed $organismeParametrage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByOrganismeParametrage($organismeParametrage = null, $comparison = null)
    {
        if (is_array($organismeParametrage)) {
            $useMinMax = false;
            if (isset($organismeParametrage['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::ORGANISME_PARAMETRAGE, $organismeParametrage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($organismeParametrage['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::ORGANISME_PARAMETRAGE, $organismeParametrage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::ORGANISME_PARAMETRAGE, $organismeParametrage, $comparison);
    }

    /**
     * Filter the query on the ORGANISME_GESTION_UTILISATEURS column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganismeGestionUtilisateurs(1234); // WHERE ORGANISME_GESTION_UTILISATEURS = 1234
     * $query->filterByOrganismeGestionUtilisateurs(array(12, 34)); // WHERE ORGANISME_GESTION_UTILISATEURS IN (12, 34)
     * $query->filterByOrganismeGestionUtilisateurs(array('min' => 12)); // WHERE ORGANISME_GESTION_UTILISATEURS >= 12
     * $query->filterByOrganismeGestionUtilisateurs(array('max' => 12)); // WHERE ORGANISME_GESTION_UTILISATEURS <= 12
     * </code>
     *
     * @param     mixed $organismeGestionUtilisateurs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByOrganismeGestionUtilisateurs($organismeGestionUtilisateurs = null, $comparison = null)
    {
        if (is_array($organismeGestionUtilisateurs)) {
            $useMinMax = false;
            if (isset($organismeGestionUtilisateurs['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::ORGANISME_GESTION_UTILISATEURS, $organismeGestionUtilisateurs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($organismeGestionUtilisateurs['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::ORGANISME_GESTION_UTILISATEURS, $organismeGestionUtilisateurs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::ORGANISME_GESTION_UTILISATEURS, $organismeGestionUtilisateurs, $comparison);
    }

    /**
     * Filter the query on the TYPE_GESTION_UTILISATEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeGestionUtilisateur('fooValue');   // WHERE TYPE_GESTION_UTILISATEUR = 'fooValue'
     * $query->filterByTypeGestionUtilisateur('%fooValue%'); // WHERE TYPE_GESTION_UTILISATEUR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeGestionUtilisateur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByTypeGestionUtilisateur($typeGestionUtilisateur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeGestionUtilisateur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeGestionUtilisateur)) {
                $typeGestionUtilisateur = str_replace('*', '%', $typeGestionUtilisateur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::TYPE_GESTION_UTILISATEUR, $typeGestionUtilisateur, $comparison);
    }

    /**
     * Filter the query on the MULTI_AFFECTATION column
     *
     * Example usage:
     * <code>
     * $query->filterByMultiAffectation('fooValue');   // WHERE MULTI_AFFECTATION = 'fooValue'
     * $query->filterByMultiAffectation('%fooValue%'); // WHERE MULTI_AFFECTATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $multiAffectation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByMultiAffectation($multiAffectation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($multiAffectation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $multiAffectation)) {
                $multiAffectation = str_replace('*', '%', $multiAffectation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::MULTI_AFFECTATION, $multiAffectation, $comparison);
    }

    /**
     * Filter the query on the TAUX_ECHEANCE column
     *
     * Example usage:
     * <code>
     * $query->filterByTauxEcheance(1234); // WHERE TAUX_ECHEANCE = 1234
     * $query->filterByTauxEcheance(array(12, 34)); // WHERE TAUX_ECHEANCE IN (12, 34)
     * $query->filterByTauxEcheance(array('min' => 12)); // WHERE TAUX_ECHEANCE >= 12
     * $query->filterByTauxEcheance(array('max' => 12)); // WHERE TAUX_ECHEANCE <= 12
     * </code>
     *
     * @param     mixed $tauxEcheance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByTauxEcheance($tauxEcheance = null, $comparison = null)
    {
        if (is_array($tauxEcheance)) {
            $useMinMax = false;
            if (isset($tauxEcheance['min'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::TAUX_ECHEANCE, $tauxEcheance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tauxEcheance['max'])) {
                $this->addUsingAlias(ConfigurationOrgansimePeer::TAUX_ECHEANCE, $tauxEcheance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::TAUX_ECHEANCE, $tauxEcheance, $comparison);
    }

    /**
     * Filter the query on the REPONSE_AFFECTATION_EXTERNE column
     *
     * Example usage:
     * <code>
     * $query->filterByReponseAffectationExterne('fooValue');   // WHERE REPONSE_AFFECTATION_EXTERNE = 'fooValue'
     * $query->filterByReponseAffectationExterne('%fooValue%'); // WHERE REPONSE_AFFECTATION_EXTERNE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reponseAffectationExterne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByReponseAffectationExterne($reponseAffectationExterne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reponseAffectationExterne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reponseAffectationExterne)) {
                $reponseAffectationExterne = str_replace('*', '%', $reponseAffectationExterne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::REPONSE_AFFECTATION_EXTERNE, $reponseAffectationExterne, $comparison);
    }

    /**
     * Filter the query on the INCREMENT_CONFIDENTIEL column
     *
     * Example usage:
     * <code>
     * $query->filterByIncrementConfidentiel('fooValue');   // WHERE INCREMENT_CONFIDENTIEL = 'fooValue'
     * $query->filterByIncrementConfidentiel('%fooValue%'); // WHERE INCREMENT_CONFIDENTIEL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $incrementConfidentiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByIncrementConfidentiel($incrementConfidentiel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($incrementConfidentiel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $incrementConfidentiel)) {
                $incrementConfidentiel = str_replace('*', '%', $incrementConfidentiel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::INCREMENT_CONFIDENTIEL, $incrementConfidentiel, $comparison);
    }

    /**
     * Filter the query on the OBLIGATION_EMETTEUR_COURRIER_ENTRANT column
     *
     * Example usage:
     * <code>
     * $query->filterByObligationEmetteurCourrierEntrant('fooValue');   // WHERE OBLIGATION_EMETTEUR_COURRIER_ENTRANT = 'fooValue'
     * $query->filterByObligationEmetteurCourrierEntrant('%fooValue%'); // WHERE OBLIGATION_EMETTEUR_COURRIER_ENTRANT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligationEmetteurCourrierEntrant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByObligationEmetteurCourrierEntrant($obligationEmetteurCourrierEntrant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligationEmetteurCourrierEntrant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligationEmetteurCourrierEntrant)) {
                $obligationEmetteurCourrierEntrant = str_replace('*', '%', $obligationEmetteurCourrierEntrant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::OBLIGATION_EMETTEUR_COURRIER_ENTRANT, $obligationEmetteurCourrierEntrant, $comparison);
    }

    /**
     * Filter the query on the OBLIGATION_EMETTEUR_COURRIER_INTERNE column
     *
     * Example usage:
     * <code>
     * $query->filterByObligationEmetteurCourrierInterne('fooValue');   // WHERE OBLIGATION_EMETTEUR_COURRIER_INTERNE = 'fooValue'
     * $query->filterByObligationEmetteurCourrierInterne('%fooValue%'); // WHERE OBLIGATION_EMETTEUR_COURRIER_INTERNE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligationEmetteurCourrierInterne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByObligationEmetteurCourrierInterne($obligationEmetteurCourrierInterne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligationEmetteurCourrierInterne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligationEmetteurCourrierInterne)) {
                $obligationEmetteurCourrierInterne = str_replace('*', '%', $obligationEmetteurCourrierInterne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::OBLIGATION_EMETTEUR_COURRIER_INTERNE, $obligationEmetteurCourrierInterne, $comparison);
    }

    /**
     * Filter the query on the OBLIGATION_DESTINATAIRE_COURRIER_SORTANT column
     *
     * Example usage:
     * <code>
     * $query->filterByObligationDestinataireCourrierSortant('fooValue');   // WHERE OBLIGATION_DESTINATAIRE_COURRIER_SORTANT = 'fooValue'
     * $query->filterByObligationDestinataireCourrierSortant('%fooValue%'); // WHERE OBLIGATION_DESTINATAIRE_COURRIER_SORTANT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligationDestinataireCourrierSortant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByObligationDestinataireCourrierSortant($obligationDestinataireCourrierSortant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligationDestinataireCourrierSortant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligationDestinataireCourrierSortant)) {
                $obligationDestinataireCourrierSortant = str_replace('*', '%', $obligationDestinataireCourrierSortant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_COURRIER_SORTANT, $obligationDestinataireCourrierSortant, $comparison);
    }

    /**
     * Filter the query on the OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT column
     *
     * Example usage:
     * <code>
     * $query->filterByObligationDestinataireMentionneCourrierEntrant('fooValue');   // WHERE OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT = 'fooValue'
     * $query->filterByObligationDestinataireMentionneCourrierEntrant('%fooValue%'); // WHERE OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligationDestinataireMentionneCourrierEntrant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByObligationDestinataireMentionneCourrierEntrant($obligationDestinataireMentionneCourrierEntrant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligationDestinataireMentionneCourrierEntrant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligationDestinataireMentionneCourrierEntrant)) {
                $obligationDestinataireMentionneCourrierEntrant = str_replace('*', '%', $obligationDestinataireMentionneCourrierEntrant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_MENTIONNE_COURRIER_ENTRANT, $obligationDestinataireMentionneCourrierEntrant, $comparison);
    }

    /**
     * Filter the query on the OBLIGATION_DESTINATAIRE_COURRIER_INTERNE column
     *
     * Example usage:
     * <code>
     * $query->filterByObligationDestinataireCourrierInterne('fooValue');   // WHERE OBLIGATION_DESTINATAIRE_COURRIER_INTERNE = 'fooValue'
     * $query->filterByObligationDestinataireCourrierInterne('%fooValue%'); // WHERE OBLIGATION_DESTINATAIRE_COURRIER_INTERNE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligationDestinataireCourrierInterne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByObligationDestinataireCourrierInterne($obligationDestinataireCourrierInterne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligationDestinataireCourrierInterne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligationDestinataireCourrierInterne)) {
                $obligationDestinataireCourrierInterne = str_replace('*', '%', $obligationDestinataireCourrierInterne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::OBLIGATION_DESTINATAIRE_COURRIER_INTERNE, $obligationDestinataireCourrierInterne, $comparison);
    }

    /**
     * Filter the query on the OBLIGATION_OBJET column
     *
     * Example usage:
     * <code>
     * $query->filterByObligationObjet('fooValue');   // WHERE OBLIGATION_OBJET = 'fooValue'
     * $query->filterByObligationObjet('%fooValue%'); // WHERE OBLIGATION_OBJET LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligationObjet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByObligationObjet($obligationObjet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligationObjet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligationObjet)) {
                $obligationObjet = str_replace('*', '%', $obligationObjet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::OBLIGATION_OBJET, $obligationObjet, $comparison);
    }

    /**
     * Filter the query on the OBLIGATION_SIGNATAIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByObligationSignataire('fooValue');   // WHERE OBLIGATION_SIGNATAIRE = 'fooValue'
     * $query->filterByObligationSignataire('%fooValue%'); // WHERE OBLIGATION_SIGNATAIRE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligationSignataire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByObligationSignataire($obligationSignataire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligationSignataire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligationSignataire)) {
                $obligationSignataire = str_replace('*', '%', $obligationSignataire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::OBLIGATION_SIGNATAIRE, $obligationSignataire, $comparison);
    }

    /**
     * Filter the query on the GESTION_DEMANDEURS column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionDemandeurs('fooValue');   // WHERE GESTION_DEMANDEURS = 'fooValue'
     * $query->filterByGestionDemandeurs('%fooValue%'); // WHERE GESTION_DEMANDEURS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionDemandeurs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByGestionDemandeurs($gestionDemandeurs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionDemandeurs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionDemandeurs)) {
                $gestionDemandeurs = str_replace('*', '%', $gestionDemandeurs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::GESTION_DEMANDEURS, $gestionDemandeurs, $comparison);
    }

    /**
     * Filter the query on the NUMERO_FOURNISSEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroFournisseur('fooValue');   // WHERE NUMERO_FOURNISSEUR = 'fooValue'
     * $query->filterByNumeroFournisseur('%fooValue%'); // WHERE NUMERO_FOURNISSEUR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroFournisseur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByNumeroFournisseur($numeroFournisseur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroFournisseur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroFournisseur)) {
                $numeroFournisseur = str_replace('*', '%', $numeroFournisseur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::NUMERO_FOURNISSEUR, $numeroFournisseur, $comparison);
    }

    /**
     * Filter the query on the TYPE_DELAI column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDelai('fooValue');   // WHERE TYPE_DELAI = 'fooValue'
     * $query->filterByTypeDelai('%fooValue%'); // WHERE TYPE_DELAI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeDelai The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByTypeDelai($typeDelai = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeDelai)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeDelai)) {
                $typeDelai = str_replace('*', '%', $typeDelai);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::TYPE_DELAI, $typeDelai, $comparison);
    }

    /**
     * Filter the query on the NUM_PROVISOIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByNumProvisoire('fooValue');   // WHERE NUM_PROVISOIRE = 'fooValue'
     * $query->filterByNumProvisoire('%fooValue%'); // WHERE NUM_PROVISOIRE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numProvisoire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function filterByNumProvisoire($numProvisoire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numProvisoire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numProvisoire)) {
                $numProvisoire = str_replace('*', '%', $numProvisoire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationOrgansimePeer::NUM_PROVISOIRE, $numProvisoire, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ConfigurationOrgansime $configurationOrgansime Object to remove from the list of results
     *
     * @return ConfigurationOrgansimeQuery The current query, for fluid interface
     */
    public function prune($configurationOrgansime = null)
    {
        if ($configurationOrgansime) {
            $this->addUsingAlias(ConfigurationOrgansimePeer::ID, $configurationOrgansime->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
