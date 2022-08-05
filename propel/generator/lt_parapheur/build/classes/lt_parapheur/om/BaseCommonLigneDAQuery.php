<?php


/**
 * Base class that represents a query for the 'Ligne_DA' table.
 *
 * 
 *
 * @method CommonLigneDAQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonLigneDAQuery orderByNumOrdre($order = Criteria::ASC) Order by the Num_ordre column
 * @method CommonLigneDAQuery orderByCodeArticleSpecifique($order = Criteria::ASC) Order by the code_article_specifique column
 * @method CommonLigneDAQuery orderByLibelleArticleSpecifique($order = Criteria::ASC) Order by the libelle_article_specifique column
 * @method CommonLigneDAQuery orderByDetailArticleSpecifique($order = Criteria::ASC) Order by the detail_article_specifique column
 * @method CommonLigneDAQuery orderByQuantite($order = Criteria::ASC) Order by the quantite column
 * @method CommonLigneDAQuery orderByUnite($order = Criteria::ASC) Order by the unite column
 * @method CommonLigneDAQuery orderByPrixUnitaire($order = Criteria::ASC) Order by the prix_unitaire column
 * @method CommonLigneDAQuery orderByMontantTotal($order = Criteria::ASC) Order by the Montant_total column
 * @method CommonLigneDAQuery orderByQuantiteMin($order = Criteria::ASC) Order by the quantite_min column
 * @method CommonLigneDAQuery orderByQuantiteMax($order = Criteria::ASC) Order by the quantite_max column
 * @method CommonLigneDAQuery orderByDaConsultationRef($order = Criteria::ASC) Order by the DA_Consultation_ref column
 *
 * @method CommonLigneDAQuery groupById() Group by the id column
 * @method CommonLigneDAQuery groupByNumOrdre() Group by the Num_ordre column
 * @method CommonLigneDAQuery groupByCodeArticleSpecifique() Group by the code_article_specifique column
 * @method CommonLigneDAQuery groupByLibelleArticleSpecifique() Group by the libelle_article_specifique column
 * @method CommonLigneDAQuery groupByDetailArticleSpecifique() Group by the detail_article_specifique column
 * @method CommonLigneDAQuery groupByQuantite() Group by the quantite column
 * @method CommonLigneDAQuery groupByUnite() Group by the unite column
 * @method CommonLigneDAQuery groupByPrixUnitaire() Group by the prix_unitaire column
 * @method CommonLigneDAQuery groupByMontantTotal() Group by the Montant_total column
 * @method CommonLigneDAQuery groupByQuantiteMin() Group by the quantite_min column
 * @method CommonLigneDAQuery groupByQuantiteMax() Group by the quantite_max column
 * @method CommonLigneDAQuery groupByDaConsultationRef() Group by the DA_Consultation_ref column
 *
 * @method CommonLigneDAQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonLigneDAQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonLigneDAQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonLigneDAQuery leftJoinCommonDAConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonDAConsultation relation
 * @method CommonLigneDAQuery rightJoinCommonDAConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonDAConsultation relation
 * @method CommonLigneDAQuery innerJoinCommonDAConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonDAConsultation relation
 *
 * @method CommonLigneDA findOne(PropelPDO $con = null) Return the first CommonLigneDA matching the query
 * @method CommonLigneDA findOneOrCreate(PropelPDO $con = null) Return the first CommonLigneDA matching the query, or a new CommonLigneDA object populated from the query conditions when no match is found
 *
 * @method CommonLigneDA findOneByNumOrdre(string $Num_ordre) Return the first CommonLigneDA filtered by the Num_ordre column
 * @method CommonLigneDA findOneByCodeArticleSpecifique(string $code_article_specifique) Return the first CommonLigneDA filtered by the code_article_specifique column
 * @method CommonLigneDA findOneByLibelleArticleSpecifique(string $libelle_article_specifique) Return the first CommonLigneDA filtered by the libelle_article_specifique column
 * @method CommonLigneDA findOneByDetailArticleSpecifique(string $detail_article_specifique) Return the first CommonLigneDA filtered by the detail_article_specifique column
 * @method CommonLigneDA findOneByQuantite(int $quantite) Return the first CommonLigneDA filtered by the quantite column
 * @method CommonLigneDA findOneByUnite(string $unite) Return the first CommonLigneDA filtered by the unite column
 * @method CommonLigneDA findOneByPrixUnitaire(string $prix_unitaire) Return the first CommonLigneDA filtered by the prix_unitaire column
 * @method CommonLigneDA findOneByMontantTotal(string $Montant_total) Return the first CommonLigneDA filtered by the Montant_total column
 * @method CommonLigneDA findOneByQuantiteMin(int $quantite_min) Return the first CommonLigneDA filtered by the quantite_min column
 * @method CommonLigneDA findOneByQuantiteMax(int $quantite_max) Return the first CommonLigneDA filtered by the quantite_max column
 * @method CommonLigneDA findOneByDaConsultationRef(int $DA_Consultation_ref) Return the first CommonLigneDA filtered by the DA_Consultation_ref column
 *
 * @method array findById(int $id) Return CommonLigneDA objects filtered by the id column
 * @method array findByNumOrdre(string $Num_ordre) Return CommonLigneDA objects filtered by the Num_ordre column
 * @method array findByCodeArticleSpecifique(string $code_article_specifique) Return CommonLigneDA objects filtered by the code_article_specifique column
 * @method array findByLibelleArticleSpecifique(string $libelle_article_specifique) Return CommonLigneDA objects filtered by the libelle_article_specifique column
 * @method array findByDetailArticleSpecifique(string $detail_article_specifique) Return CommonLigneDA objects filtered by the detail_article_specifique column
 * @method array findByQuantite(int $quantite) Return CommonLigneDA objects filtered by the quantite column
 * @method array findByUnite(string $unite) Return CommonLigneDA objects filtered by the unite column
 * @method array findByPrixUnitaire(string $prix_unitaire) Return CommonLigneDA objects filtered by the prix_unitaire column
 * @method array findByMontantTotal(string $Montant_total) Return CommonLigneDA objects filtered by the Montant_total column
 * @method array findByQuantiteMin(int $quantite_min) Return CommonLigneDA objects filtered by the quantite_min column
 * @method array findByQuantiteMax(int $quantite_max) Return CommonLigneDA objects filtered by the quantite_max column
 * @method array findByDaConsultationRef(int $DA_Consultation_ref) Return CommonLigneDA objects filtered by the DA_Consultation_ref column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonLigneDAQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonLigneDAQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonLigneDA', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonLigneDAQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonLigneDAQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonLigneDAQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonLigneDAQuery) {
            return $criteria;
        }
        $query = new CommonLigneDAQuery();
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
     * @return   CommonLigneDA|CommonLigneDA[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonLigneDAPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonLigneDAPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonLigneDA A model object, or null if the key is not found
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
     * @return                 CommonLigneDA A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `Num_ordre`, `code_article_specifique`, `libelle_article_specifique`, `detail_article_specifique`, `quantite`, `unite`, `prix_unitaire`, `Montant_total`, `quantite_min`, `quantite_max`, `DA_Consultation_ref` FROM `Ligne_DA` WHERE `id` = :p0';
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
            $obj = new CommonLigneDA();
            $obj->hydrate($row);
            CommonLigneDAPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonLigneDA|CommonLigneDA[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonLigneDA[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonLigneDAQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonLigneDAPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonLigneDAQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonLigneDAPeer::ID, $keys, Criteria::IN);
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
     * @return CommonLigneDAQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonLigneDAPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonLigneDAPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonLigneDAPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the Num_ordre column
     *
     * Example usage:
     * <code>
     * $query->filterByNumOrdre('fooValue');   // WHERE Num_ordre = 'fooValue'
     * $query->filterByNumOrdre('%fooValue%'); // WHERE Num_ordre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numOrdre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLigneDAQuery The current query, for fluid interface
     */
    public function filterByNumOrdre($numOrdre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numOrdre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numOrdre)) {
                $numOrdre = str_replace('*', '%', $numOrdre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLigneDAPeer::NUM_ORDRE, $numOrdre, $comparison);
    }

    /**
     * Filter the query on the code_article_specifique column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeArticleSpecifique('fooValue');   // WHERE code_article_specifique = 'fooValue'
     * $query->filterByCodeArticleSpecifique('%fooValue%'); // WHERE code_article_specifique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeArticleSpecifique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLigneDAQuery The current query, for fluid interface
     */
    public function filterByCodeArticleSpecifique($codeArticleSpecifique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeArticleSpecifique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeArticleSpecifique)) {
                $codeArticleSpecifique = str_replace('*', '%', $codeArticleSpecifique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLigneDAPeer::CODE_ARTICLE_SPECIFIQUE, $codeArticleSpecifique, $comparison);
    }

    /**
     * Filter the query on the libelle_article_specifique column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleArticleSpecifique('fooValue');   // WHERE libelle_article_specifique = 'fooValue'
     * $query->filterByLibelleArticleSpecifique('%fooValue%'); // WHERE libelle_article_specifique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleArticleSpecifique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLigneDAQuery The current query, for fluid interface
     */
    public function filterByLibelleArticleSpecifique($libelleArticleSpecifique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleArticleSpecifique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleArticleSpecifique)) {
                $libelleArticleSpecifique = str_replace('*', '%', $libelleArticleSpecifique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLigneDAPeer::LIBELLE_ARTICLE_SPECIFIQUE, $libelleArticleSpecifique, $comparison);
    }

    /**
     * Filter the query on the detail_article_specifique column
     *
     * Example usage:
     * <code>
     * $query->filterByDetailArticleSpecifique('fooValue');   // WHERE detail_article_specifique = 'fooValue'
     * $query->filterByDetailArticleSpecifique('%fooValue%'); // WHERE detail_article_specifique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $detailArticleSpecifique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLigneDAQuery The current query, for fluid interface
     */
    public function filterByDetailArticleSpecifique($detailArticleSpecifique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($detailArticleSpecifique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $detailArticleSpecifique)) {
                $detailArticleSpecifique = str_replace('*', '%', $detailArticleSpecifique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLigneDAPeer::DETAIL_ARTICLE_SPECIFIQUE, $detailArticleSpecifique, $comparison);
    }

    /**
     * Filter the query on the quantite column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantite(1234); // WHERE quantite = 1234
     * $query->filterByQuantite(array(12, 34)); // WHERE quantite IN (12, 34)
     * $query->filterByQuantite(array('min' => 12)); // WHERE quantite >= 12
     * $query->filterByQuantite(array('max' => 12)); // WHERE quantite <= 12
     * </code>
     *
     * @param     mixed $quantite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLigneDAQuery The current query, for fluid interface
     */
    public function filterByQuantite($quantite = null, $comparison = null)
    {
        if (is_array($quantite)) {
            $useMinMax = false;
            if (isset($quantite['min'])) {
                $this->addUsingAlias(CommonLigneDAPeer::QUANTITE, $quantite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantite['max'])) {
                $this->addUsingAlias(CommonLigneDAPeer::QUANTITE, $quantite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonLigneDAPeer::QUANTITE, $quantite, $comparison);
    }

    /**
     * Filter the query on the unite column
     *
     * Example usage:
     * <code>
     * $query->filterByUnite('fooValue');   // WHERE unite = 'fooValue'
     * $query->filterByUnite('%fooValue%'); // WHERE unite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLigneDAQuery The current query, for fluid interface
     */
    public function filterByUnite($unite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $unite)) {
                $unite = str_replace('*', '%', $unite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLigneDAPeer::UNITE, $unite, $comparison);
    }

    /**
     * Filter the query on the prix_unitaire column
     *
     * Example usage:
     * <code>
     * $query->filterByPrixUnitaire('fooValue');   // WHERE prix_unitaire = 'fooValue'
     * $query->filterByPrixUnitaire('%fooValue%'); // WHERE prix_unitaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prixUnitaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLigneDAQuery The current query, for fluid interface
     */
    public function filterByPrixUnitaire($prixUnitaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prixUnitaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prixUnitaire)) {
                $prixUnitaire = str_replace('*', '%', $prixUnitaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLigneDAPeer::PRIX_UNITAIRE, $prixUnitaire, $comparison);
    }

    /**
     * Filter the query on the Montant_total column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantTotal('fooValue');   // WHERE Montant_total = 'fooValue'
     * $query->filterByMontantTotal('%fooValue%'); // WHERE Montant_total LIKE '%fooValue%'
     * </code>
     *
     * @param     string $montantTotal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLigneDAQuery The current query, for fluid interface
     */
    public function filterByMontantTotal($montantTotal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($montantTotal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $montantTotal)) {
                $montantTotal = str_replace('*', '%', $montantTotal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLigneDAPeer::MONTANT_TOTAL, $montantTotal, $comparison);
    }

    /**
     * Filter the query on the quantite_min column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantiteMin(1234); // WHERE quantite_min = 1234
     * $query->filterByQuantiteMin(array(12, 34)); // WHERE quantite_min IN (12, 34)
     * $query->filterByQuantiteMin(array('min' => 12)); // WHERE quantite_min >= 12
     * $query->filterByQuantiteMin(array('max' => 12)); // WHERE quantite_min <= 12
     * </code>
     *
     * @param     mixed $quantiteMin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLigneDAQuery The current query, for fluid interface
     */
    public function filterByQuantiteMin($quantiteMin = null, $comparison = null)
    {
        if (is_array($quantiteMin)) {
            $useMinMax = false;
            if (isset($quantiteMin['min'])) {
                $this->addUsingAlias(CommonLigneDAPeer::QUANTITE_MIN, $quantiteMin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantiteMin['max'])) {
                $this->addUsingAlias(CommonLigneDAPeer::QUANTITE_MIN, $quantiteMin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonLigneDAPeer::QUANTITE_MIN, $quantiteMin, $comparison);
    }

    /**
     * Filter the query on the quantite_max column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantiteMax(1234); // WHERE quantite_max = 1234
     * $query->filterByQuantiteMax(array(12, 34)); // WHERE quantite_max IN (12, 34)
     * $query->filterByQuantiteMax(array('min' => 12)); // WHERE quantite_max >= 12
     * $query->filterByQuantiteMax(array('max' => 12)); // WHERE quantite_max <= 12
     * </code>
     *
     * @param     mixed $quantiteMax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLigneDAQuery The current query, for fluid interface
     */
    public function filterByQuantiteMax($quantiteMax = null, $comparison = null)
    {
        if (is_array($quantiteMax)) {
            $useMinMax = false;
            if (isset($quantiteMax['min'])) {
                $this->addUsingAlias(CommonLigneDAPeer::QUANTITE_MAX, $quantiteMax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantiteMax['max'])) {
                $this->addUsingAlias(CommonLigneDAPeer::QUANTITE_MAX, $quantiteMax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonLigneDAPeer::QUANTITE_MAX, $quantiteMax, $comparison);
    }

    /**
     * Filter the query on the DA_Consultation_ref column
     *
     * Example usage:
     * <code>
     * $query->filterByDaConsultationRef(1234); // WHERE DA_Consultation_ref = 1234
     * $query->filterByDaConsultationRef(array(12, 34)); // WHERE DA_Consultation_ref IN (12, 34)
     * $query->filterByDaConsultationRef(array('min' => 12)); // WHERE DA_Consultation_ref >= 12
     * $query->filterByDaConsultationRef(array('max' => 12)); // WHERE DA_Consultation_ref <= 12
     * </code>
     *
     * @see       filterByCommonDAConsultation()
     *
     * @param     mixed $daConsultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLigneDAQuery The current query, for fluid interface
     */
    public function filterByDaConsultationRef($daConsultationRef = null, $comparison = null)
    {
        if (is_array($daConsultationRef)) {
            $useMinMax = false;
            if (isset($daConsultationRef['min'])) {
                $this->addUsingAlias(CommonLigneDAPeer::DA_CONSULTATION_REF, $daConsultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($daConsultationRef['max'])) {
                $this->addUsingAlias(CommonLigneDAPeer::DA_CONSULTATION_REF, $daConsultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonLigneDAPeer::DA_CONSULTATION_REF, $daConsultationRef, $comparison);
    }

    /**
     * Filter the query by a related CommonDAConsultation object
     *
     * @param   CommonDAConsultation|PropelObjectCollection $commonDAConsultation The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonLigneDAQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonDAConsultation($commonDAConsultation, $comparison = null)
    {
        if ($commonDAConsultation instanceof CommonDAConsultation) {
            return $this
                ->addUsingAlias(CommonLigneDAPeer::DA_CONSULTATION_REF, $commonDAConsultation->getId(), $comparison);
        } elseif ($commonDAConsultation instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonLigneDAPeer::DA_CONSULTATION_REF, $commonDAConsultation->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonDAConsultation() only accepts arguments of type CommonDAConsultation or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonDAConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonLigneDAQuery The current query, for fluid interface
     */
    public function joinCommonDAConsultation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonDAConsultation');

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
            $this->addJoinObject($join, 'CommonDAConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonDAConsultation relation CommonDAConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonDAConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonDAConsultationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonDAConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonDAConsultation', 'CommonDAConsultationQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonLigneDA $commonLigneDA Object to remove from the list of results
     *
     * @return CommonLigneDAQuery The current query, for fluid interface
     */
    public function prune($commonLigneDA = null)
    {
        if ($commonLigneDA) {
            $this->addUsingAlias(CommonLigneDAPeer::ID, $commonLigneDA->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
