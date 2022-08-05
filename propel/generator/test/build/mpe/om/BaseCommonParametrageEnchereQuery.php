<?php


/**
 * Base class that represents a query for the 'Parametrage_Enchere' table.
 *
 * 
 *
 * @method CommonParametrageEnchereQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonParametrageEnchereQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonParametrageEnchereQuery orderByRefconsultation($order = Criteria::ASC) Order by the refConsultation column
 * @method CommonParametrageEnchereQuery orderByIdentiteeassociee($order = Criteria::ASC) Order by the idEntiteeAssociee column
 * @method CommonParametrageEnchereQuery orderByReferenceutilisateur($order = Criteria::ASC) Order by the referenceUtilisateur column
 * @method CommonParametrageEnchereQuery orderByAuteur($order = Criteria::ASC) Order by the auteur column
 * @method CommonParametrageEnchereQuery orderByIdlot($order = Criteria::ASC) Order by the idLot column
 * @method CommonParametrageEnchereQuery orderByObjet($order = Criteria::ASC) Order by the objet column
 * @method CommonParametrageEnchereQuery orderByDatedebut($order = Criteria::ASC) Order by the dateDebut column
 * @method CommonParametrageEnchereQuery orderByDatefin($order = Criteria::ASC) Order by the dateFin column
 * @method CommonParametrageEnchereQuery orderByDatesuspension($order = Criteria::ASC) Order by the dateSuspension column
 * @method CommonParametrageEnchereQuery orderByDelaiprolongation($order = Criteria::ASC) Order by the delaiProlongation column
 * @method CommonParametrageEnchereQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 * @method CommonParametrageEnchereQuery orderByMeilleureenchereobligatoire($order = Criteria::ASC) Order by the meilleureEnchereObligatoire column
 * @method CommonParametrageEnchereQuery orderByTypebaremenetc($order = Criteria::ASC) Order by the typeBaremeNETC column
 * @method CommonParametrageEnchereQuery orderByTypebaremeenchereglobale($order = Criteria::ASC) Order by the typeBaremeEnchereGlobale column
 * @method CommonParametrageEnchereQuery orderByMeilleurnotehaute($order = Criteria::ASC) Order by the meilleurNoteHaute column
 * @method CommonParametrageEnchereQuery orderByNbrcandidatsvisible($order = Criteria::ASC) Order by the nbrCandidatsVisible column
 * @method CommonParametrageEnchereQuery orderByListecandidatsvisible($order = Criteria::ASC) Order by the listeCandidatsVisible column
 * @method CommonParametrageEnchereQuery orderByRangvisible($order = Criteria::ASC) Order by the rangVisible column
 * @method CommonParametrageEnchereQuery orderByMeilleureoffrevisible($order = Criteria::ASC) Order by the meilleureOffreVisible column
 * @method CommonParametrageEnchereQuery orderByMontantreserve($order = Criteria::ASC) Order by the montantReserve column
 * @method CommonParametrageEnchereQuery orderByNotemaxbaremerelatif($order = Criteria::ASC) Order by the noteMaxBaremeRelatif column
 * @method CommonParametrageEnchereQuery orderByCoeffa($order = Criteria::ASC) Order by the coeffA column
 * @method CommonParametrageEnchereQuery orderByCoeffb($order = Criteria::ASC) Order by the coeffB column
 * @method CommonParametrageEnchereQuery orderByCoeffc($order = Criteria::ASC) Order by the coeffC column
 * @method CommonParametrageEnchereQuery orderByMail($order = Criteria::ASC) Order by the mail column
 * @method CommonParametrageEnchereQuery orderByNoteEntreprises($order = Criteria::ASC) Order by the note_entreprises column
 *
 * @method CommonParametrageEnchereQuery groupById() Group by the id column
 * @method CommonParametrageEnchereQuery groupByOrganisme() Group by the organisme column
 * @method CommonParametrageEnchereQuery groupByRefconsultation() Group by the refConsultation column
 * @method CommonParametrageEnchereQuery groupByIdentiteeassociee() Group by the idEntiteeAssociee column
 * @method CommonParametrageEnchereQuery groupByReferenceutilisateur() Group by the referenceUtilisateur column
 * @method CommonParametrageEnchereQuery groupByAuteur() Group by the auteur column
 * @method CommonParametrageEnchereQuery groupByIdlot() Group by the idLot column
 * @method CommonParametrageEnchereQuery groupByObjet() Group by the objet column
 * @method CommonParametrageEnchereQuery groupByDatedebut() Group by the dateDebut column
 * @method CommonParametrageEnchereQuery groupByDatefin() Group by the dateFin column
 * @method CommonParametrageEnchereQuery groupByDatesuspension() Group by the dateSuspension column
 * @method CommonParametrageEnchereQuery groupByDelaiprolongation() Group by the delaiProlongation column
 * @method CommonParametrageEnchereQuery groupByCommentaire() Group by the commentaire column
 * @method CommonParametrageEnchereQuery groupByMeilleureenchereobligatoire() Group by the meilleureEnchereObligatoire column
 * @method CommonParametrageEnchereQuery groupByTypebaremenetc() Group by the typeBaremeNETC column
 * @method CommonParametrageEnchereQuery groupByTypebaremeenchereglobale() Group by the typeBaremeEnchereGlobale column
 * @method CommonParametrageEnchereQuery groupByMeilleurnotehaute() Group by the meilleurNoteHaute column
 * @method CommonParametrageEnchereQuery groupByNbrcandidatsvisible() Group by the nbrCandidatsVisible column
 * @method CommonParametrageEnchereQuery groupByListecandidatsvisible() Group by the listeCandidatsVisible column
 * @method CommonParametrageEnchereQuery groupByRangvisible() Group by the rangVisible column
 * @method CommonParametrageEnchereQuery groupByMeilleureoffrevisible() Group by the meilleureOffreVisible column
 * @method CommonParametrageEnchereQuery groupByMontantreserve() Group by the montantReserve column
 * @method CommonParametrageEnchereQuery groupByNotemaxbaremerelatif() Group by the noteMaxBaremeRelatif column
 * @method CommonParametrageEnchereQuery groupByCoeffa() Group by the coeffA column
 * @method CommonParametrageEnchereQuery groupByCoeffb() Group by the coeffB column
 * @method CommonParametrageEnchereQuery groupByCoeffc() Group by the coeffC column
 * @method CommonParametrageEnchereQuery groupByMail() Group by the mail column
 * @method CommonParametrageEnchereQuery groupByNoteEntreprises() Group by the note_entreprises column
 *
 * @method CommonParametrageEnchereQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonParametrageEnchereQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonParametrageEnchereQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonParametrageEnchereQuery leftJoinCommonOrganisme($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonOrganisme relation
 * @method CommonParametrageEnchereQuery rightJoinCommonOrganisme($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonOrganisme relation
 * @method CommonParametrageEnchereQuery innerJoinCommonOrganisme($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonOrganisme relation
 *
 * @method CommonParametrageEnchereQuery leftJoinCommonParametrageEnchereReferenceRelatedByIdenchere($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonParametrageEnchereReferenceRelatedByIdenchere relation
 * @method CommonParametrageEnchereQuery rightJoinCommonParametrageEnchereReferenceRelatedByIdenchere($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonParametrageEnchereReferenceRelatedByIdenchere relation
 * @method CommonParametrageEnchereQuery innerJoinCommonParametrageEnchereReferenceRelatedByIdenchere($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonParametrageEnchereReferenceRelatedByIdenchere relation
 *
 * @method CommonParametrageEnchereQuery leftJoinCommonParametrageEnchereReferenceRelatedByIdenchereOrganisme($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonParametrageEnchereReferenceRelatedByIdenchereOrganisme relation
 * @method CommonParametrageEnchereQuery rightJoinCommonParametrageEnchereReferenceRelatedByIdenchereOrganisme($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonParametrageEnchereReferenceRelatedByIdenchereOrganisme relation
 * @method CommonParametrageEnchereQuery innerJoinCommonParametrageEnchereReferenceRelatedByIdenchereOrganisme($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonParametrageEnchereReferenceRelatedByIdenchereOrganisme relation
 *
 * @method CommonParametrageEnchereQuery leftJoinCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere relation
 * @method CommonParametrageEnchereQuery rightJoinCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere relation
 * @method CommonParametrageEnchereQuery innerJoinCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere relation
 *
 * @method CommonParametrageEnchereQuery leftJoinCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme relation
 * @method CommonParametrageEnchereQuery rightJoinCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme relation
 * @method CommonParametrageEnchereQuery innerJoinCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme relation
 *
 * @method CommonParametrageEnchere findOne(PropelPDO $con = null) Return the first CommonParametrageEnchere matching the query
 * @method CommonParametrageEnchere findOneOrCreate(PropelPDO $con = null) Return the first CommonParametrageEnchere matching the query, or a new CommonParametrageEnchere object populated from the query conditions when no match is found
 *
 * @method CommonParametrageEnchere findOneById(int $id) Return the first CommonParametrageEnchere filtered by the id column
 * @method CommonParametrageEnchere findOneByOrganisme(string $organisme) Return the first CommonParametrageEnchere filtered by the organisme column
 * @method CommonParametrageEnchere findOneByRefconsultation(int $refConsultation) Return the first CommonParametrageEnchere filtered by the refConsultation column
 * @method CommonParametrageEnchere findOneByIdentiteeassociee(int $idEntiteeAssociee) Return the first CommonParametrageEnchere filtered by the idEntiteeAssociee column
 * @method CommonParametrageEnchere findOneByReferenceutilisateur(string $referenceUtilisateur) Return the first CommonParametrageEnchere filtered by the referenceUtilisateur column
 * @method CommonParametrageEnchere findOneByAuteur(string $auteur) Return the first CommonParametrageEnchere filtered by the auteur column
 * @method CommonParametrageEnchere findOneByIdlot(int $idLot) Return the first CommonParametrageEnchere filtered by the idLot column
 * @method CommonParametrageEnchere findOneByObjet(string $objet) Return the first CommonParametrageEnchere filtered by the objet column
 * @method CommonParametrageEnchere findOneByDatedebut(string $dateDebut) Return the first CommonParametrageEnchere filtered by the dateDebut column
 * @method CommonParametrageEnchere findOneByDatefin(string $dateFin) Return the first CommonParametrageEnchere filtered by the dateFin column
 * @method CommonParametrageEnchere findOneByDatesuspension(string $dateSuspension) Return the first CommonParametrageEnchere filtered by the dateSuspension column
 * @method CommonParametrageEnchere findOneByDelaiprolongation(int $delaiProlongation) Return the first CommonParametrageEnchere filtered by the delaiProlongation column
 * @method CommonParametrageEnchere findOneByCommentaire(string $commentaire) Return the first CommonParametrageEnchere filtered by the commentaire column
 * @method CommonParametrageEnchere findOneByMeilleureenchereobligatoire(string $meilleureEnchereObligatoire) Return the first CommonParametrageEnchere filtered by the meilleureEnchereObligatoire column
 * @method CommonParametrageEnchere findOneByTypebaremenetc(string $typeBaremeNETC) Return the first CommonParametrageEnchere filtered by the typeBaremeNETC column
 * @method CommonParametrageEnchere findOneByTypebaremeenchereglobale(string $typeBaremeEnchereGlobale) Return the first CommonParametrageEnchere filtered by the typeBaremeEnchereGlobale column
 * @method CommonParametrageEnchere findOneByMeilleurnotehaute(string $meilleurNoteHaute) Return the first CommonParametrageEnchere filtered by the meilleurNoteHaute column
 * @method CommonParametrageEnchere findOneByNbrcandidatsvisible(string $nbrCandidatsVisible) Return the first CommonParametrageEnchere filtered by the nbrCandidatsVisible column
 * @method CommonParametrageEnchere findOneByListecandidatsvisible(string $listeCandidatsVisible) Return the first CommonParametrageEnchere filtered by the listeCandidatsVisible column
 * @method CommonParametrageEnchere findOneByRangvisible(string $rangVisible) Return the first CommonParametrageEnchere filtered by the rangVisible column
 * @method CommonParametrageEnchere findOneByMeilleureoffrevisible(string $meilleureOffreVisible) Return the first CommonParametrageEnchere filtered by the meilleureOffreVisible column
 * @method CommonParametrageEnchere findOneByMontantreserve(double $montantReserve) Return the first CommonParametrageEnchere filtered by the montantReserve column
 * @method CommonParametrageEnchere findOneByNotemaxbaremerelatif(double $noteMaxBaremeRelatif) Return the first CommonParametrageEnchere filtered by the noteMaxBaremeRelatif column
 * @method CommonParametrageEnchere findOneByCoeffa(double $coeffA) Return the first CommonParametrageEnchere filtered by the coeffA column
 * @method CommonParametrageEnchere findOneByCoeffb(double $coeffB) Return the first CommonParametrageEnchere filtered by the coeffB column
 * @method CommonParametrageEnchere findOneByCoeffc(double $coeffC) Return the first CommonParametrageEnchere filtered by the coeffC column
 * @method CommonParametrageEnchere findOneByMail(string $mail) Return the first CommonParametrageEnchere filtered by the mail column
 * @method CommonParametrageEnchere findOneByNoteEntreprises(string $note_entreprises) Return the first CommonParametrageEnchere filtered by the note_entreprises column
 *
 * @method array findById(int $id) Return CommonParametrageEnchere objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonParametrageEnchere objects filtered by the organisme column
 * @method array findByRefconsultation(int $refConsultation) Return CommonParametrageEnchere objects filtered by the refConsultation column
 * @method array findByIdentiteeassociee(int $idEntiteeAssociee) Return CommonParametrageEnchere objects filtered by the idEntiteeAssociee column
 * @method array findByReferenceutilisateur(string $referenceUtilisateur) Return CommonParametrageEnchere objects filtered by the referenceUtilisateur column
 * @method array findByAuteur(string $auteur) Return CommonParametrageEnchere objects filtered by the auteur column
 * @method array findByIdlot(int $idLot) Return CommonParametrageEnchere objects filtered by the idLot column
 * @method array findByObjet(string $objet) Return CommonParametrageEnchere objects filtered by the objet column
 * @method array findByDatedebut(string $dateDebut) Return CommonParametrageEnchere objects filtered by the dateDebut column
 * @method array findByDatefin(string $dateFin) Return CommonParametrageEnchere objects filtered by the dateFin column
 * @method array findByDatesuspension(string $dateSuspension) Return CommonParametrageEnchere objects filtered by the dateSuspension column
 * @method array findByDelaiprolongation(int $delaiProlongation) Return CommonParametrageEnchere objects filtered by the delaiProlongation column
 * @method array findByCommentaire(string $commentaire) Return CommonParametrageEnchere objects filtered by the commentaire column
 * @method array findByMeilleureenchereobligatoire(string $meilleureEnchereObligatoire) Return CommonParametrageEnchere objects filtered by the meilleureEnchereObligatoire column
 * @method array findByTypebaremenetc(string $typeBaremeNETC) Return CommonParametrageEnchere objects filtered by the typeBaremeNETC column
 * @method array findByTypebaremeenchereglobale(string $typeBaremeEnchereGlobale) Return CommonParametrageEnchere objects filtered by the typeBaremeEnchereGlobale column
 * @method array findByMeilleurnotehaute(string $meilleurNoteHaute) Return CommonParametrageEnchere objects filtered by the meilleurNoteHaute column
 * @method array findByNbrcandidatsvisible(string $nbrCandidatsVisible) Return CommonParametrageEnchere objects filtered by the nbrCandidatsVisible column
 * @method array findByListecandidatsvisible(string $listeCandidatsVisible) Return CommonParametrageEnchere objects filtered by the listeCandidatsVisible column
 * @method array findByRangvisible(string $rangVisible) Return CommonParametrageEnchere objects filtered by the rangVisible column
 * @method array findByMeilleureoffrevisible(string $meilleureOffreVisible) Return CommonParametrageEnchere objects filtered by the meilleureOffreVisible column
 * @method array findByMontantreserve(double $montantReserve) Return CommonParametrageEnchere objects filtered by the montantReserve column
 * @method array findByNotemaxbaremerelatif(double $noteMaxBaremeRelatif) Return CommonParametrageEnchere objects filtered by the noteMaxBaremeRelatif column
 * @method array findByCoeffa(double $coeffA) Return CommonParametrageEnchere objects filtered by the coeffA column
 * @method array findByCoeffb(double $coeffB) Return CommonParametrageEnchere objects filtered by the coeffB column
 * @method array findByCoeffc(double $coeffC) Return CommonParametrageEnchere objects filtered by the coeffC column
 * @method array findByMail(string $mail) Return CommonParametrageEnchere objects filtered by the mail column
 * @method array findByNoteEntreprises(string $note_entreprises) Return CommonParametrageEnchere objects filtered by the note_entreprises column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonParametrageEnchereQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonParametrageEnchereQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonParametrageEnchere', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonParametrageEnchereQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonParametrageEnchereQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonParametrageEnchereQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonParametrageEnchereQuery) {
            return $criteria;
        }
        $query = new CommonParametrageEnchereQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonParametrageEnchere|CommonParametrageEnchere[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonParametrageEncherePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonParametrageEncherePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonParametrageEnchere A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `refConsultation`, `idEntiteeAssociee`, `referenceUtilisateur`, `auteur`, `idLot`, `objet`, `dateDebut`, `dateFin`, `dateSuspension`, `delaiProlongation`, `commentaire`, `meilleureEnchereObligatoire`, `typeBaremeNETC`, `typeBaremeEnchereGlobale`, `meilleurNoteHaute`, `nbrCandidatsVisible`, `listeCandidatsVisible`, `rangVisible`, `meilleureOffreVisible`, `montantReserve`, `noteMaxBaremeRelatif`, `coeffA`, `coeffB`, `coeffC`, `mail`, `note_entreprises` FROM `Parametrage_Enchere` WHERE `id` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonParametrageEnchere();
            $obj->hydrate($row);
            CommonParametrageEncherePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonParametrageEnchere|CommonParametrageEnchere[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonParametrageEnchere[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonParametrageEncherePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonParametrageEncherePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonParametrageEncherePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonParametrageEncherePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the refConsultation column
     *
     * Example usage:
     * <code>
     * $query->filterByRefconsultation(1234); // WHERE refConsultation = 1234
     * $query->filterByRefconsultation(array(12, 34)); // WHERE refConsultation IN (12, 34)
     * $query->filterByRefconsultation(array('min' => 12)); // WHERE refConsultation >= 12
     * $query->filterByRefconsultation(array('max' => 12)); // WHERE refConsultation <= 12
     * </code>
     *
     * @param     mixed $refconsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByRefconsultation($refconsultation = null, $comparison = null)
    {
        if (is_array($refconsultation)) {
            $useMinMax = false;
            if (isset($refconsultation['min'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::REFCONSULTATION, $refconsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refconsultation['max'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::REFCONSULTATION, $refconsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::REFCONSULTATION, $refconsultation, $comparison);
    }

    /**
     * Filter the query on the idEntiteeAssociee column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentiteeassociee(1234); // WHERE idEntiteeAssociee = 1234
     * $query->filterByIdentiteeassociee(array(12, 34)); // WHERE idEntiteeAssociee IN (12, 34)
     * $query->filterByIdentiteeassociee(array('min' => 12)); // WHERE idEntiteeAssociee >= 12
     * $query->filterByIdentiteeassociee(array('max' => 12)); // WHERE idEntiteeAssociee <= 12
     * </code>
     *
     * @param     mixed $identiteeassociee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByIdentiteeassociee($identiteeassociee = null, $comparison = null)
    {
        if (is_array($identiteeassociee)) {
            $useMinMax = false;
            if (isset($identiteeassociee['min'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::IDENTITEEASSOCIEE, $identiteeassociee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($identiteeassociee['max'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::IDENTITEEASSOCIEE, $identiteeassociee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::IDENTITEEASSOCIEE, $identiteeassociee, $comparison);
    }

    /**
     * Filter the query on the referenceUtilisateur column
     *
     * Example usage:
     * <code>
     * $query->filterByReferenceutilisateur('fooValue');   // WHERE referenceUtilisateur = 'fooValue'
     * $query->filterByReferenceutilisateur('%fooValue%'); // WHERE referenceUtilisateur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referenceutilisateur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByReferenceutilisateur($referenceutilisateur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referenceutilisateur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $referenceutilisateur)) {
                $referenceutilisateur = str_replace('*', '%', $referenceutilisateur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::REFERENCEUTILISATEUR, $referenceutilisateur, $comparison);
    }

    /**
     * Filter the query on the auteur column
     *
     * Example usage:
     * <code>
     * $query->filterByAuteur('fooValue');   // WHERE auteur = 'fooValue'
     * $query->filterByAuteur('%fooValue%'); // WHERE auteur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $auteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByAuteur($auteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($auteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $auteur)) {
                $auteur = str_replace('*', '%', $auteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::AUTEUR, $auteur, $comparison);
    }

    /**
     * Filter the query on the idLot column
     *
     * Example usage:
     * <code>
     * $query->filterByIdlot(1234); // WHERE idLot = 1234
     * $query->filterByIdlot(array(12, 34)); // WHERE idLot IN (12, 34)
     * $query->filterByIdlot(array('min' => 12)); // WHERE idLot >= 12
     * $query->filterByIdlot(array('max' => 12)); // WHERE idLot <= 12
     * </code>
     *
     * @param     mixed $idlot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByIdlot($idlot = null, $comparison = null)
    {
        if (is_array($idlot)) {
            $useMinMax = false;
            if (isset($idlot['min'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::IDLOT, $idlot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idlot['max'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::IDLOT, $idlot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::IDLOT, $idlot, $comparison);
    }

    /**
     * Filter the query on the objet column
     *
     * Example usage:
     * <code>
     * $query->filterByObjet('fooValue');   // WHERE objet = 'fooValue'
     * $query->filterByObjet('%fooValue%'); // WHERE objet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByObjet($objet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objet)) {
                $objet = str_replace('*', '%', $objet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::OBJET, $objet, $comparison);
    }

    /**
     * Filter the query on the dateDebut column
     *
     * Example usage:
     * <code>
     * $query->filterByDatedebut('2011-03-14'); // WHERE dateDebut = '2011-03-14'
     * $query->filterByDatedebut('now'); // WHERE dateDebut = '2011-03-14'
     * $query->filterByDatedebut(array('max' => 'yesterday')); // WHERE dateDebut > '2011-03-13'
     * </code>
     *
     * @param     mixed $datedebut The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByDatedebut($datedebut = null, $comparison = null)
    {
        if (is_array($datedebut)) {
            $useMinMax = false;
            if (isset($datedebut['min'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::DATEDEBUT, $datedebut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datedebut['max'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::DATEDEBUT, $datedebut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::DATEDEBUT, $datedebut, $comparison);
    }

    /**
     * Filter the query on the dateFin column
     *
     * Example usage:
     * <code>
     * $query->filterByDatefin('2011-03-14'); // WHERE dateFin = '2011-03-14'
     * $query->filterByDatefin('now'); // WHERE dateFin = '2011-03-14'
     * $query->filterByDatefin(array('max' => 'yesterday')); // WHERE dateFin > '2011-03-13'
     * </code>
     *
     * @param     mixed $datefin The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByDatefin($datefin = null, $comparison = null)
    {
        if (is_array($datefin)) {
            $useMinMax = false;
            if (isset($datefin['min'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::DATEFIN, $datefin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datefin['max'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::DATEFIN, $datefin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::DATEFIN, $datefin, $comparison);
    }

    /**
     * Filter the query on the dateSuspension column
     *
     * Example usage:
     * <code>
     * $query->filterByDatesuspension('2011-03-14'); // WHERE dateSuspension = '2011-03-14'
     * $query->filterByDatesuspension('now'); // WHERE dateSuspension = '2011-03-14'
     * $query->filterByDatesuspension(array('max' => 'yesterday')); // WHERE dateSuspension > '2011-03-13'
     * </code>
     *
     * @param     mixed $datesuspension The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByDatesuspension($datesuspension = null, $comparison = null)
    {
        if (is_array($datesuspension)) {
            $useMinMax = false;
            if (isset($datesuspension['min'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::DATESUSPENSION, $datesuspension['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datesuspension['max'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::DATESUSPENSION, $datesuspension['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::DATESUSPENSION, $datesuspension, $comparison);
    }

    /**
     * Filter the query on the delaiProlongation column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiprolongation(1234); // WHERE delaiProlongation = 1234
     * $query->filterByDelaiprolongation(array(12, 34)); // WHERE delaiProlongation IN (12, 34)
     * $query->filterByDelaiprolongation(array('min' => 12)); // WHERE delaiProlongation >= 12
     * $query->filterByDelaiprolongation(array('max' => 12)); // WHERE delaiProlongation <= 12
     * </code>
     *
     * @param     mixed $delaiprolongation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByDelaiprolongation($delaiprolongation = null, $comparison = null)
    {
        if (is_array($delaiprolongation)) {
            $useMinMax = false;
            if (isset($delaiprolongation['min'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::DELAIPROLONGATION, $delaiprolongation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiprolongation['max'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::DELAIPROLONGATION, $delaiprolongation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::DELAIPROLONGATION, $delaiprolongation, $comparison);
    }

    /**
     * Filter the query on the commentaire column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaire('fooValue');   // WHERE commentaire = 'fooValue'
     * $query->filterByCommentaire('%fooValue%'); // WHERE commentaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByCommentaire($commentaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaire)) {
                $commentaire = str_replace('*', '%', $commentaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::COMMENTAIRE, $commentaire, $comparison);
    }

    /**
     * Filter the query on the meilleureEnchereObligatoire column
     *
     * Example usage:
     * <code>
     * $query->filterByMeilleureenchereobligatoire('fooValue');   // WHERE meilleureEnchereObligatoire = 'fooValue'
     * $query->filterByMeilleureenchereobligatoire('%fooValue%'); // WHERE meilleureEnchereObligatoire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $meilleureenchereobligatoire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByMeilleureenchereobligatoire($meilleureenchereobligatoire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($meilleureenchereobligatoire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $meilleureenchereobligatoire)) {
                $meilleureenchereobligatoire = str_replace('*', '%', $meilleureenchereobligatoire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::MEILLEUREENCHEREOBLIGATOIRE, $meilleureenchereobligatoire, $comparison);
    }

    /**
     * Filter the query on the typeBaremeNETC column
     *
     * Example usage:
     * <code>
     * $query->filterByTypebaremenetc('fooValue');   // WHERE typeBaremeNETC = 'fooValue'
     * $query->filterByTypebaremenetc('%fooValue%'); // WHERE typeBaremeNETC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typebaremenetc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByTypebaremenetc($typebaremenetc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typebaremenetc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typebaremenetc)) {
                $typebaremenetc = str_replace('*', '%', $typebaremenetc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::TYPEBAREMENETC, $typebaremenetc, $comparison);
    }

    /**
     * Filter the query on the typeBaremeEnchereGlobale column
     *
     * Example usage:
     * <code>
     * $query->filterByTypebaremeenchereglobale('fooValue');   // WHERE typeBaremeEnchereGlobale = 'fooValue'
     * $query->filterByTypebaremeenchereglobale('%fooValue%'); // WHERE typeBaremeEnchereGlobale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typebaremeenchereglobale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByTypebaremeenchereglobale($typebaremeenchereglobale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typebaremeenchereglobale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typebaremeenchereglobale)) {
                $typebaremeenchereglobale = str_replace('*', '%', $typebaremeenchereglobale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::TYPEBAREMEENCHEREGLOBALE, $typebaremeenchereglobale, $comparison);
    }

    /**
     * Filter the query on the meilleurNoteHaute column
     *
     * Example usage:
     * <code>
     * $query->filterByMeilleurnotehaute('fooValue');   // WHERE meilleurNoteHaute = 'fooValue'
     * $query->filterByMeilleurnotehaute('%fooValue%'); // WHERE meilleurNoteHaute LIKE '%fooValue%'
     * </code>
     *
     * @param     string $meilleurnotehaute The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByMeilleurnotehaute($meilleurnotehaute = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($meilleurnotehaute)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $meilleurnotehaute)) {
                $meilleurnotehaute = str_replace('*', '%', $meilleurnotehaute);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::MEILLEURNOTEHAUTE, $meilleurnotehaute, $comparison);
    }

    /**
     * Filter the query on the nbrCandidatsVisible column
     *
     * Example usage:
     * <code>
     * $query->filterByNbrcandidatsvisible('fooValue');   // WHERE nbrCandidatsVisible = 'fooValue'
     * $query->filterByNbrcandidatsvisible('%fooValue%'); // WHERE nbrCandidatsVisible LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nbrcandidatsvisible The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByNbrcandidatsvisible($nbrcandidatsvisible = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nbrcandidatsvisible)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nbrcandidatsvisible)) {
                $nbrcandidatsvisible = str_replace('*', '%', $nbrcandidatsvisible);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::NBRCANDIDATSVISIBLE, $nbrcandidatsvisible, $comparison);
    }

    /**
     * Filter the query on the listeCandidatsVisible column
     *
     * Example usage:
     * <code>
     * $query->filterByListecandidatsvisible('fooValue');   // WHERE listeCandidatsVisible = 'fooValue'
     * $query->filterByListecandidatsvisible('%fooValue%'); // WHERE listeCandidatsVisible LIKE '%fooValue%'
     * </code>
     *
     * @param     string $listecandidatsvisible The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByListecandidatsvisible($listecandidatsvisible = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($listecandidatsvisible)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $listecandidatsvisible)) {
                $listecandidatsvisible = str_replace('*', '%', $listecandidatsvisible);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::LISTECANDIDATSVISIBLE, $listecandidatsvisible, $comparison);
    }

    /**
     * Filter the query on the rangVisible column
     *
     * Example usage:
     * <code>
     * $query->filterByRangvisible('fooValue');   // WHERE rangVisible = 'fooValue'
     * $query->filterByRangvisible('%fooValue%'); // WHERE rangVisible LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rangvisible The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByRangvisible($rangvisible = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rangvisible)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rangvisible)) {
                $rangvisible = str_replace('*', '%', $rangvisible);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::RANGVISIBLE, $rangvisible, $comparison);
    }

    /**
     * Filter the query on the meilleureOffreVisible column
     *
     * Example usage:
     * <code>
     * $query->filterByMeilleureoffrevisible('fooValue');   // WHERE meilleureOffreVisible = 'fooValue'
     * $query->filterByMeilleureoffrevisible('%fooValue%'); // WHERE meilleureOffreVisible LIKE '%fooValue%'
     * </code>
     *
     * @param     string $meilleureoffrevisible The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByMeilleureoffrevisible($meilleureoffrevisible = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($meilleureoffrevisible)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $meilleureoffrevisible)) {
                $meilleureoffrevisible = str_replace('*', '%', $meilleureoffrevisible);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::MEILLEUREOFFREVISIBLE, $meilleureoffrevisible, $comparison);
    }

    /**
     * Filter the query on the montantReserve column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantreserve(1234); // WHERE montantReserve = 1234
     * $query->filterByMontantreserve(array(12, 34)); // WHERE montantReserve IN (12, 34)
     * $query->filterByMontantreserve(array('min' => 12)); // WHERE montantReserve >= 12
     * $query->filterByMontantreserve(array('max' => 12)); // WHERE montantReserve <= 12
     * </code>
     *
     * @param     mixed $montantreserve The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByMontantreserve($montantreserve = null, $comparison = null)
    {
        if (is_array($montantreserve)) {
            $useMinMax = false;
            if (isset($montantreserve['min'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::MONTANTRESERVE, $montantreserve['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantreserve['max'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::MONTANTRESERVE, $montantreserve['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::MONTANTRESERVE, $montantreserve, $comparison);
    }

    /**
     * Filter the query on the noteMaxBaremeRelatif column
     *
     * Example usage:
     * <code>
     * $query->filterByNotemaxbaremerelatif(1234); // WHERE noteMaxBaremeRelatif = 1234
     * $query->filterByNotemaxbaremerelatif(array(12, 34)); // WHERE noteMaxBaremeRelatif IN (12, 34)
     * $query->filterByNotemaxbaremerelatif(array('min' => 12)); // WHERE noteMaxBaremeRelatif >= 12
     * $query->filterByNotemaxbaremerelatif(array('max' => 12)); // WHERE noteMaxBaremeRelatif <= 12
     * </code>
     *
     * @param     mixed $notemaxbaremerelatif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByNotemaxbaremerelatif($notemaxbaremerelatif = null, $comparison = null)
    {
        if (is_array($notemaxbaremerelatif)) {
            $useMinMax = false;
            if (isset($notemaxbaremerelatif['min'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::NOTEMAXBAREMERELATIF, $notemaxbaremerelatif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($notemaxbaremerelatif['max'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::NOTEMAXBAREMERELATIF, $notemaxbaremerelatif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::NOTEMAXBAREMERELATIF, $notemaxbaremerelatif, $comparison);
    }

    /**
     * Filter the query on the coeffA column
     *
     * Example usage:
     * <code>
     * $query->filterByCoeffa(1234); // WHERE coeffA = 1234
     * $query->filterByCoeffa(array(12, 34)); // WHERE coeffA IN (12, 34)
     * $query->filterByCoeffa(array('min' => 12)); // WHERE coeffA >= 12
     * $query->filterByCoeffa(array('max' => 12)); // WHERE coeffA <= 12
     * </code>
     *
     * @param     mixed $coeffa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByCoeffa($coeffa = null, $comparison = null)
    {
        if (is_array($coeffa)) {
            $useMinMax = false;
            if (isset($coeffa['min'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::COEFFA, $coeffa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coeffa['max'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::COEFFA, $coeffa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::COEFFA, $coeffa, $comparison);
    }

    /**
     * Filter the query on the coeffB column
     *
     * Example usage:
     * <code>
     * $query->filterByCoeffb(1234); // WHERE coeffB = 1234
     * $query->filterByCoeffb(array(12, 34)); // WHERE coeffB IN (12, 34)
     * $query->filterByCoeffb(array('min' => 12)); // WHERE coeffB >= 12
     * $query->filterByCoeffb(array('max' => 12)); // WHERE coeffB <= 12
     * </code>
     *
     * @param     mixed $coeffb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByCoeffb($coeffb = null, $comparison = null)
    {
        if (is_array($coeffb)) {
            $useMinMax = false;
            if (isset($coeffb['min'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::COEFFB, $coeffb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coeffb['max'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::COEFFB, $coeffb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::COEFFB, $coeffb, $comparison);
    }

    /**
     * Filter the query on the coeffC column
     *
     * Example usage:
     * <code>
     * $query->filterByCoeffc(1234); // WHERE coeffC = 1234
     * $query->filterByCoeffc(array(12, 34)); // WHERE coeffC IN (12, 34)
     * $query->filterByCoeffc(array('min' => 12)); // WHERE coeffC >= 12
     * $query->filterByCoeffc(array('max' => 12)); // WHERE coeffC <= 12
     * </code>
     *
     * @param     mixed $coeffc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByCoeffc($coeffc = null, $comparison = null)
    {
        if (is_array($coeffc)) {
            $useMinMax = false;
            if (isset($coeffc['min'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::COEFFC, $coeffc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coeffc['max'])) {
                $this->addUsingAlias(CommonParametrageEncherePeer::COEFFC, $coeffc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::COEFFC, $coeffc, $comparison);
    }

    /**
     * Filter the query on the mail column
     *
     * Example usage:
     * <code>
     * $query->filterByMail('fooValue');   // WHERE mail = 'fooValue'
     * $query->filterByMail('%fooValue%'); // WHERE mail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByMail($mail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mail)) {
                $mail = str_replace('*', '%', $mail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::MAIL, $mail, $comparison);
    }

    /**
     * Filter the query on the note_entreprises column
     *
     * Example usage:
     * <code>
     * $query->filterByNoteEntreprises('fooValue');   // WHERE note_entreprises = 'fooValue'
     * $query->filterByNoteEntreprises('%fooValue%'); // WHERE note_entreprises LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noteEntreprises The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function filterByNoteEntreprises($noteEntreprises = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noteEntreprises)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noteEntreprises)) {
                $noteEntreprises = str_replace('*', '%', $noteEntreprises);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonParametrageEncherePeer::NOTE_ENTREPRISES, $noteEntreprises, $comparison);
    }

    /**
     * Filter the query by a related CommonOrganisme object
     *
     * @param   CommonOrganisme|PropelObjectCollection $commonOrganisme The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonParametrageEnchereQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonOrganisme($commonOrganisme, $comparison = null)
    {
        if ($commonOrganisme instanceof CommonOrganisme) {
            return $this
                ->addUsingAlias(CommonParametrageEncherePeer::ORGANISME, $commonOrganisme->getAcronyme(), $comparison);
        } elseif ($commonOrganisme instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonParametrageEncherePeer::ORGANISME, $commonOrganisme->toKeyValue('PrimaryKey', 'Acronyme'), $comparison);
        } else {
            throw new PropelException('filterByCommonOrganisme() only accepts arguments of type CommonOrganisme or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonOrganisme relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function joinCommonOrganisme($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonOrganisme');

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
            $this->addJoinObject($join, 'CommonOrganisme');
        }

        return $this;
    }

    /**
     * Use the CommonOrganisme relation CommonOrganisme object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonOrganismeQuery A secondary query class using the current class as primary query
     */
    public function useCommonOrganismeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonOrganisme($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonOrganisme', 'CommonOrganismeQuery');
    }

    /**
     * Filter the query by a related CommonParametrageEnchereReference object
     *
     * @param   CommonParametrageEnchereReference|PropelObjectCollection $commonParametrageEnchereReference  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonParametrageEnchereQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonParametrageEnchereReferenceRelatedByIdenchere($commonParametrageEnchereReference, $comparison = null)
    {
        if ($commonParametrageEnchereReference instanceof CommonParametrageEnchereReference) {
            return $this
                ->addUsingAlias(CommonParametrageEncherePeer::ID, $commonParametrageEnchereReference->getIdenchere(), $comparison);
        } elseif ($commonParametrageEnchereReference instanceof PropelObjectCollection) {
            return $this
                ->useCommonParametrageEnchereReferenceRelatedByIdenchereQuery()
                ->filterByPrimaryKeys($commonParametrageEnchereReference->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonParametrageEnchereReferenceRelatedByIdenchere() only accepts arguments of type CommonParametrageEnchereReference or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonParametrageEnchereReferenceRelatedByIdenchere relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function joinCommonParametrageEnchereReferenceRelatedByIdenchere($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonParametrageEnchereReferenceRelatedByIdenchere');

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
            $this->addJoinObject($join, 'CommonParametrageEnchereReferenceRelatedByIdenchere');
        }

        return $this;
    }

    /**
     * Use the CommonParametrageEnchereReferenceRelatedByIdenchere relation CommonParametrageEnchereReference object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonParametrageEnchereReferenceQuery A secondary query class using the current class as primary query
     */
    public function useCommonParametrageEnchereReferenceRelatedByIdenchereQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonParametrageEnchereReferenceRelatedByIdenchere($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonParametrageEnchereReferenceRelatedByIdenchere', 'CommonParametrageEnchereReferenceQuery');
    }

    /**
     * Filter the query by a related CommonParametrageEnchereReference object
     *
     * @param   CommonParametrageEnchereReference|PropelObjectCollection $commonParametrageEnchereReference  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonParametrageEnchereQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonParametrageEnchereReferenceRelatedByIdenchereOrganisme($commonParametrageEnchereReference, $comparison = null)
    {
        if ($commonParametrageEnchereReference instanceof CommonParametrageEnchereReference) {
            return $this
                ->addUsingAlias(CommonParametrageEncherePeer::ID, $commonParametrageEnchereReference->getIdenchere(), $comparison)
                ->addUsingAlias(CommonParametrageEncherePeer::ORGANISME, $commonParametrageEnchereReference->getOrganisme(), $comparison);
        } else {
            throw new PropelException('filterByCommonParametrageEnchereReferenceRelatedByIdenchereOrganisme() only accepts arguments of type CommonParametrageEnchereReference');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonParametrageEnchereReferenceRelatedByIdenchereOrganisme relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function joinCommonParametrageEnchereReferenceRelatedByIdenchereOrganisme($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonParametrageEnchereReferenceRelatedByIdenchereOrganisme');

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
            $this->addJoinObject($join, 'CommonParametrageEnchereReferenceRelatedByIdenchereOrganisme');
        }

        return $this;
    }

    /**
     * Use the CommonParametrageEnchereReferenceRelatedByIdenchereOrganisme relation CommonParametrageEnchereReference object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonParametrageEnchereReferenceQuery A secondary query class using the current class as primary query
     */
    public function useCommonParametrageEnchereReferenceRelatedByIdenchereOrganismeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonParametrageEnchereReferenceRelatedByIdenchereOrganisme($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonParametrageEnchereReferenceRelatedByIdenchereOrganisme', 'CommonParametrageEnchereReferenceQuery');
    }

    /**
     * Filter the query by a related CommonParametrageEnchereTranchesBaremeNETC object
     *
     * @param   CommonParametrageEnchereTranchesBaremeNETC|PropelObjectCollection $commonParametrageEnchereTranchesBaremeNETC  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonParametrageEnchereQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere($commonParametrageEnchereTranchesBaremeNETC, $comparison = null)
    {
        if ($commonParametrageEnchereTranchesBaremeNETC instanceof CommonParametrageEnchereTranchesBaremeNETC) {
            return $this
                ->addUsingAlias(CommonParametrageEncherePeer::ID, $commonParametrageEnchereTranchesBaremeNETC->getIdenchere(), $comparison);
        } elseif ($commonParametrageEnchereTranchesBaremeNETC instanceof PropelObjectCollection) {
            return $this
                ->useCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereQuery()
                ->filterByPrimaryKeys($commonParametrageEnchereTranchesBaremeNETC->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere() only accepts arguments of type CommonParametrageEnchereTranchesBaremeNETC or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function joinCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere');

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
            $this->addJoinObject($join, 'CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere');
        }

        return $this;
    }

    /**
     * Use the CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere relation CommonParametrageEnchereTranchesBaremeNETC object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonParametrageEnchereTranchesBaremeNETCQuery A secondary query class using the current class as primary query
     */
    public function useCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere', 'CommonParametrageEnchereTranchesBaremeNETCQuery');
    }

    /**
     * Filter the query by a related CommonParametrageEnchereTranchesBaremeNETC object
     *
     * @param   CommonParametrageEnchereTranchesBaremeNETC|PropelObjectCollection $commonParametrageEnchereTranchesBaremeNETC  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonParametrageEnchereQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme($commonParametrageEnchereTranchesBaremeNETC, $comparison = null)
    {
        if ($commonParametrageEnchereTranchesBaremeNETC instanceof CommonParametrageEnchereTranchesBaremeNETC) {
            return $this
                ->addUsingAlias(CommonParametrageEncherePeer::ID, $commonParametrageEnchereTranchesBaremeNETC->getIdenchere(), $comparison)
                ->addUsingAlias(CommonParametrageEncherePeer::ORGANISME, $commonParametrageEnchereTranchesBaremeNETC->getOrganisme(), $comparison);
        } else {
            throw new PropelException('filterByCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme() only accepts arguments of type CommonParametrageEnchereTranchesBaremeNETC');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function joinCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme');

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
            $this->addJoinObject($join, 'CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme');
        }

        return $this;
    }

    /**
     * Use the CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme relation CommonParametrageEnchereTranchesBaremeNETC object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonParametrageEnchereTranchesBaremeNETCQuery A secondary query class using the current class as primary query
     */
    public function useCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganismeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme', 'CommonParametrageEnchereTranchesBaremeNETCQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonParametrageEnchere $commonParametrageEnchere Object to remove from the list of results
     *
     * @return CommonParametrageEnchereQuery The current query, for fluid interface
     */
    public function prune($commonParametrageEnchere = null)
    {
        if ($commonParametrageEnchere) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonParametrageEncherePeer::ID), $commonParametrageEnchere->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonParametrageEncherePeer::ORGANISME), $commonParametrageEnchere->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
