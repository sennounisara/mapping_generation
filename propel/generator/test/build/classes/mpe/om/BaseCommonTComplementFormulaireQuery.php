<?php


/**
 * Base class that represents a query for the 't_complement_formulaire' table.
 *
 * 
 *
 * @method CommonTComplementFormulaireQuery orderByIdComplementFormulaire($order = Criteria::ASC) Order by the id_complement_formulaire column
 * @method CommonTComplementFormulaireQuery orderByIdDossierFormulaire($order = Criteria::ASC) Order by the id_dossier_formulaire column
 * @method CommonTComplementFormulaireQuery orderByNumeroComplement($order = Criteria::ASC) Order by the numero_complement column
 * @method CommonTComplementFormulaireQuery orderByDateARemettre($order = Criteria::ASC) Order by the date_a_remettre column
 * @method CommonTComplementFormulaireQuery orderByDateRemisLe($order = Criteria::ASC) Order by the date_remis_le column
 * @method CommonTComplementFormulaireQuery orderByMotif($order = Criteria::ASC) Order by the motif column
 * @method CommonTComplementFormulaireQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 * @method CommonTComplementFormulaireQuery orderByStatutDemande($order = Criteria::ASC) Order by the statut_demande column
 *
 * @method CommonTComplementFormulaireQuery groupByIdComplementFormulaire() Group by the id_complement_formulaire column
 * @method CommonTComplementFormulaireQuery groupByIdDossierFormulaire() Group by the id_dossier_formulaire column
 * @method CommonTComplementFormulaireQuery groupByNumeroComplement() Group by the numero_complement column
 * @method CommonTComplementFormulaireQuery groupByDateARemettre() Group by the date_a_remettre column
 * @method CommonTComplementFormulaireQuery groupByDateRemisLe() Group by the date_remis_le column
 * @method CommonTComplementFormulaireQuery groupByMotif() Group by the motif column
 * @method CommonTComplementFormulaireQuery groupByCommentaire() Group by the commentaire column
 * @method CommonTComplementFormulaireQuery groupByStatutDemande() Group by the statut_demande column
 *
 * @method CommonTComplementFormulaireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTComplementFormulaireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTComplementFormulaireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTComplementFormulaire findOne(PropelPDO $con = null) Return the first CommonTComplementFormulaire matching the query
 * @method CommonTComplementFormulaire findOneOrCreate(PropelPDO $con = null) Return the first CommonTComplementFormulaire matching the query, or a new CommonTComplementFormulaire object populated from the query conditions when no match is found
 *
 * @method CommonTComplementFormulaire findOneByIdDossierFormulaire(int $id_dossier_formulaire) Return the first CommonTComplementFormulaire filtered by the id_dossier_formulaire column
 * @method CommonTComplementFormulaire findOneByNumeroComplement(int $numero_complement) Return the first CommonTComplementFormulaire filtered by the numero_complement column
 * @method CommonTComplementFormulaire findOneByDateARemettre(string $date_a_remettre) Return the first CommonTComplementFormulaire filtered by the date_a_remettre column
 * @method CommonTComplementFormulaire findOneByDateRemisLe(string $date_remis_le) Return the first CommonTComplementFormulaire filtered by the date_remis_le column
 * @method CommonTComplementFormulaire findOneByMotif(string $motif) Return the first CommonTComplementFormulaire filtered by the motif column
 * @method CommonTComplementFormulaire findOneByCommentaire(string $commentaire) Return the first CommonTComplementFormulaire filtered by the commentaire column
 * @method CommonTComplementFormulaire findOneByStatutDemande(string $statut_demande) Return the first CommonTComplementFormulaire filtered by the statut_demande column
 *
 * @method array findByIdComplementFormulaire(int $id_complement_formulaire) Return CommonTComplementFormulaire objects filtered by the id_complement_formulaire column
 * @method array findByIdDossierFormulaire(int $id_dossier_formulaire) Return CommonTComplementFormulaire objects filtered by the id_dossier_formulaire column
 * @method array findByNumeroComplement(int $numero_complement) Return CommonTComplementFormulaire objects filtered by the numero_complement column
 * @method array findByDateARemettre(string $date_a_remettre) Return CommonTComplementFormulaire objects filtered by the date_a_remettre column
 * @method array findByDateRemisLe(string $date_remis_le) Return CommonTComplementFormulaire objects filtered by the date_remis_le column
 * @method array findByMotif(string $motif) Return CommonTComplementFormulaire objects filtered by the motif column
 * @method array findByCommentaire(string $commentaire) Return CommonTComplementFormulaire objects filtered by the commentaire column
 * @method array findByStatutDemande(string $statut_demande) Return CommonTComplementFormulaire objects filtered by the statut_demande column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTComplementFormulaireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTComplementFormulaireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTComplementFormulaire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTComplementFormulaireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTComplementFormulaireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTComplementFormulaireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTComplementFormulaireQuery) {
            return $criteria;
        }
        $query = new CommonTComplementFormulaireQuery();
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
     * @return   CommonTComplementFormulaire|CommonTComplementFormulaire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTComplementFormulairePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTComplementFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTComplementFormulaire A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdComplementFormulaire($key, $con = null)
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
     * @return                 CommonTComplementFormulaire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_complement_formulaire`, `id_dossier_formulaire`, `numero_complement`, `date_a_remettre`, `date_remis_le`, `motif`, `commentaire`, `statut_demande` FROM `t_complement_formulaire` WHERE `id_complement_formulaire` = :p0';
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
            $obj = new CommonTComplementFormulaire();
            $obj->hydrate($row);
            CommonTComplementFormulairePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTComplementFormulaire|CommonTComplementFormulaire[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTComplementFormulaire[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTComplementFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTComplementFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_complement_formulaire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdComplementFormulaire(1234); // WHERE id_complement_formulaire = 1234
     * $query->filterByIdComplementFormulaire(array(12, 34)); // WHERE id_complement_formulaire IN (12, 34)
     * $query->filterByIdComplementFormulaire(array('min' => 12)); // WHERE id_complement_formulaire >= 12
     * $query->filterByIdComplementFormulaire(array('max' => 12)); // WHERE id_complement_formulaire <= 12
     * </code>
     *
     * @param     mixed $idComplementFormulaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTComplementFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdComplementFormulaire($idComplementFormulaire = null, $comparison = null)
    {
        if (is_array($idComplementFormulaire)) {
            $useMinMax = false;
            if (isset($idComplementFormulaire['min'])) {
                $this->addUsingAlias(CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE, $idComplementFormulaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idComplementFormulaire['max'])) {
                $this->addUsingAlias(CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE, $idComplementFormulaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE, $idComplementFormulaire, $comparison);
    }

    /**
     * Filter the query on the id_dossier_formulaire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDossierFormulaire(1234); // WHERE id_dossier_formulaire = 1234
     * $query->filterByIdDossierFormulaire(array(12, 34)); // WHERE id_dossier_formulaire IN (12, 34)
     * $query->filterByIdDossierFormulaire(array('min' => 12)); // WHERE id_dossier_formulaire >= 12
     * $query->filterByIdDossierFormulaire(array('max' => 12)); // WHERE id_dossier_formulaire <= 12
     * </code>
     *
     * @param     mixed $idDossierFormulaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTComplementFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdDossierFormulaire($idDossierFormulaire = null, $comparison = null)
    {
        if (is_array($idDossierFormulaire)) {
            $useMinMax = false;
            if (isset($idDossierFormulaire['min'])) {
                $this->addUsingAlias(CommonTComplementFormulairePeer::ID_DOSSIER_FORMULAIRE, $idDossierFormulaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDossierFormulaire['max'])) {
                $this->addUsingAlias(CommonTComplementFormulairePeer::ID_DOSSIER_FORMULAIRE, $idDossierFormulaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTComplementFormulairePeer::ID_DOSSIER_FORMULAIRE, $idDossierFormulaire, $comparison);
    }

    /**
     * Filter the query on the numero_complement column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroComplement(1234); // WHERE numero_complement = 1234
     * $query->filterByNumeroComplement(array(12, 34)); // WHERE numero_complement IN (12, 34)
     * $query->filterByNumeroComplement(array('min' => 12)); // WHERE numero_complement >= 12
     * $query->filterByNumeroComplement(array('max' => 12)); // WHERE numero_complement <= 12
     * </code>
     *
     * @param     mixed $numeroComplement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTComplementFormulaireQuery The current query, for fluid interface
     */
    public function filterByNumeroComplement($numeroComplement = null, $comparison = null)
    {
        if (is_array($numeroComplement)) {
            $useMinMax = false;
            if (isset($numeroComplement['min'])) {
                $this->addUsingAlias(CommonTComplementFormulairePeer::NUMERO_COMPLEMENT, $numeroComplement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numeroComplement['max'])) {
                $this->addUsingAlias(CommonTComplementFormulairePeer::NUMERO_COMPLEMENT, $numeroComplement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTComplementFormulairePeer::NUMERO_COMPLEMENT, $numeroComplement, $comparison);
    }

    /**
     * Filter the query on the date_a_remettre column
     *
     * Example usage:
     * <code>
     * $query->filterByDateARemettre('fooValue');   // WHERE date_a_remettre = 'fooValue'
     * $query->filterByDateARemettre('%fooValue%'); // WHERE date_a_remettre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateARemettre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTComplementFormulaireQuery The current query, for fluid interface
     */
    public function filterByDateARemettre($dateARemettre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateARemettre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateARemettre)) {
                $dateARemettre = str_replace('*', '%', $dateARemettre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTComplementFormulairePeer::DATE_A_REMETTRE, $dateARemettre, $comparison);
    }

    /**
     * Filter the query on the date_remis_le column
     *
     * Example usage:
     * <code>
     * $query->filterByDateRemisLe('fooValue');   // WHERE date_remis_le = 'fooValue'
     * $query->filterByDateRemisLe('%fooValue%'); // WHERE date_remis_le LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateRemisLe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTComplementFormulaireQuery The current query, for fluid interface
     */
    public function filterByDateRemisLe($dateRemisLe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateRemisLe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateRemisLe)) {
                $dateRemisLe = str_replace('*', '%', $dateRemisLe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTComplementFormulairePeer::DATE_REMIS_LE, $dateRemisLe, $comparison);
    }

    /**
     * Filter the query on the motif column
     *
     * Example usage:
     * <code>
     * $query->filterByMotif('fooValue');   // WHERE motif = 'fooValue'
     * $query->filterByMotif('%fooValue%'); // WHERE motif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTComplementFormulaireQuery The current query, for fluid interface
     */
    public function filterByMotif($motif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motif)) {
                $motif = str_replace('*', '%', $motif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTComplementFormulairePeer::MOTIF, $motif, $comparison);
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
     * @return CommonTComplementFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTComplementFormulairePeer::COMMENTAIRE, $commentaire, $comparison);
    }

    /**
     * Filter the query on the statut_demande column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutDemande('fooValue');   // WHERE statut_demande = 'fooValue'
     * $query->filterByStatutDemande('%fooValue%'); // WHERE statut_demande LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statutDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTComplementFormulaireQuery The current query, for fluid interface
     */
    public function filterByStatutDemande($statutDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statutDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statutDemande)) {
                $statutDemande = str_replace('*', '%', $statutDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTComplementFormulairePeer::STATUT_DEMANDE, $statutDemande, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTComplementFormulaire $commonTComplementFormulaire Object to remove from the list of results
     *
     * @return CommonTComplementFormulaireQuery The current query, for fluid interface
     */
    public function prune($commonTComplementFormulaire = null)
    {
        if ($commonTComplementFormulaire) {
            $this->addUsingAlias(CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE, $commonTComplementFormulaire->getIdComplementFormulaire(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
