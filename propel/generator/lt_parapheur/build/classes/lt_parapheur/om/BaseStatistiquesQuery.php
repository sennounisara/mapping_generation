<?php


/**
 * Base class that represents a query for the 'statistiques' table.
 *
 * 
 *
 * @method StatistiquesQuery orderByIdStatistique($order = Criteria::ASC) Order by the ID_STATISTIQUE column
 * @method StatistiquesQuery orderByAnnee($order = Criteria::ASC) Order by the ANNEE column
 * @method StatistiquesQuery orderByMois($order = Criteria::ASC) Order by the MOIS column
 * @method StatistiquesQuery orderByDemandesRecues($order = Criteria::ASC) Order by the DEMANDES_RECUES column
 * @method StatistiquesQuery orderByDemandesRecuesCumulAFinMois($order = Criteria::ASC) Order by the DEMANDES_RECUES_CUMUL_A_FIN_MOIS column
 * @method StatistiquesQuery orderByDemandesRecuesEvolutionParMois($order = Criteria::ASC) Order by the DEMANDES_RECUES_EVOLUTION_PAR_MOIS column
 * @method StatistiquesQuery orderByDemandesTraitees($order = Criteria::ASC) Order by the DEMANDES_TRAITEES column
 * @method StatistiquesQuery orderByDemandesTraiteesCumulAFinMois($order = Criteria::ASC) Order by the DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS column
 * @method StatistiquesQuery orderByDemandesTraiteesEvolutionParMois($order = Criteria::ASC) Order by the DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS column
 * @method StatistiquesQuery orderByDemandesCloturees($order = Criteria::ASC) Order by the DEMANDES_CLOTUREES column
 * @method StatistiquesQuery orderByDemandesClotureeCumulAFinMois($order = Criteria::ASC) Order by the DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS column
 * @method StatistiquesQuery orderByDemandesClotureeEvolutionParMois($order = Criteria::ASC) Order by the DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS column
 * @method StatistiquesQuery orderByDemandesReponsesEnvoyees($order = Criteria::ASC) Order by the DEMANDES_REPONSES_ENVOYEES column
 * @method StatistiquesQuery orderByDemandesReponsesEnvoyeesCumulAFinMois($order = Criteria::ASC) Order by the DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS column
 * @method StatistiquesQuery orderByDemandesReponsesEnvoyeesEvolutionParMois($order = Criteria::ASC) Order by the DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS column
 * @method StatistiquesQuery orderByDemandesHorsAttributionErronees($order = Criteria::ASC) Order by the DEMANDES_HORS_ATTRIBUTION_ERRONEES column
 * @method StatistiquesQuery orderByDemandesHorsAttributionErroneesCumulAFinMois($order = Criteria::ASC) Order by the DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS column
 * @method StatistiquesQuery orderByDemandesHorsAttributionErroneesEvolutionParMois($order = Criteria::ASC) Order by the DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS column
 * @method StatistiquesQuery orderByDemandesEnCours($order = Criteria::ASC) Order by the DEMANDES_EN_COURS column
 * @method StatistiquesQuery orderByDemandesEnCoursCumulAFinMois($order = Criteria::ASC) Order by the DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS column
 * @method StatistiquesQuery orderByDemandesEnCoursEvolutionParMois($order = Criteria::ASC) Order by the DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS column
 * @method StatistiquesQuery orderByDemandesAffecteesReouverte($order = Criteria::ASC) Order by the DEMANDES_AFFECTEES_REOUVERTE column
 * @method StatistiquesQuery orderByDemandesAffecteesReouverteCumulAFinMois($order = Criteria::ASC) Order by the DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS column
 * @method StatistiquesQuery orderByDemandesAffecteesReouverteEvolutionParMois($order = Criteria::ASC) Order by the DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS column
 * @method StatistiquesQuery orderByDemandesEnPropositionReponse($order = Criteria::ASC) Order by the DEMANDES_EN_PROPOSITION_REPONSE column
 * @method StatistiquesQuery orderByDemandesEnPropositionReponseCumulAFinMois($order = Criteria::ASC) Order by the DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS column
 * @method StatistiquesQuery orderByDemandesEnPropositionReponseEvolutionParMois($order = Criteria::ASC) Order by the DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS column
 * @method StatistiquesQuery orderByDelaiMoyenMois($order = Criteria::ASC) Order by the DELAI_MOYEN_MOIS column
 * @method StatistiquesQuery orderByEvolutionDelaiMoyen($order = Criteria::ASC) Order by the EVOLUTION_DELAI_MOYEN column
 * @method StatistiquesQuery orderByDelaiMinimalMois($order = Criteria::ASC) Order by the DELAI_MINIMAL_MOIS column
 * @method StatistiquesQuery orderByEvolutionDelaiMinimal($order = Criteria::ASC) Order by the EVOLUTION_DELAI_MINIMAL column
 * @method StatistiquesQuery orderByDelaiMaximal($order = Criteria::ASC) Order by the DELAI_MAXIMAL column
 * @method StatistiquesQuery orderByEvolutionDelaiMaximal($order = Criteria::ASC) Order by the EVOLUTION_DELAI_MAXIMAL column
 * @method StatistiquesQuery orderByTauxReponse($order = Criteria::ASC) Order by the TAUX_REPONSE column
 * @method StatistiquesQuery orderByEvolutionTauxReponse($order = Criteria::ASC) Order by the EVOLUTION_TAUX_REPONSE column
 * @method StatistiquesQuery orderByTauxSatisfactionRequerants($order = Criteria::ASC) Order by the TAUX_SATISFACTION_REQUERANTS column
 * @method StatistiquesQuery orderByEvolutionTauxSatisfaction($order = Criteria::ASC) Order by the EVOLUTION_TAUX_SATISFACTION column
 * @method StatistiquesQuery orderByCumulTauxSatisfaction($order = Criteria::ASC) Order by the CUMUL_TAUX_SATISFACTION column
 * @method StatistiquesQuery orderByDemandesAssistanceInterne($order = Criteria::ASC) Order by the DEMANDES_ASSISTANCE_INTERNE column
 * @method StatistiquesQuery orderByEvolutionDemandeInterne($order = Criteria::ASC) Order by the EVOLUTION_DEMANDE_INTERNE column
 * @method StatistiquesQuery orderByCumulDemandeInterne($order = Criteria::ASC) Order by the CUMUL_DEMANDE_INTERNE column
 * @method StatistiquesQuery orderByDateMiseAJour($order = Criteria::ASC) Order by the DATE_MISE_A_JOUR column
 * @method StatistiquesQuery orderByIdEntite($order = Criteria::ASC) Order by the ID_ENTITE column
 *
 * @method StatistiquesQuery groupByIdStatistique() Group by the ID_STATISTIQUE column
 * @method StatistiquesQuery groupByAnnee() Group by the ANNEE column
 * @method StatistiquesQuery groupByMois() Group by the MOIS column
 * @method StatistiquesQuery groupByDemandesRecues() Group by the DEMANDES_RECUES column
 * @method StatistiquesQuery groupByDemandesRecuesCumulAFinMois() Group by the DEMANDES_RECUES_CUMUL_A_FIN_MOIS column
 * @method StatistiquesQuery groupByDemandesRecuesEvolutionParMois() Group by the DEMANDES_RECUES_EVOLUTION_PAR_MOIS column
 * @method StatistiquesQuery groupByDemandesTraitees() Group by the DEMANDES_TRAITEES column
 * @method StatistiquesQuery groupByDemandesTraiteesCumulAFinMois() Group by the DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS column
 * @method StatistiquesQuery groupByDemandesTraiteesEvolutionParMois() Group by the DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS column
 * @method StatistiquesQuery groupByDemandesCloturees() Group by the DEMANDES_CLOTUREES column
 * @method StatistiquesQuery groupByDemandesClotureeCumulAFinMois() Group by the DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS column
 * @method StatistiquesQuery groupByDemandesClotureeEvolutionParMois() Group by the DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS column
 * @method StatistiquesQuery groupByDemandesReponsesEnvoyees() Group by the DEMANDES_REPONSES_ENVOYEES column
 * @method StatistiquesQuery groupByDemandesReponsesEnvoyeesCumulAFinMois() Group by the DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS column
 * @method StatistiquesQuery groupByDemandesReponsesEnvoyeesEvolutionParMois() Group by the DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS column
 * @method StatistiquesQuery groupByDemandesHorsAttributionErronees() Group by the DEMANDES_HORS_ATTRIBUTION_ERRONEES column
 * @method StatistiquesQuery groupByDemandesHorsAttributionErroneesCumulAFinMois() Group by the DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS column
 * @method StatistiquesQuery groupByDemandesHorsAttributionErroneesEvolutionParMois() Group by the DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS column
 * @method StatistiquesQuery groupByDemandesEnCours() Group by the DEMANDES_EN_COURS column
 * @method StatistiquesQuery groupByDemandesEnCoursCumulAFinMois() Group by the DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS column
 * @method StatistiquesQuery groupByDemandesEnCoursEvolutionParMois() Group by the DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS column
 * @method StatistiquesQuery groupByDemandesAffecteesReouverte() Group by the DEMANDES_AFFECTEES_REOUVERTE column
 * @method StatistiquesQuery groupByDemandesAffecteesReouverteCumulAFinMois() Group by the DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS column
 * @method StatistiquesQuery groupByDemandesAffecteesReouverteEvolutionParMois() Group by the DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS column
 * @method StatistiquesQuery groupByDemandesEnPropositionReponse() Group by the DEMANDES_EN_PROPOSITION_REPONSE column
 * @method StatistiquesQuery groupByDemandesEnPropositionReponseCumulAFinMois() Group by the DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS column
 * @method StatistiquesQuery groupByDemandesEnPropositionReponseEvolutionParMois() Group by the DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS column
 * @method StatistiquesQuery groupByDelaiMoyenMois() Group by the DELAI_MOYEN_MOIS column
 * @method StatistiquesQuery groupByEvolutionDelaiMoyen() Group by the EVOLUTION_DELAI_MOYEN column
 * @method StatistiquesQuery groupByDelaiMinimalMois() Group by the DELAI_MINIMAL_MOIS column
 * @method StatistiquesQuery groupByEvolutionDelaiMinimal() Group by the EVOLUTION_DELAI_MINIMAL column
 * @method StatistiquesQuery groupByDelaiMaximal() Group by the DELAI_MAXIMAL column
 * @method StatistiquesQuery groupByEvolutionDelaiMaximal() Group by the EVOLUTION_DELAI_MAXIMAL column
 * @method StatistiquesQuery groupByTauxReponse() Group by the TAUX_REPONSE column
 * @method StatistiquesQuery groupByEvolutionTauxReponse() Group by the EVOLUTION_TAUX_REPONSE column
 * @method StatistiquesQuery groupByTauxSatisfactionRequerants() Group by the TAUX_SATISFACTION_REQUERANTS column
 * @method StatistiquesQuery groupByEvolutionTauxSatisfaction() Group by the EVOLUTION_TAUX_SATISFACTION column
 * @method StatistiquesQuery groupByCumulTauxSatisfaction() Group by the CUMUL_TAUX_SATISFACTION column
 * @method StatistiquesQuery groupByDemandesAssistanceInterne() Group by the DEMANDES_ASSISTANCE_INTERNE column
 * @method StatistiquesQuery groupByEvolutionDemandeInterne() Group by the EVOLUTION_DEMANDE_INTERNE column
 * @method StatistiquesQuery groupByCumulDemandeInterne() Group by the CUMUL_DEMANDE_INTERNE column
 * @method StatistiquesQuery groupByDateMiseAJour() Group by the DATE_MISE_A_JOUR column
 * @method StatistiquesQuery groupByIdEntite() Group by the ID_ENTITE column
 *
 * @method StatistiquesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method StatistiquesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method StatistiquesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Statistiques findOne(PropelPDO $con = null) Return the first Statistiques matching the query
 * @method Statistiques findOneOrCreate(PropelPDO $con = null) Return the first Statistiques matching the query, or a new Statistiques object populated from the query conditions when no match is found
 *
 * @method Statistiques findOneByAnnee(int $ANNEE) Return the first Statistiques filtered by the ANNEE column
 * @method Statistiques findOneByMois(string $MOIS) Return the first Statistiques filtered by the MOIS column
 * @method Statistiques findOneByDemandesRecues(int $DEMANDES_RECUES) Return the first Statistiques filtered by the DEMANDES_RECUES column
 * @method Statistiques findOneByDemandesRecuesCumulAFinMois(int $DEMANDES_RECUES_CUMUL_A_FIN_MOIS) Return the first Statistiques filtered by the DEMANDES_RECUES_CUMUL_A_FIN_MOIS column
 * @method Statistiques findOneByDemandesRecuesEvolutionParMois(int $DEMANDES_RECUES_EVOLUTION_PAR_MOIS) Return the first Statistiques filtered by the DEMANDES_RECUES_EVOLUTION_PAR_MOIS column
 * @method Statistiques findOneByDemandesTraitees(int $DEMANDES_TRAITEES) Return the first Statistiques filtered by the DEMANDES_TRAITEES column
 * @method Statistiques findOneByDemandesTraiteesCumulAFinMois(int $DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS) Return the first Statistiques filtered by the DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS column
 * @method Statistiques findOneByDemandesTraiteesEvolutionParMois(int $DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS) Return the first Statistiques filtered by the DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS column
 * @method Statistiques findOneByDemandesCloturees(int $DEMANDES_CLOTUREES) Return the first Statistiques filtered by the DEMANDES_CLOTUREES column
 * @method Statistiques findOneByDemandesClotureeCumulAFinMois(int $DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS) Return the first Statistiques filtered by the DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS column
 * @method Statistiques findOneByDemandesClotureeEvolutionParMois(int $DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS) Return the first Statistiques filtered by the DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS column
 * @method Statistiques findOneByDemandesReponsesEnvoyees(int $DEMANDES_REPONSES_ENVOYEES) Return the first Statistiques filtered by the DEMANDES_REPONSES_ENVOYEES column
 * @method Statistiques findOneByDemandesReponsesEnvoyeesCumulAFinMois(int $DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS) Return the first Statistiques filtered by the DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS column
 * @method Statistiques findOneByDemandesReponsesEnvoyeesEvolutionParMois(int $DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS) Return the first Statistiques filtered by the DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS column
 * @method Statistiques findOneByDemandesHorsAttributionErronees(int $DEMANDES_HORS_ATTRIBUTION_ERRONEES) Return the first Statistiques filtered by the DEMANDES_HORS_ATTRIBUTION_ERRONEES column
 * @method Statistiques findOneByDemandesHorsAttributionErroneesCumulAFinMois(int $DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS) Return the first Statistiques filtered by the DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS column
 * @method Statistiques findOneByDemandesHorsAttributionErroneesEvolutionParMois(int $DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS) Return the first Statistiques filtered by the DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS column
 * @method Statistiques findOneByDemandesEnCours(int $DEMANDES_EN_COURS) Return the first Statistiques filtered by the DEMANDES_EN_COURS column
 * @method Statistiques findOneByDemandesEnCoursCumulAFinMois(int $DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS) Return the first Statistiques filtered by the DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS column
 * @method Statistiques findOneByDemandesEnCoursEvolutionParMois(int $DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS) Return the first Statistiques filtered by the DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS column
 * @method Statistiques findOneByDemandesAffecteesReouverte(int $DEMANDES_AFFECTEES_REOUVERTE) Return the first Statistiques filtered by the DEMANDES_AFFECTEES_REOUVERTE column
 * @method Statistiques findOneByDemandesAffecteesReouverteCumulAFinMois(int $DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS) Return the first Statistiques filtered by the DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS column
 * @method Statistiques findOneByDemandesAffecteesReouverteEvolutionParMois(int $DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS) Return the first Statistiques filtered by the DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS column
 * @method Statistiques findOneByDemandesEnPropositionReponse(int $DEMANDES_EN_PROPOSITION_REPONSE) Return the first Statistiques filtered by the DEMANDES_EN_PROPOSITION_REPONSE column
 * @method Statistiques findOneByDemandesEnPropositionReponseCumulAFinMois(int $DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS) Return the first Statistiques filtered by the DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS column
 * @method Statistiques findOneByDemandesEnPropositionReponseEvolutionParMois(int $DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS) Return the first Statistiques filtered by the DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS column
 * @method Statistiques findOneByDelaiMoyenMois(int $DELAI_MOYEN_MOIS) Return the first Statistiques filtered by the DELAI_MOYEN_MOIS column
 * @method Statistiques findOneByEvolutionDelaiMoyen(int $EVOLUTION_DELAI_MOYEN) Return the first Statistiques filtered by the EVOLUTION_DELAI_MOYEN column
 * @method Statistiques findOneByDelaiMinimalMois(int $DELAI_MINIMAL_MOIS) Return the first Statistiques filtered by the DELAI_MINIMAL_MOIS column
 * @method Statistiques findOneByEvolutionDelaiMinimal(int $EVOLUTION_DELAI_MINIMAL) Return the first Statistiques filtered by the EVOLUTION_DELAI_MINIMAL column
 * @method Statistiques findOneByDelaiMaximal(int $DELAI_MAXIMAL) Return the first Statistiques filtered by the DELAI_MAXIMAL column
 * @method Statistiques findOneByEvolutionDelaiMaximal(int $EVOLUTION_DELAI_MAXIMAL) Return the first Statistiques filtered by the EVOLUTION_DELAI_MAXIMAL column
 * @method Statistiques findOneByTauxReponse(int $TAUX_REPONSE) Return the first Statistiques filtered by the TAUX_REPONSE column
 * @method Statistiques findOneByEvolutionTauxReponse(int $EVOLUTION_TAUX_REPONSE) Return the first Statistiques filtered by the EVOLUTION_TAUX_REPONSE column
 * @method Statistiques findOneByTauxSatisfactionRequerants(int $TAUX_SATISFACTION_REQUERANTS) Return the first Statistiques filtered by the TAUX_SATISFACTION_REQUERANTS column
 * @method Statistiques findOneByEvolutionTauxSatisfaction(int $EVOLUTION_TAUX_SATISFACTION) Return the first Statistiques filtered by the EVOLUTION_TAUX_SATISFACTION column
 * @method Statistiques findOneByCumulTauxSatisfaction(int $CUMUL_TAUX_SATISFACTION) Return the first Statistiques filtered by the CUMUL_TAUX_SATISFACTION column
 * @method Statistiques findOneByDemandesAssistanceInterne(int $DEMANDES_ASSISTANCE_INTERNE) Return the first Statistiques filtered by the DEMANDES_ASSISTANCE_INTERNE column
 * @method Statistiques findOneByEvolutionDemandeInterne(int $EVOLUTION_DEMANDE_INTERNE) Return the first Statistiques filtered by the EVOLUTION_DEMANDE_INTERNE column
 * @method Statistiques findOneByCumulDemandeInterne(int $CUMUL_DEMANDE_INTERNE) Return the first Statistiques filtered by the CUMUL_DEMANDE_INTERNE column
 * @method Statistiques findOneByDateMiseAJour(string $DATE_MISE_A_JOUR) Return the first Statistiques filtered by the DATE_MISE_A_JOUR column
 * @method Statistiques findOneByIdEntite(int $ID_ENTITE) Return the first Statistiques filtered by the ID_ENTITE column
 *
 * @method array findByIdStatistique(int $ID_STATISTIQUE) Return Statistiques objects filtered by the ID_STATISTIQUE column
 * @method array findByAnnee(int $ANNEE) Return Statistiques objects filtered by the ANNEE column
 * @method array findByMois(string $MOIS) Return Statistiques objects filtered by the MOIS column
 * @method array findByDemandesRecues(int $DEMANDES_RECUES) Return Statistiques objects filtered by the DEMANDES_RECUES column
 * @method array findByDemandesRecuesCumulAFinMois(int $DEMANDES_RECUES_CUMUL_A_FIN_MOIS) Return Statistiques objects filtered by the DEMANDES_RECUES_CUMUL_A_FIN_MOIS column
 * @method array findByDemandesRecuesEvolutionParMois(int $DEMANDES_RECUES_EVOLUTION_PAR_MOIS) Return Statistiques objects filtered by the DEMANDES_RECUES_EVOLUTION_PAR_MOIS column
 * @method array findByDemandesTraitees(int $DEMANDES_TRAITEES) Return Statistiques objects filtered by the DEMANDES_TRAITEES column
 * @method array findByDemandesTraiteesCumulAFinMois(int $DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS) Return Statistiques objects filtered by the DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS column
 * @method array findByDemandesTraiteesEvolutionParMois(int $DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS) Return Statistiques objects filtered by the DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS column
 * @method array findByDemandesCloturees(int $DEMANDES_CLOTUREES) Return Statistiques objects filtered by the DEMANDES_CLOTUREES column
 * @method array findByDemandesClotureeCumulAFinMois(int $DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS) Return Statistiques objects filtered by the DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS column
 * @method array findByDemandesClotureeEvolutionParMois(int $DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS) Return Statistiques objects filtered by the DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS column
 * @method array findByDemandesReponsesEnvoyees(int $DEMANDES_REPONSES_ENVOYEES) Return Statistiques objects filtered by the DEMANDES_REPONSES_ENVOYEES column
 * @method array findByDemandesReponsesEnvoyeesCumulAFinMois(int $DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS) Return Statistiques objects filtered by the DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS column
 * @method array findByDemandesReponsesEnvoyeesEvolutionParMois(int $DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS) Return Statistiques objects filtered by the DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS column
 * @method array findByDemandesHorsAttributionErronees(int $DEMANDES_HORS_ATTRIBUTION_ERRONEES) Return Statistiques objects filtered by the DEMANDES_HORS_ATTRIBUTION_ERRONEES column
 * @method array findByDemandesHorsAttributionErroneesCumulAFinMois(int $DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS) Return Statistiques objects filtered by the DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS column
 * @method array findByDemandesHorsAttributionErroneesEvolutionParMois(int $DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS) Return Statistiques objects filtered by the DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS column
 * @method array findByDemandesEnCours(int $DEMANDES_EN_COURS) Return Statistiques objects filtered by the DEMANDES_EN_COURS column
 * @method array findByDemandesEnCoursCumulAFinMois(int $DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS) Return Statistiques objects filtered by the DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS column
 * @method array findByDemandesEnCoursEvolutionParMois(int $DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS) Return Statistiques objects filtered by the DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS column
 * @method array findByDemandesAffecteesReouverte(int $DEMANDES_AFFECTEES_REOUVERTE) Return Statistiques objects filtered by the DEMANDES_AFFECTEES_REOUVERTE column
 * @method array findByDemandesAffecteesReouverteCumulAFinMois(int $DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS) Return Statistiques objects filtered by the DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS column
 * @method array findByDemandesAffecteesReouverteEvolutionParMois(int $DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS) Return Statistiques objects filtered by the DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS column
 * @method array findByDemandesEnPropositionReponse(int $DEMANDES_EN_PROPOSITION_REPONSE) Return Statistiques objects filtered by the DEMANDES_EN_PROPOSITION_REPONSE column
 * @method array findByDemandesEnPropositionReponseCumulAFinMois(int $DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS) Return Statistiques objects filtered by the DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS column
 * @method array findByDemandesEnPropositionReponseEvolutionParMois(int $DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS) Return Statistiques objects filtered by the DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS column
 * @method array findByDelaiMoyenMois(int $DELAI_MOYEN_MOIS) Return Statistiques objects filtered by the DELAI_MOYEN_MOIS column
 * @method array findByEvolutionDelaiMoyen(int $EVOLUTION_DELAI_MOYEN) Return Statistiques objects filtered by the EVOLUTION_DELAI_MOYEN column
 * @method array findByDelaiMinimalMois(int $DELAI_MINIMAL_MOIS) Return Statistiques objects filtered by the DELAI_MINIMAL_MOIS column
 * @method array findByEvolutionDelaiMinimal(int $EVOLUTION_DELAI_MINIMAL) Return Statistiques objects filtered by the EVOLUTION_DELAI_MINIMAL column
 * @method array findByDelaiMaximal(int $DELAI_MAXIMAL) Return Statistiques objects filtered by the DELAI_MAXIMAL column
 * @method array findByEvolutionDelaiMaximal(int $EVOLUTION_DELAI_MAXIMAL) Return Statistiques objects filtered by the EVOLUTION_DELAI_MAXIMAL column
 * @method array findByTauxReponse(int $TAUX_REPONSE) Return Statistiques objects filtered by the TAUX_REPONSE column
 * @method array findByEvolutionTauxReponse(int $EVOLUTION_TAUX_REPONSE) Return Statistiques objects filtered by the EVOLUTION_TAUX_REPONSE column
 * @method array findByTauxSatisfactionRequerants(int $TAUX_SATISFACTION_REQUERANTS) Return Statistiques objects filtered by the TAUX_SATISFACTION_REQUERANTS column
 * @method array findByEvolutionTauxSatisfaction(int $EVOLUTION_TAUX_SATISFACTION) Return Statistiques objects filtered by the EVOLUTION_TAUX_SATISFACTION column
 * @method array findByCumulTauxSatisfaction(int $CUMUL_TAUX_SATISFACTION) Return Statistiques objects filtered by the CUMUL_TAUX_SATISFACTION column
 * @method array findByDemandesAssistanceInterne(int $DEMANDES_ASSISTANCE_INTERNE) Return Statistiques objects filtered by the DEMANDES_ASSISTANCE_INTERNE column
 * @method array findByEvolutionDemandeInterne(int $EVOLUTION_DEMANDE_INTERNE) Return Statistiques objects filtered by the EVOLUTION_DEMANDE_INTERNE column
 * @method array findByCumulDemandeInterne(int $CUMUL_DEMANDE_INTERNE) Return Statistiques objects filtered by the CUMUL_DEMANDE_INTERNE column
 * @method array findByDateMiseAJour(string $DATE_MISE_A_JOUR) Return Statistiques objects filtered by the DATE_MISE_A_JOUR column
 * @method array findByIdEntite(int $ID_ENTITE) Return Statistiques objects filtered by the ID_ENTITE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseStatistiquesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseStatistiquesQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'Statistiques', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new StatistiquesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   StatistiquesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return StatistiquesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof StatistiquesQuery) {
            return $criteria;
        }
        $query = new StatistiquesQuery();
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
     * @return   Statistiques|Statistiques[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = StatistiquesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(StatistiquesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Statistiques A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdStatistique($key, $con = null)
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
     * @return                 Statistiques A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_STATISTIQUE`, `ANNEE`, `MOIS`, `DEMANDES_RECUES`, `DEMANDES_RECUES_CUMUL_A_FIN_MOIS`, `DEMANDES_RECUES_EVOLUTION_PAR_MOIS`, `DEMANDES_TRAITEES`, `DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS`, `DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS`, `DEMANDES_CLOTUREES`, `DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS`, `DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS`, `DEMANDES_REPONSES_ENVOYEES`, `DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS`, `DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS`, `DEMANDES_HORS_ATTRIBUTION_ERRONEES`, `DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS`, `DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS`, `DEMANDES_EN_COURS`, `DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS`, `DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS`, `DEMANDES_AFFECTEES_REOUVERTE`, `DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS`, `DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS`, `DEMANDES_EN_PROPOSITION_REPONSE`, `DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS`, `DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS`, `DELAI_MOYEN_MOIS`, `EVOLUTION_DELAI_MOYEN`, `DELAI_MINIMAL_MOIS`, `EVOLUTION_DELAI_MINIMAL`, `DELAI_MAXIMAL`, `EVOLUTION_DELAI_MAXIMAL`, `TAUX_REPONSE`, `EVOLUTION_TAUX_REPONSE`, `TAUX_SATISFACTION_REQUERANTS`, `EVOLUTION_TAUX_SATISFACTION`, `CUMUL_TAUX_SATISFACTION`, `DEMANDES_ASSISTANCE_INTERNE`, `EVOLUTION_DEMANDE_INTERNE`, `CUMUL_DEMANDE_INTERNE`, `DATE_MISE_A_JOUR`, `ID_ENTITE` FROM `statistiques` WHERE `ID_STATISTIQUE` = :p0';
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
            $obj = new Statistiques();
            $obj->hydrate($row);
            StatistiquesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Statistiques|Statistiques[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Statistiques[]|mixed the list of results, formatted by the current formatter
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
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(StatistiquesPeer::ID_STATISTIQUE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(StatistiquesPeer::ID_STATISTIQUE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_STATISTIQUE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdStatistique(1234); // WHERE ID_STATISTIQUE = 1234
     * $query->filterByIdStatistique(array(12, 34)); // WHERE ID_STATISTIQUE IN (12, 34)
     * $query->filterByIdStatistique(array('min' => 12)); // WHERE ID_STATISTIQUE >= 12
     * $query->filterByIdStatistique(array('max' => 12)); // WHERE ID_STATISTIQUE <= 12
     * </code>
     *
     * @param     mixed $idStatistique The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByIdStatistique($idStatistique = null, $comparison = null)
    {
        if (is_array($idStatistique)) {
            $useMinMax = false;
            if (isset($idStatistique['min'])) {
                $this->addUsingAlias(StatistiquesPeer::ID_STATISTIQUE, $idStatistique['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idStatistique['max'])) {
                $this->addUsingAlias(StatistiquesPeer::ID_STATISTIQUE, $idStatistique['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::ID_STATISTIQUE, $idStatistique, $comparison);
    }

    /**
     * Filter the query on the ANNEE column
     *
     * Example usage:
     * <code>
     * $query->filterByAnnee(1234); // WHERE ANNEE = 1234
     * $query->filterByAnnee(array(12, 34)); // WHERE ANNEE IN (12, 34)
     * $query->filterByAnnee(array('min' => 12)); // WHERE ANNEE >= 12
     * $query->filterByAnnee(array('max' => 12)); // WHERE ANNEE <= 12
     * </code>
     *
     * @param     mixed $annee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByAnnee($annee = null, $comparison = null)
    {
        if (is_array($annee)) {
            $useMinMax = false;
            if (isset($annee['min'])) {
                $this->addUsingAlias(StatistiquesPeer::ANNEE, $annee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($annee['max'])) {
                $this->addUsingAlias(StatistiquesPeer::ANNEE, $annee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::ANNEE, $annee, $comparison);
    }

    /**
     * Filter the query on the MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByMois('fooValue');   // WHERE MOIS = 'fooValue'
     * $query->filterByMois('%fooValue%'); // WHERE MOIS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mois The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByMois($mois = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mois)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mois)) {
                $mois = str_replace('*', '%', $mois);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::MOIS, $mois, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_RECUES column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesRecues(1234); // WHERE DEMANDES_RECUES = 1234
     * $query->filterByDemandesRecues(array(12, 34)); // WHERE DEMANDES_RECUES IN (12, 34)
     * $query->filterByDemandesRecues(array('min' => 12)); // WHERE DEMANDES_RECUES >= 12
     * $query->filterByDemandesRecues(array('max' => 12)); // WHERE DEMANDES_RECUES <= 12
     * </code>
     *
     * @param     mixed $demandesRecues The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesRecues($demandesRecues = null, $comparison = null)
    {
        if (is_array($demandesRecues)) {
            $useMinMax = false;
            if (isset($demandesRecues['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_RECUES, $demandesRecues['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesRecues['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_RECUES, $demandesRecues['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_RECUES, $demandesRecues, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_RECUES_CUMUL_A_FIN_MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesRecuesCumulAFinMois(1234); // WHERE DEMANDES_RECUES_CUMUL_A_FIN_MOIS = 1234
     * $query->filterByDemandesRecuesCumulAFinMois(array(12, 34)); // WHERE DEMANDES_RECUES_CUMUL_A_FIN_MOIS IN (12, 34)
     * $query->filterByDemandesRecuesCumulAFinMois(array('min' => 12)); // WHERE DEMANDES_RECUES_CUMUL_A_FIN_MOIS >= 12
     * $query->filterByDemandesRecuesCumulAFinMois(array('max' => 12)); // WHERE DEMANDES_RECUES_CUMUL_A_FIN_MOIS <= 12
     * </code>
     *
     * @param     mixed $demandesRecuesCumulAFinMois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesRecuesCumulAFinMois($demandesRecuesCumulAFinMois = null, $comparison = null)
    {
        if (is_array($demandesRecuesCumulAFinMois)) {
            $useMinMax = false;
            if (isset($demandesRecuesCumulAFinMois['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_RECUES_CUMUL_A_FIN_MOIS, $demandesRecuesCumulAFinMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesRecuesCumulAFinMois['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_RECUES_CUMUL_A_FIN_MOIS, $demandesRecuesCumulAFinMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_RECUES_CUMUL_A_FIN_MOIS, $demandesRecuesCumulAFinMois, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_RECUES_EVOLUTION_PAR_MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesRecuesEvolutionParMois(1234); // WHERE DEMANDES_RECUES_EVOLUTION_PAR_MOIS = 1234
     * $query->filterByDemandesRecuesEvolutionParMois(array(12, 34)); // WHERE DEMANDES_RECUES_EVOLUTION_PAR_MOIS IN (12, 34)
     * $query->filterByDemandesRecuesEvolutionParMois(array('min' => 12)); // WHERE DEMANDES_RECUES_EVOLUTION_PAR_MOIS >= 12
     * $query->filterByDemandesRecuesEvolutionParMois(array('max' => 12)); // WHERE DEMANDES_RECUES_EVOLUTION_PAR_MOIS <= 12
     * </code>
     *
     * @param     mixed $demandesRecuesEvolutionParMois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesRecuesEvolutionParMois($demandesRecuesEvolutionParMois = null, $comparison = null)
    {
        if (is_array($demandesRecuesEvolutionParMois)) {
            $useMinMax = false;
            if (isset($demandesRecuesEvolutionParMois['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_RECUES_EVOLUTION_PAR_MOIS, $demandesRecuesEvolutionParMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesRecuesEvolutionParMois['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_RECUES_EVOLUTION_PAR_MOIS, $demandesRecuesEvolutionParMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_RECUES_EVOLUTION_PAR_MOIS, $demandesRecuesEvolutionParMois, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_TRAITEES column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesTraitees(1234); // WHERE DEMANDES_TRAITEES = 1234
     * $query->filterByDemandesTraitees(array(12, 34)); // WHERE DEMANDES_TRAITEES IN (12, 34)
     * $query->filterByDemandesTraitees(array('min' => 12)); // WHERE DEMANDES_TRAITEES >= 12
     * $query->filterByDemandesTraitees(array('max' => 12)); // WHERE DEMANDES_TRAITEES <= 12
     * </code>
     *
     * @param     mixed $demandesTraitees The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesTraitees($demandesTraitees = null, $comparison = null)
    {
        if (is_array($demandesTraitees)) {
            $useMinMax = false;
            if (isset($demandesTraitees['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_TRAITEES, $demandesTraitees['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesTraitees['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_TRAITEES, $demandesTraitees['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_TRAITEES, $demandesTraitees, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesTraiteesCumulAFinMois(1234); // WHERE DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS = 1234
     * $query->filterByDemandesTraiteesCumulAFinMois(array(12, 34)); // WHERE DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS IN (12, 34)
     * $query->filterByDemandesTraiteesCumulAFinMois(array('min' => 12)); // WHERE DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS >= 12
     * $query->filterByDemandesTraiteesCumulAFinMois(array('max' => 12)); // WHERE DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS <= 12
     * </code>
     *
     * @param     mixed $demandesTraiteesCumulAFinMois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesTraiteesCumulAFinMois($demandesTraiteesCumulAFinMois = null, $comparison = null)
    {
        if (is_array($demandesTraiteesCumulAFinMois)) {
            $useMinMax = false;
            if (isset($demandesTraiteesCumulAFinMois['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS, $demandesTraiteesCumulAFinMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesTraiteesCumulAFinMois['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS, $demandesTraiteesCumulAFinMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS, $demandesTraiteesCumulAFinMois, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesTraiteesEvolutionParMois(1234); // WHERE DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS = 1234
     * $query->filterByDemandesTraiteesEvolutionParMois(array(12, 34)); // WHERE DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS IN (12, 34)
     * $query->filterByDemandesTraiteesEvolutionParMois(array('min' => 12)); // WHERE DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS >= 12
     * $query->filterByDemandesTraiteesEvolutionParMois(array('max' => 12)); // WHERE DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS <= 12
     * </code>
     *
     * @param     mixed $demandesTraiteesEvolutionParMois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesTraiteesEvolutionParMois($demandesTraiteesEvolutionParMois = null, $comparison = null)
    {
        if (is_array($demandesTraiteesEvolutionParMois)) {
            $useMinMax = false;
            if (isset($demandesTraiteesEvolutionParMois['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS, $demandesTraiteesEvolutionParMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesTraiteesEvolutionParMois['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS, $demandesTraiteesEvolutionParMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS, $demandesTraiteesEvolutionParMois, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_CLOTUREES column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesCloturees(1234); // WHERE DEMANDES_CLOTUREES = 1234
     * $query->filterByDemandesCloturees(array(12, 34)); // WHERE DEMANDES_CLOTUREES IN (12, 34)
     * $query->filterByDemandesCloturees(array('min' => 12)); // WHERE DEMANDES_CLOTUREES >= 12
     * $query->filterByDemandesCloturees(array('max' => 12)); // WHERE DEMANDES_CLOTUREES <= 12
     * </code>
     *
     * @param     mixed $demandesCloturees The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesCloturees($demandesCloturees = null, $comparison = null)
    {
        if (is_array($demandesCloturees)) {
            $useMinMax = false;
            if (isset($demandesCloturees['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_CLOTUREES, $demandesCloturees['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesCloturees['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_CLOTUREES, $demandesCloturees['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_CLOTUREES, $demandesCloturees, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesClotureeCumulAFinMois(1234); // WHERE DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS = 1234
     * $query->filterByDemandesClotureeCumulAFinMois(array(12, 34)); // WHERE DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS IN (12, 34)
     * $query->filterByDemandesClotureeCumulAFinMois(array('min' => 12)); // WHERE DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS >= 12
     * $query->filterByDemandesClotureeCumulAFinMois(array('max' => 12)); // WHERE DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS <= 12
     * </code>
     *
     * @param     mixed $demandesClotureeCumulAFinMois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesClotureeCumulAFinMois($demandesClotureeCumulAFinMois = null, $comparison = null)
    {
        if (is_array($demandesClotureeCumulAFinMois)) {
            $useMinMax = false;
            if (isset($demandesClotureeCumulAFinMois['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS, $demandesClotureeCumulAFinMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesClotureeCumulAFinMois['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS, $demandesClotureeCumulAFinMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS, $demandesClotureeCumulAFinMois, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesClotureeEvolutionParMois(1234); // WHERE DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS = 1234
     * $query->filterByDemandesClotureeEvolutionParMois(array(12, 34)); // WHERE DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS IN (12, 34)
     * $query->filterByDemandesClotureeEvolutionParMois(array('min' => 12)); // WHERE DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS >= 12
     * $query->filterByDemandesClotureeEvolutionParMois(array('max' => 12)); // WHERE DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS <= 12
     * </code>
     *
     * @param     mixed $demandesClotureeEvolutionParMois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesClotureeEvolutionParMois($demandesClotureeEvolutionParMois = null, $comparison = null)
    {
        if (is_array($demandesClotureeEvolutionParMois)) {
            $useMinMax = false;
            if (isset($demandesClotureeEvolutionParMois['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS, $demandesClotureeEvolutionParMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesClotureeEvolutionParMois['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS, $demandesClotureeEvolutionParMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS, $demandesClotureeEvolutionParMois, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_REPONSES_ENVOYEES column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesReponsesEnvoyees(1234); // WHERE DEMANDES_REPONSES_ENVOYEES = 1234
     * $query->filterByDemandesReponsesEnvoyees(array(12, 34)); // WHERE DEMANDES_REPONSES_ENVOYEES IN (12, 34)
     * $query->filterByDemandesReponsesEnvoyees(array('min' => 12)); // WHERE DEMANDES_REPONSES_ENVOYEES >= 12
     * $query->filterByDemandesReponsesEnvoyees(array('max' => 12)); // WHERE DEMANDES_REPONSES_ENVOYEES <= 12
     * </code>
     *
     * @param     mixed $demandesReponsesEnvoyees The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesReponsesEnvoyees($demandesReponsesEnvoyees = null, $comparison = null)
    {
        if (is_array($demandesReponsesEnvoyees)) {
            $useMinMax = false;
            if (isset($demandesReponsesEnvoyees['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES, $demandesReponsesEnvoyees['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesReponsesEnvoyees['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES, $demandesReponsesEnvoyees['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES, $demandesReponsesEnvoyees, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesReponsesEnvoyeesCumulAFinMois(1234); // WHERE DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS = 1234
     * $query->filterByDemandesReponsesEnvoyeesCumulAFinMois(array(12, 34)); // WHERE DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS IN (12, 34)
     * $query->filterByDemandesReponsesEnvoyeesCumulAFinMois(array('min' => 12)); // WHERE DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS >= 12
     * $query->filterByDemandesReponsesEnvoyeesCumulAFinMois(array('max' => 12)); // WHERE DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS <= 12
     * </code>
     *
     * @param     mixed $demandesReponsesEnvoyeesCumulAFinMois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesReponsesEnvoyeesCumulAFinMois($demandesReponsesEnvoyeesCumulAFinMois = null, $comparison = null)
    {
        if (is_array($demandesReponsesEnvoyeesCumulAFinMois)) {
            $useMinMax = false;
            if (isset($demandesReponsesEnvoyeesCumulAFinMois['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS, $demandesReponsesEnvoyeesCumulAFinMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesReponsesEnvoyeesCumulAFinMois['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS, $demandesReponsesEnvoyeesCumulAFinMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS, $demandesReponsesEnvoyeesCumulAFinMois, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesReponsesEnvoyeesEvolutionParMois(1234); // WHERE DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS = 1234
     * $query->filterByDemandesReponsesEnvoyeesEvolutionParMois(array(12, 34)); // WHERE DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS IN (12, 34)
     * $query->filterByDemandesReponsesEnvoyeesEvolutionParMois(array('min' => 12)); // WHERE DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS >= 12
     * $query->filterByDemandesReponsesEnvoyeesEvolutionParMois(array('max' => 12)); // WHERE DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS <= 12
     * </code>
     *
     * @param     mixed $demandesReponsesEnvoyeesEvolutionParMois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesReponsesEnvoyeesEvolutionParMois($demandesReponsesEnvoyeesEvolutionParMois = null, $comparison = null)
    {
        if (is_array($demandesReponsesEnvoyeesEvolutionParMois)) {
            $useMinMax = false;
            if (isset($demandesReponsesEnvoyeesEvolutionParMois['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS, $demandesReponsesEnvoyeesEvolutionParMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesReponsesEnvoyeesEvolutionParMois['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS, $demandesReponsesEnvoyeesEvolutionParMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS, $demandesReponsesEnvoyeesEvolutionParMois, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_HORS_ATTRIBUTION_ERRONEES column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesHorsAttributionErronees(1234); // WHERE DEMANDES_HORS_ATTRIBUTION_ERRONEES = 1234
     * $query->filterByDemandesHorsAttributionErronees(array(12, 34)); // WHERE DEMANDES_HORS_ATTRIBUTION_ERRONEES IN (12, 34)
     * $query->filterByDemandesHorsAttributionErronees(array('min' => 12)); // WHERE DEMANDES_HORS_ATTRIBUTION_ERRONEES >= 12
     * $query->filterByDemandesHorsAttributionErronees(array('max' => 12)); // WHERE DEMANDES_HORS_ATTRIBUTION_ERRONEES <= 12
     * </code>
     *
     * @param     mixed $demandesHorsAttributionErronees The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesHorsAttributionErronees($demandesHorsAttributionErronees = null, $comparison = null)
    {
        if (is_array($demandesHorsAttributionErronees)) {
            $useMinMax = false;
            if (isset($demandesHorsAttributionErronees['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES, $demandesHorsAttributionErronees['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesHorsAttributionErronees['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES, $demandesHorsAttributionErronees['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES, $demandesHorsAttributionErronees, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesHorsAttributionErroneesCumulAFinMois(1234); // WHERE DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS = 1234
     * $query->filterByDemandesHorsAttributionErroneesCumulAFinMois(array(12, 34)); // WHERE DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS IN (12, 34)
     * $query->filterByDemandesHorsAttributionErroneesCumulAFinMois(array('min' => 12)); // WHERE DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS >= 12
     * $query->filterByDemandesHorsAttributionErroneesCumulAFinMois(array('max' => 12)); // WHERE DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS <= 12
     * </code>
     *
     * @param     mixed $demandesHorsAttributionErroneesCumulAFinMois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesHorsAttributionErroneesCumulAFinMois($demandesHorsAttributionErroneesCumulAFinMois = null, $comparison = null)
    {
        if (is_array($demandesHorsAttributionErroneesCumulAFinMois)) {
            $useMinMax = false;
            if (isset($demandesHorsAttributionErroneesCumulAFinMois['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS, $demandesHorsAttributionErroneesCumulAFinMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesHorsAttributionErroneesCumulAFinMois['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS, $demandesHorsAttributionErroneesCumulAFinMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS, $demandesHorsAttributionErroneesCumulAFinMois, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesHorsAttributionErroneesEvolutionParMois(1234); // WHERE DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS = 1234
     * $query->filterByDemandesHorsAttributionErroneesEvolutionParMois(array(12, 34)); // WHERE DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS IN (12, 34)
     * $query->filterByDemandesHorsAttributionErroneesEvolutionParMois(array('min' => 12)); // WHERE DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS >= 12
     * $query->filterByDemandesHorsAttributionErroneesEvolutionParMois(array('max' => 12)); // WHERE DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS <= 12
     * </code>
     *
     * @param     mixed $demandesHorsAttributionErroneesEvolutionParMois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesHorsAttributionErroneesEvolutionParMois($demandesHorsAttributionErroneesEvolutionParMois = null, $comparison = null)
    {
        if (is_array($demandesHorsAttributionErroneesEvolutionParMois)) {
            $useMinMax = false;
            if (isset($demandesHorsAttributionErroneesEvolutionParMois['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS, $demandesHorsAttributionErroneesEvolutionParMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesHorsAttributionErroneesEvolutionParMois['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS, $demandesHorsAttributionErroneesEvolutionParMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS, $demandesHorsAttributionErroneesEvolutionParMois, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_EN_COURS column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesEnCours(1234); // WHERE DEMANDES_EN_COURS = 1234
     * $query->filterByDemandesEnCours(array(12, 34)); // WHERE DEMANDES_EN_COURS IN (12, 34)
     * $query->filterByDemandesEnCours(array('min' => 12)); // WHERE DEMANDES_EN_COURS >= 12
     * $query->filterByDemandesEnCours(array('max' => 12)); // WHERE DEMANDES_EN_COURS <= 12
     * </code>
     *
     * @param     mixed $demandesEnCours The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesEnCours($demandesEnCours = null, $comparison = null)
    {
        if (is_array($demandesEnCours)) {
            $useMinMax = false;
            if (isset($demandesEnCours['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_EN_COURS, $demandesEnCours['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesEnCours['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_EN_COURS, $demandesEnCours['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_EN_COURS, $demandesEnCours, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesEnCoursCumulAFinMois(1234); // WHERE DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS = 1234
     * $query->filterByDemandesEnCoursCumulAFinMois(array(12, 34)); // WHERE DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS IN (12, 34)
     * $query->filterByDemandesEnCoursCumulAFinMois(array('min' => 12)); // WHERE DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS >= 12
     * $query->filterByDemandesEnCoursCumulAFinMois(array('max' => 12)); // WHERE DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS <= 12
     * </code>
     *
     * @param     mixed $demandesEnCoursCumulAFinMois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesEnCoursCumulAFinMois($demandesEnCoursCumulAFinMois = null, $comparison = null)
    {
        if (is_array($demandesEnCoursCumulAFinMois)) {
            $useMinMax = false;
            if (isset($demandesEnCoursCumulAFinMois['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS, $demandesEnCoursCumulAFinMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesEnCoursCumulAFinMois['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS, $demandesEnCoursCumulAFinMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS, $demandesEnCoursCumulAFinMois, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesEnCoursEvolutionParMois(1234); // WHERE DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS = 1234
     * $query->filterByDemandesEnCoursEvolutionParMois(array(12, 34)); // WHERE DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS IN (12, 34)
     * $query->filterByDemandesEnCoursEvolutionParMois(array('min' => 12)); // WHERE DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS >= 12
     * $query->filterByDemandesEnCoursEvolutionParMois(array('max' => 12)); // WHERE DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS <= 12
     * </code>
     *
     * @param     mixed $demandesEnCoursEvolutionParMois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesEnCoursEvolutionParMois($demandesEnCoursEvolutionParMois = null, $comparison = null)
    {
        if (is_array($demandesEnCoursEvolutionParMois)) {
            $useMinMax = false;
            if (isset($demandesEnCoursEvolutionParMois['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS, $demandesEnCoursEvolutionParMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesEnCoursEvolutionParMois['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS, $demandesEnCoursEvolutionParMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS, $demandesEnCoursEvolutionParMois, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_AFFECTEES_REOUVERTE column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesAffecteesReouverte(1234); // WHERE DEMANDES_AFFECTEES_REOUVERTE = 1234
     * $query->filterByDemandesAffecteesReouverte(array(12, 34)); // WHERE DEMANDES_AFFECTEES_REOUVERTE IN (12, 34)
     * $query->filterByDemandesAffecteesReouverte(array('min' => 12)); // WHERE DEMANDES_AFFECTEES_REOUVERTE >= 12
     * $query->filterByDemandesAffecteesReouverte(array('max' => 12)); // WHERE DEMANDES_AFFECTEES_REOUVERTE <= 12
     * </code>
     *
     * @param     mixed $demandesAffecteesReouverte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesAffecteesReouverte($demandesAffecteesReouverte = null, $comparison = null)
    {
        if (is_array($demandesAffecteesReouverte)) {
            $useMinMax = false;
            if (isset($demandesAffecteesReouverte['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE, $demandesAffecteesReouverte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesAffecteesReouverte['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE, $demandesAffecteesReouverte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE, $demandesAffecteesReouverte, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesAffecteesReouverteCumulAFinMois(1234); // WHERE DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS = 1234
     * $query->filterByDemandesAffecteesReouverteCumulAFinMois(array(12, 34)); // WHERE DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS IN (12, 34)
     * $query->filterByDemandesAffecteesReouverteCumulAFinMois(array('min' => 12)); // WHERE DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS >= 12
     * $query->filterByDemandesAffecteesReouverteCumulAFinMois(array('max' => 12)); // WHERE DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS <= 12
     * </code>
     *
     * @param     mixed $demandesAffecteesReouverteCumulAFinMois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesAffecteesReouverteCumulAFinMois($demandesAffecteesReouverteCumulAFinMois = null, $comparison = null)
    {
        if (is_array($demandesAffecteesReouverteCumulAFinMois)) {
            $useMinMax = false;
            if (isset($demandesAffecteesReouverteCumulAFinMois['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS, $demandesAffecteesReouverteCumulAFinMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesAffecteesReouverteCumulAFinMois['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS, $demandesAffecteesReouverteCumulAFinMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS, $demandesAffecteesReouverteCumulAFinMois, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesAffecteesReouverteEvolutionParMois(1234); // WHERE DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS = 1234
     * $query->filterByDemandesAffecteesReouverteEvolutionParMois(array(12, 34)); // WHERE DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS IN (12, 34)
     * $query->filterByDemandesAffecteesReouverteEvolutionParMois(array('min' => 12)); // WHERE DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS >= 12
     * $query->filterByDemandesAffecteesReouverteEvolutionParMois(array('max' => 12)); // WHERE DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS <= 12
     * </code>
     *
     * @param     mixed $demandesAffecteesReouverteEvolutionParMois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesAffecteesReouverteEvolutionParMois($demandesAffecteesReouverteEvolutionParMois = null, $comparison = null)
    {
        if (is_array($demandesAffecteesReouverteEvolutionParMois)) {
            $useMinMax = false;
            if (isset($demandesAffecteesReouverteEvolutionParMois['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS, $demandesAffecteesReouverteEvolutionParMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesAffecteesReouverteEvolutionParMois['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS, $demandesAffecteesReouverteEvolutionParMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS, $demandesAffecteesReouverteEvolutionParMois, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_EN_PROPOSITION_REPONSE column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesEnPropositionReponse(1234); // WHERE DEMANDES_EN_PROPOSITION_REPONSE = 1234
     * $query->filterByDemandesEnPropositionReponse(array(12, 34)); // WHERE DEMANDES_EN_PROPOSITION_REPONSE IN (12, 34)
     * $query->filterByDemandesEnPropositionReponse(array('min' => 12)); // WHERE DEMANDES_EN_PROPOSITION_REPONSE >= 12
     * $query->filterByDemandesEnPropositionReponse(array('max' => 12)); // WHERE DEMANDES_EN_PROPOSITION_REPONSE <= 12
     * </code>
     *
     * @param     mixed $demandesEnPropositionReponse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesEnPropositionReponse($demandesEnPropositionReponse = null, $comparison = null)
    {
        if (is_array($demandesEnPropositionReponse)) {
            $useMinMax = false;
            if (isset($demandesEnPropositionReponse['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE, $demandesEnPropositionReponse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesEnPropositionReponse['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE, $demandesEnPropositionReponse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE, $demandesEnPropositionReponse, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesEnPropositionReponseCumulAFinMois(1234); // WHERE DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS = 1234
     * $query->filterByDemandesEnPropositionReponseCumulAFinMois(array(12, 34)); // WHERE DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS IN (12, 34)
     * $query->filterByDemandesEnPropositionReponseCumulAFinMois(array('min' => 12)); // WHERE DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS >= 12
     * $query->filterByDemandesEnPropositionReponseCumulAFinMois(array('max' => 12)); // WHERE DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS <= 12
     * </code>
     *
     * @param     mixed $demandesEnPropositionReponseCumulAFinMois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesEnPropositionReponseCumulAFinMois($demandesEnPropositionReponseCumulAFinMois = null, $comparison = null)
    {
        if (is_array($demandesEnPropositionReponseCumulAFinMois)) {
            $useMinMax = false;
            if (isset($demandesEnPropositionReponseCumulAFinMois['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS, $demandesEnPropositionReponseCumulAFinMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesEnPropositionReponseCumulAFinMois['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS, $demandesEnPropositionReponseCumulAFinMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS, $demandesEnPropositionReponseCumulAFinMois, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesEnPropositionReponseEvolutionParMois(1234); // WHERE DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS = 1234
     * $query->filterByDemandesEnPropositionReponseEvolutionParMois(array(12, 34)); // WHERE DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS IN (12, 34)
     * $query->filterByDemandesEnPropositionReponseEvolutionParMois(array('min' => 12)); // WHERE DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS >= 12
     * $query->filterByDemandesEnPropositionReponseEvolutionParMois(array('max' => 12)); // WHERE DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS <= 12
     * </code>
     *
     * @param     mixed $demandesEnPropositionReponseEvolutionParMois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesEnPropositionReponseEvolutionParMois($demandesEnPropositionReponseEvolutionParMois = null, $comparison = null)
    {
        if (is_array($demandesEnPropositionReponseEvolutionParMois)) {
            $useMinMax = false;
            if (isset($demandesEnPropositionReponseEvolutionParMois['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS, $demandesEnPropositionReponseEvolutionParMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesEnPropositionReponseEvolutionParMois['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS, $demandesEnPropositionReponseEvolutionParMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS, $demandesEnPropositionReponseEvolutionParMois, $comparison);
    }

    /**
     * Filter the query on the DELAI_MOYEN_MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiMoyenMois(1234); // WHERE DELAI_MOYEN_MOIS = 1234
     * $query->filterByDelaiMoyenMois(array(12, 34)); // WHERE DELAI_MOYEN_MOIS IN (12, 34)
     * $query->filterByDelaiMoyenMois(array('min' => 12)); // WHERE DELAI_MOYEN_MOIS >= 12
     * $query->filterByDelaiMoyenMois(array('max' => 12)); // WHERE DELAI_MOYEN_MOIS <= 12
     * </code>
     *
     * @param     mixed $delaiMoyenMois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDelaiMoyenMois($delaiMoyenMois = null, $comparison = null)
    {
        if (is_array($delaiMoyenMois)) {
            $useMinMax = false;
            if (isset($delaiMoyenMois['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DELAI_MOYEN_MOIS, $delaiMoyenMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiMoyenMois['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DELAI_MOYEN_MOIS, $delaiMoyenMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DELAI_MOYEN_MOIS, $delaiMoyenMois, $comparison);
    }

    /**
     * Filter the query on the EVOLUTION_DELAI_MOYEN column
     *
     * Example usage:
     * <code>
     * $query->filterByEvolutionDelaiMoyen(1234); // WHERE EVOLUTION_DELAI_MOYEN = 1234
     * $query->filterByEvolutionDelaiMoyen(array(12, 34)); // WHERE EVOLUTION_DELAI_MOYEN IN (12, 34)
     * $query->filterByEvolutionDelaiMoyen(array('min' => 12)); // WHERE EVOLUTION_DELAI_MOYEN >= 12
     * $query->filterByEvolutionDelaiMoyen(array('max' => 12)); // WHERE EVOLUTION_DELAI_MOYEN <= 12
     * </code>
     *
     * @param     mixed $evolutionDelaiMoyen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByEvolutionDelaiMoyen($evolutionDelaiMoyen = null, $comparison = null)
    {
        if (is_array($evolutionDelaiMoyen)) {
            $useMinMax = false;
            if (isset($evolutionDelaiMoyen['min'])) {
                $this->addUsingAlias(StatistiquesPeer::EVOLUTION_DELAI_MOYEN, $evolutionDelaiMoyen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($evolutionDelaiMoyen['max'])) {
                $this->addUsingAlias(StatistiquesPeer::EVOLUTION_DELAI_MOYEN, $evolutionDelaiMoyen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::EVOLUTION_DELAI_MOYEN, $evolutionDelaiMoyen, $comparison);
    }

    /**
     * Filter the query on the DELAI_MINIMAL_MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiMinimalMois(1234); // WHERE DELAI_MINIMAL_MOIS = 1234
     * $query->filterByDelaiMinimalMois(array(12, 34)); // WHERE DELAI_MINIMAL_MOIS IN (12, 34)
     * $query->filterByDelaiMinimalMois(array('min' => 12)); // WHERE DELAI_MINIMAL_MOIS >= 12
     * $query->filterByDelaiMinimalMois(array('max' => 12)); // WHERE DELAI_MINIMAL_MOIS <= 12
     * </code>
     *
     * @param     mixed $delaiMinimalMois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDelaiMinimalMois($delaiMinimalMois = null, $comparison = null)
    {
        if (is_array($delaiMinimalMois)) {
            $useMinMax = false;
            if (isset($delaiMinimalMois['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DELAI_MINIMAL_MOIS, $delaiMinimalMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiMinimalMois['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DELAI_MINIMAL_MOIS, $delaiMinimalMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DELAI_MINIMAL_MOIS, $delaiMinimalMois, $comparison);
    }

    /**
     * Filter the query on the EVOLUTION_DELAI_MINIMAL column
     *
     * Example usage:
     * <code>
     * $query->filterByEvolutionDelaiMinimal(1234); // WHERE EVOLUTION_DELAI_MINIMAL = 1234
     * $query->filterByEvolutionDelaiMinimal(array(12, 34)); // WHERE EVOLUTION_DELAI_MINIMAL IN (12, 34)
     * $query->filterByEvolutionDelaiMinimal(array('min' => 12)); // WHERE EVOLUTION_DELAI_MINIMAL >= 12
     * $query->filterByEvolutionDelaiMinimal(array('max' => 12)); // WHERE EVOLUTION_DELAI_MINIMAL <= 12
     * </code>
     *
     * @param     mixed $evolutionDelaiMinimal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByEvolutionDelaiMinimal($evolutionDelaiMinimal = null, $comparison = null)
    {
        if (is_array($evolutionDelaiMinimal)) {
            $useMinMax = false;
            if (isset($evolutionDelaiMinimal['min'])) {
                $this->addUsingAlias(StatistiquesPeer::EVOLUTION_DELAI_MINIMAL, $evolutionDelaiMinimal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($evolutionDelaiMinimal['max'])) {
                $this->addUsingAlias(StatistiquesPeer::EVOLUTION_DELAI_MINIMAL, $evolutionDelaiMinimal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::EVOLUTION_DELAI_MINIMAL, $evolutionDelaiMinimal, $comparison);
    }

    /**
     * Filter the query on the DELAI_MAXIMAL column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiMaximal(1234); // WHERE DELAI_MAXIMAL = 1234
     * $query->filterByDelaiMaximal(array(12, 34)); // WHERE DELAI_MAXIMAL IN (12, 34)
     * $query->filterByDelaiMaximal(array('min' => 12)); // WHERE DELAI_MAXIMAL >= 12
     * $query->filterByDelaiMaximal(array('max' => 12)); // WHERE DELAI_MAXIMAL <= 12
     * </code>
     *
     * @param     mixed $delaiMaximal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDelaiMaximal($delaiMaximal = null, $comparison = null)
    {
        if (is_array($delaiMaximal)) {
            $useMinMax = false;
            if (isset($delaiMaximal['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DELAI_MAXIMAL, $delaiMaximal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiMaximal['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DELAI_MAXIMAL, $delaiMaximal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DELAI_MAXIMAL, $delaiMaximal, $comparison);
    }

    /**
     * Filter the query on the EVOLUTION_DELAI_MAXIMAL column
     *
     * Example usage:
     * <code>
     * $query->filterByEvolutionDelaiMaximal(1234); // WHERE EVOLUTION_DELAI_MAXIMAL = 1234
     * $query->filterByEvolutionDelaiMaximal(array(12, 34)); // WHERE EVOLUTION_DELAI_MAXIMAL IN (12, 34)
     * $query->filterByEvolutionDelaiMaximal(array('min' => 12)); // WHERE EVOLUTION_DELAI_MAXIMAL >= 12
     * $query->filterByEvolutionDelaiMaximal(array('max' => 12)); // WHERE EVOLUTION_DELAI_MAXIMAL <= 12
     * </code>
     *
     * @param     mixed $evolutionDelaiMaximal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByEvolutionDelaiMaximal($evolutionDelaiMaximal = null, $comparison = null)
    {
        if (is_array($evolutionDelaiMaximal)) {
            $useMinMax = false;
            if (isset($evolutionDelaiMaximal['min'])) {
                $this->addUsingAlias(StatistiquesPeer::EVOLUTION_DELAI_MAXIMAL, $evolutionDelaiMaximal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($evolutionDelaiMaximal['max'])) {
                $this->addUsingAlias(StatistiquesPeer::EVOLUTION_DELAI_MAXIMAL, $evolutionDelaiMaximal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::EVOLUTION_DELAI_MAXIMAL, $evolutionDelaiMaximal, $comparison);
    }

    /**
     * Filter the query on the TAUX_REPONSE column
     *
     * Example usage:
     * <code>
     * $query->filterByTauxReponse(1234); // WHERE TAUX_REPONSE = 1234
     * $query->filterByTauxReponse(array(12, 34)); // WHERE TAUX_REPONSE IN (12, 34)
     * $query->filterByTauxReponse(array('min' => 12)); // WHERE TAUX_REPONSE >= 12
     * $query->filterByTauxReponse(array('max' => 12)); // WHERE TAUX_REPONSE <= 12
     * </code>
     *
     * @param     mixed $tauxReponse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByTauxReponse($tauxReponse = null, $comparison = null)
    {
        if (is_array($tauxReponse)) {
            $useMinMax = false;
            if (isset($tauxReponse['min'])) {
                $this->addUsingAlias(StatistiquesPeer::TAUX_REPONSE, $tauxReponse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tauxReponse['max'])) {
                $this->addUsingAlias(StatistiquesPeer::TAUX_REPONSE, $tauxReponse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::TAUX_REPONSE, $tauxReponse, $comparison);
    }

    /**
     * Filter the query on the EVOLUTION_TAUX_REPONSE column
     *
     * Example usage:
     * <code>
     * $query->filterByEvolutionTauxReponse(1234); // WHERE EVOLUTION_TAUX_REPONSE = 1234
     * $query->filterByEvolutionTauxReponse(array(12, 34)); // WHERE EVOLUTION_TAUX_REPONSE IN (12, 34)
     * $query->filterByEvolutionTauxReponse(array('min' => 12)); // WHERE EVOLUTION_TAUX_REPONSE >= 12
     * $query->filterByEvolutionTauxReponse(array('max' => 12)); // WHERE EVOLUTION_TAUX_REPONSE <= 12
     * </code>
     *
     * @param     mixed $evolutionTauxReponse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByEvolutionTauxReponse($evolutionTauxReponse = null, $comparison = null)
    {
        if (is_array($evolutionTauxReponse)) {
            $useMinMax = false;
            if (isset($evolutionTauxReponse['min'])) {
                $this->addUsingAlias(StatistiquesPeer::EVOLUTION_TAUX_REPONSE, $evolutionTauxReponse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($evolutionTauxReponse['max'])) {
                $this->addUsingAlias(StatistiquesPeer::EVOLUTION_TAUX_REPONSE, $evolutionTauxReponse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::EVOLUTION_TAUX_REPONSE, $evolutionTauxReponse, $comparison);
    }

    /**
     * Filter the query on the TAUX_SATISFACTION_REQUERANTS column
     *
     * Example usage:
     * <code>
     * $query->filterByTauxSatisfactionRequerants(1234); // WHERE TAUX_SATISFACTION_REQUERANTS = 1234
     * $query->filterByTauxSatisfactionRequerants(array(12, 34)); // WHERE TAUX_SATISFACTION_REQUERANTS IN (12, 34)
     * $query->filterByTauxSatisfactionRequerants(array('min' => 12)); // WHERE TAUX_SATISFACTION_REQUERANTS >= 12
     * $query->filterByTauxSatisfactionRequerants(array('max' => 12)); // WHERE TAUX_SATISFACTION_REQUERANTS <= 12
     * </code>
     *
     * @param     mixed $tauxSatisfactionRequerants The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByTauxSatisfactionRequerants($tauxSatisfactionRequerants = null, $comparison = null)
    {
        if (is_array($tauxSatisfactionRequerants)) {
            $useMinMax = false;
            if (isset($tauxSatisfactionRequerants['min'])) {
                $this->addUsingAlias(StatistiquesPeer::TAUX_SATISFACTION_REQUERANTS, $tauxSatisfactionRequerants['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tauxSatisfactionRequerants['max'])) {
                $this->addUsingAlias(StatistiquesPeer::TAUX_SATISFACTION_REQUERANTS, $tauxSatisfactionRequerants['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::TAUX_SATISFACTION_REQUERANTS, $tauxSatisfactionRequerants, $comparison);
    }

    /**
     * Filter the query on the EVOLUTION_TAUX_SATISFACTION column
     *
     * Example usage:
     * <code>
     * $query->filterByEvolutionTauxSatisfaction(1234); // WHERE EVOLUTION_TAUX_SATISFACTION = 1234
     * $query->filterByEvolutionTauxSatisfaction(array(12, 34)); // WHERE EVOLUTION_TAUX_SATISFACTION IN (12, 34)
     * $query->filterByEvolutionTauxSatisfaction(array('min' => 12)); // WHERE EVOLUTION_TAUX_SATISFACTION >= 12
     * $query->filterByEvolutionTauxSatisfaction(array('max' => 12)); // WHERE EVOLUTION_TAUX_SATISFACTION <= 12
     * </code>
     *
     * @param     mixed $evolutionTauxSatisfaction The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByEvolutionTauxSatisfaction($evolutionTauxSatisfaction = null, $comparison = null)
    {
        if (is_array($evolutionTauxSatisfaction)) {
            $useMinMax = false;
            if (isset($evolutionTauxSatisfaction['min'])) {
                $this->addUsingAlias(StatistiquesPeer::EVOLUTION_TAUX_SATISFACTION, $evolutionTauxSatisfaction['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($evolutionTauxSatisfaction['max'])) {
                $this->addUsingAlias(StatistiquesPeer::EVOLUTION_TAUX_SATISFACTION, $evolutionTauxSatisfaction['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::EVOLUTION_TAUX_SATISFACTION, $evolutionTauxSatisfaction, $comparison);
    }

    /**
     * Filter the query on the CUMUL_TAUX_SATISFACTION column
     *
     * Example usage:
     * <code>
     * $query->filterByCumulTauxSatisfaction(1234); // WHERE CUMUL_TAUX_SATISFACTION = 1234
     * $query->filterByCumulTauxSatisfaction(array(12, 34)); // WHERE CUMUL_TAUX_SATISFACTION IN (12, 34)
     * $query->filterByCumulTauxSatisfaction(array('min' => 12)); // WHERE CUMUL_TAUX_SATISFACTION >= 12
     * $query->filterByCumulTauxSatisfaction(array('max' => 12)); // WHERE CUMUL_TAUX_SATISFACTION <= 12
     * </code>
     *
     * @param     mixed $cumulTauxSatisfaction The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByCumulTauxSatisfaction($cumulTauxSatisfaction = null, $comparison = null)
    {
        if (is_array($cumulTauxSatisfaction)) {
            $useMinMax = false;
            if (isset($cumulTauxSatisfaction['min'])) {
                $this->addUsingAlias(StatistiquesPeer::CUMUL_TAUX_SATISFACTION, $cumulTauxSatisfaction['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cumulTauxSatisfaction['max'])) {
                $this->addUsingAlias(StatistiquesPeer::CUMUL_TAUX_SATISFACTION, $cumulTauxSatisfaction['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::CUMUL_TAUX_SATISFACTION, $cumulTauxSatisfaction, $comparison);
    }

    /**
     * Filter the query on the DEMANDES_ASSISTANCE_INTERNE column
     *
     * Example usage:
     * <code>
     * $query->filterByDemandesAssistanceInterne(1234); // WHERE DEMANDES_ASSISTANCE_INTERNE = 1234
     * $query->filterByDemandesAssistanceInterne(array(12, 34)); // WHERE DEMANDES_ASSISTANCE_INTERNE IN (12, 34)
     * $query->filterByDemandesAssistanceInterne(array('min' => 12)); // WHERE DEMANDES_ASSISTANCE_INTERNE >= 12
     * $query->filterByDemandesAssistanceInterne(array('max' => 12)); // WHERE DEMANDES_ASSISTANCE_INTERNE <= 12
     * </code>
     *
     * @param     mixed $demandesAssistanceInterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDemandesAssistanceInterne($demandesAssistanceInterne = null, $comparison = null)
    {
        if (is_array($demandesAssistanceInterne)) {
            $useMinMax = false;
            if (isset($demandesAssistanceInterne['min'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_ASSISTANCE_INTERNE, $demandesAssistanceInterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demandesAssistanceInterne['max'])) {
                $this->addUsingAlias(StatistiquesPeer::DEMANDES_ASSISTANCE_INTERNE, $demandesAssistanceInterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DEMANDES_ASSISTANCE_INTERNE, $demandesAssistanceInterne, $comparison);
    }

    /**
     * Filter the query on the EVOLUTION_DEMANDE_INTERNE column
     *
     * Example usage:
     * <code>
     * $query->filterByEvolutionDemandeInterne(1234); // WHERE EVOLUTION_DEMANDE_INTERNE = 1234
     * $query->filterByEvolutionDemandeInterne(array(12, 34)); // WHERE EVOLUTION_DEMANDE_INTERNE IN (12, 34)
     * $query->filterByEvolutionDemandeInterne(array('min' => 12)); // WHERE EVOLUTION_DEMANDE_INTERNE >= 12
     * $query->filterByEvolutionDemandeInterne(array('max' => 12)); // WHERE EVOLUTION_DEMANDE_INTERNE <= 12
     * </code>
     *
     * @param     mixed $evolutionDemandeInterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByEvolutionDemandeInterne($evolutionDemandeInterne = null, $comparison = null)
    {
        if (is_array($evolutionDemandeInterne)) {
            $useMinMax = false;
            if (isset($evolutionDemandeInterne['min'])) {
                $this->addUsingAlias(StatistiquesPeer::EVOLUTION_DEMANDE_INTERNE, $evolutionDemandeInterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($evolutionDemandeInterne['max'])) {
                $this->addUsingAlias(StatistiquesPeer::EVOLUTION_DEMANDE_INTERNE, $evolutionDemandeInterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::EVOLUTION_DEMANDE_INTERNE, $evolutionDemandeInterne, $comparison);
    }

    /**
     * Filter the query on the CUMUL_DEMANDE_INTERNE column
     *
     * Example usage:
     * <code>
     * $query->filterByCumulDemandeInterne(1234); // WHERE CUMUL_DEMANDE_INTERNE = 1234
     * $query->filterByCumulDemandeInterne(array(12, 34)); // WHERE CUMUL_DEMANDE_INTERNE IN (12, 34)
     * $query->filterByCumulDemandeInterne(array('min' => 12)); // WHERE CUMUL_DEMANDE_INTERNE >= 12
     * $query->filterByCumulDemandeInterne(array('max' => 12)); // WHERE CUMUL_DEMANDE_INTERNE <= 12
     * </code>
     *
     * @param     mixed $cumulDemandeInterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByCumulDemandeInterne($cumulDemandeInterne = null, $comparison = null)
    {
        if (is_array($cumulDemandeInterne)) {
            $useMinMax = false;
            if (isset($cumulDemandeInterne['min'])) {
                $this->addUsingAlias(StatistiquesPeer::CUMUL_DEMANDE_INTERNE, $cumulDemandeInterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cumulDemandeInterne['max'])) {
                $this->addUsingAlias(StatistiquesPeer::CUMUL_DEMANDE_INTERNE, $cumulDemandeInterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::CUMUL_DEMANDE_INTERNE, $cumulDemandeInterne, $comparison);
    }

    /**
     * Filter the query on the DATE_MISE_A_JOUR column
     *
     * Example usage:
     * <code>
     * $query->filterByDateMiseAJour('fooValue');   // WHERE DATE_MISE_A_JOUR = 'fooValue'
     * $query->filterByDateMiseAJour('%fooValue%'); // WHERE DATE_MISE_A_JOUR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateMiseAJour The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByDateMiseAJour($dateMiseAJour = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateMiseAJour)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateMiseAJour)) {
                $dateMiseAJour = str_replace('*', '%', $dateMiseAJour);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::DATE_MISE_A_JOUR, $dateMiseAJour, $comparison);
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
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(StatistiquesPeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(StatistiquesPeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesPeer::ID_ENTITE, $idEntite, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Statistiques $statistiques Object to remove from the list of results
     *
     * @return StatistiquesQuery The current query, for fluid interface
     */
    public function prune($statistiques = null)
    {
        if ($statistiques) {
            $this->addUsingAlias(StatistiquesPeer::ID_STATISTIQUE, $statistiques->getIdStatistique(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
