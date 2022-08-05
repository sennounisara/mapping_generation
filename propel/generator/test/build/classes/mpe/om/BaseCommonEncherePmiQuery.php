<?php


/**
 * Base class that represents a query for the 'EncherePmi' table.
 *
 * 
 *
 * @method CommonEncherePmiQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonEncherePmiQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonEncherePmiQuery orderByRefconsultation($order = Criteria::ASC) Order by the refConsultation column
 * @method CommonEncherePmiQuery orderByIdentiteeassociee($order = Criteria::ASC) Order by the idEntiteeAssociee column
 * @method CommonEncherePmiQuery orderByReferenceutilisateur($order = Criteria::ASC) Order by the referenceUtilisateur column
 * @method CommonEncherePmiQuery orderByAuteur($order = Criteria::ASC) Order by the auteur column
 * @method CommonEncherePmiQuery orderByIdlot($order = Criteria::ASC) Order by the idLot column
 * @method CommonEncherePmiQuery orderByObjet($order = Criteria::ASC) Order by the objet column
 * @method CommonEncherePmiQuery orderByDatedebut($order = Criteria::ASC) Order by the dateDebut column
 * @method CommonEncherePmiQuery orderByDatefin($order = Criteria::ASC) Order by the dateFin column
 * @method CommonEncherePmiQuery orderByDatesuspension($order = Criteria::ASC) Order by the dateSuspension column
 * @method CommonEncherePmiQuery orderByDelaiprolongation($order = Criteria::ASC) Order by the delaiProlongation column
 * @method CommonEncherePmiQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 * @method CommonEncherePmiQuery orderByMeilleureenchereobligatoire($order = Criteria::ASC) Order by the meilleureEnchereObligatoire column
 * @method CommonEncherePmiQuery orderByTypebaremenetc($order = Criteria::ASC) Order by the typeBaremeNETC column
 * @method CommonEncherePmiQuery orderByTypebaremeenchereglobale($order = Criteria::ASC) Order by the typeBaremeEnchereGlobale column
 * @method CommonEncherePmiQuery orderByMeilleurnotehaute($order = Criteria::ASC) Order by the meilleurNoteHaute column
 * @method CommonEncherePmiQuery orderByNbrcandidatsvisible($order = Criteria::ASC) Order by the nbrCandidatsVisible column
 * @method CommonEncherePmiQuery orderByListecandidatsvisible($order = Criteria::ASC) Order by the listeCandidatsVisible column
 * @method CommonEncherePmiQuery orderByRangvisible($order = Criteria::ASC) Order by the rangVisible column
 * @method CommonEncherePmiQuery orderByMeilleureoffrevisible($order = Criteria::ASC) Order by the meilleureOffreVisible column
 * @method CommonEncherePmiQuery orderByMontantreserve($order = Criteria::ASC) Order by the montantReserve column
 * @method CommonEncherePmiQuery orderByNotemaxbaremerelatif($order = Criteria::ASC) Order by the noteMaxBaremeRelatif column
 * @method CommonEncherePmiQuery orderByCoeffa($order = Criteria::ASC) Order by the coeffA column
 * @method CommonEncherePmiQuery orderByCoeffb($order = Criteria::ASC) Order by the coeffB column
 * @method CommonEncherePmiQuery orderByCoeffc($order = Criteria::ASC) Order by the coeffC column
 * @method CommonEncherePmiQuery orderByMail($order = Criteria::ASC) Order by the mail column
 *
 * @method CommonEncherePmiQuery groupById() Group by the id column
 * @method CommonEncherePmiQuery groupByOrganisme() Group by the organisme column
 * @method CommonEncherePmiQuery groupByRefconsultation() Group by the refConsultation column
 * @method CommonEncherePmiQuery groupByIdentiteeassociee() Group by the idEntiteeAssociee column
 * @method CommonEncherePmiQuery groupByReferenceutilisateur() Group by the referenceUtilisateur column
 * @method CommonEncherePmiQuery groupByAuteur() Group by the auteur column
 * @method CommonEncherePmiQuery groupByIdlot() Group by the idLot column
 * @method CommonEncherePmiQuery groupByObjet() Group by the objet column
 * @method CommonEncherePmiQuery groupByDatedebut() Group by the dateDebut column
 * @method CommonEncherePmiQuery groupByDatefin() Group by the dateFin column
 * @method CommonEncherePmiQuery groupByDatesuspension() Group by the dateSuspension column
 * @method CommonEncherePmiQuery groupByDelaiprolongation() Group by the delaiProlongation column
 * @method CommonEncherePmiQuery groupByCommentaire() Group by the commentaire column
 * @method CommonEncherePmiQuery groupByMeilleureenchereobligatoire() Group by the meilleureEnchereObligatoire column
 * @method CommonEncherePmiQuery groupByTypebaremenetc() Group by the typeBaremeNETC column
 * @method CommonEncherePmiQuery groupByTypebaremeenchereglobale() Group by the typeBaremeEnchereGlobale column
 * @method CommonEncherePmiQuery groupByMeilleurnotehaute() Group by the meilleurNoteHaute column
 * @method CommonEncherePmiQuery groupByNbrcandidatsvisible() Group by the nbrCandidatsVisible column
 * @method CommonEncherePmiQuery groupByListecandidatsvisible() Group by the listeCandidatsVisible column
 * @method CommonEncherePmiQuery groupByRangvisible() Group by the rangVisible column
 * @method CommonEncherePmiQuery groupByMeilleureoffrevisible() Group by the meilleureOffreVisible column
 * @method CommonEncherePmiQuery groupByMontantreserve() Group by the montantReserve column
 * @method CommonEncherePmiQuery groupByNotemaxbaremerelatif() Group by the noteMaxBaremeRelatif column
 * @method CommonEncherePmiQuery groupByCoeffa() Group by the coeffA column
 * @method CommonEncherePmiQuery groupByCoeffb() Group by the coeffB column
 * @method CommonEncherePmiQuery groupByCoeffc() Group by the coeffC column
 * @method CommonEncherePmiQuery groupByMail() Group by the mail column
 *
 * @method CommonEncherePmiQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEncherePmiQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEncherePmiQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEncherePmi findOne(PropelPDO $con = null) Return the first CommonEncherePmi matching the query
 * @method CommonEncherePmi findOneOrCreate(PropelPDO $con = null) Return the first CommonEncherePmi matching the query, or a new CommonEncherePmi object populated from the query conditions when no match is found
 *
 * @method CommonEncherePmi findOneById(int $id) Return the first CommonEncherePmi filtered by the id column
 * @method CommonEncherePmi findOneByOrganisme(string $organisme) Return the first CommonEncherePmi filtered by the organisme column
 * @method CommonEncherePmi findOneByRefconsultation(int $refConsultation) Return the first CommonEncherePmi filtered by the refConsultation column
 * @method CommonEncherePmi findOneByIdentiteeassociee(int $idEntiteeAssociee) Return the first CommonEncherePmi filtered by the idEntiteeAssociee column
 * @method CommonEncherePmi findOneByReferenceutilisateur(string $referenceUtilisateur) Return the first CommonEncherePmi filtered by the referenceUtilisateur column
 * @method CommonEncherePmi findOneByAuteur(string $auteur) Return the first CommonEncherePmi filtered by the auteur column
 * @method CommonEncherePmi findOneByIdlot(int $idLot) Return the first CommonEncherePmi filtered by the idLot column
 * @method CommonEncherePmi findOneByObjet(string $objet) Return the first CommonEncherePmi filtered by the objet column
 * @method CommonEncherePmi findOneByDatedebut(string $dateDebut) Return the first CommonEncherePmi filtered by the dateDebut column
 * @method CommonEncherePmi findOneByDatefin(string $dateFin) Return the first CommonEncherePmi filtered by the dateFin column
 * @method CommonEncherePmi findOneByDatesuspension(string $dateSuspension) Return the first CommonEncherePmi filtered by the dateSuspension column
 * @method CommonEncherePmi findOneByDelaiprolongation(int $delaiProlongation) Return the first CommonEncherePmi filtered by the delaiProlongation column
 * @method CommonEncherePmi findOneByCommentaire(string $commentaire) Return the first CommonEncherePmi filtered by the commentaire column
 * @method CommonEncherePmi findOneByMeilleureenchereobligatoire(string $meilleureEnchereObligatoire) Return the first CommonEncherePmi filtered by the meilleureEnchereObligatoire column
 * @method CommonEncherePmi findOneByTypebaremenetc(string $typeBaremeNETC) Return the first CommonEncherePmi filtered by the typeBaremeNETC column
 * @method CommonEncherePmi findOneByTypebaremeenchereglobale(string $typeBaremeEnchereGlobale) Return the first CommonEncherePmi filtered by the typeBaremeEnchereGlobale column
 * @method CommonEncherePmi findOneByMeilleurnotehaute(string $meilleurNoteHaute) Return the first CommonEncherePmi filtered by the meilleurNoteHaute column
 * @method CommonEncherePmi findOneByNbrcandidatsvisible(string $nbrCandidatsVisible) Return the first CommonEncherePmi filtered by the nbrCandidatsVisible column
 * @method CommonEncherePmi findOneByListecandidatsvisible(string $listeCandidatsVisible) Return the first CommonEncherePmi filtered by the listeCandidatsVisible column
 * @method CommonEncherePmi findOneByRangvisible(string $rangVisible) Return the first CommonEncherePmi filtered by the rangVisible column
 * @method CommonEncherePmi findOneByMeilleureoffrevisible(string $meilleureOffreVisible) Return the first CommonEncherePmi filtered by the meilleureOffreVisible column
 * @method CommonEncherePmi findOneByMontantreserve(double $montantReserve) Return the first CommonEncherePmi filtered by the montantReserve column
 * @method CommonEncherePmi findOneByNotemaxbaremerelatif(double $noteMaxBaremeRelatif) Return the first CommonEncherePmi filtered by the noteMaxBaremeRelatif column
 * @method CommonEncherePmi findOneByCoeffa(double $coeffA) Return the first CommonEncherePmi filtered by the coeffA column
 * @method CommonEncherePmi findOneByCoeffb(double $coeffB) Return the first CommonEncherePmi filtered by the coeffB column
 * @method CommonEncherePmi findOneByCoeffc(double $coeffC) Return the first CommonEncherePmi filtered by the coeffC column
 * @method CommonEncherePmi findOneByMail(string $mail) Return the first CommonEncherePmi filtered by the mail column
 *
 * @method array findById(int $id) Return CommonEncherePmi objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonEncherePmi objects filtered by the organisme column
 * @method array findByRefconsultation(int $refConsultation) Return CommonEncherePmi objects filtered by the refConsultation column
 * @method array findByIdentiteeassociee(int $idEntiteeAssociee) Return CommonEncherePmi objects filtered by the idEntiteeAssociee column
 * @method array findByReferenceutilisateur(string $referenceUtilisateur) Return CommonEncherePmi objects filtered by the referenceUtilisateur column
 * @method array findByAuteur(string $auteur) Return CommonEncherePmi objects filtered by the auteur column
 * @method array findByIdlot(int $idLot) Return CommonEncherePmi objects filtered by the idLot column
 * @method array findByObjet(string $objet) Return CommonEncherePmi objects filtered by the objet column
 * @method array findByDatedebut(string $dateDebut) Return CommonEncherePmi objects filtered by the dateDebut column
 * @method array findByDatefin(string $dateFin) Return CommonEncherePmi objects filtered by the dateFin column
 * @method array findByDatesuspension(string $dateSuspension) Return CommonEncherePmi objects filtered by the dateSuspension column
 * @method array findByDelaiprolongation(int $delaiProlongation) Return CommonEncherePmi objects filtered by the delaiProlongation column
 * @method array findByCommentaire(string $commentaire) Return CommonEncherePmi objects filtered by the commentaire column
 * @method array findByMeilleureenchereobligatoire(string $meilleureEnchereObligatoire) Return CommonEncherePmi objects filtered by the meilleureEnchereObligatoire column
 * @method array findByTypebaremenetc(string $typeBaremeNETC) Return CommonEncherePmi objects filtered by the typeBaremeNETC column
 * @method array findByTypebaremeenchereglobale(string $typeBaremeEnchereGlobale) Return CommonEncherePmi objects filtered by the typeBaremeEnchereGlobale column
 * @method array findByMeilleurnotehaute(string $meilleurNoteHaute) Return CommonEncherePmi objects filtered by the meilleurNoteHaute column
 * @method array findByNbrcandidatsvisible(string $nbrCandidatsVisible) Return CommonEncherePmi objects filtered by the nbrCandidatsVisible column
 * @method array findByListecandidatsvisible(string $listeCandidatsVisible) Return CommonEncherePmi objects filtered by the listeCandidatsVisible column
 * @method array findByRangvisible(string $rangVisible) Return CommonEncherePmi objects filtered by the rangVisible column
 * @method array findByMeilleureoffrevisible(string $meilleureOffreVisible) Return CommonEncherePmi objects filtered by the meilleureOffreVisible column
 * @method array findByMontantreserve(double $montantReserve) Return CommonEncherePmi objects filtered by the montantReserve column
 * @method array findByNotemaxbaremerelatif(double $noteMaxBaremeRelatif) Return CommonEncherePmi objects filtered by the noteMaxBaremeRelatif column
 * @method array findByCoeffa(double $coeffA) Return CommonEncherePmi objects filtered by the coeffA column
 * @method array findByCoeffb(double $coeffB) Return CommonEncherePmi objects filtered by the coeffB column
 * @method array findByCoeffc(double $coeffC) Return CommonEncherePmi objects filtered by the coeffC column
 * @method array findByMail(string $mail) Return CommonEncherePmi objects filtered by the mail column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEncherePmiQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEncherePmiQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEncherePmi', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEncherePmiQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEncherePmiQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEncherePmiQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEncherePmiQuery) {
            return $criteria;
        }
        $query = new CommonEncherePmiQuery();
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
     * @return   CommonEncherePmi|CommonEncherePmi[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEncherePmiPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEncherePmiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEncherePmi A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `refConsultation`, `idEntiteeAssociee`, `referenceUtilisateur`, `auteur`, `idLot`, `objet`, `dateDebut`, `dateFin`, `dateSuspension`, `delaiProlongation`, `commentaire`, `meilleureEnchereObligatoire`, `typeBaremeNETC`, `typeBaremeEnchereGlobale`, `meilleurNoteHaute`, `nbrCandidatsVisible`, `listeCandidatsVisible`, `rangVisible`, `meilleureOffreVisible`, `montantReserve`, `noteMaxBaremeRelatif`, `coeffA`, `coeffB`, `coeffC`, `mail` FROM `EncherePmi` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonEncherePmi();
            $obj->hydrate($row);
            CommonEncherePmiPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonEncherePmi|CommonEncherePmi[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonEncherePmi[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonEncherePmiPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonEncherePmiPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEncherePmiQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonEncherePmiPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonEncherePmiPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEncherePmiPeer::ID, $id, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEncherePmiPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
     */
    public function filterByRefconsultation($refconsultation = null, $comparison = null)
    {
        if (is_array($refconsultation)) {
            $useMinMax = false;
            if (isset($refconsultation['min'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::REFCONSULTATION, $refconsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refconsultation['max'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::REFCONSULTATION, $refconsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEncherePmiPeer::REFCONSULTATION, $refconsultation, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
     */
    public function filterByIdentiteeassociee($identiteeassociee = null, $comparison = null)
    {
        if (is_array($identiteeassociee)) {
            $useMinMax = false;
            if (isset($identiteeassociee['min'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::IDENTITEEASSOCIEE, $identiteeassociee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($identiteeassociee['max'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::IDENTITEEASSOCIEE, $identiteeassociee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEncherePmiPeer::IDENTITEEASSOCIEE, $identiteeassociee, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEncherePmiPeer::REFERENCEUTILISATEUR, $referenceutilisateur, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEncherePmiPeer::AUTEUR, $auteur, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
     */
    public function filterByIdlot($idlot = null, $comparison = null)
    {
        if (is_array($idlot)) {
            $useMinMax = false;
            if (isset($idlot['min'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::IDLOT, $idlot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idlot['max'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::IDLOT, $idlot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEncherePmiPeer::IDLOT, $idlot, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEncherePmiPeer::OBJET, $objet, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
     */
    public function filterByDatedebut($datedebut = null, $comparison = null)
    {
        if (is_array($datedebut)) {
            $useMinMax = false;
            if (isset($datedebut['min'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::DATEDEBUT, $datedebut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datedebut['max'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::DATEDEBUT, $datedebut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEncherePmiPeer::DATEDEBUT, $datedebut, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
     */
    public function filterByDatefin($datefin = null, $comparison = null)
    {
        if (is_array($datefin)) {
            $useMinMax = false;
            if (isset($datefin['min'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::DATEFIN, $datefin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datefin['max'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::DATEFIN, $datefin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEncherePmiPeer::DATEFIN, $datefin, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
     */
    public function filterByDatesuspension($datesuspension = null, $comparison = null)
    {
        if (is_array($datesuspension)) {
            $useMinMax = false;
            if (isset($datesuspension['min'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::DATESUSPENSION, $datesuspension['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datesuspension['max'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::DATESUSPENSION, $datesuspension['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEncherePmiPeer::DATESUSPENSION, $datesuspension, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
     */
    public function filterByDelaiprolongation($delaiprolongation = null, $comparison = null)
    {
        if (is_array($delaiprolongation)) {
            $useMinMax = false;
            if (isset($delaiprolongation['min'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::DELAIPROLONGATION, $delaiprolongation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiprolongation['max'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::DELAIPROLONGATION, $delaiprolongation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEncherePmiPeer::DELAIPROLONGATION, $delaiprolongation, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEncherePmiPeer::COMMENTAIRE, $commentaire, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEncherePmiPeer::MEILLEUREENCHEREOBLIGATOIRE, $meilleureenchereobligatoire, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEncherePmiPeer::TYPEBAREMENETC, $typebaremenetc, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEncherePmiPeer::TYPEBAREMEENCHEREGLOBALE, $typebaremeenchereglobale, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEncherePmiPeer::MEILLEURNOTEHAUTE, $meilleurnotehaute, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEncherePmiPeer::NBRCANDIDATSVISIBLE, $nbrcandidatsvisible, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEncherePmiPeer::LISTECANDIDATSVISIBLE, $listecandidatsvisible, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEncherePmiPeer::RANGVISIBLE, $rangvisible, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEncherePmiPeer::MEILLEUREOFFREVISIBLE, $meilleureoffrevisible, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
     */
    public function filterByMontantreserve($montantreserve = null, $comparison = null)
    {
        if (is_array($montantreserve)) {
            $useMinMax = false;
            if (isset($montantreserve['min'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::MONTANTRESERVE, $montantreserve['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantreserve['max'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::MONTANTRESERVE, $montantreserve['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEncherePmiPeer::MONTANTRESERVE, $montantreserve, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
     */
    public function filterByNotemaxbaremerelatif($notemaxbaremerelatif = null, $comparison = null)
    {
        if (is_array($notemaxbaremerelatif)) {
            $useMinMax = false;
            if (isset($notemaxbaremerelatif['min'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::NOTEMAXBAREMERELATIF, $notemaxbaremerelatif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($notemaxbaremerelatif['max'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::NOTEMAXBAREMERELATIF, $notemaxbaremerelatif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEncherePmiPeer::NOTEMAXBAREMERELATIF, $notemaxbaremerelatif, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
     */
    public function filterByCoeffa($coeffa = null, $comparison = null)
    {
        if (is_array($coeffa)) {
            $useMinMax = false;
            if (isset($coeffa['min'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::COEFFA, $coeffa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coeffa['max'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::COEFFA, $coeffa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEncherePmiPeer::COEFFA, $coeffa, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
     */
    public function filterByCoeffb($coeffb = null, $comparison = null)
    {
        if (is_array($coeffb)) {
            $useMinMax = false;
            if (isset($coeffb['min'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::COEFFB, $coeffb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coeffb['max'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::COEFFB, $coeffb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEncherePmiPeer::COEFFB, $coeffb, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
     */
    public function filterByCoeffc($coeffc = null, $comparison = null)
    {
        if (is_array($coeffc)) {
            $useMinMax = false;
            if (isset($coeffc['min'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::COEFFC, $coeffc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coeffc['max'])) {
                $this->addUsingAlias(CommonEncherePmiPeer::COEFFC, $coeffc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEncherePmiPeer::COEFFC, $coeffc, $comparison);
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
     * @return CommonEncherePmiQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEncherePmiPeer::MAIL, $mail, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEncherePmi $commonEncherePmi Object to remove from the list of results
     *
     * @return CommonEncherePmiQuery The current query, for fluid interface
     */
    public function prune($commonEncherePmi = null)
    {
        if ($commonEncherePmi) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonEncherePmiPeer::ID), $commonEncherePmi->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonEncherePmiPeer::ORGANISME), $commonEncherePmi->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
