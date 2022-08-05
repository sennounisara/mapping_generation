<?php


/**
 * Base class that represents a query for the 'Entreprise' table.
 *
 * 
 *
 * @method CommonEntrepriseQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonEntrepriseQuery orderByAdminId($order = Criteria::ASC) Order by the admin_id column
 * @method CommonEntrepriseQuery orderBySiren($order = Criteria::ASC) Order by the siren column
 * @method CommonEntrepriseQuery orderByRepmetiers($order = Criteria::ASC) Order by the repmetiers column
 * @method CommonEntrepriseQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonEntrepriseQuery orderByAdresse($order = Criteria::ASC) Order by the adresse column
 * @method CommonEntrepriseQuery orderByCodepostal($order = Criteria::ASC) Order by the codepostal column
 * @method CommonEntrepriseQuery orderByVilleadresse($order = Criteria::ASC) Order by the villeadresse column
 * @method CommonEntrepriseQuery orderByPaysadresse($order = Criteria::ASC) Order by the paysadresse column
 * @method CommonEntrepriseQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonEntrepriseQuery orderByTaille($order = Criteria::ASC) Order by the taille column
 * @method CommonEntrepriseQuery orderByFormejuridique($order = Criteria::ASC) Order by the formejuridique column
 * @method CommonEntrepriseQuery orderByVilleenregistrement($order = Criteria::ASC) Order by the villeenregistrement column
 * @method CommonEntrepriseQuery orderByMotifnonindnum($order = Criteria::ASC) Order by the motifNonIndNum column
 * @method CommonEntrepriseQuery orderByOrdreprofouagrement($order = Criteria::ASC) Order by the ordreProfOuAgrement column
 * @method CommonEntrepriseQuery orderByDateconstsociete($order = Criteria::ASC) Order by the dateConstSociete column
 * @method CommonEntrepriseQuery orderByNomorginscription($order = Criteria::ASC) Order by the nomOrgInscription column
 * @method CommonEntrepriseQuery orderByAdrorginscription($order = Criteria::ASC) Order by the adrOrgInscription column
 * @method CommonEntrepriseQuery orderByDateconstassoc($order = Criteria::ASC) Order by the dateConstAssoc column
 * @method CommonEntrepriseQuery orderByDateconstassocetrangere($order = Criteria::ASC) Order by the dateConstAssocEtrangere column
 * @method CommonEntrepriseQuery orderByNompersonnepublique($order = Criteria::ASC) Order by the nomPersonnePublique column
 * @method CommonEntrepriseQuery orderByNationalite($order = Criteria::ASC) Order by the nationalite column
 * @method CommonEntrepriseQuery orderByRedressement($order = Criteria::ASC) Order by the redressement column
 * @method CommonEntrepriseQuery orderByPaysenregistrement($order = Criteria::ASC) Order by the paysenregistrement column
 * @method CommonEntrepriseQuery orderBySirenetranger($order = Criteria::ASC) Order by the sirenEtranger column
 * @method CommonEntrepriseQuery orderByNumassoetrangere($order = Criteria::ASC) Order by the numAssoEtrangere column
 * @method CommonEntrepriseQuery orderByDebutexerciceglob1($order = Criteria::ASC) Order by the debutExerciceGlob1 column
 * @method CommonEntrepriseQuery orderByFinexerciceglob1($order = Criteria::ASC) Order by the finExerciceGlob1 column
 * @method CommonEntrepriseQuery orderByDebutexerciceglob2($order = Criteria::ASC) Order by the debutExerciceGlob2 column
 * @method CommonEntrepriseQuery orderByFinexerciceglob2($order = Criteria::ASC) Order by the finExerciceGlob2 column
 * @method CommonEntrepriseQuery orderByDebutexerciceglob3($order = Criteria::ASC) Order by the debutExerciceGlob3 column
 * @method CommonEntrepriseQuery orderByFinexerciceglob3($order = Criteria::ASC) Order by the finExerciceGlob3 column
 * @method CommonEntrepriseQuery orderByVentesglob1($order = Criteria::ASC) Order by the ventesGlob1 column
 * @method CommonEntrepriseQuery orderByVentesglob2($order = Criteria::ASC) Order by the ventesGlob2 column
 * @method CommonEntrepriseQuery orderByVentesglob3($order = Criteria::ASC) Order by the ventesGlob3 column
 * @method CommonEntrepriseQuery orderByBiensglob1($order = Criteria::ASC) Order by the biensGlob1 column
 * @method CommonEntrepriseQuery orderByBiensglob2($order = Criteria::ASC) Order by the biensGlob2 column
 * @method CommonEntrepriseQuery orderByBiensglob3($order = Criteria::ASC) Order by the biensGlob3 column
 * @method CommonEntrepriseQuery orderByServicesglob1($order = Criteria::ASC) Order by the servicesGlob1 column
 * @method CommonEntrepriseQuery orderByServicesglob2($order = Criteria::ASC) Order by the servicesGlob2 column
 * @method CommonEntrepriseQuery orderByServicesglob3($order = Criteria::ASC) Order by the servicesGlob3 column
 * @method CommonEntrepriseQuery orderByTotalglob1($order = Criteria::ASC) Order by the totalGlob1 column
 * @method CommonEntrepriseQuery orderByTotalglob2($order = Criteria::ASC) Order by the totalGlob2 column
 * @method CommonEntrepriseQuery orderByTotalglob3($order = Criteria::ASC) Order by the totalGlob3 column
 * @method CommonEntrepriseQuery orderByCodeape($order = Criteria::ASC) Order by the codeape column
 * @method CommonEntrepriseQuery orderByOrigineCompte($order = Criteria::ASC) Order by the origine_compte column
 * @method CommonEntrepriseQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method CommonEntrepriseQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method CommonEntrepriseQuery orderBySiteInternet($order = Criteria::ASC) Order by the site_internet column
 * @method CommonEntrepriseQuery orderByDescriptionActivite($order = Criteria::ASC) Order by the description_activite column
 * @method CommonEntrepriseQuery orderByActiviteDomaineDefense($order = Criteria::ASC) Order by the activite_domaine_defense column
 * @method CommonEntrepriseQuery orderByAnneeClotureExercice1($order = Criteria::ASC) Order by the annee_cloture_exercice1 column
 * @method CommonEntrepriseQuery orderByAnneeClotureExercice2($order = Criteria::ASC) Order by the annee_cloture_exercice2 column
 * @method CommonEntrepriseQuery orderByAnneeClotureExercice3($order = Criteria::ASC) Order by the annee_cloture_exercice3 column
 * @method CommonEntrepriseQuery orderByEffectifMoyen1($order = Criteria::ASC) Order by the effectif_moyen1 column
 * @method CommonEntrepriseQuery orderByEffectifMoyen2($order = Criteria::ASC) Order by the effectif_moyen2 column
 * @method CommonEntrepriseQuery orderByEffectifMoyen3($order = Criteria::ASC) Order by the effectif_moyen3 column
 * @method CommonEntrepriseQuery orderByEffectifEncadrement1($order = Criteria::ASC) Order by the effectif_encadrement1 column
 * @method CommonEntrepriseQuery orderByEffectifEncadrement2($order = Criteria::ASC) Order by the effectif_encadrement2 column
 * @method CommonEntrepriseQuery orderByEffectifEncadrement3($order = Criteria::ASC) Order by the effectif_encadrement3 column
 * @method CommonEntrepriseQuery orderByPme1($order = Criteria::ASC) Order by the pme1 column
 * @method CommonEntrepriseQuery orderByPme2($order = Criteria::ASC) Order by the pme2 column
 * @method CommonEntrepriseQuery orderByPme3($order = Criteria::ASC) Order by the pme3 column
 * @method CommonEntrepriseQuery orderByAdresse2($order = Criteria::ASC) Order by the adresse2 column
 * @method CommonEntrepriseQuery orderByNicsiege($order = Criteria::ASC) Order by the nicSiege column
 * @method CommonEntrepriseQuery orderByAcronymePays($order = Criteria::ASC) Order by the acronyme_pays column
 * @method CommonEntrepriseQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonEntrepriseQuery orderByDateModification($order = Criteria::ASC) Order by the date_modification column
 * @method CommonEntrepriseQuery orderByIdInitial($order = Criteria::ASC) Order by the id_initial column
 * @method CommonEntrepriseQuery orderByRegion($order = Criteria::ASC) Order by the region column
 * @method CommonEntrepriseQuery orderByProvince($order = Criteria::ASC) Order by the province column
 * @method CommonEntrepriseQuery orderByTelephone2($order = Criteria::ASC) Order by the telephone2 column
 * @method CommonEntrepriseQuery orderByTelephone3($order = Criteria::ASC) Order by the telephone3 column
 * @method CommonEntrepriseQuery orderByCnss($order = Criteria::ASC) Order by the cnss column
 * @method CommonEntrepriseQuery orderByRcNum($order = Criteria::ASC) Order by the rc_num column
 * @method CommonEntrepriseQuery orderByRcVille($order = Criteria::ASC) Order by the rc_ville column
 * @method CommonEntrepriseQuery orderByDomainesActivites($order = Criteria::ASC) Order by the domaines_activites column
 * @method CommonEntrepriseQuery orderByNumTax($order = Criteria::ASC) Order by the num_tax column
 * @method CommonEntrepriseQuery orderByDocumentsCommerciaux($order = Criteria::ASC) Order by the documents_commerciaux column
 * @method CommonEntrepriseQuery orderByIntituleDocumentsCommerciaux($order = Criteria::ASC) Order by the intitule_documents_commerciaux column
 * @method CommonEntrepriseQuery orderByTailleDocumentsCommerciaux($order = Criteria::ASC) Order by the taille_documents_commerciaux column
 * @method CommonEntrepriseQuery orderByQualification($order = Criteria::ASC) Order by the qualification column
 * @method CommonEntrepriseQuery orderByAgrement($order = Criteria::ASC) Order by the agrement column
 * @method CommonEntrepriseQuery orderByMoyensTechnique($order = Criteria::ASC) Order by the moyens_technique column
 * @method CommonEntrepriseQuery orderByMoyensHumains($order = Criteria::ASC) Order by the moyens_humains column
 * @method CommonEntrepriseQuery orderByCompteActif($order = Criteria::ASC) Order by the compte_actif column
 * @method CommonEntrepriseQuery orderByCapitalSocial($order = Criteria::ASC) Order by the capital_social column
 * @method CommonEntrepriseQuery orderByIfu($order = Criteria::ASC) Order by the ifu column
 * @method CommonEntrepriseQuery orderByIdAgentCreateur($order = Criteria::ASC) Order by the id_agent_createur column
 * @method CommonEntrepriseQuery orderByNomAgent($order = Criteria::ASC) Order by the nom_agent column
 * @method CommonEntrepriseQuery orderByPrenomAgent($order = Criteria::ASC) Order by the prenom_agent column
 * @method CommonEntrepriseQuery orderByAdressesElectroniques($order = Criteria::ASC) Order by the adresses_electroniques column
 * @method CommonEntrepriseQuery orderByVisibleBourse($order = Criteria::ASC) Order by the visible_bourse column
 * @method CommonEntrepriseQuery orderByTypeCollaboration($order = Criteria::ASC) Order by the type_collaboration column
 * @method CommonEntrepriseQuery orderByEntrepriseEa($order = Criteria::ASC) Order by the entreprise_EA column
 * @method CommonEntrepriseQuery orderByEntrepriseSiae($order = Criteria::ASC) Order by the entreprise_SIAE column
 * @method CommonEntrepriseQuery orderByTypeEntreprise($order = Criteria::ASC) Order by the type_entreprise column
 * @method CommonEntrepriseQuery orderByNote($order = Criteria::ASC) Order by the note column
 * @method CommonEntrepriseQuery orderByCodeCpv($order = Criteria::ASC) Order by the code_cpv column
 * @method CommonEntrepriseQuery orderByStatutReferencement($order = Criteria::ASC) Order by the statut_referencement column
 * @method CommonEntrepriseQuery orderByTailleEntreprise($order = Criteria::ASC) Order by the taille_entreprise column
 * @method CommonEntrepriseQuery orderByIdentifiantFiscale($order = Criteria::ASC) Order by the identifiant_fiscale column
 * @method CommonEntrepriseQuery orderByValide($order = Criteria::ASC) Order by the valide column
 *
 * @method CommonEntrepriseQuery groupById() Group by the id column
 * @method CommonEntrepriseQuery groupByAdminId() Group by the admin_id column
 * @method CommonEntrepriseQuery groupBySiren() Group by the siren column
 * @method CommonEntrepriseQuery groupByRepmetiers() Group by the repmetiers column
 * @method CommonEntrepriseQuery groupByNom() Group by the nom column
 * @method CommonEntrepriseQuery groupByAdresse() Group by the adresse column
 * @method CommonEntrepriseQuery groupByCodepostal() Group by the codepostal column
 * @method CommonEntrepriseQuery groupByVilleadresse() Group by the villeadresse column
 * @method CommonEntrepriseQuery groupByPaysadresse() Group by the paysadresse column
 * @method CommonEntrepriseQuery groupByEmail() Group by the email column
 * @method CommonEntrepriseQuery groupByTaille() Group by the taille column
 * @method CommonEntrepriseQuery groupByFormejuridique() Group by the formejuridique column
 * @method CommonEntrepriseQuery groupByVilleenregistrement() Group by the villeenregistrement column
 * @method CommonEntrepriseQuery groupByMotifnonindnum() Group by the motifNonIndNum column
 * @method CommonEntrepriseQuery groupByOrdreprofouagrement() Group by the ordreProfOuAgrement column
 * @method CommonEntrepriseQuery groupByDateconstsociete() Group by the dateConstSociete column
 * @method CommonEntrepriseQuery groupByNomorginscription() Group by the nomOrgInscription column
 * @method CommonEntrepriseQuery groupByAdrorginscription() Group by the adrOrgInscription column
 * @method CommonEntrepriseQuery groupByDateconstassoc() Group by the dateConstAssoc column
 * @method CommonEntrepriseQuery groupByDateconstassocetrangere() Group by the dateConstAssocEtrangere column
 * @method CommonEntrepriseQuery groupByNompersonnepublique() Group by the nomPersonnePublique column
 * @method CommonEntrepriseQuery groupByNationalite() Group by the nationalite column
 * @method CommonEntrepriseQuery groupByRedressement() Group by the redressement column
 * @method CommonEntrepriseQuery groupByPaysenregistrement() Group by the paysenregistrement column
 * @method CommonEntrepriseQuery groupBySirenetranger() Group by the sirenEtranger column
 * @method CommonEntrepriseQuery groupByNumassoetrangere() Group by the numAssoEtrangere column
 * @method CommonEntrepriseQuery groupByDebutexerciceglob1() Group by the debutExerciceGlob1 column
 * @method CommonEntrepriseQuery groupByFinexerciceglob1() Group by the finExerciceGlob1 column
 * @method CommonEntrepriseQuery groupByDebutexerciceglob2() Group by the debutExerciceGlob2 column
 * @method CommonEntrepriseQuery groupByFinexerciceglob2() Group by the finExerciceGlob2 column
 * @method CommonEntrepriseQuery groupByDebutexerciceglob3() Group by the debutExerciceGlob3 column
 * @method CommonEntrepriseQuery groupByFinexerciceglob3() Group by the finExerciceGlob3 column
 * @method CommonEntrepriseQuery groupByVentesglob1() Group by the ventesGlob1 column
 * @method CommonEntrepriseQuery groupByVentesglob2() Group by the ventesGlob2 column
 * @method CommonEntrepriseQuery groupByVentesglob3() Group by the ventesGlob3 column
 * @method CommonEntrepriseQuery groupByBiensglob1() Group by the biensGlob1 column
 * @method CommonEntrepriseQuery groupByBiensglob2() Group by the biensGlob2 column
 * @method CommonEntrepriseQuery groupByBiensglob3() Group by the biensGlob3 column
 * @method CommonEntrepriseQuery groupByServicesglob1() Group by the servicesGlob1 column
 * @method CommonEntrepriseQuery groupByServicesglob2() Group by the servicesGlob2 column
 * @method CommonEntrepriseQuery groupByServicesglob3() Group by the servicesGlob3 column
 * @method CommonEntrepriseQuery groupByTotalglob1() Group by the totalGlob1 column
 * @method CommonEntrepriseQuery groupByTotalglob2() Group by the totalGlob2 column
 * @method CommonEntrepriseQuery groupByTotalglob3() Group by the totalGlob3 column
 * @method CommonEntrepriseQuery groupByCodeape() Group by the codeape column
 * @method CommonEntrepriseQuery groupByOrigineCompte() Group by the origine_compte column
 * @method CommonEntrepriseQuery groupByTelephone() Group by the telephone column
 * @method CommonEntrepriseQuery groupByFax() Group by the fax column
 * @method CommonEntrepriseQuery groupBySiteInternet() Group by the site_internet column
 * @method CommonEntrepriseQuery groupByDescriptionActivite() Group by the description_activite column
 * @method CommonEntrepriseQuery groupByActiviteDomaineDefense() Group by the activite_domaine_defense column
 * @method CommonEntrepriseQuery groupByAnneeClotureExercice1() Group by the annee_cloture_exercice1 column
 * @method CommonEntrepriseQuery groupByAnneeClotureExercice2() Group by the annee_cloture_exercice2 column
 * @method CommonEntrepriseQuery groupByAnneeClotureExercice3() Group by the annee_cloture_exercice3 column
 * @method CommonEntrepriseQuery groupByEffectifMoyen1() Group by the effectif_moyen1 column
 * @method CommonEntrepriseQuery groupByEffectifMoyen2() Group by the effectif_moyen2 column
 * @method CommonEntrepriseQuery groupByEffectifMoyen3() Group by the effectif_moyen3 column
 * @method CommonEntrepriseQuery groupByEffectifEncadrement1() Group by the effectif_encadrement1 column
 * @method CommonEntrepriseQuery groupByEffectifEncadrement2() Group by the effectif_encadrement2 column
 * @method CommonEntrepriseQuery groupByEffectifEncadrement3() Group by the effectif_encadrement3 column
 * @method CommonEntrepriseQuery groupByPme1() Group by the pme1 column
 * @method CommonEntrepriseQuery groupByPme2() Group by the pme2 column
 * @method CommonEntrepriseQuery groupByPme3() Group by the pme3 column
 * @method CommonEntrepriseQuery groupByAdresse2() Group by the adresse2 column
 * @method CommonEntrepriseQuery groupByNicsiege() Group by the nicSiege column
 * @method CommonEntrepriseQuery groupByAcronymePays() Group by the acronyme_pays column
 * @method CommonEntrepriseQuery groupByDateCreation() Group by the date_creation column
 * @method CommonEntrepriseQuery groupByDateModification() Group by the date_modification column
 * @method CommonEntrepriseQuery groupByIdInitial() Group by the id_initial column
 * @method CommonEntrepriseQuery groupByRegion() Group by the region column
 * @method CommonEntrepriseQuery groupByProvince() Group by the province column
 * @method CommonEntrepriseQuery groupByTelephone2() Group by the telephone2 column
 * @method CommonEntrepriseQuery groupByTelephone3() Group by the telephone3 column
 * @method CommonEntrepriseQuery groupByCnss() Group by the cnss column
 * @method CommonEntrepriseQuery groupByRcNum() Group by the rc_num column
 * @method CommonEntrepriseQuery groupByRcVille() Group by the rc_ville column
 * @method CommonEntrepriseQuery groupByDomainesActivites() Group by the domaines_activites column
 * @method CommonEntrepriseQuery groupByNumTax() Group by the num_tax column
 * @method CommonEntrepriseQuery groupByDocumentsCommerciaux() Group by the documents_commerciaux column
 * @method CommonEntrepriseQuery groupByIntituleDocumentsCommerciaux() Group by the intitule_documents_commerciaux column
 * @method CommonEntrepriseQuery groupByTailleDocumentsCommerciaux() Group by the taille_documents_commerciaux column
 * @method CommonEntrepriseQuery groupByQualification() Group by the qualification column
 * @method CommonEntrepriseQuery groupByAgrement() Group by the agrement column
 * @method CommonEntrepriseQuery groupByMoyensTechnique() Group by the moyens_technique column
 * @method CommonEntrepriseQuery groupByMoyensHumains() Group by the moyens_humains column
 * @method CommonEntrepriseQuery groupByCompteActif() Group by the compte_actif column
 * @method CommonEntrepriseQuery groupByCapitalSocial() Group by the capital_social column
 * @method CommonEntrepriseQuery groupByIfu() Group by the ifu column
 * @method CommonEntrepriseQuery groupByIdAgentCreateur() Group by the id_agent_createur column
 * @method CommonEntrepriseQuery groupByNomAgent() Group by the nom_agent column
 * @method CommonEntrepriseQuery groupByPrenomAgent() Group by the prenom_agent column
 * @method CommonEntrepriseQuery groupByAdressesElectroniques() Group by the adresses_electroniques column
 * @method CommonEntrepriseQuery groupByVisibleBourse() Group by the visible_bourse column
 * @method CommonEntrepriseQuery groupByTypeCollaboration() Group by the type_collaboration column
 * @method CommonEntrepriseQuery groupByEntrepriseEa() Group by the entreprise_EA column
 * @method CommonEntrepriseQuery groupByEntrepriseSiae() Group by the entreprise_SIAE column
 * @method CommonEntrepriseQuery groupByTypeEntreprise() Group by the type_entreprise column
 * @method CommonEntrepriseQuery groupByNote() Group by the note column
 * @method CommonEntrepriseQuery groupByCodeCpv() Group by the code_cpv column
 * @method CommonEntrepriseQuery groupByStatutReferencement() Group by the statut_referencement column
 * @method CommonEntrepriseQuery groupByTailleEntreprise() Group by the taille_entreprise column
 * @method CommonEntrepriseQuery groupByIdentifiantFiscale() Group by the identifiant_fiscale column
 * @method CommonEntrepriseQuery groupByValide() Group by the valide column
 *
 * @method CommonEntrepriseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEntrepriseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEntrepriseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEntrepriseQuery leftJoinCommonContactEntreprise($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonContactEntreprise relation
 * @method CommonEntrepriseQuery rightJoinCommonContactEntreprise($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonContactEntreprise relation
 * @method CommonEntrepriseQuery innerJoinCommonContactEntreprise($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonContactEntreprise relation
 *
 * @method CommonEntrepriseQuery leftJoinCommonInscrit($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonInscrit relation
 * @method CommonEntrepriseQuery rightJoinCommonInscrit($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonInscrit relation
 * @method CommonEntrepriseQuery innerJoinCommonInscrit($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonInscrit relation
 *
 * @method CommonEntrepriseQuery leftJoinCommonPanierEntreprise($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonPanierEntreprise relation
 * @method CommonEntrepriseQuery rightJoinCommonPanierEntreprise($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonPanierEntreprise relation
 * @method CommonEntrepriseQuery innerJoinCommonPanierEntreprise($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonPanierEntreprise relation
 *
 * @method CommonEntrepriseQuery leftJoinCommonBonCommandeParCatalogue($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonBonCommandeParCatalogue relation
 * @method CommonEntrepriseQuery rightJoinCommonBonCommandeParCatalogue($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonBonCommandeParCatalogue relation
 * @method CommonEntrepriseQuery innerJoinCommonBonCommandeParCatalogue($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonBonCommandeParCatalogue relation
 *
 * @method CommonEntrepriseQuery leftJoinCommonExecFactureRelatedByIdEntrepriseCrea($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecFactureRelatedByIdEntrepriseCrea relation
 * @method CommonEntrepriseQuery rightJoinCommonExecFactureRelatedByIdEntrepriseCrea($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecFactureRelatedByIdEntrepriseCrea relation
 * @method CommonEntrepriseQuery innerJoinCommonExecFactureRelatedByIdEntrepriseCrea($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecFactureRelatedByIdEntrepriseCrea relation
 *
 * @method CommonEntrepriseQuery leftJoinCommonExecFactureRelatedByIdEntrepriseModif($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecFactureRelatedByIdEntrepriseModif relation
 * @method CommonEntrepriseQuery rightJoinCommonExecFactureRelatedByIdEntrepriseModif($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecFactureRelatedByIdEntrepriseModif relation
 * @method CommonEntrepriseQuery innerJoinCommonExecFactureRelatedByIdEntrepriseModif($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecFactureRelatedByIdEntrepriseModif relation
 *
 * @method CommonEntrepriseQuery leftJoinCommonExecInscritContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecInscritContrat relation
 * @method CommonEntrepriseQuery rightJoinCommonExecInscritContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecInscritContrat relation
 * @method CommonEntrepriseQuery innerJoinCommonExecInscritContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecInscritContrat relation
 *
 * @method CommonEntrepriseQuery leftJoinCommonExecRepartition($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecRepartition relation
 * @method CommonEntrepriseQuery rightJoinCommonExecRepartition($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecRepartition relation
 * @method CommonEntrepriseQuery innerJoinCommonExecRepartition($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecRepartition relation
 *
 * @method CommonEntrepriseQuery leftJoinCommonFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonFacture relation
 * @method CommonEntrepriseQuery rightJoinCommonFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonFacture relation
 * @method CommonEntrepriseQuery innerJoinCommonFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonFacture relation
 *
 * @method CommonEntrepriseQuery leftJoinCommonTReponseElecFormulaire($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTReponseElecFormulaire relation
 * @method CommonEntrepriseQuery rightJoinCommonTReponseElecFormulaire($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTReponseElecFormulaire relation
 * @method CommonEntrepriseQuery innerJoinCommonTReponseElecFormulaire($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTReponseElecFormulaire relation
 *
 * @method CommonEntreprise findOne(PropelPDO $con = null) Return the first CommonEntreprise matching the query
 * @method CommonEntreprise findOneOrCreate(PropelPDO $con = null) Return the first CommonEntreprise matching the query, or a new CommonEntreprise object populated from the query conditions when no match is found
 *
 * @method CommonEntreprise findOneByAdminId(int $admin_id) Return the first CommonEntreprise filtered by the admin_id column
 * @method CommonEntreprise findOneBySiren(string $siren) Return the first CommonEntreprise filtered by the siren column
 * @method CommonEntreprise findOneByRepmetiers(string $repmetiers) Return the first CommonEntreprise filtered by the repmetiers column
 * @method CommonEntreprise findOneByNom(string $nom) Return the first CommonEntreprise filtered by the nom column
 * @method CommonEntreprise findOneByAdresse(string $adresse) Return the first CommonEntreprise filtered by the adresse column
 * @method CommonEntreprise findOneByCodepostal(string $codepostal) Return the first CommonEntreprise filtered by the codepostal column
 * @method CommonEntreprise findOneByVilleadresse(string $villeadresse) Return the first CommonEntreprise filtered by the villeadresse column
 * @method CommonEntreprise findOneByPaysadresse(string $paysadresse) Return the first CommonEntreprise filtered by the paysadresse column
 * @method CommonEntreprise findOneByEmail(string $email) Return the first CommonEntreprise filtered by the email column
 * @method CommonEntreprise findOneByTaille(int $taille) Return the first CommonEntreprise filtered by the taille column
 * @method CommonEntreprise findOneByFormejuridique(string $formejuridique) Return the first CommonEntreprise filtered by the formejuridique column
 * @method CommonEntreprise findOneByVilleenregistrement(string $villeenregistrement) Return the first CommonEntreprise filtered by the villeenregistrement column
 * @method CommonEntreprise findOneByMotifnonindnum(int $motifNonIndNum) Return the first CommonEntreprise filtered by the motifNonIndNum column
 * @method CommonEntreprise findOneByOrdreprofouagrement(string $ordreProfOuAgrement) Return the first CommonEntreprise filtered by the ordreProfOuAgrement column
 * @method CommonEntreprise findOneByDateconstsociete(string $dateConstSociete) Return the first CommonEntreprise filtered by the dateConstSociete column
 * @method CommonEntreprise findOneByNomorginscription(string $nomOrgInscription) Return the first CommonEntreprise filtered by the nomOrgInscription column
 * @method CommonEntreprise findOneByAdrorginscription(string $adrOrgInscription) Return the first CommonEntreprise filtered by the adrOrgInscription column
 * @method CommonEntreprise findOneByDateconstassoc(string $dateConstAssoc) Return the first CommonEntreprise filtered by the dateConstAssoc column
 * @method CommonEntreprise findOneByDateconstassocetrangere(string $dateConstAssocEtrangere) Return the first CommonEntreprise filtered by the dateConstAssocEtrangere column
 * @method CommonEntreprise findOneByNompersonnepublique(string $nomPersonnePublique) Return the first CommonEntreprise filtered by the nomPersonnePublique column
 * @method CommonEntreprise findOneByNationalite(string $nationalite) Return the first CommonEntreprise filtered by the nationalite column
 * @method CommonEntreprise findOneByRedressement(int $redressement) Return the first CommonEntreprise filtered by the redressement column
 * @method CommonEntreprise findOneByPaysenregistrement(string $paysenregistrement) Return the first CommonEntreprise filtered by the paysenregistrement column
 * @method CommonEntreprise findOneBySirenetranger(string $sirenEtranger) Return the first CommonEntreprise filtered by the sirenEtranger column
 * @method CommonEntreprise findOneByNumassoetrangere(string $numAssoEtrangere) Return the first CommonEntreprise filtered by the numAssoEtrangere column
 * @method CommonEntreprise findOneByDebutexerciceglob1(string $debutExerciceGlob1) Return the first CommonEntreprise filtered by the debutExerciceGlob1 column
 * @method CommonEntreprise findOneByFinexerciceglob1(string $finExerciceGlob1) Return the first CommonEntreprise filtered by the finExerciceGlob1 column
 * @method CommonEntreprise findOneByDebutexerciceglob2(string $debutExerciceGlob2) Return the first CommonEntreprise filtered by the debutExerciceGlob2 column
 * @method CommonEntreprise findOneByFinexerciceglob2(string $finExerciceGlob2) Return the first CommonEntreprise filtered by the finExerciceGlob2 column
 * @method CommonEntreprise findOneByDebutexerciceglob3(string $debutExerciceGlob3) Return the first CommonEntreprise filtered by the debutExerciceGlob3 column
 * @method CommonEntreprise findOneByFinexerciceglob3(string $finExerciceGlob3) Return the first CommonEntreprise filtered by the finExerciceGlob3 column
 * @method CommonEntreprise findOneByVentesglob1(string $ventesGlob1) Return the first CommonEntreprise filtered by the ventesGlob1 column
 * @method CommonEntreprise findOneByVentesglob2(string $ventesGlob2) Return the first CommonEntreprise filtered by the ventesGlob2 column
 * @method CommonEntreprise findOneByVentesglob3(string $ventesGlob3) Return the first CommonEntreprise filtered by the ventesGlob3 column
 * @method CommonEntreprise findOneByBiensglob1(string $biensGlob1) Return the first CommonEntreprise filtered by the biensGlob1 column
 * @method CommonEntreprise findOneByBiensglob2(string $biensGlob2) Return the first CommonEntreprise filtered by the biensGlob2 column
 * @method CommonEntreprise findOneByBiensglob3(string $biensGlob3) Return the first CommonEntreprise filtered by the biensGlob3 column
 * @method CommonEntreprise findOneByServicesglob1(string $servicesGlob1) Return the first CommonEntreprise filtered by the servicesGlob1 column
 * @method CommonEntreprise findOneByServicesglob2(string $servicesGlob2) Return the first CommonEntreprise filtered by the servicesGlob2 column
 * @method CommonEntreprise findOneByServicesglob3(string $servicesGlob3) Return the first CommonEntreprise filtered by the servicesGlob3 column
 * @method CommonEntreprise findOneByTotalglob1(string $totalGlob1) Return the first CommonEntreprise filtered by the totalGlob1 column
 * @method CommonEntreprise findOneByTotalglob2(string $totalGlob2) Return the first CommonEntreprise filtered by the totalGlob2 column
 * @method CommonEntreprise findOneByTotalglob3(string $totalGlob3) Return the first CommonEntreprise filtered by the totalGlob3 column
 * @method CommonEntreprise findOneByCodeape(string $codeape) Return the first CommonEntreprise filtered by the codeape column
 * @method CommonEntreprise findOneByOrigineCompte(string $origine_compte) Return the first CommonEntreprise filtered by the origine_compte column
 * @method CommonEntreprise findOneByTelephone(string $telephone) Return the first CommonEntreprise filtered by the telephone column
 * @method CommonEntreprise findOneByFax(string $fax) Return the first CommonEntreprise filtered by the fax column
 * @method CommonEntreprise findOneBySiteInternet(string $site_internet) Return the first CommonEntreprise filtered by the site_internet column
 * @method CommonEntreprise findOneByDescriptionActivite(string $description_activite) Return the first CommonEntreprise filtered by the description_activite column
 * @method CommonEntreprise findOneByActiviteDomaineDefense(string $activite_domaine_defense) Return the first CommonEntreprise filtered by the activite_domaine_defense column
 * @method CommonEntreprise findOneByAnneeClotureExercice1(string $annee_cloture_exercice1) Return the first CommonEntreprise filtered by the annee_cloture_exercice1 column
 * @method CommonEntreprise findOneByAnneeClotureExercice2(string $annee_cloture_exercice2) Return the first CommonEntreprise filtered by the annee_cloture_exercice2 column
 * @method CommonEntreprise findOneByAnneeClotureExercice3(string $annee_cloture_exercice3) Return the first CommonEntreprise filtered by the annee_cloture_exercice3 column
 * @method CommonEntreprise findOneByEffectifMoyen1(int $effectif_moyen1) Return the first CommonEntreprise filtered by the effectif_moyen1 column
 * @method CommonEntreprise findOneByEffectifMoyen2(int $effectif_moyen2) Return the first CommonEntreprise filtered by the effectif_moyen2 column
 * @method CommonEntreprise findOneByEffectifMoyen3(int $effectif_moyen3) Return the first CommonEntreprise filtered by the effectif_moyen3 column
 * @method CommonEntreprise findOneByEffectifEncadrement1(int $effectif_encadrement1) Return the first CommonEntreprise filtered by the effectif_encadrement1 column
 * @method CommonEntreprise findOneByEffectifEncadrement2(int $effectif_encadrement2) Return the first CommonEntreprise filtered by the effectif_encadrement2 column
 * @method CommonEntreprise findOneByEffectifEncadrement3(int $effectif_encadrement3) Return the first CommonEntreprise filtered by the effectif_encadrement3 column
 * @method CommonEntreprise findOneByPme1(string $pme1) Return the first CommonEntreprise filtered by the pme1 column
 * @method CommonEntreprise findOneByPme2(string $pme2) Return the first CommonEntreprise filtered by the pme2 column
 * @method CommonEntreprise findOneByPme3(string $pme3) Return the first CommonEntreprise filtered by the pme3 column
 * @method CommonEntreprise findOneByAdresse2(string $adresse2) Return the first CommonEntreprise filtered by the adresse2 column
 * @method CommonEntreprise findOneByNicsiege(string $nicSiege) Return the first CommonEntreprise filtered by the nicSiege column
 * @method CommonEntreprise findOneByAcronymePays(string $acronyme_pays) Return the first CommonEntreprise filtered by the acronyme_pays column
 * @method CommonEntreprise findOneByDateCreation(string $date_creation) Return the first CommonEntreprise filtered by the date_creation column
 * @method CommonEntreprise findOneByDateModification(string $date_modification) Return the first CommonEntreprise filtered by the date_modification column
 * @method CommonEntreprise findOneByIdInitial(int $id_initial) Return the first CommonEntreprise filtered by the id_initial column
 * @method CommonEntreprise findOneByRegion(string $region) Return the first CommonEntreprise filtered by the region column
 * @method CommonEntreprise findOneByProvince(string $province) Return the first CommonEntreprise filtered by the province column
 * @method CommonEntreprise findOneByTelephone2(string $telephone2) Return the first CommonEntreprise filtered by the telephone2 column
 * @method CommonEntreprise findOneByTelephone3(string $telephone3) Return the first CommonEntreprise filtered by the telephone3 column
 * @method CommonEntreprise findOneByCnss(string $cnss) Return the first CommonEntreprise filtered by the cnss column
 * @method CommonEntreprise findOneByRcNum(string $rc_num) Return the first CommonEntreprise filtered by the rc_num column
 * @method CommonEntreprise findOneByRcVille(string $rc_ville) Return the first CommonEntreprise filtered by the rc_ville column
 * @method CommonEntreprise findOneByDomainesActivites(string $domaines_activites) Return the first CommonEntreprise filtered by the domaines_activites column
 * @method CommonEntreprise findOneByNumTax(string $num_tax) Return the first CommonEntreprise filtered by the num_tax column
 * @method CommonEntreprise findOneByDocumentsCommerciaux(int $documents_commerciaux) Return the first CommonEntreprise filtered by the documents_commerciaux column
 * @method CommonEntreprise findOneByIntituleDocumentsCommerciaux(string $intitule_documents_commerciaux) Return the first CommonEntreprise filtered by the intitule_documents_commerciaux column
 * @method CommonEntreprise findOneByTailleDocumentsCommerciaux(string $taille_documents_commerciaux) Return the first CommonEntreprise filtered by the taille_documents_commerciaux column
 * @method CommonEntreprise findOneByQualification(string $qualification) Return the first CommonEntreprise filtered by the qualification column
 * @method CommonEntreprise findOneByAgrement(string $agrement) Return the first CommonEntreprise filtered by the agrement column
 * @method CommonEntreprise findOneByMoyensTechnique(string $moyens_technique) Return the first CommonEntreprise filtered by the moyens_technique column
 * @method CommonEntreprise findOneByMoyensHumains(string $moyens_humains) Return the first CommonEntreprise filtered by the moyens_humains column
 * @method CommonEntreprise findOneByCompteActif(int $compte_actif) Return the first CommonEntreprise filtered by the compte_actif column
 * @method CommonEntreprise findOneByCapitalSocial(string $capital_social) Return the first CommonEntreprise filtered by the capital_social column
 * @method CommonEntreprise findOneByIfu(string $ifu) Return the first CommonEntreprise filtered by the ifu column
 * @method CommonEntreprise findOneByIdAgentCreateur(int $id_agent_createur) Return the first CommonEntreprise filtered by the id_agent_createur column
 * @method CommonEntreprise findOneByNomAgent(string $nom_agent) Return the first CommonEntreprise filtered by the nom_agent column
 * @method CommonEntreprise findOneByPrenomAgent(string $prenom_agent) Return the first CommonEntreprise filtered by the prenom_agent column
 * @method CommonEntreprise findOneByAdressesElectroniques(string $adresses_electroniques) Return the first CommonEntreprise filtered by the adresses_electroniques column
 * @method CommonEntreprise findOneByVisibleBourse(string $visible_bourse) Return the first CommonEntreprise filtered by the visible_bourse column
 * @method CommonEntreprise findOneByTypeCollaboration(string $type_collaboration) Return the first CommonEntreprise filtered by the type_collaboration column
 * @method CommonEntreprise findOneByEntrepriseEa(string $entreprise_EA) Return the first CommonEntreprise filtered by the entreprise_EA column
 * @method CommonEntreprise findOneByEntrepriseSiae(string $entreprise_SIAE) Return the first CommonEntreprise filtered by the entreprise_SIAE column
 * @method CommonEntreprise findOneByTypeEntreprise(string $type_entreprise) Return the first CommonEntreprise filtered by the type_entreprise column
 * @method CommonEntreprise findOneByNote(int $note) Return the first CommonEntreprise filtered by the note column
 * @method CommonEntreprise findOneByCodeCpv(string $code_cpv) Return the first CommonEntreprise filtered by the code_cpv column
 * @method CommonEntreprise findOneByStatutReferencement(int $statut_referencement) Return the first CommonEntreprise filtered by the statut_referencement column
 * @method CommonEntreprise findOneByTailleEntreprise(int $taille_entreprise) Return the first CommonEntreprise filtered by the taille_entreprise column
 * @method CommonEntreprise findOneByIdentifiantFiscale(string $identifiant_fiscale) Return the first CommonEntreprise filtered by the identifiant_fiscale column
 * @method CommonEntreprise findOneByValide(boolean $valide) Return the first CommonEntreprise filtered by the valide column
 *
 * @method array findById(int $id) Return CommonEntreprise objects filtered by the id column
 * @method array findByAdminId(int $admin_id) Return CommonEntreprise objects filtered by the admin_id column
 * @method array findBySiren(string $siren) Return CommonEntreprise objects filtered by the siren column
 * @method array findByRepmetiers(string $repmetiers) Return CommonEntreprise objects filtered by the repmetiers column
 * @method array findByNom(string $nom) Return CommonEntreprise objects filtered by the nom column
 * @method array findByAdresse(string $adresse) Return CommonEntreprise objects filtered by the adresse column
 * @method array findByCodepostal(string $codepostal) Return CommonEntreprise objects filtered by the codepostal column
 * @method array findByVilleadresse(string $villeadresse) Return CommonEntreprise objects filtered by the villeadresse column
 * @method array findByPaysadresse(string $paysadresse) Return CommonEntreprise objects filtered by the paysadresse column
 * @method array findByEmail(string $email) Return CommonEntreprise objects filtered by the email column
 * @method array findByTaille(int $taille) Return CommonEntreprise objects filtered by the taille column
 * @method array findByFormejuridique(string $formejuridique) Return CommonEntreprise objects filtered by the formejuridique column
 * @method array findByVilleenregistrement(string $villeenregistrement) Return CommonEntreprise objects filtered by the villeenregistrement column
 * @method array findByMotifnonindnum(int $motifNonIndNum) Return CommonEntreprise objects filtered by the motifNonIndNum column
 * @method array findByOrdreprofouagrement(string $ordreProfOuAgrement) Return CommonEntreprise objects filtered by the ordreProfOuAgrement column
 * @method array findByDateconstsociete(string $dateConstSociete) Return CommonEntreprise objects filtered by the dateConstSociete column
 * @method array findByNomorginscription(string $nomOrgInscription) Return CommonEntreprise objects filtered by the nomOrgInscription column
 * @method array findByAdrorginscription(string $adrOrgInscription) Return CommonEntreprise objects filtered by the adrOrgInscription column
 * @method array findByDateconstassoc(string $dateConstAssoc) Return CommonEntreprise objects filtered by the dateConstAssoc column
 * @method array findByDateconstassocetrangere(string $dateConstAssocEtrangere) Return CommonEntreprise objects filtered by the dateConstAssocEtrangere column
 * @method array findByNompersonnepublique(string $nomPersonnePublique) Return CommonEntreprise objects filtered by the nomPersonnePublique column
 * @method array findByNationalite(string $nationalite) Return CommonEntreprise objects filtered by the nationalite column
 * @method array findByRedressement(int $redressement) Return CommonEntreprise objects filtered by the redressement column
 * @method array findByPaysenregistrement(string $paysenregistrement) Return CommonEntreprise objects filtered by the paysenregistrement column
 * @method array findBySirenetranger(string $sirenEtranger) Return CommonEntreprise objects filtered by the sirenEtranger column
 * @method array findByNumassoetrangere(string $numAssoEtrangere) Return CommonEntreprise objects filtered by the numAssoEtrangere column
 * @method array findByDebutexerciceglob1(string $debutExerciceGlob1) Return CommonEntreprise objects filtered by the debutExerciceGlob1 column
 * @method array findByFinexerciceglob1(string $finExerciceGlob1) Return CommonEntreprise objects filtered by the finExerciceGlob1 column
 * @method array findByDebutexerciceglob2(string $debutExerciceGlob2) Return CommonEntreprise objects filtered by the debutExerciceGlob2 column
 * @method array findByFinexerciceglob2(string $finExerciceGlob2) Return CommonEntreprise objects filtered by the finExerciceGlob2 column
 * @method array findByDebutexerciceglob3(string $debutExerciceGlob3) Return CommonEntreprise objects filtered by the debutExerciceGlob3 column
 * @method array findByFinexerciceglob3(string $finExerciceGlob3) Return CommonEntreprise objects filtered by the finExerciceGlob3 column
 * @method array findByVentesglob1(string $ventesGlob1) Return CommonEntreprise objects filtered by the ventesGlob1 column
 * @method array findByVentesglob2(string $ventesGlob2) Return CommonEntreprise objects filtered by the ventesGlob2 column
 * @method array findByVentesglob3(string $ventesGlob3) Return CommonEntreprise objects filtered by the ventesGlob3 column
 * @method array findByBiensglob1(string $biensGlob1) Return CommonEntreprise objects filtered by the biensGlob1 column
 * @method array findByBiensglob2(string $biensGlob2) Return CommonEntreprise objects filtered by the biensGlob2 column
 * @method array findByBiensglob3(string $biensGlob3) Return CommonEntreprise objects filtered by the biensGlob3 column
 * @method array findByServicesglob1(string $servicesGlob1) Return CommonEntreprise objects filtered by the servicesGlob1 column
 * @method array findByServicesglob2(string $servicesGlob2) Return CommonEntreprise objects filtered by the servicesGlob2 column
 * @method array findByServicesglob3(string $servicesGlob3) Return CommonEntreprise objects filtered by the servicesGlob3 column
 * @method array findByTotalglob1(string $totalGlob1) Return CommonEntreprise objects filtered by the totalGlob1 column
 * @method array findByTotalglob2(string $totalGlob2) Return CommonEntreprise objects filtered by the totalGlob2 column
 * @method array findByTotalglob3(string $totalGlob3) Return CommonEntreprise objects filtered by the totalGlob3 column
 * @method array findByCodeape(string $codeape) Return CommonEntreprise objects filtered by the codeape column
 * @method array findByOrigineCompte(string $origine_compte) Return CommonEntreprise objects filtered by the origine_compte column
 * @method array findByTelephone(string $telephone) Return CommonEntreprise objects filtered by the telephone column
 * @method array findByFax(string $fax) Return CommonEntreprise objects filtered by the fax column
 * @method array findBySiteInternet(string $site_internet) Return CommonEntreprise objects filtered by the site_internet column
 * @method array findByDescriptionActivite(string $description_activite) Return CommonEntreprise objects filtered by the description_activite column
 * @method array findByActiviteDomaineDefense(string $activite_domaine_defense) Return CommonEntreprise objects filtered by the activite_domaine_defense column
 * @method array findByAnneeClotureExercice1(string $annee_cloture_exercice1) Return CommonEntreprise objects filtered by the annee_cloture_exercice1 column
 * @method array findByAnneeClotureExercice2(string $annee_cloture_exercice2) Return CommonEntreprise objects filtered by the annee_cloture_exercice2 column
 * @method array findByAnneeClotureExercice3(string $annee_cloture_exercice3) Return CommonEntreprise objects filtered by the annee_cloture_exercice3 column
 * @method array findByEffectifMoyen1(int $effectif_moyen1) Return CommonEntreprise objects filtered by the effectif_moyen1 column
 * @method array findByEffectifMoyen2(int $effectif_moyen2) Return CommonEntreprise objects filtered by the effectif_moyen2 column
 * @method array findByEffectifMoyen3(int $effectif_moyen3) Return CommonEntreprise objects filtered by the effectif_moyen3 column
 * @method array findByEffectifEncadrement1(int $effectif_encadrement1) Return CommonEntreprise objects filtered by the effectif_encadrement1 column
 * @method array findByEffectifEncadrement2(int $effectif_encadrement2) Return CommonEntreprise objects filtered by the effectif_encadrement2 column
 * @method array findByEffectifEncadrement3(int $effectif_encadrement3) Return CommonEntreprise objects filtered by the effectif_encadrement3 column
 * @method array findByPme1(string $pme1) Return CommonEntreprise objects filtered by the pme1 column
 * @method array findByPme2(string $pme2) Return CommonEntreprise objects filtered by the pme2 column
 * @method array findByPme3(string $pme3) Return CommonEntreprise objects filtered by the pme3 column
 * @method array findByAdresse2(string $adresse2) Return CommonEntreprise objects filtered by the adresse2 column
 * @method array findByNicsiege(string $nicSiege) Return CommonEntreprise objects filtered by the nicSiege column
 * @method array findByAcronymePays(string $acronyme_pays) Return CommonEntreprise objects filtered by the acronyme_pays column
 * @method array findByDateCreation(string $date_creation) Return CommonEntreprise objects filtered by the date_creation column
 * @method array findByDateModification(string $date_modification) Return CommonEntreprise objects filtered by the date_modification column
 * @method array findByIdInitial(int $id_initial) Return CommonEntreprise objects filtered by the id_initial column
 * @method array findByRegion(string $region) Return CommonEntreprise objects filtered by the region column
 * @method array findByProvince(string $province) Return CommonEntreprise objects filtered by the province column
 * @method array findByTelephone2(string $telephone2) Return CommonEntreprise objects filtered by the telephone2 column
 * @method array findByTelephone3(string $telephone3) Return CommonEntreprise objects filtered by the telephone3 column
 * @method array findByCnss(string $cnss) Return CommonEntreprise objects filtered by the cnss column
 * @method array findByRcNum(string $rc_num) Return CommonEntreprise objects filtered by the rc_num column
 * @method array findByRcVille(string $rc_ville) Return CommonEntreprise objects filtered by the rc_ville column
 * @method array findByDomainesActivites(string $domaines_activites) Return CommonEntreprise objects filtered by the domaines_activites column
 * @method array findByNumTax(string $num_tax) Return CommonEntreprise objects filtered by the num_tax column
 * @method array findByDocumentsCommerciaux(int $documents_commerciaux) Return CommonEntreprise objects filtered by the documents_commerciaux column
 * @method array findByIntituleDocumentsCommerciaux(string $intitule_documents_commerciaux) Return CommonEntreprise objects filtered by the intitule_documents_commerciaux column
 * @method array findByTailleDocumentsCommerciaux(string $taille_documents_commerciaux) Return CommonEntreprise objects filtered by the taille_documents_commerciaux column
 * @method array findByQualification(string $qualification) Return CommonEntreprise objects filtered by the qualification column
 * @method array findByAgrement(string $agrement) Return CommonEntreprise objects filtered by the agrement column
 * @method array findByMoyensTechnique(string $moyens_technique) Return CommonEntreprise objects filtered by the moyens_technique column
 * @method array findByMoyensHumains(string $moyens_humains) Return CommonEntreprise objects filtered by the moyens_humains column
 * @method array findByCompteActif(int $compte_actif) Return CommonEntreprise objects filtered by the compte_actif column
 * @method array findByCapitalSocial(string $capital_social) Return CommonEntreprise objects filtered by the capital_social column
 * @method array findByIfu(string $ifu) Return CommonEntreprise objects filtered by the ifu column
 * @method array findByIdAgentCreateur(int $id_agent_createur) Return CommonEntreprise objects filtered by the id_agent_createur column
 * @method array findByNomAgent(string $nom_agent) Return CommonEntreprise objects filtered by the nom_agent column
 * @method array findByPrenomAgent(string $prenom_agent) Return CommonEntreprise objects filtered by the prenom_agent column
 * @method array findByAdressesElectroniques(string $adresses_electroniques) Return CommonEntreprise objects filtered by the adresses_electroniques column
 * @method array findByVisibleBourse(string $visible_bourse) Return CommonEntreprise objects filtered by the visible_bourse column
 * @method array findByTypeCollaboration(string $type_collaboration) Return CommonEntreprise objects filtered by the type_collaboration column
 * @method array findByEntrepriseEa(string $entreprise_EA) Return CommonEntreprise objects filtered by the entreprise_EA column
 * @method array findByEntrepriseSiae(string $entreprise_SIAE) Return CommonEntreprise objects filtered by the entreprise_SIAE column
 * @method array findByTypeEntreprise(string $type_entreprise) Return CommonEntreprise objects filtered by the type_entreprise column
 * @method array findByNote(int $note) Return CommonEntreprise objects filtered by the note column
 * @method array findByCodeCpv(string $code_cpv) Return CommonEntreprise objects filtered by the code_cpv column
 * @method array findByStatutReferencement(int $statut_referencement) Return CommonEntreprise objects filtered by the statut_referencement column
 * @method array findByTailleEntreprise(int $taille_entreprise) Return CommonEntreprise objects filtered by the taille_entreprise column
 * @method array findByIdentifiantFiscale(string $identifiant_fiscale) Return CommonEntreprise objects filtered by the identifiant_fiscale column
 * @method array findByValide(boolean $valide) Return CommonEntreprise objects filtered by the valide column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEntrepriseQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEntrepriseQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEntreprise', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEntrepriseQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEntrepriseQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEntrepriseQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEntrepriseQuery) {
            return $criteria;
        }
        $query = new CommonEntrepriseQuery();
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
     * @return   CommonEntreprise|CommonEntreprise[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEntreprisePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEntreprise A model object, or null if the key is not found
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
     * @return                 CommonEntreprise A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `admin_id`, `siren`, `repmetiers`, `nom`, `adresse`, `codepostal`, `villeadresse`, `paysadresse`, `email`, `taille`, `formejuridique`, `villeenregistrement`, `motifNonIndNum`, `ordreProfOuAgrement`, `dateConstSociete`, `nomOrgInscription`, `adrOrgInscription`, `dateConstAssoc`, `dateConstAssocEtrangere`, `nomPersonnePublique`, `nationalite`, `redressement`, `paysenregistrement`, `sirenEtranger`, `numAssoEtrangere`, `debutExerciceGlob1`, `finExerciceGlob1`, `debutExerciceGlob2`, `finExerciceGlob2`, `debutExerciceGlob3`, `finExerciceGlob3`, `ventesGlob1`, `ventesGlob2`, `ventesGlob3`, `biensGlob1`, `biensGlob2`, `biensGlob3`, `servicesGlob1`, `servicesGlob2`, `servicesGlob3`, `totalGlob1`, `totalGlob2`, `totalGlob3`, `codeape`, `origine_compte`, `telephone`, `fax`, `site_internet`, `description_activite`, `activite_domaine_defense`, `annee_cloture_exercice1`, `annee_cloture_exercice2`, `annee_cloture_exercice3`, `effectif_moyen1`, `effectif_moyen2`, `effectif_moyen3`, `effectif_encadrement1`, `effectif_encadrement2`, `effectif_encadrement3`, `pme1`, `pme2`, `pme3`, `adresse2`, `nicSiege`, `acronyme_pays`, `date_creation`, `date_modification`, `id_initial`, `region`, `province`, `telephone2`, `telephone3`, `cnss`, `rc_num`, `rc_ville`, `domaines_activites`, `num_tax`, `documents_commerciaux`, `intitule_documents_commerciaux`, `taille_documents_commerciaux`, `qualification`, `agrement`, `moyens_technique`, `moyens_humains`, `compte_actif`, `capital_social`, `ifu`, `id_agent_createur`, `nom_agent`, `prenom_agent`, `adresses_electroniques`, `visible_bourse`, `type_collaboration`, `entreprise_EA`, `entreprise_SIAE`, `type_entreprise`, `note`, `code_cpv`, `statut_referencement`, `taille_entreprise`, `identifiant_fiscale`, `valide` FROM `Entreprise` WHERE `id` = :p0';
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
            $obj = new CommonEntreprise();
            $obj->hydrate($row);
            CommonEntreprisePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonEntreprise|CommonEntreprise[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonEntreprise[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonEntreprisePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonEntreprisePeer::ID, $keys, Criteria::IN);
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
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonEntreprisePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonEntreprisePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the admin_id column
     *
     * Example usage:
     * <code>
     * $query->filterByAdminId(1234); // WHERE admin_id = 1234
     * $query->filterByAdminId(array(12, 34)); // WHERE admin_id IN (12, 34)
     * $query->filterByAdminId(array('min' => 12)); // WHERE admin_id >= 12
     * $query->filterByAdminId(array('max' => 12)); // WHERE admin_id <= 12
     * </code>
     *
     * @param     mixed $adminId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByAdminId($adminId = null, $comparison = null)
    {
        if (is_array($adminId)) {
            $useMinMax = false;
            if (isset($adminId['min'])) {
                $this->addUsingAlias(CommonEntreprisePeer::ADMIN_ID, $adminId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($adminId['max'])) {
                $this->addUsingAlias(CommonEntreprisePeer::ADMIN_ID, $adminId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::ADMIN_ID, $adminId, $comparison);
    }

    /**
     * Filter the query on the siren column
     *
     * Example usage:
     * <code>
     * $query->filterBySiren('fooValue');   // WHERE siren = 'fooValue'
     * $query->filterBySiren('%fooValue%'); // WHERE siren LIKE '%fooValue%'
     * </code>
     *
     * @param     string $siren The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterBySiren($siren = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($siren)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $siren)) {
                $siren = str_replace('*', '%', $siren);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::SIREN, $siren, $comparison);
    }

    /**
     * Filter the query on the repmetiers column
     *
     * Example usage:
     * <code>
     * $query->filterByRepmetiers('fooValue');   // WHERE repmetiers = 'fooValue'
     * $query->filterByRepmetiers('%fooValue%'); // WHERE repmetiers LIKE '%fooValue%'
     * </code>
     *
     * @param     string $repmetiers The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByRepmetiers($repmetiers = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($repmetiers)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $repmetiers)) {
                $repmetiers = str_replace('*', '%', $repmetiers);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::REPMETIERS, $repmetiers, $comparison);
    }

    /**
     * Filter the query on the nom column
     *
     * Example usage:
     * <code>
     * $query->filterByNom('fooValue');   // WHERE nom = 'fooValue'
     * $query->filterByNom('%fooValue%'); // WHERE nom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByNom($nom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nom)) {
                $nom = str_replace('*', '%', $nom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::NOM, $nom, $comparison);
    }

    /**
     * Filter the query on the adresse column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse('fooValue');   // WHERE adresse = 'fooValue'
     * $query->filterByAdresse('%fooValue%'); // WHERE adresse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByAdresse($adresse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse)) {
                $adresse = str_replace('*', '%', $adresse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::ADRESSE, $adresse, $comparison);
    }

    /**
     * Filter the query on the codepostal column
     *
     * Example usage:
     * <code>
     * $query->filterByCodepostal('fooValue');   // WHERE codepostal = 'fooValue'
     * $query->filterByCodepostal('%fooValue%'); // WHERE codepostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codepostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByCodepostal($codepostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codepostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codepostal)) {
                $codepostal = str_replace('*', '%', $codepostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::CODEPOSTAL, $codepostal, $comparison);
    }

    /**
     * Filter the query on the villeadresse column
     *
     * Example usage:
     * <code>
     * $query->filterByVilleadresse('fooValue');   // WHERE villeadresse = 'fooValue'
     * $query->filterByVilleadresse('%fooValue%'); // WHERE villeadresse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villeadresse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByVilleadresse($villeadresse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villeadresse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $villeadresse)) {
                $villeadresse = str_replace('*', '%', $villeadresse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::VILLEADRESSE, $villeadresse, $comparison);
    }

    /**
     * Filter the query on the paysadresse column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysadresse('fooValue');   // WHERE paysadresse = 'fooValue'
     * $query->filterByPaysadresse('%fooValue%'); // WHERE paysadresse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysadresse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByPaysadresse($paysadresse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysadresse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysadresse)) {
                $paysadresse = str_replace('*', '%', $paysadresse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::PAYSADRESSE, $paysadresse, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the taille column
     *
     * Example usage:
     * <code>
     * $query->filterByTaille(1234); // WHERE taille = 1234
     * $query->filterByTaille(array(12, 34)); // WHERE taille IN (12, 34)
     * $query->filterByTaille(array('min' => 12)); // WHERE taille >= 12
     * $query->filterByTaille(array('max' => 12)); // WHERE taille <= 12
     * </code>
     *
     * @param     mixed $taille The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByTaille($taille = null, $comparison = null)
    {
        if (is_array($taille)) {
            $useMinMax = false;
            if (isset($taille['min'])) {
                $this->addUsingAlias(CommonEntreprisePeer::TAILLE, $taille['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taille['max'])) {
                $this->addUsingAlias(CommonEntreprisePeer::TAILLE, $taille['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::TAILLE, $taille, $comparison);
    }

    /**
     * Filter the query on the formejuridique column
     *
     * Example usage:
     * <code>
     * $query->filterByFormejuridique('fooValue');   // WHERE formejuridique = 'fooValue'
     * $query->filterByFormejuridique('%fooValue%'); // WHERE formejuridique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $formejuridique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByFormejuridique($formejuridique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($formejuridique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $formejuridique)) {
                $formejuridique = str_replace('*', '%', $formejuridique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::FORMEJURIDIQUE, $formejuridique, $comparison);
    }

    /**
     * Filter the query on the villeenregistrement column
     *
     * Example usage:
     * <code>
     * $query->filterByVilleenregistrement('fooValue');   // WHERE villeenregistrement = 'fooValue'
     * $query->filterByVilleenregistrement('%fooValue%'); // WHERE villeenregistrement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villeenregistrement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByVilleenregistrement($villeenregistrement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villeenregistrement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $villeenregistrement)) {
                $villeenregistrement = str_replace('*', '%', $villeenregistrement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::VILLEENREGISTREMENT, $villeenregistrement, $comparison);
    }

    /**
     * Filter the query on the motifNonIndNum column
     *
     * Example usage:
     * <code>
     * $query->filterByMotifnonindnum(1234); // WHERE motifNonIndNum = 1234
     * $query->filterByMotifnonindnum(array(12, 34)); // WHERE motifNonIndNum IN (12, 34)
     * $query->filterByMotifnonindnum(array('min' => 12)); // WHERE motifNonIndNum >= 12
     * $query->filterByMotifnonindnum(array('max' => 12)); // WHERE motifNonIndNum <= 12
     * </code>
     *
     * @param     mixed $motifnonindnum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByMotifnonindnum($motifnonindnum = null, $comparison = null)
    {
        if (is_array($motifnonindnum)) {
            $useMinMax = false;
            if (isset($motifnonindnum['min'])) {
                $this->addUsingAlias(CommonEntreprisePeer::MOTIFNONINDNUM, $motifnonindnum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($motifnonindnum['max'])) {
                $this->addUsingAlias(CommonEntreprisePeer::MOTIFNONINDNUM, $motifnonindnum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::MOTIFNONINDNUM, $motifnonindnum, $comparison);
    }

    /**
     * Filter the query on the ordreProfOuAgrement column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdreprofouagrement('fooValue');   // WHERE ordreProfOuAgrement = 'fooValue'
     * $query->filterByOrdreprofouagrement('%fooValue%'); // WHERE ordreProfOuAgrement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ordreprofouagrement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByOrdreprofouagrement($ordreprofouagrement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ordreprofouagrement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ordreprofouagrement)) {
                $ordreprofouagrement = str_replace('*', '%', $ordreprofouagrement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::ORDREPROFOUAGREMENT, $ordreprofouagrement, $comparison);
    }

    /**
     * Filter the query on the dateConstSociete column
     *
     * Example usage:
     * <code>
     * $query->filterByDateconstsociete('2011-03-14'); // WHERE dateConstSociete = '2011-03-14'
     * $query->filterByDateconstsociete('now'); // WHERE dateConstSociete = '2011-03-14'
     * $query->filterByDateconstsociete(array('max' => 'yesterday')); // WHERE dateConstSociete > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateconstsociete The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByDateconstsociete($dateconstsociete = null, $comparison = null)
    {
        if (is_array($dateconstsociete)) {
            $useMinMax = false;
            if (isset($dateconstsociete['min'])) {
                $this->addUsingAlias(CommonEntreprisePeer::DATECONSTSOCIETE, $dateconstsociete['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateconstsociete['max'])) {
                $this->addUsingAlias(CommonEntreprisePeer::DATECONSTSOCIETE, $dateconstsociete['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::DATECONSTSOCIETE, $dateconstsociete, $comparison);
    }

    /**
     * Filter the query on the nomOrgInscription column
     *
     * Example usage:
     * <code>
     * $query->filterByNomorginscription('fooValue');   // WHERE nomOrgInscription = 'fooValue'
     * $query->filterByNomorginscription('%fooValue%'); // WHERE nomOrgInscription LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomorginscription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByNomorginscription($nomorginscription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomorginscription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomorginscription)) {
                $nomorginscription = str_replace('*', '%', $nomorginscription);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::NOMORGINSCRIPTION, $nomorginscription, $comparison);
    }

    /**
     * Filter the query on the adrOrgInscription column
     *
     * Example usage:
     * <code>
     * $query->filterByAdrorginscription('fooValue');   // WHERE adrOrgInscription = 'fooValue'
     * $query->filterByAdrorginscription('%fooValue%'); // WHERE adrOrgInscription LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adrorginscription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByAdrorginscription($adrorginscription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adrorginscription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adrorginscription)) {
                $adrorginscription = str_replace('*', '%', $adrorginscription);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::ADRORGINSCRIPTION, $adrorginscription, $comparison);
    }

    /**
     * Filter the query on the dateConstAssoc column
     *
     * Example usage:
     * <code>
     * $query->filterByDateconstassoc('2011-03-14'); // WHERE dateConstAssoc = '2011-03-14'
     * $query->filterByDateconstassoc('now'); // WHERE dateConstAssoc = '2011-03-14'
     * $query->filterByDateconstassoc(array('max' => 'yesterday')); // WHERE dateConstAssoc > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateconstassoc The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByDateconstassoc($dateconstassoc = null, $comparison = null)
    {
        if (is_array($dateconstassoc)) {
            $useMinMax = false;
            if (isset($dateconstassoc['min'])) {
                $this->addUsingAlias(CommonEntreprisePeer::DATECONSTASSOC, $dateconstassoc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateconstassoc['max'])) {
                $this->addUsingAlias(CommonEntreprisePeer::DATECONSTASSOC, $dateconstassoc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::DATECONSTASSOC, $dateconstassoc, $comparison);
    }

    /**
     * Filter the query on the dateConstAssocEtrangere column
     *
     * Example usage:
     * <code>
     * $query->filterByDateconstassocetrangere('2011-03-14'); // WHERE dateConstAssocEtrangere = '2011-03-14'
     * $query->filterByDateconstassocetrangere('now'); // WHERE dateConstAssocEtrangere = '2011-03-14'
     * $query->filterByDateconstassocetrangere(array('max' => 'yesterday')); // WHERE dateConstAssocEtrangere > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateconstassocetrangere The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByDateconstassocetrangere($dateconstassocetrangere = null, $comparison = null)
    {
        if (is_array($dateconstassocetrangere)) {
            $useMinMax = false;
            if (isset($dateconstassocetrangere['min'])) {
                $this->addUsingAlias(CommonEntreprisePeer::DATECONSTASSOCETRANGERE, $dateconstassocetrangere['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateconstassocetrangere['max'])) {
                $this->addUsingAlias(CommonEntreprisePeer::DATECONSTASSOCETRANGERE, $dateconstassocetrangere['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::DATECONSTASSOCETRANGERE, $dateconstassocetrangere, $comparison);
    }

    /**
     * Filter the query on the nomPersonnePublique column
     *
     * Example usage:
     * <code>
     * $query->filterByNompersonnepublique('fooValue');   // WHERE nomPersonnePublique = 'fooValue'
     * $query->filterByNompersonnepublique('%fooValue%'); // WHERE nomPersonnePublique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nompersonnepublique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByNompersonnepublique($nompersonnepublique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nompersonnepublique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nompersonnepublique)) {
                $nompersonnepublique = str_replace('*', '%', $nompersonnepublique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::NOMPERSONNEPUBLIQUE, $nompersonnepublique, $comparison);
    }

    /**
     * Filter the query on the nationalite column
     *
     * Example usage:
     * <code>
     * $query->filterByNationalite('fooValue');   // WHERE nationalite = 'fooValue'
     * $query->filterByNationalite('%fooValue%'); // WHERE nationalite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nationalite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByNationalite($nationalite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nationalite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nationalite)) {
                $nationalite = str_replace('*', '%', $nationalite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::NATIONALITE, $nationalite, $comparison);
    }

    /**
     * Filter the query on the redressement column
     *
     * Example usage:
     * <code>
     * $query->filterByRedressement(1234); // WHERE redressement = 1234
     * $query->filterByRedressement(array(12, 34)); // WHERE redressement IN (12, 34)
     * $query->filterByRedressement(array('min' => 12)); // WHERE redressement >= 12
     * $query->filterByRedressement(array('max' => 12)); // WHERE redressement <= 12
     * </code>
     *
     * @param     mixed $redressement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByRedressement($redressement = null, $comparison = null)
    {
        if (is_array($redressement)) {
            $useMinMax = false;
            if (isset($redressement['min'])) {
                $this->addUsingAlias(CommonEntreprisePeer::REDRESSEMENT, $redressement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($redressement['max'])) {
                $this->addUsingAlias(CommonEntreprisePeer::REDRESSEMENT, $redressement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::REDRESSEMENT, $redressement, $comparison);
    }

    /**
     * Filter the query on the paysenregistrement column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysenregistrement('fooValue');   // WHERE paysenregistrement = 'fooValue'
     * $query->filterByPaysenregistrement('%fooValue%'); // WHERE paysenregistrement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysenregistrement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByPaysenregistrement($paysenregistrement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysenregistrement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysenregistrement)) {
                $paysenregistrement = str_replace('*', '%', $paysenregistrement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::PAYSENREGISTREMENT, $paysenregistrement, $comparison);
    }

    /**
     * Filter the query on the sirenEtranger column
     *
     * Example usage:
     * <code>
     * $query->filterBySirenetranger('fooValue');   // WHERE sirenEtranger = 'fooValue'
     * $query->filterBySirenetranger('%fooValue%'); // WHERE sirenEtranger LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sirenetranger The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterBySirenetranger($sirenetranger = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sirenetranger)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sirenetranger)) {
                $sirenetranger = str_replace('*', '%', $sirenetranger);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::SIRENETRANGER, $sirenetranger, $comparison);
    }

    /**
     * Filter the query on the numAssoEtrangere column
     *
     * Example usage:
     * <code>
     * $query->filterByNumassoetrangere('fooValue');   // WHERE numAssoEtrangere = 'fooValue'
     * $query->filterByNumassoetrangere('%fooValue%'); // WHERE numAssoEtrangere LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numassoetrangere The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByNumassoetrangere($numassoetrangere = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numassoetrangere)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numassoetrangere)) {
                $numassoetrangere = str_replace('*', '%', $numassoetrangere);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::NUMASSOETRANGERE, $numassoetrangere, $comparison);
    }

    /**
     * Filter the query on the debutExerciceGlob1 column
     *
     * Example usage:
     * <code>
     * $query->filterByDebutexerciceglob1('fooValue');   // WHERE debutExerciceGlob1 = 'fooValue'
     * $query->filterByDebutexerciceglob1('%fooValue%'); // WHERE debutExerciceGlob1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $debutexerciceglob1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByDebutexerciceglob1($debutexerciceglob1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($debutexerciceglob1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $debutexerciceglob1)) {
                $debutexerciceglob1 = str_replace('*', '%', $debutexerciceglob1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::DEBUTEXERCICEGLOB1, $debutexerciceglob1, $comparison);
    }

    /**
     * Filter the query on the finExerciceGlob1 column
     *
     * Example usage:
     * <code>
     * $query->filterByFinexerciceglob1('fooValue');   // WHERE finExerciceGlob1 = 'fooValue'
     * $query->filterByFinexerciceglob1('%fooValue%'); // WHERE finExerciceGlob1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $finexerciceglob1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByFinexerciceglob1($finexerciceglob1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($finexerciceglob1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $finexerciceglob1)) {
                $finexerciceglob1 = str_replace('*', '%', $finexerciceglob1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::FINEXERCICEGLOB1, $finexerciceglob1, $comparison);
    }

    /**
     * Filter the query on the debutExerciceGlob2 column
     *
     * Example usage:
     * <code>
     * $query->filterByDebutexerciceglob2('fooValue');   // WHERE debutExerciceGlob2 = 'fooValue'
     * $query->filterByDebutexerciceglob2('%fooValue%'); // WHERE debutExerciceGlob2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $debutexerciceglob2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByDebutexerciceglob2($debutexerciceglob2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($debutexerciceglob2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $debutexerciceglob2)) {
                $debutexerciceglob2 = str_replace('*', '%', $debutexerciceglob2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::DEBUTEXERCICEGLOB2, $debutexerciceglob2, $comparison);
    }

    /**
     * Filter the query on the finExerciceGlob2 column
     *
     * Example usage:
     * <code>
     * $query->filterByFinexerciceglob2('fooValue');   // WHERE finExerciceGlob2 = 'fooValue'
     * $query->filterByFinexerciceglob2('%fooValue%'); // WHERE finExerciceGlob2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $finexerciceglob2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByFinexerciceglob2($finexerciceglob2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($finexerciceglob2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $finexerciceglob2)) {
                $finexerciceglob2 = str_replace('*', '%', $finexerciceglob2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::FINEXERCICEGLOB2, $finexerciceglob2, $comparison);
    }

    /**
     * Filter the query on the debutExerciceGlob3 column
     *
     * Example usage:
     * <code>
     * $query->filterByDebutexerciceglob3('fooValue');   // WHERE debutExerciceGlob3 = 'fooValue'
     * $query->filterByDebutexerciceglob3('%fooValue%'); // WHERE debutExerciceGlob3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $debutexerciceglob3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByDebutexerciceglob3($debutexerciceglob3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($debutexerciceglob3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $debutexerciceglob3)) {
                $debutexerciceglob3 = str_replace('*', '%', $debutexerciceglob3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::DEBUTEXERCICEGLOB3, $debutexerciceglob3, $comparison);
    }

    /**
     * Filter the query on the finExerciceGlob3 column
     *
     * Example usage:
     * <code>
     * $query->filterByFinexerciceglob3('fooValue');   // WHERE finExerciceGlob3 = 'fooValue'
     * $query->filterByFinexerciceglob3('%fooValue%'); // WHERE finExerciceGlob3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $finexerciceglob3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByFinexerciceglob3($finexerciceglob3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($finexerciceglob3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $finexerciceglob3)) {
                $finexerciceglob3 = str_replace('*', '%', $finexerciceglob3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::FINEXERCICEGLOB3, $finexerciceglob3, $comparison);
    }

    /**
     * Filter the query on the ventesGlob1 column
     *
     * Example usage:
     * <code>
     * $query->filterByVentesglob1('fooValue');   // WHERE ventesGlob1 = 'fooValue'
     * $query->filterByVentesglob1('%fooValue%'); // WHERE ventesGlob1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ventesglob1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByVentesglob1($ventesglob1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ventesglob1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ventesglob1)) {
                $ventesglob1 = str_replace('*', '%', $ventesglob1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::VENTESGLOB1, $ventesglob1, $comparison);
    }

    /**
     * Filter the query on the ventesGlob2 column
     *
     * Example usage:
     * <code>
     * $query->filterByVentesglob2('fooValue');   // WHERE ventesGlob2 = 'fooValue'
     * $query->filterByVentesglob2('%fooValue%'); // WHERE ventesGlob2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ventesglob2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByVentesglob2($ventesglob2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ventesglob2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ventesglob2)) {
                $ventesglob2 = str_replace('*', '%', $ventesglob2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::VENTESGLOB2, $ventesglob2, $comparison);
    }

    /**
     * Filter the query on the ventesGlob3 column
     *
     * Example usage:
     * <code>
     * $query->filterByVentesglob3('fooValue');   // WHERE ventesGlob3 = 'fooValue'
     * $query->filterByVentesglob3('%fooValue%'); // WHERE ventesGlob3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ventesglob3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByVentesglob3($ventesglob3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ventesglob3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ventesglob3)) {
                $ventesglob3 = str_replace('*', '%', $ventesglob3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::VENTESGLOB3, $ventesglob3, $comparison);
    }

    /**
     * Filter the query on the biensGlob1 column
     *
     * Example usage:
     * <code>
     * $query->filterByBiensglob1('fooValue');   // WHERE biensGlob1 = 'fooValue'
     * $query->filterByBiensglob1('%fooValue%'); // WHERE biensGlob1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $biensglob1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByBiensglob1($biensglob1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($biensglob1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $biensglob1)) {
                $biensglob1 = str_replace('*', '%', $biensglob1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::BIENSGLOB1, $biensglob1, $comparison);
    }

    /**
     * Filter the query on the biensGlob2 column
     *
     * Example usage:
     * <code>
     * $query->filterByBiensglob2('fooValue');   // WHERE biensGlob2 = 'fooValue'
     * $query->filterByBiensglob2('%fooValue%'); // WHERE biensGlob2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $biensglob2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByBiensglob2($biensglob2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($biensglob2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $biensglob2)) {
                $biensglob2 = str_replace('*', '%', $biensglob2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::BIENSGLOB2, $biensglob2, $comparison);
    }

    /**
     * Filter the query on the biensGlob3 column
     *
     * Example usage:
     * <code>
     * $query->filterByBiensglob3('fooValue');   // WHERE biensGlob3 = 'fooValue'
     * $query->filterByBiensglob3('%fooValue%'); // WHERE biensGlob3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $biensglob3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByBiensglob3($biensglob3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($biensglob3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $biensglob3)) {
                $biensglob3 = str_replace('*', '%', $biensglob3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::BIENSGLOB3, $biensglob3, $comparison);
    }

    /**
     * Filter the query on the servicesGlob1 column
     *
     * Example usage:
     * <code>
     * $query->filterByServicesglob1('fooValue');   // WHERE servicesGlob1 = 'fooValue'
     * $query->filterByServicesglob1('%fooValue%'); // WHERE servicesGlob1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $servicesglob1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByServicesglob1($servicesglob1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($servicesglob1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $servicesglob1)) {
                $servicesglob1 = str_replace('*', '%', $servicesglob1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::SERVICESGLOB1, $servicesglob1, $comparison);
    }

    /**
     * Filter the query on the servicesGlob2 column
     *
     * Example usage:
     * <code>
     * $query->filterByServicesglob2('fooValue');   // WHERE servicesGlob2 = 'fooValue'
     * $query->filterByServicesglob2('%fooValue%'); // WHERE servicesGlob2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $servicesglob2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByServicesglob2($servicesglob2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($servicesglob2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $servicesglob2)) {
                $servicesglob2 = str_replace('*', '%', $servicesglob2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::SERVICESGLOB2, $servicesglob2, $comparison);
    }

    /**
     * Filter the query on the servicesGlob3 column
     *
     * Example usage:
     * <code>
     * $query->filterByServicesglob3('fooValue');   // WHERE servicesGlob3 = 'fooValue'
     * $query->filterByServicesglob3('%fooValue%'); // WHERE servicesGlob3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $servicesglob3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByServicesglob3($servicesglob3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($servicesglob3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $servicesglob3)) {
                $servicesglob3 = str_replace('*', '%', $servicesglob3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::SERVICESGLOB3, $servicesglob3, $comparison);
    }

    /**
     * Filter the query on the totalGlob1 column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalglob1('fooValue');   // WHERE totalGlob1 = 'fooValue'
     * $query->filterByTotalglob1('%fooValue%'); // WHERE totalGlob1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $totalglob1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByTotalglob1($totalglob1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($totalglob1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $totalglob1)) {
                $totalglob1 = str_replace('*', '%', $totalglob1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::TOTALGLOB1, $totalglob1, $comparison);
    }

    /**
     * Filter the query on the totalGlob2 column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalglob2('fooValue');   // WHERE totalGlob2 = 'fooValue'
     * $query->filterByTotalglob2('%fooValue%'); // WHERE totalGlob2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $totalglob2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByTotalglob2($totalglob2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($totalglob2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $totalglob2)) {
                $totalglob2 = str_replace('*', '%', $totalglob2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::TOTALGLOB2, $totalglob2, $comparison);
    }

    /**
     * Filter the query on the totalGlob3 column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalglob3('fooValue');   // WHERE totalGlob3 = 'fooValue'
     * $query->filterByTotalglob3('%fooValue%'); // WHERE totalGlob3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $totalglob3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByTotalglob3($totalglob3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($totalglob3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $totalglob3)) {
                $totalglob3 = str_replace('*', '%', $totalglob3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::TOTALGLOB3, $totalglob3, $comparison);
    }

    /**
     * Filter the query on the codeape column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeape('fooValue');   // WHERE codeape = 'fooValue'
     * $query->filterByCodeape('%fooValue%'); // WHERE codeape LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeape The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByCodeape($codeape = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeape)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeape)) {
                $codeape = str_replace('*', '%', $codeape);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::CODEAPE, $codeape, $comparison);
    }

    /**
     * Filter the query on the origine_compte column
     *
     * Example usage:
     * <code>
     * $query->filterByOrigineCompte('fooValue');   // WHERE origine_compte = 'fooValue'
     * $query->filterByOrigineCompte('%fooValue%'); // WHERE origine_compte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $origineCompte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByOrigineCompte($origineCompte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($origineCompte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $origineCompte)) {
                $origineCompte = str_replace('*', '%', $origineCompte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::ORIGINE_COMPTE, $origineCompte, $comparison);
    }

    /**
     * Filter the query on the telephone column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephone('fooValue');   // WHERE telephone = 'fooValue'
     * $query->filterByTelephone('%fooValue%'); // WHERE telephone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByTelephone($telephone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephone)) {
                $telephone = str_replace('*', '%', $telephone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::TELEPHONE, $telephone, $comparison);
    }

    /**
     * Filter the query on the fax column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE fax = 'fooValue'
     * $query->filterByFax('%fooValue%'); // WHERE fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByFax($fax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fax)) {
                $fax = str_replace('*', '%', $fax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the site_internet column
     *
     * Example usage:
     * <code>
     * $query->filterBySiteInternet('fooValue');   // WHERE site_internet = 'fooValue'
     * $query->filterBySiteInternet('%fooValue%'); // WHERE site_internet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $siteInternet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterBySiteInternet($siteInternet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($siteInternet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $siteInternet)) {
                $siteInternet = str_replace('*', '%', $siteInternet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::SITE_INTERNET, $siteInternet, $comparison);
    }

    /**
     * Filter the query on the description_activite column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionActivite('fooValue');   // WHERE description_activite = 'fooValue'
     * $query->filterByDescriptionActivite('%fooValue%'); // WHERE description_activite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionActivite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByDescriptionActivite($descriptionActivite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionActivite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionActivite)) {
                $descriptionActivite = str_replace('*', '%', $descriptionActivite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::DESCRIPTION_ACTIVITE, $descriptionActivite, $comparison);
    }

    /**
     * Filter the query on the activite_domaine_defense column
     *
     * Example usage:
     * <code>
     * $query->filterByActiviteDomaineDefense('fooValue');   // WHERE activite_domaine_defense = 'fooValue'
     * $query->filterByActiviteDomaineDefense('%fooValue%'); // WHERE activite_domaine_defense LIKE '%fooValue%'
     * </code>
     *
     * @param     string $activiteDomaineDefense The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByActiviteDomaineDefense($activiteDomaineDefense = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($activiteDomaineDefense)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $activiteDomaineDefense)) {
                $activiteDomaineDefense = str_replace('*', '%', $activiteDomaineDefense);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::ACTIVITE_DOMAINE_DEFENSE, $activiteDomaineDefense, $comparison);
    }

    /**
     * Filter the query on the annee_cloture_exercice1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAnneeClotureExercice1('fooValue');   // WHERE annee_cloture_exercice1 = 'fooValue'
     * $query->filterByAnneeClotureExercice1('%fooValue%'); // WHERE annee_cloture_exercice1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $anneeClotureExercice1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByAnneeClotureExercice1($anneeClotureExercice1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($anneeClotureExercice1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $anneeClotureExercice1)) {
                $anneeClotureExercice1 = str_replace('*', '%', $anneeClotureExercice1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE1, $anneeClotureExercice1, $comparison);
    }

    /**
     * Filter the query on the annee_cloture_exercice2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAnneeClotureExercice2('fooValue');   // WHERE annee_cloture_exercice2 = 'fooValue'
     * $query->filterByAnneeClotureExercice2('%fooValue%'); // WHERE annee_cloture_exercice2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $anneeClotureExercice2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByAnneeClotureExercice2($anneeClotureExercice2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($anneeClotureExercice2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $anneeClotureExercice2)) {
                $anneeClotureExercice2 = str_replace('*', '%', $anneeClotureExercice2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE2, $anneeClotureExercice2, $comparison);
    }

    /**
     * Filter the query on the annee_cloture_exercice3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAnneeClotureExercice3('fooValue');   // WHERE annee_cloture_exercice3 = 'fooValue'
     * $query->filterByAnneeClotureExercice3('%fooValue%'); // WHERE annee_cloture_exercice3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $anneeClotureExercice3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByAnneeClotureExercice3($anneeClotureExercice3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($anneeClotureExercice3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $anneeClotureExercice3)) {
                $anneeClotureExercice3 = str_replace('*', '%', $anneeClotureExercice3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE3, $anneeClotureExercice3, $comparison);
    }

    /**
     * Filter the query on the effectif_moyen1 column
     *
     * Example usage:
     * <code>
     * $query->filterByEffectifMoyen1(1234); // WHERE effectif_moyen1 = 1234
     * $query->filterByEffectifMoyen1(array(12, 34)); // WHERE effectif_moyen1 IN (12, 34)
     * $query->filterByEffectifMoyen1(array('min' => 12)); // WHERE effectif_moyen1 >= 12
     * $query->filterByEffectifMoyen1(array('max' => 12)); // WHERE effectif_moyen1 <= 12
     * </code>
     *
     * @param     mixed $effectifMoyen1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByEffectifMoyen1($effectifMoyen1 = null, $comparison = null)
    {
        if (is_array($effectifMoyen1)) {
            $useMinMax = false;
            if (isset($effectifMoyen1['min'])) {
                $this->addUsingAlias(CommonEntreprisePeer::EFFECTIF_MOYEN1, $effectifMoyen1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($effectifMoyen1['max'])) {
                $this->addUsingAlias(CommonEntreprisePeer::EFFECTIF_MOYEN1, $effectifMoyen1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::EFFECTIF_MOYEN1, $effectifMoyen1, $comparison);
    }

    /**
     * Filter the query on the effectif_moyen2 column
     *
     * Example usage:
     * <code>
     * $query->filterByEffectifMoyen2(1234); // WHERE effectif_moyen2 = 1234
     * $query->filterByEffectifMoyen2(array(12, 34)); // WHERE effectif_moyen2 IN (12, 34)
     * $query->filterByEffectifMoyen2(array('min' => 12)); // WHERE effectif_moyen2 >= 12
     * $query->filterByEffectifMoyen2(array('max' => 12)); // WHERE effectif_moyen2 <= 12
     * </code>
     *
     * @param     mixed $effectifMoyen2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByEffectifMoyen2($effectifMoyen2 = null, $comparison = null)
    {
        if (is_array($effectifMoyen2)) {
            $useMinMax = false;
            if (isset($effectifMoyen2['min'])) {
                $this->addUsingAlias(CommonEntreprisePeer::EFFECTIF_MOYEN2, $effectifMoyen2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($effectifMoyen2['max'])) {
                $this->addUsingAlias(CommonEntreprisePeer::EFFECTIF_MOYEN2, $effectifMoyen2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::EFFECTIF_MOYEN2, $effectifMoyen2, $comparison);
    }

    /**
     * Filter the query on the effectif_moyen3 column
     *
     * Example usage:
     * <code>
     * $query->filterByEffectifMoyen3(1234); // WHERE effectif_moyen3 = 1234
     * $query->filterByEffectifMoyen3(array(12, 34)); // WHERE effectif_moyen3 IN (12, 34)
     * $query->filterByEffectifMoyen3(array('min' => 12)); // WHERE effectif_moyen3 >= 12
     * $query->filterByEffectifMoyen3(array('max' => 12)); // WHERE effectif_moyen3 <= 12
     * </code>
     *
     * @param     mixed $effectifMoyen3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByEffectifMoyen3($effectifMoyen3 = null, $comparison = null)
    {
        if (is_array($effectifMoyen3)) {
            $useMinMax = false;
            if (isset($effectifMoyen3['min'])) {
                $this->addUsingAlias(CommonEntreprisePeer::EFFECTIF_MOYEN3, $effectifMoyen3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($effectifMoyen3['max'])) {
                $this->addUsingAlias(CommonEntreprisePeer::EFFECTIF_MOYEN3, $effectifMoyen3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::EFFECTIF_MOYEN3, $effectifMoyen3, $comparison);
    }

    /**
     * Filter the query on the effectif_encadrement1 column
     *
     * Example usage:
     * <code>
     * $query->filterByEffectifEncadrement1(1234); // WHERE effectif_encadrement1 = 1234
     * $query->filterByEffectifEncadrement1(array(12, 34)); // WHERE effectif_encadrement1 IN (12, 34)
     * $query->filterByEffectifEncadrement1(array('min' => 12)); // WHERE effectif_encadrement1 >= 12
     * $query->filterByEffectifEncadrement1(array('max' => 12)); // WHERE effectif_encadrement1 <= 12
     * </code>
     *
     * @param     mixed $effectifEncadrement1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByEffectifEncadrement1($effectifEncadrement1 = null, $comparison = null)
    {
        if (is_array($effectifEncadrement1)) {
            $useMinMax = false;
            if (isset($effectifEncadrement1['min'])) {
                $this->addUsingAlias(CommonEntreprisePeer::EFFECTIF_ENCADREMENT1, $effectifEncadrement1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($effectifEncadrement1['max'])) {
                $this->addUsingAlias(CommonEntreprisePeer::EFFECTIF_ENCADREMENT1, $effectifEncadrement1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::EFFECTIF_ENCADREMENT1, $effectifEncadrement1, $comparison);
    }

    /**
     * Filter the query on the effectif_encadrement2 column
     *
     * Example usage:
     * <code>
     * $query->filterByEffectifEncadrement2(1234); // WHERE effectif_encadrement2 = 1234
     * $query->filterByEffectifEncadrement2(array(12, 34)); // WHERE effectif_encadrement2 IN (12, 34)
     * $query->filterByEffectifEncadrement2(array('min' => 12)); // WHERE effectif_encadrement2 >= 12
     * $query->filterByEffectifEncadrement2(array('max' => 12)); // WHERE effectif_encadrement2 <= 12
     * </code>
     *
     * @param     mixed $effectifEncadrement2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByEffectifEncadrement2($effectifEncadrement2 = null, $comparison = null)
    {
        if (is_array($effectifEncadrement2)) {
            $useMinMax = false;
            if (isset($effectifEncadrement2['min'])) {
                $this->addUsingAlias(CommonEntreprisePeer::EFFECTIF_ENCADREMENT2, $effectifEncadrement2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($effectifEncadrement2['max'])) {
                $this->addUsingAlias(CommonEntreprisePeer::EFFECTIF_ENCADREMENT2, $effectifEncadrement2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::EFFECTIF_ENCADREMENT2, $effectifEncadrement2, $comparison);
    }

    /**
     * Filter the query on the effectif_encadrement3 column
     *
     * Example usage:
     * <code>
     * $query->filterByEffectifEncadrement3(1234); // WHERE effectif_encadrement3 = 1234
     * $query->filterByEffectifEncadrement3(array(12, 34)); // WHERE effectif_encadrement3 IN (12, 34)
     * $query->filterByEffectifEncadrement3(array('min' => 12)); // WHERE effectif_encadrement3 >= 12
     * $query->filterByEffectifEncadrement3(array('max' => 12)); // WHERE effectif_encadrement3 <= 12
     * </code>
     *
     * @param     mixed $effectifEncadrement3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByEffectifEncadrement3($effectifEncadrement3 = null, $comparison = null)
    {
        if (is_array($effectifEncadrement3)) {
            $useMinMax = false;
            if (isset($effectifEncadrement3['min'])) {
                $this->addUsingAlias(CommonEntreprisePeer::EFFECTIF_ENCADREMENT3, $effectifEncadrement3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($effectifEncadrement3['max'])) {
                $this->addUsingAlias(CommonEntreprisePeer::EFFECTIF_ENCADREMENT3, $effectifEncadrement3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::EFFECTIF_ENCADREMENT3, $effectifEncadrement3, $comparison);
    }

    /**
     * Filter the query on the pme1 column
     *
     * Example usage:
     * <code>
     * $query->filterByPme1('fooValue');   // WHERE pme1 = 'fooValue'
     * $query->filterByPme1('%fooValue%'); // WHERE pme1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pme1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByPme1($pme1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pme1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pme1)) {
                $pme1 = str_replace('*', '%', $pme1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::PME1, $pme1, $comparison);
    }

    /**
     * Filter the query on the pme2 column
     *
     * Example usage:
     * <code>
     * $query->filterByPme2('fooValue');   // WHERE pme2 = 'fooValue'
     * $query->filterByPme2('%fooValue%'); // WHERE pme2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pme2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByPme2($pme2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pme2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pme2)) {
                $pme2 = str_replace('*', '%', $pme2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::PME2, $pme2, $comparison);
    }

    /**
     * Filter the query on the pme3 column
     *
     * Example usage:
     * <code>
     * $query->filterByPme3('fooValue');   // WHERE pme3 = 'fooValue'
     * $query->filterByPme3('%fooValue%'); // WHERE pme3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pme3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByPme3($pme3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pme3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pme3)) {
                $pme3 = str_replace('*', '%', $pme3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::PME3, $pme3, $comparison);
    }

    /**
     * Filter the query on the adresse2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse2('fooValue');   // WHERE adresse2 = 'fooValue'
     * $query->filterByAdresse2('%fooValue%'); // WHERE adresse2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByAdresse2($adresse2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse2)) {
                $adresse2 = str_replace('*', '%', $adresse2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::ADRESSE2, $adresse2, $comparison);
    }

    /**
     * Filter the query on the nicSiege column
     *
     * Example usage:
     * <code>
     * $query->filterByNicsiege('fooValue');   // WHERE nicSiege = 'fooValue'
     * $query->filterByNicsiege('%fooValue%'); // WHERE nicSiege LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nicsiege The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByNicsiege($nicsiege = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nicsiege)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nicsiege)) {
                $nicsiege = str_replace('*', '%', $nicsiege);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::NICSIEGE, $nicsiege, $comparison);
    }

    /**
     * Filter the query on the acronyme_pays column
     *
     * Example usage:
     * <code>
     * $query->filterByAcronymePays('fooValue');   // WHERE acronyme_pays = 'fooValue'
     * $query->filterByAcronymePays('%fooValue%'); // WHERE acronyme_pays LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acronymePays The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByAcronymePays($acronymePays = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acronymePays)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acronymePays)) {
                $acronymePays = str_replace('*', '%', $acronymePays);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::ACRONYME_PAYS, $acronymePays, $comparison);
    }

    /**
     * Filter the query on the date_creation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('fooValue');   // WHERE date_creation = 'fooValue'
     * $query->filterByDateCreation('%fooValue%'); // WHERE date_creation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateCreation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateCreation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateCreation)) {
                $dateCreation = str_replace('*', '%', $dateCreation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the date_modification column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('fooValue');   // WHERE date_modification = 'fooValue'
     * $query->filterByDateModification('%fooValue%'); // WHERE date_modification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateModification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateModification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateModification)) {
                $dateModification = str_replace('*', '%', $dateModification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Filter the query on the id_initial column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInitial(1234); // WHERE id_initial = 1234
     * $query->filterByIdInitial(array(12, 34)); // WHERE id_initial IN (12, 34)
     * $query->filterByIdInitial(array('min' => 12)); // WHERE id_initial >= 12
     * $query->filterByIdInitial(array('max' => 12)); // WHERE id_initial <= 12
     * </code>
     *
     * @param     mixed $idInitial The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByIdInitial($idInitial = null, $comparison = null)
    {
        if (is_array($idInitial)) {
            $useMinMax = false;
            if (isset($idInitial['min'])) {
                $this->addUsingAlias(CommonEntreprisePeer::ID_INITIAL, $idInitial['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInitial['max'])) {
                $this->addUsingAlias(CommonEntreprisePeer::ID_INITIAL, $idInitial['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::ID_INITIAL, $idInitial, $comparison);
    }

    /**
     * Filter the query on the region column
     *
     * Example usage:
     * <code>
     * $query->filterByRegion('fooValue');   // WHERE region = 'fooValue'
     * $query->filterByRegion('%fooValue%'); // WHERE region LIKE '%fooValue%'
     * </code>
     *
     * @param     string $region The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByRegion($region = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($region)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $region)) {
                $region = str_replace('*', '%', $region);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::REGION, $region, $comparison);
    }

    /**
     * Filter the query on the province column
     *
     * Example usage:
     * <code>
     * $query->filterByProvince('fooValue');   // WHERE province = 'fooValue'
     * $query->filterByProvince('%fooValue%'); // WHERE province LIKE '%fooValue%'
     * </code>
     *
     * @param     string $province The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByProvince($province = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($province)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $province)) {
                $province = str_replace('*', '%', $province);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::PROVINCE, $province, $comparison);
    }

    /**
     * Filter the query on the telephone2 column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephone2('fooValue');   // WHERE telephone2 = 'fooValue'
     * $query->filterByTelephone2('%fooValue%'); // WHERE telephone2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephone2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByTelephone2($telephone2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephone2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephone2)) {
                $telephone2 = str_replace('*', '%', $telephone2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::TELEPHONE2, $telephone2, $comparison);
    }

    /**
     * Filter the query on the telephone3 column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephone3('fooValue');   // WHERE telephone3 = 'fooValue'
     * $query->filterByTelephone3('%fooValue%'); // WHERE telephone3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephone3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByTelephone3($telephone3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephone3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephone3)) {
                $telephone3 = str_replace('*', '%', $telephone3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::TELEPHONE3, $telephone3, $comparison);
    }

    /**
     * Filter the query on the cnss column
     *
     * Example usage:
     * <code>
     * $query->filterByCnss('fooValue');   // WHERE cnss = 'fooValue'
     * $query->filterByCnss('%fooValue%'); // WHERE cnss LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cnss The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByCnss($cnss = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cnss)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cnss)) {
                $cnss = str_replace('*', '%', $cnss);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::CNSS, $cnss, $comparison);
    }

    /**
     * Filter the query on the rc_num column
     *
     * Example usage:
     * <code>
     * $query->filterByRcNum('fooValue');   // WHERE rc_num = 'fooValue'
     * $query->filterByRcNum('%fooValue%'); // WHERE rc_num LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcNum The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByRcNum($rcNum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcNum)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rcNum)) {
                $rcNum = str_replace('*', '%', $rcNum);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::RC_NUM, $rcNum, $comparison);
    }

    /**
     * Filter the query on the rc_ville column
     *
     * Example usage:
     * <code>
     * $query->filterByRcVille('fooValue');   // WHERE rc_ville = 'fooValue'
     * $query->filterByRcVille('%fooValue%'); // WHERE rc_ville LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcVille The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByRcVille($rcVille = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcVille)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rcVille)) {
                $rcVille = str_replace('*', '%', $rcVille);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::RC_VILLE, $rcVille, $comparison);
    }

    /**
     * Filter the query on the domaines_activites column
     *
     * Example usage:
     * <code>
     * $query->filterByDomainesActivites('fooValue');   // WHERE domaines_activites = 'fooValue'
     * $query->filterByDomainesActivites('%fooValue%'); // WHERE domaines_activites LIKE '%fooValue%'
     * </code>
     *
     * @param     string $domainesActivites The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByDomainesActivites($domainesActivites = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($domainesActivites)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $domainesActivites)) {
                $domainesActivites = str_replace('*', '%', $domainesActivites);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::DOMAINES_ACTIVITES, $domainesActivites, $comparison);
    }

    /**
     * Filter the query on the num_tax column
     *
     * Example usage:
     * <code>
     * $query->filterByNumTax('fooValue');   // WHERE num_tax = 'fooValue'
     * $query->filterByNumTax('%fooValue%'); // WHERE num_tax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numTax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByNumTax($numTax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numTax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numTax)) {
                $numTax = str_replace('*', '%', $numTax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::NUM_TAX, $numTax, $comparison);
    }

    /**
     * Filter the query on the documents_commerciaux column
     *
     * Example usage:
     * <code>
     * $query->filterByDocumentsCommerciaux(1234); // WHERE documents_commerciaux = 1234
     * $query->filterByDocumentsCommerciaux(array(12, 34)); // WHERE documents_commerciaux IN (12, 34)
     * $query->filterByDocumentsCommerciaux(array('min' => 12)); // WHERE documents_commerciaux >= 12
     * $query->filterByDocumentsCommerciaux(array('max' => 12)); // WHERE documents_commerciaux <= 12
     * </code>
     *
     * @param     mixed $documentsCommerciaux The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByDocumentsCommerciaux($documentsCommerciaux = null, $comparison = null)
    {
        if (is_array($documentsCommerciaux)) {
            $useMinMax = false;
            if (isset($documentsCommerciaux['min'])) {
                $this->addUsingAlias(CommonEntreprisePeer::DOCUMENTS_COMMERCIAUX, $documentsCommerciaux['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($documentsCommerciaux['max'])) {
                $this->addUsingAlias(CommonEntreprisePeer::DOCUMENTS_COMMERCIAUX, $documentsCommerciaux['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::DOCUMENTS_COMMERCIAUX, $documentsCommerciaux, $comparison);
    }

    /**
     * Filter the query on the intitule_documents_commerciaux column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleDocumentsCommerciaux('fooValue');   // WHERE intitule_documents_commerciaux = 'fooValue'
     * $query->filterByIntituleDocumentsCommerciaux('%fooValue%'); // WHERE intitule_documents_commerciaux LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intituleDocumentsCommerciaux The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByIntituleDocumentsCommerciaux($intituleDocumentsCommerciaux = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intituleDocumentsCommerciaux)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intituleDocumentsCommerciaux)) {
                $intituleDocumentsCommerciaux = str_replace('*', '%', $intituleDocumentsCommerciaux);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::INTITULE_DOCUMENTS_COMMERCIAUX, $intituleDocumentsCommerciaux, $comparison);
    }

    /**
     * Filter the query on the taille_documents_commerciaux column
     *
     * Example usage:
     * <code>
     * $query->filterByTailleDocumentsCommerciaux('fooValue');   // WHERE taille_documents_commerciaux = 'fooValue'
     * $query->filterByTailleDocumentsCommerciaux('%fooValue%'); // WHERE taille_documents_commerciaux LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tailleDocumentsCommerciaux The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByTailleDocumentsCommerciaux($tailleDocumentsCommerciaux = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tailleDocumentsCommerciaux)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tailleDocumentsCommerciaux)) {
                $tailleDocumentsCommerciaux = str_replace('*', '%', $tailleDocumentsCommerciaux);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::TAILLE_DOCUMENTS_COMMERCIAUX, $tailleDocumentsCommerciaux, $comparison);
    }

    /**
     * Filter the query on the qualification column
     *
     * Example usage:
     * <code>
     * $query->filterByQualification('fooValue');   // WHERE qualification = 'fooValue'
     * $query->filterByQualification('%fooValue%'); // WHERE qualification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qualification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByQualification($qualification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qualification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $qualification)) {
                $qualification = str_replace('*', '%', $qualification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::QUALIFICATION, $qualification, $comparison);
    }

    /**
     * Filter the query on the agrement column
     *
     * Example usage:
     * <code>
     * $query->filterByAgrement('fooValue');   // WHERE agrement = 'fooValue'
     * $query->filterByAgrement('%fooValue%'); // WHERE agrement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $agrement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByAgrement($agrement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($agrement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $agrement)) {
                $agrement = str_replace('*', '%', $agrement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::AGREMENT, $agrement, $comparison);
    }

    /**
     * Filter the query on the moyens_technique column
     *
     * Example usage:
     * <code>
     * $query->filterByMoyensTechnique('fooValue');   // WHERE moyens_technique = 'fooValue'
     * $query->filterByMoyensTechnique('%fooValue%'); // WHERE moyens_technique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $moyensTechnique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByMoyensTechnique($moyensTechnique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($moyensTechnique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $moyensTechnique)) {
                $moyensTechnique = str_replace('*', '%', $moyensTechnique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::MOYENS_TECHNIQUE, $moyensTechnique, $comparison);
    }

    /**
     * Filter the query on the moyens_humains column
     *
     * Example usage:
     * <code>
     * $query->filterByMoyensHumains('fooValue');   // WHERE moyens_humains = 'fooValue'
     * $query->filterByMoyensHumains('%fooValue%'); // WHERE moyens_humains LIKE '%fooValue%'
     * </code>
     *
     * @param     string $moyensHumains The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByMoyensHumains($moyensHumains = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($moyensHumains)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $moyensHumains)) {
                $moyensHumains = str_replace('*', '%', $moyensHumains);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::MOYENS_HUMAINS, $moyensHumains, $comparison);
    }

    /**
     * Filter the query on the compte_actif column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteActif(1234); // WHERE compte_actif = 1234
     * $query->filterByCompteActif(array(12, 34)); // WHERE compte_actif IN (12, 34)
     * $query->filterByCompteActif(array('min' => 12)); // WHERE compte_actif >= 12
     * $query->filterByCompteActif(array('max' => 12)); // WHERE compte_actif <= 12
     * </code>
     *
     * @param     mixed $compteActif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByCompteActif($compteActif = null, $comparison = null)
    {
        if (is_array($compteActif)) {
            $useMinMax = false;
            if (isset($compteActif['min'])) {
                $this->addUsingAlias(CommonEntreprisePeer::COMPTE_ACTIF, $compteActif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compteActif['max'])) {
                $this->addUsingAlias(CommonEntreprisePeer::COMPTE_ACTIF, $compteActif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::COMPTE_ACTIF, $compteActif, $comparison);
    }

    /**
     * Filter the query on the capital_social column
     *
     * Example usage:
     * <code>
     * $query->filterByCapitalSocial('fooValue');   // WHERE capital_social = 'fooValue'
     * $query->filterByCapitalSocial('%fooValue%'); // WHERE capital_social LIKE '%fooValue%'
     * </code>
     *
     * @param     string $capitalSocial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByCapitalSocial($capitalSocial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($capitalSocial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $capitalSocial)) {
                $capitalSocial = str_replace('*', '%', $capitalSocial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::CAPITAL_SOCIAL, $capitalSocial, $comparison);
    }

    /**
     * Filter the query on the ifu column
     *
     * Example usage:
     * <code>
     * $query->filterByIfu('fooValue');   // WHERE ifu = 'fooValue'
     * $query->filterByIfu('%fooValue%'); // WHERE ifu LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ifu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByIfu($ifu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ifu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ifu)) {
                $ifu = str_replace('*', '%', $ifu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::IFU, $ifu, $comparison);
    }

    /**
     * Filter the query on the id_agent_createur column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentCreateur(1234); // WHERE id_agent_createur = 1234
     * $query->filterByIdAgentCreateur(array(12, 34)); // WHERE id_agent_createur IN (12, 34)
     * $query->filterByIdAgentCreateur(array('min' => 12)); // WHERE id_agent_createur >= 12
     * $query->filterByIdAgentCreateur(array('max' => 12)); // WHERE id_agent_createur <= 12
     * </code>
     *
     * @param     mixed $idAgentCreateur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByIdAgentCreateur($idAgentCreateur = null, $comparison = null)
    {
        if (is_array($idAgentCreateur)) {
            $useMinMax = false;
            if (isset($idAgentCreateur['min'])) {
                $this->addUsingAlias(CommonEntreprisePeer::ID_AGENT_CREATEUR, $idAgentCreateur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCreateur['max'])) {
                $this->addUsingAlias(CommonEntreprisePeer::ID_AGENT_CREATEUR, $idAgentCreateur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::ID_AGENT_CREATEUR, $idAgentCreateur, $comparison);
    }

    /**
     * Filter the query on the nom_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgent('fooValue');   // WHERE nom_agent = 'fooValue'
     * $query->filterByNomAgent('%fooValue%'); // WHERE nom_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByNomAgent($nomAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgent)) {
                $nomAgent = str_replace('*', '%', $nomAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::NOM_AGENT, $nomAgent, $comparison);
    }

    /**
     * Filter the query on the prenom_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomAgent('fooValue');   // WHERE prenom_agent = 'fooValue'
     * $query->filterByPrenomAgent('%fooValue%'); // WHERE prenom_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByPrenomAgent($prenomAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomAgent)) {
                $prenomAgent = str_replace('*', '%', $prenomAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::PRENOM_AGENT, $prenomAgent, $comparison);
    }

    /**
     * Filter the query on the adresses_electroniques column
     *
     * Example usage:
     * <code>
     * $query->filterByAdressesElectroniques('fooValue');   // WHERE adresses_electroniques = 'fooValue'
     * $query->filterByAdressesElectroniques('%fooValue%'); // WHERE adresses_electroniques LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adressesElectroniques The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByAdressesElectroniques($adressesElectroniques = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adressesElectroniques)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adressesElectroniques)) {
                $adressesElectroniques = str_replace('*', '%', $adressesElectroniques);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::ADRESSES_ELECTRONIQUES, $adressesElectroniques, $comparison);
    }

    /**
     * Filter the query on the visible_bourse column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibleBourse('fooValue');   // WHERE visible_bourse = 'fooValue'
     * $query->filterByVisibleBourse('%fooValue%'); // WHERE visible_bourse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibleBourse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByVisibleBourse($visibleBourse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibleBourse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibleBourse)) {
                $visibleBourse = str_replace('*', '%', $visibleBourse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::VISIBLE_BOURSE, $visibleBourse, $comparison);
    }

    /**
     * Filter the query on the type_collaboration column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeCollaboration('fooValue');   // WHERE type_collaboration = 'fooValue'
     * $query->filterByTypeCollaboration('%fooValue%'); // WHERE type_collaboration LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeCollaboration The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByTypeCollaboration($typeCollaboration = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeCollaboration)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeCollaboration)) {
                $typeCollaboration = str_replace('*', '%', $typeCollaboration);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::TYPE_COLLABORATION, $typeCollaboration, $comparison);
    }

    /**
     * Filter the query on the entreprise_EA column
     *
     * Example usage:
     * <code>
     * $query->filterByEntrepriseEa('fooValue');   // WHERE entreprise_EA = 'fooValue'
     * $query->filterByEntrepriseEa('%fooValue%'); // WHERE entreprise_EA LIKE '%fooValue%'
     * </code>
     *
     * @param     string $entrepriseEa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByEntrepriseEa($entrepriseEa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($entrepriseEa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $entrepriseEa)) {
                $entrepriseEa = str_replace('*', '%', $entrepriseEa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::ENTREPRISE_EA, $entrepriseEa, $comparison);
    }

    /**
     * Filter the query on the entreprise_SIAE column
     *
     * Example usage:
     * <code>
     * $query->filterByEntrepriseSiae('fooValue');   // WHERE entreprise_SIAE = 'fooValue'
     * $query->filterByEntrepriseSiae('%fooValue%'); // WHERE entreprise_SIAE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $entrepriseSiae The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByEntrepriseSiae($entrepriseSiae = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($entrepriseSiae)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $entrepriseSiae)) {
                $entrepriseSiae = str_replace('*', '%', $entrepriseSiae);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::ENTREPRISE_SIAE, $entrepriseSiae, $comparison);
    }

    /**
     * Filter the query on the type_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeEntreprise('fooValue');   // WHERE type_entreprise = 'fooValue'
     * $query->filterByTypeEntreprise('%fooValue%'); // WHERE type_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByTypeEntreprise($typeEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeEntreprise)) {
                $typeEntreprise = str_replace('*', '%', $typeEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::TYPE_ENTREPRISE, $typeEntreprise, $comparison);
    }

    /**
     * Filter the query on the note column
     *
     * Example usage:
     * <code>
     * $query->filterByNote(1234); // WHERE note = 1234
     * $query->filterByNote(array(12, 34)); // WHERE note IN (12, 34)
     * $query->filterByNote(array('min' => 12)); // WHERE note >= 12
     * $query->filterByNote(array('max' => 12)); // WHERE note <= 12
     * </code>
     *
     * @param     mixed $note The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByNote($note = null, $comparison = null)
    {
        if (is_array($note)) {
            $useMinMax = false;
            if (isset($note['min'])) {
                $this->addUsingAlias(CommonEntreprisePeer::NOTE, $note['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($note['max'])) {
                $this->addUsingAlias(CommonEntreprisePeer::NOTE, $note['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::NOTE, $note, $comparison);
    }

    /**
     * Filter the query on the code_cpv column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeCpv('fooValue');   // WHERE code_cpv = 'fooValue'
     * $query->filterByCodeCpv('%fooValue%'); // WHERE code_cpv LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeCpv The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByCodeCpv($codeCpv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeCpv)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeCpv)) {
                $codeCpv = str_replace('*', '%', $codeCpv);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::CODE_CPV, $codeCpv, $comparison);
    }

    /**
     * Filter the query on the statut_referencement column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutReferencement(1234); // WHERE statut_referencement = 1234
     * $query->filterByStatutReferencement(array(12, 34)); // WHERE statut_referencement IN (12, 34)
     * $query->filterByStatutReferencement(array('min' => 12)); // WHERE statut_referencement >= 12
     * $query->filterByStatutReferencement(array('max' => 12)); // WHERE statut_referencement <= 12
     * </code>
     *
     * @param     mixed $statutReferencement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByStatutReferencement($statutReferencement = null, $comparison = null)
    {
        if (is_array($statutReferencement)) {
            $useMinMax = false;
            if (isset($statutReferencement['min'])) {
                $this->addUsingAlias(CommonEntreprisePeer::STATUT_REFERENCEMENT, $statutReferencement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statutReferencement['max'])) {
                $this->addUsingAlias(CommonEntreprisePeer::STATUT_REFERENCEMENT, $statutReferencement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::STATUT_REFERENCEMENT, $statutReferencement, $comparison);
    }

    /**
     * Filter the query on the taille_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByTailleEntreprise(1234); // WHERE taille_entreprise = 1234
     * $query->filterByTailleEntreprise(array(12, 34)); // WHERE taille_entreprise IN (12, 34)
     * $query->filterByTailleEntreprise(array('min' => 12)); // WHERE taille_entreprise >= 12
     * $query->filterByTailleEntreprise(array('max' => 12)); // WHERE taille_entreprise <= 12
     * </code>
     *
     * @param     mixed $tailleEntreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByTailleEntreprise($tailleEntreprise = null, $comparison = null)
    {
        if (is_array($tailleEntreprise)) {
            $useMinMax = false;
            if (isset($tailleEntreprise['min'])) {
                $this->addUsingAlias(CommonEntreprisePeer::TAILLE_ENTREPRISE, $tailleEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tailleEntreprise['max'])) {
                $this->addUsingAlias(CommonEntreprisePeer::TAILLE_ENTREPRISE, $tailleEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::TAILLE_ENTREPRISE, $tailleEntreprise, $comparison);
    }

    /**
     * Filter the query on the identifiant_fiscale column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiantFiscale('fooValue');   // WHERE identifiant_fiscale = 'fooValue'
     * $query->filterByIdentifiantFiscale('%fooValue%'); // WHERE identifiant_fiscale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifiantFiscale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByIdentifiantFiscale($identifiantFiscale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifiantFiscale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifiantFiscale)) {
                $identifiantFiscale = str_replace('*', '%', $identifiantFiscale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntreprisePeer::IDENTIFIANT_FISCALE, $identifiantFiscale, $comparison);
    }

    /**
     * Filter the query on the valide column
     *
     * Example usage:
     * <code>
     * $query->filterByValide(true); // WHERE valide = true
     * $query->filterByValide('yes'); // WHERE valide = true
     * </code>
     *
     * @param     boolean|string $valide The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function filterByValide($valide = null, $comparison = null)
    {
        if (is_string($valide)) {
            $valide = in_array(strtolower($valide), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonEntreprisePeer::VALIDE, $valide, $comparison);
    }

    /**
     * Filter the query by a related CommonContactEntreprise object
     *
     * @param   CommonContactEntreprise|PropelObjectCollection $commonContactEntreprise  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEntrepriseQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonContactEntreprise($commonContactEntreprise, $comparison = null)
    {
        if ($commonContactEntreprise instanceof CommonContactEntreprise) {
            return $this
                ->addUsingAlias(CommonEntreprisePeer::ID, $commonContactEntreprise->getIdEntreprise(), $comparison);
        } elseif ($commonContactEntreprise instanceof PropelObjectCollection) {
            return $this
                ->useCommonContactEntrepriseQuery()
                ->filterByPrimaryKeys($commonContactEntreprise->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonContactEntreprise() only accepts arguments of type CommonContactEntreprise or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonContactEntreprise relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function joinCommonContactEntreprise($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonContactEntreprise');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonContactEntreprise');
        }

        return $this;
    }

    /**
     * Use the CommonContactEntreprise relation CommonContactEntreprise object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonContactEntrepriseQuery A secondary query class using the current class as primary query
     */
    public function useCommonContactEntrepriseQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonContactEntreprise($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonContactEntreprise', 'CommonContactEntrepriseQuery');
    }

    /**
     * Filter the query by a related CommonInscrit object
     *
     * @param   CommonInscrit|PropelObjectCollection $commonInscrit  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEntrepriseQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonInscrit($commonInscrit, $comparison = null)
    {
        if ($commonInscrit instanceof CommonInscrit) {
            return $this
                ->addUsingAlias(CommonEntreprisePeer::ID, $commonInscrit->getEntrepriseId(), $comparison);
        } elseif ($commonInscrit instanceof PropelObjectCollection) {
            return $this
                ->useCommonInscritQuery()
                ->filterByPrimaryKeys($commonInscrit->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonInscrit() only accepts arguments of type CommonInscrit or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonInscrit relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function joinCommonInscrit($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonInscrit');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonInscrit');
        }

        return $this;
    }

    /**
     * Use the CommonInscrit relation CommonInscrit object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonInscritQuery A secondary query class using the current class as primary query
     */
    public function useCommonInscritQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonInscrit($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonInscrit', 'CommonInscritQuery');
    }

    /**
     * Filter the query by a related CommonPanierEntreprise object
     *
     * @param   CommonPanierEntreprise|PropelObjectCollection $commonPanierEntreprise  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEntrepriseQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonPanierEntreprise($commonPanierEntreprise, $comparison = null)
    {
        if ($commonPanierEntreprise instanceof CommonPanierEntreprise) {
            return $this
                ->addUsingAlias(CommonEntreprisePeer::ID, $commonPanierEntreprise->getIdEntreprise(), $comparison);
        } elseif ($commonPanierEntreprise instanceof PropelObjectCollection) {
            return $this
                ->useCommonPanierEntrepriseQuery()
                ->filterByPrimaryKeys($commonPanierEntreprise->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonPanierEntreprise() only accepts arguments of type CommonPanierEntreprise or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonPanierEntreprise relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function joinCommonPanierEntreprise($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonPanierEntreprise');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonPanierEntreprise');
        }

        return $this;
    }

    /**
     * Use the CommonPanierEntreprise relation CommonPanierEntreprise object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonPanierEntrepriseQuery A secondary query class using the current class as primary query
     */
    public function useCommonPanierEntrepriseQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonPanierEntreprise($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonPanierEntreprise', 'CommonPanierEntrepriseQuery');
    }

    /**
     * Filter the query by a related CommonBonCommandeParCatalogue object
     *
     * @param   CommonBonCommandeParCatalogue|PropelObjectCollection $commonBonCommandeParCatalogue  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEntrepriseQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonBonCommandeParCatalogue($commonBonCommandeParCatalogue, $comparison = null)
    {
        if ($commonBonCommandeParCatalogue instanceof CommonBonCommandeParCatalogue) {
            return $this
                ->addUsingAlias(CommonEntreprisePeer::ID, $commonBonCommandeParCatalogue->getIdEntreprise(), $comparison);
        } elseif ($commonBonCommandeParCatalogue instanceof PropelObjectCollection) {
            return $this
                ->useCommonBonCommandeParCatalogueQuery()
                ->filterByPrimaryKeys($commonBonCommandeParCatalogue->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonBonCommandeParCatalogue() only accepts arguments of type CommonBonCommandeParCatalogue or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonBonCommandeParCatalogue relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function joinCommonBonCommandeParCatalogue($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonBonCommandeParCatalogue');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonBonCommandeParCatalogue');
        }

        return $this;
    }

    /**
     * Use the CommonBonCommandeParCatalogue relation CommonBonCommandeParCatalogue object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonBonCommandeParCatalogueQuery A secondary query class using the current class as primary query
     */
    public function useCommonBonCommandeParCatalogueQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonBonCommandeParCatalogue($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonBonCommandeParCatalogue', 'CommonBonCommandeParCatalogueQuery');
    }

    /**
     * Filter the query by a related CommonExecFacture object
     *
     * @param   CommonExecFacture|PropelObjectCollection $commonExecFacture  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEntrepriseQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecFactureRelatedByIdEntrepriseCrea($commonExecFacture, $comparison = null)
    {
        if ($commonExecFacture instanceof CommonExecFacture) {
            return $this
                ->addUsingAlias(CommonEntreprisePeer::ID, $commonExecFacture->getIdEntrepriseCrea(), $comparison);
        } elseif ($commonExecFacture instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecFactureRelatedByIdEntrepriseCreaQuery()
                ->filterByPrimaryKeys($commonExecFacture->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecFactureRelatedByIdEntrepriseCrea() only accepts arguments of type CommonExecFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecFactureRelatedByIdEntrepriseCrea relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function joinCommonExecFactureRelatedByIdEntrepriseCrea($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecFactureRelatedByIdEntrepriseCrea');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecFactureRelatedByIdEntrepriseCrea');
        }

        return $this;
    }

    /**
     * Use the CommonExecFactureRelatedByIdEntrepriseCrea relation CommonExecFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecFactureRelatedByIdEntrepriseCreaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecFactureRelatedByIdEntrepriseCrea($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecFactureRelatedByIdEntrepriseCrea', 'CommonExecFactureQuery');
    }

    /**
     * Filter the query by a related CommonExecFacture object
     *
     * @param   CommonExecFacture|PropelObjectCollection $commonExecFacture  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEntrepriseQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecFactureRelatedByIdEntrepriseModif($commonExecFacture, $comparison = null)
    {
        if ($commonExecFacture instanceof CommonExecFacture) {
            return $this
                ->addUsingAlias(CommonEntreprisePeer::ID, $commonExecFacture->getIdEntrepriseModif(), $comparison);
        } elseif ($commonExecFacture instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecFactureRelatedByIdEntrepriseModifQuery()
                ->filterByPrimaryKeys($commonExecFacture->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecFactureRelatedByIdEntrepriseModif() only accepts arguments of type CommonExecFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecFactureRelatedByIdEntrepriseModif relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function joinCommonExecFactureRelatedByIdEntrepriseModif($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecFactureRelatedByIdEntrepriseModif');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecFactureRelatedByIdEntrepriseModif');
        }

        return $this;
    }

    /**
     * Use the CommonExecFactureRelatedByIdEntrepriseModif relation CommonExecFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecFactureRelatedByIdEntrepriseModifQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecFactureRelatedByIdEntrepriseModif($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecFactureRelatedByIdEntrepriseModif', 'CommonExecFactureQuery');
    }

    /**
     * Filter the query by a related CommonExecInscritContrat object
     *
     * @param   CommonExecInscritContrat|PropelObjectCollection $commonExecInscritContrat  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEntrepriseQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecInscritContrat($commonExecInscritContrat, $comparison = null)
    {
        if ($commonExecInscritContrat instanceof CommonExecInscritContrat) {
            return $this
                ->addUsingAlias(CommonEntreprisePeer::ID, $commonExecInscritContrat->getIdEntreprise(), $comparison);
        } elseif ($commonExecInscritContrat instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecInscritContratQuery()
                ->filterByPrimaryKeys($commonExecInscritContrat->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecInscritContrat() only accepts arguments of type CommonExecInscritContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecInscritContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function joinCommonExecInscritContrat($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecInscritContrat');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecInscritContrat');
        }

        return $this;
    }

    /**
     * Use the CommonExecInscritContrat relation CommonExecInscritContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecInscritContratQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecInscritContratQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecInscritContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecInscritContrat', 'CommonExecInscritContratQuery');
    }

    /**
     * Filter the query by a related CommonExecRepartition object
     *
     * @param   CommonExecRepartition|PropelObjectCollection $commonExecRepartition  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEntrepriseQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecRepartition($commonExecRepartition, $comparison = null)
    {
        if ($commonExecRepartition instanceof CommonExecRepartition) {
            return $this
                ->addUsingAlias(CommonEntreprisePeer::ID, $commonExecRepartition->getIdEntrepriseCrea(), $comparison);
        } elseif ($commonExecRepartition instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecRepartitionQuery()
                ->filterByPrimaryKeys($commonExecRepartition->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecRepartition() only accepts arguments of type CommonExecRepartition or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecRepartition relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function joinCommonExecRepartition($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecRepartition');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecRepartition');
        }

        return $this;
    }

    /**
     * Use the CommonExecRepartition relation CommonExecRepartition object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecRepartitionQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecRepartitionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecRepartition($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecRepartition', 'CommonExecRepartitionQuery');
    }

    /**
     * Filter the query by a related CommonFacture object
     *
     * @param   CommonFacture|PropelObjectCollection $commonFacture  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEntrepriseQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonFacture($commonFacture, $comparison = null)
    {
        if ($commonFacture instanceof CommonFacture) {
            return $this
                ->addUsingAlias(CommonEntreprisePeer::ID, $commonFacture->getIdEntreprise(), $comparison);
        } elseif ($commonFacture instanceof PropelObjectCollection) {
            return $this
                ->useCommonFactureQuery()
                ->filterByPrimaryKeys($commonFacture->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonFacture() only accepts arguments of type CommonFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonFacture relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function joinCommonFacture($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonFacture');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonFacture');
        }

        return $this;
    }

    /**
     * Use the CommonFacture relation CommonFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonFactureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonFacture($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonFacture', 'CommonFactureQuery');
    }

    /**
     * Filter the query by a related CommonTReponseElecFormulaire object
     *
     * @param   CommonTReponseElecFormulaire|PropelObjectCollection $commonTReponseElecFormulaire  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEntrepriseQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTReponseElecFormulaire($commonTReponseElecFormulaire, $comparison = null)
    {
        if ($commonTReponseElecFormulaire instanceof CommonTReponseElecFormulaire) {
            return $this
                ->addUsingAlias(CommonEntreprisePeer::ID, $commonTReponseElecFormulaire->getIdEntreprise(), $comparison);
        } elseif ($commonTReponseElecFormulaire instanceof PropelObjectCollection) {
            return $this
                ->useCommonTReponseElecFormulaireQuery()
                ->filterByPrimaryKeys($commonTReponseElecFormulaire->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTReponseElecFormulaire() only accepts arguments of type CommonTReponseElecFormulaire or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTReponseElecFormulaire relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function joinCommonTReponseElecFormulaire($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTReponseElecFormulaire');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonTReponseElecFormulaire');
        }

        return $this;
    }

    /**
     * Use the CommonTReponseElecFormulaire relation CommonTReponseElecFormulaire object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTReponseElecFormulaireQuery A secondary query class using the current class as primary query
     */
    public function useCommonTReponseElecFormulaireQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTReponseElecFormulaire($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTReponseElecFormulaire', 'CommonTReponseElecFormulaireQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEntreprise $commonEntreprise Object to remove from the list of results
     *
     * @return CommonEntrepriseQuery The current query, for fluid interface
     */
    public function prune($commonEntreprise = null)
    {
        if ($commonEntreprise) {
            $this->addUsingAlias(CommonEntreprisePeer::ID, $commonEntreprise->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
