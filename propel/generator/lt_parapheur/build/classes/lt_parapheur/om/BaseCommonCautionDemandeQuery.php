<?php


/**
 * Base class that represents a query for the 'caution_demande' table.
 *
 * 
 *
 * @method CommonCautionDemandeQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method CommonCautionDemandeQuery orderByRefConsultation($order = Criteria::ASC) Order by the REF_CONSULTATION column
 * @method CommonCautionDemandeQuery orderByIdEntreprise($order = Criteria::ASC) Order by the ID_ENTREPRISE column
 * @method CommonCautionDemandeQuery orderByIdInscrit($order = Criteria::ASC) Order by the ID_INSCRIT column
 * @method CommonCautionDemandeQuery orderByAcronyme($order = Criteria::ASC) Order by the ACRONYME column
 * @method CommonCautionDemandeQuery orderByIntitule($order = Criteria::ASC) Order by the INTITULE column
 * @method CommonCautionDemandeQuery orderByLot($order = Criteria::ASC) Order by the LOT column
 * @method CommonCautionDemandeQuery orderByObjetLot($order = Criteria::ASC) Order by the OBJET_LOT column
 * @method CommonCautionDemandeQuery orderByRaisonSociale($order = Criteria::ASC) Order by the RAISON_SOCIALE column
 * @method CommonCautionDemandeQuery orderByMontant($order = Criteria::ASC) Order by the MONTANT column
 * @method CommonCautionDemandeQuery orderByDateDemande($order = Criteria::ASC) Order by the DATE_DEMANDE column
 * @method CommonCautionDemandeQuery orderByDateLimiteRemisePlis($order = Criteria::ASC) Order by the DATE_LIMITE_REMISE_PLIS column
 * @method CommonCautionDemandeQuery orderByIdStatutCaution($order = Criteria::ASC) Order by the ID_STATUT_CAUTION column
 * @method CommonCautionDemandeQuery orderByIdCompteBancaire($order = Criteria::ASC) Order by the ID_COMPTE_BANCAIRE column
 * @method CommonCautionDemandeQuery orderByIdBlobDemande($order = Criteria::ASC) Order by the ID_BLOB_DEMANDE column
 * @method CommonCautionDemandeQuery orderByNomDocDemande($order = Criteria::ASC) Order by the NOM_DOC_DEMANDE column
 * @method CommonCautionDemandeQuery orderByIdBlobCaution($order = Criteria::ASC) Order by the ID_BLOB_CAUTION column
 * @method CommonCautionDemandeQuery orderByNomDocCaution($order = Criteria::ASC) Order by the NOM_DOC_CAUTION column
 * @method CommonCautionDemandeQuery orderByIdInscritCrea($order = Criteria::ASC) Order by the ID_INSCRIT_CREA column
 * @method CommonCautionDemandeQuery orderByDateCrea($order = Criteria::ASC) Order by the DATE_CREA column
 * @method CommonCautionDemandeQuery orderByIdInscritModif($order = Criteria::ASC) Order by the ID_INSCRIT_MODIF column
 * @method CommonCautionDemandeQuery orderByDateModif($order = Criteria::ASC) Order by the DATE_MODIF column
 * @method CommonCautionDemandeQuery orderByIdentifiantBancaire($order = Criteria::ASC) Order by the IDENTIFIANT_BANCAIRE column
 * @method CommonCautionDemandeQuery orderByIdVille($order = Criteria::ASC) Order by the ID_VILLE column
 * @method CommonCautionDemandeQuery orderByAcheteurPublic($order = Criteria::ASC) Order by the ACHETEUR_PUBLIC column
 * @method CommonCautionDemandeQuery orderByDateValidation($order = Criteria::ASC) Order by the DATE_VALIDATION column
 * @method CommonCautionDemandeQuery orderByDateRejet($order = Criteria::ASC) Order by the DATE_REJET column
 * @method CommonCautionDemandeQuery orderByMotifRejet($order = Criteria::ASC) Order by the MOTIF_REJET column
 * @method CommonCautionDemandeQuery orderByIdAgentBanquierValidation($order = Criteria::ASC) Order by the ID_AGENT_BANQUIER_VALIDATION column
 * @method CommonCautionDemandeQuery orderByIdAgentBanquierRejet($order = Criteria::ASC) Order by the ID_AGENT_BANQUIER_REJET column
 * @method CommonCautionDemandeQuery orderByReferenceModele($order = Criteria::ASC) Order by the REFERENCE_MODELE column
 * @method CommonCautionDemandeQuery orderByDatePriseEnCharge($order = Criteria::ASC) Order by the DATE_PRISE_EN_CHARGE column
 * @method CommonCautionDemandeQuery orderByIdAgentPriseEnCharge($order = Criteria::ASC) Order by the ID_AGENT_PRISE_EN_CHARGE column
 * @method CommonCautionDemandeQuery orderByTaguee($order = Criteria::ASC) Order by the TAGUEE column
 * @method CommonCautionDemandeQuery orderByUtilisee($order = Criteria::ASC) Order by the UTILISEE column
 * @method CommonCautionDemandeQuery orderByMiseADispo($order = Criteria::ASC) Order by the MISE_A_DISPO column
 * @method CommonCautionDemandeQuery orderByIdSignataire1($order = Criteria::ASC) Order by the ID_SIGNATAIRE1 column
 * @method CommonCautionDemandeQuery orderByDateSignature1($order = Criteria::ASC) Order by the DATE_SIGNATURE1 column
 * @method CommonCautionDemandeQuery orderByIdSignataire2($order = Criteria::ASC) Order by the ID_SIGNATAIRE2 column
 * @method CommonCautionDemandeQuery orderByDateSignature2($order = Criteria::ASC) Order by the DATE_SIGNATURE2 column
 * @method CommonCautionDemandeQuery orderByGroupement($order = Criteria::ASC) Order by the GROUPEMENT column
 * @method CommonCautionDemandeQuery orderByIdGroupement($order = Criteria::ASC) Order by the ID_GROUPEMENT column
 * @method CommonCautionDemandeQuery orderByCodeAgence($order = Criteria::ASC) Order by the CODE_AGENCE column
 * @method CommonCautionDemandeQuery orderByCodeVille($order = Criteria::ASC) Order by the CODE_VILLE column
 * @method CommonCautionDemandeQuery orderByReferenceInterne($order = Criteria::ASC) Order by the REFERENCE_INTERNE column
 *
 * @method CommonCautionDemandeQuery groupById() Group by the ID column
 * @method CommonCautionDemandeQuery groupByRefConsultation() Group by the REF_CONSULTATION column
 * @method CommonCautionDemandeQuery groupByIdEntreprise() Group by the ID_ENTREPRISE column
 * @method CommonCautionDemandeQuery groupByIdInscrit() Group by the ID_INSCRIT column
 * @method CommonCautionDemandeQuery groupByAcronyme() Group by the ACRONYME column
 * @method CommonCautionDemandeQuery groupByIntitule() Group by the INTITULE column
 * @method CommonCautionDemandeQuery groupByLot() Group by the LOT column
 * @method CommonCautionDemandeQuery groupByObjetLot() Group by the OBJET_LOT column
 * @method CommonCautionDemandeQuery groupByRaisonSociale() Group by the RAISON_SOCIALE column
 * @method CommonCautionDemandeQuery groupByMontant() Group by the MONTANT column
 * @method CommonCautionDemandeQuery groupByDateDemande() Group by the DATE_DEMANDE column
 * @method CommonCautionDemandeQuery groupByDateLimiteRemisePlis() Group by the DATE_LIMITE_REMISE_PLIS column
 * @method CommonCautionDemandeQuery groupByIdStatutCaution() Group by the ID_STATUT_CAUTION column
 * @method CommonCautionDemandeQuery groupByIdCompteBancaire() Group by the ID_COMPTE_BANCAIRE column
 * @method CommonCautionDemandeQuery groupByIdBlobDemande() Group by the ID_BLOB_DEMANDE column
 * @method CommonCautionDemandeQuery groupByNomDocDemande() Group by the NOM_DOC_DEMANDE column
 * @method CommonCautionDemandeQuery groupByIdBlobCaution() Group by the ID_BLOB_CAUTION column
 * @method CommonCautionDemandeQuery groupByNomDocCaution() Group by the NOM_DOC_CAUTION column
 * @method CommonCautionDemandeQuery groupByIdInscritCrea() Group by the ID_INSCRIT_CREA column
 * @method CommonCautionDemandeQuery groupByDateCrea() Group by the DATE_CREA column
 * @method CommonCautionDemandeQuery groupByIdInscritModif() Group by the ID_INSCRIT_MODIF column
 * @method CommonCautionDemandeQuery groupByDateModif() Group by the DATE_MODIF column
 * @method CommonCautionDemandeQuery groupByIdentifiantBancaire() Group by the IDENTIFIANT_BANCAIRE column
 * @method CommonCautionDemandeQuery groupByIdVille() Group by the ID_VILLE column
 * @method CommonCautionDemandeQuery groupByAcheteurPublic() Group by the ACHETEUR_PUBLIC column
 * @method CommonCautionDemandeQuery groupByDateValidation() Group by the DATE_VALIDATION column
 * @method CommonCautionDemandeQuery groupByDateRejet() Group by the DATE_REJET column
 * @method CommonCautionDemandeQuery groupByMotifRejet() Group by the MOTIF_REJET column
 * @method CommonCautionDemandeQuery groupByIdAgentBanquierValidation() Group by the ID_AGENT_BANQUIER_VALIDATION column
 * @method CommonCautionDemandeQuery groupByIdAgentBanquierRejet() Group by the ID_AGENT_BANQUIER_REJET column
 * @method CommonCautionDemandeQuery groupByReferenceModele() Group by the REFERENCE_MODELE column
 * @method CommonCautionDemandeQuery groupByDatePriseEnCharge() Group by the DATE_PRISE_EN_CHARGE column
 * @method CommonCautionDemandeQuery groupByIdAgentPriseEnCharge() Group by the ID_AGENT_PRISE_EN_CHARGE column
 * @method CommonCautionDemandeQuery groupByTaguee() Group by the TAGUEE column
 * @method CommonCautionDemandeQuery groupByUtilisee() Group by the UTILISEE column
 * @method CommonCautionDemandeQuery groupByMiseADispo() Group by the MISE_A_DISPO column
 * @method CommonCautionDemandeQuery groupByIdSignataire1() Group by the ID_SIGNATAIRE1 column
 * @method CommonCautionDemandeQuery groupByDateSignature1() Group by the DATE_SIGNATURE1 column
 * @method CommonCautionDemandeQuery groupByIdSignataire2() Group by the ID_SIGNATAIRE2 column
 * @method CommonCautionDemandeQuery groupByDateSignature2() Group by the DATE_SIGNATURE2 column
 * @method CommonCautionDemandeQuery groupByGroupement() Group by the GROUPEMENT column
 * @method CommonCautionDemandeQuery groupByIdGroupement() Group by the ID_GROUPEMENT column
 * @method CommonCautionDemandeQuery groupByCodeAgence() Group by the CODE_AGENCE column
 * @method CommonCautionDemandeQuery groupByCodeVille() Group by the CODE_VILLE column
 * @method CommonCautionDemandeQuery groupByReferenceInterne() Group by the REFERENCE_INTERNE column
 *
 * @method CommonCautionDemandeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCautionDemandeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCautionDemandeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCautionDemandeQuery leftJoinCommonAgentBanquierRelatedByIdAgentBanquierRejet($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAgentBanquierRelatedByIdAgentBanquierRejet relation
 * @method CommonCautionDemandeQuery rightJoinCommonAgentBanquierRelatedByIdAgentBanquierRejet($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAgentBanquierRelatedByIdAgentBanquierRejet relation
 * @method CommonCautionDemandeQuery innerJoinCommonAgentBanquierRelatedByIdAgentBanquierRejet($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAgentBanquierRelatedByIdAgentBanquierRejet relation
 *
 * @method CommonCautionDemandeQuery leftJoinCommonAgentBanquierRelatedByIdAgentBanquierValidation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAgentBanquierRelatedByIdAgentBanquierValidation relation
 * @method CommonCautionDemandeQuery rightJoinCommonAgentBanquierRelatedByIdAgentBanquierValidation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAgentBanquierRelatedByIdAgentBanquierValidation relation
 * @method CommonCautionDemandeQuery innerJoinCommonAgentBanquierRelatedByIdAgentBanquierValidation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAgentBanquierRelatedByIdAgentBanquierValidation relation
 *
 * @method CommonCautionDemandeQuery leftJoinCommonAgentBanquierRelatedByIdAgentPriseEnCharge($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAgentBanquierRelatedByIdAgentPriseEnCharge relation
 * @method CommonCautionDemandeQuery rightJoinCommonAgentBanquierRelatedByIdAgentPriseEnCharge($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAgentBanquierRelatedByIdAgentPriseEnCharge relation
 * @method CommonCautionDemandeQuery innerJoinCommonAgentBanquierRelatedByIdAgentPriseEnCharge($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAgentBanquierRelatedByIdAgentPriseEnCharge relation
 *
 * @method CommonCautionDemandeQuery leftJoinCommonTCompteBancaire($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCompteBancaire relation
 * @method CommonCautionDemandeQuery rightJoinCommonTCompteBancaire($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCompteBancaire relation
 * @method CommonCautionDemandeQuery innerJoinCommonTCompteBancaire($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCompteBancaire relation
 *
 * @method CommonCautionDemandeQuery leftJoinCommonAgentBanquierRelatedByIdSignataire1($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAgentBanquierRelatedByIdSignataire1 relation
 * @method CommonCautionDemandeQuery rightJoinCommonAgentBanquierRelatedByIdSignataire1($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAgentBanquierRelatedByIdSignataire1 relation
 * @method CommonCautionDemandeQuery innerJoinCommonAgentBanquierRelatedByIdSignataire1($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAgentBanquierRelatedByIdSignataire1 relation
 *
 * @method CommonCautionDemandeQuery leftJoinCommonAgentBanquierRelatedByIdSignataire2($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAgentBanquierRelatedByIdSignataire2 relation
 * @method CommonCautionDemandeQuery rightJoinCommonAgentBanquierRelatedByIdSignataire2($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAgentBanquierRelatedByIdSignataire2 relation
 * @method CommonCautionDemandeQuery innerJoinCommonAgentBanquierRelatedByIdSignataire2($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAgentBanquierRelatedByIdSignataire2 relation
 *
 * @method CommonCautionDemandeQuery leftJoinCommonCautionRestitution($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonCautionRestitution relation
 * @method CommonCautionDemandeQuery rightJoinCommonCautionRestitution($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonCautionRestitution relation
 * @method CommonCautionDemandeQuery innerJoinCommonCautionRestitution($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonCautionRestitution relation
 *
 * @method CommonCautionDemandeQuery leftJoinCommonCautionSignataireDemande($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonCautionSignataireDemande relation
 * @method CommonCautionDemandeQuery rightJoinCommonCautionSignataireDemande($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonCautionSignataireDemande relation
 * @method CommonCautionDemandeQuery innerJoinCommonCautionSignataireDemande($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonCautionSignataireDemande relation
 *
 * @method CommonCautionDemande findOne(PropelPDO $con = null) Return the first CommonCautionDemande matching the query
 * @method CommonCautionDemande findOneOrCreate(PropelPDO $con = null) Return the first CommonCautionDemande matching the query, or a new CommonCautionDemande object populated from the query conditions when no match is found
 *
 * @method CommonCautionDemande findOneByRefConsultation(int $REF_CONSULTATION) Return the first CommonCautionDemande filtered by the REF_CONSULTATION column
 * @method CommonCautionDemande findOneByIdEntreprise(int $ID_ENTREPRISE) Return the first CommonCautionDemande filtered by the ID_ENTREPRISE column
 * @method CommonCautionDemande findOneByIdInscrit(int $ID_INSCRIT) Return the first CommonCautionDemande filtered by the ID_INSCRIT column
 * @method CommonCautionDemande findOneByAcronyme(string $ACRONYME) Return the first CommonCautionDemande filtered by the ACRONYME column
 * @method CommonCautionDemande findOneByIntitule(string $INTITULE) Return the first CommonCautionDemande filtered by the INTITULE column
 * @method CommonCautionDemande findOneByLot(int $LOT) Return the first CommonCautionDemande filtered by the LOT column
 * @method CommonCautionDemande findOneByObjetLot(string $OBJET_LOT) Return the first CommonCautionDemande filtered by the OBJET_LOT column
 * @method CommonCautionDemande findOneByRaisonSociale(string $RAISON_SOCIALE) Return the first CommonCautionDemande filtered by the RAISON_SOCIALE column
 * @method CommonCautionDemande findOneByMontant(double $MONTANT) Return the first CommonCautionDemande filtered by the MONTANT column
 * @method CommonCautionDemande findOneByDateDemande(string $DATE_DEMANDE) Return the first CommonCautionDemande filtered by the DATE_DEMANDE column
 * @method CommonCautionDemande findOneByDateLimiteRemisePlis(string $DATE_LIMITE_REMISE_PLIS) Return the first CommonCautionDemande filtered by the DATE_LIMITE_REMISE_PLIS column
 * @method CommonCautionDemande findOneByIdStatutCaution(int $ID_STATUT_CAUTION) Return the first CommonCautionDemande filtered by the ID_STATUT_CAUTION column
 * @method CommonCautionDemande findOneByIdCompteBancaire(int $ID_COMPTE_BANCAIRE) Return the first CommonCautionDemande filtered by the ID_COMPTE_BANCAIRE column
 * @method CommonCautionDemande findOneByIdBlobDemande(int $ID_BLOB_DEMANDE) Return the first CommonCautionDemande filtered by the ID_BLOB_DEMANDE column
 * @method CommonCautionDemande findOneByNomDocDemande(string $NOM_DOC_DEMANDE) Return the first CommonCautionDemande filtered by the NOM_DOC_DEMANDE column
 * @method CommonCautionDemande findOneByIdBlobCaution(int $ID_BLOB_CAUTION) Return the first CommonCautionDemande filtered by the ID_BLOB_CAUTION column
 * @method CommonCautionDemande findOneByNomDocCaution(string $NOM_DOC_CAUTION) Return the first CommonCautionDemande filtered by the NOM_DOC_CAUTION column
 * @method CommonCautionDemande findOneByIdInscritCrea(int $ID_INSCRIT_CREA) Return the first CommonCautionDemande filtered by the ID_INSCRIT_CREA column
 * @method CommonCautionDemande findOneByDateCrea(string $DATE_CREA) Return the first CommonCautionDemande filtered by the DATE_CREA column
 * @method CommonCautionDemande findOneByIdInscritModif(int $ID_INSCRIT_MODIF) Return the first CommonCautionDemande filtered by the ID_INSCRIT_MODIF column
 * @method CommonCautionDemande findOneByDateModif(string $DATE_MODIF) Return the first CommonCautionDemande filtered by the DATE_MODIF column
 * @method CommonCautionDemande findOneByIdentifiantBancaire(string $IDENTIFIANT_BANCAIRE) Return the first CommonCautionDemande filtered by the IDENTIFIANT_BANCAIRE column
 * @method CommonCautionDemande findOneByIdVille(int $ID_VILLE) Return the first CommonCautionDemande filtered by the ID_VILLE column
 * @method CommonCautionDemande findOneByAcheteurPublic(string $ACHETEUR_PUBLIC) Return the first CommonCautionDemande filtered by the ACHETEUR_PUBLIC column
 * @method CommonCautionDemande findOneByDateValidation(string $DATE_VALIDATION) Return the first CommonCautionDemande filtered by the DATE_VALIDATION column
 * @method CommonCautionDemande findOneByDateRejet(string $DATE_REJET) Return the first CommonCautionDemande filtered by the DATE_REJET column
 * @method CommonCautionDemande findOneByMotifRejet(string $MOTIF_REJET) Return the first CommonCautionDemande filtered by the MOTIF_REJET column
 * @method CommonCautionDemande findOneByIdAgentBanquierValidation(int $ID_AGENT_BANQUIER_VALIDATION) Return the first CommonCautionDemande filtered by the ID_AGENT_BANQUIER_VALIDATION column
 * @method CommonCautionDemande findOneByIdAgentBanquierRejet(int $ID_AGENT_BANQUIER_REJET) Return the first CommonCautionDemande filtered by the ID_AGENT_BANQUIER_REJET column
 * @method CommonCautionDemande findOneByReferenceModele(string $REFERENCE_MODELE) Return the first CommonCautionDemande filtered by the REFERENCE_MODELE column
 * @method CommonCautionDemande findOneByDatePriseEnCharge(string $DATE_PRISE_EN_CHARGE) Return the first CommonCautionDemande filtered by the DATE_PRISE_EN_CHARGE column
 * @method CommonCautionDemande findOneByIdAgentPriseEnCharge(int $ID_AGENT_PRISE_EN_CHARGE) Return the first CommonCautionDemande filtered by the ID_AGENT_PRISE_EN_CHARGE column
 * @method CommonCautionDemande findOneByTaguee(string $TAGUEE) Return the first CommonCautionDemande filtered by the TAGUEE column
 * @method CommonCautionDemande findOneByUtilisee(string $UTILISEE) Return the first CommonCautionDemande filtered by the UTILISEE column
 * @method CommonCautionDemande findOneByMiseADispo(string $MISE_A_DISPO) Return the first CommonCautionDemande filtered by the MISE_A_DISPO column
 * @method CommonCautionDemande findOneByIdSignataire1(int $ID_SIGNATAIRE1) Return the first CommonCautionDemande filtered by the ID_SIGNATAIRE1 column
 * @method CommonCautionDemande findOneByDateSignature1(string $DATE_SIGNATURE1) Return the first CommonCautionDemande filtered by the DATE_SIGNATURE1 column
 * @method CommonCautionDemande findOneByIdSignataire2(int $ID_SIGNATAIRE2) Return the first CommonCautionDemande filtered by the ID_SIGNATAIRE2 column
 * @method CommonCautionDemande findOneByDateSignature2(string $DATE_SIGNATURE2) Return the first CommonCautionDemande filtered by the DATE_SIGNATURE2 column
 * @method CommonCautionDemande findOneByGroupement(string $GROUPEMENT) Return the first CommonCautionDemande filtered by the GROUPEMENT column
 * @method CommonCautionDemande findOneByIdGroupement(int $ID_GROUPEMENT) Return the first CommonCautionDemande filtered by the ID_GROUPEMENT column
 * @method CommonCautionDemande findOneByCodeAgence(string $CODE_AGENCE) Return the first CommonCautionDemande filtered by the CODE_AGENCE column
 * @method CommonCautionDemande findOneByCodeVille(string $CODE_VILLE) Return the first CommonCautionDemande filtered by the CODE_VILLE column
 * @method CommonCautionDemande findOneByReferenceInterne(int $REFERENCE_INTERNE) Return the first CommonCautionDemande filtered by the REFERENCE_INTERNE column
 *
 * @method array findById(int $ID) Return CommonCautionDemande objects filtered by the ID column
 * @method array findByRefConsultation(int $REF_CONSULTATION) Return CommonCautionDemande objects filtered by the REF_CONSULTATION column
 * @method array findByIdEntreprise(int $ID_ENTREPRISE) Return CommonCautionDemande objects filtered by the ID_ENTREPRISE column
 * @method array findByIdInscrit(int $ID_INSCRIT) Return CommonCautionDemande objects filtered by the ID_INSCRIT column
 * @method array findByAcronyme(string $ACRONYME) Return CommonCautionDemande objects filtered by the ACRONYME column
 * @method array findByIntitule(string $INTITULE) Return CommonCautionDemande objects filtered by the INTITULE column
 * @method array findByLot(int $LOT) Return CommonCautionDemande objects filtered by the LOT column
 * @method array findByObjetLot(string $OBJET_LOT) Return CommonCautionDemande objects filtered by the OBJET_LOT column
 * @method array findByRaisonSociale(string $RAISON_SOCIALE) Return CommonCautionDemande objects filtered by the RAISON_SOCIALE column
 * @method array findByMontant(double $MONTANT) Return CommonCautionDemande objects filtered by the MONTANT column
 * @method array findByDateDemande(string $DATE_DEMANDE) Return CommonCautionDemande objects filtered by the DATE_DEMANDE column
 * @method array findByDateLimiteRemisePlis(string $DATE_LIMITE_REMISE_PLIS) Return CommonCautionDemande objects filtered by the DATE_LIMITE_REMISE_PLIS column
 * @method array findByIdStatutCaution(int $ID_STATUT_CAUTION) Return CommonCautionDemande objects filtered by the ID_STATUT_CAUTION column
 * @method array findByIdCompteBancaire(int $ID_COMPTE_BANCAIRE) Return CommonCautionDemande objects filtered by the ID_COMPTE_BANCAIRE column
 * @method array findByIdBlobDemande(int $ID_BLOB_DEMANDE) Return CommonCautionDemande objects filtered by the ID_BLOB_DEMANDE column
 * @method array findByNomDocDemande(string $NOM_DOC_DEMANDE) Return CommonCautionDemande objects filtered by the NOM_DOC_DEMANDE column
 * @method array findByIdBlobCaution(int $ID_BLOB_CAUTION) Return CommonCautionDemande objects filtered by the ID_BLOB_CAUTION column
 * @method array findByNomDocCaution(string $NOM_DOC_CAUTION) Return CommonCautionDemande objects filtered by the NOM_DOC_CAUTION column
 * @method array findByIdInscritCrea(int $ID_INSCRIT_CREA) Return CommonCautionDemande objects filtered by the ID_INSCRIT_CREA column
 * @method array findByDateCrea(string $DATE_CREA) Return CommonCautionDemande objects filtered by the DATE_CREA column
 * @method array findByIdInscritModif(int $ID_INSCRIT_MODIF) Return CommonCautionDemande objects filtered by the ID_INSCRIT_MODIF column
 * @method array findByDateModif(string $DATE_MODIF) Return CommonCautionDemande objects filtered by the DATE_MODIF column
 * @method array findByIdentifiantBancaire(string $IDENTIFIANT_BANCAIRE) Return CommonCautionDemande objects filtered by the IDENTIFIANT_BANCAIRE column
 * @method array findByIdVille(int $ID_VILLE) Return CommonCautionDemande objects filtered by the ID_VILLE column
 * @method array findByAcheteurPublic(string $ACHETEUR_PUBLIC) Return CommonCautionDemande objects filtered by the ACHETEUR_PUBLIC column
 * @method array findByDateValidation(string $DATE_VALIDATION) Return CommonCautionDemande objects filtered by the DATE_VALIDATION column
 * @method array findByDateRejet(string $DATE_REJET) Return CommonCautionDemande objects filtered by the DATE_REJET column
 * @method array findByMotifRejet(string $MOTIF_REJET) Return CommonCautionDemande objects filtered by the MOTIF_REJET column
 * @method array findByIdAgentBanquierValidation(int $ID_AGENT_BANQUIER_VALIDATION) Return CommonCautionDemande objects filtered by the ID_AGENT_BANQUIER_VALIDATION column
 * @method array findByIdAgentBanquierRejet(int $ID_AGENT_BANQUIER_REJET) Return CommonCautionDemande objects filtered by the ID_AGENT_BANQUIER_REJET column
 * @method array findByReferenceModele(string $REFERENCE_MODELE) Return CommonCautionDemande objects filtered by the REFERENCE_MODELE column
 * @method array findByDatePriseEnCharge(string $DATE_PRISE_EN_CHARGE) Return CommonCautionDemande objects filtered by the DATE_PRISE_EN_CHARGE column
 * @method array findByIdAgentPriseEnCharge(int $ID_AGENT_PRISE_EN_CHARGE) Return CommonCautionDemande objects filtered by the ID_AGENT_PRISE_EN_CHARGE column
 * @method array findByTaguee(string $TAGUEE) Return CommonCautionDemande objects filtered by the TAGUEE column
 * @method array findByUtilisee(string $UTILISEE) Return CommonCautionDemande objects filtered by the UTILISEE column
 * @method array findByMiseADispo(string $MISE_A_DISPO) Return CommonCautionDemande objects filtered by the MISE_A_DISPO column
 * @method array findByIdSignataire1(int $ID_SIGNATAIRE1) Return CommonCautionDemande objects filtered by the ID_SIGNATAIRE1 column
 * @method array findByDateSignature1(string $DATE_SIGNATURE1) Return CommonCautionDemande objects filtered by the DATE_SIGNATURE1 column
 * @method array findByIdSignataire2(int $ID_SIGNATAIRE2) Return CommonCautionDemande objects filtered by the ID_SIGNATAIRE2 column
 * @method array findByDateSignature2(string $DATE_SIGNATURE2) Return CommonCautionDemande objects filtered by the DATE_SIGNATURE2 column
 * @method array findByGroupement(string $GROUPEMENT) Return CommonCautionDemande objects filtered by the GROUPEMENT column
 * @method array findByIdGroupement(int $ID_GROUPEMENT) Return CommonCautionDemande objects filtered by the ID_GROUPEMENT column
 * @method array findByCodeAgence(string $CODE_AGENCE) Return CommonCautionDemande objects filtered by the CODE_AGENCE column
 * @method array findByCodeVille(string $CODE_VILLE) Return CommonCautionDemande objects filtered by the CODE_VILLE column
 * @method array findByReferenceInterne(int $REFERENCE_INTERNE) Return CommonCautionDemande objects filtered by the REFERENCE_INTERNE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCautionDemandeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCautionDemandeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCautionDemande', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCautionDemandeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCautionDemandeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCautionDemandeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCautionDemandeQuery) {
            return $criteria;
        }
        $query = new CommonCautionDemandeQuery();
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
     * @return   CommonCautionDemande|CommonCautionDemande[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCautionDemandePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCautionDemande A model object, or null if the key is not found
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
     * @return                 CommonCautionDemande A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `REF_CONSULTATION`, `ID_ENTREPRISE`, `ID_INSCRIT`, `ACRONYME`, `INTITULE`, `LOT`, `OBJET_LOT`, `RAISON_SOCIALE`, `MONTANT`, `DATE_DEMANDE`, `DATE_LIMITE_REMISE_PLIS`, `ID_STATUT_CAUTION`, `ID_COMPTE_BANCAIRE`, `ID_BLOB_DEMANDE`, `NOM_DOC_DEMANDE`, `ID_BLOB_CAUTION`, `NOM_DOC_CAUTION`, `ID_INSCRIT_CREA`, `DATE_CREA`, `ID_INSCRIT_MODIF`, `DATE_MODIF`, `IDENTIFIANT_BANCAIRE`, `ID_VILLE`, `ACHETEUR_PUBLIC`, `DATE_VALIDATION`, `DATE_REJET`, `MOTIF_REJET`, `ID_AGENT_BANQUIER_VALIDATION`, `ID_AGENT_BANQUIER_REJET`, `REFERENCE_MODELE`, `DATE_PRISE_EN_CHARGE`, `ID_AGENT_PRISE_EN_CHARGE`, `TAGUEE`, `UTILISEE`, `MISE_A_DISPO`, `ID_SIGNATAIRE1`, `DATE_SIGNATURE1`, `ID_SIGNATAIRE2`, `DATE_SIGNATURE2`, `GROUPEMENT`, `ID_GROUPEMENT`, `CODE_AGENCE`, `CODE_VILLE`, `REFERENCE_INTERNE` FROM `caution_demande` WHERE `ID` = :p0';
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
            $obj = new CommonCautionDemande();
            $obj->hydrate($row);
            CommonCautionDemandePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonCautionDemande|CommonCautionDemande[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonCautionDemande[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonCautionDemandePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonCautionDemandePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID >= 12
     * $query->filterById(array('max' => 12)); // WHERE ID <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the REF_CONSULTATION column
     *
     * Example usage:
     * <code>
     * $query->filterByRefConsultation(1234); // WHERE REF_CONSULTATION = 1234
     * $query->filterByRefConsultation(array(12, 34)); // WHERE REF_CONSULTATION IN (12, 34)
     * $query->filterByRefConsultation(array('min' => 12)); // WHERE REF_CONSULTATION >= 12
     * $query->filterByRefConsultation(array('max' => 12)); // WHERE REF_CONSULTATION <= 12
     * </code>
     *
     * @param     mixed $refConsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByRefConsultation($refConsultation = null, $comparison = null)
    {
        if (is_array($refConsultation)) {
            $useMinMax = false;
            if (isset($refConsultation['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::REF_CONSULTATION, $refConsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refConsultation['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::REF_CONSULTATION, $refConsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::REF_CONSULTATION, $refConsultation, $comparison);
    }

    /**
     * Filter the query on the ID_ENTREPRISE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntreprise(1234); // WHERE ID_ENTREPRISE = 1234
     * $query->filterByIdEntreprise(array(12, 34)); // WHERE ID_ENTREPRISE IN (12, 34)
     * $query->filterByIdEntreprise(array('min' => 12)); // WHERE ID_ENTREPRISE >= 12
     * $query->filterByIdEntreprise(array('max' => 12)); // WHERE ID_ENTREPRISE <= 12
     * </code>
     *
     * @param     mixed $idEntreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::ID_ENTREPRISE, $idEntreprise, $comparison);
    }

    /**
     * Filter the query on the ID_INSCRIT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInscrit(1234); // WHERE ID_INSCRIT = 1234
     * $query->filterByIdInscrit(array(12, 34)); // WHERE ID_INSCRIT IN (12, 34)
     * $query->filterByIdInscrit(array('min' => 12)); // WHERE ID_INSCRIT >= 12
     * $query->filterByIdInscrit(array('max' => 12)); // WHERE ID_INSCRIT <= 12
     * </code>
     *
     * @param     mixed $idInscrit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByIdInscrit($idInscrit = null, $comparison = null)
    {
        if (is_array($idInscrit)) {
            $useMinMax = false;
            if (isset($idInscrit['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_INSCRIT, $idInscrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscrit['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_INSCRIT, $idInscrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::ID_INSCRIT, $idInscrit, $comparison);
    }

    /**
     * Filter the query on the ACRONYME column
     *
     * Example usage:
     * <code>
     * $query->filterByAcronyme('fooValue');   // WHERE ACRONYME = 'fooValue'
     * $query->filterByAcronyme('%fooValue%'); // WHERE ACRONYME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acronyme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByAcronyme($acronyme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acronyme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acronyme)) {
                $acronyme = str_replace('*', '%', $acronyme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::ACRONYME, $acronyme, $comparison);
    }

    /**
     * Filter the query on the INTITULE column
     *
     * Example usage:
     * <code>
     * $query->filterByIntitule('fooValue');   // WHERE INTITULE = 'fooValue'
     * $query->filterByIntitule('%fooValue%'); // WHERE INTITULE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intitule The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByIntitule($intitule = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intitule)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intitule)) {
                $intitule = str_replace('*', '%', $intitule);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::INTITULE, $intitule, $comparison);
    }

    /**
     * Filter the query on the LOT column
     *
     * Example usage:
     * <code>
     * $query->filterByLot(1234); // WHERE LOT = 1234
     * $query->filterByLot(array(12, 34)); // WHERE LOT IN (12, 34)
     * $query->filterByLot(array('min' => 12)); // WHERE LOT >= 12
     * $query->filterByLot(array('max' => 12)); // WHERE LOT <= 12
     * </code>
     *
     * @param     mixed $lot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the OBJET_LOT column
     *
     * Example usage:
     * <code>
     * $query->filterByObjetLot('fooValue');   // WHERE OBJET_LOT = 'fooValue'
     * $query->filterByObjetLot('%fooValue%'); // WHERE OBJET_LOT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objetLot The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByObjetLot($objetLot = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objetLot)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objetLot)) {
                $objetLot = str_replace('*', '%', $objetLot);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::OBJET_LOT, $objetLot, $comparison);
    }

    /**
     * Filter the query on the RAISON_SOCIALE column
     *
     * Example usage:
     * <code>
     * $query->filterByRaisonSociale('fooValue');   // WHERE RAISON_SOCIALE = 'fooValue'
     * $query->filterByRaisonSociale('%fooValue%'); // WHERE RAISON_SOCIALE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $raisonSociale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByRaisonSociale($raisonSociale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($raisonSociale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $raisonSociale)) {
                $raisonSociale = str_replace('*', '%', $raisonSociale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::RAISON_SOCIALE, $raisonSociale, $comparison);
    }

    /**
     * Filter the query on the MONTANT column
     *
     * Example usage:
     * <code>
     * $query->filterByMontant(1234); // WHERE MONTANT = 1234
     * $query->filterByMontant(array(12, 34)); // WHERE MONTANT IN (12, 34)
     * $query->filterByMontant(array('min' => 12)); // WHERE MONTANT >= 12
     * $query->filterByMontant(array('max' => 12)); // WHERE MONTANT <= 12
     * </code>
     *
     * @param     mixed $montant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByMontant($montant = null, $comparison = null)
    {
        if (is_array($montant)) {
            $useMinMax = false;
            if (isset($montant['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::MONTANT, $montant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montant['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::MONTANT, $montant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::MONTANT, $montant, $comparison);
    }

    /**
     * Filter the query on the DATE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDemande('2011-03-14'); // WHERE DATE_DEMANDE = '2011-03-14'
     * $query->filterByDateDemande('now'); // WHERE DATE_DEMANDE = '2011-03-14'
     * $query->filterByDateDemande(array('max' => 'yesterday')); // WHERE DATE_DEMANDE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDemande The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByDateDemande($dateDemande = null, $comparison = null)
    {
        if (is_array($dateDemande)) {
            $useMinMax = false;
            if (isset($dateDemande['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::DATE_DEMANDE, $dateDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDemande['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::DATE_DEMANDE, $dateDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::DATE_DEMANDE, $dateDemande, $comparison);
    }

    /**
     * Filter the query on the DATE_LIMITE_REMISE_PLIS column
     *
     * Example usage:
     * <code>
     * $query->filterByDateLimiteRemisePlis('2011-03-14'); // WHERE DATE_LIMITE_REMISE_PLIS = '2011-03-14'
     * $query->filterByDateLimiteRemisePlis('now'); // WHERE DATE_LIMITE_REMISE_PLIS = '2011-03-14'
     * $query->filterByDateLimiteRemisePlis(array('max' => 'yesterday')); // WHERE DATE_LIMITE_REMISE_PLIS > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateLimiteRemisePlis The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByDateLimiteRemisePlis($dateLimiteRemisePlis = null, $comparison = null)
    {
        if (is_array($dateLimiteRemisePlis)) {
            $useMinMax = false;
            if (isset($dateLimiteRemisePlis['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::DATE_LIMITE_REMISE_PLIS, $dateLimiteRemisePlis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateLimiteRemisePlis['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::DATE_LIMITE_REMISE_PLIS, $dateLimiteRemisePlis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::DATE_LIMITE_REMISE_PLIS, $dateLimiteRemisePlis, $comparison);
    }

    /**
     * Filter the query on the ID_STATUT_CAUTION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdStatutCaution(1234); // WHERE ID_STATUT_CAUTION = 1234
     * $query->filterByIdStatutCaution(array(12, 34)); // WHERE ID_STATUT_CAUTION IN (12, 34)
     * $query->filterByIdStatutCaution(array('min' => 12)); // WHERE ID_STATUT_CAUTION >= 12
     * $query->filterByIdStatutCaution(array('max' => 12)); // WHERE ID_STATUT_CAUTION <= 12
     * </code>
     *
     * @param     mixed $idStatutCaution The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByIdStatutCaution($idStatutCaution = null, $comparison = null)
    {
        if (is_array($idStatutCaution)) {
            $useMinMax = false;
            if (isset($idStatutCaution['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_STATUT_CAUTION, $idStatutCaution['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idStatutCaution['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_STATUT_CAUTION, $idStatutCaution['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::ID_STATUT_CAUTION, $idStatutCaution, $comparison);
    }

    /**
     * Filter the query on the ID_COMPTE_BANCAIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCompteBancaire(1234); // WHERE ID_COMPTE_BANCAIRE = 1234
     * $query->filterByIdCompteBancaire(array(12, 34)); // WHERE ID_COMPTE_BANCAIRE IN (12, 34)
     * $query->filterByIdCompteBancaire(array('min' => 12)); // WHERE ID_COMPTE_BANCAIRE >= 12
     * $query->filterByIdCompteBancaire(array('max' => 12)); // WHERE ID_COMPTE_BANCAIRE <= 12
     * </code>
     *
     * @see       filterByCommonTCompteBancaire()
     *
     * @param     mixed $idCompteBancaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByIdCompteBancaire($idCompteBancaire = null, $comparison = null)
    {
        if (is_array($idCompteBancaire)) {
            $useMinMax = false;
            if (isset($idCompteBancaire['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE, $idCompteBancaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCompteBancaire['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE, $idCompteBancaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE, $idCompteBancaire, $comparison);
    }

    /**
     * Filter the query on the ID_BLOB_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlobDemande(1234); // WHERE ID_BLOB_DEMANDE = 1234
     * $query->filterByIdBlobDemande(array(12, 34)); // WHERE ID_BLOB_DEMANDE IN (12, 34)
     * $query->filterByIdBlobDemande(array('min' => 12)); // WHERE ID_BLOB_DEMANDE >= 12
     * $query->filterByIdBlobDemande(array('max' => 12)); // WHERE ID_BLOB_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $idBlobDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByIdBlobDemande($idBlobDemande = null, $comparison = null)
    {
        if (is_array($idBlobDemande)) {
            $useMinMax = false;
            if (isset($idBlobDemande['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_BLOB_DEMANDE, $idBlobDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlobDemande['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_BLOB_DEMANDE, $idBlobDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::ID_BLOB_DEMANDE, $idBlobDemande, $comparison);
    }

    /**
     * Filter the query on the NOM_DOC_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDocDemande('fooValue');   // WHERE NOM_DOC_DEMANDE = 'fooValue'
     * $query->filterByNomDocDemande('%fooValue%'); // WHERE NOM_DOC_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDocDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByNomDocDemande($nomDocDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDocDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDocDemande)) {
                $nomDocDemande = str_replace('*', '%', $nomDocDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::NOM_DOC_DEMANDE, $nomDocDemande, $comparison);
    }

    /**
     * Filter the query on the ID_BLOB_CAUTION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlobCaution(1234); // WHERE ID_BLOB_CAUTION = 1234
     * $query->filterByIdBlobCaution(array(12, 34)); // WHERE ID_BLOB_CAUTION IN (12, 34)
     * $query->filterByIdBlobCaution(array('min' => 12)); // WHERE ID_BLOB_CAUTION >= 12
     * $query->filterByIdBlobCaution(array('max' => 12)); // WHERE ID_BLOB_CAUTION <= 12
     * </code>
     *
     * @param     mixed $idBlobCaution The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByIdBlobCaution($idBlobCaution = null, $comparison = null)
    {
        if (is_array($idBlobCaution)) {
            $useMinMax = false;
            if (isset($idBlobCaution['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_BLOB_CAUTION, $idBlobCaution['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlobCaution['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_BLOB_CAUTION, $idBlobCaution['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::ID_BLOB_CAUTION, $idBlobCaution, $comparison);
    }

    /**
     * Filter the query on the NOM_DOC_CAUTION column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDocCaution('fooValue');   // WHERE NOM_DOC_CAUTION = 'fooValue'
     * $query->filterByNomDocCaution('%fooValue%'); // WHERE NOM_DOC_CAUTION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDocCaution The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByNomDocCaution($nomDocCaution = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDocCaution)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDocCaution)) {
                $nomDocCaution = str_replace('*', '%', $nomDocCaution);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::NOM_DOC_CAUTION, $nomDocCaution, $comparison);
    }

    /**
     * Filter the query on the ID_INSCRIT_CREA column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInscritCrea(1234); // WHERE ID_INSCRIT_CREA = 1234
     * $query->filterByIdInscritCrea(array(12, 34)); // WHERE ID_INSCRIT_CREA IN (12, 34)
     * $query->filterByIdInscritCrea(array('min' => 12)); // WHERE ID_INSCRIT_CREA >= 12
     * $query->filterByIdInscritCrea(array('max' => 12)); // WHERE ID_INSCRIT_CREA <= 12
     * </code>
     *
     * @param     mixed $idInscritCrea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByIdInscritCrea($idInscritCrea = null, $comparison = null)
    {
        if (is_array($idInscritCrea)) {
            $useMinMax = false;
            if (isset($idInscritCrea['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_INSCRIT_CREA, $idInscritCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscritCrea['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_INSCRIT_CREA, $idInscritCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::ID_INSCRIT_CREA, $idInscritCrea, $comparison);
    }

    /**
     * Filter the query on the DATE_CREA column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCrea('2011-03-14'); // WHERE DATE_CREA = '2011-03-14'
     * $query->filterByDateCrea('now'); // WHERE DATE_CREA = '2011-03-14'
     * $query->filterByDateCrea(array('max' => 'yesterday')); // WHERE DATE_CREA > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCrea The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByDateCrea($dateCrea = null, $comparison = null)
    {
        if (is_array($dateCrea)) {
            $useMinMax = false;
            if (isset($dateCrea['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::DATE_CREA, $dateCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCrea['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::DATE_CREA, $dateCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::DATE_CREA, $dateCrea, $comparison);
    }

    /**
     * Filter the query on the ID_INSCRIT_MODIF column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInscritModif(1234); // WHERE ID_INSCRIT_MODIF = 1234
     * $query->filterByIdInscritModif(array(12, 34)); // WHERE ID_INSCRIT_MODIF IN (12, 34)
     * $query->filterByIdInscritModif(array('min' => 12)); // WHERE ID_INSCRIT_MODIF >= 12
     * $query->filterByIdInscritModif(array('max' => 12)); // WHERE ID_INSCRIT_MODIF <= 12
     * </code>
     *
     * @param     mixed $idInscritModif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByIdInscritModif($idInscritModif = null, $comparison = null)
    {
        if (is_array($idInscritModif)) {
            $useMinMax = false;
            if (isset($idInscritModif['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_INSCRIT_MODIF, $idInscritModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscritModif['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_INSCRIT_MODIF, $idInscritModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::ID_INSCRIT_MODIF, $idInscritModif, $comparison);
    }

    /**
     * Filter the query on the DATE_MODIF column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModif('2011-03-14'); // WHERE DATE_MODIF = '2011-03-14'
     * $query->filterByDateModif('now'); // WHERE DATE_MODIF = '2011-03-14'
     * $query->filterByDateModif(array('max' => 'yesterday')); // WHERE DATE_MODIF > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateModif The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByDateModif($dateModif = null, $comparison = null)
    {
        if (is_array($dateModif)) {
            $useMinMax = false;
            if (isset($dateModif['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::DATE_MODIF, $dateModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModif['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::DATE_MODIF, $dateModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::DATE_MODIF, $dateModif, $comparison);
    }

    /**
     * Filter the query on the IDENTIFIANT_BANCAIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiantBancaire('fooValue');   // WHERE IDENTIFIANT_BANCAIRE = 'fooValue'
     * $query->filterByIdentifiantBancaire('%fooValue%'); // WHERE IDENTIFIANT_BANCAIRE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifiantBancaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByIdentifiantBancaire($identifiantBancaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifiantBancaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifiantBancaire)) {
                $identifiantBancaire = str_replace('*', '%', $identifiantBancaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::IDENTIFIANT_BANCAIRE, $identifiantBancaire, $comparison);
    }

    /**
     * Filter the query on the ID_VILLE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdVille(1234); // WHERE ID_VILLE = 1234
     * $query->filterByIdVille(array(12, 34)); // WHERE ID_VILLE IN (12, 34)
     * $query->filterByIdVille(array('min' => 12)); // WHERE ID_VILLE >= 12
     * $query->filterByIdVille(array('max' => 12)); // WHERE ID_VILLE <= 12
     * </code>
     *
     * @param     mixed $idVille The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByIdVille($idVille = null, $comparison = null)
    {
        if (is_array($idVille)) {
            $useMinMax = false;
            if (isset($idVille['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_VILLE, $idVille['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idVille['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_VILLE, $idVille['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::ID_VILLE, $idVille, $comparison);
    }

    /**
     * Filter the query on the ACHETEUR_PUBLIC column
     *
     * Example usage:
     * <code>
     * $query->filterByAcheteurPublic('fooValue');   // WHERE ACHETEUR_PUBLIC = 'fooValue'
     * $query->filterByAcheteurPublic('%fooValue%'); // WHERE ACHETEUR_PUBLIC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acheteurPublic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByAcheteurPublic($acheteurPublic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acheteurPublic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acheteurPublic)) {
                $acheteurPublic = str_replace('*', '%', $acheteurPublic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::ACHETEUR_PUBLIC, $acheteurPublic, $comparison);
    }

    /**
     * Filter the query on the DATE_VALIDATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateValidation('2011-03-14'); // WHERE DATE_VALIDATION = '2011-03-14'
     * $query->filterByDateValidation('now'); // WHERE DATE_VALIDATION = '2011-03-14'
     * $query->filterByDateValidation(array('max' => 'yesterday')); // WHERE DATE_VALIDATION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateValidation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByDateValidation($dateValidation = null, $comparison = null)
    {
        if (is_array($dateValidation)) {
            $useMinMax = false;
            if (isset($dateValidation['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::DATE_VALIDATION, $dateValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateValidation['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::DATE_VALIDATION, $dateValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::DATE_VALIDATION, $dateValidation, $comparison);
    }

    /**
     * Filter the query on the DATE_REJET column
     *
     * Example usage:
     * <code>
     * $query->filterByDateRejet('2011-03-14'); // WHERE DATE_REJET = '2011-03-14'
     * $query->filterByDateRejet('now'); // WHERE DATE_REJET = '2011-03-14'
     * $query->filterByDateRejet(array('max' => 'yesterday')); // WHERE DATE_REJET > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateRejet The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByDateRejet($dateRejet = null, $comparison = null)
    {
        if (is_array($dateRejet)) {
            $useMinMax = false;
            if (isset($dateRejet['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::DATE_REJET, $dateRejet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateRejet['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::DATE_REJET, $dateRejet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::DATE_REJET, $dateRejet, $comparison);
    }

    /**
     * Filter the query on the MOTIF_REJET column
     *
     * Example usage:
     * <code>
     * $query->filterByMotifRejet('fooValue');   // WHERE MOTIF_REJET = 'fooValue'
     * $query->filterByMotifRejet('%fooValue%'); // WHERE MOTIF_REJET LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motifRejet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByMotifRejet($motifRejet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motifRejet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motifRejet)) {
                $motifRejet = str_replace('*', '%', $motifRejet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::MOTIF_REJET, $motifRejet, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_BANQUIER_VALIDATION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentBanquierValidation(1234); // WHERE ID_AGENT_BANQUIER_VALIDATION = 1234
     * $query->filterByIdAgentBanquierValidation(array(12, 34)); // WHERE ID_AGENT_BANQUIER_VALIDATION IN (12, 34)
     * $query->filterByIdAgentBanquierValidation(array('min' => 12)); // WHERE ID_AGENT_BANQUIER_VALIDATION >= 12
     * $query->filterByIdAgentBanquierValidation(array('max' => 12)); // WHERE ID_AGENT_BANQUIER_VALIDATION <= 12
     * </code>
     *
     * @see       filterByCommonAgentBanquierRelatedByIdAgentBanquierValidation()
     *
     * @param     mixed $idAgentBanquierValidation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByIdAgentBanquierValidation($idAgentBanquierValidation = null, $comparison = null)
    {
        if (is_array($idAgentBanquierValidation)) {
            $useMinMax = false;
            if (isset($idAgentBanquierValidation['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_AGENT_BANQUIER_VALIDATION, $idAgentBanquierValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentBanquierValidation['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_AGENT_BANQUIER_VALIDATION, $idAgentBanquierValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::ID_AGENT_BANQUIER_VALIDATION, $idAgentBanquierValidation, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_BANQUIER_REJET column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentBanquierRejet(1234); // WHERE ID_AGENT_BANQUIER_REJET = 1234
     * $query->filterByIdAgentBanquierRejet(array(12, 34)); // WHERE ID_AGENT_BANQUIER_REJET IN (12, 34)
     * $query->filterByIdAgentBanquierRejet(array('min' => 12)); // WHERE ID_AGENT_BANQUIER_REJET >= 12
     * $query->filterByIdAgentBanquierRejet(array('max' => 12)); // WHERE ID_AGENT_BANQUIER_REJET <= 12
     * </code>
     *
     * @see       filterByCommonAgentBanquierRelatedByIdAgentBanquierRejet()
     *
     * @param     mixed $idAgentBanquierRejet The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByIdAgentBanquierRejet($idAgentBanquierRejet = null, $comparison = null)
    {
        if (is_array($idAgentBanquierRejet)) {
            $useMinMax = false;
            if (isset($idAgentBanquierRejet['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_AGENT_BANQUIER_REJET, $idAgentBanquierRejet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentBanquierRejet['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_AGENT_BANQUIER_REJET, $idAgentBanquierRejet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::ID_AGENT_BANQUIER_REJET, $idAgentBanquierRejet, $comparison);
    }

    /**
     * Filter the query on the REFERENCE_MODELE column
     *
     * Example usage:
     * <code>
     * $query->filterByReferenceModele('fooValue');   // WHERE REFERENCE_MODELE = 'fooValue'
     * $query->filterByReferenceModele('%fooValue%'); // WHERE REFERENCE_MODELE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referenceModele The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByReferenceModele($referenceModele = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referenceModele)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $referenceModele)) {
                $referenceModele = str_replace('*', '%', $referenceModele);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::REFERENCE_MODELE, $referenceModele, $comparison);
    }

    /**
     * Filter the query on the DATE_PRISE_EN_CHARGE column
     *
     * Example usage:
     * <code>
     * $query->filterByDatePriseEnCharge('2011-03-14'); // WHERE DATE_PRISE_EN_CHARGE = '2011-03-14'
     * $query->filterByDatePriseEnCharge('now'); // WHERE DATE_PRISE_EN_CHARGE = '2011-03-14'
     * $query->filterByDatePriseEnCharge(array('max' => 'yesterday')); // WHERE DATE_PRISE_EN_CHARGE > '2011-03-13'
     * </code>
     *
     * @param     mixed $datePriseEnCharge The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByDatePriseEnCharge($datePriseEnCharge = null, $comparison = null)
    {
        if (is_array($datePriseEnCharge)) {
            $useMinMax = false;
            if (isset($datePriseEnCharge['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::DATE_PRISE_EN_CHARGE, $datePriseEnCharge['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datePriseEnCharge['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::DATE_PRISE_EN_CHARGE, $datePriseEnCharge['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::DATE_PRISE_EN_CHARGE, $datePriseEnCharge, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_PRISE_EN_CHARGE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentPriseEnCharge(1234); // WHERE ID_AGENT_PRISE_EN_CHARGE = 1234
     * $query->filterByIdAgentPriseEnCharge(array(12, 34)); // WHERE ID_AGENT_PRISE_EN_CHARGE IN (12, 34)
     * $query->filterByIdAgentPriseEnCharge(array('min' => 12)); // WHERE ID_AGENT_PRISE_EN_CHARGE >= 12
     * $query->filterByIdAgentPriseEnCharge(array('max' => 12)); // WHERE ID_AGENT_PRISE_EN_CHARGE <= 12
     * </code>
     *
     * @see       filterByCommonAgentBanquierRelatedByIdAgentPriseEnCharge()
     *
     * @param     mixed $idAgentPriseEnCharge The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByIdAgentPriseEnCharge($idAgentPriseEnCharge = null, $comparison = null)
    {
        if (is_array($idAgentPriseEnCharge)) {
            $useMinMax = false;
            if (isset($idAgentPriseEnCharge['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_AGENT_PRISE_EN_CHARGE, $idAgentPriseEnCharge['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentPriseEnCharge['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_AGENT_PRISE_EN_CHARGE, $idAgentPriseEnCharge['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::ID_AGENT_PRISE_EN_CHARGE, $idAgentPriseEnCharge, $comparison);
    }

    /**
     * Filter the query on the TAGUEE column
     *
     * Example usage:
     * <code>
     * $query->filterByTaguee('fooValue');   // WHERE TAGUEE = 'fooValue'
     * $query->filterByTaguee('%fooValue%'); // WHERE TAGUEE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $taguee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByTaguee($taguee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($taguee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $taguee)) {
                $taguee = str_replace('*', '%', $taguee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::TAGUEE, $taguee, $comparison);
    }

    /**
     * Filter the query on the UTILISEE column
     *
     * Example usage:
     * <code>
     * $query->filterByUtilisee('fooValue');   // WHERE UTILISEE = 'fooValue'
     * $query->filterByUtilisee('%fooValue%'); // WHERE UTILISEE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $utilisee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByUtilisee($utilisee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($utilisee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $utilisee)) {
                $utilisee = str_replace('*', '%', $utilisee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::UTILISEE, $utilisee, $comparison);
    }

    /**
     * Filter the query on the MISE_A_DISPO column
     *
     * Example usage:
     * <code>
     * $query->filterByMiseADispo('fooValue');   // WHERE MISE_A_DISPO = 'fooValue'
     * $query->filterByMiseADispo('%fooValue%'); // WHERE MISE_A_DISPO LIKE '%fooValue%'
     * </code>
     *
     * @param     string $miseADispo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByMiseADispo($miseADispo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($miseADispo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $miseADispo)) {
                $miseADispo = str_replace('*', '%', $miseADispo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::MISE_A_DISPO, $miseADispo, $comparison);
    }

    /**
     * Filter the query on the ID_SIGNATAIRE1 column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSignataire1(1234); // WHERE ID_SIGNATAIRE1 = 1234
     * $query->filterByIdSignataire1(array(12, 34)); // WHERE ID_SIGNATAIRE1 IN (12, 34)
     * $query->filterByIdSignataire1(array('min' => 12)); // WHERE ID_SIGNATAIRE1 >= 12
     * $query->filterByIdSignataire1(array('max' => 12)); // WHERE ID_SIGNATAIRE1 <= 12
     * </code>
     *
     * @see       filterByCommonAgentBanquierRelatedByIdSignataire1()
     *
     * @param     mixed $idSignataire1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByIdSignataire1($idSignataire1 = null, $comparison = null)
    {
        if (is_array($idSignataire1)) {
            $useMinMax = false;
            if (isset($idSignataire1['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_SIGNATAIRE1, $idSignataire1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSignataire1['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_SIGNATAIRE1, $idSignataire1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::ID_SIGNATAIRE1, $idSignataire1, $comparison);
    }

    /**
     * Filter the query on the DATE_SIGNATURE1 column
     *
     * Example usage:
     * <code>
     * $query->filterByDateSignature1('2011-03-14'); // WHERE DATE_SIGNATURE1 = '2011-03-14'
     * $query->filterByDateSignature1('now'); // WHERE DATE_SIGNATURE1 = '2011-03-14'
     * $query->filterByDateSignature1(array('max' => 'yesterday')); // WHERE DATE_SIGNATURE1 > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateSignature1 The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByDateSignature1($dateSignature1 = null, $comparison = null)
    {
        if (is_array($dateSignature1)) {
            $useMinMax = false;
            if (isset($dateSignature1['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::DATE_SIGNATURE1, $dateSignature1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateSignature1['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::DATE_SIGNATURE1, $dateSignature1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::DATE_SIGNATURE1, $dateSignature1, $comparison);
    }

    /**
     * Filter the query on the ID_SIGNATAIRE2 column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSignataire2(1234); // WHERE ID_SIGNATAIRE2 = 1234
     * $query->filterByIdSignataire2(array(12, 34)); // WHERE ID_SIGNATAIRE2 IN (12, 34)
     * $query->filterByIdSignataire2(array('min' => 12)); // WHERE ID_SIGNATAIRE2 >= 12
     * $query->filterByIdSignataire2(array('max' => 12)); // WHERE ID_SIGNATAIRE2 <= 12
     * </code>
     *
     * @see       filterByCommonAgentBanquierRelatedByIdSignataire2()
     *
     * @param     mixed $idSignataire2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByIdSignataire2($idSignataire2 = null, $comparison = null)
    {
        if (is_array($idSignataire2)) {
            $useMinMax = false;
            if (isset($idSignataire2['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_SIGNATAIRE2, $idSignataire2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSignataire2['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_SIGNATAIRE2, $idSignataire2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::ID_SIGNATAIRE2, $idSignataire2, $comparison);
    }

    /**
     * Filter the query on the DATE_SIGNATURE2 column
     *
     * Example usage:
     * <code>
     * $query->filterByDateSignature2('2011-03-14'); // WHERE DATE_SIGNATURE2 = '2011-03-14'
     * $query->filterByDateSignature2('now'); // WHERE DATE_SIGNATURE2 = '2011-03-14'
     * $query->filterByDateSignature2(array('max' => 'yesterday')); // WHERE DATE_SIGNATURE2 > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateSignature2 The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByDateSignature2($dateSignature2 = null, $comparison = null)
    {
        if (is_array($dateSignature2)) {
            $useMinMax = false;
            if (isset($dateSignature2['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::DATE_SIGNATURE2, $dateSignature2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateSignature2['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::DATE_SIGNATURE2, $dateSignature2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::DATE_SIGNATURE2, $dateSignature2, $comparison);
    }

    /**
     * Filter the query on the GROUPEMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByGroupement('fooValue');   // WHERE GROUPEMENT = 'fooValue'
     * $query->filterByGroupement('%fooValue%'); // WHERE GROUPEMENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $groupement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByGroupement($groupement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($groupement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $groupement)) {
                $groupement = str_replace('*', '%', $groupement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::GROUPEMENT, $groupement, $comparison);
    }

    /**
     * Filter the query on the ID_GROUPEMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdGroupement(1234); // WHERE ID_GROUPEMENT = 1234
     * $query->filterByIdGroupement(array(12, 34)); // WHERE ID_GROUPEMENT IN (12, 34)
     * $query->filterByIdGroupement(array('min' => 12)); // WHERE ID_GROUPEMENT >= 12
     * $query->filterByIdGroupement(array('max' => 12)); // WHERE ID_GROUPEMENT <= 12
     * </code>
     *
     * @param     mixed $idGroupement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByIdGroupement($idGroupement = null, $comparison = null)
    {
        if (is_array($idGroupement)) {
            $useMinMax = false;
            if (isset($idGroupement['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_GROUPEMENT, $idGroupement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idGroupement['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::ID_GROUPEMENT, $idGroupement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::ID_GROUPEMENT, $idGroupement, $comparison);
    }

    /**
     * Filter the query on the CODE_AGENCE column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeAgence('fooValue');   // WHERE CODE_AGENCE = 'fooValue'
     * $query->filterByCodeAgence('%fooValue%'); // WHERE CODE_AGENCE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeAgence The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByCodeAgence($codeAgence = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeAgence)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeAgence)) {
                $codeAgence = str_replace('*', '%', $codeAgence);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::CODE_AGENCE, $codeAgence, $comparison);
    }

    /**
     * Filter the query on the CODE_VILLE column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeVille('fooValue');   // WHERE CODE_VILLE = 'fooValue'
     * $query->filterByCodeVille('%fooValue%'); // WHERE CODE_VILLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeVille The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByCodeVille($codeVille = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeVille)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeVille)) {
                $codeVille = str_replace('*', '%', $codeVille);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::CODE_VILLE, $codeVille, $comparison);
    }

    /**
     * Filter the query on the REFERENCE_INTERNE column
     *
     * Example usage:
     * <code>
     * $query->filterByReferenceInterne(1234); // WHERE REFERENCE_INTERNE = 1234
     * $query->filterByReferenceInterne(array(12, 34)); // WHERE REFERENCE_INTERNE IN (12, 34)
     * $query->filterByReferenceInterne(array('min' => 12)); // WHERE REFERENCE_INTERNE >= 12
     * $query->filterByReferenceInterne(array('max' => 12)); // WHERE REFERENCE_INTERNE <= 12
     * </code>
     *
     * @param     mixed $referenceInterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function filterByReferenceInterne($referenceInterne = null, $comparison = null)
    {
        if (is_array($referenceInterne)) {
            $useMinMax = false;
            if (isset($referenceInterne['min'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::REFERENCE_INTERNE, $referenceInterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($referenceInterne['max'])) {
                $this->addUsingAlias(CommonCautionDemandePeer::REFERENCE_INTERNE, $referenceInterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionDemandePeer::REFERENCE_INTERNE, $referenceInterne, $comparison);
    }

    /**
     * Filter the query by a related CommonAgentBanquier object
     *
     * @param   CommonAgentBanquier|PropelObjectCollection $commonAgentBanquier The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonCautionDemandeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAgentBanquierRelatedByIdAgentBanquierRejet($commonAgentBanquier, $comparison = null)
    {
        if ($commonAgentBanquier instanceof CommonAgentBanquier) {
            return $this
                ->addUsingAlias(CommonCautionDemandePeer::ID_AGENT_BANQUIER_REJET, $commonAgentBanquier->getId(), $comparison);
        } elseif ($commonAgentBanquier instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonCautionDemandePeer::ID_AGENT_BANQUIER_REJET, $commonAgentBanquier->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonAgentBanquierRelatedByIdAgentBanquierRejet() only accepts arguments of type CommonAgentBanquier or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonAgentBanquierRelatedByIdAgentBanquierRejet relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function joinCommonAgentBanquierRelatedByIdAgentBanquierRejet($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonAgentBanquierRelatedByIdAgentBanquierRejet');

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
            $this->addJoinObject($join, 'CommonAgentBanquierRelatedByIdAgentBanquierRejet');
        }

        return $this;
    }

    /**
     * Use the CommonAgentBanquierRelatedByIdAgentBanquierRejet relation CommonAgentBanquier object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonAgentBanquierQuery A secondary query class using the current class as primary query
     */
    public function useCommonAgentBanquierRelatedByIdAgentBanquierRejetQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonAgentBanquierRelatedByIdAgentBanquierRejet($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonAgentBanquierRelatedByIdAgentBanquierRejet', 'CommonAgentBanquierQuery');
    }

    /**
     * Filter the query by a related CommonAgentBanquier object
     *
     * @param   CommonAgentBanquier|PropelObjectCollection $commonAgentBanquier The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonCautionDemandeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAgentBanquierRelatedByIdAgentBanquierValidation($commonAgentBanquier, $comparison = null)
    {
        if ($commonAgentBanquier instanceof CommonAgentBanquier) {
            return $this
                ->addUsingAlias(CommonCautionDemandePeer::ID_AGENT_BANQUIER_VALIDATION, $commonAgentBanquier->getId(), $comparison);
        } elseif ($commonAgentBanquier instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonCautionDemandePeer::ID_AGENT_BANQUIER_VALIDATION, $commonAgentBanquier->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonAgentBanquierRelatedByIdAgentBanquierValidation() only accepts arguments of type CommonAgentBanquier or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonAgentBanquierRelatedByIdAgentBanquierValidation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function joinCommonAgentBanquierRelatedByIdAgentBanquierValidation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonAgentBanquierRelatedByIdAgentBanquierValidation');

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
            $this->addJoinObject($join, 'CommonAgentBanquierRelatedByIdAgentBanquierValidation');
        }

        return $this;
    }

    /**
     * Use the CommonAgentBanquierRelatedByIdAgentBanquierValidation relation CommonAgentBanquier object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonAgentBanquierQuery A secondary query class using the current class as primary query
     */
    public function useCommonAgentBanquierRelatedByIdAgentBanquierValidationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonAgentBanquierRelatedByIdAgentBanquierValidation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonAgentBanquierRelatedByIdAgentBanquierValidation', 'CommonAgentBanquierQuery');
    }

    /**
     * Filter the query by a related CommonAgentBanquier object
     *
     * @param   CommonAgentBanquier|PropelObjectCollection $commonAgentBanquier The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonCautionDemandeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAgentBanquierRelatedByIdAgentPriseEnCharge($commonAgentBanquier, $comparison = null)
    {
        if ($commonAgentBanquier instanceof CommonAgentBanquier) {
            return $this
                ->addUsingAlias(CommonCautionDemandePeer::ID_AGENT_PRISE_EN_CHARGE, $commonAgentBanquier->getId(), $comparison);
        } elseif ($commonAgentBanquier instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonCautionDemandePeer::ID_AGENT_PRISE_EN_CHARGE, $commonAgentBanquier->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonAgentBanquierRelatedByIdAgentPriseEnCharge() only accepts arguments of type CommonAgentBanquier or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonAgentBanquierRelatedByIdAgentPriseEnCharge relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function joinCommonAgentBanquierRelatedByIdAgentPriseEnCharge($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonAgentBanquierRelatedByIdAgentPriseEnCharge');

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
            $this->addJoinObject($join, 'CommonAgentBanquierRelatedByIdAgentPriseEnCharge');
        }

        return $this;
    }

    /**
     * Use the CommonAgentBanquierRelatedByIdAgentPriseEnCharge relation CommonAgentBanquier object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonAgentBanquierQuery A secondary query class using the current class as primary query
     */
    public function useCommonAgentBanquierRelatedByIdAgentPriseEnChargeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonAgentBanquierRelatedByIdAgentPriseEnCharge($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonAgentBanquierRelatedByIdAgentPriseEnCharge', 'CommonAgentBanquierQuery');
    }

    /**
     * Filter the query by a related CommonTCompteBancaire object
     *
     * @param   CommonTCompteBancaire|PropelObjectCollection $commonTCompteBancaire The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonCautionDemandeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCompteBancaire($commonTCompteBancaire, $comparison = null)
    {
        if ($commonTCompteBancaire instanceof CommonTCompteBancaire) {
            return $this
                ->addUsingAlias(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE, $commonTCompteBancaire->getId(), $comparison);
        } elseif ($commonTCompteBancaire instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE, $commonTCompteBancaire->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonTCompteBancaire() only accepts arguments of type CommonTCompteBancaire or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCompteBancaire relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function joinCommonTCompteBancaire($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCompteBancaire');

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
            $this->addJoinObject($join, 'CommonTCompteBancaire');
        }

        return $this;
    }

    /**
     * Use the CommonTCompteBancaire relation CommonTCompteBancaire object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCompteBancaireQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCompteBancaireQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTCompteBancaire($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCompteBancaire', 'CommonTCompteBancaireQuery');
    }

    /**
     * Filter the query by a related CommonAgentBanquier object
     *
     * @param   CommonAgentBanquier|PropelObjectCollection $commonAgentBanquier The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonCautionDemandeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAgentBanquierRelatedByIdSignataire1($commonAgentBanquier, $comparison = null)
    {
        if ($commonAgentBanquier instanceof CommonAgentBanquier) {
            return $this
                ->addUsingAlias(CommonCautionDemandePeer::ID_SIGNATAIRE1, $commonAgentBanquier->getId(), $comparison);
        } elseif ($commonAgentBanquier instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonCautionDemandePeer::ID_SIGNATAIRE1, $commonAgentBanquier->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonAgentBanquierRelatedByIdSignataire1() only accepts arguments of type CommonAgentBanquier or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonAgentBanquierRelatedByIdSignataire1 relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function joinCommonAgentBanquierRelatedByIdSignataire1($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonAgentBanquierRelatedByIdSignataire1');

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
            $this->addJoinObject($join, 'CommonAgentBanquierRelatedByIdSignataire1');
        }

        return $this;
    }

    /**
     * Use the CommonAgentBanquierRelatedByIdSignataire1 relation CommonAgentBanquier object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonAgentBanquierQuery A secondary query class using the current class as primary query
     */
    public function useCommonAgentBanquierRelatedByIdSignataire1Query($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonAgentBanquierRelatedByIdSignataire1($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonAgentBanquierRelatedByIdSignataire1', 'CommonAgentBanquierQuery');
    }

    /**
     * Filter the query by a related CommonAgentBanquier object
     *
     * @param   CommonAgentBanquier|PropelObjectCollection $commonAgentBanquier The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonCautionDemandeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAgentBanquierRelatedByIdSignataire2($commonAgentBanquier, $comparison = null)
    {
        if ($commonAgentBanquier instanceof CommonAgentBanquier) {
            return $this
                ->addUsingAlias(CommonCautionDemandePeer::ID_SIGNATAIRE2, $commonAgentBanquier->getId(), $comparison);
        } elseif ($commonAgentBanquier instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonCautionDemandePeer::ID_SIGNATAIRE2, $commonAgentBanquier->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonAgentBanquierRelatedByIdSignataire2() only accepts arguments of type CommonAgentBanquier or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonAgentBanquierRelatedByIdSignataire2 relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function joinCommonAgentBanquierRelatedByIdSignataire2($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonAgentBanquierRelatedByIdSignataire2');

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
            $this->addJoinObject($join, 'CommonAgentBanquierRelatedByIdSignataire2');
        }

        return $this;
    }

    /**
     * Use the CommonAgentBanquierRelatedByIdSignataire2 relation CommonAgentBanquier object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonAgentBanquierQuery A secondary query class using the current class as primary query
     */
    public function useCommonAgentBanquierRelatedByIdSignataire2Query($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonAgentBanquierRelatedByIdSignataire2($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonAgentBanquierRelatedByIdSignataire2', 'CommonAgentBanquierQuery');
    }

    /**
     * Filter the query by a related CommonCautionRestitution object
     *
     * @param   CommonCautionRestitution|PropelObjectCollection $commonCautionRestitution  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonCautionDemandeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonCautionRestitution($commonCautionRestitution, $comparison = null)
    {
        if ($commonCautionRestitution instanceof CommonCautionRestitution) {
            return $this
                ->addUsingAlias(CommonCautionDemandePeer::ID, $commonCautionRestitution->getIdCautionDemande(), $comparison);
        } elseif ($commonCautionRestitution instanceof PropelObjectCollection) {
            return $this
                ->useCommonCautionRestitutionQuery()
                ->filterByPrimaryKeys($commonCautionRestitution->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonCautionRestitution() only accepts arguments of type CommonCautionRestitution or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonCautionRestitution relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function joinCommonCautionRestitution($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonCautionRestitution');

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
            $this->addJoinObject($join, 'CommonCautionRestitution');
        }

        return $this;
    }

    /**
     * Use the CommonCautionRestitution relation CommonCautionRestitution object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonCautionRestitutionQuery A secondary query class using the current class as primary query
     */
    public function useCommonCautionRestitutionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonCautionRestitution($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonCautionRestitution', 'CommonCautionRestitutionQuery');
    }

    /**
     * Filter the query by a related CommonCautionSignataireDemande object
     *
     * @param   CommonCautionSignataireDemande|PropelObjectCollection $commonCautionSignataireDemande  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonCautionDemandeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonCautionSignataireDemande($commonCautionSignataireDemande, $comparison = null)
    {
        if ($commonCautionSignataireDemande instanceof CommonCautionSignataireDemande) {
            return $this
                ->addUsingAlias(CommonCautionDemandePeer::ID, $commonCautionSignataireDemande->getIdDemande(), $comparison);
        } elseif ($commonCautionSignataireDemande instanceof PropelObjectCollection) {
            return $this
                ->useCommonCautionSignataireDemandeQuery()
                ->filterByPrimaryKeys($commonCautionSignataireDemande->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonCautionSignataireDemande() only accepts arguments of type CommonCautionSignataireDemande or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonCautionSignataireDemande relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function joinCommonCautionSignataireDemande($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonCautionSignataireDemande');

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
            $this->addJoinObject($join, 'CommonCautionSignataireDemande');
        }

        return $this;
    }

    /**
     * Use the CommonCautionSignataireDemande relation CommonCautionSignataireDemande object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonCautionSignataireDemandeQuery A secondary query class using the current class as primary query
     */
    public function useCommonCautionSignataireDemandeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonCautionSignataireDemande($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonCautionSignataireDemande', 'CommonCautionSignataireDemandeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCautionDemande $commonCautionDemande Object to remove from the list of results
     *
     * @return CommonCautionDemandeQuery The current query, for fluid interface
     */
    public function prune($commonCautionDemande = null)
    {
        if ($commonCautionDemande) {
            $this->addUsingAlias(CommonCautionDemandePeer::ID, $commonCautionDemande->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
